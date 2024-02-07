<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsso\V20210515;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
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
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\DisableServiceResponse;
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
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

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
        if (!Utils::empty_($endpoint)) {
            return $endpoint;
        }
        if (!Utils::isUnset($endpointMap) && !Utils::empty_(@$endpointMap[$regionId])) {
            return @$endpointMap[$regionId];
        }

        return Endpoint::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * You can add up to two SAML signing certificates.
     *   * This topic provides an example on how to add a SAML signing certificate to the directory `d-00fc2p61****`.
     *   *
     * @param AddExternalSAMLIdPCertificateRequest $request AddExternalSAMLIdPCertificateRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return AddExternalSAMLIdPCertificateResponse AddExternalSAMLIdPCertificateResponse
     */
    public function addExternalSAMLIdPCertificateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->directoryId)) {
            $query['DirectoryId'] = $request->directoryId;
        }
        if (!Utils::isUnset($request->x509Certificate)) {
            $query['X509Certificate'] = $request->x509Certificate;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddExternalSAMLIdPCertificate',
            'version'     => '2021-05-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddExternalSAMLIdPCertificateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can add up to two SAML signing certificates.
     *   * This topic provides an example on how to add a SAML signing certificate to the directory `d-00fc2p61****`.
     *   *
     * @param AddExternalSAMLIdPCertificateRequest $request AddExternalSAMLIdPCertificateRequest
     *
     * @return AddExternalSAMLIdPCertificateResponse AddExternalSAMLIdPCertificateResponse
     */
    public function addExternalSAMLIdPCertificate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addExternalSAMLIdPCertificateWithOptions($request, $runtime);
    }

    /**
     * This topic provides an example on how to add the system policy `AliyunECSFullAccess` to the access configuration `ac-00jhtfl8thteu6uj****`.
     *   *
     * @param AddPermissionPolicyToAccessConfigurationRequest $request AddPermissionPolicyToAccessConfigurationRequest
     * @param RuntimeOptions                                  $runtime runtime options for this request RuntimeOptions
     *
     * @return AddPermissionPolicyToAccessConfigurationResponse AddPermissionPolicyToAccessConfigurationResponse
     */
    public function addPermissionPolicyToAccessConfigurationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessConfigurationId)) {
            $query['AccessConfigurationId'] = $request->accessConfigurationId;
        }
        if (!Utils::isUnset($request->directoryId)) {
            $query['DirectoryId'] = $request->directoryId;
        }
        if (!Utils::isUnset($request->inlinePolicyDocument)) {
            $query['InlinePolicyDocument'] = $request->inlinePolicyDocument;
        }
        if (!Utils::isUnset($request->permissionPolicyName)) {
            $query['PermissionPolicyName'] = $request->permissionPolicyName;
        }
        if (!Utils::isUnset($request->permissionPolicyType)) {
            $query['PermissionPolicyType'] = $request->permissionPolicyType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddPermissionPolicyToAccessConfiguration',
            'version'     => '2021-05-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddPermissionPolicyToAccessConfigurationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * This topic provides an example on how to add the system policy `AliyunECSFullAccess` to the access configuration `ac-00jhtfl8thteu6uj****`.
     *   *
     * @param AddPermissionPolicyToAccessConfigurationRequest $request AddPermissionPolicyToAccessConfigurationRequest
     *
     * @return AddPermissionPolicyToAccessConfigurationResponse AddPermissionPolicyToAccessConfigurationResponse
     */
    public function addPermissionPolicyToAccessConfiguration($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addPermissionPolicyToAccessConfigurationWithOptions($request, $runtime);
    }

    /**
     * If System for Cross-domain Identity Management (SCIM) synchronization is enabled, you cannot add a user to a group that is synchronized by using SCIM.
     *   * This topic provides an example of how to add the user `u-00q8wbq42wiltcrk****` to the group `g-00jqzghi2n3o5hkh****`.
     *   *
     * @param AddUserToGroupRequest $request AddUserToGroupRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return AddUserToGroupResponse AddUserToGroupResponse
     */
    public function addUserToGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->directoryId)) {
            $query['DirectoryId'] = $request->directoryId;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddUserToGroup',
            'version'     => '2021-05-15',
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
     * If System for Cross-domain Identity Management (SCIM) synchronization is enabled, you cannot add a user to a group that is synchronized by using SCIM.
     *   * This topic provides an example of how to add the user `u-00q8wbq42wiltcrk****` to the group `g-00jqzghi2n3o5hkh****`.
     *   *
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
     * If single sign-on (SSO) logon is disabled, you can clear the configurations of a SAML IdP. If SSO logon is enabled, you cannot clear the configurations.
     *   * This topic provides an example on how to clear the configurations of the SAML IdP within the directory `d-00fc2p61****`.
     *   *
     * @param ClearExternalSAMLIdentityProviderRequest $request ClearExternalSAMLIdentityProviderRequest
     * @param RuntimeOptions                           $runtime runtime options for this request RuntimeOptions
     *
     * @return ClearExternalSAMLIdentityProviderResponse ClearExternalSAMLIdentityProviderResponse
     */
    public function clearExternalSAMLIdentityProviderWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->directoryId)) {
            $query['DirectoryId'] = $request->directoryId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ClearExternalSAMLIdentityProvider',
            'version'     => '2021-05-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ClearExternalSAMLIdentityProviderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * If single sign-on (SSO) logon is disabled, you can clear the configurations of a SAML IdP. If SSO logon is enabled, you cannot clear the configurations.
     *   * This topic provides an example on how to clear the configurations of the SAML IdP within the directory `d-00fc2p61****`.
     *   *
     * @param ClearExternalSAMLIdentityProviderRequest $request ClearExternalSAMLIdentityProviderRequest
     *
     * @return ClearExternalSAMLIdentityProviderResponse ClearExternalSAMLIdentityProviderResponse
     */
    public function clearExternalSAMLIdentityProvider($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->clearExternalSAMLIdentityProviderWithOptions($request, $runtime);
    }

    /**
     * When you call this operation, an asynchronous task is created. You can call the [GetTask](~~340670~~) operation to query the progress of the task based on the value of the `TaskId` response parameter.
     *   * For more information about how to assign permissions on an account in your resource directory, see [Overview of multi-account authorization](~~266726~~).
     *   * This topic provides an example on how to assign access permissions on the account `114240524784****` in your resource directory to the CloudSSO user `u-00q8wbq42wiltcrk****` by using the access configuration `ac-00jhtfl8thteu6uj****`. After the call is successful, the CloudSSO user can access resources within the account in the resource directory.
     *   *
     * @param CreateAccessAssignmentRequest $request CreateAccessAssignmentRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateAccessAssignmentResponse CreateAccessAssignmentResponse
     */
    public function createAccessAssignmentWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessConfigurationId)) {
            $query['AccessConfigurationId'] = $request->accessConfigurationId;
        }
        if (!Utils::isUnset($request->directoryId)) {
            $query['DirectoryId'] = $request->directoryId;
        }
        if (!Utils::isUnset($request->principalId)) {
            $query['PrincipalId'] = $request->principalId;
        }
        if (!Utils::isUnset($request->principalType)) {
            $query['PrincipalType'] = $request->principalType;
        }
        if (!Utils::isUnset($request->targetId)) {
            $query['TargetId'] = $request->targetId;
        }
        if (!Utils::isUnset($request->targetType)) {
            $query['TargetType'] = $request->targetType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateAccessAssignment',
            'version'     => '2021-05-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateAccessAssignmentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * When you call this operation, an asynchronous task is created. You can call the [GetTask](~~340670~~) operation to query the progress of the task based on the value of the `TaskId` response parameter.
     *   * For more information about how to assign permissions on an account in your resource directory, see [Overview of multi-account authorization](~~266726~~).
     *   * This topic provides an example on how to assign access permissions on the account `114240524784****` in your resource directory to the CloudSSO user `u-00q8wbq42wiltcrk****` by using the access configuration `ac-00jhtfl8thteu6uj****`. After the call is successful, the CloudSSO user can access resources within the account in the resource directory.
     *   *
     * @param CreateAccessAssignmentRequest $request CreateAccessAssignmentRequest
     *
     * @return CreateAccessAssignmentResponse CreateAccessAssignmentResponse
     */
    public function createAccessAssignment($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAccessAssignmentWithOptions($request, $runtime);
    }

    /**
     * For more information about access configurations, see [Overview of access configurations](~~266737~~).
     *   * This topic provides an example on how to create an access configuration named `ECS-Admin`.
     *   *
     * @param CreateAccessConfigurationRequest $request CreateAccessConfigurationRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateAccessConfigurationResponse CreateAccessConfigurationResponse
     */
    public function createAccessConfigurationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessConfigurationName)) {
            $query['AccessConfigurationName'] = $request->accessConfigurationName;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->directoryId)) {
            $query['DirectoryId'] = $request->directoryId;
        }
        if (!Utils::isUnset($request->relayState)) {
            $query['RelayState'] = $request->relayState;
        }
        if (!Utils::isUnset($request->sessionDuration)) {
            $query['SessionDuration'] = $request->sessionDuration;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateAccessConfiguration',
            'version'     => '2021-05-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateAccessConfigurationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * For more information about access configurations, see [Overview of access configurations](~~266737~~).
     *   * This topic provides an example on how to create an access configuration named `ECS-Admin`.
     *   *
     * @param CreateAccessConfigurationRequest $request CreateAccessConfigurationRequest
     *
     * @return CreateAccessConfigurationResponse CreateAccessConfigurationResponse
     */
    public function createAccessConfiguration($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAccessConfigurationWithOptions($request, $runtime);
    }

    /**
     * A directory is a CloudSSO instance. Before you can use CloudSSO, you must create a directory. The directory is used to manage all CloudSSO resources.
     *   * To create a directory, you must select a region. Alibaba Cloud stores data in the directory only in the region that you select. However, you can deploy Alibaba Cloud resources including Elastic Compute Service (ECS) instances and ApsaraDB RDS instances in other regions. You can also use your cloud account for logons and access the Alibaba Cloud resources in other regions. You can select a region to create a directory based on your security compliance requirements and the geographic location of specific users. If you do not have strict security compliance requirements, we recommend that you select a region that is the closest to the geographical location of the specific users. This way, access to cloud resources is accelerated. You can create the CloudSSO directory in the China (Shanghai), China (Hong Kong), US (Silicon Valley), or Germany (Frankfurt) region.
     *   * This topic provides an example on how to create a directory named `example` in the China (Shanghai) region.
     *   * ## Limits
     *   * - You can create only one directory for a management account.
     *   * - If you want to change the region of a directory, you must delete the directory and then create a directory in a different region.
     *   *
     * @param CreateDirectoryRequest $request CreateDirectoryRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateDirectoryResponse CreateDirectoryResponse
     */
    public function createDirectoryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->directoryName)) {
            $query['DirectoryName'] = $request->directoryName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateDirectory',
            'version'     => '2021-05-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateDirectoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * A directory is a CloudSSO instance. Before you can use CloudSSO, you must create a directory. The directory is used to manage all CloudSSO resources.
     *   * To create a directory, you must select a region. Alibaba Cloud stores data in the directory only in the region that you select. However, you can deploy Alibaba Cloud resources including Elastic Compute Service (ECS) instances and ApsaraDB RDS instances in other regions. You can also use your cloud account for logons and access the Alibaba Cloud resources in other regions. You can select a region to create a directory based on your security compliance requirements and the geographic location of specific users. If you do not have strict security compliance requirements, we recommend that you select a region that is the closest to the geographical location of the specific users. This way, access to cloud resources is accelerated. You can create the CloudSSO directory in the China (Shanghai), China (Hong Kong), US (Silicon Valley), or Germany (Frankfurt) region.
     *   * This topic provides an example on how to create a directory named `example` in the China (Shanghai) region.
     *   * ## Limits
     *   * - You can create only one directory for a management account.
     *   * - If you want to change the region of a directory, you must delete the directory and then create a directory in a different region.
     *   *
     * @param CreateDirectoryRequest $request CreateDirectoryRequest
     *
     * @return CreateDirectoryResponse CreateDirectoryResponse
     */
    public function createDirectory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDirectoryWithOptions($request, $runtime);
    }

    /**
     * This topic provides an example on how to create a group named `TestGroup`.
     *   *
     * @param CreateGroupRequest $request CreateGroupRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateGroupResponse CreateGroupResponse
     */
    public function createGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->directoryId)) {
            $query['DirectoryId'] = $request->directoryId;
        }
        if (!Utils::isUnset($request->groupName)) {
            $query['GroupName'] = $request->groupName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateGroup',
            'version'     => '2021-05-15',
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
     * This topic provides an example on how to create a group named `TestGroup`.
     *   *
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
     * SCIM credentials are required for SCIM synchronization. You can create up to two SCIM credentials.
     *   * This topic provides an example on how to create a SCIM credential within the directory `d-00fc2p61****`.
     *   *
     * @param CreateSCIMServerCredentialRequest $request CreateSCIMServerCredentialRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateSCIMServerCredentialResponse CreateSCIMServerCredentialResponse
     */
    public function createSCIMServerCredentialWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->directoryId)) {
            $query['DirectoryId'] = $request->directoryId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateSCIMServerCredential',
            'version'     => '2021-05-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateSCIMServerCredentialResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * SCIM credentials are required for SCIM synchronization. You can create up to two SCIM credentials.
     *   * This topic provides an example on how to create a SCIM credential within the directory `d-00fc2p61****`.
     *   *
     * @param CreateSCIMServerCredentialRequest $request CreateSCIMServerCredentialRequest
     *
     * @return CreateSCIMServerCredentialResponse CreateSCIMServerCredentialResponse
     */
    public function createSCIMServerCredential($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSCIMServerCredentialWithOptions($request, $runtime);
    }

    /**
     * This topic provides an example on how to create a user named `Alice`.
     *   *
     * @param CreateUserRequest $request CreateUserRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateUserResponse CreateUserResponse
     */
    public function createUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->directoryId)) {
            $query['DirectoryId'] = $request->directoryId;
        }
        if (!Utils::isUnset($request->displayName)) {
            $query['DisplayName'] = $request->displayName;
        }
        if (!Utils::isUnset($request->email)) {
            $query['Email'] = $request->email;
        }
        if (!Utils::isUnset($request->firstName)) {
            $query['FirstName'] = $request->firstName;
        }
        if (!Utils::isUnset($request->lastName)) {
            $query['LastName'] = $request->lastName;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->userName)) {
            $query['UserName'] = $request->userName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateUser',
            'version'     => '2021-05-15',
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
     * This topic provides an example on how to create a user named `Alice`.
     *   *
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
     * @param CreateUserProvisioningRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return CreateUserProvisioningResponse
     */
    public function createUserProvisioningWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->deletionStrategy)) {
            $query['DeletionStrategy'] = $request->deletionStrategy;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->directoryId)) {
            $query['DirectoryId'] = $request->directoryId;
        }
        if (!Utils::isUnset($request->duplicationStrategy)) {
            $query['DuplicationStrategy'] = $request->duplicationStrategy;
        }
        if (!Utils::isUnset($request->principalId)) {
            $query['PrincipalId'] = $request->principalId;
        }
        if (!Utils::isUnset($request->principalType)) {
            $query['PrincipalType'] = $request->principalType;
        }
        if (!Utils::isUnset($request->targetId)) {
            $query['TargetId'] = $request->targetId;
        }
        if (!Utils::isUnset($request->targetType)) {
            $query['TargetType'] = $request->targetType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateUserProvisioning',
            'version'     => '2021-05-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateUserProvisioningResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * When you call this operation, an asynchronous task is created. You can call the [GetTask](~~340670~~) operation to query the progress of the task based on the value of the `TaskId` response parameter.
     *   * This topic provides an example on how to remove the access permissions on the account `114240524784****` in the resource directory from the CloudSSO user `u-00q8wbq42wiltcrk****`. The access permissions are assigned by using the access configuration `ac-00jhtfl8thteu6uj****`.
     *   *
     * @param DeleteAccessAssignmentRequest $request DeleteAccessAssignmentRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteAccessAssignmentResponse DeleteAccessAssignmentResponse
     */
    public function deleteAccessAssignmentWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessConfigurationId)) {
            $query['AccessConfigurationId'] = $request->accessConfigurationId;
        }
        if (!Utils::isUnset($request->deprovisionStrategy)) {
            $query['DeprovisionStrategy'] = $request->deprovisionStrategy;
        }
        if (!Utils::isUnset($request->directoryId)) {
            $query['DirectoryId'] = $request->directoryId;
        }
        if (!Utils::isUnset($request->principalId)) {
            $query['PrincipalId'] = $request->principalId;
        }
        if (!Utils::isUnset($request->principalType)) {
            $query['PrincipalType'] = $request->principalType;
        }
        if (!Utils::isUnset($request->targetId)) {
            $query['TargetId'] = $request->targetId;
        }
        if (!Utils::isUnset($request->targetType)) {
            $query['TargetType'] = $request->targetType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteAccessAssignment',
            'version'     => '2021-05-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteAccessAssignmentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * When you call this operation, an asynchronous task is created. You can call the [GetTask](~~340670~~) operation to query the progress of the task based on the value of the `TaskId` response parameter.
     *   * This topic provides an example on how to remove the access permissions on the account `114240524784****` in the resource directory from the CloudSSO user `u-00q8wbq42wiltcrk****`. The access permissions are assigned by using the access configuration `ac-00jhtfl8thteu6uj****`.
     *   *
     * @param DeleteAccessAssignmentRequest $request DeleteAccessAssignmentRequest
     *
     * @return DeleteAccessAssignmentResponse DeleteAccessAssignmentResponse
     */
    public function deleteAccessAssignment($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAccessAssignmentWithOptions($request, $runtime);
    }

    /**
     * This topic provides an example on how to delete the access configuration whose ID is `ac-001j9mcm3k7335bc****`.
     *   * ## Prerequisites
     *   * The access configuration that you want to delete is de-provisioned from the accounts in your resource directory. For more information, see [DeprovisionAccessConfiguration](~~338352~~).
     *   *
     * @param DeleteAccessConfigurationRequest $request DeleteAccessConfigurationRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteAccessConfigurationResponse DeleteAccessConfigurationResponse
     */
    public function deleteAccessConfigurationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessConfigurationId)) {
            $query['AccessConfigurationId'] = $request->accessConfigurationId;
        }
        if (!Utils::isUnset($request->directoryId)) {
            $query['DirectoryId'] = $request->directoryId;
        }
        if (!Utils::isUnset($request->forceRemovePermissionPolicies)) {
            $query['ForceRemovePermissionPolicies'] = $request->forceRemovePermissionPolicies;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteAccessConfiguration',
            'version'     => '2021-05-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteAccessConfigurationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * This topic provides an example on how to delete the access configuration whose ID is `ac-001j9mcm3k7335bc****`.
     *   * ## Prerequisites
     *   * The access configuration that you want to delete is de-provisioned from the accounts in your resource directory. For more information, see [DeprovisionAccessConfiguration](~~338352~~).
     *   *
     * @param DeleteAccessConfigurationRequest $request DeleteAccessConfigurationRequest
     *
     * @return DeleteAccessConfigurationResponse DeleteAccessConfigurationResponse
     */
    public function deleteAccessConfiguration($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAccessConfigurationWithOptions($request, $runtime);
    }

    /**
     * This topic provides an example on how to delete a directory whose ID is `d-00fc2p61****`.
     *   * ## Prerequisites
     *   * No resources are contained in the directory that you want to delete.
     *   * *   Access permissions on the accounts in your resource directory are removed from all users and groups. For more information, see [DeleteAccessAssignment](~~338350~~).
     *   * *   Users are deleted. For more information, see [DeleteUser](~~341671~~).
     *   * *   Groups are deleted. For more information, see [DeleteGroup](~~341821~~).
     *   * *   Access configurations are deleted. For more information, see [DeleteAccessConfiguration](~~336907~~).
     *   * *   System for Cross-domain Identity Management (SCIM) credentials are deleted. For more information, see [DeleteSCIMServerCredential](~~341842~~).
     *   * *   SSO logon configurations are deleted. For more information, see [ClearExternalSAMLIdentityProvider](~~341573~~).
     *   *
     * @param DeleteDirectoryRequest $request DeleteDirectoryRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteDirectoryResponse DeleteDirectoryResponse
     */
    public function deleteDirectoryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->directoryId)) {
            $query['DirectoryId'] = $request->directoryId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteDirectory',
            'version'     => '2021-05-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteDirectoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * This topic provides an example on how to delete a directory whose ID is `d-00fc2p61****`.
     *   * ## Prerequisites
     *   * No resources are contained in the directory that you want to delete.
     *   * *   Access permissions on the accounts in your resource directory are removed from all users and groups. For more information, see [DeleteAccessAssignment](~~338350~~).
     *   * *   Users are deleted. For more information, see [DeleteUser](~~341671~~).
     *   * *   Groups are deleted. For more information, see [DeleteGroup](~~341821~~).
     *   * *   Access configurations are deleted. For more information, see [DeleteAccessConfiguration](~~336907~~).
     *   * *   System for Cross-domain Identity Management (SCIM) credentials are deleted. For more information, see [DeleteSCIMServerCredential](~~341842~~).
     *   * *   SSO logon configurations are deleted. For more information, see [ClearExternalSAMLIdentityProvider](~~341573~~).
     *   *
     * @param DeleteDirectoryRequest $request DeleteDirectoryRequest
     *
     * @return DeleteDirectoryResponse DeleteDirectoryResponse
     */
    public function deleteDirectory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDirectoryWithOptions($request, $runtime);
    }

    /**
     * If System for Cross-domain Identity Management (SCIM) synchronization is enabled, you cannot delete a group that is synchronized by using SCIM.
     *   * ## Prerequisites
     *   * The group that you want to delete is not associated with the following resources. If the group is associated with the resources, the deletion fails.
     *   * *   Users: You must remove users from the group. For more information, see [RemoveUserFromGroup](~~335116~~).
     *   * *   Access permissions: You must remove the access permissions on the accounts in your resource directory from the group. For more information, see [DeleteAccessAssignment](~~338350~~).
     *   *
     * @param DeleteGroupRequest $request DeleteGroupRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteGroupResponse DeleteGroupResponse
     */
    public function deleteGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->directoryId)) {
            $query['DirectoryId'] = $request->directoryId;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteGroup',
            'version'     => '2021-05-15',
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
     * If System for Cross-domain Identity Management (SCIM) synchronization is enabled, you cannot delete a group that is synchronized by using SCIM.
     *   * ## Prerequisites
     *   * The group that you want to delete is not associated with the following resources. If the group is associated with the resources, the deletion fails.
     *   * *   Users: You must remove users from the group. For more information, see [RemoveUserFromGroup](~~335116~~).
     *   * *   Access permissions: You must remove the access permissions on the accounts in your resource directory from the group. For more information, see [DeleteAccessAssignment](~~338350~~).
     *   *
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
     * This topic provides an example on how to unbind the MFA device `mfa-00ujhet8pycljj7j****` from the user `u-00q8wbq42wiltcrk****`.
     *   *
     * @param DeleteMFADeviceForUserRequest $request DeleteMFADeviceForUserRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteMFADeviceForUserResponse DeleteMFADeviceForUserResponse
     */
    public function deleteMFADeviceForUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->directoryId)) {
            $query['DirectoryId'] = $request->directoryId;
        }
        if (!Utils::isUnset($request->MFADeviceId)) {
            $query['MFADeviceId'] = $request->MFADeviceId;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteMFADeviceForUser',
            'version'     => '2021-05-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteMFADeviceForUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * This topic provides an example on how to unbind the MFA device `mfa-00ujhet8pycljj7j****` from the user `u-00q8wbq42wiltcrk****`.
     *   *
     * @param DeleteMFADeviceForUserRequest $request DeleteMFADeviceForUserRequest
     *
     * @return DeleteMFADeviceForUserResponse DeleteMFADeviceForUserResponse
     */
    public function deleteMFADeviceForUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteMFADeviceForUserWithOptions($request, $runtime);
    }

    /**
     * After a SCIM credential is deleted, the synchronization task that uses the SCIM credential fails.
     *   * This topic provides an example on how to delete the SCIM credential whose ID is `scimcred-004whl0kvfwcypbi****`.
     *   *
     * @param DeleteSCIMServerCredentialRequest $request DeleteSCIMServerCredentialRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteSCIMServerCredentialResponse DeleteSCIMServerCredentialResponse
     */
    public function deleteSCIMServerCredentialWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->credentialId)) {
            $query['CredentialId'] = $request->credentialId;
        }
        if (!Utils::isUnset($request->directoryId)) {
            $query['DirectoryId'] = $request->directoryId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteSCIMServerCredential',
            'version'     => '2021-05-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteSCIMServerCredentialResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * After a SCIM credential is deleted, the synchronization task that uses the SCIM credential fails.
     *   * This topic provides an example on how to delete the SCIM credential whose ID is `scimcred-004whl0kvfwcypbi****`.
     *   *
     * @param DeleteSCIMServerCredentialRequest $request DeleteSCIMServerCredentialRequest
     *
     * @return DeleteSCIMServerCredentialResponse DeleteSCIMServerCredentialResponse
     */
    public function deleteSCIMServerCredential($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteSCIMServerCredentialWithOptions($request, $runtime);
    }

    /**
     * If System for Cross-domain Identity Management (SCIM) synchronization is enabled, you cannot delete a user that is synchronized by using SCIM.
     *   * ## Prerequisites
     *   * The user that you want to delete is not associated with the following resources. If the user is associated with the resources, the deletion fails.
     *   * *   Multi-factor authentication (MFA) devices: You must unbind the MFA devices from the user. For more information, see [DeleteMFADeviceForUser](~~341675~~).
     *   * *   Access permissions: You must remove the access permissions on the accounts in your resource directory from the user. For more information, see [DeleteAccessAssignment](~~338350~~).
     *   * *   Groups: You must remove the user from groups. For more information, see [RemoveUserFromGroup](~~335116~~).
     *   *
     * @param DeleteUserRequest $request DeleteUserRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteUserResponse DeleteUserResponse
     */
    public function deleteUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->directoryId)) {
            $query['DirectoryId'] = $request->directoryId;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteUser',
            'version'     => '2021-05-15',
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
     * If System for Cross-domain Identity Management (SCIM) synchronization is enabled, you cannot delete a user that is synchronized by using SCIM.
     *   * ## Prerequisites
     *   * The user that you want to delete is not associated with the following resources. If the user is associated with the resources, the deletion fails.
     *   * *   Multi-factor authentication (MFA) devices: You must unbind the MFA devices from the user. For more information, see [DeleteMFADeviceForUser](~~341675~~).
     *   * *   Access permissions: You must remove the access permissions on the accounts in your resource directory from the user. For more information, see [DeleteAccessAssignment](~~338350~~).
     *   * *   Groups: You must remove the user from groups. For more information, see [RemoveUserFromGroup](~~335116~~).
     *   *
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
     * @param DeleteUserProvisioningRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DeleteUserProvisioningResponse
     */
    public function deleteUserProvisioningWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->deletionStrategy)) {
            $query['DeletionStrategy'] = $request->deletionStrategy;
        }
        if (!Utils::isUnset($request->directoryId)) {
            $query['DirectoryId'] = $request->directoryId;
        }
        if (!Utils::isUnset($request->userProvisioningId)) {
            $query['UserProvisioningId'] = $request->userProvisioningId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteUserProvisioning',
            'version'     => '2021-05-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteUserProvisioningResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param DeleteUserProvisioningEventRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DeleteUserProvisioningEventResponse
     */
    public function deleteUserProvisioningEventWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->directoryId)) {
            $query['DirectoryId'] = $request->directoryId;
        }
        if (!Utils::isUnset($request->eventId)) {
            $query['EventId'] = $request->eventId;
        }
        if (!Utils::isUnset($request->userProvisioningId)) {
            $query['UserProvisioningId'] = $request->userProvisioningId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteUserProvisioningEvent',
            'version'     => '2021-05-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteUserProvisioningEventResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * When you call this operation, an asynchronous task is automatically created. You can call the [GetTask](~~340670~~) operation to query the progress of the task based on the value of the `TaskId` response parameter.
     *   * This topic provides an example on how to de-provision the access configuration `ac-00jhtfl8thteu6uj****` from the account `114240524784****` in your resource directory.
     *   *
     * @param DeprovisionAccessConfigurationRequest $request DeprovisionAccessConfigurationRequest
     * @param RuntimeOptions                        $runtime runtime options for this request RuntimeOptions
     *
     * @return DeprovisionAccessConfigurationResponse DeprovisionAccessConfigurationResponse
     */
    public function deprovisionAccessConfigurationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessConfigurationId)) {
            $query['AccessConfigurationId'] = $request->accessConfigurationId;
        }
        if (!Utils::isUnset($request->directoryId)) {
            $query['DirectoryId'] = $request->directoryId;
        }
        if (!Utils::isUnset($request->targetId)) {
            $query['TargetId'] = $request->targetId;
        }
        if (!Utils::isUnset($request->targetType)) {
            $query['TargetType'] = $request->targetType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeprovisionAccessConfiguration',
            'version'     => '2021-05-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeprovisionAccessConfigurationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * When you call this operation, an asynchronous task is automatically created. You can call the [GetTask](~~340670~~) operation to query the progress of the task based on the value of the `TaskId` response parameter.
     *   * This topic provides an example on how to de-provision the access configuration `ac-00jhtfl8thteu6uj****` from the account `114240524784****` in your resource directory.
     *   *
     * @param DeprovisionAccessConfigurationRequest $request DeprovisionAccessConfigurationRequest
     *
     * @return DeprovisionAccessConfigurationResponse DeprovisionAccessConfigurationResponse
     */
    public function deprovisionAccessConfiguration($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deprovisionAccessConfigurationWithOptions($request, $runtime);
    }

    /**
     * If your CloudSSO has no directory, you can disable CloudSSO based on your business requirements. After you disable CloudSSO, you can enable it at any time.
     *   *
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return DisableServiceResponse DisableServiceResponse
     */
    public function disableServiceWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'DisableService',
            'version'     => '2021-05-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DisableServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * If your CloudSSO has no directory, you can disable CloudSSO based on your business requirements. After you disable CloudSSO, you can enable it at any time.
     *   *
     * @return DisableServiceResponse DisableServiceResponse
     */
    public function disableService()
    {
        $runtime = new RuntimeOptions([]);

        return $this->disableServiceWithOptions($runtime);
    }

    /**
     * You can call this operation only if your account belongs to the management account that is used to enable a resource directory and has permissions to enable CloudSSO. For more information, see [Enable CloudSSO](~~262819~~).
     *   * If you call this operation, you agree to the [Alibaba Cloud International Website Product Terms of Service](https://www.alibabacloud.com/help/doc-detail/42416.htm).
     *   *
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return EnableServiceResponse EnableServiceResponse
     */
    public function enableServiceWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'EnableService',
            'version'     => '2021-05-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return EnableServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can call this operation only if your account belongs to the management account that is used to enable a resource directory and has permissions to enable CloudSSO. For more information, see [Enable CloudSSO](~~262819~~).
     *   * If you call this operation, you agree to the [Alibaba Cloud International Website Product Terms of Service](https://www.alibabacloud.com/help/doc-detail/42416.htm).
     *   *
     * @return EnableServiceResponse EnableServiceResponse
     */
    public function enableService()
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableServiceWithOptions($runtime);
    }

    /**
     * This topic provides an example on how to query the information about the access configuration whose ID is `ac-00ccule7tadaijxc****`.
     *   *
     * @param GetAccessConfigurationRequest $request GetAccessConfigurationRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return GetAccessConfigurationResponse GetAccessConfigurationResponse
     */
    public function getAccessConfigurationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessConfigurationId)) {
            $query['AccessConfigurationId'] = $request->accessConfigurationId;
        }
        if (!Utils::isUnset($request->directoryId)) {
            $query['DirectoryId'] = $request->directoryId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetAccessConfiguration',
            'version'     => '2021-05-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetAccessConfigurationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * This topic provides an example on how to query the information about the access configuration whose ID is `ac-00ccule7tadaijxc****`.
     *   *
     * @param GetAccessConfigurationRequest $request GetAccessConfigurationRequest
     *
     * @return GetAccessConfigurationResponse GetAccessConfigurationResponse
     */
    public function getAccessConfiguration($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAccessConfigurationWithOptions($request, $runtime);
    }

    /**
     * This topic provides an example on how to query information about the directory whose ID is `d-00fc2p61****`.
     *   *
     * @param GetDirectoryRequest $request GetDirectoryRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return GetDirectoryResponse GetDirectoryResponse
     */
    public function getDirectoryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->directoryId)) {
            $query['DirectoryId'] = $request->directoryId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetDirectory',
            'version'     => '2021-05-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetDirectoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * This topic provides an example on how to query information about the directory whose ID is `d-00fc2p61****`.
     *   *
     * @param GetDirectoryRequest $request GetDirectoryRequest
     *
     * @return GetDirectoryResponse GetDirectoryResponse
     */
    public function getDirectory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDirectoryWithOptions($request, $runtime);
    }

    /**
     * During SAML 2.0-based single sign-on (SSO) logon, CloudSSO is an SP, and the identity management system of an enterprise is an identity provider (IdP).
     *   * This topic provides an example on how to query the information about the SP within the directory `d-00fc2p61****`.
     *   *
     * @param GetDirectorySAMLServiceProviderInfoRequest $request GetDirectorySAMLServiceProviderInfoRequest
     * @param RuntimeOptions                             $runtime runtime options for this request RuntimeOptions
     *
     * @return GetDirectorySAMLServiceProviderInfoResponse GetDirectorySAMLServiceProviderInfoResponse
     */
    public function getDirectorySAMLServiceProviderInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->directoryId)) {
            $query['DirectoryId'] = $request->directoryId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetDirectorySAMLServiceProviderInfo',
            'version'     => '2021-05-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetDirectorySAMLServiceProviderInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * During SAML 2.0-based single sign-on (SSO) logon, CloudSSO is an SP, and the identity management system of an enterprise is an identity provider (IdP).
     *   * This topic provides an example on how to query the information about the SP within the directory `d-00fc2p61****`.
     *   *
     * @param GetDirectorySAMLServiceProviderInfoRequest $request GetDirectorySAMLServiceProviderInfoRequest
     *
     * @return GetDirectorySAMLServiceProviderInfoResponse GetDirectorySAMLServiceProviderInfoResponse
     */
    public function getDirectorySAMLServiceProviderInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDirectorySAMLServiceProviderInfoWithOptions($request, $runtime);
    }

    /**
     * ### [](#)
     *   * This topic provides an example on how to query the statistics of a directory whose ID is `d-00fc2p61****`. The statistics include the number of users, quota for users, number of groups, quota for groups, number of access configurations, quota for access configurations, quota for system policies that can be configured for an access configuration, number of access permissions that are assigned, number of System for Cross-domain Identity Management (SCIM) credentials, number of asynchronous tasks, status of single sign-on (SSO), and status of SCIM synchronization.
     *   * ### [](#qps)Limit
     *   * You can call this operation up to 100 times per second per account. This operation is globally limited to 100 times per second across all accounts. If the number of the calls per second exceeds a limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limits when you call this operation.
     *   *
     * @param GetDirectoryStatisticsRequest $request GetDirectoryStatisticsRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return GetDirectoryStatisticsResponse GetDirectoryStatisticsResponse
     */
    public function getDirectoryStatisticsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->directoryId)) {
            $query['DirectoryId'] = $request->directoryId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetDirectoryStatistics',
            'version'     => '2021-05-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetDirectoryStatisticsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ### [](#)
     *   * This topic provides an example on how to query the statistics of a directory whose ID is `d-00fc2p61****`. The statistics include the number of users, quota for users, number of groups, quota for groups, number of access configurations, quota for access configurations, quota for system policies that can be configured for an access configuration, number of access permissions that are assigned, number of System for Cross-domain Identity Management (SCIM) credentials, number of asynchronous tasks, status of single sign-on (SSO), and status of SCIM synchronization.
     *   * ### [](#qps)Limit
     *   * You can call this operation up to 100 times per second per account. This operation is globally limited to 100 times per second across all accounts. If the number of the calls per second exceeds a limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limits when you call this operation.
     *   *
     * @param GetDirectoryStatisticsRequest $request GetDirectoryStatisticsRequest
     *
     * @return GetDirectoryStatisticsResponse GetDirectoryStatisticsResponse
     */
    public function getDirectoryStatistics($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDirectoryStatisticsWithOptions($request, $runtime);
    }

    /**
     * This topic provides an example on how to query the configurations of the SAML IdP within the directory `d-00fc2p61****`.
     *   *
     * @param GetExternalSAMLIdentityProviderRequest $request GetExternalSAMLIdentityProviderRequest
     * @param RuntimeOptions                         $runtime runtime options for this request RuntimeOptions
     *
     * @return GetExternalSAMLIdentityProviderResponse GetExternalSAMLIdentityProviderResponse
     */
    public function getExternalSAMLIdentityProviderWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->directoryId)) {
            $query['DirectoryId'] = $request->directoryId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetExternalSAMLIdentityProvider',
            'version'     => '2021-05-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetExternalSAMLIdentityProviderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * This topic provides an example on how to query the configurations of the SAML IdP within the directory `d-00fc2p61****`.
     *   *
     * @param GetExternalSAMLIdentityProviderRequest $request GetExternalSAMLIdentityProviderRequest
     *
     * @return GetExternalSAMLIdentityProviderResponse GetExternalSAMLIdentityProviderResponse
     */
    public function getExternalSAMLIdentityProvider($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getExternalSAMLIdentityProviderWithOptions($request, $runtime);
    }

    /**
     * This topic provides an example on how to query the information about the group `g-00jqzghi2n3o5hkh****` in the directory `d-00fc2p61****`.
     *   *
     * @param GetGroupRequest $request GetGroupRequest
     * @param RuntimeOptions  $runtime runtime options for this request RuntimeOptions
     *
     * @return GetGroupResponse GetGroupResponse
     */
    public function getGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->directoryId)) {
            $query['DirectoryId'] = $request->directoryId;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetGroup',
            'version'     => '2021-05-15',
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
     * This topic provides an example on how to query the information about the group `g-00jqzghi2n3o5hkh****` in the directory `d-00fc2p61****`.
     *   *
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
     * @param GetLoginPreferenceRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GetLoginPreferenceResponse
     */
    public function getLoginPreferenceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->directoryId)) {
            $query['DirectoryId'] = $request->directoryId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetLoginPreference',
            'version'     => '2021-05-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetLoginPreferenceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * If you enable username-password logon for CloudSSO users, you can also configure MFA for the users.
     *   * This topic provides an example on how to query the MFA setting of all CloudSSO users that belong to the directory named `00q8wbq42wiltcrk****`.
     *   *
     * @param GetMFAAuthenticationSettingInfoRequest $request GetMFAAuthenticationSettingInfoRequest
     * @param RuntimeOptions                         $runtime runtime options for this request RuntimeOptions
     *
     * @return GetMFAAuthenticationSettingInfoResponse GetMFAAuthenticationSettingInfoResponse
     */
    public function getMFAAuthenticationSettingInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->directoryId)) {
            $query['DirectoryId'] = $request->directoryId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetMFAAuthenticationSettingInfo',
            'version'     => '2021-05-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetMFAAuthenticationSettingInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * If you enable username-password logon for CloudSSO users, you can also configure MFA for the users.
     *   * This topic provides an example on how to query the MFA setting of all CloudSSO users that belong to the directory named `00q8wbq42wiltcrk****`.
     *   *
     * @param GetMFAAuthenticationSettingInfoRequest $request GetMFAAuthenticationSettingInfoRequest
     *
     * @return GetMFAAuthenticationSettingInfoResponse GetMFAAuthenticationSettingInfoResponse
     */
    public function getMFAAuthenticationSettingInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getMFAAuthenticationSettingInfoWithOptions($request, $runtime);
    }

    /**
     * > This operation is no longer maintained and updated. You can call the [GetMFAAuthenticationSettingInfo](~~611286~~) operation to query more detailed information.
     *   * This topic provides an example on how to query the MFA setting of the users that belong to the directory named `d-00fc2p61****`. The returned result shows that MFA is enabled for all the users.
     *   *
     * @param GetMFAAuthenticationSettingsRequest $request GetMFAAuthenticationSettingsRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return GetMFAAuthenticationSettingsResponse GetMFAAuthenticationSettingsResponse
     */
    public function getMFAAuthenticationSettingsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->directoryId)) {
            $query['DirectoryId'] = $request->directoryId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetMFAAuthenticationSettings',
            'version'     => '2021-05-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetMFAAuthenticationSettingsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * > This operation is no longer maintained and updated. You can call the [GetMFAAuthenticationSettingInfo](~~611286~~) operation to query more detailed information.
     *   * This topic provides an example on how to query the MFA setting of the users that belong to the directory named `d-00fc2p61****`. The returned result shows that MFA is enabled for all the users.
     *   *
     * @param GetMFAAuthenticationSettingsRequest $request GetMFAAuthenticationSettingsRequest
     *
     * @return GetMFAAuthenticationSettingsResponse GetMFAAuthenticationSettingsResponse
     */
    public function getMFAAuthenticationSettings($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getMFAAuthenticationSettingsWithOptions($request, $runtime);
    }

    /**
     * This topic provides an example on how to check whether MFA is enabled for users in the directory whose ID is `00fc2p61****`. The returned result shows that MFA is in the Enabled state.
     *   *
     * @param GetMFAAuthenticationStatusRequest $request GetMFAAuthenticationStatusRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return GetMFAAuthenticationStatusResponse GetMFAAuthenticationStatusResponse
     */
    public function getMFAAuthenticationStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->directoryId)) {
            $query['DirectoryId'] = $request->directoryId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetMFAAuthenticationStatus',
            'version'     => '2021-05-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetMFAAuthenticationStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * This topic provides an example on how to check whether MFA is enabled for users in the directory whose ID is `00fc2p61****`. The returned result shows that MFA is in the Enabled state.
     *   *
     * @param GetMFAAuthenticationStatusRequest $request GetMFAAuthenticationStatusRequest
     *
     * @return GetMFAAuthenticationStatusResponse GetMFAAuthenticationStatusResponse
     */
    public function getMFAAuthenticationStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getMFAAuthenticationStatusWithOptions($request, $runtime);
    }

    /**
     * @param GetPasswordPolicyRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetPasswordPolicyResponse
     */
    public function getPasswordPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->directoryId)) {
            $query['DirectoryId'] = $request->directoryId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetPasswordPolicy',
            'version'     => '2021-05-15',
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
     * This topic provides an example on how to query the status of SCIM synchronization within the directory `d-00fc2p61****`. The returned result shows that SCIM synchronization is in the Enabled state.
     *   *
     * @param GetSCIMSynchronizationStatusRequest $request GetSCIMSynchronizationStatusRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return GetSCIMSynchronizationStatusResponse GetSCIMSynchronizationStatusResponse
     */
    public function getSCIMSynchronizationStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->directoryId)) {
            $query['DirectoryId'] = $request->directoryId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetSCIMSynchronizationStatus',
            'version'     => '2021-05-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetSCIMSynchronizationStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * This topic provides an example on how to query the status of SCIM synchronization within the directory `d-00fc2p61****`. The returned result shows that SCIM synchronization is in the Enabled state.
     *   *
     * @param GetSCIMSynchronizationStatusRequest $request GetSCIMSynchronizationStatusRequest
     *
     * @return GetSCIMSynchronizationStatusResponse GetSCIMSynchronizationStatusResponse
     */
    public function getSCIMSynchronizationStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSCIMSynchronizationStatusWithOptions($request, $runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return GetServiceStatusResponse
     */
    public function getServiceStatusWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'GetServiceStatus',
            'version'     => '2021-05-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetServiceStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return GetServiceStatusResponse
     */
    public function getServiceStatus()
    {
        $runtime = new RuntimeOptions([]);

        return $this->getServiceStatusWithOptions($runtime);
    }

    /**
     * This topic provides an example on how to query the information about the task whose ID is `t-shfqw1u1edszvxw5****`.
     *   *
     * @param GetTaskRequest $request GetTaskRequest
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return GetTaskResponse GetTaskResponse
     */
    public function getTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->directoryId)) {
            $query['DirectoryId'] = $request->directoryId;
        }
        if (!Utils::isUnset($request->taskId)) {
            $query['TaskId'] = $request->taskId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetTask',
            'version'     => '2021-05-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * This topic provides an example on how to query the information about the task whose ID is `t-shfqw1u1edszvxw5****`.
     *   *
     * @param GetTaskRequest $request GetTaskRequest
     *
     * @return GetTaskResponse GetTaskResponse
     */
    public function getTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTaskWithOptions($request, $runtime);
    }

    /**
     * You can call the GetTaskStatus operation to query the status of an asynchronous task. If you want to query more information about an asynchronous task, call the [GetTask](~~340670~~) operation.
     *   * This topic provides an example on how to query the information about the task whose ID is `t-shfqw1u1edszvxw5****`.
     *   *
     * @param GetTaskStatusRequest $request GetTaskStatusRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return GetTaskStatusResponse GetTaskStatusResponse
     */
    public function getTaskStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->directoryId)) {
            $query['DirectoryId'] = $request->directoryId;
        }
        if (!Utils::isUnset($request->taskId)) {
            $query['TaskId'] = $request->taskId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetTaskStatus',
            'version'     => '2021-05-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetTaskStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can call the GetTaskStatus operation to query the status of an asynchronous task. If you want to query more information about an asynchronous task, call the [GetTask](~~340670~~) operation.
     *   * This topic provides an example on how to query the information about the task whose ID is `t-shfqw1u1edszvxw5****`.
     *   *
     * @param GetTaskStatusRequest $request GetTaskStatusRequest
     *
     * @return GetTaskStatusResponse GetTaskStatusResponse
     */
    public function getTaskStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTaskStatusWithOptions($request, $runtime);
    }

    /**
     * This topic provides an example on how to query information about the user whose ID is `u-00q8wbq42wiltcrk****` in the `d-00fc2p61****` directory.
     *   *
     * @param GetUserRequest $request GetUserRequest
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return GetUserResponse GetUserResponse
     */
    public function getUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->directoryId)) {
            $query['DirectoryId'] = $request->directoryId;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetUser',
            'version'     => '2021-05-15',
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
     * This topic provides an example on how to query information about the user whose ID is `u-00q8wbq42wiltcrk****` in the `d-00fc2p61****` directory.
     *   *
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
     * This topic provides an example on how to query the MFA setting of the user named `u-00q8wbq42wiltcrk****`. The returned result shows that MFA is enabled for the user.
     *   *
     * @param GetUserMFAAuthenticationSettingsRequest $request GetUserMFAAuthenticationSettingsRequest
     * @param RuntimeOptions                          $runtime runtime options for this request RuntimeOptions
     *
     * @return GetUserMFAAuthenticationSettingsResponse GetUserMFAAuthenticationSettingsResponse
     */
    public function getUserMFAAuthenticationSettingsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->directoryId)) {
            $query['DirectoryId'] = $request->directoryId;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetUserMFAAuthenticationSettings',
            'version'     => '2021-05-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetUserMFAAuthenticationSettingsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * This topic provides an example on how to query the MFA setting of the user named `u-00q8wbq42wiltcrk****`. The returned result shows that MFA is enabled for the user.
     *   *
     * @param GetUserMFAAuthenticationSettingsRequest $request GetUserMFAAuthenticationSettingsRequest
     *
     * @return GetUserMFAAuthenticationSettingsResponse GetUserMFAAuthenticationSettingsResponse
     */
    public function getUserMFAAuthenticationSettings($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getUserMFAAuthenticationSettingsWithOptions($request, $runtime);
    }

    /**
     * @param GetUserProvisioningRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GetUserProvisioningResponse
     */
    public function getUserProvisioningWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->directoryId)) {
            $query['DirectoryId'] = $request->directoryId;
        }
        if (!Utils::isUnset($request->userProvisioningId)) {
            $query['UserProvisioningId'] = $request->userProvisioningId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetUserProvisioning',
            'version'     => '2021-05-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetUserProvisioningResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param GetUserProvisioningConfigurationRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return GetUserProvisioningConfigurationResponse
     */
    public function getUserProvisioningConfigurationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->directoryId)) {
            $query['DirectoryId'] = $request->directoryId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetUserProvisioningConfiguration',
            'version'     => '2021-05-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetUserProvisioningConfigurationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param GetUserProvisioningEventRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return GetUserProvisioningEventResponse
     */
    public function getUserProvisioningEventWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->directoryId)) {
            $query['DirectoryId'] = $request->directoryId;
        }
        if (!Utils::isUnset($request->eventId)) {
            $query['EventId'] = $request->eventId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetUserProvisioningEvent',
            'version'     => '2021-05-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetUserProvisioningEventResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param GetUserProvisioningRdAccountStatisticsRequest $request
     * @param RuntimeOptions                                $runtime
     *
     * @return GetUserProvisioningRdAccountStatisticsResponse
     */
    public function getUserProvisioningRdAccountStatisticsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->directoryId)) {
            $query['DirectoryId'] = $request->directoryId;
        }
        if (!Utils::isUnset($request->rdMemberId)) {
            $query['RdMemberId'] = $request->rdMemberId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetUserProvisioningRdAccountStatistics',
            'version'     => '2021-05-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetUserProvisioningRdAccountStatisticsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param GetUserProvisioningStatisticsRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return GetUserProvisioningStatisticsResponse
     */
    public function getUserProvisioningStatisticsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->directoryId)) {
            $query['DirectoryId'] = $request->directoryId;
        }
        if (!Utils::isUnset($request->userProvisioningId)) {
            $query['UserProvisioningId'] = $request->userProvisioningId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetUserProvisioningStatistics',
            'version'     => '2021-05-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetUserProvisioningStatisticsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * This topic provides an example on how to query the assigned access permissions on the account `114240524784****` in your resource directory. The returned result shows that access permissions on the account in your resource directory is assigned to one user.
     *   *
     * @param ListAccessAssignmentsRequest $request ListAccessAssignmentsRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return ListAccessAssignmentsResponse ListAccessAssignmentsResponse
     */
    public function listAccessAssignmentsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessConfigurationId)) {
            $query['AccessConfigurationId'] = $request->accessConfigurationId;
        }
        if (!Utils::isUnset($request->directoryId)) {
            $query['DirectoryId'] = $request->directoryId;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->principalId)) {
            $query['PrincipalId'] = $request->principalId;
        }
        if (!Utils::isUnset($request->principalType)) {
            $query['PrincipalType'] = $request->principalType;
        }
        if (!Utils::isUnset($request->targetId)) {
            $query['TargetId'] = $request->targetId;
        }
        if (!Utils::isUnset($request->targetType)) {
            $query['TargetType'] = $request->targetType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListAccessAssignments',
            'version'     => '2021-05-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListAccessAssignmentsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * This topic provides an example on how to query the assigned access permissions on the account `114240524784****` in your resource directory. The returned result shows that access permissions on the account in your resource directory is assigned to one user.
     *   *
     * @param ListAccessAssignmentsRequest $request ListAccessAssignmentsRequest
     *
     * @return ListAccessAssignmentsResponse ListAccessAssignmentsResponse
     */
    public function listAccessAssignments($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAccessAssignmentsWithOptions($request, $runtime);
    }

    /**
     * This topic provides an example on how to query the accounts for which the access permission `ac-00ccule7tadaijxc****` is provisioned. The returned result shows that the access configuration is provisioned for two accounts in your resource directory.
     *   *
     * @param ListAccessConfigurationProvisioningsRequest $request ListAccessConfigurationProvisioningsRequest
     * @param RuntimeOptions                              $runtime runtime options for this request RuntimeOptions
     *
     * @return ListAccessConfigurationProvisioningsResponse ListAccessConfigurationProvisioningsResponse
     */
    public function listAccessConfigurationProvisioningsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessConfigurationId)) {
            $query['AccessConfigurationId'] = $request->accessConfigurationId;
        }
        if (!Utils::isUnset($request->directoryId)) {
            $query['DirectoryId'] = $request->directoryId;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->provisioningStatus)) {
            $query['ProvisioningStatus'] = $request->provisioningStatus;
        }
        if (!Utils::isUnset($request->targetId)) {
            $query['TargetId'] = $request->targetId;
        }
        if (!Utils::isUnset($request->targetType)) {
            $query['TargetType'] = $request->targetType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListAccessConfigurationProvisionings',
            'version'     => '2021-05-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListAccessConfigurationProvisioningsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * This topic provides an example on how to query the accounts for which the access permission `ac-00ccule7tadaijxc****` is provisioned. The returned result shows that the access configuration is provisioned for two accounts in your resource directory.
     *   *
     * @param ListAccessConfigurationProvisioningsRequest $request ListAccessConfigurationProvisioningsRequest
     *
     * @return ListAccessConfigurationProvisioningsResponse ListAccessConfigurationProvisioningsResponse
     */
    public function listAccessConfigurationProvisionings($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAccessConfigurationProvisioningsWithOptions($request, $runtime);
    }

    /**
     * This topic provides an example on how to query the access configurations within the directory `d-00fc2p61****`. The returned result shows that the directory contains the `VPC-Admin` and `ECS-Admin` access configurations.
     *   *
     * @param ListAccessConfigurationsRequest $request ListAccessConfigurationsRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return ListAccessConfigurationsResponse ListAccessConfigurationsResponse
     */
    public function listAccessConfigurationsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->directoryId)) {
            $query['DirectoryId'] = $request->directoryId;
        }
        if (!Utils::isUnset($request->filter)) {
            $query['Filter'] = $request->filter;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->statusNotifications)) {
            $query['StatusNotifications'] = $request->statusNotifications;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListAccessConfigurations',
            'version'     => '2021-05-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListAccessConfigurationsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * This topic provides an example on how to query the access configurations within the directory `d-00fc2p61****`. The returned result shows that the directory contains the `VPC-Admin` and `ECS-Admin` access configurations.
     *   *
     * @param ListAccessConfigurationsRequest $request ListAccessConfigurationsRequest
     *
     * @return ListAccessConfigurationsResponse ListAccessConfigurationsResponse
     */
    public function listAccessConfigurations($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAccessConfigurationsWithOptions($request, $runtime);
    }

    /**
     * This topic provides an example on how to query the directories within your Alibaba Cloud account. The returned result shows that only one directory with the ID `d-00fc2p61****` is created within your Alibaba Cloud account.
     *   *
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return ListDirectoriesResponse ListDirectoriesResponse
     */
    public function listDirectoriesWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'ListDirectories',
            'version'     => '2021-05-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListDirectoriesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * This topic provides an example on how to query the directories within your Alibaba Cloud account. The returned result shows that only one directory with the ID `d-00fc2p61****` is created within your Alibaba Cloud account.
     *   *
     * @return ListDirectoriesResponse ListDirectoriesResponse
     */
    public function listDirectories()
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDirectoriesWithOptions($runtime);
    }

    /**
     * This topic provides an example on how to query the SAML signing certificates within the directory `d-00fc2p61****`. The returned result shows that the directory contains one SAML signing certificate.
     *   *
     * @param ListExternalSAMLIdPCertificatesRequest $request ListExternalSAMLIdPCertificatesRequest
     * @param RuntimeOptions                         $runtime runtime options for this request RuntimeOptions
     *
     * @return ListExternalSAMLIdPCertificatesResponse ListExternalSAMLIdPCertificatesResponse
     */
    public function listExternalSAMLIdPCertificatesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->directoryId)) {
            $query['DirectoryId'] = $request->directoryId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListExternalSAMLIdPCertificates',
            'version'     => '2021-05-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListExternalSAMLIdPCertificatesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * This topic provides an example on how to query the SAML signing certificates within the directory `d-00fc2p61****`. The returned result shows that the directory contains one SAML signing certificate.
     *   *
     * @param ListExternalSAMLIdPCertificatesRequest $request ListExternalSAMLIdPCertificatesRequest
     *
     * @return ListExternalSAMLIdPCertificatesResponse ListExternalSAMLIdPCertificatesResponse
     */
    public function listExternalSAMLIdPCertificates($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listExternalSAMLIdPCertificatesWithOptions($request, $runtime);
    }

    /**
     * This topic provides an example on how to query the users in the group `g-00jqzghi2n3o5hkh****`. The returned result shows that the group contains the user `Alice` and the user `user1`.
     *   *
     * @param ListGroupMembersRequest $request ListGroupMembersRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return ListGroupMembersResponse ListGroupMembersResponse
     */
    public function listGroupMembersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->directoryId)) {
            $query['DirectoryId'] = $request->directoryId;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListGroupMembers',
            'version'     => '2021-05-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListGroupMembersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * This topic provides an example on how to query the users in the group `g-00jqzghi2n3o5hkh****`. The returned result shows that the group contains the user `Alice` and the user `user1`.
     *   *
     * @param ListGroupMembersRequest $request ListGroupMembersRequest
     *
     * @return ListGroupMembersResponse ListGroupMembersResponse
     */
    public function listGroupMembers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listGroupMembersWithOptions($request, $runtime);
    }

    /**
     * This topic provides an example on how to query the groups in the directory `d-00fc2p61****`. The returned result shows that the directory contains three groups. The groups `group1` and `group2` are synchronized from an external identity provider (IdP). The group `TestGroup` is manually created in CloudSSO.
     *   *
     * @param ListGroupsRequest $request ListGroupsRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return ListGroupsResponse ListGroupsResponse
     */
    public function listGroupsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->directoryId)) {
            $query['DirectoryId'] = $request->directoryId;
        }
        if (!Utils::isUnset($request->filter)) {
            $query['Filter'] = $request->filter;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->provisionType)) {
            $query['ProvisionType'] = $request->provisionType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListGroups',
            'version'     => '2021-05-15',
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
     * This topic provides an example on how to query the groups in the directory `d-00fc2p61****`. The returned result shows that the directory contains three groups. The groups `group1` and `group2` are synchronized from an external identity provider (IdP). The group `TestGroup` is manually created in CloudSSO.
     *   *
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
     * This topic provides an example on how to query the groups to which the user `u-00q8wbq42wiltcrk****` is added. The returned result shows that the user is added to both the `TestGroup` and the `group1` groups.
     *   *
     * @param ListJoinedGroupsForUserRequest $request ListJoinedGroupsForUserRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return ListJoinedGroupsForUserResponse ListJoinedGroupsForUserResponse
     */
    public function listJoinedGroupsForUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->directoryId)) {
            $query['DirectoryId'] = $request->directoryId;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListJoinedGroupsForUser',
            'version'     => '2021-05-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListJoinedGroupsForUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * This topic provides an example on how to query the groups to which the user `u-00q8wbq42wiltcrk****` is added. The returned result shows that the user is added to both the `TestGroup` and the `group1` groups.
     *   *
     * @param ListJoinedGroupsForUserRequest $request ListJoinedGroupsForUserRequest
     *
     * @return ListJoinedGroupsForUserResponse ListJoinedGroupsForUserResponse
     */
    public function listJoinedGroupsForUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listJoinedGroupsForUserWithOptions($request, $runtime);
    }

    /**
     * This topic provides an example on how to query the MFA devices that are bound to the user `u-00q8wbq42wiltcrk****`. The returned result shows that the MFA device named `Alice-MFA1` is bound to the user.
     *   *
     * @param ListMFADevicesForUserRequest $request ListMFADevicesForUserRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return ListMFADevicesForUserResponse ListMFADevicesForUserResponse
     */
    public function listMFADevicesForUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->directoryId)) {
            $query['DirectoryId'] = $request->directoryId;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListMFADevicesForUser',
            'version'     => '2021-05-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListMFADevicesForUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * This topic provides an example on how to query the MFA devices that are bound to the user `u-00q8wbq42wiltcrk****`. The returned result shows that the MFA device named `Alice-MFA1` is bound to the user.
     *   *
     * @param ListMFADevicesForUserRequest $request ListMFADevicesForUserRequest
     *
     * @return ListMFADevicesForUserResponse ListMFADevicesForUserResponse
     */
    public function listMFADevicesForUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listMFADevicesForUserWithOptions($request, $runtime);
    }

    /**
     * This topic provides an example on how to query the policies that are created for the access configuration `ac-00jhtfl8thteu6uj****`. The returned result shows that the access configuration contains one system policy and one inline policy.
     *   *
     * @param ListPermissionPoliciesInAccessConfigurationRequest $request ListPermissionPoliciesInAccessConfigurationRequest
     * @param RuntimeOptions                                     $runtime runtime options for this request RuntimeOptions
     *
     * @return ListPermissionPoliciesInAccessConfigurationResponse ListPermissionPoliciesInAccessConfigurationResponse
     */
    public function listPermissionPoliciesInAccessConfigurationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessConfigurationId)) {
            $query['AccessConfigurationId'] = $request->accessConfigurationId;
        }
        if (!Utils::isUnset($request->directoryId)) {
            $query['DirectoryId'] = $request->directoryId;
        }
        if (!Utils::isUnset($request->permissionPolicyType)) {
            $query['PermissionPolicyType'] = $request->permissionPolicyType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListPermissionPoliciesInAccessConfiguration',
            'version'     => '2021-05-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListPermissionPoliciesInAccessConfigurationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * This topic provides an example on how to query the policies that are created for the access configuration `ac-00jhtfl8thteu6uj****`. The returned result shows that the access configuration contains one system policy and one inline policy.
     *   *
     * @param ListPermissionPoliciesInAccessConfigurationRequest $request ListPermissionPoliciesInAccessConfigurationRequest
     *
     * @return ListPermissionPoliciesInAccessConfigurationResponse ListPermissionPoliciesInAccessConfigurationResponse
     */
    public function listPermissionPoliciesInAccessConfiguration($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listPermissionPoliciesInAccessConfigurationWithOptions($request, $runtime);
    }

    /**
     * This topic provides an example on how to query the SCIM credentials within the `d-00fc2p61****` directory.
     *   *
     * @param ListSCIMServerCredentialsRequest $request ListSCIMServerCredentialsRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return ListSCIMServerCredentialsResponse ListSCIMServerCredentialsResponse
     */
    public function listSCIMServerCredentialsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->directoryId)) {
            $query['DirectoryId'] = $request->directoryId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListSCIMServerCredentials',
            'version'     => '2021-05-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListSCIMServerCredentialsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * This topic provides an example on how to query the SCIM credentials within the `d-00fc2p61****` directory.
     *   *
     * @param ListSCIMServerCredentialsRequest $request ListSCIMServerCredentialsRequest
     *
     * @return ListSCIMServerCredentialsResponse ListSCIMServerCredentialsResponse
     */
    public function listSCIMServerCredentials($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSCIMServerCredentialsWithOptions($request, $runtime);
    }

    /**
     * By default, this operation queries the tasks within the previous 24 hours. This operation allows you to query the tasks within a maximum of 7 days. You can specify the start time of the query by using `Filter`.
     *   * This topic provides an example on how to query the tasks within the previous 24 hours.
     *   *
     * @param ListTasksRequest $request ListTasksRequest
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return ListTasksResponse ListTasksResponse
     */
    public function listTasksWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessConfigurationId)) {
            $query['AccessConfigurationId'] = $request->accessConfigurationId;
        }
        if (!Utils::isUnset($request->directoryId)) {
            $query['DirectoryId'] = $request->directoryId;
        }
        if (!Utils::isUnset($request->filter)) {
            $query['Filter'] = $request->filter;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->principalId)) {
            $query['PrincipalId'] = $request->principalId;
        }
        if (!Utils::isUnset($request->principalType)) {
            $query['PrincipalType'] = $request->principalType;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->targetId)) {
            $query['TargetId'] = $request->targetId;
        }
        if (!Utils::isUnset($request->targetType)) {
            $query['TargetType'] = $request->targetType;
        }
        if (!Utils::isUnset($request->taskType)) {
            $query['TaskType'] = $request->taskType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListTasks',
            'version'     => '2021-05-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListTasksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * By default, this operation queries the tasks within the previous 24 hours. This operation allows you to query the tasks within a maximum of 7 days. You can specify the start time of the query by using `Filter`.
     *   * This topic provides an example on how to query the tasks within the previous 24 hours.
     *   *
     * @param ListTasksRequest $request ListTasksRequest
     *
     * @return ListTasksResponse ListTasksResponse
     */
    public function listTasks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTasksWithOptions($request, $runtime);
    }

    /**
     * @param ListUserProvisioningEventsRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return ListUserProvisioningEventsResponse
     */
    public function listUserProvisioningEventsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->directoryId)) {
            $query['DirectoryId'] = $request->directoryId;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->userProvisioningId)) {
            $query['UserProvisioningId'] = $request->userProvisioningId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListUserProvisioningEvents',
            'version'     => '2021-05-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListUserProvisioningEventsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param ListUserProvisioningsRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ListUserProvisioningsResponse
     */
    public function listUserProvisioningsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->directoryId)) {
            $query['DirectoryId'] = $request->directoryId;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->principalId)) {
            $query['PrincipalId'] = $request->principalId;
        }
        if (!Utils::isUnset($request->principalType)) {
            $query['PrincipalType'] = $request->principalType;
        }
        if (!Utils::isUnset($request->targetId)) {
            $query['TargetId'] = $request->targetId;
        }
        if (!Utils::isUnset($request->targetType)) {
            $query['TargetType'] = $request->targetType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListUserProvisionings',
            'version'     => '2021-05-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListUserProvisioningsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * This topic provides an example on how to query users in the `d-00fc2p61****` directory. The returned result shows that the directory contains two users. The user `AliceLee` is synchronized from an external identity provider (IdP). The user `user1` is manually created within CloudSSO.
     *   *
     * @param ListUsersRequest $request ListUsersRequest
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return ListUsersResponse ListUsersResponse
     */
    public function listUsersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->directoryId)) {
            $query['DirectoryId'] = $request->directoryId;
        }
        if (!Utils::isUnset($request->filter)) {
            $query['Filter'] = $request->filter;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->provisionType)) {
            $query['ProvisionType'] = $request->provisionType;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListUsers',
            'version'     => '2021-05-15',
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
     * This topic provides an example on how to query users in the `d-00fc2p61****` directory. The returned result shows that the directory contains two users. The user `AliceLee` is synchronized from an external identity provider (IdP). The user `user1` is manually created within CloudSSO.
     *   *
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
     * When you call this operation, an asynchronous task is automatically created. You can call the [GetTask](~~340670~~) operation to query the progress of the task based on the value of the `TaskId` response parameter.
     *   * This topic provides an example on how to provision the access configuration `ac-00jhtfl8thteu6uj****` for the account `114240524784****` in your resource directory.
     *   *
     * @param ProvisionAccessConfigurationRequest $request ProvisionAccessConfigurationRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return ProvisionAccessConfigurationResponse ProvisionAccessConfigurationResponse
     */
    public function provisionAccessConfigurationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessConfigurationId)) {
            $query['AccessConfigurationId'] = $request->accessConfigurationId;
        }
        if (!Utils::isUnset($request->directoryId)) {
            $query['DirectoryId'] = $request->directoryId;
        }
        if (!Utils::isUnset($request->targetId)) {
            $query['TargetId'] = $request->targetId;
        }
        if (!Utils::isUnset($request->targetType)) {
            $query['TargetType'] = $request->targetType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ProvisionAccessConfiguration',
            'version'     => '2021-05-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ProvisionAccessConfigurationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * When you call this operation, an asynchronous task is automatically created. You can call the [GetTask](~~340670~~) operation to query the progress of the task based on the value of the `TaskId` response parameter.
     *   * This topic provides an example on how to provision the access configuration `ac-00jhtfl8thteu6uj****` for the account `114240524784****` in your resource directory.
     *   *
     * @param ProvisionAccessConfigurationRequest $request ProvisionAccessConfigurationRequest
     *
     * @return ProvisionAccessConfigurationResponse ProvisionAccessConfigurationResponse
     */
    public function provisionAccessConfiguration($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->provisionAccessConfigurationWithOptions($request, $runtime);
    }

    /**
     * This topic provides an example on how to remove the SAML signing certificate whose ID is `idp-c-00dt9gnl7fmjaw9c****`.
     *   *
     * @param RemoveExternalSAMLIdPCertificateRequest $request RemoveExternalSAMLIdPCertificateRequest
     * @param RuntimeOptions                          $runtime runtime options for this request RuntimeOptions
     *
     * @return RemoveExternalSAMLIdPCertificateResponse RemoveExternalSAMLIdPCertificateResponse
     */
    public function removeExternalSAMLIdPCertificateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->certificateId)) {
            $query['CertificateId'] = $request->certificateId;
        }
        if (!Utils::isUnset($request->directoryId)) {
            $query['DirectoryId'] = $request->directoryId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RemoveExternalSAMLIdPCertificate',
            'version'     => '2021-05-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RemoveExternalSAMLIdPCertificateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * This topic provides an example on how to remove the SAML signing certificate whose ID is `idp-c-00dt9gnl7fmjaw9c****`.
     *   *
     * @param RemoveExternalSAMLIdPCertificateRequest $request RemoveExternalSAMLIdPCertificateRequest
     *
     * @return RemoveExternalSAMLIdPCertificateResponse RemoveExternalSAMLIdPCertificateResponse
     */
    public function removeExternalSAMLIdPCertificate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeExternalSAMLIdPCertificateWithOptions($request, $runtime);
    }

    /**
     * After you remove an inline policy from an access configuration, the policy cannot be restored.
     *   * This topic provides an example on how to remove the system policy `AliyunECSFullAccess` from the access configuration `ac-00jhtfl8thteu6uj****`.
     *   *
     * @param RemovePermissionPolicyFromAccessConfigurationRequest $request RemovePermissionPolicyFromAccessConfigurationRequest
     * @param RuntimeOptions                                       $runtime runtime options for this request RuntimeOptions
     *
     * @return RemovePermissionPolicyFromAccessConfigurationResponse RemovePermissionPolicyFromAccessConfigurationResponse
     */
    public function removePermissionPolicyFromAccessConfigurationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessConfigurationId)) {
            $query['AccessConfigurationId'] = $request->accessConfigurationId;
        }
        if (!Utils::isUnset($request->directoryId)) {
            $query['DirectoryId'] = $request->directoryId;
        }
        if (!Utils::isUnset($request->permissionPolicyName)) {
            $query['PermissionPolicyName'] = $request->permissionPolicyName;
        }
        if (!Utils::isUnset($request->permissionPolicyType)) {
            $query['PermissionPolicyType'] = $request->permissionPolicyType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RemovePermissionPolicyFromAccessConfiguration',
            'version'     => '2021-05-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RemovePermissionPolicyFromAccessConfigurationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * After you remove an inline policy from an access configuration, the policy cannot be restored.
     *   * This topic provides an example on how to remove the system policy `AliyunECSFullAccess` from the access configuration `ac-00jhtfl8thteu6uj****`.
     *   *
     * @param RemovePermissionPolicyFromAccessConfigurationRequest $request RemovePermissionPolicyFromAccessConfigurationRequest
     *
     * @return RemovePermissionPolicyFromAccessConfigurationResponse RemovePermissionPolicyFromAccessConfigurationResponse
     */
    public function removePermissionPolicyFromAccessConfiguration($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removePermissionPolicyFromAccessConfigurationWithOptions($request, $runtime);
    }

    /**
     * If System for Cross-domain Identity Management (SCIM) synchronization is enabled, you cannot remove a user from a group that is synchronized by using SCIM.
     *   * This topic provides an example on how to remove the user `u-00q8wbq42wiltcrk****` from the group `g-00jqzghi2n3o5hkh****`.
     *   *
     * @param RemoveUserFromGroupRequest $request RemoveUserFromGroupRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return RemoveUserFromGroupResponse RemoveUserFromGroupResponse
     */
    public function removeUserFromGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->directoryId)) {
            $query['DirectoryId'] = $request->directoryId;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RemoveUserFromGroup',
            'version'     => '2021-05-15',
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
     * If System for Cross-domain Identity Management (SCIM) synchronization is enabled, you cannot remove a user from a group that is synchronized by using SCIM.
     *   * This topic provides an example on how to remove the user `u-00q8wbq42wiltcrk****` from the group `g-00jqzghi2n3o5hkh****`.
     *   *
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
     * If you forget your password or your password expires or is at risk, you must contact a CloudSSO administrator to reset your password.
     *   * >  After you enable SSO logon, your password cannot be reset.
     *   * This topic provides an example on how to reset the password of the user `u-00q8wbq42wiltcrk****`. The new password is automatically generated by the system.
     *   *
     * @param ResetUserPasswordRequest $request ResetUserPasswordRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return ResetUserPasswordResponse ResetUserPasswordResponse
     */
    public function resetUserPasswordWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->directoryId)) {
            $query['DirectoryId'] = $request->directoryId;
        }
        if (!Utils::isUnset($request->generateRandomPassword)) {
            $query['GenerateRandomPassword'] = $request->generateRandomPassword;
        }
        if (!Utils::isUnset($request->password)) {
            $query['Password'] = $request->password;
        }
        if (!Utils::isUnset($request->requirePasswordResetForNextLogin)) {
            $query['RequirePasswordResetForNextLogin'] = $request->requirePasswordResetForNextLogin;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ResetUserPassword',
            'version'     => '2021-05-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ResetUserPasswordResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * If you forget your password or your password expires or is at risk, you must contact a CloudSSO administrator to reset your password.
     *   * >  After you enable SSO logon, your password cannot be reset.
     *   * This topic provides an example on how to reset the password of the user `u-00q8wbq42wiltcrk****`. The new password is automatically generated by the system.
     *   *
     * @param ResetUserPasswordRequest $request ResetUserPasswordRequest
     *
     * @return ResetUserPasswordResponse ResetUserPasswordResponse
     */
    public function resetUserPassword($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->resetUserPasswordWithOptions($request, $runtime);
    }

    /**
     * @param RetryUserProvisioningEventRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return RetryUserProvisioningEventResponse
     */
    public function retryUserProvisioningEventWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->directoryId)) {
            $query['DirectoryId'] = $request->directoryId;
        }
        if (!Utils::isUnset($request->duplicationStrategy)) {
            $query['DuplicationStrategy'] = $request->duplicationStrategy;
        }
        if (!Utils::isUnset($request->eventId)) {
            $query['EventId'] = $request->eventId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RetryUserProvisioningEvent',
            'version'     => '2021-05-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RetryUserProvisioningEventResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * During SAML 2.0-based single sign-on (SSO) logon, CloudSSO is an SP, and the identity management system of an enterprise is an IdP.
     *   * You can use one of the following methods to configure a SAML IdP. You can obtain the required metadata file or parameter values from your IdP.
     *   * *   Use the metadata file. You can specify the `EncodedMetadataDocument` parameter to upload the metadata file.
     *   * *   Manually configure the IdP. You can manually specify the following parameters for your IdP: `EntityId`, `LoginUrl`, `WantRequestSigned`, and `X509Certificate`.
     *   * If you have configured a SAML IdP, the existing configurations are replaced after you call this operation.
     *   * *   If the IdP is configured by using the metadata file, all existing configurations are replaced with new configurations.
     *   * *   If the IdP is manually configured, the original parameter values that are different from the new parameter values are replaced.
     *   * >  If SSO logon is enabled, new configurations immediately take effect. Take note of the impacts on the production environment.
     *   * This topic provides an example on how to configure an IdP by using the metadata file within the directory `d-00fc2p61****`.
     *   *
     * @param SetExternalSAMLIdentityProviderRequest $request SetExternalSAMLIdentityProviderRequest
     * @param RuntimeOptions                         $runtime runtime options for this request RuntimeOptions
     *
     * @return SetExternalSAMLIdentityProviderResponse SetExternalSAMLIdentityProviderResponse
     */
    public function setExternalSAMLIdentityProviderWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->directoryId)) {
            $query['DirectoryId'] = $request->directoryId;
        }
        if (!Utils::isUnset($request->encodedMetadataDocument)) {
            $query['EncodedMetadataDocument'] = $request->encodedMetadataDocument;
        }
        if (!Utils::isUnset($request->entityId)) {
            $query['EntityId'] = $request->entityId;
        }
        if (!Utils::isUnset($request->loginUrl)) {
            $query['LoginUrl'] = $request->loginUrl;
        }
        if (!Utils::isUnset($request->SSOStatus)) {
            $query['SSOStatus'] = $request->SSOStatus;
        }
        if (!Utils::isUnset($request->wantRequestSigned)) {
            $query['WantRequestSigned'] = $request->wantRequestSigned;
        }
        if (!Utils::isUnset($request->x509Certificate)) {
            $query['X509Certificate'] = $request->x509Certificate;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetExternalSAMLIdentityProvider',
            'version'     => '2021-05-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetExternalSAMLIdentityProviderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * During SAML 2.0-based single sign-on (SSO) logon, CloudSSO is an SP, and the identity management system of an enterprise is an IdP.
     *   * You can use one of the following methods to configure a SAML IdP. You can obtain the required metadata file or parameter values from your IdP.
     *   * *   Use the metadata file. You can specify the `EncodedMetadataDocument` parameter to upload the metadata file.
     *   * *   Manually configure the IdP. You can manually specify the following parameters for your IdP: `EntityId`, `LoginUrl`, `WantRequestSigned`, and `X509Certificate`.
     *   * If you have configured a SAML IdP, the existing configurations are replaced after you call this operation.
     *   * *   If the IdP is configured by using the metadata file, all existing configurations are replaced with new configurations.
     *   * *   If the IdP is manually configured, the original parameter values that are different from the new parameter values are replaced.
     *   * >  If SSO logon is enabled, new configurations immediately take effect. Take note of the impacts on the production environment.
     *   * This topic provides an example on how to configure an IdP by using the metadata file within the directory `d-00fc2p61****`.
     *   *
     * @param SetExternalSAMLIdentityProviderRequest $request SetExternalSAMLIdentityProviderRequest
     *
     * @return SetExternalSAMLIdentityProviderResponse SetExternalSAMLIdentityProviderResponse
     */
    public function setExternalSAMLIdentityProvider($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setExternalSAMLIdentityProviderWithOptions($request, $runtime);
    }

    /**
     * @param SetLoginPreferenceRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return SetLoginPreferenceResponse
     */
    public function setLoginPreferenceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->directoryId)) {
            $query['DirectoryId'] = $request->directoryId;
        }
        if (!Utils::isUnset($request->loginNetworkMasks)) {
            $query['LoginNetworkMasks'] = $request->loginNetworkMasks;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetLoginPreference',
            'version'     => '2021-05-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetLoginPreferenceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * If a CloudSSO administrator enables username-password logon for users, CloudSSO automatically enables MFA to improve security. The administrator can call this operation to enable or disable MFA based on the business requirements.
     *   * This topic provides an example on how to enable MFA for users.
     *   *
     * @param SetMFAAuthenticationStatusRequest $request SetMFAAuthenticationStatusRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return SetMFAAuthenticationStatusResponse SetMFAAuthenticationStatusResponse
     */
    public function setMFAAuthenticationStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->directoryId)) {
            $query['DirectoryId'] = $request->directoryId;
        }
        if (!Utils::isUnset($request->MFAAuthenticationStatus)) {
            $query['MFAAuthenticationStatus'] = $request->MFAAuthenticationStatus;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetMFAAuthenticationStatus',
            'version'     => '2021-05-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetMFAAuthenticationStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * If a CloudSSO administrator enables username-password logon for users, CloudSSO automatically enables MFA to improve security. The administrator can call this operation to enable or disable MFA based on the business requirements.
     *   * This topic provides an example on how to enable MFA for users.
     *   *
     * @param SetMFAAuthenticationStatusRequest $request SetMFAAuthenticationStatusRequest
     *
     * @return SetMFAAuthenticationStatusResponse SetMFAAuthenticationStatusResponse
     */
    public function setMFAAuthenticationStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setMFAAuthenticationStatusWithOptions($request, $runtime);
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
        $query = [];
        if (!Utils::isUnset($request->directoryId)) {
            $query['DirectoryId'] = $request->directoryId;
        }
        if (!Utils::isUnset($request->maxLoginAttempts)) {
            $query['MaxLoginAttempts'] = $request->maxLoginAttempts;
        }
        if (!Utils::isUnset($request->maxPasswordAge)) {
            $query['MaxPasswordAge'] = $request->maxPasswordAge;
        }
        if (!Utils::isUnset($request->minPasswordDifferentChars)) {
            $query['MinPasswordDifferentChars'] = $request->minPasswordDifferentChars;
        }
        if (!Utils::isUnset($request->minPasswordLength)) {
            $query['MinPasswordLength'] = $request->minPasswordLength;
        }
        if (!Utils::isUnset($request->passwordNotContainUsername)) {
            $query['PasswordNotContainUsername'] = $request->passwordNotContainUsername;
        }
        if (!Utils::isUnset($request->passwordReusePrevention)) {
            $query['PasswordReusePrevention'] = $request->passwordReusePrevention;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetPasswordPolicy',
            'version'     => '2021-05-15',
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
     * You can synchronize users or groups from an external identity provider (IdP) that supports SCIM 2.0 to CloudSSO only after SCIM synchronization is enabled. If you disable SCIM synchronization, you can no longer synchronize users or groups to CloudSSO. The following list describes the impacts after SCIM synchronization is enabled or disabled:
     *   * *   After you enable SCIM synchronization, you cannot modify or delete the users or groups that are synchronized to CloudSSO by using SCIM. In addition, you cannot add users to or remove users from the groups. However, you can change the passwords of the users and enable or disable the logon of the users.
     *   * *   After you disable SCIM synchronization, you can modify and delete the users and groups that are synchronized to CloudSSO by using SCIM. You can also add users to or remove users from the groups.
     *   * This topic provides an example on how to enable SCIM synchronization within the directory `d-00fc2p61****`.
     *   *
     * @param SetSCIMSynchronizationStatusRequest $request SetSCIMSynchronizationStatusRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return SetSCIMSynchronizationStatusResponse SetSCIMSynchronizationStatusResponse
     */
    public function setSCIMSynchronizationStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->directoryId)) {
            $query['DirectoryId'] = $request->directoryId;
        }
        if (!Utils::isUnset($request->SCIMSynchronizationStatus)) {
            $query['SCIMSynchronizationStatus'] = $request->SCIMSynchronizationStatus;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetSCIMSynchronizationStatus',
            'version'     => '2021-05-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetSCIMSynchronizationStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can synchronize users or groups from an external identity provider (IdP) that supports SCIM 2.0 to CloudSSO only after SCIM synchronization is enabled. If you disable SCIM synchronization, you can no longer synchronize users or groups to CloudSSO. The following list describes the impacts after SCIM synchronization is enabled or disabled:
     *   * *   After you enable SCIM synchronization, you cannot modify or delete the users or groups that are synchronized to CloudSSO by using SCIM. In addition, you cannot add users to or remove users from the groups. However, you can change the passwords of the users and enable or disable the logon of the users.
     *   * *   After you disable SCIM synchronization, you can modify and delete the users and groups that are synchronized to CloudSSO by using SCIM. You can also add users to or remove users from the groups.
     *   * This topic provides an example on how to enable SCIM synchronization within the directory `d-00fc2p61****`.
     *   *
     * @param SetSCIMSynchronizationStatusRequest $request SetSCIMSynchronizationStatusRequest
     *
     * @return SetSCIMSynchronizationStatusResponse SetSCIMSynchronizationStatusResponse
     */
    public function setSCIMSynchronizationStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setSCIMSynchronizationStatusWithOptions($request, $runtime);
    }

    /**
     * You can modify the `Description`, `SessionDuration`, and `RelayState` parameters for an access configuration.
     *   * This topic provides an example on how to change the initial web page in the access configuration `ac-00jhtfl8thteu6uj****` to `https://cloudsso.console.aliyun.com`.
     *   *
     * @param UpdateAccessConfigurationRequest $request UpdateAccessConfigurationRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateAccessConfigurationResponse UpdateAccessConfigurationResponse
     */
    public function updateAccessConfigurationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessConfigurationId)) {
            $query['AccessConfigurationId'] = $request->accessConfigurationId;
        }
        if (!Utils::isUnset($request->directoryId)) {
            $query['DirectoryId'] = $request->directoryId;
        }
        if (!Utils::isUnset($request->newDescription)) {
            $query['NewDescription'] = $request->newDescription;
        }
        if (!Utils::isUnset($request->newRelayState)) {
            $query['NewRelayState'] = $request->newRelayState;
        }
        if (!Utils::isUnset($request->newSessionDuration)) {
            $query['NewSessionDuration'] = $request->newSessionDuration;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateAccessConfiguration',
            'version'     => '2021-05-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateAccessConfigurationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can modify the `Description`, `SessionDuration`, and `RelayState` parameters for an access configuration.
     *   * This topic provides an example on how to change the initial web page in the access configuration `ac-00jhtfl8thteu6uj****` to `https://cloudsso.console.aliyun.com`.
     *   *
     * @param UpdateAccessConfigurationRequest $request UpdateAccessConfigurationRequest
     *
     * @return UpdateAccessConfigurationResponse UpdateAccessConfigurationResponse
     */
    public function updateAccessConfiguration($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateAccessConfigurationWithOptions($request, $runtime);
    }

    /**
     * After you change the name of a directory, the URL that is used to log on to the Cloud SSO user portal is changed. You must notify the Cloud SSO users of the correct URL.
     *   * This topic provides an example on how to change the name of a directory to `new-example`.
     *   *
     * @param UpdateDirectoryRequest $request UpdateDirectoryRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateDirectoryResponse UpdateDirectoryResponse
     */
    public function updateDirectoryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->directoryId)) {
            $query['DirectoryId'] = $request->directoryId;
        }
        if (!Utils::isUnset($request->newDirectoryName)) {
            $query['NewDirectoryName'] = $request->newDirectoryName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateDirectory',
            'version'     => '2021-05-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateDirectoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * After you change the name of a directory, the URL that is used to log on to the Cloud SSO user portal is changed. You must notify the Cloud SSO users of the correct URL.
     *   * This topic provides an example on how to change the name of a directory to `new-example`.
     *   *
     * @param UpdateDirectoryRequest $request UpdateDirectoryRequest
     *
     * @return UpdateDirectoryResponse UpdateDirectoryResponse
     */
    public function updateDirectory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateDirectoryWithOptions($request, $runtime);
    }

    /**
     * You can modify `GroupName` and `Description` for a group.
     *   * >  If System for Cross-domain Identity Management (SCIM) synchronization is enabled, you cannot modify the information about a group that is synchronized by using SCIM.
     *   * This topic provides an example on how to change the name of the group `g-00jqzghi2n3o5hkh****` to `NewTestGroup`.
     *   *
     * @param UpdateGroupRequest $request UpdateGroupRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateGroupResponse UpdateGroupResponse
     */
    public function updateGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->directoryId)) {
            $query['DirectoryId'] = $request->directoryId;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->newDescription)) {
            $query['NewDescription'] = $request->newDescription;
        }
        if (!Utils::isUnset($request->newGroupName)) {
            $query['NewGroupName'] = $request->newGroupName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateGroup',
            'version'     => '2021-05-15',
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
     * You can modify `GroupName` and `Description` for a group.
     *   * >  If System for Cross-domain Identity Management (SCIM) synchronization is enabled, you cannot modify the information about a group that is synchronized by using SCIM.
     *   * This topic provides an example on how to change the name of the group `g-00jqzghi2n3o5hkh****` to `NewTestGroup`.
     *   *
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
     * This topic provides an example on how to modify an inline policy that is created for the access configuration `ac-00jhtfl8thteu6uj****`.
     *   *
     * @param UpdateInlinePolicyForAccessConfigurationRequest $request UpdateInlinePolicyForAccessConfigurationRequest
     * @param RuntimeOptions                                  $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateInlinePolicyForAccessConfigurationResponse UpdateInlinePolicyForAccessConfigurationResponse
     */
    public function updateInlinePolicyForAccessConfigurationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessConfigurationId)) {
            $query['AccessConfigurationId'] = $request->accessConfigurationId;
        }
        if (!Utils::isUnset($request->directoryId)) {
            $query['DirectoryId'] = $request->directoryId;
        }
        if (!Utils::isUnset($request->inlinePolicyName)) {
            $query['InlinePolicyName'] = $request->inlinePolicyName;
        }
        if (!Utils::isUnset($request->newInlinePolicyDocument)) {
            $query['NewInlinePolicyDocument'] = $request->newInlinePolicyDocument;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateInlinePolicyForAccessConfiguration',
            'version'     => '2021-05-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateInlinePolicyForAccessConfigurationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * This topic provides an example on how to modify an inline policy that is created for the access configuration `ac-00jhtfl8thteu6uj****`.
     *   *
     * @param UpdateInlinePolicyForAccessConfigurationRequest $request UpdateInlinePolicyForAccessConfigurationRequest
     *
     * @return UpdateInlinePolicyForAccessConfigurationResponse UpdateInlinePolicyForAccessConfigurationResponse
     */
    public function updateInlinePolicyForAccessConfiguration($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateInlinePolicyForAccessConfigurationWithOptions($request, $runtime);
    }

    /**
     * If you enable username-password logon for CloudSSO users, you can also configure MFA for the users.
     *   * This topic provides an example on how to enable MFA for all CloudSSO users that belong to the directory named `d-00fc2p61****`.
     *   *
     * @param UpdateMFAAuthenticationSettingsRequest $request UpdateMFAAuthenticationSettingsRequest
     * @param RuntimeOptions                         $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateMFAAuthenticationSettingsResponse UpdateMFAAuthenticationSettingsResponse
     */
    public function updateMFAAuthenticationSettingsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->directoryId)) {
            $query['DirectoryId'] = $request->directoryId;
        }
        if (!Utils::isUnset($request->MFAAuthenticationSettings)) {
            $query['MFAAuthenticationSettings'] = $request->MFAAuthenticationSettings;
        }
        if (!Utils::isUnset($request->operationForRiskLogin)) {
            $query['OperationForRiskLogin'] = $request->operationForRiskLogin;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateMFAAuthenticationSettings',
            'version'     => '2021-05-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateMFAAuthenticationSettingsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * If you enable username-password logon for CloudSSO users, you can also configure MFA for the users.
     *   * This topic provides an example on how to enable MFA for all CloudSSO users that belong to the directory named `d-00fc2p61****`.
     *   *
     * @param UpdateMFAAuthenticationSettingsRequest $request UpdateMFAAuthenticationSettingsRequest
     *
     * @return UpdateMFAAuthenticationSettingsResponse UpdateMFAAuthenticationSettingsResponse
     */
    public function updateMFAAuthenticationSettings($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateMFAAuthenticationSettingsWithOptions($request, $runtime);
    }

    /**
     * This topic provides an example on how to disable the SCIM credential whose ID is `scimcred-004whl0kvfwcypbi****`. After the SCIM credential is disabled, the synchronization task that uses the SCIM credential fails. You can call this operation again to enable the SCIM credential.
     *   *
     * @param UpdateSCIMServerCredentialStatusRequest $request UpdateSCIMServerCredentialStatusRequest
     * @param RuntimeOptions                          $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateSCIMServerCredentialStatusResponse UpdateSCIMServerCredentialStatusResponse
     */
    public function updateSCIMServerCredentialStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->credentialId)) {
            $query['CredentialId'] = $request->credentialId;
        }
        if (!Utils::isUnset($request->directoryId)) {
            $query['DirectoryId'] = $request->directoryId;
        }
        if (!Utils::isUnset($request->newStatus)) {
            $query['NewStatus'] = $request->newStatus;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateSCIMServerCredentialStatus',
            'version'     => '2021-05-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateSCIMServerCredentialStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * This topic provides an example on how to disable the SCIM credential whose ID is `scimcred-004whl0kvfwcypbi****`. After the SCIM credential is disabled, the synchronization task that uses the SCIM credential fails. You can call this operation again to enable the SCIM credential.
     *   *
     * @param UpdateSCIMServerCredentialStatusRequest $request UpdateSCIMServerCredentialStatusRequest
     *
     * @return UpdateSCIMServerCredentialStatusResponse UpdateSCIMServerCredentialStatusResponse
     */
    public function updateSCIMServerCredentialStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateSCIMServerCredentialStatusWithOptions($request, $runtime);
    }

    /**
     * You can modify `FirstName`, `LastName`, `DisplayName`, `Email`, and `Description` for a user. You cannot modify `UserName` for a user.
     *   * >  If System for Cross-domain Identity Management (SCIM) synchronization is enabled, you cannot modify the information about a user that is synchronized by using SCIM.
     *   * This topic provides an example on how to change the email address of the user whose ID is `u-00q8wbq42wiltcrk****` to `AliceLee@example.com`.
     *   *
     * @param UpdateUserRequest $request UpdateUserRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateUserResponse UpdateUserResponse
     */
    public function updateUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->directoryId)) {
            $query['DirectoryId'] = $request->directoryId;
        }
        if (!Utils::isUnset($request->newDescription)) {
            $query['NewDescription'] = $request->newDescription;
        }
        if (!Utils::isUnset($request->newDisplayName)) {
            $query['NewDisplayName'] = $request->newDisplayName;
        }
        if (!Utils::isUnset($request->newEmail)) {
            $query['NewEmail'] = $request->newEmail;
        }
        if (!Utils::isUnset($request->newFirstName)) {
            $query['NewFirstName'] = $request->newFirstName;
        }
        if (!Utils::isUnset($request->newLastName)) {
            $query['NewLastName'] = $request->newLastName;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateUser',
            'version'     => '2021-05-15',
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
     * You can modify `FirstName`, `LastName`, `DisplayName`, `Email`, and `Description` for a user. You cannot modify `UserName` for a user.
     *   * >  If System for Cross-domain Identity Management (SCIM) synchronization is enabled, you cannot modify the information about a user that is synchronized by using SCIM.
     *   * This topic provides an example on how to change the email address of the user whose ID is `u-00q8wbq42wiltcrk****` to `AliceLee@example.com`.
     *   *
     * @param UpdateUserRequest $request UpdateUserRequest
     *
     * @return UpdateUserResponse UpdateUserResponse
     */
    public function updateUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateUserWithOptions($request, $runtime);
    }

    /**
     * If you call the [UpdateMFAAuthenticationSettings](~~450134~~) operation to set the MFAAuthenticationSettings parameter to `Byuser`, user-specific settings are applied. Then, you must call the UpdateUserMFAAuthenticationSettings operation to configure MFA for each user.
     *   * By default, the MFAAuthenticationSettings parameter is set to `Enabled` for a new user.
     *   * This topic provides an example on how to enable MFA for the user named `u-00q8wbq42wiltcrk****`.
     *   *
     * @param UpdateUserMFAAuthenticationSettingsRequest $request UpdateUserMFAAuthenticationSettingsRequest
     * @param RuntimeOptions                             $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateUserMFAAuthenticationSettingsResponse UpdateUserMFAAuthenticationSettingsResponse
     */
    public function updateUserMFAAuthenticationSettingsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->directoryId)) {
            $query['DirectoryId'] = $request->directoryId;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        if (!Utils::isUnset($request->userMFAAuthenticationSettings)) {
            $query['UserMFAAuthenticationSettings'] = $request->userMFAAuthenticationSettings;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateUserMFAAuthenticationSettings',
            'version'     => '2021-05-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateUserMFAAuthenticationSettingsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * If you call the [UpdateMFAAuthenticationSettings](~~450134~~) operation to set the MFAAuthenticationSettings parameter to `Byuser`, user-specific settings are applied. Then, you must call the UpdateUserMFAAuthenticationSettings operation to configure MFA for each user.
     *   * By default, the MFAAuthenticationSettings parameter is set to `Enabled` for a new user.
     *   * This topic provides an example on how to enable MFA for the user named `u-00q8wbq42wiltcrk****`.
     *   *
     * @param UpdateUserMFAAuthenticationSettingsRequest $request UpdateUserMFAAuthenticationSettingsRequest
     *
     * @return UpdateUserMFAAuthenticationSettingsResponse UpdateUserMFAAuthenticationSettingsResponse
     */
    public function updateUserMFAAuthenticationSettings($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateUserMFAAuthenticationSettingsWithOptions($request, $runtime);
    }

    /**
     * @param UpdateUserProvisioningRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return UpdateUserProvisioningResponse
     */
    public function updateUserProvisioningWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->directoryId)) {
            $query['DirectoryId'] = $request->directoryId;
        }
        if (!Utils::isUnset($request->newDeletionStrategy)) {
            $query['NewDeletionStrategy'] = $request->newDeletionStrategy;
        }
        if (!Utils::isUnset($request->newDescription)) {
            $query['NewDescription'] = $request->newDescription;
        }
        if (!Utils::isUnset($request->newDuplicationStrategy)) {
            $query['NewDuplicationStrategy'] = $request->newDuplicationStrategy;
        }
        if (!Utils::isUnset($request->userProvisioningId)) {
            $query['UserProvisioningId'] = $request->userProvisioningId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateUserProvisioning',
            'version'     => '2021-05-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateUserProvisioningResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param UpdateUserProvisioningConfigurationRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return UpdateUserProvisioningConfigurationResponse
     */
    public function updateUserProvisioningConfigurationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->directoryId)) {
            $query['DirectoryId'] = $request->directoryId;
        }
        if (!Utils::isUnset($request->newDefaultLandingPage)) {
            $query['NewDefaultLandingPage'] = $request->newDefaultLandingPage;
        }
        if (!Utils::isUnset($request->newSessionDuration)) {
            $query['NewSessionDuration'] = $request->newSessionDuration;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateUserProvisioningConfiguration',
            'version'     => '2021-05-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateUserProvisioningConfigurationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * This topic provides an example on how to change the status of the user whose ID is `u-00q8wbq42wiltcrk****` to Disabled. Users in the Disabled state cannot log on to the CloudSSO user portal.
     *   *
     * @param UpdateUserStatusRequest $request UpdateUserStatusRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateUserStatusResponse UpdateUserStatusResponse
     */
    public function updateUserStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->directoryId)) {
            $query['DirectoryId'] = $request->directoryId;
        }
        if (!Utils::isUnset($request->newStatus)) {
            $query['NewStatus'] = $request->newStatus;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateUserStatus',
            'version'     => '2021-05-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateUserStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * This topic provides an example on how to change the status of the user whose ID is `u-00q8wbq42wiltcrk****` to Disabled. Users in the Disabled state cannot log on to the CloudSSO user portal.
     *   *
     * @param UpdateUserStatusRequest $request UpdateUserStatusRequest
     *
     * @return UpdateUserStatusResponse UpdateUserStatusResponse
     */
    public function updateUserStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateUserStatusWithOptions($request, $runtime);
    }
}

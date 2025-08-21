<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\Ims\V20190815\Models\AddClientIdToOIDCProviderRequest;
use AlibabaCloud\SDK\Ims\V20190815\Models\AddClientIdToOIDCProviderResponse;
use AlibabaCloud\SDK\Ims\V20190815\Models\AddFingerprintToOIDCProviderRequest;
use AlibabaCloud\SDK\Ims\V20190815\Models\AddFingerprintToOIDCProviderResponse;
use AlibabaCloud\SDK\Ims\V20190815\Models\AddUserToGroupRequest;
use AlibabaCloud\SDK\Ims\V20190815\Models\AddUserToGroupResponse;
use AlibabaCloud\SDK\Ims\V20190815\Models\BindMFADeviceRequest;
use AlibabaCloud\SDK\Ims\V20190815\Models\BindMFADeviceResponse;
use AlibabaCloud\SDK\Ims\V20190815\Models\ChangePasswordRequest;
use AlibabaCloud\SDK\Ims\V20190815\Models\ChangePasswordResponse;
use AlibabaCloud\SDK\Ims\V20190815\Models\CreateAccessKeyRequest;
use AlibabaCloud\SDK\Ims\V20190815\Models\CreateAccessKeyResponse;
use AlibabaCloud\SDK\Ims\V20190815\Models\CreateApplicationRequest;
use AlibabaCloud\SDK\Ims\V20190815\Models\CreateApplicationResponse;
use AlibabaCloud\SDK\Ims\V20190815\Models\CreateAppSecretRequest;
use AlibabaCloud\SDK\Ims\V20190815\Models\CreateAppSecretResponse;
use AlibabaCloud\SDK\Ims\V20190815\Models\CreateGroupRequest;
use AlibabaCloud\SDK\Ims\V20190815\Models\CreateGroupResponse;
use AlibabaCloud\SDK\Ims\V20190815\Models\CreateLoginProfileRequest;
use AlibabaCloud\SDK\Ims\V20190815\Models\CreateLoginProfileResponse;
use AlibabaCloud\SDK\Ims\V20190815\Models\CreateOIDCProviderRequest;
use AlibabaCloud\SDK\Ims\V20190815\Models\CreateOIDCProviderResponse;
use AlibabaCloud\SDK\Ims\V20190815\Models\CreateSAMLProviderRequest;
use AlibabaCloud\SDK\Ims\V20190815\Models\CreateSAMLProviderResponse;
use AlibabaCloud\SDK\Ims\V20190815\Models\CreateUserRequest;
use AlibabaCloud\SDK\Ims\V20190815\Models\CreateUserResponse;
use AlibabaCloud\SDK\Ims\V20190815\Models\CreateVirtualMFADeviceRequest;
use AlibabaCloud\SDK\Ims\V20190815\Models\CreateVirtualMFADeviceResponse;
use AlibabaCloud\SDK\Ims\V20190815\Models\DeleteAccessKeyInRecycleBinRequest;
use AlibabaCloud\SDK\Ims\V20190815\Models\DeleteAccessKeyInRecycleBinResponse;
use AlibabaCloud\SDK\Ims\V20190815\Models\DeleteAccessKeyRequest;
use AlibabaCloud\SDK\Ims\V20190815\Models\DeleteAccessKeyResponse;
use AlibabaCloud\SDK\Ims\V20190815\Models\DeleteApplicationRequest;
use AlibabaCloud\SDK\Ims\V20190815\Models\DeleteApplicationResponse;
use AlibabaCloud\SDK\Ims\V20190815\Models\DeleteAppSecretRequest;
use AlibabaCloud\SDK\Ims\V20190815\Models\DeleteAppSecretResponse;
use AlibabaCloud\SDK\Ims\V20190815\Models\DeleteGroupRequest;
use AlibabaCloud\SDK\Ims\V20190815\Models\DeleteGroupResponse;
use AlibabaCloud\SDK\Ims\V20190815\Models\DeleteLoginProfileRequest;
use AlibabaCloud\SDK\Ims\V20190815\Models\DeleteLoginProfileResponse;
use AlibabaCloud\SDK\Ims\V20190815\Models\DeleteOIDCProviderRequest;
use AlibabaCloud\SDK\Ims\V20190815\Models\DeleteOIDCProviderResponse;
use AlibabaCloud\SDK\Ims\V20190815\Models\DeletePasskeyRequest;
use AlibabaCloud\SDK\Ims\V20190815\Models\DeletePasskeyResponse;
use AlibabaCloud\SDK\Ims\V20190815\Models\DeleteSAMLProviderRequest;
use AlibabaCloud\SDK\Ims\V20190815\Models\DeleteSAMLProviderResponse;
use AlibabaCloud\SDK\Ims\V20190815\Models\DeleteUserInRecycleBinRequest;
use AlibabaCloud\SDK\Ims\V20190815\Models\DeleteUserInRecycleBinResponse;
use AlibabaCloud\SDK\Ims\V20190815\Models\DeleteUserRequest;
use AlibabaCloud\SDK\Ims\V20190815\Models\DeleteUserResponse;
use AlibabaCloud\SDK\Ims\V20190815\Models\DeleteVirtualMFADeviceRequest;
use AlibabaCloud\SDK\Ims\V20190815\Models\DeleteVirtualMFADeviceResponse;
use AlibabaCloud\SDK\Ims\V20190815\Models\DeprovisionApplicationRequest;
use AlibabaCloud\SDK\Ims\V20190815\Models\DeprovisionApplicationResponse;
use AlibabaCloud\SDK\Ims\V20190815\Models\DeprovisionExternalApplicationRequest;
use AlibabaCloud\SDK\Ims\V20190815\Models\DeprovisionExternalApplicationResponse;
use AlibabaCloud\SDK\Ims\V20190815\Models\DisableVirtualMFARequest;
use AlibabaCloud\SDK\Ims\V20190815\Models\DisableVirtualMFAResponse;
use AlibabaCloud\SDK\Ims\V20190815\Models\GenerateCredentialReportResponse;
use AlibabaCloud\SDK\Ims\V20190815\Models\GenerateGovernanceReportResponse;
use AlibabaCloud\SDK\Ims\V20190815\Models\GetAccessKeyInfoInRecycleBinRequest;
use AlibabaCloud\SDK\Ims\V20190815\Models\GetAccessKeyInfoInRecycleBinResponse;
use AlibabaCloud\SDK\Ims\V20190815\Models\GetAccessKeyLastUsedRequest;
use AlibabaCloud\SDK\Ims\V20190815\Models\GetAccessKeyLastUsedResponse;
use AlibabaCloud\SDK\Ims\V20190815\Models\GetAccountMFAInfoResponse;
use AlibabaCloud\SDK\Ims\V20190815\Models\GetAccountSecurityPracticeReportResponse;
use AlibabaCloud\SDK\Ims\V20190815\Models\GetAccountSummaryResponse;
use AlibabaCloud\SDK\Ims\V20190815\Models\GetApplicationProvisionInfoRequest;
use AlibabaCloud\SDK\Ims\V20190815\Models\GetApplicationProvisionInfoResponse;
use AlibabaCloud\SDK\Ims\V20190815\Models\GetApplicationRequest;
use AlibabaCloud\SDK\Ims\V20190815\Models\GetApplicationResponse;
use AlibabaCloud\SDK\Ims\V20190815\Models\GetAppSecretRequest;
use AlibabaCloud\SDK\Ims\V20190815\Models\GetAppSecretResponse;
use AlibabaCloud\SDK\Ims\V20190815\Models\GetCredentialReportRequest;
use AlibabaCloud\SDK\Ims\V20190815\Models\GetCredentialReportResponse;
use AlibabaCloud\SDK\Ims\V20190815\Models\GetDefaultDomainResponse;
use AlibabaCloud\SDK\Ims\V20190815\Models\GetExternalApplicationRequest;
use AlibabaCloud\SDK\Ims\V20190815\Models\GetExternalApplicationResponse;
use AlibabaCloud\SDK\Ims\V20190815\Models\GetGovernanceItemReportRequest;
use AlibabaCloud\SDK\Ims\V20190815\Models\GetGovernanceItemReportResponse;
use AlibabaCloud\SDK\Ims\V20190815\Models\GetGovernanceReportStatusResponse;
use AlibabaCloud\SDK\Ims\V20190815\Models\GetGroupRequest;
use AlibabaCloud\SDK\Ims\V20190815\Models\GetGroupResponse;
use AlibabaCloud\SDK\Ims\V20190815\Models\GetLoginProfileRequest;
use AlibabaCloud\SDK\Ims\V20190815\Models\GetLoginProfileResponse;
use AlibabaCloud\SDK\Ims\V20190815\Models\GetOIDCProviderRequest;
use AlibabaCloud\SDK\Ims\V20190815\Models\GetOIDCProviderResponse;
use AlibabaCloud\SDK\Ims\V20190815\Models\GetPasswordPolicyResponse;
use AlibabaCloud\SDK\Ims\V20190815\Models\GetSAMLProviderRequest;
use AlibabaCloud\SDK\Ims\V20190815\Models\GetSAMLProviderResponse;
use AlibabaCloud\SDK\Ims\V20190815\Models\GetSecurityPreferenceResponse;
use AlibabaCloud\SDK\Ims\V20190815\Models\GetUserInRecycleBinRequest;
use AlibabaCloud\SDK\Ims\V20190815\Models\GetUserInRecycleBinResponse;
use AlibabaCloud\SDK\Ims\V20190815\Models\GetUserMFAInfoRequest;
use AlibabaCloud\SDK\Ims\V20190815\Models\GetUserMFAInfoResponse;
use AlibabaCloud\SDK\Ims\V20190815\Models\GetUserRequest;
use AlibabaCloud\SDK\Ims\V20190815\Models\GetUserResponse;
use AlibabaCloud\SDK\Ims\V20190815\Models\GetUserSsoSettingsResponse;
use AlibabaCloud\SDK\Ims\V20190815\Models\GetVerificationInfoRequest;
use AlibabaCloud\SDK\Ims\V20190815\Models\GetVerificationInfoResponse;
use AlibabaCloud\SDK\Ims\V20190815\Models\ListAccessKeysInRecycleBinRequest;
use AlibabaCloud\SDK\Ims\V20190815\Models\ListAccessKeysInRecycleBinResponse;
use AlibabaCloud\SDK\Ims\V20190815\Models\ListAccessKeysRequest;
use AlibabaCloud\SDK\Ims\V20190815\Models\ListAccessKeysResponse;
use AlibabaCloud\SDK\Ims\V20190815\Models\ListApplicationProvisionInfosRequest;
use AlibabaCloud\SDK\Ims\V20190815\Models\ListApplicationProvisionInfosResponse;
use AlibabaCloud\SDK\Ims\V20190815\Models\ListApplicationsResponse;
use AlibabaCloud\SDK\Ims\V20190815\Models\ListAppSecretIdsRequest;
use AlibabaCloud\SDK\Ims\V20190815\Models\ListAppSecretIdsResponse;
use AlibabaCloud\SDK\Ims\V20190815\Models\ListExternalApplicationsResponse;
use AlibabaCloud\SDK\Ims\V20190815\Models\ListGroupsForUserRequest;
use AlibabaCloud\SDK\Ims\V20190815\Models\ListGroupsForUserResponse;
use AlibabaCloud\SDK\Ims\V20190815\Models\ListGroupsRequest;
use AlibabaCloud\SDK\Ims\V20190815\Models\ListGroupsResponse;
use AlibabaCloud\SDK\Ims\V20190815\Models\ListOIDCProvidersRequest;
use AlibabaCloud\SDK\Ims\V20190815\Models\ListOIDCProvidersResponse;
use AlibabaCloud\SDK\Ims\V20190815\Models\ListPasskeysRequest;
use AlibabaCloud\SDK\Ims\V20190815\Models\ListPasskeysResponse;
use AlibabaCloud\SDK\Ims\V20190815\Models\ListPredefinedScopesRequest;
use AlibabaCloud\SDK\Ims\V20190815\Models\ListPredefinedScopesResponse;
use AlibabaCloud\SDK\Ims\V20190815\Models\ListRecentGovernanceMetricsResponse;
use AlibabaCloud\SDK\Ims\V20190815\Models\ListSAMLProvidersRequest;
use AlibabaCloud\SDK\Ims\V20190815\Models\ListSAMLProvidersResponse;
use AlibabaCloud\SDK\Ims\V20190815\Models\ListTagResourcesRequest;
use AlibabaCloud\SDK\Ims\V20190815\Models\ListTagResourcesResponse;
use AlibabaCloud\SDK\Ims\V20190815\Models\ListUserBasicInfosRequest;
use AlibabaCloud\SDK\Ims\V20190815\Models\ListUserBasicInfosResponse;
use AlibabaCloud\SDK\Ims\V20190815\Models\ListUsersForGroupRequest;
use AlibabaCloud\SDK\Ims\V20190815\Models\ListUsersForGroupResponse;
use AlibabaCloud\SDK\Ims\V20190815\Models\ListUsersInRecycleBinRequest;
use AlibabaCloud\SDK\Ims\V20190815\Models\ListUsersInRecycleBinResponse;
use AlibabaCloud\SDK\Ims\V20190815\Models\ListUsersRequest;
use AlibabaCloud\SDK\Ims\V20190815\Models\ListUsersResponse;
use AlibabaCloud\SDK\Ims\V20190815\Models\ListVirtualMFADevicesRequest;
use AlibabaCloud\SDK\Ims\V20190815\Models\ListVirtualMFADevicesResponse;
use AlibabaCloud\SDK\Ims\V20190815\Models\ProvisionApplicationRequest;
use AlibabaCloud\SDK\Ims\V20190815\Models\ProvisionApplicationResponse;
use AlibabaCloud\SDK\Ims\V20190815\Models\ProvisionExternalApplicationRequest;
use AlibabaCloud\SDK\Ims\V20190815\Models\ProvisionExternalApplicationResponse;
use AlibabaCloud\SDK\Ims\V20190815\Models\RemoveClientIdFromOIDCProviderRequest;
use AlibabaCloud\SDK\Ims\V20190815\Models\RemoveClientIdFromOIDCProviderResponse;
use AlibabaCloud\SDK\Ims\V20190815\Models\RemoveFingerprintFromOIDCProviderRequest;
use AlibabaCloud\SDK\Ims\V20190815\Models\RemoveFingerprintFromOIDCProviderResponse;
use AlibabaCloud\SDK\Ims\V20190815\Models\RemoveUserFromGroupRequest;
use AlibabaCloud\SDK\Ims\V20190815\Models\RemoveUserFromGroupResponse;
use AlibabaCloud\SDK\Ims\V20190815\Models\RestoreAccessKeyFromRecycleBinRequest;
use AlibabaCloud\SDK\Ims\V20190815\Models\RestoreAccessKeyFromRecycleBinResponse;
use AlibabaCloud\SDK\Ims\V20190815\Models\RestoreUserFromRecycleBinRequest;
use AlibabaCloud\SDK\Ims\V20190815\Models\RestoreUserFromRecycleBinResponse;
use AlibabaCloud\SDK\Ims\V20190815\Models\SetDefaultDomainRequest;
use AlibabaCloud\SDK\Ims\V20190815\Models\SetDefaultDomainResponse;
use AlibabaCloud\SDK\Ims\V20190815\Models\SetPasswordPolicyRequest;
use AlibabaCloud\SDK\Ims\V20190815\Models\SetPasswordPolicyResponse;
use AlibabaCloud\SDK\Ims\V20190815\Models\SetSecurityPreferenceRequest;
use AlibabaCloud\SDK\Ims\V20190815\Models\SetSecurityPreferenceResponse;
use AlibabaCloud\SDK\Ims\V20190815\Models\SetSecurityPreferenceShrinkRequest;
use AlibabaCloud\SDK\Ims\V20190815\Models\SetUserSsoSettingsRequest;
use AlibabaCloud\SDK\Ims\V20190815\Models\SetUserSsoSettingsResponse;
use AlibabaCloud\SDK\Ims\V20190815\Models\SetVerificationInfoRequest;
use AlibabaCloud\SDK\Ims\V20190815\Models\SetVerificationInfoResponse;
use AlibabaCloud\SDK\Ims\V20190815\Models\TagResourcesRequest;
use AlibabaCloud\SDK\Ims\V20190815\Models\TagResourcesResponse;
use AlibabaCloud\SDK\Ims\V20190815\Models\UnbindMFADeviceRequest;
use AlibabaCloud\SDK\Ims\V20190815\Models\UnbindMFADeviceResponse;
use AlibabaCloud\SDK\Ims\V20190815\Models\UnbindVerificationRequest;
use AlibabaCloud\SDK\Ims\V20190815\Models\UnbindVerificationResponse;
use AlibabaCloud\SDK\Ims\V20190815\Models\UntagResourcesRequest;
use AlibabaCloud\SDK\Ims\V20190815\Models\UntagResourcesResponse;
use AlibabaCloud\SDK\Ims\V20190815\Models\UpdateAccessKeyRequest;
use AlibabaCloud\SDK\Ims\V20190815\Models\UpdateAccessKeyResponse;
use AlibabaCloud\SDK\Ims\V20190815\Models\UpdateApplicationRequest;
use AlibabaCloud\SDK\Ims\V20190815\Models\UpdateApplicationResponse;
use AlibabaCloud\SDK\Ims\V20190815\Models\UpdateGroupRequest;
use AlibabaCloud\SDK\Ims\V20190815\Models\UpdateGroupResponse;
use AlibabaCloud\SDK\Ims\V20190815\Models\UpdateLoginProfileRequest;
use AlibabaCloud\SDK\Ims\V20190815\Models\UpdateLoginProfileResponse;
use AlibabaCloud\SDK\Ims\V20190815\Models\UpdateOIDCProviderRequest;
use AlibabaCloud\SDK\Ims\V20190815\Models\UpdateOIDCProviderResponse;
use AlibabaCloud\SDK\Ims\V20190815\Models\UpdatePasskeyRequest;
use AlibabaCloud\SDK\Ims\V20190815\Models\UpdatePasskeyResponse;
use AlibabaCloud\SDK\Ims\V20190815\Models\UpdateSAMLProviderRequest;
use AlibabaCloud\SDK\Ims\V20190815\Models\UpdateSAMLProviderResponse;
use AlibabaCloud\SDK\Ims\V20190815\Models\UpdateUserRequest;
use AlibabaCloud\SDK\Ims\V20190815\Models\UpdateUserResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class Ims extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'central';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('ims', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * Adds a client ID to an OpenID Connect (OIDC) identity provider (IdP).
     *
     * @param request - AddClientIdToOIDCProviderRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddClientIdToOIDCProviderResponse
     *
     * @param AddClientIdToOIDCProviderRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return AddClientIdToOIDCProviderResponse
     */
    public function addClientIdToOIDCProviderWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientId) {
            @$query['ClientId'] = $request->clientId;
        }

        if (null !== $request->OIDCProviderName) {
            @$query['OIDCProviderName'] = $request->OIDCProviderName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AddClientIdToOIDCProvider',
            'version' => '2019-08-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AddClientIdToOIDCProviderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Adds a client ID to an OpenID Connect (OIDC) identity provider (IdP).
     *
     * @param request - AddClientIdToOIDCProviderRequest
     *
     * @returns AddClientIdToOIDCProviderResponse
     *
     * @param AddClientIdToOIDCProviderRequest $request
     *
     * @return AddClientIdToOIDCProviderResponse
     */
    public function addClientIdToOIDCProvider($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addClientIdToOIDCProviderWithOptions($request, $runtime);
    }

    /**
     * Adds a fingerprint to an OpenID Connect (OIDC) identity provider (IdP).
     *
     * @remarks
     * ###
     * This topic provides an example on how to add the fingerprint `902ef2deeb3c5b13ea4c3d5193629309e231****` to the OIDC IdP named `TestOIDCProvider`.
     *
     * @param request - AddFingerprintToOIDCProviderRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddFingerprintToOIDCProviderResponse
     *
     * @param AddFingerprintToOIDCProviderRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return AddFingerprintToOIDCProviderResponse
     */
    public function addFingerprintToOIDCProviderWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->fingerprint) {
            @$query['Fingerprint'] = $request->fingerprint;
        }

        if (null !== $request->OIDCProviderName) {
            @$query['OIDCProviderName'] = $request->OIDCProviderName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AddFingerprintToOIDCProvider',
            'version' => '2019-08-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AddFingerprintToOIDCProviderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Adds a fingerprint to an OpenID Connect (OIDC) identity provider (IdP).
     *
     * @remarks
     * ###
     * This topic provides an example on how to add the fingerprint `902ef2deeb3c5b13ea4c3d5193629309e231****` to the OIDC IdP named `TestOIDCProvider`.
     *
     * @param request - AddFingerprintToOIDCProviderRequest
     *
     * @returns AddFingerprintToOIDCProviderResponse
     *
     * @param AddFingerprintToOIDCProviderRequest $request
     *
     * @return AddFingerprintToOIDCProviderResponse
     */
    public function addFingerprintToOIDCProvider($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addFingerprintToOIDCProviderWithOptions($request, $runtime);
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

        if (null !== $request->userPrincipalName) {
            @$query['UserPrincipalName'] = $request->userPrincipalName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AddUserToGroup',
            'version' => '2019-08-15',
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

        if (null !== $request->userPrincipalName) {
            @$query['UserPrincipalName'] = $request->userPrincipalName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'BindMFADevice',
            'version' => '2019-08-15',
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
            'version' => '2019-08-15',
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
     * Creates an AccessKey pair for an Alibaba Cloud account or a Resource Access Management (RAM) user.
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
        if (null !== $request->userPrincipalName) {
            @$query['UserPrincipalName'] = $request->userPrincipalName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateAccessKey',
            'version' => '2019-08-15',
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
     * Creates an AccessKey pair for an Alibaba Cloud account or a Resource Access Management (RAM) user.
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
     * Creates an application secret for an application.
     *
     * @param request - CreateAppSecretRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateAppSecretResponse
     *
     * @param CreateAppSecretRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return CreateAppSecretResponse
     */
    public function createAppSecretWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateAppSecret',
            'version' => '2019-08-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateAppSecretResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates an application secret for an application.
     *
     * @param request - CreateAppSecretRequest
     *
     * @returns CreateAppSecretResponse
     *
     * @param CreateAppSecretRequest $request
     *
     * @return CreateAppSecretResponse
     */
    public function createAppSecret($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAppSecretWithOptions($request, $runtime);
    }

    /**
     * Creates an application.
     *
     * @param request - CreateApplicationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateApplicationResponse
     *
     * @param CreateApplicationRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CreateApplicationResponse
     */
    public function createApplicationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accessTokenValidity) {
            @$query['AccessTokenValidity'] = $request->accessTokenValidity;
        }

        if (null !== $request->appName) {
            @$query['AppName'] = $request->appName;
        }

        if (null !== $request->appType) {
            @$query['AppType'] = $request->appType;
        }

        if (null !== $request->displayName) {
            @$query['DisplayName'] = $request->displayName;
        }

        if (null !== $request->isMultiTenant) {
            @$query['IsMultiTenant'] = $request->isMultiTenant;
        }

        if (null !== $request->predefinedScopes) {
            @$query['PredefinedScopes'] = $request->predefinedScopes;
        }

        if (null !== $request->protocolVersion) {
            @$query['ProtocolVersion'] = $request->protocolVersion;
        }

        if (null !== $request->redirectUris) {
            @$query['RedirectUris'] = $request->redirectUris;
        }

        if (null !== $request->refreshTokenValidity) {
            @$query['RefreshTokenValidity'] = $request->refreshTokenValidity;
        }

        if (null !== $request->requiredScopes) {
            @$query['RequiredScopes'] = $request->requiredScopes;
        }

        if (null !== $request->secretRequired) {
            @$query['SecretRequired'] = $request->secretRequired;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateApplication',
            'version' => '2019-08-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateApplicationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates an application.
     *
     * @param request - CreateApplicationRequest
     *
     * @returns CreateApplicationResponse
     *
     * @param CreateApplicationRequest $request
     *
     * @return CreateApplicationResponse
     */
    public function createApplication($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createApplicationWithOptions($request, $runtime);
    }

    /**
     * Creates a Resource Access Management (RAM) user group.
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

        if (null !== $request->displayName) {
            @$query['DisplayName'] = $request->displayName;
        }

        if (null !== $request->groupName) {
            @$query['GroupName'] = $request->groupName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateGroup',
            'version' => '2019-08-15',
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
     * Creates a Resource Access Management (RAM) user group.
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
     * Enables logon to the console for a Resource Access Management (RAM) user.
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

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        if (null !== $request->userPrincipalName) {
            @$query['UserPrincipalName'] = $request->userPrincipalName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateLoginProfile',
            'version' => '2019-08-15',
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
     * Enables logon to the console for a Resource Access Management (RAM) user.
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
     * Creates an OpenID Connect (OIDC) identity provider (IdP) to configure a trust relationship between Alibaba Cloud and an external IdP. This topic provides an example on how to create an IdP named TestOIDCProvider to configure a trust relationship between the external IdP Okta and Alibaba Cloud.
     *
     * @remarks
     * ### [](#)Prerequisites
     * Before you call this operation, make sure that the information such as the URL of the issuer, the fingerprints of HTTPS certificate authority (CA) certificates, and the client IDs are obtained from an external IdP, such as Google Workspace or Okta.
     * ### [](#)Limits
     * *   You can create a maximum of 100 OIDC IdPs in an Alibaba Cloud account.
     * *   You can add a maximum of 50 client IDs to an OIDC IdP.
     * *   You can add a maximum of five fingerprints to an OIDC IdP.
     * ### [](#)Operation description
     * This topic provides an example on how to create an IdP named `TestOIDCProvider` to configure a trust relationship between the external IdP and Alibaba Cloud.
     *
     * @param request - CreateOIDCProviderRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateOIDCProviderResponse
     *
     * @param CreateOIDCProviderRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return CreateOIDCProviderResponse
     */
    public function createOIDCProviderWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientIds) {
            @$query['ClientIds'] = $request->clientIds;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->fingerprints) {
            @$query['Fingerprints'] = $request->fingerprints;
        }

        if (null !== $request->issuanceLimitTime) {
            @$query['IssuanceLimitTime'] = $request->issuanceLimitTime;
        }

        if (null !== $request->issuerUrl) {
            @$query['IssuerUrl'] = $request->issuerUrl;
        }

        if (null !== $request->OIDCProviderName) {
            @$query['OIDCProviderName'] = $request->OIDCProviderName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateOIDCProvider',
            'version' => '2019-08-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateOIDCProviderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates an OpenID Connect (OIDC) identity provider (IdP) to configure a trust relationship between Alibaba Cloud and an external IdP. This topic provides an example on how to create an IdP named TestOIDCProvider to configure a trust relationship between the external IdP Okta and Alibaba Cloud.
     *
     * @remarks
     * ### [](#)Prerequisites
     * Before you call this operation, make sure that the information such as the URL of the issuer, the fingerprints of HTTPS certificate authority (CA) certificates, and the client IDs are obtained from an external IdP, such as Google Workspace or Okta.
     * ### [](#)Limits
     * *   You can create a maximum of 100 OIDC IdPs in an Alibaba Cloud account.
     * *   You can add a maximum of 50 client IDs to an OIDC IdP.
     * *   You can add a maximum of five fingerprints to an OIDC IdP.
     * ### [](#)Operation description
     * This topic provides an example on how to create an IdP named `TestOIDCProvider` to configure a trust relationship between the external IdP and Alibaba Cloud.
     *
     * @param request - CreateOIDCProviderRequest
     *
     * @returns CreateOIDCProviderResponse
     *
     * @param CreateOIDCProviderRequest $request
     *
     * @return CreateOIDCProviderResponse
     */
    public function createOIDCProvider($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createOIDCProviderWithOptions($request, $runtime);
    }

    /**
     * Creates an identity provider (IdP) for role-based single sign-on (SSO).
     *
     * @param request - CreateSAMLProviderRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateSAMLProviderResponse
     *
     * @param CreateSAMLProviderRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return CreateSAMLProviderResponse
     */
    public function createSAMLProviderWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->encodedSAMLMetadataDocument) {
            @$query['EncodedSAMLMetadataDocument'] = $request->encodedSAMLMetadataDocument;
        }

        if (null !== $request->SAMLProviderName) {
            @$query['SAMLProviderName'] = $request->SAMLProviderName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateSAMLProvider',
            'version' => '2019-08-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateSAMLProviderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates an identity provider (IdP) for role-based single sign-on (SSO).
     *
     * @param request - CreateSAMLProviderRequest
     *
     * @returns CreateSAMLProviderResponse
     *
     * @param CreateSAMLProviderRequest $request
     *
     * @return CreateSAMLProviderResponse
     */
    public function createSAMLProvider($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSAMLProviderWithOptions($request, $runtime);
    }

    /**
     * Creates a RAM user.
     *
     * @remarks
     * This topic provides an example on how to create a RAM user named `test`.
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

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        if (null !== $request->userPrincipalName) {
            @$query['UserPrincipalName'] = $request->userPrincipalName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateUser',
            'version' => '2019-08-15',
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
     * Creates a RAM user.
     *
     * @remarks
     * This topic provides an example on how to create a RAM user named `test`.
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
     * Creates a virtual multi-factor authentication (MFA) device.
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
            'version' => '2019-08-15',
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
     * Creates a virtual multi-factor authentication (MFA) device.
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
     * Deletes an AccessKey pair for an Alibaba Cloud account or a Resource Access Management (RAM) user.
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

        if (null !== $request->userPrincipalName) {
            @$query['UserPrincipalName'] = $request->userPrincipalName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteAccessKey',
            'version' => '2019-08-15',
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
     * Deletes an AccessKey pair for an Alibaba Cloud account or a Resource Access Management (RAM) user.
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
     * Deletes a specific AccessKey pair that belongs to a Resource Access Management (RAM) user from the recycle bin.
     *
     * @param request - DeleteAccessKeyInRecycleBinRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteAccessKeyInRecycleBinResponse
     *
     * @param DeleteAccessKeyInRecycleBinRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DeleteAccessKeyInRecycleBinResponse
     */
    public function deleteAccessKeyInRecycleBinWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->userAccessKeyId) {
            @$query['UserAccessKeyId'] = $request->userAccessKeyId;
        }

        if (null !== $request->userId) {
            @$query['UserId'] = $request->userId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteAccessKeyInRecycleBin',
            'version' => '2019-08-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteAccessKeyInRecycleBinResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a specific AccessKey pair that belongs to a Resource Access Management (RAM) user from the recycle bin.
     *
     * @param request - DeleteAccessKeyInRecycleBinRequest
     *
     * @returns DeleteAccessKeyInRecycleBinResponse
     *
     * @param DeleteAccessKeyInRecycleBinRequest $request
     *
     * @return DeleteAccessKeyInRecycleBinResponse
     */
    public function deleteAccessKeyInRecycleBin($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAccessKeyInRecycleBinWithOptions($request, $runtime);
    }

    /**
     * Deletes the application secret of an application.
     *
     * @param request - DeleteAppSecretRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteAppSecretResponse
     *
     * @param DeleteAppSecretRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DeleteAppSecretResponse
     */
    public function deleteAppSecretWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->appSecretId) {
            @$query['AppSecretId'] = $request->appSecretId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteAppSecret',
            'version' => '2019-08-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteAppSecretResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes the application secret of an application.
     *
     * @param request - DeleteAppSecretRequest
     *
     * @returns DeleteAppSecretResponse
     *
     * @param DeleteAppSecretRequest $request
     *
     * @return DeleteAppSecretResponse
     */
    public function deleteAppSecret($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAppSecretWithOptions($request, $runtime);
    }

    /**
     * Deletes an application.
     *
     * @param request - DeleteApplicationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteApplicationResponse
     *
     * @param DeleteApplicationRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DeleteApplicationResponse
     */
    public function deleteApplicationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteApplication',
            'version' => '2019-08-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteApplicationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes an application.
     *
     * @param request - DeleteApplicationRequest
     *
     * @returns DeleteApplicationResponse
     *
     * @param DeleteApplicationRequest $request
     *
     * @return DeleteApplicationResponse
     */
    public function deleteApplication($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteApplicationWithOptions($request, $runtime);
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
            'version' => '2019-08-15',
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
     * Disables logon to the console for a Resource Access Management (RAM) user.
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
        if (null !== $request->userPrincipalName) {
            @$query['UserPrincipalName'] = $request->userPrincipalName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteLoginProfile',
            'version' => '2019-08-15',
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
     * Disables logon to the console for a Resource Access Management (RAM) user.
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
     * Deletes an OpenID Connect (OIDC) identity provider (IdP).
     *
     * @remarks
     * ###
     * This topic provides an example on how to remove the OIDC IdP named `TestOIDCProvider`.
     *
     * @param request - DeleteOIDCProviderRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteOIDCProviderResponse
     *
     * @param DeleteOIDCProviderRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteOIDCProviderResponse
     */
    public function deleteOIDCProviderWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->OIDCProviderName) {
            @$query['OIDCProviderName'] = $request->OIDCProviderName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteOIDCProvider',
            'version' => '2019-08-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteOIDCProviderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes an OpenID Connect (OIDC) identity provider (IdP).
     *
     * @remarks
     * ###
     * This topic provides an example on how to remove the OIDC IdP named `TestOIDCProvider`.
     *
     * @param request - DeleteOIDCProviderRequest
     *
     * @returns DeleteOIDCProviderResponse
     *
     * @param DeleteOIDCProviderRequest $request
     *
     * @return DeleteOIDCProviderResponse
     */
    public function deleteOIDCProvider($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteOIDCProviderWithOptions($request, $runtime);
    }

    /**
     * Deletes a passkey for a Resource Access Management (RAM) user.
     *
     * @param request - DeletePasskeyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeletePasskeyResponse
     *
     * @param DeletePasskeyRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DeletePasskeyResponse
     */
    public function deletePasskeyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->passkeyId) {
            @$query['PasskeyId'] = $request->passkeyId;
        }

        if (null !== $request->userPrincipalName) {
            @$query['UserPrincipalName'] = $request->userPrincipalName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeletePasskey',
            'version' => '2019-08-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeletePasskeyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a passkey for a Resource Access Management (RAM) user.
     *
     * @param request - DeletePasskeyRequest
     *
     * @returns DeletePasskeyResponse
     *
     * @param DeletePasskeyRequest $request
     *
     * @return DeletePasskeyResponse
     */
    public function deletePasskey($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deletePasskeyWithOptions($request, $runtime);
    }

    /**
     * Deletes an identity provider (IdP) for role-based single sign-on (SSO).
     *
     * @param request - DeleteSAMLProviderRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteSAMLProviderResponse
     *
     * @param DeleteSAMLProviderRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteSAMLProviderResponse
     */
    public function deleteSAMLProviderWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->SAMLProviderName) {
            @$query['SAMLProviderName'] = $request->SAMLProviderName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteSAMLProvider',
            'version' => '2019-08-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteSAMLProviderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes an identity provider (IdP) for role-based single sign-on (SSO).
     *
     * @param request - DeleteSAMLProviderRequest
     *
     * @returns DeleteSAMLProviderResponse
     *
     * @param DeleteSAMLProviderRequest $request
     *
     * @return DeleteSAMLProviderResponse
     */
    public function deleteSAMLProvider($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteSAMLProviderWithOptions($request, $runtime);
    }

    /**
     * Deletes a Resource Access Management (RAM) user.
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
        if (null !== $request->userId) {
            @$query['UserId'] = $request->userId;
        }

        if (null !== $request->userPrincipalName) {
            @$query['UserPrincipalName'] = $request->userPrincipalName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteUser',
            'version' => '2019-08-15',
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
     * Deletes a specific Resource Access Management (RAM) user from the recycle bin.
     *
     * @param request - DeleteUserInRecycleBinRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteUserInRecycleBinResponse
     *
     * @param DeleteUserInRecycleBinRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DeleteUserInRecycleBinResponse
     */
    public function deleteUserInRecycleBinWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->userId) {
            @$query['UserId'] = $request->userId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteUserInRecycleBin',
            'version' => '2019-08-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteUserInRecycleBinResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a specific Resource Access Management (RAM) user from the recycle bin.
     *
     * @param request - DeleteUserInRecycleBinRequest
     *
     * @returns DeleteUserInRecycleBinResponse
     *
     * @param DeleteUserInRecycleBinRequest $request
     *
     * @return DeleteUserInRecycleBinResponse
     */
    public function deleteUserInRecycleBin($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteUserInRecycleBinWithOptions($request, $runtime);
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
            'version' => '2019-08-15',
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
     * Uninstalls an external application or an internal application of the ServerApp type.
     *
     * @remarks
     * If you want to call this operation to uninstall an internal application, the type of the internal application must be **ServerApp**. Otherwise, an error occurs when you call this operation.
     * >  For **internal applications**, only internal applications of the ServerApp type need to be **installed or provisioned**. Therefore, only internal applications of the ServerApp type **can be uninstalled**. Internal applications of the WebApp and NativeApp types **do not need to and cannot be uninstalled**.
     *
     * @param request - DeprovisionApplicationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeprovisionApplicationResponse
     *
     * @param DeprovisionApplicationRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DeprovisionApplicationResponse
     */
    public function deprovisionApplicationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeprovisionApplication',
            'version' => '2019-08-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeprovisionApplicationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Uninstalls an external application or an internal application of the ServerApp type.
     *
     * @remarks
     * If you want to call this operation to uninstall an internal application, the type of the internal application must be **ServerApp**. Otherwise, an error occurs when you call this operation.
     * >  For **internal applications**, only internal applications of the ServerApp type need to be **installed or provisioned**. Therefore, only internal applications of the ServerApp type **can be uninstalled**. Internal applications of the WebApp and NativeApp types **do not need to and cannot be uninstalled**.
     *
     * @param request - DeprovisionApplicationRequest
     *
     * @returns DeprovisionApplicationResponse
     *
     * @param DeprovisionApplicationRequest $request
     *
     * @return DeprovisionApplicationResponse
     */
    public function deprovisionApplication($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deprovisionApplicationWithOptions($request, $runtime);
    }

    /**
     * Deletes an installed external application.
     *
     * @param request - DeprovisionExternalApplicationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeprovisionExternalApplicationResponse
     *
     * @param DeprovisionExternalApplicationRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DeprovisionExternalApplicationResponse
     */
    public function deprovisionExternalApplicationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeprovisionExternalApplication',
            'version' => '2019-08-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeprovisionExternalApplicationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes an installed external application.
     *
     * @param request - DeprovisionExternalApplicationRequest
     *
     * @returns DeprovisionExternalApplicationResponse
     *
     * @param DeprovisionExternalApplicationRequest $request
     *
     * @return DeprovisionExternalApplicationResponse
     */
    public function deprovisionExternalApplication($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deprovisionExternalApplicationWithOptions($request, $runtime);
    }

    /**
     * Unbinds and deletes a multi-factor authentication (MFA) device from a Resource Access Management (RAM) user.
     *
     * @param request - DisableVirtualMFARequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DisableVirtualMFAResponse
     *
     * @param DisableVirtualMFARequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DisableVirtualMFAResponse
     */
    public function disableVirtualMFAWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->userPrincipalName) {
            @$query['UserPrincipalName'] = $request->userPrincipalName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DisableVirtualMFA',
            'version' => '2019-08-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DisableVirtualMFAResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Unbinds and deletes a multi-factor authentication (MFA) device from a Resource Access Management (RAM) user.
     *
     * @param request - DisableVirtualMFARequest
     *
     * @returns DisableVirtualMFAResponse
     *
     * @param DisableVirtualMFARequest $request
     *
     * @return DisableVirtualMFAResponse
     */
    public function disableVirtualMFA($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->disableVirtualMFAWithOptions($request, $runtime);
    }

    /**
     * Generates the user credential report of an Alibaba Cloud account.
     *
     * @param request - GenerateCredentialReportRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GenerateCredentialReportResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return GenerateCredentialReportResponse
     */
    public function generateCredentialReportWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'GenerateCredentialReport',
            'version' => '2019-08-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GenerateCredentialReportResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Generates the user credential report of an Alibaba Cloud account.
     *
     * @returns GenerateCredentialReportResponse
     *
     * @return GenerateCredentialReportResponse
     */
    public function generateCredentialReport()
    {
        $runtime = new RuntimeOptions([]);

        return $this->generateCredentialReportWithOptions($runtime);
    }

    /**
     * Generates a check report for Cloud Governance.
     *
     * @param request - GenerateGovernanceReportRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GenerateGovernanceReportResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return GenerateGovernanceReportResponse
     */
    public function generateGovernanceReportWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'GenerateGovernanceReport',
            'version' => '2019-08-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GenerateGovernanceReportResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Generates a check report for Cloud Governance.
     *
     * @returns GenerateGovernanceReportResponse
     *
     * @return GenerateGovernanceReportResponse
     */
    public function generateGovernanceReport()
    {
        $runtime = new RuntimeOptions([]);

        return $this->generateGovernanceReportWithOptions($runtime);
    }

    /**
     * Queries information about a specific AccessKey pair of a Resource Access Management (RAM) user in the recycle bin.
     *
     * @param request - GetAccessKeyInfoInRecycleBinRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAccessKeyInfoInRecycleBinResponse
     *
     * @param GetAccessKeyInfoInRecycleBinRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return GetAccessKeyInfoInRecycleBinResponse
     */
    public function getAccessKeyInfoInRecycleBinWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->userAccessKeyId) {
            @$query['UserAccessKeyId'] = $request->userAccessKeyId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetAccessKeyInfoInRecycleBin',
            'version' => '2019-08-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetAccessKeyInfoInRecycleBinResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries information about a specific AccessKey pair of a Resource Access Management (RAM) user in the recycle bin.
     *
     * @param request - GetAccessKeyInfoInRecycleBinRequest
     *
     * @returns GetAccessKeyInfoInRecycleBinResponse
     *
     * @param GetAccessKeyInfoInRecycleBinRequest $request
     *
     * @return GetAccessKeyInfoInRecycleBinResponse
     */
    public function getAccessKeyInfoInRecycleBin($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAccessKeyInfoInRecycleBinWithOptions($request, $runtime);
    }

    /**
     * Queries the time when an AccessKey pair was used for the last time.
     *
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

        if (null !== $request->userPrincipalName) {
            @$query['UserPrincipalName'] = $request->userPrincipalName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetAccessKeyLastUsed',
            'version' => '2019-08-15',
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
     * Queries the time when an AccessKey pair was used for the last time.
     *
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
     * Queries information about the multi-factor authentication (MFA) devices of an Alibaba Cloud account.
     *
     * @param request - GetAccountMFAInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAccountMFAInfoResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return GetAccountMFAInfoResponse
     */
    public function getAccountMFAInfoWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'GetAccountMFAInfo',
            'version' => '2019-08-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetAccountMFAInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries information about the multi-factor authentication (MFA) devices of an Alibaba Cloud account.
     *
     * @returns GetAccountMFAInfoResponse
     *
     * @return GetAccountMFAInfoResponse
     */
    public function getAccountMFAInfo()
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAccountMFAInfoWithOptions($runtime);
    }

    /**
     * Queries the security report of an Alibaba Cloud account.
     *
     * @param request - GetAccountSecurityPracticeReportRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAccountSecurityPracticeReportResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return GetAccountSecurityPracticeReportResponse
     */
    public function getAccountSecurityPracticeReportWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'GetAccountSecurityPracticeReport',
            'version' => '2019-08-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetAccountSecurityPracticeReportResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the security report of an Alibaba Cloud account.
     *
     * @returns GetAccountSecurityPracticeReportResponse
     *
     * @return GetAccountSecurityPracticeReportResponse
     */
    public function getAccountSecurityPracticeReport()
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAccountSecurityPracticeReportWithOptions($runtime);
    }

    /**
     * Queries the overview information about an Alibaba Cloud account.
     *
     * @param request - GetAccountSummaryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAccountSummaryResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return GetAccountSummaryResponse
     */
    public function getAccountSummaryWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'GetAccountSummary',
            'version' => '2019-08-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetAccountSummaryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the overview information about an Alibaba Cloud account.
     *
     * @returns GetAccountSummaryResponse
     *
     * @return GetAccountSummaryResponse
     */
    public function getAccountSummary()
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAccountSummaryWithOptions($runtime);
    }

    /**
     * Queries the details of an application secret.
     *
     * @param request - GetAppSecretRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAppSecretResponse
     *
     * @param GetAppSecretRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return GetAppSecretResponse
     */
    public function getAppSecretWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->appSecretId) {
            @$query['AppSecretId'] = $request->appSecretId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetAppSecret',
            'version' => '2019-08-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetAppSecretResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of an application secret.
     *
     * @param request - GetAppSecretRequest
     *
     * @returns GetAppSecretResponse
     *
     * @param GetAppSecretRequest $request
     *
     * @return GetAppSecretResponse
     */
    public function getAppSecret($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAppSecretWithOptions($request, $runtime);
    }

    /**
     * Queries the configuration information about an application.
     *
     * @remarks
     * This topic provides an example on how to query the configurations of an application named `472457090344041****`.
     *
     * @param request - GetApplicationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetApplicationResponse
     *
     * @param GetApplicationRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return GetApplicationResponse
     */
    public function getApplicationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetApplication',
            'version' => '2019-08-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetApplicationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the configuration information about an application.
     *
     * @remarks
     * This topic provides an example on how to query the configurations of an application named `472457090344041****`.
     *
     * @param request - GetApplicationRequest
     *
     * @returns GetApplicationResponse
     *
     * @param GetApplicationRequest $request
     *
     * @return GetApplicationResponse
     */
    public function getApplication($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getApplicationWithOptions($request, $runtime);
    }

    /**
     * Queries installation information about a specified installed application.
     *
     * @param request - GetApplicationProvisionInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetApplicationProvisionInfoResponse
     *
     * @param GetApplicationProvisionInfoRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return GetApplicationProvisionInfoResponse
     */
    public function getApplicationProvisionInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetApplicationProvisionInfo',
            'version' => '2019-08-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetApplicationProvisionInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries installation information about a specified installed application.
     *
     * @param request - GetApplicationProvisionInfoRequest
     *
     * @returns GetApplicationProvisionInfoResponse
     *
     * @param GetApplicationProvisionInfoRequest $request
     *
     * @return GetApplicationProvisionInfoResponse
     */
    public function getApplicationProvisionInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getApplicationProvisionInfoWithOptions($request, $runtime);
    }

    /**
     * Queries the user credential reports of an Alibaba Cloud account.
     *
     * @param request - GetCredentialReportRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetCredentialReportResponse
     *
     * @param GetCredentialReportRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GetCredentialReportResponse
     */
    public function getCredentialReportWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->maxItems) {
            @$query['MaxItems'] = $request->maxItems;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetCredentialReport',
            'version' => '2019-08-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetCredentialReportResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the user credential reports of an Alibaba Cloud account.
     *
     * @param request - GetCredentialReportRequest
     *
     * @returns GetCredentialReportResponse
     *
     * @param GetCredentialReportRequest $request
     *
     * @return GetCredentialReportResponse
     */
    public function getCredentialReport($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getCredentialReportWithOptions($request, $runtime);
    }

    /**
     * Queries the default domain name of an Alibaba Cloud account.
     *
     * @param request - GetDefaultDomainRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetDefaultDomainResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return GetDefaultDomainResponse
     */
    public function getDefaultDomainWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'GetDefaultDomain',
            'version' => '2019-08-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetDefaultDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the default domain name of an Alibaba Cloud account.
     *
     * @returns GetDefaultDomainResponse
     *
     * @return GetDefaultDomainResponse
     */
    public function getDefaultDomain()
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDefaultDomainWithOptions($runtime);
    }

    /**
     * Queries information about an installed external application.
     *
     * @param request - GetExternalApplicationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetExternalApplicationResponse
     *
     * @param GetExternalApplicationRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return GetExternalApplicationResponse
     */
    public function getExternalApplicationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetExternalApplication',
            'version' => '2019-08-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetExternalApplicationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries information about an installed external application.
     *
     * @param request - GetExternalApplicationRequest
     *
     * @returns GetExternalApplicationResponse
     *
     * @param GetExternalApplicationRequest $request
     *
     * @return GetExternalApplicationResponse
     */
    public function getExternalApplication($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getExternalApplicationWithOptions($request, $runtime);
    }

    /**
     * 查询用户的单项ram治理报告.
     *
     * @param request - GetGovernanceItemReportRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetGovernanceItemReportResponse
     *
     * @param GetGovernanceItemReportRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return GetGovernanceItemReportResponse
     */
    public function getGovernanceItemReportWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->governanceItemType) {
            @$query['GovernanceItemType'] = $request->governanceItemType;
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
            'action' => 'GetGovernanceItemReport',
            'version' => '2019-08-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetGovernanceItemReportResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询用户的单项ram治理报告.
     *
     * @param request - GetGovernanceItemReportRequest
     *
     * @returns GetGovernanceItemReportResponse
     *
     * @param GetGovernanceItemReportRequest $request
     *
     * @return GetGovernanceItemReportResponse
     */
    public function getGovernanceItemReport($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getGovernanceItemReportWithOptions($request, $runtime);
    }

    /**
     * 查询成熟度报告状态
     *
     * @param request - GetGovernanceReportStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetGovernanceReportStatusResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return GetGovernanceReportStatusResponse
     */
    public function getGovernanceReportStatusWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'GetGovernanceReportStatus',
            'version' => '2019-08-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetGovernanceReportStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询成熟度报告状态
     *
     * @returns GetGovernanceReportStatusResponse
     *
     * @return GetGovernanceReportStatusResponse
     */
    public function getGovernanceReportStatus()
    {
        $runtime = new RuntimeOptions([]);

        return $this->getGovernanceReportStatusWithOptions($runtime);
    }

    /**
     * Queries the information about a Resource Access Management (RAM) user group.
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
            'version' => '2019-08-15',
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
     * Queries the information about a Resource Access Management (RAM) user group.
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
        if (null !== $request->userPrincipalName) {
            @$query['UserPrincipalName'] = $request->userPrincipalName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetLoginProfile',
            'version' => '2019-08-15',
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
     * Queries the information about an OIDC IdP.
     *
     * @remarks
     * ###
     * This topic provides an example on how to query the information about an OpenID Connect (OIDC) identity provider (IdP) named `TestOIDCProvider`.
     *
     * @param request - GetOIDCProviderRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetOIDCProviderResponse
     *
     * @param GetOIDCProviderRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return GetOIDCProviderResponse
     */
    public function getOIDCProviderWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->OIDCProviderName) {
            @$query['OIDCProviderName'] = $request->OIDCProviderName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetOIDCProvider',
            'version' => '2019-08-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetOIDCProviderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about an OIDC IdP.
     *
     * @remarks
     * ###
     * This topic provides an example on how to query the information about an OpenID Connect (OIDC) identity provider (IdP) named `TestOIDCProvider`.
     *
     * @param request - GetOIDCProviderRequest
     *
     * @returns GetOIDCProviderResponse
     *
     * @param GetOIDCProviderRequest $request
     *
     * @return GetOIDCProviderResponse
     */
    public function getOIDCProvider($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getOIDCProviderWithOptions($request, $runtime);
    }

    /**
     * Queries the details of the password policy for RAM users.
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
            'version' => '2019-08-15',
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
     * Queries the details of the password policy for RAM users.
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
     * Queries the information about an identity provider (IdP) for role-based single sign-on (SSO).
     *
     * @param request - GetSAMLProviderRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetSAMLProviderResponse
     *
     * @param GetSAMLProviderRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return GetSAMLProviderResponse
     */
    public function getSAMLProviderWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->SAMLProviderName) {
            @$query['SAMLProviderName'] = $request->SAMLProviderName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetSAMLProvider',
            'version' => '2019-08-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetSAMLProviderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about an identity provider (IdP) for role-based single sign-on (SSO).
     *
     * @param request - GetSAMLProviderRequest
     *
     * @returns GetSAMLProviderResponse
     *
     * @param GetSAMLProviderRequest $request
     *
     * @return GetSAMLProviderResponse
     */
    public function getSAMLProvider($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSAMLProviderWithOptions($request, $runtime);
    }

    /**
     * Queries the security preferences for RAM users.
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
            'version' => '2019-08-15',
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
     * Queries the security preferences for RAM users.
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
     * Queries the information about a RAM user.
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
        if (null !== $request->userAccessKeyId) {
            @$query['UserAccessKeyId'] = $request->userAccessKeyId;
        }

        if (null !== $request->userId) {
            @$query['UserId'] = $request->userId;
        }

        if (null !== $request->userPrincipalName) {
            @$query['UserPrincipalName'] = $request->userPrincipalName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetUser',
            'version' => '2019-08-15',
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
     * Queries the information about a RAM user.
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
     * Queries information about a specific Resource Access Management (RAM) user in the recycle bin.
     *
     * @param request - GetUserInRecycleBinRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetUserInRecycleBinResponse
     *
     * @param GetUserInRecycleBinRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GetUserInRecycleBinResponse
     */
    public function getUserInRecycleBinWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->userAccessKeyId) {
            @$query['UserAccessKeyId'] = $request->userAccessKeyId;
        }

        if (null !== $request->userId) {
            @$query['UserId'] = $request->userId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetUserInRecycleBin',
            'version' => '2019-08-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetUserInRecycleBinResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries information about a specific Resource Access Management (RAM) user in the recycle bin.
     *
     * @param request - GetUserInRecycleBinRequest
     *
     * @returns GetUserInRecycleBinResponse
     *
     * @param GetUserInRecycleBinRequest $request
     *
     * @return GetUserInRecycleBinResponse
     */
    public function getUserInRecycleBin($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getUserInRecycleBinWithOptions($request, $runtime);
    }

    /**
     * Queries information about the multi-factor authentication (MFA) device that is bound to a Resource Access Management (RAM) user.
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
        if (null !== $request->userPrincipalName) {
            @$query['UserPrincipalName'] = $request->userPrincipalName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetUserMFAInfo',
            'version' => '2019-08-15',
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
     * Queries information about the multi-factor authentication (MFA) device that is bound to a Resource Access Management (RAM) user.
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
     * Queries the configurations of user-based single sign-on (SSO).
     *
     * @param request - GetUserSsoSettingsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetUserSsoSettingsResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return GetUserSsoSettingsResponse
     */
    public function getUserSsoSettingsWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'GetUserSsoSettings',
            'version' => '2019-08-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetUserSsoSettingsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the configurations of user-based single sign-on (SSO).
     *
     * @returns GetUserSsoSettingsResponse
     *
     * @return GetUserSsoSettingsResponse
     */
    public function getUserSsoSettings()
    {
        $runtime = new RuntimeOptions([]);

        return $this->getUserSsoSettingsWithOptions($runtime);
    }

    /**
     * Queries the status of the mobile phone or email that is bound to a Resource Access Management (RAM) user.
     *
     * @param request - GetVerificationInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetVerificationInfoResponse
     *
     * @param GetVerificationInfoRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GetVerificationInfoResponse
     */
    public function getVerificationInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->userPrincipalName) {
            @$query['UserPrincipalName'] = $request->userPrincipalName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetVerificationInfo',
            'version' => '2019-08-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetVerificationInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the status of the mobile phone or email that is bound to a Resource Access Management (RAM) user.
     *
     * @param request - GetVerificationInfoRequest
     *
     * @returns GetVerificationInfoResponse
     *
     * @param GetVerificationInfoRequest $request
     *
     * @return GetVerificationInfoResponse
     */
    public function getVerificationInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getVerificationInfoWithOptions($request, $runtime);
    }

    /**
     * Queries the AccessKey pairs of an Alibaba Cloud account or a Resource Access Management (RAM) user.
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
        if (null !== $request->userPrincipalName) {
            @$query['UserPrincipalName'] = $request->userPrincipalName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListAccessKeys',
            'version' => '2019-08-15',
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
     * Queries the AccessKey pairs of an Alibaba Cloud account or a Resource Access Management (RAM) user.
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
     * Queries the AccessKey pairs of a specific Resource Access Management (RAM) user in the recycle bin.
     *
     * @param request - ListAccessKeysInRecycleBinRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAccessKeysInRecycleBinResponse
     *
     * @param ListAccessKeysInRecycleBinRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return ListAccessKeysInRecycleBinResponse
     */
    public function listAccessKeysInRecycleBinWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->userId) {
            @$query['UserId'] = $request->userId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListAccessKeysInRecycleBin',
            'version' => '2019-08-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListAccessKeysInRecycleBinResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the AccessKey pairs of a specific Resource Access Management (RAM) user in the recycle bin.
     *
     * @param request - ListAccessKeysInRecycleBinRequest
     *
     * @returns ListAccessKeysInRecycleBinResponse
     *
     * @param ListAccessKeysInRecycleBinRequest $request
     *
     * @return ListAccessKeysInRecycleBinResponse
     */
    public function listAccessKeysInRecycleBin($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAccessKeysInRecycleBinWithOptions($request, $runtime);
    }

    /**
     * Queries the secret IDs of an application.
     *
     * @param request - ListAppSecretIdsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAppSecretIdsResponse
     *
     * @param ListAppSecretIdsRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListAppSecretIdsResponse
     */
    public function listAppSecretIdsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListAppSecretIds',
            'version' => '2019-08-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListAppSecretIdsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the secret IDs of an application.
     *
     * @param request - ListAppSecretIdsRequest
     *
     * @returns ListAppSecretIdsResponse
     *
     * @param ListAppSecretIdsRequest $request
     *
     * @return ListAppSecretIdsResponse
     */
    public function listAppSecretIds($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAppSecretIdsWithOptions($request, $runtime);
    }

    /**
     * Queries installation information about all installed applications.
     *
     * @param request - ListApplicationProvisionInfosRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListApplicationProvisionInfosResponse
     *
     * @param ListApplicationProvisionInfosRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return ListApplicationProvisionInfosResponse
     */
    public function listApplicationProvisionInfosWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->sourceType) {
            @$query['SourceType'] = $request->sourceType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListApplicationProvisionInfos',
            'version' => '2019-08-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListApplicationProvisionInfosResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries installation information about all installed applications.
     *
     * @param request - ListApplicationProvisionInfosRequest
     *
     * @returns ListApplicationProvisionInfosResponse
     *
     * @param ListApplicationProvisionInfosRequest $request
     *
     * @return ListApplicationProvisionInfosResponse
     */
    public function listApplicationProvisionInfos($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listApplicationProvisionInfosWithOptions($request, $runtime);
    }

    /**
     * Lists the created applications.
     *
     * @remarks
     * This topic provides an example on how to query the applications within the current account. The returned result shows that only one application named `myapp` belongs to the current account.
     *
     * @param request - ListApplicationsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListApplicationsResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return ListApplicationsResponse
     */
    public function listApplicationsWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'ListApplications',
            'version' => '2019-08-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListApplicationsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Lists the created applications.
     *
     * @remarks
     * This topic provides an example on how to query the applications within the current account. The returned result shows that only one application named `myapp` belongs to the current account.
     *
     * @returns ListApplicationsResponse
     *
     * @return ListApplicationsResponse
     */
    public function listApplications()
    {
        $runtime = new RuntimeOptions([]);

        return $this->listApplicationsWithOptions($runtime);
    }

    /**
     * Queries information about all installed external applications.
     *
     * @param request - ListExternalApplicationsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListExternalApplicationsResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return ListExternalApplicationsResponse
     */
    public function listExternalApplicationsWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'ListExternalApplications',
            'version' => '2019-08-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListExternalApplicationsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries information about all installed external applications.
     *
     * @returns ListExternalApplicationsResponse
     *
     * @return ListExternalApplicationsResponse
     */
    public function listExternalApplications()
    {
        $runtime = new RuntimeOptions([]);

        return $this->listExternalApplicationsWithOptions($runtime);
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
            'version' => '2019-08-15',
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
        if (null !== $request->userPrincipalName) {
            @$query['UserPrincipalName'] = $request->userPrincipalName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListGroupsForUser',
            'version' => '2019-08-15',
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
     * Queries OIDC IdPs.
     *
     * @remarks
     * ###
     * This topic provides an example on how to query all OpenID Connect (OIDC) identity providers (IdPs) within your Alibaba Cloud account. The response shows that your Alibaba Cloud account has only one OIDC IdP named `TestOIDCProvider`.
     *
     * @param request - ListOIDCProvidersRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListOIDCProvidersResponse
     *
     * @param ListOIDCProvidersRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ListOIDCProvidersResponse
     */
    public function listOIDCProvidersWithOptions($request, $runtime)
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
            'action' => 'ListOIDCProviders',
            'version' => '2019-08-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListOIDCProvidersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries OIDC IdPs.
     *
     * @remarks
     * ###
     * This topic provides an example on how to query all OpenID Connect (OIDC) identity providers (IdPs) within your Alibaba Cloud account. The response shows that your Alibaba Cloud account has only one OIDC IdP named `TestOIDCProvider`.
     *
     * @param request - ListOIDCProvidersRequest
     *
     * @returns ListOIDCProvidersResponse
     *
     * @param ListOIDCProvidersRequest $request
     *
     * @return ListOIDCProvidersResponse
     */
    public function listOIDCProviders($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listOIDCProvidersWithOptions($request, $runtime);
    }

    /**
     * Queries the information about the passkeys that are bound to a Resource Access Management (RAM) user.
     *
     * @param request - ListPasskeysRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListPasskeysResponse
     *
     * @param ListPasskeysRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ListPasskeysResponse
     */
    public function listPasskeysWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->userPrincipalName) {
            @$query['UserPrincipalName'] = $request->userPrincipalName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListPasskeys',
            'version' => '2019-08-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListPasskeysResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about the passkeys that are bound to a Resource Access Management (RAM) user.
     *
     * @param request - ListPasskeysRequest
     *
     * @returns ListPasskeysResponse
     *
     * @param ListPasskeysRequest $request
     *
     * @return ListPasskeysResponse
     */
    public function listPasskeys($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listPasskeysWithOptions($request, $runtime);
    }

    /**
     * Queries predefined application permissions.
     *
     * @param request - ListPredefinedScopesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListPredefinedScopesResponse
     *
     * @param ListPredefinedScopesRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ListPredefinedScopesResponse
     */
    public function listPredefinedScopesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appType) {
            @$query['AppType'] = $request->appType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListPredefinedScopes',
            'version' => '2019-08-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListPredefinedScopesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries predefined application permissions.
     *
     * @param request - ListPredefinedScopesRequest
     *
     * @returns ListPredefinedScopesResponse
     *
     * @param ListPredefinedScopesRequest $request
     *
     * @return ListPredefinedScopesResponse
     */
    public function listPredefinedScopes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listPredefinedScopesWithOptions($request, $runtime);
    }

    /**
     * Queries all metric values in the most recent governance check.
     *
     * @param request - ListRecentGovernanceMetricsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListRecentGovernanceMetricsResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return ListRecentGovernanceMetricsResponse
     */
    public function listRecentGovernanceMetricsWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'ListRecentGovernanceMetrics',
            'version' => '2019-08-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListRecentGovernanceMetricsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries all metric values in the most recent governance check.
     *
     * @returns ListRecentGovernanceMetricsResponse
     *
     * @return ListRecentGovernanceMetricsResponse
     */
    public function listRecentGovernanceMetrics()
    {
        $runtime = new RuntimeOptions([]);

        return $this->listRecentGovernanceMetricsWithOptions($runtime);
    }

    /**
     * Queries information about identity providers (IdPs) for role-based single sign-on (SSO).
     *
     * @param request - ListSAMLProvidersRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListSAMLProvidersResponse
     *
     * @param ListSAMLProvidersRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ListSAMLProvidersResponse
     */
    public function listSAMLProvidersWithOptions($request, $runtime)
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
            'action' => 'ListSAMLProviders',
            'version' => '2019-08-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListSAMLProvidersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries information about identity providers (IdPs) for role-based single sign-on (SSO).
     *
     * @param request - ListSAMLProvidersRequest
     *
     * @returns ListSAMLProvidersResponse
     *
     * @param ListSAMLProvidersRequest $request
     *
     * @return ListSAMLProvidersResponse
     */
    public function listSAMLProviders($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSAMLProvidersWithOptions($request, $runtime);
    }

    /**
     * Queries the tags that are added resources.
     *
     * @remarks
     * ###
     * You must specify at least one of the following parameters or parameter pairs in a request to determine a query object:
     * *   `ResourceId.N`
     * *   `Tag.N.Key`
     * *   `Tag.N.Key` and `Tag.N.Value`
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
        $query = [];
        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->resourceId) {
            @$query['ResourceId'] = $request->resourceId;
        }

        if (null !== $request->resourcePrincipalName) {
            @$query['ResourcePrincipalName'] = $request->resourcePrincipalName;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListTagResources',
            'version' => '2019-08-15',
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
     * Queries the tags that are added resources.
     *
     * @remarks
     * ###
     * You must specify at least one of the following parameters or parameter pairs in a request to determine a query object:
     * *   `ResourceId.N`
     * *   `Tag.N.Key`
     * *   `Tag.N.Key` and `Tag.N.Value`
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
     * Queries the basic information about all Resource Access Management (RAM) users.
     *
     * @remarks
     * You can call the following API operations to query information about all RAM users:
     * *   ListUsers: queries the details of all RAM users.
     * *   ListUserBasicInfos: queries the basic information about all RAM users. The basic information includes only the logon names (`UserPrincipalName`), display names (`DisplayName`), and user IDs (`UserId`).
     *
     * @param request - ListUserBasicInfosRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListUserBasicInfosResponse
     *
     * @param ListUserBasicInfosRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ListUserBasicInfosResponse
     */
    public function listUserBasicInfosWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->marker) {
            @$query['Marker'] = $request->marker;
        }

        if (null !== $request->maxItems) {
            @$query['MaxItems'] = $request->maxItems;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListUserBasicInfos',
            'version' => '2019-08-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListUserBasicInfosResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the basic information about all Resource Access Management (RAM) users.
     *
     * @remarks
     * You can call the following API operations to query information about all RAM users:
     * *   ListUsers: queries the details of all RAM users.
     * *   ListUserBasicInfos: queries the basic information about all RAM users. The basic information includes only the logon names (`UserPrincipalName`), display names (`DisplayName`), and user IDs (`UserId`).
     *
     * @param request - ListUserBasicInfosRequest
     *
     * @returns ListUserBasicInfosResponse
     *
     * @param ListUserBasicInfosRequest $request
     *
     * @return ListUserBasicInfosResponse
     */
    public function listUserBasicInfos($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listUserBasicInfosWithOptions($request, $runtime);
    }

    /**
     * Queries information about all Resource Access Management (RAM) users.
     *
     * @remarks
     * ### [](#)
     * You can call the following API operations to query the details of all RAM users:
     * *   ListUsers: queries the details of all RAM users.
     * *   ListUserBasicInfos: queries the basic information about all RAM users. The basic information includes only the logon names (`UserPrincipalName`), display names (`DisplayName`), and user IDs (`UserId`).
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

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListUsers',
            'version' => '2019-08-15',
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
     * Queries information about all Resource Access Management (RAM) users.
     *
     * @remarks
     * ### [](#)
     * You can call the following API operations to query the details of all RAM users:
     * *   ListUsers: queries the details of all RAM users.
     * *   ListUserBasicInfos: queries the basic information about all RAM users. The basic information includes only the logon names (`UserPrincipalName`), display names (`DisplayName`), and user IDs (`UserId`).
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
            'version' => '2019-08-15',
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
     * Queries the basic information about all Resource Access Management (RAM) users in the recycle bin.
     *
     * @param request - ListUsersInRecycleBinRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListUsersInRecycleBinResponse
     *
     * @param ListUsersInRecycleBinRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ListUsersInRecycleBinResponse
     */
    public function listUsersInRecycleBinWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->filter) {
            @$query['Filter'] = $request->filter;
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
            'action' => 'ListUsersInRecycleBin',
            'version' => '2019-08-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListUsersInRecycleBinResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the basic information about all Resource Access Management (RAM) users in the recycle bin.
     *
     * @param request - ListUsersInRecycleBinRequest
     *
     * @returns ListUsersInRecycleBinResponse
     *
     * @param ListUsersInRecycleBinRequest $request
     *
     * @return ListUsersInRecycleBinResponse
     */
    public function listUsersInRecycleBin($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listUsersInRecycleBinWithOptions($request, $runtime);
    }

    /**
     * Queries multi-factor authentication (MFA) devices.
     *
     * @param request - ListVirtualMFADevicesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListVirtualMFADevicesResponse
     *
     * @param ListVirtualMFADevicesRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ListVirtualMFADevicesResponse
     */
    public function listVirtualMFADevicesWithOptions($request, $runtime)
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
            'action' => 'ListVirtualMFADevices',
            'version' => '2019-08-15',
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
     * @param request - ListVirtualMFADevicesRequest
     *
     * @returns ListVirtualMFADevicesResponse
     *
     * @param ListVirtualMFADevicesRequest $request
     *
     * @return ListVirtualMFADevicesResponse
     */
    public function listVirtualMFADevices($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listVirtualMFADevicesWithOptions($request, $runtime);
    }

    /**
     * Installs an application.
     *
     * @param request - ProvisionApplicationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ProvisionApplicationResponse
     *
     * @param ProvisionApplicationRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ProvisionApplicationResponse
     */
    public function provisionApplicationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->scopes) {
            @$query['Scopes'] = $request->scopes;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ProvisionApplication',
            'version' => '2019-08-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ProvisionApplicationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Installs an application.
     *
     * @param request - ProvisionApplicationRequest
     *
     * @returns ProvisionApplicationResponse
     *
     * @param ProvisionApplicationRequest $request
     *
     * @return ProvisionApplicationResponse
     */
    public function provisionApplication($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->provisionApplicationWithOptions($request, $runtime);
    }

    /**
     * Installs an external application.
     *
     * @param request - ProvisionExternalApplicationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ProvisionExternalApplicationResponse
     *
     * @param ProvisionExternalApplicationRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return ProvisionExternalApplicationResponse
     */
    public function provisionExternalApplicationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->scopes) {
            @$query['Scopes'] = $request->scopes;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ProvisionExternalApplication',
            'version' => '2019-08-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ProvisionExternalApplicationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Installs an external application.
     *
     * @param request - ProvisionExternalApplicationRequest
     *
     * @returns ProvisionExternalApplicationResponse
     *
     * @param ProvisionExternalApplicationRequest $request
     *
     * @return ProvisionExternalApplicationResponse
     */
    public function provisionExternalApplication($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->provisionExternalApplicationWithOptions($request, $runtime);
    }

    /**
     * Removes a client ID from an OpenID Connect (OIDC) identity provider (IdP).
     *
     * @remarks
     * ###
     * This topic provides an example on how to remove the client ID `498469743454717****` from the OIDC IdP named `TestOIDCProvider`.
     *
     * @param request - RemoveClientIdFromOIDCProviderRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RemoveClientIdFromOIDCProviderResponse
     *
     * @param RemoveClientIdFromOIDCProviderRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return RemoveClientIdFromOIDCProviderResponse
     */
    public function removeClientIdFromOIDCProviderWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientId) {
            @$query['ClientId'] = $request->clientId;
        }

        if (null !== $request->OIDCProviderName) {
            @$query['OIDCProviderName'] = $request->OIDCProviderName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RemoveClientIdFromOIDCProvider',
            'version' => '2019-08-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RemoveClientIdFromOIDCProviderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Removes a client ID from an OpenID Connect (OIDC) identity provider (IdP).
     *
     * @remarks
     * ###
     * This topic provides an example on how to remove the client ID `498469743454717****` from the OIDC IdP named `TestOIDCProvider`.
     *
     * @param request - RemoveClientIdFromOIDCProviderRequest
     *
     * @returns RemoveClientIdFromOIDCProviderResponse
     *
     * @param RemoveClientIdFromOIDCProviderRequest $request
     *
     * @return RemoveClientIdFromOIDCProviderResponse
     */
    public function removeClientIdFromOIDCProvider($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeClientIdFromOIDCProviderWithOptions($request, $runtime);
    }

    /**
     * Removes a fingerprint from an OpenID Connect (OIDC) identity provider (IdP).
     *
     * @remarks
     * ###
     * This topic provides an example on how to remove the fingerprint `6938fd4d98bab03faadb97b34396831e3780****` from the OIDC IdP named `TestOIDCProvider`.
     *
     * @param request - RemoveFingerprintFromOIDCProviderRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RemoveFingerprintFromOIDCProviderResponse
     *
     * @param RemoveFingerprintFromOIDCProviderRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return RemoveFingerprintFromOIDCProviderResponse
     */
    public function removeFingerprintFromOIDCProviderWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->fingerprint) {
            @$query['Fingerprint'] = $request->fingerprint;
        }

        if (null !== $request->OIDCProviderName) {
            @$query['OIDCProviderName'] = $request->OIDCProviderName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RemoveFingerprintFromOIDCProvider',
            'version' => '2019-08-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RemoveFingerprintFromOIDCProviderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Removes a fingerprint from an OpenID Connect (OIDC) identity provider (IdP).
     *
     * @remarks
     * ###
     * This topic provides an example on how to remove the fingerprint `6938fd4d98bab03faadb97b34396831e3780****` from the OIDC IdP named `TestOIDCProvider`.
     *
     * @param request - RemoveFingerprintFromOIDCProviderRequest
     *
     * @returns RemoveFingerprintFromOIDCProviderResponse
     *
     * @param RemoveFingerprintFromOIDCProviderRequest $request
     *
     * @return RemoveFingerprintFromOIDCProviderResponse
     */
    public function removeFingerprintFromOIDCProvider($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeFingerprintFromOIDCProviderWithOptions($request, $runtime);
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

        if (null !== $request->userPrincipalName) {
            @$query['UserPrincipalName'] = $request->userPrincipalName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RemoveUserFromGroup',
            'version' => '2019-08-15',
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
     * Restores a specific AccessKey pair that belongs to a Resource Access Management (RAM) user from the recycle bin.
     *
     * @param request - RestoreAccessKeyFromRecycleBinRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RestoreAccessKeyFromRecycleBinResponse
     *
     * @param RestoreAccessKeyFromRecycleBinRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return RestoreAccessKeyFromRecycleBinResponse
     */
    public function restoreAccessKeyFromRecycleBinWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->userAccessKeyId) {
            @$query['UserAccessKeyId'] = $request->userAccessKeyId;
        }

        if (null !== $request->userId) {
            @$query['UserId'] = $request->userId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RestoreAccessKeyFromRecycleBin',
            'version' => '2019-08-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RestoreAccessKeyFromRecycleBinResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Restores a specific AccessKey pair that belongs to a Resource Access Management (RAM) user from the recycle bin.
     *
     * @param request - RestoreAccessKeyFromRecycleBinRequest
     *
     * @returns RestoreAccessKeyFromRecycleBinResponse
     *
     * @param RestoreAccessKeyFromRecycleBinRequest $request
     *
     * @return RestoreAccessKeyFromRecycleBinResponse
     */
    public function restoreAccessKeyFromRecycleBin($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->restoreAccessKeyFromRecycleBinWithOptions($request, $runtime);
    }

    /**
     * Restores a specific Resource Access Management (RAM) user from the recycle bin.
     *
     * @param request - RestoreUserFromRecycleBinRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RestoreUserFromRecycleBinResponse
     *
     * @param RestoreUserFromRecycleBinRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return RestoreUserFromRecycleBinResponse
     */
    public function restoreUserFromRecycleBinWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->userId) {
            @$query['UserId'] = $request->userId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RestoreUserFromRecycleBin',
            'version' => '2019-08-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RestoreUserFromRecycleBinResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Restores a specific Resource Access Management (RAM) user from the recycle bin.
     *
     * @param request - RestoreUserFromRecycleBinRequest
     *
     * @returns RestoreUserFromRecycleBinResponse
     *
     * @param RestoreUserFromRecycleBinRequest $request
     *
     * @return RestoreUserFromRecycleBinResponse
     */
    public function restoreUserFromRecycleBin($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->restoreUserFromRecycleBinWithOptions($request, $runtime);
    }

    /**
     * Configures the default domain name for an Alibaba Cloud account.
     *
     * @param request - SetDefaultDomainRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SetDefaultDomainResponse
     *
     * @param SetDefaultDomainRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return SetDefaultDomainResponse
     */
    public function setDefaultDomainWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->defaultDomainName) {
            @$query['DefaultDomainName'] = $request->defaultDomainName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SetDefaultDomain',
            'version' => '2019-08-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SetDefaultDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Configures the default domain name for an Alibaba Cloud account.
     *
     * @param request - SetDefaultDomainRequest
     *
     * @returns SetDefaultDomainResponse
     *
     * @param SetDefaultDomainRequest $request
     *
     * @return SetDefaultDomainResponse
     */
    public function setDefaultDomain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setDefaultDomainWithOptions($request, $runtime);
    }

    /**
     * Configures the password policy for Resource Access Management (RAM) users.
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
        if (null !== $request->hardExpire) {
            @$query['HardExpire'] = $request->hardExpire;
        }

        if (null !== $request->maxLoginAttemps) {
            @$query['MaxLoginAttemps'] = $request->maxLoginAttemps;
        }

        if (null !== $request->maxPasswordAge) {
            @$query['MaxPasswordAge'] = $request->maxPasswordAge;
        }

        if (null !== $request->minimumPasswordDifferentCharacter) {
            @$query['MinimumPasswordDifferentCharacter'] = $request->minimumPasswordDifferentCharacter;
        }

        if (null !== $request->minimumPasswordLength) {
            @$query['MinimumPasswordLength'] = $request->minimumPasswordLength;
        }

        if (null !== $request->passwordNotContainUserName) {
            @$query['PasswordNotContainUserName'] = $request->passwordNotContainUserName;
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
            'version' => '2019-08-15',
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
     * Configures the password policy for Resource Access Management (RAM) users.
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
     * Configures security preferences for a RAM user.
     *
     * @remarks
     * ###
     * This topic provides an example on how to enable multi-factor authentication (MFA) only for RAM users who initiated unusual logons.
     *
     * @param tmpReq - SetSecurityPreferenceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SetSecurityPreferenceResponse
     *
     * @param SetSecurityPreferenceRequest $tmpReq
     * @param RuntimeOptions               $runtime
     *
     * @return SetSecurityPreferenceResponse
     */
    public function setSecurityPreferenceWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new SetSecurityPreferenceShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->verificationTypes) {
            $request->verificationTypesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->verificationTypes, 'VerificationTypes', 'json');
        }

        $query = [];
        if (null !== $request->allowUserToChangePassword) {
            @$query['AllowUserToChangePassword'] = $request->allowUserToChangePassword;
        }

        if (null !== $request->allowUserToLoginWithPasskey) {
            @$query['AllowUserToLoginWithPasskey'] = $request->allowUserToLoginWithPasskey;
        }

        if (null !== $request->allowUserToManageAccessKeys) {
            @$query['AllowUserToManageAccessKeys'] = $request->allowUserToManageAccessKeys;
        }

        if (null !== $request->allowUserToManageMFADevices) {
            @$query['AllowUserToManageMFADevices'] = $request->allowUserToManageMFADevices;
        }

        if (null !== $request->allowUserToManagePersonalDingTalk) {
            @$query['AllowUserToManagePersonalDingTalk'] = $request->allowUserToManagePersonalDingTalk;
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

        if (null !== $request->MFAOperationForLogin) {
            @$query['MFAOperationForLogin'] = $request->MFAOperationForLogin;
        }

        if (null !== $request->operationForRiskLogin) {
            @$query['OperationForRiskLogin'] = $request->operationForRiskLogin;
        }

        if (null !== $request->verificationTypesShrink) {
            @$query['VerificationTypes'] = $request->verificationTypesShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SetSecurityPreference',
            'version' => '2019-08-15',
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
     * Configures security preferences for a RAM user.
     *
     * @remarks
     * ###
     * This topic provides an example on how to enable multi-factor authentication (MFA) only for RAM users who initiated unusual logons.
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
     * Configures information about user-based single sign-on (SSO).
     *
     * @param request - SetUserSsoSettingsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SetUserSsoSettingsResponse
     *
     * @param SetUserSsoSettingsRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return SetUserSsoSettingsResponse
     */
    public function setUserSsoSettingsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->auxiliaryDomain) {
            @$query['AuxiliaryDomain'] = $request->auxiliaryDomain;
        }

        if (null !== $request->metadataDocument) {
            @$query['MetadataDocument'] = $request->metadataDocument;
        }

        if (null !== $request->ssoEnabled) {
            @$query['SsoEnabled'] = $request->ssoEnabled;
        }

        if (null !== $request->ssoLoginWithDomain) {
            @$query['SsoLoginWithDomain'] = $request->ssoLoginWithDomain;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SetUserSsoSettings',
            'version' => '2019-08-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SetUserSsoSettingsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Configures information about user-based single sign-on (SSO).
     *
     * @param request - SetUserSsoSettingsRequest
     *
     * @returns SetUserSsoSettingsResponse
     *
     * @param SetUserSsoSettingsRequest $request
     *
     * @return SetUserSsoSettingsResponse
     */
    public function setUserSsoSettings($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setUserSsoSettingsWithOptions($request, $runtime);
    }

    /**
     * Binds a mobile phone or email to a Resource Access Management (RAM) user.
     *
     * @param request - SetVerificationInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SetVerificationInfoResponse
     *
     * @param SetVerificationInfoRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return SetVerificationInfoResponse
     */
    public function setVerificationInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->email) {
            @$query['Email'] = $request->email;
        }

        if (null !== $request->mobilePhone) {
            @$query['MobilePhone'] = $request->mobilePhone;
        }

        if (null !== $request->userPrincipalName) {
            @$query['UserPrincipalName'] = $request->userPrincipalName;
        }

        if (null !== $request->verifyType) {
            @$query['VerifyType'] = $request->verifyType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SetVerificationInfo',
            'version' => '2019-08-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SetVerificationInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Binds a mobile phone or email to a Resource Access Management (RAM) user.
     *
     * @param request - SetVerificationInfoRequest
     *
     * @returns SetVerificationInfoResponse
     *
     * @param SetVerificationInfoRequest $request
     *
     * @return SetVerificationInfoResponse
     */
    public function setVerificationInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setVerificationInfoWithOptions($request, $runtime);
    }

    /**
     * Adds tags to resources.
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
        $query = [];
        if (null !== $request->resourceId) {
            @$query['ResourceId'] = $request->resourceId;
        }

        if (null !== $request->resourcePrincipalName) {
            @$query['ResourcePrincipalName'] = $request->resourcePrincipalName;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'TagResources',
            'version' => '2019-08-15',
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
        if (null !== $request->userPrincipalName) {
            @$query['UserPrincipalName'] = $request->userPrincipalName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UnbindMFADevice',
            'version' => '2019-08-15',
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
     * Unbinds a mobile phone or email from a Resource Access Management (RAM) user.
     *
     * @param request - UnbindVerificationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UnbindVerificationResponse
     *
     * @param UnbindVerificationRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return UnbindVerificationResponse
     */
    public function unbindVerificationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->email) {
            @$query['Email'] = $request->email;
        }

        if (null !== $request->mobilePhone) {
            @$query['MobilePhone'] = $request->mobilePhone;
        }

        if (null !== $request->userPrincipalName) {
            @$query['UserPrincipalName'] = $request->userPrincipalName;
        }

        if (null !== $request->verifyType) {
            @$query['VerifyType'] = $request->verifyType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UnbindVerification',
            'version' => '2019-08-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UnbindVerificationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Unbinds a mobile phone or email from a Resource Access Management (RAM) user.
     *
     * @param request - UnbindVerificationRequest
     *
     * @returns UnbindVerificationResponse
     *
     * @param UnbindVerificationRequest $request
     *
     * @return UnbindVerificationResponse
     */
    public function unbindVerification($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->unbindVerificationWithOptions($request, $runtime);
    }

    /**
     * Removes tags from a resource.
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
        $query = [];
        if (null !== $request->all) {
            @$query['All'] = $request->all;
        }

        if (null !== $request->resourceId) {
            @$query['ResourceId'] = $request->resourceId;
        }

        if (null !== $request->resourcePrincipalName) {
            @$query['ResourcePrincipalName'] = $request->resourcePrincipalName;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->tagKey) {
            @$query['TagKey'] = $request->tagKey;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UntagResources',
            'version' => '2019-08-15',
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
     * Removes tags from a resource.
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
     * Modifies the status of an AccessKey pair for an Alibaba Cloud account or a Resource Access Management (RAM) user.
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

        if (null !== $request->userPrincipalName) {
            @$query['UserPrincipalName'] = $request->userPrincipalName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateAccessKey',
            'version' => '2019-08-15',
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
     * Modifies the status of an AccessKey pair for an Alibaba Cloud account or a Resource Access Management (RAM) user.
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
     * Modifies the information about a specified application.
     *
     * @param request - UpdateApplicationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateApplicationResponse
     *
     * @param UpdateApplicationRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return UpdateApplicationResponse
     */
    public function updateApplicationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->newAccessTokenValidity) {
            @$query['NewAccessTokenValidity'] = $request->newAccessTokenValidity;
        }

        if (null !== $request->newDisplayName) {
            @$query['NewDisplayName'] = $request->newDisplayName;
        }

        if (null !== $request->newIsMultiTenant) {
            @$query['NewIsMultiTenant'] = $request->newIsMultiTenant;
        }

        if (null !== $request->newPredefinedScopes) {
            @$query['NewPredefinedScopes'] = $request->newPredefinedScopes;
        }

        if (null !== $request->newRedirectUris) {
            @$query['NewRedirectUris'] = $request->newRedirectUris;
        }

        if (null !== $request->newRefreshTokenValidity) {
            @$query['NewRefreshTokenValidity'] = $request->newRefreshTokenValidity;
        }

        if (null !== $request->newRequiredScopes) {
            @$query['NewRequiredScopes'] = $request->newRequiredScopes;
        }

        if (null !== $request->newSecretRequired) {
            @$query['NewSecretRequired'] = $request->newSecretRequired;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateApplication',
            'version' => '2019-08-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateApplicationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the information about a specified application.
     *
     * @param request - UpdateApplicationRequest
     *
     * @returns UpdateApplicationResponse
     *
     * @param UpdateApplicationRequest $request
     *
     * @return UpdateApplicationResponse
     */
    public function updateApplication($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateApplicationWithOptions($request, $runtime);
    }

    /**
     * Modifies information about a Resource Access Management (RAM) user group.
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

        if (null !== $request->newDisplayName) {
            @$query['NewDisplayName'] = $request->newDisplayName;
        }

        if (null !== $request->newGroupName) {
            @$query['NewGroupName'] = $request->newGroupName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateGroup',
            'version' => '2019-08-15',
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
     * Modifies information about a Resource Access Management (RAM) user group.
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
     * Modifies the console logon configurations of a Resource Access Management (RAM) user.
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

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        if (null !== $request->userPrincipalName) {
            @$query['UserPrincipalName'] = $request->userPrincipalName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateLoginProfile',
            'version' => '2019-08-15',
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
     * Modifies the console logon configurations of a Resource Access Management (RAM) user.
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
     * Modifies the description and client IDs of an OpenID Connect (OIDC) identity provider (IdP).
     *
     * @remarks
     * ###
     * This topic provides an example on how to change the description of the OIDC IdP named `TestOIDCProvider` to `This is a new OIDC Provider.`
     *
     * @param request - UpdateOIDCProviderRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateOIDCProviderResponse
     *
     * @param UpdateOIDCProviderRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return UpdateOIDCProviderResponse
     */
    public function updateOIDCProviderWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientIds) {
            @$query['ClientIds'] = $request->clientIds;
        }

        if (null !== $request->issuanceLimitTime) {
            @$query['IssuanceLimitTime'] = $request->issuanceLimitTime;
        }

        if (null !== $request->newDescription) {
            @$query['NewDescription'] = $request->newDescription;
        }

        if (null !== $request->OIDCProviderName) {
            @$query['OIDCProviderName'] = $request->OIDCProviderName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateOIDCProvider',
            'version' => '2019-08-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateOIDCProviderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the description and client IDs of an OpenID Connect (OIDC) identity provider (IdP).
     *
     * @remarks
     * ###
     * This topic provides an example on how to change the description of the OIDC IdP named `TestOIDCProvider` to `This is a new OIDC Provider.`
     *
     * @param request - UpdateOIDCProviderRequest
     *
     * @returns UpdateOIDCProviderResponse
     *
     * @param UpdateOIDCProviderRequest $request
     *
     * @return UpdateOIDCProviderResponse
     */
    public function updateOIDCProvider($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateOIDCProviderWithOptions($request, $runtime);
    }

    /**
     * Updates the name of a passkey.
     *
     * @param request - UpdatePasskeyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdatePasskeyResponse
     *
     * @param UpdatePasskeyRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return UpdatePasskeyResponse
     */
    public function updatePasskeyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->passkeyId) {
            @$query['PasskeyId'] = $request->passkeyId;
        }

        if (null !== $request->passkeyName) {
            @$query['PasskeyName'] = $request->passkeyName;
        }

        if (null !== $request->userPrincipalName) {
            @$query['UserPrincipalName'] = $request->userPrincipalName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdatePasskey',
            'version' => '2019-08-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdatePasskeyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the name of a passkey.
     *
     * @param request - UpdatePasskeyRequest
     *
     * @returns UpdatePasskeyResponse
     *
     * @param UpdatePasskeyRequest $request
     *
     * @return UpdatePasskeyResponse
     */
    public function updatePasskey($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updatePasskeyWithOptions($request, $runtime);
    }

    /**
     * Modifies information about an identity provider (IdP) for role-based single sign-on (SSO).
     *
     * @remarks
     * This topic provides an example on how to change the description of an IdP named `test-provider` to `This is a new provider.`
     *
     * @param request - UpdateSAMLProviderRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateSAMLProviderResponse
     *
     * @param UpdateSAMLProviderRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return UpdateSAMLProviderResponse
     */
    public function updateSAMLProviderWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->newDescription) {
            @$query['NewDescription'] = $request->newDescription;
        }

        if (null !== $request->newEncodedSAMLMetadataDocument) {
            @$query['NewEncodedSAMLMetadataDocument'] = $request->newEncodedSAMLMetadataDocument;
        }

        if (null !== $request->SAMLProviderName) {
            @$query['SAMLProviderName'] = $request->SAMLProviderName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateSAMLProvider',
            'version' => '2019-08-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateSAMLProviderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies information about an identity provider (IdP) for role-based single sign-on (SSO).
     *
     * @remarks
     * This topic provides an example on how to change the description of an IdP named `test-provider` to `This is a new provider.`
     *
     * @param request - UpdateSAMLProviderRequest
     *
     * @returns UpdateSAMLProviderResponse
     *
     * @param UpdateSAMLProviderRequest $request
     *
     * @return UpdateSAMLProviderResponse
     */
    public function updateSAMLProvider($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateSAMLProviderWithOptions($request, $runtime);
    }

    /**
     * Modifies the information about a RAM user.
     *
     * @remarks
     * This topic provides an example to show how to modify the name of a RAM user from `test@example.onaliyun.com` to `new@example.onaliyun.com`.
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

        if (null !== $request->newUserPrincipalName) {
            @$query['NewUserPrincipalName'] = $request->newUserPrincipalName;
        }

        if (null !== $request->userId) {
            @$query['UserId'] = $request->userId;
        }

        if (null !== $request->userPrincipalName) {
            @$query['UserPrincipalName'] = $request->userPrincipalName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateUser',
            'version' => '2019-08-15',
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
     * Modifies the information about a RAM user.
     *
     * @remarks
     * This topic provides an example to show how to modify the name of a RAM user from `test@example.onaliyun.com` to `new@example.onaliyun.com`.
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

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\Eiam\V20211201\Models\AddUsersToGroupRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\AddUsersToGroupResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\AddUserToOrganizationalUnitsRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\AddUserToOrganizationalUnitsResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\AuthorizeApplicationToGroupsRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\AuthorizeApplicationToGroupsResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\AuthorizeApplicationToOrganizationalUnitsRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\AuthorizeApplicationToOrganizationalUnitsResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\AuthorizeApplicationToUsersRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\AuthorizeApplicationToUsersResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\CreateApplicationClientSecretRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\CreateApplicationClientSecretResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\CreateApplicationRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\CreateApplicationResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\CreateDomainProxyTokenRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\CreateDomainProxyTokenResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\CreateDomainRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\CreateDomainResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\CreateGroupRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\CreateGroupResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\CreateIdentityProviderRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\CreateIdentityProviderResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\CreateInstanceRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\CreateInstanceResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\CreateNetworkAccessEndpointRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\CreateNetworkAccessEndpointResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\CreateOrganizationalUnitRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\CreateOrganizationalUnitResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\CreateUserRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\CreateUserResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\DeleteApplicationClientSecretRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\DeleteApplicationClientSecretResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\DeleteApplicationRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\DeleteApplicationResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\DeleteDomainProxyTokenRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\DeleteDomainProxyTokenResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\DeleteDomainRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\DeleteDomainResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\DeleteGroupRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\DeleteGroupResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\DeleteIdentityProviderRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\DeleteIdentityProviderResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\DeleteInstanceRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\DeleteInstanceResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\DeleteNetworkAccessEndpointRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\DeleteNetworkAccessEndpointResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\DeleteOrganizationalUnitChildrenRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\DeleteOrganizationalUnitChildrenResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\DeleteOrganizationalUnitRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\DeleteOrganizationalUnitResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\DeleteUserRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\DeleteUserResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\DisableApplicationApiInvokeRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\DisableApplicationApiInvokeResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\DisableApplicationClientSecretRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\DisableApplicationClientSecretResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\DisableApplicationProvisioningRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\DisableApplicationProvisioningResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\DisableApplicationRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\DisableApplicationResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\DisableApplicationSsoRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\DisableApplicationSsoResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\DisableDomainProxyTokenRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\DisableDomainProxyTokenResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\DisableIdentityProviderUdPullRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\DisableIdentityProviderUdPullResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\DisableInitDomainAutoRedirectRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\DisableInitDomainAutoRedirectResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\DisableUserRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\DisableUserResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\EnableApplicationApiInvokeRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\EnableApplicationApiInvokeResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\EnableApplicationClientSecretRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\EnableApplicationClientSecretResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\EnableApplicationProvisioningRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\EnableApplicationProvisioningResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\EnableApplicationRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\EnableApplicationResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\EnableApplicationSsoRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\EnableApplicationSsoResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\EnableDomainProxyTokenRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\EnableDomainProxyTokenResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\EnableIdentityProviderUdPullRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\EnableIdentityProviderUdPullResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\EnableInitDomainAutoRedirectRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\EnableInitDomainAutoRedirectResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\EnableUserRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\EnableUserResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\GetApplicationGrantScopeRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\GetApplicationGrantScopeResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\GetApplicationProvisioningConfigRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\GetApplicationProvisioningConfigResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\GetApplicationProvisioningScopeRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\GetApplicationProvisioningScopeResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\GetApplicationRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\GetApplicationResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\GetApplicationSsoConfigRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\GetApplicationSsoConfigResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\GetDomainDnsChallengeRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\GetDomainDnsChallengeResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\GetDomainRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\GetDomainResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\GetForgetPasswordConfigurationRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\GetForgetPasswordConfigurationResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\GetGroupRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\GetGroupResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\GetIdentityProviderRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\GetIdentityProviderResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\GetIdentityProviderUdPullConfigurationRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\GetIdentityProviderUdPullConfigurationResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\GetInstanceLicenseRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\GetInstanceLicenseResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\GetInstanceRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\GetInstanceResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\GetNetworkAccessEndpointRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\GetNetworkAccessEndpointResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\GetOrganizationalUnitRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\GetOrganizationalUnitResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\GetPasswordComplexityConfigurationRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\GetPasswordComplexityConfigurationResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\GetPasswordExpirationConfigurationRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\GetPasswordExpirationConfigurationResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\GetPasswordHistoryConfigurationRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\GetPasswordHistoryConfigurationResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\GetPasswordInitializationConfigurationRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\GetPasswordInitializationConfigurationResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\GetRootOrganizationalUnitRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\GetRootOrganizationalUnitResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\GetSynchronizationJobRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\GetSynchronizationJobResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\GetUserRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\GetUserResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\ListApplicationClientSecretsRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\ListApplicationClientSecretsResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\ListApplicationsForOrganizationalUnitRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\ListApplicationsForOrganizationalUnitResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\ListApplicationsForUserRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\ListApplicationsForUserResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\ListApplicationsRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\ListApplicationsResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\ListDomainProxyTokensRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\ListDomainProxyTokensResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\ListDomainsRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\ListDomainsResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\ListEiamInstancesRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\ListEiamInstancesResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\ListEiamRegionsResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\ListGroupsForApplicationRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\ListGroupsForApplicationResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\ListGroupsForUserRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\ListGroupsForUserResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\ListGroupsRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\ListGroupsResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\ListIdentityProvidersRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\ListIdentityProvidersResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\ListInstancesRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\ListInstancesResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\ListNetworkAccessEndpointAvailableRegionsResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\ListNetworkAccessEndpointAvailableZonesRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\ListNetworkAccessEndpointAvailableZonesResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\ListNetworkAccessEndpointsRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\ListNetworkAccessEndpointsResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\ListNetworkAccessPathsRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\ListNetworkAccessPathsResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\ListOrganizationalUnitParentsRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\ListOrganizationalUnitParentsResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\ListOrganizationalUnitsForApplicationRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\ListOrganizationalUnitsForApplicationResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\ListOrganizationalUnitsRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\ListOrganizationalUnitsResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\ListRegionsResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\ListSynchronizationJobsRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\ListSynchronizationJobsResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\ListUsersForApplicationRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\ListUsersForApplicationResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\ListUsersForGroupRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\ListUsersForGroupResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\ListUsersRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\ListUsersResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\ObtainApplicationClientSecretRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\ObtainApplicationClientSecretResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\ObtainDomainProxyTokenRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\ObtainDomainProxyTokenResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\RemoveUserFromOrganizationalUnitsRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\RemoveUserFromOrganizationalUnitsResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\RemoveUsersFromGroupRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\RemoveUsersFromGroupResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\RevokeApplicationFromGroupsRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\RevokeApplicationFromGroupsResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\RevokeApplicationFromOrganizationalUnitsRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\RevokeApplicationFromOrganizationalUnitsResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\RevokeApplicationFromUsersRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\RevokeApplicationFromUsersResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\RunSynchronizationJobRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\RunSynchronizationJobResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\SetApplicationGrantScopeRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\SetApplicationGrantScopeResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\SetApplicationProvisioningConfigRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\SetApplicationProvisioningConfigResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\SetApplicationProvisioningScopeRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\SetApplicationProvisioningScopeResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\SetApplicationSsoConfigRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\SetApplicationSsoConfigResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\SetDefaultDomainRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\SetDefaultDomainResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\SetForgetPasswordConfigurationRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\SetForgetPasswordConfigurationResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\SetIdentityProviderUdPullConfigurationRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\SetIdentityProviderUdPullConfigurationResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\SetPasswordComplexityConfigurationRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\SetPasswordComplexityConfigurationResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\SetPasswordExpirationConfigurationRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\SetPasswordExpirationConfigurationResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\SetPasswordHistoryConfigurationRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\SetPasswordHistoryConfigurationResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\SetPasswordInitializationConfigurationRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\SetPasswordInitializationConfigurationResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\SetUserPrimaryOrganizationalUnitRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\SetUserPrimaryOrganizationalUnitResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\UnlockUserRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\UnlockUserResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\UpdateApplicationAuthorizationTypeRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\UpdateApplicationAuthorizationTypeResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\UpdateApplicationDescriptionRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\UpdateApplicationDescriptionResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\UpdateGroupDescriptionRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\UpdateGroupDescriptionResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\UpdateGroupRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\UpdateGroupResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\UpdateIdentityProviderRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\UpdateIdentityProviderResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\UpdateInstanceDescriptionRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\UpdateInstanceDescriptionResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\UpdateNetworkAccessEndpointNameRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\UpdateNetworkAccessEndpointNameResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\UpdateOrganizationalUnitDescriptionRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\UpdateOrganizationalUnitDescriptionResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\UpdateOrganizationalUnitParentIdRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\UpdateOrganizationalUnitParentIdResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\UpdateOrganizationalUnitRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\UpdateOrganizationalUnitResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\UpdateUserDescriptionRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\UpdateUserDescriptionResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\UpdateUserPasswordRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\UpdateUserPasswordResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\UpdateUserRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\UpdateUserResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class Eiam extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('eiam', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * Adds an Employee Identity and Access Management (EIAM) account to multiple EIAM organizations of Identity as a Service (IDaaS). If the account already exists in the organizational unit, the system directly returns a success response.
     *
     * @param request - AddUserToOrganizationalUnitsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns AddUserToOrganizationalUnitsResponse
     *
     * @param AddUserToOrganizationalUnitsRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return AddUserToOrganizationalUnitsResponse
     */
    public function addUserToOrganizationalUnitsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->organizationalUnitIds) {
            @$query['OrganizationalUnitIds'] = $request->organizationalUnitIds;
        }

        if (null !== $request->userId) {
            @$query['UserId'] = $request->userId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddUserToOrganizationalUnits',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return AddUserToOrganizationalUnitsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return AddUserToOrganizationalUnitsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Adds an Employee Identity and Access Management (EIAM) account to multiple EIAM organizations of Identity as a Service (IDaaS). If the account already exists in the organizational unit, the system directly returns a success response.
     *
     * @param request - AddUserToOrganizationalUnitsRequest
     * @returns AddUserToOrganizationalUnitsResponse
     *
     * @param AddUserToOrganizationalUnitsRequest $request
     *
     * @return AddUserToOrganizationalUnitsResponse
     */
    public function addUserToOrganizationalUnits($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addUserToOrganizationalUnitsWithOptions($request, $runtime);
    }

    /**
     * Adds Employee Identity and Access Management (EIAM) accounts to an EIAM group of Identity as a Service (IDaaS).
     *
     * @param request - AddUsersToGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns AddUsersToGroupResponse
     *
     * @param AddUsersToGroupRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return AddUsersToGroupResponse
     */
    public function addUsersToGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->userIds) {
            @$query['UserIds'] = $request->userIds;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddUsersToGroup',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return AddUsersToGroupResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return AddUsersToGroupResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Adds Employee Identity and Access Management (EIAM) accounts to an EIAM group of Identity as a Service (IDaaS).
     *
     * @param request - AddUsersToGroupRequest
     * @returns AddUsersToGroupResponse
     *
     * @param AddUsersToGroupRequest $request
     *
     * @return AddUsersToGroupResponse
     */
    public function addUsersToGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addUsersToGroupWithOptions($request, $runtime);
    }

    /**
     * Grants the permissions to access an application to multiple account groups at a time in Identity as a Service (IDaaS) Employee Identity and Access Management (EIAM).
     *
     * @param request - AuthorizeApplicationToGroupsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns AuthorizeApplicationToGroupsResponse
     *
     * @param AuthorizeApplicationToGroupsRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return AuthorizeApplicationToGroupsResponse
     */
    public function authorizeApplicationToGroupsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->applicationId) {
            @$query['ApplicationId'] = $request->applicationId;
        }

        if (null !== $request->groupIds) {
            @$query['GroupIds'] = $request->groupIds;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'AuthorizeApplicationToGroups',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return AuthorizeApplicationToGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return AuthorizeApplicationToGroupsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Grants the permissions to access an application to multiple account groups at a time in Identity as a Service (IDaaS) Employee Identity and Access Management (EIAM).
     *
     * @param request - AuthorizeApplicationToGroupsRequest
     * @returns AuthorizeApplicationToGroupsResponse
     *
     * @param AuthorizeApplicationToGroupsRequest $request
     *
     * @return AuthorizeApplicationToGroupsResponse
     */
    public function authorizeApplicationToGroups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->authorizeApplicationToGroupsWithOptions($request, $runtime);
    }

    /**
     * Grants the access permissions on an application to multiple Employee Identity and Access Management (EIAM) organizations at a time.
     *
     * @param request - AuthorizeApplicationToOrganizationalUnitsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns AuthorizeApplicationToOrganizationalUnitsResponse
     *
     * @param AuthorizeApplicationToOrganizationalUnitsRequest $request
     * @param RuntimeOptions                                   $runtime
     *
     * @return AuthorizeApplicationToOrganizationalUnitsResponse
     */
    public function authorizeApplicationToOrganizationalUnitsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->applicationId) {
            @$query['ApplicationId'] = $request->applicationId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->organizationalUnitIds) {
            @$query['OrganizationalUnitIds'] = $request->organizationalUnitIds;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'AuthorizeApplicationToOrganizationalUnits',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return AuthorizeApplicationToOrganizationalUnitsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return AuthorizeApplicationToOrganizationalUnitsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Grants the access permissions on an application to multiple Employee Identity and Access Management (EIAM) organizations at a time.
     *
     * @param request - AuthorizeApplicationToOrganizationalUnitsRequest
     * @returns AuthorizeApplicationToOrganizationalUnitsResponse
     *
     * @param AuthorizeApplicationToOrganizationalUnitsRequest $request
     *
     * @return AuthorizeApplicationToOrganizationalUnitsResponse
     */
    public function authorizeApplicationToOrganizationalUnits($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->authorizeApplicationToOrganizationalUnitsWithOptions($request, $runtime);
    }

    /**
     * Grants the access permissions on an application to multiple Employee Identity and Access Management (EIAM) accounts at a time.
     *
     * @param request - AuthorizeApplicationToUsersRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns AuthorizeApplicationToUsersResponse
     *
     * @param AuthorizeApplicationToUsersRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return AuthorizeApplicationToUsersResponse
     */
    public function authorizeApplicationToUsersWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->applicationId) {
            @$query['ApplicationId'] = $request->applicationId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->userIds) {
            @$query['UserIds'] = $request->userIds;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'AuthorizeApplicationToUsers',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return AuthorizeApplicationToUsersResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return AuthorizeApplicationToUsersResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Grants the access permissions on an application to multiple Employee Identity and Access Management (EIAM) accounts at a time.
     *
     * @param request - AuthorizeApplicationToUsersRequest
     * @returns AuthorizeApplicationToUsersResponse
     *
     * @param AuthorizeApplicationToUsersRequest $request
     *
     * @return AuthorizeApplicationToUsersResponse
     */
    public function authorizeApplicationToUsers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->authorizeApplicationToUsersWithOptions($request, $runtime);
    }

    /**
     * Adds an application to an Enterprise Identity Access Management (EIAM) instance of Identity as a Service (IDaaS).
     *
     * @remarks
     * IDaaS EIAM supports the following two standard single sign-on (SSO) protocols for adding applications: SAML 2.0 and OIDC. You can select an SSO protocol based on your business requirements when you add an application. You cannot change the SSO protocol that you selected after the application is added.
     *
     * @param request - CreateApplicationRequest
     * @param runtime - runtime options for this request RuntimeOptions
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
        if (null !== $request->applicationName) {
            @$query['ApplicationName'] = $request->applicationName;
        }

        if (null !== $request->applicationSourceType) {
            @$query['ApplicationSourceType'] = $request->applicationSourceType;
        }

        if (null !== $request->applicationTemplateId) {
            @$query['ApplicationTemplateId'] = $request->applicationTemplateId;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->logoUrl) {
            @$query['LogoUrl'] = $request->logoUrl;
        }

        if (null !== $request->ssoType) {
            @$query['SsoType'] = $request->ssoType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateApplication',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateApplicationResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateApplicationResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Adds an application to an Enterprise Identity Access Management (EIAM) instance of Identity as a Service (IDaaS).
     *
     * @remarks
     * IDaaS EIAM supports the following two standard single sign-on (SSO) protocols for adding applications: SAML 2.0 and OIDC. You can select an SSO protocol based on your business requirements when you add an application. You cannot change the SSO protocol that you selected after the application is added.
     *
     * @param request - CreateApplicationRequest
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
     * Creates a client key for an Employee Identity and Access Management (EIAM) application. An EIAM application can have up to two client keys.
     *
     * @param request - CreateApplicationClientSecretRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns CreateApplicationClientSecretResponse
     *
     * @param CreateApplicationClientSecretRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return CreateApplicationClientSecretResponse
     */
    public function createApplicationClientSecretWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->applicationId) {
            @$query['ApplicationId'] = $request->applicationId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateApplicationClientSecret',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateApplicationClientSecretResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateApplicationClientSecretResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Creates a client key for an Employee Identity and Access Management (EIAM) application. An EIAM application can have up to two client keys.
     *
     * @param request - CreateApplicationClientSecretRequest
     * @returns CreateApplicationClientSecretResponse
     *
     * @param CreateApplicationClientSecretRequest $request
     *
     * @return CreateApplicationClientSecretResponse
     */
    public function createApplicationClientSecret($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createApplicationClientSecretWithOptions($request, $runtime);
    }

    /**
     * 创建域名。
     *
     * @param request - CreateDomainRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns CreateDomainResponse
     *
     * @param CreateDomainRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return CreateDomainResponse
     */
    public function createDomainWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domain) {
            @$query['Domain'] = $request->domain;
        }

        if (null !== $request->filing) {
            @$query['Filing'] = $request->filing;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateDomain',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateDomainResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateDomainResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 创建域名。
     *
     * @param request - CreateDomainRequest
     * @returns CreateDomainResponse
     *
     * @param CreateDomainRequest $request
     *
     * @return CreateDomainResponse
     */
    public function createDomain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDomainWithOptions($request, $runtime);
    }

    /**
     * 创建域名代理Token。
     *
     * @param request - CreateDomainProxyTokenRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns CreateDomainProxyTokenResponse
     *
     * @param CreateDomainProxyTokenRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return CreateDomainProxyTokenResponse
     */
    public function createDomainProxyTokenWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domainId) {
            @$query['DomainId'] = $request->domainId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateDomainProxyToken',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateDomainProxyTokenResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateDomainProxyTokenResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 创建域名代理Token。
     *
     * @param request - CreateDomainProxyTokenRequest
     * @returns CreateDomainProxyTokenResponse
     *
     * @param CreateDomainProxyTokenRequest $request
     *
     * @return CreateDomainProxyTokenResponse
     */
    public function createDomainProxyToken($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDomainProxyTokenWithOptions($request, $runtime);
    }

    /**
     * Creates an account group in Identity as a Service (IDaaS) Employee Identity and Access Management (EIAM).
     *
     * @param request - CreateGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
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

        if (null !== $request->groupExternalId) {
            @$query['GroupExternalId'] = $request->groupExternalId;
        }

        if (null !== $request->groupName) {
            @$query['GroupName'] = $request->groupName;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateGroup',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateGroupResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateGroupResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Creates an account group in Identity as a Service (IDaaS) Employee Identity and Access Management (EIAM).
     *
     * @param request - CreateGroupRequest
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
     * 创建身份提供方.
     *
     * @param request - CreateIdentityProviderRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns CreateIdentityProviderResponse
     *
     * @param CreateIdentityProviderRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return CreateIdentityProviderResponse
     */
    public function createIdentityProviderWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->authnConfig) {
            @$query['AuthnConfig'] = $request->authnConfig;
        }

        if (null !== $request->autoCreateUserConfig) {
            @$query['AutoCreateUserConfig'] = $request->autoCreateUserConfig;
        }

        if (null !== $request->autoUpdateUserConfig) {
            @$query['AutoUpdateUserConfig'] = $request->autoUpdateUserConfig;
        }

        if (null !== $request->bindingConfig) {
            @$query['BindingConfig'] = $request->bindingConfig;
        }

        if (null !== $request->dingtalkAppConfig) {
            @$query['DingtalkAppConfig'] = $request->dingtalkAppConfig;
        }

        if (null !== $request->identityProviderName) {
            @$query['IdentityProviderName'] = $request->identityProviderName;
        }

        if (null !== $request->identityProviderType) {
            @$query['IdentityProviderType'] = $request->identityProviderType;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->larkConfig) {
            @$query['LarkConfig'] = $request->larkConfig;
        }

        if (null !== $request->ldapConfig) {
            @$query['LdapConfig'] = $request->ldapConfig;
        }

        if (null !== $request->logoUrl) {
            @$query['LogoUrl'] = $request->logoUrl;
        }

        if (null !== $request->networkAccessEndpointId) {
            @$query['NetworkAccessEndpointId'] = $request->networkAccessEndpointId;
        }

        if (null !== $request->oidcConfig) {
            @$query['OidcConfig'] = $request->oidcConfig;
        }

        if (null !== $request->udPullConfig) {
            @$query['UdPullConfig'] = $request->udPullConfig;
        }

        if (null !== $request->udPushConfig) {
            @$query['UdPushConfig'] = $request->udPushConfig;
        }

        if (null !== $request->weComConfig) {
            @$query['WeComConfig'] = $request->weComConfig;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateIdentityProvider',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateIdentityProviderResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateIdentityProviderResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 创建身份提供方.
     *
     * @param request - CreateIdentityProviderRequest
     * @returns CreateIdentityProviderResponse
     *
     * @param CreateIdentityProviderRequest $request
     *
     * @return CreateIdentityProviderResponse
     */
    public function createIdentityProvider($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createIdentityProviderWithOptions($request, $runtime);
    }

    /**
     * Creates an instance based on which all capabilities of Identity as a Service (IDaaS) Enterprise Identity and Access Management (EIAM) are provided.
     *
     * @param request - CreateInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns CreateInstanceResponse
     *
     * @param CreateInstanceRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return CreateInstanceResponse
     */
    public function createInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateInstance',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateInstanceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Creates an instance based on which all capabilities of Identity as a Service (IDaaS) Enterprise Identity and Access Management (EIAM) are provided.
     *
     * @param request - CreateInstanceRequest
     * @returns CreateInstanceResponse
     *
     * @param CreateInstanceRequest $request
     *
     * @return CreateInstanceResponse
     */
    public function createInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createInstanceWithOptions($request, $runtime);
    }

    /**
     * 创建一个专属网络端点。
     *
     * @param request - CreateNetworkAccessEndpointRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns CreateNetworkAccessEndpointResponse
     *
     * @param CreateNetworkAccessEndpointRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return CreateNetworkAccessEndpointResponse
     */
    public function createNetworkAccessEndpointWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->networkAccessEndpointName) {
            @$query['NetworkAccessEndpointName'] = $request->networkAccessEndpointName;
        }

        if (null !== $request->vSwitchIds) {
            @$query['VSwitchIds'] = $request->vSwitchIds;
        }

        if (null !== $request->vpcId) {
            @$query['VpcId'] = $request->vpcId;
        }

        if (null !== $request->vpcRegionId) {
            @$query['VpcRegionId'] = $request->vpcRegionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateNetworkAccessEndpoint',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateNetworkAccessEndpointResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateNetworkAccessEndpointResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 创建一个专属网络端点。
     *
     * @param request - CreateNetworkAccessEndpointRequest
     * @returns CreateNetworkAccessEndpointResponse
     *
     * @param CreateNetworkAccessEndpointRequest $request
     *
     * @return CreateNetworkAccessEndpointResponse
     */
    public function createNetworkAccessEndpoint($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createNetworkAccessEndpointWithOptions($request, $runtime);
    }

    /**
     * Creates an organization in Identity as a Service (IDaaS) Employee Identity and Access Management (EIAM).
     *
     * @param request - CreateOrganizationalUnitRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns CreateOrganizationalUnitResponse
     *
     * @param CreateOrganizationalUnitRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return CreateOrganizationalUnitResponse
     */
    public function createOrganizationalUnitWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->organizationalUnitExternalId) {
            @$query['OrganizationalUnitExternalId'] = $request->organizationalUnitExternalId;
        }

        if (null !== $request->organizationalUnitName) {
            @$query['OrganizationalUnitName'] = $request->organizationalUnitName;
        }

        if (null !== $request->parentId) {
            @$query['ParentId'] = $request->parentId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateOrganizationalUnit',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateOrganizationalUnitResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateOrganizationalUnitResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Creates an organization in Identity as a Service (IDaaS) Employee Identity and Access Management (EIAM).
     *
     * @param request - CreateOrganizationalUnitRequest
     * @returns CreateOrganizationalUnitResponse
     *
     * @param CreateOrganizationalUnitRequest $request
     *
     * @return CreateOrganizationalUnitResponse
     */
    public function createOrganizationalUnit($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createOrganizationalUnitWithOptions($request, $runtime);
    }

    /**
     * Creates an account in an Identity as a Service (IDaaS) Enterprise Identity Access Management (EIAM) instance.
     *
     * @param request - CreateUserRequest
     * @param runtime - runtime options for this request RuntimeOptions
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
        if (null !== $request->customFields) {
            @$query['CustomFields'] = $request->customFields;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->displayName) {
            @$query['DisplayName'] = $request->displayName;
        }

        if (null !== $request->email) {
            @$query['Email'] = $request->email;
        }

        if (null !== $request->emailVerified) {
            @$query['EmailVerified'] = $request->emailVerified;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->organizationalUnitIds) {
            @$query['OrganizationalUnitIds'] = $request->organizationalUnitIds;
        }

        if (null !== $request->password) {
            @$query['Password'] = $request->password;
        }

        if (null !== $request->passwordInitializationConfig) {
            @$query['PasswordInitializationConfig'] = $request->passwordInitializationConfig;
        }

        if (null !== $request->phoneNumber) {
            @$query['PhoneNumber'] = $request->phoneNumber;
        }

        if (null !== $request->phoneNumberVerified) {
            @$query['PhoneNumberVerified'] = $request->phoneNumberVerified;
        }

        if (null !== $request->phoneRegion) {
            @$query['PhoneRegion'] = $request->phoneRegion;
        }

        if (null !== $request->primaryOrganizationalUnitId) {
            @$query['PrimaryOrganizationalUnitId'] = $request->primaryOrganizationalUnitId;
        }

        if (null !== $request->userExternalId) {
            @$query['UserExternalId'] = $request->userExternalId;
        }

        if (null !== $request->username) {
            @$query['Username'] = $request->username;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateUser',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateUserResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateUserResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Creates an account in an Identity as a Service (IDaaS) Enterprise Identity Access Management (EIAM) instance.
     *
     * @param request - CreateUserRequest
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
     * Deletes an Employee Identity and Access Management (EIAM) application.
     *
     * @remarks
     * Make sure that the EIAM application that you want to delete is not used before you delete the EIAM application. After you delete the EIAM application, all configurations are deleted and cannot be restored.
     *
     * @param request - DeleteApplicationRequest
     * @param runtime - runtime options for this request RuntimeOptions
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
        if (null !== $request->applicationId) {
            @$query['ApplicationId'] = $request->applicationId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteApplication',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteApplicationResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteApplicationResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Deletes an Employee Identity and Access Management (EIAM) application.
     *
     * @remarks
     * Make sure that the EIAM application that you want to delete is not used before you delete the EIAM application. After you delete the EIAM application, all configurations are deleted and cannot be restored.
     *
     * @param request - DeleteApplicationRequest
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
     * Deletes a client key for an Employee Identity and Access Management (EIAM) application.
     *
     * @param request - DeleteApplicationClientSecretRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DeleteApplicationClientSecretResponse
     *
     * @param DeleteApplicationClientSecretRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DeleteApplicationClientSecretResponse
     */
    public function deleteApplicationClientSecretWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->applicationId) {
            @$query['ApplicationId'] = $request->applicationId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->secretId) {
            @$query['SecretId'] = $request->secretId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteApplicationClientSecret',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteApplicationClientSecretResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteApplicationClientSecretResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Deletes a client key for an Employee Identity and Access Management (EIAM) application.
     *
     * @param request - DeleteApplicationClientSecretRequest
     * @returns DeleteApplicationClientSecretResponse
     *
     * @param DeleteApplicationClientSecretRequest $request
     *
     * @return DeleteApplicationClientSecretResponse
     */
    public function deleteApplicationClientSecret($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteApplicationClientSecretWithOptions($request, $runtime);
    }

    /**
     * 删除域名。
     *
     * @param request - DeleteDomainRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DeleteDomainResponse
     *
     * @param DeleteDomainRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return DeleteDomainResponse
     */
    public function deleteDomainWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domainId) {
            @$query['DomainId'] = $request->domainId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteDomain',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteDomainResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteDomainResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 删除域名。
     *
     * @param request - DeleteDomainRequest
     * @returns DeleteDomainResponse
     *
     * @param DeleteDomainRequest $request
     *
     * @return DeleteDomainResponse
     */
    public function deleteDomain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDomainWithOptions($request, $runtime);
    }

    /**
     * 删除指定域名代理Token，删除之前请保证代理Token处于禁用状态。
     *
     * @param request - DeleteDomainProxyTokenRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DeleteDomainProxyTokenResponse
     *
     * @param DeleteDomainProxyTokenRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DeleteDomainProxyTokenResponse
     */
    public function deleteDomainProxyTokenWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domainId) {
            @$query['DomainId'] = $request->domainId;
        }

        if (null !== $request->domainProxyTokenId) {
            @$query['DomainProxyTokenId'] = $request->domainProxyTokenId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteDomainProxyToken',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteDomainProxyTokenResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteDomainProxyTokenResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 删除指定域名代理Token，删除之前请保证代理Token处于禁用状态。
     *
     * @param request - DeleteDomainProxyTokenRequest
     * @returns DeleteDomainProxyTokenResponse
     *
     * @param DeleteDomainProxyTokenRequest $request
     *
     * @return DeleteDomainProxyTokenResponse
     */
    public function deleteDomainProxyToken($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDomainProxyTokenWithOptions($request, $runtime);
    }

    /**
     * Deletes the information of an account group in Identity as a Service (IDaaS) Employee Identity and Access Management (EIAM).
     *
     * @param request - DeleteGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
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
        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteGroup',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteGroupResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteGroupResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Deletes the information of an account group in Identity as a Service (IDaaS) Employee Identity and Access Management (EIAM).
     *
     * @param request - DeleteGroupRequest
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
     * 删除身份提供方.
     *
     * @param request - DeleteIdentityProviderRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DeleteIdentityProviderResponse
     *
     * @param DeleteIdentityProviderRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DeleteIdentityProviderResponse
     */
    public function deleteIdentityProviderWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->identityProviderId) {
            @$query['IdentityProviderId'] = $request->identityProviderId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteIdentityProvider',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteIdentityProviderResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteIdentityProviderResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 删除身份提供方.
     *
     * @param request - DeleteIdentityProviderRequest
     * @returns DeleteIdentityProviderResponse
     *
     * @param DeleteIdentityProviderRequest $request
     *
     * @return DeleteIdentityProviderResponse
     */
    public function deleteIdentityProvider($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteIdentityProviderWithOptions($request, $runtime);
    }

    /**
     * Deletes an Enterprise Identity and Access Management (EIAM) instance of Identity as a Service (IDaaS) that you do not need.
     *
     * @remarks
     * Make sure that the instance to be deleted is no longer used. If the instance is deleted, all data related to the instance will be deleted.
     *
     * @param request - DeleteInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DeleteInstanceResponse
     *
     * @param DeleteInstanceRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DeleteInstanceResponse
     */
    public function deleteInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteInstance',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteInstanceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Deletes an Enterprise Identity and Access Management (EIAM) instance of Identity as a Service (IDaaS) that you do not need.
     *
     * @remarks
     * Make sure that the instance to be deleted is no longer used. If the instance is deleted, all data related to the instance will be deleted.
     *
     * @param request - DeleteInstanceRequest
     * @returns DeleteInstanceResponse
     *
     * @param DeleteInstanceRequest $request
     *
     * @return DeleteInstanceResponse
     */
    public function deleteInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteInstanceWithOptions($request, $runtime);
    }

    /**
     * 删除一个专属网络端点。
     *
     * @param request - DeleteNetworkAccessEndpointRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DeleteNetworkAccessEndpointResponse
     *
     * @param DeleteNetworkAccessEndpointRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DeleteNetworkAccessEndpointResponse
     */
    public function deleteNetworkAccessEndpointWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->networkAccessEndpointId) {
            @$query['NetworkAccessEndpointId'] = $request->networkAccessEndpointId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteNetworkAccessEndpoint',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteNetworkAccessEndpointResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteNetworkAccessEndpointResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 删除一个专属网络端点。
     *
     * @param request - DeleteNetworkAccessEndpointRequest
     * @returns DeleteNetworkAccessEndpointResponse
     *
     * @param DeleteNetworkAccessEndpointRequest $request
     *
     * @return DeleteNetworkAccessEndpointResponse
     */
    public function deleteNetworkAccessEndpoint($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteNetworkAccessEndpointWithOptions($request, $runtime);
    }

    /**
     * Deletes an organization in Identity as a Service (IDaaS) Employee Identity and Access Management (EIAM). If the organization has EIAM accounts or child organizations, the delete operation fails.
     *
     * @param request - DeleteOrganizationalUnitRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DeleteOrganizationalUnitResponse
     *
     * @param DeleteOrganizationalUnitRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DeleteOrganizationalUnitResponse
     */
    public function deleteOrganizationalUnitWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->organizationalUnitId) {
            @$query['OrganizationalUnitId'] = $request->organizationalUnitId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteOrganizationalUnit',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteOrganizationalUnitResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteOrganizationalUnitResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Deletes an organization in Identity as a Service (IDaaS) Employee Identity and Access Management (EIAM). If the organization has EIAM accounts or child organizations, the delete operation fails.
     *
     * @param request - DeleteOrganizationalUnitRequest
     * @returns DeleteOrganizationalUnitResponse
     *
     * @param DeleteOrganizationalUnitRequest $request
     *
     * @return DeleteOrganizationalUnitResponse
     */
    public function deleteOrganizationalUnit($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteOrganizationalUnitWithOptions($request, $runtime);
    }

    /**
     * Delete organizational unit information, forcibly deleting all accounts and sub-organizations beneath it.
     *
     * @param request - DeleteOrganizationalUnitChildrenRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DeleteOrganizationalUnitChildrenResponse
     *
     * @param DeleteOrganizationalUnitChildrenRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return DeleteOrganizationalUnitChildrenResponse
     */
    public function deleteOrganizationalUnitChildrenWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->organizationalUnitId) {
            @$query['OrganizationalUnitId'] = $request->organizationalUnitId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteOrganizationalUnitChildren',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteOrganizationalUnitChildrenResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteOrganizationalUnitChildrenResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Delete organizational unit information, forcibly deleting all accounts and sub-organizations beneath it.
     *
     * @param request - DeleteOrganizationalUnitChildrenRequest
     * @returns DeleteOrganizationalUnitChildrenResponse
     *
     * @param DeleteOrganizationalUnitChildrenRequest $request
     *
     * @return DeleteOrganizationalUnitChildrenResponse
     */
    public function deleteOrganizationalUnitChildren($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteOrganizationalUnitChildrenWithOptions($request, $runtime);
    }

    /**
     * Deletes an Employee Identity and Access Management (EIAM) account of Identity as a Service (IDaaS). The information related to the account is cleared.
     *
     * @param request - DeleteUserRequest
     * @param runtime - runtime options for this request RuntimeOptions
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
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->userId) {
            @$query['UserId'] = $request->userId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteUser',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteUserResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteUserResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Deletes an Employee Identity and Access Management (EIAM) account of Identity as a Service (IDaaS). The information related to the account is cleared.
     *
     * @param request - DeleteUserRequest
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
     * Disables an enabled Employee Identity and Access Management (EIAM) application. All features of the EIAM application cannot be used if you disable the EIAM application.
     *
     * @remarks
     * All features of the EIAM application cannot be used if you disable the EIAM application, such as single sign-on (SSO) and account synchronization. Make sure that you acknowledge the risks of the delete operation.
     *
     * @param request - DisableApplicationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DisableApplicationResponse
     *
     * @param DisableApplicationRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DisableApplicationResponse
     */
    public function disableApplicationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->applicationId) {
            @$query['ApplicationId'] = $request->applicationId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'DisableApplication',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DisableApplicationResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DisableApplicationResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Disables an enabled Employee Identity and Access Management (EIAM) application. All features of the EIAM application cannot be used if you disable the EIAM application.
     *
     * @remarks
     * All features of the EIAM application cannot be used if you disable the EIAM application, such as single sign-on (SSO) and account synchronization. Make sure that you acknowledge the risks of the delete operation.
     *
     * @param request - DisableApplicationRequest
     * @returns DisableApplicationResponse
     *
     * @param DisableApplicationRequest $request
     *
     * @return DisableApplicationResponse
     */
    public function disableApplication($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->disableApplicationWithOptions($request, $runtime);
    }

    /**
     * Disables the Developer API feature for an Employee Identity and Access Management (EIAM) application.
     *
     * @param request - DisableApplicationApiInvokeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DisableApplicationApiInvokeResponse
     *
     * @param DisableApplicationApiInvokeRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DisableApplicationApiInvokeResponse
     */
    public function disableApplicationApiInvokeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->applicationId) {
            @$query['ApplicationId'] = $request->applicationId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'DisableApplicationApiInvoke',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DisableApplicationApiInvokeResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DisableApplicationApiInvokeResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Disables the Developer API feature for an Employee Identity and Access Management (EIAM) application.
     *
     * @param request - DisableApplicationApiInvokeRequest
     * @returns DisableApplicationApiInvokeResponse
     *
     * @param DisableApplicationApiInvokeRequest $request
     *
     * @return DisableApplicationApiInvokeResponse
     */
    public function disableApplicationApiInvoke($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->disableApplicationApiInvokeWithOptions($request, $runtime);
    }

    /**
     * Disables a client key of an Employee Identity and Access Management (EIAM) application.
     *
     * @param request - DisableApplicationClientSecretRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DisableApplicationClientSecretResponse
     *
     * @param DisableApplicationClientSecretRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DisableApplicationClientSecretResponse
     */
    public function disableApplicationClientSecretWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->applicationId) {
            @$query['ApplicationId'] = $request->applicationId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->secretId) {
            @$query['SecretId'] = $request->secretId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'DisableApplicationClientSecret',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DisableApplicationClientSecretResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DisableApplicationClientSecretResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Disables a client key of an Employee Identity and Access Management (EIAM) application.
     *
     * @param request - DisableApplicationClientSecretRequest
     * @returns DisableApplicationClientSecretResponse
     *
     * @param DisableApplicationClientSecretRequest $request
     *
     * @return DisableApplicationClientSecretResponse
     */
    public function disableApplicationClientSecret($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->disableApplicationClientSecretWithOptions($request, $runtime);
    }

    /**
     * Disables the account synchronization feature for an application in Identity as a Service (IDaaS) Employee IAM (EIAM).
     *
     * @param request - DisableApplicationProvisioningRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DisableApplicationProvisioningResponse
     *
     * @param DisableApplicationProvisioningRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DisableApplicationProvisioningResponse
     */
    public function disableApplicationProvisioningWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->applicationId) {
            @$query['ApplicationId'] = $request->applicationId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'DisableApplicationProvisioning',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DisableApplicationProvisioningResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DisableApplicationProvisioningResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Disables the account synchronization feature for an application in Identity as a Service (IDaaS) Employee IAM (EIAM).
     *
     * @param request - DisableApplicationProvisioningRequest
     * @returns DisableApplicationProvisioningResponse
     *
     * @param DisableApplicationProvisioningRequest $request
     *
     * @return DisableApplicationProvisioningResponse
     */
    public function disableApplicationProvisioning($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->disableApplicationProvisioningWithOptions($request, $runtime);
    }

    /**
     * 禁用应用SSO能力.
     *
     * @param request - DisableApplicationSsoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DisableApplicationSsoResponse
     *
     * @param DisableApplicationSsoRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DisableApplicationSsoResponse
     */
    public function disableApplicationSsoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->applicationId) {
            @$query['ApplicationId'] = $request->applicationId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'DisableApplicationSso',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DisableApplicationSsoResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DisableApplicationSsoResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 禁用应用SSO能力.
     *
     * @param request - DisableApplicationSsoRequest
     * @returns DisableApplicationSsoResponse
     *
     * @param DisableApplicationSsoRequest $request
     *
     * @return DisableApplicationSsoResponse
     */
    public function disableApplicationSso($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->disableApplicationSsoWithOptions($request, $runtime);
    }

    /**
     * 禁用指定域名代理Token。
     *
     * @param request - DisableDomainProxyTokenRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DisableDomainProxyTokenResponse
     *
     * @param DisableDomainProxyTokenRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DisableDomainProxyTokenResponse
     */
    public function disableDomainProxyTokenWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domainId) {
            @$query['DomainId'] = $request->domainId;
        }

        if (null !== $request->domainProxyTokenId) {
            @$query['DomainProxyTokenId'] = $request->domainProxyTokenId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'DisableDomainProxyToken',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DisableDomainProxyTokenResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DisableDomainProxyTokenResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 禁用指定域名代理Token。
     *
     * @param request - DisableDomainProxyTokenRequest
     * @returns DisableDomainProxyTokenResponse
     *
     * @param DisableDomainProxyTokenRequest $request
     *
     * @return DisableDomainProxyTokenResponse
     */
    public function disableDomainProxyToken($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->disableDomainProxyTokenWithOptions($request, $runtime);
    }

    /**
     * 禁用同步入.
     *
     * @param request - DisableIdentityProviderUdPullRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DisableIdentityProviderUdPullResponse
     *
     * @param DisableIdentityProviderUdPullRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DisableIdentityProviderUdPullResponse
     */
    public function disableIdentityProviderUdPullWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->identityProviderId) {
            @$query['IdentityProviderId'] = $request->identityProviderId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'DisableIdentityProviderUdPull',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DisableIdentityProviderUdPullResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DisableIdentityProviderUdPullResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 禁用同步入.
     *
     * @param request - DisableIdentityProviderUdPullRequest
     * @returns DisableIdentityProviderUdPullResponse
     *
     * @param DisableIdentityProviderUdPullRequest $request
     *
     * @return DisableIdentityProviderUdPullResponse
     */
    public function disableIdentityProviderUdPull($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->disableIdentityProviderUdPullWithOptions($request, $runtime);
    }

    /**
     * 关闭初始化域名自动跳转。
     *
     * @param request - DisableInitDomainAutoRedirectRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DisableInitDomainAutoRedirectResponse
     *
     * @param DisableInitDomainAutoRedirectRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DisableInitDomainAutoRedirectResponse
     */
    public function disableInitDomainAutoRedirectWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'DisableInitDomainAutoRedirect',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DisableInitDomainAutoRedirectResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DisableInitDomainAutoRedirectResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 关闭初始化域名自动跳转。
     *
     * @param request - DisableInitDomainAutoRedirectRequest
     * @returns DisableInitDomainAutoRedirectResponse
     *
     * @param DisableInitDomainAutoRedirectRequest $request
     *
     * @return DisableInitDomainAutoRedirectResponse
     */
    public function disableInitDomainAutoRedirect($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->disableInitDomainAutoRedirectWithOptions($request, $runtime);
    }

    /**
     * Disables an Identity as a Service (IDaaS) Employee Identity and Access Management (EIAM) account. If the account is disabled, a success message is returned.
     *
     * @param request - DisableUserRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DisableUserResponse
     *
     * @param DisableUserRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return DisableUserResponse
     */
    public function disableUserWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->userId) {
            @$query['UserId'] = $request->userId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'DisableUser',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DisableUserResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DisableUserResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Disables an Identity as a Service (IDaaS) Employee Identity and Access Management (EIAM) account. If the account is disabled, a success message is returned.
     *
     * @param request - DisableUserRequest
     * @returns DisableUserResponse
     *
     * @param DisableUserRequest $request
     *
     * @return DisableUserResponse
     */
    public function disableUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->disableUserWithOptions($request, $runtime);
    }

    /**
     * Enables a disabled Employee Identity and Access Management (EIAM) application.
     *
     * @param request - EnableApplicationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns EnableApplicationResponse
     *
     * @param EnableApplicationRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return EnableApplicationResponse
     */
    public function enableApplicationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->applicationId) {
            @$query['ApplicationId'] = $request->applicationId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'EnableApplication',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return EnableApplicationResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return EnableApplicationResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Enables a disabled Employee Identity and Access Management (EIAM) application.
     *
     * @param request - EnableApplicationRequest
     * @returns EnableApplicationResponse
     *
     * @param EnableApplicationRequest $request
     *
     * @return EnableApplicationResponse
     */
    public function enableApplication($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableApplicationWithOptions($request, $runtime);
    }

    /**
     * Enables the Developer API feature for an Employee Identity and Access Management (EIAM) application.
     *
     * @param request - EnableApplicationApiInvokeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns EnableApplicationApiInvokeResponse
     *
     * @param EnableApplicationApiInvokeRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return EnableApplicationApiInvokeResponse
     */
    public function enableApplicationApiInvokeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->applicationId) {
            @$query['ApplicationId'] = $request->applicationId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'EnableApplicationApiInvoke',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return EnableApplicationApiInvokeResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return EnableApplicationApiInvokeResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Enables the Developer API feature for an Employee Identity and Access Management (EIAM) application.
     *
     * @param request - EnableApplicationApiInvokeRequest
     * @returns EnableApplicationApiInvokeResponse
     *
     * @param EnableApplicationApiInvokeRequest $request
     *
     * @return EnableApplicationApiInvokeResponse
     */
    public function enableApplicationApiInvoke($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableApplicationApiInvokeWithOptions($request, $runtime);
    }

    /**
     * Enables the client key of an application in Identity as a Service (IDaaS) Employee IAM (EIAM).
     *
     * @param request - EnableApplicationClientSecretRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns EnableApplicationClientSecretResponse
     *
     * @param EnableApplicationClientSecretRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return EnableApplicationClientSecretResponse
     */
    public function enableApplicationClientSecretWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->applicationId) {
            @$query['ApplicationId'] = $request->applicationId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->secretId) {
            @$query['SecretId'] = $request->secretId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'EnableApplicationClientSecret',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return EnableApplicationClientSecretResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return EnableApplicationClientSecretResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Enables the client key of an application in Identity as a Service (IDaaS) Employee IAM (EIAM).
     *
     * @param request - EnableApplicationClientSecretRequest
     * @returns EnableApplicationClientSecretResponse
     *
     * @param EnableApplicationClientSecretRequest $request
     *
     * @return EnableApplicationClientSecretResponse
     */
    public function enableApplicationClientSecret($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableApplicationClientSecretWithOptions($request, $runtime);
    }

    /**
     * Enables the account synchronization feature for an application in Identity as a Service (IDaaS) Employee IAM (EIAM).
     *
     * @param request - EnableApplicationProvisioningRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns EnableApplicationProvisioningResponse
     *
     * @param EnableApplicationProvisioningRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return EnableApplicationProvisioningResponse
     */
    public function enableApplicationProvisioningWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->applicationId) {
            @$query['ApplicationId'] = $request->applicationId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'EnableApplicationProvisioning',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return EnableApplicationProvisioningResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return EnableApplicationProvisioningResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Enables the account synchronization feature for an application in Identity as a Service (IDaaS) Employee IAM (EIAM).
     *
     * @param request - EnableApplicationProvisioningRequest
     * @returns EnableApplicationProvisioningResponse
     *
     * @param EnableApplicationProvisioningRequest $request
     *
     * @return EnableApplicationProvisioningResponse
     */
    public function enableApplicationProvisioning($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableApplicationProvisioningWithOptions($request, $runtime);
    }

    /**
     * 启用应用SSO能力.
     *
     * @param request - EnableApplicationSsoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns EnableApplicationSsoResponse
     *
     * @param EnableApplicationSsoRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return EnableApplicationSsoResponse
     */
    public function enableApplicationSsoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->applicationId) {
            @$query['ApplicationId'] = $request->applicationId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'EnableApplicationSso',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return EnableApplicationSsoResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return EnableApplicationSsoResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 启用应用SSO能力.
     *
     * @param request - EnableApplicationSsoRequest
     * @returns EnableApplicationSsoResponse
     *
     * @param EnableApplicationSsoRequest $request
     *
     * @return EnableApplicationSsoResponse
     */
    public function enableApplicationSso($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableApplicationSsoWithOptions($request, $runtime);
    }

    /**
     * 启用指定域名代理Token。
     *
     * @param request - EnableDomainProxyTokenRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns EnableDomainProxyTokenResponse
     *
     * @param EnableDomainProxyTokenRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return EnableDomainProxyTokenResponse
     */
    public function enableDomainProxyTokenWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domainId) {
            @$query['DomainId'] = $request->domainId;
        }

        if (null !== $request->domainProxyTokenId) {
            @$query['DomainProxyTokenId'] = $request->domainProxyTokenId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'EnableDomainProxyToken',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return EnableDomainProxyTokenResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return EnableDomainProxyTokenResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 启用指定域名代理Token。
     *
     * @param request - EnableDomainProxyTokenRequest
     * @returns EnableDomainProxyTokenResponse
     *
     * @param EnableDomainProxyTokenRequest $request
     *
     * @return EnableDomainProxyTokenResponse
     */
    public function enableDomainProxyToken($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableDomainProxyTokenWithOptions($request, $runtime);
    }

    /**
     * 启用同步入.
     *
     * @param request - EnableIdentityProviderUdPullRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns EnableIdentityProviderUdPullResponse
     *
     * @param EnableIdentityProviderUdPullRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return EnableIdentityProviderUdPullResponse
     */
    public function enableIdentityProviderUdPullWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->identityProviderId) {
            @$query['IdentityProviderId'] = $request->identityProviderId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'EnableIdentityProviderUdPull',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return EnableIdentityProviderUdPullResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return EnableIdentityProviderUdPullResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 启用同步入.
     *
     * @param request - EnableIdentityProviderUdPullRequest
     * @returns EnableIdentityProviderUdPullResponse
     *
     * @param EnableIdentityProviderUdPullRequest $request
     *
     * @return EnableIdentityProviderUdPullResponse
     */
    public function enableIdentityProviderUdPull($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableIdentityProviderUdPullWithOptions($request, $runtime);
    }

    /**
     * 开启初始化域名自动跳转。开启后，访问初始化域名将会自动跳转至默认域名。
     *
     * @param request - EnableInitDomainAutoRedirectRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns EnableInitDomainAutoRedirectResponse
     *
     * @param EnableInitDomainAutoRedirectRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return EnableInitDomainAutoRedirectResponse
     */
    public function enableInitDomainAutoRedirectWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'EnableInitDomainAutoRedirect',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return EnableInitDomainAutoRedirectResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return EnableInitDomainAutoRedirectResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 开启初始化域名自动跳转。开启后，访问初始化域名将会自动跳转至默认域名。
     *
     * @param request - EnableInitDomainAutoRedirectRequest
     * @returns EnableInitDomainAutoRedirectResponse
     *
     * @param EnableInitDomainAutoRedirectRequest $request
     *
     * @return EnableInitDomainAutoRedirectResponse
     */
    public function enableInitDomainAutoRedirect($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableInitDomainAutoRedirectWithOptions($request, $runtime);
    }

    /**
     * Enables an Employee Identity and Access Management (EIAM) account of Identity as a Service (IDaaS).
     *
     * @param request - EnableUserRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns EnableUserResponse
     *
     * @param EnableUserRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return EnableUserResponse
     */
    public function enableUserWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->userId) {
            @$query['UserId'] = $request->userId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'EnableUser',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return EnableUserResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return EnableUserResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Enables an Employee Identity and Access Management (EIAM) account of Identity as a Service (IDaaS).
     *
     * @param request - EnableUserRequest
     * @returns EnableUserResponse
     *
     * @param EnableUserRequest $request
     *
     * @return EnableUserResponse
     */
    public function enableUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableUserWithOptions($request, $runtime);
    }

    /**
     * Queries the details of an Employee Identity and Access Management (EIAM) application.
     *
     * @param request - GetApplicationRequest
     * @param runtime - runtime options for this request RuntimeOptions
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
        if (null !== $request->applicationId) {
            @$query['ApplicationId'] = $request->applicationId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetApplication',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetApplicationResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetApplicationResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the details of an Employee Identity and Access Management (EIAM) application.
     *
     * @param request - GetApplicationRequest
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
     * Queries the permissions of the Developer API feature for an Employee Identity and Access Management (EIAM) application.
     *
     * @param request - GetApplicationGrantScopeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetApplicationGrantScopeResponse
     *
     * @param GetApplicationGrantScopeRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return GetApplicationGrantScopeResponse
     */
    public function getApplicationGrantScopeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->applicationId) {
            @$query['ApplicationId'] = $request->applicationId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetApplicationGrantScope',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetApplicationGrantScopeResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetApplicationGrantScopeResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the permissions of the Developer API feature for an Employee Identity and Access Management (EIAM) application.
     *
     * @param request - GetApplicationGrantScopeRequest
     * @returns GetApplicationGrantScopeResponse
     *
     * @param GetApplicationGrantScopeRequest $request
     *
     * @return GetApplicationGrantScopeResponse
     */
    public function getApplicationGrantScope($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getApplicationGrantScopeWithOptions($request, $runtime);
    }

    /**
     * Queries the configuration of the account synchronization feature for an application in Identity as a Service (IDaaS) Employee Identity and Access Management (EIAM).
     *
     * @param request - GetApplicationProvisioningConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetApplicationProvisioningConfigResponse
     *
     * @param GetApplicationProvisioningConfigRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return GetApplicationProvisioningConfigResponse
     */
    public function getApplicationProvisioningConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->applicationId) {
            @$query['ApplicationId'] = $request->applicationId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetApplicationProvisioningConfig',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetApplicationProvisioningConfigResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetApplicationProvisioningConfigResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the configuration of the account synchronization feature for an application in Identity as a Service (IDaaS) Employee Identity and Access Management (EIAM).
     *
     * @param request - GetApplicationProvisioningConfigRequest
     * @returns GetApplicationProvisioningConfigResponse
     *
     * @param GetApplicationProvisioningConfigRequest $request
     *
     * @return GetApplicationProvisioningConfigResponse
     */
    public function getApplicationProvisioningConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getApplicationProvisioningConfigWithOptions($request, $runtime);
    }

    /**
     * Queries the account synchronization scope of applications in Identity as a Service (IDaaS) Employee IAM (EIAM). This scope is the same as the scope within which developers can call the DeveloperAPI to query and manage accounts.
     *
     * @param request - GetApplicationProvisioningScopeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetApplicationProvisioningScopeResponse
     *
     * @param GetApplicationProvisioningScopeRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return GetApplicationProvisioningScopeResponse
     */
    public function getApplicationProvisioningScopeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->applicationId) {
            @$query['ApplicationId'] = $request->applicationId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetApplicationProvisioningScope',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetApplicationProvisioningScopeResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetApplicationProvisioningScopeResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the account synchronization scope of applications in Identity as a Service (IDaaS) Employee IAM (EIAM). This scope is the same as the scope within which developers can call the DeveloperAPI to query and manage accounts.
     *
     * @param request - GetApplicationProvisioningScopeRequest
     * @returns GetApplicationProvisioningScopeResponse
     *
     * @param GetApplicationProvisioningScopeRequest $request
     *
     * @return GetApplicationProvisioningScopeResponse
     */
    public function getApplicationProvisioningScope($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getApplicationProvisioningScopeWithOptions($request, $runtime);
    }

    /**
     * Queries the single sign-on (SSO) configuration attributes of an application in Identity as a Service (IDaaS) Employee IAM (EIAM).
     *
     * @param request - GetApplicationSsoConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetApplicationSsoConfigResponse
     *
     * @param GetApplicationSsoConfigRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return GetApplicationSsoConfigResponse
     */
    public function getApplicationSsoConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->applicationId) {
            @$query['ApplicationId'] = $request->applicationId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetApplicationSsoConfig',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetApplicationSsoConfigResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetApplicationSsoConfigResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the single sign-on (SSO) configuration attributes of an application in Identity as a Service (IDaaS) Employee IAM (EIAM).
     *
     * @param request - GetApplicationSsoConfigRequest
     * @returns GetApplicationSsoConfigResponse
     *
     * @param GetApplicationSsoConfigRequest $request
     *
     * @return GetApplicationSsoConfigResponse
     */
    public function getApplicationSsoConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getApplicationSsoConfigWithOptions($request, $runtime);
    }

    /**
     * 查询一个域名的详细信息。
     *
     * @param request - GetDomainRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetDomainResponse
     *
     * @param GetDomainRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return GetDomainResponse
     */
    public function getDomainWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domainId) {
            @$query['DomainId'] = $request->domainId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetDomain',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetDomainResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetDomainResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 查询一个域名的详细信息。
     *
     * @param request - GetDomainRequest
     * @returns GetDomainResponse
     *
     * @param GetDomainRequest $request
     *
     * @return GetDomainResponse
     */
    public function getDomain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDomainWithOptions($request, $runtime);
    }

    /**
     * 查看域名的DNS Challenge记录。
     *
     * @param request - GetDomainDnsChallengeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetDomainDnsChallengeResponse
     *
     * @param GetDomainDnsChallengeRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return GetDomainDnsChallengeResponse
     */
    public function getDomainDnsChallengeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domain) {
            @$query['Domain'] = $request->domain;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetDomainDnsChallenge',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetDomainDnsChallengeResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetDomainDnsChallengeResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 查看域名的DNS Challenge记录。
     *
     * @param request - GetDomainDnsChallengeRequest
     * @returns GetDomainDnsChallengeResponse
     *
     * @param GetDomainDnsChallengeRequest $request
     *
     * @return GetDomainDnsChallengeResponse
     */
    public function getDomainDnsChallenge($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDomainDnsChallengeWithOptions($request, $runtime);
    }

    /**
     * Queries the forgot password configurations of an Employee Identity and Access Management (EIAM) instance of Identity as a Service (IDaaS).
     *
     * @param request - GetForgetPasswordConfigurationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetForgetPasswordConfigurationResponse
     *
     * @param GetForgetPasswordConfigurationRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return GetForgetPasswordConfigurationResponse
     */
    public function getForgetPasswordConfigurationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetForgetPasswordConfiguration',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetForgetPasswordConfigurationResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetForgetPasswordConfigurationResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the forgot password configurations of an Employee Identity and Access Management (EIAM) instance of Identity as a Service (IDaaS).
     *
     * @param request - GetForgetPasswordConfigurationRequest
     * @returns GetForgetPasswordConfigurationResponse
     *
     * @param GetForgetPasswordConfigurationRequest $request
     *
     * @return GetForgetPasswordConfigurationResponse
     */
    public function getForgetPasswordConfiguration($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getForgetPasswordConfigurationWithOptions($request, $runtime);
    }

    /**
     * Queries the information of an account group in Identity as a Service (IDaaS) Employee Identity and Access Management (EIAM).
     *
     * @param request - GetGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
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
        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetGroup',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetGroupResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetGroupResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the information of an account group in Identity as a Service (IDaaS) Employee Identity and Access Management (EIAM).
     *
     * @param request - GetGroupRequest
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
     * 获取身份提供方.
     *
     * @param request - GetIdentityProviderRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetIdentityProviderResponse
     *
     * @param GetIdentityProviderRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GetIdentityProviderResponse
     */
    public function getIdentityProviderWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->identityProviderId) {
            @$query['IdentityProviderId'] = $request->identityProviderId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetIdentityProvider',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetIdentityProviderResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetIdentityProviderResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 获取身份提供方.
     *
     * @param request - GetIdentityProviderRequest
     * @returns GetIdentityProviderResponse
     *
     * @param GetIdentityProviderRequest $request
     *
     * @return GetIdentityProviderResponse
     */
    public function getIdentityProvider($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getIdentityProviderWithOptions($request, $runtime);
    }

    /**
     * 获取IdP同步入配置.
     *
     * @param request - GetIdentityProviderUdPullConfigurationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetIdentityProviderUdPullConfigurationResponse
     *
     * @param GetIdentityProviderUdPullConfigurationRequest $request
     * @param RuntimeOptions                                $runtime
     *
     * @return GetIdentityProviderUdPullConfigurationResponse
     */
    public function getIdentityProviderUdPullConfigurationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->identityProviderId) {
            @$query['IdentityProviderId'] = $request->identityProviderId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetIdentityProviderUdPullConfiguration',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetIdentityProviderUdPullConfigurationResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetIdentityProviderUdPullConfigurationResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 获取IdP同步入配置.
     *
     * @param request - GetIdentityProviderUdPullConfigurationRequest
     * @returns GetIdentityProviderUdPullConfigurationResponse
     *
     * @param GetIdentityProviderUdPullConfigurationRequest $request
     *
     * @return GetIdentityProviderUdPullConfigurationResponse
     */
    public function getIdentityProviderUdPullConfiguration($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getIdentityProviderUdPullConfigurationWithOptions($request, $runtime);
    }

    /**
     * Queries the information of an Enterprise Identity and Access Management (EIAM) instance of Identity as a Service (IDaaS).
     *
     * @param request - GetInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetInstanceResponse
     *
     * @param GetInstanceRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return GetInstanceResponse
     */
    public function getInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetInstance',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetInstanceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the information of an Enterprise Identity and Access Management (EIAM) instance of Identity as a Service (IDaaS).
     *
     * @param request - GetInstanceRequest
     * @returns GetInstanceResponse
     *
     * @param GetInstanceRequest $request
     *
     * @return GetInstanceResponse
     */
    public function getInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getInstanceWithOptions($request, $runtime);
    }

    /**
     * Query the currently effective License information of the instance.
     *
     * @remarks
     * Please ensure that your current instance is no longer in use. When the EIAM instance is deleted, all related data will be deleted.
     *
     * @param request - GetInstanceLicenseRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetInstanceLicenseResponse
     *
     * @param GetInstanceLicenseRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GetInstanceLicenseResponse
     */
    public function getInstanceLicenseWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetInstanceLicense',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetInstanceLicenseResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetInstanceLicenseResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Query the currently effective License information of the instance.
     *
     * @remarks
     * Please ensure that your current instance is no longer in use. When the EIAM instance is deleted, all related data will be deleted.
     *
     * @param request - GetInstanceLicenseRequest
     * @returns GetInstanceLicenseResponse
     *
     * @param GetInstanceLicenseRequest $request
     *
     * @return GetInstanceLicenseResponse
     */
    public function getInstanceLicense($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getInstanceLicenseWithOptions($request, $runtime);
    }

    /**
     * 查询一个专属网络端点的详细信息。
     *
     * @param request - GetNetworkAccessEndpointRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetNetworkAccessEndpointResponse
     *
     * @param GetNetworkAccessEndpointRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return GetNetworkAccessEndpointResponse
     */
    public function getNetworkAccessEndpointWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->networkAccessEndpointId) {
            @$query['NetworkAccessEndpointId'] = $request->networkAccessEndpointId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetNetworkAccessEndpoint',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetNetworkAccessEndpointResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetNetworkAccessEndpointResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 查询一个专属网络端点的详细信息。
     *
     * @param request - GetNetworkAccessEndpointRequest
     * @returns GetNetworkAccessEndpointResponse
     *
     * @param GetNetworkAccessEndpointRequest $request
     *
     * @return GetNetworkAccessEndpointResponse
     */
    public function getNetworkAccessEndpoint($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getNetworkAccessEndpointWithOptions($request, $runtime);
    }

    /**
     * Queries the information about an organizational unit in Identity as a Service (IDaaS) Employee IAM (EIAM).
     *
     * @param request - GetOrganizationalUnitRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetOrganizationalUnitResponse
     *
     * @param GetOrganizationalUnitRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return GetOrganizationalUnitResponse
     */
    public function getOrganizationalUnitWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->organizationalUnitId) {
            @$query['OrganizationalUnitId'] = $request->organizationalUnitId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetOrganizationalUnit',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetOrganizationalUnitResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetOrganizationalUnitResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the information about an organizational unit in Identity as a Service (IDaaS) Employee IAM (EIAM).
     *
     * @param request - GetOrganizationalUnitRequest
     * @returns GetOrganizationalUnitResponse
     *
     * @param GetOrganizationalUnitRequest $request
     *
     * @return GetOrganizationalUnitResponse
     */
    public function getOrganizationalUnit($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getOrganizationalUnitWithOptions($request, $runtime);
    }

    /**
     * Queries the password complexity configurations of an Employee Identity and Access Management (EIAM) instance of Identity as a Service (IDaaS).
     *
     * @param request - GetPasswordComplexityConfigurationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetPasswordComplexityConfigurationResponse
     *
     * @param GetPasswordComplexityConfigurationRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return GetPasswordComplexityConfigurationResponse
     */
    public function getPasswordComplexityConfigurationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetPasswordComplexityConfiguration',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetPasswordComplexityConfigurationResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetPasswordComplexityConfigurationResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the password complexity configurations of an Employee Identity and Access Management (EIAM) instance of Identity as a Service (IDaaS).
     *
     * @param request - GetPasswordComplexityConfigurationRequest
     * @returns GetPasswordComplexityConfigurationResponse
     *
     * @param GetPasswordComplexityConfigurationRequest $request
     *
     * @return GetPasswordComplexityConfigurationResponse
     */
    public function getPasswordComplexityConfiguration($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getPasswordComplexityConfigurationWithOptions($request, $runtime);
    }

    /**
     * Queries the password expiration configurations of an Employee Identity and Access Management (EIAM) instance of Identity as a Service (IDaaS).
     *
     * @param request - GetPasswordExpirationConfigurationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetPasswordExpirationConfigurationResponse
     *
     * @param GetPasswordExpirationConfigurationRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return GetPasswordExpirationConfigurationResponse
     */
    public function getPasswordExpirationConfigurationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetPasswordExpirationConfiguration',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetPasswordExpirationConfigurationResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetPasswordExpirationConfigurationResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the password expiration configurations of an Employee Identity and Access Management (EIAM) instance of Identity as a Service (IDaaS).
     *
     * @param request - GetPasswordExpirationConfigurationRequest
     * @returns GetPasswordExpirationConfigurationResponse
     *
     * @param GetPasswordExpirationConfigurationRequest $request
     *
     * @return GetPasswordExpirationConfigurationResponse
     */
    public function getPasswordExpirationConfiguration($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getPasswordExpirationConfigurationWithOptions($request, $runtime);
    }

    /**
     * Queries the password history configurations of an Employee Identity and Access Management (EIAM) instance of Identity as a Service (IDaaS).
     *
     * @param request - GetPasswordHistoryConfigurationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetPasswordHistoryConfigurationResponse
     *
     * @param GetPasswordHistoryConfigurationRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return GetPasswordHistoryConfigurationResponse
     */
    public function getPasswordHistoryConfigurationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetPasswordHistoryConfiguration',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetPasswordHistoryConfigurationResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetPasswordHistoryConfigurationResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the password history configurations of an Employee Identity and Access Management (EIAM) instance of Identity as a Service (IDaaS).
     *
     * @param request - GetPasswordHistoryConfigurationRequest
     * @returns GetPasswordHistoryConfigurationResponse
     *
     * @param GetPasswordHistoryConfigurationRequest $request
     *
     * @return GetPasswordHistoryConfigurationResponse
     */
    public function getPasswordHistoryConfiguration($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getPasswordHistoryConfigurationWithOptions($request, $runtime);
    }

    /**
     * Queries the password initialization configurations of an Employee Identity and Access Management (EIAM) instance of Identity as a Service (IDaaS).
     *
     * @param request - GetPasswordInitializationConfigurationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetPasswordInitializationConfigurationResponse
     *
     * @param GetPasswordInitializationConfigurationRequest $request
     * @param RuntimeOptions                                $runtime
     *
     * @return GetPasswordInitializationConfigurationResponse
     */
    public function getPasswordInitializationConfigurationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetPasswordInitializationConfiguration',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetPasswordInitializationConfigurationResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetPasswordInitializationConfigurationResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the password initialization configurations of an Employee Identity and Access Management (EIAM) instance of Identity as a Service (IDaaS).
     *
     * @param request - GetPasswordInitializationConfigurationRequest
     * @returns GetPasswordInitializationConfigurationResponse
     *
     * @param GetPasswordInitializationConfigurationRequest $request
     *
     * @return GetPasswordInitializationConfigurationResponse
     */
    public function getPasswordInitializationConfiguration($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getPasswordInitializationConfigurationWithOptions($request, $runtime);
    }

    /**
     * Queries the information about the root organizational unit in Identity as a Service (IDaaS) Employee IAM (EIAM).
     *
     * @param request - GetRootOrganizationalUnitRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetRootOrganizationalUnitResponse
     *
     * @param GetRootOrganizationalUnitRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return GetRootOrganizationalUnitResponse
     */
    public function getRootOrganizationalUnitWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetRootOrganizationalUnit',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetRootOrganizationalUnitResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetRootOrganizationalUnitResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the information about the root organizational unit in Identity as a Service (IDaaS) Employee IAM (EIAM).
     *
     * @param request - GetRootOrganizationalUnitRequest
     * @returns GetRootOrganizationalUnitResponse
     *
     * @param GetRootOrganizationalUnitRequest $request
     *
     * @return GetRootOrganizationalUnitResponse
     */
    public function getRootOrganizationalUnit($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getRootOrganizationalUnitWithOptions($request, $runtime);
    }

    /**
     * 查询同步任务
     *
     * @param request - GetSynchronizationJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetSynchronizationJobResponse
     *
     * @param GetSynchronizationJobRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return GetSynchronizationJobResponse
     */
    public function getSynchronizationJobWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->synchronizationJobId) {
            @$query['SynchronizationJobId'] = $request->synchronizationJobId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetSynchronizationJob',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetSynchronizationJobResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetSynchronizationJobResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 查询同步任务
     *
     * @param request - GetSynchronizationJobRequest
     * @returns GetSynchronizationJobResponse
     *
     * @param GetSynchronizationJobRequest $request
     *
     * @return GetSynchronizationJobResponse
     */
    public function getSynchronizationJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSynchronizationJobWithOptions($request, $runtime);
    }

    /**
     * Queries the details of an account in Identity as a Service (IDaaS) Employee IAM (EIAM).
     *
     * @param request - GetUserRequest
     * @param runtime - runtime options for this request RuntimeOptions
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
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->userId) {
            @$query['UserId'] = $request->userId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetUser',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetUserResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetUserResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the details of an account in Identity as a Service (IDaaS) Employee IAM (EIAM).
     *
     * @param request - GetUserRequest
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
     * Queries all client keys of an Employee Identity and Access Management (EIAM) application. The returned key secret is not masked. If you want to query the key secret that is masked, call the ObtainApplicationClientSecret operation.
     *
     * @param request - ListApplicationClientSecretsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListApplicationClientSecretsResponse
     *
     * @param ListApplicationClientSecretsRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return ListApplicationClientSecretsResponse
     */
    public function listApplicationClientSecretsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->applicationId) {
            @$query['ApplicationId'] = $request->applicationId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListApplicationClientSecrets',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListApplicationClientSecretsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListApplicationClientSecretsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries all client keys of an Employee Identity and Access Management (EIAM) application. The returned key secret is not masked. If you want to query the key secret that is masked, call the ObtainApplicationClientSecret operation.
     *
     * @param request - ListApplicationClientSecretsRequest
     * @returns ListApplicationClientSecretsResponse
     *
     * @param ListApplicationClientSecretsRequest $request
     *
     * @return ListApplicationClientSecretsResponse
     */
    public function listApplicationClientSecrets($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listApplicationClientSecretsWithOptions($request, $runtime);
    }

    /**
     * Queries the information about one or multiple Employee Identity and Access Management (EIAM) applications by page.
     *
     * @param request - ListApplicationsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListApplicationsResponse
     *
     * @param ListApplicationsRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListApplicationsResponse
     */
    public function listApplicationsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->applicationIds) {
            @$query['ApplicationIds'] = $request->applicationIds;
        }

        if (null !== $request->applicationName) {
            @$query['ApplicationName'] = $request->applicationName;
        }

        if (null !== $request->authorizationType) {
            @$query['AuthorizationType'] = $request->authorizationType;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->m2MClientStatus) {
            @$query['M2MClientStatus'] = $request->m2MClientStatus;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->resourceServerStatus) {
            @$query['ResourceServerStatus'] = $request->resourceServerStatus;
        }

        if (null !== $request->ssoType) {
            @$query['SsoType'] = $request->ssoType;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListApplications',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListApplicationsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListApplicationsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the information about one or multiple Employee Identity and Access Management (EIAM) applications by page.
     *
     * @param request - ListApplicationsRequest
     * @returns ListApplicationsResponse
     *
     * @param ListApplicationsRequest $request
     *
     * @return ListApplicationsResponse
     */
    public function listApplications($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listApplicationsWithOptions($request, $runtime);
    }

    /**
     * Queries the applications that an Employee Identity and Access Management (EIAM) organization can access. The return result includes the IDs of the applications. If you want to obtain the details of the applications, call the GetApplication operation.
     *
     * @remarks
     * You can only query the permissions that are directly granted to the EIAM organization by calling the ListApplicationsForOrganizationalUnit operation. You can filter applications by configuring the **ApplicationIds** parameter when you call this operation.
     *
     * @param request - ListApplicationsForOrganizationalUnitRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListApplicationsForOrganizationalUnitResponse
     *
     * @param ListApplicationsForOrganizationalUnitRequest $request
     * @param RuntimeOptions                               $runtime
     *
     * @return ListApplicationsForOrganizationalUnitResponse
     */
    public function listApplicationsForOrganizationalUnitWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->applicationIds) {
            @$query['ApplicationIds'] = $request->applicationIds;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->organizationalUnitId) {
            @$query['OrganizationalUnitId'] = $request->organizationalUnitId;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListApplicationsForOrganizationalUnit',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListApplicationsForOrganizationalUnitResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListApplicationsForOrganizationalUnitResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the applications that an Employee Identity and Access Management (EIAM) organization can access. The return result includes the IDs of the applications. If you want to obtain the details of the applications, call the GetApplication operation.
     *
     * @remarks
     * You can only query the permissions that are directly granted to the EIAM organization by calling the ListApplicationsForOrganizationalUnit operation. You can filter applications by configuring the **ApplicationIds** parameter when you call this operation.
     *
     * @param request - ListApplicationsForOrganizationalUnitRequest
     * @returns ListApplicationsForOrganizationalUnitResponse
     *
     * @param ListApplicationsForOrganizationalUnitRequest $request
     *
     * @return ListApplicationsForOrganizationalUnitResponse
     */
    public function listApplicationsForOrganizationalUnit($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listApplicationsForOrganizationalUnitWithOptions($request, $runtime);
    }

    /**
     * Queries the applications that an Employee Identity and Access Management (EIAM) account can access. The return result includes the IDs of the applications. If you want to obtain the details of the applications, call the GetApplication operation.
     *
     * @param request - ListApplicationsForUserRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListApplicationsForUserResponse
     *
     * @param ListApplicationsForUserRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ListApplicationsForUserResponse
     */
    public function listApplicationsForUserWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->applicationIds) {
            @$query['ApplicationIds'] = $request->applicationIds;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->queryMode) {
            @$query['QueryMode'] = $request->queryMode;
        }

        if (null !== $request->userId) {
            @$query['UserId'] = $request->userId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListApplicationsForUser',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListApplicationsForUserResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListApplicationsForUserResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the applications that an Employee Identity and Access Management (EIAM) account can access. The return result includes the IDs of the applications. If you want to obtain the details of the applications, call the GetApplication operation.
     *
     * @param request - ListApplicationsForUserRequest
     * @returns ListApplicationsForUserResponse
     *
     * @param ListApplicationsForUserRequest $request
     *
     * @return ListApplicationsForUserResponse
     */
    public function listApplicationsForUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listApplicationsForUserWithOptions($request, $runtime);
    }

    /**
     * 列表查询域名代理Token信息。
     *
     * @param request - ListDomainProxyTokensRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListDomainProxyTokensResponse
     *
     * @param ListDomainProxyTokensRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ListDomainProxyTokensResponse
     */
    public function listDomainProxyTokensWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domainId) {
            @$query['DomainId'] = $request->domainId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListDomainProxyTokens',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListDomainProxyTokensResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListDomainProxyTokensResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 列表查询域名代理Token信息。
     *
     * @param request - ListDomainProxyTokensRequest
     * @returns ListDomainProxyTokensResponse
     *
     * @param ListDomainProxyTokensRequest $request
     *
     * @return ListDomainProxyTokensResponse
     */
    public function listDomainProxyTokens($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDomainProxyTokensWithOptions($request, $runtime);
    }

    /**
     * 列表查询域名记录。
     *
     * @param request - ListDomainsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListDomainsResponse
     *
     * @param ListDomainsRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return ListDomainsResponse
     */
    public function listDomainsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListDomains',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListDomainsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListDomainsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 列表查询域名记录。
     *
     * @param request - ListDomainsRequest
     * @returns ListDomainsResponse
     *
     * @param ListDomainsRequest $request
     *
     * @return ListDomainsResponse
     */
    public function listDomains($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDomainsWithOptions($request, $runtime);
    }

    /**
     * 查询EIAM2.0/EIAM1.0实例列表.
     *
     * @param request - ListEiamInstancesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListEiamInstancesResponse
     *
     * @param ListEiamInstancesRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ListEiamInstancesResponse
     */
    public function listEiamInstancesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceIds) {
            @$query['InstanceIds'] = $request->instanceIds;
        }

        if (null !== $request->instanceRegionId) {
            @$query['InstanceRegionId'] = $request->instanceRegionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListEiamInstances',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListEiamInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListEiamInstancesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 查询EIAM2.0/EIAM1.0实例列表.
     *
     * @param request - ListEiamInstancesRequest
     * @returns ListEiamInstancesResponse
     *
     * @param ListEiamInstancesRequest $request
     *
     * @return ListEiamInstancesResponse
     */
    public function listEiamInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listEiamInstancesWithOptions($request, $runtime);
    }

    /**
     * 查询EIAM2.0/EIAM1.0地域列表.
     *
     * @param request - ListEiamRegionsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListEiamRegionsResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return ListEiamRegionsResponse
     */
    public function listEiamRegionsWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'ListEiamRegions',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListEiamRegionsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListEiamRegionsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 查询EIAM2.0/EIAM1.0地域列表.
     *
     * @returns ListEiamRegionsResponse
     *
     * @return ListEiamRegionsResponse
     */
    public function listEiamRegions()
    {
        $runtime = new RuntimeOptions([]);

        return $this->listEiamRegionsWithOptions($runtime);
    }

    /**
     * Queries a list of account groups in Identity as a Service (IDaaS) Employee Identity and Access Management (EIAM).
     *
     * @param request - ListGroupsRequest
     * @param runtime - runtime options for this request RuntimeOptions
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
        if (null !== $request->groupExternalId) {
            @$query['GroupExternalId'] = $request->groupExternalId;
        }

        if (null !== $request->groupIds) {
            @$query['GroupIds'] = $request->groupIds;
        }

        if (null !== $request->groupName) {
            @$query['GroupName'] = $request->groupName;
        }

        if (null !== $request->groupNameStartsWith) {
            @$query['GroupNameStartsWith'] = $request->groupNameStartsWith;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListGroups',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListGroupsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries a list of account groups in Identity as a Service (IDaaS) Employee Identity and Access Management (EIAM).
     *
     * @param request - ListGroupsRequest
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
     * Queries a list of account groups to which the permissions to access an application are granted. The returned results contain the group IDs. You can call the GetGroup operation to query the information about an account group based on the group ID.
     *
     * @param request - ListGroupsForApplicationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListGroupsForApplicationResponse
     *
     * @param ListGroupsForApplicationRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ListGroupsForApplicationResponse
     */
    public function listGroupsForApplicationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->applicationId) {
            @$query['ApplicationId'] = $request->applicationId;
        }

        if (null !== $request->groupIds) {
            @$query['GroupIds'] = $request->groupIds;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListGroupsForApplication',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListGroupsForApplicationResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListGroupsForApplicationResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries a list of account groups to which the permissions to access an application are granted. The returned results contain the group IDs. You can call the GetGroup operation to query the information about an account group based on the group ID.
     *
     * @param request - ListGroupsForApplicationRequest
     * @returns ListGroupsForApplicationResponse
     *
     * @param ListGroupsForApplicationRequest $request
     *
     * @return ListGroupsForApplicationResponse
     */
    public function listGroupsForApplication($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listGroupsForApplicationWithOptions($request, $runtime);
    }

    /**
     * Queries a list of account groups to which an Employee Identity and Access Management (EIAM) account of Identity as a Service (IDaaS) belongs.
     *
     * @param request - ListGroupsForUserRequest
     * @param runtime - runtime options for this request RuntimeOptions
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
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->userId) {
            @$query['UserId'] = $request->userId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListGroupsForUser',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListGroupsForUserResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListGroupsForUserResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries a list of account groups to which an Employee Identity and Access Management (EIAM) account of Identity as a Service (IDaaS) belongs.
     *
     * @param request - ListGroupsForUserRequest
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
     * 查询身份提供方.
     *
     * @param request - ListIdentityProvidersRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListIdentityProvidersResponse
     *
     * @param ListIdentityProvidersRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ListIdentityProvidersResponse
     */
    public function listIdentityProvidersWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListIdentityProviders',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListIdentityProvidersResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListIdentityProvidersResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 查询身份提供方.
     *
     * @param request - ListIdentityProvidersRequest
     * @returns ListIdentityProvidersResponse
     *
     * @param ListIdentityProvidersRequest $request
     *
     * @return ListIdentityProvidersResponse
     */
    public function listIdentityProviders($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listIdentityProvidersWithOptions($request, $runtime);
    }

    /**
     * Queries the information of one or more Enterprise Identity and Access Management (EIAM) instances of Identity as a Service (IDaaS).
     *
     * @param request - ListInstancesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListInstancesResponse
     *
     * @param ListInstancesRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ListInstancesResponse
     */
    public function listInstancesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceIds) {
            @$query['InstanceIds'] = $request->instanceIds;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListInstances',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListInstancesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the information of one or more Enterprise Identity and Access Management (EIAM) instances of Identity as a Service (IDaaS).
     *
     * @param request - ListInstancesRequest
     * @returns ListInstancesResponse
     *
     * @param ListInstancesRequest $request
     *
     * @return ListInstancesResponse
     */
    public function listInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listInstancesWithOptions($request, $runtime);
    }

    /**
     * 获取支持专属端点的region列表.
     *
     * @param request - ListNetworkAccessEndpointAvailableRegionsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListNetworkAccessEndpointAvailableRegionsResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return ListNetworkAccessEndpointAvailableRegionsResponse
     */
    public function listNetworkAccessEndpointAvailableRegionsWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'ListNetworkAccessEndpointAvailableRegions',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListNetworkAccessEndpointAvailableRegionsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListNetworkAccessEndpointAvailableRegionsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 获取支持专属端点的region列表.
     *
     * @returns ListNetworkAccessEndpointAvailableRegionsResponse
     *
     * @return ListNetworkAccessEndpointAvailableRegionsResponse
     */
    public function listNetworkAccessEndpointAvailableRegions()
    {
        $runtime = new RuntimeOptions([]);

        return $this->listNetworkAccessEndpointAvailableRegionsWithOptions($runtime);
    }

    /**
     * 获取支持NAE的可用区列表.
     *
     * @param request - ListNetworkAccessEndpointAvailableZonesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListNetworkAccessEndpointAvailableZonesResponse
     *
     * @param ListNetworkAccessEndpointAvailableZonesRequest $request
     * @param RuntimeOptions                                 $runtime
     *
     * @return ListNetworkAccessEndpointAvailableZonesResponse
     */
    public function listNetworkAccessEndpointAvailableZonesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->naeRegionId) {
            @$query['NaeRegionId'] = $request->naeRegionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListNetworkAccessEndpointAvailableZones',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListNetworkAccessEndpointAvailableZonesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListNetworkAccessEndpointAvailableZonesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 获取支持NAE的可用区列表.
     *
     * @param request - ListNetworkAccessEndpointAvailableZonesRequest
     * @returns ListNetworkAccessEndpointAvailableZonesResponse
     *
     * @param ListNetworkAccessEndpointAvailableZonesRequest $request
     *
     * @return ListNetworkAccessEndpointAvailableZonesResponse
     */
    public function listNetworkAccessEndpointAvailableZones($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listNetworkAccessEndpointAvailableZonesWithOptions($request, $runtime);
    }

    /**
     * 列表查询专属网络端点。
     *
     * @param request - ListNetworkAccessEndpointsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListNetworkAccessEndpointsResponse
     *
     * @param ListNetworkAccessEndpointsRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return ListNetworkAccessEndpointsResponse
     */
    public function listNetworkAccessEndpointsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->networkAccessEndpointStatus) {
            @$query['NetworkAccessEndpointStatus'] = $request->networkAccessEndpointStatus;
        }

        if (null !== $request->networkAccessEndpointType) {
            @$query['NetworkAccessEndpointType'] = $request->networkAccessEndpointType;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->vpcId) {
            @$query['VpcId'] = $request->vpcId;
        }

        if (null !== $request->vpcRegionId) {
            @$query['VpcRegionId'] = $request->vpcRegionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListNetworkAccessEndpoints',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListNetworkAccessEndpointsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListNetworkAccessEndpointsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 列表查询专属网络端点。
     *
     * @param request - ListNetworkAccessEndpointsRequest
     * @returns ListNetworkAccessEndpointsResponse
     *
     * @param ListNetworkAccessEndpointsRequest $request
     *
     * @return ListNetworkAccessEndpointsResponse
     */
    public function listNetworkAccessEndpoints($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listNetworkAccessEndpointsWithOptions($request, $runtime);
    }

    /**
     * 列表某个网络访问端点下的访问路径。
     *
     * @param request - ListNetworkAccessPathsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListNetworkAccessPathsResponse
     *
     * @param ListNetworkAccessPathsRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ListNetworkAccessPathsResponse
     */
    public function listNetworkAccessPathsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->networkAccessEndpointId) {
            @$query['NetworkAccessEndpointId'] = $request->networkAccessEndpointId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListNetworkAccessPaths',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListNetworkAccessPathsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListNetworkAccessPathsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 列表某个网络访问端点下的访问路径。
     *
     * @param request - ListNetworkAccessPathsRequest
     * @returns ListNetworkAccessPathsResponse
     *
     * @param ListNetworkAccessPathsRequest $request
     *
     * @return ListNetworkAccessPathsResponse
     */
    public function listNetworkAccessPaths($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listNetworkAccessPathsWithOptions($request, $runtime);
    }

    /**
     * 查询组织的所有父级路径.
     *
     * @param request - ListOrganizationalUnitParentsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListOrganizationalUnitParentsResponse
     *
     * @param ListOrganizationalUnitParentsRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return ListOrganizationalUnitParentsResponse
     */
    public function listOrganizationalUnitParentsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->organizationalUnitId) {
            @$query['OrganizationalUnitId'] = $request->organizationalUnitId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListOrganizationalUnitParents',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListOrganizationalUnitParentsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListOrganizationalUnitParentsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 查询组织的所有父级路径.
     *
     * @param request - ListOrganizationalUnitParentsRequest
     * @returns ListOrganizationalUnitParentsResponse
     *
     * @param ListOrganizationalUnitParentsRequest $request
     *
     * @return ListOrganizationalUnitParentsResponse
     */
    public function listOrganizationalUnitParents($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listOrganizationalUnitParentsWithOptions($request, $runtime);
    }

    /**
     * Queries the information about organizational units in Identity as a Service (IDaaS) Employee IAM (EIAM) by page.
     *
     * @param request - ListOrganizationalUnitsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListOrganizationalUnitsResponse
     *
     * @param ListOrganizationalUnitsRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ListOrganizationalUnitsResponse
     */
    public function listOrganizationalUnitsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->organizationalUnitIds) {
            @$query['OrganizationalUnitIds'] = $request->organizationalUnitIds;
        }

        if (null !== $request->organizationalUnitName) {
            @$query['OrganizationalUnitName'] = $request->organizationalUnitName;
        }

        if (null !== $request->organizationalUnitNameStartsWith) {
            @$query['OrganizationalUnitNameStartsWith'] = $request->organizationalUnitNameStartsWith;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->parentId) {
            @$query['ParentId'] = $request->parentId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListOrganizationalUnits',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListOrganizationalUnitsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListOrganizationalUnitsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the information about organizational units in Identity as a Service (IDaaS) Employee IAM (EIAM) by page.
     *
     * @param request - ListOrganizationalUnitsRequest
     * @returns ListOrganizationalUnitsResponse
     *
     * @param ListOrganizationalUnitsRequest $request
     *
     * @return ListOrganizationalUnitsResponse
     */
    public function listOrganizationalUnits($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listOrganizationalUnitsWithOptions($request, $runtime);
    }

    /**
     * Queries the organizations that are allowed to access an Employee Identity and Access Management (EIAM) application by page. The return result includes the IDs of the organizations. If you want to obtain the details of the organizations, call the GetOrganizationalUnit operation.
     *
     * @param request - ListOrganizationalUnitsForApplicationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListOrganizationalUnitsForApplicationResponse
     *
     * @param ListOrganizationalUnitsForApplicationRequest $request
     * @param RuntimeOptions                               $runtime
     *
     * @return ListOrganizationalUnitsForApplicationResponse
     */
    public function listOrganizationalUnitsForApplicationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->applicationId) {
            @$query['ApplicationId'] = $request->applicationId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->organizationalUnitIds) {
            @$query['OrganizationalUnitIds'] = $request->organizationalUnitIds;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListOrganizationalUnitsForApplication',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListOrganizationalUnitsForApplicationResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListOrganizationalUnitsForApplicationResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the organizations that are allowed to access an Employee Identity and Access Management (EIAM) application by page. The return result includes the IDs of the organizations. If you want to obtain the details of the organizations, call the GetOrganizationalUnit operation.
     *
     * @param request - ListOrganizationalUnitsForApplicationRequest
     * @returns ListOrganizationalUnitsForApplicationResponse
     *
     * @param ListOrganizationalUnitsForApplicationRequest $request
     *
     * @return ListOrganizationalUnitsForApplicationResponse
     */
    public function listOrganizationalUnitsForApplication($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listOrganizationalUnitsForApplicationWithOptions($request, $runtime);
    }

    /**
     * Queries the supported Alibaba Cloud regions.
     *
     * @param request - ListRegionsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListRegionsResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return ListRegionsResponse
     */
    public function listRegionsWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'ListRegions',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListRegionsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListRegionsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the supported Alibaba Cloud regions.
     *
     * @returns ListRegionsResponse
     *
     * @return ListRegionsResponse
     */
    public function listRegions()
    {
        $runtime = new RuntimeOptions([]);

        return $this->listRegionsWithOptions($runtime);
    }

    /**
     * 查询同步任务
     *
     * @param request - ListSynchronizationJobsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListSynchronizationJobsResponse
     *
     * @param ListSynchronizationJobsRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ListSynchronizationJobsResponse
     */
    public function listSynchronizationJobsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->direction) {
            @$query['Direction'] = $request->direction;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->filters) {
            @$query['Filters'] = $request->filters;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        if (null !== $request->targetIds) {
            @$query['TargetIds'] = $request->targetIds;
        }

        if (null !== $request->targetType) {
            @$query['TargetType'] = $request->targetType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListSynchronizationJobs',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListSynchronizationJobsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListSynchronizationJobsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 查询同步任务
     *
     * @param request - ListSynchronizationJobsRequest
     * @returns ListSynchronizationJobsResponse
     *
     * @param ListSynchronizationJobsRequest $request
     *
     * @return ListSynchronizationJobsResponse
     */
    public function listSynchronizationJobs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSynchronizationJobsWithOptions($request, $runtime);
    }

    /**
     * Queries the details of accounts in Identity as a Service (IDaaS) Employee IAM (EIAM) by page.
     *
     * @param request - ListUsersRequest
     * @param runtime - runtime options for this request RuntimeOptions
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
        if (null !== $request->displayNameStartsWith) {
            @$query['DisplayNameStartsWith'] = $request->displayNameStartsWith;
        }

        if (null !== $request->email) {
            @$query['Email'] = $request->email;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->organizationalUnitId) {
            @$query['OrganizationalUnitId'] = $request->organizationalUnitId;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->phoneNumber) {
            @$query['PhoneNumber'] = $request->phoneNumber;
        }

        if (null !== $request->phoneRegion) {
            @$query['PhoneRegion'] = $request->phoneRegion;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        if (null !== $request->userExternalId) {
            @$query['UserExternalId'] = $request->userExternalId;
        }

        if (null !== $request->userIds) {
            @$query['UserIds'] = $request->userIds;
        }

        if (null !== $request->userSourceId) {
            @$query['UserSourceId'] = $request->userSourceId;
        }

        if (null !== $request->userSourceType) {
            @$query['UserSourceType'] = $request->userSourceType;
        }

        if (null !== $request->usernameStartsWith) {
            @$query['UsernameStartsWith'] = $request->usernameStartsWith;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListUsers',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListUsersResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListUsersResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the details of accounts in Identity as a Service (IDaaS) Employee IAM (EIAM) by page.
     *
     * @param request - ListUsersRequest
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
     * Queries the accounts that are allowed to access an Employee Identity and Access Management (EIAM) application. The return results include the IDs of the accounts. If you need to obtain the details of the accounts, call the GetUser operation.
     *
     * @param request - ListUsersForApplicationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListUsersForApplicationResponse
     *
     * @param ListUsersForApplicationRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ListUsersForApplicationResponse
     */
    public function listUsersForApplicationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->applicationId) {
            @$query['ApplicationId'] = $request->applicationId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->userIds) {
            @$query['UserIds'] = $request->userIds;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListUsersForApplication',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListUsersForApplicationResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListUsersForApplicationResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the accounts that are allowed to access an Employee Identity and Access Management (EIAM) application. The return results include the IDs of the accounts. If you need to obtain the details of the accounts, call the GetUser operation.
     *
     * @param request - ListUsersForApplicationRequest
     * @returns ListUsersForApplicationResponse
     *
     * @param ListUsersForApplicationRequest $request
     *
     * @return ListUsersForApplicationResponse
     */
    public function listUsersForApplication($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listUsersForApplicationWithOptions($request, $runtime);
    }

    /**
     * Queries the information of accounts in an Employee Identity and Access Management (EIAM) group of Identity as a Service (IDaaS).
     *
     * @param request - ListUsersForGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
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
        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->userIds) {
            @$query['UserIds'] = $request->userIds;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListUsersForGroup',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListUsersForGroupResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListUsersForGroupResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the information of accounts in an Employee Identity and Access Management (EIAM) group of Identity as a Service (IDaaS).
     *
     * @param request - ListUsersForGroupRequest
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
     * Queries a client key of an Employee Identity and Access Management (EIAM) application. The returned key secret is masked. If you want to query the key secret that is not masked, call the ListApplicationClientSecrets operation.
     *
     * @param request - ObtainApplicationClientSecretRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ObtainApplicationClientSecretResponse
     *
     * @param ObtainApplicationClientSecretRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return ObtainApplicationClientSecretResponse
     */
    public function obtainApplicationClientSecretWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->applicationId) {
            @$query['ApplicationId'] = $request->applicationId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->secretId) {
            @$query['SecretId'] = $request->secretId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'ObtainApplicationClientSecret',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ObtainApplicationClientSecretResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ObtainApplicationClientSecretResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries a client key of an Employee Identity and Access Management (EIAM) application. The returned key secret is masked. If you want to query the key secret that is not masked, call the ListApplicationClientSecrets operation.
     *
     * @param request - ObtainApplicationClientSecretRequest
     * @returns ObtainApplicationClientSecretResponse
     *
     * @param ObtainApplicationClientSecretRequest $request
     *
     * @return ObtainApplicationClientSecretResponse
     */
    public function obtainApplicationClientSecret($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->obtainApplicationClientSecretWithOptions($request, $runtime);
    }

    /**
     * 查看指定域名安全代理Token。
     *
     * @param request - ObtainDomainProxyTokenRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ObtainDomainProxyTokenResponse
     *
     * @param ObtainDomainProxyTokenRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ObtainDomainProxyTokenResponse
     */
    public function obtainDomainProxyTokenWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domainId) {
            @$query['DomainId'] = $request->domainId;
        }

        if (null !== $request->domainProxyTokenId) {
            @$query['DomainProxyTokenId'] = $request->domainProxyTokenId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'ObtainDomainProxyToken',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ObtainDomainProxyTokenResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ObtainDomainProxyTokenResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 查看指定域名安全代理Token。
     *
     * @param request - ObtainDomainProxyTokenRequest
     * @returns ObtainDomainProxyTokenResponse
     *
     * @param ObtainDomainProxyTokenRequest $request
     *
     * @return ObtainDomainProxyTokenResponse
     */
    public function obtainDomainProxyToken($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->obtainDomainProxyTokenWithOptions($request, $runtime);
    }

    /**
     * Removes an Employee Identity and Access Management (EIAM) account from multiple EIAM organizations of Identity as a Service (IDaaS). You cannot remove an account from a primary organization.
     *
     * @param request - RemoveUserFromOrganizationalUnitsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns RemoveUserFromOrganizationalUnitsResponse
     *
     * @param RemoveUserFromOrganizationalUnitsRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return RemoveUserFromOrganizationalUnitsResponse
     */
    public function removeUserFromOrganizationalUnitsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->organizationalUnitIds) {
            @$query['OrganizationalUnitIds'] = $request->organizationalUnitIds;
        }

        if (null !== $request->userId) {
            @$query['UserId'] = $request->userId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'RemoveUserFromOrganizationalUnits',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return RemoveUserFromOrganizationalUnitsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return RemoveUserFromOrganizationalUnitsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Removes an Employee Identity and Access Management (EIAM) account from multiple EIAM organizations of Identity as a Service (IDaaS). You cannot remove an account from a primary organization.
     *
     * @param request - RemoveUserFromOrganizationalUnitsRequest
     * @returns RemoveUserFromOrganizationalUnitsResponse
     *
     * @param RemoveUserFromOrganizationalUnitsRequest $request
     *
     * @return RemoveUserFromOrganizationalUnitsResponse
     */
    public function removeUserFromOrganizationalUnits($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeUserFromOrganizationalUnitsWithOptions($request, $runtime);
    }

    /**
     * Removes Employee Identity and Access Management (EIAM) accounts from an EIAM group of Identity as a Service (IDaaS).
     *
     * @param request - RemoveUsersFromGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns RemoveUsersFromGroupResponse
     *
     * @param RemoveUsersFromGroupRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return RemoveUsersFromGroupResponse
     */
    public function removeUsersFromGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->userIds) {
            @$query['UserIds'] = $request->userIds;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'RemoveUsersFromGroup',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return RemoveUsersFromGroupResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return RemoveUsersFromGroupResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Removes Employee Identity and Access Management (EIAM) accounts from an EIAM group of Identity as a Service (IDaaS).
     *
     * @param request - RemoveUsersFromGroupRequest
     * @returns RemoveUsersFromGroupResponse
     *
     * @param RemoveUsersFromGroupRequest $request
     *
     * @return RemoveUsersFromGroupResponse
     */
    public function removeUsersFromGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeUsersFromGroupWithOptions($request, $runtime);
    }

    /**
     * Revokes the permissions to access an application from multiple account groups at a time in Identity as a Service (IDaaS) Employee Identity and Access Management (EIAM).
     *
     * @param request - RevokeApplicationFromGroupsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns RevokeApplicationFromGroupsResponse
     *
     * @param RevokeApplicationFromGroupsRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return RevokeApplicationFromGroupsResponse
     */
    public function revokeApplicationFromGroupsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->applicationId) {
            @$query['ApplicationId'] = $request->applicationId;
        }

        if (null !== $request->groupIds) {
            @$query['GroupIds'] = $request->groupIds;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'RevokeApplicationFromGroups',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return RevokeApplicationFromGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return RevokeApplicationFromGroupsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Revokes the permissions to access an application from multiple account groups at a time in Identity as a Service (IDaaS) Employee Identity and Access Management (EIAM).
     *
     * @param request - RevokeApplicationFromGroupsRequest
     * @returns RevokeApplicationFromGroupsResponse
     *
     * @param RevokeApplicationFromGroupsRequest $request
     *
     * @return RevokeApplicationFromGroupsResponse
     */
    public function revokeApplicationFromGroups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->revokeApplicationFromGroupsWithOptions($request, $runtime);
    }

    /**
     * Revokes the permissions to access an application from multiple Employee Identity and Access Management (EIAM) organizations at a time.
     *
     * @param request - RevokeApplicationFromOrganizationalUnitsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns RevokeApplicationFromOrganizationalUnitsResponse
     *
     * @param RevokeApplicationFromOrganizationalUnitsRequest $request
     * @param RuntimeOptions                                  $runtime
     *
     * @return RevokeApplicationFromOrganizationalUnitsResponse
     */
    public function revokeApplicationFromOrganizationalUnitsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->applicationId) {
            @$query['ApplicationId'] = $request->applicationId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->organizationalUnitIds) {
            @$query['OrganizationalUnitIds'] = $request->organizationalUnitIds;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'RevokeApplicationFromOrganizationalUnits',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return RevokeApplicationFromOrganizationalUnitsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return RevokeApplicationFromOrganizationalUnitsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Revokes the permissions to access an application from multiple Employee Identity and Access Management (EIAM) organizations at a time.
     *
     * @param request - RevokeApplicationFromOrganizationalUnitsRequest
     * @returns RevokeApplicationFromOrganizationalUnitsResponse
     *
     * @param RevokeApplicationFromOrganizationalUnitsRequest $request
     *
     * @return RevokeApplicationFromOrganizationalUnitsResponse
     */
    public function revokeApplicationFromOrganizationalUnits($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->revokeApplicationFromOrganizationalUnitsWithOptions($request, $runtime);
    }

    /**
     * Revokes the permissions to access an application from multiple Employee Identity and Access Management (EIAM) accounts at a time.
     *
     * @param request - RevokeApplicationFromUsersRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns RevokeApplicationFromUsersResponse
     *
     * @param RevokeApplicationFromUsersRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return RevokeApplicationFromUsersResponse
     */
    public function revokeApplicationFromUsersWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->applicationId) {
            @$query['ApplicationId'] = $request->applicationId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->userIds) {
            @$query['UserIds'] = $request->userIds;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'RevokeApplicationFromUsers',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return RevokeApplicationFromUsersResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return RevokeApplicationFromUsersResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Revokes the permissions to access an application from multiple Employee Identity and Access Management (EIAM) accounts at a time.
     *
     * @param request - RevokeApplicationFromUsersRequest
     * @returns RevokeApplicationFromUsersResponse
     *
     * @param RevokeApplicationFromUsersRequest $request
     *
     * @return RevokeApplicationFromUsersResponse
     */
    public function revokeApplicationFromUsers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->revokeApplicationFromUsersWithOptions($request, $runtime);
    }

    /**
     * 运行同步任务
     *
     * @param request - RunSynchronizationJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns RunSynchronizationJobResponse
     *
     * @param RunSynchronizationJobRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return RunSynchronizationJobResponse
     */
    public function runSynchronizationJobWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->passwordInitialization) {
            @$query['PasswordInitialization'] = $request->passwordInitialization;
        }

        if (null !== $request->synchronizationScopeConfig) {
            @$query['SynchronizationScopeConfig'] = $request->synchronizationScopeConfig;
        }

        if (null !== $request->targetId) {
            @$query['TargetId'] = $request->targetId;
        }

        if (null !== $request->targetType) {
            @$query['TargetType'] = $request->targetType;
        }

        if (null !== $request->userIdentityTypes) {
            @$query['UserIdentityTypes'] = $request->userIdentityTypes;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'RunSynchronizationJob',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return RunSynchronizationJobResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return RunSynchronizationJobResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 运行同步任务
     *
     * @param request - RunSynchronizationJobRequest
     * @returns RunSynchronizationJobResponse
     *
     * @param RunSynchronizationJobRequest $request
     *
     * @return RunSynchronizationJobResponse
     */
    public function runSynchronizationJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->runSynchronizationJobWithOptions($request, $runtime);
    }

    /**
     * Configures the permissions of the Developer API feature of an Employee Identity and Access Management (EIAM) application.
     *
     * @param request - SetApplicationGrantScopeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns SetApplicationGrantScopeResponse
     *
     * @param SetApplicationGrantScopeRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return SetApplicationGrantScopeResponse
     */
    public function setApplicationGrantScopeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->applicationId) {
            @$query['ApplicationId'] = $request->applicationId;
        }

        if (null !== $request->grantScopes) {
            @$query['GrantScopes'] = $request->grantScopes;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetApplicationGrantScope',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return SetApplicationGrantScopeResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return SetApplicationGrantScopeResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Configures the permissions of the Developer API feature of an Employee Identity and Access Management (EIAM) application.
     *
     * @param request - SetApplicationGrantScopeRequest
     * @returns SetApplicationGrantScopeResponse
     *
     * @param SetApplicationGrantScopeRequest $request
     *
     * @return SetApplicationGrantScopeResponse
     */
    public function setApplicationGrantScope($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setApplicationGrantScopeWithOptions($request, $runtime);
    }

    /**
     * Configures the account synchronization feature for an application in Identity as a Service (IDaaS) Employee Identity and Access Management (EIAM).
     *
     * @param request - SetApplicationProvisioningConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns SetApplicationProvisioningConfigResponse
     *
     * @param SetApplicationProvisioningConfigRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return SetApplicationProvisioningConfigResponse
     */
    public function setApplicationProvisioningConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->applicationId) {
            @$query['ApplicationId'] = $request->applicationId;
        }

        if (null !== $request->callbackProvisioningConfig) {
            @$query['CallbackProvisioningConfig'] = $request->callbackProvisioningConfig;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->provisionPassword) {
            @$query['ProvisionPassword'] = $request->provisionPassword;
        }

        if (null !== $request->provisionProtocolType) {
            @$query['ProvisionProtocolType'] = $request->provisionProtocolType;
        }

        if (null !== $request->scimProvisioningConfig) {
            @$query['ScimProvisioningConfig'] = $request->scimProvisioningConfig;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetApplicationProvisioningConfig',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return SetApplicationProvisioningConfigResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return SetApplicationProvisioningConfigResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Configures the account synchronization feature for an application in Identity as a Service (IDaaS) Employee Identity and Access Management (EIAM).
     *
     * @param request - SetApplicationProvisioningConfigRequest
     * @returns SetApplicationProvisioningConfigResponse
     *
     * @param SetApplicationProvisioningConfigRequest $request
     *
     * @return SetApplicationProvisioningConfigResponse
     */
    public function setApplicationProvisioningConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setApplicationProvisioningConfigWithOptions($request, $runtime);
    }

    /**
     * Sets the account synchronization scope of applications in Identity as a Service (IDaaS) Employee IAM (EIAM). This scope is the same as the scope within which developers can call the DeveloperAPI to query and manage accounts.
     *
     * @param request - SetApplicationProvisioningScopeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns SetApplicationProvisioningScopeResponse
     *
     * @param SetApplicationProvisioningScopeRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return SetApplicationProvisioningScopeResponse
     */
    public function setApplicationProvisioningScopeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->applicationId) {
            @$query['ApplicationId'] = $request->applicationId;
        }

        if (null !== $request->groupIds) {
            @$query['GroupIds'] = $request->groupIds;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->organizationalUnitIds) {
            @$query['OrganizationalUnitIds'] = $request->organizationalUnitIds;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetApplicationProvisioningScope',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return SetApplicationProvisioningScopeResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return SetApplicationProvisioningScopeResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Sets the account synchronization scope of applications in Identity as a Service (IDaaS) Employee IAM (EIAM). This scope is the same as the scope within which developers can call the DeveloperAPI to query and manage accounts.
     *
     * @param request - SetApplicationProvisioningScopeRequest
     * @returns SetApplicationProvisioningScopeResponse
     *
     * @param SetApplicationProvisioningScopeRequest $request
     *
     * @return SetApplicationProvisioningScopeResponse
     */
    public function setApplicationProvisioningScope($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setApplicationProvisioningScopeWithOptions($request, $runtime);
    }

    /**
     * Specifies the single sign-on (SSO) configuration attributes of an application in Identity as a Service (IDaaS) Employee IAM (EIAM).
     *
     * @remarks
     * In IDaaS EIAM, the application management feature supports multiple SSO protocols for applications, including SAML 2.0 and OIDC protocols. Each application supports only one protocol, and the protocol cannot be changed after the application is created. You can specify the SSO configuration attributes of an application based on the supported SSO protocol.
     *
     * @param request - SetApplicationSsoConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns SetApplicationSsoConfigResponse
     *
     * @param SetApplicationSsoConfigRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return SetApplicationSsoConfigResponse
     */
    public function setApplicationSsoConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->applicationId) {
            @$query['ApplicationId'] = $request->applicationId;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->initLoginType) {
            @$query['InitLoginType'] = $request->initLoginType;
        }

        if (null !== $request->initLoginUrl) {
            @$query['InitLoginUrl'] = $request->initLoginUrl;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->oidcSsoConfig) {
            @$query['OidcSsoConfig'] = $request->oidcSsoConfig;
        }

        if (null !== $request->samlSsoConfig) {
            @$query['SamlSsoConfig'] = $request->samlSsoConfig;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetApplicationSsoConfig',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return SetApplicationSsoConfigResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return SetApplicationSsoConfigResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Specifies the single sign-on (SSO) configuration attributes of an application in Identity as a Service (IDaaS) Employee IAM (EIAM).
     *
     * @remarks
     * In IDaaS EIAM, the application management feature supports multiple SSO protocols for applications, including SAML 2.0 and OIDC protocols. Each application supports only one protocol, and the protocol cannot be changed after the application is created. You can specify the SSO configuration attributes of an application based on the supported SSO protocol.
     *
     * @param request - SetApplicationSsoConfigRequest
     * @returns SetApplicationSsoConfigResponse
     *
     * @param SetApplicationSsoConfigRequest $request
     *
     * @return SetApplicationSsoConfigResponse
     */
    public function setApplicationSsoConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setApplicationSsoConfigWithOptions($request, $runtime);
    }

    /**
     * 设置默认域名。
     *
     * @param request - SetDefaultDomainRequest
     * @param runtime - runtime options for this request RuntimeOptions
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
        if (null !== $request->domainId) {
            @$query['DomainId'] = $request->domainId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetDefaultDomain',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return SetDefaultDomainResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return SetDefaultDomainResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 设置默认域名。
     *
     * @param request - SetDefaultDomainRequest
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
     * Configures a forgot password policy for an Employee Identity and Access Management (EIAM) instance of Identity as a Service (IDaaS).
     *
     * @param request - SetForgetPasswordConfigurationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns SetForgetPasswordConfigurationResponse
     *
     * @param SetForgetPasswordConfigurationRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return SetForgetPasswordConfigurationResponse
     */
    public function setForgetPasswordConfigurationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->authenticationChannels) {
            @$query['AuthenticationChannels'] = $request->authenticationChannels;
        }

        if (null !== $request->forgetPasswordStatus) {
            @$query['ForgetPasswordStatus'] = $request->forgetPasswordStatus;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetForgetPasswordConfiguration',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return SetForgetPasswordConfigurationResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return SetForgetPasswordConfigurationResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Configures a forgot password policy for an Employee Identity and Access Management (EIAM) instance of Identity as a Service (IDaaS).
     *
     * @param request - SetForgetPasswordConfigurationRequest
     * @returns SetForgetPasswordConfigurationResponse
     *
     * @param SetForgetPasswordConfigurationRequest $request
     *
     * @return SetForgetPasswordConfigurationResponse
     */
    public function setForgetPasswordConfiguration($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setForgetPasswordConfigurationWithOptions($request, $runtime);
    }

    /**
     * 修改IdP同步入配置.
     *
     * @param request - SetIdentityProviderUdPullConfigurationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns SetIdentityProviderUdPullConfigurationResponse
     *
     * @param SetIdentityProviderUdPullConfigurationRequest $request
     * @param RuntimeOptions                                $runtime
     *
     * @return SetIdentityProviderUdPullConfigurationResponse
     */
    public function setIdentityProviderUdPullConfigurationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->groupSyncStatus) {
            @$query['GroupSyncStatus'] = $request->groupSyncStatus;
        }

        if (null !== $request->identityProviderId) {
            @$query['IdentityProviderId'] = $request->identityProviderId;
        }

        if (null !== $request->incrementalCallbackStatus) {
            @$query['IncrementalCallbackStatus'] = $request->incrementalCallbackStatus;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->ldapUdPullConfig) {
            @$query['LdapUdPullConfig'] = $request->ldapUdPullConfig;
        }

        if (null !== $request->periodicSyncStatus) {
            @$query['PeriodicSyncStatus'] = $request->periodicSyncStatus;
        }

        if (null !== $request->pullProtectedRule) {
            @$query['PullProtectedRule'] = $request->pullProtectedRule;
        }

        if (null !== $request->udSyncScopeConfig) {
            @$query['UdSyncScopeConfig'] = $request->udSyncScopeConfig;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetIdentityProviderUdPullConfiguration',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return SetIdentityProviderUdPullConfigurationResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return SetIdentityProviderUdPullConfigurationResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 修改IdP同步入配置.
     *
     * @param request - SetIdentityProviderUdPullConfigurationRequest
     * @returns SetIdentityProviderUdPullConfigurationResponse
     *
     * @param SetIdentityProviderUdPullConfigurationRequest $request
     *
     * @return SetIdentityProviderUdPullConfigurationResponse
     */
    public function setIdentityProviderUdPullConfiguration($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setIdentityProviderUdPullConfigurationWithOptions($request, $runtime);
    }

    /**
     * Configures a password complexity policy for an Employee Identity and Access Management (EIAM) instance of Identity as a Service (IDaaS).
     *
     * @param request - SetPasswordComplexityConfigurationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns SetPasswordComplexityConfigurationResponse
     *
     * @param SetPasswordComplexityConfigurationRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return SetPasswordComplexityConfigurationResponse
     */
    public function setPasswordComplexityConfigurationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->passwordComplexityRules) {
            @$query['PasswordComplexityRules'] = $request->passwordComplexityRules;
        }

        if (null !== $request->passwordMinLength) {
            @$query['PasswordMinLength'] = $request->passwordMinLength;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetPasswordComplexityConfiguration',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return SetPasswordComplexityConfigurationResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return SetPasswordComplexityConfigurationResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Configures a password complexity policy for an Employee Identity and Access Management (EIAM) instance of Identity as a Service (IDaaS).
     *
     * @param request - SetPasswordComplexityConfigurationRequest
     * @returns SetPasswordComplexityConfigurationResponse
     *
     * @param SetPasswordComplexityConfigurationRequest $request
     *
     * @return SetPasswordComplexityConfigurationResponse
     */
    public function setPasswordComplexityConfiguration($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setPasswordComplexityConfigurationWithOptions($request, $runtime);
    }

    /**
     * Configures a password expiration policy for an Employee Identity and Access Management (EIAM) instance of Identity as a Service (IDaaS).
     *
     * @param request - SetPasswordExpirationConfigurationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns SetPasswordExpirationConfigurationResponse
     *
     * @param SetPasswordExpirationConfigurationRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return SetPasswordExpirationConfigurationResponse
     */
    public function setPasswordExpirationConfigurationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->effectiveAuthenticationSourceIds) {
            @$query['EffectiveAuthenticationSourceIds'] = $request->effectiveAuthenticationSourceIds;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->passwordExpirationAction) {
            @$query['PasswordExpirationAction'] = $request->passwordExpirationAction;
        }

        if (null !== $request->passwordExpirationNotificationChannels) {
            @$query['PasswordExpirationNotificationChannels'] = $request->passwordExpirationNotificationChannels;
        }

        if (null !== $request->passwordExpirationNotificationDuration) {
            @$query['PasswordExpirationNotificationDuration'] = $request->passwordExpirationNotificationDuration;
        }

        if (null !== $request->passwordExpirationNotificationStatus) {
            @$query['PasswordExpirationNotificationStatus'] = $request->passwordExpirationNotificationStatus;
        }

        if (null !== $request->passwordExpirationStatus) {
            @$query['PasswordExpirationStatus'] = $request->passwordExpirationStatus;
        }

        if (null !== $request->passwordForcedUpdateDuration) {
            @$query['PasswordForcedUpdateDuration'] = $request->passwordForcedUpdateDuration;
        }

        if (null !== $request->passwordValidMaxDay) {
            @$query['PasswordValidMaxDay'] = $request->passwordValidMaxDay;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetPasswordExpirationConfiguration',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return SetPasswordExpirationConfigurationResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return SetPasswordExpirationConfigurationResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Configures a password expiration policy for an Employee Identity and Access Management (EIAM) instance of Identity as a Service (IDaaS).
     *
     * @param request - SetPasswordExpirationConfigurationRequest
     * @returns SetPasswordExpirationConfigurationResponse
     *
     * @param SetPasswordExpirationConfigurationRequest $request
     *
     * @return SetPasswordExpirationConfigurationResponse
     */
    public function setPasswordExpirationConfiguration($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setPasswordExpirationConfigurationWithOptions($request, $runtime);
    }

    /**
     * Configures a password history policy for an Employee Identity and Access Management (EIAM) instance of Identity as a Service (IDaaS).
     *
     * @param request - SetPasswordHistoryConfigurationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns SetPasswordHistoryConfigurationResponse
     *
     * @param SetPasswordHistoryConfigurationRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return SetPasswordHistoryConfigurationResponse
     */
    public function setPasswordHistoryConfigurationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->passwordHistoryMaxRetention) {
            @$query['PasswordHistoryMaxRetention'] = $request->passwordHistoryMaxRetention;
        }

        if (null !== $request->passwordHistoryStatus) {
            @$query['PasswordHistoryStatus'] = $request->passwordHistoryStatus;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetPasswordHistoryConfiguration',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return SetPasswordHistoryConfigurationResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return SetPasswordHistoryConfigurationResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Configures a password history policy for an Employee Identity and Access Management (EIAM) instance of Identity as a Service (IDaaS).
     *
     * @param request - SetPasswordHistoryConfigurationRequest
     * @returns SetPasswordHistoryConfigurationResponse
     *
     * @param SetPasswordHistoryConfigurationRequest $request
     *
     * @return SetPasswordHistoryConfigurationResponse
     */
    public function setPasswordHistoryConfiguration($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setPasswordHistoryConfigurationWithOptions($request, $runtime);
    }

    /**
     * Sets the password initialization configurations for an Employee Identity and Access Management (EIAM) instance of Identity as a Service (IDaaS).
     *
     * @param request - SetPasswordInitializationConfigurationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns SetPasswordInitializationConfigurationResponse
     *
     * @param SetPasswordInitializationConfigurationRequest $request
     * @param RuntimeOptions                                $runtime
     *
     * @return SetPasswordInitializationConfigurationResponse
     */
    public function setPasswordInitializationConfigurationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->passwordForcedUpdateStatus) {
            @$query['PasswordForcedUpdateStatus'] = $request->passwordForcedUpdateStatus;
        }

        if (null !== $request->passwordInitializationNotificationChannels) {
            @$query['PasswordInitializationNotificationChannels'] = $request->passwordInitializationNotificationChannels;
        }

        if (null !== $request->passwordInitializationStatus) {
            @$query['PasswordInitializationStatus'] = $request->passwordInitializationStatus;
        }

        if (null !== $request->passwordInitializationType) {
            @$query['PasswordInitializationType'] = $request->passwordInitializationType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetPasswordInitializationConfiguration',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return SetPasswordInitializationConfigurationResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return SetPasswordInitializationConfigurationResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Sets the password initialization configurations for an Employee Identity and Access Management (EIAM) instance of Identity as a Service (IDaaS).
     *
     * @param request - SetPasswordInitializationConfigurationRequest
     * @returns SetPasswordInitializationConfigurationResponse
     *
     * @param SetPasswordInitializationConfigurationRequest $request
     *
     * @return SetPasswordInitializationConfigurationResponse
     */
    public function setPasswordInitializationConfiguration($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setPasswordInitializationConfigurationWithOptions($request, $runtime);
    }

    /**
     * Updates the primary organizational unit to which an Identity as a Service (IDaaS) Employee Identity and Access Management (EIAM) account belongs. This account will be removed from the previous primary organizational unit and added to the new primary organization.
     *
     * @param request - SetUserPrimaryOrganizationalUnitRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns SetUserPrimaryOrganizationalUnitResponse
     *
     * @param SetUserPrimaryOrganizationalUnitRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return SetUserPrimaryOrganizationalUnitResponse
     */
    public function setUserPrimaryOrganizationalUnitWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->organizationalUnitId) {
            @$query['OrganizationalUnitId'] = $request->organizationalUnitId;
        }

        if (null !== $request->userId) {
            @$query['UserId'] = $request->userId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetUserPrimaryOrganizationalUnit',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return SetUserPrimaryOrganizationalUnitResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return SetUserPrimaryOrganizationalUnitResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Updates the primary organizational unit to which an Identity as a Service (IDaaS) Employee Identity and Access Management (EIAM) account belongs. This account will be removed from the previous primary organizational unit and added to the new primary organization.
     *
     * @param request - SetUserPrimaryOrganizationalUnitRequest
     * @returns SetUserPrimaryOrganizationalUnitResponse
     *
     * @param SetUserPrimaryOrganizationalUnitRequest $request
     *
     * @return SetUserPrimaryOrganizationalUnitResponse
     */
    public function setUserPrimaryOrganizationalUnit($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setUserPrimaryOrganizationalUnitWithOptions($request, $runtime);
    }

    /**
     * Unlocks an Employee Identity and Access Management (EIAM) account of Identity as a Service (IDaaS) that is locked.
     *
     * @param request - UnlockUserRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns UnlockUserResponse
     *
     * @param UnlockUserRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return UnlockUserResponse
     */
    public function unlockUserWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->userId) {
            @$query['UserId'] = $request->userId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'UnlockUser',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UnlockUserResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UnlockUserResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Unlocks an Employee Identity and Access Management (EIAM) account of Identity as a Service (IDaaS) that is locked.
     *
     * @param request - UnlockUserRequest
     * @returns UnlockUserResponse
     *
     * @param UnlockUserRequest $request
     *
     * @return UnlockUserResponse
     */
    public function unlockUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->unlockUserWithOptions($request, $runtime);
    }

    /**
     * Modifies the authorization type of an Employee Identity and Access Management (EIAM) application.
     *
     * @param request - UpdateApplicationAuthorizationTypeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns UpdateApplicationAuthorizationTypeResponse
     *
     * @param UpdateApplicationAuthorizationTypeRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return UpdateApplicationAuthorizationTypeResponse
     */
    public function updateApplicationAuthorizationTypeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->applicationId) {
            @$query['ApplicationId'] = $request->applicationId;
        }

        if (null !== $request->authorizationType) {
            @$query['AuthorizationType'] = $request->authorizationType;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateApplicationAuthorizationType',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateApplicationAuthorizationTypeResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateApplicationAuthorizationTypeResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Modifies the authorization type of an Employee Identity and Access Management (EIAM) application.
     *
     * @param request - UpdateApplicationAuthorizationTypeRequest
     * @returns UpdateApplicationAuthorizationTypeResponse
     *
     * @param UpdateApplicationAuthorizationTypeRequest $request
     *
     * @return UpdateApplicationAuthorizationTypeResponse
     */
    public function updateApplicationAuthorizationType($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateApplicationAuthorizationTypeWithOptions($request, $runtime);
    }

    /**
     * Modifies the description of an Employee Identity and Access Management (EIAM) application.
     *
     * @param request - UpdateApplicationDescriptionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns UpdateApplicationDescriptionResponse
     *
     * @param UpdateApplicationDescriptionRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return UpdateApplicationDescriptionResponse
     */
    public function updateApplicationDescriptionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->applicationId) {
            @$query['ApplicationId'] = $request->applicationId;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateApplicationDescription',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateApplicationDescriptionResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateApplicationDescriptionResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Modifies the description of an Employee Identity and Access Management (EIAM) application.
     *
     * @param request - UpdateApplicationDescriptionRequest
     * @returns UpdateApplicationDescriptionResponse
     *
     * @param UpdateApplicationDescriptionRequest $request
     *
     * @return UpdateApplicationDescriptionResponse
     */
    public function updateApplicationDescription($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateApplicationDescriptionWithOptions($request, $runtime);
    }

    /**
     * Updates the information about an account group in Identity as a Service (IDaaS) Employee Identity and Access Management (EIAM). If the information is empty, the information is not updated by default.
     *
     * @param request - UpdateGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
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
        if (null !== $request->groupExternalId) {
            @$query['GroupExternalId'] = $request->groupExternalId;
        }

        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->groupName) {
            @$query['GroupName'] = $request->groupName;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateGroup',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateGroupResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateGroupResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Updates the information about an account group in Identity as a Service (IDaaS) Employee Identity and Access Management (EIAM). If the information is empty, the information is not updated by default.
     *
     * @param request - UpdateGroupRequest
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
     * Updates the description of an Identity as a Service (IDaaS) Employee Identity and Access Management (EIAM) account group.
     *
     * @param request - UpdateGroupDescriptionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns UpdateGroupDescriptionResponse
     *
     * @param UpdateGroupDescriptionRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return UpdateGroupDescriptionResponse
     */
    public function updateGroupDescriptionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateGroupDescription',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateGroupDescriptionResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateGroupDescriptionResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Updates the description of an Identity as a Service (IDaaS) Employee Identity and Access Management (EIAM) account group.
     *
     * @param request - UpdateGroupDescriptionRequest
     * @returns UpdateGroupDescriptionResponse
     *
     * @param UpdateGroupDescriptionRequest $request
     *
     * @return UpdateGroupDescriptionResponse
     */
    public function updateGroupDescription($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateGroupDescriptionWithOptions($request, $runtime);
    }

    /**
     * 更新idp基础配置.
     *
     * @param request - UpdateIdentityProviderRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns UpdateIdentityProviderResponse
     *
     * @param UpdateIdentityProviderRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return UpdateIdentityProviderResponse
     */
    public function updateIdentityProviderWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dingtalkAppConfig) {
            @$query['DingtalkAppConfig'] = $request->dingtalkAppConfig;
        }

        if (null !== $request->identityProviderId) {
            @$query['IdentityProviderId'] = $request->identityProviderId;
        }

        if (null !== $request->identityProviderName) {
            @$query['IdentityProviderName'] = $request->identityProviderName;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->larkConfig) {
            @$query['LarkConfig'] = $request->larkConfig;
        }

        if (null !== $request->ldapConfig) {
            @$query['LdapConfig'] = $request->ldapConfig;
        }

        if (null !== $request->logoUrl) {
            @$query['LogoUrl'] = $request->logoUrl;
        }

        if (null !== $request->networkAccessEndpointId) {
            @$query['NetworkAccessEndpointId'] = $request->networkAccessEndpointId;
        }

        if (null !== $request->oidcConfig) {
            @$query['OidcConfig'] = $request->oidcConfig;
        }

        if (null !== $request->weComConfig) {
            @$query['WeComConfig'] = $request->weComConfig;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateIdentityProvider',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateIdentityProviderResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateIdentityProviderResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 更新idp基础配置.
     *
     * @param request - UpdateIdentityProviderRequest
     * @returns UpdateIdentityProviderResponse
     *
     * @param UpdateIdentityProviderRequest $request
     *
     * @return UpdateIdentityProviderResponse
     */
    public function updateIdentityProvider($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateIdentityProviderWithOptions($request, $runtime);
    }

    /**
     * Modifies the description of an Enterprise Identity and Access Management (EIAM) instance of Identity as a Service (IDaaS).
     *
     * @param request - UpdateInstanceDescriptionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns UpdateInstanceDescriptionResponse
     *
     * @param UpdateInstanceDescriptionRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return UpdateInstanceDescriptionResponse
     */
    public function updateInstanceDescriptionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateInstanceDescription',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateInstanceDescriptionResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateInstanceDescriptionResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Modifies the description of an Enterprise Identity and Access Management (EIAM) instance of Identity as a Service (IDaaS).
     *
     * @param request - UpdateInstanceDescriptionRequest
     * @returns UpdateInstanceDescriptionResponse
     *
     * @param UpdateInstanceDescriptionRequest $request
     *
     * @return UpdateInstanceDescriptionResponse
     */
    public function updateInstanceDescription($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateInstanceDescriptionWithOptions($request, $runtime);
    }

    /**
     * 更新一个专属网络端点的名称。
     *
     * @param request - UpdateNetworkAccessEndpointNameRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns UpdateNetworkAccessEndpointNameResponse
     *
     * @param UpdateNetworkAccessEndpointNameRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return UpdateNetworkAccessEndpointNameResponse
     */
    public function updateNetworkAccessEndpointNameWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->networkAccessEndpointId) {
            @$query['NetworkAccessEndpointId'] = $request->networkAccessEndpointId;
        }

        if (null !== $request->networkAccessEndpointName) {
            @$query['NetworkAccessEndpointName'] = $request->networkAccessEndpointName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateNetworkAccessEndpointName',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateNetworkAccessEndpointNameResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateNetworkAccessEndpointNameResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 更新一个专属网络端点的名称。
     *
     * @param request - UpdateNetworkAccessEndpointNameRequest
     * @returns UpdateNetworkAccessEndpointNameResponse
     *
     * @param UpdateNetworkAccessEndpointNameRequest $request
     *
     * @return UpdateNetworkAccessEndpointNameResponse
     */
    public function updateNetworkAccessEndpointName($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateNetworkAccessEndpointNameWithOptions($request, $runtime);
    }

    /**
     * Updates the basic information about an Employee Identity and Access Management (EIAM) organization. The basic information about the organization is not updated by default if no parameter is specified.
     *
     * @param request - UpdateOrganizationalUnitRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns UpdateOrganizationalUnitResponse
     *
     * @param UpdateOrganizationalUnitRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return UpdateOrganizationalUnitResponse
     */
    public function updateOrganizationalUnitWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->organizationalUnitId) {
            @$query['OrganizationalUnitId'] = $request->organizationalUnitId;
        }

        if (null !== $request->organizationalUnitName) {
            @$query['OrganizationalUnitName'] = $request->organizationalUnitName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateOrganizationalUnit',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateOrganizationalUnitResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateOrganizationalUnitResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Updates the basic information about an Employee Identity and Access Management (EIAM) organization. The basic information about the organization is not updated by default if no parameter is specified.
     *
     * @param request - UpdateOrganizationalUnitRequest
     * @returns UpdateOrganizationalUnitResponse
     *
     * @param UpdateOrganizationalUnitRequest $request
     *
     * @return UpdateOrganizationalUnitResponse
     */
    public function updateOrganizationalUnit($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateOrganizationalUnitWithOptions($request, $runtime);
    }

    /**
     * Modifies the description of an Employee Identity and Access Management (EIAM) organization.
     *
     * @param request - UpdateOrganizationalUnitDescriptionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns UpdateOrganizationalUnitDescriptionResponse
     *
     * @param UpdateOrganizationalUnitDescriptionRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return UpdateOrganizationalUnitDescriptionResponse
     */
    public function updateOrganizationalUnitDescriptionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->organizationalUnitId) {
            @$query['OrganizationalUnitId'] = $request->organizationalUnitId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateOrganizationalUnitDescription',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateOrganizationalUnitDescriptionResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateOrganizationalUnitDescriptionResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Modifies the description of an Employee Identity and Access Management (EIAM) organization.
     *
     * @param request - UpdateOrganizationalUnitDescriptionRequest
     * @returns UpdateOrganizationalUnitDescriptionResponse
     *
     * @param UpdateOrganizationalUnitDescriptionRequest $request
     *
     * @return UpdateOrganizationalUnitDescriptionResponse
     */
    public function updateOrganizationalUnitDescription($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateOrganizationalUnitDescriptionWithOptions($request, $runtime);
    }

    /**
     * Updates the parent organization ID of an organization in Identity as a Service (IDaaS) Employee Identity and Access Management (EIAM). In this case, the organization is moved from a parent node to a new node.
     *
     * @param request - UpdateOrganizationalUnitParentIdRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns UpdateOrganizationalUnitParentIdResponse
     *
     * @param UpdateOrganizationalUnitParentIdRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return UpdateOrganizationalUnitParentIdResponse
     */
    public function updateOrganizationalUnitParentIdWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->organizationalUnitId) {
            @$query['OrganizationalUnitId'] = $request->organizationalUnitId;
        }

        if (null !== $request->parentId) {
            @$query['ParentId'] = $request->parentId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateOrganizationalUnitParentId',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateOrganizationalUnitParentIdResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateOrganizationalUnitParentIdResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Updates the parent organization ID of an organization in Identity as a Service (IDaaS) Employee Identity and Access Management (EIAM). In this case, the organization is moved from a parent node to a new node.
     *
     * @param request - UpdateOrganizationalUnitParentIdRequest
     * @returns UpdateOrganizationalUnitParentIdResponse
     *
     * @param UpdateOrganizationalUnitParentIdRequest $request
     *
     * @return UpdateOrganizationalUnitParentIdResponse
     */
    public function updateOrganizationalUnitParentId($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateOrganizationalUnitParentIdWithOptions($request, $runtime);
    }

    /**
     * Updates the basic information about an Employee Identity and Access Management (EIAM) account of Identity as a Service (IDaaS).
     *
     * @param request - UpdateUserRequest
     * @param runtime - runtime options for this request RuntimeOptions
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
        if (null !== $request->customFields) {
            @$query['CustomFields'] = $request->customFields;
        }

        if (null !== $request->displayName) {
            @$query['DisplayName'] = $request->displayName;
        }

        if (null !== $request->email) {
            @$query['Email'] = $request->email;
        }

        if (null !== $request->emailVerified) {
            @$query['EmailVerified'] = $request->emailVerified;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->phoneNumber) {
            @$query['PhoneNumber'] = $request->phoneNumber;
        }

        if (null !== $request->phoneNumberVerified) {
            @$query['PhoneNumberVerified'] = $request->phoneNumberVerified;
        }

        if (null !== $request->phoneRegion) {
            @$query['PhoneRegion'] = $request->phoneRegion;
        }

        if (null !== $request->userId) {
            @$query['UserId'] = $request->userId;
        }

        if (null !== $request->username) {
            @$query['Username'] = $request->username;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateUser',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateUserResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateUserResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Updates the basic information about an Employee Identity and Access Management (EIAM) account of Identity as a Service (IDaaS).
     *
     * @param request - UpdateUserRequest
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
     * Modifies the description of an Identity as a Service (IDaaS) Employee Identity and Access Management (EIAM) account.
     *
     * @param request - UpdateUserDescriptionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns UpdateUserDescriptionResponse
     *
     * @param UpdateUserDescriptionRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return UpdateUserDescriptionResponse
     */
    public function updateUserDescriptionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->userId) {
            @$query['UserId'] = $request->userId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateUserDescription',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateUserDescriptionResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateUserDescriptionResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Modifies the description of an Identity as a Service (IDaaS) Employee Identity and Access Management (EIAM) account.
     *
     * @param request - UpdateUserDescriptionRequest
     * @returns UpdateUserDescriptionResponse
     *
     * @param UpdateUserDescriptionRequest $request
     *
     * @return UpdateUserDescriptionResponse
     */
    public function updateUserDescription($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateUserDescriptionWithOptions($request, $runtime);
    }

    /**
     * Updates the password information of an Employee Identity and Access Management (EIAM) account of Identity as a Service (IDaaS). The password must meet the requirements of the password policies that are configured in the IDaaS console.
     *
     * @param request - UpdateUserPasswordRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns UpdateUserPasswordResponse
     *
     * @param UpdateUserPasswordRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return UpdateUserPasswordResponse
     */
    public function updateUserPasswordWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->password) {
            @$query['Password'] = $request->password;
        }

        if (null !== $request->passwordForcedUpdateStatus) {
            @$query['PasswordForcedUpdateStatus'] = $request->passwordForcedUpdateStatus;
        }

        if (null !== $request->userId) {
            @$query['UserId'] = $request->userId;
        }

        if (null !== $request->userNotificationChannels) {
            @$query['UserNotificationChannels'] = $request->userNotificationChannels;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateUserPassword',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateUserPasswordResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateUserPasswordResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Updates the password information of an Employee Identity and Access Management (EIAM) account of Identity as a Service (IDaaS). The password must meet the requirements of the password policies that are configured in the IDaaS console.
     *
     * @param request - UpdateUserPasswordRequest
     * @returns UpdateUserPasswordResponse
     *
     * @param UpdateUserPasswordRequest $request
     *
     * @return UpdateUserPasswordResponse
     */
    public function updateUserPassword($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateUserPasswordWithOptions($request, $runtime);
    }
}

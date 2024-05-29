<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
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
use AlibabaCloud\SDK\Eiam\V20211201\Models\DeleteInstanceRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\DeleteInstanceResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\DeleteNetworkAccessEndpointRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\DeleteNetworkAccessEndpointResponse;
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
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

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
        if (!Utils::empty_($endpoint)) {
            return $endpoint;
        }
        if (!Utils::isUnset($endpointMap) && !Utils::empty_(@$endpointMap[$regionId])) {
            return @$endpointMap[$regionId];
        }

        return Endpoint::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * @summary Adds an Employee Identity and Access Management (EIAM) account to multiple EIAM organizations of Identity as a Service (IDaaS). If the account already exists in the organizational unit, the system directly returns a success response.
     *  *
     * @param AddUserToOrganizationalUnitsRequest $request AddUserToOrganizationalUnitsRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return AddUserToOrganizationalUnitsResponse AddUserToOrganizationalUnitsResponse
     */
    public function addUserToOrganizationalUnitsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->organizationalUnitIds)) {
            $query['OrganizationalUnitIds'] = $request->organizationalUnitIds;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return AddUserToOrganizationalUnitsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Adds an Employee Identity and Access Management (EIAM) account to multiple EIAM organizations of Identity as a Service (IDaaS). If the account already exists in the organizational unit, the system directly returns a success response.
     *  *
     * @param AddUserToOrganizationalUnitsRequest $request AddUserToOrganizationalUnitsRequest
     *
     * @return AddUserToOrganizationalUnitsResponse AddUserToOrganizationalUnitsResponse
     */
    public function addUserToOrganizationalUnits($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addUserToOrganizationalUnitsWithOptions($request, $runtime);
    }

    /**
     * @summary Adds Employee Identity and Access Management (EIAM) accounts to an EIAM group of Identity as a Service (IDaaS).
     *  *
     * @param AddUsersToGroupRequest $request AddUsersToGroupRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return AddUsersToGroupResponse AddUsersToGroupResponse
     */
    public function addUsersToGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->userIds)) {
            $query['UserIds'] = $request->userIds;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return AddUsersToGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Adds Employee Identity and Access Management (EIAM) accounts to an EIAM group of Identity as a Service (IDaaS).
     *  *
     * @param AddUsersToGroupRequest $request AddUsersToGroupRequest
     *
     * @return AddUsersToGroupResponse AddUsersToGroupResponse
     */
    public function addUsersToGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addUsersToGroupWithOptions($request, $runtime);
    }

    /**
     * @summary Grants the permissions to access an application to multiple account groups at a time in Identity as a Service (IDaaS) Employee Identity and Access Management (EIAM).
     *  *
     * @param AuthorizeApplicationToGroupsRequest $request AuthorizeApplicationToGroupsRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return AuthorizeApplicationToGroupsResponse AuthorizeApplicationToGroupsResponse
     */
    public function authorizeApplicationToGroupsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->applicationId)) {
            $query['ApplicationId'] = $request->applicationId;
        }
        if (!Utils::isUnset($request->groupIds)) {
            $query['GroupIds'] = $request->groupIds;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return AuthorizeApplicationToGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Grants the permissions to access an application to multiple account groups at a time in Identity as a Service (IDaaS) Employee Identity and Access Management (EIAM).
     *  *
     * @param AuthorizeApplicationToGroupsRequest $request AuthorizeApplicationToGroupsRequest
     *
     * @return AuthorizeApplicationToGroupsResponse AuthorizeApplicationToGroupsResponse
     */
    public function authorizeApplicationToGroups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->authorizeApplicationToGroupsWithOptions($request, $runtime);
    }

    /**
     * @summary Grants the access permissions on an application to multiple Employee Identity and Access Management (EIAM) organizations at a time.
     *  *
     * @param AuthorizeApplicationToOrganizationalUnitsRequest $request AuthorizeApplicationToOrganizationalUnitsRequest
     * @param RuntimeOptions                                   $runtime runtime options for this request RuntimeOptions
     *
     * @return AuthorizeApplicationToOrganizationalUnitsResponse AuthorizeApplicationToOrganizationalUnitsResponse
     */
    public function authorizeApplicationToOrganizationalUnitsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->applicationId)) {
            $query['ApplicationId'] = $request->applicationId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->organizationalUnitIds)) {
            $query['OrganizationalUnitIds'] = $request->organizationalUnitIds;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return AuthorizeApplicationToOrganizationalUnitsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Grants the access permissions on an application to multiple Employee Identity and Access Management (EIAM) organizations at a time.
     *  *
     * @param AuthorizeApplicationToOrganizationalUnitsRequest $request AuthorizeApplicationToOrganizationalUnitsRequest
     *
     * @return AuthorizeApplicationToOrganizationalUnitsResponse AuthorizeApplicationToOrganizationalUnitsResponse
     */
    public function authorizeApplicationToOrganizationalUnits($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->authorizeApplicationToOrganizationalUnitsWithOptions($request, $runtime);
    }

    /**
     * @summary Grants the access permissions on an application to multiple Employee Identity and Access Management (EIAM) accounts at a time.
     *  *
     * @param AuthorizeApplicationToUsersRequest $request AuthorizeApplicationToUsersRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return AuthorizeApplicationToUsersResponse AuthorizeApplicationToUsersResponse
     */
    public function authorizeApplicationToUsersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->applicationId)) {
            $query['ApplicationId'] = $request->applicationId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->userIds)) {
            $query['UserIds'] = $request->userIds;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return AuthorizeApplicationToUsersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Grants the access permissions on an application to multiple Employee Identity and Access Management (EIAM) accounts at a time.
     *  *
     * @param AuthorizeApplicationToUsersRequest $request AuthorizeApplicationToUsersRequest
     *
     * @return AuthorizeApplicationToUsersResponse AuthorizeApplicationToUsersResponse
     */
    public function authorizeApplicationToUsers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->authorizeApplicationToUsersWithOptions($request, $runtime);
    }

    /**
     * @summary Adds an application to an Enterprise Identity Access Management (EIAM) instance of Identity as a Service (IDaaS).
     *  *
     * @description IDaaS EIAM supports the following two standard single sign-on (SSO) protocols for adding applications: SAML 2.0 and OIDC. You can select an SSO protocol based on your business requirements when you add an application. You cannot change the SSO protocol that you selected after the application is added.
     *  *
     * @param CreateApplicationRequest $request CreateApplicationRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateApplicationResponse CreateApplicationResponse
     */
    public function createApplicationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->applicationName)) {
            $query['ApplicationName'] = $request->applicationName;
        }
        if (!Utils::isUnset($request->applicationSourceType)) {
            $query['ApplicationSourceType'] = $request->applicationSourceType;
        }
        if (!Utils::isUnset($request->applicationTemplateId)) {
            $query['ApplicationTemplateId'] = $request->applicationTemplateId;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->logoUrl)) {
            $query['LogoUrl'] = $request->logoUrl;
        }
        if (!Utils::isUnset($request->ssoType)) {
            $query['SsoType'] = $request->ssoType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return CreateApplicationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Adds an application to an Enterprise Identity Access Management (EIAM) instance of Identity as a Service (IDaaS).
     *  *
     * @description IDaaS EIAM supports the following two standard single sign-on (SSO) protocols for adding applications: SAML 2.0 and OIDC. You can select an SSO protocol based on your business requirements when you add an application. You cannot change the SSO protocol that you selected after the application is added.
     *  *
     * @param CreateApplicationRequest $request CreateApplicationRequest
     *
     * @return CreateApplicationResponse CreateApplicationResponse
     */
    public function createApplication($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createApplicationWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a client key for an Employee Identity and Access Management (EIAM) application. An EIAM application can have up to two client keys.
     *  *
     * @param CreateApplicationClientSecretRequest $request CreateApplicationClientSecretRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateApplicationClientSecretResponse CreateApplicationClientSecretResponse
     */
    public function createApplicationClientSecretWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->applicationId)) {
            $query['ApplicationId'] = $request->applicationId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return CreateApplicationClientSecretResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates a client key for an Employee Identity and Access Management (EIAM) application. An EIAM application can have up to two client keys.
     *  *
     * @param CreateApplicationClientSecretRequest $request CreateApplicationClientSecretRequest
     *
     * @return CreateApplicationClientSecretResponse CreateApplicationClientSecretResponse
     */
    public function createApplicationClientSecret($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createApplicationClientSecretWithOptions($request, $runtime);
    }

    /**
     * @summary 创建域名。
     *  *
     * @param CreateDomainRequest $request CreateDomainRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateDomainResponse CreateDomainResponse
     */
    public function createDomainWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domain)) {
            $query['Domain'] = $request->domain;
        }
        if (!Utils::isUnset($request->filing)) {
            $query['Filing'] = $request->filing;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return CreateDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建域名。
     *  *
     * @param CreateDomainRequest $request CreateDomainRequest
     *
     * @return CreateDomainResponse CreateDomainResponse
     */
    public function createDomain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDomainWithOptions($request, $runtime);
    }

    /**
     * @summary 创建域名代理Token。
     *  *
     * @param CreateDomainProxyTokenRequest $request CreateDomainProxyTokenRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateDomainProxyTokenResponse CreateDomainProxyTokenResponse
     */
    public function createDomainProxyTokenWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainId)) {
            $query['DomainId'] = $request->domainId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return CreateDomainProxyTokenResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建域名代理Token。
     *  *
     * @param CreateDomainProxyTokenRequest $request CreateDomainProxyTokenRequest
     *
     * @return CreateDomainProxyTokenResponse CreateDomainProxyTokenResponse
     */
    public function createDomainProxyToken($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDomainProxyTokenWithOptions($request, $runtime);
    }

    /**
     * @summary Creates an account group in Identity as a Service (IDaaS) Employee Identity and Access Management (EIAM).
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
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->groupExternalId)) {
            $query['GroupExternalId'] = $request->groupExternalId;
        }
        if (!Utils::isUnset($request->groupName)) {
            $query['GroupName'] = $request->groupName;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return CreateGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates an account group in Identity as a Service (IDaaS) Employee Identity and Access Management (EIAM).
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
     * @summary Creates an instance based on which all capabilities of Identity as a Service (IDaaS) Enterprise Identity and Access Management (EIAM) are provided.
     *  *
     * @param CreateInstanceRequest $request CreateInstanceRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateInstanceResponse CreateInstanceResponse
     */
    public function createInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return CreateInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates an instance based on which all capabilities of Identity as a Service (IDaaS) Enterprise Identity and Access Management (EIAM) are provided.
     *  *
     * @param CreateInstanceRequest $request CreateInstanceRequest
     *
     * @return CreateInstanceResponse CreateInstanceResponse
     */
    public function createInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createInstanceWithOptions($request, $runtime);
    }

    /**
     * @summary 创建一个专属网络端点。
     *  *
     * @param CreateNetworkAccessEndpointRequest $request CreateNetworkAccessEndpointRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateNetworkAccessEndpointResponse CreateNetworkAccessEndpointResponse
     */
    public function createNetworkAccessEndpointWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->networkAccessEndpointName)) {
            $query['NetworkAccessEndpointName'] = $request->networkAccessEndpointName;
        }
        if (!Utils::isUnset($request->vSwitchIds)) {
            $query['VSwitchIds'] = $request->vSwitchIds;
        }
        if (!Utils::isUnset($request->vpcId)) {
            $query['VpcId'] = $request->vpcId;
        }
        if (!Utils::isUnset($request->vpcRegionId)) {
            $query['VpcRegionId'] = $request->vpcRegionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return CreateNetworkAccessEndpointResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建一个专属网络端点。
     *  *
     * @param CreateNetworkAccessEndpointRequest $request CreateNetworkAccessEndpointRequest
     *
     * @return CreateNetworkAccessEndpointResponse CreateNetworkAccessEndpointResponse
     */
    public function createNetworkAccessEndpoint($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createNetworkAccessEndpointWithOptions($request, $runtime);
    }

    /**
     * @summary Creates an organization in Identity as a Service (IDaaS) Employee Identity and Access Management (EIAM).
     *  *
     * @param CreateOrganizationalUnitRequest $request CreateOrganizationalUnitRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateOrganizationalUnitResponse CreateOrganizationalUnitResponse
     */
    public function createOrganizationalUnitWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->organizationalUnitExternalId)) {
            $query['OrganizationalUnitExternalId'] = $request->organizationalUnitExternalId;
        }
        if (!Utils::isUnset($request->organizationalUnitName)) {
            $query['OrganizationalUnitName'] = $request->organizationalUnitName;
        }
        if (!Utils::isUnset($request->parentId)) {
            $query['ParentId'] = $request->parentId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return CreateOrganizationalUnitResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates an organization in Identity as a Service (IDaaS) Employee Identity and Access Management (EIAM).
     *  *
     * @param CreateOrganizationalUnitRequest $request CreateOrganizationalUnitRequest
     *
     * @return CreateOrganizationalUnitResponse CreateOrganizationalUnitResponse
     */
    public function createOrganizationalUnit($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createOrganizationalUnitWithOptions($request, $runtime);
    }

    /**
     * @summary Creates an account in an Identity as a Service (IDaaS) Enterprise Identity Access Management (EIAM) instance.
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
        if (!Utils::isUnset($request->customFields)) {
            $query['CustomFields'] = $request->customFields;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->displayName)) {
            $query['DisplayName'] = $request->displayName;
        }
        if (!Utils::isUnset($request->email)) {
            $query['Email'] = $request->email;
        }
        if (!Utils::isUnset($request->emailVerified)) {
            $query['EmailVerified'] = $request->emailVerified;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->organizationalUnitIds)) {
            $query['OrganizationalUnitIds'] = $request->organizationalUnitIds;
        }
        if (!Utils::isUnset($request->password)) {
            $query['Password'] = $request->password;
        }
        if (!Utils::isUnset($request->passwordInitializationConfig)) {
            $query['PasswordInitializationConfig'] = $request->passwordInitializationConfig;
        }
        if (!Utils::isUnset($request->phoneNumber)) {
            $query['PhoneNumber'] = $request->phoneNumber;
        }
        if (!Utils::isUnset($request->phoneNumberVerified)) {
            $query['PhoneNumberVerified'] = $request->phoneNumberVerified;
        }
        if (!Utils::isUnset($request->phoneRegion)) {
            $query['PhoneRegion'] = $request->phoneRegion;
        }
        if (!Utils::isUnset($request->primaryOrganizationalUnitId)) {
            $query['PrimaryOrganizationalUnitId'] = $request->primaryOrganizationalUnitId;
        }
        if (!Utils::isUnset($request->userExternalId)) {
            $query['UserExternalId'] = $request->userExternalId;
        }
        if (!Utils::isUnset($request->username)) {
            $query['Username'] = $request->username;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return CreateUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates an account in an Identity as a Service (IDaaS) Enterprise Identity Access Management (EIAM) instance.
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
     * @summary Deletes an Employee Identity and Access Management (EIAM) application.
     *  *
     * @description Make sure that the EIAM application that you want to delete is not used before you delete the EIAM application. After you delete the EIAM application, all configurations are deleted and cannot be restored.
     *  *
     * @param DeleteApplicationRequest $request DeleteApplicationRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteApplicationResponse DeleteApplicationResponse
     */
    public function deleteApplicationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->applicationId)) {
            $query['ApplicationId'] = $request->applicationId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return DeleteApplicationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes an Employee Identity and Access Management (EIAM) application.
     *  *
     * @description Make sure that the EIAM application that you want to delete is not used before you delete the EIAM application. After you delete the EIAM application, all configurations are deleted and cannot be restored.
     *  *
     * @param DeleteApplicationRequest $request DeleteApplicationRequest
     *
     * @return DeleteApplicationResponse DeleteApplicationResponse
     */
    public function deleteApplication($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteApplicationWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a client key for an Employee Identity and Access Management (EIAM) application.
     *  *
     * @param DeleteApplicationClientSecretRequest $request DeleteApplicationClientSecretRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteApplicationClientSecretResponse DeleteApplicationClientSecretResponse
     */
    public function deleteApplicationClientSecretWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->applicationId)) {
            $query['ApplicationId'] = $request->applicationId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->secretId)) {
            $query['SecretId'] = $request->secretId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return DeleteApplicationClientSecretResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes a client key for an Employee Identity and Access Management (EIAM) application.
     *  *
     * @param DeleteApplicationClientSecretRequest $request DeleteApplicationClientSecretRequest
     *
     * @return DeleteApplicationClientSecretResponse DeleteApplicationClientSecretResponse
     */
    public function deleteApplicationClientSecret($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteApplicationClientSecretWithOptions($request, $runtime);
    }

    /**
     * @summary 删除域名。
     *  *
     * @param DeleteDomainRequest $request DeleteDomainRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteDomainResponse DeleteDomainResponse
     */
    public function deleteDomainWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainId)) {
            $query['DomainId'] = $request->domainId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return DeleteDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除域名。
     *  *
     * @param DeleteDomainRequest $request DeleteDomainRequest
     *
     * @return DeleteDomainResponse DeleteDomainResponse
     */
    public function deleteDomain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDomainWithOptions($request, $runtime);
    }

    /**
     * @summary 删除指定域名代理Token，删除之前请保证代理Token处于禁用状态。
     *  *
     * @param DeleteDomainProxyTokenRequest $request DeleteDomainProxyTokenRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteDomainProxyTokenResponse DeleteDomainProxyTokenResponse
     */
    public function deleteDomainProxyTokenWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainId)) {
            $query['DomainId'] = $request->domainId;
        }
        if (!Utils::isUnset($request->domainProxyTokenId)) {
            $query['DomainProxyTokenId'] = $request->domainProxyTokenId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return DeleteDomainProxyTokenResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除指定域名代理Token，删除之前请保证代理Token处于禁用状态。
     *  *
     * @param DeleteDomainProxyTokenRequest $request DeleteDomainProxyTokenRequest
     *
     * @return DeleteDomainProxyTokenResponse DeleteDomainProxyTokenResponse
     */
    public function deleteDomainProxyToken($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDomainProxyTokenWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes the information of an account group in Identity as a Service (IDaaS) Employee Identity and Access Management (EIAM).
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
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return DeleteGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes the information of an account group in Identity as a Service (IDaaS) Employee Identity and Access Management (EIAM).
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
     * @summary Deletes an Enterprise Identity and Access Management (EIAM) instance of Identity as a Service (IDaaS) that you do not need.
     *  *
     * @description Make sure that the instance to be deleted is no longer used. If the instance is deleted, all data related to the instance will be deleted.
     *  *
     * @param DeleteInstanceRequest $request DeleteInstanceRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteInstanceResponse DeleteInstanceResponse
     */
    public function deleteInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return DeleteInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes an Enterprise Identity and Access Management (EIAM) instance of Identity as a Service (IDaaS) that you do not need.
     *  *
     * @description Make sure that the instance to be deleted is no longer used. If the instance is deleted, all data related to the instance will be deleted.
     *  *
     * @param DeleteInstanceRequest $request DeleteInstanceRequest
     *
     * @return DeleteInstanceResponse DeleteInstanceResponse
     */
    public function deleteInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteInstanceWithOptions($request, $runtime);
    }

    /**
     * @summary 删除一个专属网络端点。
     *  *
     * @param DeleteNetworkAccessEndpointRequest $request DeleteNetworkAccessEndpointRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteNetworkAccessEndpointResponse DeleteNetworkAccessEndpointResponse
     */
    public function deleteNetworkAccessEndpointWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->networkAccessEndpointId)) {
            $query['NetworkAccessEndpointId'] = $request->networkAccessEndpointId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return DeleteNetworkAccessEndpointResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除一个专属网络端点。
     *  *
     * @param DeleteNetworkAccessEndpointRequest $request DeleteNetworkAccessEndpointRequest
     *
     * @return DeleteNetworkAccessEndpointResponse DeleteNetworkAccessEndpointResponse
     */
    public function deleteNetworkAccessEndpoint($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteNetworkAccessEndpointWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes an organization in Identity as a Service (IDaaS) Employee Identity and Access Management (EIAM). If the organization has EIAM accounts or child organizations, the delete operation fails.
     *  *
     * @param DeleteOrganizationalUnitRequest $request DeleteOrganizationalUnitRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteOrganizationalUnitResponse DeleteOrganizationalUnitResponse
     */
    public function deleteOrganizationalUnitWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->organizationalUnitId)) {
            $query['OrganizationalUnitId'] = $request->organizationalUnitId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return DeleteOrganizationalUnitResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes an organization in Identity as a Service (IDaaS) Employee Identity and Access Management (EIAM). If the organization has EIAM accounts or child organizations, the delete operation fails.
     *  *
     * @param DeleteOrganizationalUnitRequest $request DeleteOrganizationalUnitRequest
     *
     * @return DeleteOrganizationalUnitResponse DeleteOrganizationalUnitResponse
     */
    public function deleteOrganizationalUnit($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteOrganizationalUnitWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes an Employee Identity and Access Management (EIAM) account of Identity as a Service (IDaaS). The information related to the account is cleared.
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
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return DeleteUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes an Employee Identity and Access Management (EIAM) account of Identity as a Service (IDaaS). The information related to the account is cleared.
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
     * @summary Disables an enabled Employee Identity and Access Management (EIAM) application. All features of the EIAM application cannot be used if you disable the EIAM application.
     *  *
     * @description All features of the EIAM application cannot be used if you disable the EIAM application, such as single sign-on (SSO) and account synchronization. Make sure that you acknowledge the risks of the delete operation.
     *  *
     * @param DisableApplicationRequest $request DisableApplicationRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return DisableApplicationResponse DisableApplicationResponse
     */
    public function disableApplicationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->applicationId)) {
            $query['ApplicationId'] = $request->applicationId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return DisableApplicationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Disables an enabled Employee Identity and Access Management (EIAM) application. All features of the EIAM application cannot be used if you disable the EIAM application.
     *  *
     * @description All features of the EIAM application cannot be used if you disable the EIAM application, such as single sign-on (SSO) and account synchronization. Make sure that you acknowledge the risks of the delete operation.
     *  *
     * @param DisableApplicationRequest $request DisableApplicationRequest
     *
     * @return DisableApplicationResponse DisableApplicationResponse
     */
    public function disableApplication($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->disableApplicationWithOptions($request, $runtime);
    }

    /**
     * @summary Disables the Developer API feature for an Employee Identity and Access Management (EIAM) application.
     *  *
     * @param DisableApplicationApiInvokeRequest $request DisableApplicationApiInvokeRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return DisableApplicationApiInvokeResponse DisableApplicationApiInvokeResponse
     */
    public function disableApplicationApiInvokeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->applicationId)) {
            $query['ApplicationId'] = $request->applicationId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return DisableApplicationApiInvokeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Disables the Developer API feature for an Employee Identity and Access Management (EIAM) application.
     *  *
     * @param DisableApplicationApiInvokeRequest $request DisableApplicationApiInvokeRequest
     *
     * @return DisableApplicationApiInvokeResponse DisableApplicationApiInvokeResponse
     */
    public function disableApplicationApiInvoke($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->disableApplicationApiInvokeWithOptions($request, $runtime);
    }

    /**
     * @summary Disables a client key of an Employee Identity and Access Management (EIAM) application.
     *  *
     * @param DisableApplicationClientSecretRequest $request DisableApplicationClientSecretRequest
     * @param RuntimeOptions                        $runtime runtime options for this request RuntimeOptions
     *
     * @return DisableApplicationClientSecretResponse DisableApplicationClientSecretResponse
     */
    public function disableApplicationClientSecretWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->applicationId)) {
            $query['ApplicationId'] = $request->applicationId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->secretId)) {
            $query['SecretId'] = $request->secretId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return DisableApplicationClientSecretResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Disables a client key of an Employee Identity and Access Management (EIAM) application.
     *  *
     * @param DisableApplicationClientSecretRequest $request DisableApplicationClientSecretRequest
     *
     * @return DisableApplicationClientSecretResponse DisableApplicationClientSecretResponse
     */
    public function disableApplicationClientSecret($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->disableApplicationClientSecretWithOptions($request, $runtime);
    }

    /**
     * @summary Disables the account synchronization feature for an application in Identity as a Service (IDaaS) Employee IAM (EIAM).
     *  *
     * @param DisableApplicationProvisioningRequest $request DisableApplicationProvisioningRequest
     * @param RuntimeOptions                        $runtime runtime options for this request RuntimeOptions
     *
     * @return DisableApplicationProvisioningResponse DisableApplicationProvisioningResponse
     */
    public function disableApplicationProvisioningWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->applicationId)) {
            $query['ApplicationId'] = $request->applicationId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return DisableApplicationProvisioningResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Disables the account synchronization feature for an application in Identity as a Service (IDaaS) Employee IAM (EIAM).
     *  *
     * @param DisableApplicationProvisioningRequest $request DisableApplicationProvisioningRequest
     *
     * @return DisableApplicationProvisioningResponse DisableApplicationProvisioningResponse
     */
    public function disableApplicationProvisioning($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->disableApplicationProvisioningWithOptions($request, $runtime);
    }

    /**
     * @summary 禁用应用SSO能力
     *  *
     * @param DisableApplicationSsoRequest $request DisableApplicationSsoRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return DisableApplicationSsoResponse DisableApplicationSsoResponse
     */
    public function disableApplicationSsoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->applicationId)) {
            $query['ApplicationId'] = $request->applicationId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return DisableApplicationSsoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 禁用应用SSO能力
     *  *
     * @param DisableApplicationSsoRequest $request DisableApplicationSsoRequest
     *
     * @return DisableApplicationSsoResponse DisableApplicationSsoResponse
     */
    public function disableApplicationSso($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->disableApplicationSsoWithOptions($request, $runtime);
    }

    /**
     * @summary 禁用指定域名代理Token。
     *  *
     * @param DisableDomainProxyTokenRequest $request DisableDomainProxyTokenRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DisableDomainProxyTokenResponse DisableDomainProxyTokenResponse
     */
    public function disableDomainProxyTokenWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainId)) {
            $query['DomainId'] = $request->domainId;
        }
        if (!Utils::isUnset($request->domainProxyTokenId)) {
            $query['DomainProxyTokenId'] = $request->domainProxyTokenId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return DisableDomainProxyTokenResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 禁用指定域名代理Token。
     *  *
     * @param DisableDomainProxyTokenRequest $request DisableDomainProxyTokenRequest
     *
     * @return DisableDomainProxyTokenResponse DisableDomainProxyTokenResponse
     */
    public function disableDomainProxyToken($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->disableDomainProxyTokenWithOptions($request, $runtime);
    }

    /**
     * @summary 关闭初始化域名自动跳转。
     *  *
     * @param DisableInitDomainAutoRedirectRequest $request DisableInitDomainAutoRedirectRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return DisableInitDomainAutoRedirectResponse DisableInitDomainAutoRedirectResponse
     */
    public function disableInitDomainAutoRedirectWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return DisableInitDomainAutoRedirectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 关闭初始化域名自动跳转。
     *  *
     * @param DisableInitDomainAutoRedirectRequest $request DisableInitDomainAutoRedirectRequest
     *
     * @return DisableInitDomainAutoRedirectResponse DisableInitDomainAutoRedirectResponse
     */
    public function disableInitDomainAutoRedirect($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->disableInitDomainAutoRedirectWithOptions($request, $runtime);
    }

    /**
     * @summary Disables an Identity as a Service (IDaaS) Employee Identity and Access Management (EIAM) account. If the account is disabled, a success message is returned.
     *  *
     * @param DisableUserRequest $request DisableUserRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return DisableUserResponse DisableUserResponse
     */
    public function disableUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return DisableUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Disables an Identity as a Service (IDaaS) Employee Identity and Access Management (EIAM) account. If the account is disabled, a success message is returned.
     *  *
     * @param DisableUserRequest $request DisableUserRequest
     *
     * @return DisableUserResponse DisableUserResponse
     */
    public function disableUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->disableUserWithOptions($request, $runtime);
    }

    /**
     * @summary Enables a disabled Employee Identity and Access Management (EIAM) application.
     *  *
     * @param EnableApplicationRequest $request EnableApplicationRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return EnableApplicationResponse EnableApplicationResponse
     */
    public function enableApplicationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->applicationId)) {
            $query['ApplicationId'] = $request->applicationId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return EnableApplicationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Enables a disabled Employee Identity and Access Management (EIAM) application.
     *  *
     * @param EnableApplicationRequest $request EnableApplicationRequest
     *
     * @return EnableApplicationResponse EnableApplicationResponse
     */
    public function enableApplication($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableApplicationWithOptions($request, $runtime);
    }

    /**
     * @summary Enables the Developer API feature for an Employee Identity and Access Management (EIAM) application.
     *  *
     * @param EnableApplicationApiInvokeRequest $request EnableApplicationApiInvokeRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return EnableApplicationApiInvokeResponse EnableApplicationApiInvokeResponse
     */
    public function enableApplicationApiInvokeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->applicationId)) {
            $query['ApplicationId'] = $request->applicationId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return EnableApplicationApiInvokeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Enables the Developer API feature for an Employee Identity and Access Management (EIAM) application.
     *  *
     * @param EnableApplicationApiInvokeRequest $request EnableApplicationApiInvokeRequest
     *
     * @return EnableApplicationApiInvokeResponse EnableApplicationApiInvokeResponse
     */
    public function enableApplicationApiInvoke($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableApplicationApiInvokeWithOptions($request, $runtime);
    }

    /**
     * @summary Enables the client key of an application in Identity as a Service (IDaaS) Employee IAM (EIAM).
     *  *
     * @param EnableApplicationClientSecretRequest $request EnableApplicationClientSecretRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return EnableApplicationClientSecretResponse EnableApplicationClientSecretResponse
     */
    public function enableApplicationClientSecretWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->applicationId)) {
            $query['ApplicationId'] = $request->applicationId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->secretId)) {
            $query['SecretId'] = $request->secretId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return EnableApplicationClientSecretResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Enables the client key of an application in Identity as a Service (IDaaS) Employee IAM (EIAM).
     *  *
     * @param EnableApplicationClientSecretRequest $request EnableApplicationClientSecretRequest
     *
     * @return EnableApplicationClientSecretResponse EnableApplicationClientSecretResponse
     */
    public function enableApplicationClientSecret($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableApplicationClientSecretWithOptions($request, $runtime);
    }

    /**
     * @summary Enables the account synchronization feature for an application in Identity as a Service (IDaaS) Employee IAM (EIAM).
     *  *
     * @param EnableApplicationProvisioningRequest $request EnableApplicationProvisioningRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return EnableApplicationProvisioningResponse EnableApplicationProvisioningResponse
     */
    public function enableApplicationProvisioningWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->applicationId)) {
            $query['ApplicationId'] = $request->applicationId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return EnableApplicationProvisioningResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Enables the account synchronization feature for an application in Identity as a Service (IDaaS) Employee IAM (EIAM).
     *  *
     * @param EnableApplicationProvisioningRequest $request EnableApplicationProvisioningRequest
     *
     * @return EnableApplicationProvisioningResponse EnableApplicationProvisioningResponse
     */
    public function enableApplicationProvisioning($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableApplicationProvisioningWithOptions($request, $runtime);
    }

    /**
     * @summary 启用应用SSO能力
     *  *
     * @param EnableApplicationSsoRequest $request EnableApplicationSsoRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return EnableApplicationSsoResponse EnableApplicationSsoResponse
     */
    public function enableApplicationSsoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->applicationId)) {
            $query['ApplicationId'] = $request->applicationId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return EnableApplicationSsoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 启用应用SSO能力
     *  *
     * @param EnableApplicationSsoRequest $request EnableApplicationSsoRequest
     *
     * @return EnableApplicationSsoResponse EnableApplicationSsoResponse
     */
    public function enableApplicationSso($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableApplicationSsoWithOptions($request, $runtime);
    }

    /**
     * @summary 启用指定域名代理Token。
     *  *
     * @param EnableDomainProxyTokenRequest $request EnableDomainProxyTokenRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return EnableDomainProxyTokenResponse EnableDomainProxyTokenResponse
     */
    public function enableDomainProxyTokenWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainId)) {
            $query['DomainId'] = $request->domainId;
        }
        if (!Utils::isUnset($request->domainProxyTokenId)) {
            $query['DomainProxyTokenId'] = $request->domainProxyTokenId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return EnableDomainProxyTokenResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 启用指定域名代理Token。
     *  *
     * @param EnableDomainProxyTokenRequest $request EnableDomainProxyTokenRequest
     *
     * @return EnableDomainProxyTokenResponse EnableDomainProxyTokenResponse
     */
    public function enableDomainProxyToken($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableDomainProxyTokenWithOptions($request, $runtime);
    }

    /**
     * @summary 开启初始化域名自动跳转。开启后，访问初始化域名将会自动跳转至默认域名。
     *  *
     * @param EnableInitDomainAutoRedirectRequest $request EnableInitDomainAutoRedirectRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return EnableInitDomainAutoRedirectResponse EnableInitDomainAutoRedirectResponse
     */
    public function enableInitDomainAutoRedirectWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return EnableInitDomainAutoRedirectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 开启初始化域名自动跳转。开启后，访问初始化域名将会自动跳转至默认域名。
     *  *
     * @param EnableInitDomainAutoRedirectRequest $request EnableInitDomainAutoRedirectRequest
     *
     * @return EnableInitDomainAutoRedirectResponse EnableInitDomainAutoRedirectResponse
     */
    public function enableInitDomainAutoRedirect($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableInitDomainAutoRedirectWithOptions($request, $runtime);
    }

    /**
     * @summary Enables an Employee Identity and Access Management (EIAM) account of Identity as a Service (IDaaS).
     *  *
     * @param EnableUserRequest $request EnableUserRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return EnableUserResponse EnableUserResponse
     */
    public function enableUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return EnableUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Enables an Employee Identity and Access Management (EIAM) account of Identity as a Service (IDaaS).
     *  *
     * @param EnableUserRequest $request EnableUserRequest
     *
     * @return EnableUserResponse EnableUserResponse
     */
    public function enableUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableUserWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the details of an Employee Identity and Access Management (EIAM) application.
     *  *
     * @param GetApplicationRequest $request GetApplicationRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return GetApplicationResponse GetApplicationResponse
     */
    public function getApplicationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->applicationId)) {
            $query['ApplicationId'] = $request->applicationId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return GetApplicationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the details of an Employee Identity and Access Management (EIAM) application.
     *  *
     * @param GetApplicationRequest $request GetApplicationRequest
     *
     * @return GetApplicationResponse GetApplicationResponse
     */
    public function getApplication($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getApplicationWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the permissions of the Developer API feature for an Employee Identity and Access Management (EIAM) application.
     *  *
     * @param GetApplicationGrantScopeRequest $request GetApplicationGrantScopeRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return GetApplicationGrantScopeResponse GetApplicationGrantScopeResponse
     */
    public function getApplicationGrantScopeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->applicationId)) {
            $query['ApplicationId'] = $request->applicationId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return GetApplicationGrantScopeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the permissions of the Developer API feature for an Employee Identity and Access Management (EIAM) application.
     *  *
     * @param GetApplicationGrantScopeRequest $request GetApplicationGrantScopeRequest
     *
     * @return GetApplicationGrantScopeResponse GetApplicationGrantScopeResponse
     */
    public function getApplicationGrantScope($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getApplicationGrantScopeWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the configuration of the account synchronization feature for an application in Identity as a Service (IDaaS) Employee IAM (EIAM).
     *  *
     * @param GetApplicationProvisioningConfigRequest $request GetApplicationProvisioningConfigRequest
     * @param RuntimeOptions                          $runtime runtime options for this request RuntimeOptions
     *
     * @return GetApplicationProvisioningConfigResponse GetApplicationProvisioningConfigResponse
     */
    public function getApplicationProvisioningConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->applicationId)) {
            $query['ApplicationId'] = $request->applicationId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return GetApplicationProvisioningConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the configuration of the account synchronization feature for an application in Identity as a Service (IDaaS) Employee IAM (EIAM).
     *  *
     * @param GetApplicationProvisioningConfigRequest $request GetApplicationProvisioningConfigRequest
     *
     * @return GetApplicationProvisioningConfigResponse GetApplicationProvisioningConfigResponse
     */
    public function getApplicationProvisioningConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getApplicationProvisioningConfigWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the account synchronization scope of applications in Identity as a Service (IDaaS) Employee IAM (EIAM). This scope is the same as the scope within which developers can call the DeveloperAPI to query and manage accounts.
     *  *
     * @param GetApplicationProvisioningScopeRequest $request GetApplicationProvisioningScopeRequest
     * @param RuntimeOptions                         $runtime runtime options for this request RuntimeOptions
     *
     * @return GetApplicationProvisioningScopeResponse GetApplicationProvisioningScopeResponse
     */
    public function getApplicationProvisioningScopeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->applicationId)) {
            $query['ApplicationId'] = $request->applicationId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return GetApplicationProvisioningScopeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the account synchronization scope of applications in Identity as a Service (IDaaS) Employee IAM (EIAM). This scope is the same as the scope within which developers can call the DeveloperAPI to query and manage accounts.
     *  *
     * @param GetApplicationProvisioningScopeRequest $request GetApplicationProvisioningScopeRequest
     *
     * @return GetApplicationProvisioningScopeResponse GetApplicationProvisioningScopeResponse
     */
    public function getApplicationProvisioningScope($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getApplicationProvisioningScopeWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the single sign-on (SSO) configuration attributes of an application in Identity as a Service (IDaaS) Employee IAM (EIAM).
     *  *
     * @param GetApplicationSsoConfigRequest $request GetApplicationSsoConfigRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return GetApplicationSsoConfigResponse GetApplicationSsoConfigResponse
     */
    public function getApplicationSsoConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->applicationId)) {
            $query['ApplicationId'] = $request->applicationId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return GetApplicationSsoConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the single sign-on (SSO) configuration attributes of an application in Identity as a Service (IDaaS) Employee IAM (EIAM).
     *  *
     * @param GetApplicationSsoConfigRequest $request GetApplicationSsoConfigRequest
     *
     * @return GetApplicationSsoConfigResponse GetApplicationSsoConfigResponse
     */
    public function getApplicationSsoConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getApplicationSsoConfigWithOptions($request, $runtime);
    }

    /**
     * @summary 查询一个域名的详细信息。
     *  *
     * @param GetDomainRequest $request GetDomainRequest
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return GetDomainResponse GetDomainResponse
     */
    public function getDomainWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainId)) {
            $query['DomainId'] = $request->domainId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return GetDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询一个域名的详细信息。
     *  *
     * @param GetDomainRequest $request GetDomainRequest
     *
     * @return GetDomainResponse GetDomainResponse
     */
    public function getDomain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDomainWithOptions($request, $runtime);
    }

    /**
     * @summary 查看域名的DNS Challenge记录。
     *  *
     * @param GetDomainDnsChallengeRequest $request GetDomainDnsChallengeRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return GetDomainDnsChallengeResponse GetDomainDnsChallengeResponse
     */
    public function getDomainDnsChallengeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domain)) {
            $query['Domain'] = $request->domain;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return GetDomainDnsChallengeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查看域名的DNS Challenge记录。
     *  *
     * @param GetDomainDnsChallengeRequest $request GetDomainDnsChallengeRequest
     *
     * @return GetDomainDnsChallengeResponse GetDomainDnsChallengeResponse
     */
    public function getDomainDnsChallenge($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDomainDnsChallengeWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the forgot password configurations of an Employee Identity and Access Management (EIAM) instance of Identity as a Service (IDaaS).
     *  *
     * @param GetForgetPasswordConfigurationRequest $request GetForgetPasswordConfigurationRequest
     * @param RuntimeOptions                        $runtime runtime options for this request RuntimeOptions
     *
     * @return GetForgetPasswordConfigurationResponse GetForgetPasswordConfigurationResponse
     */
    public function getForgetPasswordConfigurationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return GetForgetPasswordConfigurationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the forgot password configurations of an Employee Identity and Access Management (EIAM) instance of Identity as a Service (IDaaS).
     *  *
     * @param GetForgetPasswordConfigurationRequest $request GetForgetPasswordConfigurationRequest
     *
     * @return GetForgetPasswordConfigurationResponse GetForgetPasswordConfigurationResponse
     */
    public function getForgetPasswordConfiguration($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getForgetPasswordConfigurationWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the information of an account group in Identity as a Service (IDaaS) Employee Identity and Access Management (EIAM).
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
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return GetGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the information of an account group in Identity as a Service (IDaaS) Employee Identity and Access Management (EIAM).
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
     * @summary Queries the information of an Enterprise Identity and Access Management (EIAM) instance of Identity as a Service (IDaaS).
     *  *
     * @param GetInstanceRequest $request GetInstanceRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return GetInstanceResponse GetInstanceResponse
     */
    public function getInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return GetInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the information of an Enterprise Identity and Access Management (EIAM) instance of Identity as a Service (IDaaS).
     *  *
     * @param GetInstanceRequest $request GetInstanceRequest
     *
     * @return GetInstanceResponse GetInstanceResponse
     */
    public function getInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getInstanceWithOptions($request, $runtime);
    }

    /**
     * @summary 查询一个专属网络端点的详细信息。
     *  *
     * @param GetNetworkAccessEndpointRequest $request GetNetworkAccessEndpointRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return GetNetworkAccessEndpointResponse GetNetworkAccessEndpointResponse
     */
    public function getNetworkAccessEndpointWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->networkAccessEndpointId)) {
            $query['NetworkAccessEndpointId'] = $request->networkAccessEndpointId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return GetNetworkAccessEndpointResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询一个专属网络端点的详细信息。
     *  *
     * @param GetNetworkAccessEndpointRequest $request GetNetworkAccessEndpointRequest
     *
     * @return GetNetworkAccessEndpointResponse GetNetworkAccessEndpointResponse
     */
    public function getNetworkAccessEndpoint($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getNetworkAccessEndpointWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the information about an organizational unit in Identity as a Service (IDaaS) Employee IAM (EIAM).
     *  *
     * @param GetOrganizationalUnitRequest $request GetOrganizationalUnitRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return GetOrganizationalUnitResponse GetOrganizationalUnitResponse
     */
    public function getOrganizationalUnitWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->organizationalUnitId)) {
            $query['OrganizationalUnitId'] = $request->organizationalUnitId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return GetOrganizationalUnitResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the information about an organizational unit in Identity as a Service (IDaaS) Employee IAM (EIAM).
     *  *
     * @param GetOrganizationalUnitRequest $request GetOrganizationalUnitRequest
     *
     * @return GetOrganizationalUnitResponse GetOrganizationalUnitResponse
     */
    public function getOrganizationalUnit($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getOrganizationalUnitWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the password complexity configurations of an Employee Identity and Access Management (EIAM) instance of Identity as a Service (IDaaS).
     *  *
     * @param GetPasswordComplexityConfigurationRequest $request GetPasswordComplexityConfigurationRequest
     * @param RuntimeOptions                            $runtime runtime options for this request RuntimeOptions
     *
     * @return GetPasswordComplexityConfigurationResponse GetPasswordComplexityConfigurationResponse
     */
    public function getPasswordComplexityConfigurationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return GetPasswordComplexityConfigurationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the password complexity configurations of an Employee Identity and Access Management (EIAM) instance of Identity as a Service (IDaaS).
     *  *
     * @param GetPasswordComplexityConfigurationRequest $request GetPasswordComplexityConfigurationRequest
     *
     * @return GetPasswordComplexityConfigurationResponse GetPasswordComplexityConfigurationResponse
     */
    public function getPasswordComplexityConfiguration($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getPasswordComplexityConfigurationWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the password expiration configurations of an Employee Identity and Access Management (EIAM) instance of Identity as a Service (IDaaS).
     *  *
     * @param GetPasswordExpirationConfigurationRequest $request GetPasswordExpirationConfigurationRequest
     * @param RuntimeOptions                            $runtime runtime options for this request RuntimeOptions
     *
     * @return GetPasswordExpirationConfigurationResponse GetPasswordExpirationConfigurationResponse
     */
    public function getPasswordExpirationConfigurationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return GetPasswordExpirationConfigurationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the password expiration configurations of an Employee Identity and Access Management (EIAM) instance of Identity as a Service (IDaaS).
     *  *
     * @param GetPasswordExpirationConfigurationRequest $request GetPasswordExpirationConfigurationRequest
     *
     * @return GetPasswordExpirationConfigurationResponse GetPasswordExpirationConfigurationResponse
     */
    public function getPasswordExpirationConfiguration($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getPasswordExpirationConfigurationWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the password history configurations of an Employee Identity and Access Management (EIAM) instance of Identity as a Service (IDaaS).
     *  *
     * @param GetPasswordHistoryConfigurationRequest $request GetPasswordHistoryConfigurationRequest
     * @param RuntimeOptions                         $runtime runtime options for this request RuntimeOptions
     *
     * @return GetPasswordHistoryConfigurationResponse GetPasswordHistoryConfigurationResponse
     */
    public function getPasswordHistoryConfigurationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return GetPasswordHistoryConfigurationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the password history configurations of an Employee Identity and Access Management (EIAM) instance of Identity as a Service (IDaaS).
     *  *
     * @param GetPasswordHistoryConfigurationRequest $request GetPasswordHistoryConfigurationRequest
     *
     * @return GetPasswordHistoryConfigurationResponse GetPasswordHistoryConfigurationResponse
     */
    public function getPasswordHistoryConfiguration($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getPasswordHistoryConfigurationWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the password initialization configurations of an Employee Identity and Access Management (EIAM) instance of Identity as a Service (IDaaS).
     *  *
     * @param GetPasswordInitializationConfigurationRequest $request GetPasswordInitializationConfigurationRequest
     * @param RuntimeOptions                                $runtime runtime options for this request RuntimeOptions
     *
     * @return GetPasswordInitializationConfigurationResponse GetPasswordInitializationConfigurationResponse
     */
    public function getPasswordInitializationConfigurationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return GetPasswordInitializationConfigurationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the password initialization configurations of an Employee Identity and Access Management (EIAM) instance of Identity as a Service (IDaaS).
     *  *
     * @param GetPasswordInitializationConfigurationRequest $request GetPasswordInitializationConfigurationRequest
     *
     * @return GetPasswordInitializationConfigurationResponse GetPasswordInitializationConfigurationResponse
     */
    public function getPasswordInitializationConfiguration($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getPasswordInitializationConfigurationWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the information about the root organizational unit in Identity as a Service (IDaaS) Employee IAM (EIAM).
     *  *
     * @param GetRootOrganizationalUnitRequest $request GetRootOrganizationalUnitRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return GetRootOrganizationalUnitResponse GetRootOrganizationalUnitResponse
     */
    public function getRootOrganizationalUnitWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return GetRootOrganizationalUnitResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the information about the root organizational unit in Identity as a Service (IDaaS) Employee IAM (EIAM).
     *  *
     * @param GetRootOrganizationalUnitRequest $request GetRootOrganizationalUnitRequest
     *
     * @return GetRootOrganizationalUnitResponse GetRootOrganizationalUnitResponse
     */
    public function getRootOrganizationalUnit($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getRootOrganizationalUnitWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the details of an account in Identity as a Service (IDaaS) Employee IAM (EIAM).
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
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return GetUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the details of an account in Identity as a Service (IDaaS) Employee IAM (EIAM).
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
     * @summary Queries all client keys of an Employee Identity and Access Management (EIAM) application. The returned key secret is not masked. If you want to query the key secret that is masked, call the ObtainApplicationClientSecret operation.
     *  *
     * @param ListApplicationClientSecretsRequest $request ListApplicationClientSecretsRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return ListApplicationClientSecretsResponse ListApplicationClientSecretsResponse
     */
    public function listApplicationClientSecretsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->applicationId)) {
            $query['ApplicationId'] = $request->applicationId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return ListApplicationClientSecretsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries all client keys of an Employee Identity and Access Management (EIAM) application. The returned key secret is not masked. If you want to query the key secret that is masked, call the ObtainApplicationClientSecret operation.
     *  *
     * @param ListApplicationClientSecretsRequest $request ListApplicationClientSecretsRequest
     *
     * @return ListApplicationClientSecretsResponse ListApplicationClientSecretsResponse
     */
    public function listApplicationClientSecrets($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listApplicationClientSecretsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the information about one or multiple Employee Identity and Access Management (EIAM) applications by page.
     *  *
     * @param ListApplicationsRequest $request ListApplicationsRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return ListApplicationsResponse ListApplicationsResponse
     */
    public function listApplicationsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->applicationIds)) {
            $query['ApplicationIds'] = $request->applicationIds;
        }
        if (!Utils::isUnset($request->applicationName)) {
            $query['ApplicationName'] = $request->applicationName;
        }
        if (!Utils::isUnset($request->authorizationType)) {
            $query['AuthorizationType'] = $request->authorizationType;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return ListApplicationsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the information about one or multiple Employee Identity and Access Management (EIAM) applications by page.
     *  *
     * @param ListApplicationsRequest $request ListApplicationsRequest
     *
     * @return ListApplicationsResponse ListApplicationsResponse
     */
    public function listApplications($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listApplicationsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the applications that an Employee Identity and Access Management (EIAM) organization can access. The return result includes the IDs of the applications. If you want to obtain the details of the applications, call the GetApplication operation.
     *  *
     * @description You can only query the permissions that are directly granted to the EIAM organization by calling the ListApplicationsForOrganizationalUnit operation. You can filter applications by configuring the **ApplicationIds** parameter when you call this operation.
     *  *
     * @param ListApplicationsForOrganizationalUnitRequest $request ListApplicationsForOrganizationalUnitRequest
     * @param RuntimeOptions                               $runtime runtime options for this request RuntimeOptions
     *
     * @return ListApplicationsForOrganizationalUnitResponse ListApplicationsForOrganizationalUnitResponse
     */
    public function listApplicationsForOrganizationalUnitWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->applicationIds)) {
            $query['ApplicationIds'] = $request->applicationIds;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->organizationalUnitId)) {
            $query['OrganizationalUnitId'] = $request->organizationalUnitId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return ListApplicationsForOrganizationalUnitResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the applications that an Employee Identity and Access Management (EIAM) organization can access. The return result includes the IDs of the applications. If you want to obtain the details of the applications, call the GetApplication operation.
     *  *
     * @description You can only query the permissions that are directly granted to the EIAM organization by calling the ListApplicationsForOrganizationalUnit operation. You can filter applications by configuring the **ApplicationIds** parameter when you call this operation.
     *  *
     * @param ListApplicationsForOrganizationalUnitRequest $request ListApplicationsForOrganizationalUnitRequest
     *
     * @return ListApplicationsForOrganizationalUnitResponse ListApplicationsForOrganizationalUnitResponse
     */
    public function listApplicationsForOrganizationalUnit($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listApplicationsForOrganizationalUnitWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the applications that an Employee Identity and Access Management (EIAM) account can access. The return result includes the IDs of the applications. If you want to obtain the details of the applications, call the GetApplication operation.
     *  *
     * @param ListApplicationsForUserRequest $request ListApplicationsForUserRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return ListApplicationsForUserResponse ListApplicationsForUserResponse
     */
    public function listApplicationsForUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->applicationIds)) {
            $query['ApplicationIds'] = $request->applicationIds;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->queryMode)) {
            $query['QueryMode'] = $request->queryMode;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return ListApplicationsForUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the applications that an Employee Identity and Access Management (EIAM) account can access. The return result includes the IDs of the applications. If you want to obtain the details of the applications, call the GetApplication operation.
     *  *
     * @param ListApplicationsForUserRequest $request ListApplicationsForUserRequest
     *
     * @return ListApplicationsForUserResponse ListApplicationsForUserResponse
     */
    public function listApplicationsForUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listApplicationsForUserWithOptions($request, $runtime);
    }

    /**
     * @summary 列表查询域名代理Token信息。
     *  *
     * @param ListDomainProxyTokensRequest $request ListDomainProxyTokensRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return ListDomainProxyTokensResponse ListDomainProxyTokensResponse
     */
    public function listDomainProxyTokensWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainId)) {
            $query['DomainId'] = $request->domainId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return ListDomainProxyTokensResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 列表查询域名代理Token信息。
     *  *
     * @param ListDomainProxyTokensRequest $request ListDomainProxyTokensRequest
     *
     * @return ListDomainProxyTokensResponse ListDomainProxyTokensResponse
     */
    public function listDomainProxyTokens($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDomainProxyTokensWithOptions($request, $runtime);
    }

    /**
     * @summary 列表查询域名记录。
     *  *
     * @param ListDomainsRequest $request ListDomainsRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return ListDomainsResponse ListDomainsResponse
     */
    public function listDomainsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return ListDomainsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 列表查询域名记录。
     *  *
     * @param ListDomainsRequest $request ListDomainsRequest
     *
     * @return ListDomainsResponse ListDomainsResponse
     */
    public function listDomains($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDomainsWithOptions($request, $runtime);
    }

    /**
     * @summary 查询EIAM2.0/EIAM1.0实例列表
     *  *
     * @param ListEiamInstancesRequest $request ListEiamInstancesRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return ListEiamInstancesResponse ListEiamInstancesResponse
     */
    public function listEiamInstancesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceIds)) {
            $query['InstanceIds'] = $request->instanceIds;
        }
        if (!Utils::isUnset($request->instanceRegionId)) {
            $query['InstanceRegionId'] = $request->instanceRegionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return ListEiamInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询EIAM2.0/EIAM1.0实例列表
     *  *
     * @param ListEiamInstancesRequest $request ListEiamInstancesRequest
     *
     * @return ListEiamInstancesResponse ListEiamInstancesResponse
     */
    public function listEiamInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listEiamInstancesWithOptions($request, $runtime);
    }

    /**
     * @summary 查询EIAM2.0/EIAM1.0地域列表
     *  *
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return ListEiamRegionsResponse ListEiamRegionsResponse
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

        return ListEiamRegionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询EIAM2.0/EIAM1.0地域列表
     *  *
     * @return ListEiamRegionsResponse ListEiamRegionsResponse
     */
    public function listEiamRegions()
    {
        $runtime = new RuntimeOptions([]);

        return $this->listEiamRegionsWithOptions($runtime);
    }

    /**
     * @summary Queries a list of account groups in Identity as a Service (IDaaS) Employee Identity and Access Management (EIAM).
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
        if (!Utils::isUnset($request->groupExternalId)) {
            $query['GroupExternalId'] = $request->groupExternalId;
        }
        if (!Utils::isUnset($request->groupIds)) {
            $query['GroupIds'] = $request->groupIds;
        }
        if (!Utils::isUnset($request->groupName)) {
            $query['GroupName'] = $request->groupName;
        }
        if (!Utils::isUnset($request->groupNameStartsWith)) {
            $query['GroupNameStartsWith'] = $request->groupNameStartsWith;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return ListGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries a list of account groups in Identity as a Service (IDaaS) Employee Identity and Access Management (EIAM).
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
     * @summary Queries a list of account groups to which the permissions to access an application are granted. The returned results contain the group IDs. You can call the GetGroup operation to query the information about an account group based on the group ID.
     *  *
     * @param ListGroupsForApplicationRequest $request ListGroupsForApplicationRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return ListGroupsForApplicationResponse ListGroupsForApplicationResponse
     */
    public function listGroupsForApplicationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->applicationId)) {
            $query['ApplicationId'] = $request->applicationId;
        }
        if (!Utils::isUnset($request->groupIds)) {
            $query['GroupIds'] = $request->groupIds;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return ListGroupsForApplicationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries a list of account groups to which the permissions to access an application are granted. The returned results contain the group IDs. You can call the GetGroup operation to query the information about an account group based on the group ID.
     *  *
     * @param ListGroupsForApplicationRequest $request ListGroupsForApplicationRequest
     *
     * @return ListGroupsForApplicationResponse ListGroupsForApplicationResponse
     */
    public function listGroupsForApplication($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listGroupsForApplicationWithOptions($request, $runtime);
    }

    /**
     * @summary Queries a list of account groups to which an Employee Identity and Access Management (EIAM) account of Identity as a Service (IDaaS) belongs.
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
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return ListGroupsForUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries a list of account groups to which an Employee Identity and Access Management (EIAM) account of Identity as a Service (IDaaS) belongs.
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
     * @summary Queries the information of one or more Enterprise Identity and Access Management (EIAM) instances of Identity as a Service (IDaaS).
     *  *
     * @param ListInstancesRequest $request ListInstancesRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return ListInstancesResponse ListInstancesResponse
     */
    public function listInstancesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceIds)) {
            $query['InstanceIds'] = $request->instanceIds;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return ListInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the information of one or more Enterprise Identity and Access Management (EIAM) instances of Identity as a Service (IDaaS).
     *  *
     * @param ListInstancesRequest $request ListInstancesRequest
     *
     * @return ListInstancesResponse ListInstancesResponse
     */
    public function listInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listInstancesWithOptions($request, $runtime);
    }

    /**
     * @summary 获取支持专属端点的region列表
     *  *
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return ListNetworkAccessEndpointAvailableRegionsResponse ListNetworkAccessEndpointAvailableRegionsResponse
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

        return ListNetworkAccessEndpointAvailableRegionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取支持专属端点的region列表
     *  *
     * @return ListNetworkAccessEndpointAvailableRegionsResponse ListNetworkAccessEndpointAvailableRegionsResponse
     */
    public function listNetworkAccessEndpointAvailableRegions()
    {
        $runtime = new RuntimeOptions([]);

        return $this->listNetworkAccessEndpointAvailableRegionsWithOptions($runtime);
    }

    /**
     * @summary 获取支持NAE的可用区列表
     *  *
     * @param ListNetworkAccessEndpointAvailableZonesRequest $request ListNetworkAccessEndpointAvailableZonesRequest
     * @param RuntimeOptions                                 $runtime runtime options for this request RuntimeOptions
     *
     * @return ListNetworkAccessEndpointAvailableZonesResponse ListNetworkAccessEndpointAvailableZonesResponse
     */
    public function listNetworkAccessEndpointAvailableZonesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->naeRegionId)) {
            $query['NaeRegionId'] = $request->naeRegionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return ListNetworkAccessEndpointAvailableZonesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取支持NAE的可用区列表
     *  *
     * @param ListNetworkAccessEndpointAvailableZonesRequest $request ListNetworkAccessEndpointAvailableZonesRequest
     *
     * @return ListNetworkAccessEndpointAvailableZonesResponse ListNetworkAccessEndpointAvailableZonesResponse
     */
    public function listNetworkAccessEndpointAvailableZones($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listNetworkAccessEndpointAvailableZonesWithOptions($request, $runtime);
    }

    /**
     * @summary 列表查询专属网络端点。
     *  *
     * @param ListNetworkAccessEndpointsRequest $request ListNetworkAccessEndpointsRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return ListNetworkAccessEndpointsResponse ListNetworkAccessEndpointsResponse
     */
    public function listNetworkAccessEndpointsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->networkAccessEndpointStatus)) {
            $query['NetworkAccessEndpointStatus'] = $request->networkAccessEndpointStatus;
        }
        if (!Utils::isUnset($request->networkAccessEndpointType)) {
            $query['NetworkAccessEndpointType'] = $request->networkAccessEndpointType;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->vpcId)) {
            $query['VpcId'] = $request->vpcId;
        }
        if (!Utils::isUnset($request->vpcRegionId)) {
            $query['VpcRegionId'] = $request->vpcRegionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return ListNetworkAccessEndpointsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 列表查询专属网络端点。
     *  *
     * @param ListNetworkAccessEndpointsRequest $request ListNetworkAccessEndpointsRequest
     *
     * @return ListNetworkAccessEndpointsResponse ListNetworkAccessEndpointsResponse
     */
    public function listNetworkAccessEndpoints($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listNetworkAccessEndpointsWithOptions($request, $runtime);
    }

    /**
     * @summary 列表某个网络访问端点下的访问路径。
     *  *
     * @param ListNetworkAccessPathsRequest $request ListNetworkAccessPathsRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return ListNetworkAccessPathsResponse ListNetworkAccessPathsResponse
     */
    public function listNetworkAccessPathsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->networkAccessEndpointId)) {
            $query['NetworkAccessEndpointId'] = $request->networkAccessEndpointId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return ListNetworkAccessPathsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 列表某个网络访问端点下的访问路径。
     *  *
     * @param ListNetworkAccessPathsRequest $request ListNetworkAccessPathsRequest
     *
     * @return ListNetworkAccessPathsResponse ListNetworkAccessPathsResponse
     */
    public function listNetworkAccessPaths($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listNetworkAccessPathsWithOptions($request, $runtime);
    }

    /**
     * @summary 查询组织的所有父级路径
     *  *
     * @param ListOrganizationalUnitParentsRequest $request ListOrganizationalUnitParentsRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return ListOrganizationalUnitParentsResponse ListOrganizationalUnitParentsResponse
     */
    public function listOrganizationalUnitParentsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->organizationalUnitId)) {
            $query['OrganizationalUnitId'] = $request->organizationalUnitId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return ListOrganizationalUnitParentsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询组织的所有父级路径
     *  *
     * @param ListOrganizationalUnitParentsRequest $request ListOrganizationalUnitParentsRequest
     *
     * @return ListOrganizationalUnitParentsResponse ListOrganizationalUnitParentsResponse
     */
    public function listOrganizationalUnitParents($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listOrganizationalUnitParentsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the information about organizational units in Identity as a Service (IDaaS) Employee IAM (EIAM) by page.
     *  *
     * @param ListOrganizationalUnitsRequest $request ListOrganizationalUnitsRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return ListOrganizationalUnitsResponse ListOrganizationalUnitsResponse
     */
    public function listOrganizationalUnitsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->organizationalUnitIds)) {
            $query['OrganizationalUnitIds'] = $request->organizationalUnitIds;
        }
        if (!Utils::isUnset($request->organizationalUnitName)) {
            $query['OrganizationalUnitName'] = $request->organizationalUnitName;
        }
        if (!Utils::isUnset($request->organizationalUnitNameStartsWith)) {
            $query['OrganizationalUnitNameStartsWith'] = $request->organizationalUnitNameStartsWith;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->parentId)) {
            $query['ParentId'] = $request->parentId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return ListOrganizationalUnitsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the information about organizational units in Identity as a Service (IDaaS) Employee IAM (EIAM) by page.
     *  *
     * @param ListOrganizationalUnitsRequest $request ListOrganizationalUnitsRequest
     *
     * @return ListOrganizationalUnitsResponse ListOrganizationalUnitsResponse
     */
    public function listOrganizationalUnits($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listOrganizationalUnitsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the organizations that are allowed to access an Employee Identity and Access Management (EIAM) application by page. The return result includes the IDs of the organizations. If you want to obtain the details of the organizations, call the GetOrganizationalUnit operation.
     *  *
     * @param ListOrganizationalUnitsForApplicationRequest $request ListOrganizationalUnitsForApplicationRequest
     * @param RuntimeOptions                               $runtime runtime options for this request RuntimeOptions
     *
     * @return ListOrganizationalUnitsForApplicationResponse ListOrganizationalUnitsForApplicationResponse
     */
    public function listOrganizationalUnitsForApplicationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->applicationId)) {
            $query['ApplicationId'] = $request->applicationId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->organizationalUnitIds)) {
            $query['OrganizationalUnitIds'] = $request->organizationalUnitIds;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return ListOrganizationalUnitsForApplicationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the organizations that are allowed to access an Employee Identity and Access Management (EIAM) application by page. The return result includes the IDs of the organizations. If you want to obtain the details of the organizations, call the GetOrganizationalUnit operation.
     *  *
     * @param ListOrganizationalUnitsForApplicationRequest $request ListOrganizationalUnitsForApplicationRequest
     *
     * @return ListOrganizationalUnitsForApplicationResponse ListOrganizationalUnitsForApplicationResponse
     */
    public function listOrganizationalUnitsForApplication($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listOrganizationalUnitsForApplicationWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the supported Alibaba Cloud regions.
     *  *
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return ListRegionsResponse ListRegionsResponse
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

        return ListRegionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the supported Alibaba Cloud regions.
     *  *
     * @return ListRegionsResponse ListRegionsResponse
     */
    public function listRegions()
    {
        $runtime = new RuntimeOptions([]);

        return $this->listRegionsWithOptions($runtime);
    }

    /**
     * @summary Queries the details of accounts in Identity as a Service (IDaaS) Employee IAM (EIAM) by page.
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
        if (!Utils::isUnset($request->displayNameStartsWith)) {
            $query['DisplayNameStartsWith'] = $request->displayNameStartsWith;
        }
        if (!Utils::isUnset($request->email)) {
            $query['Email'] = $request->email;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->organizationalUnitId)) {
            $query['OrganizationalUnitId'] = $request->organizationalUnitId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->phoneNumber)) {
            $query['PhoneNumber'] = $request->phoneNumber;
        }
        if (!Utils::isUnset($request->phoneRegion)) {
            $query['PhoneRegion'] = $request->phoneRegion;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->userExternalId)) {
            $query['UserExternalId'] = $request->userExternalId;
        }
        if (!Utils::isUnset($request->userIds)) {
            $query['UserIds'] = $request->userIds;
        }
        if (!Utils::isUnset($request->userSourceId)) {
            $query['UserSourceId'] = $request->userSourceId;
        }
        if (!Utils::isUnset($request->userSourceType)) {
            $query['UserSourceType'] = $request->userSourceType;
        }
        if (!Utils::isUnset($request->usernameStartsWith)) {
            $query['UsernameStartsWith'] = $request->usernameStartsWith;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return ListUsersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the details of accounts in Identity as a Service (IDaaS) Employee IAM (EIAM) by page.
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
     * @summary Queries the accounts that are allowed to access an Employee Identity and Access Management (EIAM) application. The return results include the IDs of the accounts. If you need to obtain the details of the accounts, call the GetUser operation.
     *  *
     * @param ListUsersForApplicationRequest $request ListUsersForApplicationRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return ListUsersForApplicationResponse ListUsersForApplicationResponse
     */
    public function listUsersForApplicationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->applicationId)) {
            $query['ApplicationId'] = $request->applicationId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->userIds)) {
            $query['UserIds'] = $request->userIds;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return ListUsersForApplicationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the accounts that are allowed to access an Employee Identity and Access Management (EIAM) application. The return results include the IDs of the accounts. If you need to obtain the details of the accounts, call the GetUser operation.
     *  *
     * @param ListUsersForApplicationRequest $request ListUsersForApplicationRequest
     *
     * @return ListUsersForApplicationResponse ListUsersForApplicationResponse
     */
    public function listUsersForApplication($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listUsersForApplicationWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the information of accounts in an Employee Identity and Access Management (EIAM) group of Identity as a Service (IDaaS).
     *  *
     * @param ListUsersForGroupRequest $request ListUsersForGroupRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return ListUsersForGroupResponse ListUsersForGroupResponse
     */
    public function listUsersForGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->userIds)) {
            $query['UserIds'] = $request->userIds;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return ListUsersForGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the information of accounts in an Employee Identity and Access Management (EIAM) group of Identity as a Service (IDaaS).
     *  *
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
     * @summary Queries a client key of an Employee Identity and Access Management (EIAM) application. The returned key secret is masked. If you want to query the key secret that is not masked, call the ListApplicationClientSecrets operation.
     *  *
     * @param ObtainApplicationClientSecretRequest $request ObtainApplicationClientSecretRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return ObtainApplicationClientSecretResponse ObtainApplicationClientSecretResponse
     */
    public function obtainApplicationClientSecretWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->applicationId)) {
            $query['ApplicationId'] = $request->applicationId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->secretId)) {
            $query['SecretId'] = $request->secretId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return ObtainApplicationClientSecretResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries a client key of an Employee Identity and Access Management (EIAM) application. The returned key secret is masked. If you want to query the key secret that is not masked, call the ListApplicationClientSecrets operation.
     *  *
     * @param ObtainApplicationClientSecretRequest $request ObtainApplicationClientSecretRequest
     *
     * @return ObtainApplicationClientSecretResponse ObtainApplicationClientSecretResponse
     */
    public function obtainApplicationClientSecret($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->obtainApplicationClientSecretWithOptions($request, $runtime);
    }

    /**
     * @summary 查看指定域名安全代理Token。
     *  *
     * @param ObtainDomainProxyTokenRequest $request ObtainDomainProxyTokenRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return ObtainDomainProxyTokenResponse ObtainDomainProxyTokenResponse
     */
    public function obtainDomainProxyTokenWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainId)) {
            $query['DomainId'] = $request->domainId;
        }
        if (!Utils::isUnset($request->domainProxyTokenId)) {
            $query['DomainProxyTokenId'] = $request->domainProxyTokenId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return ObtainDomainProxyTokenResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查看指定域名安全代理Token。
     *  *
     * @param ObtainDomainProxyTokenRequest $request ObtainDomainProxyTokenRequest
     *
     * @return ObtainDomainProxyTokenResponse ObtainDomainProxyTokenResponse
     */
    public function obtainDomainProxyToken($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->obtainDomainProxyTokenWithOptions($request, $runtime);
    }

    /**
     * @summary Removes an Employee Identity and Access Management (EIAM) account from multiple EIAM organizations of Identity as a Service (IDaaS). You cannot remove an account from a primary organization.
     *  *
     * @param RemoveUserFromOrganizationalUnitsRequest $request RemoveUserFromOrganizationalUnitsRequest
     * @param RuntimeOptions                           $runtime runtime options for this request RuntimeOptions
     *
     * @return RemoveUserFromOrganizationalUnitsResponse RemoveUserFromOrganizationalUnitsResponse
     */
    public function removeUserFromOrganizationalUnitsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->organizationalUnitIds)) {
            $query['OrganizationalUnitIds'] = $request->organizationalUnitIds;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return RemoveUserFromOrganizationalUnitsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Removes an Employee Identity and Access Management (EIAM) account from multiple EIAM organizations of Identity as a Service (IDaaS). You cannot remove an account from a primary organization.
     *  *
     * @param RemoveUserFromOrganizationalUnitsRequest $request RemoveUserFromOrganizationalUnitsRequest
     *
     * @return RemoveUserFromOrganizationalUnitsResponse RemoveUserFromOrganizationalUnitsResponse
     */
    public function removeUserFromOrganizationalUnits($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeUserFromOrganizationalUnitsWithOptions($request, $runtime);
    }

    /**
     * @summary Removes Employee Identity and Access Management (EIAM) accounts from an EIAM group of Identity as a Service (IDaaS).
     *  *
     * @param RemoveUsersFromGroupRequest $request RemoveUsersFromGroupRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return RemoveUsersFromGroupResponse RemoveUsersFromGroupResponse
     */
    public function removeUsersFromGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->userIds)) {
            $query['UserIds'] = $request->userIds;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return RemoveUsersFromGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Removes Employee Identity and Access Management (EIAM) accounts from an EIAM group of Identity as a Service (IDaaS).
     *  *
     * @param RemoveUsersFromGroupRequest $request RemoveUsersFromGroupRequest
     *
     * @return RemoveUsersFromGroupResponse RemoveUsersFromGroupResponse
     */
    public function removeUsersFromGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeUsersFromGroupWithOptions($request, $runtime);
    }

    /**
     * @summary Revokes the permissions to access an application from multiple account groups at a time in Identity as a Service (IDaaS) Employee Identity and Access Management (EIAM).
     *  *
     * @param RevokeApplicationFromGroupsRequest $request RevokeApplicationFromGroupsRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return RevokeApplicationFromGroupsResponse RevokeApplicationFromGroupsResponse
     */
    public function revokeApplicationFromGroupsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->applicationId)) {
            $query['ApplicationId'] = $request->applicationId;
        }
        if (!Utils::isUnset($request->groupIds)) {
            $query['GroupIds'] = $request->groupIds;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return RevokeApplicationFromGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Revokes the permissions to access an application from multiple account groups at a time in Identity as a Service (IDaaS) Employee Identity and Access Management (EIAM).
     *  *
     * @param RevokeApplicationFromGroupsRequest $request RevokeApplicationFromGroupsRequest
     *
     * @return RevokeApplicationFromGroupsResponse RevokeApplicationFromGroupsResponse
     */
    public function revokeApplicationFromGroups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->revokeApplicationFromGroupsWithOptions($request, $runtime);
    }

    /**
     * @summary Revokes the permissions to access an application from multiple Employee Identity and Access Management (EIAM) organizations at a time.
     *  *
     * @param RevokeApplicationFromOrganizationalUnitsRequest $request RevokeApplicationFromOrganizationalUnitsRequest
     * @param RuntimeOptions                                  $runtime runtime options for this request RuntimeOptions
     *
     * @return RevokeApplicationFromOrganizationalUnitsResponse RevokeApplicationFromOrganizationalUnitsResponse
     */
    public function revokeApplicationFromOrganizationalUnitsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->applicationId)) {
            $query['ApplicationId'] = $request->applicationId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->organizationalUnitIds)) {
            $query['OrganizationalUnitIds'] = $request->organizationalUnitIds;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return RevokeApplicationFromOrganizationalUnitsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Revokes the permissions to access an application from multiple Employee Identity and Access Management (EIAM) organizations at a time.
     *  *
     * @param RevokeApplicationFromOrganizationalUnitsRequest $request RevokeApplicationFromOrganizationalUnitsRequest
     *
     * @return RevokeApplicationFromOrganizationalUnitsResponse RevokeApplicationFromOrganizationalUnitsResponse
     */
    public function revokeApplicationFromOrganizationalUnits($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->revokeApplicationFromOrganizationalUnitsWithOptions($request, $runtime);
    }

    /**
     * @summary Revokes the permissions to access an application from multiple Employee Identity and Access Management (EIAM) accounts at a time.
     *  *
     * @param RevokeApplicationFromUsersRequest $request RevokeApplicationFromUsersRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return RevokeApplicationFromUsersResponse RevokeApplicationFromUsersResponse
     */
    public function revokeApplicationFromUsersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->applicationId)) {
            $query['ApplicationId'] = $request->applicationId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->userIds)) {
            $query['UserIds'] = $request->userIds;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return RevokeApplicationFromUsersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Revokes the permissions to access an application from multiple Employee Identity and Access Management (EIAM) accounts at a time.
     *  *
     * @param RevokeApplicationFromUsersRequest $request RevokeApplicationFromUsersRequest
     *
     * @return RevokeApplicationFromUsersResponse RevokeApplicationFromUsersResponse
     */
    public function revokeApplicationFromUsers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->revokeApplicationFromUsersWithOptions($request, $runtime);
    }

    /**
     * @summary Configures the permissions of the Developer API feature of an Employee Identity and Access Management (EIAM) application.
     *  *
     * @param SetApplicationGrantScopeRequest $request SetApplicationGrantScopeRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return SetApplicationGrantScopeResponse SetApplicationGrantScopeResponse
     */
    public function setApplicationGrantScopeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->applicationId)) {
            $query['ApplicationId'] = $request->applicationId;
        }
        if (!Utils::isUnset($request->grantScopes)) {
            $query['GrantScopes'] = $request->grantScopes;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return SetApplicationGrantScopeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Configures the permissions of the Developer API feature of an Employee Identity and Access Management (EIAM) application.
     *  *
     * @param SetApplicationGrantScopeRequest $request SetApplicationGrantScopeRequest
     *
     * @return SetApplicationGrantScopeResponse SetApplicationGrantScopeResponse
     */
    public function setApplicationGrantScope($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setApplicationGrantScopeWithOptions($request, $runtime);
    }

    /**
     * @summary Configures the account synchronization feature for an application in Identity as a Service (IDaaS) Employee IAM (EIAM).
     *  *
     * @param SetApplicationProvisioningConfigRequest $request SetApplicationProvisioningConfigRequest
     * @param RuntimeOptions                          $runtime runtime options for this request RuntimeOptions
     *
     * @return SetApplicationProvisioningConfigResponse SetApplicationProvisioningConfigResponse
     */
    public function setApplicationProvisioningConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->applicationId)) {
            $query['ApplicationId'] = $request->applicationId;
        }
        if (!Utils::isUnset($request->callbackProvisioningConfig)) {
            $query['CallbackProvisioningConfig'] = $request->callbackProvisioningConfig;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->provisionPassword)) {
            $query['ProvisionPassword'] = $request->provisionPassword;
        }
        if (!Utils::isUnset($request->provisionProtocolType)) {
            $query['ProvisionProtocolType'] = $request->provisionProtocolType;
        }
        if (!Utils::isUnset($request->scimProvisioningConfig)) {
            $query['ScimProvisioningConfig'] = $request->scimProvisioningConfig;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return SetApplicationProvisioningConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Configures the account synchronization feature for an application in Identity as a Service (IDaaS) Employee IAM (EIAM).
     *  *
     * @param SetApplicationProvisioningConfigRequest $request SetApplicationProvisioningConfigRequest
     *
     * @return SetApplicationProvisioningConfigResponse SetApplicationProvisioningConfigResponse
     */
    public function setApplicationProvisioningConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setApplicationProvisioningConfigWithOptions($request, $runtime);
    }

    /**
     * @summary Sets the account synchronization scope of applications in Identity as a Service (IDaaS) Employee IAM (EIAM). This scope is the same as the scope within which developers can call the DeveloperAPI to query and manage accounts.
     *  *
     * @param SetApplicationProvisioningScopeRequest $request SetApplicationProvisioningScopeRequest
     * @param RuntimeOptions                         $runtime runtime options for this request RuntimeOptions
     *
     * @return SetApplicationProvisioningScopeResponse SetApplicationProvisioningScopeResponse
     */
    public function setApplicationProvisioningScopeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->applicationId)) {
            $query['ApplicationId'] = $request->applicationId;
        }
        if (!Utils::isUnset($request->groupIds)) {
            $query['GroupIds'] = $request->groupIds;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->organizationalUnitIds)) {
            $query['OrganizationalUnitIds'] = $request->organizationalUnitIds;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return SetApplicationProvisioningScopeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Sets the account synchronization scope of applications in Identity as a Service (IDaaS) Employee IAM (EIAM). This scope is the same as the scope within which developers can call the DeveloperAPI to query and manage accounts.
     *  *
     * @param SetApplicationProvisioningScopeRequest $request SetApplicationProvisioningScopeRequest
     *
     * @return SetApplicationProvisioningScopeResponse SetApplicationProvisioningScopeResponse
     */
    public function setApplicationProvisioningScope($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setApplicationProvisioningScopeWithOptions($request, $runtime);
    }

    /**
     * @summary Specifies the single sign-on (SSO) configuration attributes of an application in Identity as a Service (IDaaS) Employee IAM (EIAM).
     *  *
     * @description In IDaaS EIAM, the application management feature supports multiple SSO protocols for applications, including SAML 2.0 and OIDC protocols. Each application supports only one protocol, and the protocol cannot be changed after the application is created. You can specify the SSO configuration attributes of an application based on the supported SSO protocol.
     *  *
     * @param SetApplicationSsoConfigRequest $request SetApplicationSsoConfigRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return SetApplicationSsoConfigResponse SetApplicationSsoConfigResponse
     */
    public function setApplicationSsoConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->applicationId)) {
            $query['ApplicationId'] = $request->applicationId;
        }
        if (!Utils::isUnset($request->initLoginType)) {
            $query['InitLoginType'] = $request->initLoginType;
        }
        if (!Utils::isUnset($request->initLoginUrl)) {
            $query['InitLoginUrl'] = $request->initLoginUrl;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->oidcSsoConfig)) {
            $query['OidcSsoConfig'] = $request->oidcSsoConfig;
        }
        if (!Utils::isUnset($request->samlSsoConfig)) {
            $query['SamlSsoConfig'] = $request->samlSsoConfig;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return SetApplicationSsoConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Specifies the single sign-on (SSO) configuration attributes of an application in Identity as a Service (IDaaS) Employee IAM (EIAM).
     *  *
     * @description In IDaaS EIAM, the application management feature supports multiple SSO protocols for applications, including SAML 2.0 and OIDC protocols. Each application supports only one protocol, and the protocol cannot be changed after the application is created. You can specify the SSO configuration attributes of an application based on the supported SSO protocol.
     *  *
     * @param SetApplicationSsoConfigRequest $request SetApplicationSsoConfigRequest
     *
     * @return SetApplicationSsoConfigResponse SetApplicationSsoConfigResponse
     */
    public function setApplicationSsoConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setApplicationSsoConfigWithOptions($request, $runtime);
    }

    /**
     * @summary 设置默认域名。
     *  *
     * @param SetDefaultDomainRequest $request SetDefaultDomainRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return SetDefaultDomainResponse SetDefaultDomainResponse
     */
    public function setDefaultDomainWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainId)) {
            $query['DomainId'] = $request->domainId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return SetDefaultDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 设置默认域名。
     *  *
     * @param SetDefaultDomainRequest $request SetDefaultDomainRequest
     *
     * @return SetDefaultDomainResponse SetDefaultDomainResponse
     */
    public function setDefaultDomain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setDefaultDomainWithOptions($request, $runtime);
    }

    /**
     * @summary Configures a forgot password policy for an Employee Identity and Access Management (EIAM) instance of Identity as a Service (IDaaS).
     *  *
     * @param SetForgetPasswordConfigurationRequest $request SetForgetPasswordConfigurationRequest
     * @param RuntimeOptions                        $runtime runtime options for this request RuntimeOptions
     *
     * @return SetForgetPasswordConfigurationResponse SetForgetPasswordConfigurationResponse
     */
    public function setForgetPasswordConfigurationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->authenticationChannels)) {
            $query['AuthenticationChannels'] = $request->authenticationChannels;
        }
        if (!Utils::isUnset($request->forgetPasswordStatus)) {
            $query['ForgetPasswordStatus'] = $request->forgetPasswordStatus;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return SetForgetPasswordConfigurationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Configures a forgot password policy for an Employee Identity and Access Management (EIAM) instance of Identity as a Service (IDaaS).
     *  *
     * @param SetForgetPasswordConfigurationRequest $request SetForgetPasswordConfigurationRequest
     *
     * @return SetForgetPasswordConfigurationResponse SetForgetPasswordConfigurationResponse
     */
    public function setForgetPasswordConfiguration($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setForgetPasswordConfigurationWithOptions($request, $runtime);
    }

    /**
     * @summary Configures a password complexity policy for an Employee Identity and Access Management (EIAM) instance of Identity as a Service (IDaaS).
     *  *
     * @param SetPasswordComplexityConfigurationRequest $request SetPasswordComplexityConfigurationRequest
     * @param RuntimeOptions                            $runtime runtime options for this request RuntimeOptions
     *
     * @return SetPasswordComplexityConfigurationResponse SetPasswordComplexityConfigurationResponse
     */
    public function setPasswordComplexityConfigurationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->passwordComplexityRules)) {
            $query['PasswordComplexityRules'] = $request->passwordComplexityRules;
        }
        if (!Utils::isUnset($request->passwordMinLength)) {
            $query['PasswordMinLength'] = $request->passwordMinLength;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return SetPasswordComplexityConfigurationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Configures a password complexity policy for an Employee Identity and Access Management (EIAM) instance of Identity as a Service (IDaaS).
     *  *
     * @param SetPasswordComplexityConfigurationRequest $request SetPasswordComplexityConfigurationRequest
     *
     * @return SetPasswordComplexityConfigurationResponse SetPasswordComplexityConfigurationResponse
     */
    public function setPasswordComplexityConfiguration($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setPasswordComplexityConfigurationWithOptions($request, $runtime);
    }

    /**
     * @summary Configures a password expiration policy for an Employee Identity and Access Management (EIAM) instance of Identity as a Service (IDaaS).
     *  *
     * @param SetPasswordExpirationConfigurationRequest $request SetPasswordExpirationConfigurationRequest
     * @param RuntimeOptions                            $runtime runtime options for this request RuntimeOptions
     *
     * @return SetPasswordExpirationConfigurationResponse SetPasswordExpirationConfigurationResponse
     */
    public function setPasswordExpirationConfigurationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->passwordExpirationAction)) {
            $query['PasswordExpirationAction'] = $request->passwordExpirationAction;
        }
        if (!Utils::isUnset($request->passwordExpirationNotificationChannels)) {
            $query['PasswordExpirationNotificationChannels'] = $request->passwordExpirationNotificationChannels;
        }
        if (!Utils::isUnset($request->passwordExpirationNotificationDuration)) {
            $query['PasswordExpirationNotificationDuration'] = $request->passwordExpirationNotificationDuration;
        }
        if (!Utils::isUnset($request->passwordExpirationNotificationStatus)) {
            $query['PasswordExpirationNotificationStatus'] = $request->passwordExpirationNotificationStatus;
        }
        if (!Utils::isUnset($request->passwordExpirationStatus)) {
            $query['PasswordExpirationStatus'] = $request->passwordExpirationStatus;
        }
        if (!Utils::isUnset($request->passwordForcedUpdateDuration)) {
            $query['PasswordForcedUpdateDuration'] = $request->passwordForcedUpdateDuration;
        }
        if (!Utils::isUnset($request->passwordValidMaxDay)) {
            $query['PasswordValidMaxDay'] = $request->passwordValidMaxDay;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return SetPasswordExpirationConfigurationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Configures a password expiration policy for an Employee Identity and Access Management (EIAM) instance of Identity as a Service (IDaaS).
     *  *
     * @param SetPasswordExpirationConfigurationRequest $request SetPasswordExpirationConfigurationRequest
     *
     * @return SetPasswordExpirationConfigurationResponse SetPasswordExpirationConfigurationResponse
     */
    public function setPasswordExpirationConfiguration($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setPasswordExpirationConfigurationWithOptions($request, $runtime);
    }

    /**
     * @summary Configures a password history policy for an Employee Identity and Access Management (EIAM) instance of Identity as a Service (IDaaS).
     *  *
     * @param SetPasswordHistoryConfigurationRequest $request SetPasswordHistoryConfigurationRequest
     * @param RuntimeOptions                         $runtime runtime options for this request RuntimeOptions
     *
     * @return SetPasswordHistoryConfigurationResponse SetPasswordHistoryConfigurationResponse
     */
    public function setPasswordHistoryConfigurationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->passwordHistoryMaxRetention)) {
            $query['PasswordHistoryMaxRetention'] = $request->passwordHistoryMaxRetention;
        }
        if (!Utils::isUnset($request->passwordHistoryStatus)) {
            $query['PasswordHistoryStatus'] = $request->passwordHistoryStatus;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return SetPasswordHistoryConfigurationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Configures a password history policy for an Employee Identity and Access Management (EIAM) instance of Identity as a Service (IDaaS).
     *  *
     * @param SetPasswordHistoryConfigurationRequest $request SetPasswordHistoryConfigurationRequest
     *
     * @return SetPasswordHistoryConfigurationResponse SetPasswordHistoryConfigurationResponse
     */
    public function setPasswordHistoryConfiguration($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setPasswordHistoryConfigurationWithOptions($request, $runtime);
    }

    /**
     * @summary Sets the password initialization configurations for an Employee Identity and Access Management (EIAM) instance of Identity as a Service (IDaaS).
     *  *
     * @param SetPasswordInitializationConfigurationRequest $request SetPasswordInitializationConfigurationRequest
     * @param RuntimeOptions                                $runtime runtime options for this request RuntimeOptions
     *
     * @return SetPasswordInitializationConfigurationResponse SetPasswordInitializationConfigurationResponse
     */
    public function setPasswordInitializationConfigurationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->passwordForcedUpdateStatus)) {
            $query['PasswordForcedUpdateStatus'] = $request->passwordForcedUpdateStatus;
        }
        if (!Utils::isUnset($request->passwordInitializationNotificationChannels)) {
            $query['PasswordInitializationNotificationChannels'] = $request->passwordInitializationNotificationChannels;
        }
        if (!Utils::isUnset($request->passwordInitializationStatus)) {
            $query['PasswordInitializationStatus'] = $request->passwordInitializationStatus;
        }
        if (!Utils::isUnset($request->passwordInitializationType)) {
            $query['PasswordInitializationType'] = $request->passwordInitializationType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return SetPasswordInitializationConfigurationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Sets the password initialization configurations for an Employee Identity and Access Management (EIAM) instance of Identity as a Service (IDaaS).
     *  *
     * @param SetPasswordInitializationConfigurationRequest $request SetPasswordInitializationConfigurationRequest
     *
     * @return SetPasswordInitializationConfigurationResponse SetPasswordInitializationConfigurationResponse
     */
    public function setPasswordInitializationConfiguration($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setPasswordInitializationConfigurationWithOptions($request, $runtime);
    }

    /**
     * @summary Updates the primary organizational unit to which an Identity as a Service (IDaaS) Employee Identity and Access Management (EIAM) account belongs. This account will be removed from the previous primary organizational unit and added to the new primary organization.
     *  *
     * @param SetUserPrimaryOrganizationalUnitRequest $request SetUserPrimaryOrganizationalUnitRequest
     * @param RuntimeOptions                          $runtime runtime options for this request RuntimeOptions
     *
     * @return SetUserPrimaryOrganizationalUnitResponse SetUserPrimaryOrganizationalUnitResponse
     */
    public function setUserPrimaryOrganizationalUnitWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->organizationalUnitId)) {
            $query['OrganizationalUnitId'] = $request->organizationalUnitId;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return SetUserPrimaryOrganizationalUnitResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Updates the primary organizational unit to which an Identity as a Service (IDaaS) Employee Identity and Access Management (EIAM) account belongs. This account will be removed from the previous primary organizational unit and added to the new primary organization.
     *  *
     * @param SetUserPrimaryOrganizationalUnitRequest $request SetUserPrimaryOrganizationalUnitRequest
     *
     * @return SetUserPrimaryOrganizationalUnitResponse SetUserPrimaryOrganizationalUnitResponse
     */
    public function setUserPrimaryOrganizationalUnit($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setUserPrimaryOrganizationalUnitWithOptions($request, $runtime);
    }

    /**
     * @summary Unlocks an Employee Identity and Access Management (EIAM) account of Identity as a Service (IDaaS) that is locked.
     *  *
     * @param UnlockUserRequest $request UnlockUserRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return UnlockUserResponse UnlockUserResponse
     */
    public function unlockUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return UnlockUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Unlocks an Employee Identity and Access Management (EIAM) account of Identity as a Service (IDaaS) that is locked.
     *  *
     * @param UnlockUserRequest $request UnlockUserRequest
     *
     * @return UnlockUserResponse UnlockUserResponse
     */
    public function unlockUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->unlockUserWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the authorization type of an Employee Identity and Access Management (EIAM) application.
     *  *
     * @param UpdateApplicationAuthorizationTypeRequest $request UpdateApplicationAuthorizationTypeRequest
     * @param RuntimeOptions                            $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateApplicationAuthorizationTypeResponse UpdateApplicationAuthorizationTypeResponse
     */
    public function updateApplicationAuthorizationTypeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->applicationId)) {
            $query['ApplicationId'] = $request->applicationId;
        }
        if (!Utils::isUnset($request->authorizationType)) {
            $query['AuthorizationType'] = $request->authorizationType;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return UpdateApplicationAuthorizationTypeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies the authorization type of an Employee Identity and Access Management (EIAM) application.
     *  *
     * @param UpdateApplicationAuthorizationTypeRequest $request UpdateApplicationAuthorizationTypeRequest
     *
     * @return UpdateApplicationAuthorizationTypeResponse UpdateApplicationAuthorizationTypeResponse
     */
    public function updateApplicationAuthorizationType($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateApplicationAuthorizationTypeWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the description of an Employee Identity and Access Management (EIAM) application.
     *  *
     * @param UpdateApplicationDescriptionRequest $request UpdateApplicationDescriptionRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateApplicationDescriptionResponse UpdateApplicationDescriptionResponse
     */
    public function updateApplicationDescriptionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->applicationId)) {
            $query['ApplicationId'] = $request->applicationId;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return UpdateApplicationDescriptionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies the description of an Employee Identity and Access Management (EIAM) application.
     *  *
     * @param UpdateApplicationDescriptionRequest $request UpdateApplicationDescriptionRequest
     *
     * @return UpdateApplicationDescriptionResponse UpdateApplicationDescriptionResponse
     */
    public function updateApplicationDescription($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateApplicationDescriptionWithOptions($request, $runtime);
    }

    /**
     * @summary Updates the information about an account group in Identity as a Service (IDaaS) Employee Identity and Access Management (EIAM). If the information is empty, the information is not updated by default.
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
        if (!Utils::isUnset($request->groupExternalId)) {
            $query['GroupExternalId'] = $request->groupExternalId;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->groupName)) {
            $query['GroupName'] = $request->groupName;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return UpdateGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Updates the information about an account group in Identity as a Service (IDaaS) Employee Identity and Access Management (EIAM). If the information is empty, the information is not updated by default.
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
     * @summary Updates the description of an Identity as a Service (IDaaS) Employee Identity and Access Management (EIAM) account group.
     *  *
     * @param UpdateGroupDescriptionRequest $request UpdateGroupDescriptionRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateGroupDescriptionResponse UpdateGroupDescriptionResponse
     */
    public function updateGroupDescriptionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return UpdateGroupDescriptionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Updates the description of an Identity as a Service (IDaaS) Employee Identity and Access Management (EIAM) account group.
     *  *
     * @param UpdateGroupDescriptionRequest $request UpdateGroupDescriptionRequest
     *
     * @return UpdateGroupDescriptionResponse UpdateGroupDescriptionResponse
     */
    public function updateGroupDescription($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateGroupDescriptionWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the description of an Enterprise Identity and Access Management (EIAM) instance of Identity as a Service (IDaaS).
     *  *
     * @param UpdateInstanceDescriptionRequest $request UpdateInstanceDescriptionRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateInstanceDescriptionResponse UpdateInstanceDescriptionResponse
     */
    public function updateInstanceDescriptionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return UpdateInstanceDescriptionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies the description of an Enterprise Identity and Access Management (EIAM) instance of Identity as a Service (IDaaS).
     *  *
     * @param UpdateInstanceDescriptionRequest $request UpdateInstanceDescriptionRequest
     *
     * @return UpdateInstanceDescriptionResponse UpdateInstanceDescriptionResponse
     */
    public function updateInstanceDescription($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateInstanceDescriptionWithOptions($request, $runtime);
    }

    /**
     * @summary 更新一个专属网络端点的名称。
     *  *
     * @param UpdateNetworkAccessEndpointNameRequest $request UpdateNetworkAccessEndpointNameRequest
     * @param RuntimeOptions                         $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateNetworkAccessEndpointNameResponse UpdateNetworkAccessEndpointNameResponse
     */
    public function updateNetworkAccessEndpointNameWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->networkAccessEndpointId)) {
            $query['NetworkAccessEndpointId'] = $request->networkAccessEndpointId;
        }
        if (!Utils::isUnset($request->networkAccessEndpointName)) {
            $query['NetworkAccessEndpointName'] = $request->networkAccessEndpointName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return UpdateNetworkAccessEndpointNameResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 更新一个专属网络端点的名称。
     *  *
     * @param UpdateNetworkAccessEndpointNameRequest $request UpdateNetworkAccessEndpointNameRequest
     *
     * @return UpdateNetworkAccessEndpointNameResponse UpdateNetworkAccessEndpointNameResponse
     */
    public function updateNetworkAccessEndpointName($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateNetworkAccessEndpointNameWithOptions($request, $runtime);
    }

    /**
     * @summary Updates the basic information about an Employee Identity and Access Management (EIAM) organization. The basic information about the organization is not updated by default if no parameter is specified.
     *  *
     * @param UpdateOrganizationalUnitRequest $request UpdateOrganizationalUnitRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateOrganizationalUnitResponse UpdateOrganizationalUnitResponse
     */
    public function updateOrganizationalUnitWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->organizationalUnitId)) {
            $query['OrganizationalUnitId'] = $request->organizationalUnitId;
        }
        if (!Utils::isUnset($request->organizationalUnitName)) {
            $query['OrganizationalUnitName'] = $request->organizationalUnitName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return UpdateOrganizationalUnitResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Updates the basic information about an Employee Identity and Access Management (EIAM) organization. The basic information about the organization is not updated by default if no parameter is specified.
     *  *
     * @param UpdateOrganizationalUnitRequest $request UpdateOrganizationalUnitRequest
     *
     * @return UpdateOrganizationalUnitResponse UpdateOrganizationalUnitResponse
     */
    public function updateOrganizationalUnit($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateOrganizationalUnitWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the description of an Employee Identity and Access Management (EIAM) organization.
     *  *
     * @param UpdateOrganizationalUnitDescriptionRequest $request UpdateOrganizationalUnitDescriptionRequest
     * @param RuntimeOptions                             $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateOrganizationalUnitDescriptionResponse UpdateOrganizationalUnitDescriptionResponse
     */
    public function updateOrganizationalUnitDescriptionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->organizationalUnitId)) {
            $query['OrganizationalUnitId'] = $request->organizationalUnitId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return UpdateOrganizationalUnitDescriptionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies the description of an Employee Identity and Access Management (EIAM) organization.
     *  *
     * @param UpdateOrganizationalUnitDescriptionRequest $request UpdateOrganizationalUnitDescriptionRequest
     *
     * @return UpdateOrganizationalUnitDescriptionResponse UpdateOrganizationalUnitDescriptionResponse
     */
    public function updateOrganizationalUnitDescription($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateOrganizationalUnitDescriptionWithOptions($request, $runtime);
    }

    /**
     * @summary Updates the parent organization ID of an organization in Identity as a Service (IDaaS) Employee Identity and Access Management (EIAM). In this case, the organization is moved from a parent node to a new node.
     *  *
     * @param UpdateOrganizationalUnitParentIdRequest $request UpdateOrganizationalUnitParentIdRequest
     * @param RuntimeOptions                          $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateOrganizationalUnitParentIdResponse UpdateOrganizationalUnitParentIdResponse
     */
    public function updateOrganizationalUnitParentIdWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->organizationalUnitId)) {
            $query['OrganizationalUnitId'] = $request->organizationalUnitId;
        }
        if (!Utils::isUnset($request->parentId)) {
            $query['ParentId'] = $request->parentId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return UpdateOrganizationalUnitParentIdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Updates the parent organization ID of an organization in Identity as a Service (IDaaS) Employee Identity and Access Management (EIAM). In this case, the organization is moved from a parent node to a new node.
     *  *
     * @param UpdateOrganizationalUnitParentIdRequest $request UpdateOrganizationalUnitParentIdRequest
     *
     * @return UpdateOrganizationalUnitParentIdResponse UpdateOrganizationalUnitParentIdResponse
     */
    public function updateOrganizationalUnitParentId($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateOrganizationalUnitParentIdWithOptions($request, $runtime);
    }

    /**
     * @summary Updates the basic information about an Employee Identity and Access Management (EIAM) account of Identity as a Service (IDaaS).
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
        if (!Utils::isUnset($request->customFields)) {
            $query['CustomFields'] = $request->customFields;
        }
        if (!Utils::isUnset($request->displayName)) {
            $query['DisplayName'] = $request->displayName;
        }
        if (!Utils::isUnset($request->email)) {
            $query['Email'] = $request->email;
        }
        if (!Utils::isUnset($request->emailVerified)) {
            $query['EmailVerified'] = $request->emailVerified;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->phoneNumber)) {
            $query['PhoneNumber'] = $request->phoneNumber;
        }
        if (!Utils::isUnset($request->phoneNumberVerified)) {
            $query['PhoneNumberVerified'] = $request->phoneNumberVerified;
        }
        if (!Utils::isUnset($request->phoneRegion)) {
            $query['PhoneRegion'] = $request->phoneRegion;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        if (!Utils::isUnset($request->username)) {
            $query['Username'] = $request->username;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return UpdateUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Updates the basic information about an Employee Identity and Access Management (EIAM) account of Identity as a Service (IDaaS).
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

    /**
     * @summary Modifies the description of an Identity as a Service (IDaaS) Employee Identity and Access Management (EIAM) account.
     *  *
     * @param UpdateUserDescriptionRequest $request UpdateUserDescriptionRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateUserDescriptionResponse UpdateUserDescriptionResponse
     */
    public function updateUserDescriptionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return UpdateUserDescriptionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies the description of an Identity as a Service (IDaaS) Employee Identity and Access Management (EIAM) account.
     *  *
     * @param UpdateUserDescriptionRequest $request UpdateUserDescriptionRequest
     *
     * @return UpdateUserDescriptionResponse UpdateUserDescriptionResponse
     */
    public function updateUserDescription($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateUserDescriptionWithOptions($request, $runtime);
    }

    /**
     * @summary Updates the password information of an Employee Identity and Access Management (EIAM) account of Identity as a Service (IDaaS). The password must meet the requirements of the password policies that are configured in the IDaaS console.
     *  *
     * @param UpdateUserPasswordRequest $request UpdateUserPasswordRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateUserPasswordResponse UpdateUserPasswordResponse
     */
    public function updateUserPasswordWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->password)) {
            $query['Password'] = $request->password;
        }
        if (!Utils::isUnset($request->passwordForcedUpdateStatus)) {
            $query['PasswordForcedUpdateStatus'] = $request->passwordForcedUpdateStatus;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        if (!Utils::isUnset($request->userNotificationChannels)) {
            $query['UserNotificationChannels'] = $request->userNotificationChannels;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return UpdateUserPasswordResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Updates the password information of an Employee Identity and Access Management (EIAM) account of Identity as a Service (IDaaS). The password must meet the requirements of the password policies that are configured in the IDaaS console.
     *  *
     * @param UpdateUserPasswordRequest $request UpdateUserPasswordRequest
     *
     * @return UpdateUserPasswordResponse UpdateUserPasswordResponse
     */
    public function updateUserPassword($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateUserPasswordWithOptions($request, $runtime);
    }
}

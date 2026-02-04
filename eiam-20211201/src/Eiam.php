<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\Eiam\V20211201\Models\AddApplicationAccountToUserRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\AddApplicationAccountToUserResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\AddApplicationToAuthorizationRuleRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\AddApplicationToAuthorizationRuleResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\AddCustomPrivacyPoliciesToBrandRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\AddCustomPrivacyPoliciesToBrandResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\AddGroupToAuthorizationRuleRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\AddGroupToAuthorizationRuleResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\AddUsersToGroupRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\AddUsersToGroupResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\AddUserToAuthorizationRuleRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\AddUserToAuthorizationRuleResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\AddUserToOrganizationalUnitsRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\AddUserToOrganizationalUnitsResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\AuthorizeApplicationToGroupsRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\AuthorizeApplicationToGroupsResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\AuthorizeApplicationToOrganizationalUnitsRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\AuthorizeApplicationToOrganizationalUnitsResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\AuthorizeApplicationToUsersRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\AuthorizeApplicationToUsersResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\AuthorizeResourceServerScopesToClientRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\AuthorizeResourceServerScopesToClientResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\AuthorizeResourceServerScopesToGroupRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\AuthorizeResourceServerScopesToGroupResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\AuthorizeResourceServerScopesToOrganizationalUnitRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\AuthorizeResourceServerScopesToOrganizationalUnitResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\AuthorizeResourceServerScopesToUserRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\AuthorizeResourceServerScopesToUserResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\AuthorizeResourceServerToClientRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\AuthorizeResourceServerToClientResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\BindUserAuthnSourceMappingRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\BindUserAuthnSourceMappingResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\CheckApplicationProvisioningUserPrimaryOrganizationalUnitRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\CheckApplicationProvisioningUserPrimaryOrganizationalUnitResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\CheckInstanceForDeleteRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\CheckInstanceForDeleteResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\CheckInstanceModuleStatusRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\CheckInstanceModuleStatusResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\CreateApplicationClientSecretRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\CreateApplicationClientSecretResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\CreateApplicationFederatedCredentialRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\CreateApplicationFederatedCredentialResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\CreateApplicationRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\CreateApplicationResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\CreateApplicationRoleRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\CreateApplicationRoleResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\CreateApplicationTokenRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\CreateApplicationTokenResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\CreateAuthorizationResourceRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\CreateAuthorizationResourceResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\CreateAuthorizationRuleRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\CreateAuthorizationRuleResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\CreateBrandRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\CreateBrandResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\CreateClientPublicKeyRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\CreateClientPublicKeyResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\CreateCloudAccountRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\CreateCloudAccountResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\CreateCloudAccountRoleRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\CreateCloudAccountRoleResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\CreateConditionalAccessPolicyRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\CreateConditionalAccessPolicyResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\CreateCustomFieldRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\CreateCustomFieldResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\CreateCustomPrivacyPolicyRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\CreateCustomPrivacyPolicyResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\CreateDomainProxyTokenRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\CreateDomainProxyTokenResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\CreateDomainRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\CreateDomainResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\CreateFederatedCredentialProviderRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\CreateFederatedCredentialProviderResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\CreateGroupRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\CreateGroupResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\CreateIdentityProviderRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\CreateIdentityProviderResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\CreateIdentityProviderStatusCheckJobRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\CreateIdentityProviderStatusCheckJobResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\CreateInstanceRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\CreateInstanceResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\CreateInstanceTrialLicenseRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\CreateInstanceTrialLicenseResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\CreateNetworkAccessEndpointRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\CreateNetworkAccessEndpointResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\CreateNetworkZoneRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\CreateNetworkZoneResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\CreateOrganizationalUnitRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\CreateOrganizationalUnitResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\CreateResourceServerScopeRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\CreateResourceServerScopeResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\CreateUserRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\CreateUserResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\DeleteApplicationClientSecretRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\DeleteApplicationClientSecretResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\DeleteApplicationFederatedCredentialRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\DeleteApplicationFederatedCredentialResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\DeleteApplicationRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\DeleteApplicationResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\DeleteApplicationRoleRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\DeleteApplicationRoleResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\DeleteApplicationTokenRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\DeleteApplicationTokenResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\DeleteAuthorizationResourceRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\DeleteAuthorizationResourceResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\DeleteAuthorizationRuleRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\DeleteAuthorizationRuleResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\DeleteBrandRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\DeleteBrandResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\DeleteClientPublicKeyRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\DeleteClientPublicKeyResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\DeleteCloudAccountRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\DeleteCloudAccountResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\DeleteCloudAccountRoleRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\DeleteCloudAccountRoleResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\DeleteConditionalAccessPolicyRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\DeleteConditionalAccessPolicyResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\DeleteCustomFieldRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\DeleteCustomFieldResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\DeleteCustomPrivacyPolicyRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\DeleteCustomPrivacyPolicyResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\DeleteDomainProxyTokenRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\DeleteDomainProxyTokenResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\DeleteDomainRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\DeleteDomainResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\DeleteFederatedCredentialProviderRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\DeleteFederatedCredentialProviderResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\DeleteGroupRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\DeleteGroupResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\DeleteIdentityProviderRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\DeleteIdentityProviderResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\DeleteInstanceRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\DeleteInstanceResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\DeleteNetworkAccessEndpointRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\DeleteNetworkAccessEndpointResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\DeleteNetworkZoneRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\DeleteNetworkZoneResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\DeleteOrganizationalUnitChildrenRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\DeleteOrganizationalUnitChildrenResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\DeleteOrganizationalUnitRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\DeleteOrganizationalUnitResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\DeleteResourceServerScopeRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\DeleteResourceServerScopeResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\DeleteUserRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\DeleteUserResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\DeleteUsersRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\DeleteUsersResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\DeleteWebAuthnAuthenticatorRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\DeleteWebAuthnAuthenticatorResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\DisableApplicationApiInvokeRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\DisableApplicationApiInvokeResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\DisableApplicationClientSecretRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\DisableApplicationClientSecretResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\DisableApplicationFederatedCredentialRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\DisableApplicationFederatedCredentialResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\DisableApplicationM2MClientRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\DisableApplicationM2MClientResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\DisableApplicationProvisioningRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\DisableApplicationProvisioningResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\DisableApplicationRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\DisableApplicationResourceServerRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\DisableApplicationResourceServerResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\DisableApplicationResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\DisableApplicationSsoRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\DisableApplicationSsoResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\DisableApplicationTokenRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\DisableApplicationTokenResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\DisableAuthorizationRuleRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\DisableAuthorizationRuleResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\DisableBrandRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\DisableBrandResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\DisableClientPublicKeyRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\DisableClientPublicKeyResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\DisableCloudAccountRoleRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\DisableCloudAccountRoleResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\DisableConditionalAccessPolicyRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\DisableConditionalAccessPolicyResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\DisableCustomFieldRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\DisableCustomFieldResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\DisableCustomPrivacyPolicyRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\DisableCustomPrivacyPolicyResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\DisableDomainProxyTokenRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\DisableDomainProxyTokenResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\DisableFederatedCredentialProviderRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\DisableFederatedCredentialProviderResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\DisableIdentityProviderAdvancedAbilityRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\DisableIdentityProviderAdvancedAbilityResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\DisableIdentityProviderAuthnRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\DisableIdentityProviderAuthnResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\DisableIdentityProviderUdPullRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\DisableIdentityProviderUdPullResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\DisableInitDomainAutoRedirectRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\DisableInitDomainAutoRedirectResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\DisableInternalAuthenticationSourceRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\DisableInternalAuthenticationSourceResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\DisableResourceServerCustomSubjectRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\DisableResourceServerCustomSubjectResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\DisableUserRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\DisableUserResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\EnableApplicationApiInvokeRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\EnableApplicationApiInvokeResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\EnableApplicationClientSecretRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\EnableApplicationClientSecretResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\EnableApplicationFederatedCredentialRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\EnableApplicationFederatedCredentialResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\EnableApplicationM2MClientRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\EnableApplicationM2MClientResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\EnableApplicationProvisioningRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\EnableApplicationProvisioningResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\EnableApplicationRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\EnableApplicationResourceServerRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\EnableApplicationResourceServerResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\EnableApplicationResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\EnableApplicationSsoRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\EnableApplicationSsoResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\EnableApplicationTokenRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\EnableApplicationTokenResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\EnableAuthorizationRuleRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\EnableAuthorizationRuleResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\EnableBrandRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\EnableBrandResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\EnableClientPublicKeyRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\EnableClientPublicKeyResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\EnableCloudAccountRoleRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\EnableCloudAccountRoleResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\EnableConditionalAccessPolicyRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\EnableConditionalAccessPolicyResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\EnableCustomFieldRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\EnableCustomFieldResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\EnableCustomPrivacyPolicyRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\EnableCustomPrivacyPolicyResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\EnableDomainProxyTokenRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\EnableDomainProxyTokenResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\EnableFederatedCredentialProviderRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\EnableFederatedCredentialProviderResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\EnableIdentityProviderAdvancedAbilityRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\EnableIdentityProviderAdvancedAbilityResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\EnableIdentityProviderAuthnRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\EnableIdentityProviderAuthnResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\EnableIdentityProviderUdPullRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\EnableIdentityProviderUdPullResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\EnableInitDomainAutoRedirectRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\EnableInitDomainAutoRedirectResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\EnableInternalAuthenticationSourceRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\EnableInternalAuthenticationSourceResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\EnableResourceServerCustomSubjectRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\EnableResourceServerCustomSubjectResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\EnableUserRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\EnableUserResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\GenerateDownloadUrlForSynchronizationJobRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\GenerateDownloadUrlForSynchronizationJobResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\GenerateFileImportTemplateRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\GenerateFileImportTemplateResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\GenerateUploadAuthRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\GenerateUploadAuthResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\GetApplicationAdvancedConfigRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\GetApplicationAdvancedConfigResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\GetApplicationFederatedCredentialRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\GetApplicationFederatedCredentialResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\GetApplicationGrantScopeRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\GetApplicationGrantScopeResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\GetApplicationProvisioningConfigRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\GetApplicationProvisioningConfigResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\GetApplicationProvisioningScopeRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\GetApplicationProvisioningScopeResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\GetApplicationProvisioningUserPrimaryOrganizationalUnitRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\GetApplicationProvisioningUserPrimaryOrganizationalUnitResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\GetApplicationRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\GetApplicationResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\GetApplicationRoleRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\GetApplicationRoleResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\GetApplicationSsoConfigRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\GetApplicationSsoConfigResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\GetApplicationTemplateRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\GetApplicationTemplateResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\GetAuthorizationResourceRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\GetAuthorizationResourceResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\GetAuthorizationRuleRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\GetAuthorizationRuleResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\GetBrandRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\GetBrandResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\GetClientPublicKeyRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\GetClientPublicKeyResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\GetCloudAccountRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\GetCloudAccountResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\GetCloudAccountRoleRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\GetCloudAccountRoleResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\GetConditionalAccessPolicyRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\GetConditionalAccessPolicyResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\GetCustomFieldRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\GetCustomFieldResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\GetCustomPrivacyPolicyRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\GetCustomPrivacyPolicyResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\GetDomainDnsChallengeRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\GetDomainDnsChallengeResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\GetDomainRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\GetDomainResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\GetFederatedCredentialProviderRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\GetFederatedCredentialProviderResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\GetForgetPasswordConfigurationRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\GetForgetPasswordConfigurationResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\GetGroupRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\GetGroupResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\GetIdentityProviderAdvancedConfigurationRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\GetIdentityProviderAdvancedConfigurationResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\GetIdentityProviderRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\GetIdentityProviderResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\GetIdentityProviderStatusCheckJobRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\GetIdentityProviderStatusCheckJobResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\GetIdentityProviderUdPullConfigurationRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\GetIdentityProviderUdPullConfigurationResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\GetIdentityProviderUdPushConfigurationRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\GetIdentityProviderUdPushConfigurationResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\GetInstanceControlConfigurationRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\GetInstanceControlConfigurationResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\GetInstanceGlobalizationConfigRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\GetInstanceGlobalizationConfigResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\GetInstanceLicenseRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\GetInstanceLicenseResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\GetInstanceModuleInfoRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\GetInstanceModuleInfoResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\GetInstanceQuotaRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\GetInstanceQuotaResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\GetInstanceRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\GetInstanceResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\GetInstanceTrialStatusRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\GetInstanceTrialStatusResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\GetLoginRedirectApplicationForBrandRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\GetLoginRedirectApplicationForBrandResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\GetNetworkAccessEndpointRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\GetNetworkAccessEndpointResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\GetNetworkZoneRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\GetNetworkZoneResponse;
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
use AlibabaCloud\SDK\Eiam\V20211201\Models\GetResourceServerScopeRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\GetResourceServerScopeResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\GetRootOrganizationalUnitRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\GetRootOrganizationalUnitResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\GetSynchronizationJobRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\GetSynchronizationJobResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\GetUserRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\GetUserResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\ListApplicationAccountsForUserRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\ListApplicationAccountsForUserResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\ListApplicationAccountsRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\ListApplicationAccountsResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\ListApplicationClientSecretsRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\ListApplicationClientSecretsResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\ListApplicationFederatedCredentialsForProviderRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\ListApplicationFederatedCredentialsForProviderResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\ListApplicationFederatedCredentialsRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\ListApplicationFederatedCredentialsResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\ListApplicationRolesRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\ListApplicationRolesResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\ListApplicationsForAuthorizationRuleRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\ListApplicationsForAuthorizationRuleResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\ListApplicationsForGroupRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\ListApplicationsForGroupResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\ListApplicationsForNetworkAccessEndpointRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\ListApplicationsForNetworkAccessEndpointResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\ListApplicationsForNetworkZoneRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\ListApplicationsForNetworkZoneResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\ListApplicationsForOrganizationalUnitRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\ListApplicationsForOrganizationalUnitResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\ListApplicationsForUserRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\ListApplicationsForUserResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\ListApplicationsRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\ListApplicationsResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\ListApplicationSupportedProvisionProtocolTypesRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\ListApplicationSupportedProvisionProtocolTypesResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\ListApplicationTokensRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\ListApplicationTokensResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\ListAuthorizationResourcesRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\ListAuthorizationResourcesResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\ListAuthorizationRulesForApplicationRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\ListAuthorizationRulesForApplicationResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\ListAuthorizationRulesForGroupRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\ListAuthorizationRulesForGroupResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\ListAuthorizationRulesForUserRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\ListAuthorizationRulesForUserResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\ListAuthorizationRulesRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\ListAuthorizationRulesResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\ListBrandsRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\ListBrandsResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\ListClientPublicKeysRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\ListClientPublicKeysResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\ListCloudAccountRolesRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\ListCloudAccountRolesResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\ListCloudAccountsRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\ListCloudAccountsResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\ListConditionalAccessPoliciesForApplicationRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\ListConditionalAccessPoliciesForApplicationResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\ListConditionalAccessPoliciesForNetworkZoneRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\ListConditionalAccessPoliciesForNetworkZoneResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\ListConditionalAccessPoliciesForUserRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\ListConditionalAccessPoliciesForUserResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\ListConditionalAccessPoliciesRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\ListConditionalAccessPoliciesResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\ListCustomPrivacyPoliciesForBrandRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\ListCustomPrivacyPoliciesForBrandResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\ListCustomPrivacyPoliciesRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\ListCustomPrivacyPoliciesResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\ListDomainProxyTokensRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\ListDomainProxyTokensResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\ListDomainsRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\ListDomainsResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\ListEiamInstancesRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\ListEiamInstancesResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\ListEiamRegionsResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\ListFederatedCredentialProvidersRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\ListFederatedCredentialProvidersResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\ListGroupsForApplicationRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\ListGroupsForApplicationResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\ListGroupsForAuthorizationRuleRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\ListGroupsForAuthorizationRuleResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\ListGroupsForResourceServerRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\ListGroupsForResourceServerResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\ListGroupsForUserRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\ListGroupsForUserResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\ListGroupsRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\ListGroupsResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\ListIdentityProvidersForNetworkAccessEndpointRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\ListIdentityProvidersForNetworkAccessEndpointResponse;
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
use AlibabaCloud\SDK\Eiam\V20211201\Models\ListNetworkZonesRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\ListNetworkZonesResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\ListOrganizationalUnitParentsRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\ListOrganizationalUnitParentsResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\ListOrganizationalUnitsForApplicationRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\ListOrganizationalUnitsForApplicationResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\ListOrganizationalUnitsForResourceServerRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\ListOrganizationalUnitsForResourceServerResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\ListOrganizationalUnitsRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\ListOrganizationalUnitsResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\ListRegionsResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\ListResourceServersForUserRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\ListResourceServersForUserResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\ListSynchronizationJobsRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\ListSynchronizationJobsResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\ListUserAuthnSourceMappingsRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\ListUserAuthnSourceMappingsResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\ListUsersForApplicationRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\ListUsersForApplicationResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\ListUsersForAuthorizationRuleRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\ListUsersForAuthorizationRuleResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\ListUsersForGroupRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\ListUsersForGroupResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\ListUsersForResourceServerRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\ListUsersForResourceServerResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\ListUsersRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\ListUsersResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\ObtainApplicationClientSecretRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\ObtainApplicationClientSecretResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\ObtainApplicationTokenRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\ObtainApplicationTokenResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\ObtainDomainProxyTokenRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\ObtainDomainProxyTokenResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\RemoveApplicationAccountFromUserRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\RemoveApplicationAccountFromUserResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\RemoveApplicationFromAuthorizationRuleRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\RemoveApplicationFromAuthorizationRuleResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\RemoveCustomPrivacyPoliciesFromBrandRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\RemoveCustomPrivacyPoliciesFromBrandResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\RemoveGroupFromAuthorizationRuleRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\RemoveGroupFromAuthorizationRuleResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\RemoveUserFromAuthorizationRuleRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\RemoveUserFromAuthorizationRuleResponse;
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
use AlibabaCloud\SDK\Eiam\V20211201\Models\RevokeResourceServerFromClientRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\RevokeResourceServerFromClientResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\RevokeResourceServerScopesFromClientRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\RevokeResourceServerScopesFromClientResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\RevokeResourceServerScopesFromGroupRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\RevokeResourceServerScopesFromGroupResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\RevokeResourceServerScopesFromOrganizationalUnitRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\RevokeResourceServerScopesFromOrganizationalUnitResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\RevokeResourceServerScopesFromUserRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\RevokeResourceServerScopesFromUserResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\RunSynchronizationJobRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\RunSynchronizationJobResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\SetApplicationGrantScopeRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\SetApplicationGrantScopeResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\SetApplicationProvisioningConfigRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\SetApplicationProvisioningConfigResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\SetApplicationProvisioningScopeRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\SetApplicationProvisioningScopeResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\SetApplicationProvisioningUserPrimaryOrganizationalUnitRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\SetApplicationProvisioningUserPrimaryOrganizationalUnitResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\SetApplicationResourceServerIdentifierRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\SetApplicationResourceServerIdentifierResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\SetApplicationSsoConfigRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\SetApplicationSsoConfigResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\SetDefaultDomainRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\SetDefaultDomainResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\SetForgetPasswordConfigurationRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\SetForgetPasswordConfigurationResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\SetIdentityProviderUdPullConfigurationRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\SetIdentityProviderUdPullConfigurationResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\SetLoginRedirectApplicationForBrandRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\SetLoginRedirectApplicationForBrandResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\SetPasswordComplexityConfigurationRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\SetPasswordComplexityConfigurationResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\SetPasswordExpirationConfigurationRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\SetPasswordExpirationConfigurationResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\SetPasswordHistoryConfigurationRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\SetPasswordHistoryConfigurationResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\SetPasswordInitializationConfigurationRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\SetPasswordInitializationConfigurationResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\SetPrimaryClientPublicKeyRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\SetPrimaryClientPublicKeyResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\SetUserPrimaryOrganizationalUnitRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\SetUserPrimaryOrganizationalUnitResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\UnbindUserAuthnSourceMappingRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\UnbindUserAuthnSourceMappingResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\UnlockUserRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\UnlockUserResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\UpdateApplicationAdvancedConfigRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\UpdateApplicationAdvancedConfigResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\UpdateApplicationAuthorizationTypeRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\UpdateApplicationAuthorizationTypeResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\UpdateApplicationClientSecretExpirationTimeRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\UpdateApplicationClientSecretExpirationTimeResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\UpdateApplicationDescriptionRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\UpdateApplicationDescriptionResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\UpdateApplicationFederatedCredentialDescriptionRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\UpdateApplicationFederatedCredentialDescriptionResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\UpdateApplicationFederatedCredentialRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\UpdateApplicationFederatedCredentialResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\UpdateApplicationInfoRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\UpdateApplicationInfoResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\UpdateApplicationRoleDescriptionRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\UpdateApplicationRoleDescriptionResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\UpdateApplicationRoleRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\UpdateApplicationRoleResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\UpdateApplicationSsoFormParamsRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\UpdateApplicationSsoFormParamsResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\UpdateApplicationTokenExpirationTimeRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\UpdateApplicationTokenExpirationTimeResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\UpdateAuthorizationRuleApplicationAttachmentRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\UpdateAuthorizationRuleApplicationAttachmentResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\UpdateAuthorizationRuleDescriptionRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\UpdateAuthorizationRuleDescriptionResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\UpdateAuthorizationRuleGroupAttachmentRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\UpdateAuthorizationRuleGroupAttachmentResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\UpdateAuthorizationRuleRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\UpdateAuthorizationRuleResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\UpdateAuthorizationRuleUserAttachmentRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\UpdateAuthorizationRuleUserAttachmentResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\UpdateBrandRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\UpdateBrandResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\UpdateCloudAccountDescriptionRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\UpdateCloudAccountDescriptionResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\UpdateCloudAccountRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\UpdateCloudAccountResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\UpdateCloudAccountRoleDescriptionRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\UpdateCloudAccountRoleDescriptionResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\UpdateConditionalAccessPolicyDescriptionRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\UpdateConditionalAccessPolicyDescriptionResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\UpdateConditionalAccessPolicyRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\UpdateConditionalAccessPolicyResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\UpdateCustomPrivacyPolicyRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\UpdateCustomPrivacyPolicyResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\UpdateDomainBrandRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\UpdateDomainBrandResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\UpdateDomainIcpNumberRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\UpdateDomainIcpNumberResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\UpdateFederatedCredentialProviderDescriptionRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\UpdateFederatedCredentialProviderDescriptionResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\UpdateFederatedCredentialProviderRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\UpdateFederatedCredentialProviderResponse;
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
use AlibabaCloud\SDK\Eiam\V20211201\Models\UpdateNetworkZoneDescriptionRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\UpdateNetworkZoneDescriptionResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\UpdateNetworkZoneRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\UpdateNetworkZoneResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\UpdateOrganizationalUnitDescriptionRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\UpdateOrganizationalUnitDescriptionResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\UpdateOrganizationalUnitParentIdRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\UpdateOrganizationalUnitParentIdResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\UpdateOrganizationalUnitRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\UpdateOrganizationalUnitResponse;
use AlibabaCloud\SDK\Eiam\V20211201\Models\UpdateResourceServerScopeRequest;
use AlibabaCloud\SDK\Eiam\V20211201\Models\UpdateResourceServerScopeResponse;
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
     * 在当前应用下给指定员工添加一个应用账号.
     *
     * @param request - AddApplicationAccountToUserRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddApplicationAccountToUserResponse
     *
     * @param AddApplicationAccountToUserRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return AddApplicationAccountToUserResponse
     */
    public function addApplicationAccountToUserWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->applicationId) {
            @$query['ApplicationId'] = $request->applicationId;
        }

        if (null !== $request->applicationUsername) {
            @$query['ApplicationUsername'] = $request->applicationUsername;
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
            'action' => 'AddApplicationAccountToUser',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AddApplicationAccountToUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 在当前应用下给指定员工添加一个应用账号.
     *
     * @param request - AddApplicationAccountToUserRequest
     *
     * @returns AddApplicationAccountToUserResponse
     *
     * @param AddApplicationAccountToUserRequest $request
     *
     * @return AddApplicationAccountToUserResponse
     */
    public function addApplicationAccountToUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addApplicationAccountToUserWithOptions($request, $runtime);
    }

    /**
     * 将应用添加到授权规则.
     *
     * @param request - AddApplicationToAuthorizationRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddApplicationToAuthorizationRuleResponse
     *
     * @param AddApplicationToAuthorizationRuleRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return AddApplicationToAuthorizationRuleResponse
     */
    public function addApplicationToAuthorizationRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->applicationId) {
            @$query['ApplicationId'] = $request->applicationId;
        }

        if (null !== $request->authorizationRuleId) {
            @$query['AuthorizationRuleId'] = $request->authorizationRuleId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->validityPeriod) {
            @$query['ValidityPeriod'] = $request->validityPeriod;
        }

        if (null !== $request->validityType) {
            @$query['ValidityType'] = $request->validityType;
        }

        $body = [];
        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'AddApplicationToAuthorizationRule',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AddApplicationToAuthorizationRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 将应用添加到授权规则.
     *
     * @param request - AddApplicationToAuthorizationRuleRequest
     *
     * @returns AddApplicationToAuthorizationRuleResponse
     *
     * @param AddApplicationToAuthorizationRuleRequest $request
     *
     * @return AddApplicationToAuthorizationRuleResponse
     */
    public function addApplicationToAuthorizationRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addApplicationToAuthorizationRuleWithOptions($request, $runtime);
    }

    /**
     * 添加条款到品牌.
     *
     * @param request - AddCustomPrivacyPoliciesToBrandRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddCustomPrivacyPoliciesToBrandResponse
     *
     * @param AddCustomPrivacyPoliciesToBrandRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return AddCustomPrivacyPoliciesToBrandResponse
     */
    public function addCustomPrivacyPoliciesToBrandWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->brandId) {
            @$query['BrandId'] = $request->brandId;
        }

        if (null !== $request->customPrivacyPolicyIds) {
            @$query['CustomPrivacyPolicyIds'] = $request->customPrivacyPolicyIds;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AddCustomPrivacyPoliciesToBrand',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AddCustomPrivacyPoliciesToBrandResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 添加条款到品牌.
     *
     * @param request - AddCustomPrivacyPoliciesToBrandRequest
     *
     * @returns AddCustomPrivacyPoliciesToBrandResponse
     *
     * @param AddCustomPrivacyPoliciesToBrandRequest $request
     *
     * @return AddCustomPrivacyPoliciesToBrandResponse
     */
    public function addCustomPrivacyPoliciesToBrand($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addCustomPrivacyPoliciesToBrandWithOptions($request, $runtime);
    }

    /**
     * 将组添加到授权规则.
     *
     * @param request - AddGroupToAuthorizationRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddGroupToAuthorizationRuleResponse
     *
     * @param AddGroupToAuthorizationRuleRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return AddGroupToAuthorizationRuleResponse
     */
    public function addGroupToAuthorizationRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->authorizationRuleId) {
            @$query['AuthorizationRuleId'] = $request->authorizationRuleId;
        }

        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->validityPeriod) {
            @$query['ValidityPeriod'] = $request->validityPeriod;
        }

        if (null !== $request->validityType) {
            @$query['ValidityType'] = $request->validityType;
        }

        $body = [];
        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'AddGroupToAuthorizationRule',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AddGroupToAuthorizationRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 将组添加到授权规则.
     *
     * @param request - AddGroupToAuthorizationRuleRequest
     *
     * @returns AddGroupToAuthorizationRuleResponse
     *
     * @param AddGroupToAuthorizationRuleRequest $request
     *
     * @return AddGroupToAuthorizationRuleResponse
     */
    public function addGroupToAuthorizationRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addGroupToAuthorizationRuleWithOptions($request, $runtime);
    }

    /**
     * 将账户添加到授权规则.
     *
     * @param request - AddUserToAuthorizationRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddUserToAuthorizationRuleResponse
     *
     * @param AddUserToAuthorizationRuleRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return AddUserToAuthorizationRuleResponse
     */
    public function addUserToAuthorizationRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->authorizationRuleId) {
            @$query['AuthorizationRuleId'] = $request->authorizationRuleId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->userId) {
            @$query['UserId'] = $request->userId;
        }

        if (null !== $request->validityPeriod) {
            @$query['ValidityPeriod'] = $request->validityPeriod;
        }

        if (null !== $request->validityType) {
            @$query['ValidityType'] = $request->validityType;
        }

        $body = [];
        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'AddUserToAuthorizationRule',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AddUserToAuthorizationRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 将账户添加到授权规则.
     *
     * @param request - AddUserToAuthorizationRuleRequest
     *
     * @returns AddUserToAuthorizationRuleResponse
     *
     * @param AddUserToAuthorizationRuleRequest $request
     *
     * @return AddUserToAuthorizationRuleResponse
     */
    public function addUserToAuthorizationRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addUserToAuthorizationRuleWithOptions($request, $runtime);
    }

    /**
     * Adds an Employee Identity and Access Management (EIAM) account to multiple EIAM organizations of Identity as a Service (IDaaS). If the account already exists in the organizational unit, the system directly returns a success response.
     *
     * @param request - AddUserToOrganizationalUnitsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
            'action' => 'AddUserToOrganizationalUnits',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AddUserToOrganizationalUnitsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Adds an Employee Identity and Access Management (EIAM) account to multiple EIAM organizations of Identity as a Service (IDaaS). If the account already exists in the organizational unit, the system directly returns a success response.
     *
     * @param request - AddUserToOrganizationalUnitsRequest
     *
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
     *
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
            'action' => 'AddUsersToGroup',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AddUsersToGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Adds Employee Identity and Access Management (EIAM) accounts to an EIAM group of Identity as a Service (IDaaS).
     *
     * @param request - AddUsersToGroupRequest
     *
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
     *
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

        if (null !== $request->applicationRoleId) {
            @$query['ApplicationRoleId'] = $request->applicationRoleId;
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
            'action' => 'AuthorizeApplicationToGroups',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AuthorizeApplicationToGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Grants the permissions to access an application to multiple account groups at a time in Identity as a Service (IDaaS) Employee Identity and Access Management (EIAM).
     *
     * @param request - AuthorizeApplicationToGroupsRequest
     *
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
     *
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

        if (null !== $request->applicationRoleId) {
            @$query['ApplicationRoleId'] = $request->applicationRoleId;
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
            'action' => 'AuthorizeApplicationToOrganizationalUnits',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AuthorizeApplicationToOrganizationalUnitsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Grants the access permissions on an application to multiple Employee Identity and Access Management (EIAM) organizations at a time.
     *
     * @param request - AuthorizeApplicationToOrganizationalUnitsRequest
     *
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
     *
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

        if (null !== $request->applicationRoleId) {
            @$query['ApplicationRoleId'] = $request->applicationRoleId;
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
            'action' => 'AuthorizeApplicationToUsers',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AuthorizeApplicationToUsersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Grants the access permissions on an application to multiple Employee Identity and Access Management (EIAM) accounts at a time.
     *
     * @param request - AuthorizeApplicationToUsersRequest
     *
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
     * 授权指定ResourceServer下的Scope给Client.
     *
     * @param request - AuthorizeResourceServerScopesToClientRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AuthorizeResourceServerScopesToClientResponse
     *
     * @param AuthorizeResourceServerScopesToClientRequest $request
     * @param RuntimeOptions                               $runtime
     *
     * @return AuthorizeResourceServerScopesToClientResponse
     */
    public function authorizeResourceServerScopesToClientWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientApplicationId) {
            @$query['ClientApplicationId'] = $request->clientApplicationId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->resourceServerApplicationId) {
            @$query['ResourceServerApplicationId'] = $request->resourceServerApplicationId;
        }

        if (null !== $request->resourceServerScopeIds) {
            @$query['ResourceServerScopeIds'] = $request->resourceServerScopeIds;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AuthorizeResourceServerScopesToClient',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AuthorizeResourceServerScopesToClientResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 授权指定ResourceServer下的Scope给Client.
     *
     * @param request - AuthorizeResourceServerScopesToClientRequest
     *
     * @returns AuthorizeResourceServerScopesToClientResponse
     *
     * @param AuthorizeResourceServerScopesToClientRequest $request
     *
     * @return AuthorizeResourceServerScopesToClientResponse
     */
    public function authorizeResourceServerScopesToClient($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->authorizeResourceServerScopesToClientWithOptions($request, $runtime);
    }

    /**
     * 授予组ResourceServerScope权限.
     *
     * @param request - AuthorizeResourceServerScopesToGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AuthorizeResourceServerScopesToGroupResponse
     *
     * @param AuthorizeResourceServerScopesToGroupRequest $request
     * @param RuntimeOptions                              $runtime
     *
     * @return AuthorizeResourceServerScopesToGroupResponse
     */
    public function authorizeResourceServerScopesToGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->applicationId) {
            @$query['ApplicationId'] = $request->applicationId;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->resourceServerScopeIds) {
            @$query['ResourceServerScopeIds'] = $request->resourceServerScopeIds;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AuthorizeResourceServerScopesToGroup',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AuthorizeResourceServerScopesToGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 授予组ResourceServerScope权限.
     *
     * @param request - AuthorizeResourceServerScopesToGroupRequest
     *
     * @returns AuthorizeResourceServerScopesToGroupResponse
     *
     * @param AuthorizeResourceServerScopesToGroupRequest $request
     *
     * @return AuthorizeResourceServerScopesToGroupResponse
     */
    public function authorizeResourceServerScopesToGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->authorizeResourceServerScopesToGroupWithOptions($request, $runtime);
    }

    /**
     * 授予组织ResourceServerScope权限.
     *
     * @param request - AuthorizeResourceServerScopesToOrganizationalUnitRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AuthorizeResourceServerScopesToOrganizationalUnitResponse
     *
     * @param AuthorizeResourceServerScopesToOrganizationalUnitRequest $request
     * @param RuntimeOptions                                           $runtime
     *
     * @return AuthorizeResourceServerScopesToOrganizationalUnitResponse
     */
    public function authorizeResourceServerScopesToOrganizationalUnitWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->applicationId) {
            @$query['ApplicationId'] = $request->applicationId;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->organizationalUnitId) {
            @$query['OrganizationalUnitId'] = $request->organizationalUnitId;
        }

        if (null !== $request->resourceServerScopeIds) {
            @$query['ResourceServerScopeIds'] = $request->resourceServerScopeIds;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AuthorizeResourceServerScopesToOrganizationalUnit',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AuthorizeResourceServerScopesToOrganizationalUnitResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 授予组织ResourceServerScope权限.
     *
     * @param request - AuthorizeResourceServerScopesToOrganizationalUnitRequest
     *
     * @returns AuthorizeResourceServerScopesToOrganizationalUnitResponse
     *
     * @param AuthorizeResourceServerScopesToOrganizationalUnitRequest $request
     *
     * @return AuthorizeResourceServerScopesToOrganizationalUnitResponse
     */
    public function authorizeResourceServerScopesToOrganizationalUnit($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->authorizeResourceServerScopesToOrganizationalUnitWithOptions($request, $runtime);
    }

    /**
     * 授予用户ResourceServerScope权限.
     *
     * @param request - AuthorizeResourceServerScopesToUserRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AuthorizeResourceServerScopesToUserResponse
     *
     * @param AuthorizeResourceServerScopesToUserRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return AuthorizeResourceServerScopesToUserResponse
     */
    public function authorizeResourceServerScopesToUserWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->applicationId) {
            @$query['ApplicationId'] = $request->applicationId;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->resourceServerScopeIds) {
            @$query['ResourceServerScopeIds'] = $request->resourceServerScopeIds;
        }

        if (null !== $request->userId) {
            @$query['UserId'] = $request->userId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AuthorizeResourceServerScopesToUser',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AuthorizeResourceServerScopesToUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 授予用户ResourceServerScope权限.
     *
     * @param request - AuthorizeResourceServerScopesToUserRequest
     *
     * @returns AuthorizeResourceServerScopesToUserResponse
     *
     * @param AuthorizeResourceServerScopesToUserRequest $request
     *
     * @return AuthorizeResourceServerScopesToUserResponse
     */
    public function authorizeResourceServerScopesToUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->authorizeResourceServerScopesToUserWithOptions($request, $runtime);
    }

    /**
     * 授权指定ResourceServer给Client.
     *
     * @param request - AuthorizeResourceServerToClientRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AuthorizeResourceServerToClientResponse
     *
     * @param AuthorizeResourceServerToClientRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return AuthorizeResourceServerToClientResponse
     */
    public function authorizeResourceServerToClientWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientApplicationId) {
            @$query['ClientApplicationId'] = $request->clientApplicationId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->resourceServerApplicationId) {
            @$query['ResourceServerApplicationId'] = $request->resourceServerApplicationId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AuthorizeResourceServerToClient',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AuthorizeResourceServerToClientResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 授权指定ResourceServer给Client.
     *
     * @param request - AuthorizeResourceServerToClientRequest
     *
     * @returns AuthorizeResourceServerToClientResponse
     *
     * @param AuthorizeResourceServerToClientRequest $request
     *
     * @return AuthorizeResourceServerToClientResponse
     */
    public function authorizeResourceServerToClient($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->authorizeResourceServerToClientWithOptions($request, $runtime);
    }

    /**
     * 绑定三方登录账户.
     *
     * @param request - BindUserAuthnSourceMappingRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BindUserAuthnSourceMappingResponse
     *
     * @param BindUserAuthnSourceMappingRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return BindUserAuthnSourceMappingResponse
     */
    public function bindUserAuthnSourceMappingWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->identityProviderId) {
            @$query['IdentityProviderId'] = $request->identityProviderId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->userExternalId) {
            @$query['UserExternalId'] = $request->userExternalId;
        }

        if (null !== $request->userId) {
            @$query['UserId'] = $request->userId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'BindUserAuthnSourceMapping',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return BindUserAuthnSourceMappingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 绑定三方登录账户.
     *
     * @param request - BindUserAuthnSourceMappingRequest
     *
     * @returns BindUserAuthnSourceMappingResponse
     *
     * @param BindUserAuthnSourceMappingRequest $request
     *
     * @return BindUserAuthnSourceMappingResponse
     */
    public function bindUserAuthnSourceMapping($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->bindUserAuthnSourceMappingWithOptions($request, $runtime);
    }

    /**
     * 检查应用同步主组织是否在应用同步范围.
     *
     * @param request - CheckApplicationProvisioningUserPrimaryOrganizationalUnitRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CheckApplicationProvisioningUserPrimaryOrganizationalUnitResponse
     *
     * @param CheckApplicationProvisioningUserPrimaryOrganizationalUnitRequest $request
     * @param RuntimeOptions                                                   $runtime
     *
     * @return CheckApplicationProvisioningUserPrimaryOrganizationalUnitResponse
     */
    public function checkApplicationProvisioningUserPrimaryOrganizationalUnitWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->applicationId) {
            @$query['ApplicationId'] = $request->applicationId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->userPrimaryOrganizationalUnitId) {
            @$query['UserPrimaryOrganizationalUnitId'] = $request->userPrimaryOrganizationalUnitId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CheckApplicationProvisioningUserPrimaryOrganizationalUnit',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CheckApplicationProvisioningUserPrimaryOrganizationalUnitResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 检查应用同步主组织是否在应用同步范围.
     *
     * @param request - CheckApplicationProvisioningUserPrimaryOrganizationalUnitRequest
     *
     * @returns CheckApplicationProvisioningUserPrimaryOrganizationalUnitResponse
     *
     * @param CheckApplicationProvisioningUserPrimaryOrganizationalUnitRequest $request
     *
     * @return CheckApplicationProvisioningUserPrimaryOrganizationalUnitResponse
     */
    public function checkApplicationProvisioningUserPrimaryOrganizationalUnit($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkApplicationProvisioningUserPrimaryOrganizationalUnitWithOptions($request, $runtime);
    }

    /**
     * 实例删除检查.
     *
     * @param request - CheckInstanceForDeleteRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CheckInstanceForDeleteResponse
     *
     * @param CheckInstanceForDeleteRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return CheckInstanceForDeleteResponse
     */
    public function checkInstanceForDeleteWithOptions($request, $runtime)
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
            'action' => 'CheckInstanceForDelete',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CheckInstanceForDeleteResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 实例删除检查.
     *
     * @param request - CheckInstanceForDeleteRequest
     *
     * @returns CheckInstanceForDeleteResponse
     *
     * @param CheckInstanceForDeleteRequest $request
     *
     * @return CheckInstanceForDeleteResponse
     */
    public function checkInstanceForDelete($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkInstanceForDeleteWithOptions($request, $runtime);
    }

    /**
     * 判断实例是否具有某个模块的功能.
     *
     * @param request - CheckInstanceModuleStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CheckInstanceModuleStatusResponse
     *
     * @param CheckInstanceModuleStatusRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return CheckInstanceModuleStatusResponse
     */
    public function checkInstanceModuleStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->featureKey) {
            @$query['FeatureKey'] = $request->featureKey;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->moduleKey) {
            @$query['ModuleKey'] = $request->moduleKey;
        }

        if (null !== $request->subFeatureKey) {
            @$query['SubFeatureKey'] = $request->subFeatureKey;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CheckInstanceModuleStatus',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CheckInstanceModuleStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 判断实例是否具有某个模块的功能.
     *
     * @param request - CheckInstanceModuleStatusRequest
     *
     * @returns CheckInstanceModuleStatusResponse
     *
     * @param CheckInstanceModuleStatusRequest $request
     *
     * @return CheckInstanceModuleStatusResponse
     */
    public function checkInstanceModuleStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkInstanceModuleStatusWithOptions($request, $runtime);
    }

    /**
     * Adds an application to an Enterprise Identity Access Management (EIAM) instance of Identity as a Service (IDaaS).
     *
     * @remarks
     * IDaaS EIAM supports the following two standard single sign-on (SSO) protocols for adding applications: SAML 2.0 and OIDC. You can select an SSO protocol based on your business requirements when you add an application. You cannot change the SSO protocol that you selected after the application is added.
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
            'action' => 'CreateApplication',
            'version' => '2021-12-01',
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
     * Adds an application to an Enterprise Identity Access Management (EIAM) instance of Identity as a Service (IDaaS).
     *
     * @remarks
     * IDaaS EIAM supports the following two standard single sign-on (SSO) protocols for adding applications: SAML 2.0 and OIDC. You can select an SSO protocol based on your business requirements when you add an application. You cannot change the SSO protocol that you selected after the application is added.
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
     * Creates a client key for an Employee Identity and Access Management (EIAM) application. An EIAM application can have up to two client keys.
     *
     * @param request - CreateApplicationClientSecretRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
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

        if (null !== $request->expirationTime) {
            @$query['ExpirationTime'] = $request->expirationTime;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateApplicationClientSecret',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateApplicationClientSecretResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a client key for an Employee Identity and Access Management (EIAM) application. An EIAM application can have up to two client keys.
     *
     * @param request - CreateApplicationClientSecretRequest
     *
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
     * 创建应用联邦凭证
     *
     * @param request - CreateApplicationFederatedCredentialRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateApplicationFederatedCredentialResponse
     *
     * @param CreateApplicationFederatedCredentialRequest $request
     * @param RuntimeOptions                              $runtime
     *
     * @return CreateApplicationFederatedCredentialResponse
     */
    public function createApplicationFederatedCredentialWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->applicationFederatedCredentialName) {
            @$query['ApplicationFederatedCredentialName'] = $request->applicationFederatedCredentialName;
        }

        if (null !== $request->applicationFederatedCredentialType) {
            @$query['ApplicationFederatedCredentialType'] = $request->applicationFederatedCredentialType;
        }

        if (null !== $request->applicationId) {
            @$query['ApplicationId'] = $request->applicationId;
        }

        if (null !== $request->attributeMappings) {
            @$query['AttributeMappings'] = $request->attributeMappings;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->federatedCredentialProviderId) {
            @$query['FederatedCredentialProviderId'] = $request->federatedCredentialProviderId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->verificationCondition) {
            @$query['VerificationCondition'] = $request->verificationCondition;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateApplicationFederatedCredential',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateApplicationFederatedCredentialResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建应用联邦凭证
     *
     * @param request - CreateApplicationFederatedCredentialRequest
     *
     * @returns CreateApplicationFederatedCredentialResponse
     *
     * @param CreateApplicationFederatedCredentialRequest $request
     *
     * @return CreateApplicationFederatedCredentialResponse
     */
    public function createApplicationFederatedCredential($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createApplicationFederatedCredentialWithOptions($request, $runtime);
    }

    /**
     * 创建应用角色.
     *
     * @param request - CreateApplicationRoleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateApplicationRoleResponse
     *
     * @param CreateApplicationRoleRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return CreateApplicationRoleResponse
     */
    public function createApplicationRoleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->applicationId) {
            @$query['ApplicationId'] = $request->applicationId;
        }

        if (null !== $request->applicationRoleName) {
            @$query['ApplicationRoleName'] = $request->applicationRoleName;
        }

        if (null !== $request->applicationRoleValue) {
            @$query['ApplicationRoleValue'] = $request->applicationRoleValue;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateApplicationRole',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateApplicationRoleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建应用角色.
     *
     * @param request - CreateApplicationRoleRequest
     *
     * @returns CreateApplicationRoleResponse
     *
     * @param CreateApplicationRoleRequest $request
     *
     * @return CreateApplicationRoleResponse
     */
    public function createApplicationRole($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createApplicationRoleWithOptions($request, $runtime);
    }

    /**
     * 创建应用Token.
     *
     * @param request - CreateApplicationTokenRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateApplicationTokenResponse
     *
     * @param CreateApplicationTokenRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return CreateApplicationTokenResponse
     */
    public function createApplicationTokenWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->applicationId) {
            @$query['ApplicationId'] = $request->applicationId;
        }

        if (null !== $request->applicationTokenType) {
            @$query['ApplicationTokenType'] = $request->applicationTokenType;
        }

        if (null !== $request->expirationTime) {
            @$query['ExpirationTime'] = $request->expirationTime;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateApplicationToken',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateApplicationTokenResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建应用Token.
     *
     * @param request - CreateApplicationTokenRequest
     *
     * @returns CreateApplicationTokenResponse
     *
     * @param CreateApplicationTokenRequest $request
     *
     * @return CreateApplicationTokenResponse
     */
    public function createApplicationToken($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createApplicationTokenWithOptions($request, $runtime);
    }

    /**
     * 创建授权资源.
     *
     * @param request - CreateAuthorizationResourceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateAuthorizationResourceResponse
     *
     * @param CreateAuthorizationResourceRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return CreateAuthorizationResourceResponse
     */
    public function createAuthorizationResourceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->authorizationResourceEntityId) {
            @$query['AuthorizationResourceEntityId'] = $request->authorizationResourceEntityId;
        }

        if (null !== $request->authorizationResourceEntityType) {
            @$query['AuthorizationResourceEntityType'] = $request->authorizationResourceEntityType;
        }

        if (null !== $request->authorizationRuleId) {
            @$query['AuthorizationRuleId'] = $request->authorizationRuleId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $body = [];
        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateAuthorizationResource',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateAuthorizationResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建授权资源.
     *
     * @param request - CreateAuthorizationResourceRequest
     *
     * @returns CreateAuthorizationResourceResponse
     *
     * @param CreateAuthorizationResourceRequest $request
     *
     * @return CreateAuthorizationResourceResponse
     */
    public function createAuthorizationResource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAuthorizationResourceWithOptions($request, $runtime);
    }

    /**
     * 创建授权规则.
     *
     * @param request - CreateAuthorizationRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateAuthorizationRuleResponse
     *
     * @param CreateAuthorizationRuleRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return CreateAuthorizationRuleResponse
     */
    public function createAuthorizationRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->authorizationResourceScope) {
            @$query['AuthorizationResourceScope'] = $request->authorizationResourceScope;
        }

        if (null !== $request->authorizationRuleName) {
            @$query['AuthorizationRuleName'] = $request->authorizationRuleName;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->projectId) {
            @$query['ProjectId'] = $request->projectId;
        }

        $body = [];
        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateAuthorizationRule',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateAuthorizationRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建授权规则.
     *
     * @param request - CreateAuthorizationRuleRequest
     *
     * @returns CreateAuthorizationRuleResponse
     *
     * @param CreateAuthorizationRuleRequest $request
     *
     * @return CreateAuthorizationRuleResponse
     */
    public function createAuthorizationRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAuthorizationRuleWithOptions($request, $runtime);
    }

    /**
     * 创建品牌.
     *
     * @param request - CreateBrandRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateBrandResponse
     *
     * @param CreateBrandRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return CreateBrandResponse
     */
    public function createBrandWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->brandName) {
            @$query['BrandName'] = $request->brandName;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateBrand',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateBrandResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建品牌.
     *
     * @param request - CreateBrandRequest
     *
     * @returns CreateBrandResponse
     *
     * @param CreateBrandRequest $request
     *
     * @return CreateBrandResponse
     */
    public function createBrand($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createBrandWithOptions($request, $runtime);
    }

    /**
     * 创建应用ClientPublicKey.
     *
     * @param request - CreateClientPublicKeyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateClientPublicKeyResponse
     *
     * @param CreateClientPublicKeyRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return CreateClientPublicKeyResponse
     */
    public function createClientPublicKeyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->algorithmType) {
            @$query['AlgorithmType'] = $request->algorithmType;
        }

        if (null !== $request->applicationId) {
            @$query['ApplicationId'] = $request->applicationId;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->publicKey) {
            @$query['PublicKey'] = $request->publicKey;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateClientPublicKey',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateClientPublicKeyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建应用ClientPublicKey.
     *
     * @param request - CreateClientPublicKeyRequest
     *
     * @returns CreateClientPublicKeyResponse
     *
     * @param CreateClientPublicKeyRequest $request
     *
     * @return CreateClientPublicKeyResponse
     */
    public function createClientPublicKey($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createClientPublicKeyWithOptions($request, $runtime);
    }

    /**
     * 创建云账号.
     *
     * @param request - CreateCloudAccountRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateCloudAccountResponse
     *
     * @param CreateCloudAccountRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return CreateCloudAccountResponse
     */
    public function createCloudAccountWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->cloudAccountExternalId) {
            @$query['CloudAccountExternalId'] = $request->cloudAccountExternalId;
        }

        if (null !== $request->cloudAccountName) {
            @$query['CloudAccountName'] = $request->cloudAccountName;
        }

        if (null !== $request->cloudAccountProviderName) {
            @$query['CloudAccountProviderName'] = $request->cloudAccountProviderName;
        }

        if (null !== $request->cloudAccountVendorType) {
            @$query['CloudAccountVendorType'] = $request->cloudAccountVendorType;
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
            'action' => 'CreateCloudAccount',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateCloudAccountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建云账号.
     *
     * @param request - CreateCloudAccountRequest
     *
     * @returns CreateCloudAccountResponse
     *
     * @param CreateCloudAccountRequest $request
     *
     * @return CreateCloudAccountResponse
     */
    public function createCloudAccount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createCloudAccountWithOptions($request, $runtime);
    }

    /**
     * 创建云角色.
     *
     * @param request - CreateCloudAccountRoleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateCloudAccountRoleResponse
     *
     * @param CreateCloudAccountRoleRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return CreateCloudAccountRoleResponse
     */
    public function createCloudAccountRoleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->cloudAccountId) {
            @$query['CloudAccountId'] = $request->cloudAccountId;
        }

        if (null !== $request->cloudAccountRoleName) {
            @$query['CloudAccountRoleName'] = $request->cloudAccountRoleName;
        }

        if (null !== $request->cloudAccountRoleType) {
            @$query['CloudAccountRoleType'] = $request->cloudAccountRoleType;
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
            'action' => 'CreateCloudAccountRole',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateCloudAccountRoleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建云角色.
     *
     * @param request - CreateCloudAccountRoleRequest
     *
     * @returns CreateCloudAccountRoleResponse
     *
     * @param CreateCloudAccountRoleRequest $request
     *
     * @return CreateCloudAccountRoleResponse
     */
    public function createCloudAccountRole($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createCloudAccountRoleWithOptions($request, $runtime);
    }

    /**
     * Create Conditional Access Policy.
     *
     * @remarks
     * Create Conditional Access Policy
     *
     * @param request - CreateConditionalAccessPolicyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateConditionalAccessPolicyResponse
     *
     * @param CreateConditionalAccessPolicyRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return CreateConditionalAccessPolicyResponse
     */
    public function createConditionalAccessPolicyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->conditionalAccessPolicyName) {
            @$query['ConditionalAccessPolicyName'] = $request->conditionalAccessPolicyName;
        }

        if (null !== $request->conditionalAccessPolicyType) {
            @$query['ConditionalAccessPolicyType'] = $request->conditionalAccessPolicyType;
        }

        if (null !== $request->conditionsConfig) {
            @$query['ConditionsConfig'] = $request->conditionsConfig;
        }

        if (null !== $request->decisionConfig) {
            @$query['DecisionConfig'] = $request->decisionConfig;
        }

        if (null !== $request->decisionType) {
            @$query['DecisionType'] = $request->decisionType;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->evaluateAt) {
            @$query['EvaluateAt'] = $request->evaluateAt;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->priority) {
            @$query['Priority'] = $request->priority;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateConditionalAccessPolicy',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateConditionalAccessPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Create Conditional Access Policy.
     *
     * @remarks
     * Create Conditional Access Policy
     *
     * @param request - CreateConditionalAccessPolicyRequest
     *
     * @returns CreateConditionalAccessPolicyResponse
     *
     * @param CreateConditionalAccessPolicyRequest $request
     *
     * @return CreateConditionalAccessPolicyResponse
     */
    public function createConditionalAccessPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createConditionalAccessPolicyWithOptions($request, $runtime);
    }

    /**
     * 创建扩展字段.
     *
     * @param request - CreateCustomFieldRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateCustomFieldResponse
     *
     * @param CreateCustomFieldRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CreateCustomFieldResponse
     */
    public function createCustomFieldWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->defaultValue) {
            @$query['DefaultValue'] = $request->defaultValue;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->encrypted) {
            @$query['Encrypted'] = $request->encrypted;
        }

        if (null !== $request->entityType) {
            @$query['EntityType'] = $request->entityType;
        }

        if (null !== $request->fieldDataConfig) {
            @$query['FieldDataConfig'] = $request->fieldDataConfig;
        }

        if (null !== $request->fieldDataType) {
            @$query['FieldDataType'] = $request->fieldDataType;
        }

        if (null !== $request->fieldDisplayName) {
            @$query['FieldDisplayName'] = $request->fieldDisplayName;
        }

        if (null !== $request->fieldDisplayType) {
            @$query['FieldDisplayType'] = $request->fieldDisplayType;
        }

        if (null !== $request->fieldName) {
            @$query['FieldName'] = $request->fieldName;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->required) {
            @$query['Required'] = $request->required;
        }

        if (null !== $request->unique) {
            @$query['Unique'] = $request->unique;
        }

        if (null !== $request->userPermission) {
            @$query['UserPermission'] = $request->userPermission;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateCustomField',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateCustomFieldResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建扩展字段.
     *
     * @param request - CreateCustomFieldRequest
     *
     * @returns CreateCustomFieldResponse
     *
     * @param CreateCustomFieldRequest $request
     *
     * @return CreateCustomFieldResponse
     */
    public function createCustomField($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createCustomFieldWithOptions($request, $runtime);
    }

    /**
     * 创建自定义条款.
     *
     * @param request - CreateCustomPrivacyPolicyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateCustomPrivacyPolicyResponse
     *
     * @param CreateCustomPrivacyPolicyRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return CreateCustomPrivacyPolicyResponse
     */
    public function createCustomPrivacyPolicyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->customPrivacyPolicyContents) {
            @$query['CustomPrivacyPolicyContents'] = $request->customPrivacyPolicyContents;
        }

        if (null !== $request->customPrivacyPolicyName) {
            @$query['CustomPrivacyPolicyName'] = $request->customPrivacyPolicyName;
        }

        if (null !== $request->defaultLanguageCode) {
            @$query['DefaultLanguageCode'] = $request->defaultLanguageCode;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        if (null !== $request->userConsentType) {
            @$query['UserConsentType'] = $request->userConsentType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateCustomPrivacyPolicy',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateCustomPrivacyPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建自定义条款.
     *
     * @param request - CreateCustomPrivacyPolicyRequest
     *
     * @returns CreateCustomPrivacyPolicyResponse
     *
     * @param CreateCustomPrivacyPolicyRequest $request
     *
     * @return CreateCustomPrivacyPolicyResponse
     */
    public function createCustomPrivacyPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createCustomPrivacyPolicyWithOptions($request, $runtime);
    }

    /**
     * Creates a custom domain name for an Employee Identity and Access Management (EIAM) instance.
     *
     * @param request - CreateDomainRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
            'action' => 'CreateDomain',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a custom domain name for an Employee Identity and Access Management (EIAM) instance.
     *
     * @param request - CreateDomainRequest
     *
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
     * Creates a proxy token for a domain name of an Employee Identity and Access Management (EIAM) instance.
     *
     * @param request - CreateDomainProxyTokenRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
            'action' => 'CreateDomainProxyToken',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateDomainProxyTokenResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a proxy token for a domain name of an Employee Identity and Access Management (EIAM) instance.
     *
     * @param request - CreateDomainProxyTokenRequest
     *
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
     * 创建联邦凭证提供方.
     *
     * @param request - CreateFederatedCredentialProviderRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateFederatedCredentialProviderResponse
     *
     * @param CreateFederatedCredentialProviderRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return CreateFederatedCredentialProviderResponse
     */
    public function createFederatedCredentialProviderWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->federatedCredentialProviderName) {
            @$query['FederatedCredentialProviderName'] = $request->federatedCredentialProviderName;
        }

        if (null !== $request->federatedCredentialProviderType) {
            @$query['FederatedCredentialProviderType'] = $request->federatedCredentialProviderType;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->networkAccessEndpointId) {
            @$query['NetworkAccessEndpointId'] = $request->networkAccessEndpointId;
        }

        if (null !== $request->oidcProviderConfig) {
            @$query['OidcProviderConfig'] = $request->oidcProviderConfig;
        }

        if (null !== $request->pkcs7ProviderConfig) {
            @$query['Pkcs7ProviderConfig'] = $request->pkcs7ProviderConfig;
        }

        if (null !== $request->privateCaProviderConfig) {
            @$query['PrivateCaProviderConfig'] = $request->privateCaProviderConfig;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateFederatedCredentialProvider',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateFederatedCredentialProviderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建联邦凭证提供方.
     *
     * @param request - CreateFederatedCredentialProviderRequest
     *
     * @returns CreateFederatedCredentialProviderResponse
     *
     * @param CreateFederatedCredentialProviderRequest $request
     *
     * @return CreateFederatedCredentialProviderResponse
     */
    public function createFederatedCredentialProvider($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createFederatedCredentialProviderWithOptions($request, $runtime);
    }

    /**
     * Creates an account group in Identity as a Service (IDaaS) Employee Identity and Access Management (EIAM).
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
            'action' => 'CreateGroup',
            'version' => '2021-12-01',
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
     * Creates an account group in Identity as a Service (IDaaS) Employee Identity and Access Management (EIAM).
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
     * Create Identity Provider.
     *
     * @param request - CreateIdentityProviderRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
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

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
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
            'action' => 'CreateIdentityProvider',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateIdentityProviderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Create Identity Provider.
     *
     * @param request - CreateIdentityProviderRequest
     *
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
     * 创建IdP状态检查任务
     *
     * @param request - CreateIdentityProviderStatusCheckJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateIdentityProviderStatusCheckJobResponse
     *
     * @param CreateIdentityProviderStatusCheckJobRequest $request
     * @param RuntimeOptions                              $runtime
     *
     * @return CreateIdentityProviderStatusCheckJobResponse
     */
    public function createIdentityProviderStatusCheckJobWithOptions($request, $runtime)
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
            'action' => 'CreateIdentityProviderStatusCheckJob',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateIdentityProviderStatusCheckJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建IdP状态检查任务
     *
     * @param request - CreateIdentityProviderStatusCheckJobRequest
     *
     * @returns CreateIdentityProviderStatusCheckJobResponse
     *
     * @param CreateIdentityProviderStatusCheckJobRequest $request
     *
     * @return CreateIdentityProviderStatusCheckJobResponse
     */
    public function createIdentityProviderStatusCheckJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createIdentityProviderStatusCheckJobWithOptions($request, $runtime);
    }

    /**
     * Creates an instance based on which all capabilities of Identity as a Service (IDaaS) Enterprise Identity and Access Management (EIAM) are provided.
     *
     * @param request - CreateInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
            'action' => 'CreateInstance',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates an instance based on which all capabilities of Identity as a Service (IDaaS) Enterprise Identity and Access Management (EIAM) are provided.
     *
     * @param request - CreateInstanceRequest
     *
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
     * 为实例创建试用版 License.
     *
     * @param request - CreateInstanceTrialLicenseRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateInstanceTrialLicenseResponse
     *
     * @param CreateInstanceTrialLicenseRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return CreateInstanceTrialLicenseResponse
     */
    public function createInstanceTrialLicenseWithOptions($request, $runtime)
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
            'action' => 'CreateInstanceTrialLicense',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateInstanceTrialLicenseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 为实例创建试用版 License.
     *
     * @param request - CreateInstanceTrialLicenseRequest
     *
     * @returns CreateInstanceTrialLicenseResponse
     *
     * @param CreateInstanceTrialLicenseRequest $request
     *
     * @return CreateInstanceTrialLicenseResponse
     */
    public function createInstanceTrialLicense($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createInstanceTrialLicenseWithOptions($request, $runtime);
    }

    /**
     * Creates a dedicated endpoint.
     *
     * @param request - CreateNetworkAccessEndpointRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
            'action' => 'CreateNetworkAccessEndpoint',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateNetworkAccessEndpointResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a dedicated endpoint.
     *
     * @param request - CreateNetworkAccessEndpointRequest
     *
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
     * 创建网络区域对象
     *
     * @param request - CreateNetworkZoneRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateNetworkZoneResponse
     *
     * @param CreateNetworkZoneRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CreateNetworkZoneResponse
     */
    public function createNetworkZoneWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->ipv4Cidrs) {
            @$query['Ipv4Cidrs'] = $request->ipv4Cidrs;
        }

        if (null !== $request->ipv6Cidrs) {
            @$query['Ipv6Cidrs'] = $request->ipv6Cidrs;
        }

        if (null !== $request->networkZoneName) {
            @$query['NetworkZoneName'] = $request->networkZoneName;
        }

        if (null !== $request->networkZoneType) {
            @$query['NetworkZoneType'] = $request->networkZoneType;
        }

        if (null !== $request->vpcId) {
            @$query['VpcId'] = $request->vpcId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateNetworkZone',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateNetworkZoneResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建网络区域对象
     *
     * @param request - CreateNetworkZoneRequest
     *
     * @returns CreateNetworkZoneResponse
     *
     * @param CreateNetworkZoneRequest $request
     *
     * @return CreateNetworkZoneResponse
     */
    public function createNetworkZone($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createNetworkZoneWithOptions($request, $runtime);
    }

    /**
     * Creates an organization in Identity as a Service (IDaaS) Employee Identity and Access Management (EIAM).
     *
     * @param request - CreateOrganizationalUnitRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
            'action' => 'CreateOrganizationalUnit',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateOrganizationalUnitResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates an organization in Identity as a Service (IDaaS) Employee Identity and Access Management (EIAM).
     *
     * @param request - CreateOrganizationalUnitRequest
     *
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
     * 创建指定ResourceServer下的Scope.
     *
     * @param request - CreateResourceServerScopeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateResourceServerScopeResponse
     *
     * @param CreateResourceServerScopeRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return CreateResourceServerScopeResponse
     */
    public function createResourceServerScopeWithOptions($request, $runtime)
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

        if (null !== $request->resourceServerScopeName) {
            @$query['ResourceServerScopeName'] = $request->resourceServerScopeName;
        }

        if (null !== $request->resourceServerScopeType) {
            @$query['ResourceServerScopeType'] = $request->resourceServerScopeType;
        }

        if (null !== $request->resourceServerScopeValue) {
            @$query['ResourceServerScopeValue'] = $request->resourceServerScopeValue;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateResourceServerScope',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateResourceServerScopeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建指定ResourceServer下的Scope.
     *
     * @param request - CreateResourceServerScopeRequest
     *
     * @returns CreateResourceServerScopeResponse
     *
     * @param CreateResourceServerScopeRequest $request
     *
     * @return CreateResourceServerScopeResponse
     */
    public function createResourceServerScope($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createResourceServerScopeWithOptions($request, $runtime);
    }

    /**
     * Creates an account in an Identity as a Service (IDaaS) Enterprise Identity Access Management (EIAM) instance.
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
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

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
            'action' => 'CreateUser',
            'version' => '2021-12-01',
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
     * Creates an account in an Identity as a Service (IDaaS) Enterprise Identity Access Management (EIAM) instance.
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
     * Deletes an Employee Identity and Access Management (EIAM) application.
     *
     * @remarks
     * Make sure that the EIAM application that you want to delete is not used before you delete the EIAM application. After you delete the EIAM application, all configurations are deleted and cannot be restored.
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
            'action' => 'DeleteApplication',
            'version' => '2021-12-01',
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
     * Deletes an Employee Identity and Access Management (EIAM) application.
     *
     * @remarks
     * Make sure that the EIAM application that you want to delete is not used before you delete the EIAM application. After you delete the EIAM application, all configurations are deleted and cannot be restored.
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
     * Deletes a client key for an Employee Identity and Access Management (EIAM) application.
     *
     * @param request - DeleteApplicationClientSecretRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
            'action' => 'DeleteApplicationClientSecret',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteApplicationClientSecretResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a client key for an Employee Identity and Access Management (EIAM) application.
     *
     * @param request - DeleteApplicationClientSecretRequest
     *
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
     * 删除应用联邦凭证
     *
     * @param request - DeleteApplicationFederatedCredentialRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteApplicationFederatedCredentialResponse
     *
     * @param DeleteApplicationFederatedCredentialRequest $request
     * @param RuntimeOptions                              $runtime
     *
     * @return DeleteApplicationFederatedCredentialResponse
     */
    public function deleteApplicationFederatedCredentialWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->applicationFederatedCredentialId) {
            @$query['ApplicationFederatedCredentialId'] = $request->applicationFederatedCredentialId;
        }

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
            'action' => 'DeleteApplicationFederatedCredential',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteApplicationFederatedCredentialResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除应用联邦凭证
     *
     * @param request - DeleteApplicationFederatedCredentialRequest
     *
     * @returns DeleteApplicationFederatedCredentialResponse
     *
     * @param DeleteApplicationFederatedCredentialRequest $request
     *
     * @return DeleteApplicationFederatedCredentialResponse
     */
    public function deleteApplicationFederatedCredential($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteApplicationFederatedCredentialWithOptions($request, $runtime);
    }

    /**
     * 删除应用角色.
     *
     * @param request - DeleteApplicationRoleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteApplicationRoleResponse
     *
     * @param DeleteApplicationRoleRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DeleteApplicationRoleResponse
     */
    public function deleteApplicationRoleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->applicationId) {
            @$query['ApplicationId'] = $request->applicationId;
        }

        if (null !== $request->applicationRoleId) {
            @$query['ApplicationRoleId'] = $request->applicationRoleId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteApplicationRole',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteApplicationRoleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除应用角色.
     *
     * @param request - DeleteApplicationRoleRequest
     *
     * @returns DeleteApplicationRoleResponse
     *
     * @param DeleteApplicationRoleRequest $request
     *
     * @return DeleteApplicationRoleResponse
     */
    public function deleteApplicationRole($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteApplicationRoleWithOptions($request, $runtime);
    }

    /**
     * 删除ApplicationToken.
     *
     * @param request - DeleteApplicationTokenRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteApplicationTokenResponse
     *
     * @param DeleteApplicationTokenRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DeleteApplicationTokenResponse
     */
    public function deleteApplicationTokenWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->applicationId) {
            @$query['ApplicationId'] = $request->applicationId;
        }

        if (null !== $request->applicationTokenId) {
            @$query['ApplicationTokenId'] = $request->applicationTokenId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteApplicationToken',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteApplicationTokenResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除ApplicationToken.
     *
     * @param request - DeleteApplicationTokenRequest
     *
     * @returns DeleteApplicationTokenResponse
     *
     * @param DeleteApplicationTokenRequest $request
     *
     * @return DeleteApplicationTokenResponse
     */
    public function deleteApplicationToken($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteApplicationTokenWithOptions($request, $runtime);
    }

    /**
     * 删除授权资源.
     *
     * @param request - DeleteAuthorizationResourceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteAuthorizationResourceResponse
     *
     * @param DeleteAuthorizationResourceRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DeleteAuthorizationResourceResponse
     */
    public function deleteAuthorizationResourceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->authorizationResourceId) {
            @$query['AuthorizationResourceId'] = $request->authorizationResourceId;
        }

        if (null !== $request->authorizationRuleId) {
            @$query['AuthorizationRuleId'] = $request->authorizationRuleId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteAuthorizationResource',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteAuthorizationResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除授权资源.
     *
     * @param request - DeleteAuthorizationResourceRequest
     *
     * @returns DeleteAuthorizationResourceResponse
     *
     * @param DeleteAuthorizationResourceRequest $request
     *
     * @return DeleteAuthorizationResourceResponse
     */
    public function deleteAuthorizationResource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAuthorizationResourceWithOptions($request, $runtime);
    }

    /**
     * 删除授权规则.
     *
     * @param request - DeleteAuthorizationRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteAuthorizationRuleResponse
     *
     * @param DeleteAuthorizationRuleRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DeleteAuthorizationRuleResponse
     */
    public function deleteAuthorizationRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->authorizationRuleId) {
            @$query['AuthorizationRuleId'] = $request->authorizationRuleId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteAuthorizationRule',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteAuthorizationRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除授权规则.
     *
     * @param request - DeleteAuthorizationRuleRequest
     *
     * @returns DeleteAuthorizationRuleResponse
     *
     * @param DeleteAuthorizationRuleRequest $request
     *
     * @return DeleteAuthorizationRuleResponse
     */
    public function deleteAuthorizationRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAuthorizationRuleWithOptions($request, $runtime);
    }

    /**
     * 删除品牌.
     *
     * @param request - DeleteBrandRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteBrandResponse
     *
     * @param DeleteBrandRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return DeleteBrandResponse
     */
    public function deleteBrandWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->brandId) {
            @$query['BrandId'] = $request->brandId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteBrand',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteBrandResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除品牌.
     *
     * @param request - DeleteBrandRequest
     *
     * @returns DeleteBrandResponse
     *
     * @param DeleteBrandRequest $request
     *
     * @return DeleteBrandResponse
     */
    public function deleteBrand($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteBrandWithOptions($request, $runtime);
    }

    /**
     * 删除指定的应用ClientPublicKey.
     *
     * @param request - DeleteClientPublicKeyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteClientPublicKeyResponse
     *
     * @param DeleteClientPublicKeyRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DeleteClientPublicKeyResponse
     */
    public function deleteClientPublicKeyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->applicationId) {
            @$query['ApplicationId'] = $request->applicationId;
        }

        if (null !== $request->clientPublicKeyId) {
            @$query['ClientPublicKeyId'] = $request->clientPublicKeyId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteClientPublicKey',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteClientPublicKeyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除指定的应用ClientPublicKey.
     *
     * @param request - DeleteClientPublicKeyRequest
     *
     * @returns DeleteClientPublicKeyResponse
     *
     * @param DeleteClientPublicKeyRequest $request
     *
     * @return DeleteClientPublicKeyResponse
     */
    public function deleteClientPublicKey($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteClientPublicKeyWithOptions($request, $runtime);
    }

    /**
     * 删除云账号.
     *
     * @param request - DeleteCloudAccountRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteCloudAccountResponse
     *
     * @param DeleteCloudAccountRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteCloudAccountResponse
     */
    public function deleteCloudAccountWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->cloudAccountId) {
            @$query['CloudAccountId'] = $request->cloudAccountId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteCloudAccount',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteCloudAccountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除云账号.
     *
     * @param request - DeleteCloudAccountRequest
     *
     * @returns DeleteCloudAccountResponse
     *
     * @param DeleteCloudAccountRequest $request
     *
     * @return DeleteCloudAccountResponse
     */
    public function deleteCloudAccount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteCloudAccountWithOptions($request, $runtime);
    }

    /**
     * 删除云角色.
     *
     * @param request - DeleteCloudAccountRoleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteCloudAccountRoleResponse
     *
     * @param DeleteCloudAccountRoleRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DeleteCloudAccountRoleResponse
     */
    public function deleteCloudAccountRoleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->cloudAccountId) {
            @$query['CloudAccountId'] = $request->cloudAccountId;
        }

        if (null !== $request->cloudAccountRoleId) {
            @$query['CloudAccountRoleId'] = $request->cloudAccountRoleId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteCloudAccountRole',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteCloudAccountRoleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除云角色.
     *
     * @param request - DeleteCloudAccountRoleRequest
     *
     * @returns DeleteCloudAccountRoleResponse
     *
     * @param DeleteCloudAccountRoleRequest $request
     *
     * @return DeleteCloudAccountRoleResponse
     */
    public function deleteCloudAccountRole($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteCloudAccountRoleWithOptions($request, $runtime);
    }

    /**
     * Delete Conditional Access Policy.
     *
     * @remarks
     * When deleting a specified conditional access policy, please ensure that the policy is no longer in use. After deletion, all configuration data will be removed and cannot be recovered.
     *
     * @param request - DeleteConditionalAccessPolicyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteConditionalAccessPolicyResponse
     *
     * @param DeleteConditionalAccessPolicyRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DeleteConditionalAccessPolicyResponse
     */
    public function deleteConditionalAccessPolicyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->conditionalAccessPolicyId) {
            @$query['ConditionalAccessPolicyId'] = $request->conditionalAccessPolicyId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteConditionalAccessPolicy',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteConditionalAccessPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Delete Conditional Access Policy.
     *
     * @remarks
     * When deleting a specified conditional access policy, please ensure that the policy is no longer in use. After deletion, all configuration data will be removed and cannot be recovered.
     *
     * @param request - DeleteConditionalAccessPolicyRequest
     *
     * @returns DeleteConditionalAccessPolicyResponse
     *
     * @param DeleteConditionalAccessPolicyRequest $request
     *
     * @return DeleteConditionalAccessPolicyResponse
     */
    public function deleteConditionalAccessPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteConditionalAccessPolicyWithOptions($request, $runtime);
    }

    /**
     * 删除扩展字段.
     *
     * @param request - DeleteCustomFieldRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteCustomFieldResponse
     *
     * @param DeleteCustomFieldRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DeleteCustomFieldResponse
     */
    public function deleteCustomFieldWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->fieldId) {
            @$query['FieldId'] = $request->fieldId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteCustomField',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteCustomFieldResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除扩展字段.
     *
     * @param request - DeleteCustomFieldRequest
     *
     * @returns DeleteCustomFieldResponse
     *
     * @param DeleteCustomFieldRequest $request
     *
     * @return DeleteCustomFieldResponse
     */
    public function deleteCustomField($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteCustomFieldWithOptions($request, $runtime);
    }

    /**
     * 删除自定义条款.
     *
     * @param request - DeleteCustomPrivacyPolicyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteCustomPrivacyPolicyResponse
     *
     * @param DeleteCustomPrivacyPolicyRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DeleteCustomPrivacyPolicyResponse
     */
    public function deleteCustomPrivacyPolicyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->customPrivacyPolicyId) {
            @$query['CustomPrivacyPolicyId'] = $request->customPrivacyPolicyId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteCustomPrivacyPolicy',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteCustomPrivacyPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除自定义条款.
     *
     * @param request - DeleteCustomPrivacyPolicyRequest
     *
     * @returns DeleteCustomPrivacyPolicyResponse
     *
     * @param DeleteCustomPrivacyPolicyRequest $request
     *
     * @return DeleteCustomPrivacyPolicyResponse
     */
    public function deleteCustomPrivacyPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteCustomPrivacyPolicyWithOptions($request, $runtime);
    }

    /**
     * Deletes a custom domain name of an Employee Identity and Access Management (EIAM) instance. You cannot delete the initial domain name and default domain name of the instance.
     *
     * @param request - DeleteDomainRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
            'action' => 'DeleteDomain',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a custom domain name of an Employee Identity and Access Management (EIAM) instance. You cannot delete the initial domain name and default domain name of the instance.
     *
     * @param request - DeleteDomainRequest
     *
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
     * Deletes a proxy token for a domain name of an Employee Identity and Access Management (EIAM) instance. Only the proxy tokens in the disabled state can be deleted.
     *
     * @param request - DeleteDomainProxyTokenRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
            'action' => 'DeleteDomainProxyToken',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteDomainProxyTokenResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a proxy token for a domain name of an Employee Identity and Access Management (EIAM) instance. Only the proxy tokens in the disabled state can be deleted.
     *
     * @param request - DeleteDomainProxyTokenRequest
     *
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
     * 删除联邦凭证提供方.
     *
     * @param request - DeleteFederatedCredentialProviderRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteFederatedCredentialProviderResponse
     *
     * @param DeleteFederatedCredentialProviderRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return DeleteFederatedCredentialProviderResponse
     */
    public function deleteFederatedCredentialProviderWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->federatedCredentialProviderId) {
            @$query['FederatedCredentialProviderId'] = $request->federatedCredentialProviderId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteFederatedCredentialProvider',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteFederatedCredentialProviderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除联邦凭证提供方.
     *
     * @param request - DeleteFederatedCredentialProviderRequest
     *
     * @returns DeleteFederatedCredentialProviderResponse
     *
     * @param DeleteFederatedCredentialProviderRequest $request
     *
     * @return DeleteFederatedCredentialProviderResponse
     */
    public function deleteFederatedCredentialProvider($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteFederatedCredentialProviderWithOptions($request, $runtime);
    }

    /**
     * Deletes the information of an account group in Identity as a Service (IDaaS) Employee Identity and Access Management (EIAM).
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
            'action' => 'DeleteGroup',
            'version' => '2021-12-01',
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
     * Deletes the information of an account group in Identity as a Service (IDaaS) Employee Identity and Access Management (EIAM).
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
     * Delete identity provider.
     *
     * @param request - DeleteIdentityProviderRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
            'action' => 'DeleteIdentityProvider',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteIdentityProviderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Delete identity provider.
     *
     * @param request - DeleteIdentityProviderRequest
     *
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
     *
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
            'action' => 'DeleteInstance',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes an Enterprise Identity and Access Management (EIAM) instance of Identity as a Service (IDaaS) that you do not need.
     *
     * @remarks
     * Make sure that the instance to be deleted is no longer used. If the instance is deleted, all data related to the instance will be deleted.
     *
     * @param request - DeleteInstanceRequest
     *
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
     * Delete a network endpoint of a specific type.
     *
     * @param request - DeleteNetworkAccessEndpointRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
            'action' => 'DeleteNetworkAccessEndpoint',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteNetworkAccessEndpointResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Delete a network endpoint of a specific type.
     *
     * @param request - DeleteNetworkAccessEndpointRequest
     *
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
     * 删除网络区域对象
     *
     * @param request - DeleteNetworkZoneRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteNetworkZoneResponse
     *
     * @param DeleteNetworkZoneRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DeleteNetworkZoneResponse
     */
    public function deleteNetworkZoneWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->networkZoneId) {
            @$query['NetworkZoneId'] = $request->networkZoneId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteNetworkZone',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteNetworkZoneResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除网络区域对象
     *
     * @param request - DeleteNetworkZoneRequest
     *
     * @returns DeleteNetworkZoneResponse
     *
     * @param DeleteNetworkZoneRequest $request
     *
     * @return DeleteNetworkZoneResponse
     */
    public function deleteNetworkZone($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteNetworkZoneWithOptions($request, $runtime);
    }

    /**
     * Deletes an organization in Identity as a Service (IDaaS) Employee Identity and Access Management (EIAM). If the organization has EIAM accounts or child organizations, the delete operation fails.
     *
     * @param request - DeleteOrganizationalUnitRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
            'action' => 'DeleteOrganizationalUnit',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteOrganizationalUnitResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes an organization in Identity as a Service (IDaaS) Employee Identity and Access Management (EIAM). If the organization has EIAM accounts or child organizations, the delete operation fails.
     *
     * @param request - DeleteOrganizationalUnitRequest
     *
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
     *
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
            'action' => 'DeleteOrganizationalUnitChildren',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteOrganizationalUnitChildrenResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Delete organizational unit information, forcibly deleting all accounts and sub-organizations beneath it.
     *
     * @param request - DeleteOrganizationalUnitChildrenRequest
     *
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
     * 删除指定ResourceServer下的Scope.
     *
     * @param request - DeleteResourceServerScopeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteResourceServerScopeResponse
     *
     * @param DeleteResourceServerScopeRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DeleteResourceServerScopeResponse
     */
    public function deleteResourceServerScopeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->applicationId) {
            @$query['ApplicationId'] = $request->applicationId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->resourceServerScopeId) {
            @$query['ResourceServerScopeId'] = $request->resourceServerScopeId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteResourceServerScope',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteResourceServerScopeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除指定ResourceServer下的Scope.
     *
     * @param request - DeleteResourceServerScopeRequest
     *
     * @returns DeleteResourceServerScopeResponse
     *
     * @param DeleteResourceServerScopeRequest $request
     *
     * @return DeleteResourceServerScopeResponse
     */
    public function deleteResourceServerScope($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteResourceServerScopeWithOptions($request, $runtime);
    }

    /**
     * Deletes an Employee Identity and Access Management (EIAM) account of Identity as a Service (IDaaS). The information related to the account is cleared.
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
            'action' => 'DeleteUser',
            'version' => '2021-12-01',
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
     * Deletes an Employee Identity and Access Management (EIAM) account of Identity as a Service (IDaaS). The information related to the account is cleared.
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
     * 批量删除账号.
     *
     * @param request - DeleteUsersRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteUsersResponse
     *
     * @param DeleteUsersRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return DeleteUsersResponse
     */
    public function deleteUsersWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
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
            'action' => 'DeleteUsers',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteUsersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 批量删除账号.
     *
     * @param request - DeleteUsersRequest
     *
     * @returns DeleteUsersResponse
     *
     * @param DeleteUsersRequest $request
     *
     * @return DeleteUsersResponse
     */
    public function deleteUsers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteUsersWithOptions($request, $runtime);
    }

    /**
     * 删除指定WebAuthn认证器名称.
     *
     * @param request - DeleteWebAuthnAuthenticatorRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteWebAuthnAuthenticatorResponse
     *
     * @param DeleteWebAuthnAuthenticatorRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DeleteWebAuthnAuthenticatorResponse
     */
    public function deleteWebAuthnAuthenticatorWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->authenticatorId) {
            @$query['AuthenticatorId'] = $request->authenticatorId;
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
            'action' => 'DeleteWebAuthnAuthenticator',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteWebAuthnAuthenticatorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除指定WebAuthn认证器名称.
     *
     * @param request - DeleteWebAuthnAuthenticatorRequest
     *
     * @returns DeleteWebAuthnAuthenticatorResponse
     *
     * @param DeleteWebAuthnAuthenticatorRequest $request
     *
     * @return DeleteWebAuthnAuthenticatorResponse
     */
    public function deleteWebAuthnAuthenticator($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteWebAuthnAuthenticatorWithOptions($request, $runtime);
    }

    /**
     * Disables an enabled Employee Identity and Access Management (EIAM) application. All features of the EIAM application cannot be used if you disable the EIAM application.
     *
     * @remarks
     * All features of the EIAM application cannot be used if you disable the EIAM application, such as single sign-on (SSO) and account synchronization. Make sure that you acknowledge the risks of the delete operation.
     *
     * @param request - DisableApplicationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
            'action' => 'DisableApplication',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DisableApplicationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Disables an enabled Employee Identity and Access Management (EIAM) application. All features of the EIAM application cannot be used if you disable the EIAM application.
     *
     * @remarks
     * All features of the EIAM application cannot be used if you disable the EIAM application, such as single sign-on (SSO) and account synchronization. Make sure that you acknowledge the risks of the delete operation.
     *
     * @param request - DisableApplicationRequest
     *
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
     *
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
            'action' => 'DisableApplicationApiInvoke',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DisableApplicationApiInvokeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Disables the Developer API feature for an Employee Identity and Access Management (EIAM) application.
     *
     * @param request - DisableApplicationApiInvokeRequest
     *
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
     *
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
            'action' => 'DisableApplicationClientSecret',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DisableApplicationClientSecretResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Disables a client key of an Employee Identity and Access Management (EIAM) application.
     *
     * @param request - DisableApplicationClientSecretRequest
     *
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
     * 禁用应用联邦凭证
     *
     * @param request - DisableApplicationFederatedCredentialRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DisableApplicationFederatedCredentialResponse
     *
     * @param DisableApplicationFederatedCredentialRequest $request
     * @param RuntimeOptions                               $runtime
     *
     * @return DisableApplicationFederatedCredentialResponse
     */
    public function disableApplicationFederatedCredentialWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->applicationFederatedCredentialId) {
            @$query['ApplicationFederatedCredentialId'] = $request->applicationFederatedCredentialId;
        }

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
            'action' => 'DisableApplicationFederatedCredential',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DisableApplicationFederatedCredentialResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 禁用应用联邦凭证
     *
     * @param request - DisableApplicationFederatedCredentialRequest
     *
     * @returns DisableApplicationFederatedCredentialResponse
     *
     * @param DisableApplicationFederatedCredentialRequest $request
     *
     * @return DisableApplicationFederatedCredentialResponse
     */
    public function disableApplicationFederatedCredential($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->disableApplicationFederatedCredentialWithOptions($request, $runtime);
    }

    /**
     * 禁用M2M Client 能力.
     *
     * @param request - DisableApplicationM2MClientRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DisableApplicationM2MClientResponse
     *
     * @param DisableApplicationM2MClientRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DisableApplicationM2MClientResponse
     */
    public function disableApplicationM2MClientWithOptions($request, $runtime)
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
            'action' => 'DisableApplicationM2MClient',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DisableApplicationM2MClientResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 禁用M2M Client 能力.
     *
     * @param request - DisableApplicationM2MClientRequest
     *
     * @returns DisableApplicationM2MClientResponse
     *
     * @param DisableApplicationM2MClientRequest $request
     *
     * @return DisableApplicationM2MClientResponse
     */
    public function disableApplicationM2MClient($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->disableApplicationM2MClientWithOptions($request, $runtime);
    }

    /**
     * Disables the account synchronization feature for an application in Identity as a Service (IDaaS) Employee IAM (EIAM).
     *
     * @param request - DisableApplicationProvisioningRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
            'action' => 'DisableApplicationProvisioning',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DisableApplicationProvisioningResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Disables the account synchronization feature for an application in Identity as a Service (IDaaS) Employee IAM (EIAM).
     *
     * @param request - DisableApplicationProvisioningRequest
     *
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
     * 禁用ResourceServer能力.
     *
     * @param request - DisableApplicationResourceServerRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DisableApplicationResourceServerResponse
     *
     * @param DisableApplicationResourceServerRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return DisableApplicationResourceServerResponse
     */
    public function disableApplicationResourceServerWithOptions($request, $runtime)
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
            'action' => 'DisableApplicationResourceServer',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DisableApplicationResourceServerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 禁用ResourceServer能力.
     *
     * @param request - DisableApplicationResourceServerRequest
     *
     * @returns DisableApplicationResourceServerResponse
     *
     * @param DisableApplicationResourceServerRequest $request
     *
     * @return DisableApplicationResourceServerResponse
     */
    public function disableApplicationResourceServer($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->disableApplicationResourceServerWithOptions($request, $runtime);
    }

    /**
     * Disables the single sign-on (SSO) feature for an Employee Identity and Access Management (EIAM) application. This way, employees cannot log on to the application by using SSO.
     *
     * @param request - DisableApplicationSsoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
            'action' => 'DisableApplicationSso',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DisableApplicationSsoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Disables the single sign-on (SSO) feature for an Employee Identity and Access Management (EIAM) application. This way, employees cannot log on to the application by using SSO.
     *
     * @param request - DisableApplicationSsoRequest
     *
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
     * 禁用应用Token.
     *
     * @param request - DisableApplicationTokenRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DisableApplicationTokenResponse
     *
     * @param DisableApplicationTokenRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DisableApplicationTokenResponse
     */
    public function disableApplicationTokenWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->applicationId) {
            @$query['ApplicationId'] = $request->applicationId;
        }

        if (null !== $request->applicationTokenId) {
            @$query['ApplicationTokenId'] = $request->applicationTokenId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DisableApplicationToken',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DisableApplicationTokenResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 禁用应用Token.
     *
     * @param request - DisableApplicationTokenRequest
     *
     * @returns DisableApplicationTokenResponse
     *
     * @param DisableApplicationTokenRequest $request
     *
     * @return DisableApplicationTokenResponse
     */
    public function disableApplicationToken($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->disableApplicationTokenWithOptions($request, $runtime);
    }

    /**
     * 禁用授权规则.
     *
     * @param request - DisableAuthorizationRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DisableAuthorizationRuleResponse
     *
     * @param DisableAuthorizationRuleRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DisableAuthorizationRuleResponse
     */
    public function disableAuthorizationRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->authorizationRuleId) {
            @$query['AuthorizationRuleId'] = $request->authorizationRuleId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $body = [];
        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DisableAuthorizationRule',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DisableAuthorizationRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 禁用授权规则.
     *
     * @param request - DisableAuthorizationRuleRequest
     *
     * @returns DisableAuthorizationRuleResponse
     *
     * @param DisableAuthorizationRuleRequest $request
     *
     * @return DisableAuthorizationRuleResponse
     */
    public function disableAuthorizationRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->disableAuthorizationRuleWithOptions($request, $runtime);
    }

    /**
     * 禁用品牌.
     *
     * @param request - DisableBrandRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DisableBrandResponse
     *
     * @param DisableBrandRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return DisableBrandResponse
     */
    public function disableBrandWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->brandId) {
            @$query['BrandId'] = $request->brandId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DisableBrand',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DisableBrandResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 禁用品牌.
     *
     * @param request - DisableBrandRequest
     *
     * @returns DisableBrandResponse
     *
     * @param DisableBrandRequest $request
     *
     * @return DisableBrandResponse
     */
    public function disableBrand($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->disableBrandWithOptions($request, $runtime);
    }

    /**
     * 禁用指定的应用ClientPublicKey.
     *
     * @param request - DisableClientPublicKeyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DisableClientPublicKeyResponse
     *
     * @param DisableClientPublicKeyRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DisableClientPublicKeyResponse
     */
    public function disableClientPublicKeyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->applicationId) {
            @$query['ApplicationId'] = $request->applicationId;
        }

        if (null !== $request->clientPublicKeyId) {
            @$query['ClientPublicKeyId'] = $request->clientPublicKeyId;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DisableClientPublicKey',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DisableClientPublicKeyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 禁用指定的应用ClientPublicKey.
     *
     * @param request - DisableClientPublicKeyRequest
     *
     * @returns DisableClientPublicKeyResponse
     *
     * @param DisableClientPublicKeyRequest $request
     *
     * @return DisableClientPublicKeyResponse
     */
    public function disableClientPublicKey($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->disableClientPublicKeyWithOptions($request, $runtime);
    }

    /**
     * 禁用云角色.
     *
     * @param request - DisableCloudAccountRoleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DisableCloudAccountRoleResponse
     *
     * @param DisableCloudAccountRoleRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DisableCloudAccountRoleResponse
     */
    public function disableCloudAccountRoleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->cloudAccountId) {
            @$query['CloudAccountId'] = $request->cloudAccountId;
        }

        if (null !== $request->cloudAccountRoleId) {
            @$query['CloudAccountRoleId'] = $request->cloudAccountRoleId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DisableCloudAccountRole',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DisableCloudAccountRoleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 禁用云角色.
     *
     * @param request - DisableCloudAccountRoleRequest
     *
     * @returns DisableCloudAccountRoleResponse
     *
     * @param DisableCloudAccountRoleRequest $request
     *
     * @return DisableCloudAccountRoleResponse
     */
    public function disableCloudAccountRole($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->disableCloudAccountRoleWithOptions($request, $runtime);
    }

    /**
     * Disable Conditional Access Policy.
     *
     * @remarks
     * When changing a conditional access policy from an enabled state to a disabled state, the policy will no longer intercept. Please confirm that you are aware of the potential risks associated with this action.
     *
     * @param request - DisableConditionalAccessPolicyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DisableConditionalAccessPolicyResponse
     *
     * @param DisableConditionalAccessPolicyRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DisableConditionalAccessPolicyResponse
     */
    public function disableConditionalAccessPolicyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->conditionalAccessPolicyId) {
            @$query['ConditionalAccessPolicyId'] = $request->conditionalAccessPolicyId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DisableConditionalAccessPolicy',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DisableConditionalAccessPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Disable Conditional Access Policy.
     *
     * @remarks
     * When changing a conditional access policy from an enabled state to a disabled state, the policy will no longer intercept. Please confirm that you are aware of the potential risks associated with this action.
     *
     * @param request - DisableConditionalAccessPolicyRequest
     *
     * @returns DisableConditionalAccessPolicyResponse
     *
     * @param DisableConditionalAccessPolicyRequest $request
     *
     * @return DisableConditionalAccessPolicyResponse
     */
    public function disableConditionalAccessPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->disableConditionalAccessPolicyWithOptions($request, $runtime);
    }

    /**
     * 禁用字段.
     *
     * @param request - DisableCustomFieldRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DisableCustomFieldResponse
     *
     * @param DisableCustomFieldRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DisableCustomFieldResponse
     */
    public function disableCustomFieldWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->fieldId) {
            @$query['FieldId'] = $request->fieldId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DisableCustomField',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DisableCustomFieldResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 禁用字段.
     *
     * @param request - DisableCustomFieldRequest
     *
     * @returns DisableCustomFieldResponse
     *
     * @param DisableCustomFieldRequest $request
     *
     * @return DisableCustomFieldResponse
     */
    public function disableCustomField($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->disableCustomFieldWithOptions($request, $runtime);
    }

    /**
     * 禁用自定义条款.
     *
     * @param request - DisableCustomPrivacyPolicyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DisableCustomPrivacyPolicyResponse
     *
     * @param DisableCustomPrivacyPolicyRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DisableCustomPrivacyPolicyResponse
     */
    public function disableCustomPrivacyPolicyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->customPrivacyPolicyId) {
            @$query['CustomPrivacyPolicyId'] = $request->customPrivacyPolicyId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DisableCustomPrivacyPolicy',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DisableCustomPrivacyPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 禁用自定义条款.
     *
     * @param request - DisableCustomPrivacyPolicyRequest
     *
     * @returns DisableCustomPrivacyPolicyResponse
     *
     * @param DisableCustomPrivacyPolicyRequest $request
     *
     * @return DisableCustomPrivacyPolicyResponse
     */
    public function disableCustomPrivacyPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->disableCustomPrivacyPolicyWithOptions($request, $runtime);
    }

    /**
     * Disables a proxy token for a domain name of an Employee Identity and Access Management (EIAM) instance. After the proxy token is disabled, the domain name may not be used as expected.
     *
     * @param request - DisableDomainProxyTokenRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
            'action' => 'DisableDomainProxyToken',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DisableDomainProxyTokenResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Disables a proxy token for a domain name of an Employee Identity and Access Management (EIAM) instance. After the proxy token is disabled, the domain name may not be used as expected.
     *
     * @param request - DisableDomainProxyTokenRequest
     *
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
     * 禁用联邦凭证提供方.
     *
     * @param request - DisableFederatedCredentialProviderRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DisableFederatedCredentialProviderResponse
     *
     * @param DisableFederatedCredentialProviderRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return DisableFederatedCredentialProviderResponse
     */
    public function disableFederatedCredentialProviderWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->federatedCredentialProviderId) {
            @$query['FederatedCredentialProviderId'] = $request->federatedCredentialProviderId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DisableFederatedCredentialProvider',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DisableFederatedCredentialProviderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 禁用联邦凭证提供方.
     *
     * @param request - DisableFederatedCredentialProviderRequest
     *
     * @returns DisableFederatedCredentialProviderResponse
     *
     * @param DisableFederatedCredentialProviderRequest $request
     *
     * @return DisableFederatedCredentialProviderResponse
     */
    public function disableFederatedCredentialProvider($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->disableFederatedCredentialProviderWithOptions($request, $runtime);
    }

    /**
     * 禁用高级配置.
     *
     * @param request - DisableIdentityProviderAdvancedAbilityRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DisableIdentityProviderAdvancedAbilityResponse
     *
     * @param DisableIdentityProviderAdvancedAbilityRequest $request
     * @param RuntimeOptions                                $runtime
     *
     * @return DisableIdentityProviderAdvancedAbilityResponse
     */
    public function disableIdentityProviderAdvancedAbilityWithOptions($request, $runtime)
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
            'action' => 'DisableIdentityProviderAdvancedAbility',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DisableIdentityProviderAdvancedAbilityResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 禁用高级配置.
     *
     * @param request - DisableIdentityProviderAdvancedAbilityRequest
     *
     * @returns DisableIdentityProviderAdvancedAbilityResponse
     *
     * @param DisableIdentityProviderAdvancedAbilityRequest $request
     *
     * @return DisableIdentityProviderAdvancedAbilityResponse
     */
    public function disableIdentityProviderAdvancedAbility($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->disableIdentityProviderAdvancedAbilityWithOptions($request, $runtime);
    }

    /**
     * 禁用认证
     *
     * @param request - DisableIdentityProviderAuthnRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DisableIdentityProviderAuthnResponse
     *
     * @param DisableIdentityProviderAuthnRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DisableIdentityProviderAuthnResponse
     */
    public function disableIdentityProviderAuthnWithOptions($request, $runtime)
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
            'action' => 'DisableIdentityProviderAuthn',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DisableIdentityProviderAuthnResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 禁用认证
     *
     * @param request - DisableIdentityProviderAuthnRequest
     *
     * @returns DisableIdentityProviderAuthnResponse
     *
     * @param DisableIdentityProviderAuthnRequest $request
     *
     * @return DisableIdentityProviderAuthnResponse
     */
    public function disableIdentityProviderAuthn($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->disableIdentityProviderAuthnWithOptions($request, $runtime);
    }

    /**
     * Disable identity provider synchronization.
     *
     * @param request - DisableIdentityProviderUdPullRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
            'action' => 'DisableIdentityProviderUdPull',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DisableIdentityProviderUdPullResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Disable identity provider synchronization.
     *
     * @param request - DisableIdentityProviderUdPullRequest
     *
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
     * Disables the feature of automatically redirecting the initial domain name to the default domain name for an Employee Identity and Access Management (EIAM) instance. After the feature is disabled, users who visit the portal page by using the initial domain name are not redirected to the default domain name.
     *
     * @param request - DisableInitDomainAutoRedirectRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
            'action' => 'DisableInitDomainAutoRedirect',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DisableInitDomainAutoRedirectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Disables the feature of automatically redirecting the initial domain name to the default domain name for an Employee Identity and Access Management (EIAM) instance. After the feature is disabled, users who visit the portal page by using the initial domain name are not redirected to the default domain name.
     *
     * @param request - DisableInitDomainAutoRedirectRequest
     *
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
     * 禁用内部认证源.
     *
     * @param request - DisableInternalAuthenticationSourceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DisableInternalAuthenticationSourceResponse
     *
     * @param DisableInternalAuthenticationSourceRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return DisableInternalAuthenticationSourceResponse
     */
    public function disableInternalAuthenticationSourceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->authenticationSourceId) {
            @$query['AuthenticationSourceId'] = $request->authenticationSourceId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DisableInternalAuthenticationSource',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DisableInternalAuthenticationSourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 禁用内部认证源.
     *
     * @param request - DisableInternalAuthenticationSourceRequest
     *
     * @returns DisableInternalAuthenticationSourceResponse
     *
     * @param DisableInternalAuthenticationSourceRequest $request
     *
     * @return DisableInternalAuthenticationSourceResponse
     */
    public function disableInternalAuthenticationSource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->disableInternalAuthenticationSourceWithOptions($request, $runtime);
    }

    /**
     * 禁用资源服务器自定义主体.
     *
     * @param request - DisableResourceServerCustomSubjectRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DisableResourceServerCustomSubjectResponse
     *
     * @param DisableResourceServerCustomSubjectRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return DisableResourceServerCustomSubjectResponse
     */
    public function disableResourceServerCustomSubjectWithOptions($request, $runtime)
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
            'action' => 'DisableResourceServerCustomSubject',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DisableResourceServerCustomSubjectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 禁用资源服务器自定义主体.
     *
     * @param request - DisableResourceServerCustomSubjectRequest
     *
     * @returns DisableResourceServerCustomSubjectResponse
     *
     * @param DisableResourceServerCustomSubjectRequest $request
     *
     * @return DisableResourceServerCustomSubjectResponse
     */
    public function disableResourceServerCustomSubject($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->disableResourceServerCustomSubjectWithOptions($request, $runtime);
    }

    /**
     * Disables an Identity as a Service (IDaaS) Employee Identity and Access Management (EIAM) account. If the account is disabled, a success message is returned.
     *
     * @param request - DisableUserRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
            'action' => 'DisableUser',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DisableUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Disables an Identity as a Service (IDaaS) Employee Identity and Access Management (EIAM) account. If the account is disabled, a success message is returned.
     *
     * @param request - DisableUserRequest
     *
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
     *
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
            'action' => 'EnableApplication',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return EnableApplicationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Enables a disabled Employee Identity and Access Management (EIAM) application.
     *
     * @param request - EnableApplicationRequest
     *
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
     *
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
            'action' => 'EnableApplicationApiInvoke',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return EnableApplicationApiInvokeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Enables the Developer API feature for an Employee Identity and Access Management (EIAM) application.
     *
     * @param request - EnableApplicationApiInvokeRequest
     *
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
     *
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
            'action' => 'EnableApplicationClientSecret',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return EnableApplicationClientSecretResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Enables the client key of an application in Identity as a Service (IDaaS) Employee IAM (EIAM).
     *
     * @param request - EnableApplicationClientSecretRequest
     *
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
     * 启用应用联邦凭证
     *
     * @param request - EnableApplicationFederatedCredentialRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns EnableApplicationFederatedCredentialResponse
     *
     * @param EnableApplicationFederatedCredentialRequest $request
     * @param RuntimeOptions                              $runtime
     *
     * @return EnableApplicationFederatedCredentialResponse
     */
    public function enableApplicationFederatedCredentialWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->applicationFederatedCredentialId) {
            @$query['ApplicationFederatedCredentialId'] = $request->applicationFederatedCredentialId;
        }

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
            'action' => 'EnableApplicationFederatedCredential',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return EnableApplicationFederatedCredentialResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 启用应用联邦凭证
     *
     * @param request - EnableApplicationFederatedCredentialRequest
     *
     * @returns EnableApplicationFederatedCredentialResponse
     *
     * @param EnableApplicationFederatedCredentialRequest $request
     *
     * @return EnableApplicationFederatedCredentialResponse
     */
    public function enableApplicationFederatedCredential($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableApplicationFederatedCredentialWithOptions($request, $runtime);
    }

    /**
     * 启用M2M Client 能力.
     *
     * @param request - EnableApplicationM2MClientRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns EnableApplicationM2MClientResponse
     *
     * @param EnableApplicationM2MClientRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return EnableApplicationM2MClientResponse
     */
    public function enableApplicationM2MClientWithOptions($request, $runtime)
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
            'action' => 'EnableApplicationM2MClient',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return EnableApplicationM2MClientResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 启用M2M Client 能力.
     *
     * @param request - EnableApplicationM2MClientRequest
     *
     * @returns EnableApplicationM2MClientResponse
     *
     * @param EnableApplicationM2MClientRequest $request
     *
     * @return EnableApplicationM2MClientResponse
     */
    public function enableApplicationM2MClient($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableApplicationM2MClientWithOptions($request, $runtime);
    }

    /**
     * Enables the account synchronization feature for an application in Identity as a Service (IDaaS) Employee IAM (EIAM).
     *
     * @param request - EnableApplicationProvisioningRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
            'action' => 'EnableApplicationProvisioning',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return EnableApplicationProvisioningResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Enables the account synchronization feature for an application in Identity as a Service (IDaaS) Employee IAM (EIAM).
     *
     * @param request - EnableApplicationProvisioningRequest
     *
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
     * 启用ResourceServer能力.
     *
     * @param request - EnableApplicationResourceServerRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns EnableApplicationResourceServerResponse
     *
     * @param EnableApplicationResourceServerRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return EnableApplicationResourceServerResponse
     */
    public function enableApplicationResourceServerWithOptions($request, $runtime)
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
            'action' => 'EnableApplicationResourceServer',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return EnableApplicationResourceServerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 启用ResourceServer能力.
     *
     * @param request - EnableApplicationResourceServerRequest
     *
     * @returns EnableApplicationResourceServerResponse
     *
     * @param EnableApplicationResourceServerRequest $request
     *
     * @return EnableApplicationResourceServerResponse
     */
    public function enableApplicationResourceServer($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableApplicationResourceServerWithOptions($request, $runtime);
    }

    /**
     * Enables the single sign-on (SSO) feature for an Employee Identity and Access Management (EIAM) application.
     *
     * @param request - EnableApplicationSsoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
            'action' => 'EnableApplicationSso',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return EnableApplicationSsoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Enables the single sign-on (SSO) feature for an Employee Identity and Access Management (EIAM) application.
     *
     * @param request - EnableApplicationSsoRequest
     *
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
     * 启用应用Token.
     *
     * @param request - EnableApplicationTokenRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns EnableApplicationTokenResponse
     *
     * @param EnableApplicationTokenRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return EnableApplicationTokenResponse
     */
    public function enableApplicationTokenWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->applicationId) {
            @$query['ApplicationId'] = $request->applicationId;
        }

        if (null !== $request->applicationTokenId) {
            @$query['ApplicationTokenId'] = $request->applicationTokenId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'EnableApplicationToken',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return EnableApplicationTokenResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 启用应用Token.
     *
     * @param request - EnableApplicationTokenRequest
     *
     * @returns EnableApplicationTokenResponse
     *
     * @param EnableApplicationTokenRequest $request
     *
     * @return EnableApplicationTokenResponse
     */
    public function enableApplicationToken($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableApplicationTokenWithOptions($request, $runtime);
    }

    /**
     * 启用授权规则.
     *
     * @param request - EnableAuthorizationRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns EnableAuthorizationRuleResponse
     *
     * @param EnableAuthorizationRuleRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return EnableAuthorizationRuleResponse
     */
    public function enableAuthorizationRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->authorizationRuleId) {
            @$query['AuthorizationRuleId'] = $request->authorizationRuleId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $body = [];
        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'EnableAuthorizationRule',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return EnableAuthorizationRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 启用授权规则.
     *
     * @param request - EnableAuthorizationRuleRequest
     *
     * @returns EnableAuthorizationRuleResponse
     *
     * @param EnableAuthorizationRuleRequest $request
     *
     * @return EnableAuthorizationRuleResponse
     */
    public function enableAuthorizationRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableAuthorizationRuleWithOptions($request, $runtime);
    }

    /**
     * 启用品牌.
     *
     * @param request - EnableBrandRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns EnableBrandResponse
     *
     * @param EnableBrandRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return EnableBrandResponse
     */
    public function enableBrandWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->brandId) {
            @$query['BrandId'] = $request->brandId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'EnableBrand',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return EnableBrandResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 启用品牌.
     *
     * @param request - EnableBrandRequest
     *
     * @returns EnableBrandResponse
     *
     * @param EnableBrandRequest $request
     *
     * @return EnableBrandResponse
     */
    public function enableBrand($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableBrandWithOptions($request, $runtime);
    }

    /**
     * 启用指定的应用ClientPublicKey.
     *
     * @param request - EnableClientPublicKeyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns EnableClientPublicKeyResponse
     *
     * @param EnableClientPublicKeyRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return EnableClientPublicKeyResponse
     */
    public function enableClientPublicKeyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->applicationId) {
            @$query['ApplicationId'] = $request->applicationId;
        }

        if (null !== $request->clientPublicKeyId) {
            @$query['ClientPublicKeyId'] = $request->clientPublicKeyId;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'EnableClientPublicKey',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return EnableClientPublicKeyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 启用指定的应用ClientPublicKey.
     *
     * @param request - EnableClientPublicKeyRequest
     *
     * @returns EnableClientPublicKeyResponse
     *
     * @param EnableClientPublicKeyRequest $request
     *
     * @return EnableClientPublicKeyResponse
     */
    public function enableClientPublicKey($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableClientPublicKeyWithOptions($request, $runtime);
    }

    /**
     * 启用云角色.
     *
     * @param request - EnableCloudAccountRoleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns EnableCloudAccountRoleResponse
     *
     * @param EnableCloudAccountRoleRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return EnableCloudAccountRoleResponse
     */
    public function enableCloudAccountRoleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->cloudAccountId) {
            @$query['CloudAccountId'] = $request->cloudAccountId;
        }

        if (null !== $request->cloudAccountRoleId) {
            @$query['CloudAccountRoleId'] = $request->cloudAccountRoleId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'EnableCloudAccountRole',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return EnableCloudAccountRoleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 启用云角色.
     *
     * @param request - EnableCloudAccountRoleRequest
     *
     * @returns EnableCloudAccountRoleResponse
     *
     * @param EnableCloudAccountRoleRequest $request
     *
     * @return EnableCloudAccountRoleResponse
     */
    public function enableCloudAccountRole($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableCloudAccountRoleWithOptions($request, $runtime);
    }

    /**
     * Enable Conditional Access Policy.
     *
     * @remarks
     * When changing the status of a conditional access policy from enabled to disabled, the policy will no longer intercept. Please confirm that you are aware of the potential risks associated with this action.
     *
     * @param request - EnableConditionalAccessPolicyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns EnableConditionalAccessPolicyResponse
     *
     * @param EnableConditionalAccessPolicyRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return EnableConditionalAccessPolicyResponse
     */
    public function enableConditionalAccessPolicyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->conditionalAccessPolicyId) {
            @$query['ConditionalAccessPolicyId'] = $request->conditionalAccessPolicyId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'EnableConditionalAccessPolicy',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return EnableConditionalAccessPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Enable Conditional Access Policy.
     *
     * @remarks
     * When changing the status of a conditional access policy from enabled to disabled, the policy will no longer intercept. Please confirm that you are aware of the potential risks associated with this action.
     *
     * @param request - EnableConditionalAccessPolicyRequest
     *
     * @returns EnableConditionalAccessPolicyResponse
     *
     * @param EnableConditionalAccessPolicyRequest $request
     *
     * @return EnableConditionalAccessPolicyResponse
     */
    public function enableConditionalAccessPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableConditionalAccessPolicyWithOptions($request, $runtime);
    }

    /**
     * 启用字段.
     *
     * @param request - EnableCustomFieldRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns EnableCustomFieldResponse
     *
     * @param EnableCustomFieldRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return EnableCustomFieldResponse
     */
    public function enableCustomFieldWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->fieldId) {
            @$query['FieldId'] = $request->fieldId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'EnableCustomField',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return EnableCustomFieldResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 启用字段.
     *
     * @param request - EnableCustomFieldRequest
     *
     * @returns EnableCustomFieldResponse
     *
     * @param EnableCustomFieldRequest $request
     *
     * @return EnableCustomFieldResponse
     */
    public function enableCustomField($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableCustomFieldWithOptions($request, $runtime);
    }

    /**
     * 启用自定义条款.
     *
     * @param request - EnableCustomPrivacyPolicyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns EnableCustomPrivacyPolicyResponse
     *
     * @param EnableCustomPrivacyPolicyRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return EnableCustomPrivacyPolicyResponse
     */
    public function enableCustomPrivacyPolicyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->customPrivacyPolicyId) {
            @$query['CustomPrivacyPolicyId'] = $request->customPrivacyPolicyId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'EnableCustomPrivacyPolicy',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return EnableCustomPrivacyPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 启用自定义条款.
     *
     * @param request - EnableCustomPrivacyPolicyRequest
     *
     * @returns EnableCustomPrivacyPolicyResponse
     *
     * @param EnableCustomPrivacyPolicyRequest $request
     *
     * @return EnableCustomPrivacyPolicyResponse
     */
    public function enableCustomPrivacyPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableCustomPrivacyPolicyWithOptions($request, $runtime);
    }

    /**
     * Enables a proxy token for a domain name of an Employee Identity and Access Management (EIAM) instance. The proxy token is used to verify the security of the domain name.
     *
     * @param request - EnableDomainProxyTokenRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
            'action' => 'EnableDomainProxyToken',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return EnableDomainProxyTokenResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Enables a proxy token for a domain name of an Employee Identity and Access Management (EIAM) instance. The proxy token is used to verify the security of the domain name.
     *
     * @param request - EnableDomainProxyTokenRequest
     *
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
     * 启用联邦凭证提供方.
     *
     * @param request - EnableFederatedCredentialProviderRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns EnableFederatedCredentialProviderResponse
     *
     * @param EnableFederatedCredentialProviderRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return EnableFederatedCredentialProviderResponse
     */
    public function enableFederatedCredentialProviderWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->federatedCredentialProviderId) {
            @$query['FederatedCredentialProviderId'] = $request->federatedCredentialProviderId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'EnableFederatedCredentialProvider',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return EnableFederatedCredentialProviderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 启用联邦凭证提供方.
     *
     * @param request - EnableFederatedCredentialProviderRequest
     *
     * @returns EnableFederatedCredentialProviderResponse
     *
     * @param EnableFederatedCredentialProviderRequest $request
     *
     * @return EnableFederatedCredentialProviderResponse
     */
    public function enableFederatedCredentialProvider($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableFederatedCredentialProviderWithOptions($request, $runtime);
    }

    /**
     * 启用高级配置.
     *
     * @param request - EnableIdentityProviderAdvancedAbilityRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns EnableIdentityProviderAdvancedAbilityResponse
     *
     * @param EnableIdentityProviderAdvancedAbilityRequest $request
     * @param RuntimeOptions                               $runtime
     *
     * @return EnableIdentityProviderAdvancedAbilityResponse
     */
    public function enableIdentityProviderAdvancedAbilityWithOptions($request, $runtime)
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
            'action' => 'EnableIdentityProviderAdvancedAbility',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return EnableIdentityProviderAdvancedAbilityResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 启用高级配置.
     *
     * @param request - EnableIdentityProviderAdvancedAbilityRequest
     *
     * @returns EnableIdentityProviderAdvancedAbilityResponse
     *
     * @param EnableIdentityProviderAdvancedAbilityRequest $request
     *
     * @return EnableIdentityProviderAdvancedAbilityResponse
     */
    public function enableIdentityProviderAdvancedAbility($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableIdentityProviderAdvancedAbilityWithOptions($request, $runtime);
    }

    /**
     * 启用认证
     *
     * @param request - EnableIdentityProviderAuthnRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns EnableIdentityProviderAuthnResponse
     *
     * @param EnableIdentityProviderAuthnRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return EnableIdentityProviderAuthnResponse
     */
    public function enableIdentityProviderAuthnWithOptions($request, $runtime)
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
            'action' => 'EnableIdentityProviderAuthn',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return EnableIdentityProviderAuthnResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 启用认证
     *
     * @param request - EnableIdentityProviderAuthnRequest
     *
     * @returns EnableIdentityProviderAuthnResponse
     *
     * @param EnableIdentityProviderAuthnRequest $request
     *
     * @return EnableIdentityProviderAuthnResponse
     */
    public function enableIdentityProviderAuthn($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableIdentityProviderAuthnWithOptions($request, $runtime);
    }

    /**
     * Enable identity provider synchronization.
     *
     * @param request - EnableIdentityProviderUdPullRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
            'action' => 'EnableIdentityProviderUdPull',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return EnableIdentityProviderUdPullResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Enable identity provider synchronization.
     *
     * @param request - EnableIdentityProviderUdPullRequest
     *
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
     * Enables the feature of automatically redirecting the initial domain name to the default domain name for an Employee Identity and Access Management (EIAM) instance.
     *
     * @param request - EnableInitDomainAutoRedirectRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
            'action' => 'EnableInitDomainAutoRedirect',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return EnableInitDomainAutoRedirectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Enables the feature of automatically redirecting the initial domain name to the default domain name for an Employee Identity and Access Management (EIAM) instance.
     *
     * @param request - EnableInitDomainAutoRedirectRequest
     *
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
     * 启用内部认证源.
     *
     * @param request - EnableInternalAuthenticationSourceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns EnableInternalAuthenticationSourceResponse
     *
     * @param EnableInternalAuthenticationSourceRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return EnableInternalAuthenticationSourceResponse
     */
    public function enableInternalAuthenticationSourceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->authenticationSourceId) {
            @$query['AuthenticationSourceId'] = $request->authenticationSourceId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'EnableInternalAuthenticationSource',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return EnableInternalAuthenticationSourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 启用内部认证源.
     *
     * @param request - EnableInternalAuthenticationSourceRequest
     *
     * @returns EnableInternalAuthenticationSourceResponse
     *
     * @param EnableInternalAuthenticationSourceRequest $request
     *
     * @return EnableInternalAuthenticationSourceResponse
     */
    public function enableInternalAuthenticationSource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableInternalAuthenticationSourceWithOptions($request, $runtime);
    }

    /**
     * 启用资源服务器自定义主体.
     *
     * @param request - EnableResourceServerCustomSubjectRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns EnableResourceServerCustomSubjectResponse
     *
     * @param EnableResourceServerCustomSubjectRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return EnableResourceServerCustomSubjectResponse
     */
    public function enableResourceServerCustomSubjectWithOptions($request, $runtime)
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
            'action' => 'EnableResourceServerCustomSubject',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return EnableResourceServerCustomSubjectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 启用资源服务器自定义主体.
     *
     * @param request - EnableResourceServerCustomSubjectRequest
     *
     * @returns EnableResourceServerCustomSubjectResponse
     *
     * @param EnableResourceServerCustomSubjectRequest $request
     *
     * @return EnableResourceServerCustomSubjectResponse
     */
    public function enableResourceServerCustomSubject($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableResourceServerCustomSubjectWithOptions($request, $runtime);
    }

    /**
     * Enables an Employee Identity and Access Management (EIAM) account of Identity as a Service (IDaaS).
     *
     * @param request - EnableUserRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
            'action' => 'EnableUser',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return EnableUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Enables an Employee Identity and Access Management (EIAM) account of Identity as a Service (IDaaS).
     *
     * @param request - EnableUserRequest
     *
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
     * 生成文件导入结果下载地址
     *
     * @param request - GenerateDownloadUrlForSynchronizationJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GenerateDownloadUrlForSynchronizationJobResponse
     *
     * @param GenerateDownloadUrlForSynchronizationJobRequest $request
     * @param RuntimeOptions                                  $runtime
     *
     * @return GenerateDownloadUrlForSynchronizationJobResponse
     */
    public function generateDownloadUrlForSynchronizationJobWithOptions($request, $runtime)
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
            'action' => 'GenerateDownloadUrlForSynchronizationJob',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GenerateDownloadUrlForSynchronizationJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 生成文件导入结果下载地址
     *
     * @param request - GenerateDownloadUrlForSynchronizationJobRequest
     *
     * @returns GenerateDownloadUrlForSynchronizationJobResponse
     *
     * @param GenerateDownloadUrlForSynchronizationJobRequest $request
     *
     * @return GenerateDownloadUrlForSynchronizationJobResponse
     */
    public function generateDownloadUrlForSynchronizationJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->generateDownloadUrlForSynchronizationJobWithOptions($request, $runtime);
    }

    /**
     * 生成文件导入模板
     *
     * @param request - GenerateFileImportTemplateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GenerateFileImportTemplateResponse
     *
     * @param GenerateFileImportTemplateRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return GenerateFileImportTemplateResponse
     */
    public function generateFileImportTemplateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->targetType) {
            @$query['TargetType'] = $request->targetType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GenerateFileImportTemplate',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GenerateFileImportTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 生成文件导入模板
     *
     * @param request - GenerateFileImportTemplateRequest
     *
     * @returns GenerateFileImportTemplateResponse
     *
     * @param GenerateFileImportTemplateRequest $request
     *
     * @return GenerateFileImportTemplateResponse
     */
    public function generateFileImportTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->generateFileImportTemplateWithOptions($request, $runtime);
    }

    /**
     * 获取上传认证
     *
     * @param request - GenerateUploadAuthRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GenerateUploadAuthResponse
     *
     * @param GenerateUploadAuthRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GenerateUploadAuthResponse
     */
    public function generateUploadAuthWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->purpose) {
            @$query['Purpose'] = $request->purpose;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GenerateUploadAuth',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GenerateUploadAuthResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取上传认证
     *
     * @param request - GenerateUploadAuthRequest
     *
     * @returns GenerateUploadAuthResponse
     *
     * @param GenerateUploadAuthRequest $request
     *
     * @return GenerateUploadAuthResponse
     */
    public function generateUploadAuth($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->generateUploadAuthWithOptions($request, $runtime);
    }

    /**
     * Queries the details of an Employee Identity and Access Management (EIAM) application.
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
            'action' => 'GetApplication',
            'version' => '2021-12-01',
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
     * Queries the details of an Employee Identity and Access Management (EIAM) application.
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
     * 获取应用高阶配置.
     *
     * @param request - GetApplicationAdvancedConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetApplicationAdvancedConfigResponse
     *
     * @param GetApplicationAdvancedConfigRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return GetApplicationAdvancedConfigResponse
     */
    public function getApplicationAdvancedConfigWithOptions($request, $runtime)
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
            'action' => 'GetApplicationAdvancedConfig',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetApplicationAdvancedConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取应用高阶配置.
     *
     * @param request - GetApplicationAdvancedConfigRequest
     *
     * @returns GetApplicationAdvancedConfigResponse
     *
     * @param GetApplicationAdvancedConfigRequest $request
     *
     * @return GetApplicationAdvancedConfigResponse
     */
    public function getApplicationAdvancedConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getApplicationAdvancedConfigWithOptions($request, $runtime);
    }

    /**
     * 获取应用联邦凭证
     *
     * @param request - GetApplicationFederatedCredentialRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetApplicationFederatedCredentialResponse
     *
     * @param GetApplicationFederatedCredentialRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return GetApplicationFederatedCredentialResponse
     */
    public function getApplicationFederatedCredentialWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->applicationFederatedCredentialId) {
            @$query['ApplicationFederatedCredentialId'] = $request->applicationFederatedCredentialId;
        }

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
            'action' => 'GetApplicationFederatedCredential',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetApplicationFederatedCredentialResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取应用联邦凭证
     *
     * @param request - GetApplicationFederatedCredentialRequest
     *
     * @returns GetApplicationFederatedCredentialResponse
     *
     * @param GetApplicationFederatedCredentialRequest $request
     *
     * @return GetApplicationFederatedCredentialResponse
     */
    public function getApplicationFederatedCredential($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getApplicationFederatedCredentialWithOptions($request, $runtime);
    }

    /**
     * Queries the permissions of the Developer API feature for an Employee Identity and Access Management (EIAM) application.
     *
     * @param request - GetApplicationGrantScopeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
            'action' => 'GetApplicationGrantScope',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetApplicationGrantScopeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the permissions of the Developer API feature for an Employee Identity and Access Management (EIAM) application.
     *
     * @param request - GetApplicationGrantScopeRequest
     *
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
     *
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
            'action' => 'GetApplicationProvisioningConfig',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetApplicationProvisioningConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the configuration of the account synchronization feature for an application in Identity as a Service (IDaaS) Employee Identity and Access Management (EIAM).
     *
     * @param request - GetApplicationProvisioningConfigRequest
     *
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
     *
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
            'action' => 'GetApplicationProvisioningScope',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetApplicationProvisioningScopeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the account synchronization scope of applications in Identity as a Service (IDaaS) Employee IAM (EIAM). This scope is the same as the scope within which developers can call the DeveloperAPI to query and manage accounts.
     *
     * @param request - GetApplicationProvisioningScopeRequest
     *
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
     * 查询指定应用同步配置.
     *
     * @param request - GetApplicationProvisioningUserPrimaryOrganizationalUnitRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetApplicationProvisioningUserPrimaryOrganizationalUnitResponse
     *
     * @param GetApplicationProvisioningUserPrimaryOrganizationalUnitRequest $request
     * @param RuntimeOptions                                                 $runtime
     *
     * @return GetApplicationProvisioningUserPrimaryOrganizationalUnitResponse
     */
    public function getApplicationProvisioningUserPrimaryOrganizationalUnitWithOptions($request, $runtime)
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
            'action' => 'GetApplicationProvisioningUserPrimaryOrganizationalUnit',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetApplicationProvisioningUserPrimaryOrganizationalUnitResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询指定应用同步配置.
     *
     * @param request - GetApplicationProvisioningUserPrimaryOrganizationalUnitRequest
     *
     * @returns GetApplicationProvisioningUserPrimaryOrganizationalUnitResponse
     *
     * @param GetApplicationProvisioningUserPrimaryOrganizationalUnitRequest $request
     *
     * @return GetApplicationProvisioningUserPrimaryOrganizationalUnitResponse
     */
    public function getApplicationProvisioningUserPrimaryOrganizationalUnit($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getApplicationProvisioningUserPrimaryOrganizationalUnitWithOptions($request, $runtime);
    }

    /**
     * 获取角色信息.
     *
     * @param request - GetApplicationRoleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetApplicationRoleResponse
     *
     * @param GetApplicationRoleRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GetApplicationRoleResponse
     */
    public function getApplicationRoleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->applicationId) {
            @$query['ApplicationId'] = $request->applicationId;
        }

        if (null !== $request->applicationRoleId) {
            @$query['ApplicationRoleId'] = $request->applicationRoleId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetApplicationRole',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetApplicationRoleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取角色信息.
     *
     * @param request - GetApplicationRoleRequest
     *
     * @returns GetApplicationRoleResponse
     *
     * @param GetApplicationRoleRequest $request
     *
     * @return GetApplicationRoleResponse
     */
    public function getApplicationRole($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getApplicationRoleWithOptions($request, $runtime);
    }

    /**
     * Queries the single sign-on (SSO) configuration attributes of an application in Identity as a Service (IDaaS) Employee IAM (EIAM).
     *
     * @param request - GetApplicationSsoConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
            'action' => 'GetApplicationSsoConfig',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetApplicationSsoConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the single sign-on (SSO) configuration attributes of an application in Identity as a Service (IDaaS) Employee IAM (EIAM).
     *
     * @param request - GetApplicationSsoConfigRequest
     *
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
     * 获取应用模板信息.
     *
     * @param request - GetApplicationTemplateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetApplicationTemplateResponse
     *
     * @param GetApplicationTemplateRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return GetApplicationTemplateResponse
     */
    public function getApplicationTemplateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->applicationTemplateId) {
            @$query['ApplicationTemplateId'] = $request->applicationTemplateId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetApplicationTemplate',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetApplicationTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取应用模板信息.
     *
     * @param request - GetApplicationTemplateRequest
     *
     * @returns GetApplicationTemplateResponse
     *
     * @param GetApplicationTemplateRequest $request
     *
     * @return GetApplicationTemplateResponse
     */
    public function getApplicationTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getApplicationTemplateWithOptions($request, $runtime);
    }

    /**
     * 获取授权资源信息.
     *
     * @param request - GetAuthorizationResourceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAuthorizationResourceResponse
     *
     * @param GetAuthorizationResourceRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return GetAuthorizationResourceResponse
     */
    public function getAuthorizationResourceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->authorizationResourceId) {
            @$query['AuthorizationResourceId'] = $request->authorizationResourceId;
        }

        if (null !== $request->authorizationRuleId) {
            @$query['AuthorizationRuleId'] = $request->authorizationRuleId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetAuthorizationResource',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetAuthorizationResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取授权资源信息.
     *
     * @param request - GetAuthorizationResourceRequest
     *
     * @returns GetAuthorizationResourceResponse
     *
     * @param GetAuthorizationResourceRequest $request
     *
     * @return GetAuthorizationResourceResponse
     */
    public function getAuthorizationResource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAuthorizationResourceWithOptions($request, $runtime);
    }

    /**
     * 获取授权规则信息.
     *
     * @param request - GetAuthorizationRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAuthorizationRuleResponse
     *
     * @param GetAuthorizationRuleRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return GetAuthorizationRuleResponse
     */
    public function getAuthorizationRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->authorizationRuleId) {
            @$query['AuthorizationRuleId'] = $request->authorizationRuleId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetAuthorizationRule',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetAuthorizationRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取授权规则信息.
     *
     * @param request - GetAuthorizationRuleRequest
     *
     * @returns GetAuthorizationRuleResponse
     *
     * @param GetAuthorizationRuleRequest $request
     *
     * @return GetAuthorizationRuleResponse
     */
    public function getAuthorizationRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAuthorizationRuleWithOptions($request, $runtime);
    }

    /**
     * 获取品牌详情.
     *
     * @param request - GetBrandRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetBrandResponse
     *
     * @param GetBrandRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return GetBrandResponse
     */
    public function getBrandWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->brandId) {
            @$query['BrandId'] = $request->brandId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetBrand',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetBrandResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取品牌详情.
     *
     * @param request - GetBrandRequest
     *
     * @returns GetBrandResponse
     *
     * @param GetBrandRequest $request
     *
     * @return GetBrandResponse
     */
    public function getBrand($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getBrandWithOptions($request, $runtime);
    }

    /**
     * 查询指定应用ClientPublicKey.
     *
     * @param request - GetClientPublicKeyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetClientPublicKeyResponse
     *
     * @param GetClientPublicKeyRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GetClientPublicKeyResponse
     */
    public function getClientPublicKeyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->applicationId) {
            @$query['ApplicationId'] = $request->applicationId;
        }

        if (null !== $request->clientPublicKeyId) {
            @$query['ClientPublicKeyId'] = $request->clientPublicKeyId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetClientPublicKey',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetClientPublicKeyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询指定应用ClientPublicKey.
     *
     * @param request - GetClientPublicKeyRequest
     *
     * @returns GetClientPublicKeyResponse
     *
     * @param GetClientPublicKeyRequest $request
     *
     * @return GetClientPublicKeyResponse
     */
    public function getClientPublicKey($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getClientPublicKeyWithOptions($request, $runtime);
    }

    /**
     * 获取云账号.
     *
     * @param request - GetCloudAccountRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetCloudAccountResponse
     *
     * @param GetCloudAccountRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return GetCloudAccountResponse
     */
    public function getCloudAccountWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->cloudAccountId) {
            @$query['CloudAccountId'] = $request->cloudAccountId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetCloudAccount',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetCloudAccountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取云账号.
     *
     * @param request - GetCloudAccountRequest
     *
     * @returns GetCloudAccountResponse
     *
     * @param GetCloudAccountRequest $request
     *
     * @return GetCloudAccountResponse
     */
    public function getCloudAccount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getCloudAccountWithOptions($request, $runtime);
    }

    /**
     * 获取云角色.
     *
     * @param request - GetCloudAccountRoleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetCloudAccountRoleResponse
     *
     * @param GetCloudAccountRoleRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GetCloudAccountRoleResponse
     */
    public function getCloudAccountRoleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->cloudAccountId) {
            @$query['CloudAccountId'] = $request->cloudAccountId;
        }

        if (null !== $request->cloudAccountRoleId) {
            @$query['CloudAccountRoleId'] = $request->cloudAccountRoleId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetCloudAccountRole',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetCloudAccountRoleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取云角色.
     *
     * @param request - GetCloudAccountRoleRequest
     *
     * @returns GetCloudAccountRoleResponse
     *
     * @param GetCloudAccountRoleRequest $request
     *
     * @return GetCloudAccountRoleResponse
     */
    public function getCloudAccountRole($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getCloudAccountRoleWithOptions($request, $runtime);
    }

    /**
     * Get Conditional Access Policy.
     *
     * @remarks
     * Query Conditional Access Policy
     *
     * @param request - GetConditionalAccessPolicyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetConditionalAccessPolicyResponse
     *
     * @param GetConditionalAccessPolicyRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return GetConditionalAccessPolicyResponse
     */
    public function getConditionalAccessPolicyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->conditionalAccessPolicyId) {
            @$query['ConditionalAccessPolicyId'] = $request->conditionalAccessPolicyId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetConditionalAccessPolicy',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetConditionalAccessPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Get Conditional Access Policy.
     *
     * @remarks
     * Query Conditional Access Policy
     *
     * @param request - GetConditionalAccessPolicyRequest
     *
     * @returns GetConditionalAccessPolicyResponse
     *
     * @param GetConditionalAccessPolicyRequest $request
     *
     * @return GetConditionalAccessPolicyResponse
     */
    public function getConditionalAccessPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getConditionalAccessPolicyWithOptions($request, $runtime);
    }

    /**
     * 获取扩展字段信息.
     *
     * @param request - GetCustomFieldRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetCustomFieldResponse
     *
     * @param GetCustomFieldRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return GetCustomFieldResponse
     */
    public function getCustomFieldWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->fieldId) {
            @$query['FieldId'] = $request->fieldId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetCustomField',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetCustomFieldResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取扩展字段信息.
     *
     * @param request - GetCustomFieldRequest
     *
     * @returns GetCustomFieldResponse
     *
     * @param GetCustomFieldRequest $request
     *
     * @return GetCustomFieldResponse
     */
    public function getCustomField($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getCustomFieldWithOptions($request, $runtime);
    }

    /**
     * 获取自定义条款.
     *
     * @param request - GetCustomPrivacyPolicyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetCustomPrivacyPolicyResponse
     *
     * @param GetCustomPrivacyPolicyRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return GetCustomPrivacyPolicyResponse
     */
    public function getCustomPrivacyPolicyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->customPrivacyPolicyId) {
            @$query['CustomPrivacyPolicyId'] = $request->customPrivacyPolicyId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetCustomPrivacyPolicy',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetCustomPrivacyPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取自定义条款.
     *
     * @param request - GetCustomPrivacyPolicyRequest
     *
     * @returns GetCustomPrivacyPolicyResponse
     *
     * @param GetCustomPrivacyPolicyRequest $request
     *
     * @return GetCustomPrivacyPolicyResponse
     */
    public function getCustomPrivacyPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getCustomPrivacyPolicyWithOptions($request, $runtime);
    }

    /**
     * Queries the information about a domain name of an Employee Identity and Access Management (EIAM) instance.
     *
     * @param request - GetDomainRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
            'action' => 'GetDomain',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about a domain name of an Employee Identity and Access Management (EIAM) instance.
     *
     * @param request - GetDomainRequest
     *
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
     * Queries the domain name system (DNS) challenge records of a domain name of an Employee Identity and Access Management (EIAM) instance. The generated records are used to verify the ownership of the domain name.
     *
     * @param request - GetDomainDnsChallengeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
            'action' => 'GetDomainDnsChallenge',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetDomainDnsChallengeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the domain name system (DNS) challenge records of a domain name of an Employee Identity and Access Management (EIAM) instance. The generated records are used to verify the ownership of the domain name.
     *
     * @param request - GetDomainDnsChallengeRequest
     *
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
     * 获取联邦凭证提供方.
     *
     * @param request - GetFederatedCredentialProviderRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetFederatedCredentialProviderResponse
     *
     * @param GetFederatedCredentialProviderRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return GetFederatedCredentialProviderResponse
     */
    public function getFederatedCredentialProviderWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->federatedCredentialProviderId) {
            @$query['FederatedCredentialProviderId'] = $request->federatedCredentialProviderId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetFederatedCredentialProvider',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetFederatedCredentialProviderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取联邦凭证提供方.
     *
     * @param request - GetFederatedCredentialProviderRequest
     *
     * @returns GetFederatedCredentialProviderResponse
     *
     * @param GetFederatedCredentialProviderRequest $request
     *
     * @return GetFederatedCredentialProviderResponse
     */
    public function getFederatedCredentialProvider($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getFederatedCredentialProviderWithOptions($request, $runtime);
    }

    /**
     * Queries the forgot password configurations of an Employee Identity and Access Management (EIAM) instance of Identity as a Service (IDaaS).
     *
     * @param request - GetForgetPasswordConfigurationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
            'action' => 'GetForgetPasswordConfiguration',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetForgetPasswordConfigurationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the forgot password configurations of an Employee Identity and Access Management (EIAM) instance of Identity as a Service (IDaaS).
     *
     * @param request - GetForgetPasswordConfigurationRequest
     *
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
            'action' => 'GetGroup',
            'version' => '2021-12-01',
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
     * Queries the information of an account group in Identity as a Service (IDaaS) Employee Identity and Access Management (EIAM).
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
     * Get identity provider.
     *
     * @param request - GetIdentityProviderRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
            'action' => 'GetIdentityProvider',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetIdentityProviderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Get identity provider.
     *
     * @param request - GetIdentityProviderRequest
     *
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
     * 获取高级配置信息.
     *
     * @param request - GetIdentityProviderAdvancedConfigurationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetIdentityProviderAdvancedConfigurationResponse
     *
     * @param GetIdentityProviderAdvancedConfigurationRequest $request
     * @param RuntimeOptions                                  $runtime
     *
     * @return GetIdentityProviderAdvancedConfigurationResponse
     */
    public function getIdentityProviderAdvancedConfigurationWithOptions($request, $runtime)
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
            'action' => 'GetIdentityProviderAdvancedConfiguration',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetIdentityProviderAdvancedConfigurationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取高级配置信息.
     *
     * @param request - GetIdentityProviderAdvancedConfigurationRequest
     *
     * @returns GetIdentityProviderAdvancedConfigurationResponse
     *
     * @param GetIdentityProviderAdvancedConfigurationRequest $request
     *
     * @return GetIdentityProviderAdvancedConfigurationResponse
     */
    public function getIdentityProviderAdvancedConfiguration($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getIdentityProviderAdvancedConfigurationWithOptions($request, $runtime);
    }

    /**
     * 获取IdP检查任务
     *
     * @param request - GetIdentityProviderStatusCheckJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetIdentityProviderStatusCheckJobResponse
     *
     * @param GetIdentityProviderStatusCheckJobRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return GetIdentityProviderStatusCheckJobResponse
     */
    public function getIdentityProviderStatusCheckJobWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->identityProviderId) {
            @$query['IdentityProviderId'] = $request->identityProviderId;
        }

        if (null !== $request->identityProviderStatusCheckJobId) {
            @$query['IdentityProviderStatusCheckJobId'] = $request->identityProviderStatusCheckJobId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetIdentityProviderStatusCheckJob',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetIdentityProviderStatusCheckJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取IdP检查任务
     *
     * @param request - GetIdentityProviderStatusCheckJobRequest
     *
     * @returns GetIdentityProviderStatusCheckJobResponse
     *
     * @param GetIdentityProviderStatusCheckJobRequest $request
     *
     * @return GetIdentityProviderStatusCheckJobResponse
     */
    public function getIdentityProviderStatusCheckJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getIdentityProviderStatusCheckJobWithOptions($request, $runtime);
    }

    /**
     * Get IdP Inbound Synchronization Configuration Information.
     *
     * @param request - GetIdentityProviderUdPullConfigurationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
            'action' => 'GetIdentityProviderUdPullConfiguration',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetIdentityProviderUdPullConfigurationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Get IdP Inbound Synchronization Configuration Information.
     *
     * @param request - GetIdentityProviderUdPullConfigurationRequest
     *
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
     * 获取IdP同步出配置.
     *
     * @param request - GetIdentityProviderUdPushConfigurationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetIdentityProviderUdPushConfigurationResponse
     *
     * @param GetIdentityProviderUdPushConfigurationRequest $request
     * @param RuntimeOptions                                $runtime
     *
     * @return GetIdentityProviderUdPushConfigurationResponse
     */
    public function getIdentityProviderUdPushConfigurationWithOptions($request, $runtime)
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
            'action' => 'GetIdentityProviderUdPushConfiguration',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetIdentityProviderUdPushConfigurationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取IdP同步出配置.
     *
     * @param request - GetIdentityProviderUdPushConfigurationRequest
     *
     * @returns GetIdentityProviderUdPushConfigurationResponse
     *
     * @param GetIdentityProviderUdPushConfigurationRequest $request
     *
     * @return GetIdentityProviderUdPushConfigurationResponse
     */
    public function getIdentityProviderUdPushConfiguration($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getIdentityProviderUdPushConfigurationWithOptions($request, $runtime);
    }

    /**
     * Queries the information of an Enterprise Identity and Access Management (EIAM) instance of Identity as a Service (IDaaS).
     *
     * @param request - GetInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
            'action' => 'GetInstance',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information of an Enterprise Identity and Access Management (EIAM) instance of Identity as a Service (IDaaS).
     *
     * @param request - GetInstanceRequest
     *
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
     * 查询实例控制项.
     *
     * @param request - GetInstanceControlConfigurationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetInstanceControlConfigurationResponse
     *
     * @param GetInstanceControlConfigurationRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return GetInstanceControlConfigurationResponse
     */
    public function getInstanceControlConfigurationWithOptions($request, $runtime)
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
            'action' => 'GetInstanceControlConfiguration',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetInstanceControlConfigurationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询实例控制项.
     *
     * @param request - GetInstanceControlConfigurationRequest
     *
     * @returns GetInstanceControlConfigurationResponse
     *
     * @param GetInstanceControlConfigurationRequest $request
     *
     * @return GetInstanceControlConfigurationResponse
     */
    public function getInstanceControlConfiguration($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getInstanceControlConfigurationWithOptions($request, $runtime);
    }

    /**
     * 获取实例语言、时区信息.
     *
     * @param request - GetInstanceGlobalizationConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetInstanceGlobalizationConfigResponse
     *
     * @param GetInstanceGlobalizationConfigRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return GetInstanceGlobalizationConfigResponse
     */
    public function getInstanceGlobalizationConfigWithOptions($request, $runtime)
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
            'action' => 'GetInstanceGlobalizationConfig',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetInstanceGlobalizationConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取实例语言、时区信息.
     *
     * @param request - GetInstanceGlobalizationConfigRequest
     *
     * @returns GetInstanceGlobalizationConfigResponse
     *
     * @param GetInstanceGlobalizationConfigRequest $request
     *
     * @return GetInstanceGlobalizationConfigResponse
     */
    public function getInstanceGlobalizationConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getInstanceGlobalizationConfigWithOptions($request, $runtime);
    }

    /**
     * Query the currently effective License information of the instance.
     *
     * @remarks
     * Please ensure that your current instance is no longer in use. When the EIAM instance is deleted, all related data will be deleted.
     *
     * @param request - GetInstanceLicenseRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
            'action' => 'GetInstanceLicense',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetInstanceLicenseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query the currently effective License information of the instance.
     *
     * @remarks
     * Please ensure that your current instance is no longer in use. When the EIAM instance is deleted, all related data will be deleted.
     *
     * @param request - GetInstanceLicenseRequest
     *
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
     * 获取一级模块下，所有模块信息.
     *
     * @param request - GetInstanceModuleInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetInstanceModuleInfoResponse
     *
     * @param GetInstanceModuleInfoRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return GetInstanceModuleInfoResponse
     */
    public function getInstanceModuleInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->moduleKey) {
            @$query['ModuleKey'] = $request->moduleKey;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetInstanceModuleInfo',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetInstanceModuleInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取一级模块下，所有模块信息.
     *
     * @param request - GetInstanceModuleInfoRequest
     *
     * @returns GetInstanceModuleInfoResponse
     *
     * @param GetInstanceModuleInfoRequest $request
     *
     * @return GetInstanceModuleInfoResponse
     */
    public function getInstanceModuleInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getInstanceModuleInfoWithOptions($request, $runtime);
    }

    /**
     * 获取实例单一类型的Quota.
     *
     * @param request - GetInstanceQuotaRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetInstanceQuotaResponse
     *
     * @param GetInstanceQuotaRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetInstanceQuotaResponse
     */
    public function getInstanceQuotaWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->quotaKey) {
            @$query['QuotaKey'] = $request->quotaKey;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetInstanceQuota',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetInstanceQuotaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取实例单一类型的Quota.
     *
     * @param request - GetInstanceQuotaRequest
     *
     * @returns GetInstanceQuotaResponse
     *
     * @param GetInstanceQuotaRequest $request
     *
     * @return GetInstanceQuotaResponse
     */
    public function getInstanceQuota($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getInstanceQuotaWithOptions($request, $runtime);
    }

    /**
     * 获取实例的试用状态
     *
     * @param request - GetInstanceTrialStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetInstanceTrialStatusResponse
     *
     * @param GetInstanceTrialStatusRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return GetInstanceTrialStatusResponse
     */
    public function getInstanceTrialStatusWithOptions($request, $runtime)
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
            'action' => 'GetInstanceTrialStatus',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetInstanceTrialStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取实例的试用状态
     *
     * @param request - GetInstanceTrialStatusRequest
     *
     * @returns GetInstanceTrialStatusResponse
     *
     * @param GetInstanceTrialStatusRequest $request
     *
     * @return GetInstanceTrialStatusResponse
     */
    public function getInstanceTrialStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getInstanceTrialStatusWithOptions($request, $runtime);
    }

    /**
     * 获取品牌登录后跳转应用.
     *
     * @param request - GetLoginRedirectApplicationForBrandRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetLoginRedirectApplicationForBrandResponse
     *
     * @param GetLoginRedirectApplicationForBrandRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return GetLoginRedirectApplicationForBrandResponse
     */
    public function getLoginRedirectApplicationForBrandWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->brandId) {
            @$query['BrandId'] = $request->brandId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetLoginRedirectApplicationForBrand',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetLoginRedirectApplicationForBrandResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取品牌登录后跳转应用.
     *
     * @param request - GetLoginRedirectApplicationForBrandRequest
     *
     * @returns GetLoginRedirectApplicationForBrandResponse
     *
     * @param GetLoginRedirectApplicationForBrandRequest $request
     *
     * @return GetLoginRedirectApplicationForBrandResponse
     */
    public function getLoginRedirectApplicationForBrand($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getLoginRedirectApplicationForBrandWithOptions($request, $runtime);
    }

    /**
     * Get Network Endpoint Information.
     *
     * @param request - GetNetworkAccessEndpointRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
            'action' => 'GetNetworkAccessEndpoint',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetNetworkAccessEndpointResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Get Network Endpoint Information.
     *
     * @param request - GetNetworkAccessEndpointRequest
     *
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
     * 获取网络区域对象
     *
     * @param request - GetNetworkZoneRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetNetworkZoneResponse
     *
     * @param GetNetworkZoneRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return GetNetworkZoneResponse
     */
    public function getNetworkZoneWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->networkZoneId) {
            @$query['NetworkZoneId'] = $request->networkZoneId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetNetworkZone',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetNetworkZoneResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取网络区域对象
     *
     * @param request - GetNetworkZoneRequest
     *
     * @returns GetNetworkZoneResponse
     *
     * @param GetNetworkZoneRequest $request
     *
     * @return GetNetworkZoneResponse
     */
    public function getNetworkZone($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getNetworkZoneWithOptions($request, $runtime);
    }

    /**
     * Queries the information about an organizational unit in Identity as a Service (IDaaS) Employee IAM (EIAM).
     *
     * @param request - GetOrganizationalUnitRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
            'action' => 'GetOrganizationalUnit',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetOrganizationalUnitResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about an organizational unit in Identity as a Service (IDaaS) Employee IAM (EIAM).
     *
     * @param request - GetOrganizationalUnitRequest
     *
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
     *
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
            'action' => 'GetPasswordComplexityConfiguration',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetPasswordComplexityConfigurationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the password complexity configurations of an Employee Identity and Access Management (EIAM) instance of Identity as a Service (IDaaS).
     *
     * @param request - GetPasswordComplexityConfigurationRequest
     *
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
     *
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
            'action' => 'GetPasswordExpirationConfiguration',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetPasswordExpirationConfigurationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the password expiration configurations of an Employee Identity and Access Management (EIAM) instance of Identity as a Service (IDaaS).
     *
     * @param request - GetPasswordExpirationConfigurationRequest
     *
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
     *
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
            'action' => 'GetPasswordHistoryConfiguration',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetPasswordHistoryConfigurationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the password history configurations of an Employee Identity and Access Management (EIAM) instance of Identity as a Service (IDaaS).
     *
     * @param request - GetPasswordHistoryConfigurationRequest
     *
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
     *
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
            'action' => 'GetPasswordInitializationConfiguration',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetPasswordInitializationConfigurationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the password initialization configurations of an Employee Identity and Access Management (EIAM) instance of Identity as a Service (IDaaS).
     *
     * @param request - GetPasswordInitializationConfigurationRequest
     *
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
     * 查询指定ResourceServer下的Scope.
     *
     * @param request - GetResourceServerScopeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetResourceServerScopeResponse
     *
     * @param GetResourceServerScopeRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return GetResourceServerScopeResponse
     */
    public function getResourceServerScopeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->applicationId) {
            @$query['ApplicationId'] = $request->applicationId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->resourceServerScopeId) {
            @$query['ResourceServerScopeId'] = $request->resourceServerScopeId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetResourceServerScope',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetResourceServerScopeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询指定ResourceServer下的Scope.
     *
     * @param request - GetResourceServerScopeRequest
     *
     * @returns GetResourceServerScopeResponse
     *
     * @param GetResourceServerScopeRequest $request
     *
     * @return GetResourceServerScopeResponse
     */
    public function getResourceServerScope($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getResourceServerScopeWithOptions($request, $runtime);
    }

    /**
     * Queries the information about the root organizational unit in Identity as a Service (IDaaS) Employee IAM (EIAM).
     *
     * @param request - GetRootOrganizationalUnitRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
            'action' => 'GetRootOrganizationalUnit',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetRootOrganizationalUnitResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about the root organizational unit in Identity as a Service (IDaaS) Employee IAM (EIAM).
     *
     * @param request - GetRootOrganizationalUnitRequest
     *
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
     * Obtains the information about a single synchronization job.
     *
     * @param request - GetSynchronizationJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
            'action' => 'GetSynchronizationJob',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetSynchronizationJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Obtains the information about a single synchronization job.
     *
     * @param request - GetSynchronizationJobRequest
     *
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
            'action' => 'GetUser',
            'version' => '2021-12-01',
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
     * Queries the details of an account in Identity as a Service (IDaaS) Employee IAM (EIAM).
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
     * 分页查询应用下的应用账户列表.
     *
     * @param request - ListApplicationAccountsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListApplicationAccountsResponse
     *
     * @param ListApplicationAccountsRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ListApplicationAccountsResponse
     */
    public function listApplicationAccountsWithOptions($request, $runtime)
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

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListApplicationAccounts',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListApplicationAccountsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 分页查询应用下的应用账户列表.
     *
     * @param request - ListApplicationAccountsRequest
     *
     * @returns ListApplicationAccountsResponse
     *
     * @param ListApplicationAccountsRequest $request
     *
     * @return ListApplicationAccountsResponse
     */
    public function listApplicationAccounts($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listApplicationAccountsWithOptions($request, $runtime);
    }

    /**
     * 查询当前应用下指定用户的所有账号.
     *
     * @param request - ListApplicationAccountsForUserRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListApplicationAccountsForUserResponse
     *
     * @param ListApplicationAccountsForUserRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return ListApplicationAccountsForUserResponse
     */
    public function listApplicationAccountsForUserWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->applicationId) {
            @$query['ApplicationId'] = $request->applicationId;
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
            'action' => 'ListApplicationAccountsForUser',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListApplicationAccountsForUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询当前应用下指定用户的所有账号.
     *
     * @param request - ListApplicationAccountsForUserRequest
     *
     * @returns ListApplicationAccountsForUserResponse
     *
     * @param ListApplicationAccountsForUserRequest $request
     *
     * @return ListApplicationAccountsForUserResponse
     */
    public function listApplicationAccountsForUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listApplicationAccountsForUserWithOptions($request, $runtime);
    }

    /**
     * Queries all client keys of an Employee Identity and Access Management (EIAM) application. The returned key secret is not masked. If you want to query the key secret that is masked, call the ObtainApplicationClientSecret operation.
     *
     * @param request - ListApplicationClientSecretsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
            'action' => 'ListApplicationClientSecrets',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListApplicationClientSecretsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries all client keys of an Employee Identity and Access Management (EIAM) application. The returned key secret is not masked. If you want to query the key secret that is masked, call the ObtainApplicationClientSecret operation.
     *
     * @param request - ListApplicationClientSecretsRequest
     *
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
     * 查询应用联邦凭证列表.
     *
     * @param request - ListApplicationFederatedCredentialsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListApplicationFederatedCredentialsResponse
     *
     * @param ListApplicationFederatedCredentialsRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return ListApplicationFederatedCredentialsResponse
     */
    public function listApplicationFederatedCredentialsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->applicationFederatedCredentialType) {
            @$query['ApplicationFederatedCredentialType'] = $request->applicationFederatedCredentialType;
        }

        if (null !== $request->applicationId) {
            @$query['ApplicationId'] = $request->applicationId;
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

        if (null !== $request->previousToken) {
            @$query['PreviousToken'] = $request->previousToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListApplicationFederatedCredentials',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListApplicationFederatedCredentialsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询应用联邦凭证列表.
     *
     * @param request - ListApplicationFederatedCredentialsRequest
     *
     * @returns ListApplicationFederatedCredentialsResponse
     *
     * @param ListApplicationFederatedCredentialsRequest $request
     *
     * @return ListApplicationFederatedCredentialsResponse
     */
    public function listApplicationFederatedCredentials($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listApplicationFederatedCredentialsWithOptions($request, $runtime);
    }

    /**
     * 根据联邦凭证提供方查询应用联邦凭证列表.
     *
     * @param request - ListApplicationFederatedCredentialsForProviderRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListApplicationFederatedCredentialsForProviderResponse
     *
     * @param ListApplicationFederatedCredentialsForProviderRequest $request
     * @param RuntimeOptions                                        $runtime
     *
     * @return ListApplicationFederatedCredentialsForProviderResponse
     */
    public function listApplicationFederatedCredentialsForProviderWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->federatedCredentialProviderId) {
            @$query['FederatedCredentialProviderId'] = $request->federatedCredentialProviderId;
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

        if (null !== $request->previousToken) {
            @$query['PreviousToken'] = $request->previousToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListApplicationFederatedCredentialsForProvider',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListApplicationFederatedCredentialsForProviderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 根据联邦凭证提供方查询应用联邦凭证列表.
     *
     * @param request - ListApplicationFederatedCredentialsForProviderRequest
     *
     * @returns ListApplicationFederatedCredentialsForProviderResponse
     *
     * @param ListApplicationFederatedCredentialsForProviderRequest $request
     *
     * @return ListApplicationFederatedCredentialsForProviderResponse
     */
    public function listApplicationFederatedCredentialsForProvider($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listApplicationFederatedCredentialsForProviderWithOptions($request, $runtime);
    }

    /**
     * 游标分页查询应用角色.
     *
     * @param request - ListApplicationRolesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListApplicationRolesResponse
     *
     * @param ListApplicationRolesRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ListApplicationRolesResponse
     */
    public function listApplicationRolesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->applicationId) {
            @$query['ApplicationId'] = $request->applicationId;
        }

        if (null !== $request->filter) {
            @$query['Filter'] = $request->filter;
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

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListApplicationRoles',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListApplicationRolesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 游标分页查询应用角色.
     *
     * @param request - ListApplicationRolesRequest
     *
     * @returns ListApplicationRolesResponse
     *
     * @param ListApplicationRolesRequest $request
     *
     * @return ListApplicationRolesResponse
     */
    public function listApplicationRoles($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listApplicationRolesWithOptions($request, $runtime);
    }

    /**
     * 应用支持账户同步类型列表.
     *
     * @param request - ListApplicationSupportedProvisionProtocolTypesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListApplicationSupportedProvisionProtocolTypesResponse
     *
     * @param ListApplicationSupportedProvisionProtocolTypesRequest $request
     * @param RuntimeOptions                                        $runtime
     *
     * @return ListApplicationSupportedProvisionProtocolTypesResponse
     */
    public function listApplicationSupportedProvisionProtocolTypesWithOptions($request, $runtime)
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
            'action' => 'ListApplicationSupportedProvisionProtocolTypes',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListApplicationSupportedProvisionProtocolTypesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 应用支持账户同步类型列表.
     *
     * @param request - ListApplicationSupportedProvisionProtocolTypesRequest
     *
     * @returns ListApplicationSupportedProvisionProtocolTypesResponse
     *
     * @param ListApplicationSupportedProvisionProtocolTypesRequest $request
     *
     * @return ListApplicationSupportedProvisionProtocolTypesResponse
     */
    public function listApplicationSupportedProvisionProtocolTypes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listApplicationSupportedProvisionProtocolTypesWithOptions($request, $runtime);
    }

    /**
     * 创建应用Token.
     *
     * @param request - ListApplicationTokensRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListApplicationTokensResponse
     *
     * @param ListApplicationTokensRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ListApplicationTokensResponse
     */
    public function listApplicationTokensWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->applicationId) {
            @$query['ApplicationId'] = $request->applicationId;
        }

        if (null !== $request->applicationTokenType) {
            @$query['ApplicationTokenType'] = $request->applicationTokenType;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListApplicationTokens',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListApplicationTokensResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建应用Token.
     *
     * @param request - ListApplicationTokensRequest
     *
     * @returns ListApplicationTokensResponse
     *
     * @param ListApplicationTokensRequest $request
     *
     * @return ListApplicationTokensResponse
     */
    public function listApplicationTokens($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listApplicationTokensWithOptions($request, $runtime);
    }

    /**
     * Queries the information about one or multiple Employee Identity and Access Management (EIAM) applications by page.
     *
     * @param request - ListApplicationsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
        if (null !== $request->applicationCreationType) {
            @$query['ApplicationCreationType'] = $request->applicationCreationType;
        }

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
            'action' => 'ListApplications',
            'version' => '2021-12-01',
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
     * Queries the information about one or multiple Employee Identity and Access Management (EIAM) applications by page.
     *
     * @param request - ListApplicationsRequest
     *
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
     * 查询授权规则关联的应用列表.
     *
     * @param request - ListApplicationsForAuthorizationRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListApplicationsForAuthorizationRuleResponse
     *
     * @param ListApplicationsForAuthorizationRuleRequest $request
     * @param RuntimeOptions                              $runtime
     *
     * @return ListApplicationsForAuthorizationRuleResponse
     */
    public function listApplicationsForAuthorizationRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->authorizationRuleId) {
            @$query['AuthorizationRuleId'] = $request->authorizationRuleId;
        }

        if (null !== $request->filter) {
            @$query['Filter'] = $request->filter;
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

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListApplicationsForAuthorizationRule',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListApplicationsForAuthorizationRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询授权规则关联的应用列表.
     *
     * @param request - ListApplicationsForAuthorizationRuleRequest
     *
     * @returns ListApplicationsForAuthorizationRuleResponse
     *
     * @param ListApplicationsForAuthorizationRuleRequest $request
     *
     * @return ListApplicationsForAuthorizationRuleResponse
     */
    public function listApplicationsForAuthorizationRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listApplicationsForAuthorizationRuleWithOptions($request, $runtime);
    }

    /**
     * 查询一个EIAM组可访问的应用列表.
     *
     * @param request - ListApplicationsForGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListApplicationsForGroupResponse
     *
     * @param ListApplicationsForGroupRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ListApplicationsForGroupResponse
     */
    public function listApplicationsForGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->applicationIds) {
            @$query['ApplicationIds'] = $request->applicationIds;
        }

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

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListApplicationsForGroup',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListApplicationsForGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询一个EIAM组可访问的应用列表.
     *
     * @param request - ListApplicationsForGroupRequest
     *
     * @returns ListApplicationsForGroupResponse
     *
     * @param ListApplicationsForGroupRequest $request
     *
     * @return ListApplicationsForGroupResponse
     */
    public function listApplicationsForGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listApplicationsForGroupWithOptions($request, $runtime);
    }

    /**
     * 获取网络访问端点下的App信息。
     *
     * @param request - ListApplicationsForNetworkAccessEndpointRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListApplicationsForNetworkAccessEndpointResponse
     *
     * @param ListApplicationsForNetworkAccessEndpointRequest $request
     * @param RuntimeOptions                                  $runtime
     *
     * @return ListApplicationsForNetworkAccessEndpointResponse
     */
    public function listApplicationsForNetworkAccessEndpointWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->networkAccessEndpointId) {
            @$query['NetworkAccessEndpointId'] = $request->networkAccessEndpointId;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListApplicationsForNetworkAccessEndpoint',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListApplicationsForNetworkAccessEndpointResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取网络访问端点下的App信息。
     *
     * @param request - ListApplicationsForNetworkAccessEndpointRequest
     *
     * @returns ListApplicationsForNetworkAccessEndpointResponse
     *
     * @param ListApplicationsForNetworkAccessEndpointRequest $request
     *
     * @return ListApplicationsForNetworkAccessEndpointResponse
     */
    public function listApplicationsForNetworkAccessEndpoint($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listApplicationsForNetworkAccessEndpointWithOptions($request, $runtime);
    }

    /**
     * 获取NetworkZone关联的应用列表.
     *
     * @param request - ListApplicationsForNetworkZoneRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListApplicationsForNetworkZoneResponse
     *
     * @param ListApplicationsForNetworkZoneRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return ListApplicationsForNetworkZoneResponse
     */
    public function listApplicationsForNetworkZoneWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->networkZoneId) {
            @$query['NetworkZoneId'] = $request->networkZoneId;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->previousToken) {
            @$query['PreviousToken'] = $request->previousToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListApplicationsForNetworkZone',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListApplicationsForNetworkZoneResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取NetworkZone关联的应用列表.
     *
     * @param request - ListApplicationsForNetworkZoneRequest
     *
     * @returns ListApplicationsForNetworkZoneResponse
     *
     * @param ListApplicationsForNetworkZoneRequest $request
     *
     * @return ListApplicationsForNetworkZoneResponse
     */
    public function listApplicationsForNetworkZone($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listApplicationsForNetworkZoneWithOptions($request, $runtime);
    }

    /**
     * Queries the applications that an Employee Identity and Access Management (EIAM) organization can access. The return result includes the IDs of the applications. If you want to obtain the details of the applications, call the GetApplication operation.
     *
     * @remarks
     * You can only query the permissions that are directly granted to the EIAM organization by calling the ListApplicationsForOrganizationalUnit operation. You can filter applications by configuring the **ApplicationIds** parameter when you call this operation.
     *
     * @param request - ListApplicationsForOrganizationalUnitRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
            'action' => 'ListApplicationsForOrganizationalUnit',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListApplicationsForOrganizationalUnitResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the applications that an Employee Identity and Access Management (EIAM) organization can access. The return result includes the IDs of the applications. If you want to obtain the details of the applications, call the GetApplication operation.
     *
     * @remarks
     * You can only query the permissions that are directly granted to the EIAM organization by calling the ListApplicationsForOrganizationalUnit operation. You can filter applications by configuring the **ApplicationIds** parameter when you call this operation.
     *
     * @param request - ListApplicationsForOrganizationalUnitRequest
     *
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
     *
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
            'action' => 'ListApplicationsForUser',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListApplicationsForUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the applications that an Employee Identity and Access Management (EIAM) account can access. The return result includes the IDs of the applications. If you want to obtain the details of the applications, call the GetApplication operation.
     *
     * @param request - ListApplicationsForUserRequest
     *
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
     * 查询授权资源信息列表.
     *
     * @param request - ListAuthorizationResourcesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAuthorizationResourcesResponse
     *
     * @param ListAuthorizationResourcesRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return ListAuthorizationResourcesResponse
     */
    public function listAuthorizationResourcesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->authorizationRuleId) {
            @$query['AuthorizationRuleId'] = $request->authorizationRuleId;
        }

        if (null !== $request->filter) {
            @$query['Filter'] = $request->filter;
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

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListAuthorizationResources',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListAuthorizationResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询授权资源信息列表.
     *
     * @param request - ListAuthorizationResourcesRequest
     *
     * @returns ListAuthorizationResourcesResponse
     *
     * @param ListAuthorizationResourcesRequest $request
     *
     * @return ListAuthorizationResourcesResponse
     */
    public function listAuthorizationResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAuthorizationResourcesWithOptions($request, $runtime);
    }

    /**
     * 查询授权规则信息列表.
     *
     * @param request - ListAuthorizationRulesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAuthorizationRulesResponse
     *
     * @param ListAuthorizationRulesRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ListAuthorizationRulesResponse
     */
    public function listAuthorizationRulesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->filter) {
            @$query['Filter'] = $request->filter;
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

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListAuthorizationRules',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListAuthorizationRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询授权规则信息列表.
     *
     * @param request - ListAuthorizationRulesRequest
     *
     * @returns ListAuthorizationRulesResponse
     *
     * @param ListAuthorizationRulesRequest $request
     *
     * @return ListAuthorizationRulesResponse
     */
    public function listAuthorizationRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAuthorizationRulesWithOptions($request, $runtime);
    }

    /**
     * 查询应用关联的授权规则信息列表.
     *
     * @param request - ListAuthorizationRulesForApplicationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAuthorizationRulesForApplicationResponse
     *
     * @param ListAuthorizationRulesForApplicationRequest $request
     * @param RuntimeOptions                              $runtime
     *
     * @return ListAuthorizationRulesForApplicationResponse
     */
    public function listAuthorizationRulesForApplicationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->applicationId) {
            @$query['ApplicationId'] = $request->applicationId;
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

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListAuthorizationRulesForApplication',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListAuthorizationRulesForApplicationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询应用关联的授权规则信息列表.
     *
     * @param request - ListAuthorizationRulesForApplicationRequest
     *
     * @returns ListAuthorizationRulesForApplicationResponse
     *
     * @param ListAuthorizationRulesForApplicationRequest $request
     *
     * @return ListAuthorizationRulesForApplicationResponse
     */
    public function listAuthorizationRulesForApplication($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAuthorizationRulesForApplicationWithOptions($request, $runtime);
    }

    /**
     * 查询组关联的授权规则信息列表.
     *
     * @param request - ListAuthorizationRulesForGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAuthorizationRulesForGroupResponse
     *
     * @param ListAuthorizationRulesForGroupRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return ListAuthorizationRulesForGroupResponse
     */
    public function listAuthorizationRulesForGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
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

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListAuthorizationRulesForGroup',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListAuthorizationRulesForGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询组关联的授权规则信息列表.
     *
     * @param request - ListAuthorizationRulesForGroupRequest
     *
     * @returns ListAuthorizationRulesForGroupResponse
     *
     * @param ListAuthorizationRulesForGroupRequest $request
     *
     * @return ListAuthorizationRulesForGroupResponse
     */
    public function listAuthorizationRulesForGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAuthorizationRulesForGroupWithOptions($request, $runtime);
    }

    /**
     * 查询用户关联的授权规则信息列表.
     *
     * @param request - ListAuthorizationRulesForUserRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAuthorizationRulesForUserResponse
     *
     * @param ListAuthorizationRulesForUserRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return ListAuthorizationRulesForUserResponse
     */
    public function listAuthorizationRulesForUserWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
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
            'action' => 'ListAuthorizationRulesForUser',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListAuthorizationRulesForUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询用户关联的授权规则信息列表.
     *
     * @param request - ListAuthorizationRulesForUserRequest
     *
     * @returns ListAuthorizationRulesForUserResponse
     *
     * @param ListAuthorizationRulesForUserRequest $request
     *
     * @return ListAuthorizationRulesForUserResponse
     */
    public function listAuthorizationRulesForUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAuthorizationRulesForUserWithOptions($request, $runtime);
    }

    /**
     * 获取品牌列表.
     *
     * @param request - ListBrandsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListBrandsResponse
     *
     * @param ListBrandsRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return ListBrandsResponse
     */
    public function listBrandsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->previousToken) {
            @$query['PreviousToken'] = $request->previousToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListBrands',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListBrandsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取品牌列表.
     *
     * @param request - ListBrandsRequest
     *
     * @returns ListBrandsResponse
     *
     * @param ListBrandsRequest $request
     *
     * @return ListBrandsResponse
     */
    public function listBrands($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listBrandsWithOptions($request, $runtime);
    }

    /**
     * 查询指定应用所属的全部ClientPublicKey.
     *
     * @param request - ListClientPublicKeysRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListClientPublicKeysResponse
     *
     * @param ListClientPublicKeysRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ListClientPublicKeysResponse
     */
    public function listClientPublicKeysWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->applicationId) {
            @$query['ApplicationId'] = $request->applicationId;
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

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListClientPublicKeys',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListClientPublicKeysResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询指定应用所属的全部ClientPublicKey.
     *
     * @param request - ListClientPublicKeysRequest
     *
     * @returns ListClientPublicKeysResponse
     *
     * @param ListClientPublicKeysRequest $request
     *
     * @return ListClientPublicKeysResponse
     */
    public function listClientPublicKeys($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listClientPublicKeysWithOptions($request, $runtime);
    }

    /**
     * 查询云角色列表.
     *
     * @param request - ListCloudAccountRolesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListCloudAccountRolesResponse
     *
     * @param ListCloudAccountRolesRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ListCloudAccountRolesResponse
     */
    public function listCloudAccountRolesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->cloudAccountId) {
            @$query['CloudAccountId'] = $request->cloudAccountId;
        }

        if (null !== $request->filter) {
            @$query['Filter'] = $request->filter;
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

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListCloudAccountRoles',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListCloudAccountRolesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询云角色列表.
     *
     * @param request - ListCloudAccountRolesRequest
     *
     * @returns ListCloudAccountRolesResponse
     *
     * @param ListCloudAccountRolesRequest $request
     *
     * @return ListCloudAccountRolesResponse
     */
    public function listCloudAccountRoles($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listCloudAccountRolesWithOptions($request, $runtime);
    }

    /**
     * 查询云账号列表.
     *
     * @param request - ListCloudAccountsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListCloudAccountsResponse
     *
     * @param ListCloudAccountsRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ListCloudAccountsResponse
     */
    public function listCloudAccountsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->filter) {
            @$query['Filter'] = $request->filter;
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

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListCloudAccounts',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListCloudAccountsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询云账号列表.
     *
     * @param request - ListCloudAccountsRequest
     *
     * @returns ListCloudAccountsResponse
     *
     * @param ListCloudAccountsRequest $request
     *
     * @return ListCloudAccountsResponse
     */
    public function listCloudAccounts($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listCloudAccountsWithOptions($request, $runtime);
    }

    /**
     * List of Conditional Access Policies.
     *
     * @remarks
     * Paginated query for the list of conditional access policies
     *
     * @param request - ListConditionalAccessPoliciesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListConditionalAccessPoliciesResponse
     *
     * @param ListConditionalAccessPoliciesRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return ListConditionalAccessPoliciesResponse
     */
    public function listConditionalAccessPoliciesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->previousToken) {
            @$query['PreviousToken'] = $request->previousToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListConditionalAccessPolicies',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListConditionalAccessPoliciesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * List of Conditional Access Policies.
     *
     * @remarks
     * Paginated query for the list of conditional access policies
     *
     * @param request - ListConditionalAccessPoliciesRequest
     *
     * @returns ListConditionalAccessPoliciesResponse
     *
     * @param ListConditionalAccessPoliciesRequest $request
     *
     * @return ListConditionalAccessPoliciesResponse
     */
    public function listConditionalAccessPolicies($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listConditionalAccessPoliciesWithOptions($request, $runtime);
    }

    /**
     * 获取应用关联的条件访问策略列表.
     *
     * @param request - ListConditionalAccessPoliciesForApplicationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListConditionalAccessPoliciesForApplicationResponse
     *
     * @param ListConditionalAccessPoliciesForApplicationRequest $request
     * @param RuntimeOptions                                     $runtime
     *
     * @return ListConditionalAccessPoliciesForApplicationResponse
     */
    public function listConditionalAccessPoliciesForApplicationWithOptions($request, $runtime)
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
            'action' => 'ListConditionalAccessPoliciesForApplication',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListConditionalAccessPoliciesForApplicationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取应用关联的条件访问策略列表.
     *
     * @param request - ListConditionalAccessPoliciesForApplicationRequest
     *
     * @returns ListConditionalAccessPoliciesForApplicationResponse
     *
     * @param ListConditionalAccessPoliciesForApplicationRequest $request
     *
     * @return ListConditionalAccessPoliciesForApplicationResponse
     */
    public function listConditionalAccessPoliciesForApplication($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listConditionalAccessPoliciesForApplicationWithOptions($request, $runtime);
    }

    /**
     * List Conditional Access Policies Associated with Network Areas.
     *
     * @remarks
     * List Conditional Access Policies Associated with Network Zones
     *
     * @param request - ListConditionalAccessPoliciesForNetworkZoneRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListConditionalAccessPoliciesForNetworkZoneResponse
     *
     * @param ListConditionalAccessPoliciesForNetworkZoneRequest $request
     * @param RuntimeOptions                                     $runtime
     *
     * @return ListConditionalAccessPoliciesForNetworkZoneResponse
     */
    public function listConditionalAccessPoliciesForNetworkZoneWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->networkZoneId) {
            @$query['NetworkZoneId'] = $request->networkZoneId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListConditionalAccessPoliciesForNetworkZone',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListConditionalAccessPoliciesForNetworkZoneResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * List Conditional Access Policies Associated with Network Areas.
     *
     * @remarks
     * List Conditional Access Policies Associated with Network Zones
     *
     * @param request - ListConditionalAccessPoliciesForNetworkZoneRequest
     *
     * @returns ListConditionalAccessPoliciesForNetworkZoneResponse
     *
     * @param ListConditionalAccessPoliciesForNetworkZoneRequest $request
     *
     * @return ListConditionalAccessPoliciesForNetworkZoneResponse
     */
    public function listConditionalAccessPoliciesForNetworkZone($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listConditionalAccessPoliciesForNetworkZoneWithOptions($request, $runtime);
    }

    /**
     * 获取用户关联的条件访问策略列表.
     *
     * @param request - ListConditionalAccessPoliciesForUserRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListConditionalAccessPoliciesForUserResponse
     *
     * @param ListConditionalAccessPoliciesForUserRequest $request
     * @param RuntimeOptions                              $runtime
     *
     * @return ListConditionalAccessPoliciesForUserResponse
     */
    public function listConditionalAccessPoliciesForUserWithOptions($request, $runtime)
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
            'action' => 'ListConditionalAccessPoliciesForUser',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListConditionalAccessPoliciesForUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取用户关联的条件访问策略列表.
     *
     * @param request - ListConditionalAccessPoliciesForUserRequest
     *
     * @returns ListConditionalAccessPoliciesForUserResponse
     *
     * @param ListConditionalAccessPoliciesForUserRequest $request
     *
     * @return ListConditionalAccessPoliciesForUserResponse
     */
    public function listConditionalAccessPoliciesForUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listConditionalAccessPoliciesForUserWithOptions($request, $runtime);
    }

    /**
     * 自定义条款列表查询。
     *
     * @param request - ListCustomPrivacyPoliciesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListCustomPrivacyPoliciesResponse
     *
     * @param ListCustomPrivacyPoliciesRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ListCustomPrivacyPoliciesResponse
     */
    public function listCustomPrivacyPoliciesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->customPrivacyPolicyNameStartsWith) {
            @$query['CustomPrivacyPolicyNameStartsWith'] = $request->customPrivacyPolicyNameStartsWith;
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

        if (null !== $request->previousToken) {
            @$query['PreviousToken'] = $request->previousToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListCustomPrivacyPolicies',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListCustomPrivacyPoliciesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 自定义条款列表查询。
     *
     * @param request - ListCustomPrivacyPoliciesRequest
     *
     * @returns ListCustomPrivacyPoliciesResponse
     *
     * @param ListCustomPrivacyPoliciesRequest $request
     *
     * @return ListCustomPrivacyPoliciesResponse
     */
    public function listCustomPrivacyPolicies($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listCustomPrivacyPoliciesWithOptions($request, $runtime);
    }

    /**
     * 获取品牌关联资源的资源.
     *
     * @param request - ListCustomPrivacyPoliciesForBrandRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListCustomPrivacyPoliciesForBrandResponse
     *
     * @param ListCustomPrivacyPoliciesForBrandRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return ListCustomPrivacyPoliciesForBrandResponse
     */
    public function listCustomPrivacyPoliciesForBrandWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->brandId) {
            @$query['BrandId'] = $request->brandId;
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

        if (null !== $request->previousToken) {
            @$query['PreviousToken'] = $request->previousToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListCustomPrivacyPoliciesForBrand',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListCustomPrivacyPoliciesForBrandResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取品牌关联资源的资源.
     *
     * @param request - ListCustomPrivacyPoliciesForBrandRequest
     *
     * @returns ListCustomPrivacyPoliciesForBrandResponse
     *
     * @param ListCustomPrivacyPoliciesForBrandRequest $request
     *
     * @return ListCustomPrivacyPoliciesForBrandResponse
     */
    public function listCustomPrivacyPoliciesForBrand($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listCustomPrivacyPoliciesForBrandWithOptions($request, $runtime);
    }

    /**
     * Queries the proxy tokens of a domain name of an Employee Identity and Access Management (EIAM) instance.
     *
     * @param request - ListDomainProxyTokensRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
            'action' => 'ListDomainProxyTokens',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListDomainProxyTokensResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the proxy tokens of a domain name of an Employee Identity and Access Management (EIAM) instance.
     *
     * @param request - ListDomainProxyTokensRequest
     *
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
     * Queries a list of domain names of an Employee Identity and Access Management (EIAM) instance. The list contains the initial domain name and custom domain names.
     *
     * @param request - ListDomainsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
        if (null !== $request->brandId) {
            @$query['BrandId'] = $request->brandId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListDomains',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListDomainsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of domain names of an Employee Identity and Access Management (EIAM) instance. The list contains the initial domain name and custom domain names.
     *
     * @param request - ListDomainsRequest
     *
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
     * Queries the information about Employee Identity and Access Management (EIAM) V1.0 instances or EIAM V2.0 instances.
     *
     * @param request - ListEiamInstancesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
            'action' => 'ListEiamInstances',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListEiamInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about Employee Identity and Access Management (EIAM) V1.0 instances or EIAM V2.0 instances.
     *
     * @param request - ListEiamInstancesRequest
     *
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
     * Queries the regions in which Employee Identity and Access Management (EIAM) V1.0 instances or EIAM V2.0 instances reside.
     *
     * @param request - ListEiamRegionsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListEiamRegionsResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return ListEiamRegionsResponse
     */
    public function listEiamRegionsWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'ListEiamRegions',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListEiamRegionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the regions in which Employee Identity and Access Management (EIAM) V1.0 instances or EIAM V2.0 instances reside.
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
     * 查询联邦凭证提供方列表.
     *
     * @param request - ListFederatedCredentialProvidersRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListFederatedCredentialProvidersResponse
     *
     * @param ListFederatedCredentialProvidersRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return ListFederatedCredentialProvidersResponse
     */
    public function listFederatedCredentialProvidersWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->federatedCredentialProviderName) {
            @$query['FederatedCredentialProviderName'] = $request->federatedCredentialProviderName;
        }

        if (null !== $request->federatedCredentialProviderType) {
            @$query['FederatedCredentialProviderType'] = $request->federatedCredentialProviderType;
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

        if (null !== $request->previousToken) {
            @$query['PreviousToken'] = $request->previousToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListFederatedCredentialProviders',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListFederatedCredentialProvidersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询联邦凭证提供方列表.
     *
     * @param request - ListFederatedCredentialProvidersRequest
     *
     * @returns ListFederatedCredentialProvidersResponse
     *
     * @param ListFederatedCredentialProvidersRequest $request
     *
     * @return ListFederatedCredentialProvidersResponse
     */
    public function listFederatedCredentialProviders($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listFederatedCredentialProvidersWithOptions($request, $runtime);
    }

    /**
     * Queries a list of account groups in Identity as a Service (IDaaS) Employee Identity and Access Management (EIAM).
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
            'action' => 'ListGroups',
            'version' => '2021-12-01',
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
     * Queries a list of account groups in Identity as a Service (IDaaS) Employee Identity and Access Management (EIAM).
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
     * Queries a list of account groups to which the permissions to access an application are granted. The returned results contain the group IDs. You can call the GetGroup operation to query the information about an account group based on the group ID.
     *
     * @param request - ListGroupsForApplicationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
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

        if (null !== $request->applicationRoleId) {
            @$query['ApplicationRoleId'] = $request->applicationRoleId;
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
            'action' => 'ListGroupsForApplication',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListGroupsForApplicationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of account groups to which the permissions to access an application are granted. The returned results contain the group IDs. You can call the GetGroup operation to query the information about an account group based on the group ID.
     *
     * @param request - ListGroupsForApplicationRequest
     *
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
     * 查询授权规则关联的组列表.
     *
     * @param request - ListGroupsForAuthorizationRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListGroupsForAuthorizationRuleResponse
     *
     * @param ListGroupsForAuthorizationRuleRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return ListGroupsForAuthorizationRuleResponse
     */
    public function listGroupsForAuthorizationRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->authorizationRuleId) {
            @$query['AuthorizationRuleId'] = $request->authorizationRuleId;
        }

        if (null !== $request->filter) {
            @$query['Filter'] = $request->filter;
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

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListGroupsForAuthorizationRule',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListGroupsForAuthorizationRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询授权规则关联的组列表.
     *
     * @param request - ListGroupsForAuthorizationRuleRequest
     *
     * @returns ListGroupsForAuthorizationRuleResponse
     *
     * @param ListGroupsForAuthorizationRuleRequest $request
     *
     * @return ListGroupsForAuthorizationRuleResponse
     */
    public function listGroupsForAuthorizationRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listGroupsForAuthorizationRuleWithOptions($request, $runtime);
    }

    /**
     * 查询ResourceServer授权的组和Scope权限.
     *
     * @param request - ListGroupsForResourceServerRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListGroupsForResourceServerResponse
     *
     * @param ListGroupsForResourceServerRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return ListGroupsForResourceServerResponse
     */
    public function listGroupsForResourceServerWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->applicationId) {
            @$query['ApplicationId'] = $request->applicationId;
        }

        if (null !== $request->filter) {
            @$query['Filter'] = $request->filter;
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

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListGroupsForResourceServer',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListGroupsForResourceServerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询ResourceServer授权的组和Scope权限.
     *
     * @param request - ListGroupsForResourceServerRequest
     *
     * @returns ListGroupsForResourceServerResponse
     *
     * @param ListGroupsForResourceServerRequest $request
     *
     * @return ListGroupsForResourceServerResponse
     */
    public function listGroupsForResourceServer($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listGroupsForResourceServerWithOptions($request, $runtime);
    }

    /**
     * Queries a list of account groups to which an Employee Identity and Access Management (EIAM) account of Identity as a Service (IDaaS) belongs.
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
            'action' => 'ListGroupsForUser',
            'version' => '2021-12-01',
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
     * Queries a list of account groups to which an Employee Identity and Access Management (EIAM) account of Identity as a Service (IDaaS) belongs.
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
     * Query the list of identity providers.
     *
     * @param request - ListIdentityProvidersRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
        if (null !== $request->direction) {
            @$query['Direction'] = $request->direction;
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
            'action' => 'ListIdentityProviders',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListIdentityProvidersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query the list of identity providers.
     *
     * @param request - ListIdentityProvidersRequest
     *
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
     * 获取网络端点下的IdP信息。
     *
     * @param request - ListIdentityProvidersForNetworkAccessEndpointRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListIdentityProvidersForNetworkAccessEndpointResponse
     *
     * @param ListIdentityProvidersForNetworkAccessEndpointRequest $request
     * @param RuntimeOptions                                       $runtime
     *
     * @return ListIdentityProvidersForNetworkAccessEndpointResponse
     */
    public function listIdentityProvidersForNetworkAccessEndpointWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->networkAccessEndpointId) {
            @$query['NetworkAccessEndpointId'] = $request->networkAccessEndpointId;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListIdentityProvidersForNetworkAccessEndpoint',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListIdentityProvidersForNetworkAccessEndpointResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取网络端点下的IdP信息。
     *
     * @param request - ListIdentityProvidersForNetworkAccessEndpointRequest
     *
     * @returns ListIdentityProvidersForNetworkAccessEndpointResponse
     *
     * @param ListIdentityProvidersForNetworkAccessEndpointRequest $request
     *
     * @return ListIdentityProvidersForNetworkAccessEndpointResponse
     */
    public function listIdentityProvidersForNetworkAccessEndpoint($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listIdentityProvidersForNetworkAccessEndpointWithOptions($request, $runtime);
    }

    /**
     * Queries the information of one or more Enterprise Identity and Access Management (EIAM) instances of Identity as a Service (IDaaS).
     *
     * @param request - ListInstancesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
            'action' => 'ListInstances',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information of one or more Enterprise Identity and Access Management (EIAM) instances of Identity as a Service (IDaaS).
     *
     * @param request - ListInstancesRequest
     *
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
     * Get a list of regions that support network access endpoints.
     *
     * @param request - ListNetworkAccessEndpointAvailableRegionsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListNetworkAccessEndpointAvailableRegionsResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return ListNetworkAccessEndpointAvailableRegionsResponse
     */
    public function listNetworkAccessEndpointAvailableRegionsWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'ListNetworkAccessEndpointAvailableRegions',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListNetworkAccessEndpointAvailableRegionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Get a list of regions that support network access endpoints.
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
     *
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
            'action' => 'ListNetworkAccessEndpointAvailableZones',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListNetworkAccessEndpointAvailableZonesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取支持NAE的可用区列表.
     *
     * @param request - ListNetworkAccessEndpointAvailableZonesRequest
     *
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
     *
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
            'action' => 'ListNetworkAccessEndpoints',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListNetworkAccessEndpointsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 列表查询专属网络端点。
     *
     * @param request - ListNetworkAccessEndpointsRequest
     *
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
     * List the access paths under a certain network access endpoint.
     *
     * @param request - ListNetworkAccessPathsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
            'action' => 'ListNetworkAccessPaths',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListNetworkAccessPathsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * List the access paths under a certain network access endpoint.
     *
     * @param request - ListNetworkAccessPathsRequest
     *
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
     * 网络区域对象列表.
     *
     * @param request - ListNetworkZonesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListNetworkZonesResponse
     *
     * @param ListNetworkZonesRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListNetworkZonesResponse
     */
    public function listNetworkZonesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->networkZoneIds) {
            @$query['NetworkZoneIds'] = $request->networkZoneIds;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->previousToken) {
            @$query['PreviousToken'] = $request->previousToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListNetworkZones',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListNetworkZonesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 网络区域对象列表.
     *
     * @param request - ListNetworkZonesRequest
     *
     * @returns ListNetworkZonesResponse
     *
     * @param ListNetworkZonesRequest $request
     *
     * @return ListNetworkZonesResponse
     */
    public function listNetworkZones($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listNetworkZonesWithOptions($request, $runtime);
    }

    /**
     * Queries all parent organizations of an Employee Identity and Access Management (EIAM) organization.
     *
     * @param request - ListOrganizationalUnitParentsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
            'action' => 'ListOrganizationalUnitParents',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListOrganizationalUnitParentsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries all parent organizations of an Employee Identity and Access Management (EIAM) organization.
     *
     * @param request - ListOrganizationalUnitParentsRequest
     *
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
     *
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
            'action' => 'ListOrganizationalUnits',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListOrganizationalUnitsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about organizational units in Identity as a Service (IDaaS) Employee IAM (EIAM) by page.
     *
     * @param request - ListOrganizationalUnitsRequest
     *
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
     *
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

        if (null !== $request->applicationRoleId) {
            @$query['ApplicationRoleId'] = $request->applicationRoleId;
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
            'action' => 'ListOrganizationalUnitsForApplication',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListOrganizationalUnitsForApplicationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the organizations that are allowed to access an Employee Identity and Access Management (EIAM) application by page. The return result includes the IDs of the organizations. If you want to obtain the details of the organizations, call the GetOrganizationalUnit operation.
     *
     * @param request - ListOrganizationalUnitsForApplicationRequest
     *
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
     * 查询被授权到组织的ResourceServers和Scopes权限.
     *
     * @param request - ListOrganizationalUnitsForResourceServerRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListOrganizationalUnitsForResourceServerResponse
     *
     * @param ListOrganizationalUnitsForResourceServerRequest $request
     * @param RuntimeOptions                                  $runtime
     *
     * @return ListOrganizationalUnitsForResourceServerResponse
     */
    public function listOrganizationalUnitsForResourceServerWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->applicationId) {
            @$query['ApplicationId'] = $request->applicationId;
        }

        if (null !== $request->filter) {
            @$query['Filter'] = $request->filter;
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

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListOrganizationalUnitsForResourceServer',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListOrganizationalUnitsForResourceServerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询被授权到组织的ResourceServers和Scopes权限.
     *
     * @param request - ListOrganizationalUnitsForResourceServerRequest
     *
     * @returns ListOrganizationalUnitsForResourceServerResponse
     *
     * @param ListOrganizationalUnitsForResourceServerRequest $request
     *
     * @return ListOrganizationalUnitsForResourceServerResponse
     */
    public function listOrganizationalUnitsForResourceServer($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listOrganizationalUnitsForResourceServerWithOptions($request, $runtime);
    }

    /**
     * Queries the supported Alibaba Cloud regions.
     *
     * @param request - ListRegionsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListRegionsResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return ListRegionsResponse
     */
    public function listRegionsWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'ListRegions',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListRegionsResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * 查询用户的被授予ResourceServers和Scopes的权限.
     *
     * @param request - ListResourceServersForUserRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListResourceServersForUserResponse
     *
     * @param ListResourceServersForUserRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return ListResourceServersForUserResponse
     */
    public function listResourceServersForUserWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->filter) {
            @$query['Filter'] = $request->filter;
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

        if (null !== $request->userId) {
            @$query['UserId'] = $request->userId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListResourceServersForUser',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListResourceServersForUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询用户的被授予ResourceServers和Scopes的权限.
     *
     * @param request - ListResourceServersForUserRequest
     *
     * @returns ListResourceServersForUserResponse
     *
     * @param ListResourceServersForUserRequest $request
     *
     * @return ListResourceServersForUserResponse
     */
    public function listResourceServersForUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listResourceServersForUserWithOptions($request, $runtime);
    }

    /**
     * 查询同步任务
     *
     * @param request - ListSynchronizationJobsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
            'action' => 'ListSynchronizationJobs',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListSynchronizationJobsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询同步任务
     *
     * @param request - ListSynchronizationJobsRequest
     *
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
     * 查询三方登录账户绑定关系.
     *
     * @param request - ListUserAuthnSourceMappingsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListUserAuthnSourceMappingsResponse
     *
     * @param ListUserAuthnSourceMappingsRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return ListUserAuthnSourceMappingsResponse
     */
    public function listUserAuthnSourceMappingsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->identityProviderId) {
            @$query['IdentityProviderId'] = $request->identityProviderId;
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

        if (null !== $request->previousToken) {
            @$query['PreviousToken'] = $request->previousToken;
        }

        if (null !== $request->userExternalId) {
            @$query['UserExternalId'] = $request->userExternalId;
        }

        if (null !== $request->userId) {
            @$query['UserId'] = $request->userId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListUserAuthnSourceMappings',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListUserAuthnSourceMappingsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询三方登录账户绑定关系.
     *
     * @param request - ListUserAuthnSourceMappingsRequest
     *
     * @returns ListUserAuthnSourceMappingsResponse
     *
     * @param ListUserAuthnSourceMappingsRequest $request
     *
     * @return ListUserAuthnSourceMappingsResponse
     */
    public function listUserAuthnSourceMappings($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listUserAuthnSourceMappingsWithOptions($request, $runtime);
    }

    /**
     * Queries the details of accounts in Identity as a Service (IDaaS) Employee IAM (EIAM) by page.
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
            'action' => 'ListUsers',
            'version' => '2021-12-01',
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
     * Queries the details of accounts in Identity as a Service (IDaaS) Employee IAM (EIAM) by page.
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
     * Queries the accounts that are allowed to access an Employee Identity and Access Management (EIAM) application. The return results include the IDs of the accounts. If you need to obtain the details of the accounts, call the GetUser operation.
     *
     * @param request - ListUsersForApplicationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
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

        if (null !== $request->applicationRoleId) {
            @$query['ApplicationRoleId'] = $request->applicationRoleId;
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
            'action' => 'ListUsersForApplication',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListUsersForApplicationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the accounts that are allowed to access an Employee Identity and Access Management (EIAM) application. The return results include the IDs of the accounts. If you need to obtain the details of the accounts, call the GetUser operation.
     *
     * @param request - ListUsersForApplicationRequest
     *
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
     * 查询授权规则关联的账户列表.
     *
     * @param request - ListUsersForAuthorizationRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListUsersForAuthorizationRuleResponse
     *
     * @param ListUsersForAuthorizationRuleRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return ListUsersForAuthorizationRuleResponse
     */
    public function listUsersForAuthorizationRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->authorizationRuleId) {
            @$query['AuthorizationRuleId'] = $request->authorizationRuleId;
        }

        if (null !== $request->filter) {
            @$query['Filter'] = $request->filter;
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

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListUsersForAuthorizationRule',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListUsersForAuthorizationRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询授权规则关联的账户列表.
     *
     * @param request - ListUsersForAuthorizationRuleRequest
     *
     * @returns ListUsersForAuthorizationRuleResponse
     *
     * @param ListUsersForAuthorizationRuleRequest $request
     *
     * @return ListUsersForAuthorizationRuleResponse
     */
    public function listUsersForAuthorizationRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listUsersForAuthorizationRuleWithOptions($request, $runtime);
    }

    /**
     * Queries the information of accounts in an Employee Identity and Access Management (EIAM) group of Identity as a Service (IDaaS).
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
            'action' => 'ListUsersForGroup',
            'version' => '2021-12-01',
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
     * Queries the information of accounts in an Employee Identity and Access Management (EIAM) group of Identity as a Service (IDaaS).
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
     * 查询ResourceServer授权的用户和Scope权限.
     *
     * @param request - ListUsersForResourceServerRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListUsersForResourceServerResponse
     *
     * @param ListUsersForResourceServerRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return ListUsersForResourceServerResponse
     */
    public function listUsersForResourceServerWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->applicationId) {
            @$query['ApplicationId'] = $request->applicationId;
        }

        if (null !== $request->filter) {
            @$query['Filter'] = $request->filter;
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

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListUsersForResourceServer',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListUsersForResourceServerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询ResourceServer授权的用户和Scope权限.
     *
     * @param request - ListUsersForResourceServerRequest
     *
     * @returns ListUsersForResourceServerResponse
     *
     * @param ListUsersForResourceServerRequest $request
     *
     * @return ListUsersForResourceServerResponse
     */
    public function listUsersForResourceServer($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listUsersForResourceServerWithOptions($request, $runtime);
    }

    /**
     * Queries a client key of an Employee Identity and Access Management (EIAM) application. The returned key secret is masked. If you want to query the key secret that is not masked, call the ListApplicationClientSecrets operation.
     *
     * @param request - ObtainApplicationClientSecretRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
            'action' => 'ObtainApplicationClientSecret',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ObtainApplicationClientSecretResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a client key of an Employee Identity and Access Management (EIAM) application. The returned key secret is masked. If you want to query the key secret that is not masked, call the ListApplicationClientSecrets operation.
     *
     * @param request - ObtainApplicationClientSecretRequest
     *
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
     * 查询指定应用Token.
     *
     * @param request - ObtainApplicationTokenRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ObtainApplicationTokenResponse
     *
     * @param ObtainApplicationTokenRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ObtainApplicationTokenResponse
     */
    public function obtainApplicationTokenWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->applicationId) {
            @$query['ApplicationId'] = $request->applicationId;
        }

        if (null !== $request->applicationTokenId) {
            @$query['ApplicationTokenId'] = $request->applicationTokenId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ObtainApplicationToken',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ObtainApplicationTokenResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询指定应用Token.
     *
     * @param request - ObtainApplicationTokenRequest
     *
     * @returns ObtainApplicationTokenResponse
     *
     * @param ObtainApplicationTokenRequest $request
     *
     * @return ObtainApplicationTokenResponse
     */
    public function obtainApplicationToken($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->obtainApplicationTokenWithOptions($request, $runtime);
    }

    /**
     * Queries the information about a proxy token of a domain name of an Employee Identity and Access Management (EIAM) instance.
     *
     * @param request - ObtainDomainProxyTokenRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
            'action' => 'ObtainDomainProxyToken',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ObtainDomainProxyTokenResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about a proxy token of a domain name of an Employee Identity and Access Management (EIAM) instance.
     *
     * @param request - ObtainDomainProxyTokenRequest
     *
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
     * 删除一个当前应用下的指定员工的应用账号.
     *
     * @param request - RemoveApplicationAccountFromUserRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RemoveApplicationAccountFromUserResponse
     *
     * @param RemoveApplicationAccountFromUserRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return RemoveApplicationAccountFromUserResponse
     */
    public function removeApplicationAccountFromUserWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->applicationAccountId) {
            @$query['ApplicationAccountId'] = $request->applicationAccountId;
        }

        if (null !== $request->applicationId) {
            @$query['ApplicationId'] = $request->applicationId;
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
            'action' => 'RemoveApplicationAccountFromUser',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RemoveApplicationAccountFromUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除一个当前应用下的指定员工的应用账号.
     *
     * @param request - RemoveApplicationAccountFromUserRequest
     *
     * @returns RemoveApplicationAccountFromUserResponse
     *
     * @param RemoveApplicationAccountFromUserRequest $request
     *
     * @return RemoveApplicationAccountFromUserResponse
     */
    public function removeApplicationAccountFromUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeApplicationAccountFromUserWithOptions($request, $runtime);
    }

    /**
     * 将应用从授权规则中解除.
     *
     * @param request - RemoveApplicationFromAuthorizationRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RemoveApplicationFromAuthorizationRuleResponse
     *
     * @param RemoveApplicationFromAuthorizationRuleRequest $request
     * @param RuntimeOptions                                $runtime
     *
     * @return RemoveApplicationFromAuthorizationRuleResponse
     */
    public function removeApplicationFromAuthorizationRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->applicationId) {
            @$query['ApplicationId'] = $request->applicationId;
        }

        if (null !== $request->authorizationRuleId) {
            @$query['AuthorizationRuleId'] = $request->authorizationRuleId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RemoveApplicationFromAuthorizationRule',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RemoveApplicationFromAuthorizationRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 将应用从授权规则中解除.
     *
     * @param request - RemoveApplicationFromAuthorizationRuleRequest
     *
     * @returns RemoveApplicationFromAuthorizationRuleResponse
     *
     * @param RemoveApplicationFromAuthorizationRuleRequest $request
     *
     * @return RemoveApplicationFromAuthorizationRuleResponse
     */
    public function removeApplicationFromAuthorizationRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeApplicationFromAuthorizationRuleWithOptions($request, $runtime);
    }

    /**
     * 移除品牌关联条款.
     *
     * @param request - RemoveCustomPrivacyPoliciesFromBrandRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RemoveCustomPrivacyPoliciesFromBrandResponse
     *
     * @param RemoveCustomPrivacyPoliciesFromBrandRequest $request
     * @param RuntimeOptions                              $runtime
     *
     * @return RemoveCustomPrivacyPoliciesFromBrandResponse
     */
    public function removeCustomPrivacyPoliciesFromBrandWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->brandId) {
            @$query['BrandId'] = $request->brandId;
        }

        if (null !== $request->customPrivacyPolicyIds) {
            @$query['CustomPrivacyPolicyIds'] = $request->customPrivacyPolicyIds;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RemoveCustomPrivacyPoliciesFromBrand',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RemoveCustomPrivacyPoliciesFromBrandResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 移除品牌关联条款.
     *
     * @param request - RemoveCustomPrivacyPoliciesFromBrandRequest
     *
     * @returns RemoveCustomPrivacyPoliciesFromBrandResponse
     *
     * @param RemoveCustomPrivacyPoliciesFromBrandRequest $request
     *
     * @return RemoveCustomPrivacyPoliciesFromBrandResponse
     */
    public function removeCustomPrivacyPoliciesFromBrand($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeCustomPrivacyPoliciesFromBrandWithOptions($request, $runtime);
    }

    /**
     * 将组从授权规则中解除.
     *
     * @param request - RemoveGroupFromAuthorizationRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RemoveGroupFromAuthorizationRuleResponse
     *
     * @param RemoveGroupFromAuthorizationRuleRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return RemoveGroupFromAuthorizationRuleResponse
     */
    public function removeGroupFromAuthorizationRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->authorizationRuleId) {
            @$query['AuthorizationRuleId'] = $request->authorizationRuleId;
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
            'action' => 'RemoveGroupFromAuthorizationRule',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RemoveGroupFromAuthorizationRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 将组从授权规则中解除.
     *
     * @param request - RemoveGroupFromAuthorizationRuleRequest
     *
     * @returns RemoveGroupFromAuthorizationRuleResponse
     *
     * @param RemoveGroupFromAuthorizationRuleRequest $request
     *
     * @return RemoveGroupFromAuthorizationRuleResponse
     */
    public function removeGroupFromAuthorizationRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeGroupFromAuthorizationRuleWithOptions($request, $runtime);
    }

    /**
     * 将账户从授权规则中解除.
     *
     * @param request - RemoveUserFromAuthorizationRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RemoveUserFromAuthorizationRuleResponse
     *
     * @param RemoveUserFromAuthorizationRuleRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return RemoveUserFromAuthorizationRuleResponse
     */
    public function removeUserFromAuthorizationRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->authorizationRuleId) {
            @$query['AuthorizationRuleId'] = $request->authorizationRuleId;
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
            'action' => 'RemoveUserFromAuthorizationRule',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RemoveUserFromAuthorizationRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 将账户从授权规则中解除.
     *
     * @param request - RemoveUserFromAuthorizationRuleRequest
     *
     * @returns RemoveUserFromAuthorizationRuleResponse
     *
     * @param RemoveUserFromAuthorizationRuleRequest $request
     *
     * @return RemoveUserFromAuthorizationRuleResponse
     */
    public function removeUserFromAuthorizationRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeUserFromAuthorizationRuleWithOptions($request, $runtime);
    }

    /**
     * Removes an Employee Identity and Access Management (EIAM) account from multiple EIAM organizations of Identity as a Service (IDaaS). You cannot remove an account from a primary organization.
     *
     * @param request - RemoveUserFromOrganizationalUnitsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
            'action' => 'RemoveUserFromOrganizationalUnits',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RemoveUserFromOrganizationalUnitsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Removes an Employee Identity and Access Management (EIAM) account from multiple EIAM organizations of Identity as a Service (IDaaS). You cannot remove an account from a primary organization.
     *
     * @param request - RemoveUserFromOrganizationalUnitsRequest
     *
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
     *
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
            'action' => 'RemoveUsersFromGroup',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RemoveUsersFromGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Removes Employee Identity and Access Management (EIAM) accounts from an EIAM group of Identity as a Service (IDaaS).
     *
     * @param request - RemoveUsersFromGroupRequest
     *
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
     *
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

        if (null !== $request->applicationRoleId) {
            @$query['ApplicationRoleId'] = $request->applicationRoleId;
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
            'action' => 'RevokeApplicationFromGroups',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RevokeApplicationFromGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Revokes the permissions to access an application from multiple account groups at a time in Identity as a Service (IDaaS) Employee Identity and Access Management (EIAM).
     *
     * @param request - RevokeApplicationFromGroupsRequest
     *
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
     *
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

        if (null !== $request->applicationRoleId) {
            @$query['ApplicationRoleId'] = $request->applicationRoleId;
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
            'action' => 'RevokeApplicationFromOrganizationalUnits',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RevokeApplicationFromOrganizationalUnitsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Revokes the permissions to access an application from multiple Employee Identity and Access Management (EIAM) organizations at a time.
     *
     * @param request - RevokeApplicationFromOrganizationalUnitsRequest
     *
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
     *
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

        if (null !== $request->applicationRoleId) {
            @$query['ApplicationRoleId'] = $request->applicationRoleId;
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
            'action' => 'RevokeApplicationFromUsers',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RevokeApplicationFromUsersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Revokes the permissions to access an application from multiple Employee Identity and Access Management (EIAM) accounts at a time.
     *
     * @param request - RevokeApplicationFromUsersRequest
     *
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
     * 解除指定ResourceServer到Client的授权.
     *
     * @param request - RevokeResourceServerFromClientRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RevokeResourceServerFromClientResponse
     *
     * @param RevokeResourceServerFromClientRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return RevokeResourceServerFromClientResponse
     */
    public function revokeResourceServerFromClientWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientApplicationId) {
            @$query['ClientApplicationId'] = $request->clientApplicationId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->resourceServerApplicationId) {
            @$query['ResourceServerApplicationId'] = $request->resourceServerApplicationId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RevokeResourceServerFromClient',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RevokeResourceServerFromClientResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 解除指定ResourceServer到Client的授权.
     *
     * @param request - RevokeResourceServerFromClientRequest
     *
     * @returns RevokeResourceServerFromClientResponse
     *
     * @param RevokeResourceServerFromClientRequest $request
     *
     * @return RevokeResourceServerFromClientResponse
     */
    public function revokeResourceServerFromClient($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->revokeResourceServerFromClientWithOptions($request, $runtime);
    }

    /**
     * 解除指定ResourceServer下的Scope给Client.
     *
     * @param request - RevokeResourceServerScopesFromClientRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RevokeResourceServerScopesFromClientResponse
     *
     * @param RevokeResourceServerScopesFromClientRequest $request
     * @param RuntimeOptions                              $runtime
     *
     * @return RevokeResourceServerScopesFromClientResponse
     */
    public function revokeResourceServerScopesFromClientWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientApplicationId) {
            @$query['ClientApplicationId'] = $request->clientApplicationId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->resourceServerApplicationId) {
            @$query['ResourceServerApplicationId'] = $request->resourceServerApplicationId;
        }

        if (null !== $request->resourceServerScopeIds) {
            @$query['ResourceServerScopeIds'] = $request->resourceServerScopeIds;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RevokeResourceServerScopesFromClient',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RevokeResourceServerScopesFromClientResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 解除指定ResourceServer下的Scope给Client.
     *
     * @param request - RevokeResourceServerScopesFromClientRequest
     *
     * @returns RevokeResourceServerScopesFromClientResponse
     *
     * @param RevokeResourceServerScopesFromClientRequest $request
     *
     * @return RevokeResourceServerScopesFromClientResponse
     */
    public function revokeResourceServerScopesFromClient($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->revokeResourceServerScopesFromClientWithOptions($request, $runtime);
    }

    /**
     * 取消被授予到组的ResourceServerScope权限.
     *
     * @param request - RevokeResourceServerScopesFromGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RevokeResourceServerScopesFromGroupResponse
     *
     * @param RevokeResourceServerScopesFromGroupRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return RevokeResourceServerScopesFromGroupResponse
     */
    public function revokeResourceServerScopesFromGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->applicationId) {
            @$query['ApplicationId'] = $request->applicationId;
        }

        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->resourceServerScopeIds) {
            @$query['ResourceServerScopeIds'] = $request->resourceServerScopeIds;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RevokeResourceServerScopesFromGroup',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RevokeResourceServerScopesFromGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 取消被授予到组的ResourceServerScope权限.
     *
     * @param request - RevokeResourceServerScopesFromGroupRequest
     *
     * @returns RevokeResourceServerScopesFromGroupResponse
     *
     * @param RevokeResourceServerScopesFromGroupRequest $request
     *
     * @return RevokeResourceServerScopesFromGroupResponse
     */
    public function revokeResourceServerScopesFromGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->revokeResourceServerScopesFromGroupWithOptions($request, $runtime);
    }

    /**
     * 取消被授予到组织的ResourceServerScope权限.
     *
     * @param request - RevokeResourceServerScopesFromOrganizationalUnitRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RevokeResourceServerScopesFromOrganizationalUnitResponse
     *
     * @param RevokeResourceServerScopesFromOrganizationalUnitRequest $request
     * @param RuntimeOptions                                          $runtime
     *
     * @return RevokeResourceServerScopesFromOrganizationalUnitResponse
     */
    public function revokeResourceServerScopesFromOrganizationalUnitWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->applicationId) {
            @$query['ApplicationId'] = $request->applicationId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->organizationalUnitId) {
            @$query['OrganizationalUnitId'] = $request->organizationalUnitId;
        }

        if (null !== $request->resourceServerScopeIds) {
            @$query['ResourceServerScopeIds'] = $request->resourceServerScopeIds;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RevokeResourceServerScopesFromOrganizationalUnit',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RevokeResourceServerScopesFromOrganizationalUnitResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 取消被授予到组织的ResourceServerScope权限.
     *
     * @param request - RevokeResourceServerScopesFromOrganizationalUnitRequest
     *
     * @returns RevokeResourceServerScopesFromOrganizationalUnitResponse
     *
     * @param RevokeResourceServerScopesFromOrganizationalUnitRequest $request
     *
     * @return RevokeResourceServerScopesFromOrganizationalUnitResponse
     */
    public function revokeResourceServerScopesFromOrganizationalUnit($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->revokeResourceServerScopesFromOrganizationalUnitWithOptions($request, $runtime);
    }

    /**
     * 取消被授予用户的ResourceServerScope权限.
     *
     * @param request - RevokeResourceServerScopesFromUserRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RevokeResourceServerScopesFromUserResponse
     *
     * @param RevokeResourceServerScopesFromUserRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return RevokeResourceServerScopesFromUserResponse
     */
    public function revokeResourceServerScopesFromUserWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->applicationId) {
            @$query['ApplicationId'] = $request->applicationId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->resourceServerScopeIds) {
            @$query['ResourceServerScopeIds'] = $request->resourceServerScopeIds;
        }

        if (null !== $request->userId) {
            @$query['UserId'] = $request->userId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RevokeResourceServerScopesFromUser',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RevokeResourceServerScopesFromUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 取消被授予用户的ResourceServerScope权限.
     *
     * @param request - RevokeResourceServerScopesFromUserRequest
     *
     * @returns RevokeResourceServerScopesFromUserResponse
     *
     * @param RevokeResourceServerScopesFromUserRequest $request
     *
     * @return RevokeResourceServerScopesFromUserResponse
     */
    public function revokeResourceServerScopesFromUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->revokeResourceServerScopesFromUserWithOptions($request, $runtime);
    }

    /**
     * Creates a synchronization job and immediately runs the job.
     *
     * @param request - RunSynchronizationJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
            'action' => 'RunSynchronizationJob',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RunSynchronizationJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a synchronization job and immediately runs the job.
     *
     * @param request - RunSynchronizationJobRequest
     *
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
     *
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
            'action' => 'SetApplicationGrantScope',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SetApplicationGrantScopeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Configures the permissions of the Developer API feature of an Employee Identity and Access Management (EIAM) application.
     *
     * @param request - SetApplicationGrantScopeRequest
     *
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
     *
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

        if (null !== $request->networkAccessEndpointId) {
            @$query['NetworkAccessEndpointId'] = $request->networkAccessEndpointId;
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
            'action' => 'SetApplicationProvisioningConfig',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SetApplicationProvisioningConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Configures the account synchronization feature for an application in Identity as a Service (IDaaS) Employee Identity and Access Management (EIAM).
     *
     * @param request - SetApplicationProvisioningConfigRequest
     *
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
     *
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
            'action' => 'SetApplicationProvisioningScope',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SetApplicationProvisioningScopeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Sets the account synchronization scope of applications in Identity as a Service (IDaaS) Employee IAM (EIAM). This scope is the same as the scope within which developers can call the DeveloperAPI to query and manage accounts.
     *
     * @param request - SetApplicationProvisioningScopeRequest
     *
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
     * 配置应用同步用户主组织.
     *
     * @param request - SetApplicationProvisioningUserPrimaryOrganizationalUnitRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SetApplicationProvisioningUserPrimaryOrganizationalUnitResponse
     *
     * @param SetApplicationProvisioningUserPrimaryOrganizationalUnitRequest $request
     * @param RuntimeOptions                                                 $runtime
     *
     * @return SetApplicationProvisioningUserPrimaryOrganizationalUnitResponse
     */
    public function setApplicationProvisioningUserPrimaryOrganizationalUnitWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->applicationId) {
            @$query['ApplicationId'] = $request->applicationId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->userPrimaryOrganizationalUnitId) {
            @$query['UserPrimaryOrganizationalUnitId'] = $request->userPrimaryOrganizationalUnitId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SetApplicationProvisioningUserPrimaryOrganizationalUnit',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SetApplicationProvisioningUserPrimaryOrganizationalUnitResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 配置应用同步用户主组织.
     *
     * @param request - SetApplicationProvisioningUserPrimaryOrganizationalUnitRequest
     *
     * @returns SetApplicationProvisioningUserPrimaryOrganizationalUnitResponse
     *
     * @param SetApplicationProvisioningUserPrimaryOrganizationalUnitRequest $request
     *
     * @return SetApplicationProvisioningUserPrimaryOrganizationalUnitResponse
     */
    public function setApplicationProvisioningUserPrimaryOrganizationalUnit($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setApplicationProvisioningUserPrimaryOrganizationalUnitWithOptions($request, $runtime);
    }

    /**
     * 设置ResourceServer的Identifier.
     *
     * @param request - SetApplicationResourceServerIdentifierRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SetApplicationResourceServerIdentifierResponse
     *
     * @param SetApplicationResourceServerIdentifierRequest $request
     * @param RuntimeOptions                                $runtime
     *
     * @return SetApplicationResourceServerIdentifierResponse
     */
    public function setApplicationResourceServerIdentifierWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->applicationId) {
            @$query['ApplicationId'] = $request->applicationId;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->resourceServerIdentifier) {
            @$query['ResourceServerIdentifier'] = $request->resourceServerIdentifier;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SetApplicationResourceServerIdentifier',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SetApplicationResourceServerIdentifierResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 设置ResourceServer的Identifier.
     *
     * @param request - SetApplicationResourceServerIdentifierRequest
     *
     * @returns SetApplicationResourceServerIdentifierResponse
     *
     * @param SetApplicationResourceServerIdentifierRequest $request
     *
     * @return SetApplicationResourceServerIdentifierResponse
     */
    public function setApplicationResourceServerIdentifier($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setApplicationResourceServerIdentifierWithOptions($request, $runtime);
    }

    /**
     * Specifies the single sign-on (SSO) configuration attributes of an application in Identity as a Service (IDaaS) Employee IAM (EIAM).
     *
     * @remarks
     * In IDaaS EIAM, the application management feature supports multiple SSO protocols for applications, including SAML 2.0 and OIDC protocols. Each application supports only one protocol, and the protocol cannot be changed after the application is created. You can specify the SSO configuration attributes of an application based on the supported SSO protocol.
     *
     * @param request - SetApplicationSsoConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
            'action' => 'SetApplicationSsoConfig',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SetApplicationSsoConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Specifies the single sign-on (SSO) configuration attributes of an application in Identity as a Service (IDaaS) Employee IAM (EIAM).
     *
     * @remarks
     * In IDaaS EIAM, the application management feature supports multiple SSO protocols for applications, including SAML 2.0 and OIDC protocols. Each application supports only one protocol, and the protocol cannot be changed after the application is created. You can specify the SSO configuration attributes of an application based on the supported SSO protocol.
     *
     * @param request - SetApplicationSsoConfigRequest
     *
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
     * Sets a domain name of an Employee Identity and Access Management (EIAM) instance as the default domain name.
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
            'action' => 'SetDefaultDomain',
            'version' => '2021-12-01',
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
     * Sets a domain name of an Employee Identity and Access Management (EIAM) instance as the default domain name.
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
     * Configures a forgot password policy for an Employee Identity and Access Management (EIAM) instance of Identity as a Service (IDaaS).
     *
     * @param request - SetForgetPasswordConfigurationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
            'action' => 'SetForgetPasswordConfiguration',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SetForgetPasswordConfigurationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Configures a forgot password policy for an Employee Identity and Access Management (EIAM) instance of Identity as a Service (IDaaS).
     *
     * @param request - SetForgetPasswordConfigurationRequest
     *
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
     * Update IdP synchronization configuration.
     *
     * @param request - SetIdentityProviderUdPullConfigurationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
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

        if (null !== $request->periodicSyncConfig) {
            @$query['PeriodicSyncConfig'] = $request->periodicSyncConfig;
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
            'action' => 'SetIdentityProviderUdPullConfiguration',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SetIdentityProviderUdPullConfigurationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Update IdP synchronization configuration.
     *
     * @param request - SetIdentityProviderUdPullConfigurationRequest
     *
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
     * 为品牌设置登录后跳转应用.
     *
     * @param request - SetLoginRedirectApplicationForBrandRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SetLoginRedirectApplicationForBrandResponse
     *
     * @param SetLoginRedirectApplicationForBrandRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return SetLoginRedirectApplicationForBrandResponse
     */
    public function setLoginRedirectApplicationForBrandWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->applicationId) {
            @$query['ApplicationId'] = $request->applicationId;
        }

        if (null !== $request->brandId) {
            @$query['BrandId'] = $request->brandId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SetLoginRedirectApplicationForBrand',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SetLoginRedirectApplicationForBrandResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 为品牌设置登录后跳转应用.
     *
     * @param request - SetLoginRedirectApplicationForBrandRequest
     *
     * @returns SetLoginRedirectApplicationForBrandResponse
     *
     * @param SetLoginRedirectApplicationForBrandRequest $request
     *
     * @return SetLoginRedirectApplicationForBrandResponse
     */
    public function setLoginRedirectApplicationForBrand($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setLoginRedirectApplicationForBrandWithOptions($request, $runtime);
    }

    /**
     * Configures a password complexity policy for an Employee Identity and Access Management (EIAM) instance of Identity as a Service (IDaaS).
     *
     * @param request - SetPasswordComplexityConfigurationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
            'action' => 'SetPasswordComplexityConfiguration',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SetPasswordComplexityConfigurationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Configures a password complexity policy for an Employee Identity and Access Management (EIAM) instance of Identity as a Service (IDaaS).
     *
     * @param request - SetPasswordComplexityConfigurationRequest
     *
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
     *
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
            'action' => 'SetPasswordExpirationConfiguration',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SetPasswordExpirationConfigurationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Configures a password expiration policy for an Employee Identity and Access Management (EIAM) instance of Identity as a Service (IDaaS).
     *
     * @param request - SetPasswordExpirationConfigurationRequest
     *
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
     *
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
            'action' => 'SetPasswordHistoryConfiguration',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SetPasswordHistoryConfigurationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Configures a password history policy for an Employee Identity and Access Management (EIAM) instance of Identity as a Service (IDaaS).
     *
     * @param request - SetPasswordHistoryConfigurationRequest
     *
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
     *
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
            'action' => 'SetPasswordInitializationConfiguration',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SetPasswordInitializationConfigurationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Sets the password initialization configurations for an Employee Identity and Access Management (EIAM) instance of Identity as a Service (IDaaS).
     *
     * @param request - SetPasswordInitializationConfigurationRequest
     *
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
     * 设置指定的应用ClientPublicKey优先启用状态
     *
     * @param request - SetPrimaryClientPublicKeyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SetPrimaryClientPublicKeyResponse
     *
     * @param SetPrimaryClientPublicKeyRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return SetPrimaryClientPublicKeyResponse
     */
    public function setPrimaryClientPublicKeyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->applicationId) {
            @$query['ApplicationId'] = $request->applicationId;
        }

        if (null !== $request->clientPublicKeyId) {
            @$query['ClientPublicKeyId'] = $request->clientPublicKeyId;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SetPrimaryClientPublicKey',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SetPrimaryClientPublicKeyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 设置指定的应用ClientPublicKey优先启用状态
     *
     * @param request - SetPrimaryClientPublicKeyRequest
     *
     * @returns SetPrimaryClientPublicKeyResponse
     *
     * @param SetPrimaryClientPublicKeyRequest $request
     *
     * @return SetPrimaryClientPublicKeyResponse
     */
    public function setPrimaryClientPublicKey($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setPrimaryClientPublicKeyWithOptions($request, $runtime);
    }

    /**
     * Updates the primary organizational unit to which an Identity as a Service (IDaaS) Employee Identity and Access Management (EIAM) account belongs. This account will be removed from the previous primary organizational unit and added to the new primary organization.
     *
     * @param request - SetUserPrimaryOrganizationalUnitRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
            'action' => 'SetUserPrimaryOrganizationalUnit',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SetUserPrimaryOrganizationalUnitResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the primary organizational unit to which an Identity as a Service (IDaaS) Employee Identity and Access Management (EIAM) account belongs. This account will be removed from the previous primary organizational unit and added to the new primary organization.
     *
     * @param request - SetUserPrimaryOrganizationalUnitRequest
     *
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
     * 解绑三方登录账户.
     *
     * @param request - UnbindUserAuthnSourceMappingRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UnbindUserAuthnSourceMappingResponse
     *
     * @param UnbindUserAuthnSourceMappingRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return UnbindUserAuthnSourceMappingResponse
     */
    public function unbindUserAuthnSourceMappingWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->identityProviderId) {
            @$query['IdentityProviderId'] = $request->identityProviderId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->userExternalId) {
            @$query['UserExternalId'] = $request->userExternalId;
        }

        if (null !== $request->userId) {
            @$query['UserId'] = $request->userId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UnbindUserAuthnSourceMapping',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UnbindUserAuthnSourceMappingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 解绑三方登录账户.
     *
     * @param request - UnbindUserAuthnSourceMappingRequest
     *
     * @returns UnbindUserAuthnSourceMappingResponse
     *
     * @param UnbindUserAuthnSourceMappingRequest $request
     *
     * @return UnbindUserAuthnSourceMappingResponse
     */
    public function unbindUserAuthnSourceMapping($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->unbindUserAuthnSourceMappingWithOptions($request, $runtime);
    }

    /**
     * Unlocks an Employee Identity and Access Management (EIAM) account of Identity as a Service (IDaaS) that is locked.
     *
     * @param request - UnlockUserRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
            'action' => 'UnlockUser',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UnlockUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Unlocks an Employee Identity and Access Management (EIAM) account of Identity as a Service (IDaaS) that is locked.
     *
     * @param request - UnlockUserRequest
     *
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
     * 修改应用高阶配置.
     *
     * @param request - UpdateApplicationAdvancedConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateApplicationAdvancedConfigResponse
     *
     * @param UpdateApplicationAdvancedConfigRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return UpdateApplicationAdvancedConfigResponse
     */
    public function updateApplicationAdvancedConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->applicationId) {
            @$query['ApplicationId'] = $request->applicationId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->scimServerAdvancedConfig) {
            @$query['ScimServerAdvancedConfig'] = $request->scimServerAdvancedConfig;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateApplicationAdvancedConfig',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateApplicationAdvancedConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 修改应用高阶配置.
     *
     * @param request - UpdateApplicationAdvancedConfigRequest
     *
     * @returns UpdateApplicationAdvancedConfigResponse
     *
     * @param UpdateApplicationAdvancedConfigRequest $request
     *
     * @return UpdateApplicationAdvancedConfigResponse
     */
    public function updateApplicationAdvancedConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateApplicationAdvancedConfigWithOptions($request, $runtime);
    }

    /**
     * Modifies the authorization type of an Employee Identity and Access Management (EIAM) application.
     *
     * @param request - UpdateApplicationAuthorizationTypeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
            'action' => 'UpdateApplicationAuthorizationType',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateApplicationAuthorizationTypeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the authorization type of an Employee Identity and Access Management (EIAM) application.
     *
     * @param request - UpdateApplicationAuthorizationTypeRequest
     *
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
     * 更新应用的指定ClientSecret的到期时间.
     *
     * @param request - UpdateApplicationClientSecretExpirationTimeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateApplicationClientSecretExpirationTimeResponse
     *
     * @param UpdateApplicationClientSecretExpirationTimeRequest $request
     * @param RuntimeOptions                                     $runtime
     *
     * @return UpdateApplicationClientSecretExpirationTimeResponse
     */
    public function updateApplicationClientSecretExpirationTimeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->applicationId) {
            @$query['ApplicationId'] = $request->applicationId;
        }

        if (null !== $request->expirationTime) {
            @$query['ExpirationTime'] = $request->expirationTime;
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
            'action' => 'UpdateApplicationClientSecretExpirationTime',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateApplicationClientSecretExpirationTimeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新应用的指定ClientSecret的到期时间.
     *
     * @param request - UpdateApplicationClientSecretExpirationTimeRequest
     *
     * @returns UpdateApplicationClientSecretExpirationTimeResponse
     *
     * @param UpdateApplicationClientSecretExpirationTimeRequest $request
     *
     * @return UpdateApplicationClientSecretExpirationTimeResponse
     */
    public function updateApplicationClientSecretExpirationTime($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateApplicationClientSecretExpirationTimeWithOptions($request, $runtime);
    }

    /**
     * Modifies the description of an Employee Identity and Access Management (EIAM) application.
     *
     * @param request - UpdateApplicationDescriptionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
            'action' => 'UpdateApplicationDescription',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateApplicationDescriptionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the description of an Employee Identity and Access Management (EIAM) application.
     *
     * @param request - UpdateApplicationDescriptionRequest
     *
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
     * 更新应用联邦凭证
     *
     * @param request - UpdateApplicationFederatedCredentialRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateApplicationFederatedCredentialResponse
     *
     * @param UpdateApplicationFederatedCredentialRequest $request
     * @param RuntimeOptions                              $runtime
     *
     * @return UpdateApplicationFederatedCredentialResponse
     */
    public function updateApplicationFederatedCredentialWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->applicationFederatedCredentialId) {
            @$query['ApplicationFederatedCredentialId'] = $request->applicationFederatedCredentialId;
        }

        if (null !== $request->applicationId) {
            @$query['ApplicationId'] = $request->applicationId;
        }

        if (null !== $request->attributeMappings) {
            @$query['AttributeMappings'] = $request->attributeMappings;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->verificationCondition) {
            @$query['VerificationCondition'] = $request->verificationCondition;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateApplicationFederatedCredential',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateApplicationFederatedCredentialResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新应用联邦凭证
     *
     * @param request - UpdateApplicationFederatedCredentialRequest
     *
     * @returns UpdateApplicationFederatedCredentialResponse
     *
     * @param UpdateApplicationFederatedCredentialRequest $request
     *
     * @return UpdateApplicationFederatedCredentialResponse
     */
    public function updateApplicationFederatedCredential($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateApplicationFederatedCredentialWithOptions($request, $runtime);
    }

    /**
     * 更新应用联邦凭证描述.
     *
     * @param request - UpdateApplicationFederatedCredentialDescriptionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateApplicationFederatedCredentialDescriptionResponse
     *
     * @param UpdateApplicationFederatedCredentialDescriptionRequest $request
     * @param RuntimeOptions                                         $runtime
     *
     * @return UpdateApplicationFederatedCredentialDescriptionResponse
     */
    public function updateApplicationFederatedCredentialDescriptionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->applicationFederatedCredentialId) {
            @$query['ApplicationFederatedCredentialId'] = $request->applicationFederatedCredentialId;
        }

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
            'action' => 'UpdateApplicationFederatedCredentialDescription',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateApplicationFederatedCredentialDescriptionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新应用联邦凭证描述.
     *
     * @param request - UpdateApplicationFederatedCredentialDescriptionRequest
     *
     * @returns UpdateApplicationFederatedCredentialDescriptionResponse
     *
     * @param UpdateApplicationFederatedCredentialDescriptionRequest $request
     *
     * @return UpdateApplicationFederatedCredentialDescriptionResponse
     */
    public function updateApplicationFederatedCredentialDescription($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateApplicationFederatedCredentialDescriptionWithOptions($request, $runtime);
    }

    /**
     * 更新应用基本信息.
     *
     * @param request - UpdateApplicationInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateApplicationInfoResponse
     *
     * @param UpdateApplicationInfoRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return UpdateApplicationInfoResponse
     */
    public function updateApplicationInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->applicationId) {
            @$query['ApplicationId'] = $request->applicationId;
        }

        if (null !== $request->applicationName) {
            @$query['ApplicationName'] = $request->applicationName;
        }

        if (null !== $request->applicationVisibility) {
            @$query['ApplicationVisibility'] = $request->applicationVisibility;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->logoUrl) {
            @$query['LogoUrl'] = $request->logoUrl;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateApplicationInfo',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateApplicationInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新应用基本信息.
     *
     * @param request - UpdateApplicationInfoRequest
     *
     * @returns UpdateApplicationInfoResponse
     *
     * @param UpdateApplicationInfoRequest $request
     *
     * @return UpdateApplicationInfoResponse
     */
    public function updateApplicationInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateApplicationInfoWithOptions($request, $runtime);
    }

    /**
     * 修改应用角色.
     *
     * @param request - UpdateApplicationRoleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateApplicationRoleResponse
     *
     * @param UpdateApplicationRoleRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return UpdateApplicationRoleResponse
     */
    public function updateApplicationRoleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->applicationId) {
            @$query['ApplicationId'] = $request->applicationId;
        }

        if (null !== $request->applicationRoleId) {
            @$query['ApplicationRoleId'] = $request->applicationRoleId;
        }

        if (null !== $request->applicationRoleName) {
            @$query['ApplicationRoleName'] = $request->applicationRoleName;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateApplicationRole',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateApplicationRoleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 修改应用角色.
     *
     * @param request - UpdateApplicationRoleRequest
     *
     * @returns UpdateApplicationRoleResponse
     *
     * @param UpdateApplicationRoleRequest $request
     *
     * @return UpdateApplicationRoleResponse
     */
    public function updateApplicationRole($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateApplicationRoleWithOptions($request, $runtime);
    }

    /**
     * 修改应用角色描述.
     *
     * @param request - UpdateApplicationRoleDescriptionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateApplicationRoleDescriptionResponse
     *
     * @param UpdateApplicationRoleDescriptionRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return UpdateApplicationRoleDescriptionResponse
     */
    public function updateApplicationRoleDescriptionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->applicationId) {
            @$query['ApplicationId'] = $request->applicationId;
        }

        if (null !== $request->applicationRoleId) {
            @$query['ApplicationRoleId'] = $request->applicationRoleId;
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
            'action' => 'UpdateApplicationRoleDescription',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateApplicationRoleDescriptionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 修改应用角色描述.
     *
     * @param request - UpdateApplicationRoleDescriptionRequest
     *
     * @returns UpdateApplicationRoleDescriptionResponse
     *
     * @param UpdateApplicationRoleDescriptionRequest $request
     *
     * @return UpdateApplicationRoleDescriptionResponse
     */
    public function updateApplicationRoleDescription($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateApplicationRoleDescriptionWithOptions($request, $runtime);
    }

    /**
     * 更新模板应用的SSO参数.
     *
     * @param request - UpdateApplicationSsoFormParamsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateApplicationSsoFormParamsResponse
     *
     * @param UpdateApplicationSsoFormParamsRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return UpdateApplicationSsoFormParamsResponse
     */
    public function updateApplicationSsoFormParamsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->applicationId) {
            @$query['ApplicationId'] = $request->applicationId;
        }

        if (null !== $request->applicationTemplateParams) {
            @$query['ApplicationTemplateParams'] = $request->applicationTemplateParams;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateApplicationSsoFormParams',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateApplicationSsoFormParamsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新模板应用的SSO参数.
     *
     * @param request - UpdateApplicationSsoFormParamsRequest
     *
     * @returns UpdateApplicationSsoFormParamsResponse
     *
     * @param UpdateApplicationSsoFormParamsRequest $request
     *
     * @return UpdateApplicationSsoFormParamsResponse
     */
    public function updateApplicationSsoFormParams($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateApplicationSsoFormParamsWithOptions($request, $runtime);
    }

    /**
     * 更新ApplicationToken过期时间.
     *
     * @param request - UpdateApplicationTokenExpirationTimeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateApplicationTokenExpirationTimeResponse
     *
     * @param UpdateApplicationTokenExpirationTimeRequest $request
     * @param RuntimeOptions                              $runtime
     *
     * @return UpdateApplicationTokenExpirationTimeResponse
     */
    public function updateApplicationTokenExpirationTimeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->applicationId) {
            @$query['ApplicationId'] = $request->applicationId;
        }

        if (null !== $request->applicationTokenId) {
            @$query['ApplicationTokenId'] = $request->applicationTokenId;
        }

        if (null !== $request->expirationTime) {
            @$query['ExpirationTime'] = $request->expirationTime;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateApplicationTokenExpirationTime',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateApplicationTokenExpirationTimeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新ApplicationToken过期时间.
     *
     * @param request - UpdateApplicationTokenExpirationTimeRequest
     *
     * @returns UpdateApplicationTokenExpirationTimeResponse
     *
     * @param UpdateApplicationTokenExpirationTimeRequest $request
     *
     * @return UpdateApplicationTokenExpirationTimeResponse
     */
    public function updateApplicationTokenExpirationTime($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateApplicationTokenExpirationTimeWithOptions($request, $runtime);
    }

    /**
     * 更新授权规则信息.
     *
     * @param request - UpdateAuthorizationRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateAuthorizationRuleResponse
     *
     * @param UpdateAuthorizationRuleRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return UpdateAuthorizationRuleResponse
     */
    public function updateAuthorizationRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->authorizationResourceScope) {
            @$query['AuthorizationResourceScope'] = $request->authorizationResourceScope;
        }

        if (null !== $request->authorizationRuleId) {
            @$query['AuthorizationRuleId'] = $request->authorizationRuleId;
        }

        if (null !== $request->authorizationRuleName) {
            @$query['AuthorizationRuleName'] = $request->authorizationRuleName;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $body = [];
        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateAuthorizationRule',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateAuthorizationRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新授权规则信息.
     *
     * @param request - UpdateAuthorizationRuleRequest
     *
     * @returns UpdateAuthorizationRuleResponse
     *
     * @param UpdateAuthorizationRuleRequest $request
     *
     * @return UpdateAuthorizationRuleResponse
     */
    public function updateAuthorizationRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateAuthorizationRuleWithOptions($request, $runtime);
    }

    /**
     * 更新授权规则应用关联关系属性.
     *
     * @param request - UpdateAuthorizationRuleApplicationAttachmentRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateAuthorizationRuleApplicationAttachmentResponse
     *
     * @param UpdateAuthorizationRuleApplicationAttachmentRequest $request
     * @param RuntimeOptions                                      $runtime
     *
     * @return UpdateAuthorizationRuleApplicationAttachmentResponse
     */
    public function updateAuthorizationRuleApplicationAttachmentWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->applicationId) {
            @$query['ApplicationId'] = $request->applicationId;
        }

        if (null !== $request->authorizationRuleId) {
            @$query['AuthorizationRuleId'] = $request->authorizationRuleId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->validityPeriod) {
            @$query['ValidityPeriod'] = $request->validityPeriod;
        }

        if (null !== $request->validityType) {
            @$query['ValidityType'] = $request->validityType;
        }

        $body = [];
        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateAuthorizationRuleApplicationAttachment',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateAuthorizationRuleApplicationAttachmentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新授权规则应用关联关系属性.
     *
     * @param request - UpdateAuthorizationRuleApplicationAttachmentRequest
     *
     * @returns UpdateAuthorizationRuleApplicationAttachmentResponse
     *
     * @param UpdateAuthorizationRuleApplicationAttachmentRequest $request
     *
     * @return UpdateAuthorizationRuleApplicationAttachmentResponse
     */
    public function updateAuthorizationRuleApplicationAttachment($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateAuthorizationRuleApplicationAttachmentWithOptions($request, $runtime);
    }

    /**
     * 更新授权规则描述信息.
     *
     * @param request - UpdateAuthorizationRuleDescriptionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateAuthorizationRuleDescriptionResponse
     *
     * @param UpdateAuthorizationRuleDescriptionRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return UpdateAuthorizationRuleDescriptionResponse
     */
    public function updateAuthorizationRuleDescriptionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->authorizationRuleId) {
            @$query['AuthorizationRuleId'] = $request->authorizationRuleId;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $body = [];
        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateAuthorizationRuleDescription',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateAuthorizationRuleDescriptionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新授权规则描述信息.
     *
     * @param request - UpdateAuthorizationRuleDescriptionRequest
     *
     * @returns UpdateAuthorizationRuleDescriptionResponse
     *
     * @param UpdateAuthorizationRuleDescriptionRequest $request
     *
     * @return UpdateAuthorizationRuleDescriptionResponse
     */
    public function updateAuthorizationRuleDescription($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateAuthorizationRuleDescriptionWithOptions($request, $runtime);
    }

    /**
     * 更新授权规则组关联关系属性.
     *
     * @param request - UpdateAuthorizationRuleGroupAttachmentRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateAuthorizationRuleGroupAttachmentResponse
     *
     * @param UpdateAuthorizationRuleGroupAttachmentRequest $request
     * @param RuntimeOptions                                $runtime
     *
     * @return UpdateAuthorizationRuleGroupAttachmentResponse
     */
    public function updateAuthorizationRuleGroupAttachmentWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->authorizationRuleId) {
            @$query['AuthorizationRuleId'] = $request->authorizationRuleId;
        }

        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->validityPeriod) {
            @$query['ValidityPeriod'] = $request->validityPeriod;
        }

        if (null !== $request->validityType) {
            @$query['ValidityType'] = $request->validityType;
        }

        $body = [];
        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateAuthorizationRuleGroupAttachment',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateAuthorizationRuleGroupAttachmentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新授权规则组关联关系属性.
     *
     * @param request - UpdateAuthorizationRuleGroupAttachmentRequest
     *
     * @returns UpdateAuthorizationRuleGroupAttachmentResponse
     *
     * @param UpdateAuthorizationRuleGroupAttachmentRequest $request
     *
     * @return UpdateAuthorizationRuleGroupAttachmentResponse
     */
    public function updateAuthorizationRuleGroupAttachment($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateAuthorizationRuleGroupAttachmentWithOptions($request, $runtime);
    }

    /**
     * 更新授权规则账户关联关系属性.
     *
     * @param request - UpdateAuthorizationRuleUserAttachmentRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateAuthorizationRuleUserAttachmentResponse
     *
     * @param UpdateAuthorizationRuleUserAttachmentRequest $request
     * @param RuntimeOptions                               $runtime
     *
     * @return UpdateAuthorizationRuleUserAttachmentResponse
     */
    public function updateAuthorizationRuleUserAttachmentWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->authorizationRuleId) {
            @$query['AuthorizationRuleId'] = $request->authorizationRuleId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->userId) {
            @$query['UserId'] = $request->userId;
        }

        if (null !== $request->validityPeriod) {
            @$query['ValidityPeriod'] = $request->validityPeriod;
        }

        if (null !== $request->validityType) {
            @$query['ValidityType'] = $request->validityType;
        }

        $body = [];
        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateAuthorizationRuleUserAttachment',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateAuthorizationRuleUserAttachmentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新授权规则账户关联关系属性.
     *
     * @param request - UpdateAuthorizationRuleUserAttachmentRequest
     *
     * @returns UpdateAuthorizationRuleUserAttachmentResponse
     *
     * @param UpdateAuthorizationRuleUserAttachmentRequest $request
     *
     * @return UpdateAuthorizationRuleUserAttachmentResponse
     */
    public function updateAuthorizationRuleUserAttachment($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateAuthorizationRuleUserAttachmentWithOptions($request, $runtime);
    }

    /**
     * 修改品牌.
     *
     * @param request - UpdateBrandRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateBrandResponse
     *
     * @param UpdateBrandRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return UpdateBrandResponse
     */
    public function updateBrandWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->brandId) {
            @$query['BrandId'] = $request->brandId;
        }

        if (null !== $request->brandName) {
            @$query['BrandName'] = $request->brandName;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateBrand',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateBrandResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 修改品牌.
     *
     * @param request - UpdateBrandRequest
     *
     * @returns UpdateBrandResponse
     *
     * @param UpdateBrandRequest $request
     *
     * @return UpdateBrandResponse
     */
    public function updateBrand($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateBrandWithOptions($request, $runtime);
    }

    /**
     * 更新云账号.
     *
     * @param request - UpdateCloudAccountRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateCloudAccountResponse
     *
     * @param UpdateCloudAccountRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return UpdateCloudAccountResponse
     */
    public function updateCloudAccountWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->cloudAccountId) {
            @$query['CloudAccountId'] = $request->cloudAccountId;
        }

        if (null !== $request->cloudAccountName) {
            @$query['CloudAccountName'] = $request->cloudAccountName;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateCloudAccount',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateCloudAccountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新云账号.
     *
     * @param request - UpdateCloudAccountRequest
     *
     * @returns UpdateCloudAccountResponse
     *
     * @param UpdateCloudAccountRequest $request
     *
     * @return UpdateCloudAccountResponse
     */
    public function updateCloudAccount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateCloudAccountWithOptions($request, $runtime);
    }

    /**
     * 更新云账号描述.
     *
     * @param request - UpdateCloudAccountDescriptionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateCloudAccountDescriptionResponse
     *
     * @param UpdateCloudAccountDescriptionRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return UpdateCloudAccountDescriptionResponse
     */
    public function updateCloudAccountDescriptionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->cloudAccountId) {
            @$query['CloudAccountId'] = $request->cloudAccountId;
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
            'action' => 'UpdateCloudAccountDescription',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateCloudAccountDescriptionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新云账号描述.
     *
     * @param request - UpdateCloudAccountDescriptionRequest
     *
     * @returns UpdateCloudAccountDescriptionResponse
     *
     * @param UpdateCloudAccountDescriptionRequest $request
     *
     * @return UpdateCloudAccountDescriptionResponse
     */
    public function updateCloudAccountDescription($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateCloudAccountDescriptionWithOptions($request, $runtime);
    }

    /**
     * 更新云角色描述.
     *
     * @param request - UpdateCloudAccountRoleDescriptionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateCloudAccountRoleDescriptionResponse
     *
     * @param UpdateCloudAccountRoleDescriptionRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return UpdateCloudAccountRoleDescriptionResponse
     */
    public function updateCloudAccountRoleDescriptionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->cloudAccountId) {
            @$query['CloudAccountId'] = $request->cloudAccountId;
        }

        if (null !== $request->cloudAccountRoleId) {
            @$query['CloudAccountRoleId'] = $request->cloudAccountRoleId;
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
            'action' => 'UpdateCloudAccountRoleDescription',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateCloudAccountRoleDescriptionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新云角色描述.
     *
     * @param request - UpdateCloudAccountRoleDescriptionRequest
     *
     * @returns UpdateCloudAccountRoleDescriptionResponse
     *
     * @param UpdateCloudAccountRoleDescriptionRequest $request
     *
     * @return UpdateCloudAccountRoleDescriptionResponse
     */
    public function updateCloudAccountRoleDescription($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateCloudAccountRoleDescriptionWithOptions($request, $runtime);
    }

    /**
     * Update Conditional Access Policy.
     *
     * @remarks
     * Update Conditional Access Policy
     *
     * @param request - UpdateConditionalAccessPolicyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateConditionalAccessPolicyResponse
     *
     * @param UpdateConditionalAccessPolicyRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return UpdateConditionalAccessPolicyResponse
     */
    public function updateConditionalAccessPolicyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->conditionalAccessPolicyId) {
            @$query['ConditionalAccessPolicyId'] = $request->conditionalAccessPolicyId;
        }

        if (null !== $request->conditionalAccessPolicyName) {
            @$query['ConditionalAccessPolicyName'] = $request->conditionalAccessPolicyName;
        }

        if (null !== $request->conditionsConfig) {
            @$query['ConditionsConfig'] = $request->conditionsConfig;
        }

        if (null !== $request->decisionConfig) {
            @$query['DecisionConfig'] = $request->decisionConfig;
        }

        if (null !== $request->decisionType) {
            @$query['DecisionType'] = $request->decisionType;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->priority) {
            @$query['Priority'] = $request->priority;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateConditionalAccessPolicy',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateConditionalAccessPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Update Conditional Access Policy.
     *
     * @remarks
     * Update Conditional Access Policy
     *
     * @param request - UpdateConditionalAccessPolicyRequest
     *
     * @returns UpdateConditionalAccessPolicyResponse
     *
     * @param UpdateConditionalAccessPolicyRequest $request
     *
     * @return UpdateConditionalAccessPolicyResponse
     */
    public function updateConditionalAccessPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateConditionalAccessPolicyWithOptions($request, $runtime);
    }

    /**
     * Update Conditional Access Policy Description.
     *
     * @remarks
     * Update Conditional Access Policy Description
     *
     * @param request - UpdateConditionalAccessPolicyDescriptionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateConditionalAccessPolicyDescriptionResponse
     *
     * @param UpdateConditionalAccessPolicyDescriptionRequest $request
     * @param RuntimeOptions                                  $runtime
     *
     * @return UpdateConditionalAccessPolicyDescriptionResponse
     */
    public function updateConditionalAccessPolicyDescriptionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->conditionalAccessPolicyId) {
            @$query['ConditionalAccessPolicyId'] = $request->conditionalAccessPolicyId;
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
            'action' => 'UpdateConditionalAccessPolicyDescription',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateConditionalAccessPolicyDescriptionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Update Conditional Access Policy Description.
     *
     * @remarks
     * Update Conditional Access Policy Description
     *
     * @param request - UpdateConditionalAccessPolicyDescriptionRequest
     *
     * @returns UpdateConditionalAccessPolicyDescriptionResponse
     *
     * @param UpdateConditionalAccessPolicyDescriptionRequest $request
     *
     * @return UpdateConditionalAccessPolicyDescriptionResponse
     */
    public function updateConditionalAccessPolicyDescription($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateConditionalAccessPolicyDescriptionWithOptions($request, $runtime);
    }

    /**
     * 更新自定义条款.
     *
     * @param request - UpdateCustomPrivacyPolicyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateCustomPrivacyPolicyResponse
     *
     * @param UpdateCustomPrivacyPolicyRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return UpdateCustomPrivacyPolicyResponse
     */
    public function updateCustomPrivacyPolicyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->customPrivacyPolicyContents) {
            @$query['CustomPrivacyPolicyContents'] = $request->customPrivacyPolicyContents;
        }

        if (null !== $request->customPrivacyPolicyId) {
            @$query['CustomPrivacyPolicyId'] = $request->customPrivacyPolicyId;
        }

        if (null !== $request->customPrivacyPolicyName) {
            @$query['CustomPrivacyPolicyName'] = $request->customPrivacyPolicyName;
        }

        if (null !== $request->defaultLanguageCode) {
            @$query['DefaultLanguageCode'] = $request->defaultLanguageCode;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->userConsentType) {
            @$query['UserConsentType'] = $request->userConsentType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateCustomPrivacyPolicy',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateCustomPrivacyPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新自定义条款.
     *
     * @param request - UpdateCustomPrivacyPolicyRequest
     *
     * @returns UpdateCustomPrivacyPolicyResponse
     *
     * @param UpdateCustomPrivacyPolicyRequest $request
     *
     * @return UpdateCustomPrivacyPolicyResponse
     */
    public function updateCustomPrivacyPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateCustomPrivacyPolicyWithOptions($request, $runtime);
    }

    /**
     * 修改域名关联的品牌。
     *
     * @param request - UpdateDomainBrandRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateDomainBrandResponse
     *
     * @param UpdateDomainBrandRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return UpdateDomainBrandResponse
     */
    public function updateDomainBrandWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->brandId) {
            @$query['BrandId'] = $request->brandId;
        }

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
            'action' => 'UpdateDomainBrand',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateDomainBrandResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 修改域名关联的品牌。
     *
     * @param request - UpdateDomainBrandRequest
     *
     * @returns UpdateDomainBrandResponse
     *
     * @param UpdateDomainBrandRequest $request
     *
     * @return UpdateDomainBrandResponse
     */
    public function updateDomainBrand($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateDomainBrandWithOptions($request, $runtime);
    }

    /**
     * 更新域名备案号。
     *
     * @param request - UpdateDomainIcpNumberRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateDomainIcpNumberResponse
     *
     * @param UpdateDomainIcpNumberRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return UpdateDomainIcpNumberResponse
     */
    public function updateDomainIcpNumberWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domainId) {
            @$query['DomainId'] = $request->domainId;
        }

        if (null !== $request->icpNumber) {
            @$query['IcpNumber'] = $request->icpNumber;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateDomainIcpNumber',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateDomainIcpNumberResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新域名备案号。
     *
     * @param request - UpdateDomainIcpNumberRequest
     *
     * @returns UpdateDomainIcpNumberResponse
     *
     * @param UpdateDomainIcpNumberRequest $request
     *
     * @return UpdateDomainIcpNumberResponse
     */
    public function updateDomainIcpNumber($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateDomainIcpNumberWithOptions($request, $runtime);
    }

    /**
     * 更新联邦凭证提供方.
     *
     * @param request - UpdateFederatedCredentialProviderRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateFederatedCredentialProviderResponse
     *
     * @param UpdateFederatedCredentialProviderRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return UpdateFederatedCredentialProviderResponse
     */
    public function updateFederatedCredentialProviderWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->federatedCredentialProviderId) {
            @$query['FederatedCredentialProviderId'] = $request->federatedCredentialProviderId;
        }

        if (null !== $request->federatedCredentialProviderName) {
            @$query['FederatedCredentialProviderName'] = $request->federatedCredentialProviderName;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->networkAccessEndpointId) {
            @$query['NetworkAccessEndpointId'] = $request->networkAccessEndpointId;
        }

        if (null !== $request->oidcProviderConfig) {
            @$query['OidcProviderConfig'] = $request->oidcProviderConfig;
        }

        if (null !== $request->pkcs7ProviderConfig) {
            @$query['Pkcs7ProviderConfig'] = $request->pkcs7ProviderConfig;
        }

        if (null !== $request->privateCaProviderConfig) {
            @$query['PrivateCaProviderConfig'] = $request->privateCaProviderConfig;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateFederatedCredentialProvider',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateFederatedCredentialProviderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新联邦凭证提供方.
     *
     * @param request - UpdateFederatedCredentialProviderRequest
     *
     * @returns UpdateFederatedCredentialProviderResponse
     *
     * @param UpdateFederatedCredentialProviderRequest $request
     *
     * @return UpdateFederatedCredentialProviderResponse
     */
    public function updateFederatedCredentialProvider($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateFederatedCredentialProviderWithOptions($request, $runtime);
    }

    /**
     * 更新联邦凭证提供方描述.
     *
     * @param request - UpdateFederatedCredentialProviderDescriptionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateFederatedCredentialProviderDescriptionResponse
     *
     * @param UpdateFederatedCredentialProviderDescriptionRequest $request
     * @param RuntimeOptions                                      $runtime
     *
     * @return UpdateFederatedCredentialProviderDescriptionResponse
     */
    public function updateFederatedCredentialProviderDescriptionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->federatedCredentialProviderId) {
            @$query['FederatedCredentialProviderId'] = $request->federatedCredentialProviderId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateFederatedCredentialProviderDescription',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateFederatedCredentialProviderDescriptionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新联邦凭证提供方描述.
     *
     * @param request - UpdateFederatedCredentialProviderDescriptionRequest
     *
     * @returns UpdateFederatedCredentialProviderDescriptionResponse
     *
     * @param UpdateFederatedCredentialProviderDescriptionRequest $request
     *
     * @return UpdateFederatedCredentialProviderDescriptionResponse
     */
    public function updateFederatedCredentialProviderDescription($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateFederatedCredentialProviderDescriptionWithOptions($request, $runtime);
    }

    /**
     * Updates the information about an account group in Identity as a Service (IDaaS) Employee Identity and Access Management (EIAM). If the information is empty, the information is not updated by default.
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
            'action' => 'UpdateGroup',
            'version' => '2021-12-01',
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
     * Updates the information about an account group in Identity as a Service (IDaaS) Employee Identity and Access Management (EIAM). If the information is empty, the information is not updated by default.
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
     * Updates the description of an Identity as a Service (IDaaS) Employee Identity and Access Management (EIAM) account group.
     *
     * @param request - UpdateGroupDescriptionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
            'action' => 'UpdateGroupDescription',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateGroupDescriptionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the description of an Identity as a Service (IDaaS) Employee Identity and Access Management (EIAM) account group.
     *
     * @param request - UpdateGroupDescriptionRequest
     *
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
     *
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
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

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
            'action' => 'UpdateIdentityProvider',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateIdentityProviderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新idp基础配置.
     *
     * @param request - UpdateIdentityProviderRequest
     *
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
     *
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
            'action' => 'UpdateInstanceDescription',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateInstanceDescriptionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the description of an Enterprise Identity and Access Management (EIAM) instance of Identity as a Service (IDaaS).
     *
     * @param request - UpdateInstanceDescriptionRequest
     *
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
     *
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
            'action' => 'UpdateNetworkAccessEndpointName',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateNetworkAccessEndpointNameResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新一个专属网络端点的名称。
     *
     * @param request - UpdateNetworkAccessEndpointNameRequest
     *
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
     * 更新网络区域对象
     *
     * @param request - UpdateNetworkZoneRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateNetworkZoneResponse
     *
     * @param UpdateNetworkZoneRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return UpdateNetworkZoneResponse
     */
    public function updateNetworkZoneWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->ipv4Cidrs) {
            @$query['Ipv4Cidrs'] = $request->ipv4Cidrs;
        }

        if (null !== $request->ipv6Cidrs) {
            @$query['Ipv6Cidrs'] = $request->ipv6Cidrs;
        }

        if (null !== $request->networkZoneId) {
            @$query['NetworkZoneId'] = $request->networkZoneId;
        }

        if (null !== $request->networkZoneName) {
            @$query['NetworkZoneName'] = $request->networkZoneName;
        }

        if (null !== $request->vpcId) {
            @$query['VpcId'] = $request->vpcId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateNetworkZone',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateNetworkZoneResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新网络区域对象
     *
     * @param request - UpdateNetworkZoneRequest
     *
     * @returns UpdateNetworkZoneResponse
     *
     * @param UpdateNetworkZoneRequest $request
     *
     * @return UpdateNetworkZoneResponse
     */
    public function updateNetworkZone($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateNetworkZoneWithOptions($request, $runtime);
    }

    /**
     * 更新网络区域对象描述.
     *
     * @param request - UpdateNetworkZoneDescriptionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateNetworkZoneDescriptionResponse
     *
     * @param UpdateNetworkZoneDescriptionRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return UpdateNetworkZoneDescriptionResponse
     */
    public function updateNetworkZoneDescriptionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->networkZoneId) {
            @$query['NetworkZoneId'] = $request->networkZoneId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateNetworkZoneDescription',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateNetworkZoneDescriptionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新网络区域对象描述.
     *
     * @param request - UpdateNetworkZoneDescriptionRequest
     *
     * @returns UpdateNetworkZoneDescriptionResponse
     *
     * @param UpdateNetworkZoneDescriptionRequest $request
     *
     * @return UpdateNetworkZoneDescriptionResponse
     */
    public function updateNetworkZoneDescription($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateNetworkZoneDescriptionWithOptions($request, $runtime);
    }

    /**
     * Updates the basic information about an Employee Identity and Access Management (EIAM) organization. The basic information about the organization is not updated by default if no parameter is specified.
     *
     * @param request - UpdateOrganizationalUnitRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
            'action' => 'UpdateOrganizationalUnit',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateOrganizationalUnitResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the basic information about an Employee Identity and Access Management (EIAM) organization. The basic information about the organization is not updated by default if no parameter is specified.
     *
     * @param request - UpdateOrganizationalUnitRequest
     *
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
     *
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
            'action' => 'UpdateOrganizationalUnitDescription',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateOrganizationalUnitDescriptionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the description of an Employee Identity and Access Management (EIAM) organization.
     *
     * @param request - UpdateOrganizationalUnitDescriptionRequest
     *
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
     *
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
            'action' => 'UpdateOrganizationalUnitParentId',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateOrganizationalUnitParentIdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the parent organization ID of an organization in Identity as a Service (IDaaS) Employee Identity and Access Management (EIAM). In this case, the organization is moved from a parent node to a new node.
     *
     * @param request - UpdateOrganizationalUnitParentIdRequest
     *
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
     * 更新指定ResourceServer下的Scope.
     *
     * @param request - UpdateResourceServerScopeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateResourceServerScopeResponse
     *
     * @param UpdateResourceServerScopeRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return UpdateResourceServerScopeResponse
     */
    public function updateResourceServerScopeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->applicationId) {
            @$query['ApplicationId'] = $request->applicationId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->resourceServerScopeId) {
            @$query['ResourceServerScopeId'] = $request->resourceServerScopeId;
        }

        if (null !== $request->resourceServerScopeName) {
            @$query['ResourceServerScopeName'] = $request->resourceServerScopeName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateResourceServerScope',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateResourceServerScopeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新指定ResourceServer下的Scope.
     *
     * @param request - UpdateResourceServerScopeRequest
     *
     * @returns UpdateResourceServerScopeResponse
     *
     * @param UpdateResourceServerScopeRequest $request
     *
     * @return UpdateResourceServerScopeResponse
     */
    public function updateResourceServerScope($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateResourceServerScopeWithOptions($request, $runtime);
    }

    /**
     * Updates the basic information about an Employee Identity and Access Management (EIAM) account of Identity as a Service (IDaaS).
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
            'action' => 'UpdateUser',
            'version' => '2021-12-01',
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
     * Updates the basic information about an Employee Identity and Access Management (EIAM) account of Identity as a Service (IDaaS).
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
     * Modifies the description of an Identity as a Service (IDaaS) Employee Identity and Access Management (EIAM) account.
     *
     * @param request - UpdateUserDescriptionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
            'action' => 'UpdateUserDescription',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateUserDescriptionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the description of an Identity as a Service (IDaaS) Employee Identity and Access Management (EIAM) account.
     *
     * @param request - UpdateUserDescriptionRequest
     *
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
     *
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
            'action' => 'UpdateUserPassword',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateUserPasswordResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the password information of an Employee Identity and Access Management (EIAM) account of Identity as a Service (IDaaS). The password must meet the requirements of the password policies that are configured in the IDaaS console.
     *
     * @param request - UpdateUserPasswordRequest
     *
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

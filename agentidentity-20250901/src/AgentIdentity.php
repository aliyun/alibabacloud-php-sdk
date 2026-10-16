<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentIdentity\V20250901;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\AddSAMLIdentityProviderCertificateRequest;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\AddSAMLIdentityProviderCertificateResponse;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\AttachPolicySetToGatewayRequest;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\AttachPolicySetToGatewayResponse;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\CreateAPIKeyCredentialProviderRequest;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\CreateAPIKeyCredentialProviderResponse;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\CreateClientSecretRequest;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\CreateClientSecretResponse;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\CreateIdentityProviderRequest;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\CreateIdentityProviderResponse;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\CreateIdentityProviderShrinkRequest;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\CreateOAuth2CredentialProviderRequest;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\CreateOAuth2CredentialProviderResponse;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\CreateOAuth2CredentialProviderShrinkRequest;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\CreatePolicyRequest;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\CreatePolicyResponse;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\CreatePolicySetRequest;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\CreatePolicySetResponse;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\CreatePolicyShrinkRequest;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\CreateRoleAssignmentRequest;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\CreateRoleAssignmentResponse;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\CreateRoleRequest;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\CreateRoleResponse;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\CreateTokenVaultRequest;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\CreateTokenVaultResponse;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\CreateTokenVaultShrinkRequest;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\CreateUserPoolClientRequest;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\CreateUserPoolClientResponse;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\CreateUserPoolClientShrinkRequest;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\CreateUserPoolRequest;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\CreateUserPoolResponse;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\CreateUserRequest;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\CreateUserResponse;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\CreateWorkloadIdentityRequest;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\CreateWorkloadIdentityResponse;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\CreateWorkloadIdentityShrinkRequest;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\DeleteAPIKeyCredentialProviderRequest;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\DeleteAPIKeyCredentialProviderResponse;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\DeleteClientSecretRequest;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\DeleteClientSecretResponse;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\DeleteIdentityProviderRequest;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\DeleteIdentityProviderResponse;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\DeleteOAuth2CredentialProviderRequest;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\DeleteOAuth2CredentialProviderResponse;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\DeletePolicyRequest;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\DeletePolicyResponse;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\DeletePolicySetRequest;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\DeletePolicySetResponse;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\DeleteRoleAssignmentRequest;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\DeleteRoleAssignmentResponse;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\DeleteRoleRequest;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\DeleteRoleResponse;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\DeleteSAMLIdentityProviderCertificateRequest;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\DeleteSAMLIdentityProviderCertificateResponse;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\DeleteTokenVaultRequest;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\DeleteTokenVaultResponse;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\DeleteUserPoolClientRequest;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\DeleteUserPoolClientResponse;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\DeleteUserPoolRequest;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\DeleteUserPoolResponse;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\DeleteUserRequest;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\DeleteUserResponse;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\DeleteWorkloadIdentityRequest;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\DeleteWorkloadIdentityResponse;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\DetachPolicySetFromGatewayRequest;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\DetachPolicySetFromGatewayResponse;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\GetAPIKeyCredentialProviderRequest;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\GetAPIKeyCredentialProviderResponse;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\GetGatewayPolicyConfigRequest;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\GetGatewayPolicyConfigResponse;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\GetIdentityProviderRequest;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\GetIdentityProviderResponse;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\GetIdentityProviderSyncScopeRequest;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\GetIdentityProviderSyncScopeResponse;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\GetLoginPreferenceRequest;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\GetLoginPreferenceResponse;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\GetOAuth2CredentialProviderRequest;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\GetOAuth2CredentialProviderResponse;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\GetPolicyRequest;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\GetPolicyResponse;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\GetPolicySetRequest;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\GetPolicySetResponse;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\GetRoleRequest;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\GetRoleResponse;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\GetSAMLIdentityProviderRequest;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\GetSAMLIdentityProviderResponse;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\GetSAMLServiceProviderInfoRequest;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\GetSAMLServiceProviderInfoResponse;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\GetSpecificIdentityProviderRequest;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\GetSpecificIdentityProviderResponse;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\GetTokenVaultRequest;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\GetTokenVaultResponse;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\GetUserPoolClientRequest;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\GetUserPoolClientResponse;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\GetUserPoolRequest;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\GetUserPoolResponse;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\GetUserPoolSyncJobRequest;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\GetUserPoolSyncJobResponse;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\GetUserRequest;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\GetUserResponse;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\GetWorkloadIdentityRequest;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\GetWorkloadIdentityResponse;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\ListAPIKeyCredentialProvidersRequest;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\ListAPIKeyCredentialProvidersResponse;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\ListClientSecretsRequest;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\ListClientSecretsResponse;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\ListIdentityProviderDepartmentsRequest;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\ListIdentityProviderDepartmentsResponse;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\ListIdentityProvidersRequest;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\ListIdentityProvidersResponse;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\ListOAuth2CredentialProvidersRequest;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\ListOAuth2CredentialProvidersResponse;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\ListPoliciesRequest;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\ListPoliciesResponse;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\ListPolicySetAttachedGatewaysRequest;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\ListPolicySetAttachedGatewaysResponse;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\ListPolicySetsRequest;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\ListPolicySetsResponse;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\ListRoleAssignmentsRequest;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\ListRoleAssignmentsResponse;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\ListRolesRequest;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\ListRolesResponse;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\ListSAMLIdentityProviderCertificatesRequest;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\ListSAMLIdentityProviderCertificatesResponse;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\ListTokenVaultsRequest;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\ListTokenVaultsResponse;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\ListUserPoolClientsRequest;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\ListUserPoolClientsResponse;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\ListUserPoolsRequest;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\ListUserPoolsResponse;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\ListUserPoolSyncJobsRequest;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\ListUserPoolSyncJobsResponse;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\ListUsersRequest;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\ListUsersResponse;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\ListWorkloadIdentitiesRequest;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\ListWorkloadIdentitiesResponse;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\RunUserPoolSyncJobRequest;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\RunUserPoolSyncJobResponse;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\SetSAMLIdentityProviderRequest;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\SetSAMLIdentityProviderResponse;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\SetSAMLIdentityProviderShrinkRequest;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\SetSpecificIdentityProviderRequest;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\SetSpecificIdentityProviderResponse;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\SetUserPasswordRequest;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\SetUserPasswordResponse;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\UpdateAPIKeyCredentialProviderRequest;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\UpdateAPIKeyCredentialProviderResponse;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\UpdateGatewayPolicyConfigRequest;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\UpdateGatewayPolicyConfigResponse;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\UpdateIdentityProviderRequest;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\UpdateIdentityProviderResponse;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\UpdateIdentityProviderShrinkRequest;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\UpdateLoginPreferenceRequest;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\UpdateLoginPreferenceResponse;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\UpdateLoginPreferenceShrinkRequest;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\UpdateOAuth2CredentialProviderRequest;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\UpdateOAuth2CredentialProviderResponse;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\UpdateOAuth2CredentialProviderShrinkRequest;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\UpdatePolicyRequest;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\UpdatePolicyResponse;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\UpdatePolicySetRequest;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\UpdatePolicySetResponse;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\UpdatePolicyShrinkRequest;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\UpdateRoleRequest;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\UpdateRoleResponse;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\UpdateTokenVaultRequest;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\UpdateTokenVaultResponse;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\UpdateUserPoolClientRequest;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\UpdateUserPoolClientResponse;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\UpdateUserPoolClientShrinkRequest;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\UpdateUserPoolRequest;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\UpdateUserPoolResponse;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\UpdateUserRequest;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\UpdateUserResponse;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\UpdateWorkloadIdentityRequest;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\UpdateWorkloadIdentityResponse;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\UpdateWorkloadIdentityShrinkRequest;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class AgentIdentity extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('agentidentity', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * 创建应用.
     *
     * @param request - AddSAMLIdentityProviderCertificateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddSAMLIdentityProviderCertificateResponse
     *
     * @param AddSAMLIdentityProviderCertificateRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return AddSAMLIdentityProviderCertificateResponse
     */
    public function addSAMLIdentityProviderCertificateWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->userPoolName) {
            @$body['UserPoolName'] = $request->userPoolName;
        }

        if (null !== $request->x509Certificate) {
            @$body['X509Certificate'] = $request->x509Certificate;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'AddSAMLIdentityProviderCertificate',
            'version' => '2025-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AddSAMLIdentityProviderCertificateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建应用.
     *
     * @param request - AddSAMLIdentityProviderCertificateRequest
     *
     * @returns AddSAMLIdentityProviderCertificateResponse
     *
     * @param AddSAMLIdentityProviderCertificateRequest $request
     *
     * @return AddSAMLIdentityProviderCertificateResponse
     */
    public function addSAMLIdentityProviderCertificate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addSAMLIdentityProviderCertificateWithOptions($request, $runtime);
    }

    /**
     * Attaches a policy set to a gateway.
     *
     * @remarks
     * Attaches a policy set to a target gateway.
     * The attachment relationship is 1:1. A gateway can have only one policy set attached at a time. If you attach a policy set multiple times, the latest attachment takes effect. You can specify the policy enforcement mode by using the EnforcementMode parameter. Valid values: ENFORCE (blocks non-compliant requests) and LOG_ONLY (records non-compliant requests but allows them, which is commonly used for canary release observation).
     *
     * @param request - AttachPolicySetToGatewayRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AttachPolicySetToGatewayResponse
     *
     * @param AttachPolicySetToGatewayRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return AttachPolicySetToGatewayResponse
     */
    public function attachPolicySetToGatewayWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->enforcementMode) {
            @$body['EnforcementMode'] = $request->enforcementMode;
        }

        if (null !== $request->gatewayArn) {
            @$body['GatewayArn'] = $request->gatewayArn;
        }

        if (null !== $request->gatewayType) {
            @$body['GatewayType'] = $request->gatewayType;
        }

        if (null !== $request->policySetName) {
            @$body['PolicySetName'] = $request->policySetName;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'AttachPolicySetToGateway',
            'version' => '2025-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AttachPolicySetToGatewayResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Attaches a policy set to a gateway.
     *
     * @remarks
     * Attaches a policy set to a target gateway.
     * The attachment relationship is 1:1. A gateway can have only one policy set attached at a time. If you attach a policy set multiple times, the latest attachment takes effect. You can specify the policy enforcement mode by using the EnforcementMode parameter. Valid values: ENFORCE (blocks non-compliant requests) and LOG_ONLY (records non-compliant requests but allows them, which is commonly used for canary release observation).
     *
     * @param request - AttachPolicySetToGatewayRequest
     *
     * @returns AttachPolicySetToGatewayResponse
     *
     * @param AttachPolicySetToGatewayRequest $request
     *
     * @return AttachPolicySetToGatewayResponse
     */
    public function attachPolicySetToGateway($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->attachPolicySetToGatewayWithOptions($request, $runtime);
    }

    /**
     * Creates an API key credential provider.
     *
     * @param request - CreateAPIKeyCredentialProviderRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateAPIKeyCredentialProviderResponse
     *
     * @param CreateAPIKeyCredentialProviderRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return CreateAPIKeyCredentialProviderResponse
     */
    public function createAPIKeyCredentialProviderWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->APIKey) {
            @$body['APIKey'] = $request->APIKey;
        }

        if (null !== $request->APIKeyCredentialProviderName) {
            @$body['APIKeyCredentialProviderName'] = $request->APIKeyCredentialProviderName;
        }

        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->tokenVaultName) {
            @$body['TokenVaultName'] = $request->tokenVaultName;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateAPIKeyCredentialProvider',
            'version' => '2025-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateAPIKeyCredentialProviderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates an API key credential provider.
     *
     * @param request - CreateAPIKeyCredentialProviderRequest
     *
     * @returns CreateAPIKeyCredentialProviderResponse
     *
     * @param CreateAPIKeyCredentialProviderRequest $request
     *
     * @return CreateAPIKeyCredentialProviderResponse
     */
    public function createAPIKeyCredentialProvider($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAPIKeyCredentialProviderWithOptions($request, $runtime);
    }

    /**
     * Creates a workload identity.
     *
     * @remarks
     * The response includes the plaintext client secret (ClientSecretValue). For security reasons, the plaintext secret is returned only once upon creation and cannot be retrieved later. Store it securely.
     *
     * @param request - CreateClientSecretRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateClientSecretResponse
     *
     * @param CreateClientSecretRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return CreateClientSecretResponse
     */
    public function createClientSecretWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->clientId) {
            @$body['ClientId'] = $request->clientId;
        }

        if (null !== $request->clientName) {
            @$body['ClientName'] = $request->clientName;
        }

        if (null !== $request->userPoolName) {
            @$body['UserPoolName'] = $request->userPoolName;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateClientSecret',
            'version' => '2025-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateClientSecretResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a workload identity.
     *
     * @remarks
     * The response includes the plaintext client secret (ClientSecretValue). For security reasons, the plaintext secret is returned only once upon creation and cannot be retrieved later. Store it securely.
     *
     * @param request - CreateClientSecretRequest
     *
     * @returns CreateClientSecretResponse
     *
     * @param CreateClientSecretRequest $request
     *
     * @return CreateClientSecretResponse
     */
    public function createClientSecret($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createClientSecretWithOptions($request, $runtime);
    }

    /**
     * 创建IdentityProvider.
     *
     * @param tmpReq - CreateIdentityProviderRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateIdentityProviderResponse
     *
     * @param CreateIdentityProviderRequest $tmpReq
     * @param RuntimeOptions                $runtime
     *
     * @return CreateIdentityProviderResponse
     */
    public function createIdentityProviderWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateIdentityProviderShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->allowedAudience) {
            $request->allowedAudienceShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->allowedAudience, 'AllowedAudience', 'json');
        }

        $body = [];
        if (null !== $request->allowedAudienceShrink) {
            @$body['AllowedAudience'] = $request->allowedAudienceShrink;
        }

        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->discoveryURL) {
            @$body['DiscoveryURL'] = $request->discoveryURL;
        }

        if (null !== $request->identityProviderName) {
            @$body['IdentityProviderName'] = $request->identityProviderName;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateIdentityProvider',
            'version' => '2025-09-01',
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
     * 创建IdentityProvider.
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
     * Creates an OAuth 2.0 credential provider.
     *
     * @param tmpReq - CreateOAuth2CredentialProviderRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateOAuth2CredentialProviderResponse
     *
     * @param CreateOAuth2CredentialProviderRequest $tmpReq
     * @param RuntimeOptions                        $runtime
     *
     * @return CreateOAuth2CredentialProviderResponse
     */
    public function createOAuth2CredentialProviderWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateOAuth2CredentialProviderShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->OAuth2ProviderConfig) {
            $request->OAuth2ProviderConfigShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->OAuth2ProviderConfig, 'OAuth2ProviderConfig', 'json');
        }

        $body = [];
        if (null !== $request->callbackURL) {
            @$body['CallbackURL'] = $request->callbackURL;
        }

        if (null !== $request->credentialProviderVendor) {
            @$body['CredentialProviderVendor'] = $request->credentialProviderVendor;
        }

        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->OAuth2CredentialProviderName) {
            @$body['OAuth2CredentialProviderName'] = $request->OAuth2CredentialProviderName;
        }

        if (null !== $request->OAuth2ProviderConfigShrink) {
            @$body['OAuth2ProviderConfig'] = $request->OAuth2ProviderConfigShrink;
        }

        if (null !== $request->OAuthType) {
            @$body['OAuthType'] = $request->OAuthType;
        }

        if (null !== $request->tokenVaultName) {
            @$body['TokenVaultName'] = $request->tokenVaultName;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateOAuth2CredentialProvider',
            'version' => '2025-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateOAuth2CredentialProviderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates an OAuth 2.0 credential provider.
     *
     * @param request - CreateOAuth2CredentialProviderRequest
     *
     * @returns CreateOAuth2CredentialProviderResponse
     *
     * @param CreateOAuth2CredentialProviderRequest $request
     *
     * @return CreateOAuth2CredentialProviderResponse
     */
    public function createOAuth2CredentialProvider($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createOAuth2CredentialProviderWithOptions($request, $runtime);
    }

    /**
     * Creates an access policy.
     *
     * @remarks
     * Calls the CreatePolicy operation to add a policy to an existing policy set. The policy defines specific control rules, such as throttling thresholds, admission conditions, and allow or block actions, through the Definition field. After a policy set is mounted to a gateway, requests on the gateway are evaluated and controlled based on the merged results of all policies in the policy set.
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
        if (null !== $tmpReq->definition) {
            $request->definitionShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->definition, 'Definition', 'json');
        }

        $body = [];
        if (null !== $request->definitionShrink) {
            @$body['Definition'] = $request->definitionShrink;
        }

        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->policyName) {
            @$body['PolicyName'] = $request->policyName;
        }

        if (null !== $request->policySetName) {
            @$body['PolicySetName'] = $request->policySetName;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreatePolicy',
            'version' => '2025-09-01',
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
     * Creates an access policy.
     *
     * @remarks
     * Calls the CreatePolicy operation to add a policy to an existing policy set. The policy defines specific control rules, such as throttling thresholds, admission conditions, and allow or block actions, through the Definition field. After a policy set is mounted to a gateway, requests on the gateway are evaluated and controlled based on the merged results of all policies in the policy set.
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
     * Creates an access policy set.
     *
     * @remarks
     * Calls CreatePolicySet to create a policy set in the current account. A policy set is a container for a group of policies. After a policy set is mounted to a gateway, all policies in the set evaluate requests to the gateway as a whole.
     *
     * @param request - CreatePolicySetRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreatePolicySetResponse
     *
     * @param CreatePolicySetRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return CreatePolicySetResponse
     */
    public function createPolicySetWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->policySetName) {
            @$body['PolicySetName'] = $request->policySetName;
        }

        if (null !== $request->sourcePlatform) {
            @$body['SourcePlatform'] = $request->sourcePlatform;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreatePolicySet',
            'version' => '2025-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreatePolicySetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates an access policy set.
     *
     * @remarks
     * Calls CreatePolicySet to create a policy set in the current account. A policy set is a container for a group of policies. After a policy set is mounted to a gateway, all policies in the set evaluate requests to the gateway as a whole.
     *
     * @param request - CreatePolicySetRequest
     *
     * @returns CreatePolicySetResponse
     *
     * @param CreatePolicySetRequest $request
     *
     * @return CreatePolicySetResponse
     */
    public function createPolicySet($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createPolicySetWithOptions($request, $runtime);
    }

    /**
     * Creates a role.
     *
     * @remarks
     * Users in a user pool can be allocated roles to enable quick authorization. Administrators can specify permissions for roles in an access policy.
     * When a user pool is created, the platform automatically provisions a default role, and newly created users are automatically allocated this default role. This operation creates a custom role of the Manual type, which must be explicitly allocated to users by calling CreateRoleAssignment.
     *
     * @param request - CreateRoleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateRoleResponse
     *
     * @param CreateRoleRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return CreateRoleResponse
     */
    public function createRoleWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->roleName) {
            @$body['RoleName'] = $request->roleName;
        }

        if (null !== $request->userPoolName) {
            @$body['UserPoolName'] = $request->userPoolName;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateRole',
            'version' => '2025-09-01',
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
     * Creates a role.
     *
     * @remarks
     * Users in a user pool can be allocated roles to enable quick authorization. Administrators can specify permissions for roles in an access policy.
     * When a user pool is created, the platform automatically provisions a default role, and newly created users are automatically allocated this default role. This operation creates a custom role of the Manual type, which must be explicitly allocated to users by calling CreateRoleAssignment.
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
     * Associates a policy set with a gateway.
     *
     * @remarks
     * Users must be assigned roles to complete authorization. When a user is created through JIT, a default role is automatically assigned. Administrators can use this operation to assign additional custom roles to users.
     * PrincipalType currently supports only User. A single identity can have multiple role assignments.
     *
     * @param request - CreateRoleAssignmentRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateRoleAssignmentResponse
     *
     * @param CreateRoleAssignmentRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return CreateRoleAssignmentResponse
     */
    public function createRoleAssignmentWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->principalName) {
            @$body['PrincipalName'] = $request->principalName;
        }

        if (null !== $request->principalType) {
            @$body['PrincipalType'] = $request->principalType;
        }

        if (null !== $request->roleName) {
            @$body['RoleName'] = $request->roleName;
        }

        if (null !== $request->userPoolName) {
            @$body['UserPoolName'] = $request->userPoolName;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateRoleAssignment',
            'version' => '2025-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateRoleAssignmentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Associates a policy set with a gateway.
     *
     * @remarks
     * Users must be assigned roles to complete authorization. When a user is created through JIT, a default role is automatically assigned. Administrators can use this operation to assign additional custom roles to users.
     * PrincipalType currently supports only User. A single identity can have multiple role assignments.
     *
     * @param request - CreateRoleAssignmentRequest
     *
     * @returns CreateRoleAssignmentResponse
     *
     * @param CreateRoleAssignmentRequest $request
     *
     * @return CreateRoleAssignmentResponse
     */
    public function createRoleAssignment($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createRoleAssignmentWithOptions($request, $runtime);
    }

    /**
     * Creates a token vault.
     *
     * @remarks
     * Calls the CreateTokenVault operation to create a token vault within the current Alibaba Cloud account. A token vault is a container used by the AgentIdentity service to securely store sensitive credentials such as OAuth2 tokens and API keys. Each token is encrypted when it is written to the vault.
     * You can specify the encryption configuration when you create the vault. By default, a service-managed key (SERVICE_MANAGED_KEY) is used. For greater control over the key, you can use a customer-managed Key Management Service (KMS) key (CUSTOMER_MANAGED_KEY). To use a customer-managed key, specify the Alibaba Cloud Resource Name (ARN) of the KMS key and use the RoleArn parameter to authorize the AgentIdentity service to access the KMS key.
     *
     * @param tmpReq - CreateTokenVaultRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateTokenVaultResponse
     *
     * @param CreateTokenVaultRequest $tmpReq
     * @param RuntimeOptions          $runtime
     *
     * @return CreateTokenVaultResponse
     */
    public function createTokenVaultWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateTokenVaultShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->encryptionConfig) {
            $request->encryptionConfigShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->encryptionConfig, 'EncryptionConfig', 'json');
        }

        $body = [];
        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->encryptionConfigShrink) {
            @$body['EncryptionConfig'] = $request->encryptionConfigShrink;
        }

        if (null !== $request->roleArn) {
            @$body['RoleArn'] = $request->roleArn;
        }

        if (null !== $request->tokenVaultName) {
            @$body['TokenVaultName'] = $request->tokenVaultName;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateTokenVault',
            'version' => '2025-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateTokenVaultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a token vault.
     *
     * @remarks
     * Calls the CreateTokenVault operation to create a token vault within the current Alibaba Cloud account. A token vault is a container used by the AgentIdentity service to securely store sensitive credentials such as OAuth2 tokens and API keys. Each token is encrypted when it is written to the vault.
     * You can specify the encryption configuration when you create the vault. By default, a service-managed key (SERVICE_MANAGED_KEY) is used. For greater control over the key, you can use a customer-managed Key Management Service (KMS) key (CUSTOMER_MANAGED_KEY). To use a customer-managed key, specify the Alibaba Cloud Resource Name (ARN) of the KMS key and use the RoleArn parameter to authorize the AgentIdentity service to access the KMS key.
     *
     * @param request - CreateTokenVaultRequest
     *
     * @returns CreateTokenVaultResponse
     *
     * @param CreateTokenVaultRequest $request
     *
     * @return CreateTokenVaultResponse
     */
    public function createTokenVault($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createTokenVaultWithOptions($request, $runtime);
    }

    /**
     * Creates a user in a user pool.
     *
     * @remarks
     * Creates a user in a specified user pool. The type of the created user is Manual, and the default status is Enabled. The username must be unique within the user pool and can contain letters, digits, underscores (_), periods (.), and hyphens (-), and must be 3 to 128 characters in length. The email address must be unique within the user pool. After the user is created, you can call the SetUserPassword operation to set a logon password for the user and call the CreateRoleAssignment operation to assign a role to the user.
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
        $body = [];
        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->displayName) {
            @$body['DisplayName'] = $request->displayName;
        }

        if (null !== $request->email) {
            @$body['Email'] = $request->email;
        }

        if (null !== $request->status) {
            @$body['Status'] = $request->status;
        }

        if (null !== $request->userName) {
            @$body['UserName'] = $request->userName;
        }

        if (null !== $request->userPoolName) {
            @$body['UserPoolName'] = $request->userPoolName;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateUser',
            'version' => '2025-09-01',
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
     * Creates a user in a user pool.
     *
     * @remarks
     * Creates a user in a specified user pool. The type of the created user is Manual, and the default status is Enabled. The username must be unique within the user pool and can contain letters, digits, underscores (_), periods (.), and hyphens (-), and must be 3 to 128 characters in length. The email address must be unique within the user pool. After the user is created, you can call the SetUserPassword operation to set a logon password for the user and call the CreateRoleAssignment operation to assign a role to the user.
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
     * Creates a user pool.
     *
     * @remarks
     * A user pool is a secure and isolated user folder designed by the Agent Identity platform for the AI agent ecosystem. You can create multiple user pools under a single Alibaba Cloud account for the independent user identity management of different AI agents. When you create a user pool, you only need to specify the name (UserPoolName). The description is optional. After the user pool is created, the platform automatically generates a default role for the user pool. Users subsequently created through SAML SSO just-in-time (JIT) synchronization are automatically allocated this default role.
     *
     * @param request - CreateUserPoolRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateUserPoolResponse
     *
     * @param CreateUserPoolRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return CreateUserPoolResponse
     */
    public function createUserPoolWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->userPoolName) {
            @$body['UserPoolName'] = $request->userPoolName;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateUserPool',
            'version' => '2025-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateUserPoolResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a user pool.
     *
     * @remarks
     * A user pool is a secure and isolated user folder designed by the Agent Identity platform for the AI agent ecosystem. You can create multiple user pools under a single Alibaba Cloud account for the independent user identity management of different AI agents. When you create a user pool, you only need to specify the name (UserPoolName). The description is optional. After the user pool is created, the platform automatically generates a default role for the user pool. Users subsequently created through SAML SSO just-in-time (JIT) synchronization are automatically allocated this default role.
     *
     * @param request - CreateUserPoolRequest
     *
     * @returns CreateUserPoolResponse
     *
     * @param CreateUserPoolRequest $request
     *
     * @return CreateUserPoolResponse
     */
    public function createUserPool($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createUserPoolWithOptions($request, $runtime);
    }

    /**
     * Creates a WorkloadIdentity.
     *
     * @remarks
     * A client represents an application that is integrated with a user pool. When you create a client, you must specify the client name and redirect URIs. You can configure whether an application secret is required, whether to enforce Proof Key for Code Exchange (PKCE), the access token validity period, and the refresh token validity period. The application scopes are generated by the platform by default. If SecretRequired is set to true, you must call CreateClientSecret to create a client secret.
     *
     * @param tmpReq - CreateUserPoolClientRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateUserPoolClientResponse
     *
     * @param CreateUserPoolClientRequest $tmpReq
     * @param RuntimeOptions              $runtime
     *
     * @return CreateUserPoolClientResponse
     */
    public function createUserPoolClientWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateUserPoolClientShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->redirectURIs) {
            $request->redirectURIsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->redirectURIs, 'RedirectURIs', 'json');
        }

        if (null !== $tmpReq->scopes) {
            $request->scopesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->scopes, 'Scopes', 'json');
        }

        $body = [];
        if (null !== $request->accessTokenValidity) {
            @$body['AccessTokenValidity'] = $request->accessTokenValidity;
        }

        if (null !== $request->clientName) {
            @$body['ClientName'] = $request->clientName;
        }

        if (null !== $request->enforcePKCE) {
            @$body['EnforcePKCE'] = $request->enforcePKCE;
        }

        if (null !== $request->redirectURIsShrink) {
            @$body['RedirectURIs'] = $request->redirectURIsShrink;
        }

        if (null !== $request->refreshTokenValidity) {
            @$body['RefreshTokenValidity'] = $request->refreshTokenValidity;
        }

        if (null !== $request->scopesShrink) {
            @$body['Scopes'] = $request->scopesShrink;
        }

        if (null !== $request->secretRequired) {
            @$body['SecretRequired'] = $request->secretRequired;
        }

        if (null !== $request->userPoolName) {
            @$body['UserPoolName'] = $request->userPoolName;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateUserPoolClient',
            'version' => '2025-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateUserPoolClientResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a WorkloadIdentity.
     *
     * @remarks
     * A client represents an application that is integrated with a user pool. When you create a client, you must specify the client name and redirect URIs. You can configure whether an application secret is required, whether to enforce Proof Key for Code Exchange (PKCE), the access token validity period, and the refresh token validity period. The application scopes are generated by the platform by default. If SecretRequired is set to true, you must call CreateClientSecret to create a client secret.
     *
     * @param request - CreateUserPoolClientRequest
     *
     * @returns CreateUserPoolClientResponse
     *
     * @param CreateUserPoolClientRequest $request
     *
     * @return CreateUserPoolClientResponse
     */
    public function createUserPoolClient($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createUserPoolClientWithOptions($request, $runtime);
    }

    /**
     * Create a workload identity for an AI Agent to uniquely identify it.
     *
     * @param tmpReq - CreateWorkloadIdentityRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateWorkloadIdentityResponse
     *
     * @param CreateWorkloadIdentityRequest $tmpReq
     * @param RuntimeOptions                $runtime
     *
     * @return CreateWorkloadIdentityResponse
     */
    public function createWorkloadIdentityWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateWorkloadIdentityShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->allowedConsentCallbackURLs) {
            $request->allowedConsentCallbackURLsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->allowedConsentCallbackURLs, 'AllowedConsentCallbackURLs', 'json');
        }

        if (null !== $tmpReq->allowedResourceOAuth2ReturnURLs) {
            $request->allowedResourceOAuth2ReturnURLsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->allowedResourceOAuth2ReturnURLs, 'AllowedResourceOAuth2ReturnURLs', 'json');
        }

        $body = [];
        if (null !== $request->allowedConsentCallbackURLsShrink) {
            @$body['AllowedConsentCallbackURLs'] = $request->allowedConsentCallbackURLsShrink;
        }

        if (null !== $request->allowedResourceOAuth2ReturnURLsShrink) {
            @$body['AllowedResourceOAuth2ReturnURLs'] = $request->allowedResourceOAuth2ReturnURLsShrink;
        }

        if (null !== $request->createRAMRole) {
            @$body['CreateRAMRole'] = $request->createRAMRole;
        }

        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->identityProviderName) {
            @$body['IdentityProviderName'] = $request->identityProviderName;
        }

        if (null !== $request->roleArn) {
            @$body['RoleArn'] = $request->roleArn;
        }

        if (null !== $request->sessionBindingEnabled) {
            @$body['SessionBindingEnabled'] = $request->sessionBindingEnabled;
        }

        if (null !== $request->sourceAgentArn) {
            @$body['SourceAgentArn'] = $request->sourceAgentArn;
        }

        if (null !== $request->sourcePlatform) {
            @$body['SourcePlatform'] = $request->sourcePlatform;
        }

        if (null !== $request->workloadIdentityName) {
            @$body['WorkloadIdentityName'] = $request->workloadIdentityName;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateWorkloadIdentity',
            'version' => '2025-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateWorkloadIdentityResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Create a workload identity for an AI Agent to uniquely identify it.
     *
     * @param request - CreateWorkloadIdentityRequest
     *
     * @returns CreateWorkloadIdentityResponse
     *
     * @param CreateWorkloadIdentityRequest $request
     *
     * @return CreateWorkloadIdentityResponse
     */
    public function createWorkloadIdentity($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createWorkloadIdentityWithOptions($request, $runtime);
    }

    /**
     * Deletes a specified API key credential provider.
     *
     * @param request - DeleteAPIKeyCredentialProviderRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteAPIKeyCredentialProviderResponse
     *
     * @param DeleteAPIKeyCredentialProviderRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DeleteAPIKeyCredentialProviderResponse
     */
    public function deleteAPIKeyCredentialProviderWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->APIKeyCredentialProviderName) {
            @$body['APIKeyCredentialProviderName'] = $request->APIKeyCredentialProviderName;
        }

        if (null !== $request->tokenVaultName) {
            @$body['TokenVaultName'] = $request->tokenVaultName;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteAPIKeyCredentialProvider',
            'version' => '2025-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteAPIKeyCredentialProviderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a specified API key credential provider.
     *
     * @param request - DeleteAPIKeyCredentialProviderRequest
     *
     * @returns DeleteAPIKeyCredentialProviderResponse
     *
     * @param DeleteAPIKeyCredentialProviderRequest $request
     *
     * @return DeleteAPIKeyCredentialProviderResponse
     */
    public function deleteAPIKeyCredentialProvider($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAPIKeyCredentialProviderWithOptions($request, $runtime);
    }

    /**
     * Deletes an identity provider.
     *
     * @remarks
     * Deletes a specified client secret by client ID and key ID. The secret becomes invalid immediately after deletion, and all OAuth authentication flows that use this secret will fail.
     *
     * @param request - DeleteClientSecretRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteClientSecretResponse
     *
     * @param DeleteClientSecretRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteClientSecretResponse
     */
    public function deleteClientSecretWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->clientId) {
            @$body['ClientId'] = $request->clientId;
        }

        if (null !== $request->clientName) {
            @$body['ClientName'] = $request->clientName;
        }

        if (null !== $request->clientSecretId) {
            @$body['ClientSecretId'] = $request->clientSecretId;
        }

        if (null !== $request->userPoolName) {
            @$body['UserPoolName'] = $request->userPoolName;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteClientSecret',
            'version' => '2025-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteClientSecretResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes an identity provider.
     *
     * @remarks
     * Deletes a specified client secret by client ID and key ID. The secret becomes invalid immediately after deletion, and all OAuth authentication flows that use this secret will fail.
     *
     * @param request - DeleteClientSecretRequest
     *
     * @returns DeleteClientSecretResponse
     *
     * @param DeleteClientSecretRequest $request
     *
     * @return DeleteClientSecretResponse
     */
    public function deleteClientSecret($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteClientSecretWithOptions($request, $runtime);
    }

    /**
     * Deletes a specified identity provider.
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
        $body = [];
        if (null !== $request->identityProviderName) {
            @$body['IdentityProviderName'] = $request->identityProviderName;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteIdentityProvider',
            'version' => '2025-09-01',
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
     * Deletes a specified identity provider.
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
     * Deletes a specified OAuth 2.0 credential provider.
     *
     * @param request - DeleteOAuth2CredentialProviderRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteOAuth2CredentialProviderResponse
     *
     * @param DeleteOAuth2CredentialProviderRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DeleteOAuth2CredentialProviderResponse
     */
    public function deleteOAuth2CredentialProviderWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->OAuth2CredentialProviderName) {
            @$body['OAuth2CredentialProviderName'] = $request->OAuth2CredentialProviderName;
        }

        if (null !== $request->tokenVaultName) {
            @$body['TokenVaultName'] = $request->tokenVaultName;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteOAuth2CredentialProvider',
            'version' => '2025-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteOAuth2CredentialProviderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a specified OAuth 2.0 credential provider.
     *
     * @param request - DeleteOAuth2CredentialProviderRequest
     *
     * @returns DeleteOAuth2CredentialProviderResponse
     *
     * @param DeleteOAuth2CredentialProviderRequest $request
     *
     * @return DeleteOAuth2CredentialProviderResponse
     */
    public function deleteOAuth2CredentialProvider($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteOAuth2CredentialProviderWithOptions($request, $runtime);
    }

    /**
     * Deletes an access policy.
     *
     * @remarks
     * Calls DeletePolicy to remove a policy from a specified policy set. The policy becomes invalid immediately after deletion, and gateways that depend on the policy set do not need to be remounted.
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
        $body = [];
        if (null !== $request->policyName) {
            @$body['PolicyName'] = $request->policyName;
        }

        if (null !== $request->policySetName) {
            @$body['PolicySetName'] = $request->policySetName;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeletePolicy',
            'version' => '2025-09-01',
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
     * Deletes an access policy.
     *
     * @remarks
     * Calls DeletePolicy to remove a policy from a specified policy set. The policy becomes invalid immediately after deletion, and gateways that depend on the policy set do not need to be remounted.
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
     * Deletes an access policy set.
     *
     * @remarks
     * Calls DeletePolicySet to delete a policy set that is no longer in use.
     * Before deleting the policy set, ensure that it is unmounted from all gateways (you can query this by calling ListPolicySetAttachedGateways) and contains no policies. Otherwise, the deletion fails.
     *
     * @param request - DeletePolicySetRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeletePolicySetResponse
     *
     * @param DeletePolicySetRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DeletePolicySetResponse
     */
    public function deletePolicySetWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->policySetName) {
            @$body['PolicySetName'] = $request->policySetName;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeletePolicySet',
            'version' => '2025-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeletePolicySetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes an access policy set.
     *
     * @remarks
     * Calls DeletePolicySet to delete a policy set that is no longer in use.
     * Before deleting the policy set, ensure that it is unmounted from all gateways (you can query this by calling ListPolicySetAttachedGateways) and contains no policies. Otherwise, the deletion fails.
     *
     * @param request - DeletePolicySetRequest
     *
     * @returns DeletePolicySetResponse
     *
     * @param DeletePolicySetRequest $request
     *
     * @return DeletePolicySetResponse
     */
    public function deletePolicySet($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deletePolicySetWithOptions($request, $runtime);
    }

    /**
     * Deletes a role.
     *
     * @remarks
     * Before deletion, the system checks whether the role has any bound users. If role assignments exist, the deletion is rejected. You must call DeleteRoleAssignment to remove the assignments before deleting the role. Default roles (Type=Default) cannot be deleted.
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
        $body = [];
        if (null !== $request->roleName) {
            @$body['RoleName'] = $request->roleName;
        }

        if (null !== $request->userPoolName) {
            @$body['UserPoolName'] = $request->userPoolName;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteRole',
            'version' => '2025-09-01',
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
     * Deletes a role.
     *
     * @remarks
     * Before deletion, the system checks whether the role has any bound users. If role assignments exist, the deletion is rejected. You must call DeleteRoleAssignment to remove the assignments before deleting the role. Default roles (Type=Default) cannot be deleted.
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
     * Disassociates a policy set from a gateway.
     *
     * @remarks
     * Removes the role assignment relationship between an identity and a role.
     *
     * @param request - DeleteRoleAssignmentRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteRoleAssignmentResponse
     *
     * @param DeleteRoleAssignmentRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DeleteRoleAssignmentResponse
     */
    public function deleteRoleAssignmentWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->principalName) {
            @$body['PrincipalName'] = $request->principalName;
        }

        if (null !== $request->principalType) {
            @$body['PrincipalType'] = $request->principalType;
        }

        if (null !== $request->roleName) {
            @$body['RoleName'] = $request->roleName;
        }

        if (null !== $request->userPoolName) {
            @$body['UserPoolName'] = $request->userPoolName;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteRoleAssignment',
            'version' => '2025-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteRoleAssignmentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Disassociates a policy set from a gateway.
     *
     * @remarks
     * Removes the role assignment relationship between an identity and a role.
     *
     * @param request - DeleteRoleAssignmentRequest
     *
     * @returns DeleteRoleAssignmentResponse
     *
     * @param DeleteRoleAssignmentRequest $request
     *
     * @return DeleteRoleAssignmentResponse
     */
    public function deleteRoleAssignment($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteRoleAssignmentWithOptions($request, $runtime);
    }

    /**
     * Deletes a workload identity.
     *
     * @remarks
     * Cleans up expired or unused certificates after certificate rotation is complete. Before deleting the certificate, ensure that it is no longer used for SAML assertion signature verification. Otherwise, SSO logon may fail.
     *
     * @param request - DeleteSAMLIdentityProviderCertificateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteSAMLIdentityProviderCertificateResponse
     *
     * @param DeleteSAMLIdentityProviderCertificateRequest $request
     * @param RuntimeOptions                               $runtime
     *
     * @return DeleteSAMLIdentityProviderCertificateResponse
     */
    public function deleteSAMLIdentityProviderCertificateWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->certificateId) {
            @$body['CertificateId'] = $request->certificateId;
        }

        if (null !== $request->userPoolName) {
            @$body['UserPoolName'] = $request->userPoolName;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteSAMLIdentityProviderCertificate',
            'version' => '2025-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteSAMLIdentityProviderCertificateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a workload identity.
     *
     * @remarks
     * Cleans up expired or unused certificates after certificate rotation is complete. Before deleting the certificate, ensure that it is no longer used for SAML assertion signature verification. Otherwise, SSO logon may fail.
     *
     * @param request - DeleteSAMLIdentityProviderCertificateRequest
     *
     * @returns DeleteSAMLIdentityProviderCertificateResponse
     *
     * @param DeleteSAMLIdentityProviderCertificateRequest $request
     *
     * @return DeleteSAMLIdentityProviderCertificateResponse
     */
    public function deleteSAMLIdentityProviderCertificate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteSAMLIdentityProviderCertificateWithOptions($request, $runtime);
    }

    /**
     * Deletes a specified token vault.
     *
     * @remarks
     * Call DeleteTokenVault to delete a token vault that is no longer in use.
     * Before deletion, ensure that the token vault is not referenced by any credential provider. Otherwise, the deletion may cause credentials that depend on the token vault to become unavailable. This operation cannot be undone.
     *
     * @param request - DeleteTokenVaultRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteTokenVaultResponse
     *
     * @param DeleteTokenVaultRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DeleteTokenVaultResponse
     */
    public function deleteTokenVaultWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->tokenVaultName) {
            @$body['TokenVaultName'] = $request->tokenVaultName;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteTokenVault',
            'version' => '2025-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteTokenVaultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a specified token vault.
     *
     * @remarks
     * Call DeleteTokenVault to delete a token vault that is no longer in use.
     * Before deletion, ensure that the token vault is not referenced by any credential provider. Otherwise, the deletion may cause credentials that depend on the token vault to become unavailable. This operation cannot be undone.
     *
     * @param request - DeleteTokenVaultRequest
     *
     * @returns DeleteTokenVaultResponse
     *
     * @param DeleteTokenVaultRequest $request
     *
     * @return DeleteTokenVaultResponse
     */
    public function deleteTokenVault($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteTokenVaultWithOptions($request, $runtime);
    }

    /**
     * Deletes a user.
     *
     * @remarks
     * Deleting a user forcibly clears all role assignments of the user in the user pool. This operation is irreversible. Proceed with caution.
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
        $body = [];
        if (null !== $request->userName) {
            @$body['UserName'] = $request->userName;
        }

        if (null !== $request->userPoolName) {
            @$body['UserPoolName'] = $request->userPoolName;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteUser',
            'version' => '2025-09-01',
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
     * Deleting a user forcibly clears all role assignments of the user in the user pool. This operation is irreversible. Proceed with caution.
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
     * Deletes a user pool.
     *
     * @remarks
     * Before deleting a user pool, you must clean up all resources in the user pool, including all users, roles, clients, SAML IdPs, and role assignments. Calls to this operation are rejected if the resources are not cleaned up. This operation is irreversible. Proceed with caution.
     *
     * @param request - DeleteUserPoolRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteUserPoolResponse
     *
     * @param DeleteUserPoolRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DeleteUserPoolResponse
     */
    public function deleteUserPoolWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->userPoolName) {
            @$body['UserPoolName'] = $request->userPoolName;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteUserPool',
            'version' => '2025-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteUserPoolResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a user pool.
     *
     * @remarks
     * Before deleting a user pool, you must clean up all resources in the user pool, including all users, roles, clients, SAML IdPs, and role assignments. Calls to this operation are rejected if the resources are not cleaned up. This operation is irreversible. Proceed with caution.
     *
     * @param request - DeleteUserPoolRequest
     *
     * @returns DeleteUserPoolResponse
     *
     * @param DeleteUserPoolRequest $request
     *
     * @return DeleteUserPoolResponse
     */
    public function deleteUserPool($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteUserPoolWithOptions($request, $runtime);
    }

    /**
     * Deletes a WorkloadIdentity.
     *
     * @remarks
     * Deleting a client also removes all its associated client secrets. After deletion, the client can no longer be used for OAuth authentication and authorization flows. Proceed with caution.
     *
     * @param request - DeleteUserPoolClientRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteUserPoolClientResponse
     *
     * @param DeleteUserPoolClientRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DeleteUserPoolClientResponse
     */
    public function deleteUserPoolClientWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->clientName) {
            @$body['ClientName'] = $request->clientName;
        }

        if (null !== $request->userPoolName) {
            @$body['UserPoolName'] = $request->userPoolName;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteUserPoolClient',
            'version' => '2025-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteUserPoolClientResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a WorkloadIdentity.
     *
     * @remarks
     * Deleting a client also removes all its associated client secrets. After deletion, the client can no longer be used for OAuth authentication and authorization flows. Proceed with caution.
     *
     * @param request - DeleteUserPoolClientRequest
     *
     * @returns DeleteUserPoolClientResponse
     *
     * @param DeleteUserPoolClientRequest $request
     *
     * @return DeleteUserPoolClientResponse
     */
    public function deleteUserPoolClient($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteUserPoolClientWithOptions($request, $runtime);
    }

    /**
     * Deletes a specified workload identity.
     *
     * @param request - DeleteWorkloadIdentityRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteWorkloadIdentityResponse
     *
     * @param DeleteWorkloadIdentityRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DeleteWorkloadIdentityResponse
     */
    public function deleteWorkloadIdentityWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->workloadIdentityName) {
            @$body['WorkloadIdentityName'] = $request->workloadIdentityName;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteWorkloadIdentity',
            'version' => '2025-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteWorkloadIdentityResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a specified workload identity.
     *
     * @param request - DeleteWorkloadIdentityRequest
     *
     * @returns DeleteWorkloadIdentityResponse
     *
     * @param DeleteWorkloadIdentityRequest $request
     *
     * @return DeleteWorkloadIdentityResponse
     */
    public function deleteWorkloadIdentity($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteWorkloadIdentityWithOptions($request, $runtime);
    }

    /**
     * Detaches a policy set from a gateway.
     *
     * @remarks
     * Detaches a policy set from a gateway. After the policy set is detached, requests on the gateway are no longer governed by the policies in the policy set.
     *
     * @param request - DetachPolicySetFromGatewayRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DetachPolicySetFromGatewayResponse
     *
     * @param DetachPolicySetFromGatewayRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DetachPolicySetFromGatewayResponse
     */
    public function detachPolicySetFromGatewayWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->gatewayArn) {
            @$body['GatewayArn'] = $request->gatewayArn;
        }

        if (null !== $request->gatewayType) {
            @$body['GatewayType'] = $request->gatewayType;
        }

        if (null !== $request->policySetName) {
            @$body['PolicySetName'] = $request->policySetName;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DetachPolicySetFromGateway',
            'version' => '2025-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DetachPolicySetFromGatewayResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Detaches a policy set from a gateway.
     *
     * @remarks
     * Detaches a policy set from a gateway. After the policy set is detached, requests on the gateway are no longer governed by the policies in the policy set.
     *
     * @param request - DetachPolicySetFromGatewayRequest
     *
     * @returns DetachPolicySetFromGatewayResponse
     *
     * @param DetachPolicySetFromGatewayRequest $request
     *
     * @return DetachPolicySetFromGatewayResponse
     */
    public function detachPolicySetFromGateway($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detachPolicySetFromGatewayWithOptions($request, $runtime);
    }

    /**
     * Retrieves the details of a specified API key credential provider.
     *
     * @param request - GetAPIKeyCredentialProviderRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAPIKeyCredentialProviderResponse
     *
     * @param GetAPIKeyCredentialProviderRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return GetAPIKeyCredentialProviderResponse
     */
    public function getAPIKeyCredentialProviderWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->APIKeyCredentialProviderName) {
            @$body['APIKeyCredentialProviderName'] = $request->APIKeyCredentialProviderName;
        }

        if (null !== $request->tokenVaultName) {
            @$body['TokenVaultName'] = $request->tokenVaultName;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetAPIKeyCredentialProvider',
            'version' => '2025-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetAPIKeyCredentialProviderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the details of a specified API key credential provider.
     *
     * @param request - GetAPIKeyCredentialProviderRequest
     *
     * @returns GetAPIKeyCredentialProviderResponse
     *
     * @param GetAPIKeyCredentialProviderRequest $request
     *
     * @return GetAPIKeyCredentialProviderResponse
     */
    public function getAPIKeyCredentialProvider($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAPIKeyCredentialProviderWithOptions($request, $runtime);
    }

    /**
     * Queries the gateway policy configuration.
     *
     * @remarks
     * Calls the GetGatewayPolicyConfig operation to query the currently effective policy configuration of a gateway, including the ARN of the mounted policy set and the enforcement mode.
     *
     * @param request - GetGatewayPolicyConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetGatewayPolicyConfigResponse
     *
     * @param GetGatewayPolicyConfigRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return GetGatewayPolicyConfigResponse
     */
    public function getGatewayPolicyConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->gatewayArn) {
            @$body['GatewayArn'] = $request->gatewayArn;
        }

        if (null !== $request->gatewayType) {
            @$body['GatewayType'] = $request->gatewayType;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetGatewayPolicyConfig',
            'version' => '2025-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetGatewayPolicyConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the gateway policy configuration.
     *
     * @remarks
     * Calls the GetGatewayPolicyConfig operation to query the currently effective policy configuration of a gateway, including the ARN of the mounted policy set and the enforcement mode.
     *
     * @param request - GetGatewayPolicyConfigRequest
     *
     * @returns GetGatewayPolicyConfigResponse
     *
     * @param GetGatewayPolicyConfigRequest $request
     *
     * @return GetGatewayPolicyConfigResponse
     */
    public function getGatewayPolicyConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getGatewayPolicyConfigWithOptions($request, $runtime);
    }

    /**
     * 创建应用.
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
        $body = [];
        if (null !== $request->identityProviderName) {
            @$body['IdentityProviderName'] = $request->identityProviderName;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetIdentityProvider',
            'version' => '2025-09-01',
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
     * 创建应用.
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
     * 查询身份源同步范围与统计（已选部门有效性 + 展开部门数/预计人数）.
     *
     * @remarks
     * 目标用户池需已配置指定类型的身份源。本接口使用已保存的身份源配置，无需传入钉钉或飞书应用密钥。
     * 同步范围支持 AllAuthorized 和 SelectedDepartments。未显式配置范围时默认为 AllAuthorized，表示第三方应用授权可见范围内的全部用户。SelectedDepartments 包含选中部门及其全部后代部门；人员有任一当前所属部门命中展开集合，即命中同步范围。
     * 本接口不修改范围、不创建人员同步任务。查询可能触发后台统计；EstimateStatus 表示范围统计状态，不是人员同步任务状态。统计结果可能复用缓存，也可能来自同一范围最近一次同步结果；跨部门重复用户可能重复计数，不应视为实时、精确去重人数。
     * 对应身份源未配置时返回 EntityNotExists.IdpConfiguration；目录权限或通讯录可见范围不足时，返回 DingTalkApiPermissionDenied 或 FeishuApiPermissionDenied，不会将权限问题当作部门不存在。
     *
     * @param request - GetIdentityProviderSyncScopeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetIdentityProviderSyncScopeResponse
     *
     * @param GetIdentityProviderSyncScopeRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return GetIdentityProviderSyncScopeResponse
     */
    public function getIdentityProviderSyncScopeWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->identityProviderType) {
            @$body['IdentityProviderType'] = $request->identityProviderType;
        }

        if (null !== $request->userPoolName) {
            @$body['UserPoolName'] = $request->userPoolName;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetIdentityProviderSyncScope',
            'version' => '2025-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetIdentityProviderSyncScopeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询身份源同步范围与统计（已选部门有效性 + 展开部门数/预计人数）.
     *
     * @remarks
     * 目标用户池需已配置指定类型的身份源。本接口使用已保存的身份源配置，无需传入钉钉或飞书应用密钥。
     * 同步范围支持 AllAuthorized 和 SelectedDepartments。未显式配置范围时默认为 AllAuthorized，表示第三方应用授权可见范围内的全部用户。SelectedDepartments 包含选中部门及其全部后代部门；人员有任一当前所属部门命中展开集合，即命中同步范围。
     * 本接口不修改范围、不创建人员同步任务。查询可能触发后台统计；EstimateStatus 表示范围统计状态，不是人员同步任务状态。统计结果可能复用缓存，也可能来自同一范围最近一次同步结果；跨部门重复用户可能重复计数，不应视为实时、精确去重人数。
     * 对应身份源未配置时返回 EntityNotExists.IdpConfiguration；目录权限或通讯录可见范围不足时，返回 DingTalkApiPermissionDenied 或 FeishuApiPermissionDenied，不会将权限问题当作部门不存在。
     *
     * @param request - GetIdentityProviderSyncScopeRequest
     *
     * @returns GetIdentityProviderSyncScopeResponse
     *
     * @param GetIdentityProviderSyncScopeRequest $request
     *
     * @return GetIdentityProviderSyncScopeResponse
     */
    public function getIdentityProviderSyncScope($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getIdentityProviderSyncScopeWithOptions($request, $runtime);
    }

    /**
     * Retrieves the logon-related configurations of a user pool.
     *
     * @remarks
     * Retrieves the logon configuration and password policy of a specified user pool. The logon configuration includes preference settings such as whether to enable password logon. The password policy includes rules for password complexity, length limits, and logon failure lockouts. The password policy is read-only and does not support custom modifications.
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
        $body = [];
        if (null !== $request->userPoolName) {
            @$body['UserPoolName'] = $request->userPoolName;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetLoginPreference',
            'version' => '2025-09-01',
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
     * Retrieves the logon-related configurations of a user pool.
     *
     * @remarks
     * Retrieves the logon configuration and password policy of a specified user pool. The logon configuration includes preference settings such as whether to enable password logon. The password policy includes rules for password complexity, length limits, and logon failure lockouts. The password policy is read-only and does not support custom modifications.
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
     * Retrieves the details of a specified OAuth 2.0 credential provider.
     *
     * @param request - GetOAuth2CredentialProviderRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetOAuth2CredentialProviderResponse
     *
     * @param GetOAuth2CredentialProviderRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return GetOAuth2CredentialProviderResponse
     */
    public function getOAuth2CredentialProviderWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->OAuth2CredentialProviderName) {
            @$body['OAuth2CredentialProviderName'] = $request->OAuth2CredentialProviderName;
        }

        if (null !== $request->tokenVaultName) {
            @$body['TokenVaultName'] = $request->tokenVaultName;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetOAuth2CredentialProvider',
            'version' => '2025-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetOAuth2CredentialProviderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the details of a specified OAuth 2.0 credential provider.
     *
     * @param request - GetOAuth2CredentialProviderRequest
     *
     * @returns GetOAuth2CredentialProviderResponse
     *
     * @param GetOAuth2CredentialProviderRequest $request
     *
     * @return GetOAuth2CredentialProviderResponse
     */
    public function getOAuth2CredentialProvider($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getOAuth2CredentialProviderWithOptions($request, $runtime);
    }

    /**
     * Queries an access policy.
     *
     * @remarks
     * Calls GetPolicy to retrieve the complete configuration of a single policy, including its definition, associated policy set, and creation and update times.
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
        $body = [];
        if (null !== $request->policyName) {
            @$body['PolicyName'] = $request->policyName;
        }

        if (null !== $request->policySetName) {
            @$body['PolicySetName'] = $request->policySetName;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetPolicy',
            'version' => '2025-09-01',
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
     * Queries an access policy.
     *
     * @remarks
     * Calls GetPolicy to retrieve the complete configuration of a single policy, including its definition, associated policy set, and creation and update times.
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
     * Queries an access policy set.
     *
     * @remarks
     * Calls GetPolicySet to query the complete configuration of a single policy set, including the ARN, description, creation time, and update time.
     *
     * @param request - GetPolicySetRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetPolicySetResponse
     *
     * @param GetPolicySetRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return GetPolicySetResponse
     */
    public function getPolicySetWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->policySetName) {
            @$body['PolicySetName'] = $request->policySetName;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetPolicySet',
            'version' => '2025-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetPolicySetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries an access policy set.
     *
     * @remarks
     * Calls GetPolicySet to query the complete configuration of a single policy set, including the ARN, description, creation time, and update time.
     *
     * @param request - GetPolicySetRequest
     *
     * @returns GetPolicySetResponse
     *
     * @param GetPolicySetRequest $request
     *
     * @return GetPolicySetResponse
     */
    public function getPolicySet($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getPolicySetWithOptions($request, $runtime);
    }

    /**
     * Retrieves a role.
     *
     * @remarks
     * Returns the complete information about a specified role, including the role ID, name, description, type (Default or Manual), and creation and update times.
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
        $body = [];
        if (null !== $request->roleName) {
            @$body['RoleName'] = $request->roleName;
        }

        if (null !== $request->userPoolName) {
            @$body['UserPoolName'] = $request->userPoolName;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetRole',
            'version' => '2025-09-01',
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
     * Retrieves a role.
     *
     * @remarks
     * Returns the complete information about a specified role, including the role ID, name, description, type (Default or Manual), and creation and update times.
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
     * Creates an application.
     *
     * @remarks
     * Returns the complete configuration of the SAML IdP, including the EntityId, logon URL, X509 certificate list, and the enabling status of SSO and JIT synchronization.
     *
     * @param request - GetSAMLIdentityProviderRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetSAMLIdentityProviderResponse
     *
     * @param GetSAMLIdentityProviderRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return GetSAMLIdentityProviderResponse
     */
    public function getSAMLIdentityProviderWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->userPoolName) {
            @$body['UserPoolName'] = $request->userPoolName;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetSAMLIdentityProvider',
            'version' => '2025-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetSAMLIdentityProviderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates an application.
     *
     * @remarks
     * Returns the complete configuration of the SAML IdP, including the EntityId, logon URL, X509 certificate list, and the enabling status of SSO and JIT synchronization.
     *
     * @param request - GetSAMLIdentityProviderRequest
     *
     * @returns GetSAMLIdentityProviderResponse
     *
     * @param GetSAMLIdentityProviderRequest $request
     *
     * @return GetSAMLIdentityProviderResponse
     */
    public function getSAMLIdentityProvider($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSAMLIdentityProviderWithOptions($request, $runtime);
    }

    /**
     * 创建应用.
     *
     * @param request - GetSAMLServiceProviderInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetSAMLServiceProviderInfoResponse
     *
     * @param GetSAMLServiceProviderInfoRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return GetSAMLServiceProviderInfoResponse
     */
    public function getSAMLServiceProviderInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->userPoolName) {
            @$body['UserPoolName'] = $request->userPoolName;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetSAMLServiceProviderInfo',
            'version' => '2025-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetSAMLServiceProviderInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建应用.
     *
     * @param request - GetSAMLServiceProviderInfoRequest
     *
     * @returns GetSAMLServiceProviderInfoResponse
     *
     * @param GetSAMLServiceProviderInfoRequest $request
     *
     * @return GetSAMLServiceProviderInfoResponse
     */
    public function getSAMLServiceProviderInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSAMLServiceProviderInfoWithOptions($request, $runtime);
    }

    /**
     * Retrieves the specified identity provider.
     *
     * @remarks
     * Queries the SSO configuration of a specific type of identity provider in a specified user pool. Returns information such as the enabling status, synchronization callback status, and metadata of the IdP. For security reasons, sensitive fields such as appSecret, encryptKey, and verificationToken are not returned in the response.
     *
     * @param request - GetSpecificIdentityProviderRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetSpecificIdentityProviderResponse
     *
     * @param GetSpecificIdentityProviderRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return GetSpecificIdentityProviderResponse
     */
    public function getSpecificIdentityProviderWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->identityProviderType) {
            @$body['IdentityProviderType'] = $request->identityProviderType;
        }

        if (null !== $request->userPoolName) {
            @$body['UserPoolName'] = $request->userPoolName;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetSpecificIdentityProvider',
            'version' => '2025-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetSpecificIdentityProviderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the specified identity provider.
     *
     * @remarks
     * Queries the SSO configuration of a specific type of identity provider in a specified user pool. Returns information such as the enabling status, synchronization callback status, and metadata of the IdP. For security reasons, sensitive fields such as appSecret, encryptKey, and verificationToken are not returned in the response.
     *
     * @param request - GetSpecificIdentityProviderRequest
     *
     * @returns GetSpecificIdentityProviderResponse
     *
     * @param GetSpecificIdentityProviderRequest $request
     *
     * @return GetSpecificIdentityProviderResponse
     */
    public function getSpecificIdentityProvider($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSpecificIdentityProviderWithOptions($request, $runtime);
    }

    /**
     * Retrieves the detailed configuration of a specified token vault.
     *
     * @remarks
     * Calls GetTokenVault to retrieve the complete configuration of a single token vault, including the encryption method, associated RAM role ARN, creation time, and update time.
     *
     * @param request - GetTokenVaultRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetTokenVaultResponse
     *
     * @param GetTokenVaultRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return GetTokenVaultResponse
     */
    public function getTokenVaultWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->tokenVaultName) {
            @$body['TokenVaultName'] = $request->tokenVaultName;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetTokenVault',
            'version' => '2025-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetTokenVaultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the detailed configuration of a specified token vault.
     *
     * @remarks
     * Calls GetTokenVault to retrieve the complete configuration of a single token vault, including the encryption method, associated RAM role ARN, creation time, and update time.
     *
     * @param request - GetTokenVaultRequest
     *
     * @returns GetTokenVaultResponse
     *
     * @param GetTokenVaultRequest $request
     *
     * @return GetTokenVaultResponse
     */
    public function getTokenVault($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTokenVaultWithOptions($request, $runtime);
    }

    /**
     * Retrieves a user.
     *
     * @remarks
     * Returns the complete information of a specified user, including the user ID, username, display name, description, and creation and update times.
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
        $body = [];
        if (null !== $request->userId) {
            @$body['UserId'] = $request->userId;
        }

        if (null !== $request->userName) {
            @$body['UserName'] = $request->userName;
        }

        if (null !== $request->userPoolId) {
            @$body['UserPoolId'] = $request->userPoolId;
        }

        if (null !== $request->userPoolName) {
            @$body['UserPoolName'] = $request->userPoolName;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetUser',
            'version' => '2025-09-01',
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
     * Retrieves a user.
     *
     * @remarks
     * Returns the complete information of a specified user, including the user ID, username, display name, description, and creation and update times.
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
     * Retrieves a user pool.
     *
     * @remarks
     * Returns the complete configuration information of a specified user pool, including the user pool ID, name, description, creation time, and update time.
     *
     * @param request - GetUserPoolRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetUserPoolResponse
     *
     * @param GetUserPoolRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return GetUserPoolResponse
     */
    public function getUserPoolWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->userPoolName) {
            @$body['UserPoolName'] = $request->userPoolName;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetUserPool',
            'version' => '2025-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetUserPoolResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves a user pool.
     *
     * @remarks
     * Returns the complete configuration information of a specified user pool, including the user pool ID, name, description, creation time, and update time.
     *
     * @param request - GetUserPoolRequest
     *
     * @returns GetUserPoolResponse
     *
     * @param GetUserPoolRequest $request
     *
     * @return GetUserPoolResponse
     */
    public function getUserPool($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getUserPoolWithOptions($request, $runtime);
    }

    /**
     * Creates an application.
     *
     * @remarks
     * Returns the complete configuration information of a client, including the client ID, name, redirect URIs, token validity periods, SecretRequired and EnforcePKCE settings, and default client scopes.
     *
     * @param request - GetUserPoolClientRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetUserPoolClientResponse
     *
     * @param GetUserPoolClientRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetUserPoolClientResponse
     */
    public function getUserPoolClientWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->clientName) {
            @$body['ClientName'] = $request->clientName;
        }

        if (null !== $request->userPoolName) {
            @$body['UserPoolName'] = $request->userPoolName;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetUserPoolClient',
            'version' => '2025-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetUserPoolClientResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates an application.
     *
     * @remarks
     * Returns the complete configuration information of a client, including the client ID, name, redirect URIs, token validity periods, SecretRequired and EnforcePKCE settings, and default client scopes.
     *
     * @param request - GetUserPoolClientRequest
     *
     * @returns GetUserPoolClientResponse
     *
     * @param GetUserPoolClientRequest $request
     *
     * @return GetUserPoolClientResponse
     */
    public function getUserPoolClient($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getUserPoolClientWithOptions($request, $runtime);
    }

    /**
     * Retrieves the details of a synchronization task in a user pool.
     *
     * @remarks
     * Queries the execution details of a single synchronization task in a specified user pool, including the task status, start and end times, synchronization result statistics (the number of created, updated, deleted, and unchanged users), and error messages.
     *
     * @param request - GetUserPoolSyncJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetUserPoolSyncJobResponse
     *
     * @param GetUserPoolSyncJobRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GetUserPoolSyncJobResponse
     */
    public function getUserPoolSyncJobWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->synchronizationJobId) {
            @$body['SynchronizationJobId'] = $request->synchronizationJobId;
        }

        if (null !== $request->userPoolName) {
            @$body['UserPoolName'] = $request->userPoolName;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetUserPoolSyncJob',
            'version' => '2025-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetUserPoolSyncJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the details of a synchronization task in a user pool.
     *
     * @remarks
     * Queries the execution details of a single synchronization task in a specified user pool, including the task status, start and end times, synchronization result statistics (the number of created, updated, deleted, and unchanged users), and error messages.
     *
     * @param request - GetUserPoolSyncJobRequest
     *
     * @returns GetUserPoolSyncJobResponse
     *
     * @param GetUserPoolSyncJobRequest $request
     *
     * @return GetUserPoolSyncJobResponse
     */
    public function getUserPoolSyncJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getUserPoolSyncJobWithOptions($request, $runtime);
    }

    /**
     * Queries the detailed configuration of a workload identity by name.
     *
     * @param request - GetWorkloadIdentityRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetWorkloadIdentityResponse
     *
     * @param GetWorkloadIdentityRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GetWorkloadIdentityResponse
     */
    public function getWorkloadIdentityWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->workloadIdentityName) {
            @$body['WorkloadIdentityName'] = $request->workloadIdentityName;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetWorkloadIdentity',
            'version' => '2025-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetWorkloadIdentityResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the detailed configuration of a workload identity by name.
     *
     * @param request - GetWorkloadIdentityRequest
     *
     * @returns GetWorkloadIdentityResponse
     *
     * @param GetWorkloadIdentityRequest $request
     *
     * @return GetWorkloadIdentityResponse
     */
    public function getWorkloadIdentity($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getWorkloadIdentityWithOptions($request, $runtime);
    }

    /**
     * Lists all API key credential providers in the account.
     *
     * @param request - ListAPIKeyCredentialProvidersRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAPIKeyCredentialProvidersResponse
     *
     * @param ListAPIKeyCredentialProvidersRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return ListAPIKeyCredentialProvidersResponse
     */
    public function listAPIKeyCredentialProvidersWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->maxResults) {
            @$body['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$body['NextToken'] = $request->nextToken;
        }

        if (null !== $request->tokenVaultName) {
            @$body['TokenVaultName'] = $request->tokenVaultName;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListAPIKeyCredentialProviders',
            'version' => '2025-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListAPIKeyCredentialProvidersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Lists all API key credential providers in the account.
     *
     * @param request - ListAPIKeyCredentialProvidersRequest
     *
     * @returns ListAPIKeyCredentialProvidersResponse
     *
     * @param ListAPIKeyCredentialProvidersRequest $request
     *
     * @return ListAPIKeyCredentialProvidersResponse
     */
    public function listAPIKeyCredentialProviders($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAPIKeyCredentialProvidersWithOptions($request, $runtime);
    }

    /**
     * Lists identity providers.
     *
     * @remarks
     * Returns summary information about all secrets of a client, including the client key ID and creation time. For security reasons, the plaintext secret (ClientSecretValue) is not returned in the list.
     *
     * @param request - ListClientSecretsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListClientSecretsResponse
     *
     * @param ListClientSecretsRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ListClientSecretsResponse
     */
    public function listClientSecretsWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->clientName) {
            @$body['ClientName'] = $request->clientName;
        }

        if (null !== $request->userPoolName) {
            @$body['UserPoolName'] = $request->userPoolName;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListClientSecrets',
            'version' => '2025-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListClientSecretsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Lists identity providers.
     *
     * @remarks
     * Returns summary information about all secrets of a client, including the client key ID and creation time. For security reasons, the plaintext secret (ClientSecretValue) is not returned in the list.
     *
     * @param request - ListClientSecretsRequest
     *
     * @returns ListClientSecretsResponse
     *
     * @param ListClientSecretsRequest $request
     *
     * @return ListClientSecretsResponse
     */
    public function listClientSecrets($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listClientSecretsWithOptions($request, $runtime);
    }

    /**
     * 查询身份源部门树（按层懒加载，供控制台勾选同步范围）.
     *
     * @remarks
     * 用户池需已配置相应身份源，且应用具有目标部门的通讯录访问权限。本接口使用已保存的身份源配置，无需传入应用密钥。
     * 本接口仅返回指定父部门的直属子部门，不包含父部门本身，不递归返回整棵部门树。未传父部门时，钉钉默认查询根部门1下的直属子部门，飞书默认查询根部门0下的直属子部门。部门浏览受应用授权可见范围限制，不受当前保存的同步范围限制。
     * 本接口不修改同步范围，不触发人员同步。
     *
     * @param request - ListIdentityProviderDepartmentsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListIdentityProviderDepartmentsResponse
     *
     * @param ListIdentityProviderDepartmentsRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return ListIdentityProviderDepartmentsResponse
     */
    public function listIdentityProviderDepartmentsWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->identityProviderType) {
            @$body['IdentityProviderType'] = $request->identityProviderType;
        }

        if (null !== $request->maxResults) {
            @$body['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$body['NextToken'] = $request->nextToken;
        }

        if (null !== $request->parentDepartmentId) {
            @$body['ParentDepartmentId'] = $request->parentDepartmentId;
        }

        if (null !== $request->userPoolName) {
            @$body['UserPoolName'] = $request->userPoolName;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListIdentityProviderDepartments',
            'version' => '2025-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListIdentityProviderDepartmentsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询身份源部门树（按层懒加载，供控制台勾选同步范围）.
     *
     * @remarks
     * 用户池需已配置相应身份源，且应用具有目标部门的通讯录访问权限。本接口使用已保存的身份源配置，无需传入应用密钥。
     * 本接口仅返回指定父部门的直属子部门，不包含父部门本身，不递归返回整棵部门树。未传父部门时，钉钉默认查询根部门1下的直属子部门，飞书默认查询根部门0下的直属子部门。部门浏览受应用授权可见范围限制，不受当前保存的同步范围限制。
     * 本接口不修改同步范围，不触发人员同步。
     *
     * @param request - ListIdentityProviderDepartmentsRequest
     *
     * @returns ListIdentityProviderDepartmentsResponse
     *
     * @param ListIdentityProviderDepartmentsRequest $request
     *
     * @return ListIdentityProviderDepartmentsResponse
     */
    public function listIdentityProviderDepartments($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listIdentityProviderDepartmentsWithOptions($request, $runtime);
    }

    /**
     * 列出IdentityProvider.
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
        $body = [];
        if (null !== $request->maxResults) {
            @$body['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$body['NextToken'] = $request->nextToken;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListIdentityProviders',
            'version' => '2025-09-01',
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
     * 列出IdentityProvider.
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
     * Lists all OAuth 2.0 credential providers in the account.
     *
     * @param request - ListOAuth2CredentialProvidersRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListOAuth2CredentialProvidersResponse
     *
     * @param ListOAuth2CredentialProvidersRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return ListOAuth2CredentialProvidersResponse
     */
    public function listOAuth2CredentialProvidersWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->maxResults) {
            @$body['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$body['NextToken'] = $request->nextToken;
        }

        if (null !== $request->tokenVaultName) {
            @$body['TokenVaultName'] = $request->tokenVaultName;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListOAuth2CredentialProviders',
            'version' => '2025-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListOAuth2CredentialProvidersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Lists all OAuth 2.0 credential providers in the account.
     *
     * @param request - ListOAuth2CredentialProvidersRequest
     *
     * @returns ListOAuth2CredentialProvidersResponse
     *
     * @param ListOAuth2CredentialProvidersRequest $request
     *
     * @return ListOAuth2CredentialProvidersResponse
     */
    public function listOAuth2CredentialProviders($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listOAuth2CredentialProvidersWithOptions($request, $runtime);
    }

    /**
     * 列出权限策略.
     *
     * @param request - ListPoliciesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListPoliciesResponse
     *
     * @param ListPoliciesRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ListPoliciesResponse
     */
    public function listPoliciesWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->maxResults) {
            @$body['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$body['NextToken'] = $request->nextToken;
        }

        if (null !== $request->policySetName) {
            @$body['PolicySetName'] = $request->policySetName;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListPolicies',
            'version' => '2025-09-01',
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
     * 列出权限策略.
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
     * Lists gateway policy configurations.
     *
     * @remarks
     * Calls ListPolicySetAttachedGateways to query the gateways to which a specific policy set is currently attached. Call this operation before deleting a policy set to verify that no residual attachments exist.
     *
     * @param request - ListPolicySetAttachedGatewaysRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListPolicySetAttachedGatewaysResponse
     *
     * @param ListPolicySetAttachedGatewaysRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return ListPolicySetAttachedGatewaysResponse
     */
    public function listPolicySetAttachedGatewaysWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->gatewayType) {
            @$body['GatewayType'] = $request->gatewayType;
        }

        if (null !== $request->maxResults) {
            @$body['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$body['NextToken'] = $request->nextToken;
        }

        if (null !== $request->policySetName) {
            @$body['PolicySetName'] = $request->policySetName;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListPolicySetAttachedGateways',
            'version' => '2025-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListPolicySetAttachedGatewaysResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Lists gateway policy configurations.
     *
     * @remarks
     * Calls ListPolicySetAttachedGateways to query the gateways to which a specific policy set is currently attached. Call this operation before deleting a policy set to verify that no residual attachments exist.
     *
     * @param request - ListPolicySetAttachedGatewaysRequest
     *
     * @returns ListPolicySetAttachedGatewaysResponse
     *
     * @param ListPolicySetAttachedGatewaysRequest $request
     *
     * @return ListPolicySetAttachedGatewaysResponse
     */
    public function listPolicySetAttachedGateways($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listPolicySetAttachedGatewaysWithOptions($request, $runtime);
    }

    /**
     * 列出权限策略集合.
     *
     * @param request - ListPolicySetsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListPolicySetsResponse
     *
     * @param ListPolicySetsRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ListPolicySetsResponse
     */
    public function listPolicySetsWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->maxResults) {
            @$body['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$body['NextToken'] = $request->nextToken;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListPolicySets',
            'version' => '2025-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListPolicySetsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 列出权限策略集合.
     *
     * @param request - ListPolicySetsRequest
     *
     * @returns ListPolicySetsResponse
     *
     * @param ListPolicySetsRequest $request
     *
     * @return ListPolicySetsResponse
     */
    public function listPolicySets($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listPolicySetsWithOptions($request, $runtime);
    }

    /**
     * 列出网关策略配置.
     *
     * @param request - ListRoleAssignmentsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListRoleAssignmentsResponse
     *
     * @param ListRoleAssignmentsRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ListRoleAssignmentsResponse
     */
    public function listRoleAssignmentsWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->maxResults) {
            @$body['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$body['NextToken'] = $request->nextToken;
        }

        if (null !== $request->principalName) {
            @$body['PrincipalName'] = $request->principalName;
        }

        if (null !== $request->principalType) {
            @$body['PrincipalType'] = $request->principalType;
        }

        if (null !== $request->roleName) {
            @$body['RoleName'] = $request->roleName;
        }

        if (null !== $request->userPoolName) {
            @$body['UserPoolName'] = $request->userPoolName;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListRoleAssignments',
            'version' => '2025-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListRoleAssignmentsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 列出网关策略配置.
     *
     * @param request - ListRoleAssignmentsRequest
     *
     * @returns ListRoleAssignmentsResponse
     *
     * @param ListRoleAssignmentsRequest $request
     *
     * @return ListRoleAssignmentsResponse
     */
    public function listRoleAssignments($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listRoleAssignmentsWithOptions($request, $runtime);
    }

    /**
     * Lists roles.
     *
     * @remarks
     * Returns summary information about all roles in a user pool, including the default role Default and custom roles Manual. The information includes the role ID, name, description, creation time, update time, and role type.
     *
     * @param request - ListRolesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListRolesResponse
     *
     * @param ListRolesRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return ListRolesResponse
     */
    public function listRolesWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->maxResults) {
            @$body['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$body['NextToken'] = $request->nextToken;
        }

        if (null !== $request->userPoolName) {
            @$body['UserPoolName'] = $request->userPoolName;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListRoles',
            'version' => '2025-09-01',
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
     * Lists roles.
     *
     * @remarks
     * Returns summary information about all roles in a user pool, including the default role Default and custom roles Manual. The information includes the role ID, name, description, creation time, update time, and role type.
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
     * Lists identity providers.
     *
     * @remarks
     * Returns a list of all X.509 certificates under the SAML IdP configuration of the user pool to help administrators manage the certificate lifecycle and perform certificate rotation.
     *
     * @param request - ListSAMLIdentityProviderCertificatesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListSAMLIdentityProviderCertificatesResponse
     *
     * @param ListSAMLIdentityProviderCertificatesRequest $request
     * @param RuntimeOptions                              $runtime
     *
     * @return ListSAMLIdentityProviderCertificatesResponse
     */
    public function listSAMLIdentityProviderCertificatesWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->userPoolName) {
            @$body['UserPoolName'] = $request->userPoolName;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListSAMLIdentityProviderCertificates',
            'version' => '2025-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListSAMLIdentityProviderCertificatesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Lists identity providers.
     *
     * @remarks
     * Returns a list of all X.509 certificates under the SAML IdP configuration of the user pool to help administrators manage the certificate lifecycle and perform certificate rotation.
     *
     * @param request - ListSAMLIdentityProviderCertificatesRequest
     *
     * @returns ListSAMLIdentityProviderCertificatesResponse
     *
     * @param ListSAMLIdentityProviderCertificatesRequest $request
     *
     * @return ListSAMLIdentityProviderCertificatesResponse
     */
    public function listSAMLIdentityProviderCertificates($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSAMLIdentityProviderCertificatesWithOptions($request, $runtime);
    }

    /**
     * 分页列出账户下所有的 API 密钥凭证
     *
     * @param request - ListTokenVaultsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListTokenVaultsResponse
     *
     * @param ListTokenVaultsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ListTokenVaultsResponse
     */
    public function listTokenVaultsWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->maxResults) {
            @$body['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$body['NextToken'] = $request->nextToken;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListTokenVaults',
            'version' => '2025-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListTokenVaultsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 分页列出账户下所有的 API 密钥凭证
     *
     * @param request - ListTokenVaultsRequest
     *
     * @returns ListTokenVaultsResponse
     *
     * @param ListTokenVaultsRequest $request
     *
     * @return ListTokenVaultsResponse
     */
    public function listTokenVaults($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTokenVaultsWithOptions($request, $runtime);
    }

    /**
     * Lists identity providers.
     *
     * @remarks
     * Returns summary information about all clients in a user pool, including the client ID, name, redirect URIs, creation time, and configurations such as PKCE, client secret, and token validity periods.
     *
     * @param request - ListUserPoolClientsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListUserPoolClientsResponse
     *
     * @param ListUserPoolClientsRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ListUserPoolClientsResponse
     */
    public function listUserPoolClientsWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->maxResults) {
            @$body['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$body['NextToken'] = $request->nextToken;
        }

        if (null !== $request->userPoolName) {
            @$body['UserPoolName'] = $request->userPoolName;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListUserPoolClients',
            'version' => '2025-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListUserPoolClientsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Lists identity providers.
     *
     * @remarks
     * Returns summary information about all clients in a user pool, including the client ID, name, redirect URIs, creation time, and configurations such as PKCE, client secret, and token validity periods.
     *
     * @param request - ListUserPoolClientsRequest
     *
     * @returns ListUserPoolClientsResponse
     *
     * @param ListUserPoolClientsRequest $request
     *
     * @return ListUserPoolClientsResponse
     */
    public function listUserPoolClients($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listUserPoolClientsWithOptions($request, $runtime);
    }

    /**
     * 列出IdentityProvider.
     *
     * @param request - ListUserPoolSyncJobsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListUserPoolSyncJobsResponse
     *
     * @param ListUserPoolSyncJobsRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ListUserPoolSyncJobsResponse
     */
    public function listUserPoolSyncJobsWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->maxResults) {
            @$body['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$body['NextToken'] = $request->nextToken;
        }

        if (null !== $request->userPoolName) {
            @$body['UserPoolName'] = $request->userPoolName;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListUserPoolSyncJobs',
            'version' => '2025-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListUserPoolSyncJobsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 列出IdentityProvider.
     *
     * @param request - ListUserPoolSyncJobsRequest
     *
     * @returns ListUserPoolSyncJobsResponse
     *
     * @param ListUserPoolSyncJobsRequest $request
     *
     * @return ListUserPoolSyncJobsResponse
     */
    public function listUserPoolSyncJobs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listUserPoolSyncJobsWithOptions($request, $runtime);
    }

    /**
     * Lists identity providers.
     *
     * @remarks
     * Returns summary information about all user pools within the current account, including the user pool ID, name, description, and creation and update times. Supports pagination by using NextToken.
     *
     * @param request - ListUserPoolsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListUserPoolsResponse
     *
     * @param ListUserPoolsRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ListUserPoolsResponse
     */
    public function listUserPoolsWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->maxResults) {
            @$body['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$body['NextToken'] = $request->nextToken;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListUserPools',
            'version' => '2025-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListUserPoolsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Lists identity providers.
     *
     * @remarks
     * Returns summary information about all user pools within the current account, including the user pool ID, name, description, and creation and update times. Supports pagination by using NextToken.
     *
     * @param request - ListUserPoolsRequest
     *
     * @returns ListUserPoolsResponse
     *
     * @param ListUserPoolsRequest $request
     *
     * @return ListUserPoolsResponse
     */
    public function listUserPools($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listUserPoolsWithOptions($request, $runtime);
    }

    /**
     * Lists users.
     *
     * @remarks
     * Returns the summary information of all users in a user pool, including the user ID, username, display name, description, creation time, and update time.
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
        $body = [];
        if (null !== $request->maxResults) {
            @$body['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$body['NextToken'] = $request->nextToken;
        }

        if (null !== $request->userPoolName) {
            @$body['UserPoolName'] = $request->userPoolName;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListUsers',
            'version' => '2025-09-01',
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
     * Lists users.
     *
     * @remarks
     * Returns the summary information of all users in a user pool, including the user ID, username, display name, description, creation time, and update time.
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
     * Lists workload identities with pagination.
     *
     * @param request - ListWorkloadIdentitiesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListWorkloadIdentitiesResponse
     *
     * @param ListWorkloadIdentitiesRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ListWorkloadIdentitiesResponse
     */
    public function listWorkloadIdentitiesWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->maxResults) {
            @$body['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$body['NextToken'] = $request->nextToken;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListWorkloadIdentities',
            'version' => '2025-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListWorkloadIdentitiesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Lists workload identities with pagination.
     *
     * @param request - ListWorkloadIdentitiesRequest
     *
     * @returns ListWorkloadIdentitiesResponse
     *
     * @param ListWorkloadIdentitiesRequest $request
     *
     * @return ListWorkloadIdentitiesResponse
     */
    public function listWorkloadIdentities($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listWorkloadIdentitiesWithOptions($request, $runtime);
    }

    /**
     * Triggers a user synchronization task in a user pool.
     *
     * @remarks
     * Creates and immediately executes a user synchronization task in a specified user pool. The system pulls user data from the specified identity provider and synchronizes the data to the user pool. The task runs asynchronously. The operation completes after the task ID is returned. You can call GetUserPoolSyncJob to query the execution progress and results. Only one synchronization task can run in a user pool at a time.
     *
     * @param request - RunUserPoolSyncJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RunUserPoolSyncJobResponse
     *
     * @param RunUserPoolSyncJobRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return RunUserPoolSyncJobResponse
     */
    public function runUserPoolSyncJobWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->identityProviderType) {
            @$body['IdentityProviderType'] = $request->identityProviderType;
        }

        if (null !== $request->maxSyncUsers) {
            @$body['MaxSyncUsers'] = $request->maxSyncUsers;
        }

        if (null !== $request->userPoolName) {
            @$body['UserPoolName'] = $request->userPoolName;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'RunUserPoolSyncJob',
            'version' => '2025-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RunUserPoolSyncJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Triggers a user synchronization task in a user pool.
     *
     * @remarks
     * Creates and immediately executes a user synchronization task in a specified user pool. The system pulls user data from the specified identity provider and synchronizes the data to the user pool. The task runs asynchronously. The operation completes after the task ID is returned. You can call GetUserPoolSyncJob to query the execution progress and results. Only one synchronization task can run in a user pool at a time.
     *
     * @param request - RunUserPoolSyncJobRequest
     *
     * @returns RunUserPoolSyncJobResponse
     *
     * @param RunUserPoolSyncJobRequest $request
     *
     * @return RunUserPoolSyncJobResponse
     */
    public function runUserPoolSyncJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->runUserPoolSyncJobWithOptions($request, $runtime);
    }

    /**
     * Creates a workload identity.
     *
     * @remarks
     * This operation sets or updates the core configurations of a SAML identity provider (IdP), including the IdP identifier (EntityId), logon URL (LoginURL), X.509 certificates, single sign-on (SSO) status, and Just-In-Time (JIT) user provisioning and update settings. If you specify X509Certificates, all existing certificates in the user pool are replaced. To append certificates while retaining the existing ones, use AddSAMLIdentityProviderCertificate.
     *
     * @param tmpReq - SetSAMLIdentityProviderRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SetSAMLIdentityProviderResponse
     *
     * @param SetSAMLIdentityProviderRequest $tmpReq
     * @param RuntimeOptions                 $runtime
     *
     * @return SetSAMLIdentityProviderResponse
     */
    public function setSAMLIdentityProviderWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new SetSAMLIdentityProviderShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->x509Certificates) {
            $request->x509CertificatesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->x509Certificates, 'X509Certificates', 'json');
        }

        $body = [];
        if (null !== $request->entityId) {
            @$body['EntityId'] = $request->entityId;
        }

        if (null !== $request->JITProvisionStatus) {
            @$body['JITProvisionStatus'] = $request->JITProvisionStatus;
        }

        if (null !== $request->JITUpdateStatus) {
            @$body['JITUpdateStatus'] = $request->JITUpdateStatus;
        }

        if (null !== $request->loginURL) {
            @$body['LoginURL'] = $request->loginURL;
        }

        if (null !== $request->SAMLBindingType) {
            @$body['SAMLBindingType'] = $request->SAMLBindingType;
        }

        if (null !== $request->SSOStatus) {
            @$body['SSOStatus'] = $request->SSOStatus;
        }

        if (null !== $request->userPoolName) {
            @$body['UserPoolName'] = $request->userPoolName;
        }

        if (null !== $request->x509CertificatesShrink) {
            @$body['X509Certificates'] = $request->x509CertificatesShrink;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'SetSAMLIdentityProvider',
            'version' => '2025-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SetSAMLIdentityProviderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a workload identity.
     *
     * @remarks
     * This operation sets or updates the core configurations of a SAML identity provider (IdP), including the IdP identifier (EntityId), logon URL (LoginURL), X.509 certificates, single sign-on (SSO) status, and Just-In-Time (JIT) user provisioning and update settings. If you specify X509Certificates, all existing certificates in the user pool are replaced. To append certificates while retaining the existing ones, use AddSAMLIdentityProviderCertificate.
     *
     * @param request - SetSAMLIdentityProviderRequest
     *
     * @returns SetSAMLIdentityProviderResponse
     *
     * @param SetSAMLIdentityProviderRequest $request
     *
     * @return SetSAMLIdentityProviderResponse
     */
    public function setSAMLIdentityProvider($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setSAMLIdentityProviderWithOptions($request, $runtime);
    }

    /**
     * Configures the SSO settings for a specified type of identity provider in a user pool.
     *
     * @remarks
     * Configures a specific type of identity provider for a specified user pool. This operation is used to configure SSO logon and address book synchronization for non-SAML IdPs such as DingTalk. A user pool does not support enabling multiple identity providers at the same time. You must disable other enabled IdPs before enabling a new IdP.
     *
     * @param request - SetSpecificIdentityProviderRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SetSpecificIdentityProviderResponse
     *
     * @param SetSpecificIdentityProviderRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return SetSpecificIdentityProviderResponse
     */
    public function setSpecificIdentityProviderWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->IDPMetadata) {
            @$body['IDPMetadata'] = $request->IDPMetadata;
        }

        if (null !== $request->identityProviderType) {
            @$body['IdentityProviderType'] = $request->identityProviderType;
        }

        if (null !== $request->SSOStatus) {
            @$body['SSOStatus'] = $request->SSOStatus;
        }

        if (null !== $request->userPoolName) {
            @$body['UserPoolName'] = $request->userPoolName;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'SetSpecificIdentityProvider',
            'version' => '2025-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SetSpecificIdentityProviderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Configures the SSO settings for a specified type of identity provider in a user pool.
     *
     * @remarks
     * Configures a specific type of identity provider for a specified user pool. This operation is used to configure SSO logon and address book synchronization for non-SAML IdPs such as DingTalk. A user pool does not support enabling multiple identity providers at the same time. You must disable other enabled IdPs before enabling a new IdP.
     *
     * @param request - SetSpecificIdentityProviderRequest
     *
     * @returns SetSpecificIdentityProviderResponse
     *
     * @param SetSpecificIdentityProviderRequest $request
     *
     * @return SetSpecificIdentityProviderResponse
     */
    public function setSpecificIdentityProvider($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setSpecificIdentityProviderWithOptions($request, $runtime);
    }

    /**
     * Modifies the logon password of a user.
     *
     * @remarks
     * Sets or resets the logon password for a user in a specified user pool. Two methods are supported: specifying a password (Password) or generating a random password (GenerateRandomPassword). The two methods are mutually exclusive, and you must select exactly one. If you specify a password, it must meet the password policy requirements: a minimum length of 8 characters, containing at least three of the following character types: uppercase letters, lowercase letters, digits, and special characters, and it must not contain the username. Passwords are managed independently of the user creation process and are not passed through CreateUser.
     *
     * @param request - SetUserPasswordRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SetUserPasswordResponse
     *
     * @param SetUserPasswordRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return SetUserPasswordResponse
     */
    public function setUserPasswordWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->generateRandomPassword) {
            @$body['GenerateRandomPassword'] = $request->generateRandomPassword;
        }

        if (null !== $request->password) {
            @$body['Password'] = $request->password;
        }

        if (null !== $request->userName) {
            @$body['UserName'] = $request->userName;
        }

        if (null !== $request->userPoolName) {
            @$body['UserPoolName'] = $request->userPoolName;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'SetUserPassword',
            'version' => '2025-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SetUserPasswordResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the logon password of a user.
     *
     * @remarks
     * Sets or resets the logon password for a user in a specified user pool. Two methods are supported: specifying a password (Password) or generating a random password (GenerateRandomPassword). The two methods are mutually exclusive, and you must select exactly one. If you specify a password, it must meet the password policy requirements: a minimum length of 8 characters, containing at least three of the following character types: uppercase letters, lowercase letters, digits, and special characters, and it must not contain the username. Passwords are managed independently of the user creation process and are not passed through CreateUser.
     *
     * @param request - SetUserPasswordRequest
     *
     * @returns SetUserPasswordResponse
     *
     * @param SetUserPasswordRequest $request
     *
     * @return SetUserPasswordResponse
     */
    public function setUserPassword($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setUserPasswordWithOptions($request, $runtime);
    }

    /**
     * Updates an existing API key credential provider.
     *
     * @param request - UpdateAPIKeyCredentialProviderRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateAPIKeyCredentialProviderResponse
     *
     * @param UpdateAPIKeyCredentialProviderRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return UpdateAPIKeyCredentialProviderResponse
     */
    public function updateAPIKeyCredentialProviderWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->APIKey) {
            @$body['APIKey'] = $request->APIKey;
        }

        if (null !== $request->APIKeyCredentialProviderName) {
            @$body['APIKeyCredentialProviderName'] = $request->APIKeyCredentialProviderName;
        }

        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->tokenVaultName) {
            @$body['TokenVaultName'] = $request->tokenVaultName;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateAPIKeyCredentialProvider',
            'version' => '2025-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateAPIKeyCredentialProviderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates an existing API key credential provider.
     *
     * @param request - UpdateAPIKeyCredentialProviderRequest
     *
     * @returns UpdateAPIKeyCredentialProviderResponse
     *
     * @param UpdateAPIKeyCredentialProviderRequest $request
     *
     * @return UpdateAPIKeyCredentialProviderResponse
     */
    public function updateAPIKeyCredentialProvider($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateAPIKeyCredentialProviderWithOptions($request, $runtime);
    }

    /**
     * Queries the gateway policy configuration.
     *
     * @remarks
     * Calls UpdateGatewayPolicyConfig to adjust the policy enforcement mode on a gateway. Common usage: Use LOG_ONLY for observation and verification during the initial rollout of a policy. After confirming that everything is correct, switch the gateway to ENFORCE to enforce interception. This operation does not modify the attached policy set itself. To replace the policy set, call AttachPolicySetToGateway.
     *
     * @param request - UpdateGatewayPolicyConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateGatewayPolicyConfigResponse
     *
     * @param UpdateGatewayPolicyConfigRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return UpdateGatewayPolicyConfigResponse
     */
    public function updateGatewayPolicyConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->enforcementMode) {
            @$body['EnforcementMode'] = $request->enforcementMode;
        }

        if (null !== $request->gatewayArn) {
            @$body['GatewayArn'] = $request->gatewayArn;
        }

        if (null !== $request->gatewayType) {
            @$body['GatewayType'] = $request->gatewayType;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateGatewayPolicyConfig',
            'version' => '2025-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateGatewayPolicyConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the gateway policy configuration.
     *
     * @remarks
     * Calls UpdateGatewayPolicyConfig to adjust the policy enforcement mode on a gateway. Common usage: Use LOG_ONLY for observation and verification during the initial rollout of a policy. After confirming that everything is correct, switch the gateway to ENFORCE to enforce interception. This operation does not modify the attached policy set itself. To replace the policy set, call AttachPolicySetToGateway.
     *
     * @param request - UpdateGatewayPolicyConfigRequest
     *
     * @returns UpdateGatewayPolicyConfigResponse
     *
     * @param UpdateGatewayPolicyConfigRequest $request
     *
     * @return UpdateGatewayPolicyConfigResponse
     */
    public function updateGatewayPolicyConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateGatewayPolicyConfigWithOptions($request, $runtime);
    }

    /**
     * Updates the specified identity provider.
     *
     * @param tmpReq - UpdateIdentityProviderRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateIdentityProviderResponse
     *
     * @param UpdateIdentityProviderRequest $tmpReq
     * @param RuntimeOptions                $runtime
     *
     * @return UpdateIdentityProviderResponse
     */
    public function updateIdentityProviderWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateIdentityProviderShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->allowedAudience) {
            $request->allowedAudienceShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->allowedAudience, 'AllowedAudience', 'json');
        }

        $body = [];
        if (null !== $request->allowedAudienceShrink) {
            @$body['AllowedAudience'] = $request->allowedAudienceShrink;
        }

        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->discoveryURL) {
            @$body['DiscoveryURL'] = $request->discoveryURL;
        }

        if (null !== $request->identityProviderName) {
            @$body['IdentityProviderName'] = $request->identityProviderName;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateIdentityProvider',
            'version' => '2025-09-01',
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
     * Updates the specified identity provider.
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
     * Updates the logon configuration of a user pool.
     *
     * @remarks
     * Updates the logon configuration of a specified user pool. Currently, only logon preferences, such as whether password logon is enabled, can be updated. The password policy cannot be modified. Specify only the fields to be updated. Unspecified fields remain unchanged.
     *
     * @param tmpReq - UpdateLoginPreferenceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateLoginPreferenceResponse
     *
     * @param UpdateLoginPreferenceRequest $tmpReq
     * @param RuntimeOptions               $runtime
     *
     * @return UpdateLoginPreferenceResponse
     */
    public function updateLoginPreferenceWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateLoginPreferenceShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->allowedPostLogoutRedirectUris) {
            $request->allowedPostLogoutRedirectUrisShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->allowedPostLogoutRedirectUris, 'AllowedPostLogoutRedirectUris', 'json');
        }

        if (null !== $tmpReq->loginPreference) {
            $request->loginPreferenceShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->loginPreference, 'LoginPreference', 'json');
        }

        $query = [];
        if (null !== $request->allowedPostLogoutRedirectUrisShrink) {
            @$query['AllowedPostLogoutRedirectUris'] = $request->allowedPostLogoutRedirectUrisShrink;
        }

        if (null !== $request->loginPreferenceShrink) {
            @$query['LoginPreference'] = $request->loginPreferenceShrink;
        }

        $body = [];
        if (null !== $request->userPoolName) {
            @$body['UserPoolName'] = $request->userPoolName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateLoginPreference',
            'version' => '2025-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateLoginPreferenceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the logon configuration of a user pool.
     *
     * @remarks
     * Updates the logon configuration of a specified user pool. Currently, only logon preferences, such as whether password logon is enabled, can be updated. The password policy cannot be modified. Specify only the fields to be updated. Unspecified fields remain unchanged.
     *
     * @param request - UpdateLoginPreferenceRequest
     *
     * @returns UpdateLoginPreferenceResponse
     *
     * @param UpdateLoginPreferenceRequest $request
     *
     * @return UpdateLoginPreferenceResponse
     */
    public function updateLoginPreference($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateLoginPreferenceWithOptions($request, $runtime);
    }

    /**
     * Updates the configuration of an existing OAuth 2.0 credential provider.
     *
     * @param tmpReq - UpdateOAuth2CredentialProviderRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateOAuth2CredentialProviderResponse
     *
     * @param UpdateOAuth2CredentialProviderRequest $tmpReq
     * @param RuntimeOptions                        $runtime
     *
     * @return UpdateOAuth2CredentialProviderResponse
     */
    public function updateOAuth2CredentialProviderWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateOAuth2CredentialProviderShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->OAuth2ProviderConfig) {
            $request->OAuth2ProviderConfigShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->OAuth2ProviderConfig, 'OAuth2ProviderConfig', 'json');
        }

        $body = [];
        if (null !== $request->callbackURL) {
            @$body['CallbackURL'] = $request->callbackURL;
        }

        if (null !== $request->credentialProviderVendor) {
            @$body['CredentialProviderVendor'] = $request->credentialProviderVendor;
        }

        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->OAuth2CredentialProviderName) {
            @$body['OAuth2CredentialProviderName'] = $request->OAuth2CredentialProviderName;
        }

        if (null !== $request->OAuth2ProviderConfigShrink) {
            @$body['OAuth2ProviderConfig'] = $request->OAuth2ProviderConfigShrink;
        }

        if (null !== $request->tokenVaultName) {
            @$body['TokenVaultName'] = $request->tokenVaultName;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateOAuth2CredentialProvider',
            'version' => '2025-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateOAuth2CredentialProviderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the configuration of an existing OAuth 2.0 credential provider.
     *
     * @param request - UpdateOAuth2CredentialProviderRequest
     *
     * @returns UpdateOAuth2CredentialProviderResponse
     *
     * @param UpdateOAuth2CredentialProviderRequest $request
     *
     * @return UpdateOAuth2CredentialProviderResponse
     */
    public function updateOAuth2CredentialProvider($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateOAuth2CredentialProviderWithOptions($request, $runtime);
    }

    /**
     * Updates an access policy.
     *
     * @remarks
     * Calls the UpdatePolicy operation to update the description and definition of an existing policy. The updated definition takes effect immediately for all gateways to which the policy set is mounted.
     *
     * @param tmpReq - UpdatePolicyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdatePolicyResponse
     *
     * @param UpdatePolicyRequest $tmpReq
     * @param RuntimeOptions      $runtime
     *
     * @return UpdatePolicyResponse
     */
    public function updatePolicyWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdatePolicyShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->definition) {
            $request->definitionShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->definition, 'Definition', 'json');
        }

        $body = [];
        if (null !== $request->definitionShrink) {
            @$body['Definition'] = $request->definitionShrink;
        }

        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->policyName) {
            @$body['PolicyName'] = $request->policyName;
        }

        if (null !== $request->policySetName) {
            @$body['PolicySetName'] = $request->policySetName;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdatePolicy',
            'version' => '2025-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdatePolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates an access policy.
     *
     * @remarks
     * Calls the UpdatePolicy operation to update the description and definition of an existing policy. The updated definition takes effect immediately for all gateways to which the policy set is mounted.
     *
     * @param request - UpdatePolicyRequest
     *
     * @returns UpdatePolicyResponse
     *
     * @param UpdatePolicyRequest $request
     *
     * @return UpdatePolicyResponse
     */
    public function updatePolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updatePolicyWithOptions($request, $runtime);
    }

    /**
     * Updates an access policy set.
     *
     * @remarks
     * Calls UpdatePolicySet to update the description of an existing policy set. To modify specific policies in the policy set, use UpdatePolicy. To change the mount relationship, use AttachPolicySetToGateway or DetachPolicySetFromGateway.
     *
     * @param request - UpdatePolicySetRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdatePolicySetResponse
     *
     * @param UpdatePolicySetRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return UpdatePolicySetResponse
     */
    public function updatePolicySetWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->policySetName) {
            @$body['PolicySetName'] = $request->policySetName;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdatePolicySet',
            'version' => '2025-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdatePolicySetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates an access policy set.
     *
     * @remarks
     * Calls UpdatePolicySet to update the description of an existing policy set. To modify specific policies in the policy set, use UpdatePolicy. To change the mount relationship, use AttachPolicySetToGateway or DetachPolicySetFromGateway.
     *
     * @param request - UpdatePolicySetRequest
     *
     * @returns UpdatePolicySetResponse
     *
     * @param UpdatePolicySetRequest $request
     *
     * @return UpdatePolicySetResponse
     */
    public function updatePolicySet($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updatePolicySetWithOptions($request, $runtime);
    }

    /**
     * Updates a role.
     *
     * @remarks
     * Updates the Description field of a role. The RoleName field serves as a unique identifier and cannot be modified.
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
        $body = [];
        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->roleName) {
            @$body['RoleName'] = $request->roleName;
        }

        if (null !== $request->userPoolName) {
            @$body['UserPoolName'] = $request->userPoolName;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateRole',
            'version' => '2025-09-01',
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
     * Updates a role.
     *
     * @remarks
     * Updates the Description field of a role. The RoleName field serves as a unique identifier and cannot be modified.
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
     * Updates a token vault.
     *
     * @remarks
     * Updates the description and role configuration of an existing token vault. Note: The encryption configuration (KeyType or KmsKeyArn) of a token vault cannot be changed after it is created.
     *
     * @param request - UpdateTokenVaultRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateTokenVaultResponse
     *
     * @param UpdateTokenVaultRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return UpdateTokenVaultResponse
     */
    public function updateTokenVaultWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->roleArn) {
            @$body['RoleArn'] = $request->roleArn;
        }

        if (null !== $request->tokenVaultName) {
            @$body['TokenVaultName'] = $request->tokenVaultName;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateTokenVault',
            'version' => '2025-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateTokenVaultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates a token vault.
     *
     * @remarks
     * Updates the description and role configuration of an existing token vault. Note: The encryption configuration (KeyType or KmsKeyArn) of a token vault cannot be changed after it is created.
     *
     * @param request - UpdateTokenVaultRequest
     *
     * @returns UpdateTokenVaultResponse
     *
     * @param UpdateTokenVaultRequest $request
     *
     * @return UpdateTokenVaultResponse
     */
    public function updateTokenVault($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateTokenVaultWithOptions($request, $runtime);
    }

    /**
     * Updates a user in a user pool.
     *
     * @remarks
     * Updates the attribute information of a user in a specified user pool. Specify only the fields that you want to update. Unspecified fields remain unchanged. UserName is the user identifier and cannot be modified. You can update the display name, description, email address, and status. Email addresses must be unique within the user pool.
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
        $body = [];
        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->displayName) {
            @$body['DisplayName'] = $request->displayName;
        }

        if (null !== $request->email) {
            @$body['Email'] = $request->email;
        }

        if (null !== $request->status) {
            @$body['Status'] = $request->status;
        }

        if (null !== $request->userName) {
            @$body['UserName'] = $request->userName;
        }

        if (null !== $request->userPoolName) {
            @$body['UserPoolName'] = $request->userPoolName;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateUser',
            'version' => '2025-09-01',
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
     * Updates a user in a user pool.
     *
     * @remarks
     * Updates the attribute information of a user in a specified user pool. Specify only the fields that you want to update. Unspecified fields remain unchanged. UserName is the user identifier and cannot be modified. You can update the display name, description, email address, and status. Email addresses must be unique within the user pool.
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
     * 更新IdentityProvider.
     *
     * @param request - UpdateUserPoolRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateUserPoolResponse
     *
     * @param UpdateUserPoolRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return UpdateUserPoolResponse
     */
    public function updateUserPoolWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->userPoolName) {
            @$body['UserPoolName'] = $request->userPoolName;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateUserPool',
            'version' => '2025-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateUserPoolResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新IdentityProvider.
     *
     * @param request - UpdateUserPoolRequest
     *
     * @returns UpdateUserPoolResponse
     *
     * @param UpdateUserPoolRequest $request
     *
     * @return UpdateUserPoolResponse
     */
    public function updateUserPool($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateUserPoolWithOptions($request, $runtime);
    }

    /**
     * Creates an application.
     *
     * @remarks
     * Updates the callback URLs (RedirectURIs), whether an application secret is required (SecretRequired), whether Proof Key for Code Exchange (PKCE) is enforced (EnforcePKCE), and the validity periods of the access token and refresh token. The client name (ClientName) serves as a unique identifier and cannot be modified.
     *
     * @param tmpReq - UpdateUserPoolClientRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateUserPoolClientResponse
     *
     * @param UpdateUserPoolClientRequest $tmpReq
     * @param RuntimeOptions              $runtime
     *
     * @return UpdateUserPoolClientResponse
     */
    public function updateUserPoolClientWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateUserPoolClientShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->redirectURIs) {
            $request->redirectURIsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->redirectURIs, 'RedirectURIs', 'json');
        }

        if (null !== $tmpReq->scopes) {
            $request->scopesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->scopes, 'Scopes', 'json');
        }

        $body = [];
        if (null !== $request->accessTokenValidity) {
            @$body['AccessTokenValidity'] = $request->accessTokenValidity;
        }

        if (null !== $request->clientName) {
            @$body['ClientName'] = $request->clientName;
        }

        if (null !== $request->enforcePKCE) {
            @$body['EnforcePKCE'] = $request->enforcePKCE;
        }

        if (null !== $request->redirectURIsShrink) {
            @$body['RedirectURIs'] = $request->redirectURIsShrink;
        }

        if (null !== $request->refreshTokenValidity) {
            @$body['RefreshTokenValidity'] = $request->refreshTokenValidity;
        }

        if (null !== $request->scopesShrink) {
            @$body['Scopes'] = $request->scopesShrink;
        }

        if (null !== $request->secretRequired) {
            @$body['SecretRequired'] = $request->secretRequired;
        }

        if (null !== $request->userPoolName) {
            @$body['UserPoolName'] = $request->userPoolName;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateUserPoolClient',
            'version' => '2025-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateUserPoolClientResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates an application.
     *
     * @remarks
     * Updates the callback URLs (RedirectURIs), whether an application secret is required (SecretRequired), whether Proof Key for Code Exchange (PKCE) is enforced (EnforcePKCE), and the validity periods of the access token and refresh token. The client name (ClientName) serves as a unique identifier and cannot be modified.
     *
     * @param request - UpdateUserPoolClientRequest
     *
     * @returns UpdateUserPoolClientResponse
     *
     * @param UpdateUserPoolClientRequest $request
     *
     * @return UpdateUserPoolClientResponse
     */
    public function updateUserPoolClient($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateUserPoolClientWithOptions($request, $runtime);
    }

    /**
     * Updates the specified workload identity.
     *
     * @param tmpReq - UpdateWorkloadIdentityRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateWorkloadIdentityResponse
     *
     * @param UpdateWorkloadIdentityRequest $tmpReq
     * @param RuntimeOptions                $runtime
     *
     * @return UpdateWorkloadIdentityResponse
     */
    public function updateWorkloadIdentityWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateWorkloadIdentityShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->allowedConsentCallbackURLs) {
            $request->allowedConsentCallbackURLsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->allowedConsentCallbackURLs, 'AllowedConsentCallbackURLs', 'json');
        }

        if (null !== $tmpReq->allowedResourceOAuth2ReturnURLs) {
            $request->allowedResourceOAuth2ReturnURLsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->allowedResourceOAuth2ReturnURLs, 'AllowedResourceOAuth2ReturnURLs', 'json');
        }

        $body = [];
        if (null !== $request->allowedConsentCallbackURLsShrink) {
            @$body['AllowedConsentCallbackURLs'] = $request->allowedConsentCallbackURLsShrink;
        }

        if (null !== $request->allowedResourceOAuth2ReturnURLsShrink) {
            @$body['AllowedResourceOAuth2ReturnURLs'] = $request->allowedResourceOAuth2ReturnURLsShrink;
        }

        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->identityProviderName) {
            @$body['IdentityProviderName'] = $request->identityProviderName;
        }

        if (null !== $request->roleArn) {
            @$body['RoleArn'] = $request->roleArn;
        }

        if (null !== $request->sessionBindingEnabled) {
            @$body['SessionBindingEnabled'] = $request->sessionBindingEnabled;
        }

        if (null !== $request->workloadIdentityName) {
            @$body['WorkloadIdentityName'] = $request->workloadIdentityName;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateWorkloadIdentity',
            'version' => '2025-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateWorkloadIdentityResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the specified workload identity.
     *
     * @param request - UpdateWorkloadIdentityRequest
     *
     * @returns UpdateWorkloadIdentityResponse
     *
     * @param UpdateWorkloadIdentityRequest $request
     *
     * @return UpdateWorkloadIdentityResponse
     */
    public function updateWorkloadIdentity($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateWorkloadIdentityWithOptions($request, $runtime);
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentTeams\V20260605;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\AgentTeams\V20260605\Models\BindIdentityProviderRequest;
use AlibabaCloud\SDK\AgentTeams\V20260605\Models\BindIdentityProviderResponse;
use AlibabaCloud\SDK\AgentTeams\V20260605\Models\ConfigureNatGatewayRequest;
use AlibabaCloud\SDK\AgentTeams\V20260605\Models\ConfigureNatGatewayResponse;
use AlibabaCloud\SDK\AgentTeams\V20260605\Models\CreateCredentialRequest;
use AlibabaCloud\SDK\AgentTeams\V20260605\Models\CreateCredentialResponse;
use AlibabaCloud\SDK\AgentTeams\V20260605\Models\CreateInstanceRequest;
use AlibabaCloud\SDK\AgentTeams\V20260605\Models\CreateInstanceResponse;
use AlibabaCloud\SDK\AgentTeams\V20260605\Models\CreateInstanceShrinkRequest;
use AlibabaCloud\SDK\AgentTeams\V20260605\Models\CreateMcpRequest;
use AlibabaCloud\SDK\AgentTeams\V20260605\Models\CreateMcpResponse;
use AlibabaCloud\SDK\AgentTeams\V20260605\Models\CreateMcpShrinkRequest;
use AlibabaCloud\SDK\AgentTeams\V20260605\Models\CreateModelProviderRequest;
use AlibabaCloud\SDK\AgentTeams\V20260605\Models\CreateModelProviderResponse;
use AlibabaCloud\SDK\AgentTeams\V20260605\Models\CreateModelProviderShrinkRequest;
use AlibabaCloud\SDK\AgentTeams\V20260605\Models\CreateModelRequest;
use AlibabaCloud\SDK\AgentTeams\V20260605\Models\CreateModelResponse;
use AlibabaCloud\SDK\AgentTeams\V20260605\Models\CreateModelShrinkRequest;
use AlibabaCloud\SDK\AgentTeams\V20260605\Models\CreateServiceEndpointRequest;
use AlibabaCloud\SDK\AgentTeams\V20260605\Models\CreateServiceEndpointResponse;
use AlibabaCloud\SDK\AgentTeams\V20260605\Models\CreateTeamRequest;
use AlibabaCloud\SDK\AgentTeams\V20260605\Models\CreateTeamResponse;
use AlibabaCloud\SDK\AgentTeams\V20260605\Models\CreateTeamShrinkRequest;
use AlibabaCloud\SDK\AgentTeams\V20260605\Models\CreateUserRequest;
use AlibabaCloud\SDK\AgentTeams\V20260605\Models\CreateUserResponse;
use AlibabaCloud\SDK\AgentTeams\V20260605\Models\CreateWorkerBootstrapTokenRequest;
use AlibabaCloud\SDK\AgentTeams\V20260605\Models\CreateWorkerBootstrapTokenResponse;
use AlibabaCloud\SDK\AgentTeams\V20260605\Models\CreateWorkerRequest;
use AlibabaCloud\SDK\AgentTeams\V20260605\Models\CreateWorkerResponse;
use AlibabaCloud\SDK\AgentTeams\V20260605\Models\CreateWorkerShrinkRequest;
use AlibabaCloud\SDK\AgentTeams\V20260605\Models\DeleteCredentialRequest;
use AlibabaCloud\SDK\AgentTeams\V20260605\Models\DeleteCredentialResponse;
use AlibabaCloud\SDK\AgentTeams\V20260605\Models\DeleteInstanceRequest;
use AlibabaCloud\SDK\AgentTeams\V20260605\Models\DeleteInstanceResponse;
use AlibabaCloud\SDK\AgentTeams\V20260605\Models\DeleteMcpRequest;
use AlibabaCloud\SDK\AgentTeams\V20260605\Models\DeleteMcpResponse;
use AlibabaCloud\SDK\AgentTeams\V20260605\Models\DeleteModelProviderRequest;
use AlibabaCloud\SDK\AgentTeams\V20260605\Models\DeleteModelProviderResponse;
use AlibabaCloud\SDK\AgentTeams\V20260605\Models\DeleteModelRequest;
use AlibabaCloud\SDK\AgentTeams\V20260605\Models\DeleteModelResponse;
use AlibabaCloud\SDK\AgentTeams\V20260605\Models\DeleteServiceEndpointRequest;
use AlibabaCloud\SDK\AgentTeams\V20260605\Models\DeleteServiceEndpointResponse;
use AlibabaCloud\SDK\AgentTeams\V20260605\Models\DeleteTeamRequest;
use AlibabaCloud\SDK\AgentTeams\V20260605\Models\DeleteTeamResponse;
use AlibabaCloud\SDK\AgentTeams\V20260605\Models\DeleteUserRequest;
use AlibabaCloud\SDK\AgentTeams\V20260605\Models\DeleteUserResponse;
use AlibabaCloud\SDK\AgentTeams\V20260605\Models\DeleteWorkerRequest;
use AlibabaCloud\SDK\AgentTeams\V20260605\Models\DeleteWorkerResponse;
use AlibabaCloud\SDK\AgentTeams\V20260605\Models\GetCredentialRequest;
use AlibabaCloud\SDK\AgentTeams\V20260605\Models\GetCredentialResponse;
use AlibabaCloud\SDK\AgentTeams\V20260605\Models\GetIdentityProviderRequest;
use AlibabaCloud\SDK\AgentTeams\V20260605\Models\GetIdentityProviderResponse;
use AlibabaCloud\SDK\AgentTeams\V20260605\Models\GetInstanceAsyncTaskRequest;
use AlibabaCloud\SDK\AgentTeams\V20260605\Models\GetInstanceAsyncTaskResponse;
use AlibabaCloud\SDK\AgentTeams\V20260605\Models\GetInstanceOssMountRamAuthorizeUrlRequest;
use AlibabaCloud\SDK\AgentTeams\V20260605\Models\GetInstanceOssMountRamAuthorizeUrlResponse;
use AlibabaCloud\SDK\AgentTeams\V20260605\Models\GetInstanceRequest;
use AlibabaCloud\SDK\AgentTeams\V20260605\Models\GetInstanceResponse;
use AlibabaCloud\SDK\AgentTeams\V20260605\Models\GetMcpRequest;
use AlibabaCloud\SDK\AgentTeams\V20260605\Models\GetMcpResponse;
use AlibabaCloud\SDK\AgentTeams\V20260605\Models\GetModelInvocationSummaryRequest;
use AlibabaCloud\SDK\AgentTeams\V20260605\Models\GetModelInvocationSummaryResponse;
use AlibabaCloud\SDK\AgentTeams\V20260605\Models\GetModelProviderRequest;
use AlibabaCloud\SDK\AgentTeams\V20260605\Models\GetModelProviderResponse;
use AlibabaCloud\SDK\AgentTeams\V20260605\Models\GetNatGatewayStatusRequest;
use AlibabaCloud\SDK\AgentTeams\V20260605\Models\GetNatGatewayStatusResponse;
use AlibabaCloud\SDK\AgentTeams\V20260605\Models\GetServiceEndpointRequest;
use AlibabaCloud\SDK\AgentTeams\V20260605\Models\GetServiceEndpointResponse;
use AlibabaCloud\SDK\AgentTeams\V20260605\Models\GetTaskStatsSummaryRequest;
use AlibabaCloud\SDK\AgentTeams\V20260605\Models\GetTaskStatsSummaryResponse;
use AlibabaCloud\SDK\AgentTeams\V20260605\Models\GetTeamRequest;
use AlibabaCloud\SDK\AgentTeams\V20260605\Models\GetTeamResponse;
use AlibabaCloud\SDK\AgentTeams\V20260605\Models\GetTokenTrendRequest;
use AlibabaCloud\SDK\AgentTeams\V20260605\Models\GetTokenTrendResponse;
use AlibabaCloud\SDK\AgentTeams\V20260605\Models\GetToolCallDistributionRequest;
use AlibabaCloud\SDK\AgentTeams\V20260605\Models\GetToolCallDistributionResponse;
use AlibabaCloud\SDK\AgentTeams\V20260605\Models\GetUserPasswordRequest;
use AlibabaCloud\SDK\AgentTeams\V20260605\Models\GetUserPasswordResponse;
use AlibabaCloud\SDK\AgentTeams\V20260605\Models\GetUserRequest;
use AlibabaCloud\SDK\AgentTeams\V20260605\Models\GetUserResponse;
use AlibabaCloud\SDK\AgentTeams\V20260605\Models\GetWorkerBootstrapOptionsRequest;
use AlibabaCloud\SDK\AgentTeams\V20260605\Models\GetWorkerBootstrapOptionsResponse;
use AlibabaCloud\SDK\AgentTeams\V20260605\Models\GetWorkerMaxVersionRequest;
use AlibabaCloud\SDK\AgentTeams\V20260605\Models\GetWorkerMaxVersionResponse;
use AlibabaCloud\SDK\AgentTeams\V20260605\Models\GetWorkerRequest;
use AlibabaCloud\SDK\AgentTeams\V20260605\Models\GetWorkerResponse;
use AlibabaCloud\SDK\AgentTeams\V20260605\Models\GetWorkerStatsSummaryRequest;
use AlibabaCloud\SDK\AgentTeams\V20260605\Models\GetWorkerStatsSummaryResponse;
use AlibabaCloud\SDK\AgentTeams\V20260605\Models\ListCredentialsRequest;
use AlibabaCloud\SDK\AgentTeams\V20260605\Models\ListCredentialsResponse;
use AlibabaCloud\SDK\AgentTeams\V20260605\Models\ListIdentityProvidersRequest;
use AlibabaCloud\SDK\AgentTeams\V20260605\Models\ListIdentityProvidersResponse;
use AlibabaCloud\SDK\AgentTeams\V20260605\Models\ListInstancesRequest;
use AlibabaCloud\SDK\AgentTeams\V20260605\Models\ListInstancesResponse;
use AlibabaCloud\SDK\AgentTeams\V20260605\Models\ListMcpsRequest;
use AlibabaCloud\SDK\AgentTeams\V20260605\Models\ListMcpsResponse;
use AlibabaCloud\SDK\AgentTeams\V20260605\Models\ListMcpToolsRequest;
use AlibabaCloud\SDK\AgentTeams\V20260605\Models\ListMcpToolsResponse;
use AlibabaCloud\SDK\AgentTeams\V20260605\Models\ListModelProvidersRequest;
use AlibabaCloud\SDK\AgentTeams\V20260605\Models\ListModelProvidersResponse;
use AlibabaCloud\SDK\AgentTeams\V20260605\Models\ListModelsRequest;
use AlibabaCloud\SDK\AgentTeams\V20260605\Models\ListModelsResponse;
use AlibabaCloud\SDK\AgentTeams\V20260605\Models\ListServiceEndpointsRequest;
use AlibabaCloud\SDK\AgentTeams\V20260605\Models\ListServiceEndpointsResponse;
use AlibabaCloud\SDK\AgentTeams\V20260605\Models\ListSslCertsRequest;
use AlibabaCloud\SDK\AgentTeams\V20260605\Models\ListSslCertsResponse;
use AlibabaCloud\SDK\AgentTeams\V20260605\Models\ListTeamDetailsRequest;
use AlibabaCloud\SDK\AgentTeams\V20260605\Models\ListTeamDetailsResponse;
use AlibabaCloud\SDK\AgentTeams\V20260605\Models\ListTeamsRequest;
use AlibabaCloud\SDK\AgentTeams\V20260605\Models\ListTeamsResponse;
use AlibabaCloud\SDK\AgentTeams\V20260605\Models\ListTeamTasksRequest;
use AlibabaCloud\SDK\AgentTeams\V20260605\Models\ListTeamTasksResponse;
use AlibabaCloud\SDK\AgentTeams\V20260605\Models\ListUsersRequest;
use AlibabaCloud\SDK\AgentTeams\V20260605\Models\ListUsersResponse;
use AlibabaCloud\SDK\AgentTeams\V20260605\Models\ListWorkersRequest;
use AlibabaCloud\SDK\AgentTeams\V20260605\Models\ListWorkersResponse;
use AlibabaCloud\SDK\AgentTeams\V20260605\Models\ListWorkersShrinkRequest;
use AlibabaCloud\SDK\AgentTeams\V20260605\Models\ListWorkerStatsDetailsRequest;
use AlibabaCloud\SDK\AgentTeams\V20260605\Models\ListWorkerStatsDetailsResponse;
use AlibabaCloud\SDK\AgentTeams\V20260605\Models\PutCmsWorkspaceRequest;
use AlibabaCloud\SDK\AgentTeams\V20260605\Models\PutCmsWorkspaceResponse;
use AlibabaCloud\SDK\AgentTeams\V20260605\Models\QueryFeaturesRequest;
use AlibabaCloud\SDK\AgentTeams\V20260605\Models\QueryFeaturesResponse;
use AlibabaCloud\SDK\AgentTeams\V20260605\Models\QuerySupportedZonesRequest;
use AlibabaCloud\SDK\AgentTeams\V20260605\Models\QuerySupportedZonesResponse;
use AlibabaCloud\SDK\AgentTeams\V20260605\Models\ResetUserPasswordRequest;
use AlibabaCloud\SDK\AgentTeams\V20260605\Models\ResetUserPasswordResponse;
use AlibabaCloud\SDK\AgentTeams\V20260605\Models\TestModelProviderRequest;
use AlibabaCloud\SDK\AgentTeams\V20260605\Models\TestModelProviderResponse;
use AlibabaCloud\SDK\AgentTeams\V20260605\Models\UnbindIdentityProviderRequest;
use AlibabaCloud\SDK\AgentTeams\V20260605\Models\UnbindIdentityProviderResponse;
use AlibabaCloud\SDK\AgentTeams\V20260605\Models\UpdateCredentialRequest;
use AlibabaCloud\SDK\AgentTeams\V20260605\Models\UpdateCredentialResponse;
use AlibabaCloud\SDK\AgentTeams\V20260605\Models\UpdateIdentityProviderRequest;
use AlibabaCloud\SDK\AgentTeams\V20260605\Models\UpdateIdentityProviderResponse;
use AlibabaCloud\SDK\AgentTeams\V20260605\Models\UpdateInstanceAsyncTaskRequest;
use AlibabaCloud\SDK\AgentTeams\V20260605\Models\UpdateInstanceAsyncTaskResponse;
use AlibabaCloud\SDK\AgentTeams\V20260605\Models\UpdateInstanceRequest;
use AlibabaCloud\SDK\AgentTeams\V20260605\Models\UpdateInstanceResponse;
use AlibabaCloud\SDK\AgentTeams\V20260605\Models\UpdateInstanceShrinkRequest;
use AlibabaCloud\SDK\AgentTeams\V20260605\Models\UpdateMcpRequest;
use AlibabaCloud\SDK\AgentTeams\V20260605\Models\UpdateMcpResponse;
use AlibabaCloud\SDK\AgentTeams\V20260605\Models\UpdateMcpShrinkRequest;
use AlibabaCloud\SDK\AgentTeams\V20260605\Models\UpdateModelProviderRequest;
use AlibabaCloud\SDK\AgentTeams\V20260605\Models\UpdateModelProviderResponse;
use AlibabaCloud\SDK\AgentTeams\V20260605\Models\UpdateModelProviderShrinkRequest;
use AlibabaCloud\SDK\AgentTeams\V20260605\Models\UpdateModelRequest;
use AlibabaCloud\SDK\AgentTeams\V20260605\Models\UpdateModelResponse;
use AlibabaCloud\SDK\AgentTeams\V20260605\Models\UpdateServiceEndpointRequest;
use AlibabaCloud\SDK\AgentTeams\V20260605\Models\UpdateServiceEndpointResponse;
use AlibabaCloud\SDK\AgentTeams\V20260605\Models\UpdateTeamRequest;
use AlibabaCloud\SDK\AgentTeams\V20260605\Models\UpdateTeamResponse;
use AlibabaCloud\SDK\AgentTeams\V20260605\Models\UpdateTeamShrinkRequest;
use AlibabaCloud\SDK\AgentTeams\V20260605\Models\UpdateUserRequest;
use AlibabaCloud\SDK\AgentTeams\V20260605\Models\UpdateUserResponse;
use AlibabaCloud\SDK\AgentTeams\V20260605\Models\UpdateWorkerRequest;
use AlibabaCloud\SDK\AgentTeams\V20260605\Models\UpdateWorkerResponse;
use AlibabaCloud\SDK\AgentTeams\V20260605\Models\UpdateWorkerShrinkRequest;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class AgentTeams extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap = [
            'cn-beijing' => 'agentteams.cn-beijing.aliyuncs.com',
            'ap-southeast-1' => 'agentteams.ap-southeast-1.aliyuncs.com',
            'cn-hangzhou' => 'agentteams.cn-hangzhou.aliyuncs.com',
        ];
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('agentteams', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * Binds an upstream identity provider to a specified instance and triggers a synchronization task.
     *
     * @remarks
     * ## Operation description
     * - This is an asynchronous operation that immediately returns binding task information after the call.
     * - Use `GetInstanceAsyncTask` to poll for the asynchronous task result. The default polling interval is 30 seconds, with a maximum of 20 attempts.
     * - The `IdpMetadata` parameter contains sensitive information. Ensure secure transmission.
     * - The default values of `LoginEnabled` and `SyncEnabled` are `true` and `false`, respectively. If not explicitly specified, the default values are used.
     *
     * @param request - BindIdentityProviderRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BindIdentityProviderResponse
     *
     * @param BindIdentityProviderRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return BindIdentityProviderResponse
     */
    public function bindIdentityProviderWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->identityProviderType) {
            @$query['IdentityProviderType'] = $request->identityProviderType;
        }

        if (null !== $request->idpMetadata) {
            @$query['IdpMetadata'] = $request->idpMetadata;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->loginEnabled) {
            @$query['LoginEnabled'] = $request->loginEnabled;
        }

        if (null !== $request->syncEnabled) {
            @$query['SyncEnabled'] = $request->syncEnabled;
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
            'action' => 'BindIdentityProvider',
            'version' => '2026-06-05',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return BindIdentityProviderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Binds an upstream identity provider to a specified instance and triggers a synchronization task.
     *
     * @remarks
     * ## Operation description
     * - This is an asynchronous operation that immediately returns binding task information after the call.
     * - Use `GetInstanceAsyncTask` to poll for the asynchronous task result. The default polling interval is 30 seconds, with a maximum of 20 attempts.
     * - The `IdpMetadata` parameter contains sensitive information. Ensure secure transmission.
     * - The default values of `LoginEnabled` and `SyncEnabled` are `true` and `false`, respectively. If not explicitly specified, the default values are used.
     *
     * @param request - BindIdentityProviderRequest
     *
     * @returns BindIdentityProviderResponse
     *
     * @param BindIdentityProviderRequest $request
     *
     * @return BindIdentityProviderResponse
     */
    public function bindIdentityProvider($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->bindIdentityProviderWithOptions($request, $runtime);
    }

    /**
     * Activates and configures an Internet NAT gateway for a specified AgentTeams instance.
     *
     * @remarks
     * ## Operation description
     * - This operation creates an Internet NAT gateway and automatically applies for an elastic IP address (EIP), bindS the EIP, and configures SNAT rules.
     * - An asynchronous task ID is returned after the call. The actual resource ID is provided in the task result.
     * - NAT gateway name format: `magic-create-for-vpc-{vpcId}`.
     * - GET and POST methods are supported.
     * - The `eipBandwidth` parameter ranges from 1 to 200 Mbit/s. Default value: 5 Mbit/s.
     * - If `InstanceId` is invalid or `eipBandwidth` is out of range, the API returns an error response.
     *
     * @param request - ConfigureNatGatewayRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ConfigureNatGatewayResponse
     *
     * @param ConfigureNatGatewayRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ConfigureNatGatewayResponse
     */
    public function configureNatGatewayWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->eipAllocationId) {
            @$query['EipAllocationId'] = $request->eipAllocationId;
        }

        if (null !== $request->eipBandwidth) {
            @$query['EipBandwidth'] = $request->eipBandwidth;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->natGatewayInstanceId) {
            @$query['NatGatewayInstanceId'] = $request->natGatewayInstanceId;
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
            'action' => 'ConfigureNatGateway',
            'version' => '2026-06-05',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ConfigureNatGatewayResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Activates and configures an Internet NAT gateway for a specified AgentTeams instance.
     *
     * @remarks
     * ## Operation description
     * - This operation creates an Internet NAT gateway and automatically applies for an elastic IP address (EIP), bindS the EIP, and configures SNAT rules.
     * - An asynchronous task ID is returned after the call. The actual resource ID is provided in the task result.
     * - NAT gateway name format: `magic-create-for-vpc-{vpcId}`.
     * - GET and POST methods are supported.
     * - The `eipBandwidth` parameter ranges from 1 to 200 Mbit/s. Default value: 5 Mbit/s.
     * - If `InstanceId` is invalid or `eipBandwidth` is out of range, the API returns an error response.
     *
     * @param request - ConfigureNatGatewayRequest
     *
     * @returns ConfigureNatGatewayResponse
     *
     * @param ConfigureNatGatewayRequest $request
     *
     * @return ConfigureNatGatewayResponse
     */
    public function configureNatGateway($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->configureNatGatewayWithOptions($request, $runtime);
    }

    /**
     * Creates a new key-value credential under a specified AgentTeams instance.
     *
     * @remarks
     * ## Operation description
     * - `ApiKey` is a sensitive field and is not returned in plaintext.
     * - `ClientToken` is used to ensure idempotence of the request. This parameter is optional but recommended.
     * - The credential name (Name) must match the regular expression `^[A-Z_][A-Z0-9_]*$`.
     * - If the specified credential name already exists in the specified instance, the error code `Credential.Name.AlreadyExists` is returned.
     *
     * @param request - CreateCredentialRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateCredentialResponse
     *
     * @param CreateCredentialRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return CreateCredentialResponse
     */
    public function createCredentialWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        $body = [];
        if (null !== $request->apiKey) {
            @$body['ApiKey'] = $request->apiKey;
        }

        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateCredential',
            'version' => '2026-06-05',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateCredentialResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a new key-value credential under a specified AgentTeams instance.
     *
     * @remarks
     * ## Operation description
     * - `ApiKey` is a sensitive field and is not returned in plaintext.
     * - `ClientToken` is used to ensure idempotence of the request. This parameter is optional but recommended.
     * - The credential name (Name) must match the regular expression `^[A-Z_][A-Z0-9_]*$`.
     * - If the specified credential name already exists in the specified instance, the error code `Credential.Name.AlreadyExists` is returned.
     *
     * @param request - CreateCredentialRequest
     *
     * @returns CreateCredentialResponse
     *
     * @param CreateCredentialRequest $request
     *
     * @return CreateCredentialResponse
     */
    public function createCredential($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createCredentialWithOptions($request, $runtime);
    }

    /**
     * Asynchronously creates a cluster instance with the specified configurations.
     *
     * @remarks
     * ## Operation description
     * - This is an asynchronous operation. After a successful call, the instance status changes to CREATING.
     * - The actual resource creation is completed asynchronously in the background. Poll the creation result by calling the `GetInstance` operation.
     * - You can pass request information by using form parameters or query parameters.
     * - If optional parameters are not provided, default values are used.
     * - Use `ClientToken` to ensure the idempotence of the request.
     *
     * @param tmpReq - CreateInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateInstanceResponse
     *
     * @param CreateInstanceRequest $tmpReq
     * @param RuntimeOptions        $runtime
     *
     * @return CreateInstanceResponse
     */
    public function createInstanceWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateInstanceShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->zones) {
            $request->zonesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->zones, 'Zones', 'json');
        }

        $query = [];
        if (null !== $request->instanceName) {
            @$query['InstanceName'] = $request->instanceName;
        }

        if (null !== $request->instanceSpec) {
            @$query['InstanceSpec'] = $request->instanceSpec;
        }

        if (null !== $request->networkType) {
            @$query['NetworkType'] = $request->networkType;
        }

        if (null !== $request->vpcId) {
            @$query['VpcId'] = $request->vpcId;
        }

        if (null !== $request->zonesShrink) {
            @$query['Zones'] = $request->zonesShrink;
        }

        $body = [];
        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->paymentType) {
            @$body['PaymentType'] = $request->paymentType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateInstance',
            'version' => '2026-06-05',
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
     * Asynchronously creates a cluster instance with the specified configurations.
     *
     * @remarks
     * ## Operation description
     * - This is an asynchronous operation. After a successful call, the instance status changes to CREATING.
     * - The actual resource creation is completed asynchronously in the background. Poll the creation result by calling the `GetInstance` operation.
     * - You can pass request information by using form parameters or query parameters.
     * - If optional parameters are not provided, default values are used.
     * - Use `ClientToken` to ensure the idempotence of the request.
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
     * Creates an MCP server.
     *
     * @remarks
     * ## Operation description
     * - You must specify the `InstanceId`, `Name`, and `Addresses` parameters when you create an MCP server.
     * - The `CreateType` parameter defaults to `DIRECT_PROXY`. If you select the `HTTP_TO_MCP` mode, you must also specify `SwaggerConfig`.
     * - Set `AuthEnabled` to enable or disable authentication. If authentication is enabled, you must specify `AuthConfig`.
     * - Use `ClientToken` to ensure the idempotence of the request.
     * - Custom protocol types are supported. The `streamable` protocol is used by default.
     *
     * @param tmpReq - CreateMcpRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateMcpResponse
     *
     * @param CreateMcpRequest $tmpReq
     * @param RuntimeOptions   $runtime
     *
     * @return CreateMcpResponse
     */
    public function createMcpWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateMcpShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->addresses) {
            $request->addressesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->addresses, 'Addresses', 'json');
        }

        $query = [];
        if (null !== $request->protocol) {
            @$query['Protocol'] = $request->protocol;
        }

        $body = [];
        if (null !== $request->addressesShrink) {
            @$body['Addresses'] = $request->addressesShrink;
        }

        if (null !== $request->authConfig) {
            @$body['AuthConfig'] = $request->authConfig;
        }

        if (null !== $request->authEnabled) {
            @$body['AuthEnabled'] = $request->authEnabled;
        }

        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->createType) {
            @$body['CreateType'] = $request->createType;
        }

        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        if (null !== $request->swaggerConfig) {
            @$body['SwaggerConfig'] = $request->swaggerConfig;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateMcp',
            'version' => '2026-06-05',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateMcpResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates an MCP server.
     *
     * @remarks
     * ## Operation description
     * - You must specify the `InstanceId`, `Name`, and `Addresses` parameters when you create an MCP server.
     * - The `CreateType` parameter defaults to `DIRECT_PROXY`. If you select the `HTTP_TO_MCP` mode, you must also specify `SwaggerConfig`.
     * - Set `AuthEnabled` to enable or disable authentication. If authentication is enabled, you must specify `AuthConfig`.
     * - Use `ClientToken` to ensure the idempotence of the request.
     * - Custom protocol types are supported. The `streamable` protocol is used by default.
     *
     * @param request - CreateMcpRequest
     *
     * @returns CreateMcpResponse
     *
     * @param CreateMcpRequest $request
     *
     * @return CreateMcpResponse
     */
    public function createMcp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createMcpWithOptions($request, $runtime);
    }

    /**
     * Creates an AI model under a specified AgentTeams instance. You must specify the model name, the model provider, and the list of supported protocols.
     *
     * @remarks
     * Creates an AI model under a specified AgentTeams instance. You must specify the model name, the model provider, and the list of supported protocols.
     *
     * @param tmpReq - CreateModelRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateModelResponse
     *
     * @param CreateModelRequest $tmpReq
     * @param RuntimeOptions     $runtime
     *
     * @return CreateModelResponse
     */
    public function createModelWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateModelShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->protocols) {
            $request->protocolsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->protocols, 'Protocols', 'json');
        }

        $body = [];
        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        if (null !== $request->protocolsShrink) {
            @$body['Protocols'] = $request->protocolsShrink;
        }

        if (null !== $request->provider) {
            @$body['Provider'] = $request->provider;
        }

        if (null !== $request->providerId) {
            @$body['ProviderId'] = $request->providerId;
        }

        if (null !== $request->providerName) {
            @$body['ProviderName'] = $request->providerName;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateModel',
            'version' => '2026-06-05',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateModelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates an AI model under a specified AgentTeams instance. You must specify the model name, the model provider, and the list of supported protocols.
     *
     * @remarks
     * Creates an AI model under a specified AgentTeams instance. You must specify the model name, the model provider, and the list of supported protocols.
     *
     * @param request - CreateModelRequest
     *
     * @returns CreateModelResponse
     *
     * @param CreateModelRequest $request
     *
     * @return CreateModelResponse
     */
    public function createModel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createModelWithOptions($request, $runtime);
    }

    /**
     * Creates an AI model provider under a specified AgentTeams instance. You must specify the provider name, address, supported protocol list, and API keys.
     *
     * @remarks
     * Creates an AI model provider under a specified AgentTeams instance. You must specify the provider name, address, supported protocol list, and API keys.
     *
     * @param tmpReq - CreateModelProviderRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateModelProviderResponse
     *
     * @param CreateModelProviderRequest $tmpReq
     * @param RuntimeOptions             $runtime
     *
     * @return CreateModelProviderResponse
     */
    public function createModelProviderWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateModelProviderShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->apiKeys) {
            $request->apiKeysShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->apiKeys, 'ApiKeys', 'json');
        }

        if (null !== $tmpReq->protocols) {
            $request->protocolsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->protocols, 'Protocols', 'json');
        }

        $body = [];
        if (null !== $request->address) {
            @$body['Address'] = $request->address;
        }

        if (null !== $request->apiKeysShrink) {
            @$body['ApiKeys'] = $request->apiKeysShrink;
        }

        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        if (null !== $request->protocolsShrink) {
            @$body['Protocols'] = $request->protocolsShrink;
        }

        if (null !== $request->provider) {
            @$body['Provider'] = $request->provider;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateModelProvider',
            'version' => '2026-06-05',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateModelProviderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates an AI model provider under a specified AgentTeams instance. You must specify the provider name, address, supported protocol list, and API keys.
     *
     * @remarks
     * Creates an AI model provider under a specified AgentTeams instance. You must specify the provider name, address, supported protocol list, and API keys.
     *
     * @param request - CreateModelProviderRequest
     *
     * @returns CreateModelProviderResponse
     *
     * @param CreateModelProviderRequest $request
     *
     * @return CreateModelProviderResponse
     */
    public function createModelProvider($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createModelProviderWithOptions($request, $runtime);
    }

    /**
     * Creates an endpoint for a specified instance. Multiple component types and gateway types are supported.
     *
     * @remarks
     * Creates an endpoint for a specified instance. Multiple component types and gateway types are supported.
     * - The current controller uses standard parameter binding instead of @RequestBody, so parameters are better suited for query/form-based transmission.
     * - The domain field is trimmed and converted to lowercase on the server side.
     * - The query and headers must be in JSON object string format and cannot be arrays.
     * - The create operation only saves data to the database. The AI Gateway domain name synchronization logic is triggered only during an update when the conditions ELEMENT/MATRIX + AI_GATEWAY + INTERNET are met and the domain name or certificate has changed.
     *
     * @param request - CreateServiceEndpointRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateServiceEndpointResponse
     *
     * @param CreateServiceEndpointRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return CreateServiceEndpointResponse
     */
    public function createServiceEndpointWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->certIdentifier) {
            @$query['CertIdentifier'] = $request->certIdentifier;
        }

        if (null !== $request->component) {
            @$query['Component'] = $request->component;
        }

        if (null !== $request->domain) {
            @$query['Domain'] = $request->domain;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->resourceName) {
            @$query['ResourceName'] = $request->resourceName;
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
            'action' => 'CreateServiceEndpoint',
            'version' => '2026-06-05',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateServiceEndpointResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates an endpoint for a specified instance. Multiple component types and gateway types are supported.
     *
     * @remarks
     * Creates an endpoint for a specified instance. Multiple component types and gateway types are supported.
     * - The current controller uses standard parameter binding instead of @RequestBody, so parameters are better suited for query/form-based transmission.
     * - The domain field is trimmed and converted to lowercase on the server side.
     * - The query and headers must be in JSON object string format and cannot be arrays.
     * - The create operation only saves data to the database. The AI Gateway domain name synchronization logic is triggered only during an update when the conditions ELEMENT/MATRIX + AI_GATEWAY + INTERNET are met and the domain name or certificate has changed.
     *
     * @param request - CreateServiceEndpointRequest
     *
     * @returns CreateServiceEndpointResponse
     *
     * @param CreateServiceEndpointRequest $request
     *
     * @return CreateServiceEndpointResponse
     */
    public function createServiceEndpoint($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createServiceEndpointWithOptions($request, $runtime);
    }

    /**
     * Creates a team under a specified instance. You can set the team name, description, administrator, and initial member list.
     *
     * @remarks
     * Creates a team under a specified instance. You can set the team name, description, administrator, and initial member list.
     *
     * @param tmpReq - CreateTeamRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateTeamResponse
     *
     * @param CreateTeamRequest $tmpReq
     * @param RuntimeOptions    $runtime
     *
     * @return CreateTeamResponse
     */
    public function createTeamWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateTeamShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->teamMembers) {
            $request->teamMembersShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->teamMembers, 'TeamMembers', 'json');
        }

        $query = [];
        if (null !== $request->adminName) {
            @$query['AdminName'] = $request->adminName;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->teamMembersShrink) {
            @$query['TeamMembers'] = $request->teamMembersShrink;
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
            'action' => 'CreateTeam',
            'version' => '2026-06-05',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateTeamResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a team under a specified instance. You can set the team name, description, administrator, and initial member list.
     *
     * @remarks
     * Creates a team under a specified instance. You can set the team name, description, administrator, and initial member list.
     *
     * @param request - CreateTeamRequest
     *
     * @returns CreateTeamResponse
     *
     * @param CreateTeamRequest $request
     *
     * @return CreateTeamResponse
     */
    public function createTeam($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createTeamWithOptions($request, $runtime);
    }

    /**
     * Creates a user under a specified instance. You can set the username, display name, email address, authentication method, note, and password. If no password is specified, the system automatically generates an initial password and returns it in the response.
     *
     * @remarks
     * Creates a user under a specified instance. You can set the username, display name, email address, authentication method, note, and password. If no password is specified, the system automatically generates an initial password and returns it in the response.
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
        if (null !== $request->authMethod) {
            @$query['AuthMethod'] = $request->authMethod;
        }

        if (null !== $request->displayName) {
            @$query['DisplayName'] = $request->displayName;
        }

        if (null !== $request->email) {
            @$query['Email'] = $request->email;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->note) {
            @$query['Note'] = $request->note;
        }

        if (null !== $request->password) {
            @$query['Password'] = $request->password;
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
            'action' => 'CreateUser',
            'version' => '2026-06-05',
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
     * Creates a user under a specified instance. You can set the username, display name, email address, authentication method, note, and password. If no password is specified, the system automatically generates an initial password and returns it in the response.
     *
     * @remarks
     * Creates a user under a specified instance. You can set the username, display name, email address, authentication method, note, and password. If no password is specified, the system automatically generates an initial password and returns it in the response.
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
     * Creates a Worker instance with specified configurations such as model, skills, template, MCP servers, and channels.
     *
     * @remarks
     * Creates a Worker instance with specified configurations such as model, skills, template, MCP servers, and channels.
     *
     * @param tmpReq - CreateWorkerRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateWorkerResponse
     *
     * @param CreateWorkerRequest $tmpReq
     * @param RuntimeOptions      $runtime
     *
     * @return CreateWorkerResponse
     */
    public function createWorkerWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateWorkerShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->channels) {
            $request->channelsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->channels, 'Channels', 'json');
        }

        if (null !== $tmpReq->credentials) {
            $request->credentialsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->credentials, 'Credentials', 'json');
        }

        if (null !== $tmpReq->groups) {
            $request->groupsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->groups, 'Groups', 'json');
        }

        if (null !== $tmpReq->limitConfig) {
            $request->limitConfigShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->limitConfig, 'LimitConfig', 'json');
        }

        if (null !== $tmpReq->mcpServers) {
            $request->mcpServersShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->mcpServers, 'McpServers', 'json');
        }

        if (null !== $tmpReq->model) {
            $request->modelShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->model, 'Model', 'json');
        }

        if (null !== $tmpReq->skills) {
            $request->skillsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->skills, 'Skills', 'json');
        }

        if (null !== $tmpReq->subagents) {
            $request->subagentsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->subagents, 'Subagents', 'json');
        }

        if (null !== $tmpReq->template) {
            $request->templateShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->template, 'Template', 'json');
        }

        $query = [];
        if (null !== $request->agentType) {
            @$query['AgentType'] = $request->agentType;
        }

        if (null !== $request->agents) {
            @$query['Agents'] = $request->agents;
        }

        if (null !== $request->channelsShrink) {
            @$query['Channels'] = $request->channelsShrink;
        }

        if (null !== $request->deployType) {
            @$query['DeployType'] = $request->deployType;
        }

        if (null !== $request->groupsShrink) {
            @$query['Groups'] = $request->groupsShrink;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->limitConfigShrink) {
            @$query['LimitConfig'] = $request->limitConfigShrink;
        }

        if (null !== $request->mcpServersShrink) {
            @$query['McpServers'] = $request->mcpServersShrink;
        }

        if (null !== $request->modelShrink) {
            @$query['Model'] = $request->modelShrink;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->skillsShrink) {
            @$query['Skills'] = $request->skillsShrink;
        }

        if (null !== $request->soul) {
            @$query['Soul'] = $request->soul;
        }

        if (null !== $request->subagentsShrink) {
            @$query['Subagents'] = $request->subagentsShrink;
        }

        if (null !== $request->templateShrink) {
            @$query['Template'] = $request->templateShrink;
        }

        if (null !== $request->versionCode) {
            @$query['VersionCode'] = $request->versionCode;
        }

        $body = [];
        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->credentialsShrink) {
            @$body['Credentials'] = $request->credentialsShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateWorker',
            'version' => '2026-06-05',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateWorkerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a Worker instance with specified configurations such as model, skills, template, MCP servers, and channels.
     *
     * @remarks
     * Creates a Worker instance with specified configurations such as model, skills, template, MCP servers, and channels.
     *
     * @param request - CreateWorkerRequest
     *
     * @returns CreateWorkerResponse
     *
     * @param CreateWorkerRequest $request
     *
     * @return CreateWorkerResponse
     */
    public function createWorker($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createWorkerWithOptions($request, $runtime);
    }

    /**
     * Creates a local management bootstrap token for a Worker, with support for specifying the network type.
     *
     * @remarks
     * Creates a local management bootstrap token for a Worker, with support for specifying the network type.
     *
     * @param request - CreateWorkerBootstrapTokenRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateWorkerBootstrapTokenResponse
     *
     * @param CreateWorkerBootstrapTokenRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return CreateWorkerBootstrapTokenResponse
     */
    public function createWorkerBootstrapTokenWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->networkType) {
            @$query['NetworkType'] = $request->networkType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateWorkerBootstrapToken',
            'version' => '2026-06-05',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateWorkerBootstrapTokenResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a local management bootstrap token for a Worker, with support for specifying the network type.
     *
     * @remarks
     * Creates a local management bootstrap token for a Worker, with support for specifying the network type.
     *
     * @param request - CreateWorkerBootstrapTokenRequest
     *
     * @returns CreateWorkerBootstrapTokenResponse
     *
     * @param CreateWorkerBootstrapTokenRequest $request
     *
     * @return CreateWorkerBootstrapTokenResponse
     */
    public function createWorkerBootstrapToken($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createWorkerBootstrapTokenWithOptions($request, $runtime);
    }

    /**
     * Deletes an existing credential from a specified AgentTeams instance. The credential cannot be deleted if it is still attached to a Worker.
     *
     * @remarks
     * Deletes an existing credential from a specified AgentTeams instance. The credential cannot be deleted if it is still attached to a Worker.
     *
     * @param request - DeleteCredentialRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteCredentialResponse
     *
     * @param DeleteCredentialRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DeleteCredentialResponse
     */
    public function deleteCredentialWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
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
            'action' => 'DeleteCredential',
            'version' => '2026-06-05',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteCredentialResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes an existing credential from a specified AgentTeams instance. The credential cannot be deleted if it is still attached to a Worker.
     *
     * @remarks
     * Deletes an existing credential from a specified AgentTeams instance. The credential cannot be deleted if it is still attached to a Worker.
     *
     * @param request - DeleteCredentialRequest
     *
     * @returns DeleteCredentialResponse
     *
     * @param DeleteCredentialRequest $request
     *
     * @return DeleteCredentialResponse
     */
    public function deleteCredential($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteCredentialWithOptions($request, $runtime);
    }

    /**
     * Releases a specified AgentTeams instance and cleans up related resources. Supports GET and POST methods. After a successful call, the instance status changes to DELETING, and resource cleanup is performed asynchronously in the background.
     *
     * @remarks
     * Releases a specified AgentTeams instance and cleans up related resources. Supports GET and POST methods. After a successful call, the instance status changes to DELETING, and resource cleanup is performed asynchronously in the background.
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
            'version' => '2026-06-05',
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
     * Releases a specified AgentTeams instance and cleans up related resources. Supports GET and POST methods. After a successful call, the instance status changes to DELETING, and resource cleanup is performed asynchronously in the background.
     *
     * @remarks
     * Releases a specified AgentTeams instance and cleans up related resources. Supports GET and POST methods. After a successful call, the instance status changes to DELETING, and resource cleanup is performed asynchronously in the background.
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
     * Deletes an MCP server from a specified AgentTeams instance. The server cannot be deleted if it is associated with any Workers.
     *
     * @remarks
     * Deletes an MCP server from a specified AgentTeams instance. The server cannot be deleted if it is associated with any Workers.
     *
     * @param request - DeleteMcpRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteMcpResponse
     *
     * @param DeleteMcpRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return DeleteMcpResponse
     */
    public function deleteMcpWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->id) {
            @$body['Id'] = $request->id;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteMcp',
            'version' => '2026-06-05',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteMcpResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes an MCP server from a specified AgentTeams instance. The server cannot be deleted if it is associated with any Workers.
     *
     * @remarks
     * Deletes an MCP server from a specified AgentTeams instance. The server cannot be deleted if it is associated with any Workers.
     *
     * @param request - DeleteMcpRequest
     *
     * @returns DeleteMcpResponse
     *
     * @param DeleteMcpRequest $request
     *
     * @return DeleteMcpResponse
     */
    public function deleteMcp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteMcpWithOptions($request, $runtime);
    }

    /**
     * Deletes an AI model from a specified AgentTeams instance. The model cannot be deleted if it is still associated with a Worker.
     *
     * @remarks
     * Deletes an AI model from a specified AgentTeams instance. The model cannot be deleted if it is still associated with a Worker.
     *
     * @param request - DeleteModelRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteModelResponse
     *
     * @param DeleteModelRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return DeleteModelResponse
     */
    public function deleteModelWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->id) {
            @$body['Id'] = $request->id;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->providerId) {
            @$body['ProviderId'] = $request->providerId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteModel',
            'version' => '2026-06-05',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteModelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes an AI model from a specified AgentTeams instance. The model cannot be deleted if it is still associated with a Worker.
     *
     * @remarks
     * Deletes an AI model from a specified AgentTeams instance. The model cannot be deleted if it is still associated with a Worker.
     *
     * @param request - DeleteModelRequest
     *
     * @returns DeleteModelResponse
     *
     * @param DeleteModelRequest $request
     *
     * @return DeleteModelResponse
     */
    public function deleteModel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteModelWithOptions($request, $runtime);
    }

    /**
     * Deletes an AI model provider from a specified AgentTeams instance. The provider cannot be deleted if it still has associated models.
     *
     * @remarks
     * Deletes an AI model provider from a specified AgentTeams instance. The provider cannot be deleted if it still has associated models.
     *
     * @param request - DeleteModelProviderRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteModelProviderResponse
     *
     * @param DeleteModelProviderRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DeleteModelProviderResponse
     */
    public function deleteModelProviderWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->id) {
            @$body['Id'] = $request->id;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteModelProvider',
            'version' => '2026-06-05',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteModelProviderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes an AI model provider from a specified AgentTeams instance. The provider cannot be deleted if it still has associated models.
     *
     * @remarks
     * Deletes an AI model provider from a specified AgentTeams instance. The provider cannot be deleted if it still has associated models.
     *
     * @param request - DeleteModelProviderRequest
     *
     * @returns DeleteModelProviderResponse
     *
     * @param DeleteModelProviderRequest $request
     *
     * @return DeleteModelProviderResponse
     */
    public function deleteModelProvider($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteModelProviderWithOptions($request, $runtime);
    }

    /**
     * Deletes an endpoint from a specified AgentTeams instance and cleans up related resources.
     *
     * @remarks
     * Deletes an endpoint from a specified AgentTeams instance and cleans up related resources.
     * - This operation supports GET or POST methods.
     * - If the target endpoint is of the WORKER type, the system automatically cleans up associated APIG/AI Gateway cloud resources and KubeOne worker service configurations.
     * - The request parameters must include instanceId and endpointId, and neither can be empty.
     * - A successful response returns HTTP status code 200 and a success flag. An error response returns the corresponding HTTP status code (such as 400, 404, or 409) and an error message.
     *
     * @param request - DeleteServiceEndpointRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteServiceEndpointResponse
     *
     * @param DeleteServiceEndpointRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DeleteServiceEndpointResponse
     */
    public function deleteServiceEndpointWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endpointId) {
            @$query['EndpointId'] = $request->endpointId;
        }

        $body = [];
        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteServiceEndpoint',
            'version' => '2026-06-05',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteServiceEndpointResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes an endpoint from a specified AgentTeams instance and cleans up related resources.
     *
     * @remarks
     * Deletes an endpoint from a specified AgentTeams instance and cleans up related resources.
     * - This operation supports GET or POST methods.
     * - If the target endpoint is of the WORKER type, the system automatically cleans up associated APIG/AI Gateway cloud resources and KubeOne worker service configurations.
     * - The request parameters must include instanceId and endpointId, and neither can be empty.
     * - A successful response returns HTTP status code 200 and a success flag. An error response returns the corresponding HTTP status code (such as 400, 404, or 409) and an error message.
     *
     * @param request - DeleteServiceEndpointRequest
     *
     * @returns DeleteServiceEndpointResponse
     *
     * @param DeleteServiceEndpointRequest $request
     *
     * @return DeleteServiceEndpointResponse
     */
    public function deleteServiceEndpoint($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteServiceEndpointWithOptions($request, $runtime);
    }

    /**
     * Deletes a team under a specified instance. After deletion, the team and associated resources enter an asynchronous cleanup process.
     *
     * @remarks
     * Deletes a team under a specified instance. After deletion, the team and associated resources enter an asynchronous cleanup process.
     *
     * @param request - DeleteTeamRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteTeamResponse
     *
     * @param DeleteTeamRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return DeleteTeamResponse
     */
    public function deleteTeamWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteTeam',
            'version' => '2026-06-05',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteTeamResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a team under a specified instance. After deletion, the team and associated resources enter an asynchronous cleanup process.
     *
     * @remarks
     * Deletes a team under a specified instance. After deletion, the team and associated resources enter an asynchronous cleanup process.
     *
     * @param request - DeleteTeamRequest
     *
     * @returns DeleteTeamResponse
     *
     * @param DeleteTeamRequest $request
     *
     * @return DeleteTeamResponse
     */
    public function deleteTeam($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteTeamWithOptions($request, $runtime);
    }

    /**
     * Deletes a specified user from a specified instance. After deletion, the user cannot log on to or access instance resources. Proceed with caution.
     *
     * @remarks
     * Deletes a specified user from a specified instance. After deletion, the user cannot log on to or access instance resources. Proceed with caution.
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

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteUser',
            'version' => '2026-06-05',
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
     * Deletes a specified user from a specified instance. After deletion, the user cannot log on to or access instance resources. Proceed with caution.
     *
     * @remarks
     * Deletes a specified user from a specified instance. After deletion, the user cannot log on to or access instance resources. Proceed with caution.
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
     * Deletes a Worker under a specified instance.
     *
     * @remarks
     * Deletes a Worker under a specified instance.
     *
     * @param request - DeleteWorkerRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteWorkerResponse
     *
     * @param DeleteWorkerRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return DeleteWorkerResponse
     */
    public function deleteWorkerWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteWorker',
            'version' => '2026-06-05',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteWorkerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a Worker under a specified instance.
     *
     * @remarks
     * Deletes a Worker under a specified instance.
     *
     * @param request - DeleteWorkerRequest
     *
     * @returns DeleteWorkerResponse
     *
     * @param DeleteWorkerRequest $request
     *
     * @return DeleteWorkerResponse
     */
    public function deleteWorker($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteWorkerWithOptions($request, $runtime);
    }

    /**
     * Queries the details of a specified credential under an AgentTeams instance, including the status, description, and list of bound Workers.
     *
     * @remarks
     * Queries the details of a specified credential under an AgentTeams instance, including the status, description, and list of bound Workers.
     *
     * @param request - GetCredentialRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetCredentialResponse
     *
     * @param GetCredentialRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return GetCredentialResponse
     */
    public function getCredentialWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetCredential',
            'version' => '2026-06-05',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetCredentialResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of a specified credential under an AgentTeams instance, including the status, description, and list of bound Workers.
     *
     * @remarks
     * Queries the details of a specified credential under an AgentTeams instance, including the status, description, and list of bound Workers.
     *
     * @param request - GetCredentialRequest
     *
     * @returns GetCredentialResponse
     *
     * @param GetCredentialRequest $request
     *
     * @return GetCredentialResponse
     */
    public function getCredential($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getCredentialWithOptions($request, $runtime);
    }

    /**
     * Queries the binding details of an upstream identity provider for a specified instance and identity provider type, including the logon callback URL and metadata.
     *
     * @remarks
     * Queries the binding details of an upstream identity provider for a specified instance and identity provider type, including the logon callback URL and metadata.
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
        if (null !== $request->identityProviderType) {
            @$query['IdentityProviderType'] = $request->identityProviderType;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetIdentityProvider',
            'version' => '2026-06-05',
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
     * Queries the binding details of an upstream identity provider for a specified instance and identity provider type, including the logon callback URL and metadata.
     *
     * @remarks
     * Queries the binding details of an upstream identity provider for a specified instance and identity provider type, including the logon callback URL and metadata.
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
     * Queries the details of a specified instance by instance ID. Supports GET and POST methods. A successful response returns the detailed configuration and status of the instance.
     *
     * @remarks
     * Queries the details of a specified instance by instance ID. Supports GET and POST methods. A successful response returns the detailed configuration and status of the instance.
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
            'version' => '2026-06-05',
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
     * Queries the details of a specified instance by instance ID. Supports GET and POST methods. A successful response returns the detailed configuration and status of the instance.
     *
     * @remarks
     * Queries the details of a specified instance by instance ID. Supports GET and POST methods. A successful response returns the detailed configuration and status of the instance.
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
     * Queries the status of asynchronous tasks associated with a specified AgentTeams instance, with pagination support.
     *
     * @remarks
     * Queries the status of asynchronous tasks associated with a specified AgentTeams instance, with paging support.
     * - This operation queries the execution status of asynchronous tasks under a specific AgentTeams instance.
     * - Currently, only instance creation tasks related to the instance lifecycle are supported.
     * - Use the taskCode parameter to specify the task type to query. The default is the instance creation task.
     * - Use maxResults and nextToken for result paging.
     * - When a task is in the PAUSED state, the response includes information about the action the user needs to take (recoveryMessage).
     * - Querying task status directly by taskId is not currently supported.
     *
     * @param request - GetInstanceAsyncTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetInstanceAsyncTaskResponse
     *
     * @param GetInstanceAsyncTaskRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return GetInstanceAsyncTaskResponse
     */
    public function getInstanceAsyncTaskWithOptions($request, $runtime)
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

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        if (null !== $request->taskCode) {
            @$query['TaskCode'] = $request->taskCode;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetInstanceAsyncTask',
            'version' => '2026-06-05',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetInstanceAsyncTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the status of asynchronous tasks associated with a specified AgentTeams instance, with pagination support.
     *
     * @remarks
     * Queries the status of asynchronous tasks associated with a specified AgentTeams instance, with paging support.
     * - This operation queries the execution status of asynchronous tasks under a specific AgentTeams instance.
     * - Currently, only instance creation tasks related to the instance lifecycle are supported.
     * - Use the taskCode parameter to specify the task type to query. The default is the instance creation task.
     * - Use maxResults and nextToken for result paging.
     * - When a task is in the PAUSED state, the response includes information about the action the user needs to take (recoveryMessage).
     * - Querying task status directly by taskId is not currently supported.
     *
     * @param request - GetInstanceAsyncTaskRequest
     *
     * @returns GetInstanceAsyncTaskResponse
     *
     * @param GetInstanceAsyncTaskRequest $request
     *
     * @return GetInstanceAsyncTaskResponse
     */
    public function getInstanceAsyncTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getInstanceAsyncTaskWithOptions($request, $runtime);
    }

    /**
     * Retrieves the RAM authorization URL required to mount OSS to ACS for an instance.
     *
     * @remarks
     * Retrieves the RAM authorization URL required to mount OSS to ACS for an instance.
     * - This operation supports GET and POST methods.
     * - The X-User-Id header must be included in the request to verify instance ownership.
     * - The InstanceId parameter is required to specify the instance. The backend generates the authorization URL based on the instance information.
     * - A successful response returns the RAM console authorization URL without creating a RAM role or policy.
     *
     * @param request - GetInstanceOssMountRamAuthorizeUrlRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetInstanceOssMountRamAuthorizeUrlResponse
     *
     * @param GetInstanceOssMountRamAuthorizeUrlRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return GetInstanceOssMountRamAuthorizeUrlResponse
     */
    public function getInstanceOssMountRamAuthorizeUrlWithOptions($request, $runtime)
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
            'action' => 'GetInstanceOssMountRamAuthorizeUrl',
            'version' => '2026-06-05',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetInstanceOssMountRamAuthorizeUrlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the RAM authorization URL required to mount OSS to ACS for an instance.
     *
     * @remarks
     * Retrieves the RAM authorization URL required to mount OSS to ACS for an instance.
     * - This operation supports GET and POST methods.
     * - The X-User-Id header must be included in the request to verify instance ownership.
     * - The InstanceId parameter is required to specify the instance. The backend generates the authorization URL based on the instance information.
     * - A successful response returns the RAM console authorization URL without creating a RAM role or policy.
     *
     * @param request - GetInstanceOssMountRamAuthorizeUrlRequest
     *
     * @returns GetInstanceOssMountRamAuthorizeUrlResponse
     *
     * @param GetInstanceOssMountRamAuthorizeUrlRequest $request
     *
     * @return GetInstanceOssMountRamAuthorizeUrlResponse
     */
    public function getInstanceOssMountRamAuthorizeUrl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getInstanceOssMountRamAuthorizeUrlWithOptions($request, $runtime);
    }

    /**
     * Queries the details of a specified MCP server, including the address, authentication configuration, deployment status, and protocol.
     *
     * @remarks
     * Queries the details of a specified MCP server, including the address, authentication configuration, deployment status, and protocol.
     *
     * @param request - GetMcpRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetMcpResponse
     *
     * @param GetMcpRequest  $request
     * @param RuntimeOptions $runtime
     *
     * @return GetMcpResponse
     */
    public function getMcpWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetMcp',
            'version' => '2026-06-05',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetMcpResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of a specified MCP server, including the address, authentication configuration, deployment status, and protocol.
     *
     * @remarks
     * Queries the details of a specified MCP server, including the address, authentication configuration, deployment status, and protocol.
     *
     * @param request - GetMcpRequest
     *
     * @returns GetMcpResponse
     *
     * @param GetMcpRequest $request
     *
     * @return GetMcpResponse
     */
    public function getMcp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getMcpWithOptions($request, $runtime);
    }

    /**
     * Queries the model call summary for a specified AgentTeams instance within a specified time range, including today\\"s and this week\\"s call counts, change rates, call frequency, and provider distribution.
     *
     * @remarks
     * Queries the model call summary for a specified AgentTeams instance within a specified time range, including today\\"s and this week\\"s call counts, change rates, call frequency, and provider distribution.
     *
     * @param request - GetModelInvocationSummaryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetModelInvocationSummaryResponse
     *
     * @param GetModelInvocationSummaryRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return GetModelInvocationSummaryResponse
     */
    public function getModelInvocationSummaryWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetModelInvocationSummary',
            'version' => '2026-06-05',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetModelInvocationSummaryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the model call summary for a specified AgentTeams instance within a specified time range, including today\\"s and this week\\"s call counts, change rates, call frequency, and provider distribution.
     *
     * @remarks
     * Queries the model call summary for a specified AgentTeams instance within a specified time range, including today\\"s and this week\\"s call counts, change rates, call frequency, and provider distribution.
     *
     * @param request - GetModelInvocationSummaryRequest
     *
     * @returns GetModelInvocationSummaryResponse
     *
     * @param GetModelInvocationSummaryRequest $request
     *
     * @return GetModelInvocationSummaryResponse
     */
    public function getModelInvocationSummary($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getModelInvocationSummaryWithOptions($request, $runtime);
    }

    /**
     * Queries the details of a single AI model provider, including the name, address, protocol list, API keys, and deployment status.
     *
     * @remarks
     * Queries the details of a single AI model provider, including the name, address, protocol list, API keys, and deployment status.
     *
     * @param request - GetModelProviderRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetModelProviderResponse
     *
     * @param GetModelProviderRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetModelProviderResponse
     */
    public function getModelProviderWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetModelProvider',
            'version' => '2026-06-05',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetModelProviderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of a single AI model provider, including the name, address, protocol list, API keys, and deployment status.
     *
     * @remarks
     * Queries the details of a single AI model provider, including the name, address, protocol list, API keys, and deployment status.
     *
     * @param request - GetModelProviderRequest
     *
     * @returns GetModelProviderResponse
     *
     * @param GetModelProviderRequest $request
     *
     * @return GetModelProviderResponse
     */
    public function getModelProvider($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getModelProviderWithOptions($request, $runtime);
    }

    /**
     * Queries the configuration status of the NAT gateway and its SNAT rules for a specified instance.
     *
     * @remarks
     * Queries the configuration status of the NAT gateway and its SNAT rules for a specified instance.
     * - This API allows you to retrieve the NAT gateway configuration details and SNAT rule status associated with a specific instance. This operation supports GET or POST method calls and requires the instanceId as a request parameter to specify the instance to query.
     * - Ensure that the provided instanceId is valid and belongs to your account.
     * - Based on the returned status values (such as READY, NEED_CONFIGURE_NAT_GATEWAY, or NEED_CONFIGURE_SNAT_RULE), take the corresponding actions to complete the NAT gateway or SNAT rule configuration.
     * - When the status is NEED_CONFIGURE_NAT_GATEWAY, it indicates that no available NAT gateway exists in the current VPC. NEED_CONFIGURE_SNAT_RULE means that a NAT gateway exists but some subnet CIDRs are not covered by SNAT rules.
     *
     * @param request - GetNatGatewayStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetNatGatewayStatusResponse
     *
     * @param GetNatGatewayStatusRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GetNatGatewayStatusResponse
     */
    public function getNatGatewayStatusWithOptions($request, $runtime)
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
            'action' => 'GetNatGatewayStatus',
            'version' => '2026-06-05',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetNatGatewayStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the configuration status of the NAT gateway and its SNAT rules for a specified instance.
     *
     * @remarks
     * Queries the configuration status of the NAT gateway and its SNAT rules for a specified instance.
     * - This API allows you to retrieve the NAT gateway configuration details and SNAT rule status associated with a specific instance. This operation supports GET or POST method calls and requires the instanceId as a request parameter to specify the instance to query.
     * - Ensure that the provided instanceId is valid and belongs to your account.
     * - Based on the returned status values (such as READY, NEED_CONFIGURE_NAT_GATEWAY, or NEED_CONFIGURE_SNAT_RULE), take the corresponding actions to complete the NAT gateway or SNAT rule configuration.
     * - When the status is NEED_CONFIGURE_NAT_GATEWAY, it indicates that no available NAT gateway exists in the current VPC. NEED_CONFIGURE_SNAT_RULE means that a NAT gateway exists but some subnet CIDRs are not covered by SNAT rules.
     *
     * @param request - GetNatGatewayStatusRequest
     *
     * @returns GetNatGatewayStatusResponse
     *
     * @param GetNatGatewayStatusRequest $request
     *
     * @return GetNatGatewayStatusResponse
     */
    public function getNatGatewayStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getNatGatewayStatusWithOptions($request, $runtime);
    }

    /**
     * Queries the details of an endpoint with a specified ID. You can verify the endpoint by instance ID.
     *
     * @remarks
     * Queries the details of an endpoint with a specified ID. You can verify the endpoint by instance ID.
     * - This API operation queries the configuration and status information of a single endpoint based on the endpointId.
     * - The optional parameter instanceId is used to verify whether the endpoint belongs to a specific instance.
     * - The request supports both GET and POST methods. GET passes parameters through the query string, while POST submits parameters through form data.
     * - If endpointId is missing or empty, an InvalidParameter error is returned.
     * - If the requested endpoint does not exist, does not belong to the specified instance, or does not belong to the current user, a resource-not-found error is returned.
     *
     * @param request - GetServiceEndpointRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetServiceEndpointResponse
     *
     * @param GetServiceEndpointRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GetServiceEndpointResponse
     */
    public function getServiceEndpointWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endpointId) {
            @$query['EndpointId'] = $request->endpointId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetServiceEndpoint',
            'version' => '2026-06-05',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetServiceEndpointResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of an endpoint with a specified ID. You can verify the endpoint by instance ID.
     *
     * @remarks
     * Queries the details of an endpoint with a specified ID. You can verify the endpoint by instance ID.
     * - This API operation queries the configuration and status information of a single endpoint based on the endpointId.
     * - The optional parameter instanceId is used to verify whether the endpoint belongs to a specific instance.
     * - The request supports both GET and POST methods. GET passes parameters through the query string, while POST submits parameters through form data.
     * - If endpointId is missing or empty, an InvalidParameter error is returned.
     * - If the requested endpoint does not exist, does not belong to the specified instance, or does not belong to the current user, a resource-not-found error is returned.
     *
     * @param request - GetServiceEndpointRequest
     *
     * @returns GetServiceEndpointResponse
     *
     * @param GetServiceEndpointRequest $request
     *
     * @return GetServiceEndpointResponse
     */
    public function getServiceEndpoint($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getServiceEndpointWithOptions($request, $runtime);
    }

    /**
     * Queries the task statistics summary of a specified AgentTeams instance within a specified time range, including total tasks, average task duration, token consumption, and status distribution.
     *
     * @remarks
     * Queries the task statistics summary of a specified AgentTeams instance within a specified time range, including total tasks, average task duration, token consumption, and status distribution.
     *
     * @param request - GetTaskStatsSummaryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetTaskStatsSummaryResponse
     *
     * @param GetTaskStatsSummaryRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GetTaskStatsSummaryResponse
     */
    public function getTaskStatsSummaryWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetTaskStatsSummary',
            'version' => '2026-06-05',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetTaskStatsSummaryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the task statistics summary of a specified AgentTeams instance within a specified time range, including total tasks, average task duration, token consumption, and status distribution.
     *
     * @remarks
     * Queries the task statistics summary of a specified AgentTeams instance within a specified time range, including total tasks, average task duration, token consumption, and status distribution.
     *
     * @param request - GetTaskStatsSummaryRequest
     *
     * @returns GetTaskStatsSummaryResponse
     *
     * @param GetTaskStatsSummaryRequest $request
     *
     * @return GetTaskStatsSummaryResponse
     */
    public function getTaskStatsSummary($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTaskStatsSummaryWithOptions($request, $runtime);
    }

    /**
     * Queries the details of a specified team under a specified instance, including the description, administrator, leader, members, associated workers, and room status.
     *
     * @remarks
     * Queries the details of a specified team under a specified instance, including the description, administrator, leader, members, associated workers, and room status.
     *
     * @param request - GetTeamRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetTeamResponse
     *
     * @param GetTeamRequest $request
     * @param RuntimeOptions $runtime
     *
     * @return GetTeamResponse
     */
    public function getTeamWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetTeam',
            'version' => '2026-06-05',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetTeamResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of a specified team under a specified instance, including the description, administrator, leader, members, associated workers, and room status.
     *
     * @remarks
     * Queries the details of a specified team under a specified instance, including the description, administrator, leader, members, associated workers, and room status.
     *
     * @param request - GetTeamRequest
     *
     * @returns GetTeamResponse
     *
     * @param GetTeamRequest $request
     *
     * @return GetTeamResponse
     */
    public function getTeam($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTeamWithOptions($request, $runtime);
    }

    /**
     * Queries the token consumption trend of a specified AgentTeams instance within a specified time range, supports grouping by time dimension, and returns time series data that can be used for charting.
     *
     * @remarks
     * Queries the token consumption trend of a specified AgentTeams instance within a specified time range, supports grouping by time dimension, and returns time series data that can be used for charting.
     *
     * @param request - GetTokenTrendRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetTokenTrendResponse
     *
     * @param GetTokenTrendRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return GetTokenTrendResponse
     */
    public function getTokenTrendWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->groupBy) {
            @$query['GroupBy'] = $request->groupBy;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetTokenTrend',
            'version' => '2026-06-05',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetTokenTrendResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the token consumption trend of a specified AgentTeams instance within a specified time range, supports grouping by time dimension, and returns time series data that can be used for charting.
     *
     * @remarks
     * Queries the token consumption trend of a specified AgentTeams instance within a specified time range, supports grouping by time dimension, and returns time series data that can be used for charting.
     *
     * @param request - GetTokenTrendRequest
     *
     * @returns GetTokenTrendResponse
     *
     * @param GetTokenTrendRequest $request
     *
     * @return GetTokenTrendResponse
     */
    public function getTokenTrend($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTokenTrendWithOptions($request, $runtime);
    }

    /**
     * Queries the tool calling distribution of a specified AgentTeams instance within a specified time range, and returns the number of calls for each tool and the total number of calls.
     *
     * @remarks
     * Queries the tool calling distribution of a specified AgentTeams instance within a specified time range, and returns the number of calls for each tool and the total number of calls.
     *
     * @param request - GetToolCallDistributionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetToolCallDistributionResponse
     *
     * @param GetToolCallDistributionRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return GetToolCallDistributionResponse
     */
    public function getToolCallDistributionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetToolCallDistribution',
            'version' => '2026-06-05',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetToolCallDistributionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the tool calling distribution of a specified AgentTeams instance within a specified time range, and returns the number of calls for each tool and the total number of calls.
     *
     * @remarks
     * Queries the tool calling distribution of a specified AgentTeams instance within a specified time range, and returns the number of calls for each tool and the total number of calls.
     *
     * @param request - GetToolCallDistributionRequest
     *
     * @returns GetToolCallDistributionResponse
     *
     * @param GetToolCallDistributionRequest $request
     *
     * @return GetToolCallDistributionResponse
     */
    public function getToolCallDistribution($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getToolCallDistributionWithOptions($request, $runtime);
    }

    /**
     * Queries the details of a specified user under a specified instance, including the username, display name, email address, authentication method, status, and creation time.
     *
     * @remarks
     * Queries the details of a specified user under a specified instance, including the username, display name, email address, authentication method, status, and creation time.
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

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetUser',
            'version' => '2026-06-05',
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
     * Queries the details of a specified user under a specified instance, including the username, display name, email address, authentication method, status, and creation time.
     *
     * @remarks
     * Queries the details of a specified user under a specified instance, including the username, display name, email address, authentication method, status, and creation time.
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
     * Retrieves the initial password of a specified user under a specified instance. The initial password is generated by the system or specified by the user when the user is created.
     *
     * @remarks
     * Retrieves the initial password of a specified user under a specified instance. The initial password is generated by the system or specified by the user when the user is created.
     *
     * @param request - GetUserPasswordRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetUserPasswordResponse
     *
     * @param GetUserPasswordRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return GetUserPasswordResponse
     */
    public function getUserPasswordWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetUserPassword',
            'version' => '2026-06-05',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetUserPasswordResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the initial password of a specified user under a specified instance. The initial password is generated by the system or specified by the user when the user is created.
     *
     * @remarks
     * Retrieves the initial password of a specified user under a specified instance. The initial password is generated by the system or specified by the user when the user is created.
     *
     * @param request - GetUserPasswordRequest
     *
     * @returns GetUserPasswordResponse
     *
     * @param GetUserPasswordRequest $request
     *
     * @return GetUserPasswordResponse
     */
    public function getUserPassword($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getUserPasswordWithOptions($request, $runtime);
    }

    /**
     * Queries the details of a specified worker, including configurations such as model, skills, sub-agents, MCP servers, channels, and quotas.
     *
     * @remarks
     * Queries the details of a specified worker, including configurations such as model, skills, sub-agents, MCP servers, channels, and quotas.
     *
     * @param request - GetWorkerRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetWorkerResponse
     *
     * @param GetWorkerRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return GetWorkerResponse
     */
    public function getWorkerWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetWorker',
            'version' => '2026-06-05',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetWorkerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of a specified worker, including configurations such as model, skills, sub-agents, MCP servers, channels, and quotas.
     *
     * @remarks
     * Queries the details of a specified worker, including configurations such as model, skills, sub-agents, MCP servers, channels, and quotas.
     *
     * @param request - GetWorkerRequest
     *
     * @returns GetWorkerResponse
     *
     * @param GetWorkerRequest $request
     *
     * @return GetWorkerResponse
     */
    public function getWorker($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getWorkerWithOptions($request, $runtime);
    }

    /**
     * Queries the startup options for local Worker management and returns available network types.
     *
     * @remarks
     * Queries the startup options for local Worker management and returns available network types.
     *
     * @param request - GetWorkerBootstrapOptionsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetWorkerBootstrapOptionsResponse
     *
     * @param GetWorkerBootstrapOptionsRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return GetWorkerBootstrapOptionsResponse
     */
    public function getWorkerBootstrapOptionsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetWorkerBootstrapOptions',
            'version' => '2026-06-05',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetWorkerBootstrapOptionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the startup options for local Worker management and returns available network types.
     *
     * @remarks
     * Queries the startup options for local Worker management and returns available network types.
     *
     * @param request - GetWorkerBootstrapOptionsRequest
     *
     * @returns GetWorkerBootstrapOptionsResponse
     *
     * @param GetWorkerBootstrapOptionsRequest $request
     *
     * @return GetWorkerBootstrapOptionsResponse
     */
    public function getWorkerBootstrapOptions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getWorkerBootstrapOptionsWithOptions($request, $runtime);
    }

    /**
     * Queries the maximum upgradable version of a worker.
     *
     * @remarks
     * Queries the maximum upgradable version of a worker.
     *
     * @param request - GetWorkerMaxVersionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetWorkerMaxVersionResponse
     *
     * @param GetWorkerMaxVersionRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GetWorkerMaxVersionResponse
     */
    public function getWorkerMaxVersionWithOptions($request, $runtime)
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
            'action' => 'GetWorkerMaxVersion',
            'version' => '2026-06-05',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetWorkerMaxVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the maximum upgradable version of a worker.
     *
     * @remarks
     * Queries the maximum upgradable version of a worker.
     *
     * @param request - GetWorkerMaxVersionRequest
     *
     * @returns GetWorkerMaxVersionResponse
     *
     * @param GetWorkerMaxVersionRequest $request
     *
     * @return GetWorkerMaxVersionResponse
     */
    public function getWorkerMaxVersion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getWorkerMaxVersionWithOptions($request, $runtime);
    }

    /**
     * Queries the Worker statistics summary, including the total number of workers, the number of running workers, the number of stopped workers, and more.
     *
     * @remarks
     * Queries the Worker statistics summary, including the total number of workers, the number of running workers, the number of stopped workers, and more.
     *
     * @param request - GetWorkerStatsSummaryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetWorkerStatsSummaryResponse
     *
     * @param GetWorkerStatsSummaryRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return GetWorkerStatsSummaryResponse
     */
    public function getWorkerStatsSummaryWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetWorkerStatsSummary',
            'version' => '2026-06-05',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetWorkerStatsSummaryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the Worker statistics summary, including the total number of workers, the number of running workers, the number of stopped workers, and more.
     *
     * @remarks
     * Queries the Worker statistics summary, including the total number of workers, the number of running workers, the number of stopped workers, and more.
     *
     * @param request - GetWorkerStatsSummaryRequest
     *
     * @returns GetWorkerStatsSummaryResponse
     *
     * @param GetWorkerStatsSummaryRequest $request
     *
     * @return GetWorkerStatsSummaryResponse
     */
    public function getWorkerStatsSummary($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getWorkerStatsSummaryWithOptions($request, $runtime);
    }

    /**
     * Queries the credential list under a specified AgentTeams instance with paging, returning credential summary information and the number of Workers attached to each credential.
     *
     * @remarks
     * Queries the credential list under a specified AgentTeams instance with paging, returning credential summary information and the number of Workers attached to each credential.
     *
     * @param request - ListCredentialsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListCredentialsResponse
     *
     * @param ListCredentialsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ListCredentialsResponse
     */
    public function listCredentialsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nameLike) {
            @$query['NameLike'] = $request->nameLike;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListCredentials',
            'version' => '2026-06-05',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListCredentialsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the credential list under a specified AgentTeams instance with paging, returning credential summary information and the number of Workers attached to each credential.
     *
     * @remarks
     * Queries the credential list under a specified AgentTeams instance with paging, returning credential summary information and the number of Workers attached to each credential.
     *
     * @param request - ListCredentialsRequest
     *
     * @returns ListCredentialsResponse
     *
     * @param ListCredentialsRequest $request
     *
     * @return ListCredentialsResponse
     */
    public function listCredentials($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listCredentialsWithOptions($request, $runtime);
    }

    /**
     * Queries the list of upstream identity provider bindings for a specified instance, with support for paginated responses.
     *
     * @remarks
     * Queries the list of upstream identity provider bindings for a specified instance, with support for paginated responses.
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
            'action' => 'ListIdentityProviders',
            'version' => '2026-06-05',
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
     * Queries the list of upstream identity provider bindings for a specified instance, with support for paginated responses.
     *
     * @remarks
     * Queries the list of upstream identity provider bindings for a specified instance, with support for paginated responses.
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
     * Queries a list of instances that meet the specified conditions. Supports pagination and fuzzy match. Supports GET and POST methods. The list is returned in reverse chronological order by creation time.
     *
     * @remarks
     * Queries a list of instances that meet the specified conditions. Supports pagination and fuzzy match. Supports GET and POST methods. The list is returned in reverse chronological order by creation time.
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
        if (null !== $request->instanceName) {
            @$query['InstanceName'] = $request->instanceName;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->skip) {
            @$query['Skip'] = $request->skip;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListInstances',
            'version' => '2026-06-05',
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
     * Queries a list of instances that meet the specified conditions. Supports pagination and fuzzy match. Supports GET and POST methods. The list is returned in reverse chronological order by creation time.
     *
     * @remarks
     * Queries a list of instances that meet the specified conditions. Supports pagination and fuzzy match. Supports GET and POST methods. The list is returned in reverse chronological order by creation time.
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
     * Queries the list of tools provided by a specified MCP server, including tool names, titles, descriptions, and input schemas.
     *
     * @remarks
     * Queries the list of tools provided by a specified MCP server, including tool names, titles, descriptions, and input schemas.
     *
     * @param request - ListMcpToolsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListMcpToolsResponse
     *
     * @param ListMcpToolsRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ListMcpToolsResponse
     */
    public function listMcpToolsWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->id) {
            @$body['Id'] = $request->id;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListMcpTools',
            'version' => '2026-06-05',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListMcpToolsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the list of tools provided by a specified MCP server, including tool names, titles, descriptions, and input schemas.
     *
     * @remarks
     * Queries the list of tools provided by a specified MCP server, including tool names, titles, descriptions, and input schemas.
     *
     * @param request - ListMcpToolsRequest
     *
     * @returns ListMcpToolsResponse
     *
     * @param ListMcpToolsRequest $request
     *
     * @return ListMcpToolsResponse
     */
    public function listMcpTools($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listMcpToolsWithOptions($request, $runtime);
    }

    /**
     * Queries the MCP server list under a specified AgentTeams instance by using paging.
     *
     * @remarks
     * Queries the MCP server list under a specified AgentTeams instance by using paging.
     *
     * @param request - ListMcpsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListMcpsResponse
     *
     * @param ListMcpsRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return ListMcpsResponse
     */
    public function listMcpsWithOptions($request, $runtime)
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

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListMcps',
            'version' => '2026-06-05',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListMcpsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the MCP server list under a specified AgentTeams instance by using paging.
     *
     * @remarks
     * Queries the MCP server list under a specified AgentTeams instance by using paging.
     *
     * @param request - ListMcpsRequest
     *
     * @returns ListMcpsResponse
     *
     * @param ListMcpsRequest $request
     *
     * @return ListMcpsResponse
     */
    public function listMcps($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listMcpsWithOptions($request, $runtime);
    }

    /**
     * Queries the list of AI model providers under a specified AgentTeams instance. Paging is supported.
     *
     * @remarks
     * Queries the list of AI model providers under a specified AgentTeams instance. Paging is supported.
     *
     * @param request - ListModelProvidersRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListModelProvidersResponse
     *
     * @param ListModelProvidersRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ListModelProvidersResponse
     */
    public function listModelProvidersWithOptions($request, $runtime)
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

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListModelProviders',
            'version' => '2026-06-05',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListModelProvidersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the list of AI model providers under a specified AgentTeams instance. Paging is supported.
     *
     * @remarks
     * Queries the list of AI model providers under a specified AgentTeams instance. Paging is supported.
     *
     * @param request - ListModelProvidersRequest
     *
     * @returns ListModelProvidersResponse
     *
     * @param ListModelProvidersRequest $request
     *
     * @return ListModelProvidersResponse
     */
    public function listModelProviders($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listModelProvidersWithOptions($request, $runtime);
    }

    /**
     * Queries the list of AI models under a specified AgentTeams instance. You can filter results by model name or provider name, and paging is supported.
     *
     * @remarks
     * Queries the list of AI models under a specified AgentTeams instance. You can filter results by model name or provider name, and paging is supported.
     *
     * @param request - ListModelsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListModelsResponse
     *
     * @param ListModelsRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return ListModelsResponse
     */
    public function listModelsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->providerName) {
            @$query['ProviderName'] = $request->providerName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListModels',
            'version' => '2026-06-05',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListModelsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the list of AI models under a specified AgentTeams instance. You can filter results by model name or provider name, and paging is supported.
     *
     * @remarks
     * Queries the list of AI models under a specified AgentTeams instance. You can filter results by model name or provider name, and paging is supported.
     *
     * @param request - ListModelsRequest
     *
     * @returns ListModelsResponse
     *
     * @param ListModelsRequest $request
     *
     * @return ListModelsResponse
     */
    public function listModels($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listModelsWithOptions($request, $runtime);
    }

    /**
     * Queries the list of AI gateway endpoints under a specified instance.
     *
     * @remarks
     * This API queries the list of AI gateway endpoints under a specified instance.
     * - instanceId is a required parameter that specifies the AgentTeams instance ID.
     * - Optional parameters include component, serviceName, networkType, and domainType, which are used to further filter the returned endpoint list.
     * - Filtering by the status parameter is not supported.
     *
     * @param request - ListServiceEndpointsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListServiceEndpointsResponse
     *
     * @param ListServiceEndpointsRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ListServiceEndpointsResponse
     */
    public function listServiceEndpointsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->component) {
            @$query['Component'] = $request->component;
        }

        if (null !== $request->domainType) {
            @$query['DomainType'] = $request->domainType;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->networkType) {
            @$query['NetworkType'] = $request->networkType;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->resourceName) {
            @$query['ResourceName'] = $request->resourceName;
        }

        if (null !== $request->skip) {
            @$query['Skip'] = $request->skip;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListServiceEndpoints',
            'version' => '2026-06-05',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListServiceEndpointsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the list of AI gateway endpoints under a specified instance.
     *
     * @remarks
     * This API queries the list of AI gateway endpoints under a specified instance.
     * - instanceId is a required parameter that specifies the AgentTeams instance ID.
     * - Optional parameters include component, serviceName, networkType, and domainType, which are used to further filter the returned endpoint list.
     * - Filtering by the status parameter is not supported.
     *
     * @param request - ListServiceEndpointsRequest
     *
     * @returns ListServiceEndpointsResponse
     *
     * @param ListServiceEndpointsRequest $request
     *
     * @return ListServiceEndpointsResponse
     */
    public function listServiceEndpoints($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listServiceEndpointsWithOptions($request, $runtime);
    }

    /**
     * Queries the list of SSL certificates available to the user in APIG.
     *
     * @remarks
     * Queries the list of SSL certificates available to the user in APIG.
     * - This API retrieves the list of SSL certificates associated with a specified AgentTeams instance.
     * - The pagination parameters MaxResults and NextToken allow the client to control the number of returned results and retrieve the next page of data.
     * - A successful response includes the request ID, success flag, error code, next page token, total certificate count, and the certificate details list.
     *
     * @param request - ListSslCertsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListSslCertsResponse
     *
     * @param ListSslCertsRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ListSslCertsResponse
     */
    public function listSslCertsWithOptions($request, $runtime)
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

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListSslCerts',
            'version' => '2026-06-05',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListSslCertsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the list of SSL certificates available to the user in APIG.
     *
     * @remarks
     * Queries the list of SSL certificates available to the user in APIG.
     * - This API retrieves the list of SSL certificates associated with a specified AgentTeams instance.
     * - The pagination parameters MaxResults and NextToken allow the client to control the number of returned results and retrieve the next page of data.
     * - A successful response includes the request ID, success flag, error code, next page token, total certificate count, and the certificate details list.
     *
     * @param request - ListSslCertsRequest
     *
     * @returns ListSslCertsResponse
     *
     * @param ListSslCertsRequest $request
     *
     * @return ListSslCertsResponse
     */
    public function listSslCerts($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSslCertsWithOptions($request, $runtime);
    }

    /**
     * Queries the statistical details of teams under a specified instance, including aggregate metrics such as the number of workers, number of tasks, success rate, and token usage for each team.
     *
     * @remarks
     * Queries the statistical details of teams under a specified instance, including aggregate metrics such as the number of workers, number of tasks, success rate, and token usage for each team.
     *
     * @param request - ListTeamDetailsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListTeamDetailsResponse
     *
     * @param ListTeamDetailsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ListTeamDetailsResponse
     */
    public function listTeamDetailsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
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

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListTeamDetails',
            'version' => '2026-06-05',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListTeamDetailsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the statistical details of teams under a specified instance, including aggregate metrics such as the number of workers, number of tasks, success rate, and token usage for each team.
     *
     * @remarks
     * Queries the statistical details of teams under a specified instance, including aggregate metrics such as the number of workers, number of tasks, success rate, and token usage for each team.
     *
     * @param request - ListTeamDetailsRequest
     *
     * @returns ListTeamDetailsResponse
     *
     * @param ListTeamDetailsRequest $request
     *
     * @return ListTeamDetailsResponse
     */
    public function listTeamDetails($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTeamDetailsWithOptions($request, $runtime);
    }

    /**
     * Queries the task list of a specified team under a specified instance. The task metadata is sourced from the OSS bucket bound to the instance.
     *
     * @remarks
     * Queries the task list of a specified team under a specified instance. The task metadata is sourced from the OSS bucket bound to the instance.
     *
     * @param request - ListTeamTasksRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListTeamTasksResponse
     *
     * @param ListTeamTasksRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ListTeamTasksResponse
     */
    public function listTeamTasksWithOptions($request, $runtime)
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

        if (null !== $request->team) {
            @$query['Team'] = $request->team;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListTeamTasks',
            'version' => '2026-06-05',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListTeamTasksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the task list of a specified team under a specified instance. The task metadata is sourced from the OSS bucket bound to the instance.
     *
     * @remarks
     * Queries the task list of a specified team under a specified instance. The task metadata is sourced from the OSS bucket bound to the instance.
     *
     * @param request - ListTeamTasksRequest
     *
     * @returns ListTeamTasksResponse
     *
     * @param ListTeamTasksRequest $request
     *
     * @return ListTeamTasksResponse
     */
    public function listTeamTasks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTeamTasksWithOptions($request, $runtime);
    }

    /**
     * Queries the list of teams under a specified instance, with support for fuzzy filtering by name and pagination.
     *
     * @remarks
     * Queries the list of teams under a specified instance, with support for fuzzy filtering by name and pagination.
     *
     * @param request - ListTeamsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListTeamsResponse
     *
     * @param ListTeamsRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return ListTeamsResponse
     */
    public function listTeamsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nameLike) {
            @$query['NameLike'] = $request->nameLike;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListTeams',
            'version' => '2026-06-05',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListTeamsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the list of teams under a specified instance, with support for fuzzy filtering by name and pagination.
     *
     * @remarks
     * Queries the list of teams under a specified instance, with support for fuzzy filtering by name and pagination.
     *
     * @param request - ListTeamsRequest
     *
     * @returns ListTeamsResponse
     *
     * @param ListTeamsRequest $request
     *
     * @return ListTeamsResponse
     */
    public function listTeams($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTeamsWithOptions($request, $runtime);
    }

    /**
     * Queries the list of users under a specified instance. Supports fuzzy match by username and paging query. The list is returned in reverse chronological order by creation time.
     *
     * @remarks
     * Queries the list of users under a specified instance. Supports fuzzy match by username and paging query. The list is returned in reverse chronological order by creation time.
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
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nameLike) {
            @$query['NameLike'] = $request->nameLike;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListUsers',
            'version' => '2026-06-05',
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
     * Queries the list of users under a specified instance. Supports fuzzy match by username and paging query. The list is returned in reverse chronological order by creation time.
     *
     * @remarks
     * Queries the list of users under a specified instance. Supports fuzzy match by username and paging query. The list is returned in reverse chronological order by creation time.
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
     * Queries a list of Worker statistics details by paging, including task count, token usage, and LLM call count.
     *
     * @remarks
     * Queries a list of Worker statistics details by paging, including task count, token usage, and LLM call count.
     *
     * @param request - ListWorkerStatsDetailsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListWorkerStatsDetailsResponse
     *
     * @param ListWorkerStatsDetailsRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ListWorkerStatsDetailsResponse
     */
    public function listWorkerStatsDetailsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
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

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListWorkerStatsDetails',
            'version' => '2026-06-05',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListWorkerStatsDetailsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of Worker statistics details by paging, including task count, token usage, and LLM call count.
     *
     * @remarks
     * Queries a list of Worker statistics details by paging, including task count, token usage, and LLM call count.
     *
     * @param request - ListWorkerStatsDetailsRequest
     *
     * @returns ListWorkerStatsDetailsResponse
     *
     * @param ListWorkerStatsDetailsRequest $request
     *
     * @return ListWorkerStatsDetailsResponse
     */
    public function listWorkerStatsDetails($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listWorkerStatsDetailsWithOptions($request, $runtime);
    }

    /**
     * Queries the list of Workers under a specified instance by using paging, with support for filtering by name, model, template, and other conditions.
     *
     * @remarks
     * Queries the list of Workers under a specified instance by using paging, with support for filtering by name, model, template, and other conditions.
     *
     * @param tmpReq - ListWorkersRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListWorkersResponse
     *
     * @param ListWorkersRequest $tmpReq
     * @param RuntimeOptions     $runtime
     *
     * @return ListWorkersResponse
     */
    public function listWorkersWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ListWorkersShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->group) {
            $request->groupShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->group, 'Group', 'json');
        }

        if (null !== $tmpReq->template) {
            $request->templateShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->template, 'Template', 'json');
        }

        $query = [];
        if (null !== $request->agentType) {
            @$query['AgentType'] = $request->agentType;
        }

        if (null !== $request->credential) {
            @$query['Credential'] = $request->credential;
        }

        if (null !== $request->groupShrink) {
            @$query['Group'] = $request->groupShrink;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->mcp) {
            @$query['Mcp'] = $request->mcp;
        }

        if (null !== $request->modelName) {
            @$query['ModelName'] = $request->modelName;
        }

        if (null !== $request->modelProvider) {
            @$query['ModelProvider'] = $request->modelProvider;
        }

        if (null !== $request->nameLike) {
            @$query['NameLike'] = $request->nameLike;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->templateShrink) {
            @$query['Template'] = $request->templateShrink;
        }

        if (null !== $request->versionCode) {
            @$query['VersionCode'] = $request->versionCode;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListWorkers',
            'version' => '2026-06-05',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListWorkersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the list of Workers under a specified instance by using paging, with support for filtering by name, model, template, and other conditions.
     *
     * @remarks
     * Queries the list of Workers under a specified instance by using paging, with support for filtering by name, model, template, and other conditions.
     *
     * @param request - ListWorkersRequest
     *
     * @returns ListWorkersResponse
     *
     * @param ListWorkersRequest $request
     *
     * @return ListWorkersResponse
     */
    public function listWorkers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listWorkersWithOptions($request, $runtime);
    }

    /**
     * Creates or updates a CMS workspace.
     *
     * @remarks
     * Creates or updates a CMS workspace.
     *
     * @param request - PutCmsWorkspaceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PutCmsWorkspaceResponse
     *
     * @param PutCmsWorkspaceRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return PutCmsWorkspaceResponse
     */
    public function putCmsWorkspaceWithOptions($request, $runtime)
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
            'action' => 'PutCmsWorkspace',
            'version' => '2026-06-05',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return PutCmsWorkspaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates or updates a CMS workspace.
     *
     * @remarks
     * Creates or updates a CMS workspace.
     *
     * @param request - PutCmsWorkspaceRequest
     *
     * @returns PutCmsWorkspaceResponse
     *
     * @param PutCmsWorkspaceRequest $request
     *
     * @return PutCmsWorkspaceResponse
     */
    public function putCmsWorkspace($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->putCmsWorkspaceWithOptions($request, $runtime);
    }

    /**
     * Queries the attribute status of a specified instance, worker, team, or individual.
     *
     * @remarks
     * Queries the feature status of a specified instance, worker, team, or individual.
     * - This operation queries the feature status of different targets (such as INSTANCE, WORKER, TEAM, or HUMAN) under a specific instanceId.
     * - The targetScope parameter defines the target type for the query. Depending on the targetScope value, you may need to provide an additional resourceName parameter to specify the resource name.
     * - If a featureCodes list is provided, the status of those specific features is returned. Otherwise, the status of all features under the specified targetScope is returned.
     * - When using WORKER, TEAM, or HUMAN as the targetScope, make sure to correctly specify the corresponding resourceName.
     * - For INSTANCE-level queries, resourceName is not required.
     * - Feature support is affected by factors such as the base version and worker version. The unsupportedReasonCode and unsupportedReason fields provide the specific reason why a feature is not supported.
     *
     * @param request - QueryFeaturesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryFeaturesResponse
     *
     * @param QueryFeaturesRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return QueryFeaturesResponse
     */
    public function queryFeaturesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->resourceName) {
            @$query['ResourceName'] = $request->resourceName;
        }

        if (null !== $request->targetScope) {
            @$query['TargetScope'] = $request->targetScope;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryFeatures',
            'version' => '2026-06-05',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryFeaturesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the attribute status of a specified instance, worker, team, or individual.
     *
     * @remarks
     * Queries the feature status of a specified instance, worker, team, or individual.
     * - This operation queries the feature status of different targets (such as INSTANCE, WORKER, TEAM, or HUMAN) under a specific instanceId.
     * - The targetScope parameter defines the target type for the query. Depending on the targetScope value, you may need to provide an additional resourceName parameter to specify the resource name.
     * - If a featureCodes list is provided, the status of those specific features is returned. Otherwise, the status of all features under the specified targetScope is returned.
     * - When using WORKER, TEAM, or HUMAN as the targetScope, make sure to correctly specify the corresponding resourceName.
     * - For INSTANCE-level queries, resourceName is not required.
     * - Feature support is affected by factors such as the base version and worker version. The unsupportedReasonCode and unsupportedReason fields provide the specific reason why a feature is not supported.
     *
     * @param request - QueryFeaturesRequest
     *
     * @returns QueryFeaturesResponse
     *
     * @param QueryFeaturesRequest $request
     *
     * @return QueryFeaturesResponse
     */
    public function queryFeatures($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryFeaturesWithOptions($request, $runtime);
    }

    /**
     * Retrieves all zone IDs supported by the current AgentTeams Resource Pool configuration.
     *
     * @remarks
     * Retrieves all zone IDs supported by the current AgentTeams Resource Pool configuration.
     *
     * @param request - QuerySupportedZonesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QuerySupportedZonesResponse
     *
     * @param QuerySupportedZonesRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return QuerySupportedZonesResponse
     */
    public function querySupportedZonesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
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
            'action' => 'QuerySupportedZones',
            'version' => '2026-06-05',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QuerySupportedZonesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves all zone IDs supported by the current AgentTeams Resource Pool configuration.
     *
     * @remarks
     * Retrieves all zone IDs supported by the current AgentTeams Resource Pool configuration.
     *
     * @param request - QuerySupportedZonesRequest
     *
     * @returns QuerySupportedZonesResponse
     *
     * @param QuerySupportedZonesRequest $request
     *
     * @return QuerySupportedZonesResponse
     */
    public function querySupportedZones($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->querySupportedZonesWithOptions($request, $runtime);
    }

    /**
     * Resets the password of a specified user under a specified instance. After the reset, the user must log on with the new password.
     *
     * @remarks
     * Resets the password of a specified user under a specified instance. After the reset, the user must log on with the new password.
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
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->password) {
            @$query['Password'] = $request->password;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ResetUserPassword',
            'version' => '2026-06-05',
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
     * Resets the password of a specified user under a specified instance. After the reset, the user must log on with the new password.
     *
     * @remarks
     * Resets the password of a specified user under a specified instance. After the reset, the user must log on with the new password.
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
     * Tests the connectivity of an AI model provider and model under a specified AgentTeams instance by sending a test prompt and returning the call result, latency, and token usage.
     *
     * @remarks
     * Tests the connectivity of an AI model provider and model under a specified AgentTeams instance by sending a test prompt and returning the call result, latency, and token usage.
     *
     * @param request - TestModelProviderRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns TestModelProviderResponse
     *
     * @param TestModelProviderRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return TestModelProviderResponse
     */
    public function testModelProviderWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->modelName) {
            @$body['ModelName'] = $request->modelName;
        }

        if (null !== $request->prompt) {
            @$body['Prompt'] = $request->prompt;
        }

        if (null !== $request->providerId) {
            @$body['ProviderId'] = $request->providerId;
        }

        if (null !== $request->providerName) {
            @$body['ProviderName'] = $request->providerName;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'TestModelProvider',
            'version' => '2026-06-05',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return TestModelProviderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Tests the connectivity of an AI model provider and model under a specified AgentTeams instance by sending a test prompt and returning the call result, latency, and token usage.
     *
     * @remarks
     * Tests the connectivity of an AI model provider and model under a specified AgentTeams instance by sending a test prompt and returning the call result, latency, and token usage.
     *
     * @param request - TestModelProviderRequest
     *
     * @returns TestModelProviderResponse
     *
     * @param TestModelProviderRequest $request
     *
     * @return TestModelProviderResponse
     */
    public function testModelProvider($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->testModelProviderWithOptions($request, $runtime);
    }

    /**
     * Unbinds the upstream identity provider from a specified instance, dissociates the identity federation relationship, and cleans up associated user identities and data.
     *
     * @remarks
     * Unbinds the upstream identity provider from a specified instance, dissociates the identity federation relationship, and cleans up associated user identities and data.
     *
     * @param request - UnbindIdentityProviderRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UnbindIdentityProviderResponse
     *
     * @param UnbindIdentityProviderRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return UnbindIdentityProviderResponse
     */
    public function unbindIdentityProviderWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->identityProviderType) {
            @$query['IdentityProviderType'] = $request->identityProviderType;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UnbindIdentityProvider',
            'version' => '2026-06-05',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UnbindIdentityProviderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Unbinds the upstream identity provider from a specified instance, dissociates the identity federation relationship, and cleans up associated user identities and data.
     *
     * @remarks
     * Unbinds the upstream identity provider from a specified instance, dissociates the identity federation relationship, and cleans up associated user identities and data.
     *
     * @param request - UnbindIdentityProviderRequest
     *
     * @returns UnbindIdentityProviderResponse
     *
     * @param UnbindIdentityProviderRequest $request
     *
     * @return UnbindIdentityProviderResponse
     */
    public function unbindIdentityProvider($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->unbindIdentityProviderWithOptions($request, $runtime);
    }

    /**
     * Updates the plaintext key of an existing credential in an AgentTeams instance.
     *
     * @remarks
     * Updates the plaintext key of an existing credential in an AgentTeams instance.
     * - This operation updates the plaintext key of an existing Credential in an AgentTeams instance.
     * - Only the key value of the APIKeyCredentialProvider with the same name in the Agent Identity TokenVault is updated. Local metadata (description, createTime, updateTime, and status) is not modified.
     * - The response does not contain the apiKey plaintext. To obtain Worker details, call GetCredential.
     *
     * @param request - UpdateCredentialRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateCredentialResponse
     *
     * @param UpdateCredentialRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return UpdateCredentialResponse
     */
    public function updateCredentialWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        $body = [];
        if (null !== $request->apiKey) {
            @$body['ApiKey'] = $request->apiKey;
        }

        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateCredential',
            'version' => '2026-06-05',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateCredentialResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the plaintext key of an existing credential in an AgentTeams instance.
     *
     * @remarks
     * Updates the plaintext key of an existing credential in an AgentTeams instance.
     * - This operation updates the plaintext key of an existing Credential in an AgentTeams instance.
     * - Only the key value of the APIKeyCredentialProvider with the same name in the Agent Identity TokenVault is updated. Local metadata (description, createTime, updateTime, and status) is not modified.
     * - The response does not contain the apiKey plaintext. To obtain Worker details, call GetCredential.
     *
     * @param request - UpdateCredentialRequest
     *
     * @returns UpdateCredentialResponse
     *
     * @param UpdateCredentialRequest $request
     *
     * @return UpdateCredentialResponse
     */
    public function updateCredential($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateCredentialWithOptions($request, $runtime);
    }

    /**
     * Updates the upstream identity provider configuration bound to a specified instance. You can adjust the logon switch and user synchronization switch.
     *
     * @remarks
     * Updates the upstream identity provider configuration bound to a specified instance. You can adjust the logon switch and user synchronization switch.
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
        if (null !== $request->identityProviderType) {
            @$query['IdentityProviderType'] = $request->identityProviderType;
        }

        if (null !== $request->idpMetadata) {
            @$query['IdpMetadata'] = $request->idpMetadata;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->loginEnabled) {
            @$query['LoginEnabled'] = $request->loginEnabled;
        }

        if (null !== $request->syncEnabled) {
            @$query['SyncEnabled'] = $request->syncEnabled;
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
            'action' => 'UpdateIdentityProvider',
            'version' => '2026-06-05',
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
     * Updates the upstream identity provider configuration bound to a specified instance. You can adjust the logon switch and user synchronization switch.
     *
     * @remarks
     * Updates the upstream identity provider configuration bound to a specified instance. You can adjust the logon switch and user synchronization switch.
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
     * Changes the name of a specified AgentTeams instance. This operation supports GET and POST methods. You can only modify the instance name through this operation. You cannot change the namespace through this operation.
     *
     * @remarks
     * Changes the name of a specified AgentTeams instance. This operation supports GET and POST methods. You can only modify the instance name through this operation. You cannot change the namespace through this operation.
     *
     * @param tmpReq - UpdateInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateInstanceResponse
     *
     * @param UpdateInstanceRequest $tmpReq
     * @param RuntimeOptions        $runtime
     *
     * @return UpdateInstanceResponse
     */
    public function updateInstanceWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateInstanceShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->zones) {
            $request->zonesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->zones, 'Zones', 'json');
        }

        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->instanceName) {
            @$query['InstanceName'] = $request->instanceName;
        }

        if (null !== $request->networkType) {
            @$query['NetworkType'] = $request->networkType;
        }

        if (null !== $request->zonesShrink) {
            @$query['Zones'] = $request->zonesShrink;
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
            'action' => 'UpdateInstance',
            'version' => '2026-06-05',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Changes the name of a specified AgentTeams instance. This operation supports GET and POST methods. You can only modify the instance name through this operation. You cannot change the namespace through this operation.
     *
     * @remarks
     * Changes the name of a specified AgentTeams instance. This operation supports GET and POST methods. You can only modify the instance name through this operation. You cannot change the namespace through this operation.
     *
     * @param request - UpdateInstanceRequest
     *
     * @returns UpdateInstanceResponse
     *
     * @param UpdateInstanceRequest $request
     *
     * @return UpdateInstanceResponse
     */
    public function updateInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateInstanceWithOptions($request, $runtime);
    }

    /**
     * Restarts a paused asynchronous task for creating an instance.
     *
     * @remarks
     * Restarts a paused asynchronous task for creating an instance.
     * - This operation restarts a create-instance task that is in the paused state.
     * - Only tasks of the agentteams:pay-order:create type are supported.
     * - Ensure that the InstanceId, TaskCode, and TaskId parameters are accurate. Otherwise, the request may fail.
     * - If the task is not in the paused state (PAUSED), you cannot call this operation to update the task.
     *
     * @param request - UpdateInstanceAsyncTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateInstanceAsyncTaskResponse
     *
     * @param UpdateInstanceAsyncTaskRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return UpdateInstanceAsyncTaskResponse
     */
    public function updateInstanceAsyncTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->isResume) {
            @$query['IsResume'] = $request->isResume;
        }

        if (null !== $request->taskCode) {
            @$query['TaskCode'] = $request->taskCode;
        }

        if (null !== $request->taskId) {
            @$query['TaskId'] = $request->taskId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateInstanceAsyncTask',
            'version' => '2026-06-05',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateInstanceAsyncTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Restarts a paused asynchronous task for creating an instance.
     *
     * @remarks
     * Restarts a paused asynchronous task for creating an instance.
     * - This operation restarts a create-instance task that is in the paused state.
     * - Only tasks of the agentteams:pay-order:create type are supported.
     * - Ensure that the InstanceId, TaskCode, and TaskId parameters are accurate. Otherwise, the request may fail.
     * - If the task is not in the paused state (PAUSED), you cannot call this operation to update the task.
     *
     * @param request - UpdateInstanceAsyncTaskRequest
     *
     * @returns UpdateInstanceAsyncTaskResponse
     *
     * @param UpdateInstanceAsyncTaskRequest $request
     *
     * @return UpdateInstanceAsyncTaskResponse
     */
    public function updateInstanceAsyncTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateInstanceAsyncTaskWithOptions($request, $runtime);
    }

    /**
     * Updates the configuration of a specified MCP server, including the address list, authentication information, and description.
     *
     * @remarks
     * Updates the configuration of a specified MCP server, including the address list, authentication information, and description.
     *
     * @param tmpReq - UpdateMcpRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateMcpResponse
     *
     * @param UpdateMcpRequest $tmpReq
     * @param RuntimeOptions   $runtime
     *
     * @return UpdateMcpResponse
     */
    public function updateMcpWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateMcpShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->addresses) {
            $request->addressesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->addresses, 'Addresses', 'json');
        }

        $body = [];
        if (null !== $request->addressesShrink) {
            @$body['Addresses'] = $request->addressesShrink;
        }

        if (null !== $request->authConfig) {
            @$body['AuthConfig'] = $request->authConfig;
        }

        if (null !== $request->authEnabled) {
            @$body['AuthEnabled'] = $request->authEnabled;
        }

        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->createType) {
            @$body['CreateType'] = $request->createType;
        }

        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->id) {
            @$body['Id'] = $request->id;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->swaggerConfig) {
            @$body['SwaggerConfig'] = $request->swaggerConfig;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateMcp',
            'version' => '2026-06-05',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateMcpResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the configuration of a specified MCP server, including the address list, authentication information, and description.
     *
     * @remarks
     * Updates the configuration of a specified MCP server, including the address list, authentication information, and description.
     *
     * @param request - UpdateMcpRequest
     *
     * @returns UpdateMcpResponse
     *
     * @param UpdateMcpRequest $request
     *
     * @return UpdateMcpResponse
     */
    public function updateMcp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateMcpWithOptions($request, $runtime);
    }

    /**
     * Updates the description and other information of an AI model in a specified AgentTeams instance.
     *
     * @remarks
     * Updates the description and other information of an AI model in a specified AgentTeams instance.
     *
     * @param request - UpdateModelRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateModelResponse
     *
     * @param UpdateModelRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return UpdateModelResponse
     */
    public function updateModelWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->id) {
            @$body['Id'] = $request->id;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateModel',
            'version' => '2026-06-05',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateModelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the description and other information of an AI model in a specified AgentTeams instance.
     *
     * @remarks
     * Updates the description and other information of an AI model in a specified AgentTeams instance.
     *
     * @param request - UpdateModelRequest
     *
     * @returns UpdateModelResponse
     *
     * @param UpdateModelRequest $request
     *
     * @return UpdateModelResponse
     */
    public function updateModel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateModelWithOptions($request, $runtime);
    }

    /**
     * Updates the address, protocol list, API key, and other information of an AI model provider in a specified AgentTeams instance.
     *
     * @remarks
     * Updates the address, protocol list, API key, and other information of an AI model provider in a specified AgentTeams instance.
     *
     * @param tmpReq - UpdateModelProviderRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateModelProviderResponse
     *
     * @param UpdateModelProviderRequest $tmpReq
     * @param RuntimeOptions             $runtime
     *
     * @return UpdateModelProviderResponse
     */
    public function updateModelProviderWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateModelProviderShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->apiKeys) {
            $request->apiKeysShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->apiKeys, 'ApiKeys', 'json');
        }

        if (null !== $tmpReq->protocols) {
            $request->protocolsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->protocols, 'Protocols', 'json');
        }

        $body = [];
        if (null !== $request->address) {
            @$body['Address'] = $request->address;
        }

        if (null !== $request->apiKeysShrink) {
            @$body['ApiKeys'] = $request->apiKeysShrink;
        }

        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->id) {
            @$body['Id'] = $request->id;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->protocolsShrink) {
            @$body['Protocols'] = $request->protocolsShrink;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateModelProvider',
            'version' => '2026-06-05',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateModelProviderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the address, protocol list, API key, and other information of an AI model provider in a specified AgentTeams instance.
     *
     * @remarks
     * Updates the address, protocol list, API key, and other information of an AI model provider in a specified AgentTeams instance.
     *
     * @param request - UpdateModelProviderRequest
     *
     * @returns UpdateModelProviderResponse
     *
     * @param UpdateModelProviderRequest $request
     *
     * @return UpdateModelProviderResponse
     */
    public function updateModelProvider($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateModelProviderWithOptions($request, $runtime);
    }

    /**
     * Updates the domain name and SSL certificate information for a specified endpoint.
     *
     * @remarks
     * Updates the domain name and SSL certificate information for a specified endpoint.
     * - This API operation supports updating endpoints of the ELEMENT or MATRIX type.
     * - If you attempt to update an endpoint of another type, a 400 error is returned.
     * - If the endpointId does not exist or does not belong to the current user instance, a 404 error is returned.
     * - When updating a domain name, the system creates or reuses a new HTTPS domain and binds it to the original endpoint route. The old domain is unbound but not deleted.
     * - If the domain or certIdentifier parameter is not specified, the existing settings are retained.
     * - Other fields such as component and gatewayType are not updated even if they are specified in the request.
     *
     * @param request - UpdateServiceEndpointRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateServiceEndpointResponse
     *
     * @param UpdateServiceEndpointRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return UpdateServiceEndpointResponse
     */
    public function updateServiceEndpointWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->certIdentifier) {
            @$query['CertIdentifier'] = $request->certIdentifier;
        }

        if (null !== $request->domain) {
            @$query['Domain'] = $request->domain;
        }

        if (null !== $request->endpointId) {
            @$query['EndpointId'] = $request->endpointId;
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
            'action' => 'UpdateServiceEndpoint',
            'version' => '2026-06-05',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateServiceEndpointResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the domain name and SSL certificate information for a specified endpoint.
     *
     * @remarks
     * Updates the domain name and SSL certificate information for a specified endpoint.
     * - This API operation supports updating endpoints of the ELEMENT or MATRIX type.
     * - If you attempt to update an endpoint of another type, a 400 error is returned.
     * - If the endpointId does not exist or does not belong to the current user instance, a 404 error is returned.
     * - When updating a domain name, the system creates or reuses a new HTTPS domain and binds it to the original endpoint route. The old domain is unbound but not deleted.
     * - If the domain or certIdentifier parameter is not specified, the existing settings are retained.
     * - Other fields such as component and gatewayType are not updated even if they are specified in the request.
     *
     * @param request - UpdateServiceEndpointRequest
     *
     * @returns UpdateServiceEndpointResponse
     *
     * @param UpdateServiceEndpointRequest $request
     *
     * @return UpdateServiceEndpointResponse
     */
    public function updateServiceEndpoint($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateServiceEndpointWithOptions($request, $runtime);
    }

    /**
     * Updates the description and member list of a team under a specified instance, and returns the latest team information after the update.
     *
     * @remarks
     * Updates the description and member list of a team under a specified instance, and returns the latest team information after the update.
     *
     * @param tmpReq - UpdateTeamRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateTeamResponse
     *
     * @param UpdateTeamRequest $tmpReq
     * @param RuntimeOptions    $runtime
     *
     * @return UpdateTeamResponse
     */
    public function updateTeamWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateTeamShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->teamMembers) {
            $request->teamMembersShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->teamMembers, 'TeamMembers', 'json');
        }

        $query = [];
        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->teamMembersShrink) {
            @$query['TeamMembers'] = $request->teamMembersShrink;
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
            'action' => 'UpdateTeam',
            'version' => '2026-06-05',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateTeamResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the description and member list of a team under a specified instance, and returns the latest team information after the update.
     *
     * @remarks
     * Updates the description and member list of a team under a specified instance, and returns the latest team information after the update.
     *
     * @param request - UpdateTeamRequest
     *
     * @returns UpdateTeamResponse
     *
     * @param UpdateTeamRequest $request
     *
     * @return UpdateTeamResponse
     */
    public function updateTeam($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateTeamWithOptions($request, $runtime);
    }

    /**
     * Updates the information of a specified user under a specified instance, including the display name, email address, authentication method, and remarks.
     *
     * @remarks
     * Updates the information of a specified user under a specified instance, including the display name, email address, authentication method, and remarks.
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
        if (null !== $request->authMethod) {
            @$query['AuthMethod'] = $request->authMethod;
        }

        if (null !== $request->displayName) {
            @$query['DisplayName'] = $request->displayName;
        }

        if (null !== $request->email) {
            @$query['Email'] = $request->email;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->note) {
            @$query['Note'] = $request->note;
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
            'action' => 'UpdateUser',
            'version' => '2026-06-05',
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
     * Updates the information of a specified user under a specified instance, including the display name, email address, authentication method, and remarks.
     *
     * @remarks
     * Updates the information of a specified user under a specified instance, including the display name, email address, authentication method, and remarks.
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
     * Updates the configuration of a specified Worker, including model, skills, template, MCP servers, channels, and quotas.
     *
     * @remarks
     * Updates the configuration of a specified Worker, including model, skills, template, MCP servers, channels, and quotas.
     *
     * @param tmpReq - UpdateWorkerRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateWorkerResponse
     *
     * @param UpdateWorkerRequest $tmpReq
     * @param RuntimeOptions      $runtime
     *
     * @return UpdateWorkerResponse
     */
    public function updateWorkerWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateWorkerShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->channels) {
            $request->channelsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->channels, 'Channels', 'json');
        }

        if (null !== $tmpReq->credentials) {
            $request->credentialsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->credentials, 'Credentials', 'json');
        }

        if (null !== $tmpReq->limitConfig) {
            $request->limitConfigShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->limitConfig, 'LimitConfig', 'json');
        }

        if (null !== $tmpReq->mcpServers) {
            $request->mcpServersShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->mcpServers, 'McpServers', 'json');
        }

        if (null !== $tmpReq->model) {
            $request->modelShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->model, 'Model', 'json');
        }

        if (null !== $tmpReq->skills) {
            $request->skillsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->skills, 'Skills', 'json');
        }

        if (null !== $tmpReq->template) {
            $request->templateShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->template, 'Template', 'json');
        }

        $query = [];
        if (null !== $request->agents) {
            @$query['Agents'] = $request->agents;
        }

        if (null !== $request->channelsShrink) {
            @$query['Channels'] = $request->channelsShrink;
        }

        if (null !== $request->credentialsShrink) {
            @$query['Credentials'] = $request->credentialsShrink;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->limitConfigShrink) {
            @$query['LimitConfig'] = $request->limitConfigShrink;
        }

        if (null !== $request->mcpServersShrink) {
            @$query['McpServers'] = $request->mcpServersShrink;
        }

        if (null !== $request->modelShrink) {
            @$query['Model'] = $request->modelShrink;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->skillsShrink) {
            @$query['Skills'] = $request->skillsShrink;
        }

        if (null !== $request->soul) {
            @$query['Soul'] = $request->soul;
        }

        if (null !== $request->templateShrink) {
            @$query['Template'] = $request->templateShrink;
        }

        if (null !== $request->versionCode) {
            @$query['VersionCode'] = $request->versionCode;
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
            'action' => 'UpdateWorker',
            'version' => '2026-06-05',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateWorkerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the configuration of a specified Worker, including model, skills, template, MCP servers, channels, and quotas.
     *
     * @remarks
     * Updates the configuration of a specified Worker, including model, skills, template, MCP servers, channels, and quotas.
     *
     * @param request - UpdateWorkerRequest
     *
     * @returns UpdateWorkerResponse
     *
     * @param UpdateWorkerRequest $request
     *
     * @return UpdateWorkerResponse
     */
    public function updateWorker($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateWorkerWithOptions($request, $runtime);
    }
}

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
        $this->_endpointRule = '';
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
     * 绑定上游身份提供商.
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
     * 绑定上游身份提供商.
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
     * 为指定AgentTeams实例异步开通并配置阿里云公网NAT网关。
     *
     * @remarks
     * ## 请求说明
     * - 本接口用于为特定的AgentTeams实例创建公网NAT网关，并自动完成EIP申请、绑定以及SNAT规则的设置。
     * - 接口调用后将返回一个异步任务ID，实际的NAT网关、EIP及SNAT资源ID会在异步任务完成后通过任务结果提供。
     * - NAT网关名称由系统自动生成，格式为`magic-create-for-vpc-{vpcId}`。
     * - 支持GET和POST方法进行请求。
     * - `eipBandwidth`参数指定了自动申请EIP时的带宽大小，默认值为5Mbps，范围在1-200Mbps之间。
     * - 如果`instanceId`为空或无效，或者提供的`eipBandwidth`不在允许范围内，API将返回错误响应。
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
     * 为指定AgentTeams实例异步开通并配置阿里云公网NAT网关。
     *
     * @remarks
     * ## 请求说明
     * - 本接口用于为特定的AgentTeams实例创建公网NAT网关，并自动完成EIP申请、绑定以及SNAT规则的设置。
     * - 接口调用后将返回一个异步任务ID，实际的NAT网关、EIP及SNAT资源ID会在异步任务完成后通过任务结果提供。
     * - NAT网关名称由系统自动生成，格式为`magic-create-for-vpc-{vpcId}`。
     * - 支持GET和POST方法进行请求。
     * - `eipBandwidth`参数指定了自动申请EIP时的带宽大小，默认值为5Mbps，范围在1-200Mbps之间。
     * - 如果`instanceId`为空或无效，或者提供的`eipBandwidth`不在允许范围内，API将返回错误响应。
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
     * 创建凭证
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
     * 创建凭证
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
     * 用于创建指定配置的集群实例。
     *
     * @remarks
     * ## 请求说明
     * - 本接口支持通过表单参数或 query 参数传递请求信息。
     * - `instanceSpec` 和 `networkType` 等部分参数有默认值，若未指定则使用默认值。
     * - 必须提供 `instanceName`, `regionId`, `vpcId`, 和 `vSwitchId` 参数。
     * - `networkType` 支持三种选项：`PRIVATE_PUBNET`, `PRIVATE_NET`, `PUB_NET`，默认为 `PRIVATE_NET`。
     * - 如果指定了 `zoneId`，则会尝试在该可用区创建实例；否则将根据系统策略选择合适的可用区。
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
     * 用于创建指定配置的集群实例。
     *
     * @remarks
     * ## 请求说明
     * - 本接口支持通过表单参数或 query 参数传递请求信息。
     * - `instanceSpec` 和 `networkType` 等部分参数有默认值，若未指定则使用默认值。
     * - 必须提供 `instanceName`, `regionId`, `vpcId`, 和 `vSwitchId` 参数。
     * - `networkType` 支持三种选项：`PRIVATE_PUBNET`, `PRIVATE_NET`, `PUB_NET`，默认为 `PRIVATE_NET`。
     * - 如果指定了 `zoneId`，则会尝试在该可用区创建实例；否则将根据系统策略选择合适的可用区。
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
     * 创建MCP.
     *
     * @remarks
     * ## 请求说明
     * - 该接口用于查询当前登录用户所拥有的所有AgentTeams实例。
     * - 用户身份通过请求头`X-User-Id`传递，服务端会根据此ID自动过滤只返回属于该用户的实例数据。
     * - 支持使用`instanceName`进行模糊匹配以及通过`status`参数精确匹配实例状态来过滤查询结果。
     * - 默认情况下，结果将按照创建时间倒序排列，并且可以通过设置`limit`和`offset`参数来进行分页控制，默认每页显示20条记录。
     * - 如果请求中缺少`X-User-Id`或者其值为空，则会返回400错误；如果指定的实例不存在或不属于当前用户，则返回404错误。
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
     * 创建MCP.
     *
     * @remarks
     * ## 请求说明
     * - 该接口用于查询当前登录用户所拥有的所有AgentTeams实例。
     * - 用户身份通过请求头`X-User-Id`传递，服务端会根据此ID自动过滤只返回属于该用户的实例数据。
     * - 支持使用`instanceName`进行模糊匹配以及通过`status`参数精确匹配实例状态来过滤查询结果。
     * - 默认情况下，结果将按照创建时间倒序排列，并且可以通过设置`limit`和`offset`参数来进行分页控制，默认每页显示20条记录。
     * - 如果请求中缺少`X-User-Id`或者其值为空，则会返回400错误；如果指定的实例不存在或不属于当前用户，则返回404错误。
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
     * 创建模型.
     *
     * @remarks
     * ## 请求说明
     * - 该接口用于查询当前登录用户所拥有的所有AgentTeams实例。
     * - 用户身份通过请求头`X-User-Id`传递，服务端会根据此ID自动过滤只返回属于该用户的实例数据。
     * - 支持使用`instanceName`进行模糊匹配以及通过`status`参数精确匹配实例状态来过滤查询结果。
     * - 默认情况下，结果将按照创建时间倒序排列，并且可以通过设置`limit`和`offset`参数来进行分页控制，默认每页显示20条记录。
     * - 如果请求中缺少`X-User-Id`或者其值为空，则会返回400错误；如果指定的实例不存在或不属于当前用户，则返回404错误。
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
     * 创建模型.
     *
     * @remarks
     * ## 请求说明
     * - 该接口用于查询当前登录用户所拥有的所有AgentTeams实例。
     * - 用户身份通过请求头`X-User-Id`传递，服务端会根据此ID自动过滤只返回属于该用户的实例数据。
     * - 支持使用`instanceName`进行模糊匹配以及通过`status`参数精确匹配实例状态来过滤查询结果。
     * - 默认情况下，结果将按照创建时间倒序排列，并且可以通过设置`limit`和`offset`参数来进行分页控制，默认每页显示20条记录。
     * - 如果请求中缺少`X-User-Id`或者其值为空，则会返回400错误；如果指定的实例不存在或不属于当前用户，则返回404错误。
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
     * 创建模型.
     *
     * @remarks
     * ## 请求说明
     * - 该接口用于查询当前登录用户所拥有的所有AgentTeams实例。
     * - 用户身份通过请求头`X-User-Id`传递，服务端会根据此ID自动过滤只返回属于该用户的实例数据。
     * - 支持使用`instanceName`进行模糊匹配以及通过`status`参数精确匹配实例状态来过滤查询结果。
     * - 默认情况下，结果将按照创建时间倒序排列，并且可以通过设置`limit`和`offset`参数来进行分页控制，默认每页显示20条记录。
     * - 如果请求中缺少`X-User-Id`或者其值为空，则会返回400错误；如果指定的实例不存在或不属于当前用户，则返回404错误。
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
     * 创建模型.
     *
     * @remarks
     * ## 请求说明
     * - 该接口用于查询当前登录用户所拥有的所有AgentTeams实例。
     * - 用户身份通过请求头`X-User-Id`传递，服务端会根据此ID自动过滤只返回属于该用户的实例数据。
     * - 支持使用`instanceName`进行模糊匹配以及通过`status`参数精确匹配实例状态来过滤查询结果。
     * - 默认情况下，结果将按照创建时间倒序排列，并且可以通过设置`limit`和`offset`参数来进行分页控制，默认每页显示20条记录。
     * - 如果请求中缺少`X-User-Id`或者其值为空，则会返回400错误；如果指定的实例不存在或不属于当前用户，则返回404错误。
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
     * 用于创建指定实例的Endpoint，支持多种组件和网关类型。
     *
     * @remarks
     * ## 请求说明
     * - 当前controller使用的是普通参数绑定，不是`@RequestBody`，因此参数更适合按query/form方式传递。
     * - `domain`字段会在服务端进行`trim + lowerCase`处理。
     * - `query`和`headers`必须是JSON object字符串格式，不能为数组。
     * - 创建操作仅将数据保存到数据库；只有在更新时，如果满足`ELEMENT/MATRIX + AI_GATEWAY + INTERNET`且域名或证书发生变化，才会触发AI Gateway域名同步逻辑。
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
     * 用于创建指定实例的Endpoint，支持多种组件和网关类型。
     *
     * @remarks
     * ## 请求说明
     * - 当前controller使用的是普通参数绑定，不是`@RequestBody`，因此参数更适合按query/form方式传递。
     * - `domain`字段会在服务端进行`trim + lowerCase`处理。
     * - `query`和`headers`必须是JSON object字符串格式，不能为数组。
     * - 创建操作仅将数据保存到数据库；只有在更新时，如果满足`ELEMENT/MATRIX + AI_GATEWAY + INTERNET`且域名或证书发生变化，才会触发AI Gateway域名同步逻辑。
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
     * 创建团队
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
     * 创建团队
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
     * 创建用户.
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
     * 创建用户.
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
     * 创建Worker.
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
     * 创建Worker.
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
     * 创建Worker本地纳管启动Token.
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
     * 创建Worker本地纳管启动Token.
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
     * 删除凭证
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
     * 删除凭证
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
     * 用于释放指定的AgentTeams实例，并清理相关资源。
     *
     * @remarks
     * ## 请求说明
     * - 本API支持`GET`和`POST`方法，两者语义相同。
     * - 使用`POST`方法时，参数通过`application/x-www-form-urlencoded`格式提交。
     * - 当前实例状态为`CREATING`、`DELETING`或`DELETED`时，请求将被拒绝。
     * - 成功调用后，实例状态将首先更改为`DELETING`，实际的资源清理过程由后台异步执行。
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
     * 用于释放指定的AgentTeams实例，并清理相关资源。
     *
     * @remarks
     * ## 请求说明
     * - 本API支持`GET`和`POST`方法，两者语义相同。
     * - 使用`POST`方法时，参数通过`application/x-www-form-urlencoded`格式提交。
     * - 当前实例状态为`CREATING`、`DELETING`或`DELETED`时，请求将被拒绝。
     * - 成功调用后，实例状态将首先更改为`DELETING`，实际的资源清理过程由后台异步执行。
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
     * 删除MCP.
     *
     * @remarks
     * ## 请求说明
     * - 该接口用于查询当前登录用户所拥有的所有AgentTeams实例。
     * - 用户身份通过请求头`X-User-Id`传递，服务端会根据此ID自动过滤只返回属于该用户的实例数据。
     * - 支持使用`instanceName`进行模糊匹配以及通过`status`参数精确匹配实例状态来过滤查询结果。
     * - 默认情况下，结果将按照创建时间倒序排列，并且可以通过设置`limit`和`offset`参数来进行分页控制，默认每页显示20条记录。
     * - 如果请求中缺少`X-User-Id`或者其值为空，则会返回400错误；如果指定的实例不存在或不属于当前用户，则返回404错误。
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
     * 删除MCP.
     *
     * @remarks
     * ## 请求说明
     * - 该接口用于查询当前登录用户所拥有的所有AgentTeams实例。
     * - 用户身份通过请求头`X-User-Id`传递，服务端会根据此ID自动过滤只返回属于该用户的实例数据。
     * - 支持使用`instanceName`进行模糊匹配以及通过`status`参数精确匹配实例状态来过滤查询结果。
     * - 默认情况下，结果将按照创建时间倒序排列，并且可以通过设置`limit`和`offset`参数来进行分页控制，默认每页显示20条记录。
     * - 如果请求中缺少`X-User-Id`或者其值为空，则会返回400错误；如果指定的实例不存在或不属于当前用户，则返回404错误。
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
     * 删除模型.
     *
     * @remarks
     * ## 请求说明
     * - 该接口用于查询当前登录用户所拥有的所有AgentTeams实例。
     * - 用户身份通过请求头`X-User-Id`传递，服务端会根据此ID自动过滤只返回属于该用户的实例数据。
     * - 支持使用`instanceName`进行模糊匹配以及通过`status`参数精确匹配实例状态来过滤查询结果。
     * - 默认情况下，结果将按照创建时间倒序排列，并且可以通过设置`limit`和`offset`参数来进行分页控制，默认每页显示20条记录。
     * - 如果请求中缺少`X-User-Id`或者其值为空，则会返回400错误；如果指定的实例不存在或不属于当前用户，则返回404错误。
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
     * 删除模型.
     *
     * @remarks
     * ## 请求说明
     * - 该接口用于查询当前登录用户所拥有的所有AgentTeams实例。
     * - 用户身份通过请求头`X-User-Id`传递，服务端会根据此ID自动过滤只返回属于该用户的实例数据。
     * - 支持使用`instanceName`进行模糊匹配以及通过`status`参数精确匹配实例状态来过滤查询结果。
     * - 默认情况下，结果将按照创建时间倒序排列，并且可以通过设置`limit`和`offset`参数来进行分页控制，默认每页显示20条记录。
     * - 如果请求中缺少`X-User-Id`或者其值为空，则会返回400错误；如果指定的实例不存在或不属于当前用户，则返回404错误。
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
     * 删除模型供应商.
     *
     * @remarks
     * ## 请求说明
     * - 该接口用于查询当前登录用户所拥有的所有AgentTeams实例。
     * - 用户身份通过请求头`X-User-Id`传递，服务端会根据此ID自动过滤只返回属于该用户的实例数据。
     * - 支持使用`instanceName`进行模糊匹配以及通过`status`参数精确匹配实例状态来过滤查询结果。
     * - 默认情况下，结果将按照创建时间倒序排列，并且可以通过设置`limit`和`offset`参数来进行分页控制，默认每页显示20条记录。
     * - 如果请求中缺少`X-User-Id`或者其值为空，则会返回400错误；如果指定的实例不存在或不属于当前用户，则返回404错误。
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
     * 删除模型供应商.
     *
     * @remarks
     * ## 请求说明
     * - 该接口用于查询当前登录用户所拥有的所有AgentTeams实例。
     * - 用户身份通过请求头`X-User-Id`传递，服务端会根据此ID自动过滤只返回属于该用户的实例数据。
     * - 支持使用`instanceName`进行模糊匹配以及通过`status`参数精确匹配实例状态来过滤查询结果。
     * - 默认情况下，结果将按照创建时间倒序排列，并且可以通过设置`limit`和`offset`参数来进行分页控制，默认每页显示20条记录。
     * - 如果请求中缺少`X-User-Id`或者其值为空，则会返回400错误；如果指定的实例不存在或不属于当前用户，则返回404错误。
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
     * 用于删除指定AgentTeams实例下的endpoint，并清理相关资源。
     *
     * @remarks
     * ## 请求说明
     * - 该接口支持通过GET或POST方法调用。
     * - 如果目标endpoint是`WORKER`类型，系统将自动清理与之关联的APIG/AI Gateway云资源及KubeOne worker service配置。
     * - 请求参数必须包含`instanceId`和`endpointId`，且不能为空。
     * - 成功响应会返回HTTP状态码200以及成功标志；错误响应则根据具体情况返回相应的HTTP状态码（如400、404、409）及错误信息。
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
     * 用于删除指定AgentTeams实例下的endpoint，并清理相关资源。
     *
     * @remarks
     * ## 请求说明
     * - 该接口支持通过GET或POST方法调用。
     * - 如果目标endpoint是`WORKER`类型，系统将自动清理与之关联的APIG/AI Gateway云资源及KubeOne worker service配置。
     * - 请求参数必须包含`instanceId`和`endpointId`，且不能为空。
     * - 成功响应会返回HTTP状态码200以及成功标志；错误响应则根据具体情况返回相应的HTTP状态码（如400、404、409）及错误信息。
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
     * 删除团队
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
     * 删除团队
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
     * 删除用户.
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
     * 删除用户.
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
     * 删除Worker.
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
     * 删除Worker.
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
     * 查询凭证详情.
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
     * 查询凭证详情.
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
     * 查询指定类型的上游身份提供商详情.
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
     * 查询指定类型的上游身份提供商详情.
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
     * 通过实例ID查询指定实例的详细信息。
     *
     * @remarks
     * ## 请求说明
     * - 该接口支持`GET`和`POST`方法。
     * - 请求时必须在头部包含`X-User-Id`，用于校验实例归属。
     * - `X-Acs-Request-Id`为可选项，如果提供，则响应中的`requestId`将优先使用此值。
     * - 必须通过`instanceId`参数指定要查询的实例。
     * - 成功响应会返回实例的详细配置信息及状态。
     * - 如果请求失败，根据错误类型返回相应的HTTP状态码及错误消息。
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
     * 通过实例ID查询指定实例的详细信息。
     *
     * @remarks
     * ## 请求说明
     * - 该接口支持`GET`和`POST`方法。
     * - 请求时必须在头部包含`X-User-Id`，用于校验实例归属。
     * - `X-Acs-Request-Id`为可选项，如果提供，则响应中的`requestId`将优先使用此值。
     * - 必须通过`instanceId`参数指定要查询的实例。
     * - 成功响应会返回实例的详细配置信息及状态。
     * - 如果请求失败，根据错误类型返回相应的HTTP状态码及错误消息。
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
     * 查询指定AgentTeams实例关联的异步任务状态，支持分页。
     *
     * @remarks
     * ## 请求说明
     * - 本接口用于查询特定AgentTeams实例下的异步任务执行状态。
     * - 目前仅支持查询与实例生命周期相关的创建实例任务。
     * - 可通过`taskCode`参数指定要查询的任务类型，默认为创建实例任务。
     * - 支持使用`maxResults`和`nextToken`进行结果分页。
     * - 当任务处于暂停(`PAUSED`)状态时，会返回用户需要采取行动的信息(`recoveryMessage`)。
     * - 注意：当前不支持通过`taskId`直接查询任务状态。
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
     * 查询指定AgentTeams实例关联的异步任务状态，支持分页。
     *
     * @remarks
     * ## 请求说明
     * - 本接口用于查询特定AgentTeams实例下的异步任务执行状态。
     * - 目前仅支持查询与实例生命周期相关的创建实例任务。
     * - 可通过`taskCode`参数指定要查询的任务类型，默认为创建实例任务。
     * - 支持使用`maxResults`和`nextToken`进行结果分页。
     * - 当任务处于暂停(`PAUSED`)状态时，会返回用户需要采取行动的信息(`recoveryMessage`)。
     * - 注意：当前不支持通过`taskId`直接查询任务状态。
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
     * 获取实例 OSS 挂载到 ACS 所需的 RAM 授权链接。
     *
     * @remarks
     * ## 请求说明
     * - 该接口支持`GET`和`POST`方法。
     * - 请求时必须在头部包含`X-User-Id`，用于校验实例归属。
     * - 必须通过`instanceId`参数指定实例，后端会根据实例信息生成授权链接。
     * - 成功响应会返回 RAM 控制台授权链接，不会创建 RAM 角色或策略。
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
     * 获取实例 OSS 挂载到 ACS 所需的 RAM 授权链接。
     *
     * @remarks
     * ## 请求说明
     * - 该接口支持`GET`和`POST`方法。
     * - 请求时必须在头部包含`X-User-Id`，用于校验实例归属。
     * - 必须通过`instanceId`参数指定实例，后端会根据实例信息生成授权链接。
     * - 成功响应会返回 RAM 控制台授权链接，不会创建 RAM 角色或策略。
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
     * 查询MCP详情.
     *
     * @remarks
     * ## 请求说明
     * - 该接口用于查询当前登录用户所拥有的所有AgentTeams实例。
     * - 用户身份通过请求头`X-User-Id`传递，服务端会根据此ID自动过滤只返回属于该用户的实例数据。
     * - 支持使用`instanceName`进行模糊匹配以及通过`status`参数精确匹配实例状态来过滤查询结果。
     * - 默认情况下，结果将按照创建时间倒序排列，并且可以通过设置`limit`和`offset`参数来进行分页控制，默认每页显示20条记录。
     * - 如果请求中缺少`X-User-Id`或者其值为空，则会返回400错误；如果指定的实例不存在或不属于当前用户，则返回404错误。
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
     * 查询MCP详情.
     *
     * @remarks
     * ## 请求说明
     * - 该接口用于查询当前登录用户所拥有的所有AgentTeams实例。
     * - 用户身份通过请求头`X-User-Id`传递，服务端会根据此ID自动过滤只返回属于该用户的实例数据。
     * - 支持使用`instanceName`进行模糊匹配以及通过`status`参数精确匹配实例状态来过滤查询结果。
     * - 默认情况下，结果将按照创建时间倒序排列，并且可以通过设置`limit`和`offset`参数来进行分页控制，默认每页显示20条记录。
     * - 如果请求中缺少`X-User-Id`或者其值为空，则会返回400错误；如果指定的实例不存在或不属于当前用户，则返回404错误。
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
     * 模型调用摘要
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
     * 模型调用摘要
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
     * 查询模型供应商详情.
     *
     * @remarks
     * ## 请求说明
     * - 该接口用于查询当前登录用户所拥有的所有AgentTeams实例。
     * - 用户身份通过请求头`X-User-Id`传递，服务端会根据此ID自动过滤只返回属于该用户的实例数据。
     * - 支持使用`instanceName`进行模糊匹配以及通过`status`参数精确匹配实例状态来过滤查询结果。
     * - 默认情况下，结果将按照创建时间倒序排列，并且可以通过设置`limit`和`offset`参数来进行分页控制，默认每页显示20条记录。
     * - 如果请求中缺少`X-User-Id`或者其值为空，则会返回400错误；如果指定的实例不存在或不属于当前用户，则返回404错误。
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
     * 查询模型供应商详情.
     *
     * @remarks
     * ## 请求说明
     * - 该接口用于查询当前登录用户所拥有的所有AgentTeams实例。
     * - 用户身份通过请求头`X-User-Id`传递，服务端会根据此ID自动过滤只返回属于该用户的实例数据。
     * - 支持使用`instanceName`进行模糊匹配以及通过`status`参数精确匹配实例状态来过滤查询结果。
     * - 默认情况下，结果将按照创建时间倒序排列，并且可以通过设置`limit`和`offset`参数来进行分页控制，默认每页显示20条记录。
     * - 如果请求中缺少`X-User-Id`或者其值为空，则会返回400错误；如果指定的实例不存在或不属于当前用户，则返回404错误。
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
     * 查询指定实例的NAT网关及其SNAT规则的配置状态。
     *
     * @remarks
     * ## 请求说明
     * 通过此API，您可以获取特定实例关联的NAT网关配置详情及SNAT规则的状态。该接口支持GET或POST方法调用，并需要提供`instanceId`作为请求参数来指定要查询的实例。
     * ### 注意事项
     * - 确保提供的`instanceId`是有效的且属于您的账户。
     * - 根据返回的状态值（如`READY`, `NEED_CONFIGURE_NAT_GATEWAY`, `NEED_CONFIGURE_SNAT_RULE`），采取相应的操作以完成NAT网关或SNAT规则的配置。
     * - 当状态为`NEED_CONFIGURE_NAT_GATEWAY`时，表示当前VPC下没有可用的NAT网关；而`NEED_CONFIGURE_SNAT_RULE`则意味着虽然存在NAT网关但某些子网CIDR未被SNAT规则覆盖。
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
     * 查询指定实例的NAT网关及其SNAT规则的配置状态。
     *
     * @remarks
     * ## 请求说明
     * 通过此API，您可以获取特定实例关联的NAT网关配置详情及SNAT规则的状态。该接口支持GET或POST方法调用，并需要提供`instanceId`作为请求参数来指定要查询的实例。
     * ### 注意事项
     * - 确保提供的`instanceId`是有效的且属于您的账户。
     * - 根据返回的状态值（如`READY`, `NEED_CONFIGURE_NAT_GATEWAY`, `NEED_CONFIGURE_SNAT_RULE`），采取相应的操作以完成NAT网关或SNAT规则的配置。
     * - 当状态为`NEED_CONFIGURE_NAT_GATEWAY`时，表示当前VPC下没有可用的NAT网关；而`NEED_CONFIGURE_SNAT_RULE`则意味着虽然存在NAT网关但某些子网CIDR未被SNAT规则覆盖。
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
     * 查询指定ID的Endpoint详细信息，支持通过实例ID进行校验。
     *
     * @remarks
     * ## 请求说明
     * - 该API用于根据`endpointId`查询单个Endpoint的具体配置与状态信息。
     * - 可选参数`instanceId`用于验证Endpoint是否属于特定实例。
     * - 请求方式支持`GET`和`POST`，其中`GET`使用query string传递参数，而`POST`则可以通过form参数提交。
     * - 如果`endpointId`缺失或为空，则会返回`InvalidParameter`错误。
     * - 当请求的Endpoint不存在、不属于提供的实例或者不属于当前用户时，将收到相应的资源不存在类错误响应。
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
     * 查询指定ID的Endpoint详细信息，支持通过实例ID进行校验。
     *
     * @remarks
     * ## 请求说明
     * - 该API用于根据`endpointId`查询单个Endpoint的具体配置与状态信息。
     * - 可选参数`instanceId`用于验证Endpoint是否属于特定实例。
     * - 请求方式支持`GET`和`POST`，其中`GET`使用query string传递参数，而`POST`则可以通过form参数提交。
     * - 如果`endpointId`缺失或为空，则会返回`InvalidParameter`错误。
     * - 当请求的Endpoint不存在、不属于提供的实例或者不属于当前用户时，将收到相应的资源不存在类错误响应。
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
     * 任务统计摘要
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
     * 任务统计摘要
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
     * 查询团队详情.
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
     * 查询团队详情.
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
     * Token趋势统计
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
     * Token趋势统计
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
     * 工具调用分布.
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
     * 工具调用分布.
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
     * 查询用户详情.
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
     * 查询用户详情.
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
     * 获取用户初始密码
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
     * 获取用户初始密码
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
     * 查询Worker详情.
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
     * 查询Worker详情.
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
     * 查询Worker本地纳管启动选项.
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
     * 查询Worker本地纳管启动选项.
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
     * 查询Worker最大可升级版本.
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
     * 查询Worker最大可升级版本.
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
     * Worker统计摘要
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
     * Worker统计摘要
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
     * 查询凭证列表.
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
     * 查询凭证列表.
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
     * 查询上游身份提供商绑定列表.
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
     * 查询上游身份提供商绑定列表.
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
     * 用于查询符合条件的实例列表，并支持分页和模糊匹配。
     *
     * @remarks
     * ## 请求说明
     * - **分页规则**：
     *   - 如果传了 `NextToken`，优先按 `NextToken` 解析 offset。
     *   - 如果没传 `NextToken`，则使用 `skip`。
     *   - `MaxResults` 的取值范围为 1 到 100，非法值会返回 `400` 错误。
     *   - `NextToken` 必须是有效的整数，否则会返回 `400` 错误。
     *   - `skip` 的值不能小于 0，否则会返回 `400` 错误。
     * - **排序规则**：列表按创建时间倒序返回。
     * - **请求参数**：
     *   - `instanceName`：实例名称，支持模糊匹配。
     *   - `status`：实例状态。
     *   - `MaxResults`：分页大小，默认值为 20。
     *   - `NextToken`：下一页游标。
     *   - `skip`：跳过的记录数，默认值为 0。
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
     * 用于查询符合条件的实例列表，并支持分页和模糊匹配。
     *
     * @remarks
     * ## 请求说明
     * - **分页规则**：
     *   - 如果传了 `NextToken`，优先按 `NextToken` 解析 offset。
     *   - 如果没传 `NextToken`，则使用 `skip`。
     *   - `MaxResults` 的取值范围为 1 到 100，非法值会返回 `400` 错误。
     *   - `NextToken` 必须是有效的整数，否则会返回 `400` 错误。
     *   - `skip` 的值不能小于 0，否则会返回 `400` 错误。
     * - **排序规则**：列表按创建时间倒序返回。
     * - **请求参数**：
     *   - `instanceName`：实例名称，支持模糊匹配。
     *   - `status`：实例状态。
     *   - `MaxResults`：分页大小，默认值为 20。
     *   - `NextToken`：下一页游标。
     *   - `skip`：跳过的记录数，默认值为 0。
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
     * 测试模型供应商和模型.
     *
     * @remarks
     * ## 请求说明
     * - 该接口用于查询当前登录用户所拥有的所有Magic实例。
     * - 用户身份通过请求头`X-User-Id`传递，服务端会根据此ID自动过滤只返回属于该用户的实例数据。
     * - 支持使用`instanceName`进行模糊匹配以及通过`status`参数精确匹配实例状态来过滤查询结果。
     * - 默认情况下，结果将按照创建时间倒序排列，并且可以通过设置`limit`和`offset`参数来进行分页控制，默认每页显示20条记录。
     * - 如果请求中缺少`X-User-Id`或者其值为空，则会返回400错误；如果指定的实例不存在或不属于当前用户，则返回404错误。
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
     * 测试模型供应商和模型.
     *
     * @remarks
     * ## 请求说明
     * - 该接口用于查询当前登录用户所拥有的所有Magic实例。
     * - 用户身份通过请求头`X-User-Id`传递，服务端会根据此ID自动过滤只返回属于该用户的实例数据。
     * - 支持使用`instanceName`进行模糊匹配以及通过`status`参数精确匹配实例状态来过滤查询结果。
     * - 默认情况下，结果将按照创建时间倒序排列，并且可以通过设置`limit`和`offset`参数来进行分页控制，默认每页显示20条记录。
     * - 如果请求中缺少`X-User-Id`或者其值为空，则会返回400错误；如果指定的实例不存在或不属于当前用户，则返回404错误。
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
     * 查询MCP列表.
     *
     * @remarks
     * ## 请求说明
     * - 该接口用于查询当前登录用户所拥有的所有AgentTeams实例。
     * - 用户身份通过请求头`X-User-Id`传递，服务端会根据此ID自动过滤只返回属于该用户的实例数据。
     * - 支持使用`instanceName`进行模糊匹配以及通过`status`参数精确匹配实例状态来过滤查询结果。
     * - 默认情况下，结果将按照创建时间倒序排列，并且可以通过设置`limit`和`offset`参数来进行分页控制，默认每页显示20条记录。
     * - 如果请求中缺少`X-User-Id`或者其值为空，则会返回400错误；如果指定的实例不存在或不属于当前用户，则返回404错误。
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
     * 查询MCP列表.
     *
     * @remarks
     * ## 请求说明
     * - 该接口用于查询当前登录用户所拥有的所有AgentTeams实例。
     * - 用户身份通过请求头`X-User-Id`传递，服务端会根据此ID自动过滤只返回属于该用户的实例数据。
     * - 支持使用`instanceName`进行模糊匹配以及通过`status`参数精确匹配实例状态来过滤查询结果。
     * - 默认情况下，结果将按照创建时间倒序排列，并且可以通过设置`limit`和`offset`参数来进行分页控制，默认每页显示20条记录。
     * - 如果请求中缺少`X-User-Id`或者其值为空，则会返回400错误；如果指定的实例不存在或不属于当前用户，则返回404错误。
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
     * 查询模型供应商列表.
     *
     * @remarks
     * ## 请求说明
     * - 该接口用于查询当前登录用户所拥有的所有AgentTeams实例。
     * - 用户身份通过请求头`X-User-Id`传递，服务端会根据此ID自动过滤只返回属于该用户的实例数据。
     * - 支持使用`instanceName`进行模糊匹配以及通过`status`参数精确匹配实例状态来过滤查询结果。
     * - 默认情况下，结果将按照创建时间倒序排列，并且可以通过设置`limit`和`offset`参数来进行分页控制，默认每页显示20条记录。
     * - 如果请求中缺少`X-User-Id`或者其值为空，则会返回400错误；如果指定的实例不存在或不属于当前用户，则返回404错误。
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
     * 查询模型供应商列表.
     *
     * @remarks
     * ## 请求说明
     * - 该接口用于查询当前登录用户所拥有的所有AgentTeams实例。
     * - 用户身份通过请求头`X-User-Id`传递，服务端会根据此ID自动过滤只返回属于该用户的实例数据。
     * - 支持使用`instanceName`进行模糊匹配以及通过`status`参数精确匹配实例状态来过滤查询结果。
     * - 默认情况下，结果将按照创建时间倒序排列，并且可以通过设置`limit`和`offset`参数来进行分页控制，默认每页显示20条记录。
     * - 如果请求中缺少`X-User-Id`或者其值为空，则会返回400错误；如果指定的实例不存在或不属于当前用户，则返回404错误。
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
     * 查询模型列表.
     *
     * @remarks
     * ## 请求说明
     * - 该接口用于查询当前登录用户所拥有的所有AgentTeams实例。
     * - 用户身份通过请求头`X-User-Id`传递，服务端会根据此ID自动过滤只返回属于该用户的实例数据。
     * - 支持使用`instanceName`进行模糊匹配以及通过`status`参数精确匹配实例状态来过滤查询结果。
     * - 默认情况下，结果将按照创建时间倒序排列，并且可以通过设置`limit`和`offset`参数来进行分页控制，默认每页显示20条记录。
     * - 如果请求中缺少`X-User-Id`或者其值为空，则会返回400错误；如果指定的实例不存在或不属于当前用户，则返回404错误。
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
     * 查询模型列表.
     *
     * @remarks
     * ## 请求说明
     * - 该接口用于查询当前登录用户所拥有的所有AgentTeams实例。
     * - 用户身份通过请求头`X-User-Id`传递，服务端会根据此ID自动过滤只返回属于该用户的实例数据。
     * - 支持使用`instanceName`进行模糊匹配以及通过`status`参数精确匹配实例状态来过滤查询结果。
     * - 默认情况下，结果将按照创建时间倒序排列，并且可以通过设置`limit`和`offset`参数来进行分页控制，默认每页显示20条记录。
     * - 如果请求中缺少`X-User-Id`或者其值为空，则会返回400错误；如果指定的实例不存在或不属于当前用户，则返回404错误。
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
     * 此API用于查询指定实例下的AI网关端点列表。
     *
     * @remarks
     * ## 请求说明
     * - `instanceId` 是必填参数，用来指定 AgentTeams 实例 ID。
     * - 可选参数包括 `component`, `serviceName`, `networkType`, 和 `domainType`，用于进一步筛选返回的端点列表。
     * - 不支持通过 `status` 参数进行筛选。
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
     * 此API用于查询指定实例下的AI网关端点列表。
     *
     * @remarks
     * ## 请求说明
     * - `instanceId` 是必填参数，用来指定 AgentTeams 实例 ID。
     * - 可选参数包括 `component`, `serviceName`, `networkType`, 和 `domainType`，用于进一步筛选返回的端点列表。
     * - 不支持通过 `status` 参数进行筛选。
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
     * 查询用户侧APIG可用的SSL证书列表.
     *
     * @remarks
     * ## 请求说明
     * - 该API用于获取与指定AgentTeams实例相关的SSL证书列表。
     * - 可通过`certNameLike`和`domainName`参数进行模糊搜索或精确匹配证书名称及绑定域名。
     * - 分页参数`pageNumber`和`pageSize`允许客户端控制返回结果的数量和页码，默认每页显示10条记录。
     * - 成功响应将包含请求ID、是否成功标志、错误代码（如果有的话）、HTTP状态码、本次请求的最大结果数、下一页标记（如果有更多数据的话）、总证书数量以及具体的证书详情列表。
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
     * 查询用户侧APIG可用的SSL证书列表.
     *
     * @remarks
     * ## 请求说明
     * - 该API用于获取与指定AgentTeams实例相关的SSL证书列表。
     * - 可通过`certNameLike`和`domainName`参数进行模糊搜索或精确匹配证书名称及绑定域名。
     * - 分页参数`pageNumber`和`pageSize`允许客户端控制返回结果的数量和页码，默认每页显示10条记录。
     * - 成功响应将包含请求ID、是否成功标志、错误代码（如果有的话）、HTTP状态码、本次请求的最大结果数、下一页标记（如果有更多数据的话）、总证书数量以及具体的证书详情列表。
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
     * 团队详情列表.
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
     * 团队详情列表.
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
     * 查询Team任务列表.
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
     * 查询Team任务列表.
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
     * 查询团队列表.
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
     * 查询团队列表.
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
     * 查询用户列表.
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
     * 查询用户列表.
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
     * Worker统计详情列表.
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
     * Worker统计详情列表.
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
     * 查询Worker列表.
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
     * 查询Worker列表.
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
     * 创建或更新CMS工作空间.
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
     * 创建或更新CMS工作空间.
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
     * 查询指定实例、worker、团队或个人的功能特性状态。
     *
     * @remarks
     * ## 请求说明
     * - 该接口用于查询特定`instanceId`下的不同目标（如`INSTANCE`、`WORKER`、`TEAM`、`HUMAN`）的功能特性状态。
     * - `targetScope`参数定义了查询的目标类型，根据不同的`targetScope`值，可能需要提供额外的`resourceName`参数来指定具体的资源名称。
     * - 如果提供了`featureCodes`列表，则返回这些特定功能特性的状态；否则，将返回指定`targetScope`下所有功能特性的状态。
     * - 当使用`WORKER`、`TEAM`或`HUMAN`作为`targetScope`时，请确保正确填写对应的`resourceName`。
     * - 对于`INSTANCE`级别的查询，无需提供`resourceName`。
     * - 特性支持情况受基础版本、工作器版本等因素影响，并通过`unsupportedReasonCode`和`unsupportedReason`字段给出不支持的具体原因。
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
     * 查询指定实例、worker、团队或个人的功能特性状态。
     *
     * @remarks
     * ## 请求说明
     * - 该接口用于查询特定`instanceId`下的不同目标（如`INSTANCE`、`WORKER`、`TEAM`、`HUMAN`）的功能特性状态。
     * - `targetScope`参数定义了查询的目标类型，根据不同的`targetScope`值，可能需要提供额外的`resourceName`参数来指定具体的资源名称。
     * - 如果提供了`featureCodes`列表，则返回这些特定功能特性的状态；否则，将返回指定`targetScope`下所有功能特性的状态。
     * - 当使用`WORKER`、`TEAM`或`HUMAN`作为`targetScope`时，请确保正确填写对应的`resourceName`。
     * - 对于`INSTANCE`级别的查询，无需提供`resourceName`。
     * - 特性支持情况受基础版本、工作器版本等因素影响，并通过`unsupportedReasonCode`和`unsupportedReason`字段给出不支持的具体原因。
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
     * 获取当前AgentTeams Resource Pool配置支持的所有可用区ID。
     *
     * @remarks
     * ## 请求说明
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
     * 获取当前AgentTeams Resource Pool配置支持的所有可用区ID。
     *
     * @remarks
     * ## 请求说明
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
     * 设置用户密码
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
     * 设置用户密码
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
     * 测试模型供应商和模型.
     *
     * @remarks
     * ## 请求说明
     * - 该接口用于查询当前登录用户所拥有的所有AgentTeams实例。
     * - 用户身份通过请求头`X-User-Id`传递，服务端会根据此ID自动过滤只返回属于该用户的实例数据。
     * - 支持使用`instanceName`进行模糊匹配以及通过`status`参数精确匹配实例状态来过滤查询结果。
     * - 默认情况下，结果将按照创建时间倒序排列，并且可以通过设置`limit`和`offset`参数来进行分页控制，默认每页显示20条记录。
     * - 如果请求中缺少`X-User-Id`或者其值为空，则会返回400错误；如果指定的实例不存在或不属于当前用户，则返回404错误。
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
     * 测试模型供应商和模型.
     *
     * @remarks
     * ## 请求说明
     * - 该接口用于查询当前登录用户所拥有的所有AgentTeams实例。
     * - 用户身份通过请求头`X-User-Id`传递，服务端会根据此ID自动过滤只返回属于该用户的实例数据。
     * - 支持使用`instanceName`进行模糊匹配以及通过`status`参数精确匹配实例状态来过滤查询结果。
     * - 默认情况下，结果将按照创建时间倒序排列，并且可以通过设置`limit`和`offset`参数来进行分页控制，默认每页显示20条记录。
     * - 如果请求中缺少`X-User-Id`或者其值为空，则会返回400错误；如果指定的实例不存在或不属于当前用户，则返回404错误。
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
     * 解绑上游身份提供商.
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
     * 解绑上游身份提供商.
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
     * 更新凭证密钥.
     *
     * @remarks
     * ## 请求说明
     * - 该接口用于更新 AgentTeams 实例下已有 Credential 的密钥明文。
     * - 仅更新 Agent Identity TokenVault 中同名 APIKeyCredentialProvider 的密钥值，不修改本地元数据（description、createTime、updateTime、status）。
     * - 响应不包含 apiKey 明文；如需绑定 Worker 明细请调用 GetCredential。
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
     * 更新凭证密钥.
     *
     * @remarks
     * ## 请求说明
     * - 该接口用于更新 AgentTeams 实例下已有 Credential 的密钥明文。
     * - 仅更新 Agent Identity TokenVault 中同名 APIKeyCredentialProvider 的密钥值，不修改本地元数据（description、createTime、updateTime、status）。
     * - 响应不包含 apiKey 明文；如需绑定 Worker 明细请调用 GetCredential。
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
     * 更新上游身份提供商绑定.
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
     * 更新上游身份提供商绑定.
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
     * 用于更改指定AgentTeams实例的名称，支持通过GET或POST方法调用。
     *
     * @remarks
     * ## 请求说明
     * - 推荐使用`POST`方法，并以表单形式提交参数。
     * - 当前实现不支持JSON格式的请求体，请勿尝试使用`@RequestBody`方式调用。
     * - 必须提供有效的`instanceId`和非空的`instanceName`作为参数。
     * - 该接口仅允许修改实例名称(`instanceName`)，不允许通过此接口变更命名空间(`namespace`)。
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
     * 用于更改指定AgentTeams实例的名称，支持通过GET或POST方法调用。
     *
     * @remarks
     * ## 请求说明
     * - 推荐使用`POST`方法，并以表单形式提交参数。
     * - 当前实现不支持JSON格式的请求体，请勿尝试使用`@RequestBody`方式调用。
     * - 必须提供有效的`instanceId`和非空的`instanceName`作为参数。
     * - 该接口仅允许修改实例名称(`instanceName`)，不允许通过此接口变更命名空间(`namespace`)。
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
     * 重启暂停中的创建实例异步任务。
     *
     * @remarks
     * ## 请求说明
     * - 该接口用于重新启动一个处于暂停状态的创建实例任务。
     * - 目前仅支持 `agentteams:pay-order:create` 类型的任务。
     * - 确保提供的 `instanceId`、`taskCode` 和 `taskId` 参数准确无误，否则可能导致请求失败。
     * - 如果任务不是暂停状态（PAUSED），则不允许调用此接口进行更新。
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
     * 重启暂停中的创建实例异步任务。
     *
     * @remarks
     * ## 请求说明
     * - 该接口用于重新启动一个处于暂停状态的创建实例任务。
     * - 目前仅支持 `agentteams:pay-order:create` 类型的任务。
     * - 确保提供的 `instanceId`、`taskCode` 和 `taskId` 参数准确无误，否则可能导致请求失败。
     * - 如果任务不是暂停状态（PAUSED），则不允许调用此接口进行更新。
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
     * 更新MCP.
     *
     * @remarks
     * ## 请求说明
     * - 该接口用于查询当前登录用户所拥有的所有AgentTeams实例。
     * - 用户身份通过请求头`X-User-Id`传递，服务端会根据此ID自动过滤只返回属于该用户的实例数据。
     * - 支持使用`instanceName`进行模糊匹配以及通过`status`参数精确匹配实例状态来过滤查询结果。
     * - 默认情况下，结果将按照创建时间倒序排列，并且可以通过设置`limit`和`offset`参数来进行分页控制，默认每页显示20条记录。
     * - 如果请求中缺少`X-User-Id`或者其值为空，则会返回400错误；如果指定的实例不存在或不属于当前用户，则返回404错误。
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
     * 更新MCP.
     *
     * @remarks
     * ## 请求说明
     * - 该接口用于查询当前登录用户所拥有的所有AgentTeams实例。
     * - 用户身份通过请求头`X-User-Id`传递，服务端会根据此ID自动过滤只返回属于该用户的实例数据。
     * - 支持使用`instanceName`进行模糊匹配以及通过`status`参数精确匹配实例状态来过滤查询结果。
     * - 默认情况下，结果将按照创建时间倒序排列，并且可以通过设置`limit`和`offset`参数来进行分页控制，默认每页显示20条记录。
     * - 如果请求中缺少`X-User-Id`或者其值为空，则会返回400错误；如果指定的实例不存在或不属于当前用户，则返回404错误。
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
     * 更新模型.
     *
     * @remarks
     * ## 请求说明
     * - 该接口用于查询当前登录用户所拥有的所有AgentTeams实例。
     * - 用户身份通过请求头`X-User-Id`传递，服务端会根据此ID自动过滤只返回属于该用户的实例数据。
     * - 支持使用`instanceName`进行模糊匹配以及通过`status`参数精确匹配实例状态来过滤查询结果。
     * - 默认情况下，结果将按照创建时间倒序排列，并且可以通过设置`limit`和`offset`参数来进行分页控制，默认每页显示20条记录。
     * - 如果请求中缺少`X-User-Id`或者其值为空，则会返回400错误；如果指定的实例不存在或不属于当前用户，则返回404错误。
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
     * 更新模型.
     *
     * @remarks
     * ## 请求说明
     * - 该接口用于查询当前登录用户所拥有的所有AgentTeams实例。
     * - 用户身份通过请求头`X-User-Id`传递，服务端会根据此ID自动过滤只返回属于该用户的实例数据。
     * - 支持使用`instanceName`进行模糊匹配以及通过`status`参数精确匹配实例状态来过滤查询结果。
     * - 默认情况下，结果将按照创建时间倒序排列，并且可以通过设置`limit`和`offset`参数来进行分页控制，默认每页显示20条记录。
     * - 如果请求中缺少`X-User-Id`或者其值为空，则会返回400错误；如果指定的实例不存在或不属于当前用户，则返回404错误。
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
     * 更新模型供应商.
     *
     * @remarks
     * ## 请求说明
     * - 该接口用于查询当前登录用户所拥有的所有AgentTeams实例。
     * - 用户身份通过请求头`X-User-Id`传递，服务端会根据此ID自动过滤只返回属于该用户的实例数据。
     * - 支持使用`instanceName`进行模糊匹配以及通过`status`参数精确匹配实例状态来过滤查询结果。
     * - 默认情况下，结果将按照创建时间倒序排列，并且可以通过设置`limit`和`offset`参数来进行分页控制，默认每页显示20条记录。
     * - 如果请求中缺少`X-User-Id`或者其值为空，则会返回400错误；如果指定的实例不存在或不属于当前用户，则返回404错误。
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
     * 更新模型供应商.
     *
     * @remarks
     * ## 请求说明
     * - 该接口用于查询当前登录用户所拥有的所有AgentTeams实例。
     * - 用户身份通过请求头`X-User-Id`传递，服务端会根据此ID自动过滤只返回属于该用户的实例数据。
     * - 支持使用`instanceName`进行模糊匹配以及通过`status`参数精确匹配实例状态来过滤查询结果。
     * - 默认情况下，结果将按照创建时间倒序排列，并且可以通过设置`limit`和`offset`参数来进行分页控制，默认每页显示20条记录。
     * - 如果请求中缺少`X-User-Id`或者其值为空，则会返回400错误；如果指定的实例不存在或不属于当前用户，则返回404错误。
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
     * 用于更新指定Endpoint的域名和SSL证书信息。
     *
     * @remarks
     * ## 请求说明
     * - 本API支持更新`ELEMENT`、`MATRIX`类型的Endpoint。
     * - 如果尝试更新其他类型的Endpoint，将返回400错误。
     * - 当`endpointId`不存在或不属于当前用户实例时，将返回404错误。
     * - 更新域名时，系统会创建或复用新的HTTPS domain，并将其绑定到原endpoint route上，同时解绑旧domain，但不会删除旧domain。
     * - 若不提供`domain`或`certIdentifier`参数，则保持原有设置不变。
     * - 其他如`component`、`gatewayType`等字段即使传入也不会被更新。
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
     * 用于更新指定Endpoint的域名和SSL证书信息。
     *
     * @remarks
     * ## 请求说明
     * - 本API支持更新`ELEMENT`、`MATRIX`类型的Endpoint。
     * - 如果尝试更新其他类型的Endpoint，将返回400错误。
     * - 当`endpointId`不存在或不属于当前用户实例时，将返回404错误。
     * - 更新域名时，系统会创建或复用新的HTTPS domain，并将其绑定到原endpoint route上，同时解绑旧domain，但不会删除旧domain。
     * - 若不提供`domain`或`certIdentifier`参数，则保持原有设置不变。
     * - 其他如`component`、`gatewayType`等字段即使传入也不会被更新。
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
     * 更新团队
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
     * 更新团队
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
     * 更新用户信息.
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
     * 更新用户信息.
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
     * 更新Worker.
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
     * 更新Worker.
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

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\Dara\Url;
use AlibabaCloud\SDK\APIG\V20240327\Models\AddGatewaySecurityGroupRuleRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\AddGatewaySecurityGroupRuleResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\BatchDeleteConsumerAuthorizationRuleRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\BatchDeleteConsumerAuthorizationRuleResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\ChangeResourceGroupRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\ChangeResourceGroupResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\CreateAndAttachPolicyRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\CreateAndAttachPolicyResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\CreateConsumerAuthorizationRuleRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\CreateConsumerAuthorizationRuleResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\CreateConsumerAuthorizationRulesRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\CreateConsumerAuthorizationRulesResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\CreateConsumerRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\CreateConsumerResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\CreateDomainRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\CreateDomainResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\CreateEnvironmentRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\CreateEnvironmentResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\CreateGatewayRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\CreateGatewayResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\CreateHttpApiOperationRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\CreateHttpApiOperationResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\CreateHttpApiRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\CreateHttpApiResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\CreateHttpApiRouteRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\CreateHttpApiRouteResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\CreateMcpServerRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\CreateMcpServerResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\CreatePluginAttachmentRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\CreatePluginAttachmentResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\CreatePolicyAttachmentRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\CreatePolicyAttachmentResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\CreatePolicyRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\CreatePolicyResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\CreateSecretRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\CreateSecretResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\CreateServiceRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\CreateServiceResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\CreateServiceVersionRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\CreateServiceVersionResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\CreateSourceRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\CreateSourceResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\DeleteConsumerAuthorizationRuleResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\DeleteConsumerResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\DeleteDomainResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\DeleteEnvironmentResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\DeleteGatewayResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\DeleteGatewaySecurityGroupRuleRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\DeleteGatewaySecurityGroupRuleResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\DeleteHttpApiOperationResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\DeleteHttpApiResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\DeleteHttpApiRouteResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\DeleteMcpServerResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\DeletePluginAttachmentResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\DeletePolicyAttachmentResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\DeletePolicyResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\DeleteSecretResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\DeleteServiceResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\DeleteServiceVersionResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\DeleteSourceResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\DeployHttpApiRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\DeployHttpApiResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\DeployMcpServerResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\ExportHttpApiResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\GetConsumerAuthorizationRuleResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\GetConsumerResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\GetDashboardRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\GetDashboardResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\GetDashboardShrinkRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\GetDomainRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\GetDomainResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\GetEnvironmentRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\GetEnvironmentResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\GetGatewayResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\GetHttpApiOperationResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\GetHttpApiResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\GetHttpApiRouteResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\GetMcpServerResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\GetPluginAttachmentResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\GetPolicyAttachmentResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\GetPolicyResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\GetResourceOverviewRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\GetResourceOverviewResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\GetSecretValueResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\GetServiceResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\GetSourceResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\GetTraceConfigRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\GetTraceConfigResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\ImportHttpApiRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\ImportHttpApiResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\InstallPluginRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\InstallPluginResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListConsumerAuthorizationRulesRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListConsumerAuthorizationRulesResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListConsumersRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListConsumersResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListDomainsRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListDomainsResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListEnvironmentsRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListEnvironmentsResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListGatewayFeaturesResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListGatewaysRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListGatewaysResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListGatewaysShrinkRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListHttpApiOperationsRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListHttpApiOperationsResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListHttpApiRoutesRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListHttpApiRoutesResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListHttpApisRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListHttpApisResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListMcpServersRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListMcpServersResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListPluginAttachmentsRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListPluginAttachmentsResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListPluginClassesRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListPluginClassesResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListPluginsRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListPluginsResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListPoliciesRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListPoliciesResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListPolicyClassesRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListPolicyClassesResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListSecretReferencesRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListSecretReferencesResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListSecretsRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListSecretsResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListServicesRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListServicesResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListSslCertsRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListSslCertsResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListZonesResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\QueryConsumerAuthorizationRulesRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\QueryConsumerAuthorizationRulesResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\RemoveConsumerAuthorizationRuleResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\RestartGatewayResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\SyncMCPServersRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\SyncMCPServersResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\UndeployHttpApiRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\UndeployHttpApiResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\UnDeployMcpServerResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\UninstallPluginResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\UpdateAndAttachPolicyRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\UpdateAndAttachPolicyResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\UpdateConsumerAuthorizationRuleRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\UpdateConsumerAuthorizationRuleResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\UpdateConsumerRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\UpdateConsumerResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\UpdateDomainRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\UpdateDomainResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\UpdateEnvironmentRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\UpdateEnvironmentResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\UpdateGatewayFeatureRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\UpdateGatewayFeatureResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\UpdateGatewayNameRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\UpdateGatewayNameResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\UpdateHttpApiOperationRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\UpdateHttpApiOperationResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\UpdateHttpApiRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\UpdateHttpApiResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\UpdateHttpApiRouteRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\UpdateHttpApiRouteResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\UpdateMcpServerRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\UpdateMcpServerResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\UpdatePluginAttachmentRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\UpdatePluginAttachmentResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\UpdatePolicyRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\UpdatePolicyResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\UpdateSecretRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\UpdateSecretResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\UpdateServiceRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\UpdateServiceResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\UpdateServiceVersionRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\UpdateServiceVersionResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\UpgradeGatewayRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\UpgradeGatewayResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class APIG extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('apig', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * Authorize the security group for gateway to access services.
     *
     * @param request - AddGatewaySecurityGroupRuleRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddGatewaySecurityGroupRuleResponse
     *
     * @param string                             $gatewayId
     * @param AddGatewaySecurityGroupRuleRequest $request
     * @param string[]                           $headers
     * @param RuntimeOptions                     $runtime
     *
     * @return AddGatewaySecurityGroupRuleResponse
     */
    public function addGatewaySecurityGroupRuleWithOptions($gatewayId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->portRanges) {
            @$body['portRanges'] = $request->portRanges;
        }

        if (null !== $request->securityGroupId) {
            @$body['securityGroupId'] = $request->securityGroupId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'AddGatewaySecurityGroupRule',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/gateways/' . Url::percentEncode($gatewayId) . '/security-group-rules',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return AddGatewaySecurityGroupRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Authorize the security group for gateway to access services.
     *
     * @param request - AddGatewaySecurityGroupRuleRequest
     *
     * @returns AddGatewaySecurityGroupRuleResponse
     *
     * @param string                             $gatewayId
     * @param AddGatewaySecurityGroupRuleRequest $request
     *
     * @return AddGatewaySecurityGroupRuleResponse
     */
    public function addGatewaySecurityGroupRule($gatewayId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->addGatewaySecurityGroupRuleWithOptions($gatewayId, $request, $headers, $runtime);
    }

    /**
     * Removes consumer authentication rules.
     *
     * @param request - BatchDeleteConsumerAuthorizationRuleRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BatchDeleteConsumerAuthorizationRuleResponse
     *
     * @param BatchDeleteConsumerAuthorizationRuleRequest $request
     * @param string[]                                    $headers
     * @param RuntimeOptions                              $runtime
     *
     * @return BatchDeleteConsumerAuthorizationRuleResponse
     */
    public function batchDeleteConsumerAuthorizationRuleWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->consumerAuthorizationRuleIds) {
            @$query['consumerAuthorizationRuleIds'] = $request->consumerAuthorizationRuleIds;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'BatchDeleteConsumerAuthorizationRule',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/authorization-rules',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return BatchDeleteConsumerAuthorizationRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Removes consumer authentication rules.
     *
     * @param request - BatchDeleteConsumerAuthorizationRuleRequest
     *
     * @returns BatchDeleteConsumerAuthorizationRuleResponse
     *
     * @param BatchDeleteConsumerAuthorizationRuleRequest $request
     *
     * @return BatchDeleteConsumerAuthorizationRuleResponse
     */
    public function batchDeleteConsumerAuthorizationRule($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->batchDeleteConsumerAuthorizationRuleWithOptions($request, $headers, $runtime);
    }

    /**
     * Resource Group Transfer.
     *
     * @param request - ChangeResourceGroupRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ChangeResourceGroupResponse
     *
     * @param ChangeResourceGroupRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return ChangeResourceGroupResponse
     */
    public function changeResourceGroupWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->resourceId) {
            @$query['ResourceId'] = $request->resourceId;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->service) {
            @$query['Service'] = $request->service;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ChangeResourceGroup',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/move-resource-group',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ChangeResourceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Resource Group Transfer.
     *
     * @param request - ChangeResourceGroupRequest
     *
     * @returns ChangeResourceGroupResponse
     *
     * @param ChangeResourceGroupRequest $request
     *
     * @return ChangeResourceGroupResponse
     */
    public function changeResourceGroup($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->changeResourceGroupWithOptions($request, $headers, $runtime);
    }

    /**
     * Creates and associates a policy.
     *
     * @param request - CreateAndAttachPolicyRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateAndAttachPolicyResponse
     *
     * @param CreateAndAttachPolicyRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return CreateAndAttachPolicyResponse
     */
    public function createAndAttachPolicyWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->attachResourceIds) {
            @$body['attachResourceIds'] = $request->attachResourceIds;
        }

        if (null !== $request->attachResourceType) {
            @$body['attachResourceType'] = $request->attachResourceType;
        }

        if (null !== $request->className) {
            @$body['className'] = $request->className;
        }

        if (null !== $request->config) {
            @$body['config'] = $request->config;
        }

        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->environmentId) {
            @$body['environmentId'] = $request->environmentId;
        }

        if (null !== $request->gatewayId) {
            @$body['gatewayId'] = $request->gatewayId;
        }

        if (null !== $request->name) {
            @$body['name'] = $request->name;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateAndAttachPolicy',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/policies',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateAndAttachPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates and associates a policy.
     *
     * @param request - CreateAndAttachPolicyRequest
     *
     * @returns CreateAndAttachPolicyResponse
     *
     * @param CreateAndAttachPolicyRequest $request
     *
     * @return CreateAndAttachPolicyResponse
     */
    public function createAndAttachPolicy($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createAndAttachPolicyWithOptions($request, $headers, $runtime);
    }

    /**
     * Creates a consumer.
     *
     * @param request - CreateConsumerRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateConsumerResponse
     *
     * @param CreateConsumerRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return CreateConsumerResponse
     */
    public function createConsumerWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->akSkIdentityConfigs) {
            @$body['akSkIdentityConfigs'] = $request->akSkIdentityConfigs;
        }

        if (null !== $request->apikeyIdentityConfig) {
            @$body['apikeyIdentityConfig'] = $request->apikeyIdentityConfig;
        }

        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->enable) {
            @$body['enable'] = $request->enable;
        }

        if (null !== $request->gatewayType) {
            @$body['gatewayType'] = $request->gatewayType;
        }

        if (null !== $request->jwtIdentityConfig) {
            @$body['jwtIdentityConfig'] = $request->jwtIdentityConfig;
        }

        if (null !== $request->name) {
            @$body['name'] = $request->name;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateConsumer',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/consumers',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateConsumerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a consumer.
     *
     * @param request - CreateConsumerRequest
     *
     * @returns CreateConsumerResponse
     *
     * @param CreateConsumerRequest $request
     *
     * @return CreateConsumerResponse
     */
    public function createConsumer($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createConsumerWithOptions($request, $headers, $runtime);
    }

    /**
     * Creates a consumer authorization rule.
     *
     * @param request - CreateConsumerAuthorizationRuleRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateConsumerAuthorizationRuleResponse
     *
     * @param string                                 $consumerId
     * @param CreateConsumerAuthorizationRuleRequest $request
     * @param string[]                               $headers
     * @param RuntimeOptions                         $runtime
     *
     * @return CreateConsumerAuthorizationRuleResponse
     */
    public function createConsumerAuthorizationRuleWithOptions($consumerId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->authorizationResourceInfos) {
            @$body['authorizationResourceInfos'] = $request->authorizationResourceInfos;
        }

        if (null !== $request->expireMode) {
            @$body['expireMode'] = $request->expireMode;
        }

        if (null !== $request->expireTimestamp) {
            @$body['expireTimestamp'] = $request->expireTimestamp;
        }

        if (null !== $request->parentResourceType) {
            @$body['parentResourceType'] = $request->parentResourceType;
        }

        if (null !== $request->resourceType) {
            @$body['resourceType'] = $request->resourceType;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateConsumerAuthorizationRule',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/consumers/' . Url::percentEncode($consumerId) . '/authorization-rules',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateConsumerAuthorizationRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a consumer authorization rule.
     *
     * @param request - CreateConsumerAuthorizationRuleRequest
     *
     * @returns CreateConsumerAuthorizationRuleResponse
     *
     * @param string                                 $consumerId
     * @param CreateConsumerAuthorizationRuleRequest $request
     *
     * @return CreateConsumerAuthorizationRuleResponse
     */
    public function createConsumerAuthorizationRule($consumerId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createConsumerAuthorizationRuleWithOptions($consumerId, $request, $headers, $runtime);
    }

    /**
     * Creates a consumer authentication rule.
     *
     * @param request - CreateConsumerAuthorizationRulesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateConsumerAuthorizationRulesResponse
     *
     * @param CreateConsumerAuthorizationRulesRequest $request
     * @param string[]                                $headers
     * @param RuntimeOptions                          $runtime
     *
     * @return CreateConsumerAuthorizationRulesResponse
     */
    public function createConsumerAuthorizationRulesWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->authorizationRules) {
            @$body['authorizationRules'] = $request->authorizationRules;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateConsumerAuthorizationRules',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/authorization-rules',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateConsumerAuthorizationRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a consumer authentication rule.
     *
     * @param request - CreateConsumerAuthorizationRulesRequest
     *
     * @returns CreateConsumerAuthorizationRulesResponse
     *
     * @param CreateConsumerAuthorizationRulesRequest $request
     *
     * @return CreateConsumerAuthorizationRulesResponse
     */
    public function createConsumerAuthorizationRules($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createConsumerAuthorizationRulesWithOptions($request, $headers, $runtime);
    }

    /**
     * Creates a domain name.
     *
     * @remarks
     * Create Domain.
     *
     * @param request - CreateDomainRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateDomainResponse
     *
     * @param CreateDomainRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return CreateDomainResponse
     */
    public function createDomainWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->caCertIdentifier) {
            @$body['caCertIdentifier'] = $request->caCertIdentifier;
        }

        if (null !== $request->certIdentifier) {
            @$body['certIdentifier'] = $request->certIdentifier;
        }

        if (null !== $request->clientCACert) {
            @$body['clientCACert'] = $request->clientCACert;
        }

        if (null !== $request->forceHttps) {
            @$body['forceHttps'] = $request->forceHttps;
        }

        if (null !== $request->gatewayType) {
            @$body['gatewayType'] = $request->gatewayType;
        }

        if (null !== $request->http2Option) {
            @$body['http2Option'] = $request->http2Option;
        }

        if (null !== $request->mTLSEnabled) {
            @$body['mTLSEnabled'] = $request->mTLSEnabled;
        }

        if (null !== $request->name) {
            @$body['name'] = $request->name;
        }

        if (null !== $request->protocol) {
            @$body['protocol'] = $request->protocol;
        }

        if (null !== $request->resourceGroupId) {
            @$body['resourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->tlsCipherSuitesConfig) {
            @$body['tlsCipherSuitesConfig'] = $request->tlsCipherSuitesConfig;
        }

        if (null !== $request->tlsMax) {
            @$body['tlsMax'] = $request->tlsMax;
        }

        if (null !== $request->tlsMin) {
            @$body['tlsMin'] = $request->tlsMin;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateDomain',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/domains',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a domain name.
     *
     * @remarks
     * Create Domain.
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
        $headers = [];

        return $this->createDomainWithOptions($request, $headers, $runtime);
    }

    /**
     * CreateEnvironment.
     *
     * @remarks
     * Create environment.
     *
     * @deprecated OpenAPI CreateEnvironment is deprecated
     *
     * @param request - CreateEnvironmentRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateEnvironmentResponse
     *
     * @param CreateEnvironmentRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return CreateEnvironmentResponse
     */
    public function createEnvironmentWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->alias) {
            @$body['alias'] = $request->alias;
        }

        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->gatewayId) {
            @$body['gatewayId'] = $request->gatewayId;
        }

        if (null !== $request->name) {
            @$body['name'] = $request->name;
        }

        if (null !== $request->resourceGroupId) {
            @$body['resourceGroupId'] = $request->resourceGroupId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateEnvironment',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/environments',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateEnvironmentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    // Deprecated
    /**
     * CreateEnvironment.
     *
     * @remarks
     * Create environment.
     *
     * @deprecated OpenAPI CreateEnvironment is deprecated
     *
     * @param request - CreateEnvironmentRequest
     *
     * @returns CreateEnvironmentResponse
     *
     * @param CreateEnvironmentRequest $request
     *
     * @return CreateEnvironmentResponse
     */
    public function createEnvironment($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createEnvironmentWithOptions($request, $headers, $runtime);
    }

    /**
     * Creates a cloud-native gateway.
     *
     * @param request - CreateGatewayRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateGatewayResponse
     *
     * @param CreateGatewayRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return CreateGatewayResponse
     */
    public function createGatewayWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->chargeType) {
            @$body['chargeType'] = $request->chargeType;
        }

        if (null !== $request->gatewayEdition) {
            @$body['gatewayEdition'] = $request->gatewayEdition;
        }

        if (null !== $request->gatewayType) {
            @$body['gatewayType'] = $request->gatewayType;
        }

        if (null !== $request->logConfig) {
            @$body['logConfig'] = $request->logConfig;
        }

        if (null !== $request->name) {
            @$body['name'] = $request->name;
        }

        if (null !== $request->networkAccessConfig) {
            @$body['networkAccessConfig'] = $request->networkAccessConfig;
        }

        if (null !== $request->resourceGroupId) {
            @$body['resourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->spec) {
            @$body['spec'] = $request->spec;
        }

        if (null !== $request->tag) {
            @$body['tag'] = $request->tag;
        }

        if (null !== $request->vpcId) {
            @$body['vpcId'] = $request->vpcId;
        }

        if (null !== $request->zoneConfig) {
            @$body['zoneConfig'] = $request->zoneConfig;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateGateway',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/gateways',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateGatewayResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a cloud-native gateway.
     *
     * @param request - CreateGatewayRequest
     *
     * @returns CreateGatewayResponse
     *
     * @param CreateGatewayRequest $request
     *
     * @return CreateGatewayResponse
     */
    public function createGateway($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createGatewayWithOptions($request, $headers, $runtime);
    }

    /**
     * Creates an HTTP API.
     *
     * @param request - CreateHttpApiRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateHttpApiResponse
     *
     * @param CreateHttpApiRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return CreateHttpApiResponse
     */
    public function createHttpApiWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->agentProtocols) {
            @$body['agentProtocols'] = $request->agentProtocols;
        }

        if (null !== $request->aiProtocols) {
            @$body['aiProtocols'] = $request->aiProtocols;
        }

        if (null !== $request->authConfig) {
            @$body['authConfig'] = $request->authConfig;
        }

        if (null !== $request->basePath) {
            @$body['basePath'] = $request->basePath;
        }

        if (null !== $request->deployConfigs) {
            @$body['deployConfigs'] = $request->deployConfigs;
        }

        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->enableAuth) {
            @$body['enableAuth'] = $request->enableAuth;
        }

        if (null !== $request->firstByteTimeout) {
            @$body['firstByteTimeout'] = $request->firstByteTimeout;
        }

        if (null !== $request->ingressConfig) {
            @$body['ingressConfig'] = $request->ingressConfig;
        }

        if (null !== $request->modelCategory) {
            @$body['modelCategory'] = $request->modelCategory;
        }

        if (null !== $request->name) {
            @$body['name'] = $request->name;
        }

        if (null !== $request->protocols) {
            @$body['protocols'] = $request->protocols;
        }

        if (null !== $request->removeBasePathOnForward) {
            @$body['removeBasePathOnForward'] = $request->removeBasePathOnForward;
        }

        if (null !== $request->resourceGroupId) {
            @$body['resourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->type) {
            @$body['type'] = $request->type;
        }

        if (null !== $request->versionConfig) {
            @$body['versionConfig'] = $request->versionConfig;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateHttpApi',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/http-apis',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateHttpApiResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates an HTTP API.
     *
     * @param request - CreateHttpApiRequest
     *
     * @returns CreateHttpApiResponse
     *
     * @param CreateHttpApiRequest $request
     *
     * @return CreateHttpApiResponse
     */
    public function createHttpApi($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createHttpApiWithOptions($request, $headers, $runtime);
    }

    /**
     * Create an Operation for HTTP API.
     *
     * @param request - CreateHttpApiOperationRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateHttpApiOperationResponse
     *
     * @param string                        $httpApiId
     * @param CreateHttpApiOperationRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return CreateHttpApiOperationResponse
     */
    public function createHttpApiOperationWithOptions($httpApiId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->operations) {
            @$body['operations'] = $request->operations;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateHttpApiOperation',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/http-apis/' . Url::percentEncode($httpApiId) . '/operations',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateHttpApiOperationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Create an Operation for HTTP API.
     *
     * @param request - CreateHttpApiOperationRequest
     *
     * @returns CreateHttpApiOperationResponse
     *
     * @param string                        $httpApiId
     * @param CreateHttpApiOperationRequest $request
     *
     * @return CreateHttpApiOperationResponse
     */
    public function createHttpApiOperation($httpApiId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createHttpApiOperationWithOptions($httpApiId, $request, $headers, $runtime);
    }

    /**
     * Creates a route for an HTTP API.
     *
     * @param request - CreateHttpApiRouteRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateHttpApiRouteResponse
     *
     * @param string                    $httpApiId
     * @param CreateHttpApiRouteRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return CreateHttpApiRouteResponse
     */
    public function createHttpApiRouteWithOptions($httpApiId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->backendConfig) {
            @$body['backendConfig'] = $request->backendConfig;
        }

        if (null !== $request->deployConfigs) {
            @$body['deployConfigs'] = $request->deployConfigs;
        }

        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->domainIds) {
            @$body['domainIds'] = $request->domainIds;
        }

        if (null !== $request->environmentId) {
            @$body['environmentId'] = $request->environmentId;
        }

        if (null !== $request->match) {
            @$body['match'] = $request->match;
        }

        if (null !== $request->mcpRouteConfig) {
            @$body['mcpRouteConfig'] = $request->mcpRouteConfig;
        }

        if (null !== $request->name) {
            @$body['name'] = $request->name;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateHttpApiRoute',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/http-apis/' . Url::percentEncode($httpApiId) . '/routes',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateHttpApiRouteResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a route for an HTTP API.
     *
     * @param request - CreateHttpApiRouteRequest
     *
     * @returns CreateHttpApiRouteResponse
     *
     * @param string                    $httpApiId
     * @param CreateHttpApiRouteRequest $request
     *
     * @return CreateHttpApiRouteResponse
     */
    public function createHttpApiRoute($httpApiId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createHttpApiRouteWithOptions($httpApiId, $request, $headers, $runtime);
    }

    /**
     * Creates an MCP server.
     *
     * @param request - CreateMcpServerRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateMcpServerResponse
     *
     * @param CreateMcpServerRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return CreateMcpServerResponse
     */
    public function createMcpServerWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->assembledSources) {
            @$body['assembledSources'] = $request->assembledSources;
        }

        if (null !== $request->backendConfig) {
            @$body['backendConfig'] = $request->backendConfig;
        }

        if (null !== $request->createFromType) {
            @$body['createFromType'] = $request->createFromType;
        }

        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->domainIds) {
            @$body['domainIds'] = $request->domainIds;
        }

        if (null !== $request->exposedUriPath) {
            @$body['exposedUriPath'] = $request->exposedUriPath;
        }

        if (null !== $request->gatewayId) {
            @$body['gatewayId'] = $request->gatewayId;
        }

        if (null !== $request->grayMcpServerConfigs) {
            @$body['grayMcpServerConfigs'] = $request->grayMcpServerConfigs;
        }

        if (null !== $request->match) {
            @$body['match'] = $request->match;
        }

        if (null !== $request->mcpStatisticsEnable) {
            @$body['mcpStatisticsEnable'] = $request->mcpStatisticsEnable;
        }

        if (null !== $request->name) {
            @$body['name'] = $request->name;
        }

        if (null !== $request->protocol) {
            @$body['protocol'] = $request->protocol;
        }

        if (null !== $request->type) {
            @$body['type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateMcpServer',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/mcp-servers',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateMcpServerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates an MCP server.
     *
     * @param request - CreateMcpServerRequest
     *
     * @returns CreateMcpServerResponse
     *
     * @param CreateMcpServerRequest $request
     *
     * @return CreateMcpServerResponse
     */
    public function createMcpServer($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createMcpServerWithOptions($request, $headers, $runtime);
    }

    /**
     * Attaches a plug-in.
     *
     * @param request - CreatePluginAttachmentRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreatePluginAttachmentResponse
     *
     * @param CreatePluginAttachmentRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return CreatePluginAttachmentResponse
     */
    public function createPluginAttachmentWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->attachResourceIds) {
            @$body['attachResourceIds'] = $request->attachResourceIds;
        }

        if (null !== $request->attachResourceType) {
            @$body['attachResourceType'] = $request->attachResourceType;
        }

        if (null !== $request->enable) {
            @$body['enable'] = $request->enable;
        }

        if (null !== $request->environmentId) {
            @$body['environmentId'] = $request->environmentId;
        }

        if (null !== $request->gatewayId) {
            @$body['gatewayId'] = $request->gatewayId;
        }

        if (null !== $request->pluginConfig) {
            @$body['pluginConfig'] = $request->pluginConfig;
        }

        if (null !== $request->pluginId) {
            @$body['pluginId'] = $request->pluginId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreatePluginAttachment',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/plugin-attachments',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreatePluginAttachmentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Attaches a plug-in.
     *
     * @param request - CreatePluginAttachmentRequest
     *
     * @returns CreatePluginAttachmentResponse
     *
     * @param CreatePluginAttachmentRequest $request
     *
     * @return CreatePluginAttachmentResponse
     */
    public function createPluginAttachment($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createPluginAttachmentWithOptions($request, $headers, $runtime);
    }

    /**
     * Create Policy.
     *
     * @param request - CreatePolicyRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreatePolicyResponse
     *
     * @param CreatePolicyRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return CreatePolicyResponse
     */
    public function createPolicyWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->className) {
            @$body['className'] = $request->className;
        }

        if (null !== $request->config) {
            @$body['config'] = $request->config;
        }

        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->name) {
            @$body['name'] = $request->name;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreatePolicy',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v2/policies',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreatePolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Create Policy.
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
        $headers = [];

        return $this->createPolicyWithOptions($request, $headers, $runtime);
    }

    /**
     * Create policy resource mount.
     *
     * @param request - CreatePolicyAttachmentRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreatePolicyAttachmentResponse
     *
     * @param CreatePolicyAttachmentRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return CreatePolicyAttachmentResponse
     */
    public function createPolicyAttachmentWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->attachResourceId) {
            @$body['attachResourceId'] = $request->attachResourceId;
        }

        if (null !== $request->attachResourceType) {
            @$body['attachResourceType'] = $request->attachResourceType;
        }

        if (null !== $request->environmentId) {
            @$body['environmentId'] = $request->environmentId;
        }

        if (null !== $request->gatewayId) {
            @$body['gatewayId'] = $request->gatewayId;
        }

        if (null !== $request->policyId) {
            @$body['policyId'] = $request->policyId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreatePolicyAttachment',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/policy-attachments',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreatePolicyAttachmentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Create policy resource mount.
     *
     * @param request - CreatePolicyAttachmentRequest
     *
     * @returns CreatePolicyAttachmentResponse
     *
     * @param CreatePolicyAttachmentRequest $request
     *
     * @return CreatePolicyAttachmentResponse
     */
    public function createPolicyAttachment($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createPolicyAttachmentWithOptions($request, $headers, $runtime);
    }

    /**
     * 创建密钥.
     *
     * @param request - CreateSecretRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateSecretResponse
     *
     * @param CreateSecretRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return CreateSecretResponse
     */
    public function createSecretWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->gatewayType) {
            @$body['gatewayType'] = $request->gatewayType;
        }

        if (null !== $request->kmsConfig) {
            @$body['kmsConfig'] = $request->kmsConfig;
        }

        if (null !== $request->name) {
            @$body['name'] = $request->name;
        }

        if (null !== $request->secretData) {
            @$body['secretData'] = $request->secretData;
        }

        if (null !== $request->secretSource) {
            @$body['secretSource'] = $request->secretSource;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateSecret',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/secrets',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateSecretResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建密钥.
     *
     * @param request - CreateSecretRequest
     *
     * @returns CreateSecretResponse
     *
     * @param CreateSecretRequest $request
     *
     * @return CreateSecretResponse
     */
    public function createSecret($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createSecretWithOptions($request, $headers, $runtime);
    }

    /**
     * Creates a service.
     *
     * @remarks
     * You can call this operation to create multiple services at a time.
     *
     * @param request - CreateServiceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateServiceResponse
     *
     * @param CreateServiceRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return CreateServiceResponse
     */
    public function createServiceWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->gatewayId) {
            @$body['gatewayId'] = $request->gatewayId;
        }

        if (null !== $request->resourceGroupId) {
            @$body['resourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->serviceConfigs) {
            @$body['serviceConfigs'] = $request->serviceConfigs;
        }

        if (null !== $request->sourceType) {
            @$body['sourceType'] = $request->sourceType;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateService',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/services',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a service.
     *
     * @remarks
     * You can call this operation to create multiple services at a time.
     *
     * @param request - CreateServiceRequest
     *
     * @returns CreateServiceResponse
     *
     * @param CreateServiceRequest $request
     *
     * @return CreateServiceResponse
     */
    public function createService($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createServiceWithOptions($request, $headers, $runtime);
    }

    /**
     * Creates a service version.
     *
     * @param request - CreateServiceVersionRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateServiceVersionResponse
     *
     * @param string                      $serviceId
     * @param CreateServiceVersionRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return CreateServiceVersionResponse
     */
    public function createServiceVersionWithOptions($serviceId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->labels) {
            @$body['labels'] = $request->labels;
        }

        if (null !== $request->name) {
            @$body['name'] = $request->name;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateServiceVersion',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/services/' . Url::percentEncode($serviceId) . '/versions',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateServiceVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a service version.
     *
     * @param request - CreateServiceVersionRequest
     *
     * @returns CreateServiceVersionResponse
     *
     * @param string                      $serviceId
     * @param CreateServiceVersionRequest $request
     *
     * @return CreateServiceVersionResponse
     */
    public function createServiceVersion($serviceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createServiceVersionWithOptions($serviceId, $request, $headers, $runtime);
    }

    /**
     * 创建服务来源.
     *
     * @param request - CreateSourceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateSourceResponse
     *
     * @param CreateSourceRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return CreateSourceResponse
     */
    public function createSourceWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->gatewayId) {
            @$body['gatewayId'] = $request->gatewayId;
        }

        if (null !== $request->k8sSourceConfig) {
            @$body['k8sSourceConfig'] = $request->k8sSourceConfig;
        }

        if (null !== $request->nacosSourceConfig) {
            @$body['nacosSourceConfig'] = $request->nacosSourceConfig;
        }

        if (null !== $request->resourceGroupId) {
            @$body['resourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->type) {
            @$body['type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateSource',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/sources',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateSourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建服务来源.
     *
     * @param request - CreateSourceRequest
     *
     * @returns CreateSourceResponse
     *
     * @param CreateSourceRequest $request
     *
     * @return CreateSourceResponse
     */
    public function createSource($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createSourceWithOptions($request, $headers, $runtime);
    }

    /**
     * Deletes a consumer.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteConsumerResponse
     *
     * @param string         $consumerId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteConsumerResponse
     */
    public function deleteConsumerWithOptions($consumerId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteConsumer',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/consumers/' . Url::percentEncode($consumerId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteConsumerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a consumer.
     *
     * @returns DeleteConsumerResponse
     *
     * @param string $consumerId
     *
     * @return DeleteConsumerResponse
     */
    public function deleteConsumer($consumerId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteConsumerWithOptions($consumerId, $headers, $runtime);
    }

    /**
     * Deletes a consumer authorization rule.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteConsumerAuthorizationRuleResponse
     *
     * @param string         $consumerAuthorizationRuleId
     * @param string         $consumerId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteConsumerAuthorizationRuleResponse
     */
    public function deleteConsumerAuthorizationRuleWithOptions($consumerAuthorizationRuleId, $consumerId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteConsumerAuthorizationRule',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/consumers/' . Url::percentEncode($consumerId) . '/authorization-rules/' . Url::percentEncode($consumerAuthorizationRuleId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteConsumerAuthorizationRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a consumer authorization rule.
     *
     * @returns DeleteConsumerAuthorizationRuleResponse
     *
     * @param string $consumerAuthorizationRuleId
     * @param string $consumerId
     *
     * @return DeleteConsumerAuthorizationRuleResponse
     */
    public function deleteConsumerAuthorizationRule($consumerAuthorizationRuleId, $consumerId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteConsumerAuthorizationRuleWithOptions($consumerAuthorizationRuleId, $consumerId, $headers, $runtime);
    }

    /**
     * DeleteDomain.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteDomainResponse
     *
     * @param string         $domainId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteDomainResponse
     */
    public function deleteDomainWithOptions($domainId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteDomain',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/domains/' . Url::percentEncode($domainId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * DeleteDomain.
     *
     * @returns DeleteDomainResponse
     *
     * @param string $domainId
     *
     * @return DeleteDomainResponse
     */
    public function deleteDomain($domainId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteDomainWithOptions($domainId, $headers, $runtime);
    }

    /**
     * DeleteEnvironment.
     *
     * @deprecated OpenAPI DeleteEnvironment is deprecated
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteEnvironmentResponse
     *
     * @param string         $environmentId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteEnvironmentResponse
     */
    public function deleteEnvironmentWithOptions($environmentId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteEnvironment',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/environments/' . Url::percentEncode($environmentId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteEnvironmentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    // Deprecated
    /**
     * DeleteEnvironment.
     *
     * @deprecated OpenAPI DeleteEnvironment is deprecated
     *
     * @returns DeleteEnvironmentResponse
     *
     * @param string $environmentId
     *
     * @return DeleteEnvironmentResponse
     */
    public function deleteEnvironment($environmentId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteEnvironmentWithOptions($environmentId, $headers, $runtime);
    }

    /**
     * Delete Gateway.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteGatewayResponse
     *
     * @param string         $gatewayId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteGatewayResponse
     */
    public function deleteGatewayWithOptions($gatewayId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteGateway',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/gateways/' . Url::percentEncode($gatewayId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteGatewayResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Delete Gateway.
     *
     * @returns DeleteGatewayResponse
     *
     * @param string $gatewayId
     *
     * @return DeleteGatewayResponse
     */
    public function deleteGateway($gatewayId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteGatewayWithOptions($gatewayId, $headers, $runtime);
    }

    /**
     * Delete the security group rule of a gateway.
     *
     * @param request - DeleteGatewaySecurityGroupRuleRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteGatewaySecurityGroupRuleResponse
     *
     * @param string                                $gatewayId
     * @param string                                $securityGroupRuleId
     * @param DeleteGatewaySecurityGroupRuleRequest $request
     * @param string[]                              $headers
     * @param RuntimeOptions                        $runtime
     *
     * @return DeleteGatewaySecurityGroupRuleResponse
     */
    public function deleteGatewaySecurityGroupRuleWithOptions($gatewayId, $securityGroupRuleId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->cascadingDelete) {
            @$query['cascadingDelete'] = $request->cascadingDelete;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteGatewaySecurityGroupRule',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/gateways/' . Url::percentEncode($gatewayId) . '/security-group-rules/' . Url::percentEncode($securityGroupRuleId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteGatewaySecurityGroupRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Delete the security group rule of a gateway.
     *
     * @param request - DeleteGatewaySecurityGroupRuleRequest
     *
     * @returns DeleteGatewaySecurityGroupRuleResponse
     *
     * @param string                                $gatewayId
     * @param string                                $securityGroupRuleId
     * @param DeleteGatewaySecurityGroupRuleRequest $request
     *
     * @return DeleteGatewaySecurityGroupRuleResponse
     */
    public function deleteGatewaySecurityGroupRule($gatewayId, $securityGroupRuleId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteGatewaySecurityGroupRuleWithOptions($gatewayId, $securityGroupRuleId, $request, $headers, $runtime);
    }

    /**
     * Deletes an HTTP API.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteHttpApiResponse
     *
     * @param string         $httpApiId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteHttpApiResponse
     */
    public function deleteHttpApiWithOptions($httpApiId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteHttpApi',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/http-apis/' . Url::percentEncode($httpApiId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteHttpApiResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes an HTTP API.
     *
     * @returns DeleteHttpApiResponse
     *
     * @param string $httpApiId
     *
     * @return DeleteHttpApiResponse
     */
    public function deleteHttpApi($httpApiId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteHttpApiWithOptions($httpApiId, $headers, $runtime);
    }

    /**
     * Delete Operation.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteHttpApiOperationResponse
     *
     * @param string         $httpApiId
     * @param string         $operationId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteHttpApiOperationResponse
     */
    public function deleteHttpApiOperationWithOptions($httpApiId, $operationId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteHttpApiOperation',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/http-apis/' . Url::percentEncode($httpApiId) . '/operations/' . Url::percentEncode($operationId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteHttpApiOperationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Delete Operation.
     *
     * @returns DeleteHttpApiOperationResponse
     *
     * @param string $httpApiId
     * @param string $operationId
     *
     * @return DeleteHttpApiOperationResponse
     */
    public function deleteHttpApiOperation($httpApiId, $operationId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteHttpApiOperationWithOptions($httpApiId, $operationId, $headers, $runtime);
    }

    /**
     * Delete the route of an HttpApi.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteHttpApiRouteResponse
     *
     * @param string         $httpApiId
     * @param string         $routeId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteHttpApiRouteResponse
     */
    public function deleteHttpApiRouteWithOptions($httpApiId, $routeId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteHttpApiRoute',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/http-apis/' . Url::percentEncode($httpApiId) . '/routes/' . Url::percentEncode($routeId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteHttpApiRouteResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Delete the route of an HttpApi.
     *
     * @returns DeleteHttpApiRouteResponse
     *
     * @param string $httpApiId
     * @param string $routeId
     *
     * @return DeleteHttpApiRouteResponse
     */
    public function deleteHttpApiRoute($httpApiId, $routeId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteHttpApiRouteWithOptions($httpApiId, $routeId, $headers, $runtime);
    }

    /**
     * 删除MCP server.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteMcpServerResponse
     *
     * @param string         $mcpServerId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteMcpServerResponse
     */
    public function deleteMcpServerWithOptions($mcpServerId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteMcpServer',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/mcp-servers/' . Url::percentEncode($mcpServerId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteMcpServerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除MCP server.
     *
     * @returns DeleteMcpServerResponse
     *
     * @param string $mcpServerId
     *
     * @return DeleteMcpServerResponse
     */
    public function deleteMcpServer($mcpServerId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteMcpServerWithOptions($mcpServerId, $headers, $runtime);
    }

    /**
     * Deletes a plug-in attachment.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeletePluginAttachmentResponse
     *
     * @param string         $pluginAttachmentId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeletePluginAttachmentResponse
     */
    public function deletePluginAttachmentWithOptions($pluginAttachmentId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeletePluginAttachment',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/plugin-attachments/' . Url::percentEncode($pluginAttachmentId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeletePluginAttachmentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a plug-in attachment.
     *
     * @returns DeletePluginAttachmentResponse
     *
     * @param string $pluginAttachmentId
     *
     * @return DeletePluginAttachmentResponse
     */
    public function deletePluginAttachment($pluginAttachmentId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deletePluginAttachmentWithOptions($pluginAttachmentId, $headers, $runtime);
    }

    /**
     * Delete Policy.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeletePolicyResponse
     *
     * @param string         $policyId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeletePolicyResponse
     */
    public function deletePolicyWithOptions($policyId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeletePolicy',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v2/policies/' . Url::percentEncode($policyId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeletePolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Delete Policy.
     *
     * @returns DeletePolicyResponse
     *
     * @param string $policyId
     *
     * @return DeletePolicyResponse
     */
    public function deletePolicy($policyId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deletePolicyWithOptions($policyId, $headers, $runtime);
    }

    /**
     * Delete policy resource attachment.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeletePolicyAttachmentResponse
     *
     * @param string         $policyAttachmentId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeletePolicyAttachmentResponse
     */
    public function deletePolicyAttachmentWithOptions($policyAttachmentId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeletePolicyAttachment',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/policy-attachments/' . Url::percentEncode($policyAttachmentId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeletePolicyAttachmentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Delete policy resource attachment.
     *
     * @returns DeletePolicyAttachmentResponse
     *
     * @param string $policyAttachmentId
     *
     * @return DeletePolicyAttachmentResponse
     */
    public function deletePolicyAttachment($policyAttachmentId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deletePolicyAttachmentWithOptions($policyAttachmentId, $headers, $runtime);
    }

    /**
     * 删除密钥.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteSecretResponse
     *
     * @param string         $secretId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteSecretResponse
     */
    public function deleteSecretWithOptions($secretId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteSecret',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/secrets/' . Url::percentEncode($secretId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteSecretResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除密钥.
     *
     * @returns DeleteSecretResponse
     *
     * @param string $secretId
     *
     * @return DeleteSecretResponse
     */
    public function deleteSecret($secretId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteSecretWithOptions($secretId, $headers, $runtime);
    }

    /**
     * Deletes a service.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteServiceResponse
     *
     * @param string         $serviceId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteServiceResponse
     */
    public function deleteServiceWithOptions($serviceId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteService',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/services/' . Url::percentEncode($serviceId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a service.
     *
     * @returns DeleteServiceResponse
     *
     * @param string $serviceId
     *
     * @return DeleteServiceResponse
     */
    public function deleteService($serviceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteServiceWithOptions($serviceId, $headers, $runtime);
    }

    /**
     * Deletes a service version.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteServiceVersionResponse
     *
     * @param string         $serviceId
     * @param string         $name
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteServiceVersionResponse
     */
    public function deleteServiceVersionWithOptions($serviceId, $name, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteServiceVersion',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/services/' . Url::percentEncode($serviceId) . '/versions/' . Url::percentEncode($name) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteServiceVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a service version.
     *
     * @returns DeleteServiceVersionResponse
     *
     * @param string $serviceId
     * @param string $name
     *
     * @return DeleteServiceVersionResponse
     */
    public function deleteServiceVersion($serviceId, $name)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteServiceVersionWithOptions($serviceId, $name, $headers, $runtime);
    }

    /**
     * 删除服务来源.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteSourceResponse
     *
     * @param string         $sourceId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteSourceResponse
     */
    public function deleteSourceWithOptions($sourceId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteSource',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/sources/' . Url::percentEncode($sourceId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteSourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除服务来源.
     *
     * @returns DeleteSourceResponse
     *
     * @param string $sourceId
     *
     * @return DeleteSourceResponse
     */
    public function deleteSource($sourceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteSourceWithOptions($sourceId, $headers, $runtime);
    }

    /**
     * Deploy HttpApi.
     *
     * @param request - DeployHttpApiRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeployHttpApiResponse
     *
     * @param string               $httpApiId
     * @param DeployHttpApiRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return DeployHttpApiResponse
     */
    public function deployHttpApiWithOptions($httpApiId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->httpApiConfig) {
            @$body['httpApiConfig'] = $request->httpApiConfig;
        }

        if (null !== $request->restApiConfig) {
            @$body['restApiConfig'] = $request->restApiConfig;
        }

        if (null !== $request->routeId) {
            @$body['routeId'] = $request->routeId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeployHttpApi',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/http-apis/' . Url::percentEncode($httpApiId) . '/deploy',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeployHttpApiResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deploy HttpApi.
     *
     * @param request - DeployHttpApiRequest
     *
     * @returns DeployHttpApiResponse
     *
     * @param string               $httpApiId
     * @param DeployHttpApiRequest $request
     *
     * @return DeployHttpApiResponse
     */
    public function deployHttpApi($httpApiId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deployHttpApiWithOptions($httpApiId, $request, $headers, $runtime);
    }

    /**
     * Deploys an MCP server.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeployMcpServerResponse
     *
     * @param string         $mcpServerId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeployMcpServerResponse
     */
    public function deployMcpServerWithOptions($mcpServerId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeployMcpServer',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/mcp-servers/' . Url::percentEncode($mcpServerId) . '/deploy',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeployMcpServerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deploys an MCP server.
     *
     * @returns DeployMcpServerResponse
     *
     * @param string $mcpServerId
     *
     * @return DeployMcpServerResponse
     */
    public function deployMcpServer($mcpServerId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deployMcpServerWithOptions($mcpServerId, $headers, $runtime);
    }

    /**
     * Export HTTP API.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ExportHttpApiResponse
     *
     * @param string         $httpApiId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ExportHttpApiResponse
     */
    public function exportHttpApiWithOptions($httpApiId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'ExportHttpApi',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/http-apis/' . Url::percentEncode($httpApiId) . '/export',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ExportHttpApiResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Export HTTP API.
     *
     * @returns ExportHttpApiResponse
     *
     * @param string $httpApiId
     *
     * @return ExportHttpApiResponse
     */
    public function exportHttpApi($httpApiId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->exportHttpApiWithOptions($httpApiId, $headers, $runtime);
    }

    /**
     * Obtains the information of a consumer.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetConsumerResponse
     *
     * @param string         $consumerId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetConsumerResponse
     */
    public function getConsumerWithOptions($consumerId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetConsumer',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/consumers/' . Url::percentEncode($consumerId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetConsumerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Obtains the information of a consumer.
     *
     * @returns GetConsumerResponse
     *
     * @param string $consumerId
     *
     * @return GetConsumerResponse
     */
    public function getConsumer($consumerId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getConsumerWithOptions($consumerId, $headers, $runtime);
    }

    /**
     * Obtains a consumer authentication rule.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetConsumerAuthorizationRuleResponse
     *
     * @param string         $consumerAuthorizationRuleId
     * @param string         $consumerId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetConsumerAuthorizationRuleResponse
     */
    public function getConsumerAuthorizationRuleWithOptions($consumerAuthorizationRuleId, $consumerId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetConsumerAuthorizationRule',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/consumers/' . Url::percentEncode($consumerId) . '/authorization-rules/' . Url::percentEncode($consumerAuthorizationRuleId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetConsumerAuthorizationRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Obtains a consumer authentication rule.
     *
     * @returns GetConsumerAuthorizationRuleResponse
     *
     * @param string $consumerAuthorizationRuleId
     * @param string $consumerId
     *
     * @return GetConsumerAuthorizationRuleResponse
     */
    public function getConsumerAuthorizationRule($consumerAuthorizationRuleId, $consumerId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getConsumerAuthorizationRuleWithOptions($consumerAuthorizationRuleId, $consumerId, $headers, $runtime);
    }

    /**
     * Obtains data from dashboards.
     *
     * @param tmpReq - GetDashboardRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetDashboardResponse
     *
     * @param string              $gatewayId
     * @param GetDashboardRequest $tmpReq
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return GetDashboardResponse
     */
    public function getDashboardWithOptions($gatewayId, $tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new GetDashboardShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->filter) {
            $request->filterShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->filter, 'filter', 'json');
        }

        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['acceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->apiId) {
            @$query['apiId'] = $request->apiId;
        }

        if (null !== $request->filterShrink) {
            @$query['filter'] = $request->filterShrink;
        }

        if (null !== $request->name) {
            @$query['name'] = $request->name;
        }

        if (null !== $request->pluginClassId) {
            @$query['pluginClassId'] = $request->pluginClassId;
        }

        if (null !== $request->pluginId) {
            @$query['pluginId'] = $request->pluginId;
        }

        if (null !== $request->routeId) {
            @$query['routeId'] = $request->routeId;
        }

        if (null !== $request->source) {
            @$query['source'] = $request->source;
        }

        if (null !== $request->upstreamCluster) {
            @$query['upstreamCluster'] = $request->upstreamCluster;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetDashboard',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/gateways/' . Url::percentEncode($gatewayId) . '/dashboards',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetDashboardResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Obtains data from dashboards.
     *
     * @param request - GetDashboardRequest
     *
     * @returns GetDashboardResponse
     *
     * @param string              $gatewayId
     * @param GetDashboardRequest $request
     *
     * @return GetDashboardResponse
     */
    public function getDashboard($gatewayId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getDashboardWithOptions($gatewayId, $request, $headers, $runtime);
    }

    /**
     * Queries the information about a domain name.
     *
     * @param request - GetDomainRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetDomainResponse
     *
     * @param string           $domainId
     * @param GetDomainRequest $request
     * @param string[]         $headers
     * @param RuntimeOptions   $runtime
     *
     * @return GetDomainResponse
     */
    public function getDomainWithOptions($domainId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->withStatistics) {
            @$query['withStatistics'] = $request->withStatistics;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetDomain',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/domains/' . Url::percentEncode($domainId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about a domain name.
     *
     * @param request - GetDomainRequest
     *
     * @returns GetDomainResponse
     *
     * @param string           $domainId
     * @param GetDomainRequest $request
     *
     * @return GetDomainResponse
     */
    public function getDomain($domainId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getDomainWithOptions($domainId, $request, $headers, $runtime);
    }

    /**
     * GetEnvironment.
     *
     * @deprecated OpenAPI GetEnvironment is deprecated
     *
     * @param request - GetEnvironmentRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetEnvironmentResponse
     *
     * @param string                $environmentId
     * @param GetEnvironmentRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return GetEnvironmentResponse
     */
    public function getEnvironmentWithOptions($environmentId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->withStatistics) {
            @$query['withStatistics'] = $request->withStatistics;
        }

        if (null !== $request->withVpcInfo) {
            @$query['withVpcInfo'] = $request->withVpcInfo;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetEnvironment',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/environments/' . Url::percentEncode($environmentId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetEnvironmentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    // Deprecated
    /**
     * GetEnvironment.
     *
     * @deprecated OpenAPI GetEnvironment is deprecated
     *
     * @param request - GetEnvironmentRequest
     *
     * @returns GetEnvironmentResponse
     *
     * @param string                $environmentId
     * @param GetEnvironmentRequest $request
     *
     * @return GetEnvironmentResponse
     */
    public function getEnvironment($environmentId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getEnvironmentWithOptions($environmentId, $request, $headers, $runtime);
    }

    /**
     * Queries the basic information about an instance, such as the virtual private cloud (VPC) and vSwitch to which the instance belongs and its ingress.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetGatewayResponse
     *
     * @param string         $gatewayId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetGatewayResponse
     */
    public function getGatewayWithOptions($gatewayId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetGateway',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/gateways/' . Url::percentEncode($gatewayId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetGatewayResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the basic information about an instance, such as the virtual private cloud (VPC) and vSwitch to which the instance belongs and its ingress.
     *
     * @returns GetGatewayResponse
     *
     * @param string $gatewayId
     *
     * @return GetGatewayResponse
     */
    public function getGateway($gatewayId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getGatewayWithOptions($gatewayId, $headers, $runtime);
    }

    /**
     * Read HttpApi.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetHttpApiResponse
     *
     * @param string         $httpApiId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetHttpApiResponse
     */
    public function getHttpApiWithOptions($httpApiId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetHttpApi',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/http-apis/' . Url::percentEncode($httpApiId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetHttpApiResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Read HttpApi.
     *
     * @returns GetHttpApiResponse
     *
     * @param string $httpApiId
     *
     * @return GetHttpApiResponse
     */
    public function getHttpApi($httpApiId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getHttpApiWithOptions($httpApiId, $headers, $runtime);
    }

    /**
     * Get Operation.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetHttpApiOperationResponse
     *
     * @param string         $httpApiId
     * @param string         $operationId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetHttpApiOperationResponse
     */
    public function getHttpApiOperationWithOptions($httpApiId, $operationId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetHttpApiOperation',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/http-apis/' . Url::percentEncode($httpApiId) . '/operations/' . Url::percentEncode($operationId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetHttpApiOperationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Get Operation.
     *
     * @returns GetHttpApiOperationResponse
     *
     * @param string $httpApiId
     * @param string $operationId
     *
     * @return GetHttpApiOperationResponse
     */
    public function getHttpApiOperation($httpApiId, $operationId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getHttpApiOperationWithOptions($httpApiId, $operationId, $headers, $runtime);
    }

    /**
     * Queries the details of a route of an HTTP API.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetHttpApiRouteResponse
     *
     * @param string         $httpApiId
     * @param string         $routeId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetHttpApiRouteResponse
     */
    public function getHttpApiRouteWithOptions($httpApiId, $routeId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetHttpApiRoute',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/http-apis/' . Url::percentEncode($httpApiId) . '/routes/' . Url::percentEncode($routeId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetHttpApiRouteResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of a route of an HTTP API.
     *
     * @returns GetHttpApiRouteResponse
     *
     * @param string $httpApiId
     * @param string $routeId
     *
     * @return GetHttpApiRouteResponse
     */
    public function getHttpApiRoute($httpApiId, $routeId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getHttpApiRouteWithOptions($httpApiId, $routeId, $headers, $runtime);
    }

    /**
     * Queries the detailed information of an MCP server.
     *
     * @remarks
     * You can call this operation to create multiple services at a time.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetMcpServerResponse
     *
     * @param string         $mcpServerId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetMcpServerResponse
     */
    public function getMcpServerWithOptions($mcpServerId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetMcpServer',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/mcp-servers/' . Url::percentEncode($mcpServerId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetMcpServerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the detailed information of an MCP server.
     *
     * @remarks
     * You can call this operation to create multiple services at a time.
     *
     * @returns GetMcpServerResponse
     *
     * @param string $mcpServerId
     *
     * @return GetMcpServerResponse
     */
    public function getMcpServer($mcpServerId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getMcpServerWithOptions($mcpServerId, $headers, $runtime);
    }

    /**
     * Queries a plug-in attachment.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetPluginAttachmentResponse
     *
     * @param string         $pluginAttachmentId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetPluginAttachmentResponse
     */
    public function getPluginAttachmentWithOptions($pluginAttachmentId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetPluginAttachment',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/plugin-attachments/' . Url::percentEncode($pluginAttachmentId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetPluginAttachmentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a plug-in attachment.
     *
     * @returns GetPluginAttachmentResponse
     *
     * @param string $pluginAttachmentId
     *
     * @return GetPluginAttachmentResponse
     */
    public function getPluginAttachment($pluginAttachmentId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getPluginAttachmentWithOptions($pluginAttachmentId, $headers, $runtime);
    }

    /**
     * Queries a policy.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetPolicyResponse
     *
     * @param string         $policyId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetPolicyResponse
     */
    public function getPolicyWithOptions($policyId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetPolicy',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v2/policies/' . Url::percentEncode($policyId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a policy.
     *
     * @returns GetPolicyResponse
     *
     * @param string $policyId
     *
     * @return GetPolicyResponse
     */
    public function getPolicy($policyId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getPolicyWithOptions($policyId, $headers, $runtime);
    }

    /**
     * Query Policy Resource Attachment.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetPolicyAttachmentResponse
     *
     * @param string         $policyAttachmentId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetPolicyAttachmentResponse
     */
    public function getPolicyAttachmentWithOptions($policyAttachmentId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetPolicyAttachment',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/policy-attachments/' . Url::percentEncode($policyAttachmentId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetPolicyAttachmentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query Policy Resource Attachment.
     *
     * @returns GetPolicyAttachmentResponse
     *
     * @param string $policyAttachmentId
     *
     * @return GetPolicyAttachmentResponse
     */
    public function getPolicyAttachment($policyAttachmentId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getPolicyAttachmentWithOptions($policyAttachmentId, $headers, $runtime);
    }

    /**
     * Get resource overview information.
     *
     * @param request - GetResourceOverviewRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetResourceOverviewResponse
     *
     * @param GetResourceOverviewRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return GetResourceOverviewResponse
     */
    public function getResourceOverviewWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->gatewayType) {
            @$query['gatewayType'] = $request->gatewayType;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetResourceOverview',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/overview/resources',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetResourceOverviewResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Get resource overview information.
     *
     * @param request - GetResourceOverviewRequest
     *
     * @returns GetResourceOverviewResponse
     *
     * @param GetResourceOverviewRequest $request
     *
     * @return GetResourceOverviewResponse
     */
    public function getResourceOverview($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getResourceOverviewWithOptions($request, $headers, $runtime);
    }

    /**
     * 查询密钥值
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetSecretValueResponse
     *
     * @param string         $name
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetSecretValueResponse
     */
    public function getSecretValueWithOptions($name, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetSecretValue',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/secrets/name/' . Url::percentEncode($name) . '/value',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetSecretValueResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询密钥值
     *
     * @returns GetSecretValueResponse
     *
     * @param string $name
     *
     * @return GetSecretValueResponse
     */
    public function getSecretValue($name)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getSecretValueWithOptions($name, $headers, $runtime);
    }

    /**
     * Queries the details of a service.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetServiceResponse
     *
     * @param string         $serviceId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetServiceResponse
     */
    public function getServiceWithOptions($serviceId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetService',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/services/' . Url::percentEncode($serviceId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of a service.
     *
     * @returns GetServiceResponse
     *
     * @param string $serviceId
     *
     * @return GetServiceResponse
     */
    public function getService($serviceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getServiceWithOptions($serviceId, $headers, $runtime);
    }

    /**
     * Obtains the details of a service source.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetSourceResponse
     *
     * @param string         $sourceId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetSourceResponse
     */
    public function getSourceWithOptions($sourceId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetSource',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/sources/' . Url::percentEncode($sourceId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetSourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Obtains the details of a service source.
     *
     * @returns GetSourceResponse
     *
     * @param string $sourceId
     *
     * @return GetSourceResponse
     */
    public function getSource($sourceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getSourceWithOptions($sourceId, $headers, $runtime);
    }

    /**
     * Retrieve Tracing Configuration.
     *
     * @param request - GetTraceConfigRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetTraceConfigResponse
     *
     * @param string                $gatewayId
     * @param GetTraceConfigRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return GetTraceConfigResponse
     */
    public function getTraceConfigWithOptions($gatewayId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['acceptLanguage'] = $request->acceptLanguage;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetTraceConfig',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/gateways/' . Url::percentEncode($gatewayId) . '/trace',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetTraceConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieve Tracing Configuration.
     *
     * @param request - GetTraceConfigRequest
     *
     * @returns GetTraceConfigResponse
     *
     * @param string                $gatewayId
     * @param GetTraceConfigRequest $request
     *
     * @return GetTraceConfigResponse
     */
    public function getTraceConfig($gatewayId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getTraceConfigWithOptions($gatewayId, $request, $headers, $runtime);
    }

    /**
     * Imports HTTP APIs. You can call this operation to import OpenAPI 2.0 and OpenAPI 3.0.x definition files to create REST APIs.
     *
     * @param request - ImportHttpApiRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ImportHttpApiResponse
     *
     * @param ImportHttpApiRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return ImportHttpApiResponse
     */
    public function importHttpApiWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->deployConfigs) {
            @$body['deployConfigs'] = $request->deployConfigs;
        }

        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->dryRun) {
            @$body['dryRun'] = $request->dryRun;
        }

        if (null !== $request->gatewayId) {
            @$body['gatewayId'] = $request->gatewayId;
        }

        if (null !== $request->mcpRouteId) {
            @$body['mcpRouteId'] = $request->mcpRouteId;
        }

        if (null !== $request->name) {
            @$body['name'] = $request->name;
        }

        if (null !== $request->resourceGroupId) {
            @$body['resourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->specContentBase64) {
            @$body['specContentBase64'] = $request->specContentBase64;
        }

        if (null !== $request->specFileUrl) {
            @$body['specFileUrl'] = $request->specFileUrl;
        }

        if (null !== $request->specOssConfig) {
            @$body['specOssConfig'] = $request->specOssConfig;
        }

        if (null !== $request->strategy) {
            @$body['strategy'] = $request->strategy;
        }

        if (null !== $request->targetHttpApiId) {
            @$body['targetHttpApiId'] = $request->targetHttpApiId;
        }

        if (null !== $request->versionConfig) {
            @$body['versionConfig'] = $request->versionConfig;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ImportHttpApi',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/http-apis/import',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ImportHttpApiResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Imports HTTP APIs. You can call this operation to import OpenAPI 2.0 and OpenAPI 3.0.x definition files to create REST APIs.
     *
     * @param request - ImportHttpApiRequest
     *
     * @returns ImportHttpApiResponse
     *
     * @param ImportHttpApiRequest $request
     *
     * @return ImportHttpApiResponse
     */
    public function importHttpApi($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->importHttpApiWithOptions($request, $headers, $runtime);
    }

    /**
     * Installs a plug-in.
     *
     * @param request - InstallPluginRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns InstallPluginResponse
     *
     * @param InstallPluginRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return InstallPluginResponse
     */
    public function installPluginWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->gatewayIds) {
            @$body['gatewayIds'] = $request->gatewayIds;
        }

        if (null !== $request->pluginClassId) {
            @$body['pluginClassId'] = $request->pluginClassId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'InstallPlugin',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/plugins/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return InstallPluginResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Installs a plug-in.
     *
     * @param request - InstallPluginRequest
     *
     * @returns InstallPluginResponse
     *
     * @param InstallPluginRequest $request
     *
     * @return InstallPluginResponse
     */
    public function installPlugin($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->installPluginWithOptions($request, $headers, $runtime);
    }

    /**
     * 查询消费者授权规则列表.
     *
     * @param request - ListConsumerAuthorizationRulesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListConsumerAuthorizationRulesResponse
     *
     * @param string                                $consumerId
     * @param ListConsumerAuthorizationRulesRequest $request
     * @param string[]                              $headers
     * @param RuntimeOptions                        $runtime
     *
     * @return ListConsumerAuthorizationRulesResponse
     */
    public function listConsumerAuthorizationRulesWithOptions($consumerId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->apiNameLike) {
            @$query['apiNameLike'] = $request->apiNameLike;
        }

        if (null !== $request->pageNumber) {
            @$query['pageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListConsumerAuthorizationRules',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/consumers/' . Url::percentEncode($consumerId) . '/authorization-rules',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListConsumerAuthorizationRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询消费者授权规则列表.
     *
     * @param request - ListConsumerAuthorizationRulesRequest
     *
     * @returns ListConsumerAuthorizationRulesResponse
     *
     * @param string                                $consumerId
     * @param ListConsumerAuthorizationRulesRequest $request
     *
     * @return ListConsumerAuthorizationRulesResponse
     */
    public function listConsumerAuthorizationRules($consumerId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listConsumerAuthorizationRulesWithOptions($consumerId, $request, $headers, $runtime);
    }

    /**
     * Queries a list of consumers.
     *
     * @param request - ListConsumersRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListConsumersResponse
     *
     * @param ListConsumersRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return ListConsumersResponse
     */
    public function listConsumersWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->gatewayType) {
            @$query['gatewayType'] = $request->gatewayType;
        }

        if (null !== $request->nameLike) {
            @$query['nameLike'] = $request->nameLike;
        }

        if (null !== $request->pageNumber) {
            @$query['pageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListConsumers',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/consumers',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListConsumersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of consumers.
     *
     * @param request - ListConsumersRequest
     *
     * @returns ListConsumersResponse
     *
     * @param ListConsumersRequest $request
     *
     * @return ListConsumersResponse
     */
    public function listConsumers($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listConsumersWithOptions($request, $headers, $runtime);
    }

    /**
     * Queries a list of domain names.
     *
     * @param request - ListDomainsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListDomainsResponse
     *
     * @param ListDomainsRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return ListDomainsResponse
     */
    public function listDomainsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->gatewayId) {
            @$query['gatewayId'] = $request->gatewayId;
        }

        if (null !== $request->gatewayType) {
            @$query['gatewayType'] = $request->gatewayType;
        }

        if (null !== $request->nameLike) {
            @$query['nameLike'] = $request->nameLike;
        }

        if (null !== $request->pageNumber) {
            @$query['pageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->resourceGroupId) {
            @$query['resourceGroupId'] = $request->resourceGroupId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListDomains',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/domains',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListDomainsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of domain names.
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
        $headers = [];

        return $this->listDomainsWithOptions($request, $headers, $runtime);
    }

    /**
     * ListEnvironments.
     *
     * @deprecated OpenAPI ListEnvironments is deprecated
     *
     * @param request - ListEnvironmentsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListEnvironmentsResponse
     *
     * @param ListEnvironmentsRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return ListEnvironmentsResponse
     */
    public function listEnvironmentsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->aliasLike) {
            @$query['aliasLike'] = $request->aliasLike;
        }

        if (null !== $request->gatewayId) {
            @$query['gatewayId'] = $request->gatewayId;
        }

        if (null !== $request->gatewayNameLike) {
            @$query['gatewayNameLike'] = $request->gatewayNameLike;
        }

        if (null !== $request->gatewayType) {
            @$query['gatewayType'] = $request->gatewayType;
        }

        if (null !== $request->nameLike) {
            @$query['nameLike'] = $request->nameLike;
        }

        if (null !== $request->pageNumber) {
            @$query['pageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->resourceGroupId) {
            @$query['resourceGroupId'] = $request->resourceGroupId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListEnvironments',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/environments',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListEnvironmentsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    // Deprecated
    /**
     * ListEnvironments.
     *
     * @deprecated OpenAPI ListEnvironments is deprecated
     *
     * @param request - ListEnvironmentsRequest
     *
     * @returns ListEnvironmentsResponse
     *
     * @param ListEnvironmentsRequest $request
     *
     * @return ListEnvironmentsResponse
     */
    public function listEnvironments($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listEnvironmentsWithOptions($request, $headers, $runtime);
    }

    /**
     * Queries the feature parameter configurations of an instance.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListGatewayFeaturesResponse
     *
     * @param string         $gatewayId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ListGatewayFeaturesResponse
     */
    public function listGatewayFeaturesWithOptions($gatewayId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'ListGatewayFeatures',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/gateways/' . Url::percentEncode($gatewayId) . '/gateway-features',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListGatewayFeaturesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the feature parameter configurations of an instance.
     *
     * @returns ListGatewayFeaturesResponse
     *
     * @param string $gatewayId
     *
     * @return ListGatewayFeaturesResponse
     */
    public function listGatewayFeatures($gatewayId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listGatewayFeaturesWithOptions($gatewayId, $headers, $runtime);
    }

    /**
     * Queries a list of instances.
     *
     * @param tmpReq - ListGatewaysRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListGatewaysResponse
     *
     * @param ListGatewaysRequest $tmpReq
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return ListGatewaysResponse
     */
    public function listGatewaysWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new ListGatewaysShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->tag) {
            $request->tagShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tag, 'tag', 'json');
        }

        $query = [];
        if (null !== $request->gatewayId) {
            @$query['gatewayId'] = $request->gatewayId;
        }

        if (null !== $request->gatewayType) {
            @$query['gatewayType'] = $request->gatewayType;
        }

        if (null !== $request->keyword) {
            @$query['keyword'] = $request->keyword;
        }

        if (null !== $request->name) {
            @$query['name'] = $request->name;
        }

        if (null !== $request->pageNumber) {
            @$query['pageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->resourceGroupId) {
            @$query['resourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->tagShrink) {
            @$query['tag'] = $request->tagShrink;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListGateways',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/gateways',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListGatewaysResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of instances.
     *
     * @param request - ListGatewaysRequest
     *
     * @returns ListGatewaysResponse
     *
     * @param ListGatewaysRequest $request
     *
     * @return ListGatewaysResponse
     */
    public function listGateways($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listGatewaysWithOptions($request, $headers, $runtime);
    }

    /**
     * List Operations.
     *
     * @param request - ListHttpApiOperationsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListHttpApiOperationsResponse
     *
     * @param string                       $httpApiId
     * @param ListHttpApiOperationsRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return ListHttpApiOperationsResponse
     */
    public function listHttpApiOperationsWithOptions($httpApiId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->consumerAuthorizationRuleId) {
            @$query['consumerAuthorizationRuleId'] = $request->consumerAuthorizationRuleId;
        }

        if (null !== $request->enableAuth) {
            @$query['enableAuth'] = $request->enableAuth;
        }

        if (null !== $request->forDeploy) {
            @$query['forDeploy'] = $request->forDeploy;
        }

        if (null !== $request->gatewayId) {
            @$query['gatewayId'] = $request->gatewayId;
        }

        if (null !== $request->method) {
            @$query['method'] = $request->method;
        }

        if (null !== $request->name) {
            @$query['name'] = $request->name;
        }

        if (null !== $request->nameLike) {
            @$query['nameLike'] = $request->nameLike;
        }

        if (null !== $request->pageNumber) {
            @$query['pageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->pathLike) {
            @$query['pathLike'] = $request->pathLike;
        }

        if (null !== $request->withConsumerInEnvironmentId) {
            @$query['withConsumerInEnvironmentId'] = $request->withConsumerInEnvironmentId;
        }

        if (null !== $request->withConsumerInfoById) {
            @$query['withConsumerInfoById'] = $request->withConsumerInfoById;
        }

        if (null !== $request->withPluginAttachmentByPluginId) {
            @$query['withPluginAttachmentByPluginId'] = $request->withPluginAttachmentByPluginId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListHttpApiOperations',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/http-apis/' . Url::percentEncode($httpApiId) . '/operations',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListHttpApiOperationsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * List Operations.
     *
     * @param request - ListHttpApiOperationsRequest
     *
     * @returns ListHttpApiOperationsResponse
     *
     * @param string                       $httpApiId
     * @param ListHttpApiOperationsRequest $request
     *
     * @return ListHttpApiOperationsResponse
     */
    public function listHttpApiOperations($httpApiId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listHttpApiOperationsWithOptions($httpApiId, $request, $headers, $runtime);
    }

    /**
     * Queries the routes of an HTTP API.
     *
     * @param request - ListHttpApiRoutesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListHttpApiRoutesResponse
     *
     * @param string                   $httpApiId
     * @param ListHttpApiRoutesRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return ListHttpApiRoutesResponse
     */
    public function listHttpApiRoutesWithOptions($httpApiId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->consumerAuthorizationRuleId) {
            @$query['consumerAuthorizationRuleId'] = $request->consumerAuthorizationRuleId;
        }

        if (null !== $request->deployStatuses) {
            @$query['deployStatuses'] = $request->deployStatuses;
        }

        if (null !== $request->domainId) {
            @$query['domainId'] = $request->domainId;
        }

        if (null !== $request->environmentId) {
            @$query['environmentId'] = $request->environmentId;
        }

        if (null !== $request->forDeploy) {
            @$query['forDeploy'] = $request->forDeploy;
        }

        if (null !== $request->gatewayId) {
            @$query['gatewayId'] = $request->gatewayId;
        }

        if (null !== $request->name) {
            @$query['name'] = $request->name;
        }

        if (null !== $request->nameLike) {
            @$query['nameLike'] = $request->nameLike;
        }

        if (null !== $request->pageNumber) {
            @$query['pageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->pathLike) {
            @$query['pathLike'] = $request->pathLike;
        }

        if (null !== $request->withAuthPolicyInfo) {
            @$query['withAuthPolicyInfo'] = $request->withAuthPolicyInfo;
        }

        if (null !== $request->withConsumerInfoById) {
            @$query['withConsumerInfoById'] = $request->withConsumerInfoById;
        }

        if (null !== $request->withPluginAttachmentByPluginId) {
            @$query['withPluginAttachmentByPluginId'] = $request->withPluginAttachmentByPluginId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListHttpApiRoutes',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/http-apis/' . Url::percentEncode($httpApiId) . '/routes',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListHttpApiRoutesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the routes of an HTTP API.
     *
     * @param request - ListHttpApiRoutesRequest
     *
     * @returns ListHttpApiRoutesResponse
     *
     * @param string                   $httpApiId
     * @param ListHttpApiRoutesRequest $request
     *
     * @return ListHttpApiRoutesResponse
     */
    public function listHttpApiRoutes($httpApiId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listHttpApiRoutesWithOptions($httpApiId, $request, $headers, $runtime);
    }

    /**
     * Queries a list of HTTP APIs.
     *
     * @param request - ListHttpApisRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListHttpApisResponse
     *
     * @param ListHttpApisRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return ListHttpApisResponse
     */
    public function listHttpApisWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->gatewayId) {
            @$query['gatewayId'] = $request->gatewayId;
        }

        if (null !== $request->gatewayType) {
            @$query['gatewayType'] = $request->gatewayType;
        }

        if (null !== $request->keyword) {
            @$query['keyword'] = $request->keyword;
        }

        if (null !== $request->name) {
            @$query['name'] = $request->name;
        }

        if (null !== $request->pageNumber) {
            @$query['pageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->resourceGroupId) {
            @$query['resourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->types) {
            @$query['types'] = $request->types;
        }

        if (null !== $request->withAPIsPublishedToEnvironment) {
            @$query['withAPIsPublishedToEnvironment'] = $request->withAPIsPublishedToEnvironment;
        }

        if (null !== $request->withAuthPolicyInEnvironmentId) {
            @$query['withAuthPolicyInEnvironmentId'] = $request->withAuthPolicyInEnvironmentId;
        }

        if (null !== $request->withAuthPolicyList) {
            @$query['withAuthPolicyList'] = $request->withAuthPolicyList;
        }

        if (null !== $request->withConsumerInfoById) {
            @$query['withConsumerInfoById'] = $request->withConsumerInfoById;
        }

        if (null !== $request->withEnvironmentInfo) {
            @$query['withEnvironmentInfo'] = $request->withEnvironmentInfo;
        }

        if (null !== $request->withEnvironmentInfoById) {
            @$query['withEnvironmentInfoById'] = $request->withEnvironmentInfoById;
        }

        if (null !== $request->withIngressInfo) {
            @$query['withIngressInfo'] = $request->withIngressInfo;
        }

        if (null !== $request->withPluginAttachmentByPluginId) {
            @$query['withPluginAttachmentByPluginId'] = $request->withPluginAttachmentByPluginId;
        }

        if (null !== $request->withPolicyConfigs) {
            @$query['withPolicyConfigs'] = $request->withPolicyConfigs;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListHttpApis',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/http-apis',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListHttpApisResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of HTTP APIs.
     *
     * @param request - ListHttpApisRequest
     *
     * @returns ListHttpApisResponse
     *
     * @param ListHttpApisRequest $request
     *
     * @return ListHttpApisResponse
     */
    public function listHttpApis($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listHttpApisWithOptions($request, $headers, $runtime);
    }

    /**
     * Retrieves a list of MCP servers.
     *
     * @remarks
     * You can call this operation to create multiple services at a time.
     *
     * @param request - ListMcpServersRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListMcpServersResponse
     *
     * @param ListMcpServersRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return ListMcpServersResponse
     */
    public function listMcpServersWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->createFromTypes) {
            @$query['createFromTypes'] = $request->createFromTypes;
        }

        if (null !== $request->deployStatuses) {
            @$query['deployStatuses'] = $request->deployStatuses;
        }

        if (null !== $request->gatewayId) {
            @$query['gatewayId'] = $request->gatewayId;
        }

        if (null !== $request->nameLike) {
            @$query['nameLike'] = $request->nameLike;
        }

        if (null !== $request->pageNumber) {
            @$query['pageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->type) {
            @$query['type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListMcpServers',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/mcp-servers',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListMcpServersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves a list of MCP servers.
     *
     * @remarks
     * You can call this operation to create multiple services at a time.
     *
     * @param request - ListMcpServersRequest
     *
     * @returns ListMcpServersResponse
     *
     * @param ListMcpServersRequest $request
     *
     * @return ListMcpServersResponse
     */
    public function listMcpServers($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listMcpServersWithOptions($request, $headers, $runtime);
    }

    /**
     * Retrieves a list of plug-in attachments.
     *
     * @param request - ListPluginAttachmentsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListPluginAttachmentsResponse
     *
     * @param ListPluginAttachmentsRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return ListPluginAttachmentsResponse
     */
    public function listPluginAttachmentsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->attachResourceId) {
            @$query['attachResourceId'] = $request->attachResourceId;
        }

        if (null !== $request->attachResourceType) {
            @$query['attachResourceType'] = $request->attachResourceType;
        }

        if (null !== $request->attachResourceTypes) {
            @$query['attachResourceTypes'] = $request->attachResourceTypes;
        }

        if (null !== $request->environmentId) {
            @$query['environmentId'] = $request->environmentId;
        }

        if (null !== $request->gatewayId) {
            @$query['gatewayId'] = $request->gatewayId;
        }

        if (null !== $request->pageNumber) {
            @$query['pageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->pluginId) {
            @$query['pluginId'] = $request->pluginId;
        }

        if (null !== $request->withParentResource) {
            @$query['withParentResource'] = $request->withParentResource;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListPluginAttachments',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/plugin-attachments',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListPluginAttachmentsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves a list of plug-in attachments.
     *
     * @param request - ListPluginAttachmentsRequest
     *
     * @returns ListPluginAttachmentsResponse
     *
     * @param ListPluginAttachmentsRequest $request
     *
     * @return ListPluginAttachmentsResponse
     */
    public function listPluginAttachments($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listPluginAttachmentsWithOptions($request, $headers, $runtime);
    }

    /**
     * ListPluginClasses.
     *
     * @param request - ListPluginClassesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListPluginClassesResponse
     *
     * @param ListPluginClassesRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return ListPluginClassesResponse
     */
    public function listPluginClassesWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->aliasLike) {
            @$query['aliasLike'] = $request->aliasLike;
        }

        if (null !== $request->direction) {
            @$query['direction'] = $request->direction;
        }

        if (null !== $request->excludeBuiltinAiProxy) {
            @$query['excludeBuiltinAiProxy'] = $request->excludeBuiltinAiProxy;
        }

        if (null !== $request->gatewayId) {
            @$query['gatewayId'] = $request->gatewayId;
        }

        if (null !== $request->gatewayType) {
            @$query['gatewayType'] = $request->gatewayType;
        }

        if (null !== $request->installed) {
            @$query['installed'] = $request->installed;
        }

        if (null !== $request->nameLike) {
            @$query['nameLike'] = $request->nameLike;
        }

        if (null !== $request->pageNumber) {
            @$query['pageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->source) {
            @$query['source'] = $request->source;
        }

        if (null !== $request->type) {
            @$query['type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListPluginClasses',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/plugin-classes',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListPluginClassesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ListPluginClasses.
     *
     * @param request - ListPluginClassesRequest
     *
     * @returns ListPluginClassesResponse
     *
     * @param ListPluginClassesRequest $request
     *
     * @return ListPluginClassesResponse
     */
    public function listPluginClasses($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listPluginClassesWithOptions($request, $headers, $runtime);
    }

    /**
     * Queries plug-ins.
     *
     * @param request - ListPluginsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListPluginsResponse
     *
     * @param ListPluginsRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return ListPluginsResponse
     */
    public function listPluginsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->attachResourceId) {
            @$query['attachResourceId'] = $request->attachResourceId;
        }

        if (null !== $request->attachResourceType) {
            @$query['attachResourceType'] = $request->attachResourceType;
        }

        if (null !== $request->gatewayId) {
            @$query['gatewayId'] = $request->gatewayId;
        }

        if (null !== $request->gatewayType) {
            @$query['gatewayType'] = $request->gatewayType;
        }

        if (null !== $request->includeBuiltinAiGateway) {
            @$query['includeBuiltinAiGateway'] = $request->includeBuiltinAiGateway;
        }

        if (null !== $request->pageNumber) {
            @$query['pageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->pluginClassId) {
            @$query['pluginClassId'] = $request->pluginClassId;
        }

        if (null !== $request->pluginClassName) {
            @$query['pluginClassName'] = $request->pluginClassName;
        }

        if (null !== $request->withAttachmentInfo) {
            @$query['withAttachmentInfo'] = $request->withAttachmentInfo;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListPlugins',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/plugins',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListPluginsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries plug-ins.
     *
     * @param request - ListPluginsRequest
     *
     * @returns ListPluginsResponse
     *
     * @param ListPluginsRequest $request
     *
     * @return ListPluginsResponse
     */
    public function listPlugins($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listPluginsWithOptions($request, $headers, $runtime);
    }

    /**
     * Queries policies.
     *
     * @param request - ListPoliciesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListPoliciesResponse
     *
     * @param ListPoliciesRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return ListPoliciesResponse
     */
    public function listPoliciesWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->attachResourceId) {
            @$query['attachResourceId'] = $request->attachResourceId;
        }

        if (null !== $request->attachResourceType) {
            @$query['attachResourceType'] = $request->attachResourceType;
        }

        if (null !== $request->environmentId) {
            @$query['environmentId'] = $request->environmentId;
        }

        if (null !== $request->gatewayId) {
            @$query['gatewayId'] = $request->gatewayId;
        }

        if (null !== $request->withAttachments) {
            @$query['withAttachments'] = $request->withAttachments;
        }

        if (null !== $request->withSystemPolicy) {
            @$query['withSystemPolicy'] = $request->withSystemPolicy;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListPolicies',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/policies',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListPoliciesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries policies.
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
        $headers = [];

        return $this->listPoliciesWithOptions($request, $headers, $runtime);
    }

    /**
     * ListPolicyClasses.
     *
     * @param request - ListPolicyClassesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListPolicyClassesResponse
     *
     * @param ListPolicyClassesRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return ListPolicyClassesResponse
     */
    public function listPolicyClassesWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->attachResourceId) {
            @$query['attachResourceId'] = $request->attachResourceId;
        }

        if (null !== $request->attachResourceType) {
            @$query['attachResourceType'] = $request->attachResourceType;
        }

        if (null !== $request->direction) {
            @$query['direction'] = $request->direction;
        }

        if (null !== $request->gatewayId) {
            @$query['gatewayId'] = $request->gatewayId;
        }

        if (null !== $request->pageNumber) {
            @$query['pageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->type) {
            @$query['type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListPolicyClasses',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/policy-classes',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListPolicyClassesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ListPolicyClasses.
     *
     * @param request - ListPolicyClassesRequest
     *
     * @returns ListPolicyClassesResponse
     *
     * @param ListPolicyClassesRequest $request
     *
     * @return ListPolicyClassesResponse
     */
    public function listPolicyClasses($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listPolicyClassesWithOptions($request, $headers, $runtime);
    }

    /**
     * 查询密钥的引用详情.
     *
     * @param request - ListSecretReferencesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListSecretReferencesResponse
     *
     * @param string                      $secretId
     * @param ListSecretReferencesRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return ListSecretReferencesResponse
     */
    public function listSecretReferencesWithOptions($secretId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->pageNumber) {
            @$query['pageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListSecretReferences',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/secrets/' . Url::percentEncode($secretId) . '/references',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListSecretReferencesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询密钥的引用详情.
     *
     * @param request - ListSecretReferencesRequest
     *
     * @returns ListSecretReferencesResponse
     *
     * @param string                      $secretId
     * @param ListSecretReferencesRequest $request
     *
     * @return ListSecretReferencesResponse
     */
    public function listSecretReferences($secretId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listSecretReferencesWithOptions($secretId, $request, $headers, $runtime);
    }

    /**
     * 查询密钥列表.
     *
     * @param request - ListSecretsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListSecretsResponse
     *
     * @param ListSecretsRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return ListSecretsResponse
     */
    public function listSecretsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->gatewayType) {
            @$query['gatewayType'] = $request->gatewayType;
        }

        if (null !== $request->nameLike) {
            @$query['nameLike'] = $request->nameLike;
        }

        if (null !== $request->pageNumber) {
            @$query['pageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListSecrets',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/secrets',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListSecretsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询密钥列表.
     *
     * @param request - ListSecretsRequest
     *
     * @returns ListSecretsResponse
     *
     * @param ListSecretsRequest $request
     *
     * @return ListSecretsResponse
     */
    public function listSecrets($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listSecretsWithOptions($request, $headers, $runtime);
    }

    /**
     * Queries a list of services.
     *
     * @param request - ListServicesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListServicesResponse
     *
     * @param ListServicesRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return ListServicesResponse
     */
    public function listServicesWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->gatewayId) {
            @$query['gatewayId'] = $request->gatewayId;
        }

        if (null !== $request->name) {
            @$query['name'] = $request->name;
        }

        if (null !== $request->pageNumber) {
            @$query['pageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->resourceGroupId) {
            @$query['resourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->sourceType) {
            @$query['sourceType'] = $request->sourceType;
        }

        if (null !== $request->sourceTypes) {
            @$query['sourceTypes'] = $request->sourceTypes;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListServices',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/services',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListServicesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of services.
     *
     * @param request - ListServicesRequest
     *
     * @returns ListServicesResponse
     *
     * @param ListServicesRequest $request
     *
     * @return ListServicesResponse
     */
    public function listServices($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listServicesWithOptions($request, $headers, $runtime);
    }

    /**
     * ListSslCerts.
     *
     * @param request - ListSslCertsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListSslCertsResponse
     *
     * @param ListSslCertsRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return ListSslCertsResponse
     */
    public function listSslCertsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->certNameLike) {
            @$query['certNameLike'] = $request->certNameLike;
        }

        if (null !== $request->domainName) {
            @$query['domainName'] = $request->domainName;
        }

        if (null !== $request->pageNumber) {
            @$query['pageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListSslCerts',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/ssl/certs',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListSslCertsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ListSslCerts.
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
        $headers = [];

        return $this->listSslCertsWithOptions($request, $headers, $runtime);
    }

    /**
     * Retrieve the availability zones under a cloud-native API gateway region.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListZonesResponse
     *
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ListZonesResponse
     */
    public function listZonesWithOptions($headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'ListZones',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/zones',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListZonesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieve the availability zones under a cloud-native API gateway region.
     *
     * @returns ListZonesResponse
     *
     * @return ListZonesResponse
     */
    public function listZones()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listZonesWithOptions($headers, $runtime);
    }

    /**
     * Queries a list of consumer authentication rules.
     *
     * @param request - QueryConsumerAuthorizationRulesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryConsumerAuthorizationRulesResponse
     *
     * @param QueryConsumerAuthorizationRulesRequest $request
     * @param string[]                               $headers
     * @param RuntimeOptions                         $runtime
     *
     * @return QueryConsumerAuthorizationRulesResponse
     */
    public function queryConsumerAuthorizationRulesWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->apiNameLike) {
            @$query['apiNameLike'] = $request->apiNameLike;
        }

        if (null !== $request->consumerId) {
            @$query['consumerId'] = $request->consumerId;
        }

        if (null !== $request->consumerNameLike) {
            @$query['consumerNameLike'] = $request->consumerNameLike;
        }

        if (null !== $request->environmentId) {
            @$query['environmentId'] = $request->environmentId;
        }

        if (null !== $request->groupByApi) {
            @$query['groupByApi'] = $request->groupByApi;
        }

        if (null !== $request->pageNumber) {
            @$query['pageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->parentResourceId) {
            @$query['parentResourceId'] = $request->parentResourceId;
        }

        if (null !== $request->resourceId) {
            @$query['resourceId'] = $request->resourceId;
        }

        if (null !== $request->resourceType) {
            @$query['resourceType'] = $request->resourceType;
        }

        if (null !== $request->resourceTypes) {
            @$query['resourceTypes'] = $request->resourceTypes;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryConsumerAuthorizationRules',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/authorization-rules',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return QueryConsumerAuthorizationRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of consumer authentication rules.
     *
     * @param request - QueryConsumerAuthorizationRulesRequest
     *
     * @returns QueryConsumerAuthorizationRulesResponse
     *
     * @param QueryConsumerAuthorizationRulesRequest $request
     *
     * @return QueryConsumerAuthorizationRulesResponse
     */
    public function queryConsumerAuthorizationRules($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->queryConsumerAuthorizationRulesWithOptions($request, $headers, $runtime);
    }

    /**
     * Deletes a consumer authorization rule.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RemoveConsumerAuthorizationRuleResponse
     *
     * @param string         $consumerAuthorizationRuleId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return RemoveConsumerAuthorizationRuleResponse
     */
    public function removeConsumerAuthorizationRuleWithOptions($consumerAuthorizationRuleId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'RemoveConsumerAuthorizationRule',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/authorization-rules/' . Url::percentEncode($consumerAuthorizationRuleId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return RemoveConsumerAuthorizationRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a consumer authorization rule.
     *
     * @returns RemoveConsumerAuthorizationRuleResponse
     *
     * @param string $consumerAuthorizationRuleId
     *
     * @return RemoveConsumerAuthorizationRuleResponse
     */
    public function removeConsumerAuthorizationRule($consumerAuthorizationRuleId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->removeConsumerAuthorizationRuleWithOptions($consumerAuthorizationRuleId, $headers, $runtime);
    }

    /**
     * Gateway Restart.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RestartGatewayResponse
     *
     * @param string         $gatewayId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return RestartGatewayResponse
     */
    public function restartGatewayWithOptions($gatewayId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'RestartGateway',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/gateways/' . Url::percentEncode($gatewayId) . '/restart',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return RestartGatewayResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Gateway Restart.
     *
     * @returns RestartGatewayResponse
     *
     * @param string $gatewayId
     *
     * @return RestartGatewayResponse
     */
    public function restartGateway($gatewayId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->restartGatewayWithOptions($gatewayId, $headers, $runtime);
    }

    /**
     * Synchronizes Nacos Model Context Protocol (MCP) server configurations to Cloud-native API Gateway.
     *
     * @param request - SyncMCPServersRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SyncMCPServersResponse
     *
     * @param SyncMCPServersRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return SyncMCPServersResponse
     */
    public function syncMCPServersWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->domainIds) {
            @$body['domainIds'] = $request->domainIds;
        }

        if (null !== $request->gatewayId) {
            @$body['gatewayId'] = $request->gatewayId;
        }

        if (null !== $request->nacosMcpServers) {
            @$body['nacosMcpServers'] = $request->nacosMcpServers;
        }

        if (null !== $request->namespace) {
            @$body['namespace'] = $request->namespace;
        }

        if (null !== $request->sourceId) {
            @$body['sourceId'] = $request->sourceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'SyncMCPServers',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/mcp-servers/sync-mcp-server',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return SyncMCPServersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Synchronizes Nacos Model Context Protocol (MCP) server configurations to Cloud-native API Gateway.
     *
     * @param request - SyncMCPServersRequest
     *
     * @returns SyncMCPServersResponse
     *
     * @param SyncMCPServersRequest $request
     *
     * @return SyncMCPServersResponse
     */
    public function syncMCPServers($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->syncMCPServersWithOptions($request, $headers, $runtime);
    }

    /**
     * Undeploys an MCP server.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UnDeployMcpServerResponse
     *
     * @param string         $mcpServerId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return UnDeployMcpServerResponse
     */
    public function unDeployMcpServerWithOptions($mcpServerId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'UnDeployMcpServer',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/mcp-servers/' . Url::percentEncode($mcpServerId) . '/undeploy',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UnDeployMcpServerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Undeploys an MCP server.
     *
     * @returns UnDeployMcpServerResponse
     *
     * @param string $mcpServerId
     *
     * @return UnDeployMcpServerResponse
     */
    public function unDeployMcpServer($mcpServerId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->unDeployMcpServerWithOptions($mcpServerId, $headers, $runtime);
    }

    /**
     * Unpublishes an HTTP API.
     *
     * @param request - UndeployHttpApiRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UndeployHttpApiResponse
     *
     * @param string                 $httpApiId
     * @param UndeployHttpApiRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return UndeployHttpApiResponse
     */
    public function undeployHttpApiWithOptions($httpApiId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->environmentId) {
            @$body['environmentId'] = $request->environmentId;
        }

        if (null !== $request->gatewayId) {
            @$body['gatewayId'] = $request->gatewayId;
        }

        if (null !== $request->operationId) {
            @$body['operationId'] = $request->operationId;
        }

        if (null !== $request->routeId) {
            @$body['routeId'] = $request->routeId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UndeployHttpApi',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/http-apis/' . Url::percentEncode($httpApiId) . '/undeploy',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UndeployHttpApiResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Unpublishes an HTTP API.
     *
     * @param request - UndeployHttpApiRequest
     *
     * @returns UndeployHttpApiResponse
     *
     * @param string                 $httpApiId
     * @param UndeployHttpApiRequest $request
     *
     * @return UndeployHttpApiResponse
     */
    public function undeployHttpApi($httpApiId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->undeployHttpApiWithOptions($httpApiId, $request, $headers, $runtime);
    }

    /**
     * Uninstalls a plug-in.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UninstallPluginResponse
     *
     * @param string         $pluginId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return UninstallPluginResponse
     */
    public function uninstallPluginWithOptions($pluginId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'UninstallPlugin',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/plugins/' . Url::percentEncode($pluginId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UninstallPluginResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Uninstalls a plug-in.
     *
     * @returns UninstallPluginResponse
     *
     * @param string $pluginId
     *
     * @return UninstallPluginResponse
     */
    public function uninstallPlugin($pluginId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->uninstallPluginWithOptions($pluginId, $headers, $runtime);
    }

    /**
     * Updates and associates a policy.
     *
     * @param request - UpdateAndAttachPolicyRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateAndAttachPolicyResponse
     *
     * @param string                       $policyId
     * @param UpdateAndAttachPolicyRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return UpdateAndAttachPolicyResponse
     */
    public function updateAndAttachPolicyWithOptions($policyId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->attachResourceIds) {
            @$body['attachResourceIds'] = $request->attachResourceIds;
        }

        if (null !== $request->attachResourceType) {
            @$body['attachResourceType'] = $request->attachResourceType;
        }

        if (null !== $request->config) {
            @$body['config'] = $request->config;
        }

        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->environmentId) {
            @$body['environmentId'] = $request->environmentId;
        }

        if (null !== $request->gatewayId) {
            @$body['gatewayId'] = $request->gatewayId;
        }

        if (null !== $request->name) {
            @$body['name'] = $request->name;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateAndAttachPolicy',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/policies/' . Url::percentEncode($policyId) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateAndAttachPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates and associates a policy.
     *
     * @param request - UpdateAndAttachPolicyRequest
     *
     * @returns UpdateAndAttachPolicyResponse
     *
     * @param string                       $policyId
     * @param UpdateAndAttachPolicyRequest $request
     *
     * @return UpdateAndAttachPolicyResponse
     */
    public function updateAndAttachPolicy($policyId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateAndAttachPolicyWithOptions($policyId, $request, $headers, $runtime);
    }

    /**
     * Updates a consumer.
     *
     * @param request - UpdateConsumerRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateConsumerResponse
     *
     * @param string                $consumerId
     * @param UpdateConsumerRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return UpdateConsumerResponse
     */
    public function updateConsumerWithOptions($consumerId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->akSkIdentityConfigs) {
            @$body['akSkIdentityConfigs'] = $request->akSkIdentityConfigs;
        }

        if (null !== $request->apikeyIdentityConfig) {
            @$body['apikeyIdentityConfig'] = $request->apikeyIdentityConfig;
        }

        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->enable) {
            @$body['enable'] = $request->enable;
        }

        if (null !== $request->jwtIdentityConfig) {
            @$body['jwtIdentityConfig'] = $request->jwtIdentityConfig;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateConsumer',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/consumers/' . Url::percentEncode($consumerId) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateConsumerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates a consumer.
     *
     * @param request - UpdateConsumerRequest
     *
     * @returns UpdateConsumerResponse
     *
     * @param string                $consumerId
     * @param UpdateConsumerRequest $request
     *
     * @return UpdateConsumerResponse
     */
    public function updateConsumer($consumerId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateConsumerWithOptions($consumerId, $request, $headers, $runtime);
    }

    /**
     * Updates a consumer authorization rule.
     *
     * @param request - UpdateConsumerAuthorizationRuleRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateConsumerAuthorizationRuleResponse
     *
     * @param string                                 $consumerId
     * @param string                                 $consumerAuthorizationRuleId
     * @param UpdateConsumerAuthorizationRuleRequest $request
     * @param string[]                               $headers
     * @param RuntimeOptions                         $runtime
     *
     * @return UpdateConsumerAuthorizationRuleResponse
     */
    public function updateConsumerAuthorizationRuleWithOptions($consumerId, $consumerAuthorizationRuleId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->authorizationResourceInfos) {
            @$body['authorizationResourceInfos'] = $request->authorizationResourceInfos;
        }

        if (null !== $request->expireMode) {
            @$body['expireMode'] = $request->expireMode;
        }

        if (null !== $request->expireTimestamp) {
            @$body['expireTimestamp'] = $request->expireTimestamp;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateConsumerAuthorizationRule',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/consumers/' . Url::percentEncode($consumerId) . '/authorization-rules/' . Url::percentEncode($consumerAuthorizationRuleId) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateConsumerAuthorizationRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates a consumer authorization rule.
     *
     * @param request - UpdateConsumerAuthorizationRuleRequest
     *
     * @returns UpdateConsumerAuthorizationRuleResponse
     *
     * @param string                                 $consumerId
     * @param string                                 $consumerAuthorizationRuleId
     * @param UpdateConsumerAuthorizationRuleRequest $request
     *
     * @return UpdateConsumerAuthorizationRuleResponse
     */
    public function updateConsumerAuthorizationRule($consumerId, $consumerAuthorizationRuleId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateConsumerAuthorizationRuleWithOptions($consumerId, $consumerAuthorizationRuleId, $request, $headers, $runtime);
    }

    /**
     * Updates a domain name.
     *
     * @param request - UpdateDomainRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateDomainResponse
     *
     * @param string              $domainId
     * @param UpdateDomainRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return UpdateDomainResponse
     */
    public function updateDomainWithOptions($domainId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->caCertIdentifier) {
            @$body['caCertIdentifier'] = $request->caCertIdentifier;
        }

        if (null !== $request->certIdentifier) {
            @$body['certIdentifier'] = $request->certIdentifier;
        }

        if (null !== $request->clientCACert) {
            @$body['clientCACert'] = $request->clientCACert;
        }

        if (null !== $request->forceHttps) {
            @$body['forceHttps'] = $request->forceHttps;
        }

        if (null !== $request->http2Option) {
            @$body['http2Option'] = $request->http2Option;
        }

        if (null !== $request->mTLSEnabled) {
            @$body['mTLSEnabled'] = $request->mTLSEnabled;
        }

        if (null !== $request->protocol) {
            @$body['protocol'] = $request->protocol;
        }

        if (null !== $request->tlsCipherSuitesConfig) {
            @$body['tlsCipherSuitesConfig'] = $request->tlsCipherSuitesConfig;
        }

        if (null !== $request->tlsMax) {
            @$body['tlsMax'] = $request->tlsMax;
        }

        if (null !== $request->tlsMin) {
            @$body['tlsMin'] = $request->tlsMin;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateDomain',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/domains/' . Url::percentEncode($domainId) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates a domain name.
     *
     * @param request - UpdateDomainRequest
     *
     * @returns UpdateDomainResponse
     *
     * @param string              $domainId
     * @param UpdateDomainRequest $request
     *
     * @return UpdateDomainResponse
     */
    public function updateDomain($domainId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateDomainWithOptions($domainId, $request, $headers, $runtime);
    }

    /**
     * UpdateEnvironment.
     *
     * @deprecated OpenAPI UpdateEnvironment is deprecated
     *
     * @param request - UpdateEnvironmentRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateEnvironmentResponse
     *
     * @param string                   $environmentId
     * @param UpdateEnvironmentRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return UpdateEnvironmentResponse
     */
    public function updateEnvironmentWithOptions($environmentId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->alias) {
            @$body['alias'] = $request->alias;
        }

        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateEnvironment',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/environments/' . Url::percentEncode($environmentId) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateEnvironmentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    // Deprecated
    /**
     * UpdateEnvironment.
     *
     * @deprecated OpenAPI UpdateEnvironment is deprecated
     *
     * @param request - UpdateEnvironmentRequest
     *
     * @returns UpdateEnvironmentResponse
     *
     * @param string                   $environmentId
     * @param UpdateEnvironmentRequest $request
     *
     * @return UpdateEnvironmentResponse
     */
    public function updateEnvironment($environmentId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateEnvironmentWithOptions($environmentId, $request, $headers, $runtime);
    }

    /**
     * Get the feature configuration of the gateway.
     *
     * @param request - UpdateGatewayFeatureRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateGatewayFeatureResponse
     *
     * @param string                      $gatewayId
     * @param string                      $name
     * @param UpdateGatewayFeatureRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return UpdateGatewayFeatureResponse
     */
    public function updateGatewayFeatureWithOptions($gatewayId, $name, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->value) {
            @$body['value'] = $request->value;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateGatewayFeature',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/gateways/' . Url::percentEncode($gatewayId) . '/gateway-features/' . Url::percentEncode($name) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateGatewayFeatureResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Get the feature configuration of the gateway.
     *
     * @param request - UpdateGatewayFeatureRequest
     *
     * @returns UpdateGatewayFeatureResponse
     *
     * @param string                      $gatewayId
     * @param string                      $name
     * @param UpdateGatewayFeatureRequest $request
     *
     * @return UpdateGatewayFeatureResponse
     */
    public function updateGatewayFeature($gatewayId, $name, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateGatewayFeatureWithOptions($gatewayId, $name, $request, $headers, $runtime);
    }

    /**
     * Change the name of a gateway instance.
     *
     * @param request - UpdateGatewayNameRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateGatewayNameResponse
     *
     * @param string                   $gatewayId
     * @param UpdateGatewayNameRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return UpdateGatewayNameResponse
     */
    public function updateGatewayNameWithOptions($gatewayId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->name) {
            @$query['name'] = $request->name;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateGatewayName',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/gateways/' . Url::percentEncode($gatewayId) . '/name',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateGatewayNameResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Change the name of a gateway instance.
     *
     * @param request - UpdateGatewayNameRequest
     *
     * @returns UpdateGatewayNameResponse
     *
     * @param string                   $gatewayId
     * @param UpdateGatewayNameRequest $request
     *
     * @return UpdateGatewayNameResponse
     */
    public function updateGatewayName($gatewayId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateGatewayNameWithOptions($gatewayId, $request, $headers, $runtime);
    }

    /**
     * Updates an HTTP API.
     *
     * @param request - UpdateHttpApiRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateHttpApiResponse
     *
     * @param string               $httpApiId
     * @param UpdateHttpApiRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return UpdateHttpApiResponse
     */
    public function updateHttpApiWithOptions($httpApiId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->agentProtocols) {
            @$body['agentProtocols'] = $request->agentProtocols;
        }

        if (null !== $request->aiProtocols) {
            @$body['aiProtocols'] = $request->aiProtocols;
        }

        if (null !== $request->authConfig) {
            @$body['authConfig'] = $request->authConfig;
        }

        if (null !== $request->basePath) {
            @$body['basePath'] = $request->basePath;
        }

        if (null !== $request->deployConfigs) {
            @$body['deployConfigs'] = $request->deployConfigs;
        }

        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->enableAuth) {
            @$body['enableAuth'] = $request->enableAuth;
        }

        if (null !== $request->firstByteTimeout) {
            @$body['firstByteTimeout'] = $request->firstByteTimeout;
        }

        if (null !== $request->ingressConfig) {
            @$body['ingressConfig'] = $request->ingressConfig;
        }

        if (null !== $request->onlyChangeConfig) {
            @$body['onlyChangeConfig'] = $request->onlyChangeConfig;
        }

        if (null !== $request->protocols) {
            @$body['protocols'] = $request->protocols;
        }

        if (null !== $request->removeBasePathOnForward) {
            @$body['removeBasePathOnForward'] = $request->removeBasePathOnForward;
        }

        if (null !== $request->versionConfig) {
            @$body['versionConfig'] = $request->versionConfig;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateHttpApi',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/http-apis/' . Url::percentEncode($httpApiId) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateHttpApiResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates an HTTP API.
     *
     * @param request - UpdateHttpApiRequest
     *
     * @returns UpdateHttpApiResponse
     *
     * @param string               $httpApiId
     * @param UpdateHttpApiRequest $request
     *
     * @return UpdateHttpApiResponse
     */
    public function updateHttpApi($httpApiId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateHttpApiWithOptions($httpApiId, $request, $headers, $runtime);
    }

    /**
     * Update Operation.
     *
     * @param request - UpdateHttpApiOperationRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateHttpApiOperationResponse
     *
     * @param string                        $httpApiId
     * @param string                        $operationId
     * @param UpdateHttpApiOperationRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return UpdateHttpApiOperationResponse
     */
    public function updateHttpApiOperationWithOptions($httpApiId, $operationId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->operation) {
            @$body['operation'] = $request->operation;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateHttpApiOperation',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/http-apis/' . Url::percentEncode($httpApiId) . '/operations/' . Url::percentEncode($operationId) . '',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateHttpApiOperationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Update Operation.
     *
     * @param request - UpdateHttpApiOperationRequest
     *
     * @returns UpdateHttpApiOperationResponse
     *
     * @param string                        $httpApiId
     * @param string                        $operationId
     * @param UpdateHttpApiOperationRequest $request
     *
     * @return UpdateHttpApiOperationResponse
     */
    public function updateHttpApiOperation($httpApiId, $operationId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateHttpApiOperationWithOptions($httpApiId, $operationId, $request, $headers, $runtime);
    }

    /**
     * Updates the route of an HTTP API.
     *
     * @param request - UpdateHttpApiRouteRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateHttpApiRouteResponse
     *
     * @param string                    $httpApiId
     * @param string                    $routeId
     * @param UpdateHttpApiRouteRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return UpdateHttpApiRouteResponse
     */
    public function updateHttpApiRouteWithOptions($httpApiId, $routeId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->backendConfig) {
            @$body['backendConfig'] = $request->backendConfig;
        }

        if (null !== $request->deployConfigs) {
            @$body['deployConfigs'] = $request->deployConfigs;
        }

        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->domainIds) {
            @$body['domainIds'] = $request->domainIds;
        }

        if (null !== $request->environmentId) {
            @$body['environmentId'] = $request->environmentId;
        }

        if (null !== $request->match) {
            @$body['match'] = $request->match;
        }

        if (null !== $request->mcpRouteConfig) {
            @$body['mcpRouteConfig'] = $request->mcpRouteConfig;
        }

        if (null !== $request->name) {
            @$body['name'] = $request->name;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateHttpApiRoute',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/http-apis/' . Url::percentEncode($httpApiId) . '/routes/' . Url::percentEncode($routeId) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateHttpApiRouteResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the route of an HTTP API.
     *
     * @param request - UpdateHttpApiRouteRequest
     *
     * @returns UpdateHttpApiRouteResponse
     *
     * @param string                    $httpApiId
     * @param string                    $routeId
     * @param UpdateHttpApiRouteRequest $request
     *
     * @return UpdateHttpApiRouteResponse
     */
    public function updateHttpApiRoute($httpApiId, $routeId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateHttpApiRouteWithOptions($httpApiId, $routeId, $request, $headers, $runtime);
    }

    /**
     * Updates an MCP server.
     *
     * @remarks
     * You can only update the listening Ingress configuration for sources of the **ACK** type.
     *
     * @param request - UpdateMcpServerRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateMcpServerResponse
     *
     * @param string                 $mcpServerId
     * @param UpdateMcpServerRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return UpdateMcpServerResponse
     */
    public function updateMcpServerWithOptions($mcpServerId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->assembledSources) {
            @$body['assembledSources'] = $request->assembledSources;
        }

        if (null !== $request->backendConfig) {
            @$body['backendConfig'] = $request->backendConfig;
        }

        if (null !== $request->createFromType) {
            @$body['createFromType'] = $request->createFromType;
        }

        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->domainIds) {
            @$body['domainIds'] = $request->domainIds;
        }

        if (null !== $request->exposedUriPath) {
            @$body['exposedUriPath'] = $request->exposedUriPath;
        }

        if (null !== $request->grayMcpServerConfigs) {
            @$body['grayMcpServerConfigs'] = $request->grayMcpServerConfigs;
        }

        if (null !== $request->match) {
            @$body['match'] = $request->match;
        }

        if (null !== $request->mcpStatisticsEnable) {
            @$body['mcpStatisticsEnable'] = $request->mcpStatisticsEnable;
        }

        if (null !== $request->protocol) {
            @$body['protocol'] = $request->protocol;
        }

        if (null !== $request->type) {
            @$body['type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateMcpServer',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/mcp-servers/' . Url::percentEncode($mcpServerId) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateMcpServerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates an MCP server.
     *
     * @remarks
     * You can only update the listening Ingress configuration for sources of the **ACK** type.
     *
     * @param request - UpdateMcpServerRequest
     *
     * @returns UpdateMcpServerResponse
     *
     * @param string                 $mcpServerId
     * @param UpdateMcpServerRequest $request
     *
     * @return UpdateMcpServerResponse
     */
    public function updateMcpServer($mcpServerId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateMcpServerWithOptions($mcpServerId, $request, $headers, $runtime);
    }

    /**
     * Updates a plug-in attachment.
     *
     * @param request - UpdatePluginAttachmentRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdatePluginAttachmentResponse
     *
     * @param string                        $pluginAttachmentId
     * @param UpdatePluginAttachmentRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return UpdatePluginAttachmentResponse
     */
    public function updatePluginAttachmentWithOptions($pluginAttachmentId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->attachResourceIds) {
            @$body['attachResourceIds'] = $request->attachResourceIds;
        }

        if (null !== $request->enable) {
            @$body['enable'] = $request->enable;
        }

        if (null !== $request->pluginConfig) {
            @$body['pluginConfig'] = $request->pluginConfig;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdatePluginAttachment',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/plugin-attachments/' . Url::percentEncode($pluginAttachmentId) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdatePluginAttachmentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates a plug-in attachment.
     *
     * @param request - UpdatePluginAttachmentRequest
     *
     * @returns UpdatePluginAttachmentResponse
     *
     * @param string                        $pluginAttachmentId
     * @param UpdatePluginAttachmentRequest $request
     *
     * @return UpdatePluginAttachmentResponse
     */
    public function updatePluginAttachment($pluginAttachmentId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updatePluginAttachmentWithOptions($pluginAttachmentId, $request, $headers, $runtime);
    }

    /**
     * Update Policy.
     *
     * @param request - UpdatePolicyRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdatePolicyResponse
     *
     * @param string              $policyId
     * @param UpdatePolicyRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return UpdatePolicyResponse
     */
    public function updatePolicyWithOptions($policyId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->config) {
            @$body['config'] = $request->config;
        }

        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->name) {
            @$body['name'] = $request->name;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdatePolicy',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v2/policies/' . Url::percentEncode($policyId) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdatePolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Update Policy.
     *
     * @param request - UpdatePolicyRequest
     *
     * @returns UpdatePolicyResponse
     *
     * @param string              $policyId
     * @param UpdatePolicyRequest $request
     *
     * @return UpdatePolicyResponse
     */
    public function updatePolicy($policyId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updatePolicyWithOptions($policyId, $request, $headers, $runtime);
    }

    /**
     * 更新消费者.
     *
     * @param request - UpdateSecretRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateSecretResponse
     *
     * @param string              $secretId
     * @param UpdateSecretRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return UpdateSecretResponse
     */
    public function updateSecretWithOptions($secretId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->secretData) {
            @$body['secretData'] = $request->secretData;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateSecret',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/secrets/' . Url::percentEncode($secretId) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateSecretResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新消费者.
     *
     * @param request - UpdateSecretRequest
     *
     * @returns UpdateSecretResponse
     *
     * @param string              $secretId
     * @param UpdateSecretRequest $request
     *
     * @return UpdateSecretResponse
     */
    public function updateSecret($secretId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateSecretWithOptions($secretId, $request, $headers, $runtime);
    }

    /**
     * 更新服务
     *
     * @param request - UpdateServiceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateServiceResponse
     *
     * @param string               $serviceId
     * @param UpdateServiceRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return UpdateServiceResponse
     */
    public function updateServiceWithOptions($serviceId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->addresses) {
            @$body['addresses'] = $request->addresses;
        }

        if (null !== $request->agentServiceConfig) {
            @$body['agentServiceConfig'] = $request->agentServiceConfig;
        }

        if (null !== $request->aiServiceConfig) {
            @$body['aiServiceConfig'] = $request->aiServiceConfig;
        }

        if (null !== $request->dnsServers) {
            @$body['dnsServers'] = $request->dnsServers;
        }

        if (null !== $request->healthCheckConfig) {
            @$body['healthCheckConfig'] = $request->healthCheckConfig;
        }

        if (null !== $request->healthyPanicThreshold) {
            @$body['healthyPanicThreshold'] = $request->healthyPanicThreshold;
        }

        if (null !== $request->outlierDetectionConfig) {
            @$body['outlierDetectionConfig'] = $request->outlierDetectionConfig;
        }

        if (null !== $request->ports) {
            @$body['ports'] = $request->ports;
        }

        if (null !== $request->protocol) {
            @$body['protocol'] = $request->protocol;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateService',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/services/' . Url::percentEncode($serviceId) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新服务
     *
     * @param request - UpdateServiceRequest
     *
     * @returns UpdateServiceResponse
     *
     * @param string               $serviceId
     * @param UpdateServiceRequest $request
     *
     * @return UpdateServiceResponse
     */
    public function updateService($serviceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateServiceWithOptions($serviceId, $request, $headers, $runtime);
    }

    /**
     * Updates a service version.
     *
     * @param request - UpdateServiceVersionRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateServiceVersionResponse
     *
     * @param string                      $serviceId
     * @param string                      $name
     * @param UpdateServiceVersionRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return UpdateServiceVersionResponse
     */
    public function updateServiceVersionWithOptions($serviceId, $name, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->labels) {
            @$body['labels'] = $request->labels;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateServiceVersion',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/services/' . Url::percentEncode($serviceId) . '/versions/' . Url::percentEncode($name) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateServiceVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates a service version.
     *
     * @param request - UpdateServiceVersionRequest
     *
     * @returns UpdateServiceVersionResponse
     *
     * @param string                      $serviceId
     * @param string                      $name
     * @param UpdateServiceVersionRequest $request
     *
     * @return UpdateServiceVersionResponse
     */
    public function updateServiceVersion($serviceId, $name, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateServiceVersionWithOptions($serviceId, $name, $request, $headers, $runtime);
    }

    /**
     * Upgrade the gateway version.
     *
     * @param request - UpgradeGatewayRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpgradeGatewayResponse
     *
     * @param string                $gatewayId
     * @param UpgradeGatewayRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return UpgradeGatewayResponse
     */
    public function upgradeGatewayWithOptions($gatewayId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->version) {
            @$query['version'] = $request->version;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpgradeGateway',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/gateways/' . Url::percentEncode($gatewayId) . '/upgrade',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpgradeGatewayResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Upgrade the gateway version.
     *
     * @param request - UpgradeGatewayRequest
     *
     * @returns UpgradeGatewayResponse
     *
     * @param string                $gatewayId
     * @param UpgradeGatewayRequest $request
     *
     * @return UpgradeGatewayResponse
     */
    public function upgradeGateway($gatewayId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->upgradeGatewayWithOptions($gatewayId, $request, $headers, $runtime);
    }
}

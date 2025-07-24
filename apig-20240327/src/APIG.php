<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\APIG\V20240327\Models\AddGatewaySecurityGroupRuleRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\AddGatewaySecurityGroupRuleResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\BatchDeleteConsumerAuthorizationRuleRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\BatchDeleteConsumerAuthorizationRuleResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\ChangeResourceGroupRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\ChangeResourceGroupResponse;
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
use AlibabaCloud\SDK\APIG\V20240327\Models\CreatePluginAttachmentRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\CreatePluginAttachmentResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\CreatePolicyAttachmentRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\CreatePolicyAttachmentResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\CreatePolicyRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\CreatePolicyResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\CreateServiceRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\CreateServiceResponse;
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
use AlibabaCloud\SDK\APIG\V20240327\Models\DeletePluginAttachmentResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\DeletePolicyAttachmentResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\DeletePolicyResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\DeleteServiceResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\DeployHttpApiRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\DeployHttpApiResponse;
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
use AlibabaCloud\SDK\APIG\V20240327\Models\GetPluginAttachmentResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\GetPolicyAttachmentResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\GetPolicyResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\GetResourceOverviewRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\GetResourceOverviewResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\GetServiceResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\GetTraceConfigRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\GetTraceConfigResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\ImportHttpApiRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\ImportHttpApiResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListConsumersRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListConsumersResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListDomainsRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListDomainsResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListEnvironmentsRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListEnvironmentsResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListGatewaysRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListGatewaysResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListGatewaysShrinkRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListHttpApiOperationsRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListHttpApiOperationsResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListHttpApiRoutesRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListHttpApiRoutesResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListHttpApisRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListHttpApisResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListPluginAttachmentsRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListPluginAttachmentsResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListPluginsRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListPluginsResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListPolicyClassesRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListPolicyClassesResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListServicesRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListServicesResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListSslCertsRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListSslCertsResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListZonesResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\QueryConsumerAuthorizationRulesRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\QueryConsumerAuthorizationRulesResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\RemoveConsumerAuthorizationRuleResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\RestartGatewayResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\UndeployHttpApiRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\UndeployHttpApiResponse;
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
use AlibabaCloud\SDK\APIG\V20240327\Models\UpdatePluginAttachmentRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\UpdatePluginAttachmentResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\UpdatePolicyRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\UpdatePolicyResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\UpgradeGatewayRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\UpgradeGatewayResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

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
        if (!Utils::empty_($endpoint)) {
            return $endpoint;
        }
        if (!Utils::isUnset($endpointMap) && !Utils::empty_(@$endpointMap[$regionId])) {
            return @$endpointMap[$regionId];
        }

        return Endpoint::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * @summary Authorize the security group for gateway to access services
     *  *
     * @param string                             $gatewayId
     * @param AddGatewaySecurityGroupRuleRequest $request   AddGatewaySecurityGroupRuleRequest
     * @param string[]                           $headers   map
     * @param RuntimeOptions                     $runtime   runtime options for this request RuntimeOptions
     *
     * @return AddGatewaySecurityGroupRuleResponse AddGatewaySecurityGroupRuleResponse
     */
    public function addGatewaySecurityGroupRuleWithOptions($gatewayId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->description)) {
            $body['description'] = $request->description;
        }
        if (!Utils::isUnset($request->portRanges)) {
            $body['portRanges'] = $request->portRanges;
        }
        if (!Utils::isUnset($request->securityGroupId)) {
            $body['securityGroupId'] = $request->securityGroupId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'AddGatewaySecurityGroupRule',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/gateways/' . OpenApiUtilClient::getEncodeParam($gatewayId) . '/security-group-rules',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return AddGatewaySecurityGroupRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Authorize the security group for gateway to access services
     *  *
     * @param string                             $gatewayId
     * @param AddGatewaySecurityGroupRuleRequest $request   AddGatewaySecurityGroupRuleRequest
     *
     * @return AddGatewaySecurityGroupRuleResponse AddGatewaySecurityGroupRuleResponse
     */
    public function addGatewaySecurityGroupRule($gatewayId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->addGatewaySecurityGroupRuleWithOptions($gatewayId, $request, $headers, $runtime);
    }

    /**
     * @summary Removes consumer authentication rules.
     *  *
     * @param BatchDeleteConsumerAuthorizationRuleRequest $request BatchDeleteConsumerAuthorizationRuleRequest
     * @param string[]                                    $headers map
     * @param RuntimeOptions                              $runtime runtime options for this request RuntimeOptions
     *
     * @return BatchDeleteConsumerAuthorizationRuleResponse BatchDeleteConsumerAuthorizationRuleResponse
     */
    public function batchDeleteConsumerAuthorizationRuleWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->consumerAuthorizationRuleIds)) {
            $query['consumerAuthorizationRuleIds'] = $request->consumerAuthorizationRuleIds;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => OpenApiUtilClient::query($query),
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
     * @summary Removes consumer authentication rules.
     *  *
     * @param BatchDeleteConsumerAuthorizationRuleRequest $request BatchDeleteConsumerAuthorizationRuleRequest
     *
     * @return BatchDeleteConsumerAuthorizationRuleResponse BatchDeleteConsumerAuthorizationRuleResponse
     */
    public function batchDeleteConsumerAuthorizationRule($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->batchDeleteConsumerAuthorizationRuleWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Resource Group Transfer
     *  *
     * @param ChangeResourceGroupRequest $request ChangeResourceGroupRequest
     * @param string[]                   $headers map
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return ChangeResourceGroupResponse ChangeResourceGroupResponse
     */
    public function changeResourceGroupWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->resourceId)) {
            $query['ResourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->service)) {
            $query['Service'] = $request->service;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => OpenApiUtilClient::query($query),
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
     * @summary Resource Group Transfer
     *  *
     * @param ChangeResourceGroupRequest $request ChangeResourceGroupRequest
     *
     * @return ChangeResourceGroupResponse ChangeResourceGroupResponse
     */
    public function changeResourceGroup($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->changeResourceGroupWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 创建消费者
     *  *
     * @param CreateConsumerRequest $request CreateConsumerRequest
     * @param string[]              $headers map
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateConsumerResponse CreateConsumerResponse
     */
    public function createConsumerWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->akSkIdentityConfigs)) {
            $body['akSkIdentityConfigs'] = $request->akSkIdentityConfigs;
        }
        if (!Utils::isUnset($request->apikeyIdentityConfig)) {
            $body['apikeyIdentityConfig'] = $request->apikeyIdentityConfig;
        }
        if (!Utils::isUnset($request->description)) {
            $body['description'] = $request->description;
        }
        if (!Utils::isUnset($request->enable)) {
            $body['enable'] = $request->enable;
        }
        if (!Utils::isUnset($request->gatewayType)) {
            $body['gatewayType'] = $request->gatewayType;
        }
        if (!Utils::isUnset($request->jwtIdentityConfig)) {
            $body['jwtIdentityConfig'] = $request->jwtIdentityConfig;
        }
        if (!Utils::isUnset($request->name)) {
            $body['name'] = $request->name;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => OpenApiUtilClient::parseToMap($body),
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
     * @summary 创建消费者
     *  *
     * @param CreateConsumerRequest $request CreateConsumerRequest
     *
     * @return CreateConsumerResponse CreateConsumerResponse
     */
    public function createConsumer($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createConsumerWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 创建消费者授权规则
     *  *
     * @param string                                 $consumerId
     * @param CreateConsumerAuthorizationRuleRequest $request    CreateConsumerAuthorizationRuleRequest
     * @param string[]                               $headers    map
     * @param RuntimeOptions                         $runtime    runtime options for this request RuntimeOptions
     *
     * @return CreateConsumerAuthorizationRuleResponse CreateConsumerAuthorizationRuleResponse
     */
    public function createConsumerAuthorizationRuleWithOptions($consumerId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->authorizationResourceInfos)) {
            $body['authorizationResourceInfos'] = $request->authorizationResourceInfos;
        }
        if (!Utils::isUnset($request->expireMode)) {
            $body['expireMode'] = $request->expireMode;
        }
        if (!Utils::isUnset($request->expireTimestamp)) {
            $body['expireTimestamp'] = $request->expireTimestamp;
        }
        if (!Utils::isUnset($request->parentResourceType)) {
            $body['parentResourceType'] = $request->parentResourceType;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $body['resourceType'] = $request->resourceType;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateConsumerAuthorizationRule',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/consumers/' . OpenApiUtilClient::getEncodeParam($consumerId) . '/authorization-rules',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateConsumerAuthorizationRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建消费者授权规则
     *  *
     * @param string                                 $consumerId
     * @param CreateConsumerAuthorizationRuleRequest $request    CreateConsumerAuthorizationRuleRequest
     *
     * @return CreateConsumerAuthorizationRuleResponse CreateConsumerAuthorizationRuleResponse
     */
    public function createConsumerAuthorizationRule($consumerId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createConsumerAuthorizationRuleWithOptions($consumerId, $request, $headers, $runtime);
    }

    /**
     * @summary Creates a consumer authentication rule.
     *  *
     * @param CreateConsumerAuthorizationRulesRequest $request CreateConsumerAuthorizationRulesRequest
     * @param string[]                                $headers map
     * @param RuntimeOptions                          $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateConsumerAuthorizationRulesResponse CreateConsumerAuthorizationRulesResponse
     */
    public function createConsumerAuthorizationRulesWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->authorizationRules)) {
            $body['authorizationRules'] = $request->authorizationRules;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => OpenApiUtilClient::parseToMap($body),
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
     * @summary Creates a consumer authentication rule.
     *  *
     * @param CreateConsumerAuthorizationRulesRequest $request CreateConsumerAuthorizationRulesRequest
     *
     * @return CreateConsumerAuthorizationRulesResponse CreateConsumerAuthorizationRulesResponse
     */
    public function createConsumerAuthorizationRules($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createConsumerAuthorizationRulesWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Creates a domain name.
     *  *
     * @description Create Domain.
     *  *
     * @param CreateDomainRequest $request CreateDomainRequest
     * @param string[]            $headers map
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateDomainResponse CreateDomainResponse
     */
    public function createDomainWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->caCertIdentifier)) {
            $body['caCertIdentifier'] = $request->caCertIdentifier;
        }
        if (!Utils::isUnset($request->certIdentifier)) {
            $body['certIdentifier'] = $request->certIdentifier;
        }
        if (!Utils::isUnset($request->clientCACert)) {
            $body['clientCACert'] = $request->clientCACert;
        }
        if (!Utils::isUnset($request->forceHttps)) {
            $body['forceHttps'] = $request->forceHttps;
        }
        if (!Utils::isUnset($request->gatewayType)) {
            $body['gatewayType'] = $request->gatewayType;
        }
        if (!Utils::isUnset($request->http2Option)) {
            $body['http2Option'] = $request->http2Option;
        }
        if (!Utils::isUnset($request->mTLSEnabled)) {
            $body['mTLSEnabled'] = $request->mTLSEnabled;
        }
        if (!Utils::isUnset($request->name)) {
            $body['name'] = $request->name;
        }
        if (!Utils::isUnset($request->protocol)) {
            $body['protocol'] = $request->protocol;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $body['resourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->tlsCipherSuitesConfig)) {
            $body['tlsCipherSuitesConfig'] = $request->tlsCipherSuitesConfig;
        }
        if (!Utils::isUnset($request->tlsMax)) {
            $body['tlsMax'] = $request->tlsMax;
        }
        if (!Utils::isUnset($request->tlsMin)) {
            $body['tlsMin'] = $request->tlsMin;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => OpenApiUtilClient::parseToMap($body),
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
     * @summary Creates a domain name.
     *  *
     * @description Create Domain.
     *  *
     * @param CreateDomainRequest $request CreateDomainRequest
     *
     * @return CreateDomainResponse CreateDomainResponse
     */
    public function createDomain($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createDomainWithOptions($request, $headers, $runtime);
    }

    /**
     * @deprecated OpenAPI CreateEnvironment is deprecated
     *  *
     * @summary CreateEnvironment
     *  *
     * @description Create environment.
     *  *
     * Deprecated
     *
     * @param CreateEnvironmentRequest $request CreateEnvironmentRequest
     * @param string[]                 $headers map
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateEnvironmentResponse CreateEnvironmentResponse
     */
    public function createEnvironmentWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->alias)) {
            $body['alias'] = $request->alias;
        }
        if (!Utils::isUnset($request->description)) {
            $body['description'] = $request->description;
        }
        if (!Utils::isUnset($request->gatewayId)) {
            $body['gatewayId'] = $request->gatewayId;
        }
        if (!Utils::isUnset($request->name)) {
            $body['name'] = $request->name;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $body['resourceGroupId'] = $request->resourceGroupId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => OpenApiUtilClient::parseToMap($body),
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

    /**
     * @deprecated OpenAPI CreateEnvironment is deprecated
     *  *
     * @summary CreateEnvironment
     *  *
     * @description Create environment.
     *  *
     * Deprecated
     *
     * @param CreateEnvironmentRequest $request CreateEnvironmentRequest
     *
     * @return CreateEnvironmentResponse CreateEnvironmentResponse
     */
    public function createEnvironment($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createEnvironmentWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 创建云原生网关
     *  *
     * @param CreateGatewayRequest $request CreateGatewayRequest
     * @param string[]             $headers map
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateGatewayResponse CreateGatewayResponse
     */
    public function createGatewayWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->chargeType)) {
            $body['chargeType'] = $request->chargeType;
        }
        if (!Utils::isUnset($request->gatewayType)) {
            $body['gatewayType'] = $request->gatewayType;
        }
        if (!Utils::isUnset($request->logConfig)) {
            $body['logConfig'] = $request->logConfig;
        }
        if (!Utils::isUnset($request->name)) {
            $body['name'] = $request->name;
        }
        if (!Utils::isUnset($request->networkAccessConfig)) {
            $body['networkAccessConfig'] = $request->networkAccessConfig;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $body['resourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->spec)) {
            $body['spec'] = $request->spec;
        }
        if (!Utils::isUnset($request->tag)) {
            $body['tag'] = $request->tag;
        }
        if (!Utils::isUnset($request->vpcId)) {
            $body['vpcId'] = $request->vpcId;
        }
        if (!Utils::isUnset($request->zoneConfig)) {
            $body['zoneConfig'] = $request->zoneConfig;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => OpenApiUtilClient::parseToMap($body),
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
     * @summary 创建云原生网关
     *  *
     * @param CreateGatewayRequest $request CreateGatewayRequest
     *
     * @return CreateGatewayResponse CreateGatewayResponse
     */
    public function createGateway($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createGatewayWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Creates an HTTP API.
     *  *
     * @param CreateHttpApiRequest $request CreateHttpApiRequest
     * @param string[]             $headers map
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateHttpApiResponse CreateHttpApiResponse
     */
    public function createHttpApiWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->agentProtocols)) {
            $body['agentProtocols'] = $request->agentProtocols;
        }
        if (!Utils::isUnset($request->aiProtocols)) {
            $body['aiProtocols'] = $request->aiProtocols;
        }
        if (!Utils::isUnset($request->authConfig)) {
            $body['authConfig'] = $request->authConfig;
        }
        if (!Utils::isUnset($request->basePath)) {
            $body['basePath'] = $request->basePath;
        }
        if (!Utils::isUnset($request->deployConfigs)) {
            $body['deployConfigs'] = $request->deployConfigs;
        }
        if (!Utils::isUnset($request->description)) {
            $body['description'] = $request->description;
        }
        if (!Utils::isUnset($request->enableAuth)) {
            $body['enableAuth'] = $request->enableAuth;
        }
        if (!Utils::isUnset($request->ingressConfig)) {
            $body['ingressConfig'] = $request->ingressConfig;
        }
        if (!Utils::isUnset($request->modelCategory)) {
            $body['modelCategory'] = $request->modelCategory;
        }
        if (!Utils::isUnset($request->name)) {
            $body['name'] = $request->name;
        }
        if (!Utils::isUnset($request->protocols)) {
            $body['protocols'] = $request->protocols;
        }
        if (!Utils::isUnset($request->removeBasePathOnForward)) {
            $body['removeBasePathOnForward'] = $request->removeBasePathOnForward;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $body['resourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->type)) {
            $body['type'] = $request->type;
        }
        if (!Utils::isUnset($request->versionConfig)) {
            $body['versionConfig'] = $request->versionConfig;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => OpenApiUtilClient::parseToMap($body),
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
     * @summary Creates an HTTP API.
     *  *
     * @param CreateHttpApiRequest $request CreateHttpApiRequest
     *
     * @return CreateHttpApiResponse CreateHttpApiResponse
     */
    public function createHttpApi($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createHttpApiWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Create an Operation for HTTP API
     *  *
     * @param string                        $httpApiId
     * @param CreateHttpApiOperationRequest $request   CreateHttpApiOperationRequest
     * @param string[]                      $headers   map
     * @param RuntimeOptions                $runtime   runtime options for this request RuntimeOptions
     *
     * @return CreateHttpApiOperationResponse CreateHttpApiOperationResponse
     */
    public function createHttpApiOperationWithOptions($httpApiId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->operations)) {
            $body['operations'] = $request->operations;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateHttpApiOperation',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/http-apis/' . OpenApiUtilClient::getEncodeParam($httpApiId) . '/operations',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateHttpApiOperationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Create an Operation for HTTP API
     *  *
     * @param string                        $httpApiId
     * @param CreateHttpApiOperationRequest $request   CreateHttpApiOperationRequest
     *
     * @return CreateHttpApiOperationResponse CreateHttpApiOperationResponse
     */
    public function createHttpApiOperation($httpApiId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createHttpApiOperationWithOptions($httpApiId, $request, $headers, $runtime);
    }

    /**
     * @summary Creates a route for an HTTP API.
     *  *
     * @param string                    $httpApiId
     * @param CreateHttpApiRouteRequest $request   CreateHttpApiRouteRequest
     * @param string[]                  $headers   map
     * @param RuntimeOptions            $runtime   runtime options for this request RuntimeOptions
     *
     * @return CreateHttpApiRouteResponse CreateHttpApiRouteResponse
     */
    public function createHttpApiRouteWithOptions($httpApiId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->backendConfig)) {
            $body['backendConfig'] = $request->backendConfig;
        }
        if (!Utils::isUnset($request->deployConfigs)) {
            $body['deployConfigs'] = $request->deployConfigs;
        }
        if (!Utils::isUnset($request->description)) {
            $body['description'] = $request->description;
        }
        if (!Utils::isUnset($request->domainIds)) {
            $body['domainIds'] = $request->domainIds;
        }
        if (!Utils::isUnset($request->environmentId)) {
            $body['environmentId'] = $request->environmentId;
        }
        if (!Utils::isUnset($request->match)) {
            $body['match'] = $request->match;
        }
        if (!Utils::isUnset($request->mcpRouteConfig)) {
            $body['mcpRouteConfig'] = $request->mcpRouteConfig;
        }
        if (!Utils::isUnset($request->name)) {
            $body['name'] = $request->name;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateHttpApiRoute',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/http-apis/' . OpenApiUtilClient::getEncodeParam($httpApiId) . '/routes',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateHttpApiRouteResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates a route for an HTTP API.
     *  *
     * @param string                    $httpApiId
     * @param CreateHttpApiRouteRequest $request   CreateHttpApiRouteRequest
     *
     * @return CreateHttpApiRouteResponse CreateHttpApiRouteResponse
     */
    public function createHttpApiRoute($httpApiId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createHttpApiRouteWithOptions($httpApiId, $request, $headers, $runtime);
    }

    /**
     * @summary 创建API
     *  *
     * @param CreatePluginAttachmentRequest $request CreatePluginAttachmentRequest
     * @param string[]                      $headers map
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return CreatePluginAttachmentResponse CreatePluginAttachmentResponse
     */
    public function createPluginAttachmentWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->attachResourceIds)) {
            $body['attachResourceIds'] = $request->attachResourceIds;
        }
        if (!Utils::isUnset($request->attachResourceType)) {
            $body['attachResourceType'] = $request->attachResourceType;
        }
        if (!Utils::isUnset($request->enable)) {
            $body['enable'] = $request->enable;
        }
        if (!Utils::isUnset($request->environmentId)) {
            $body['environmentId'] = $request->environmentId;
        }
        if (!Utils::isUnset($request->gatewayId)) {
            $body['gatewayId'] = $request->gatewayId;
        }
        if (!Utils::isUnset($request->pluginConfig)) {
            $body['pluginConfig'] = $request->pluginConfig;
        }
        if (!Utils::isUnset($request->pluginId)) {
            $body['pluginId'] = $request->pluginId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => OpenApiUtilClient::parseToMap($body),
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
     * @summary 创建API
     *  *
     * @param CreatePluginAttachmentRequest $request CreatePluginAttachmentRequest
     *
     * @return CreatePluginAttachmentResponse CreatePluginAttachmentResponse
     */
    public function createPluginAttachment($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createPluginAttachmentWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Create Policy
     *  *
     * @param CreatePolicyRequest $request CreatePolicyRequest
     * @param string[]            $headers map
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return CreatePolicyResponse CreatePolicyResponse
     */
    public function createPolicyWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->className)) {
            $body['className'] = $request->className;
        }
        if (!Utils::isUnset($request->config)) {
            $body['config'] = $request->config;
        }
        if (!Utils::isUnset($request->description)) {
            $body['description'] = $request->description;
        }
        if (!Utils::isUnset($request->name)) {
            $body['name'] = $request->name;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => OpenApiUtilClient::parseToMap($body),
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
     * @summary Create Policy
     *  *
     * @param CreatePolicyRequest $request CreatePolicyRequest
     *
     * @return CreatePolicyResponse CreatePolicyResponse
     */
    public function createPolicy($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createPolicyWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Create policy resource mount
     *  *
     * @param CreatePolicyAttachmentRequest $request CreatePolicyAttachmentRequest
     * @param string[]                      $headers map
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return CreatePolicyAttachmentResponse CreatePolicyAttachmentResponse
     */
    public function createPolicyAttachmentWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->attachResourceId)) {
            $body['attachResourceId'] = $request->attachResourceId;
        }
        if (!Utils::isUnset($request->attachResourceType)) {
            $body['attachResourceType'] = $request->attachResourceType;
        }
        if (!Utils::isUnset($request->environmentId)) {
            $body['environmentId'] = $request->environmentId;
        }
        if (!Utils::isUnset($request->gatewayId)) {
            $body['gatewayId'] = $request->gatewayId;
        }
        if (!Utils::isUnset($request->policyId)) {
            $body['policyId'] = $request->policyId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => OpenApiUtilClient::parseToMap($body),
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
     * @summary Create policy resource mount
     *  *
     * @param CreatePolicyAttachmentRequest $request CreatePolicyAttachmentRequest
     *
     * @return CreatePolicyAttachmentResponse CreatePolicyAttachmentResponse
     */
    public function createPolicyAttachment($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createPolicyAttachmentWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Creates a service.
     *  *
     * @description You can call this operation to create multiple services at a time.
     *  *
     * @param CreateServiceRequest $request CreateServiceRequest
     * @param string[]             $headers map
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateServiceResponse CreateServiceResponse
     */
    public function createServiceWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->gatewayId)) {
            $body['gatewayId'] = $request->gatewayId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $body['resourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->serviceConfigs)) {
            $body['serviceConfigs'] = $request->serviceConfigs;
        }
        if (!Utils::isUnset($request->sourceType)) {
            $body['sourceType'] = $request->sourceType;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => OpenApiUtilClient::parseToMap($body),
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
     * @summary Creates a service.
     *  *
     * @description You can call this operation to create multiple services at a time.
     *  *
     * @param CreateServiceRequest $request CreateServiceRequest
     *
     * @return CreateServiceResponse CreateServiceResponse
     */
    public function createService($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createServiceWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 删除消费者
     *  *
     * @param string         $consumerId
     * @param string[]       $headers    map
     * @param RuntimeOptions $runtime    runtime options for this request RuntimeOptions
     *
     * @return DeleteConsumerResponse DeleteConsumerResponse
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
            'pathname' => '/v1/consumers/' . OpenApiUtilClient::getEncodeParam($consumerId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteConsumerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除消费者
     *  *
     * @param string $consumerId
     *
     * @return DeleteConsumerResponse DeleteConsumerResponse
     */
    public function deleteConsumer($consumerId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteConsumerWithOptions($consumerId, $headers, $runtime);
    }

    /**
     * @summary 删除消费者授权规则
     *  *
     * @param string         $consumerAuthorizationRuleId
     * @param string         $consumerId
     * @param string[]       $headers                     map
     * @param RuntimeOptions $runtime                     runtime options for this request RuntimeOptions
     *
     * @return DeleteConsumerAuthorizationRuleResponse DeleteConsumerAuthorizationRuleResponse
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
            'pathname' => '/v1/consumers/' . OpenApiUtilClient::getEncodeParam($consumerId) . '/authorization-rules/' . OpenApiUtilClient::getEncodeParam($consumerAuthorizationRuleId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteConsumerAuthorizationRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除消费者授权规则
     *  *
     * @param string $consumerAuthorizationRuleId
     * @param string $consumerId
     *
     * @return DeleteConsumerAuthorizationRuleResponse DeleteConsumerAuthorizationRuleResponse
     */
    public function deleteConsumerAuthorizationRule($consumerAuthorizationRuleId, $consumerId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteConsumerAuthorizationRuleWithOptions($consumerAuthorizationRuleId, $consumerId, $headers, $runtime);
    }

    /**
     * @summary DeleteDomain
     *  *
     * @param string         $domainId
     * @param string[]       $headers  map
     * @param RuntimeOptions $runtime  runtime options for this request RuntimeOptions
     *
     * @return DeleteDomainResponse DeleteDomainResponse
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
            'pathname' => '/v1/domains/' . OpenApiUtilClient::getEncodeParam($domainId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary DeleteDomain
     *  *
     * @param string $domainId
     *
     * @return DeleteDomainResponse DeleteDomainResponse
     */
    public function deleteDomain($domainId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteDomainWithOptions($domainId, $headers, $runtime);
    }

    /**
     * @deprecated OpenAPI DeleteEnvironment is deprecated
     *  *
     * @summary DeleteEnvironment
     *  *
     * Deprecated
     *
     * @param string         $environmentId
     * @param string[]       $headers       map
     * @param RuntimeOptions $runtime       runtime options for this request RuntimeOptions
     *
     * @return DeleteEnvironmentResponse DeleteEnvironmentResponse
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
            'pathname' => '/v1/environments/' . OpenApiUtilClient::getEncodeParam($environmentId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteEnvironmentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @deprecated OpenAPI DeleteEnvironment is deprecated
     *  *
     * @summary DeleteEnvironment
     *  *
     * Deprecated
     *
     * @param string $environmentId
     *
     * @return DeleteEnvironmentResponse DeleteEnvironmentResponse
     */
    public function deleteEnvironment($environmentId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteEnvironmentWithOptions($environmentId, $headers, $runtime);
    }

    /**
     * @summary Delete Gateway
     *  *
     * @param string         $gatewayId
     * @param string[]       $headers   map
     * @param RuntimeOptions $runtime   runtime options for this request RuntimeOptions
     *
     * @return DeleteGatewayResponse DeleteGatewayResponse
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
            'pathname' => '/v1/gateways/' . OpenApiUtilClient::getEncodeParam($gatewayId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteGatewayResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Delete Gateway
     *  *
     * @param string $gatewayId
     *
     * @return DeleteGatewayResponse DeleteGatewayResponse
     */
    public function deleteGateway($gatewayId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteGatewayWithOptions($gatewayId, $headers, $runtime);
    }

    /**
     * @summary Delete the security group rule of a gateway
     *  *
     * @param string                                $gatewayId
     * @param string                                $securityGroupRuleId
     * @param DeleteGatewaySecurityGroupRuleRequest $request             DeleteGatewaySecurityGroupRuleRequest
     * @param string[]                              $headers             map
     * @param RuntimeOptions                        $runtime             runtime options for this request RuntimeOptions
     *
     * @return DeleteGatewaySecurityGroupRuleResponse DeleteGatewaySecurityGroupRuleResponse
     */
    public function deleteGatewaySecurityGroupRuleWithOptions($gatewayId, $securityGroupRuleId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->cascadingDelete)) {
            $query['cascadingDelete'] = $request->cascadingDelete;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteGatewaySecurityGroupRule',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/gateways/' . OpenApiUtilClient::getEncodeParam($gatewayId) . '/security-group-rules/' . OpenApiUtilClient::getEncodeParam($securityGroupRuleId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteGatewaySecurityGroupRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Delete the security group rule of a gateway
     *  *
     * @param string                                $gatewayId
     * @param string                                $securityGroupRuleId
     * @param DeleteGatewaySecurityGroupRuleRequest $request             DeleteGatewaySecurityGroupRuleRequest
     *
     * @return DeleteGatewaySecurityGroupRuleResponse DeleteGatewaySecurityGroupRuleResponse
     */
    public function deleteGatewaySecurityGroupRule($gatewayId, $securityGroupRuleId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteGatewaySecurityGroupRuleWithOptions($gatewayId, $securityGroupRuleId, $request, $headers, $runtime);
    }

    /**
     * @summary Deletes an HTTP API.
     *  *
     * @param string         $httpApiId
     * @param string[]       $headers   map
     * @param RuntimeOptions $runtime   runtime options for this request RuntimeOptions
     *
     * @return DeleteHttpApiResponse DeleteHttpApiResponse
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
            'pathname' => '/v1/http-apis/' . OpenApiUtilClient::getEncodeParam($httpApiId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteHttpApiResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes an HTTP API.
     *  *
     * @param string $httpApiId
     *
     * @return DeleteHttpApiResponse DeleteHttpApiResponse
     */
    public function deleteHttpApi($httpApiId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteHttpApiWithOptions($httpApiId, $headers, $runtime);
    }

    /**
     * @summary Delete Operation
     *  *
     * @param string         $httpApiId
     * @param string         $operationId
     * @param string[]       $headers     map
     * @param RuntimeOptions $runtime     runtime options for this request RuntimeOptions
     *
     * @return DeleteHttpApiOperationResponse DeleteHttpApiOperationResponse
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
            'pathname' => '/v1/http-apis/' . OpenApiUtilClient::getEncodeParam($httpApiId) . '/operations/' . OpenApiUtilClient::getEncodeParam($operationId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteHttpApiOperationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Delete Operation
     *  *
     * @param string $httpApiId
     * @param string $operationId
     *
     * @return DeleteHttpApiOperationResponse DeleteHttpApiOperationResponse
     */
    public function deleteHttpApiOperation($httpApiId, $operationId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteHttpApiOperationWithOptions($httpApiId, $operationId, $headers, $runtime);
    }

    /**
     * @summary Delete the route of an HttpApi
     *  *
     * @param string         $httpApiId
     * @param string         $routeId
     * @param string[]       $headers   map
     * @param RuntimeOptions $runtime   runtime options for this request RuntimeOptions
     *
     * @return DeleteHttpApiRouteResponse DeleteHttpApiRouteResponse
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
            'pathname' => '/v1/http-apis/' . OpenApiUtilClient::getEncodeParam($httpApiId) . '/routes/' . OpenApiUtilClient::getEncodeParam($routeId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteHttpApiRouteResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Delete the route of an HttpApi
     *  *
     * @param string $httpApiId
     * @param string $routeId
     *
     * @return DeleteHttpApiRouteResponse DeleteHttpApiRouteResponse
     */
    public function deleteHttpApiRoute($httpApiId, $routeId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteHttpApiRouteWithOptions($httpApiId, $routeId, $headers, $runtime);
    }

    /**
     * @summary 删除挂载规则API
     *  *
     * @param string         $pluginAttachmentId
     * @param string[]       $headers            map
     * @param RuntimeOptions $runtime            runtime options for this request RuntimeOptions
     *
     * @return DeletePluginAttachmentResponse DeletePluginAttachmentResponse
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
            'pathname' => '/v1/plugin-attachments/' . OpenApiUtilClient::getEncodeParam($pluginAttachmentId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeletePluginAttachmentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除挂载规则API
     *  *
     * @param string $pluginAttachmentId
     *
     * @return DeletePluginAttachmentResponse DeletePluginAttachmentResponse
     */
    public function deletePluginAttachment($pluginAttachmentId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deletePluginAttachmentWithOptions($pluginAttachmentId, $headers, $runtime);
    }

    /**
     * @summary Delete Policy
     *  *
     * @param string         $policyId
     * @param string[]       $headers  map
     * @param RuntimeOptions $runtime  runtime options for this request RuntimeOptions
     *
     * @return DeletePolicyResponse DeletePolicyResponse
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
            'pathname' => '/v2/policies/' . OpenApiUtilClient::getEncodeParam($policyId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeletePolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Delete Policy
     *  *
     * @param string $policyId
     *
     * @return DeletePolicyResponse DeletePolicyResponse
     */
    public function deletePolicy($policyId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deletePolicyWithOptions($policyId, $headers, $runtime);
    }

    /**
     * @summary Delete policy resource attachment
     *  *
     * @param string         $policyAttachmentId
     * @param string[]       $headers            map
     * @param RuntimeOptions $runtime            runtime options for this request RuntimeOptions
     *
     * @return DeletePolicyAttachmentResponse DeletePolicyAttachmentResponse
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
            'pathname' => '/v1/policy-attachments/' . OpenApiUtilClient::getEncodeParam($policyAttachmentId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeletePolicyAttachmentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Delete policy resource attachment
     *  *
     * @param string $policyAttachmentId
     *
     * @return DeletePolicyAttachmentResponse DeletePolicyAttachmentResponse
     */
    public function deletePolicyAttachment($policyAttachmentId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deletePolicyAttachmentWithOptions($policyAttachmentId, $headers, $runtime);
    }

    /**
     * @summary 删除服务
     *  *
     * @param string         $serviceId
     * @param string[]       $headers   map
     * @param RuntimeOptions $runtime   runtime options for this request RuntimeOptions
     *
     * @return DeleteServiceResponse DeleteServiceResponse
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
            'pathname' => '/v1/services/' . OpenApiUtilClient::getEncodeParam($serviceId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除服务
     *  *
     * @param string $serviceId
     *
     * @return DeleteServiceResponse DeleteServiceResponse
     */
    public function deleteService($serviceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteServiceWithOptions($serviceId, $headers, $runtime);
    }

    /**
     * @summary Deploy HttpApi
     *  *
     * @param string               $httpApiId
     * @param DeployHttpApiRequest $request   DeployHttpApiRequest
     * @param string[]             $headers   map
     * @param RuntimeOptions       $runtime   runtime options for this request RuntimeOptions
     *
     * @return DeployHttpApiResponse DeployHttpApiResponse
     */
    public function deployHttpApiWithOptions($httpApiId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->httpApiConfig)) {
            $body['httpApiConfig'] = $request->httpApiConfig;
        }
        if (!Utils::isUnset($request->restApiConfig)) {
            $body['restApiConfig'] = $request->restApiConfig;
        }
        if (!Utils::isUnset($request->routeId)) {
            $body['routeId'] = $request->routeId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeployHttpApi',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/http-apis/' . OpenApiUtilClient::getEncodeParam($httpApiId) . '/deploy',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeployHttpApiResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deploy HttpApi
     *  *
     * @param string               $httpApiId
     * @param DeployHttpApiRequest $request   DeployHttpApiRequest
     *
     * @return DeployHttpApiResponse DeployHttpApiResponse
     */
    public function deployHttpApi($httpApiId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deployHttpApiWithOptions($httpApiId, $request, $headers, $runtime);
    }

    /**
     * @summary Export HTTP API
     *  *
     * @param string         $httpApiId
     * @param string[]       $headers   map
     * @param RuntimeOptions $runtime   runtime options for this request RuntimeOptions
     *
     * @return ExportHttpApiResponse ExportHttpApiResponse
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
            'pathname' => '/v1/http-apis/' . OpenApiUtilClient::getEncodeParam($httpApiId) . '/export',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ExportHttpApiResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Export HTTP API
     *  *
     * @param string $httpApiId
     *
     * @return ExportHttpApiResponse ExportHttpApiResponse
     */
    public function exportHttpApi($httpApiId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->exportHttpApiWithOptions($httpApiId, $headers, $runtime);
    }

    /**
     * @summary 查询消费者
     *  *
     * @param string         $consumerId
     * @param string[]       $headers    map
     * @param RuntimeOptions $runtime    runtime options for this request RuntimeOptions
     *
     * @return GetConsumerResponse GetConsumerResponse
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
            'pathname' => '/v1/consumers/' . OpenApiUtilClient::getEncodeParam($consumerId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetConsumerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询消费者
     *  *
     * @param string $consumerId
     *
     * @return GetConsumerResponse GetConsumerResponse
     */
    public function getConsumer($consumerId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getConsumerWithOptions($consumerId, $headers, $runtime);
    }

    /**
     * @summary 查询消费者授权规则
     *  *
     * @param string         $consumerAuthorizationRuleId
     * @param string         $consumerId
     * @param string[]       $headers                     map
     * @param RuntimeOptions $runtime                     runtime options for this request RuntimeOptions
     *
     * @return GetConsumerAuthorizationRuleResponse GetConsumerAuthorizationRuleResponse
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
            'pathname' => '/v1/consumers/' . OpenApiUtilClient::getEncodeParam($consumerId) . '/authorization-rules/' . OpenApiUtilClient::getEncodeParam($consumerAuthorizationRuleId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetConsumerAuthorizationRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询消费者授权规则
     *  *
     * @param string $consumerAuthorizationRuleId
     * @param string $consumerId
     *
     * @return GetConsumerAuthorizationRuleResponse GetConsumerAuthorizationRuleResponse
     */
    public function getConsumerAuthorizationRule($consumerAuthorizationRuleId, $consumerId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getConsumerAuthorizationRuleWithOptions($consumerAuthorizationRuleId, $consumerId, $headers, $runtime);
    }

    /**
     * @summary Obtains data from dashboards.
     *  *
     * @param string              $gatewayId
     * @param GetDashboardRequest $tmpReq    GetDashboardRequest
     * @param string[]            $headers   map
     * @param RuntimeOptions      $runtime   runtime options for this request RuntimeOptions
     *
     * @return GetDashboardResponse GetDashboardResponse
     */
    public function getDashboardWithOptions($gatewayId, $tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new GetDashboardShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->filter)) {
            $request->filterShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->filter, 'filter', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['acceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->apiId)) {
            $query['apiId'] = $request->apiId;
        }
        if (!Utils::isUnset($request->filterShrink)) {
            $query['filter'] = $request->filterShrink;
        }
        if (!Utils::isUnset($request->name)) {
            $query['name'] = $request->name;
        }
        if (!Utils::isUnset($request->pluginClassId)) {
            $query['pluginClassId'] = $request->pluginClassId;
        }
        if (!Utils::isUnset($request->pluginId)) {
            $query['pluginId'] = $request->pluginId;
        }
        if (!Utils::isUnset($request->routeId)) {
            $query['routeId'] = $request->routeId;
        }
        if (!Utils::isUnset($request->source)) {
            $query['source'] = $request->source;
        }
        if (!Utils::isUnset($request->upstreamCluster)) {
            $query['upstreamCluster'] = $request->upstreamCluster;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'GetDashboard',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/gateways/' . OpenApiUtilClient::getEncodeParam($gatewayId) . '/dashboards',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetDashboardResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Obtains data from dashboards.
     *  *
     * @param string              $gatewayId
     * @param GetDashboardRequest $request   GetDashboardRequest
     *
     * @return GetDashboardResponse GetDashboardResponse
     */
    public function getDashboard($gatewayId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getDashboardWithOptions($gatewayId, $request, $headers, $runtime);
    }

    /**
     * @summary Queries the information about a domain name.
     *  *
     * @param string           $domainId
     * @param GetDomainRequest $request  GetDomainRequest
     * @param string[]         $headers  map
     * @param RuntimeOptions   $runtime  runtime options for this request RuntimeOptions
     *
     * @return GetDomainResponse GetDomainResponse
     */
    public function getDomainWithOptions($domainId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->withStatistics)) {
            $query['withStatistics'] = $request->withStatistics;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'GetDomain',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/domains/' . OpenApiUtilClient::getEncodeParam($domainId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the information about a domain name.
     *  *
     * @param string           $domainId
     * @param GetDomainRequest $request  GetDomainRequest
     *
     * @return GetDomainResponse GetDomainResponse
     */
    public function getDomain($domainId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getDomainWithOptions($domainId, $request, $headers, $runtime);
    }

    /**
     * @deprecated OpenAPI GetEnvironment is deprecated
     *  *
     * @summary GetEnvironment
     *  *
     * Deprecated
     *
     * @param string                $environmentId
     * @param GetEnvironmentRequest $request       GetEnvironmentRequest
     * @param string[]              $headers       map
     * @param RuntimeOptions        $runtime       runtime options for this request RuntimeOptions
     *
     * @return GetEnvironmentResponse GetEnvironmentResponse
     */
    public function getEnvironmentWithOptions($environmentId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->withStatistics)) {
            $query['withStatistics'] = $request->withStatistics;
        }
        if (!Utils::isUnset($request->withVpcInfo)) {
            $query['withVpcInfo'] = $request->withVpcInfo;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'GetEnvironment',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/environments/' . OpenApiUtilClient::getEncodeParam($environmentId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetEnvironmentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @deprecated OpenAPI GetEnvironment is deprecated
     *  *
     * @summary GetEnvironment
     *  *
     * Deprecated
     *
     * @param string                $environmentId
     * @param GetEnvironmentRequest $request       GetEnvironmentRequest
     *
     * @return GetEnvironmentResponse GetEnvironmentResponse
     */
    public function getEnvironment($environmentId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getEnvironmentWithOptions($environmentId, $request, $headers, $runtime);
    }

    /**
     * @summary Queries the basic information about an instance, such as the virtual private cloud (VPC) and vSwitch to which the instance belongs and its ingress.
     *  *
     * @param string         $gatewayId
     * @param string[]       $headers   map
     * @param RuntimeOptions $runtime   runtime options for this request RuntimeOptions
     *
     * @return GetGatewayResponse GetGatewayResponse
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
            'pathname' => '/v1/gateways/' . OpenApiUtilClient::getEncodeParam($gatewayId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetGatewayResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the basic information about an instance, such as the virtual private cloud (VPC) and vSwitch to which the instance belongs and its ingress.
     *  *
     * @param string $gatewayId
     *
     * @return GetGatewayResponse GetGatewayResponse
     */
    public function getGateway($gatewayId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getGatewayWithOptions($gatewayId, $headers, $runtime);
    }

    /**
     * @summary Read HttpApi
     *  *
     * @param string         $httpApiId
     * @param string[]       $headers   map
     * @param RuntimeOptions $runtime   runtime options for this request RuntimeOptions
     *
     * @return GetHttpApiResponse GetHttpApiResponse
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
            'pathname' => '/v1/http-apis/' . OpenApiUtilClient::getEncodeParam($httpApiId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetHttpApiResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Read HttpApi
     *  *
     * @param string $httpApiId
     *
     * @return GetHttpApiResponse GetHttpApiResponse
     */
    public function getHttpApi($httpApiId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getHttpApiWithOptions($httpApiId, $headers, $runtime);
    }

    /**
     * @summary Get Operation
     *  *
     * @param string         $httpApiId
     * @param string         $operationId
     * @param string[]       $headers     map
     * @param RuntimeOptions $runtime     runtime options for this request RuntimeOptions
     *
     * @return GetHttpApiOperationResponse GetHttpApiOperationResponse
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
            'pathname' => '/v1/http-apis/' . OpenApiUtilClient::getEncodeParam($httpApiId) . '/operations/' . OpenApiUtilClient::getEncodeParam($operationId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetHttpApiOperationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Get Operation
     *  *
     * @param string $httpApiId
     * @param string $operationId
     *
     * @return GetHttpApiOperationResponse GetHttpApiOperationResponse
     */
    public function getHttpApiOperation($httpApiId, $operationId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getHttpApiOperationWithOptions($httpApiId, $operationId, $headers, $runtime);
    }

    /**
     * @summary Queries the details of a route of an HTTP API.
     *  *
     * @param string         $httpApiId
     * @param string         $routeId
     * @param string[]       $headers   map
     * @param RuntimeOptions $runtime   runtime options for this request RuntimeOptions
     *
     * @return GetHttpApiRouteResponse GetHttpApiRouteResponse
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
            'pathname' => '/v1/http-apis/' . OpenApiUtilClient::getEncodeParam($httpApiId) . '/routes/' . OpenApiUtilClient::getEncodeParam($routeId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetHttpApiRouteResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the details of a route of an HTTP API.
     *  *
     * @param string $httpApiId
     * @param string $routeId
     *
     * @return GetHttpApiRouteResponse GetHttpApiRouteResponse
     */
    public function getHttpApiRoute($httpApiId, $routeId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getHttpApiRouteWithOptions($httpApiId, $routeId, $headers, $runtime);
    }

    /**
     * @summary GetPluginAttachment。
     *  *
     * @param string         $pluginAttachmentId
     * @param string[]       $headers            map
     * @param RuntimeOptions $runtime            runtime options for this request RuntimeOptions
     *
     * @return GetPluginAttachmentResponse GetPluginAttachmentResponse
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
            'pathname' => '/v1/plugin-attachments/' . OpenApiUtilClient::getEncodeParam($pluginAttachmentId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetPluginAttachmentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary GetPluginAttachment。
     *  *
     * @param string $pluginAttachmentId
     *
     * @return GetPluginAttachmentResponse GetPluginAttachmentResponse
     */
    public function getPluginAttachment($pluginAttachmentId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getPluginAttachmentWithOptions($pluginAttachmentId, $headers, $runtime);
    }

    /**
     * @summary Queries a policy.
     *  *
     * @param string         $policyId
     * @param string[]       $headers  map
     * @param RuntimeOptions $runtime  runtime options for this request RuntimeOptions
     *
     * @return GetPolicyResponse GetPolicyResponse
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
            'pathname' => '/v2/policies/' . OpenApiUtilClient::getEncodeParam($policyId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries a policy.
     *  *
     * @param string $policyId
     *
     * @return GetPolicyResponse GetPolicyResponse
     */
    public function getPolicy($policyId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getPolicyWithOptions($policyId, $headers, $runtime);
    }

    /**
     * @summary Query Policy Resource Attachment
     *  *
     * @param string         $policyAttachmentId
     * @param string[]       $headers            map
     * @param RuntimeOptions $runtime            runtime options for this request RuntimeOptions
     *
     * @return GetPolicyAttachmentResponse GetPolicyAttachmentResponse
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
            'pathname' => '/v1/policy-attachments/' . OpenApiUtilClient::getEncodeParam($policyAttachmentId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetPolicyAttachmentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Query Policy Resource Attachment
     *  *
     * @param string $policyAttachmentId
     *
     * @return GetPolicyAttachmentResponse GetPolicyAttachmentResponse
     */
    public function getPolicyAttachment($policyAttachmentId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getPolicyAttachmentWithOptions($policyAttachmentId, $headers, $runtime);
    }

    /**
     * @summary Get resource overview information
     *  *
     * @param GetResourceOverviewRequest $request GetResourceOverviewRequest
     * @param string[]                   $headers map
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return GetResourceOverviewResponse GetResourceOverviewResponse
     */
    public function getResourceOverviewWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->gatewayType)) {
            $query['gatewayType'] = $request->gatewayType;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => OpenApiUtilClient::query($query),
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
     * @summary Get resource overview information
     *  *
     * @param GetResourceOverviewRequest $request GetResourceOverviewRequest
     *
     * @return GetResourceOverviewResponse GetResourceOverviewResponse
     */
    public function getResourceOverview($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getResourceOverviewWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Queries the details of a service.
     *  *
     * @param string         $serviceId
     * @param string[]       $headers   map
     * @param RuntimeOptions $runtime   runtime options for this request RuntimeOptions
     *
     * @return GetServiceResponse GetServiceResponse
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
            'pathname' => '/v1/services/' . OpenApiUtilClient::getEncodeParam($serviceId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the details of a service.
     *  *
     * @param string $serviceId
     *
     * @return GetServiceResponse GetServiceResponse
     */
    public function getService($serviceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getServiceWithOptions($serviceId, $headers, $runtime);
    }

    /**
     * @summary Retrieve Tracing Configuration
     *  *
     * @param string                $gatewayId
     * @param GetTraceConfigRequest $request   GetTraceConfigRequest
     * @param string[]              $headers   map
     * @param RuntimeOptions        $runtime   runtime options for this request RuntimeOptions
     *
     * @return GetTraceConfigResponse GetTraceConfigResponse
     */
    public function getTraceConfigWithOptions($gatewayId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['acceptLanguage'] = $request->acceptLanguage;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'GetTraceConfig',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/gateways/' . OpenApiUtilClient::getEncodeParam($gatewayId) . '/trace',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetTraceConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Retrieve Tracing Configuration
     *  *
     * @param string                $gatewayId
     * @param GetTraceConfigRequest $request   GetTraceConfigRequest
     *
     * @return GetTraceConfigResponse GetTraceConfigResponse
     */
    public function getTraceConfig($gatewayId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getTraceConfigWithOptions($gatewayId, $request, $headers, $runtime);
    }

    /**
     * @summary Imports HTTP APIs. You can call this operation to import OpenAPI 2.0 and OpenAPI 3.0.x definition files to create REST APIs.
     *  *
     * @param ImportHttpApiRequest $request ImportHttpApiRequest
     * @param string[]             $headers map
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return ImportHttpApiResponse ImportHttpApiResponse
     */
    public function importHttpApiWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->deployConfigs)) {
            $body['deployConfigs'] = $request->deployConfigs;
        }
        if (!Utils::isUnset($request->description)) {
            $body['description'] = $request->description;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $body['dryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->mcpRouteId)) {
            $body['mcpRouteId'] = $request->mcpRouteId;
        }
        if (!Utils::isUnset($request->name)) {
            $body['name'] = $request->name;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $body['resourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->specContentBase64)) {
            $body['specContentBase64'] = $request->specContentBase64;
        }
        if (!Utils::isUnset($request->specFileUrl)) {
            $body['specFileUrl'] = $request->specFileUrl;
        }
        if (!Utils::isUnset($request->specOssConfig)) {
            $body['specOssConfig'] = $request->specOssConfig;
        }
        if (!Utils::isUnset($request->strategy)) {
            $body['strategy'] = $request->strategy;
        }
        if (!Utils::isUnset($request->targetHttpApiId)) {
            $body['targetHttpApiId'] = $request->targetHttpApiId;
        }
        if (!Utils::isUnset($request->versionConfig)) {
            $body['versionConfig'] = $request->versionConfig;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => OpenApiUtilClient::parseToMap($body),
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
     * @summary Imports HTTP APIs. You can call this operation to import OpenAPI 2.0 and OpenAPI 3.0.x definition files to create REST APIs.
     *  *
     * @param ImportHttpApiRequest $request ImportHttpApiRequest
     *
     * @return ImportHttpApiResponse ImportHttpApiResponse
     */
    public function importHttpApi($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->importHttpApiWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 查询消费者列表
     *  *
     * @param ListConsumersRequest $request ListConsumersRequest
     * @param string[]             $headers map
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return ListConsumersResponse ListConsumersResponse
     */
    public function listConsumersWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->gatewayType)) {
            $query['gatewayType'] = $request->gatewayType;
        }
        if (!Utils::isUnset($request->nameLike)) {
            $query['nameLike'] = $request->nameLike;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['pageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['pageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => OpenApiUtilClient::query($query),
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
     * @summary 查询消费者列表
     *  *
     * @param ListConsumersRequest $request ListConsumersRequest
     *
     * @return ListConsumersResponse ListConsumersResponse
     */
    public function listConsumers($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listConsumersWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Queries a list of domain names.
     *  *
     * @param ListDomainsRequest $request ListDomainsRequest
     * @param string[]           $headers map
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return ListDomainsResponse ListDomainsResponse
     */
    public function listDomainsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->gatewayId)) {
            $query['gatewayId'] = $request->gatewayId;
        }
        if (!Utils::isUnset($request->gatewayType)) {
            $query['gatewayType'] = $request->gatewayType;
        }
        if (!Utils::isUnset($request->nameLike)) {
            $query['nameLike'] = $request->nameLike;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['pageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['pageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['resourceGroupId'] = $request->resourceGroupId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => OpenApiUtilClient::query($query),
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
     * @summary Queries a list of domain names.
     *  *
     * @param ListDomainsRequest $request ListDomainsRequest
     *
     * @return ListDomainsResponse ListDomainsResponse
     */
    public function listDomains($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listDomainsWithOptions($request, $headers, $runtime);
    }

    /**
     * @deprecated OpenAPI ListEnvironments is deprecated
     *  *
     * @summary ListEnvironments
     *  *
     * Deprecated
     *
     * @param ListEnvironmentsRequest $request ListEnvironmentsRequest
     * @param string[]                $headers map
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return ListEnvironmentsResponse ListEnvironmentsResponse
     */
    public function listEnvironmentsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aliasLike)) {
            $query['aliasLike'] = $request->aliasLike;
        }
        if (!Utils::isUnset($request->gatewayId)) {
            $query['gatewayId'] = $request->gatewayId;
        }
        if (!Utils::isUnset($request->gatewayNameLike)) {
            $query['gatewayNameLike'] = $request->gatewayNameLike;
        }
        if (!Utils::isUnset($request->gatewayType)) {
            $query['gatewayType'] = $request->gatewayType;
        }
        if (!Utils::isUnset($request->nameLike)) {
            $query['nameLike'] = $request->nameLike;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['pageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['pageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['resourceGroupId'] = $request->resourceGroupId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => OpenApiUtilClient::query($query),
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

    /**
     * @deprecated OpenAPI ListEnvironments is deprecated
     *  *
     * @summary ListEnvironments
     *  *
     * Deprecated
     *
     * @param ListEnvironmentsRequest $request ListEnvironmentsRequest
     *
     * @return ListEnvironmentsResponse ListEnvironmentsResponse
     */
    public function listEnvironments($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listEnvironmentsWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Queries a list of instances.
     *  *
     * @param ListGatewaysRequest $tmpReq  ListGatewaysRequest
     * @param string[]            $headers map
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return ListGatewaysResponse ListGatewaysResponse
     */
    public function listGatewaysWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListGatewaysShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->tag)) {
            $request->tagShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tag, 'tag', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->gatewayId)) {
            $query['gatewayId'] = $request->gatewayId;
        }
        if (!Utils::isUnset($request->gatewayType)) {
            $query['gatewayType'] = $request->gatewayType;
        }
        if (!Utils::isUnset($request->keyword)) {
            $query['keyword'] = $request->keyword;
        }
        if (!Utils::isUnset($request->name)) {
            $query['name'] = $request->name;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['pageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['pageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['resourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->tagShrink)) {
            $query['tag'] = $request->tagShrink;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => OpenApiUtilClient::query($query),
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
     * @summary Queries a list of instances.
     *  *
     * @param ListGatewaysRequest $request ListGatewaysRequest
     *
     * @return ListGatewaysResponse ListGatewaysResponse
     */
    public function listGateways($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listGatewaysWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary List Operations
     *  *
     * @param string                       $httpApiId
     * @param ListHttpApiOperationsRequest $request   ListHttpApiOperationsRequest
     * @param string[]                     $headers   map
     * @param RuntimeOptions               $runtime   runtime options for this request RuntimeOptions
     *
     * @return ListHttpApiOperationsResponse ListHttpApiOperationsResponse
     */
    public function listHttpApiOperationsWithOptions($httpApiId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->consumerAuthorizationRuleId)) {
            $query['consumerAuthorizationRuleId'] = $request->consumerAuthorizationRuleId;
        }
        if (!Utils::isUnset($request->forDeploy)) {
            $query['forDeploy'] = $request->forDeploy;
        }
        if (!Utils::isUnset($request->gatewayId)) {
            $query['gatewayId'] = $request->gatewayId;
        }
        if (!Utils::isUnset($request->method)) {
            $query['method'] = $request->method;
        }
        if (!Utils::isUnset($request->name)) {
            $query['name'] = $request->name;
        }
        if (!Utils::isUnset($request->nameLike)) {
            $query['nameLike'] = $request->nameLike;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['pageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['pageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->pathLike)) {
            $query['pathLike'] = $request->pathLike;
        }
        if (!Utils::isUnset($request->withConsumerInEnvironmentId)) {
            $query['withConsumerInEnvironmentId'] = $request->withConsumerInEnvironmentId;
        }
        if (!Utils::isUnset($request->withConsumerInfoById)) {
            $query['withConsumerInfoById'] = $request->withConsumerInfoById;
        }
        if (!Utils::isUnset($request->withPluginAttachmentByPluginId)) {
            $query['withPluginAttachmentByPluginId'] = $request->withPluginAttachmentByPluginId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'ListHttpApiOperations',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/http-apis/' . OpenApiUtilClient::getEncodeParam($httpApiId) . '/operations',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListHttpApiOperationsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary List Operations
     *  *
     * @param string                       $httpApiId
     * @param ListHttpApiOperationsRequest $request   ListHttpApiOperationsRequest
     *
     * @return ListHttpApiOperationsResponse ListHttpApiOperationsResponse
     */
    public function listHttpApiOperations($httpApiId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listHttpApiOperationsWithOptions($httpApiId, $request, $headers, $runtime);
    }

    /**
     * @summary Queries the routes of an HTTP API.
     *  *
     * @param string                   $httpApiId
     * @param ListHttpApiRoutesRequest $request   ListHttpApiRoutesRequest
     * @param string[]                 $headers   map
     * @param RuntimeOptions           $runtime   runtime options for this request RuntimeOptions
     *
     * @return ListHttpApiRoutesResponse ListHttpApiRoutesResponse
     */
    public function listHttpApiRoutesWithOptions($httpApiId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->consumerAuthorizationRuleId)) {
            $query['consumerAuthorizationRuleId'] = $request->consumerAuthorizationRuleId;
        }
        if (!Utils::isUnset($request->deployStatuses)) {
            $query['deployStatuses'] = $request->deployStatuses;
        }
        if (!Utils::isUnset($request->domainId)) {
            $query['domainId'] = $request->domainId;
        }
        if (!Utils::isUnset($request->environmentId)) {
            $query['environmentId'] = $request->environmentId;
        }
        if (!Utils::isUnset($request->forDeploy)) {
            $query['forDeploy'] = $request->forDeploy;
        }
        if (!Utils::isUnset($request->gatewayId)) {
            $query['gatewayId'] = $request->gatewayId;
        }
        if (!Utils::isUnset($request->name)) {
            $query['name'] = $request->name;
        }
        if (!Utils::isUnset($request->nameLike)) {
            $query['nameLike'] = $request->nameLike;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['pageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['pageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->pathLike)) {
            $query['pathLike'] = $request->pathLike;
        }
        if (!Utils::isUnset($request->withAuthPolicyInfo)) {
            $query['withAuthPolicyInfo'] = $request->withAuthPolicyInfo;
        }
        if (!Utils::isUnset($request->withConsumerInfoById)) {
            $query['withConsumerInfoById'] = $request->withConsumerInfoById;
        }
        if (!Utils::isUnset($request->withPluginAttachmentByPluginId)) {
            $query['withPluginAttachmentByPluginId'] = $request->withPluginAttachmentByPluginId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'ListHttpApiRoutes',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/http-apis/' . OpenApiUtilClient::getEncodeParam($httpApiId) . '/routes',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListHttpApiRoutesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the routes of an HTTP API.
     *  *
     * @param string                   $httpApiId
     * @param ListHttpApiRoutesRequest $request   ListHttpApiRoutesRequest
     *
     * @return ListHttpApiRoutesResponse ListHttpApiRoutesResponse
     */
    public function listHttpApiRoutes($httpApiId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listHttpApiRoutesWithOptions($httpApiId, $request, $headers, $runtime);
    }

    /**
     * @summary Queries a list of HTTP APIs.
     *  *
     * @param ListHttpApisRequest $request ListHttpApisRequest
     * @param string[]            $headers map
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return ListHttpApisResponse ListHttpApisResponse
     */
    public function listHttpApisWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->gatewayId)) {
            $query['gatewayId'] = $request->gatewayId;
        }
        if (!Utils::isUnset($request->gatewayType)) {
            $query['gatewayType'] = $request->gatewayType;
        }
        if (!Utils::isUnset($request->keyword)) {
            $query['keyword'] = $request->keyword;
        }
        if (!Utils::isUnset($request->name)) {
            $query['name'] = $request->name;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['pageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['pageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['resourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->types)) {
            $query['types'] = $request->types;
        }
        if (!Utils::isUnset($request->withAPIsPublishedToEnvironment)) {
            $query['withAPIsPublishedToEnvironment'] = $request->withAPIsPublishedToEnvironment;
        }
        if (!Utils::isUnset($request->withAuthPolicyInEnvironmentId)) {
            $query['withAuthPolicyInEnvironmentId'] = $request->withAuthPolicyInEnvironmentId;
        }
        if (!Utils::isUnset($request->withAuthPolicyList)) {
            $query['withAuthPolicyList'] = $request->withAuthPolicyList;
        }
        if (!Utils::isUnset($request->withConsumerInfoById)) {
            $query['withConsumerInfoById'] = $request->withConsumerInfoById;
        }
        if (!Utils::isUnset($request->withEnvironmentInfo)) {
            $query['withEnvironmentInfo'] = $request->withEnvironmentInfo;
        }
        if (!Utils::isUnset($request->withEnvironmentInfoById)) {
            $query['withEnvironmentInfoById'] = $request->withEnvironmentInfoById;
        }
        if (!Utils::isUnset($request->withIngressInfo)) {
            $query['withIngressInfo'] = $request->withIngressInfo;
        }
        if (!Utils::isUnset($request->withPluginAttachmentByPluginId)) {
            $query['withPluginAttachmentByPluginId'] = $request->withPluginAttachmentByPluginId;
        }
        if (!Utils::isUnset($request->withPolicyConfigs)) {
            $query['withPolicyConfigs'] = $request->withPolicyConfigs;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => OpenApiUtilClient::query($query),
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
     * @summary Queries a list of HTTP APIs.
     *  *
     * @param ListHttpApisRequest $request ListHttpApisRequest
     *
     * @return ListHttpApisResponse ListHttpApisResponse
     */
    public function listHttpApis($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listHttpApisWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 获取挂载列表
     *  *
     * @param ListPluginAttachmentsRequest $request ListPluginAttachmentsRequest
     * @param string[]                     $headers map
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return ListPluginAttachmentsResponse ListPluginAttachmentsResponse
     */
    public function listPluginAttachmentsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->attachResourceId)) {
            $query['attachResourceId'] = $request->attachResourceId;
        }
        if (!Utils::isUnset($request->attachResourceType)) {
            $query['attachResourceType'] = $request->attachResourceType;
        }
        if (!Utils::isUnset($request->attachResourceTypes)) {
            $query['attachResourceTypes'] = $request->attachResourceTypes;
        }
        if (!Utils::isUnset($request->environmentId)) {
            $query['environmentId'] = $request->environmentId;
        }
        if (!Utils::isUnset($request->gatewayId)) {
            $query['gatewayId'] = $request->gatewayId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['pageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['pageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->pluginId)) {
            $query['pluginId'] = $request->pluginId;
        }
        if (!Utils::isUnset($request->withParentResource)) {
            $query['withParentResource'] = $request->withParentResource;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => OpenApiUtilClient::query($query),
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
     * @summary 获取挂载列表
     *  *
     * @param ListPluginAttachmentsRequest $request ListPluginAttachmentsRequest
     *
     * @return ListPluginAttachmentsResponse ListPluginAttachmentsResponse
     */
    public function listPluginAttachments($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listPluginAttachmentsWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary ListPlugins
     *  *
     * @param ListPluginsRequest $request ListPluginsRequest
     * @param string[]           $headers map
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return ListPluginsResponse ListPluginsResponse
     */
    public function listPluginsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->attachResourceId)) {
            $query['attachResourceId'] = $request->attachResourceId;
        }
        if (!Utils::isUnset($request->attachResourceType)) {
            $query['attachResourceType'] = $request->attachResourceType;
        }
        if (!Utils::isUnset($request->gatewayId)) {
            $query['gatewayId'] = $request->gatewayId;
        }
        if (!Utils::isUnset($request->gatewayType)) {
            $query['gatewayType'] = $request->gatewayType;
        }
        if (!Utils::isUnset($request->includeBuiltinAiGateway)) {
            $query['includeBuiltinAiGateway'] = $request->includeBuiltinAiGateway;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['pageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['pageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->pluginClassId)) {
            $query['pluginClassId'] = $request->pluginClassId;
        }
        if (!Utils::isUnset($request->pluginClassName)) {
            $query['pluginClassName'] = $request->pluginClassName;
        }
        if (!Utils::isUnset($request->withAttachmentInfo)) {
            $query['withAttachmentInfo'] = $request->withAttachmentInfo;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => OpenApiUtilClient::query($query),
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
     * @summary ListPlugins
     *  *
     * @param ListPluginsRequest $request ListPluginsRequest
     *
     * @return ListPluginsResponse ListPluginsResponse
     */
    public function listPlugins($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listPluginsWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary ListPolicyClasses
     *  *
     * @param ListPolicyClassesRequest $request ListPolicyClassesRequest
     * @param string[]                 $headers map
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return ListPolicyClassesResponse ListPolicyClassesResponse
     */
    public function listPolicyClassesWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->attachResourceType)) {
            $query['attachResourceType'] = $request->attachResourceType;
        }
        if (!Utils::isUnset($request->direction)) {
            $query['direction'] = $request->direction;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['pageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['pageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->type)) {
            $query['type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => OpenApiUtilClient::query($query),
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
     * @summary ListPolicyClasses
     *  *
     * @param ListPolicyClassesRequest $request ListPolicyClassesRequest
     *
     * @return ListPolicyClassesResponse ListPolicyClassesResponse
     */
    public function listPolicyClasses($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listPolicyClassesWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Queries a list of services.
     *  *
     * @param ListServicesRequest $request ListServicesRequest
     * @param string[]            $headers map
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return ListServicesResponse ListServicesResponse
     */
    public function listServicesWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->gatewayId)) {
            $query['gatewayId'] = $request->gatewayId;
        }
        if (!Utils::isUnset($request->name)) {
            $query['name'] = $request->name;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['pageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['pageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['resourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->sourceType)) {
            $query['sourceType'] = $request->sourceType;
        }
        if (!Utils::isUnset($request->sourceTypes)) {
            $query['sourceTypes'] = $request->sourceTypes;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => OpenApiUtilClient::query($query),
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
     * @summary Queries a list of services.
     *  *
     * @param ListServicesRequest $request ListServicesRequest
     *
     * @return ListServicesResponse ListServicesResponse
     */
    public function listServices($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listServicesWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary ListSslCerts
     *  *
     * @param ListSslCertsRequest $request ListSslCertsRequest
     * @param string[]            $headers map
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return ListSslCertsResponse ListSslCertsResponse
     */
    public function listSslCertsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->certNameLike)) {
            $query['certNameLike'] = $request->certNameLike;
        }
        if (!Utils::isUnset($request->domainName)) {
            $query['domainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['pageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['pageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => OpenApiUtilClient::query($query),
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
     * @summary ListSslCerts
     *  *
     * @param ListSslCertsRequest $request ListSslCertsRequest
     *
     * @return ListSslCertsResponse ListSslCertsResponse
     */
    public function listSslCerts($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listSslCertsWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Retrieve the availability zones under a cloud-native API gateway region
     *  *
     * @param string[]       $headers map
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return ListZonesResponse ListZonesResponse
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
     * @summary Retrieve the availability zones under a cloud-native API gateway region
     *  *
     * @return ListZonesResponse ListZonesResponse
     */
    public function listZones()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listZonesWithOptions($headers, $runtime);
    }

    /**
     * @summary Queries a list of consumer authentication rules.
     *  *
     * @param QueryConsumerAuthorizationRulesRequest $request QueryConsumerAuthorizationRulesRequest
     * @param string[]                               $headers map
     * @param RuntimeOptions                         $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryConsumerAuthorizationRulesResponse QueryConsumerAuthorizationRulesResponse
     */
    public function queryConsumerAuthorizationRulesWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->apiNameLike)) {
            $query['apiNameLike'] = $request->apiNameLike;
        }
        if (!Utils::isUnset($request->consumerId)) {
            $query['consumerId'] = $request->consumerId;
        }
        if (!Utils::isUnset($request->consumerNameLike)) {
            $query['consumerNameLike'] = $request->consumerNameLike;
        }
        if (!Utils::isUnset($request->environmentId)) {
            $query['environmentId'] = $request->environmentId;
        }
        if (!Utils::isUnset($request->groupByApi)) {
            $query['groupByApi'] = $request->groupByApi;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['pageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['pageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->parentResourceId)) {
            $query['parentResourceId'] = $request->parentResourceId;
        }
        if (!Utils::isUnset($request->resourceId)) {
            $query['resourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['resourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->resourceTypes)) {
            $query['resourceTypes'] = $request->resourceTypes;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => OpenApiUtilClient::query($query),
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
     * @summary Queries a list of consumer authentication rules.
     *  *
     * @param QueryConsumerAuthorizationRulesRequest $request QueryConsumerAuthorizationRulesRequest
     *
     * @return QueryConsumerAuthorizationRulesResponse QueryConsumerAuthorizationRulesResponse
     */
    public function queryConsumerAuthorizationRules($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->queryConsumerAuthorizationRulesWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Deletes a consumer authorization rule.
     *  *
     * @param string         $consumerAuthorizationRuleId
     * @param string[]       $headers                     map
     * @param RuntimeOptions $runtime                     runtime options for this request RuntimeOptions
     *
     * @return RemoveConsumerAuthorizationRuleResponse RemoveConsumerAuthorizationRuleResponse
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
            'pathname' => '/v1/authorization-rules/' . OpenApiUtilClient::getEncodeParam($consumerAuthorizationRuleId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return RemoveConsumerAuthorizationRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes a consumer authorization rule.
     *  *
     * @param string $consumerAuthorizationRuleId
     *
     * @return RemoveConsumerAuthorizationRuleResponse RemoveConsumerAuthorizationRuleResponse
     */
    public function removeConsumerAuthorizationRule($consumerAuthorizationRuleId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->removeConsumerAuthorizationRuleWithOptions($consumerAuthorizationRuleId, $headers, $runtime);
    }

    /**
     * @summary Gateway Restart
     *  *
     * @param string         $gatewayId
     * @param string[]       $headers   map
     * @param RuntimeOptions $runtime   runtime options for this request RuntimeOptions
     *
     * @return RestartGatewayResponse RestartGatewayResponse
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
            'pathname' => '/v1/gateways/' . OpenApiUtilClient::getEncodeParam($gatewayId) . '/restart',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return RestartGatewayResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Gateway Restart
     *  *
     * @param string $gatewayId
     *
     * @return RestartGatewayResponse RestartGatewayResponse
     */
    public function restartGateway($gatewayId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->restartGatewayWithOptions($gatewayId, $headers, $runtime);
    }

    /**
     * @summary 取消部署HttpApi
     *  *
     * @param string                 $httpApiId
     * @param UndeployHttpApiRequest $request   UndeployHttpApiRequest
     * @param string[]               $headers   map
     * @param RuntimeOptions         $runtime   runtime options for this request RuntimeOptions
     *
     * @return UndeployHttpApiResponse UndeployHttpApiResponse
     */
    public function undeployHttpApiWithOptions($httpApiId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->environmentId)) {
            $body['environmentId'] = $request->environmentId;
        }
        if (!Utils::isUnset($request->gatewayId)) {
            $body['gatewayId'] = $request->gatewayId;
        }
        if (!Utils::isUnset($request->operationId)) {
            $body['operationId'] = $request->operationId;
        }
        if (!Utils::isUnset($request->routeId)) {
            $body['routeId'] = $request->routeId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UndeployHttpApi',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/http-apis/' . OpenApiUtilClient::getEncodeParam($httpApiId) . '/undeploy',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UndeployHttpApiResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 取消部署HttpApi
     *  *
     * @param string                 $httpApiId
     * @param UndeployHttpApiRequest $request   UndeployHttpApiRequest
     *
     * @return UndeployHttpApiResponse UndeployHttpApiResponse
     */
    public function undeployHttpApi($httpApiId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->undeployHttpApiWithOptions($httpApiId, $request, $headers, $runtime);
    }

    /**
     * @summary 更新消费者
     *  *
     * @param string                $consumerId
     * @param UpdateConsumerRequest $request    UpdateConsumerRequest
     * @param string[]              $headers    map
     * @param RuntimeOptions        $runtime    runtime options for this request RuntimeOptions
     *
     * @return UpdateConsumerResponse UpdateConsumerResponse
     */
    public function updateConsumerWithOptions($consumerId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->akSkIdentityConfigs)) {
            $body['akSkIdentityConfigs'] = $request->akSkIdentityConfigs;
        }
        if (!Utils::isUnset($request->apikeyIdentityConfig)) {
            $body['apikeyIdentityConfig'] = $request->apikeyIdentityConfig;
        }
        if (!Utils::isUnset($request->description)) {
            $body['description'] = $request->description;
        }
        if (!Utils::isUnset($request->enable)) {
            $body['enable'] = $request->enable;
        }
        if (!Utils::isUnset($request->jwtIdentityConfig)) {
            $body['jwtIdentityConfig'] = $request->jwtIdentityConfig;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateConsumer',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/consumers/' . OpenApiUtilClient::getEncodeParam($consumerId) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateConsumerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 更新消费者
     *  *
     * @param string                $consumerId
     * @param UpdateConsumerRequest $request    UpdateConsumerRequest
     *
     * @return UpdateConsumerResponse UpdateConsumerResponse
     */
    public function updateConsumer($consumerId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateConsumerWithOptions($consumerId, $request, $headers, $runtime);
    }

    /**
     * @summary 更新消费者授权规则
     *  *
     * @param string                                 $consumerId
     * @param string                                 $consumerAuthorizationRuleId
     * @param UpdateConsumerAuthorizationRuleRequest $request                     UpdateConsumerAuthorizationRuleRequest
     * @param string[]                               $headers                     map
     * @param RuntimeOptions                         $runtime                     runtime options for this request RuntimeOptions
     *
     * @return UpdateConsumerAuthorizationRuleResponse UpdateConsumerAuthorizationRuleResponse
     */
    public function updateConsumerAuthorizationRuleWithOptions($consumerId, $consumerAuthorizationRuleId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->authorizationResourceInfos)) {
            $body['authorizationResourceInfos'] = $request->authorizationResourceInfos;
        }
        if (!Utils::isUnset($request->expireMode)) {
            $body['expireMode'] = $request->expireMode;
        }
        if (!Utils::isUnset($request->expireTimestamp)) {
            $body['expireTimestamp'] = $request->expireTimestamp;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateConsumerAuthorizationRule',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/consumers/' . OpenApiUtilClient::getEncodeParam($consumerId) . '/authorization-rules/' . OpenApiUtilClient::getEncodeParam($consumerAuthorizationRuleId) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateConsumerAuthorizationRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 更新消费者授权规则
     *  *
     * @param string                                 $consumerId
     * @param string                                 $consumerAuthorizationRuleId
     * @param UpdateConsumerAuthorizationRuleRequest $request                     UpdateConsumerAuthorizationRuleRequest
     *
     * @return UpdateConsumerAuthorizationRuleResponse UpdateConsumerAuthorizationRuleResponse
     */
    public function updateConsumerAuthorizationRule($consumerId, $consumerAuthorizationRuleId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateConsumerAuthorizationRuleWithOptions($consumerId, $consumerAuthorizationRuleId, $request, $headers, $runtime);
    }

    /**
     * @summary Updates a domain name.
     *  *
     * @param string              $domainId
     * @param UpdateDomainRequest $request  UpdateDomainRequest
     * @param string[]            $headers  map
     * @param RuntimeOptions      $runtime  runtime options for this request RuntimeOptions
     *
     * @return UpdateDomainResponse UpdateDomainResponse
     */
    public function updateDomainWithOptions($domainId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->caCertIdentifier)) {
            $body['caCertIdentifier'] = $request->caCertIdentifier;
        }
        if (!Utils::isUnset($request->certIdentifier)) {
            $body['certIdentifier'] = $request->certIdentifier;
        }
        if (!Utils::isUnset($request->clientCACert)) {
            $body['clientCACert'] = $request->clientCACert;
        }
        if (!Utils::isUnset($request->forceHttps)) {
            $body['forceHttps'] = $request->forceHttps;
        }
        if (!Utils::isUnset($request->http2Option)) {
            $body['http2Option'] = $request->http2Option;
        }
        if (!Utils::isUnset($request->mTLSEnabled)) {
            $body['mTLSEnabled'] = $request->mTLSEnabled;
        }
        if (!Utils::isUnset($request->protocol)) {
            $body['protocol'] = $request->protocol;
        }
        if (!Utils::isUnset($request->tlsCipherSuitesConfig)) {
            $body['tlsCipherSuitesConfig'] = $request->tlsCipherSuitesConfig;
        }
        if (!Utils::isUnset($request->tlsMax)) {
            $body['tlsMax'] = $request->tlsMax;
        }
        if (!Utils::isUnset($request->tlsMin)) {
            $body['tlsMin'] = $request->tlsMin;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateDomain',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/domains/' . OpenApiUtilClient::getEncodeParam($domainId) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Updates a domain name.
     *  *
     * @param string              $domainId
     * @param UpdateDomainRequest $request  UpdateDomainRequest
     *
     * @return UpdateDomainResponse UpdateDomainResponse
     */
    public function updateDomain($domainId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateDomainWithOptions($domainId, $request, $headers, $runtime);
    }

    /**
     * @deprecated OpenAPI UpdateEnvironment is deprecated
     *  *
     * @summary UpdateEnvironment
     *  *
     * Deprecated
     *
     * @param string                   $environmentId
     * @param UpdateEnvironmentRequest $request       UpdateEnvironmentRequest
     * @param string[]                 $headers       map
     * @param RuntimeOptions           $runtime       runtime options for this request RuntimeOptions
     *
     * @return UpdateEnvironmentResponse UpdateEnvironmentResponse
     */
    public function updateEnvironmentWithOptions($environmentId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->alias)) {
            $body['alias'] = $request->alias;
        }
        if (!Utils::isUnset($request->description)) {
            $body['description'] = $request->description;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateEnvironment',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/environments/' . OpenApiUtilClient::getEncodeParam($environmentId) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateEnvironmentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @deprecated OpenAPI UpdateEnvironment is deprecated
     *  *
     * @summary UpdateEnvironment
     *  *
     * Deprecated
     *
     * @param string                   $environmentId
     * @param UpdateEnvironmentRequest $request       UpdateEnvironmentRequest
     *
     * @return UpdateEnvironmentResponse UpdateEnvironmentResponse
     */
    public function updateEnvironment($environmentId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateEnvironmentWithOptions($environmentId, $request, $headers, $runtime);
    }

    /**
     * @summary Get the feature configuration of the gateway
     *  *
     * @param string                      $gatewayId
     * @param string                      $name
     * @param UpdateGatewayFeatureRequest $request   UpdateGatewayFeatureRequest
     * @param string[]                    $headers   map
     * @param RuntimeOptions              $runtime   runtime options for this request RuntimeOptions
     *
     * @return UpdateGatewayFeatureResponse UpdateGatewayFeatureResponse
     */
    public function updateGatewayFeatureWithOptions($gatewayId, $name, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->value)) {
            $body['value'] = $request->value;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateGatewayFeature',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/gateways/' . OpenApiUtilClient::getEncodeParam($gatewayId) . '/gateway-features/' . OpenApiUtilClient::getEncodeParam($name) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateGatewayFeatureResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Get the feature configuration of the gateway
     *  *
     * @param string                      $gatewayId
     * @param string                      $name
     * @param UpdateGatewayFeatureRequest $request   UpdateGatewayFeatureRequest
     *
     * @return UpdateGatewayFeatureResponse UpdateGatewayFeatureResponse
     */
    public function updateGatewayFeature($gatewayId, $name, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateGatewayFeatureWithOptions($gatewayId, $name, $request, $headers, $runtime);
    }

    /**
     * @summary Change the name of a gateway instance
     *  *
     * @param string                   $gatewayId
     * @param UpdateGatewayNameRequest $request   UpdateGatewayNameRequest
     * @param string[]                 $headers   map
     * @param RuntimeOptions           $runtime   runtime options for this request RuntimeOptions
     *
     * @return UpdateGatewayNameResponse UpdateGatewayNameResponse
     */
    public function updateGatewayNameWithOptions($gatewayId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->name)) {
            $query['name'] = $request->name;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateGatewayName',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/gateways/' . OpenApiUtilClient::getEncodeParam($gatewayId) . '/name',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateGatewayNameResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Change the name of a gateway instance
     *  *
     * @param string                   $gatewayId
     * @param UpdateGatewayNameRequest $request   UpdateGatewayNameRequest
     *
     * @return UpdateGatewayNameResponse UpdateGatewayNameResponse
     */
    public function updateGatewayName($gatewayId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateGatewayNameWithOptions($gatewayId, $request, $headers, $runtime);
    }

    /**
     * @summary Updates an HTTP API.
     *  *
     * @param string               $httpApiId
     * @param UpdateHttpApiRequest $request   UpdateHttpApiRequest
     * @param string[]             $headers   map
     * @param RuntimeOptions       $runtime   runtime options for this request RuntimeOptions
     *
     * @return UpdateHttpApiResponse UpdateHttpApiResponse
     */
    public function updateHttpApiWithOptions($httpApiId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->agentProtocols)) {
            $body['agentProtocols'] = $request->agentProtocols;
        }
        if (!Utils::isUnset($request->aiProtocols)) {
            $body['aiProtocols'] = $request->aiProtocols;
        }
        if (!Utils::isUnset($request->authConfig)) {
            $body['authConfig'] = $request->authConfig;
        }
        if (!Utils::isUnset($request->basePath)) {
            $body['basePath'] = $request->basePath;
        }
        if (!Utils::isUnset($request->deployConfigs)) {
            $body['deployConfigs'] = $request->deployConfigs;
        }
        if (!Utils::isUnset($request->description)) {
            $body['description'] = $request->description;
        }
        if (!Utils::isUnset($request->enableAuth)) {
            $body['enableAuth'] = $request->enableAuth;
        }
        if (!Utils::isUnset($request->ingressConfig)) {
            $body['ingressConfig'] = $request->ingressConfig;
        }
        if (!Utils::isUnset($request->onlyChangeConfig)) {
            $body['onlyChangeConfig'] = $request->onlyChangeConfig;
        }
        if (!Utils::isUnset($request->protocols)) {
            $body['protocols'] = $request->protocols;
        }
        if (!Utils::isUnset($request->removeBasePathOnForward)) {
            $body['removeBasePathOnForward'] = $request->removeBasePathOnForward;
        }
        if (!Utils::isUnset($request->versionConfig)) {
            $body['versionConfig'] = $request->versionConfig;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateHttpApi',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/http-apis/' . OpenApiUtilClient::getEncodeParam($httpApiId) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateHttpApiResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Updates an HTTP API.
     *  *
     * @param string               $httpApiId
     * @param UpdateHttpApiRequest $request   UpdateHttpApiRequest
     *
     * @return UpdateHttpApiResponse UpdateHttpApiResponse
     */
    public function updateHttpApi($httpApiId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateHttpApiWithOptions($httpApiId, $request, $headers, $runtime);
    }

    /**
     * @summary Update Operation
     *  *
     * @param string                        $httpApiId
     * @param string                        $operationId
     * @param UpdateHttpApiOperationRequest $request     UpdateHttpApiOperationRequest
     * @param string[]                      $headers     map
     * @param RuntimeOptions                $runtime     runtime options for this request RuntimeOptions
     *
     * @return UpdateHttpApiOperationResponse UpdateHttpApiOperationResponse
     */
    public function updateHttpApiOperationWithOptions($httpApiId, $operationId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->operation)) {
            $body['operation'] = $request->operation;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateHttpApiOperation',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/http-apis/' . OpenApiUtilClient::getEncodeParam($httpApiId) . '/operations/' . OpenApiUtilClient::getEncodeParam($operationId) . '',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateHttpApiOperationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Update Operation
     *  *
     * @param string                        $httpApiId
     * @param string                        $operationId
     * @param UpdateHttpApiOperationRequest $request     UpdateHttpApiOperationRequest
     *
     * @return UpdateHttpApiOperationResponse UpdateHttpApiOperationResponse
     */
    public function updateHttpApiOperation($httpApiId, $operationId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateHttpApiOperationWithOptions($httpApiId, $operationId, $request, $headers, $runtime);
    }

    /**
     * @summary Updates the route of an HTTP API.
     *  *
     * @param string                    $httpApiId
     * @param string                    $routeId
     * @param UpdateHttpApiRouteRequest $request   UpdateHttpApiRouteRequest
     * @param string[]                  $headers   map
     * @param RuntimeOptions            $runtime   runtime options for this request RuntimeOptions
     *
     * @return UpdateHttpApiRouteResponse UpdateHttpApiRouteResponse
     */
    public function updateHttpApiRouteWithOptions($httpApiId, $routeId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->backendConfig)) {
            $body['backendConfig'] = $request->backendConfig;
        }
        if (!Utils::isUnset($request->deployConfigs)) {
            $body['deployConfigs'] = $request->deployConfigs;
        }
        if (!Utils::isUnset($request->description)) {
            $body['description'] = $request->description;
        }
        if (!Utils::isUnset($request->domainIds)) {
            $body['domainIds'] = $request->domainIds;
        }
        if (!Utils::isUnset($request->environmentId)) {
            $body['environmentId'] = $request->environmentId;
        }
        if (!Utils::isUnset($request->match)) {
            $body['match'] = $request->match;
        }
        if (!Utils::isUnset($request->mcpRouteConfig)) {
            $body['mcpRouteConfig'] = $request->mcpRouteConfig;
        }
        if (!Utils::isUnset($request->name)) {
            $body['name'] = $request->name;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateHttpApiRoute',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/http-apis/' . OpenApiUtilClient::getEncodeParam($httpApiId) . '/routes/' . OpenApiUtilClient::getEncodeParam($routeId) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateHttpApiRouteResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Updates the route of an HTTP API.
     *  *
     * @param string                    $httpApiId
     * @param string                    $routeId
     * @param UpdateHttpApiRouteRequest $request   UpdateHttpApiRouteRequest
     *
     * @return UpdateHttpApiRouteResponse UpdateHttpApiRouteResponse
     */
    public function updateHttpApiRoute($httpApiId, $routeId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateHttpApiRouteWithOptions($httpApiId, $routeId, $request, $headers, $runtime);
    }

    /**
     * @summary 更新挂载规则API
     *  *
     * @param string                        $pluginAttachmentId
     * @param UpdatePluginAttachmentRequest $request            UpdatePluginAttachmentRequest
     * @param string[]                      $headers            map
     * @param RuntimeOptions                $runtime            runtime options for this request RuntimeOptions
     *
     * @return UpdatePluginAttachmentResponse UpdatePluginAttachmentResponse
     */
    public function updatePluginAttachmentWithOptions($pluginAttachmentId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->attachResourceIds)) {
            $body['attachResourceIds'] = $request->attachResourceIds;
        }
        if (!Utils::isUnset($request->enable)) {
            $body['enable'] = $request->enable;
        }
        if (!Utils::isUnset($request->pluginConfig)) {
            $body['pluginConfig'] = $request->pluginConfig;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdatePluginAttachment',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/plugin-attachments/' . OpenApiUtilClient::getEncodeParam($pluginAttachmentId) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdatePluginAttachmentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 更新挂载规则API
     *  *
     * @param string                        $pluginAttachmentId
     * @param UpdatePluginAttachmentRequest $request            UpdatePluginAttachmentRequest
     *
     * @return UpdatePluginAttachmentResponse UpdatePluginAttachmentResponse
     */
    public function updatePluginAttachment($pluginAttachmentId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updatePluginAttachmentWithOptions($pluginAttachmentId, $request, $headers, $runtime);
    }

    /**
     * @summary Update Policy
     *  *
     * @param string              $policyId
     * @param UpdatePolicyRequest $request  UpdatePolicyRequest
     * @param string[]            $headers  map
     * @param RuntimeOptions      $runtime  runtime options for this request RuntimeOptions
     *
     * @return UpdatePolicyResponse UpdatePolicyResponse
     */
    public function updatePolicyWithOptions($policyId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->config)) {
            $body['config'] = $request->config;
        }
        if (!Utils::isUnset($request->description)) {
            $body['description'] = $request->description;
        }
        if (!Utils::isUnset($request->name)) {
            $body['name'] = $request->name;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdatePolicy',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v2/policies/' . OpenApiUtilClient::getEncodeParam($policyId) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdatePolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Update Policy
     *  *
     * @param string              $policyId
     * @param UpdatePolicyRequest $request  UpdatePolicyRequest
     *
     * @return UpdatePolicyResponse UpdatePolicyResponse
     */
    public function updatePolicy($policyId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updatePolicyWithOptions($policyId, $request, $headers, $runtime);
    }

    /**
     * @summary Upgrade the gateway version
     *  *
     * @param string                $gatewayId
     * @param UpgradeGatewayRequest $request   UpgradeGatewayRequest
     * @param string[]              $headers   map
     * @param RuntimeOptions        $runtime   runtime options for this request RuntimeOptions
     *
     * @return UpgradeGatewayResponse UpgradeGatewayResponse
     */
    public function upgradeGatewayWithOptions($gatewayId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->version)) {
            $query['version'] = $request->version;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'UpgradeGateway',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/gateways/' . OpenApiUtilClient::getEncodeParam($gatewayId) . '/upgrade',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpgradeGatewayResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Upgrade the gateway version
     *  *
     * @param string                $gatewayId
     * @param UpgradeGatewayRequest $request   UpgradeGatewayRequest
     *
     * @return UpgradeGatewayResponse UpgradeGatewayResponse
     */
    public function upgradeGateway($gatewayId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->upgradeGatewayWithOptions($gatewayId, $request, $headers, $runtime);
    }
}

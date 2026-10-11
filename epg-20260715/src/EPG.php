<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EPG\V20260715;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\EPG\V20260715\Models\AddIpAddressesToEgressProxyIpPoolRequest;
use AlibabaCloud\SDK\EPG\V20260715\Models\AddIpAddressesToEgressProxyIpPoolResponse;
use AlibabaCloud\SDK\EPG\V20260715\Models\AttachEgressProxyRuleGroupsToConfigurationRequest;
use AlibabaCloud\SDK\EPG\V20260715\Models\AttachEgressProxyRuleGroupsToConfigurationResponse;
use AlibabaCloud\SDK\EPG\V20260715\Models\CreateEgressProxyConfigurationRequest;
use AlibabaCloud\SDK\EPG\V20260715\Models\CreateEgressProxyConfigurationResponse;
use AlibabaCloud\SDK\EPG\V20260715\Models\CreateEgressProxyGatewayRequest;
use AlibabaCloud\SDK\EPG\V20260715\Models\CreateEgressProxyGatewayResponse;
use AlibabaCloud\SDK\EPG\V20260715\Models\CreateEgressProxyIpPoolRequest;
use AlibabaCloud\SDK\EPG\V20260715\Models\CreateEgressProxyIpPoolResponse;
use AlibabaCloud\SDK\EPG\V20260715\Models\CreateEgressProxyRuleGroupRequest;
use AlibabaCloud\SDK\EPG\V20260715\Models\CreateEgressProxyRuleGroupResponse;
use AlibabaCloud\SDK\EPG\V20260715\Models\CreateEgressProxyRulesRequest;
use AlibabaCloud\SDK\EPG\V20260715\Models\CreateEgressProxyRulesResponse;
use AlibabaCloud\SDK\EPG\V20260715\Models\DeleteEgressProxyConfigurationRequest;
use AlibabaCloud\SDK\EPG\V20260715\Models\DeleteEgressProxyConfigurationResponse;
use AlibabaCloud\SDK\EPG\V20260715\Models\DeleteEgressProxyGatewayRequest;
use AlibabaCloud\SDK\EPG\V20260715\Models\DeleteEgressProxyGatewayResponse;
use AlibabaCloud\SDK\EPG\V20260715\Models\DeleteEgressProxyIpPoolRequest;
use AlibabaCloud\SDK\EPG\V20260715\Models\DeleteEgressProxyIpPoolResponse;
use AlibabaCloud\SDK\EPG\V20260715\Models\DeleteEgressProxyRuleGroupRequest;
use AlibabaCloud\SDK\EPG\V20260715\Models\DeleteEgressProxyRuleGroupResponse;
use AlibabaCloud\SDK\EPG\V20260715\Models\DeleteEgressProxyRulesRequest;
use AlibabaCloud\SDK\EPG\V20260715\Models\DeleteEgressProxyRulesResponse;
use AlibabaCloud\SDK\EPG\V20260715\Models\DescribeRegionsRequest;
use AlibabaCloud\SDK\EPG\V20260715\Models\DescribeRegionsResponse;
use AlibabaCloud\SDK\EPG\V20260715\Models\DescribeZonesRequest;
use AlibabaCloud\SDK\EPG\V20260715\Models\DescribeZonesResponse;
use AlibabaCloud\SDK\EPG\V20260715\Models\DetachEgressProxyRuleGroupsFromConfigurationRequest;
use AlibabaCloud\SDK\EPG\V20260715\Models\DetachEgressProxyRuleGroupsFromConfigurationResponse;
use AlibabaCloud\SDK\EPG\V20260715\Models\GetEgressProxyConfigurationAttributeRequest;
use AlibabaCloud\SDK\EPG\V20260715\Models\GetEgressProxyConfigurationAttributeResponse;
use AlibabaCloud\SDK\EPG\V20260715\Models\GetEgressProxyGatewayAttributeRequest;
use AlibabaCloud\SDK\EPG\V20260715\Models\GetEgressProxyGatewayAttributeResponse;
use AlibabaCloud\SDK\EPG\V20260715\Models\GetEgressProxyIpPoolAttributeRequest;
use AlibabaCloud\SDK\EPG\V20260715\Models\GetEgressProxyIpPoolAttributeResponse;
use AlibabaCloud\SDK\EPG\V20260715\Models\GetEgressProxyRuleGroupAttributeRequest;
use AlibabaCloud\SDK\EPG\V20260715\Models\GetEgressProxyRuleGroupAttributeResponse;
use AlibabaCloud\SDK\EPG\V20260715\Models\ListEgressProxyConfigurationsRequest;
use AlibabaCloud\SDK\EPG\V20260715\Models\ListEgressProxyConfigurationsResponse;
use AlibabaCloud\SDK\EPG\V20260715\Models\ListEgressProxyGatewaysRequest;
use AlibabaCloud\SDK\EPG\V20260715\Models\ListEgressProxyGatewaysResponse;
use AlibabaCloud\SDK\EPG\V20260715\Models\ListEgressProxyIpPoolsRequest;
use AlibabaCloud\SDK\EPG\V20260715\Models\ListEgressProxyIpPoolsResponse;
use AlibabaCloud\SDK\EPG\V20260715\Models\ListEgressProxyRuleGroupsRequest;
use AlibabaCloud\SDK\EPG\V20260715\Models\ListEgressProxyRuleGroupsResponse;
use AlibabaCloud\SDK\EPG\V20260715\Models\ListTagResourcesRequest;
use AlibabaCloud\SDK\EPG\V20260715\Models\ListTagResourcesResponse;
use AlibabaCloud\SDK\EPG\V20260715\Models\MoveResourceGroupRequest;
use AlibabaCloud\SDK\EPG\V20260715\Models\MoveResourceGroupResponse;
use AlibabaCloud\SDK\EPG\V20260715\Models\RemoveIpAddressesFromEgressProxyIpPoolRequest;
use AlibabaCloud\SDK\EPG\V20260715\Models\RemoveIpAddressesFromEgressProxyIpPoolResponse;
use AlibabaCloud\SDK\EPG\V20260715\Models\TagResourcesRequest;
use AlibabaCloud\SDK\EPG\V20260715\Models\TagResourcesResponse;
use AlibabaCloud\SDK\EPG\V20260715\Models\UntagResourcesRequest;
use AlibabaCloud\SDK\EPG\V20260715\Models\UntagResourcesResponse;
use AlibabaCloud\SDK\EPG\V20260715\Models\UpdateEgressProxyConfigurationAttributeRequest;
use AlibabaCloud\SDK\EPG\V20260715\Models\UpdateEgressProxyConfigurationAttributeResponse;
use AlibabaCloud\SDK\EPG\V20260715\Models\UpdateEgressProxyGatewayAttributeRequest;
use AlibabaCloud\SDK\EPG\V20260715\Models\UpdateEgressProxyGatewayAttributeResponse;
use AlibabaCloud\SDK\EPG\V20260715\Models\UpdateEgressProxyIpPoolAttributeRequest;
use AlibabaCloud\SDK\EPG\V20260715\Models\UpdateEgressProxyIpPoolAttributeResponse;
use AlibabaCloud\SDK\EPG\V20260715\Models\UpdateEgressProxyRuleGroupAttributeRequest;
use AlibabaCloud\SDK\EPG\V20260715\Models\UpdateEgressProxyRuleGroupAttributeResponse;
use AlibabaCloud\SDK\EPG\V20260715\Models\UpdateEgressProxyRulesAttributeRequest;
use AlibabaCloud\SDK\EPG\V20260715\Models\UpdateEgressProxyRulesAttributeResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class EPG extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('epg', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * 向出口代理地址池添加IP地址
     *
     * @param request - AddIpAddressesToEgressProxyIpPoolRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddIpAddressesToEgressProxyIpPoolResponse
     *
     * @param AddIpAddressesToEgressProxyIpPoolRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return AddIpAddressesToEgressProxyIpPoolResponse
     */
    public function addIpAddressesToEgressProxyIpPoolWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$body['DryRun'] = $request->dryRun;
        }

        if (null !== $request->egressProxyIpPoolId) {
            @$body['EgressProxyIpPoolId'] = $request->egressProxyIpPoolId;
        }

        $bodyFlat = [];
        if (null !== $request->zoneMappings) {
            @$bodyFlat['ZoneMappings'] = $request->zoneMappings;
        }

        $body = Dara::merge([
        ], $body, Utils::query($bodyFlat));
        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'AddIpAddressesToEgressProxyIpPool',
            'version' => '2026-07-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AddIpAddressesToEgressProxyIpPoolResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 向出口代理地址池添加IP地址
     *
     * @param request - AddIpAddressesToEgressProxyIpPoolRequest
     *
     * @returns AddIpAddressesToEgressProxyIpPoolResponse
     *
     * @param AddIpAddressesToEgressProxyIpPoolRequest $request
     *
     * @return AddIpAddressesToEgressProxyIpPoolResponse
     */
    public function addIpAddressesToEgressProxyIpPool($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addIpAddressesToEgressProxyIpPoolWithOptions($request, $runtime);
    }

    /**
     * Attaches egress proxy rule groups to an egress proxy configuration.
     *
     * @remarks
     * When you call this operation to attach egress proxy rule groups to an egress proxy configuration, take note of the following items:
     * - This operation attaches one or more egress proxy rule groups to a specified egress proxy configuration and specifies the priority of each egress proxy rule group in the egress proxy configuration.
     * - The **AttachEgressProxyRuleGroupsToConfiguration** operation is asynchronous. After you send the request, the system returns a response, but the egress proxy rule groups are not yet attached. The attachment task is still running in the background. You can call GetEgressProxyConfigurationAttribute to query the status of the egress proxy configuration:
     *     - If the egress proxy configuration is in the **Configuring** state, the configuration is being updated.
     *     - If the egress proxy configuration is in the **Available** state, the attachment is successful.
     *
     * @param request - AttachEgressProxyRuleGroupsToConfigurationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AttachEgressProxyRuleGroupsToConfigurationResponse
     *
     * @param AttachEgressProxyRuleGroupsToConfigurationRequest $request
     * @param RuntimeOptions                                    $runtime
     *
     * @return AttachEgressProxyRuleGroupsToConfigurationResponse
     */
    public function attachEgressProxyRuleGroupsToConfigurationWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$body['DryRun'] = $request->dryRun;
        }

        if (null !== $request->egressProxyConfigurationId) {
            @$body['EgressProxyConfigurationId'] = $request->egressProxyConfigurationId;
        }

        $bodyFlat = [];
        if (null !== $request->egressProxyRuleGroups) {
            @$bodyFlat['EgressProxyRuleGroups'] = $request->egressProxyRuleGroups;
        }

        $body = Dara::merge([
        ], $body, Utils::query($bodyFlat));
        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'AttachEgressProxyRuleGroupsToConfiguration',
            'version' => '2026-07-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AttachEgressProxyRuleGroupsToConfigurationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Attaches egress proxy rule groups to an egress proxy configuration.
     *
     * @remarks
     * When you call this operation to attach egress proxy rule groups to an egress proxy configuration, take note of the following items:
     * - This operation attaches one or more egress proxy rule groups to a specified egress proxy configuration and specifies the priority of each egress proxy rule group in the egress proxy configuration.
     * - The **AttachEgressProxyRuleGroupsToConfiguration** operation is asynchronous. After you send the request, the system returns a response, but the egress proxy rule groups are not yet attached. The attachment task is still running in the background. You can call GetEgressProxyConfigurationAttribute to query the status of the egress proxy configuration:
     *     - If the egress proxy configuration is in the **Configuring** state, the configuration is being updated.
     *     - If the egress proxy configuration is in the **Available** state, the attachment is successful.
     *
     * @param request - AttachEgressProxyRuleGroupsToConfigurationRequest
     *
     * @returns AttachEgressProxyRuleGroupsToConfigurationResponse
     *
     * @param AttachEgressProxyRuleGroupsToConfigurationRequest $request
     *
     * @return AttachEgressProxyRuleGroupsToConfigurationResponse
     */
    public function attachEgressProxyRuleGroupsToConfiguration($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->attachEgressProxyRuleGroupsToConfigurationWithOptions($request, $runtime);
    }

    /**
     * Creates an egress proxy configuration.
     *
     * @remarks
     * When you call this operation to create an egress proxy configuration, take note of the following items:
     * - The **CreateEgressProxyConfiguration** operation is asynchronous. After you call this operation, the system returns the ID of the egress proxy configuration, but the configuration is not yet created. The creation task is still running in the background. You can call GetEgressProxyConfigurationAttribute to query the status of the egress proxy configuration:
     *     - If the egress proxy configuration is in the **Provisioning** state, the configuration is being created.
     *     - If the egress proxy configuration is in the **Available** state, the configuration is created.
     *
     * @param request - CreateEgressProxyConfigurationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateEgressProxyConfigurationResponse
     *
     * @param CreateEgressProxyConfigurationRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return CreateEgressProxyConfigurationResponse
     */
    public function createEgressProxyConfigurationWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        $bodyFlat = [];
        if (null !== $request->defaultRulePhaseActions) {
            @$bodyFlat['DefaultRulePhaseActions'] = $request->defaultRulePhaseActions;
        }

        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->dryRun) {
            @$body['DryRun'] = $request->dryRun;
        }

        if (null !== $request->egressProxyConfigurationName) {
            @$body['EgressProxyConfigurationName'] = $request->egressProxyConfigurationName;
        }

        if (null !== $request->resourceGroupId) {
            @$body['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->tag) {
            @$bodyFlat['Tag'] = $request->tag;
        }

        $body = Dara::merge([
        ], $body, Utils::query($bodyFlat));
        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateEgressProxyConfiguration',
            'version' => '2026-07-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateEgressProxyConfigurationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates an egress proxy configuration.
     *
     * @remarks
     * When you call this operation to create an egress proxy configuration, take note of the following items:
     * - The **CreateEgressProxyConfiguration** operation is asynchronous. After you call this operation, the system returns the ID of the egress proxy configuration, but the configuration is not yet created. The creation task is still running in the background. You can call GetEgressProxyConfigurationAttribute to query the status of the egress proxy configuration:
     *     - If the egress proxy configuration is in the **Provisioning** state, the configuration is being created.
     *     - If the egress proxy configuration is in the **Available** state, the configuration is created.
     *
     * @param request - CreateEgressProxyConfigurationRequest
     *
     * @returns CreateEgressProxyConfigurationResponse
     *
     * @param CreateEgressProxyConfigurationRequest $request
     *
     * @return CreateEgressProxyConfigurationResponse
     */
    public function createEgressProxyConfiguration($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createEgressProxyConfigurationWithOptions($request, $runtime);
    }

    /**
     * Creates an egress proxy gateway instance.
     *
     * @remarks
     * The **CreateEgressProxyGateway** operation is asynchronous. After you call this operation, the system returns an instance ID, but the egress proxy gateway instance is not yet created and the creation task is still running in the background. You can call GetEgressProxyGatewayAttribute to query the creation status of the egress proxy gateway instance:
     * - When the egress proxy gateway instance is in the **Provisioning** state, the instance is being created.
     * - When the egress proxy gateway instance is in the **Active** state, the instance is created.
     *
     * @param request - CreateEgressProxyGatewayRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateEgressProxyGatewayResponse
     *
     * @param CreateEgressProxyGatewayRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return CreateEgressProxyGatewayResponse
     */
    public function createEgressProxyGatewayWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->dryRun) {
            @$body['DryRun'] = $request->dryRun;
        }

        if (null !== $request->egressProxyConfigurationId) {
            @$body['EgressProxyConfigurationId'] = $request->egressProxyConfigurationId;
        }

        if (null !== $request->egressProxyGatewayName) {
            @$body['EgressProxyGatewayName'] = $request->egressProxyGatewayName;
        }

        $bodyFlat = [];
        if (null !== $request->listenerProperties) {
            @$bodyFlat['ListenerProperties'] = $request->listenerProperties;
        }

        if (null !== $request->resourceGroupId) {
            @$body['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->tag) {
            @$bodyFlat['Tag'] = $request->tag;
        }

        if (null !== $request->tlsInterceptProperties) {
            @$bodyFlat['TlsInterceptProperties'] = $request->tlsInterceptProperties;
        }

        if (null !== $request->vpcId) {
            @$body['VpcId'] = $request->vpcId;
        }

        if (null !== $request->zoneMappings) {
            @$bodyFlat['ZoneMappings'] = $request->zoneMappings;
        }

        $body = Dara::merge([
        ], $body, Utils::query($bodyFlat));
        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateEgressProxyGateway',
            'version' => '2026-07-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateEgressProxyGatewayResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates an egress proxy gateway instance.
     *
     * @remarks
     * The **CreateEgressProxyGateway** operation is asynchronous. After you call this operation, the system returns an instance ID, but the egress proxy gateway instance is not yet created and the creation task is still running in the background. You can call GetEgressProxyGatewayAttribute to query the creation status of the egress proxy gateway instance:
     * - When the egress proxy gateway instance is in the **Provisioning** state, the instance is being created.
     * - When the egress proxy gateway instance is in the **Active** state, the instance is created.
     *
     * @param request - CreateEgressProxyGatewayRequest
     *
     * @returns CreateEgressProxyGatewayResponse
     *
     * @param CreateEgressProxyGatewayRequest $request
     *
     * @return CreateEgressProxyGatewayResponse
     */
    public function createEgressProxyGateway($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createEgressProxyGatewayWithOptions($request, $runtime);
    }

    /**
     * 创建出口代理地址池.
     *
     * @param request - CreateEgressProxyIpPoolRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateEgressProxyIpPoolResponse
     *
     * @param CreateEgressProxyIpPoolRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return CreateEgressProxyIpPoolResponse
     */
    public function createEgressProxyIpPoolWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->addressType) {
            @$body['AddressType'] = $request->addressType;
        }

        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->dryRun) {
            @$body['DryRun'] = $request->dryRun;
        }

        if (null !== $request->egressProxyGatewayId) {
            @$body['EgressProxyGatewayId'] = $request->egressProxyGatewayId;
        }

        if (null !== $request->egressProxyIpPoolName) {
            @$body['EgressProxyIpPoolName'] = $request->egressProxyIpPoolName;
        }

        if (null !== $request->hashFactor) {
            @$body['HashFactor'] = $request->hashFactor;
        }

        if (null !== $request->hashHeaderName) {
            @$body['HashHeaderName'] = $request->hashHeaderName;
        }

        if (null !== $request->scheduler) {
            @$body['Scheduler'] = $request->scheduler;
        }

        $bodyFlat = [];
        if (null !== $request->tag) {
            @$bodyFlat['Tag'] = $request->tag;
        }

        if (null !== $request->zoneMappings) {
            @$bodyFlat['ZoneMappings'] = $request->zoneMappings;
        }

        $body = Dara::merge([
        ], $body, Utils::query($bodyFlat));
        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateEgressProxyIpPool',
            'version' => '2026-07-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateEgressProxyIpPoolResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建出口代理地址池.
     *
     * @param request - CreateEgressProxyIpPoolRequest
     *
     * @returns CreateEgressProxyIpPoolResponse
     *
     * @param CreateEgressProxyIpPoolRequest $request
     *
     * @return CreateEgressProxyIpPoolResponse
     */
    public function createEgressProxyIpPool($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createEgressProxyIpPoolWithOptions($request, $runtime);
    }

    /**
     * Creates an egress rule group.
     *
     * @remarks
     * When you call this operation to create an egress rule group, take note of the following items:
     * - You can create egress rules in batches by phase (PreDns, PreRequest, and PostResponse) when you create the rule group.
     * - Within the same phase of a rule group, rule priorities (Priority) must be unique. Valid values: 1 to 1000. A smaller value indicates a higher priority.
     * - This operation is asynchronous. After you call this operation, the system returns the ID of the egress rule group, but the rule group is not yet created. The creation task is still running in the background. You can call GetEgressProxyRuleGroupAttribute to query the status of the egress rule group:
     *     - If the egress rule group is in the **Provisioning** state, the rule group is being created.
     *     - If the egress rule group is in the **Available** state, the rule group is created.
     *
     * @param request - CreateEgressProxyRuleGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateEgressProxyRuleGroupResponse
     *
     * @param CreateEgressProxyRuleGroupRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return CreateEgressProxyRuleGroupResponse
     */
    public function createEgressProxyRuleGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->dryRun) {
            @$body['DryRun'] = $request->dryRun;
        }

        if (null !== $request->egressProxyIpPoolId) {
            @$body['EgressProxyIpPoolId'] = $request->egressProxyIpPoolId;
        }

        if (null !== $request->egressProxyRuleGroupName) {
            @$body['EgressProxyRuleGroupName'] = $request->egressProxyRuleGroupName;
        }

        $bodyFlat = [];
        if (null !== $request->egressProxyRules) {
            @$bodyFlat['EgressProxyRules'] = $request->egressProxyRules;
        }

        if (null !== $request->resourceGroupId) {
            @$body['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->tag) {
            @$bodyFlat['Tag'] = $request->tag;
        }

        $body = Dara::merge([
        ], $body, Utils::query($bodyFlat));
        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateEgressProxyRuleGroup',
            'version' => '2026-07-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateEgressProxyRuleGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates an egress rule group.
     *
     * @remarks
     * When you call this operation to create an egress rule group, take note of the following items:
     * - You can create egress rules in batches by phase (PreDns, PreRequest, and PostResponse) when you create the rule group.
     * - Within the same phase of a rule group, rule priorities (Priority) must be unique. Valid values: 1 to 1000. A smaller value indicates a higher priority.
     * - This operation is asynchronous. After you call this operation, the system returns the ID of the egress rule group, but the rule group is not yet created. The creation task is still running in the background. You can call GetEgressProxyRuleGroupAttribute to query the status of the egress rule group:
     *     - If the egress rule group is in the **Provisioning** state, the rule group is being created.
     *     - If the egress rule group is in the **Available** state, the rule group is created.
     *
     * @param request - CreateEgressProxyRuleGroupRequest
     *
     * @returns CreateEgressProxyRuleGroupResponse
     *
     * @param CreateEgressProxyRuleGroupRequest $request
     *
     * @return CreateEgressProxyRuleGroupResponse
     */
    public function createEgressProxyRuleGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createEgressProxyRuleGroupWithOptions($request, $runtime);
    }

    /**
     * Creates multiple egress proxy rules.
     *
     * @remarks
     * When you call this operation to create multiple egress proxy rules in a specified egress rule group, note the following items:
     * - Egress rules are created in groups based on the effective phase (PreDns, PreRequest, or PostResponse).
     * - Within the same effective phase of an egress rule group, the priority of rules must be unique.
     * - Valid values for the priority: 1 to 1000. A smaller value indicates a higher priority.
     * - This operation is asynchronous. After you call this operation, the system returns the IDs of the created egress rules, but the rules are not yet created. The creation task is still running in the background. You can call the GetEgressProxyRuleGroupAttribute operation to query the status of the egress rule group:
     *     - If the egress rule group is in the **Provisioning** state, the rules are being created.
     *     - If the egress rule group is in the **Available** state, the rules are created.
     *
     * @param request - CreateEgressProxyRulesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateEgressProxyRulesResponse
     *
     * @param CreateEgressProxyRulesRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return CreateEgressProxyRulesResponse
     */
    public function createEgressProxyRulesWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$body['DryRun'] = $request->dryRun;
        }

        if (null !== $request->egressProxyRuleGroupId) {
            @$body['EgressProxyRuleGroupId'] = $request->egressProxyRuleGroupId;
        }

        $bodyFlat = [];
        if (null !== $request->egressProxyRules) {
            @$bodyFlat['EgressProxyRules'] = $request->egressProxyRules;
        }

        $body = Dara::merge([
        ], $body, Utils::query($bodyFlat));
        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateEgressProxyRules',
            'version' => '2026-07-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateEgressProxyRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates multiple egress proxy rules.
     *
     * @remarks
     * When you call this operation to create multiple egress proxy rules in a specified egress rule group, note the following items:
     * - Egress rules are created in groups based on the effective phase (PreDns, PreRequest, or PostResponse).
     * - Within the same effective phase of an egress rule group, the priority of rules must be unique.
     * - Valid values for the priority: 1 to 1000. A smaller value indicates a higher priority.
     * - This operation is asynchronous. After you call this operation, the system returns the IDs of the created egress rules, but the rules are not yet created. The creation task is still running in the background. You can call the GetEgressProxyRuleGroupAttribute operation to query the status of the egress rule group:
     *     - If the egress rule group is in the **Provisioning** state, the rules are being created.
     *     - If the egress rule group is in the **Available** state, the rules are created.
     *
     * @param request - CreateEgressProxyRulesRequest
     *
     * @returns CreateEgressProxyRulesResponse
     *
     * @param CreateEgressProxyRulesRequest $request
     *
     * @return CreateEgressProxyRulesResponse
     */
    public function createEgressProxyRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createEgressProxyRulesWithOptions($request, $runtime);
    }

    /**
     * Deletes an egress proxy configuration.
     *
     * @param request - DeleteEgressProxyConfigurationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteEgressProxyConfigurationResponse
     *
     * @param DeleteEgressProxyConfigurationRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DeleteEgressProxyConfigurationResponse
     */
    public function deleteEgressProxyConfigurationWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$body['DryRun'] = $request->dryRun;
        }

        if (null !== $request->egressProxyConfigurationId) {
            @$body['EgressProxyConfigurationId'] = $request->egressProxyConfigurationId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteEgressProxyConfiguration',
            'version' => '2026-07-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteEgressProxyConfigurationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes an egress proxy configuration.
     *
     * @param request - DeleteEgressProxyConfigurationRequest
     *
     * @returns DeleteEgressProxyConfigurationResponse
     *
     * @param DeleteEgressProxyConfigurationRequest $request
     *
     * @return DeleteEgressProxyConfigurationResponse
     */
    public function deleteEgressProxyConfiguration($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteEgressProxyConfigurationWithOptions($request, $runtime);
    }

    /**
     * Deletes an egress proxy gateway instance.
     *
     * @remarks
     * ## Request description
     * - `EgressProxyGatewayId` is a required parameter that specifies the egress proxy gateway instance ID to delete.
     * - `ClientToken` is an optional parameter used to ensure the idempotence of the request.
     *
     * @param request - DeleteEgressProxyGatewayRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteEgressProxyGatewayResponse
     *
     * @param DeleteEgressProxyGatewayRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DeleteEgressProxyGatewayResponse
     */
    public function deleteEgressProxyGatewayWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$body['DryRun'] = $request->dryRun;
        }

        if (null !== $request->egressProxyGatewayId) {
            @$body['EgressProxyGatewayId'] = $request->egressProxyGatewayId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteEgressProxyGateway',
            'version' => '2026-07-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteEgressProxyGatewayResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes an egress proxy gateway instance.
     *
     * @remarks
     * ## Request description
     * - `EgressProxyGatewayId` is a required parameter that specifies the egress proxy gateway instance ID to delete.
     * - `ClientToken` is an optional parameter used to ensure the idempotence of the request.
     *
     * @param request - DeleteEgressProxyGatewayRequest
     *
     * @returns DeleteEgressProxyGatewayResponse
     *
     * @param DeleteEgressProxyGatewayRequest $request
     *
     * @return DeleteEgressProxyGatewayResponse
     */
    public function deleteEgressProxyGateway($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteEgressProxyGatewayWithOptions($request, $runtime);
    }

    /**
     * Deletes an egress proxy IP address pool.
     *
     * @remarks
     * ## Request description
     * - **EgressProxyIpPoolId** is a required parameter that specifies the ID of the egress proxy IP address pool to delete.
     * - **ClientToken** is an optional parameter used to ensure the idempotence of the request.
     * - **DryRun** is an optional parameter. Default value: `false`. If you set this parameter to `true`, the system only prechecks the request and does not perform the delete operation.
     *
     * @param request - DeleteEgressProxyIpPoolRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteEgressProxyIpPoolResponse
     *
     * @param DeleteEgressProxyIpPoolRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DeleteEgressProxyIpPoolResponse
     */
    public function deleteEgressProxyIpPoolWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$body['DryRun'] = $request->dryRun;
        }

        if (null !== $request->egressProxyIpPoolId) {
            @$body['EgressProxyIpPoolId'] = $request->egressProxyIpPoolId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteEgressProxyIpPool',
            'version' => '2026-07-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteEgressProxyIpPoolResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes an egress proxy IP address pool.
     *
     * @remarks
     * ## Request description
     * - **EgressProxyIpPoolId** is a required parameter that specifies the ID of the egress proxy IP address pool to delete.
     * - **ClientToken** is an optional parameter used to ensure the idempotence of the request.
     * - **DryRun** is an optional parameter. Default value: `false`. If you set this parameter to `true`, the system only prechecks the request and does not perform the delete operation.
     *
     * @param request - DeleteEgressProxyIpPoolRequest
     *
     * @returns DeleteEgressProxyIpPoolResponse
     *
     * @param DeleteEgressProxyIpPoolRequest $request
     *
     * @return DeleteEgressProxyIpPoolResponse
     */
    public function deleteEgressProxyIpPool($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteEgressProxyIpPoolWithOptions($request, $runtime);
    }

    /**
     * Deletes an egress proxy rule group.
     *
     * @param request - DeleteEgressProxyRuleGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteEgressProxyRuleGroupResponse
     *
     * @param DeleteEgressProxyRuleGroupRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DeleteEgressProxyRuleGroupResponse
     */
    public function deleteEgressProxyRuleGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$body['DryRun'] = $request->dryRun;
        }

        if (null !== $request->egressProxyRuleGroupId) {
            @$body['EgressProxyRuleGroupId'] = $request->egressProxyRuleGroupId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteEgressProxyRuleGroup',
            'version' => '2026-07-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteEgressProxyRuleGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes an egress proxy rule group.
     *
     * @param request - DeleteEgressProxyRuleGroupRequest
     *
     * @returns DeleteEgressProxyRuleGroupResponse
     *
     * @param DeleteEgressProxyRuleGroupRequest $request
     *
     * @return DeleteEgressProxyRuleGroupResponse
     */
    public function deleteEgressProxyRuleGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteEgressProxyRuleGroupWithOptions($request, $runtime);
    }

    /**
     * Deletes multiple egress proxy rules.
     *
     * @param request - DeleteEgressProxyRulesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteEgressProxyRulesResponse
     *
     * @param DeleteEgressProxyRulesRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DeleteEgressProxyRulesResponse
     */
    public function deleteEgressProxyRulesWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$body['DryRun'] = $request->dryRun;
        }

        if (null !== $request->egressProxyRuleGroupId) {
            @$body['EgressProxyRuleGroupId'] = $request->egressProxyRuleGroupId;
        }

        $bodyFlat = [];
        if (null !== $request->egressProxyRuleIds) {
            @$bodyFlat['EgressProxyRuleIds'] = $request->egressProxyRuleIds;
        }

        $body = Dara::merge([
        ], $body, Utils::query($bodyFlat));
        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteEgressProxyRules',
            'version' => '2026-07-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteEgressProxyRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes multiple egress proxy rules.
     *
     * @param request - DeleteEgressProxyRulesRequest
     *
     * @returns DeleteEgressProxyRulesResponse
     *
     * @param DeleteEgressProxyRulesRequest $request
     *
     * @return DeleteEgressProxyRulesResponse
     */
    public function deleteEgressProxyRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteEgressProxyRulesWithOptions($request, $runtime);
    }

    /**
     * Queries the available regions.
     *
     * @param request - DescribeRegionsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeRegionsResponse
     *
     * @param DescribeRegionsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeRegionsResponse
     */
    public function describeRegionsWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->acceptLanguage) {
            @$body['AcceptLanguage'] = $request->acceptLanguage;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DescribeRegions',
            'version' => '2026-07-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeRegionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the available regions.
     *
     * @param request - DescribeRegionsRequest
     *
     * @returns DescribeRegionsResponse
     *
     * @param DescribeRegionsRequest $request
     *
     * @return DescribeRegionsResponse
     */
    public function describeRegions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRegionsWithOptions($request, $runtime);
    }

    /**
     * Queries zones.
     *
     * @param request - DescribeZonesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeZonesResponse
     *
     * @param DescribeZonesRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DescribeZonesResponse
     */
    public function describeZonesWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->acceptLanguage) {
            @$body['AcceptLanguage'] = $request->acceptLanguage;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DescribeZones',
            'version' => '2026-07-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeZonesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries zones.
     *
     * @param request - DescribeZonesRequest
     *
     * @returns DescribeZonesResponse
     *
     * @param DescribeZonesRequest $request
     *
     * @return DescribeZonesResponse
     */
    public function describeZones($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeZonesWithOptions($request, $runtime);
    }

    /**
     * Disassociates egress proxy rule groups from an egress proxy configuration.
     *
     * @remarks
     * When you call this operation to disassociate egress proxy rule groups from an egress proxy configuration, take note of the following items:
     * - This operation disassociates one or more egress proxy rule groups from a specified egress proxy configuration. After the disassociation, these egress proxy rule groups no longer take effect in the egress proxy configuration.
     * - The **DetachEgressProxyRuleGroupsFromConfiguration** operation is asynchronous. After you send a request, the system returns a response, but the egress proxy rule groups are not yet disassociated. The disassociation task is still running in the background. You can call the GetEgressProxyConfigurationAttribute operation to query the status of the egress proxy configuration:
     *     - If the egress proxy configuration is in the **Configuring** state, the configuration is being updated.
     *     - If the egress proxy configuration is in the **Available** state, the disassociation is successful.
     *
     * @param request - DetachEgressProxyRuleGroupsFromConfigurationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DetachEgressProxyRuleGroupsFromConfigurationResponse
     *
     * @param DetachEgressProxyRuleGroupsFromConfigurationRequest $request
     * @param RuntimeOptions                                      $runtime
     *
     * @return DetachEgressProxyRuleGroupsFromConfigurationResponse
     */
    public function detachEgressProxyRuleGroupsFromConfigurationWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$body['DryRun'] = $request->dryRun;
        }

        if (null !== $request->egressProxyConfigurationId) {
            @$body['EgressProxyConfigurationId'] = $request->egressProxyConfigurationId;
        }

        $bodyFlat = [];
        if (null !== $request->egressProxyRuleGroupIds) {
            @$bodyFlat['EgressProxyRuleGroupIds'] = $request->egressProxyRuleGroupIds;
        }

        $body = Dara::merge([
        ], $body, Utils::query($bodyFlat));
        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DetachEgressProxyRuleGroupsFromConfiguration',
            'version' => '2026-07-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DetachEgressProxyRuleGroupsFromConfigurationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Disassociates egress proxy rule groups from an egress proxy configuration.
     *
     * @remarks
     * When you call this operation to disassociate egress proxy rule groups from an egress proxy configuration, take note of the following items:
     * - This operation disassociates one or more egress proxy rule groups from a specified egress proxy configuration. After the disassociation, these egress proxy rule groups no longer take effect in the egress proxy configuration.
     * - The **DetachEgressProxyRuleGroupsFromConfiguration** operation is asynchronous. After you send a request, the system returns a response, but the egress proxy rule groups are not yet disassociated. The disassociation task is still running in the background. You can call the GetEgressProxyConfigurationAttribute operation to query the status of the egress proxy configuration:
     *     - If the egress proxy configuration is in the **Configuring** state, the configuration is being updated.
     *     - If the egress proxy configuration is in the **Available** state, the disassociation is successful.
     *
     * @param request - DetachEgressProxyRuleGroupsFromConfigurationRequest
     *
     * @returns DetachEgressProxyRuleGroupsFromConfigurationResponse
     *
     * @param DetachEgressProxyRuleGroupsFromConfigurationRequest $request
     *
     * @return DetachEgressProxyRuleGroupsFromConfigurationResponse
     */
    public function detachEgressProxyRuleGroupsFromConfiguration($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detachEgressProxyRuleGroupsFromConfigurationWithOptions($request, $runtime);
    }

    /**
     * Queries the details of an egress proxy configuration.
     *
     * @remarks
     * *GetEgressProxyConfigurationAttribute** is a synchronous API operation that returns the details of a specified egress proxy configuration in real time after the call. You can determine the current status of the egress proxy configuration based on the returned **Status**. For example, **Provisioning** indicates that the configuration is being created, and **Available** indicates that the configuration is created and available.
     *
     * @param request - GetEgressProxyConfigurationAttributeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetEgressProxyConfigurationAttributeResponse
     *
     * @param GetEgressProxyConfigurationAttributeRequest $request
     * @param RuntimeOptions                              $runtime
     *
     * @return GetEgressProxyConfigurationAttributeResponse
     */
    public function getEgressProxyConfigurationAttributeWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->egressProxyConfigurationId) {
            @$body['EgressProxyConfigurationId'] = $request->egressProxyConfigurationId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetEgressProxyConfigurationAttribute',
            'version' => '2026-07-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetEgressProxyConfigurationAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of an egress proxy configuration.
     *
     * @remarks
     * *GetEgressProxyConfigurationAttribute** is a synchronous API operation that returns the details of a specified egress proxy configuration in real time after the call. You can determine the current status of the egress proxy configuration based on the returned **Status**. For example, **Provisioning** indicates that the configuration is being created, and **Available** indicates that the configuration is created and available.
     *
     * @param request - GetEgressProxyConfigurationAttributeRequest
     *
     * @returns GetEgressProxyConfigurationAttributeResponse
     *
     * @param GetEgressProxyConfigurationAttributeRequest $request
     *
     * @return GetEgressProxyConfigurationAttributeResponse
     */
    public function getEgressProxyConfigurationAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getEgressProxyConfigurationAttributeWithOptions($request, $runtime);
    }

    /**
     * Queries the details of an egress proxy gateway instance.
     *
     * @remarks
     * *GetEgressProxyGatewayAttribute** is a synchronous operation that returns the current attribute information of the egress proxy gateway in real time after it is called.
     * You can determine the current status of the egress proxy gateway based on the returned **Status**. For example, **Provisioning** indicates that the instance is being created, **Active** indicates that the instance is running, **Configuring** indicates that the instance is being reconfigured, and **Inactive** indicates that the instance is stopped.
     *
     * @param request - GetEgressProxyGatewayAttributeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetEgressProxyGatewayAttributeResponse
     *
     * @param GetEgressProxyGatewayAttributeRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return GetEgressProxyGatewayAttributeResponse
     */
    public function getEgressProxyGatewayAttributeWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->egressProxyGatewayId) {
            @$body['EgressProxyGatewayId'] = $request->egressProxyGatewayId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetEgressProxyGatewayAttribute',
            'version' => '2026-07-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetEgressProxyGatewayAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of an egress proxy gateway instance.
     *
     * @remarks
     * *GetEgressProxyGatewayAttribute** is a synchronous operation that returns the current attribute information of the egress proxy gateway in real time after it is called.
     * You can determine the current status of the egress proxy gateway based on the returned **Status**. For example, **Provisioning** indicates that the instance is being created, **Active** indicates that the instance is running, **Configuring** indicates that the instance is being reconfigured, and **Inactive** indicates that the instance is stopped.
     *
     * @param request - GetEgressProxyGatewayAttributeRequest
     *
     * @returns GetEgressProxyGatewayAttributeResponse
     *
     * @param GetEgressProxyGatewayAttributeRequest $request
     *
     * @return GetEgressProxyGatewayAttributeResponse
     */
    public function getEgressProxyGatewayAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getEgressProxyGatewayAttributeWithOptions($request, $runtime);
    }

    /**
     * 查询出口代理地址池详细信息.
     *
     * @remarks
     * ## 请求说明
     * 通过提供`EgressProxyIpPoolId`，可以获取到与该ID关联的出口代理IP池的所有相关信息，包括但不限于名称、描述、网络类型等。请确保提供的`EgressProxyIpPoolId`是有效的且属于您的账户。
     *
     * @param request - GetEgressProxyIpPoolAttributeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetEgressProxyIpPoolAttributeResponse
     *
     * @param GetEgressProxyIpPoolAttributeRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return GetEgressProxyIpPoolAttributeResponse
     */
    public function getEgressProxyIpPoolAttributeWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->egressProxyIpPoolId) {
            @$body['EgressProxyIpPoolId'] = $request->egressProxyIpPoolId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetEgressProxyIpPoolAttribute',
            'version' => '2026-07-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetEgressProxyIpPoolAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询出口代理地址池详细信息.
     *
     * @remarks
     * ## 请求说明
     * 通过提供`EgressProxyIpPoolId`，可以获取到与该ID关联的出口代理IP池的所有相关信息，包括但不限于名称、描述、网络类型等。请确保提供的`EgressProxyIpPoolId`是有效的且属于您的账户。
     *
     * @param request - GetEgressProxyIpPoolAttributeRequest
     *
     * @returns GetEgressProxyIpPoolAttributeResponse
     *
     * @param GetEgressProxyIpPoolAttributeRequest $request
     *
     * @return GetEgressProxyIpPoolAttributeResponse
     */
    public function getEgressProxyIpPoolAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getEgressProxyIpPoolAttributeWithOptions($request, $runtime);
    }

    /**
     * 查询出口代理规则组详细信息.
     *
     * @param request - GetEgressProxyRuleGroupAttributeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetEgressProxyRuleGroupAttributeResponse
     *
     * @param GetEgressProxyRuleGroupAttributeRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return GetEgressProxyRuleGroupAttributeResponse
     */
    public function getEgressProxyRuleGroupAttributeWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->egressProxyRuleGroupId) {
            @$body['EgressProxyRuleGroupId'] = $request->egressProxyRuleGroupId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetEgressProxyRuleGroupAttribute',
            'version' => '2026-07-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetEgressProxyRuleGroupAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询出口代理规则组详细信息.
     *
     * @param request - GetEgressProxyRuleGroupAttributeRequest
     *
     * @returns GetEgressProxyRuleGroupAttributeResponse
     *
     * @param GetEgressProxyRuleGroupAttributeRequest $request
     *
     * @return GetEgressProxyRuleGroupAttributeResponse
     */
    public function getEgressProxyRuleGroupAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getEgressProxyRuleGroupAttributeWithOptions($request, $runtime);
    }

    /**
     * Queries the list of egress proxy configurations.
     *
     * @remarks
     * *ListEgressProxyConfigurations** is a synchronous API operation that returns a list of egress proxy configurations that meet the specified conditions in real time after the call. The returned results are paginated by using **MaxResults** and **NextToken**:
     * - If **NextToken** is empty, all data has been returned.
     * - If **NextToken** has a value, you can use it as the **NextToken** for the next call to continue the query.
     *
     * @param request - ListEgressProxyConfigurationsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListEgressProxyConfigurationsResponse
     *
     * @param ListEgressProxyConfigurationsRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return ListEgressProxyConfigurationsResponse
     */
    public function listEgressProxyConfigurationsWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        $bodyFlat = [];
        if (null !== $request->egressProxyConfigurationIds) {
            @$bodyFlat['EgressProxyConfigurationIds'] = $request->egressProxyConfigurationIds;
        }

        if (null !== $request->egressProxyConfigurationNames) {
            @$bodyFlat['EgressProxyConfigurationNames'] = $request->egressProxyConfigurationNames;
        }

        if (null !== $request->maxResults) {
            @$body['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$body['NextToken'] = $request->nextToken;
        }

        if (null !== $request->resourceGroupId) {
            @$body['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->skip) {
            @$body['Skip'] = $request->skip;
        }

        if (null !== $request->status) {
            @$body['Status'] = $request->status;
        }

        if (null !== $request->tag) {
            @$bodyFlat['Tag'] = $request->tag;
        }

        $body = Dara::merge([
        ], $body, Utils::query($bodyFlat));
        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListEgressProxyConfigurations',
            'version' => '2026-07-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListEgressProxyConfigurationsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the list of egress proxy configurations.
     *
     * @remarks
     * *ListEgressProxyConfigurations** is a synchronous API operation that returns a list of egress proxy configurations that meet the specified conditions in real time after the call. The returned results are paginated by using **MaxResults** and **NextToken**:
     * - If **NextToken** is empty, all data has been returned.
     * - If **NextToken** has a value, you can use it as the **NextToken** for the next call to continue the query.
     *
     * @param request - ListEgressProxyConfigurationsRequest
     *
     * @returns ListEgressProxyConfigurationsResponse
     *
     * @param ListEgressProxyConfigurationsRequest $request
     *
     * @return ListEgressProxyConfigurationsResponse
     */
    public function listEgressProxyConfigurations($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listEgressProxyConfigurationsWithOptions($request, $runtime);
    }

    /**
     * 查询出口代理网关列表.
     *
     * @remarks
     * ## 请求说明
     * - `MaxResults` 参数用于指定每页返回的最大结果数量，默认值为20，最大可设置为1000。
     * - `NextToken` 参数用于分页查询时获取下一页的数据。
     * - `Skip` 参数用于跳过指定数量的结果，默认值为0。
     * - `VpcIds` 参数允许通过指定一个或多个VPC ID来过滤查询结果，一次最多支持20个ID。
     * - `EgressProxyGatewayIds` 和 `EgressProxyGatewayNames` 分别允许通过实例ID和实例名称来过滤查询结果，每次请求中每个参数最多支持20个值。
     * - `Status` 参数可用于根据实例状态（如Active, Inactive等）进行过滤。
     * - `ResourceGroupId` 参数允许按资源组ID过滤查询结果。
     * - `Tags` 参数支持基于标签键值对的过滤条件，可以用来更精确地定位特定资源。
     * 请注意，所有数组类型的参数在实际使用时需要按照API的具体要求格式化输入数据。
     *
     * @param request - ListEgressProxyGatewaysRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListEgressProxyGatewaysResponse
     *
     * @param ListEgressProxyGatewaysRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ListEgressProxyGatewaysResponse
     */
    public function listEgressProxyGatewaysWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        $bodyFlat = [];
        if (null !== $request->egressProxyConfigurationIds) {
            @$bodyFlat['EgressProxyConfigurationIds'] = $request->egressProxyConfigurationIds;
        }

        if (null !== $request->egressProxyGatewayIds) {
            @$bodyFlat['EgressProxyGatewayIds'] = $request->egressProxyGatewayIds;
        }

        if (null !== $request->egressProxyGatewayNames) {
            @$bodyFlat['EgressProxyGatewayNames'] = $request->egressProxyGatewayNames;
        }

        if (null !== $request->maxResults) {
            @$body['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$body['NextToken'] = $request->nextToken;
        }

        if (null !== $request->resourceGroupId) {
            @$body['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->skip) {
            @$body['Skip'] = $request->skip;
        }

        if (null !== $request->status) {
            @$body['Status'] = $request->status;
        }

        if (null !== $request->tag) {
            @$bodyFlat['Tag'] = $request->tag;
        }

        if (null !== $request->vpcIds) {
            @$bodyFlat['VpcIds'] = $request->vpcIds;
        }

        $body = Dara::merge([
        ], $body, Utils::query($bodyFlat));
        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListEgressProxyGateways',
            'version' => '2026-07-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListEgressProxyGatewaysResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询出口代理网关列表.
     *
     * @remarks
     * ## 请求说明
     * - `MaxResults` 参数用于指定每页返回的最大结果数量，默认值为20，最大可设置为1000。
     * - `NextToken` 参数用于分页查询时获取下一页的数据。
     * - `Skip` 参数用于跳过指定数量的结果，默认值为0。
     * - `VpcIds` 参数允许通过指定一个或多个VPC ID来过滤查询结果，一次最多支持20个ID。
     * - `EgressProxyGatewayIds` 和 `EgressProxyGatewayNames` 分别允许通过实例ID和实例名称来过滤查询结果，每次请求中每个参数最多支持20个值。
     * - `Status` 参数可用于根据实例状态（如Active, Inactive等）进行过滤。
     * - `ResourceGroupId` 参数允许按资源组ID过滤查询结果。
     * - `Tags` 参数支持基于标签键值对的过滤条件，可以用来更精确地定位特定资源。
     * 请注意，所有数组类型的参数在实际使用时需要按照API的具体要求格式化输入数据。
     *
     * @param request - ListEgressProxyGatewaysRequest
     *
     * @returns ListEgressProxyGatewaysResponse
     *
     * @param ListEgressProxyGatewaysRequest $request
     *
     * @return ListEgressProxyGatewaysResponse
     */
    public function listEgressProxyGateways($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listEgressProxyGatewaysWithOptions($request, $runtime);
    }

    /**
     * 查询出口代理地址池列表.
     *
     * @remarks
     * ## 请求说明
     * - `MaxResults` 参数用于控制每页返回的结果数量，默认为20，最大值为1000。
     * - `NextToken` 用于分页查询时获取下一页的数据。
     * - `Skip` 参数用于跳过指定数量的记录，默认值为0。
     * - 可以通过 `EgressProxyGatewayIds`, `EgressProxyIpPoolIds`, `EgressProxyIpPoolNames` 等参数进行过滤查询。
     * - `Status` 参数支持按状态过滤结果。
     * - `Tags` 参数可用于更细粒度的资源筛选。
     * - 返回结果中包含 `NextToken` 以便于继续请求后续页面的数据。
     * - `CreateTime` 字段表示的是UTC时间格式。
     *
     * @param request - ListEgressProxyIpPoolsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListEgressProxyIpPoolsResponse
     *
     * @param ListEgressProxyIpPoolsRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ListEgressProxyIpPoolsResponse
     */
    public function listEgressProxyIpPoolsWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        $bodyFlat = [];
        if (null !== $request->egressProxyGatewayIds) {
            @$bodyFlat['EgressProxyGatewayIds'] = $request->egressProxyGatewayIds;
        }

        if (null !== $request->egressProxyIpPoolIds) {
            @$bodyFlat['EgressProxyIpPoolIds'] = $request->egressProxyIpPoolIds;
        }

        if (null !== $request->egressProxyIpPoolNames) {
            @$bodyFlat['EgressProxyIpPoolNames'] = $request->egressProxyIpPoolNames;
        }

        if (null !== $request->maxResults) {
            @$body['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$body['NextToken'] = $request->nextToken;
        }

        if (null !== $request->skip) {
            @$body['Skip'] = $request->skip;
        }

        if (null !== $request->status) {
            @$body['Status'] = $request->status;
        }

        if (null !== $request->tag) {
            @$bodyFlat['Tag'] = $request->tag;
        }

        $body = Dara::merge([
        ], $body, Utils::query($bodyFlat));
        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListEgressProxyIpPools',
            'version' => '2026-07-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListEgressProxyIpPoolsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询出口代理地址池列表.
     *
     * @remarks
     * ## 请求说明
     * - `MaxResults` 参数用于控制每页返回的结果数量，默认为20，最大值为1000。
     * - `NextToken` 用于分页查询时获取下一页的数据。
     * - `Skip` 参数用于跳过指定数量的记录，默认值为0。
     * - 可以通过 `EgressProxyGatewayIds`, `EgressProxyIpPoolIds`, `EgressProxyIpPoolNames` 等参数进行过滤查询。
     * - `Status` 参数支持按状态过滤结果。
     * - `Tags` 参数可用于更细粒度的资源筛选。
     * - 返回结果中包含 `NextToken` 以便于继续请求后续页面的数据。
     * - `CreateTime` 字段表示的是UTC时间格式。
     *
     * @param request - ListEgressProxyIpPoolsRequest
     *
     * @returns ListEgressProxyIpPoolsResponse
     *
     * @param ListEgressProxyIpPoolsRequest $request
     *
     * @return ListEgressProxyIpPoolsResponse
     */
    public function listEgressProxyIpPools($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listEgressProxyIpPoolsWithOptions($request, $runtime);
    }

    /**
     * 查询出口代理规则组列表.
     *
     * @param request - ListEgressProxyRuleGroupsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListEgressProxyRuleGroupsResponse
     *
     * @param ListEgressProxyRuleGroupsRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ListEgressProxyRuleGroupsResponse
     */
    public function listEgressProxyRuleGroupsWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        $bodyFlat = [];
        if (null !== $request->egressProxyRuleGroupIds) {
            @$bodyFlat['EgressProxyRuleGroupIds'] = $request->egressProxyRuleGroupIds;
        }

        if (null !== $request->egressProxyRuleGroupNames) {
            @$bodyFlat['EgressProxyRuleGroupNames'] = $request->egressProxyRuleGroupNames;
        }

        if (null !== $request->maxResults) {
            @$body['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$body['NextToken'] = $request->nextToken;
        }

        if (null !== $request->resourceGroupId) {
            @$body['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->skip) {
            @$body['Skip'] = $request->skip;
        }

        if (null !== $request->status) {
            @$body['Status'] = $request->status;
        }

        if (null !== $request->tag) {
            @$bodyFlat['Tag'] = $request->tag;
        }

        $body = Dara::merge([
        ], $body, Utils::query($bodyFlat));
        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListEgressProxyRuleGroups',
            'version' => '2026-07-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListEgressProxyRuleGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询出口代理规则组列表.
     *
     * @param request - ListEgressProxyRuleGroupsRequest
     *
     * @returns ListEgressProxyRuleGroupsResponse
     *
     * @param ListEgressProxyRuleGroupsRequest $request
     *
     * @return ListEgressProxyRuleGroupsResponse
     */
    public function listEgressProxyRuleGroups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listEgressProxyRuleGroupsWithOptions($request, $runtime);
    }

    /**
     * Queries the tags bound to the specified resources.
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
        $body = [];
        if (null !== $request->maxResults) {
            @$body['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$body['NextToken'] = $request->nextToken;
        }

        $bodyFlat = [];
        if (null !== $request->resourceId) {
            @$bodyFlat['ResourceId'] = $request->resourceId;
        }

        if (null !== $request->resourceType) {
            @$body['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->tag) {
            @$bodyFlat['Tag'] = $request->tag;
        }

        $body = Dara::merge([
        ], $body, Utils::query($bodyFlat));
        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListTagResources',
            'version' => '2026-07-15',
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
     * Queries the tags bound to the specified resources.
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
     * Modifies the resource group to which a resource belongs.
     *
     * @remarks
     * Shifts a resource to another resource group. After the shift, the resource belongs to the new resource group. For valid values of the ResourceType parameter, see the metric description.
     *
     * @param request - MoveResourceGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns MoveResourceGroupResponse
     *
     * @param MoveResourceGroupRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return MoveResourceGroupResponse
     */
    public function moveResourceGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$body['DryRun'] = $request->dryRun;
        }

        if (null !== $request->newResourceGroupId) {
            @$body['NewResourceGroupId'] = $request->newResourceGroupId;
        }

        if (null !== $request->resourceId) {
            @$body['ResourceId'] = $request->resourceId;
        }

        if (null !== $request->resourceType) {
            @$body['ResourceType'] = $request->resourceType;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'MoveResourceGroup',
            'version' => '2026-07-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return MoveResourceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the resource group to which a resource belongs.
     *
     * @remarks
     * Shifts a resource to another resource group. After the shift, the resource belongs to the new resource group. For valid values of the ResourceType parameter, see the metric description.
     *
     * @param request - MoveResourceGroupRequest
     *
     * @returns MoveResourceGroupResponse
     *
     * @param MoveResourceGroupRequest $request
     *
     * @return MoveResourceGroupResponse
     */
    public function moveResourceGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->moveResourceGroupWithOptions($request, $runtime);
    }

    /**
     * 从出口代理地址池移除IP地址
     *
     * @param request - RemoveIpAddressesFromEgressProxyIpPoolRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RemoveIpAddressesFromEgressProxyIpPoolResponse
     *
     * @param RemoveIpAddressesFromEgressProxyIpPoolRequest $request
     * @param RuntimeOptions                                $runtime
     *
     * @return RemoveIpAddressesFromEgressProxyIpPoolResponse
     */
    public function removeIpAddressesFromEgressProxyIpPoolWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$body['DryRun'] = $request->dryRun;
        }

        if (null !== $request->egressProxyIpPoolId) {
            @$body['EgressProxyIpPoolId'] = $request->egressProxyIpPoolId;
        }

        $bodyFlat = [];
        if (null !== $request->zoneMappings) {
            @$bodyFlat['ZoneMappings'] = $request->zoneMappings;
        }

        $body = Dara::merge([
        ], $body, Utils::query($bodyFlat));
        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'RemoveIpAddressesFromEgressProxyIpPool',
            'version' => '2026-07-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RemoveIpAddressesFromEgressProxyIpPoolResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 从出口代理地址池移除IP地址
     *
     * @param request - RemoveIpAddressesFromEgressProxyIpPoolRequest
     *
     * @returns RemoveIpAddressesFromEgressProxyIpPoolResponse
     *
     * @param RemoveIpAddressesFromEgressProxyIpPoolRequest $request
     *
     * @return RemoveIpAddressesFromEgressProxyIpPoolResponse
     */
    public function removeIpAddressesFromEgressProxyIpPool($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeIpAddressesFromEgressProxyIpPoolWithOptions($request, $runtime);
    }

    /**
     * Creates and attaches tags to a specified list of resources.
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
        $body = [];
        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$body['DryRun'] = $request->dryRun;
        }

        $bodyFlat = [];
        if (null !== $request->resourceId) {
            @$bodyFlat['ResourceId'] = $request->resourceId;
        }

        if (null !== $request->resourceType) {
            @$body['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->tag) {
            @$bodyFlat['Tag'] = $request->tag;
        }

        $body = Dara::merge([
        ], $body, Utils::query($bodyFlat));
        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'TagResources',
            'version' => '2026-07-15',
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
     * Creates and attaches tags to a specified list of resources.
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
     * Removes tags from the specified resources.
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
        $body = [];
        if (null !== $request->all) {
            @$body['All'] = $request->all;
        }

        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$body['DryRun'] = $request->dryRun;
        }

        $bodyFlat = [];
        if (null !== $request->resourceId) {
            @$bodyFlat['ResourceId'] = $request->resourceId;
        }

        if (null !== $request->resourceType) {
            @$body['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->tagKey) {
            @$bodyFlat['TagKey'] = $request->tagKey;
        }

        $body = Dara::merge([
        ], $body, Utils::query($bodyFlat));
        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UntagResources',
            'version' => '2026-07-15',
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
     * Removes tags from the specified resources.
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
     * 更新出口代理配置属性.
     *
     * @param request - UpdateEgressProxyConfigurationAttributeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateEgressProxyConfigurationAttributeResponse
     *
     * @param UpdateEgressProxyConfigurationAttributeRequest $request
     * @param RuntimeOptions                                 $runtime
     *
     * @return UpdateEgressProxyConfigurationAttributeResponse
     */
    public function updateEgressProxyConfigurationAttributeWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        $bodyFlat = [];
        if (null !== $request->defaultRulePhaseActions) {
            @$bodyFlat['DefaultRulePhaseActions'] = $request->defaultRulePhaseActions;
        }

        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->dryRun) {
            @$body['DryRun'] = $request->dryRun;
        }

        if (null !== $request->egressProxyConfigurationId) {
            @$body['EgressProxyConfigurationId'] = $request->egressProxyConfigurationId;
        }

        if (null !== $request->egressProxyConfigurationName) {
            @$body['EgressProxyConfigurationName'] = $request->egressProxyConfigurationName;
        }

        if (null !== $request->egressProxyRuleGroups) {
            @$bodyFlat['EgressProxyRuleGroups'] = $request->egressProxyRuleGroups;
        }

        $body = Dara::merge([
        ], $body, Utils::query($bodyFlat));
        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateEgressProxyConfigurationAttribute',
            'version' => '2026-07-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateEgressProxyConfigurationAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新出口代理配置属性.
     *
     * @param request - UpdateEgressProxyConfigurationAttributeRequest
     *
     * @returns UpdateEgressProxyConfigurationAttributeResponse
     *
     * @param UpdateEgressProxyConfigurationAttributeRequest $request
     *
     * @return UpdateEgressProxyConfigurationAttributeResponse
     */
    public function updateEgressProxyConfigurationAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateEgressProxyConfigurationAttributeWithOptions($request, $runtime);
    }

    /**
     * 修改出口代理网关属性.
     *
     * @param request - UpdateEgressProxyGatewayAttributeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateEgressProxyGatewayAttributeResponse
     *
     * @param UpdateEgressProxyGatewayAttributeRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return UpdateEgressProxyGatewayAttributeResponse
     */
    public function updateEgressProxyGatewayAttributeWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        $bodyFlat = [];
        if (null !== $request->addListenerProperties) {
            @$bodyFlat['AddListenerProperties'] = $request->addListenerProperties;
        }

        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->defaultEgressProxyIpPoolId) {
            @$body['DefaultEgressProxyIpPoolId'] = $request->defaultEgressProxyIpPoolId;
        }

        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->dryRun) {
            @$body['DryRun'] = $request->dryRun;
        }

        if (null !== $request->egressProxyGatewayId) {
            @$body['EgressProxyGatewayId'] = $request->egressProxyGatewayId;
        }

        if (null !== $request->egressProxyGatewayName) {
            @$body['EgressProxyGatewayName'] = $request->egressProxyGatewayName;
        }

        if (null !== $request->removeListenerProperties) {
            @$bodyFlat['RemoveListenerProperties'] = $request->removeListenerProperties;
        }

        if (null !== $request->tlsInterceptProperties) {
            @$bodyFlat['TlsInterceptProperties'] = $request->tlsInterceptProperties;
        }

        $body = Dara::merge([
        ], $body, Utils::query($bodyFlat));
        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateEgressProxyGatewayAttribute',
            'version' => '2026-07-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateEgressProxyGatewayAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 修改出口代理网关属性.
     *
     * @param request - UpdateEgressProxyGatewayAttributeRequest
     *
     * @returns UpdateEgressProxyGatewayAttributeResponse
     *
     * @param UpdateEgressProxyGatewayAttributeRequest $request
     *
     * @return UpdateEgressProxyGatewayAttributeResponse
     */
    public function updateEgressProxyGatewayAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateEgressProxyGatewayAttributeWithOptions($request, $runtime);
    }

    /**
     * 更新出口代理地址池属性.
     *
     * @remarks
     * ## 请求说明
     * - `EgressProxyIpPoolId` 是必填参数，用来指定要更新的出口地址池ID。
     * - `DryRun` 参数可以设置为 `true` 来预检此次请求而不实际执行更改，默认值为 `false`。
     * - `Scheduler` 和 `HashFactor` 参数用于定义出口IP的选择逻辑及相关的哈希因子，可根据具体需求进行设置。
     * - 其他参数如 `EgressProxyIpPoolName`, `Description` 等均为可选项，提供给用户根据需要自定义出口地址池的名字和描述等信息。
     *
     * @param request - UpdateEgressProxyIpPoolAttributeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateEgressProxyIpPoolAttributeResponse
     *
     * @param UpdateEgressProxyIpPoolAttributeRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return UpdateEgressProxyIpPoolAttributeResponse
     */
    public function updateEgressProxyIpPoolAttributeWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->dryRun) {
            @$body['DryRun'] = $request->dryRun;
        }

        if (null !== $request->egressProxyIpPoolId) {
            @$body['EgressProxyIpPoolId'] = $request->egressProxyIpPoolId;
        }

        if (null !== $request->egressProxyIpPoolName) {
            @$body['EgressProxyIpPoolName'] = $request->egressProxyIpPoolName;
        }

        if (null !== $request->hashFactor) {
            @$body['HashFactor'] = $request->hashFactor;
        }

        if (null !== $request->hashHeaderName) {
            @$body['HashHeaderName'] = $request->hashHeaderName;
        }

        if (null !== $request->scheduler) {
            @$body['Scheduler'] = $request->scheduler;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateEgressProxyIpPoolAttribute',
            'version' => '2026-07-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateEgressProxyIpPoolAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新出口代理地址池属性.
     *
     * @remarks
     * ## 请求说明
     * - `EgressProxyIpPoolId` 是必填参数，用来指定要更新的出口地址池ID。
     * - `DryRun` 参数可以设置为 `true` 来预检此次请求而不实际执行更改，默认值为 `false`。
     * - `Scheduler` 和 `HashFactor` 参数用于定义出口IP的选择逻辑及相关的哈希因子，可根据具体需求进行设置。
     * - 其他参数如 `EgressProxyIpPoolName`, `Description` 等均为可选项，提供给用户根据需要自定义出口地址池的名字和描述等信息。
     *
     * @param request - UpdateEgressProxyIpPoolAttributeRequest
     *
     * @returns UpdateEgressProxyIpPoolAttributeResponse
     *
     * @param UpdateEgressProxyIpPoolAttributeRequest $request
     *
     * @return UpdateEgressProxyIpPoolAttributeResponse
     */
    public function updateEgressProxyIpPoolAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateEgressProxyIpPoolAttributeWithOptions($request, $runtime);
    }

    /**
     * 更新出口代理规则组属性.
     *
     * @param request - UpdateEgressProxyRuleGroupAttributeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateEgressProxyRuleGroupAttributeResponse
     *
     * @param UpdateEgressProxyRuleGroupAttributeRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return UpdateEgressProxyRuleGroupAttributeResponse
     */
    public function updateEgressProxyRuleGroupAttributeWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->dryRun) {
            @$body['DryRun'] = $request->dryRun;
        }

        if (null !== $request->egressProxyIpPoolId) {
            @$body['EgressProxyIpPoolId'] = $request->egressProxyIpPoolId;
        }

        if (null !== $request->egressProxyRuleGroupId) {
            @$body['EgressProxyRuleGroupId'] = $request->egressProxyRuleGroupId;
        }

        if (null !== $request->egressProxyRuleGroupName) {
            @$body['EgressProxyRuleGroupName'] = $request->egressProxyRuleGroupName;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateEgressProxyRuleGroupAttribute',
            'version' => '2026-07-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateEgressProxyRuleGroupAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新出口代理规则组属性.
     *
     * @param request - UpdateEgressProxyRuleGroupAttributeRequest
     *
     * @returns UpdateEgressProxyRuleGroupAttributeResponse
     *
     * @param UpdateEgressProxyRuleGroupAttributeRequest $request
     *
     * @return UpdateEgressProxyRuleGroupAttributeResponse
     */
    public function updateEgressProxyRuleGroupAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateEgressProxyRuleGroupAttributeWithOptions($request, $runtime);
    }

    /**
     * 批量更新出口代理规则属性.
     *
     * @param request - UpdateEgressProxyRulesAttributeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateEgressProxyRulesAttributeResponse
     *
     * @param UpdateEgressProxyRulesAttributeRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return UpdateEgressProxyRulesAttributeResponse
     */
    public function updateEgressProxyRulesAttributeWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$body['DryRun'] = $request->dryRun;
        }

        if (null !== $request->egressProxyRuleGroupId) {
            @$body['EgressProxyRuleGroupId'] = $request->egressProxyRuleGroupId;
        }

        $bodyFlat = [];
        if (null !== $request->egressProxyRules) {
            @$bodyFlat['EgressProxyRules'] = $request->egressProxyRules;
        }

        $body = Dara::merge([
        ], $body, Utils::query($bodyFlat));
        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateEgressProxyRulesAttribute',
            'version' => '2026-07-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateEgressProxyRulesAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 批量更新出口代理规则属性.
     *
     * @param request - UpdateEgressProxyRulesAttributeRequest
     *
     * @returns UpdateEgressProxyRulesAttributeResponse
     *
     * @param UpdateEgressProxyRulesAttributeRequest $request
     *
     * @return UpdateEgressProxyRulesAttributeResponse
     */
    public function updateEgressProxyRulesAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateEgressProxyRulesAttributeWithOptions($request, $runtime);
    }
}

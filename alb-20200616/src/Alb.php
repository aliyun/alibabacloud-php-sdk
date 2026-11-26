<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\Alb\V20200616\Models\AddEntriesToAclRequest;
use AlibabaCloud\SDK\Alb\V20200616\Models\AddEntriesToAclResponse;
use AlibabaCloud\SDK\Alb\V20200616\Models\AddServersToServerGroupRequest;
use AlibabaCloud\SDK\Alb\V20200616\Models\AddServersToServerGroupResponse;
use AlibabaCloud\SDK\Alb\V20200616\Models\ApplyHealthCheckTemplateToServerGroupRequest;
use AlibabaCloud\SDK\Alb\V20200616\Models\ApplyHealthCheckTemplateToServerGroupResponse;
use AlibabaCloud\SDK\Alb\V20200616\Models\AssociateAclsWithListenerRequest;
use AlibabaCloud\SDK\Alb\V20200616\Models\AssociateAclsWithListenerResponse;
use AlibabaCloud\SDK\Alb\V20200616\Models\AssociateAdditionalCertificatesWithListenerRequest;
use AlibabaCloud\SDK\Alb\V20200616\Models\AssociateAdditionalCertificatesWithListenerResponse;
use AlibabaCloud\SDK\Alb\V20200616\Models\AttachCommonBandwidthPackageToLoadBalancerRequest;
use AlibabaCloud\SDK\Alb\V20200616\Models\AttachCommonBandwidthPackageToLoadBalancerResponse;
use AlibabaCloud\SDK\Alb\V20200616\Models\CancelShiftLoadBalancerZonesRequest;
use AlibabaCloud\SDK\Alb\V20200616\Models\CancelShiftLoadBalancerZonesResponse;
use AlibabaCloud\SDK\Alb\V20200616\Models\CreateAclRequest;
use AlibabaCloud\SDK\Alb\V20200616\Models\CreateAclResponse;
use AlibabaCloud\SDK\Alb\V20200616\Models\CreateAScriptsRequest;
use AlibabaCloud\SDK\Alb\V20200616\Models\CreateAScriptsResponse;
use AlibabaCloud\SDK\Alb\V20200616\Models\CreateHealthCheckTemplateRequest;
use AlibabaCloud\SDK\Alb\V20200616\Models\CreateHealthCheckTemplateResponse;
use AlibabaCloud\SDK\Alb\V20200616\Models\CreateListenerRequest;
use AlibabaCloud\SDK\Alb\V20200616\Models\CreateListenerResponse;
use AlibabaCloud\SDK\Alb\V20200616\Models\CreateLoadBalancerRequest;
use AlibabaCloud\SDK\Alb\V20200616\Models\CreateLoadBalancerResponse;
use AlibabaCloud\SDK\Alb\V20200616\Models\CreateRuleRequest;
use AlibabaCloud\SDK\Alb\V20200616\Models\CreateRuleResponse;
use AlibabaCloud\SDK\Alb\V20200616\Models\CreateRulesRequest;
use AlibabaCloud\SDK\Alb\V20200616\Models\CreateRulesResponse;
use AlibabaCloud\SDK\Alb\V20200616\Models\CreateSecurityPolicyRequest;
use AlibabaCloud\SDK\Alb\V20200616\Models\CreateSecurityPolicyResponse;
use AlibabaCloud\SDK\Alb\V20200616\Models\CreateServerGroupRequest;
use AlibabaCloud\SDK\Alb\V20200616\Models\CreateServerGroupResponse;
use AlibabaCloud\SDK\Alb\V20200616\Models\DeleteAclRequest;
use AlibabaCloud\SDK\Alb\V20200616\Models\DeleteAclResponse;
use AlibabaCloud\SDK\Alb\V20200616\Models\DeleteAScriptsRequest;
use AlibabaCloud\SDK\Alb\V20200616\Models\DeleteAScriptsResponse;
use AlibabaCloud\SDK\Alb\V20200616\Models\DeleteHealthCheckTemplatesRequest;
use AlibabaCloud\SDK\Alb\V20200616\Models\DeleteHealthCheckTemplatesResponse;
use AlibabaCloud\SDK\Alb\V20200616\Models\DeleteListenerRequest;
use AlibabaCloud\SDK\Alb\V20200616\Models\DeleteListenerResponse;
use AlibabaCloud\SDK\Alb\V20200616\Models\DeleteLoadBalancerRequest;
use AlibabaCloud\SDK\Alb\V20200616\Models\DeleteLoadBalancerResponse;
use AlibabaCloud\SDK\Alb\V20200616\Models\DeleteRuleRequest;
use AlibabaCloud\SDK\Alb\V20200616\Models\DeleteRuleResponse;
use AlibabaCloud\SDK\Alb\V20200616\Models\DeleteRulesRequest;
use AlibabaCloud\SDK\Alb\V20200616\Models\DeleteRulesResponse;
use AlibabaCloud\SDK\Alb\V20200616\Models\DeleteSecurityPolicyRequest;
use AlibabaCloud\SDK\Alb\V20200616\Models\DeleteSecurityPolicyResponse;
use AlibabaCloud\SDK\Alb\V20200616\Models\DeleteServerGroupRequest;
use AlibabaCloud\SDK\Alb\V20200616\Models\DeleteServerGroupResponse;
use AlibabaCloud\SDK\Alb\V20200616\Models\DescribeCapacityReservationRequest;
use AlibabaCloud\SDK\Alb\V20200616\Models\DescribeCapacityReservationResponse;
use AlibabaCloud\SDK\Alb\V20200616\Models\DescribeRegionsRequest;
use AlibabaCloud\SDK\Alb\V20200616\Models\DescribeRegionsResponse;
use AlibabaCloud\SDK\Alb\V20200616\Models\DescribeZonesRequest;
use AlibabaCloud\SDK\Alb\V20200616\Models\DescribeZonesResponse;
use AlibabaCloud\SDK\Alb\V20200616\Models\DetachCommonBandwidthPackageFromLoadBalancerRequest;
use AlibabaCloud\SDK\Alb\V20200616\Models\DetachCommonBandwidthPackageFromLoadBalancerResponse;
use AlibabaCloud\SDK\Alb\V20200616\Models\DisableDeletionProtectionRequest;
use AlibabaCloud\SDK\Alb\V20200616\Models\DisableDeletionProtectionResponse;
use AlibabaCloud\SDK\Alb\V20200616\Models\DisableLoadBalancerAccessLogRequest;
use AlibabaCloud\SDK\Alb\V20200616\Models\DisableLoadBalancerAccessLogResponse;
use AlibabaCloud\SDK\Alb\V20200616\Models\DisableLoadBalancerIpv6InternetRequest;
use AlibabaCloud\SDK\Alb\V20200616\Models\DisableLoadBalancerIpv6InternetResponse;
use AlibabaCloud\SDK\Alb\V20200616\Models\DissociateAclsFromListenerRequest;
use AlibabaCloud\SDK\Alb\V20200616\Models\DissociateAclsFromListenerResponse;
use AlibabaCloud\SDK\Alb\V20200616\Models\DissociateAdditionalCertificatesFromListenerRequest;
use AlibabaCloud\SDK\Alb\V20200616\Models\DissociateAdditionalCertificatesFromListenerResponse;
use AlibabaCloud\SDK\Alb\V20200616\Models\EnableDeletionProtectionRequest;
use AlibabaCloud\SDK\Alb\V20200616\Models\EnableDeletionProtectionResponse;
use AlibabaCloud\SDK\Alb\V20200616\Models\EnableLoadBalancerAccessLogRequest;
use AlibabaCloud\SDK\Alb\V20200616\Models\EnableLoadBalancerAccessLogResponse;
use AlibabaCloud\SDK\Alb\V20200616\Models\EnableLoadBalancerIpv6InternetRequest;
use AlibabaCloud\SDK\Alb\V20200616\Models\EnableLoadBalancerIpv6InternetResponse;
use AlibabaCloud\SDK\Alb\V20200616\Models\GetHealthCheckTemplateAttributeRequest;
use AlibabaCloud\SDK\Alb\V20200616\Models\GetHealthCheckTemplateAttributeResponse;
use AlibabaCloud\SDK\Alb\V20200616\Models\GetListenerAttributeRequest;
use AlibabaCloud\SDK\Alb\V20200616\Models\GetListenerAttributeResponse;
use AlibabaCloud\SDK\Alb\V20200616\Models\GetListenerHealthStatusRequest;
use AlibabaCloud\SDK\Alb\V20200616\Models\GetListenerHealthStatusResponse;
use AlibabaCloud\SDK\Alb\V20200616\Models\GetLoadBalancerAttributeRequest;
use AlibabaCloud\SDK\Alb\V20200616\Models\GetLoadBalancerAttributeResponse;
use AlibabaCloud\SDK\Alb\V20200616\Models\ListAclEntriesRequest;
use AlibabaCloud\SDK\Alb\V20200616\Models\ListAclEntriesResponse;
use AlibabaCloud\SDK\Alb\V20200616\Models\ListAclRelationsRequest;
use AlibabaCloud\SDK\Alb\V20200616\Models\ListAclRelationsResponse;
use AlibabaCloud\SDK\Alb\V20200616\Models\ListAclsRequest;
use AlibabaCloud\SDK\Alb\V20200616\Models\ListAclsResponse;
use AlibabaCloud\SDK\Alb\V20200616\Models\ListAScriptsRequest;
use AlibabaCloud\SDK\Alb\V20200616\Models\ListAScriptsResponse;
use AlibabaCloud\SDK\Alb\V20200616\Models\ListAsynJobsRequest;
use AlibabaCloud\SDK\Alb\V20200616\Models\ListAsynJobsResponse;
use AlibabaCloud\SDK\Alb\V20200616\Models\ListHealthCheckTemplatesRequest;
use AlibabaCloud\SDK\Alb\V20200616\Models\ListHealthCheckTemplatesResponse;
use AlibabaCloud\SDK\Alb\V20200616\Models\ListListenerCertificatesRequest;
use AlibabaCloud\SDK\Alb\V20200616\Models\ListListenerCertificatesResponse;
use AlibabaCloud\SDK\Alb\V20200616\Models\ListListenersRequest;
use AlibabaCloud\SDK\Alb\V20200616\Models\ListListenersResponse;
use AlibabaCloud\SDK\Alb\V20200616\Models\ListLoadBalancersRequest;
use AlibabaCloud\SDK\Alb\V20200616\Models\ListLoadBalancersResponse;
use AlibabaCloud\SDK\Alb\V20200616\Models\ListRulesRequest;
use AlibabaCloud\SDK\Alb\V20200616\Models\ListRulesResponse;
use AlibabaCloud\SDK\Alb\V20200616\Models\ListSecurityPoliciesRequest;
use AlibabaCloud\SDK\Alb\V20200616\Models\ListSecurityPoliciesResponse;
use AlibabaCloud\SDK\Alb\V20200616\Models\ListSecurityPolicyRelationsRequest;
use AlibabaCloud\SDK\Alb\V20200616\Models\ListSecurityPolicyRelationsResponse;
use AlibabaCloud\SDK\Alb\V20200616\Models\ListServerGroupServersRequest;
use AlibabaCloud\SDK\Alb\V20200616\Models\ListServerGroupServersResponse;
use AlibabaCloud\SDK\Alb\V20200616\Models\ListServerGroupsRequest;
use AlibabaCloud\SDK\Alb\V20200616\Models\ListServerGroupsResponse;
use AlibabaCloud\SDK\Alb\V20200616\Models\ListSystemSecurityPoliciesResponse;
use AlibabaCloud\SDK\Alb\V20200616\Models\ListTagKeysRequest;
use AlibabaCloud\SDK\Alb\V20200616\Models\ListTagKeysResponse;
use AlibabaCloud\SDK\Alb\V20200616\Models\ListTagResourcesRequest;
use AlibabaCloud\SDK\Alb\V20200616\Models\ListTagResourcesResponse;
use AlibabaCloud\SDK\Alb\V20200616\Models\ListTagValuesRequest;
use AlibabaCloud\SDK\Alb\V20200616\Models\ListTagValuesResponse;
use AlibabaCloud\SDK\Alb\V20200616\Models\LoadBalancerJoinSecurityGroupRequest;
use AlibabaCloud\SDK\Alb\V20200616\Models\LoadBalancerJoinSecurityGroupResponse;
use AlibabaCloud\SDK\Alb\V20200616\Models\LoadBalancerLeaveSecurityGroupRequest;
use AlibabaCloud\SDK\Alb\V20200616\Models\LoadBalancerLeaveSecurityGroupResponse;
use AlibabaCloud\SDK\Alb\V20200616\Models\ModifyCapacityReservationRequest;
use AlibabaCloud\SDK\Alb\V20200616\Models\ModifyCapacityReservationResponse;
use AlibabaCloud\SDK\Alb\V20200616\Models\MoveResourceGroupRequest;
use AlibabaCloud\SDK\Alb\V20200616\Models\MoveResourceGroupResponse;
use AlibabaCloud\SDK\Alb\V20200616\Models\RemoveEntriesFromAclRequest;
use AlibabaCloud\SDK\Alb\V20200616\Models\RemoveEntriesFromAclResponse;
use AlibabaCloud\SDK\Alb\V20200616\Models\RemoveServersFromServerGroupRequest;
use AlibabaCloud\SDK\Alb\V20200616\Models\RemoveServersFromServerGroupResponse;
use AlibabaCloud\SDK\Alb\V20200616\Models\ReplaceServersInServerGroupRequest;
use AlibabaCloud\SDK\Alb\V20200616\Models\ReplaceServersInServerGroupResponse;
use AlibabaCloud\SDK\Alb\V20200616\Models\StartListenerRequest;
use AlibabaCloud\SDK\Alb\V20200616\Models\StartListenerResponse;
use AlibabaCloud\SDK\Alb\V20200616\Models\StartShiftLoadBalancerZonesRequest;
use AlibabaCloud\SDK\Alb\V20200616\Models\StartShiftLoadBalancerZonesResponse;
use AlibabaCloud\SDK\Alb\V20200616\Models\StopListenerRequest;
use AlibabaCloud\SDK\Alb\V20200616\Models\StopListenerResponse;
use AlibabaCloud\SDK\Alb\V20200616\Models\TagResourcesRequest;
use AlibabaCloud\SDK\Alb\V20200616\Models\TagResourcesResponse;
use AlibabaCloud\SDK\Alb\V20200616\Models\UnTagResourcesRequest;
use AlibabaCloud\SDK\Alb\V20200616\Models\UnTagResourcesResponse;
use AlibabaCloud\SDK\Alb\V20200616\Models\UpdateAclAttributeRequest;
use AlibabaCloud\SDK\Alb\V20200616\Models\UpdateAclAttributeResponse;
use AlibabaCloud\SDK\Alb\V20200616\Models\UpdateAScriptsRequest;
use AlibabaCloud\SDK\Alb\V20200616\Models\UpdateAScriptsResponse;
use AlibabaCloud\SDK\Alb\V20200616\Models\UpdateHealthCheckTemplateAttributeRequest;
use AlibabaCloud\SDK\Alb\V20200616\Models\UpdateHealthCheckTemplateAttributeResponse;
use AlibabaCloud\SDK\Alb\V20200616\Models\UpdateListenerAttributeRequest;
use AlibabaCloud\SDK\Alb\V20200616\Models\UpdateListenerAttributeResponse;
use AlibabaCloud\SDK\Alb\V20200616\Models\UpdateListenerLogConfigRequest;
use AlibabaCloud\SDK\Alb\V20200616\Models\UpdateListenerLogConfigResponse;
use AlibabaCloud\SDK\Alb\V20200616\Models\UpdateLoadBalancerAddressTypeConfigRequest;
use AlibabaCloud\SDK\Alb\V20200616\Models\UpdateLoadBalancerAddressTypeConfigResponse;
use AlibabaCloud\SDK\Alb\V20200616\Models\UpdateLoadBalancerAttributeRequest;
use AlibabaCloud\SDK\Alb\V20200616\Models\UpdateLoadBalancerAttributeResponse;
use AlibabaCloud\SDK\Alb\V20200616\Models\UpdateLoadBalancerEditionRequest;
use AlibabaCloud\SDK\Alb\V20200616\Models\UpdateLoadBalancerEditionResponse;
use AlibabaCloud\SDK\Alb\V20200616\Models\UpdateLoadBalancerZonesRequest;
use AlibabaCloud\SDK\Alb\V20200616\Models\UpdateLoadBalancerZonesResponse;
use AlibabaCloud\SDK\Alb\V20200616\Models\UpdateRuleAttributeRequest;
use AlibabaCloud\SDK\Alb\V20200616\Models\UpdateRuleAttributeResponse;
use AlibabaCloud\SDK\Alb\V20200616\Models\UpdateRulesAttributeRequest;
use AlibabaCloud\SDK\Alb\V20200616\Models\UpdateRulesAttributeResponse;
use AlibabaCloud\SDK\Alb\V20200616\Models\UpdateSecurityPolicyAttributeRequest;
use AlibabaCloud\SDK\Alb\V20200616\Models\UpdateSecurityPolicyAttributeResponse;
use AlibabaCloud\SDK\Alb\V20200616\Models\UpdateServerGroupAttributeRequest;
use AlibabaCloud\SDK\Alb\V20200616\Models\UpdateServerGroupAttributeResponse;
use AlibabaCloud\SDK\Alb\V20200616\Models\UpdateServerGroupServersAttributeRequest;
use AlibabaCloud\SDK\Alb\V20200616\Models\UpdateServerGroupServersAttributeResponse;
use Darabonba\GatewayPop\Client;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class Alb extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_productId = 'Alb';
        $gatewayClient = new Client();
        $this->_spi = $gatewayClient;
        $this->_endpointRule = 'regional';
        $this->_endpointMap = [
            'cn-hangzhou-finance' => 'alb.cn-hangzhou.aliyuncs.com',
        ];
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('alb', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * Adds IP entries to an access control policy group.
     *
     * @remarks
     * - Each policy group can contain multiple IP address entries or CIDR block entries. The entry limits for an access control policy group are as follows:
     *     - Maximum number of IP address entries that can be added per account per call: 20.
     *     - Maximum number of entries that each access control policy group can contain: 500.
     * - The **AddEntriesToAcl** operation is asynchronous. After you call this operation, the system returns a request ID, but the IP entries are not immediately added to the access control policy group. The addition task is still running in the background. You can call [ListAclEntries](https://help.aliyun.com/document_detail/213616.html) to query the addition status of the IP entries:
     *     - If the access control policy group is in the **Adding** state, the IP entries are being added.
     *     - If the access control policy group is in the **Available** state, the IP entries are added.
     *
     * @param request - AddEntriesToAclRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddEntriesToAclResponse
     *
     * @param AddEntriesToAclRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return AddEntriesToAclResponse
     */
    public function addEntriesToAclWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->aclEntries) {
            @$query['AclEntries'] = $request->aclEntries;
        }

        if (null !== $request->aclId) {
            @$query['AclId'] = $request->aclId;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$query['DryRun'] = $request->dryRun;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AddEntriesToAcl',
            'version' => '2020-06-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AddEntriesToAclResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Adds IP entries to an access control policy group.
     *
     * @remarks
     * - Each policy group can contain multiple IP address entries or CIDR block entries. The entry limits for an access control policy group are as follows:
     *     - Maximum number of IP address entries that can be added per account per call: 20.
     *     - Maximum number of entries that each access control policy group can contain: 500.
     * - The **AddEntriesToAcl** operation is asynchronous. After you call this operation, the system returns a request ID, but the IP entries are not immediately added to the access control policy group. The addition task is still running in the background. You can call [ListAclEntries](https://help.aliyun.com/document_detail/213616.html) to query the addition status of the IP entries:
     *     - If the access control policy group is in the **Adding** state, the IP entries are being added.
     *     - If the access control policy group is in the **Available** state, the IP entries are added.
     *
     * @param request - AddEntriesToAclRequest
     *
     * @returns AddEntriesToAclResponse
     *
     * @param AddEntriesToAclRequest $request
     *
     * @return AddEntriesToAclResponse
     */
    public function addEntriesToAcl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addEntriesToAclWithOptions($request, $runtime);
    }

    /**
     * Adds backend servers to a server group.
     *
     * @remarks
     * The **AddServersToServerGroup** operation is asynchronous. After you send the request, the system returns a request ID, but the backend servers are not immediately added. The addition task is still running in the background.
     * 1. You can call the [ListServerGroups](https://help.aliyun.com/document_detail/213627.html) operation to query the status of the server group:
     * - If the server group is in the **Configuring** state, the server group is being reconfigured.
     * - If the server group is in the **Available** state, the server group is running.
     * 2. You can call the [ListServerGroupServers](https://help.aliyun.com/document_detail/213628.html) operation to query the status of the backend servers:
     * - If a backend server is in the **Adding** state, the backend server is being added to the server group.
     * - If a backend server is in the **Available** state, the backend server is running.
     *
     * @param request - AddServersToServerGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddServersToServerGroupResponse
     *
     * @param AddServersToServerGroupRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return AddServersToServerGroupResponse
     */
    public function addServersToServerGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$query['DryRun'] = $request->dryRun;
        }

        if (null !== $request->serverGroupId) {
            @$query['ServerGroupId'] = $request->serverGroupId;
        }

        $body = [];
        $bodyFlat = [];
        if (null !== $request->servers) {
            @$bodyFlat['Servers'] = $request->servers;
        }

        $body = Dara::merge([
        ], $body, Utils::query($bodyFlat));
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'AddServersToServerGroup',
            'version' => '2020-06-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AddServersToServerGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Adds backend servers to a server group.
     *
     * @remarks
     * The **AddServersToServerGroup** operation is asynchronous. After you send the request, the system returns a request ID, but the backend servers are not immediately added. The addition task is still running in the background.
     * 1. You can call the [ListServerGroups](https://help.aliyun.com/document_detail/213627.html) operation to query the status of the server group:
     * - If the server group is in the **Configuring** state, the server group is being reconfigured.
     * - If the server group is in the **Available** state, the server group is running.
     * 2. You can call the [ListServerGroupServers](https://help.aliyun.com/document_detail/213628.html) operation to query the status of the backend servers:
     * - If a backend server is in the **Adding** state, the backend server is being added to the server group.
     * - If a backend server is in the **Available** state, the backend server is running.
     *
     * @param request - AddServersToServerGroupRequest
     *
     * @returns AddServersToServerGroupResponse
     *
     * @param AddServersToServerGroupRequest $request
     *
     * @return AddServersToServerGroupResponse
     */
    public function addServersToServerGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addServersToServerGroupWithOptions($request, $runtime);
    }

    /**
     * Applies a health check configuration template to a backend server group to update the health check configuration of the backend server group to the template values.
     *
     * @param request - ApplyHealthCheckTemplateToServerGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ApplyHealthCheckTemplateToServerGroupResponse
     *
     * @param ApplyHealthCheckTemplateToServerGroupRequest $request
     * @param RuntimeOptions                               $runtime
     *
     * @return ApplyHealthCheckTemplateToServerGroupResponse
     */
    public function applyHealthCheckTemplateToServerGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$query['DryRun'] = $request->dryRun;
        }

        if (null !== $request->healthCheckTemplateId) {
            @$query['HealthCheckTemplateId'] = $request->healthCheckTemplateId;
        }

        if (null !== $request->serverGroupId) {
            @$query['ServerGroupId'] = $request->serverGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ApplyHealthCheckTemplateToServerGroup',
            'version' => '2020-06-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ApplyHealthCheckTemplateToServerGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Applies a health check configuration template to a backend server group to update the health check configuration of the backend server group to the template values.
     *
     * @param request - ApplyHealthCheckTemplateToServerGroupRequest
     *
     * @returns ApplyHealthCheckTemplateToServerGroupResponse
     *
     * @param ApplyHealthCheckTemplateToServerGroupRequest $request
     *
     * @return ApplyHealthCheckTemplateToServerGroupResponse
     */
    public function applyHealthCheckTemplateToServerGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->applyHealthCheckTemplateToServerGroupWithOptions($request, $runtime);
    }

    /**
     * Associates access control lists with a listener.
     *
     * @remarks
     * The **AssociateAclsWithListener** operation is asynchronous. After you call this operation, the system returns a request ID, but the ACLs are not yet associated with the listener. The association task is still running in the background. You can call [ListAclRelations](https://help.aliyun.com/document_detail/213618.html) to query the association status of the ACLs:
     * - If the ACL is in the **Associating** state, the ACL is being associated with the listener.
     * - If the ACL is in the **Associated** state, the ACL is associated with the listener.
     *
     * @param request - AssociateAclsWithListenerRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AssociateAclsWithListenerResponse
     *
     * @param AssociateAclsWithListenerRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return AssociateAclsWithListenerResponse
     */
    public function associateAclsWithListenerWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->aclIds) {
            @$query['AclIds'] = $request->aclIds;
        }

        if (null !== $request->aclType) {
            @$query['AclType'] = $request->aclType;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$query['DryRun'] = $request->dryRun;
        }

        if (null !== $request->listenerId) {
            @$query['ListenerId'] = $request->listenerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AssociateAclsWithListener',
            'version' => '2020-06-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AssociateAclsWithListenerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Associates access control lists with a listener.
     *
     * @remarks
     * The **AssociateAclsWithListener** operation is asynchronous. After you call this operation, the system returns a request ID, but the ACLs are not yet associated with the listener. The association task is still running in the background. You can call [ListAclRelations](https://help.aliyun.com/document_detail/213618.html) to query the association status of the ACLs:
     * - If the ACL is in the **Associating** state, the ACL is being associated with the listener.
     * - If the ACL is in the **Associated** state, the ACL is associated with the listener.
     *
     * @param request - AssociateAclsWithListenerRequest
     *
     * @returns AssociateAclsWithListenerResponse
     *
     * @param AssociateAclsWithListenerRequest $request
     *
     * @return AssociateAclsWithListenerResponse
     */
    public function associateAclsWithListener($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->associateAclsWithListenerWithOptions($request, $runtime);
    }

    /**
     * Associates additional certificates with a listener.
     *
     * @remarks
     * The **AssociateAdditionalCertificatesWithListener** operation is asynchronous. After you call this operation, the system returns a request ID, but the additional certificates are not immediately associated. The association task is still running in the background. You can call [GetListenerAttribute](https://help.aliyun.com/document_detail/2254865.html) to query the association status of the additional certificates:
     *    - If the HTTPS or QUIC listener is in the **Associating** state, the additional certificates are being associated.
     *    - If the HTTPS or QUIC listener is in the **Associated** state, the additional certificates are associated.
     *
     * @param request - AssociateAdditionalCertificatesWithListenerRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AssociateAdditionalCertificatesWithListenerResponse
     *
     * @param AssociateAdditionalCertificatesWithListenerRequest $request
     * @param RuntimeOptions                                     $runtime
     *
     * @return AssociateAdditionalCertificatesWithListenerResponse
     */
    public function associateAdditionalCertificatesWithListenerWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->certificates) {
            @$query['Certificates'] = $request->certificates;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$query['DryRun'] = $request->dryRun;
        }

        if (null !== $request->listenerId) {
            @$query['ListenerId'] = $request->listenerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AssociateAdditionalCertificatesWithListener',
            'version' => '2020-06-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AssociateAdditionalCertificatesWithListenerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Associates additional certificates with a listener.
     *
     * @remarks
     * The **AssociateAdditionalCertificatesWithListener** operation is asynchronous. After you call this operation, the system returns a request ID, but the additional certificates are not immediately associated. The association task is still running in the background. You can call [GetListenerAttribute](https://help.aliyun.com/document_detail/2254865.html) to query the association status of the additional certificates:
     *    - If the HTTPS or QUIC listener is in the **Associating** state, the additional certificates are being associated.
     *    - If the HTTPS or QUIC listener is in the **Associated** state, the additional certificates are associated.
     *
     * @param request - AssociateAdditionalCertificatesWithListenerRequest
     *
     * @returns AssociateAdditionalCertificatesWithListenerResponse
     *
     * @param AssociateAdditionalCertificatesWithListenerRequest $request
     *
     * @return AssociateAdditionalCertificatesWithListenerResponse
     */
    public function associateAdditionalCertificatesWithListener($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->associateAdditionalCertificatesWithListenerWithOptions($request, $runtime);
    }

    /**
     * Attaches an Internet Shared Bandwidth instance to an Application Load Balancer instance.
     *
     * @remarks
     * The **AttachCommonBandwidthPackageToLoadBalancer** operation is asynchronous. After you send the request, the system returns a request ID, but the Internet Shared Bandwidth instance is not yet associated with the load balancing instance. The association task is still running in the background. You can call the [GetLoadBalancerAttribute](https://help.aliyun.com/document_detail/2254835.html) operation to query the association status of the Internet Shared Bandwidth instance:
     * - When the load balancing instance is in the **Configuring** state, the Internet Shared Bandwidth instance is being associated.
     * - When the load balancing instance is in the **Active** state, the Internet Shared Bandwidth instance is associated.
     *
     * @param request - AttachCommonBandwidthPackageToLoadBalancerRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AttachCommonBandwidthPackageToLoadBalancerResponse
     *
     * @param AttachCommonBandwidthPackageToLoadBalancerRequest $request
     * @param RuntimeOptions                                    $runtime
     *
     * @return AttachCommonBandwidthPackageToLoadBalancerResponse
     */
    public function attachCommonBandwidthPackageToLoadBalancerWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bandwidthPackageId) {
            @$query['BandwidthPackageId'] = $request->bandwidthPackageId;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$query['DryRun'] = $request->dryRun;
        }

        if (null !== $request->loadBalancerId) {
            @$query['LoadBalancerId'] = $request->loadBalancerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AttachCommonBandwidthPackageToLoadBalancer',
            'version' => '2020-06-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AttachCommonBandwidthPackageToLoadBalancerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Attaches an Internet Shared Bandwidth instance to an Application Load Balancer instance.
     *
     * @remarks
     * The **AttachCommonBandwidthPackageToLoadBalancer** operation is asynchronous. After you send the request, the system returns a request ID, but the Internet Shared Bandwidth instance is not yet associated with the load balancing instance. The association task is still running in the background. You can call the [GetLoadBalancerAttribute](https://help.aliyun.com/document_detail/2254835.html) operation to query the association status of the Internet Shared Bandwidth instance:
     * - When the load balancing instance is in the **Configuring** state, the Internet Shared Bandwidth instance is being associated.
     * - When the load balancing instance is in the **Active** state, the Internet Shared Bandwidth instance is associated.
     *
     * @param request - AttachCommonBandwidthPackageToLoadBalancerRequest
     *
     * @returns AttachCommonBandwidthPackageToLoadBalancerResponse
     *
     * @param AttachCommonBandwidthPackageToLoadBalancerRequest $request
     *
     * @return AttachCommonBandwidthPackageToLoadBalancerResponse
     */
    public function attachCommonBandwidthPackageToLoadBalancer($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->attachCommonBandwidthPackageToLoadBalancerWithOptions($request, $runtime);
    }

    /**
     * Adds the elastic IP address (EIP) or virtual IP address (VIP) of a zone back to Domain Name System (DNS) resolution.
     *
     * @remarks
     * This operation is supported only for Application Load Balancer (ALB) instances in static IP mode. Before you call this operation, you must have removed a zone from the ALB instance by calling the StartShiftLoadBalancerZones operation or by using the console.
     *
     * @param request - CancelShiftLoadBalancerZonesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CancelShiftLoadBalancerZonesResponse
     *
     * @param CancelShiftLoadBalancerZonesRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return CancelShiftLoadBalancerZonesResponse
     */
    public function cancelShiftLoadBalancerZonesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$query['DryRun'] = $request->dryRun;
        }

        if (null !== $request->loadBalancerId) {
            @$query['LoadBalancerId'] = $request->loadBalancerId;
        }

        if (null !== $request->zoneMappings) {
            @$query['ZoneMappings'] = $request->zoneMappings;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CancelShiftLoadBalancerZones',
            'version' => '2020-06-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CancelShiftLoadBalancerZonesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Adds the elastic IP address (EIP) or virtual IP address (VIP) of a zone back to Domain Name System (DNS) resolution.
     *
     * @remarks
     * This operation is supported only for Application Load Balancer (ALB) instances in static IP mode. Before you call this operation, you must have removed a zone from the ALB instance by calling the StartShiftLoadBalancerZones operation or by using the console.
     *
     * @param request - CancelShiftLoadBalancerZonesRequest
     *
     * @returns CancelShiftLoadBalancerZonesResponse
     *
     * @param CancelShiftLoadBalancerZonesRequest $request
     *
     * @return CancelShiftLoadBalancerZonesResponse
     */
    public function cancelShiftLoadBalancerZones($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cancelShiftLoadBalancerZonesWithOptions($request, $runtime);
    }

    /**
     * Creates a programmable script.
     *
     * @remarks
     * ### Before you begin
     * - Create a Standard Edition or WAF-enhanced ALB instance. For more information, see [CreateLoadBalancer](https://help.aliyun.com/document_detail/214358.html).
     * ### Usage notes
     * **CreateAScripts** is an asynchronous operation. After a request is sent, the system returns a request ID, but the programmable script is not yet created. The creation task continues in the background. Call [ListAScripts](https://help.aliyun.com/document_detail/472574.html) to query the creation status of the programmable script:
     *    - If the programmable script is in the **Creating** state, the script is being created.
     *    - If the programmable script is in the **Available** state, the script is created successfully.
     *
     * @param request - CreateAScriptsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateAScriptsResponse
     *
     * @param CreateAScriptsRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return CreateAScriptsResponse
     */
    public function createAScriptsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->AScripts) {
            @$query['AScripts'] = $request->AScripts;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$query['DryRun'] = $request->dryRun;
        }

        if (null !== $request->listenerId) {
            @$query['ListenerId'] = $request->listenerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateAScripts',
            'version' => '2020-06-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateAScriptsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a programmable script.
     *
     * @remarks
     * ### Before you begin
     * - Create a Standard Edition or WAF-enhanced ALB instance. For more information, see [CreateLoadBalancer](https://help.aliyun.com/document_detail/214358.html).
     * ### Usage notes
     * **CreateAScripts** is an asynchronous operation. After a request is sent, the system returns a request ID, but the programmable script is not yet created. The creation task continues in the background. Call [ListAScripts](https://help.aliyun.com/document_detail/472574.html) to query the creation status of the programmable script:
     *    - If the programmable script is in the **Creating** state, the script is being created.
     *    - If the programmable script is in the **Available** state, the script is created successfully.
     *
     * @param request - CreateAScriptsRequest
     *
     * @returns CreateAScriptsResponse
     *
     * @param CreateAScriptsRequest $request
     *
     * @return CreateAScriptsResponse
     */
    public function createAScripts($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAScriptsWithOptions($request, $runtime);
    }

    /**
     * Creates an access control list (ACL) in a specified region.
     *
     * @remarks
     * The **CreateAcl** operation is asynchronous. After you invoke this operation, the system returns an instance ID, but the access control policy group is not immediately created because the creation node is still running in the background. You can invoke [ListAcls](https://help.aliyun.com/document_detail/213617.html) to query the creation status of the access control policy group:
     * - If the access control policy group is in the **Creating** state, the access control policy group is being created.
     * - If the access control policy group is in the **Available** state, the access control policy group is created.
     *
     * @param request - CreateAclRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateAclResponse
     *
     * @param CreateAclRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return CreateAclResponse
     */
    public function createAclWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->aclName) {
            @$query['AclName'] = $request->aclName;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$query['DryRun'] = $request->dryRun;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateAcl',
            'version' => '2020-06-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateAclResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates an access control list (ACL) in a specified region.
     *
     * @remarks
     * The **CreateAcl** operation is asynchronous. After you invoke this operation, the system returns an instance ID, but the access control policy group is not immediately created because the creation node is still running in the background. You can invoke [ListAcls](https://help.aliyun.com/document_detail/213617.html) to query the creation status of the access control policy group:
     * - If the access control policy group is in the **Creating** state, the access control policy group is being created.
     * - If the access control policy group is in the **Available** state, the access control policy group is created.
     *
     * @param request - CreateAclRequest
     *
     * @returns CreateAclResponse
     *
     * @param CreateAclRequest $request
     *
     * @return CreateAclResponse
     */
    public function createAcl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAclWithOptions($request, $runtime);
    }

    /**
     * Creates a health check template in a specified region.
     *
     * @param request - CreateHealthCheckTemplateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateHealthCheckTemplateResponse
     *
     * @param CreateHealthCheckTemplateRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return CreateHealthCheckTemplateResponse
     */
    public function createHealthCheckTemplateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$query['DryRun'] = $request->dryRun;
        }

        if (null !== $request->healthCheckCodes) {
            @$query['HealthCheckCodes'] = $request->healthCheckCodes;
        }

        if (null !== $request->healthCheckConnectPort) {
            @$query['HealthCheckConnectPort'] = $request->healthCheckConnectPort;
        }

        if (null !== $request->healthCheckHost) {
            @$query['HealthCheckHost'] = $request->healthCheckHost;
        }

        if (null !== $request->healthCheckHttpVersion) {
            @$query['HealthCheckHttpVersion'] = $request->healthCheckHttpVersion;
        }

        if (null !== $request->healthCheckInterval) {
            @$query['HealthCheckInterval'] = $request->healthCheckInterval;
        }

        if (null !== $request->healthCheckMethod) {
            @$query['HealthCheckMethod'] = $request->healthCheckMethod;
        }

        if (null !== $request->healthCheckPath) {
            @$query['HealthCheckPath'] = $request->healthCheckPath;
        }

        if (null !== $request->healthCheckProtocol) {
            @$query['HealthCheckProtocol'] = $request->healthCheckProtocol;
        }

        if (null !== $request->healthCheckTemplateName) {
            @$query['HealthCheckTemplateName'] = $request->healthCheckTemplateName;
        }

        if (null !== $request->healthCheckTimeout) {
            @$query['HealthCheckTimeout'] = $request->healthCheckTimeout;
        }

        if (null !== $request->healthyThreshold) {
            @$query['HealthyThreshold'] = $request->healthyThreshold;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        if (null !== $request->unhealthyThreshold) {
            @$query['UnhealthyThreshold'] = $request->unhealthyThreshold;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateHealthCheckTemplate',
            'version' => '2020-06-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateHealthCheckTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a health check template in a specified region.
     *
     * @param request - CreateHealthCheckTemplateRequest
     *
     * @returns CreateHealthCheckTemplateResponse
     *
     * @param CreateHealthCheckTemplateRequest $request
     *
     * @return CreateHealthCheckTemplateResponse
     */
    public function createHealthCheckTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createHealthCheckTemplateWithOptions($request, $runtime);
    }

    /**
     * Creates a listener.
     *
     * @remarks
     * The **CreateListener** operation is asynchronous. The system returns a request ID, but the HTTP, HTTPS, or QUIC listener is not yet created. The creation task is still running in the background. You can call the [GetListenerAttribute](https://help.aliyun.com/document_detail/2254865.html) operation to query the creation status of the HTTP, HTTPS, or QUIC listener:
     * - If the HTTP, HTTPS, or QUIC listener is in the **Provisioning** state, the listener is being created.
     * - If the HTTP, HTTPS, or QUIC listener is in the **Running** state, the listener is created.
     *
     * @param request - CreateListenerRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateListenerResponse
     *
     * @param CreateListenerRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return CreateListenerResponse
     */
    public function createListenerWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->caCertificates) {
            @$query['CaCertificates'] = $request->caCertificates;
        }

        if (null !== $request->caEnabled) {
            @$query['CaEnabled'] = $request->caEnabled;
        }

        if (null !== $request->certificates) {
            @$query['Certificates'] = $request->certificates;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->defaultActions) {
            @$query['DefaultActions'] = $request->defaultActions;
        }

        if (null !== $request->dryRun) {
            @$query['DryRun'] = $request->dryRun;
        }

        if (null !== $request->gzipEnabled) {
            @$query['GzipEnabled'] = $request->gzipEnabled;
        }

        if (null !== $request->http2Enabled) {
            @$query['Http2Enabled'] = $request->http2Enabled;
        }

        if (null !== $request->idleTimeout) {
            @$query['IdleTimeout'] = $request->idleTimeout;
        }

        if (null !== $request->listenerDescription) {
            @$query['ListenerDescription'] = $request->listenerDescription;
        }

        if (null !== $request->listenerPort) {
            @$query['ListenerPort'] = $request->listenerPort;
        }

        if (null !== $request->listenerProtocol) {
            @$query['ListenerProtocol'] = $request->listenerProtocol;
        }

        if (null !== $request->loadBalancerId) {
            @$query['LoadBalancerId'] = $request->loadBalancerId;
        }

        if (null !== $request->quicConfig) {
            @$query['QuicConfig'] = $request->quicConfig;
        }

        if (null !== $request->requestTimeout) {
            @$query['RequestTimeout'] = $request->requestTimeout;
        }

        if (null !== $request->securityPolicyId) {
            @$query['SecurityPolicyId'] = $request->securityPolicyId;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        if (null !== $request->XForwardedForConfig) {
            @$query['XForwardedForConfig'] = $request->XForwardedForConfig;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateListener',
            'version' => '2020-06-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateListenerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a listener.
     *
     * @remarks
     * The **CreateListener** operation is asynchronous. The system returns a request ID, but the HTTP, HTTPS, or QUIC listener is not yet created. The creation task is still running in the background. You can call the [GetListenerAttribute](https://help.aliyun.com/document_detail/2254865.html) operation to query the creation status of the HTTP, HTTPS, or QUIC listener:
     * - If the HTTP, HTTPS, or QUIC listener is in the **Provisioning** state, the listener is being created.
     * - If the HTTP, HTTPS, or QUIC listener is in the **Running** state, the listener is created.
     *
     * @param request - CreateListenerRequest
     *
     * @returns CreateListenerResponse
     *
     * @param CreateListenerRequest $request
     *
     * @return CreateListenerResponse
     */
    public function createListener($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createListenerWithOptions($request, $runtime);
    }

    /**
     * Creates an Application Load Balancing (ALB) instance in a specified region.
     *
     * @remarks
     * The **CreateLoadBalancer** operation is asynchronous. The system returns an instance ID, but the Application Load Balancing (ALB) instance is not yet created and the creation task is still running in the background. You can invoke the [GetLoadBalancerAttribute](https://help.aliyun.com/document_detail/214362.html) operation to query the creation status of the Application Load Balancing (ALB) instance:
     * - When the Application Load Balancing (ALB) instance is in the **Provisioning** state, the instance is being created.
     * - When the Application Load Balancing (ALB) instance is in the **Active** state, the instance is created.
     *
     * @param request - CreateLoadBalancerRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateLoadBalancerResponse
     *
     * @param CreateLoadBalancerRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return CreateLoadBalancerResponse
     */
    public function createLoadBalancerWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->addressAllocatedMode) {
            @$query['AddressAllocatedMode'] = $request->addressAllocatedMode;
        }

        if (null !== $request->addressIpVersion) {
            @$query['AddressIpVersion'] = $request->addressIpVersion;
        }

        if (null !== $request->addressType) {
            @$query['AddressType'] = $request->addressType;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->deletionProtectionEnabled) {
            @$query['DeletionProtectionEnabled'] = $request->deletionProtectionEnabled;
        }

        if (null !== $request->dryRun) {
            @$query['DryRun'] = $request->dryRun;
        }

        if (null !== $request->loadBalancerBillingConfig) {
            @$query['LoadBalancerBillingConfig'] = $request->loadBalancerBillingConfig;
        }

        if (null !== $request->loadBalancerEdition) {
            @$query['LoadBalancerEdition'] = $request->loadBalancerEdition;
        }

        if (null !== $request->loadBalancerName) {
            @$query['LoadBalancerName'] = $request->loadBalancerName;
        }

        if (null !== $request->modificationProtectionConfig) {
            @$query['ModificationProtectionConfig'] = $request->modificationProtectionConfig;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->securityGroupIds) {
            @$query['SecurityGroupIds'] = $request->securityGroupIds;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        if (null !== $request->vpcId) {
            @$query['VpcId'] = $request->vpcId;
        }

        if (null !== $request->zoneMappings) {
            @$query['ZoneMappings'] = $request->zoneMappings;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateLoadBalancer',
            'version' => '2020-06-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateLoadBalancerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates an Application Load Balancing (ALB) instance in a specified region.
     *
     * @remarks
     * The **CreateLoadBalancer** operation is asynchronous. The system returns an instance ID, but the Application Load Balancing (ALB) instance is not yet created and the creation task is still running in the background. You can invoke the [GetLoadBalancerAttribute](https://help.aliyun.com/document_detail/214362.html) operation to query the creation status of the Application Load Balancing (ALB) instance:
     * - When the Application Load Balancing (ALB) instance is in the **Provisioning** state, the instance is being created.
     * - When the Application Load Balancing (ALB) instance is in the **Active** state, the instance is created.
     *
     * @param request - CreateLoadBalancerRequest
     *
     * @returns CreateLoadBalancerResponse
     *
     * @param CreateLoadBalancerRequest $request
     *
     * @return CreateLoadBalancerResponse
     */
    public function createLoadBalancer($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createLoadBalancerWithOptions($request, $runtime);
    }

    /**
     * Creates a forwarding rule under a specified listener.
     *
     * @remarks
     * When you call this operation to create a forwarding rule, note the following items:
     * - When you configure the **Redirect** action, you cannot set all parameters except the **HttpCode** parameter to their default values.
     * - When you configure multiple actions for the same forwarding rule, you must set the action type of the **Rewrite** action to **ForwardGroup**.
     * - The **CreateRule** operation is asynchronous. After you send the request, the system returns an instance ID, but the forwarding rule is not yet created and the creation node in the background is still in progress. You can invoke the [ListRules](https://help.aliyun.com/document_detail/214379.html) operation to query the creation status of the forwarding rule:
     *     - If the forwarding rule is in the **Provisioning** state, the forwarding rule is being created.
     *     - If the forwarding rule is in the **Available** state, the forwarding rule is created.
     * - The maximum number of conditions (**RuleConditions**) and actions (**RuleActions**) that you can add to a forwarding rule varies based on the edition:
     *     - Number of conditions: 5 for Basic Edition, 10 for Standard Edition, and 10 for WAF-enhanced Edition.
     *     - Number of actions: 3 for Basic Edition, 5 for Standard Edition, and 5 for WAF-enhanced Edition.
     *
     * @param request - CreateRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateRuleResponse
     *
     * @param CreateRuleRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return CreateRuleResponse
     */
    public function createRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->direction) {
            @$query['Direction'] = $request->direction;
        }

        if (null !== $request->dryRun) {
            @$query['DryRun'] = $request->dryRun;
        }

        if (null !== $request->listenerId) {
            @$query['ListenerId'] = $request->listenerId;
        }

        if (null !== $request->priority) {
            @$query['Priority'] = $request->priority;
        }

        if (null !== $request->ruleActions) {
            @$query['RuleActions'] = $request->ruleActions;
        }

        if (null !== $request->ruleConditions) {
            @$query['RuleConditions'] = $request->ruleConditions;
        }

        if (null !== $request->ruleName) {
            @$query['RuleName'] = $request->ruleName;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateRule',
            'version' => '2020-06-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a forwarding rule under a specified listener.
     *
     * @remarks
     * When you call this operation to create a forwarding rule, note the following items:
     * - When you configure the **Redirect** action, you cannot set all parameters except the **HttpCode** parameter to their default values.
     * - When you configure multiple actions for the same forwarding rule, you must set the action type of the **Rewrite** action to **ForwardGroup**.
     * - The **CreateRule** operation is asynchronous. After you send the request, the system returns an instance ID, but the forwarding rule is not yet created and the creation node in the background is still in progress. You can invoke the [ListRules](https://help.aliyun.com/document_detail/214379.html) operation to query the creation status of the forwarding rule:
     *     - If the forwarding rule is in the **Provisioning** state, the forwarding rule is being created.
     *     - If the forwarding rule is in the **Available** state, the forwarding rule is created.
     * - The maximum number of conditions (**RuleConditions**) and actions (**RuleActions**) that you can add to a forwarding rule varies based on the edition:
     *     - Number of conditions: 5 for Basic Edition, 10 for Standard Edition, and 10 for WAF-enhanced Edition.
     *     - Number of actions: 3 for Basic Edition, 5 for Standard Edition, and 5 for WAF-enhanced Edition.
     *
     * @param request - CreateRuleRequest
     *
     * @returns CreateRuleResponse
     *
     * @param CreateRuleRequest $request
     *
     * @return CreateRuleResponse
     */
    public function createRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createRuleWithOptions($request, $runtime);
    }

    /**
     * Creates multiple forwarding rules.
     *
     * @remarks
     * When you invoke this operation to create forwarding rules, take note of the following items:
     * - When you configure the **Redirect** action, you cannot set all parameters except **HttpCode** to their default values.
     * - If you configure multiple actions for the same forwarding rule, the action type of the **Rewrite** action must be set to **ForwardGroup**.
     * - The **CreateRules** operation is asynchronous. After you send the request, the system returns an instance ID, but the forwarding rules are not yet created. The creation node is still running in the background. You can invoke the [ListRules](https://help.aliyun.com/document_detail/214379.html) operation to query the creation status of the forwarding rules:
     *     - If the forwarding rules are in the **Provisioning** state, the forwarding rules are being created.
     *     - If the forwarding rules are in the **Available** state, the forwarding rules are created.
     * - A forwarding rule supports the following maximum numbers of conditions (**RuleConditions**) and actions (**RuleActions**):
     *     - Number of conditions: 5 for Basic Edition, 10 for Standard Edition, and 10 for WAF-enhanced Edition.
     *     - Number of actions: 3 for Basic Edition, 5 for Standard Edition, and 5 for WAF-enhanced Edition.
     *
     * @param request - CreateRulesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateRulesResponse
     *
     * @param CreateRulesRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return CreateRulesResponse
     */
    public function createRulesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$query['DryRun'] = $request->dryRun;
        }

        if (null !== $request->listenerId) {
            @$query['ListenerId'] = $request->listenerId;
        }

        $body = [];
        $bodyFlat = [];
        if (null !== $request->rules) {
            @$bodyFlat['Rules'] = $request->rules;
        }

        $body = Dara::merge([
        ], $body, Utils::query($bodyFlat));
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateRules',
            'version' => '2020-06-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates multiple forwarding rules.
     *
     * @remarks
     * When you invoke this operation to create forwarding rules, take note of the following items:
     * - When you configure the **Redirect** action, you cannot set all parameters except **HttpCode** to their default values.
     * - If you configure multiple actions for the same forwarding rule, the action type of the **Rewrite** action must be set to **ForwardGroup**.
     * - The **CreateRules** operation is asynchronous. After you send the request, the system returns an instance ID, but the forwarding rules are not yet created. The creation node is still running in the background. You can invoke the [ListRules](https://help.aliyun.com/document_detail/214379.html) operation to query the creation status of the forwarding rules:
     *     - If the forwarding rules are in the **Provisioning** state, the forwarding rules are being created.
     *     - If the forwarding rules are in the **Available** state, the forwarding rules are created.
     * - A forwarding rule supports the following maximum numbers of conditions (**RuleConditions**) and actions (**RuleActions**):
     *     - Number of conditions: 5 for Basic Edition, 10 for Standard Edition, and 10 for WAF-enhanced Edition.
     *     - Number of actions: 3 for Basic Edition, 5 for Standard Edition, and 5 for WAF-enhanced Edition.
     *
     * @param request - CreateRulesRequest
     *
     * @returns CreateRulesResponse
     *
     * @param CreateRulesRequest $request
     *
     * @return CreateRulesResponse
     */
    public function createRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createRulesWithOptions($request, $runtime);
    }

    /**
     * Creates a custom security policy in a specified region.
     *
     * @param request - CreateSecurityPolicyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateSecurityPolicyResponse
     *
     * @param CreateSecurityPolicyRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return CreateSecurityPolicyResponse
     */
    public function createSecurityPolicyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ciphers) {
            @$query['Ciphers'] = $request->ciphers;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$query['DryRun'] = $request->dryRun;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->securityPolicyName) {
            @$query['SecurityPolicyName'] = $request->securityPolicyName;
        }

        if (null !== $request->TLSVersions) {
            @$query['TLSVersions'] = $request->TLSVersions;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateSecurityPolicy',
            'version' => '2020-06-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateSecurityPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a custom security policy in a specified region.
     *
     * @param request - CreateSecurityPolicyRequest
     *
     * @returns CreateSecurityPolicyResponse
     *
     * @param CreateSecurityPolicyRequest $request
     *
     * @return CreateSecurityPolicyResponse
     */
    public function createSecurityPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSecurityPolicyWithOptions($request, $runtime);
    }

    /**
     * Creates a server group in a specified region.
     *
     * @remarks
     * The **CreateServerGroup** API operation is asynchronous. After you call this operation, the system returns a request ID, but the server group is not yet created and the creation task is still running in the background. You can call the [ListServerGroups](https://help.aliyun.com/document_detail/213627.html) operation to query the creation status of the server group:
     * - If the server group is in the **Creating** state, the server group is being created.
     * - If the server group is in the **Available** state, the server group is created.
     *
     * @param request - CreateServerGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateServerGroupResponse
     *
     * @param CreateServerGroupRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CreateServerGroupResponse
     */
    public function createServerGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->connectionDrainConfig) {
            @$query['ConnectionDrainConfig'] = $request->connectionDrainConfig;
        }

        if (null !== $request->crossZoneEnabled) {
            @$query['CrossZoneEnabled'] = $request->crossZoneEnabled;
        }

        if (null !== $request->dryRun) {
            @$query['DryRun'] = $request->dryRun;
        }

        if (null !== $request->healthCheckConfig) {
            @$query['HealthCheckConfig'] = $request->healthCheckConfig;
        }

        if (null !== $request->ipVersionAffinityMode) {
            @$query['IpVersionAffinityMode'] = $request->ipVersionAffinityMode;
        }

        if (null !== $request->ipv6Enabled) {
            @$query['Ipv6Enabled'] = $request->ipv6Enabled;
        }

        if (null !== $request->protocol) {
            @$query['Protocol'] = $request->protocol;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->scheduler) {
            @$query['Scheduler'] = $request->scheduler;
        }

        if (null !== $request->serverGroupName) {
            @$query['ServerGroupName'] = $request->serverGroupName;
        }

        if (null !== $request->serverGroupType) {
            @$query['ServerGroupType'] = $request->serverGroupType;
        }

        if (null !== $request->serviceName) {
            @$query['ServiceName'] = $request->serviceName;
        }

        if (null !== $request->slowStartConfig) {
            @$query['SlowStartConfig'] = $request->slowStartConfig;
        }

        if (null !== $request->stickySessionConfig) {
            @$query['StickySessionConfig'] = $request->stickySessionConfig;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        if (null !== $request->uchConfig) {
            @$query['UchConfig'] = $request->uchConfig;
        }

        if (null !== $request->upstreamKeepaliveEnabled) {
            @$query['UpstreamKeepaliveEnabled'] = $request->upstreamKeepaliveEnabled;
        }

        if (null !== $request->vpcId) {
            @$query['VpcId'] = $request->vpcId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateServerGroup',
            'version' => '2020-06-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateServerGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a server group in a specified region.
     *
     * @remarks
     * The **CreateServerGroup** API operation is asynchronous. After you call this operation, the system returns a request ID, but the server group is not yet created and the creation task is still running in the background. You can call the [ListServerGroups](https://help.aliyun.com/document_detail/213627.html) operation to query the creation status of the server group:
     * - If the server group is in the **Creating** state, the server group is being created.
     * - If the server group is in the **Available** state, the server group is created.
     *
     * @param request - CreateServerGroupRequest
     *
     * @returns CreateServerGroupResponse
     *
     * @param CreateServerGroupRequest $request
     *
     * @return CreateServerGroupResponse
     */
    public function createServerGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createServerGroupWithOptions($request, $runtime);
    }

    /**
     * Deletes programmable scripts.
     *
     * @remarks
     * *DeleteAScripts** is an asynchronous operation. After you call this operation, the system returns a request ID, but the programmable scripts are not immediately deleted. The deletion task continues to run in the background. You can call [ListAScripts](https://help.aliyun.com/document_detail/472574.html) to query the deletion status of the programmable scripts:
     * - If a programmable script is in the **Deleting** state, the script is being deleted.
     * - If the programmable script cannot be queried, the script is deleted.
     *
     * @param request - DeleteAScriptsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteAScriptsResponse
     *
     * @param DeleteAScriptsRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DeleteAScriptsResponse
     */
    public function deleteAScriptsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->AScriptIds) {
            @$query['AScriptIds'] = $request->AScriptIds;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$query['DryRun'] = $request->dryRun;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteAScripts',
            'version' => '2020-06-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteAScriptsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes programmable scripts.
     *
     * @remarks
     * *DeleteAScripts** is an asynchronous operation. After you call this operation, the system returns a request ID, but the programmable scripts are not immediately deleted. The deletion task continues to run in the background. You can call [ListAScripts](https://help.aliyun.com/document_detail/472574.html) to query the deletion status of the programmable scripts:
     * - If a programmable script is in the **Deleting** state, the script is being deleted.
     * - If the programmable script cannot be queried, the script is deleted.
     *
     * @param request - DeleteAScriptsRequest
     *
     * @returns DeleteAScriptsResponse
     *
     * @param DeleteAScriptsRequest $request
     *
     * @return DeleteAScriptsResponse
     */
    public function deleteAScripts($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAScriptsWithOptions($request, $runtime);
    }

    /**
     * Deletes a specified access control list.
     *
     * @remarks
     * The **DeleteAcl** API operation is asynchronous. The system returns a request ID, but the access control list (ACL) is not yet deleted and the deletion task is still running in the background. You can call [ListAcls](https://help.aliyun.com/document_detail/213617.html) to query the deletion status of the ACL:
     * - If the ACL is in the **Deleting** state, it indicates that the ACL is being deleted.
     * - If the status of the ACL cannot be queried, it indicates that the ACL is deleted.
     *
     * @param request - DeleteAclRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteAclResponse
     *
     * @param DeleteAclRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return DeleteAclResponse
     */
    public function deleteAclWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->aclId) {
            @$query['AclId'] = $request->aclId;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$query['DryRun'] = $request->dryRun;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteAcl',
            'version' => '2020-06-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteAclResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a specified access control list.
     *
     * @remarks
     * The **DeleteAcl** API operation is asynchronous. The system returns a request ID, but the access control list (ACL) is not yet deleted and the deletion task is still running in the background. You can call [ListAcls](https://help.aliyun.com/document_detail/213617.html) to query the deletion status of the ACL:
     * - If the ACL is in the **Deleting** state, it indicates that the ACL is being deleted.
     * - If the status of the ACL cannot be queried, it indicates that the ACL is deleted.
     *
     * @param request - DeleteAclRequest
     *
     * @returns DeleteAclResponse
     *
     * @param DeleteAclRequest $request
     *
     * @return DeleteAclResponse
     */
    public function deleteAcl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAclWithOptions($request, $runtime);
    }

    /**
     * Deletes health check templates.
     *
     * @param request - DeleteHealthCheckTemplatesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteHealthCheckTemplatesResponse
     *
     * @param DeleteHealthCheckTemplatesRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DeleteHealthCheckTemplatesResponse
     */
    public function deleteHealthCheckTemplatesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$query['DryRun'] = $request->dryRun;
        }

        if (null !== $request->healthCheckTemplateIds) {
            @$query['HealthCheckTemplateIds'] = $request->healthCheckTemplateIds;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteHealthCheckTemplates',
            'version' => '2020-06-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteHealthCheckTemplatesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes health check templates.
     *
     * @param request - DeleteHealthCheckTemplatesRequest
     *
     * @returns DeleteHealthCheckTemplatesResponse
     *
     * @param DeleteHealthCheckTemplatesRequest $request
     *
     * @return DeleteHealthCheckTemplatesResponse
     */
    public function deleteHealthCheckTemplates($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteHealthCheckTemplatesWithOptions($request, $runtime);
    }

    /**
     * Deletes a specified listener.
     *
     * @remarks
     * The **DeleteListener** operation is asynchronous. After you call this operation, the system returns a request ID, but the listener is not immediately deleted. The deletion task is still running in the background. You can call [GetListenerAttribute](https://help.aliyun.com/document_detail/2254865.html) to query the deletion status of the listener:
     * - If the listener is in the **Deleting** state, the listener is being deleted.
     * - If the listener cannot be queried, the listener is deleted.
     *
     * @param request - DeleteListenerRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteListenerResponse
     *
     * @param DeleteListenerRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DeleteListenerResponse
     */
    public function deleteListenerWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$query['DryRun'] = $request->dryRun;
        }

        if (null !== $request->listenerId) {
            @$query['ListenerId'] = $request->listenerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteListener',
            'version' => '2020-06-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteListenerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a specified listener.
     *
     * @remarks
     * The **DeleteListener** operation is asynchronous. After you call this operation, the system returns a request ID, but the listener is not immediately deleted. The deletion task is still running in the background. You can call [GetListenerAttribute](https://help.aliyun.com/document_detail/2254865.html) to query the deletion status of the listener:
     * - If the listener is in the **Deleting** state, the listener is being deleted.
     * - If the listener cannot be queried, the listener is deleted.
     *
     * @param request - DeleteListenerRequest
     *
     * @returns DeleteListenerResponse
     *
     * @param DeleteListenerRequest $request
     *
     * @return DeleteListenerResponse
     */
    public function deleteListener($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteListenerWithOptions($request, $runtime);
    }

    /**
     * Deletes a specified load balancing instance.
     *
     * @remarks
     * The **DeleteLoadBalancer** API operation is asynchronous. After you invoke this operation, the system returns a request ID, but the application load balancing instance is not immediately deleted. The deletion node is still running in the background. You can invoke [GetLoadBalancerAttribute](https://help.aliyun.com/document_detail/214362.html) to query the deletion status of the application load balancing instance:
     * - When the application load balancing instance is in the **Deleting** state, the instance is being deleted.
     * - When the specified application load balancing instance cannot be queried, the instance is deleted.
     *
     * @param request - DeleteLoadBalancerRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteLoadBalancerResponse
     *
     * @param DeleteLoadBalancerRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteLoadBalancerResponse
     */
    public function deleteLoadBalancerWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$query['DryRun'] = $request->dryRun;
        }

        if (null !== $request->loadBalancerId) {
            @$query['LoadBalancerId'] = $request->loadBalancerId;
        }

        if (null !== $request->retainResourceType) {
            @$query['RetainResourceType'] = $request->retainResourceType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteLoadBalancer',
            'version' => '2020-06-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteLoadBalancerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a specified load balancing instance.
     *
     * @remarks
     * The **DeleteLoadBalancer** API operation is asynchronous. After you invoke this operation, the system returns a request ID, but the application load balancing instance is not immediately deleted. The deletion node is still running in the background. You can invoke [GetLoadBalancerAttribute](https://help.aliyun.com/document_detail/214362.html) to query the deletion status of the application load balancing instance:
     * - When the application load balancing instance is in the **Deleting** state, the instance is being deleted.
     * - When the specified application load balancing instance cannot be queried, the instance is deleted.
     *
     * @param request - DeleteLoadBalancerRequest
     *
     * @returns DeleteLoadBalancerResponse
     *
     * @param DeleteLoadBalancerRequest $request
     *
     * @return DeleteLoadBalancerResponse
     */
    public function deleteLoadBalancer($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteLoadBalancerWithOptions($request, $runtime);
    }

    /**
     * Deletes a forwarding rule.
     *
     * @remarks
     * *DeleteRule** is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background. You can call the [ListRules](https://help.aliyun.com/document_detail/214379.html) operation to query the status of a forwarding rule:
     * *   If the forwarding rule is in the **Deleting** state, the forwarding rule is being deleted.
     * *   If the forwarding rule cannot be found, the forwarding rule is deleted.
     *
     * @param request - DeleteRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteRuleResponse
     *
     * @param DeleteRuleRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return DeleteRuleResponse
     */
    public function deleteRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$query['DryRun'] = $request->dryRun;
        }

        if (null !== $request->ruleId) {
            @$query['RuleId'] = $request->ruleId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteRule',
            'version' => '2020-06-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a forwarding rule.
     *
     * @remarks
     * *DeleteRule** is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background. You can call the [ListRules](https://help.aliyun.com/document_detail/214379.html) operation to query the status of a forwarding rule:
     * *   If the forwarding rule is in the **Deleting** state, the forwarding rule is being deleted.
     * *   If the forwarding rule cannot be found, the forwarding rule is deleted.
     *
     * @param request - DeleteRuleRequest
     *
     * @returns DeleteRuleResponse
     *
     * @param DeleteRuleRequest $request
     *
     * @return DeleteRuleResponse
     */
    public function deleteRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteRuleWithOptions($request, $runtime);
    }

    /**
     * Deletes multiple forwarding rules under the same listener.
     *
     * @remarks
     * The **DeleteRules** operation is asynchronous. After you call this operation, the system returns a request ID, but the forwarding rules are not immediately deleted. The deletion task is still running in the background. You can call the [ListRules](https://help.aliyun.com/document_detail/214379.html) operation to query the deletion status of the forwarding rules:
     * - If the forwarding rules are in the **Deleting** state, the forwarding rules are being deleted.
     * - If the status of the forwarding rules cannot be queried, the forwarding rules are deleted.
     *
     * @param request - DeleteRulesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteRulesResponse
     *
     * @param DeleteRulesRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return DeleteRulesResponse
     */
    public function deleteRulesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$query['DryRun'] = $request->dryRun;
        }

        if (null !== $request->ruleIds) {
            @$query['RuleIds'] = $request->ruleIds;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteRules',
            'version' => '2020-06-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes multiple forwarding rules under the same listener.
     *
     * @remarks
     * The **DeleteRules** operation is asynchronous. After you call this operation, the system returns a request ID, but the forwarding rules are not immediately deleted. The deletion task is still running in the background. You can call the [ListRules](https://help.aliyun.com/document_detail/214379.html) operation to query the deletion status of the forwarding rules:
     * - If the forwarding rules are in the **Deleting** state, the forwarding rules are being deleted.
     * - If the status of the forwarding rules cannot be queried, the forwarding rules are deleted.
     *
     * @param request - DeleteRulesRequest
     *
     * @returns DeleteRulesResponse
     *
     * @param DeleteRulesRequest $request
     *
     * @return DeleteRulesResponse
     */
    public function deleteRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteRulesWithOptions($request, $runtime);
    }

    /**
     * Deletes a custom security policy.
     *
     * @param request - DeleteSecurityPolicyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteSecurityPolicyResponse
     *
     * @param DeleteSecurityPolicyRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DeleteSecurityPolicyResponse
     */
    public function deleteSecurityPolicyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$query['DryRun'] = $request->dryRun;
        }

        if (null !== $request->securityPolicyId) {
            @$query['SecurityPolicyId'] = $request->securityPolicyId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteSecurityPolicy',
            'version' => '2020-06-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteSecurityPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a custom security policy.
     *
     * @param request - DeleteSecurityPolicyRequest
     *
     * @returns DeleteSecurityPolicyResponse
     *
     * @param DeleteSecurityPolicyRequest $request
     *
     * @return DeleteSecurityPolicyResponse
     */
    public function deleteSecurityPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteSecurityPolicyWithOptions($request, $runtime);
    }

    /**
     * Deletes a server group.
     *
     * @remarks
     * *DeleteServerGroup** is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background. You can call the [ListServerGroups](https://help.aliyun.com/document_detail/213627.html) operation to query the status of the task.
     * *   If a server group is in the **Deleting** state, it indicates that the server group is being deleted.
     * *   If a specified server group cannot be found, it indicates that the server group has been deleted.
     *
     * @param request - DeleteServerGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteServerGroupResponse
     *
     * @param DeleteServerGroupRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DeleteServerGroupResponse
     */
    public function deleteServerGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$query['DryRun'] = $request->dryRun;
        }

        if (null !== $request->serverGroupId) {
            @$query['ServerGroupId'] = $request->serverGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteServerGroup',
            'version' => '2020-06-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteServerGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a server group.
     *
     * @remarks
     * *DeleteServerGroup** is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background. You can call the [ListServerGroups](https://help.aliyun.com/document_detail/213627.html) operation to query the status of the task.
     * *   If a server group is in the **Deleting** state, it indicates that the server group is being deleted.
     * *   If a specified server group cannot be found, it indicates that the server group has been deleted.
     *
     * @param request - DeleteServerGroupRequest
     *
     * @returns DeleteServerGroupResponse
     *
     * @param DeleteServerGroupRequest $request
     *
     * @return DeleteServerGroupResponse
     */
    public function deleteServerGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteServerGroupWithOptions($request, $runtime);
    }

    /**
     * Queries the details of a Load Balancer Capacity Unit (LCU) reservation.
     *
     * @param request - DescribeCapacityReservationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeCapacityReservationResponse
     *
     * @param DescribeCapacityReservationRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeCapacityReservationResponse
     */
    public function describeCapacityReservationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->loadBalancerId) {
            @$query['LoadBalancerId'] = $request->loadBalancerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeCapacityReservation',
            'version' => '2020-06-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeCapacityReservationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of a Load Balancer Capacity Unit (LCU) reservation.
     *
     * @param request - DescribeCapacityReservationRequest
     *
     * @returns DescribeCapacityReservationResponse
     *
     * @param DescribeCapacityReservationRequest $request
     *
     * @return DescribeCapacityReservationResponse
     */
    public function describeCapacityReservation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCapacityReservationWithOptions($request, $runtime);
    }

    /**
     * Queries available regions.
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
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeRegions',
            'version' => '2020-06-16',
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
     * Queries available regions.
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
     * Queries zones in a region.
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
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeZones',
            'version' => '2020-06-16',
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
     * Queries zones in a region.
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
     * Disassociates an Internet Shared Bandwidth instance from an Application Load Balancer (ALB) instance.
     *
     * @remarks
     * *DetachCommonBandwidthPackageFromLoadBalancer** is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background. You can call the [GetLoadBalancerAttribute](https://help.aliyun.com/document_detail/214359.html) operation to query the status of the task.
     * - If an ALB instance is in the **Configuring** state, the EIP bandwidth plan is being disassociated from the ALB instance.
     * - If an ALB instance is in the **Active** state, the EIP bandwidth plan is disassociated from the ALB instance.
     *
     * @param request - DetachCommonBandwidthPackageFromLoadBalancerRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DetachCommonBandwidthPackageFromLoadBalancerResponse
     *
     * @param DetachCommonBandwidthPackageFromLoadBalancerRequest $request
     * @param RuntimeOptions                                      $runtime
     *
     * @return DetachCommonBandwidthPackageFromLoadBalancerResponse
     */
    public function detachCommonBandwidthPackageFromLoadBalancerWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bandwidthPackageId) {
            @$query['BandwidthPackageId'] = $request->bandwidthPackageId;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$query['DryRun'] = $request->dryRun;
        }

        if (null !== $request->loadBalancerId) {
            @$query['LoadBalancerId'] = $request->loadBalancerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DetachCommonBandwidthPackageFromLoadBalancer',
            'version' => '2020-06-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DetachCommonBandwidthPackageFromLoadBalancerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Disassociates an Internet Shared Bandwidth instance from an Application Load Balancer (ALB) instance.
     *
     * @remarks
     * *DetachCommonBandwidthPackageFromLoadBalancer** is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background. You can call the [GetLoadBalancerAttribute](https://help.aliyun.com/document_detail/214359.html) operation to query the status of the task.
     * - If an ALB instance is in the **Configuring** state, the EIP bandwidth plan is being disassociated from the ALB instance.
     * - If an ALB instance is in the **Active** state, the EIP bandwidth plan is disassociated from the ALB instance.
     *
     * @param request - DetachCommonBandwidthPackageFromLoadBalancerRequest
     *
     * @returns DetachCommonBandwidthPackageFromLoadBalancerResponse
     *
     * @param DetachCommonBandwidthPackageFromLoadBalancerRequest $request
     *
     * @return DetachCommonBandwidthPackageFromLoadBalancerResponse
     */
    public function detachCommonBandwidthPackageFromLoadBalancer($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detachCommonBandwidthPackageFromLoadBalancerWithOptions($request, $runtime);
    }

    /**
     * Shuts down deletion protection for a specified load balancing instance.
     *
     * @param request - DisableDeletionProtectionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DisableDeletionProtectionResponse
     *
     * @param DisableDeletionProtectionRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DisableDeletionProtectionResponse
     */
    public function disableDeletionProtectionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$query['DryRun'] = $request->dryRun;
        }

        if (null !== $request->resourceId) {
            @$query['ResourceId'] = $request->resourceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DisableDeletionProtection',
            'version' => '2020-06-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DisableDeletionProtectionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Shuts down deletion protection for a specified load balancing instance.
     *
     * @param request - DisableDeletionProtectionRequest
     *
     * @returns DisableDeletionProtectionResponse
     *
     * @param DisableDeletionProtectionRequest $request
     *
     * @return DisableDeletionProtectionResponse
     */
    public function disableDeletionProtection($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->disableDeletionProtectionWithOptions($request, $runtime);
    }

    /**
     * Performs a shutdown of access logging for a specified load balancing instance.
     *
     * @param request - DisableLoadBalancerAccessLogRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DisableLoadBalancerAccessLogResponse
     *
     * @param DisableLoadBalancerAccessLogRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DisableLoadBalancerAccessLogResponse
     */
    public function disableLoadBalancerAccessLogWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$query['DryRun'] = $request->dryRun;
        }

        if (null !== $request->loadBalancerId) {
            @$query['LoadBalancerId'] = $request->loadBalancerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DisableLoadBalancerAccessLog',
            'version' => '2020-06-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DisableLoadBalancerAccessLogResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Performs a shutdown of access logging for a specified load balancing instance.
     *
     * @param request - DisableLoadBalancerAccessLogRequest
     *
     * @returns DisableLoadBalancerAccessLogResponse
     *
     * @param DisableLoadBalancerAccessLogRequest $request
     *
     * @return DisableLoadBalancerAccessLogResponse
     */
    public function disableLoadBalancerAccessLog($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->disableLoadBalancerAccessLogWithOptions($request, $runtime);
    }

    /**
     * Changes the type of the IPv6 address that is used by a dual-stack Application Load Balancer (ALB) instance from public to private.
     *
     * @remarks
     * ### Prerequisites
     * An ALB instance is created and IPv4/IPv6 dual stack is enabled for the instance. You can call the [CreateLoadBalancer](https://help.aliyun.com/document_detail/214358.html) operation and set **AddressIpVersion** to **DualStack** to create a dual-stack ALB instance.
     * > If you set **AddressIpVersion** to **DualStack**:
     * - If you set **AddressType** to **Internet**, the ALB instance uses a public IPv4 IP address and a private IPv6 address.
     * - If you set **AddressType** to **Intranet**, the ALB instance uses a private IPv4 IP address and a private IPv6 address.
     * ### Description
     * - After the DisableLoadBalancerIpv6Internet operation is called, the value of **Ipv6AddressType** is changed to **Intranet** and the type of the IPv6 address of the ALB instance is changed from public to private. If you upgrade the instance or the instance scales elastic network interfaces (ENIs) along with workloads, private IPv6 addresses are automatically enabled for the instance and the new ENIs. You can call the [GetLoadBalancerAttribute](https://help.aliyun.com/document_detail/214362.html) operation to query the value of **Ipv6AddressType**.
     * - **DisableLoadBalancerIpv6Internet** is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background. You can call the [GetLoadBalancerAttribute](https://help.aliyun.com/document_detail/214362.html) operation to query the status of the task.
     *   - If the ALB instance is in the **Configuring** state, the network type of the IPv6 address that is used by the ALB instance is being changed.
     *   - If the ALB instance is in the **Active** state, the network type of the IPv6 address that is used by the ALB instance is changed.
     *
     * @param request - DisableLoadBalancerIpv6InternetRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DisableLoadBalancerIpv6InternetResponse
     *
     * @param DisableLoadBalancerIpv6InternetRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return DisableLoadBalancerIpv6InternetResponse
     */
    public function disableLoadBalancerIpv6InternetWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$query['DryRun'] = $request->dryRun;
        }

        if (null !== $request->loadBalancerId) {
            @$query['LoadBalancerId'] = $request->loadBalancerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DisableLoadBalancerIpv6Internet',
            'version' => '2020-06-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DisableLoadBalancerIpv6InternetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Changes the type of the IPv6 address that is used by a dual-stack Application Load Balancer (ALB) instance from public to private.
     *
     * @remarks
     * ### Prerequisites
     * An ALB instance is created and IPv4/IPv6 dual stack is enabled for the instance. You can call the [CreateLoadBalancer](https://help.aliyun.com/document_detail/214358.html) operation and set **AddressIpVersion** to **DualStack** to create a dual-stack ALB instance.
     * > If you set **AddressIpVersion** to **DualStack**:
     * - If you set **AddressType** to **Internet**, the ALB instance uses a public IPv4 IP address and a private IPv6 address.
     * - If you set **AddressType** to **Intranet**, the ALB instance uses a private IPv4 IP address and a private IPv6 address.
     * ### Description
     * - After the DisableLoadBalancerIpv6Internet operation is called, the value of **Ipv6AddressType** is changed to **Intranet** and the type of the IPv6 address of the ALB instance is changed from public to private. If you upgrade the instance or the instance scales elastic network interfaces (ENIs) along with workloads, private IPv6 addresses are automatically enabled for the instance and the new ENIs. You can call the [GetLoadBalancerAttribute](https://help.aliyun.com/document_detail/214362.html) operation to query the value of **Ipv6AddressType**.
     * - **DisableLoadBalancerIpv6Internet** is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background. You can call the [GetLoadBalancerAttribute](https://help.aliyun.com/document_detail/214362.html) operation to query the status of the task.
     *   - If the ALB instance is in the **Configuring** state, the network type of the IPv6 address that is used by the ALB instance is being changed.
     *   - If the ALB instance is in the **Active** state, the network type of the IPv6 address that is used by the ALB instance is changed.
     *
     * @param request - DisableLoadBalancerIpv6InternetRequest
     *
     * @returns DisableLoadBalancerIpv6InternetResponse
     *
     * @param DisableLoadBalancerIpv6InternetRequest $request
     *
     * @return DisableLoadBalancerIpv6InternetResponse
     */
    public function disableLoadBalancerIpv6Internet($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->disableLoadBalancerIpv6InternetWithOptions($request, $runtime);
    }

    /**
     * Disassociates access control lists (ACLs) from a listener.
     *
     * @remarks
     * *DissociateAclsFromListener** is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background. You can call [ListAclRelations](https://help.aliyun.com/document_detail/213618.html) to query the status of an ACL.
     * *   If an ACL is in the **Dissociating** state, the ACL is being disassociated from the listener.
     * *   If an ACL is in the **Dissociated** state, the ACL is disassociated from the listener.
     *
     * @param request - DissociateAclsFromListenerRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DissociateAclsFromListenerResponse
     *
     * @param DissociateAclsFromListenerRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DissociateAclsFromListenerResponse
     */
    public function dissociateAclsFromListenerWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->aclIds) {
            @$query['AclIds'] = $request->aclIds;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$query['DryRun'] = $request->dryRun;
        }

        if (null !== $request->listenerId) {
            @$query['ListenerId'] = $request->listenerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DissociateAclsFromListener',
            'version' => '2020-06-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DissociateAclsFromListenerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Disassociates access control lists (ACLs) from a listener.
     *
     * @remarks
     * *DissociateAclsFromListener** is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background. You can call [ListAclRelations](https://help.aliyun.com/document_detail/213618.html) to query the status of an ACL.
     * *   If an ACL is in the **Dissociating** state, the ACL is being disassociated from the listener.
     * *   If an ACL is in the **Dissociated** state, the ACL is disassociated from the listener.
     *
     * @param request - DissociateAclsFromListenerRequest
     *
     * @returns DissociateAclsFromListenerResponse
     *
     * @param DissociateAclsFromListenerRequest $request
     *
     * @return DissociateAclsFromListenerResponse
     */
    public function dissociateAclsFromListener($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->dissociateAclsFromListenerWithOptions($request, $runtime);
    }

    /**
     * Dissociates one or more additional certificates from a listener.
     *
     * @remarks
     * *DissociateAdditionalCertificatesFromListener** is an asynchronous operation. After you send a request, the system returns a request ID, but the operation is still being performed in the background. You can call [](t2324486.xdita#)to query the status of the dissociation task:
     * - If an additional certificate is in the **Dissociating** state, the dissociation is in progress.
     * - If an additional certificate is in the **Dissociated** state, the dissociation is complete.
     *
     * @param request - DissociateAdditionalCertificatesFromListenerRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DissociateAdditionalCertificatesFromListenerResponse
     *
     * @param DissociateAdditionalCertificatesFromListenerRequest $request
     * @param RuntimeOptions                                      $runtime
     *
     * @return DissociateAdditionalCertificatesFromListenerResponse
     */
    public function dissociateAdditionalCertificatesFromListenerWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->certificates) {
            @$query['Certificates'] = $request->certificates;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$query['DryRun'] = $request->dryRun;
        }

        if (null !== $request->listenerId) {
            @$query['ListenerId'] = $request->listenerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DissociateAdditionalCertificatesFromListener',
            'version' => '2020-06-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DissociateAdditionalCertificatesFromListenerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Dissociates one or more additional certificates from a listener.
     *
     * @remarks
     * *DissociateAdditionalCertificatesFromListener** is an asynchronous operation. After you send a request, the system returns a request ID, but the operation is still being performed in the background. You can call [](t2324486.xdita#)to query the status of the dissociation task:
     * - If an additional certificate is in the **Dissociating** state, the dissociation is in progress.
     * - If an additional certificate is in the **Dissociated** state, the dissociation is complete.
     *
     * @param request - DissociateAdditionalCertificatesFromListenerRequest
     *
     * @returns DissociateAdditionalCertificatesFromListenerResponse
     *
     * @param DissociateAdditionalCertificatesFromListenerRequest $request
     *
     * @return DissociateAdditionalCertificatesFromListenerResponse
     */
    public function dissociateAdditionalCertificatesFromListener($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->dissociateAdditionalCertificatesFromListenerWithOptions($request, $runtime);
    }

    /**
     * Enables deletion protection for a specified resource.
     *
     * @param request - EnableDeletionProtectionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns EnableDeletionProtectionResponse
     *
     * @param EnableDeletionProtectionRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return EnableDeletionProtectionResponse
     */
    public function enableDeletionProtectionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$query['DryRun'] = $request->dryRun;
        }

        if (null !== $request->resourceId) {
            @$query['ResourceId'] = $request->resourceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'EnableDeletionProtection',
            'version' => '2020-06-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return EnableDeletionProtectionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Enables deletion protection for a specified resource.
     *
     * @param request - EnableDeletionProtectionRequest
     *
     * @returns EnableDeletionProtectionResponse
     *
     * @param EnableDeletionProtectionRequest $request
     *
     * @return EnableDeletionProtectionResponse
     */
    public function enableDeletionProtection($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableDeletionProtectionWithOptions($request, $runtime);
    }

    /**
     * Enables the access log feature for an Application Load Balancer (ALB) instance.
     *
     * @param request - EnableLoadBalancerAccessLogRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns EnableLoadBalancerAccessLogResponse
     *
     * @param EnableLoadBalancerAccessLogRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return EnableLoadBalancerAccessLogResponse
     */
    public function enableLoadBalancerAccessLogWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$query['DryRun'] = $request->dryRun;
        }

        if (null !== $request->loadBalancerId) {
            @$query['LoadBalancerId'] = $request->loadBalancerId;
        }

        if (null !== $request->logProject) {
            @$query['LogProject'] = $request->logProject;
        }

        if (null !== $request->logStore) {
            @$query['LogStore'] = $request->logStore;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'EnableLoadBalancerAccessLog',
            'version' => '2020-06-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return EnableLoadBalancerAccessLogResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Enables the access log feature for an Application Load Balancer (ALB) instance.
     *
     * @param request - EnableLoadBalancerAccessLogRequest
     *
     * @returns EnableLoadBalancerAccessLogResponse
     *
     * @param EnableLoadBalancerAccessLogRequest $request
     *
     * @return EnableLoadBalancerAccessLogResponse
     */
    public function enableLoadBalancerAccessLog($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableLoadBalancerAccessLogWithOptions($request, $runtime);
    }

    /**
     * Changes the type of the IPv6 address that is used by a dual-stack Application Load Balancer (ALB) instance from private to public.
     *
     * @remarks
     * ### Prerequisites
     * An ALB instance is created and IPv4/IPv6 dual stack is enabled for the instance. You can call the [CreateLoadBalancer](https://help.aliyun.com/document_detail/214358.html) operation and set **AddressIpVersion** to **DualStack** to create a dual-stack ALB instance.
     * > If you set **AddressIpVersion** to **DualStack**:
     * *   If you set **AddressType** to **Internet**, the ALB instance uses a public IPv4 IP address and a private IPv6 address.
     * *   If you set **AddressType** to **Intranet**, the ALB instance uses a private IPv4 IP address and a private IPv6 address.
     * ### Description
     * *   After the EnableLoadBalancerIpv6Internet operation is called, the value of **Ipv6AddressType** is changed to **Internet** and the type of the IPv6 address of the ALB instance is changed from private to public. If you upgrade the instance or the instance scales elastic network interfaces (ENIs) along with workloads, public IPv6 addresses are automatically enabled for the instance and the new ENIs. You can call the [GetLoadBalancerAttribute](https://help.aliyun.com/document_detail/214362.html) operation to query the value of **Ipv6AddressType**.
     * *   **EnableLoadBalancerIpv6Internet** is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background. You can call the [GetLoadBalancerAttribute](https://help.aliyun.com/document_detail/214362.html) operation to query the status of the task.
     *     *   If the ALB instance is in the **Configuring** state, the network type of the IPv6 address that is used by the ALB instance is being changed.
     *     *   If the ALB instance is in the **Active** state, the network type of the IPv6 address that is used by the ALB instance is changed.
     *
     * @param request - EnableLoadBalancerIpv6InternetRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns EnableLoadBalancerIpv6InternetResponse
     *
     * @param EnableLoadBalancerIpv6InternetRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return EnableLoadBalancerIpv6InternetResponse
     */
    public function enableLoadBalancerIpv6InternetWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$query['DryRun'] = $request->dryRun;
        }

        if (null !== $request->loadBalancerId) {
            @$query['LoadBalancerId'] = $request->loadBalancerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'EnableLoadBalancerIpv6Internet',
            'version' => '2020-06-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return EnableLoadBalancerIpv6InternetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Changes the type of the IPv6 address that is used by a dual-stack Application Load Balancer (ALB) instance from private to public.
     *
     * @remarks
     * ### Prerequisites
     * An ALB instance is created and IPv4/IPv6 dual stack is enabled for the instance. You can call the [CreateLoadBalancer](https://help.aliyun.com/document_detail/214358.html) operation and set **AddressIpVersion** to **DualStack** to create a dual-stack ALB instance.
     * > If you set **AddressIpVersion** to **DualStack**:
     * *   If you set **AddressType** to **Internet**, the ALB instance uses a public IPv4 IP address and a private IPv6 address.
     * *   If you set **AddressType** to **Intranet**, the ALB instance uses a private IPv4 IP address and a private IPv6 address.
     * ### Description
     * *   After the EnableLoadBalancerIpv6Internet operation is called, the value of **Ipv6AddressType** is changed to **Internet** and the type of the IPv6 address of the ALB instance is changed from private to public. If you upgrade the instance or the instance scales elastic network interfaces (ENIs) along with workloads, public IPv6 addresses are automatically enabled for the instance and the new ENIs. You can call the [GetLoadBalancerAttribute](https://help.aliyun.com/document_detail/214362.html) operation to query the value of **Ipv6AddressType**.
     * *   **EnableLoadBalancerIpv6Internet** is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background. You can call the [GetLoadBalancerAttribute](https://help.aliyun.com/document_detail/214362.html) operation to query the status of the task.
     *     *   If the ALB instance is in the **Configuring** state, the network type of the IPv6 address that is used by the ALB instance is being changed.
     *     *   If the ALB instance is in the **Active** state, the network type of the IPv6 address that is used by the ALB instance is changed.
     *
     * @param request - EnableLoadBalancerIpv6InternetRequest
     *
     * @returns EnableLoadBalancerIpv6InternetResponse
     *
     * @param EnableLoadBalancerIpv6InternetRequest $request
     *
     * @return EnableLoadBalancerIpv6InternetResponse
     */
    public function enableLoadBalancerIpv6Internet($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableLoadBalancerIpv6InternetWithOptions($request, $runtime);
    }

    /**
     * Queries the details about a health check template.
     *
     * @param request - GetHealthCheckTemplateAttributeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetHealthCheckTemplateAttributeResponse
     *
     * @param GetHealthCheckTemplateAttributeRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return GetHealthCheckTemplateAttributeResponse
     */
    public function getHealthCheckTemplateAttributeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->healthCheckTemplateId) {
            @$query['HealthCheckTemplateId'] = $request->healthCheckTemplateId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetHealthCheckTemplateAttribute',
            'version' => '2020-06-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetHealthCheckTemplateAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details about a health check template.
     *
     * @param request - GetHealthCheckTemplateAttributeRequest
     *
     * @returns GetHealthCheckTemplateAttributeResponse
     *
     * @param GetHealthCheckTemplateAttributeRequest $request
     *
     * @return GetHealthCheckTemplateAttributeResponse
     */
    public function getHealthCheckTemplateAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getHealthCheckTemplateAttributeWithOptions($request, $runtime);
    }

    /**
     * Queries the details of a listener.
     *
     * @param request - GetListenerAttributeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetListenerAttributeResponse
     *
     * @param GetListenerAttributeRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return GetListenerAttributeResponse
     */
    public function getListenerAttributeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->listenerId) {
            @$query['ListenerId'] = $request->listenerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetListenerAttribute',
            'version' => '2020-06-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetListenerAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of a listener.
     *
     * @param request - GetListenerAttributeRequest
     *
     * @returns GetListenerAttributeResponse
     *
     * @param GetListenerAttributeRequest $request
     *
     * @return GetListenerAttributeResponse
     */
    public function getListenerAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getListenerAttributeWithOptions($request, $runtime);
    }

    /**
     * Queries the health check status of a listener and its forwarding rules.
     *
     * @param request - GetListenerHealthStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetListenerHealthStatusResponse
     *
     * @param GetListenerHealthStatusRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return GetListenerHealthStatusResponse
     */
    public function getListenerHealthStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->includeRule) {
            @$query['IncludeRule'] = $request->includeRule;
        }

        if (null !== $request->listenerId) {
            @$query['ListenerId'] = $request->listenerId;
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
            'action' => 'GetListenerHealthStatus',
            'version' => '2020-06-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetListenerHealthStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the health check status of a listener and its forwarding rules.
     *
     * @param request - GetListenerHealthStatusRequest
     *
     * @returns GetListenerHealthStatusResponse
     *
     * @param GetListenerHealthStatusRequest $request
     *
     * @return GetListenerHealthStatusResponse
     */
    public function getListenerHealthStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getListenerHealthStatusWithOptions($request, $runtime);
    }

    /**
     * Queries the details of an Application Load Balancer (ALB) instance.
     *
     * @param request - GetLoadBalancerAttributeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetLoadBalancerAttributeResponse
     *
     * @param GetLoadBalancerAttributeRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return GetLoadBalancerAttributeResponse
     */
    public function getLoadBalancerAttributeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->loadBalancerId) {
            @$query['LoadBalancerId'] = $request->loadBalancerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetLoadBalancerAttribute',
            'version' => '2020-06-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetLoadBalancerAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of an Application Load Balancer (ALB) instance.
     *
     * @param request - GetLoadBalancerAttributeRequest
     *
     * @returns GetLoadBalancerAttributeResponse
     *
     * @param GetLoadBalancerAttributeRequest $request
     *
     * @return GetLoadBalancerAttributeResponse
     */
    public function getLoadBalancerAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getLoadBalancerAttributeWithOptions($request, $runtime);
    }

    /**
     * Queries AScript rules.
     *
     * @param request - ListAScriptsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAScriptsResponse
     *
     * @param ListAScriptsRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ListAScriptsResponse
     */
    public function listAScriptsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->AScriptIds) {
            @$query['AScriptIds'] = $request->AScriptIds;
        }

        if (null !== $request->AScriptNames) {
            @$query['AScriptNames'] = $request->AScriptNames;
        }

        if (null !== $request->listenerIds) {
            @$query['ListenerIds'] = $request->listenerIds;
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
            'action' => 'ListAScripts',
            'version' => '2020-06-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListAScriptsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries AScript rules.
     *
     * @param request - ListAScriptsRequest
     *
     * @returns ListAScriptsResponse
     *
     * @param ListAScriptsRequest $request
     *
     * @return ListAScriptsResponse
     */
    public function listAScripts($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAScriptsWithOptions($request, $runtime);
    }

    /**
     * Queries the entries of an access control list (ACL).
     *
     * @param request - ListAclEntriesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAclEntriesResponse
     *
     * @param ListAclEntriesRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ListAclEntriesResponse
     */
    public function listAclEntriesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->aclId) {
            @$query['AclId'] = $request->aclId;
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
            'action' => 'ListAclEntries',
            'version' => '2020-06-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListAclEntriesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the entries of an access control list (ACL).
     *
     * @param request - ListAclEntriesRequest
     *
     * @returns ListAclEntriesResponse
     *
     * @param ListAclEntriesRequest $request
     *
     * @return ListAclEntriesResponse
     */
    public function listAclEntries($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAclEntriesWithOptions($request, $runtime);
    }

    /**
     * Queries the listeners that are associated with access control lists (ACLs).
     *
     * @param request - ListAclRelationsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAclRelationsResponse
     *
     * @param ListAclRelationsRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListAclRelationsResponse
     */
    public function listAclRelationsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->aclIds) {
            @$query['AclIds'] = $request->aclIds;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListAclRelations',
            'version' => '2020-06-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListAclRelationsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the listeners that are associated with access control lists (ACLs).
     *
     * @param request - ListAclRelationsRequest
     *
     * @returns ListAclRelationsResponse
     *
     * @param ListAclRelationsRequest $request
     *
     * @return ListAclRelationsResponse
     */
    public function listAclRelations($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAclRelationsWithOptions($request, $runtime);
    }

    /**
     * Queries the access control lists (ACLs) in a region.
     *
     * @param request - ListAclsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAclsResponse
     *
     * @param ListAclsRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return ListAclsResponse
     */
    public function listAclsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->aclIds) {
            @$query['AclIds'] = $request->aclIds;
        }

        if (null !== $request->aclNames) {
            @$query['AclNames'] = $request->aclNames;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListAcls',
            'version' => '2020-06-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListAclsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the access control lists (ACLs) in a region.
     *
     * @param request - ListAclsRequest
     *
     * @returns ListAclsResponse
     *
     * @param ListAclsRequest $request
     *
     * @return ListAclsResponse
     */
    public function listAcls($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAclsWithOptions($request, $runtime);
    }

    /**
     * Queries asynchronous tasks in a region.
     *
     * @param request - ListAsynJobsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAsynJobsResponse
     *
     * @param ListAsynJobsRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ListAsynJobsResponse
     */
    public function listAsynJobsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->apiName) {
            @$query['ApiName'] = $request->apiName;
        }

        if (null !== $request->beginTime) {
            @$query['BeginTime'] = $request->beginTime;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->jobIds) {
            @$query['JobIds'] = $request->jobIds;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->resourceIds) {
            @$query['ResourceIds'] = $request->resourceIds;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListAsynJobs',
            'version' => '2020-06-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListAsynJobsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries asynchronous tasks in a region.
     *
     * @param request - ListAsynJobsRequest
     *
     * @returns ListAsynJobsResponse
     *
     * @param ListAsynJobsRequest $request
     *
     * @return ListAsynJobsResponse
     */
    public function listAsynJobs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAsynJobsWithOptions($request, $runtime);
    }

    /**
     * Queries the health check templates in a specified region.
     *
     * @param request - ListHealthCheckTemplatesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListHealthCheckTemplatesResponse
     *
     * @param ListHealthCheckTemplatesRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ListHealthCheckTemplatesResponse
     */
    public function listHealthCheckTemplatesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->healthCheckTemplateIds) {
            @$query['HealthCheckTemplateIds'] = $request->healthCheckTemplateIds;
        }

        if (null !== $request->healthCheckTemplateNames) {
            @$query['HealthCheckTemplateNames'] = $request->healthCheckTemplateNames;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListHealthCheckTemplates',
            'version' => '2020-06-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListHealthCheckTemplatesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the health check templates in a specified region.
     *
     * @param request - ListHealthCheckTemplatesRequest
     *
     * @returns ListHealthCheckTemplatesResponse
     *
     * @param ListHealthCheckTemplatesRequest $request
     *
     * @return ListHealthCheckTemplatesResponse
     */
    public function listHealthCheckTemplates($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listHealthCheckTemplatesWithOptions($request, $runtime);
    }

    /**
     * Queries the certificates that are associated with a listener, including additional certificates and the default certificate.
     *
     * @param request - ListListenerCertificatesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListListenerCertificatesResponse
     *
     * @param ListListenerCertificatesRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ListListenerCertificatesResponse
     */
    public function listListenerCertificatesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->certificateIds) {
            @$query['CertificateIds'] = $request->certificateIds;
        }

        if (null !== $request->certificateType) {
            @$query['CertificateType'] = $request->certificateType;
        }

        if (null !== $request->listenerId) {
            @$query['ListenerId'] = $request->listenerId;
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
            'action' => 'ListListenerCertificates',
            'version' => '2020-06-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListListenerCertificatesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the certificates that are associated with a listener, including additional certificates and the default certificate.
     *
     * @param request - ListListenerCertificatesRequest
     *
     * @returns ListListenerCertificatesResponse
     *
     * @param ListListenerCertificatesRequest $request
     *
     * @return ListListenerCertificatesResponse
     */
    public function listListenerCertificates($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listListenerCertificatesWithOptions($request, $runtime);
    }

    /**
     * Queries the listeners in a specified region.
     *
     * @param request - ListListenersRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListListenersResponse
     *
     * @param ListListenersRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ListListenersResponse
     */
    public function listListenersWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->listenerIds) {
            @$query['ListenerIds'] = $request->listenerIds;
        }

        if (null !== $request->listenerProtocol) {
            @$query['ListenerProtocol'] = $request->listenerProtocol;
        }

        if (null !== $request->loadBalancerIds) {
            @$query['LoadBalancerIds'] = $request->loadBalancerIds;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListListeners',
            'version' => '2020-06-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListListenersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the listeners in a specified region.
     *
     * @param request - ListListenersRequest
     *
     * @returns ListListenersResponse
     *
     * @param ListListenersRequest $request
     *
     * @return ListListenersResponse
     */
    public function listListeners($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listListenersWithOptions($request, $runtime);
    }

    /**
     * Queries instance configurations.
     *
     * @param request - ListLoadBalancersRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListLoadBalancersResponse
     *
     * @param ListLoadBalancersRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ListLoadBalancersResponse
     */
    public function listLoadBalancersWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->addressIpVersion) {
            @$query['AddressIpVersion'] = $request->addressIpVersion;
        }

        if (null !== $request->addressType) {
            @$query['AddressType'] = $request->addressType;
        }

        if (null !== $request->DNSName) {
            @$query['DNSName'] = $request->DNSName;
        }

        if (null !== $request->ipv6AddressType) {
            @$query['Ipv6AddressType'] = $request->ipv6AddressType;
        }

        if (null !== $request->loadBalancerBussinessStatus) {
            @$query['LoadBalancerBussinessStatus'] = $request->loadBalancerBussinessStatus;
        }

        if (null !== $request->loadBalancerIds) {
            @$query['LoadBalancerIds'] = $request->loadBalancerIds;
        }

        if (null !== $request->loadBalancerNames) {
            @$query['LoadBalancerNames'] = $request->loadBalancerNames;
        }

        if (null !== $request->loadBalancerStatus) {
            @$query['LoadBalancerStatus'] = $request->loadBalancerStatus;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->payType) {
            @$query['PayType'] = $request->payType;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        if (null !== $request->vpcIds) {
            @$query['VpcIds'] = $request->vpcIds;
        }

        if (null !== $request->zoneId) {
            @$query['ZoneId'] = $request->zoneId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListLoadBalancers',
            'version' => '2020-06-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListLoadBalancersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries instance configurations.
     *
     * @param request - ListLoadBalancersRequest
     *
     * @returns ListLoadBalancersResponse
     *
     * @param ListLoadBalancersRequest $request
     *
     * @return ListLoadBalancersResponse
     */
    public function listLoadBalancers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listLoadBalancersWithOptions($request, $runtime);
    }

    /**
     * Queries forwarding rules in a specified region.
     *
     * @param request - ListRulesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListRulesResponse
     *
     * @param ListRulesRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return ListRulesResponse
     */
    public function listRulesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->direction) {
            @$query['Direction'] = $request->direction;
        }

        if (null !== $request->listenerIds) {
            @$query['ListenerIds'] = $request->listenerIds;
        }

        if (null !== $request->loadBalancerIds) {
            @$query['LoadBalancerIds'] = $request->loadBalancerIds;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->ruleIds) {
            @$query['RuleIds'] = $request->ruleIds;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListRules',
            'version' => '2020-06-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries forwarding rules in a specified region.
     *
     * @param request - ListRulesRequest
     *
     * @returns ListRulesResponse
     *
     * @param ListRulesRequest $request
     *
     * @return ListRulesResponse
     */
    public function listRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listRulesWithOptions($request, $runtime);
    }

    /**
     * Queries custom security policies in a region.
     *
     * @param request - ListSecurityPoliciesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListSecurityPoliciesResponse
     *
     * @param ListSecurityPoliciesRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ListSecurityPoliciesResponse
     */
    public function listSecurityPoliciesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->securityPolicyIds) {
            @$query['SecurityPolicyIds'] = $request->securityPolicyIds;
        }

        if (null !== $request->securityPolicyNames) {
            @$query['SecurityPolicyNames'] = $request->securityPolicyNames;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListSecurityPolicies',
            'version' => '2020-06-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListSecurityPoliciesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries custom security policies in a region.
     *
     * @param request - ListSecurityPoliciesRequest
     *
     * @returns ListSecurityPoliciesResponse
     *
     * @param ListSecurityPoliciesRequest $request
     *
     * @return ListSecurityPoliciesResponse
     */
    public function listSecurityPolicies($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSecurityPoliciesWithOptions($request, $runtime);
    }

    /**
     * Queries the listeners that are associated with security policies.
     *
     * @param request - ListSecurityPolicyRelationsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListSecurityPolicyRelationsResponse
     *
     * @param ListSecurityPolicyRelationsRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return ListSecurityPolicyRelationsResponse
     */
    public function listSecurityPolicyRelationsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->securityPolicyIds) {
            @$query['SecurityPolicyIds'] = $request->securityPolicyIds;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListSecurityPolicyRelations',
            'version' => '2020-06-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListSecurityPolicyRelationsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the listeners that are associated with security policies.
     *
     * @param request - ListSecurityPolicyRelationsRequest
     *
     * @returns ListSecurityPolicyRelationsResponse
     *
     * @param ListSecurityPolicyRelationsRequest $request
     *
     * @return ListSecurityPolicyRelationsResponse
     */
    public function listSecurityPolicyRelations($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSecurityPolicyRelationsWithOptions($request, $runtime);
    }

    /**
     * Queries the servers in a server group.
     *
     * @param request - ListServerGroupServersRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListServerGroupServersResponse
     *
     * @param ListServerGroupServersRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ListServerGroupServersResponse
     */
    public function listServerGroupServersWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->serverGroupId) {
            @$query['ServerGroupId'] = $request->serverGroupId;
        }

        if (null !== $request->serverIds) {
            @$query['ServerIds'] = $request->serverIds;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListServerGroupServers',
            'version' => '2020-06-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListServerGroupServersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the servers in a server group.
     *
     * @param request - ListServerGroupServersRequest
     *
     * @returns ListServerGroupServersResponse
     *
     * @param ListServerGroupServersRequest $request
     *
     * @return ListServerGroupServersResponse
     */
    public function listServerGroupServers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listServerGroupServersWithOptions($request, $runtime);
    }

    /**
     * Queries server groups.
     *
     * @param request - ListServerGroupsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListServerGroupsResponse
     *
     * @param ListServerGroupsRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListServerGroupsResponse
     */
    public function listServerGroupsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->serverGroupIds) {
            @$query['ServerGroupIds'] = $request->serverGroupIds;
        }

        if (null !== $request->serverGroupNames) {
            @$query['ServerGroupNames'] = $request->serverGroupNames;
        }

        if (null !== $request->serverGroupType) {
            @$query['ServerGroupType'] = $request->serverGroupType;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        if (null !== $request->vpcId) {
            @$query['VpcId'] = $request->vpcId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListServerGroups',
            'version' => '2020-06-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListServerGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries server groups.
     *
     * @param request - ListServerGroupsRequest
     *
     * @returns ListServerGroupsResponse
     *
     * @param ListServerGroupsRequest $request
     *
     * @return ListServerGroupsResponse
     */
    public function listServerGroups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listServerGroupsWithOptions($request, $runtime);
    }

    /**
     * Queries system security policies in a region.
     *
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListSystemSecurityPoliciesResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return ListSystemSecurityPoliciesResponse
     */
    public function listSystemSecurityPoliciesWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'ListSystemSecurityPolicies',
            'version' => '2020-06-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListSystemSecurityPoliciesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries system security policies in a region.
     *
     * @returns ListSystemSecurityPoliciesResponse
     *
     * @return ListSystemSecurityPoliciesResponse
     */
    public function listSystemSecurityPolicies()
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSystemSecurityPoliciesWithOptions($runtime);
    }

    /**
     * Queries tag keys.
     *
     * @param request - ListTagKeysRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListTagKeysResponse
     *
     * @param ListTagKeysRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return ListTagKeysResponse
     */
    public function listTagKeysWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->category) {
            @$query['Category'] = $request->category;
        }

        if (null !== $request->keyword) {
            @$query['Keyword'] = $request->keyword;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListTagKeys',
            'version' => '2020-06-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListTagKeysResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries tag keys.
     *
     * @param request - ListTagKeysRequest
     *
     * @returns ListTagKeysResponse
     *
     * @param ListTagKeysRequest $request
     *
     * @return ListTagKeysResponse
     */
    public function listTagKeys($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTagKeysWithOptions($request, $runtime);
    }

    /**
     * Queries the tags of resources.
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
        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->resourceId) {
            @$query['ResourceId'] = $request->resourceId;
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
            'version' => '2020-06-16',
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
     * Queries the tags of resources.
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
     * Queries tag values.
     *
     * @param request - ListTagValuesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListTagValuesResponse
     *
     * @param ListTagValuesRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ListTagValuesResponse
     */
    public function listTagValuesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->resourceId) {
            @$query['ResourceId'] = $request->resourceId;
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
            'action' => 'ListTagValues',
            'version' => '2020-06-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListTagValuesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries tag values.
     *
     * @param request - ListTagValuesRequest
     *
     * @returns ListTagValuesResponse
     *
     * @param ListTagValuesRequest $request
     *
     * @return ListTagValuesResponse
     */
    public function listTagValues($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTagValuesWithOptions($request, $runtime);
    }

    /**
     * Adds an Application Load Balancer (ALB) instance to a security group.
     *
     * @remarks
     *   By default, security groups are unavailable. To use security groups, contact your account manager.
     * *   Make sure that a security group is created. For more information about how to create security groups, see [CreateSecurityGroup](https://help.aliyun.com/document_detail/2679843.html).
     * *   Each ALB instance can be added to at most four security groups.
     * *   To query the security groups of an ALB instance, call the [GetLoadBalancerAttribute](https://help.aliyun.com/document_detail/2254835.html) operation.
     * *   GetLoadBalancerAttribute is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background. You can call the [ListAsynJobs](https://help.aliyun.com/document_detail/2254893.html) operation to query the status of the task.
     *     *   If the task is in the Succeeded state, the ALB instance is added to the security group.
     *     *   If the task is in the Processing state, the ALB instance is being added to the security group. In this case, you can query the task but cannot perform other operations.
     *
     * @param request - LoadBalancerJoinSecurityGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns LoadBalancerJoinSecurityGroupResponse
     *
     * @param LoadBalancerJoinSecurityGroupRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return LoadBalancerJoinSecurityGroupResponse
     */
    public function loadBalancerJoinSecurityGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$query['DryRun'] = $request->dryRun;
        }

        if (null !== $request->loadBalancerId) {
            @$query['LoadBalancerId'] = $request->loadBalancerId;
        }

        if (null !== $request->securityGroupIds) {
            @$query['SecurityGroupIds'] = $request->securityGroupIds;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'LoadBalancerJoinSecurityGroup',
            'version' => '2020-06-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return LoadBalancerJoinSecurityGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Adds an Application Load Balancer (ALB) instance to a security group.
     *
     * @remarks
     *   By default, security groups are unavailable. To use security groups, contact your account manager.
     * *   Make sure that a security group is created. For more information about how to create security groups, see [CreateSecurityGroup](https://help.aliyun.com/document_detail/2679843.html).
     * *   Each ALB instance can be added to at most four security groups.
     * *   To query the security groups of an ALB instance, call the [GetLoadBalancerAttribute](https://help.aliyun.com/document_detail/2254835.html) operation.
     * *   GetLoadBalancerAttribute is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background. You can call the [ListAsynJobs](https://help.aliyun.com/document_detail/2254893.html) operation to query the status of the task.
     *     *   If the task is in the Succeeded state, the ALB instance is added to the security group.
     *     *   If the task is in the Processing state, the ALB instance is being added to the security group. In this case, you can query the task but cannot perform other operations.
     *
     * @param request - LoadBalancerJoinSecurityGroupRequest
     *
     * @returns LoadBalancerJoinSecurityGroupResponse
     *
     * @param LoadBalancerJoinSecurityGroupRequest $request
     *
     * @return LoadBalancerJoinSecurityGroupResponse
     */
    public function loadBalancerJoinSecurityGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->loadBalancerJoinSecurityGroupWithOptions($request, $runtime);
    }

    /**
     * Removes an Application Load Balancer (ALB) instance from a security group.
     *
     * @remarks
     * - LoadBalancerLeaveSecurityGroup is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background. You can call the [ListAsynJobs](https://help.aliyun.com/document_detail/2254893.html) operation to query the status of the task.
     *   - If the task is in the Succeeded state, the ALB instance is removed from the security group.
     *   - If the task is in the Processing state, the ALB instance is being removed from the security group. In this case, you can query the task but cannot perform other operations.
     *
     * @param request - LoadBalancerLeaveSecurityGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns LoadBalancerLeaveSecurityGroupResponse
     *
     * @param LoadBalancerLeaveSecurityGroupRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return LoadBalancerLeaveSecurityGroupResponse
     */
    public function loadBalancerLeaveSecurityGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$query['DryRun'] = $request->dryRun;
        }

        if (null !== $request->loadBalancerId) {
            @$query['LoadBalancerId'] = $request->loadBalancerId;
        }

        if (null !== $request->securityGroupIds) {
            @$query['SecurityGroupIds'] = $request->securityGroupIds;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'LoadBalancerLeaveSecurityGroup',
            'version' => '2020-06-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return LoadBalancerLeaveSecurityGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Removes an Application Load Balancer (ALB) instance from a security group.
     *
     * @remarks
     * - LoadBalancerLeaveSecurityGroup is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background. You can call the [ListAsynJobs](https://help.aliyun.com/document_detail/2254893.html) operation to query the status of the task.
     *   - If the task is in the Succeeded state, the ALB instance is removed from the security group.
     *   - If the task is in the Processing state, the ALB instance is being removed from the security group. In this case, you can query the task but cannot perform other operations.
     *
     * @param request - LoadBalancerLeaveSecurityGroupRequest
     *
     * @returns LoadBalancerLeaveSecurityGroupResponse
     *
     * @param LoadBalancerLeaveSecurityGroupRequest $request
     *
     * @return LoadBalancerLeaveSecurityGroupResponse
     */
    public function loadBalancerLeaveSecurityGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->loadBalancerLeaveSecurityGroupWithOptions($request, $runtime);
    }

    /**
     * Creates or modifies a capacity reservation.
     *
     * @remarks
     * *ModifyCapacityReservation** is an asynchronous operation. The system returns a request ID, but the capacity reservation is not yet complete and the reservation task continues to run in the background. You can call DescribeCapacityReservation to query the status of the capacity reservation:
     *    - **Pending**: The capacity reservation is in progress.
     *    - **Provisioned**: The capacity reservation is complete.
     *    - **Rebalancing**: The capacity reservation is being redistributed across zones.
     *
     * @param request - ModifyCapacityReservationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyCapacityReservationResponse
     *
     * @param ModifyCapacityReservationRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ModifyCapacityReservationResponse
     */
    public function modifyCapacityReservationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$query['DryRun'] = $request->dryRun;
        }

        if (null !== $request->loadBalancerId) {
            @$query['LoadBalancerId'] = $request->loadBalancerId;
        }

        if (null !== $request->minimumLoadBalancerCapacity) {
            @$query['MinimumLoadBalancerCapacity'] = $request->minimumLoadBalancerCapacity;
        }

        if (null !== $request->resetCapacityReservation) {
            @$query['ResetCapacityReservation'] = $request->resetCapacityReservation;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyCapacityReservation',
            'version' => '2020-06-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyCapacityReservationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates or modifies a capacity reservation.
     *
     * @remarks
     * *ModifyCapacityReservation** is an asynchronous operation. The system returns a request ID, but the capacity reservation is not yet complete and the reservation task continues to run in the background. You can call DescribeCapacityReservation to query the status of the capacity reservation:
     *    - **Pending**: The capacity reservation is in progress.
     *    - **Provisioned**: The capacity reservation is complete.
     *    - **Rebalancing**: The capacity reservation is being redistributed across zones.
     *
     * @param request - ModifyCapacityReservationRequest
     *
     * @returns ModifyCapacityReservationResponse
     *
     * @param ModifyCapacityReservationRequest $request
     *
     * @return ModifyCapacityReservationResponse
     */
    public function modifyCapacityReservation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyCapacityReservationWithOptions($request, $runtime);
    }

    /**
     * Moves a resource to another resource group.
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
        $query = [];
        if (null !== $request->newResourceGroupId) {
            @$query['NewResourceGroupId'] = $request->newResourceGroupId;
        }

        if (null !== $request->resourceId) {
            @$query['ResourceId'] = $request->resourceId;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'MoveResourceGroup',
            'version' => '2020-06-16',
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
     * Moves a resource to another resource group.
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
     * Removes entries from an access control list (ACL).
     *
     * @remarks
     * *RemoveEntriesFromAcl** is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background. You can call the [ListAclEntries](https://help.aliyun.com/document_detail/213616.html) operation to query the status of the task.
     * *   If an ACL is in the **Removing** state, the entries are being removed.
     * *   If an ACL cannot be found, the entries are removed.
     *
     * @param request - RemoveEntriesFromAclRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RemoveEntriesFromAclResponse
     *
     * @param RemoveEntriesFromAclRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return RemoveEntriesFromAclResponse
     */
    public function removeEntriesFromAclWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->aclId) {
            @$query['AclId'] = $request->aclId;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$query['DryRun'] = $request->dryRun;
        }

        if (null !== $request->entries) {
            @$query['Entries'] = $request->entries;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RemoveEntriesFromAcl',
            'version' => '2020-06-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RemoveEntriesFromAclResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Removes entries from an access control list (ACL).
     *
     * @remarks
     * *RemoveEntriesFromAcl** is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background. You can call the [ListAclEntries](https://help.aliyun.com/document_detail/213616.html) operation to query the status of the task.
     * *   If an ACL is in the **Removing** state, the entries are being removed.
     * *   If an ACL cannot be found, the entries are removed.
     *
     * @param request - RemoveEntriesFromAclRequest
     *
     * @returns RemoveEntriesFromAclResponse
     *
     * @param RemoveEntriesFromAclRequest $request
     *
     * @return RemoveEntriesFromAclResponse
     */
    public function removeEntriesFromAcl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeEntriesFromAclWithOptions($request, $runtime);
    }

    /**
     * Removes backend servers from a server group.
     *
     * @remarks
     * *RemoveServersFromServerGroup** is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background.
     * 1. You can call [ListServerGroups](https://help.aliyun.com/document_detail/2254862.html) to query the status of a server group.
     *    - If the server group is in the **Configuring** state, the server group is being modified.
     *    - If the server group is in the **Available** state, the server group is running.
     * 2. You can call [ListServerGroupServers](https://help.aliyun.com/document_detail/2254863.html) to query the status of a backend server.
     *    - If the backend server is in the **Removing** state, the backend server is being removed from the server group.
     *    - If the backend server cannot be found, the backend server is no longer in the server group.
     *
     * @param request - RemoveServersFromServerGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RemoveServersFromServerGroupResponse
     *
     * @param RemoveServersFromServerGroupRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return RemoveServersFromServerGroupResponse
     */
    public function removeServersFromServerGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$query['DryRun'] = $request->dryRun;
        }

        if (null !== $request->serverGroupId) {
            @$query['ServerGroupId'] = $request->serverGroupId;
        }

        if (null !== $request->servers) {
            @$query['Servers'] = $request->servers;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RemoveServersFromServerGroup',
            'version' => '2020-06-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RemoveServersFromServerGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Removes backend servers from a server group.
     *
     * @remarks
     * *RemoveServersFromServerGroup** is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background.
     * 1. You can call [ListServerGroups](https://help.aliyun.com/document_detail/2254862.html) to query the status of a server group.
     *    - If the server group is in the **Configuring** state, the server group is being modified.
     *    - If the server group is in the **Available** state, the server group is running.
     * 2. You can call [ListServerGroupServers](https://help.aliyun.com/document_detail/2254863.html) to query the status of a backend server.
     *    - If the backend server is in the **Removing** state, the backend server is being removed from the server group.
     *    - If the backend server cannot be found, the backend server is no longer in the server group.
     *
     * @param request - RemoveServersFromServerGroupRequest
     *
     * @returns RemoveServersFromServerGroupResponse
     *
     * @param RemoveServersFromServerGroupRequest $request
     *
     * @return RemoveServersFromServerGroupResponse
     */
    public function removeServersFromServerGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeServersFromServerGroupWithOptions($request, $runtime);
    }

    /**
     * Replaces backend servers in a backend server group.
     *
     * @remarks
     * The **ReplaceServersInServerGroup** operation is asynchronous. After a request ID is returned, the backend server replacement task is still being processed in the background.
     * 1. You can call [ListServerGroups](https://help.aliyun.com/document_detail/213627.html) to query the status of a server group:
     *     - If the server group is in the **Configuring** state, the server group is being modified.
     *     - If the server group is in the **Available** state, the server group is running.
     * 2. You can call [ListServerGroupServers](https://help.aliyun.com/document_detail/213628.html) to query the status of a backend server:
     *     - If the backend server is in the **Replacing** state, the server group is removing the server and adding a new server.
     *     - If the backend server is in the **Available** state, the backend server is running.
     *
     * @param request - ReplaceServersInServerGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ReplaceServersInServerGroupResponse
     *
     * @param ReplaceServersInServerGroupRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return ReplaceServersInServerGroupResponse
     */
    public function replaceServersInServerGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$query['DryRun'] = $request->dryRun;
        }

        if (null !== $request->removedServers) {
            @$query['RemovedServers'] = $request->removedServers;
        }

        if (null !== $request->serverGroupId) {
            @$query['ServerGroupId'] = $request->serverGroupId;
        }

        $body = [];
        $bodyFlat = [];
        if (null !== $request->addedServers) {
            @$bodyFlat['AddedServers'] = $request->addedServers;
        }

        $body = Dara::merge([
        ], $body, Utils::query($bodyFlat));
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ReplaceServersInServerGroup',
            'version' => '2020-06-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ReplaceServersInServerGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Replaces backend servers in a backend server group.
     *
     * @remarks
     * The **ReplaceServersInServerGroup** operation is asynchronous. After a request ID is returned, the backend server replacement task is still being processed in the background.
     * 1. You can call [ListServerGroups](https://help.aliyun.com/document_detail/213627.html) to query the status of a server group:
     *     - If the server group is in the **Configuring** state, the server group is being modified.
     *     - If the server group is in the **Available** state, the server group is running.
     * 2. You can call [ListServerGroupServers](https://help.aliyun.com/document_detail/213628.html) to query the status of a backend server:
     *     - If the backend server is in the **Replacing** state, the server group is removing the server and adding a new server.
     *     - If the backend server is in the **Available** state, the backend server is running.
     *
     * @param request - ReplaceServersInServerGroupRequest
     *
     * @returns ReplaceServersInServerGroupResponse
     *
     * @param ReplaceServersInServerGroupRequest $request
     *
     * @return ReplaceServersInServerGroupResponse
     */
    public function replaceServersInServerGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->replaceServersInServerGroupWithOptions($request, $runtime);
    }

    /**
     * Starts the specified listener.
     *
     * @remarks
     * The **StartListener** API operation is asynchronous. The system returns a request ID, but the listener has not been started and the start task is still running in the background. You can call [GetListenerAttribute](https://help.aliyun.com/document_detail/2254865.html) to query the start status of the listener:
     * - If the listener is in the **Configuring** state, the listener is being started.
     * - If the listener is in the **Running** state, the listener is started.
     *
     * @param request - StartListenerRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StartListenerResponse
     *
     * @param StartListenerRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return StartListenerResponse
     */
    public function startListenerWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$query['DryRun'] = $request->dryRun;
        }

        if (null !== $request->listenerId) {
            @$query['ListenerId'] = $request->listenerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'StartListener',
            'version' => '2020-06-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return StartListenerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Starts the specified listener.
     *
     * @remarks
     * The **StartListener** API operation is asynchronous. The system returns a request ID, but the listener has not been started and the start task is still running in the background. You can call [GetListenerAttribute](https://help.aliyun.com/document_detail/2254865.html) to query the start status of the listener:
     * - If the listener is in the **Configuring** state, the listener is being started.
     * - If the listener is in the **Running** state, the listener is started.
     *
     * @param request - StartListenerRequest
     *
     * @returns StartListenerResponse
     *
     * @param StartListenerRequest $request
     *
     * @return StartListenerResponse
     */
    public function startListener($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startListenerWithOptions($request, $runtime);
    }

    /**
     * Removes the EIP or VIP of a zone from DNS resolution.
     *
     * @remarks
     * Only ALB instances in fixed IP mode are supported.
     * You cannot remove a zone from an ALB instance if the instance has only one zone in the Active state.
     *
     * @param request - StartShiftLoadBalancerZonesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StartShiftLoadBalancerZonesResponse
     *
     * @param StartShiftLoadBalancerZonesRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return StartShiftLoadBalancerZonesResponse
     */
    public function startShiftLoadBalancerZonesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$query['DryRun'] = $request->dryRun;
        }

        if (null !== $request->loadBalancerId) {
            @$query['LoadBalancerId'] = $request->loadBalancerId;
        }

        if (null !== $request->zoneMappings) {
            @$query['ZoneMappings'] = $request->zoneMappings;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'StartShiftLoadBalancerZones',
            'version' => '2020-06-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return StartShiftLoadBalancerZonesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Removes the EIP or VIP of a zone from DNS resolution.
     *
     * @remarks
     * Only ALB instances in fixed IP mode are supported.
     * You cannot remove a zone from an ALB instance if the instance has only one zone in the Active state.
     *
     * @param request - StartShiftLoadBalancerZonesRequest
     *
     * @returns StartShiftLoadBalancerZonesResponse
     *
     * @param StartShiftLoadBalancerZonesRequest $request
     *
     * @return StartShiftLoadBalancerZonesResponse
     */
    public function startShiftLoadBalancerZones($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startShiftLoadBalancerZonesWithOptions($request, $runtime);
    }

    /**
     * Stops a specified listener.
     *
     * @remarks
     * The **StopListener** operation is asynchronous. After you call this operation, the system returns a request ID, but the listener is not immediately stopped. The stop task is still running in the background. You can call [GetListenerAttribute](https://help.aliyun.com/document_detail/2254865.html) to query the stop status of the listener:
     * - If the listener is in the **Configuring** state, the listener is being stopped.
     * - If the listener is in the **Stopped** state, the listener is stopped.
     *
     * @param request - StopListenerRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StopListenerResponse
     *
     * @param StopListenerRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return StopListenerResponse
     */
    public function stopListenerWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$query['DryRun'] = $request->dryRun;
        }

        if (null !== $request->listenerId) {
            @$query['ListenerId'] = $request->listenerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'StopListener',
            'version' => '2020-06-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return StopListenerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Stops a specified listener.
     *
     * @remarks
     * The **StopListener** operation is asynchronous. After you call this operation, the system returns a request ID, but the listener is not immediately stopped. The stop task is still running in the background. You can call [GetListenerAttribute](https://help.aliyun.com/document_detail/2254865.html) to query the stop status of the listener:
     * - If the listener is in the **Configuring** state, the listener is being stopped.
     * - If the listener is in the **Stopped** state, the listener is stopped.
     *
     * @param request - StopListenerRequest
     *
     * @returns StopListenerResponse
     *
     * @param StopListenerRequest $request
     *
     * @return StopListenerResponse
     */
    public function stopListener($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopListenerWithOptions($request, $runtime);
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
            'version' => '2020-06-16',
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
     * Removes tags from resources.
     *
     * @param request - UnTagResourcesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UnTagResourcesResponse
     *
     * @param UnTagResourcesRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return UnTagResourcesResponse
     */
    public function unTagResourcesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->all) {
            @$query['All'] = $request->all;
        }

        if (null !== $request->resourceId) {
            @$query['ResourceId'] = $request->resourceId;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        if (null !== $request->tagKey) {
            @$query['TagKey'] = $request->tagKey;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UnTagResources',
            'version' => '2020-06-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UnTagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Removes tags from resources.
     *
     * @param request - UnTagResourcesRequest
     *
     * @returns UnTagResourcesResponse
     *
     * @param UnTagResourcesRequest $request
     *
     * @return UnTagResourcesResponse
     */
    public function unTagResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->unTagResourcesWithOptions($request, $runtime);
    }

    /**
     * Updates programmable scripts.
     *
     * @remarks
     * *UpdateAScripts** is an asynchronous operation. After a request is sent, the system returns a request ID. However, the programmable script is not yet updated, and the update task is still running in the background. You can call [ListAScripts](https://help.aliyun.com/document_detail/472574.html) to query the update status of the programmable script:
     *    - If the programmable script is in the **Configuring** state, the programmable script is being updated.
     *    - If the programmable script is in the **Available** state, the programmable script is updated.
     *
     * @param request - UpdateAScriptsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateAScriptsResponse
     *
     * @param UpdateAScriptsRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return UpdateAScriptsResponse
     */
    public function updateAScriptsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->AScripts) {
            @$query['AScripts'] = $request->AScripts;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$query['DryRun'] = $request->dryRun;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateAScripts',
            'version' => '2020-06-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateAScriptsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates programmable scripts.
     *
     * @remarks
     * *UpdateAScripts** is an asynchronous operation. After a request is sent, the system returns a request ID. However, the programmable script is not yet updated, and the update task is still running in the background. You can call [ListAScripts](https://help.aliyun.com/document_detail/472574.html) to query the update status of the programmable script:
     *    - If the programmable script is in the **Configuring** state, the programmable script is being updated.
     *    - If the programmable script is in the **Available** state, the programmable script is updated.
     *
     * @param request - UpdateAScriptsRequest
     *
     * @returns UpdateAScriptsResponse
     *
     * @param UpdateAScriptsRequest $request
     *
     * @return UpdateAScriptsResponse
     */
    public function updateAScripts($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateAScriptsWithOptions($request, $runtime);
    }

    /**
     * Updates the attributes of an ACL, such as its name.
     *
     * @param request - UpdateAclAttributeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateAclAttributeResponse
     *
     * @param UpdateAclAttributeRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return UpdateAclAttributeResponse
     */
    public function updateAclAttributeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->aclId) {
            @$query['AclId'] = $request->aclId;
        }

        if (null !== $request->aclName) {
            @$query['AclName'] = $request->aclName;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$query['DryRun'] = $request->dryRun;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateAclAttribute',
            'version' => '2020-06-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateAclAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the attributes of an ACL, such as its name.
     *
     * @param request - UpdateAclAttributeRequest
     *
     * @returns UpdateAclAttributeResponse
     *
     * @param UpdateAclAttributeRequest $request
     *
     * @return UpdateAclAttributeResponse
     */
    public function updateAclAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateAclAttributeWithOptions($request, $runtime);
    }

    /**
     * This operation updates the attributes of a health check template, such as its name and health check protocol.
     *
     * @param request - UpdateHealthCheckTemplateAttributeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateHealthCheckTemplateAttributeResponse
     *
     * @param UpdateHealthCheckTemplateAttributeRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return UpdateHealthCheckTemplateAttributeResponse
     */
    public function updateHealthCheckTemplateAttributeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$query['DryRun'] = $request->dryRun;
        }

        if (null !== $request->healthCheckCodes) {
            @$query['HealthCheckCodes'] = $request->healthCheckCodes;
        }

        if (null !== $request->healthCheckConnectPort) {
            @$query['HealthCheckConnectPort'] = $request->healthCheckConnectPort;
        }

        if (null !== $request->healthCheckHost) {
            @$query['HealthCheckHost'] = $request->healthCheckHost;
        }

        if (null !== $request->healthCheckHttpVersion) {
            @$query['HealthCheckHttpVersion'] = $request->healthCheckHttpVersion;
        }

        if (null !== $request->healthCheckInterval) {
            @$query['HealthCheckInterval'] = $request->healthCheckInterval;
        }

        if (null !== $request->healthCheckMethod) {
            @$query['HealthCheckMethod'] = $request->healthCheckMethod;
        }

        if (null !== $request->healthCheckPath) {
            @$query['HealthCheckPath'] = $request->healthCheckPath;
        }

        if (null !== $request->healthCheckProtocol) {
            @$query['HealthCheckProtocol'] = $request->healthCheckProtocol;
        }

        if (null !== $request->healthCheckTemplateId) {
            @$query['HealthCheckTemplateId'] = $request->healthCheckTemplateId;
        }

        if (null !== $request->healthCheckTemplateName) {
            @$query['HealthCheckTemplateName'] = $request->healthCheckTemplateName;
        }

        if (null !== $request->healthCheckTimeout) {
            @$query['HealthCheckTimeout'] = $request->healthCheckTimeout;
        }

        if (null !== $request->healthyThreshold) {
            @$query['HealthyThreshold'] = $request->healthyThreshold;
        }

        if (null !== $request->unhealthyThreshold) {
            @$query['UnhealthyThreshold'] = $request->unhealthyThreshold;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateHealthCheckTemplateAttribute',
            'version' => '2020-06-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateHealthCheckTemplateAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * This operation updates the attributes of a health check template, such as its name and health check protocol.
     *
     * @param request - UpdateHealthCheckTemplateAttributeRequest
     *
     * @returns UpdateHealthCheckTemplateAttributeResponse
     *
     * @param UpdateHealthCheckTemplateAttributeRequest $request
     *
     * @return UpdateHealthCheckTemplateAttributeResponse
     */
    public function updateHealthCheckTemplateAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateHealthCheckTemplateAttributeWithOptions($request, $runtime);
    }

    /**
     * Updates the configurations of a listener, such as the name and default actions.
     *
     * @remarks
     * The **UpdateListenerAttribute** operation is asynchronous. After you call this operation, the system returns a request ID, but the listener configurations are not immediately updated. The update task continues to run in the background. You can call the [GetListenerAttribute](https://help.aliyun.com/document_detail/2254865.html) operation to query the update status of the listener configurations:
     * - If the listener is in the **Configuring** state, the listener configurations are being updated.
     * - If the listener is in the **Running** state, the listener configurations are updated.
     *
     * @param request - UpdateListenerAttributeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateListenerAttributeResponse
     *
     * @param UpdateListenerAttributeRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return UpdateListenerAttributeResponse
     */
    public function updateListenerAttributeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->caCertificates) {
            @$query['CaCertificates'] = $request->caCertificates;
        }

        if (null !== $request->caEnabled) {
            @$query['CaEnabled'] = $request->caEnabled;
        }

        if (null !== $request->certificates) {
            @$query['Certificates'] = $request->certificates;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->defaultActions) {
            @$query['DefaultActions'] = $request->defaultActions;
        }

        if (null !== $request->dryRun) {
            @$query['DryRun'] = $request->dryRun;
        }

        if (null !== $request->gzipEnabled) {
            @$query['GzipEnabled'] = $request->gzipEnabled;
        }

        if (null !== $request->http2Enabled) {
            @$query['Http2Enabled'] = $request->http2Enabled;
        }

        if (null !== $request->idleTimeout) {
            @$query['IdleTimeout'] = $request->idleTimeout;
        }

        if (null !== $request->listenerDescription) {
            @$query['ListenerDescription'] = $request->listenerDescription;
        }

        if (null !== $request->listenerId) {
            @$query['ListenerId'] = $request->listenerId;
        }

        if (null !== $request->quicConfig) {
            @$query['QuicConfig'] = $request->quicConfig;
        }

        if (null !== $request->requestTimeout) {
            @$query['RequestTimeout'] = $request->requestTimeout;
        }

        if (null !== $request->securityPolicyId) {
            @$query['SecurityPolicyId'] = $request->securityPolicyId;
        }

        if (null !== $request->XForwardedForConfig) {
            @$query['XForwardedForConfig'] = $request->XForwardedForConfig;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateListenerAttribute',
            'version' => '2020-06-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateListenerAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the configurations of a listener, such as the name and default actions.
     *
     * @remarks
     * The **UpdateListenerAttribute** operation is asynchronous. After you call this operation, the system returns a request ID, but the listener configurations are not immediately updated. The update task continues to run in the background. You can call the [GetListenerAttribute](https://help.aliyun.com/document_detail/2254865.html) operation to query the update status of the listener configurations:
     * - If the listener is in the **Configuring** state, the listener configurations are being updated.
     * - If the listener is in the **Running** state, the listener configurations are updated.
     *
     * @param request - UpdateListenerAttributeRequest
     *
     * @returns UpdateListenerAttributeResponse
     *
     * @param UpdateListenerAttributeRequest $request
     *
     * @return UpdateListenerAttributeResponse
     */
    public function updateListenerAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateListenerAttributeWithOptions($request, $runtime);
    }

    /**
     * Updates the log-related attributes of a listener, such as access logs.
     *
     * @remarks
     * The **UpdateListenerLogConfig** operation is asynchronous. The system returns a request ID, but the log configuration of the listener is not immediately updated. The update task is still running in the background. You can call the [GetListenerAttribute](https://help.aliyun.com/document_detail/2254865.html) operation to query the update status of the log configuration:
     * - If the listener is in the **Configuring** state, the log configuration is being updated.
     * - If the listener is in the **Running** state, the log configuration is updated.
     * > You can update the log configuration of a listener only after you enable the access log feature for the instance.
     *
     * @param request - UpdateListenerLogConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateListenerLogConfigResponse
     *
     * @param UpdateListenerLogConfigRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return UpdateListenerLogConfigResponse
     */
    public function updateListenerLogConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accessLogRecordCustomizedHeadersEnabled) {
            @$query['AccessLogRecordCustomizedHeadersEnabled'] = $request->accessLogRecordCustomizedHeadersEnabled;
        }

        if (null !== $request->accessLogTracingConfig) {
            @$query['AccessLogTracingConfig'] = $request->accessLogTracingConfig;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$query['DryRun'] = $request->dryRun;
        }

        if (null !== $request->listenerId) {
            @$query['ListenerId'] = $request->listenerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateListenerLogConfig',
            'version' => '2020-06-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateListenerLogConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the log-related attributes of a listener, such as access logs.
     *
     * @remarks
     * The **UpdateListenerLogConfig** operation is asynchronous. The system returns a request ID, but the log configuration of the listener is not immediately updated. The update task is still running in the background. You can call the [GetListenerAttribute](https://help.aliyun.com/document_detail/2254865.html) operation to query the update status of the log configuration:
     * - If the listener is in the **Configuring** state, the log configuration is being updated.
     * - If the listener is in the **Running** state, the log configuration is updated.
     * > You can update the log configuration of a listener only after you enable the access log feature for the instance.
     *
     * @param request - UpdateListenerLogConfigRequest
     *
     * @returns UpdateListenerLogConfigResponse
     *
     * @param UpdateListenerLogConfigRequest $request
     *
     * @return UpdateListenerLogConfigResponse
     */
    public function updateListenerLogConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateListenerLogConfigWithOptions($request, $runtime);
    }

    /**
     * Changes the network type of an Application Load Balancer (ALB) instance.
     *
     * @remarks
     * Before you begin:
     * - You have created an ALB instance. For more information, see [CreateLoadBalancer](https://help.aliyun.com/document_detail/214358.html).
     * - To change the network type of an ALB instance from private network to public network using this operation, you must first create an elastic IP address (EIP). For more information, see [AllocateEipAddress](https://help.aliyun.com/document_detail/120192.html).
     * Usage notes:
     * **UpdateLoadBalancerAddressTypeConfig** is an asynchronous operation. After a request is sent, the system returns a request ID, but the network type of the ALB instance is not yet changed. The change node continues in the background. You can invoke [GetLoadBalancerAttribute](https://help.aliyun.com/document_detail/214362.html) to query the network type change status of the ALB instance:
     * - If the ALB instance is in the **Configuring** state, the load balancing instance network type is being changed.
     * - If the ALB instance is in the **Active** state, the load balancing instance network type has been changed successfully.
     *
     * @param request - UpdateLoadBalancerAddressTypeConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateLoadBalancerAddressTypeConfigResponse
     *
     * @param UpdateLoadBalancerAddressTypeConfigRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return UpdateLoadBalancerAddressTypeConfigResponse
     */
    public function updateLoadBalancerAddressTypeConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->addressType) {
            @$query['AddressType'] = $request->addressType;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$query['DryRun'] = $request->dryRun;
        }

        if (null !== $request->loadBalancerId) {
            @$query['LoadBalancerId'] = $request->loadBalancerId;
        }

        if (null !== $request->retainResourceType) {
            @$query['RetainResourceType'] = $request->retainResourceType;
        }

        if (null !== $request->zoneMappings) {
            @$query['ZoneMappings'] = $request->zoneMappings;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateLoadBalancerAddressTypeConfig',
            'version' => '2020-06-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateLoadBalancerAddressTypeConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Changes the network type of an Application Load Balancer (ALB) instance.
     *
     * @remarks
     * Before you begin:
     * - You have created an ALB instance. For more information, see [CreateLoadBalancer](https://help.aliyun.com/document_detail/214358.html).
     * - To change the network type of an ALB instance from private network to public network using this operation, you must first create an elastic IP address (EIP). For more information, see [AllocateEipAddress](https://help.aliyun.com/document_detail/120192.html).
     * Usage notes:
     * **UpdateLoadBalancerAddressTypeConfig** is an asynchronous operation. After a request is sent, the system returns a request ID, but the network type of the ALB instance is not yet changed. The change node continues in the background. You can invoke [GetLoadBalancerAttribute](https://help.aliyun.com/document_detail/214362.html) to query the network type change status of the ALB instance:
     * - If the ALB instance is in the **Configuring** state, the load balancing instance network type is being changed.
     * - If the ALB instance is in the **Active** state, the load balancing instance network type has been changed successfully.
     *
     * @param request - UpdateLoadBalancerAddressTypeConfigRequest
     *
     * @returns UpdateLoadBalancerAddressTypeConfigResponse
     *
     * @param UpdateLoadBalancerAddressTypeConfigRequest $request
     *
     * @return UpdateLoadBalancerAddressTypeConfigResponse
     */
    public function updateLoadBalancerAddressTypeConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateLoadBalancerAddressTypeConfigWithOptions($request, $runtime);
    }

    /**
     * Updates the property of a load balancing instance, such as the name and modification protection settings.
     *
     * @remarks
     * The **UpdateLoadBalancerAttribute** operation is asynchronous. After you invoke this operation, the system returns a request ID, but the property of the application load balancing instance is not immediately updated. The update task is still running in the background. You can invoke the [GetLoadBalancerAttribute](https://help.aliyun.com/document_detail/214362.html) operation to query the update status of the application load balancing instance property:
     * - When the property of the application load balancing instance is in the **Configuring** state, it indicates that the property is being updated.
     * - When the property of the application load balancing instance is in the **Active** state, it indicates that the property is updated.
     *
     * @param request - UpdateLoadBalancerAttributeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateLoadBalancerAttributeResponse
     *
     * @param UpdateLoadBalancerAttributeRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return UpdateLoadBalancerAttributeResponse
     */
    public function updateLoadBalancerAttributeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$query['DryRun'] = $request->dryRun;
        }

        if (null !== $request->loadBalancerId) {
            @$query['LoadBalancerId'] = $request->loadBalancerId;
        }

        if (null !== $request->loadBalancerName) {
            @$query['LoadBalancerName'] = $request->loadBalancerName;
        }

        if (null !== $request->modificationProtectionConfig) {
            @$query['ModificationProtectionConfig'] = $request->modificationProtectionConfig;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateLoadBalancerAttribute',
            'version' => '2020-06-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateLoadBalancerAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the property of a load balancing instance, such as the name and modification protection settings.
     *
     * @remarks
     * The **UpdateLoadBalancerAttribute** operation is asynchronous. After you invoke this operation, the system returns a request ID, but the property of the application load balancing instance is not immediately updated. The update task is still running in the background. You can invoke the [GetLoadBalancerAttribute](https://help.aliyun.com/document_detail/214362.html) operation to query the update status of the application load balancing instance property:
     * - When the property of the application load balancing instance is in the **Configuring** state, it indicates that the property is being updated.
     * - When the property of the application load balancing instance is in the **Active** state, it indicates that the property is updated.
     *
     * @param request - UpdateLoadBalancerAttributeRequest
     *
     * @returns UpdateLoadBalancerAttributeResponse
     *
     * @param UpdateLoadBalancerAttributeRequest $request
     *
     * @return UpdateLoadBalancerAttributeResponse
     */
    public function updateLoadBalancerAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateLoadBalancerAttributeWithOptions($request, $runtime);
    }

    /**
     * Changes the current load balancing edition.
     *
     * @remarks
     * - ALB instances can only be upgraded from Basic Edition to Standard Edition or WAF-enhanced Edition, or downgraded from WAF-enhanced Edition to Standard Edition. Downgrading from Standard Edition or WAF-enhanced Edition to Basic Edition is not supported. For more information, see [Upgrade the feature edition of an instance](https://help.aliyun.com/document_detail/214654.html).
     * - The **UpdateLoadBalancerEdition** operation is asynchronous. After you invoke the operation, the system returns a request ID, but the application load balancing edition has not been modified. The modification node is still running in the background. You can invoke [GetLoadBalancerAttribute](https://help.aliyun.com/document_detail/214362.html) to query the modification status of the application load balancing edition:
     *     - If the application load balancing edition is in the **Configuring** state, the edition is being modified.
     *     - If the application load balancing edition is in the **Active** state, the edition is successfully modified.
     *
     * @param request - UpdateLoadBalancerEditionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateLoadBalancerEditionResponse
     *
     * @param UpdateLoadBalancerEditionRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return UpdateLoadBalancerEditionResponse
     */
    public function updateLoadBalancerEditionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$query['DryRun'] = $request->dryRun;
        }

        if (null !== $request->loadBalancerEdition) {
            @$query['LoadBalancerEdition'] = $request->loadBalancerEdition;
        }

        if (null !== $request->loadBalancerId) {
            @$query['LoadBalancerId'] = $request->loadBalancerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateLoadBalancerEdition',
            'version' => '2020-06-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateLoadBalancerEditionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Changes the current load balancing edition.
     *
     * @remarks
     * - ALB instances can only be upgraded from Basic Edition to Standard Edition or WAF-enhanced Edition, or downgraded from WAF-enhanced Edition to Standard Edition. Downgrading from Standard Edition or WAF-enhanced Edition to Basic Edition is not supported. For more information, see [Upgrade the feature edition of an instance](https://help.aliyun.com/document_detail/214654.html).
     * - The **UpdateLoadBalancerEdition** operation is asynchronous. After you invoke the operation, the system returns a request ID, but the application load balancing edition has not been modified. The modification node is still running in the background. You can invoke [GetLoadBalancerAttribute](https://help.aliyun.com/document_detail/214362.html) to query the modification status of the application load balancing edition:
     *     - If the application load balancing edition is in the **Configuring** state, the edition is being modified.
     *     - If the application load balancing edition is in the **Active** state, the edition is successfully modified.
     *
     * @param request - UpdateLoadBalancerEditionRequest
     *
     * @returns UpdateLoadBalancerEditionResponse
     *
     * @param UpdateLoadBalancerEditionRequest $request
     *
     * @return UpdateLoadBalancerEditionResponse
     */
    public function updateLoadBalancerEdition($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateLoadBalancerEditionWithOptions($request, $runtime);
    }

    /**
     * Modifies the active zone property of an application load balancing instance.
     *
     * @remarks
     * The **UpdateLoadBalancerZones** API operation is asynchronous. After you invoke this operation, the system returns a request ID, but the active zone property of the application load balancing instance is not immediately modified. The modification node is still running in the background. You can invoke the [GetLoadBalancerAttribute](https://help.aliyun.com/document_detail/214362.html) operation to query the modification status of the active zone property:
     * - If the application load balancing instance is in the **Configuring** state, the active zone property is being modified.
     * - If the application load balancing instance is in the **Active** state, the active zone property is modified.
     * > Invoking the UpdateLoadBalancerZones operation may incur fees.
     *
     * @param request - UpdateLoadBalancerZonesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateLoadBalancerZonesResponse
     *
     * @param UpdateLoadBalancerZonesRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return UpdateLoadBalancerZonesResponse
     */
    public function updateLoadBalancerZonesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$query['DryRun'] = $request->dryRun;
        }

        if (null !== $request->loadBalancerId) {
            @$query['LoadBalancerId'] = $request->loadBalancerId;
        }

        if (null !== $request->retainResourceType) {
            @$query['RetainResourceType'] = $request->retainResourceType;
        }

        if (null !== $request->zoneMappings) {
            @$query['ZoneMappings'] = $request->zoneMappings;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateLoadBalancerZones',
            'version' => '2020-06-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateLoadBalancerZonesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the active zone property of an application load balancing instance.
     *
     * @remarks
     * The **UpdateLoadBalancerZones** API operation is asynchronous. After you invoke this operation, the system returns a request ID, but the active zone property of the application load balancing instance is not immediately modified. The modification node is still running in the background. You can invoke the [GetLoadBalancerAttribute](https://help.aliyun.com/document_detail/214362.html) operation to query the modification status of the active zone property:
     * - If the application load balancing instance is in the **Configuring** state, the active zone property is being modified.
     * - If the application load balancing instance is in the **Active** state, the active zone property is modified.
     * > Invoking the UpdateLoadBalancerZones operation may incur fees.
     *
     * @param request - UpdateLoadBalancerZonesRequest
     *
     * @returns UpdateLoadBalancerZonesResponse
     *
     * @param UpdateLoadBalancerZonesRequest $request
     *
     * @return UpdateLoadBalancerZonesResponse
     */
    public function updateLoadBalancerZones($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateLoadBalancerZonesWithOptions($request, $runtime);
    }

    /**
     * Updates the attributes of a forwarding rule, such as conditions, actions, and name.
     *
     * @remarks
     * - **UpdateRuleAttribute** is an asynchronous operation. After a request is sent, the system returns a request ID. However, the forwarding rule attributes are not yet updated. The update task continues to run in the background. You can call [ListRules](https://help.aliyun.com/document_detail/214379.html) to query the update status of the forwarding rule attributes:
     *     - If the forwarding rule attributes are in the **Configuring** state, the attributes are being updated.
     *     - If the forwarding rule attributes are in the **Available** state, the attributes are updated.
     * - The maximum number of conditions (**RuleConditions**) and actions (**RuleActions**) that can be added to a forwarding rule is as follows:
     *     - Conditions: 5 for Basic Edition, 10 for Standard Edition, and 10 for WAF-enabled Edition.
     *     - Actions: 3 for Basic Edition, 5 for Standard Edition, and 5 for WAF-enabled Edition.
     *
     * @param request - UpdateRuleAttributeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateRuleAttributeResponse
     *
     * @param UpdateRuleAttributeRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return UpdateRuleAttributeResponse
     */
    public function updateRuleAttributeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$query['DryRun'] = $request->dryRun;
        }

        if (null !== $request->priority) {
            @$query['Priority'] = $request->priority;
        }

        if (null !== $request->ruleActions) {
            @$query['RuleActions'] = $request->ruleActions;
        }

        if (null !== $request->ruleConditions) {
            @$query['RuleConditions'] = $request->ruleConditions;
        }

        if (null !== $request->ruleId) {
            @$query['RuleId'] = $request->ruleId;
        }

        if (null !== $request->ruleName) {
            @$query['RuleName'] = $request->ruleName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateRuleAttribute',
            'version' => '2020-06-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateRuleAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the attributes of a forwarding rule, such as conditions, actions, and name.
     *
     * @remarks
     * - **UpdateRuleAttribute** is an asynchronous operation. After a request is sent, the system returns a request ID. However, the forwarding rule attributes are not yet updated. The update task continues to run in the background. You can call [ListRules](https://help.aliyun.com/document_detail/214379.html) to query the update status of the forwarding rule attributes:
     *     - If the forwarding rule attributes are in the **Configuring** state, the attributes are being updated.
     *     - If the forwarding rule attributes are in the **Available** state, the attributes are updated.
     * - The maximum number of conditions (**RuleConditions**) and actions (**RuleActions**) that can be added to a forwarding rule is as follows:
     *     - Conditions: 5 for Basic Edition, 10 for Standard Edition, and 10 for WAF-enabled Edition.
     *     - Actions: 3 for Basic Edition, 5 for Standard Edition, and 5 for WAF-enabled Edition.
     *
     * @param request - UpdateRuleAttributeRequest
     *
     * @returns UpdateRuleAttributeResponse
     *
     * @param UpdateRuleAttributeRequest $request
     *
     * @return UpdateRuleAttributeResponse
     */
    public function updateRuleAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateRuleAttributeWithOptions($request, $runtime);
    }

    /**
     * Updates the attributes of forwarding rules in batches.
     *
     * @remarks
     * *UpdateRulesAttribute** is an asynchronous operation. The system returns a request ID, but the forwarding rule attributes are not immediately updated. The update task continues to run in the background. You can call [ListRules](https://help.aliyun.com/document_detail/214379.html) to query the update status of the forwarding rule attributes:
     * - If the attributes of multiple forwarding rules are in the **Configuring** state, the forwarding rule attributes are being updated in batches.
     * - If the attributes of multiple forwarding rules are in the **Available** state, the forwarding rule attributes are successfully updated in batches.
     * - The maximum numbers of conditions (**RuleConditions**) and actions (**RuleActions**) that can be added to a single forwarding rule are as follows:
     *     - Conditions: 5 for Basic Edition, 10 for Standard Edition, and 10 for WAF-enhanced Edition.
     *     - Actions: 3 for Basic Edition, 5 for Standard Edition, and 5 for WAF-enhanced Edition.
     *
     * @param request - UpdateRulesAttributeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateRulesAttributeResponse
     *
     * @param UpdateRulesAttributeRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return UpdateRulesAttributeResponse
     */
    public function updateRulesAttributeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$query['DryRun'] = $request->dryRun;
        }

        $body = [];
        $bodyFlat = [];
        if (null !== $request->rules) {
            @$bodyFlat['Rules'] = $request->rules;
        }

        $body = Dara::merge([
        ], $body, Utils::query($bodyFlat));
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateRulesAttribute',
            'version' => '2020-06-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateRulesAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the attributes of forwarding rules in batches.
     *
     * @remarks
     * *UpdateRulesAttribute** is an asynchronous operation. The system returns a request ID, but the forwarding rule attributes are not immediately updated. The update task continues to run in the background. You can call [ListRules](https://help.aliyun.com/document_detail/214379.html) to query the update status of the forwarding rule attributes:
     * - If the attributes of multiple forwarding rules are in the **Configuring** state, the forwarding rule attributes are being updated in batches.
     * - If the attributes of multiple forwarding rules are in the **Available** state, the forwarding rule attributes are successfully updated in batches.
     * - The maximum numbers of conditions (**RuleConditions**) and actions (**RuleActions**) that can be added to a single forwarding rule are as follows:
     *     - Conditions: 5 for Basic Edition, 10 for Standard Edition, and 10 for WAF-enhanced Edition.
     *     - Actions: 3 for Basic Edition, 5 for Standard Edition, and 5 for WAF-enhanced Edition.
     *
     * @param request - UpdateRulesAttributeRequest
     *
     * @returns UpdateRulesAttributeResponse
     *
     * @param UpdateRulesAttributeRequest $request
     *
     * @return UpdateRulesAttributeResponse
     */
    public function updateRulesAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateRulesAttributeWithOptions($request, $runtime);
    }

    /**
     * Updates the attributes of a security policy, such as the security protocol version and cipher suite.
     *
     * @remarks
     * ## Usage notes
     * The **UpdateSecurityPolicyAttribute** operation is asynchronous. After you call this operation, the system returns a request ID, but the security policy attributes are not immediately updated. The update task is still running in the background. You can call [ListSecurityPolicies](https://help.aliyun.com/document_detail/213609.html) to query the update status of the security policy attributes:
     * - If the security policy is in the **Configuring** state, the attributes are being updated.
     * - If the security policy is in the **Available** state, the attributes are updated.
     *
     * @param request - UpdateSecurityPolicyAttributeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateSecurityPolicyAttributeResponse
     *
     * @param UpdateSecurityPolicyAttributeRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return UpdateSecurityPolicyAttributeResponse
     */
    public function updateSecurityPolicyAttributeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ciphers) {
            @$query['Ciphers'] = $request->ciphers;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$query['DryRun'] = $request->dryRun;
        }

        if (null !== $request->securityPolicyId) {
            @$query['SecurityPolicyId'] = $request->securityPolicyId;
        }

        if (null !== $request->securityPolicyName) {
            @$query['SecurityPolicyName'] = $request->securityPolicyName;
        }

        if (null !== $request->TLSVersions) {
            @$query['TLSVersions'] = $request->TLSVersions;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateSecurityPolicyAttribute',
            'version' => '2020-06-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateSecurityPolicyAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the attributes of a security policy, such as the security protocol version and cipher suite.
     *
     * @remarks
     * ## Usage notes
     * The **UpdateSecurityPolicyAttribute** operation is asynchronous. After you call this operation, the system returns a request ID, but the security policy attributes are not immediately updated. The update task is still running in the background. You can call [ListSecurityPolicies](https://help.aliyun.com/document_detail/213609.html) to query the update status of the security policy attributes:
     * - If the security policy is in the **Configuring** state, the attributes are being updated.
     * - If the security policy is in the **Available** state, the attributes are updated.
     *
     * @param request - UpdateSecurityPolicyAttributeRequest
     *
     * @returns UpdateSecurityPolicyAttributeResponse
     *
     * @param UpdateSecurityPolicyAttributeRequest $request
     *
     * @return UpdateSecurityPolicyAttributeResponse
     */
    public function updateSecurityPolicyAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateSecurityPolicyAttributeWithOptions($request, $runtime);
    }

    /**
     * Updates the configurations of a server group, such as health checks, session persistence, name, scheduling algorithm, and health check protocol.
     *
     * @remarks
     * The **UpdateServerGroupAttribute** operation is asynchronous. After you send the request, the system returns a request ID, but the server group configurations are not immediately updated. The update task runs in the background. You can call the [ListServerGroups](https://help.aliyun.com/document_detail/213627.html) operation to query the update status of the server group configurations:
     * - If the server group configurations are in the **Configuring** state, the configurations are being updated.
     * - If the server group configurations are in the **Available** state, the configurations are updated.
     *
     * @param request - UpdateServerGroupAttributeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateServerGroupAttributeResponse
     *
     * @param UpdateServerGroupAttributeRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return UpdateServerGroupAttributeResponse
     */
    public function updateServerGroupAttributeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->connectionDrainConfig) {
            @$query['ConnectionDrainConfig'] = $request->connectionDrainConfig;
        }

        if (null !== $request->crossZoneEnabled) {
            @$query['CrossZoneEnabled'] = $request->crossZoneEnabled;
        }

        if (null !== $request->dryRun) {
            @$query['DryRun'] = $request->dryRun;
        }

        if (null !== $request->healthCheckConfig) {
            @$query['HealthCheckConfig'] = $request->healthCheckConfig;
        }

        if (null !== $request->ipVersionAffinityMode) {
            @$query['IpVersionAffinityMode'] = $request->ipVersionAffinityMode;
        }

        if (null !== $request->scheduler) {
            @$query['Scheduler'] = $request->scheduler;
        }

        if (null !== $request->serverGroupId) {
            @$query['ServerGroupId'] = $request->serverGroupId;
        }

        if (null !== $request->serverGroupName) {
            @$query['ServerGroupName'] = $request->serverGroupName;
        }

        if (null !== $request->serviceName) {
            @$query['ServiceName'] = $request->serviceName;
        }

        if (null !== $request->slowStartConfig) {
            @$query['SlowStartConfig'] = $request->slowStartConfig;
        }

        if (null !== $request->stickySessionConfig) {
            @$query['StickySessionConfig'] = $request->stickySessionConfig;
        }

        if (null !== $request->uchConfig) {
            @$query['UchConfig'] = $request->uchConfig;
        }

        if (null !== $request->upstreamKeepaliveEnabled) {
            @$query['UpstreamKeepaliveEnabled'] = $request->upstreamKeepaliveEnabled;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateServerGroupAttribute',
            'version' => '2020-06-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateServerGroupAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the configurations of a server group, such as health checks, session persistence, name, scheduling algorithm, and health check protocol.
     *
     * @remarks
     * The **UpdateServerGroupAttribute** operation is asynchronous. After you send the request, the system returns a request ID, but the server group configurations are not immediately updated. The update task runs in the background. You can call the [ListServerGroups](https://help.aliyun.com/document_detail/213627.html) operation to query the update status of the server group configurations:
     * - If the server group configurations are in the **Configuring** state, the configurations are being updated.
     * - If the server group configurations are in the **Available** state, the configurations are updated.
     *
     * @param request - UpdateServerGroupAttributeRequest
     *
     * @returns UpdateServerGroupAttributeResponse
     *
     * @param UpdateServerGroupAttributeRequest $request
     *
     * @return UpdateServerGroupAttributeResponse
     */
    public function updateServerGroupAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateServerGroupAttributeWithOptions($request, $runtime);
    }

    /**
     * Updates the configurations of backend servers in a server group, such as weights and descriptions.
     *
     * @remarks
     * *UpdateServerGroupServersAttribute** is an asynchronous operation. After a request is sent, the system returns a request ID. However, the backend server configurations are not yet updated, and the update task is still running in the background.
     * 1. You can call [ListServerGroups](https://help.aliyun.com/document_detail/213627.html) to query the status of a server group:
     *     - If the server group is in the **Configuring** state, the server group is being modified.
     *     - If the server group is in the **Available** state, the server group is running.
     * 2. You can call [ListServerGroupServers](https://help.aliyun.com/document_detail/213628.html) to query the status of a backend server:
     *     - If the backend server is in the **Configuring** state, the backend server is being modified.
     *     - If the backend server is in the **Available** state, the backend server is running.
     *
     * @param request - UpdateServerGroupServersAttributeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateServerGroupServersAttributeResponse
     *
     * @param UpdateServerGroupServersAttributeRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return UpdateServerGroupServersAttributeResponse
     */
    public function updateServerGroupServersAttributeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$query['DryRun'] = $request->dryRun;
        }

        if (null !== $request->serverGroupId) {
            @$query['ServerGroupId'] = $request->serverGroupId;
        }

        $body = [];
        $bodyFlat = [];
        if (null !== $request->servers) {
            @$bodyFlat['Servers'] = $request->servers;
        }

        $body = Dara::merge([
        ], $body, Utils::query($bodyFlat));
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateServerGroupServersAttribute',
            'version' => '2020-06-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateServerGroupServersAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the configurations of backend servers in a server group, such as weights and descriptions.
     *
     * @remarks
     * *UpdateServerGroupServersAttribute** is an asynchronous operation. After a request is sent, the system returns a request ID. However, the backend server configurations are not yet updated, and the update task is still running in the background.
     * 1. You can call [ListServerGroups](https://help.aliyun.com/document_detail/213627.html) to query the status of a server group:
     *     - If the server group is in the **Configuring** state, the server group is being modified.
     *     - If the server group is in the **Available** state, the server group is running.
     * 2. You can call [ListServerGroupServers](https://help.aliyun.com/document_detail/213628.html) to query the status of a backend server:
     *     - If the backend server is in the **Configuring** state, the backend server is being modified.
     *     - If the backend server is in the **Available** state, the backend server is running.
     *
     * @param request - UpdateServerGroupServersAttributeRequest
     *
     * @returns UpdateServerGroupServersAttributeResponse
     *
     * @param UpdateServerGroupServersAttributeRequest $request
     *
     * @return UpdateServerGroupServersAttributeResponse
     */
    public function updateServerGroupServersAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateServerGroupServersAttributeWithOptions($request, $runtime);
    }
}

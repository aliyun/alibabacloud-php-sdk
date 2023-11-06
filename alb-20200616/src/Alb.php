<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
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
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Alb extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
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
        if (!Utils::empty_($endpoint)) {
            return $endpoint;
        }
        if (!Utils::isUnset($endpointMap) && !Utils::empty_(@$endpointMap[$regionId])) {
            return @$endpointMap[$regionId];
        }

        return Endpoint::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * *   Each ACL can contain IP addresses or CIDR blocks. Take note of the following limits on ACLs:
     *   *     *   The maximum number of IP entries that can be added to an ACL with each Alibaba Cloud account at a time: 20
     *   *     *   The maximum number of IP entries that each ACL can contain: 1,000
     *   * *   **AddEntriesToAcl** is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background. You can call the [ListAclEntries](~~213616~~) operation to query the status of the task.
     *   *     *   If the ACL is in the **Adding** state, the IP entries are being added.
     *   *     *   If the ACL is in the **Available** state, the IP entries are added.
     *   *
     * @param AddEntriesToAclRequest $request AddEntriesToAclRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return AddEntriesToAclResponse AddEntriesToAclResponse
     */
    public function addEntriesToAclWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aclEntries)) {
            $query['AclEntries'] = $request->aclEntries;
        }
        if (!Utils::isUnset($request->aclId)) {
            $query['AclId'] = $request->aclId;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddEntriesToAcl',
            'version'     => '2020-06-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddEntriesToAclResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * *   Each ACL can contain IP addresses or CIDR blocks. Take note of the following limits on ACLs:
     *   *     *   The maximum number of IP entries that can be added to an ACL with each Alibaba Cloud account at a time: 20
     *   *     *   The maximum number of IP entries that each ACL can contain: 1,000
     *   * *   **AddEntriesToAcl** is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background. You can call the [ListAclEntries](~~213616~~) operation to query the status of the task.
     *   *     *   If the ACL is in the **Adding** state, the IP entries are being added.
     *   *     *   If the ACL is in the **Available** state, the IP entries are added.
     *   *
     * @param AddEntriesToAclRequest $request AddEntriesToAclRequest
     *
     * @return AddEntriesToAclResponse AddEntriesToAclResponse
     */
    public function addEntriesToAcl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addEntriesToAclWithOptions($request, $runtime);
    }

    /**
     * **AddServersToServerGroup** is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background.
     *   * 1.  You can call the [ListServerGroups](~~213627~~) operation to query the status of a server group.
     *   * *   If a server group is in the **Configuring** state, it indicates that the server group is being modified.
     *   * *   If a server group is in the **Available** state, it indicates that the server group is running.
     *   * 2.  You can call the [ListServerGroupServers](~~213628~~) operation to query the status of a backend server.
     *   * *   If a backend server is in the **Adding** state, it indicates that the backend server is being added to a server group.
     *   * *   If a backend server is in the **Available** state, it indicates that the server is running.
     *   *
     * @param AddServersToServerGroupRequest $request AddServersToServerGroupRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return AddServersToServerGroupResponse AddServersToServerGroupResponse
     */
    public function addServersToServerGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->serverGroupId)) {
            $query['ServerGroupId'] = $request->serverGroupId;
        }
        if (!Utils::isUnset($request->servers)) {
            $query['Servers'] = $request->servers;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddServersToServerGroup',
            'version'     => '2020-06-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddServersToServerGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * **AddServersToServerGroup** is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background.
     *   * 1.  You can call the [ListServerGroups](~~213627~~) operation to query the status of a server group.
     *   * *   If a server group is in the **Configuring** state, it indicates that the server group is being modified.
     *   * *   If a server group is in the **Available** state, it indicates that the server group is running.
     *   * 2.  You can call the [ListServerGroupServers](~~213628~~) operation to query the status of a backend server.
     *   * *   If a backend server is in the **Adding** state, it indicates that the backend server is being added to a server group.
     *   * *   If a backend server is in the **Available** state, it indicates that the server is running.
     *   *
     * @param AddServersToServerGroupRequest $request AddServersToServerGroupRequest
     *
     * @return AddServersToServerGroupResponse AddServersToServerGroupResponse
     */
    public function addServersToServerGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addServersToServerGroupWithOptions($request, $runtime);
    }

    /**
     * @param ApplyHealthCheckTemplateToServerGroupRequest $request
     * @param RuntimeOptions                               $runtime
     *
     * @return ApplyHealthCheckTemplateToServerGroupResponse
     */
    public function applyHealthCheckTemplateToServerGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->healthCheckTemplateId)) {
            $query['HealthCheckTemplateId'] = $request->healthCheckTemplateId;
        }
        if (!Utils::isUnset($request->serverGroupId)) {
            $query['ServerGroupId'] = $request->serverGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ApplyHealthCheckTemplateToServerGroup',
            'version'     => '2020-06-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ApplyHealthCheckTemplateToServerGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * **DeleteDhcpOptionsSet** is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background. You can call the [ListAclRelations](~~213618~~) operation to query the status of the task.
     *   * *   If an ACL is in the **Associating** state, the ACL is being associated with a listener.
     *   * *   If an ACL is in the **Associated** state, the ACL is associated with a listener.
     *   *
     * @param AssociateAclsWithListenerRequest $request AssociateAclsWithListenerRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return AssociateAclsWithListenerResponse AssociateAclsWithListenerResponse
     */
    public function associateAclsWithListenerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aclIds)) {
            $query['AclIds'] = $request->aclIds;
        }
        if (!Utils::isUnset($request->aclType)) {
            $query['AclType'] = $request->aclType;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->listenerId)) {
            $query['ListenerId'] = $request->listenerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AssociateAclsWithListener',
            'version'     => '2020-06-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AssociateAclsWithListenerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * **DeleteDhcpOptionsSet** is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background. You can call the [ListAclRelations](~~213618~~) operation to query the status of the task.
     *   * *   If an ACL is in the **Associating** state, the ACL is being associated with a listener.
     *   * *   If an ACL is in the **Associated** state, the ACL is associated with a listener.
     *   *
     * @param AssociateAclsWithListenerRequest $request AssociateAclsWithListenerRequest
     *
     * @return AssociateAclsWithListenerResponse AssociateAclsWithListenerResponse
     */
    public function associateAclsWithListener($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->associateAclsWithListenerWithOptions($request, $runtime);
    }

    /**
     * **AssociateAdditionalCertificatesWithListener** is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background. You can call the [GetListenerAttribute](~~2254865~~) operation to query the status of the task:
     *   * *   If the HTTPS or QUIC listener is in the **Associating** state, the additional certificates are being associated.
     *   * *   If the HTTPS or QUIC listener is in the **Associated** state, the additional certificates are associated.
     *   *
     * @param AssociateAdditionalCertificatesWithListenerRequest $request AssociateAdditionalCertificatesWithListenerRequest
     * @param RuntimeOptions                                     $runtime runtime options for this request RuntimeOptions
     *
     * @return AssociateAdditionalCertificatesWithListenerResponse AssociateAdditionalCertificatesWithListenerResponse
     */
    public function associateAdditionalCertificatesWithListenerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->certificates)) {
            $query['Certificates'] = $request->certificates;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->listenerId)) {
            $query['ListenerId'] = $request->listenerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AssociateAdditionalCertificatesWithListener',
            'version'     => '2020-06-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AssociateAdditionalCertificatesWithListenerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * **AssociateAdditionalCertificatesWithListener** is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background. You can call the [GetListenerAttribute](~~2254865~~) operation to query the status of the task:
     *   * *   If the HTTPS or QUIC listener is in the **Associating** state, the additional certificates are being associated.
     *   * *   If the HTTPS or QUIC listener is in the **Associated** state, the additional certificates are associated.
     *   *
     * @param AssociateAdditionalCertificatesWithListenerRequest $request AssociateAdditionalCertificatesWithListenerRequest
     *
     * @return AssociateAdditionalCertificatesWithListenerResponse AssociateAdditionalCertificatesWithListenerResponse
     */
    public function associateAdditionalCertificatesWithListener($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->associateAdditionalCertificatesWithListenerWithOptions($request, $runtime);
    }

    /**
     * **AttachCommonBandwidthPackageToLoadBalancer** is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background. You can call [GetLoadBalancerAttribute](~~214362~~) to query the status of the task.
     *   * *   If the ALB instance is in the **Configuring** state, the EIP bandwidth plan is being associated with the ALB instance.
     *   * *   If the ALB instance is in the **Active** state, the EIP bandwidth plan is associated with the ALB instance.
     *   *
     * @param AttachCommonBandwidthPackageToLoadBalancerRequest $request AttachCommonBandwidthPackageToLoadBalancerRequest
     * @param RuntimeOptions                                    $runtime runtime options for this request RuntimeOptions
     *
     * @return AttachCommonBandwidthPackageToLoadBalancerResponse AttachCommonBandwidthPackageToLoadBalancerResponse
     */
    public function attachCommonBandwidthPackageToLoadBalancerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bandwidthPackageId)) {
            $query['BandwidthPackageId'] = $request->bandwidthPackageId;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->loadBalancerId)) {
            $query['LoadBalancerId'] = $request->loadBalancerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AttachCommonBandwidthPackageToLoadBalancer',
            'version'     => '2020-06-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AttachCommonBandwidthPackageToLoadBalancerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * **AttachCommonBandwidthPackageToLoadBalancer** is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background. You can call [GetLoadBalancerAttribute](~~214362~~) to query the status of the task.
     *   * *   If the ALB instance is in the **Configuring** state, the EIP bandwidth plan is being associated with the ALB instance.
     *   * *   If the ALB instance is in the **Active** state, the EIP bandwidth plan is associated with the ALB instance.
     *   *
     * @param AttachCommonBandwidthPackageToLoadBalancerRequest $request AttachCommonBandwidthPackageToLoadBalancerRequest
     *
     * @return AttachCommonBandwidthPackageToLoadBalancerResponse AttachCommonBandwidthPackageToLoadBalancerResponse
     */
    public function attachCommonBandwidthPackageToLoadBalancer($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->attachCommonBandwidthPackageToLoadBalancerWithOptions($request, $runtime);
    }

    /**
     * @param CancelShiftLoadBalancerZonesRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return CancelShiftLoadBalancerZonesResponse
     */
    public function cancelShiftLoadBalancerZonesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->loadBalancerId)) {
            $query['LoadBalancerId'] = $request->loadBalancerId;
        }
        if (!Utils::isUnset($request->zoneMappings)) {
            $query['ZoneMappings'] = $request->zoneMappings;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CancelShiftLoadBalancerZones',
            'version'     => '2020-06-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CancelShiftLoadBalancerZonesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * ### Prerequisites
     *   * *   A standard or WAF-enabled Application Load Balancer (ALB) instance is created. For more information, see [CreateLoadBalancer](~~214358~~).
     *   * *   By default, the feature to create and manage AScript rules is unavailable. Log on to the [Quota Center console](https://quotas.console.aliyun.com/white-list-products/alb/quotas?spm=a2c4g.11186623.0.0.6e8834f6IFiF2I). On the **Privileges** page, enter the quota ID `slb_user_visible_gray_label/ascript` and apply for the quota.
     *   * ### Usage notes
     *   * *   **CreateAScripts** is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background. You can call the [ListAScripts](~~472574~~) operation to query the status of the task:
     *   *     *   If an AScript rule is in the **Creating** state, the AScript rule is being created.
     *   *     *   If an AScript rule is in the **Available** state, the AScript rule is created.
     *   * *   In the following table, the value of **N** is **1**.
     *   *
     * @param CreateAScriptsRequest $request CreateAScriptsRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateAScriptsResponse CreateAScriptsResponse
     */
    public function createAScriptsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->AScripts)) {
            $query['AScripts'] = $request->AScripts;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->listenerId)) {
            $query['ListenerId'] = $request->listenerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateAScripts',
            'version'     => '2020-06-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateAScriptsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ### Prerequisites
     *   * *   A standard or WAF-enabled Application Load Balancer (ALB) instance is created. For more information, see [CreateLoadBalancer](~~214358~~).
     *   * *   By default, the feature to create and manage AScript rules is unavailable. Log on to the [Quota Center console](https://quotas.console.aliyun.com/white-list-products/alb/quotas?spm=a2c4g.11186623.0.0.6e8834f6IFiF2I). On the **Privileges** page, enter the quota ID `slb_user_visible_gray_label/ascript` and apply for the quota.
     *   * ### Usage notes
     *   * *   **CreateAScripts** is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background. You can call the [ListAScripts](~~472574~~) operation to query the status of the task:
     *   *     *   If an AScript rule is in the **Creating** state, the AScript rule is being created.
     *   *     *   If an AScript rule is in the **Available** state, the AScript rule is created.
     *   * *   In the following table, the value of **N** is **1**.
     *   *
     * @param CreateAScriptsRequest $request CreateAScriptsRequest
     *
     * @return CreateAScriptsResponse CreateAScriptsResponse
     */
    public function createAScripts($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAScriptsWithOptions($request, $runtime);
    }

    /**
     * **CreateAcl** is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background. You can call the [ListAcls](~~213617~~) operation to query the status of the task.
     *   * *   If an ACL is in the **Creating** state, the ACL is being created.
     *   * *   If an ACL is in the **Available** state, the ACL is created.
     *   *
     * @param CreateAclRequest $request CreateAclRequest
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateAclResponse CreateAclResponse
     */
    public function createAclWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aclName)) {
            $query['AclName'] = $request->aclName;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateAcl',
            'version'     => '2020-06-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateAclResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * **CreateAcl** is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background. You can call the [ListAcls](~~213617~~) operation to query the status of the task.
     *   * *   If an ACL is in the **Creating** state, the ACL is being created.
     *   * *   If an ACL is in the **Available** state, the ACL is created.
     *   *
     * @param CreateAclRequest $request CreateAclRequest
     *
     * @return CreateAclResponse CreateAclResponse
     */
    public function createAcl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAclWithOptions($request, $runtime);
    }

    /**
     * @param CreateHealthCheckTemplateRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return CreateHealthCheckTemplateResponse
     */
    public function createHealthCheckTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->healthCheckCodes)) {
            $query['HealthCheckCodes'] = $request->healthCheckCodes;
        }
        if (!Utils::isUnset($request->healthCheckConnectPort)) {
            $query['HealthCheckConnectPort'] = $request->healthCheckConnectPort;
        }
        if (!Utils::isUnset($request->healthCheckHost)) {
            $query['HealthCheckHost'] = $request->healthCheckHost;
        }
        if (!Utils::isUnset($request->healthCheckHttpVersion)) {
            $query['HealthCheckHttpVersion'] = $request->healthCheckHttpVersion;
        }
        if (!Utils::isUnset($request->healthCheckInterval)) {
            $query['HealthCheckInterval'] = $request->healthCheckInterval;
        }
        if (!Utils::isUnset($request->healthCheckMethod)) {
            $query['HealthCheckMethod'] = $request->healthCheckMethod;
        }
        if (!Utils::isUnset($request->healthCheckPath)) {
            $query['HealthCheckPath'] = $request->healthCheckPath;
        }
        if (!Utils::isUnset($request->healthCheckProtocol)) {
            $query['HealthCheckProtocol'] = $request->healthCheckProtocol;
        }
        if (!Utils::isUnset($request->healthCheckTemplateName)) {
            $query['HealthCheckTemplateName'] = $request->healthCheckTemplateName;
        }
        if (!Utils::isUnset($request->healthCheckTimeout)) {
            $query['HealthCheckTimeout'] = $request->healthCheckTimeout;
        }
        if (!Utils::isUnset($request->healthyThreshold)) {
            $query['HealthyThreshold'] = $request->healthyThreshold;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        if (!Utils::isUnset($request->unhealthyThreshold)) {
            $query['UnhealthyThreshold'] = $request->unhealthyThreshold;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateHealthCheckTemplate',
            'version'     => '2020-06-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateHealthCheckTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * **CreateListener** is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background. You can call the [GetListenerAttribute](~~2254865~~) operation to query the status of the task.
     *   * *   If the HTTP, HTTPS, or QUIC listener is in the **Provisioning** state, the listener is being created.
     *   * *   If the HTTP, HTTPS, or QUIC listener is in the **Running** state, the listener is created.
     *   *
     * @param CreateListenerRequest $request CreateListenerRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateListenerResponse CreateListenerResponse
     */
    public function createListenerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->caCertificates)) {
            $query['CaCertificates'] = $request->caCertificates;
        }
        if (!Utils::isUnset($request->caEnabled)) {
            $query['CaEnabled'] = $request->caEnabled;
        }
        if (!Utils::isUnset($request->certificates)) {
            $query['Certificates'] = $request->certificates;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->defaultActions)) {
            $query['DefaultActions'] = $request->defaultActions;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->gzipEnabled)) {
            $query['GzipEnabled'] = $request->gzipEnabled;
        }
        if (!Utils::isUnset($request->http2Enabled)) {
            $query['Http2Enabled'] = $request->http2Enabled;
        }
        if (!Utils::isUnset($request->idleTimeout)) {
            $query['IdleTimeout'] = $request->idleTimeout;
        }
        if (!Utils::isUnset($request->listenerDescription)) {
            $query['ListenerDescription'] = $request->listenerDescription;
        }
        if (!Utils::isUnset($request->listenerPort)) {
            $query['ListenerPort'] = $request->listenerPort;
        }
        if (!Utils::isUnset($request->listenerProtocol)) {
            $query['ListenerProtocol'] = $request->listenerProtocol;
        }
        if (!Utils::isUnset($request->loadBalancerId)) {
            $query['LoadBalancerId'] = $request->loadBalancerId;
        }
        if (!Utils::isUnset($request->quicConfig)) {
            $query['QuicConfig'] = $request->quicConfig;
        }
        if (!Utils::isUnset($request->requestTimeout)) {
            $query['RequestTimeout'] = $request->requestTimeout;
        }
        if (!Utils::isUnset($request->securityPolicyId)) {
            $query['SecurityPolicyId'] = $request->securityPolicyId;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        if (!Utils::isUnset($request->XForwardedForConfig)) {
            $query['XForwardedForConfig'] = $request->XForwardedForConfig;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateListener',
            'version'     => '2020-06-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateListenerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * **CreateListener** is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background. You can call the [GetListenerAttribute](~~2254865~~) operation to query the status of the task.
     *   * *   If the HTTP, HTTPS, or QUIC listener is in the **Provisioning** state, the listener is being created.
     *   * *   If the HTTP, HTTPS, or QUIC listener is in the **Running** state, the listener is created.
     *   *
     * @param CreateListenerRequest $request CreateListenerRequest
     *
     * @return CreateListenerResponse CreateListenerResponse
     */
    public function createListener($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createListenerWithOptions($request, $runtime);
    }

    /**
     * **CreateLoadBalancer** is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background. You can call the [GetLoadBalancerAttribute](~~214362~~) operation to query the status of an ALB instance.
     *   * *   If an ALB instance is in the **Provisioning** state, it indicates that the ALB instance is being created.
     *   * *   If an ALB instance is in the **Active** state, it indicates that the ALB instance is created.
     *   *
     * @param CreateLoadBalancerRequest $request CreateLoadBalancerRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateLoadBalancerResponse CreateLoadBalancerResponse
     */
    public function createLoadBalancerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->addressAllocatedMode)) {
            $query['AddressAllocatedMode'] = $request->addressAllocatedMode;
        }
        if (!Utils::isUnset($request->addressIpVersion)) {
            $query['AddressIpVersion'] = $request->addressIpVersion;
        }
        if (!Utils::isUnset($request->addressType)) {
            $query['AddressType'] = $request->addressType;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->deletionProtectionEnabled)) {
            $query['DeletionProtectionEnabled'] = $request->deletionProtectionEnabled;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->loadBalancerBillingConfig)) {
            $query['LoadBalancerBillingConfig'] = $request->loadBalancerBillingConfig;
        }
        if (!Utils::isUnset($request->loadBalancerEdition)) {
            $query['LoadBalancerEdition'] = $request->loadBalancerEdition;
        }
        if (!Utils::isUnset($request->loadBalancerName)) {
            $query['LoadBalancerName'] = $request->loadBalancerName;
        }
        if (!Utils::isUnset($request->modificationProtectionConfig)) {
            $query['ModificationProtectionConfig'] = $request->modificationProtectionConfig;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        if (!Utils::isUnset($request->vpcId)) {
            $query['VpcId'] = $request->vpcId;
        }
        if (!Utils::isUnset($request->zoneMappings)) {
            $query['ZoneMappings'] = $request->zoneMappings;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateLoadBalancer',
            'version'     => '2020-06-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateLoadBalancerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * **CreateLoadBalancer** is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background. You can call the [GetLoadBalancerAttribute](~~214362~~) operation to query the status of an ALB instance.
     *   * *   If an ALB instance is in the **Provisioning** state, it indicates that the ALB instance is being created.
     *   * *   If an ALB instance is in the **Active** state, it indicates that the ALB instance is created.
     *   *
     * @param CreateLoadBalancerRequest $request CreateLoadBalancerRequest
     *
     * @return CreateLoadBalancerResponse CreateLoadBalancerResponse
     */
    public function createLoadBalancer($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createLoadBalancerWithOptions($request, $runtime);
    }

    /**
     * Take note of the following limits:
     *   * *   When you configure the **Redirect** action, you can use the default value only for the **HttpCode** parameter. Do not use the default values for the other parameters.
     *   * *   If you specify the **Rewrite** action together with other actions in a forwarding rule, make sure that the **ForwardGroup** action is specified.
     *   * *   **CreateRule** is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background. You can call the [ListRules](~~214379~~) operation to query the status of a forwarding rule.
     *   *     *   If a forwarding rule is in the **Provisioning** state, the forwarding rule is being created.
     *   *     *   If a forwarding rule is in the **Available** state, the forwarding rule is created.
     *   * *   You can set **RuleConditions** and **RuleActions** to add conditions and actions to a forwarding rule. The limits on conditions and actions are:
     *   *     *   Limits on conditions: 5 for a basic Application Load Balancer (ALB) instance, 10 for a standard ALB instance, and 10 for a WAF-enabled ALB instance.
     *   *     *   Limits on actions: 3 for a basic ALB instance, 5 for a standard ALB instance, and 5 for a WAF-enabled ALB instance.
     *   *
     * @param CreateRuleRequest $request CreateRuleRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateRuleResponse CreateRuleResponse
     */
    public function createRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->direction)) {
            $query['Direction'] = $request->direction;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->listenerId)) {
            $query['ListenerId'] = $request->listenerId;
        }
        if (!Utils::isUnset($request->priority)) {
            $query['Priority'] = $request->priority;
        }
        if (!Utils::isUnset($request->ruleActions)) {
            $query['RuleActions'] = $request->ruleActions;
        }
        if (!Utils::isUnset($request->ruleConditions)) {
            $query['RuleConditions'] = $request->ruleConditions;
        }
        if (!Utils::isUnset($request->ruleName)) {
            $query['RuleName'] = $request->ruleName;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateRule',
            'version'     => '2020-06-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Take note of the following limits:
     *   * *   When you configure the **Redirect** action, you can use the default value only for the **HttpCode** parameter. Do not use the default values for the other parameters.
     *   * *   If you specify the **Rewrite** action together with other actions in a forwarding rule, make sure that the **ForwardGroup** action is specified.
     *   * *   **CreateRule** is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background. You can call the [ListRules](~~214379~~) operation to query the status of a forwarding rule.
     *   *     *   If a forwarding rule is in the **Provisioning** state, the forwarding rule is being created.
     *   *     *   If a forwarding rule is in the **Available** state, the forwarding rule is created.
     *   * *   You can set **RuleConditions** and **RuleActions** to add conditions and actions to a forwarding rule. The limits on conditions and actions are:
     *   *     *   Limits on conditions: 5 for a basic Application Load Balancer (ALB) instance, 10 for a standard ALB instance, and 10 for a WAF-enabled ALB instance.
     *   *     *   Limits on actions: 3 for a basic ALB instance, 5 for a standard ALB instance, and 5 for a WAF-enabled ALB instance.
     *   *
     * @param CreateRuleRequest $request CreateRuleRequest
     *
     * @return CreateRuleResponse CreateRuleResponse
     */
    public function createRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createRuleWithOptions($request, $runtime);
    }

    /**
     * When you call this operation, take note of the following limits:
     *   * *   When you configure the **Redirect** action, you can use the default value for the **HttpCode** parameter but you cannot use the default values for all of the other parameters.
     *   * *   If you specify the **Rewrite** action and other actions in a forwarding rule, make sure that one of the actions is **ForwardGroup**.
     *   * *   **CreateRules** is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background. You can call the [ListRules](~~214379~~) operation to query the status of forwarding rules.
     *   *     *   If forwarding rules are in the **Provisioning** state, the forwarding rules are being created.
     *   *     *   If forwarding rules are in the **Available** state, the forwarding rules have been created.
     *   * *   You can set **RuleConditions** and **RuleActions** to add conditions and actions to a forwarding rule. Take note of the following limits on the number of conditions and the number of actions in each forwarding rule:
     *   *     *   Limits on conditions: You can specify at most 5 conditions if you use a basic Application Load Balancer (ALB) instance, at most 10 conditions if you use a standard ALB instance, and at most 10 conditions if you use a WAF-enabled ALB instance.
     *   *     *   Limits on actions: You can specify at most 3 actions if you use a basic ALB instance, at most 5 actions if you use a standard ALB instance, and at most 10 actions if you use a WAF-enabled ALB instance.
     *   *
     * @param CreateRulesRequest $request CreateRulesRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateRulesResponse CreateRulesResponse
     */
    public function createRulesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->listenerId)) {
            $query['ListenerId'] = $request->listenerId;
        }
        if (!Utils::isUnset($request->rules)) {
            $query['Rules'] = $request->rules;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateRules',
            'version'     => '2020-06-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * When you call this operation, take note of the following limits:
     *   * *   When you configure the **Redirect** action, you can use the default value for the **HttpCode** parameter but you cannot use the default values for all of the other parameters.
     *   * *   If you specify the **Rewrite** action and other actions in a forwarding rule, make sure that one of the actions is **ForwardGroup**.
     *   * *   **CreateRules** is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background. You can call the [ListRules](~~214379~~) operation to query the status of forwarding rules.
     *   *     *   If forwarding rules are in the **Provisioning** state, the forwarding rules are being created.
     *   *     *   If forwarding rules are in the **Available** state, the forwarding rules have been created.
     *   * *   You can set **RuleConditions** and **RuleActions** to add conditions and actions to a forwarding rule. Take note of the following limits on the number of conditions and the number of actions in each forwarding rule:
     *   *     *   Limits on conditions: You can specify at most 5 conditions if you use a basic Application Load Balancer (ALB) instance, at most 10 conditions if you use a standard ALB instance, and at most 10 conditions if you use a WAF-enabled ALB instance.
     *   *     *   Limits on actions: You can specify at most 3 actions if you use a basic ALB instance, at most 5 actions if you use a standard ALB instance, and at most 10 actions if you use a WAF-enabled ALB instance.
     *   *
     * @param CreateRulesRequest $request CreateRulesRequest
     *
     * @return CreateRulesResponse CreateRulesResponse
     */
    public function createRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createRulesWithOptions($request, $runtime);
    }

    /**
     * @param CreateSecurityPolicyRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return CreateSecurityPolicyResponse
     */
    public function createSecurityPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ciphers)) {
            $query['Ciphers'] = $request->ciphers;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->securityPolicyName)) {
            $query['SecurityPolicyName'] = $request->securityPolicyName;
        }
        if (!Utils::isUnset($request->TLSVersions)) {
            $query['TLSVersions'] = $request->TLSVersions;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateSecurityPolicy',
            'version'     => '2020-06-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateSecurityPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * **CreateServerGroup** is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background. You can call the [ListServerGroups](~~213627~~) operation to query the status of the task.
     *   * *   If a server group is in the **Creating** state, it indicates that the server group is being created.
     *   * *   If a server group is in the **Available** state, it indicates that the server group is created.
     *   *
     * @param CreateServerGroupRequest $request CreateServerGroupRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateServerGroupResponse CreateServerGroupResponse
     */
    public function createServerGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->healthCheckConfig)) {
            $query['HealthCheckConfig'] = $request->healthCheckConfig;
        }
        if (!Utils::isUnset($request->protocol)) {
            $query['Protocol'] = $request->protocol;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->scheduler)) {
            $query['Scheduler'] = $request->scheduler;
        }
        if (!Utils::isUnset($request->serverGroupName)) {
            $query['ServerGroupName'] = $request->serverGroupName;
        }
        if (!Utils::isUnset($request->serverGroupType)) {
            $query['ServerGroupType'] = $request->serverGroupType;
        }
        if (!Utils::isUnset($request->serviceName)) {
            $query['ServiceName'] = $request->serviceName;
        }
        if (!Utils::isUnset($request->stickySessionConfig)) {
            $query['StickySessionConfig'] = $request->stickySessionConfig;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        if (!Utils::isUnset($request->uchConfig)) {
            $query['UchConfig'] = $request->uchConfig;
        }
        if (!Utils::isUnset($request->upstreamKeepaliveEnabled)) {
            $query['UpstreamKeepaliveEnabled'] = $request->upstreamKeepaliveEnabled;
        }
        if (!Utils::isUnset($request->vpcId)) {
            $query['VpcId'] = $request->vpcId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateServerGroup',
            'version'     => '2020-06-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateServerGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * **CreateServerGroup** is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background. You can call the [ListServerGroups](~~213627~~) operation to query the status of the task.
     *   * *   If a server group is in the **Creating** state, it indicates that the server group is being created.
     *   * *   If a server group is in the **Available** state, it indicates that the server group is created.
     *   *
     * @param CreateServerGroupRequest $request CreateServerGroupRequest
     *
     * @return CreateServerGroupResponse CreateServerGroupResponse
     */
    public function createServerGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createServerGroupWithOptions($request, $runtime);
    }

    /**
     * **DeleteAScripts** is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background. You can call the [ListAScripts](~~472574~~) operation to query the status of the task:
     *   * *   If an AScript rule is in the **Deleting** state, the AScript rule is being deleted.
     *   * *   If an AScript rule cannot be found, the AScript rule is deleted.
     *   *
     * @param DeleteAScriptsRequest $request DeleteAScriptsRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteAScriptsResponse DeleteAScriptsResponse
     */
    public function deleteAScriptsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->AScriptIds)) {
            $query['AScriptIds'] = $request->AScriptIds;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteAScripts',
            'version'     => '2020-06-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteAScriptsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * **DeleteAScripts** is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background. You can call the [ListAScripts](~~472574~~) operation to query the status of the task:
     *   * *   If an AScript rule is in the **Deleting** state, the AScript rule is being deleted.
     *   * *   If an AScript rule cannot be found, the AScript rule is deleted.
     *   *
     * @param DeleteAScriptsRequest $request DeleteAScriptsRequest
     *
     * @return DeleteAScriptsResponse DeleteAScriptsResponse
     */
    public function deleteAScripts($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAScriptsWithOptions($request, $runtime);
    }

    /**
     * **DeleteAcl** is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background. You can call the [ListAcls](~~213617~~) operation to query the status of the task.
     *   * *   If the ACL is in the **Deleting** state, the ACL is being deleted.
     *   * *   If the ACL cannot be found, the ACL is deleted.
     *   *
     * @param DeleteAclRequest $request DeleteAclRequest
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteAclResponse DeleteAclResponse
     */
    public function deleteAclWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aclId)) {
            $query['AclId'] = $request->aclId;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteAcl',
            'version'     => '2020-06-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteAclResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * **DeleteAcl** is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background. You can call the [ListAcls](~~213617~~) operation to query the status of the task.
     *   * *   If the ACL is in the **Deleting** state, the ACL is being deleted.
     *   * *   If the ACL cannot be found, the ACL is deleted.
     *   *
     * @param DeleteAclRequest $request DeleteAclRequest
     *
     * @return DeleteAclResponse DeleteAclResponse
     */
    public function deleteAcl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAclWithOptions($request, $runtime);
    }

    /**
     * @param DeleteHealthCheckTemplatesRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DeleteHealthCheckTemplatesResponse
     */
    public function deleteHealthCheckTemplatesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->healthCheckTemplateIds)) {
            $query['HealthCheckTemplateIds'] = $request->healthCheckTemplateIds;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteHealthCheckTemplates',
            'version'     => '2020-06-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteHealthCheckTemplatesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * **DeleteListener** is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background. You can call [GetListenerAttribute](~~2254865~~) to query the status of the task.
     *   * *   If the listener is in the **Deleting** state, the listener is being deleted.
     *   * *   If the listener cannot be found, the listener is deleted.
     *   *
     * @param DeleteListenerRequest $request DeleteListenerRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteListenerResponse DeleteListenerResponse
     */
    public function deleteListenerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->listenerId)) {
            $query['ListenerId'] = $request->listenerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteListener',
            'version'     => '2020-06-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteListenerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * **DeleteListener** is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background. You can call [GetListenerAttribute](~~2254865~~) to query the status of the task.
     *   * *   If the listener is in the **Deleting** state, the listener is being deleted.
     *   * *   If the listener cannot be found, the listener is deleted.
     *   *
     * @param DeleteListenerRequest $request DeleteListenerRequest
     *
     * @return DeleteListenerResponse DeleteListenerResponse
     */
    public function deleteListener($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteListenerWithOptions($request, $runtime);
    }

    /**
     * **DeleteLoadBalancer** is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background. You can call [GetLoadBalancerAttribute](~~214362~~) to query the status of the task.
     *   * *   If an ALB instance is in the **Deleting** state, the ALB instance is being deleted.
     *   * *   If an ALB instance cannot be found, the ALB instance is deleted.
     *   *
     * @param DeleteLoadBalancerRequest $request DeleteLoadBalancerRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteLoadBalancerResponse DeleteLoadBalancerResponse
     */
    public function deleteLoadBalancerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->loadBalancerId)) {
            $query['LoadBalancerId'] = $request->loadBalancerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteLoadBalancer',
            'version'     => '2020-06-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteLoadBalancerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * **DeleteLoadBalancer** is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background. You can call [GetLoadBalancerAttribute](~~214362~~) to query the status of the task.
     *   * *   If an ALB instance is in the **Deleting** state, the ALB instance is being deleted.
     *   * *   If an ALB instance cannot be found, the ALB instance is deleted.
     *   *
     * @param DeleteLoadBalancerRequest $request DeleteLoadBalancerRequest
     *
     * @return DeleteLoadBalancerResponse DeleteLoadBalancerResponse
     */
    public function deleteLoadBalancer($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteLoadBalancerWithOptions($request, $runtime);
    }

    /**
     * **DeleteRule** is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background. You can call the [ListRules](~~214379~~) operation to query the status of a forwarding rule:
     *   * *   If the forwarding rule is in the **Deleting** state, the forwarding rule is being deleted.
     *   * *   If the forwarding rule cannot be found, the forwarding rule is deleted.
     *   *
     * @param DeleteRuleRequest $request DeleteRuleRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteRuleResponse DeleteRuleResponse
     */
    public function deleteRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->ruleId)) {
            $query['RuleId'] = $request->ruleId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteRule',
            'version'     => '2020-06-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * **DeleteRule** is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background. You can call the [ListRules](~~214379~~) operation to query the status of a forwarding rule:
     *   * *   If the forwarding rule is in the **Deleting** state, the forwarding rule is being deleted.
     *   * *   If the forwarding rule cannot be found, the forwarding rule is deleted.
     *   *
     * @param DeleteRuleRequest $request DeleteRuleRequest
     *
     * @return DeleteRuleResponse DeleteRuleResponse
     */
    public function deleteRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteRuleWithOptions($request, $runtime);
    }

    /**
     * **DeleteRules** is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background. You can call the [ListRules](~~214379~~) operation to query the status of forwarding rules.
     *   * *   If the forwarding rules are in the **Deleting** state, the forwarding rules are being deleted.
     *   * *   If the forwarding rules cannot be found, the forwarding rules are deleted.
     *   *
     * @param DeleteRulesRequest $request DeleteRulesRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteRulesResponse DeleteRulesResponse
     */
    public function deleteRulesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->ruleIds)) {
            $query['RuleIds'] = $request->ruleIds;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteRules',
            'version'     => '2020-06-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * **DeleteRules** is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background. You can call the [ListRules](~~214379~~) operation to query the status of forwarding rules.
     *   * *   If the forwarding rules are in the **Deleting** state, the forwarding rules are being deleted.
     *   * *   If the forwarding rules cannot be found, the forwarding rules are deleted.
     *   *
     * @param DeleteRulesRequest $request DeleteRulesRequest
     *
     * @return DeleteRulesResponse DeleteRulesResponse
     */
    public function deleteRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteRulesWithOptions($request, $runtime);
    }

    /**
     * @param DeleteSecurityPolicyRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DeleteSecurityPolicyResponse
     */
    public function deleteSecurityPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->securityPolicyId)) {
            $query['SecurityPolicyId'] = $request->securityPolicyId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteSecurityPolicy',
            'version'     => '2020-06-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteSecurityPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * **DeleteServerGroup** is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background. You can call the [ListServerGroups](~~213627~~) operation to query the status of the task.
     *   * *   If a server group is in the **Deleting** state, it indicates that the server group is being deleted.
     *   * *   If a specified server group cannot be found, it indicates that the server group has been deleted.
     *   *
     * @param DeleteServerGroupRequest $request DeleteServerGroupRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteServerGroupResponse DeleteServerGroupResponse
     */
    public function deleteServerGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->serverGroupId)) {
            $query['ServerGroupId'] = $request->serverGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteServerGroup',
            'version'     => '2020-06-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteServerGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * **DeleteServerGroup** is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background. You can call the [ListServerGroups](~~213627~~) operation to query the status of the task.
     *   * *   If a server group is in the **Deleting** state, it indicates that the server group is being deleted.
     *   * *   If a specified server group cannot be found, it indicates that the server group has been deleted.
     *   *
     * @param DeleteServerGroupRequest $request DeleteServerGroupRequest
     *
     * @return DeleteServerGroupResponse DeleteServerGroupResponse
     */
    public function deleteServerGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteServerGroupWithOptions($request, $runtime);
    }

    /**
     * @param DescribeRegionsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeRegionsResponse
     */
    public function describeRegionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeRegions',
            'version'     => '2020-06-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeRegionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param DescribeZonesRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DescribeZonesResponse
     */
    public function describeZonesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeZones',
            'version'     => '2020-06-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeZonesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * **DetachCommonBandwidthPackageFromLoadBalancer** is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background. You can call the [GetLoadBalancerAttribute](~~214359~~) operation to query the status of the task.
     *   * *   If an ALB instance is in the **Configuring** state, the EIP bandwidth plan is being disassociated from the ALB instance.
     *   * *   If an ALB instance is in the **Active** state, the EIP bandwidth plan is disassociated from the ALB instance.
     *   *
     * @param DetachCommonBandwidthPackageFromLoadBalancerRequest $request DetachCommonBandwidthPackageFromLoadBalancerRequest
     * @param RuntimeOptions                                      $runtime runtime options for this request RuntimeOptions
     *
     * @return DetachCommonBandwidthPackageFromLoadBalancerResponse DetachCommonBandwidthPackageFromLoadBalancerResponse
     */
    public function detachCommonBandwidthPackageFromLoadBalancerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bandwidthPackageId)) {
            $query['BandwidthPackageId'] = $request->bandwidthPackageId;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->loadBalancerId)) {
            $query['LoadBalancerId'] = $request->loadBalancerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DetachCommonBandwidthPackageFromLoadBalancer',
            'version'     => '2020-06-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DetachCommonBandwidthPackageFromLoadBalancerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * **DetachCommonBandwidthPackageFromLoadBalancer** is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background. You can call the [GetLoadBalancerAttribute](~~214359~~) operation to query the status of the task.
     *   * *   If an ALB instance is in the **Configuring** state, the EIP bandwidth plan is being disassociated from the ALB instance.
     *   * *   If an ALB instance is in the **Active** state, the EIP bandwidth plan is disassociated from the ALB instance.
     *   *
     * @param DetachCommonBandwidthPackageFromLoadBalancerRequest $request DetachCommonBandwidthPackageFromLoadBalancerRequest
     *
     * @return DetachCommonBandwidthPackageFromLoadBalancerResponse DetachCommonBandwidthPackageFromLoadBalancerResponse
     */
    public function detachCommonBandwidthPackageFromLoadBalancer($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detachCommonBandwidthPackageFromLoadBalancerWithOptions($request, $runtime);
    }

    /**
     * @param DisableDeletionProtectionRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DisableDeletionProtectionResponse
     */
    public function disableDeletionProtectionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->resourceId)) {
            $query['ResourceId'] = $request->resourceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DisableDeletionProtection',
            'version'     => '2020-06-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DisableDeletionProtectionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param DisableLoadBalancerAccessLogRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DisableLoadBalancerAccessLogResponse
     */
    public function disableLoadBalancerAccessLogWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->loadBalancerId)) {
            $query['LoadBalancerId'] = $request->loadBalancerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DisableLoadBalancerAccessLog',
            'version'     => '2020-06-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DisableLoadBalancerAccessLogResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * ### Prerequisites
     *   * An ALB instance is created and IPv4/IPv6 dual stack is enabled for the instance. You can call the [CreateLoadBalancer](~~214358~~) operation and set **AddressIpVersion** to **DualStack** to create a dual-stack ALB instance.
     *   * > If you set **AddressIpVersion** to **DualStack**:
     *   * *   If you set **AddressType** to **Internet**, the ALB instance uses a public IPv4 IP address and a private IPv6 address.
     *   * *   If you set **AddressType** to **Intranet**, the ALB instance uses a private IPv4 IP address and a private IPv6 address.
     *   * ### Description
     *   * *   After the DisableLoadBalancerIpv6Internet operation is called, the value of **Ipv6AddressType** is changed to **Intranet** and the type of the IPv6 address of the ALB instance is changed from public to private. If you upgrade the instance or the instance scales elastic network interfaces (ENIs) along with workloads, private IPv6 addresses are automatically enabled for the instance and the new ENIs. You can call the [GetLoadBalancerAttribute](~~214362~~) operation to query the value of **Ipv6AddressType**.
     *   * *   **DisableLoadBalancerIpv6Internet** is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background. You can call the [GetLoadBalancerAttribute](~~214362~~) operation to query the status of the task.
     *   *     *   If the ALB instance is in the **Configuring** state, the network type of the IPv6 address that is used by the ALB instance is being changed.
     *   *     *   If the ALB instance is in the **Active** state, the network type of the IPv6 address that is used by the ALB instance is changed.
     *   *
     * @param DisableLoadBalancerIpv6InternetRequest $request DisableLoadBalancerIpv6InternetRequest
     * @param RuntimeOptions                         $runtime runtime options for this request RuntimeOptions
     *
     * @return DisableLoadBalancerIpv6InternetResponse DisableLoadBalancerIpv6InternetResponse
     */
    public function disableLoadBalancerIpv6InternetWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->loadBalancerId)) {
            $query['LoadBalancerId'] = $request->loadBalancerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DisableLoadBalancerIpv6Internet',
            'version'     => '2020-06-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DisableLoadBalancerIpv6InternetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ### Prerequisites
     *   * An ALB instance is created and IPv4/IPv6 dual stack is enabled for the instance. You can call the [CreateLoadBalancer](~~214358~~) operation and set **AddressIpVersion** to **DualStack** to create a dual-stack ALB instance.
     *   * > If you set **AddressIpVersion** to **DualStack**:
     *   * *   If you set **AddressType** to **Internet**, the ALB instance uses a public IPv4 IP address and a private IPv6 address.
     *   * *   If you set **AddressType** to **Intranet**, the ALB instance uses a private IPv4 IP address and a private IPv6 address.
     *   * ### Description
     *   * *   After the DisableLoadBalancerIpv6Internet operation is called, the value of **Ipv6AddressType** is changed to **Intranet** and the type of the IPv6 address of the ALB instance is changed from public to private. If you upgrade the instance or the instance scales elastic network interfaces (ENIs) along with workloads, private IPv6 addresses are automatically enabled for the instance and the new ENIs. You can call the [GetLoadBalancerAttribute](~~214362~~) operation to query the value of **Ipv6AddressType**.
     *   * *   **DisableLoadBalancerIpv6Internet** is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background. You can call the [GetLoadBalancerAttribute](~~214362~~) operation to query the status of the task.
     *   *     *   If the ALB instance is in the **Configuring** state, the network type of the IPv6 address that is used by the ALB instance is being changed.
     *   *     *   If the ALB instance is in the **Active** state, the network type of the IPv6 address that is used by the ALB instance is changed.
     *   *
     * @param DisableLoadBalancerIpv6InternetRequest $request DisableLoadBalancerIpv6InternetRequest
     *
     * @return DisableLoadBalancerIpv6InternetResponse DisableLoadBalancerIpv6InternetResponse
     */
    public function disableLoadBalancerIpv6Internet($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->disableLoadBalancerIpv6InternetWithOptions($request, $runtime);
    }

    /**
     * **DeleteDhcpOptionsSet** is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background. You can call the [ListAclRelations](~~213618~~) operation to query the status of the task.
     *   * *   If an ACL is in the **Dissociating** state, the ACL is being disassociated from the listener.
     *   * *   If an ACL is in the **Dissociated** state, the ACL is disassociated from the listener.
     *   *
     * @param DissociateAclsFromListenerRequest $request DissociateAclsFromListenerRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return DissociateAclsFromListenerResponse DissociateAclsFromListenerResponse
     */
    public function dissociateAclsFromListenerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aclIds)) {
            $query['AclIds'] = $request->aclIds;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->listenerId)) {
            $query['ListenerId'] = $request->listenerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DissociateAclsFromListener',
            'version'     => '2020-06-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DissociateAclsFromListenerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * **DeleteDhcpOptionsSet** is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background. You can call the [ListAclRelations](~~213618~~) operation to query the status of the task.
     *   * *   If an ACL is in the **Dissociating** state, the ACL is being disassociated from the listener.
     *   * *   If an ACL is in the **Dissociated** state, the ACL is disassociated from the listener.
     *   *
     * @param DissociateAclsFromListenerRequest $request DissociateAclsFromListenerRequest
     *
     * @return DissociateAclsFromListenerResponse DissociateAclsFromListenerResponse
     */
    public function dissociateAclsFromListener($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->dissociateAclsFromListenerWithOptions($request, $runtime);
    }

    /**
     * **DissociateAdditionalCertificatesFromListener** is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background. You can call the [ListListenerCertificates](~~214354~~) operation to query the status of the task. - If an additional certificate is in the **Dissociating** state, the additional certificate is being disassociated. - If an additional certificate is in the **Dissociated** state, the additional certificate is disassociated.
     *   *
     * @param DissociateAdditionalCertificatesFromListenerRequest $request DissociateAdditionalCertificatesFromListenerRequest
     * @param RuntimeOptions                                      $runtime runtime options for this request RuntimeOptions
     *
     * @return DissociateAdditionalCertificatesFromListenerResponse DissociateAdditionalCertificatesFromListenerResponse
     */
    public function dissociateAdditionalCertificatesFromListenerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->certificates)) {
            $query['Certificates'] = $request->certificates;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->listenerId)) {
            $query['ListenerId'] = $request->listenerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DissociateAdditionalCertificatesFromListener',
            'version'     => '2020-06-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DissociateAdditionalCertificatesFromListenerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * **DissociateAdditionalCertificatesFromListener** is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background. You can call the [ListListenerCertificates](~~214354~~) operation to query the status of the task. - If an additional certificate is in the **Dissociating** state, the additional certificate is being disassociated. - If an additional certificate is in the **Dissociated** state, the additional certificate is disassociated.
     *   *
     * @param DissociateAdditionalCertificatesFromListenerRequest $request DissociateAdditionalCertificatesFromListenerRequest
     *
     * @return DissociateAdditionalCertificatesFromListenerResponse DissociateAdditionalCertificatesFromListenerResponse
     */
    public function dissociateAdditionalCertificatesFromListener($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->dissociateAdditionalCertificatesFromListenerWithOptions($request, $runtime);
    }

    /**
     * @param EnableDeletionProtectionRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return EnableDeletionProtectionResponse
     */
    public function enableDeletionProtectionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->resourceId)) {
            $query['ResourceId'] = $request->resourceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'EnableDeletionProtection',
            'version'     => '2020-06-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return EnableDeletionProtectionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param EnableLoadBalancerAccessLogRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return EnableLoadBalancerAccessLogResponse
     */
    public function enableLoadBalancerAccessLogWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->loadBalancerId)) {
            $query['LoadBalancerId'] = $request->loadBalancerId;
        }
        if (!Utils::isUnset($request->logProject)) {
            $query['LogProject'] = $request->logProject;
        }
        if (!Utils::isUnset($request->logStore)) {
            $query['LogStore'] = $request->logStore;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'EnableLoadBalancerAccessLog',
            'version'     => '2020-06-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return EnableLoadBalancerAccessLogResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * ### Prerequisites
     *   * An ALB instance is created and IPv4/IPv6 dual stack is enabled for the instance. You can call the [CreateLoadBalancer](~~214358~~) operation and set **AddressIpVersion** to **DualStack** to create a dual-stack ALB instance.
     *   * > If you set **AddressIpVersion** to **DualStack**:
     *   * *   If you set **AddressType** to **Internet**, the ALB instance uses a public IPv4 IP address and a private IPv6 address.
     *   * *   If you set **AddressType** to **Intranet**, the ALB instance uses a private IPv4 IP address and a private IPv6 address.
     *   * ### Description
     *   * *   After the EnableLoadBalancerIpv6Internet operation is called, the value of **Ipv6AddressType** is changed to **Internet** and the type of the IPv6 address of the ALB instance is changed from private to public. If you upgrade the instance or the instance scales elastic network interfaces (ENIs) along with workloads, public IPv6 addresses are automatically enabled for the instance and the new ENIs. You can call the [GetLoadBalancerAttribute](~~214362~~) operation to query the value of **Ipv6AddressType**.
     *   * *   **EnableLoadBalancerIpv6Internet** is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background. You can call the [GetLoadBalancerAttribute](~~214362~~) operation to query the status of the task.
     *   *     *   If the ALB instance is in the **Configuring** state, the network type of the IPv6 address that is used by the ALB instance is being changed.
     *   *     *   If the ALB instance is in the **Active** state, the network type of the IPv6 address that is used by the ALB instance is changed.
     *   *
     * @param EnableLoadBalancerIpv6InternetRequest $request EnableLoadBalancerIpv6InternetRequest
     * @param RuntimeOptions                        $runtime runtime options for this request RuntimeOptions
     *
     * @return EnableLoadBalancerIpv6InternetResponse EnableLoadBalancerIpv6InternetResponse
     */
    public function enableLoadBalancerIpv6InternetWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->loadBalancerId)) {
            $query['LoadBalancerId'] = $request->loadBalancerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'EnableLoadBalancerIpv6Internet',
            'version'     => '2020-06-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return EnableLoadBalancerIpv6InternetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ### Prerequisites
     *   * An ALB instance is created and IPv4/IPv6 dual stack is enabled for the instance. You can call the [CreateLoadBalancer](~~214358~~) operation and set **AddressIpVersion** to **DualStack** to create a dual-stack ALB instance.
     *   * > If you set **AddressIpVersion** to **DualStack**:
     *   * *   If you set **AddressType** to **Internet**, the ALB instance uses a public IPv4 IP address and a private IPv6 address.
     *   * *   If you set **AddressType** to **Intranet**, the ALB instance uses a private IPv4 IP address and a private IPv6 address.
     *   * ### Description
     *   * *   After the EnableLoadBalancerIpv6Internet operation is called, the value of **Ipv6AddressType** is changed to **Internet** and the type of the IPv6 address of the ALB instance is changed from private to public. If you upgrade the instance or the instance scales elastic network interfaces (ENIs) along with workloads, public IPv6 addresses are automatically enabled for the instance and the new ENIs. You can call the [GetLoadBalancerAttribute](~~214362~~) operation to query the value of **Ipv6AddressType**.
     *   * *   **EnableLoadBalancerIpv6Internet** is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background. You can call the [GetLoadBalancerAttribute](~~214362~~) operation to query the status of the task.
     *   *     *   If the ALB instance is in the **Configuring** state, the network type of the IPv6 address that is used by the ALB instance is being changed.
     *   *     *   If the ALB instance is in the **Active** state, the network type of the IPv6 address that is used by the ALB instance is changed.
     *   *
     * @param EnableLoadBalancerIpv6InternetRequest $request EnableLoadBalancerIpv6InternetRequest
     *
     * @return EnableLoadBalancerIpv6InternetResponse EnableLoadBalancerIpv6InternetResponse
     */
    public function enableLoadBalancerIpv6Internet($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableLoadBalancerIpv6InternetWithOptions($request, $runtime);
    }

    /**
     * @param GetHealthCheckTemplateAttributeRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return GetHealthCheckTemplateAttributeResponse
     */
    public function getHealthCheckTemplateAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->healthCheckTemplateId)) {
            $query['HealthCheckTemplateId'] = $request->healthCheckTemplateId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetHealthCheckTemplateAttribute',
            'version'     => '2020-06-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetHealthCheckTemplateAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param GetListenerAttributeRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return GetListenerAttributeResponse
     */
    public function getListenerAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->listenerId)) {
            $query['ListenerId'] = $request->listenerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetListenerAttribute',
            'version'     => '2020-06-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetListenerAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param GetListenerHealthStatusRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return GetListenerHealthStatusResponse
     */
    public function getListenerHealthStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->includeRule)) {
            $query['IncludeRule'] = $request->includeRule;
        }
        if (!Utils::isUnset($request->listenerId)) {
            $query['ListenerId'] = $request->listenerId;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetListenerHealthStatus',
            'version'     => '2020-06-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetListenerHealthStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param GetLoadBalancerAttributeRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return GetLoadBalancerAttributeResponse
     */
    public function getLoadBalancerAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->loadBalancerId)) {
            $query['LoadBalancerId'] = $request->loadBalancerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetLoadBalancerAttribute',
            'version'     => '2020-06-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetLoadBalancerAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param ListAScriptsRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ListAScriptsResponse
     */
    public function listAScriptsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->AScriptIds)) {
            $query['AScriptIds'] = $request->AScriptIds;
        }
        if (!Utils::isUnset($request->AScriptNames)) {
            $query['AScriptNames'] = $request->AScriptNames;
        }
        if (!Utils::isUnset($request->listenerIds)) {
            $query['ListenerIds'] = $request->listenerIds;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListAScripts',
            'version'     => '2020-06-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListAScriptsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param ListAclEntriesRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ListAclEntriesResponse
     */
    public function listAclEntriesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aclId)) {
            $query['AclId'] = $request->aclId;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListAclEntries',
            'version'     => '2020-06-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListAclEntriesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param ListAclRelationsRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListAclRelationsResponse
     */
    public function listAclRelationsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aclIds)) {
            $query['AclIds'] = $request->aclIds;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListAclRelations',
            'version'     => '2020-06-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListAclRelationsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param ListAclsRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return ListAclsResponse
     */
    public function listAclsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aclIds)) {
            $query['AclIds'] = $request->aclIds;
        }
        if (!Utils::isUnset($request->aclNames)) {
            $query['AclNames'] = $request->aclNames;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListAcls',
            'version'     => '2020-06-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListAclsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param ListAsynJobsRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ListAsynJobsResponse
     */
    public function listAsynJobsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->apiName)) {
            $query['ApiName'] = $request->apiName;
        }
        if (!Utils::isUnset($request->beginTime)) {
            $query['BeginTime'] = $request->beginTime;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->jobIds)) {
            $query['JobIds'] = $request->jobIds;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->resourceIds)) {
            $query['ResourceIds'] = $request->resourceIds;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListAsynJobs',
            'version'     => '2020-06-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListAsynJobsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param ListHealthCheckTemplatesRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ListHealthCheckTemplatesResponse
     */
    public function listHealthCheckTemplatesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->healthCheckTemplateIds)) {
            $query['HealthCheckTemplateIds'] = $request->healthCheckTemplateIds;
        }
        if (!Utils::isUnset($request->healthCheckTemplateNames)) {
            $query['HealthCheckTemplateNames'] = $request->healthCheckTemplateNames;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListHealthCheckTemplates',
            'version'     => '2020-06-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListHealthCheckTemplatesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param ListListenerCertificatesRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ListListenerCertificatesResponse
     */
    public function listListenerCertificatesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->certificateType)) {
            $query['CertificateType'] = $request->certificateType;
        }
        if (!Utils::isUnset($request->listenerId)) {
            $query['ListenerId'] = $request->listenerId;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListListenerCertificates',
            'version'     => '2020-06-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListListenerCertificatesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param ListListenersRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ListListenersResponse
     */
    public function listListenersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->listenerIds)) {
            $query['ListenerIds'] = $request->listenerIds;
        }
        if (!Utils::isUnset($request->listenerProtocol)) {
            $query['ListenerProtocol'] = $request->listenerProtocol;
        }
        if (!Utils::isUnset($request->loadBalancerIds)) {
            $query['LoadBalancerIds'] = $request->loadBalancerIds;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListListeners',
            'version'     => '2020-06-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListListenersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param ListLoadBalancersRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ListLoadBalancersResponse
     */
    public function listLoadBalancersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->addressIpVersion)) {
            $query['AddressIpVersion'] = $request->addressIpVersion;
        }
        if (!Utils::isUnset($request->addressType)) {
            $query['AddressType'] = $request->addressType;
        }
        if (!Utils::isUnset($request->DNSName)) {
            $query['DNSName'] = $request->DNSName;
        }
        if (!Utils::isUnset($request->ipv6AddressType)) {
            $query['Ipv6AddressType'] = $request->ipv6AddressType;
        }
        if (!Utils::isUnset($request->loadBalancerBussinessStatus)) {
            $query['LoadBalancerBussinessStatus'] = $request->loadBalancerBussinessStatus;
        }
        if (!Utils::isUnset($request->loadBalancerIds)) {
            $query['LoadBalancerIds'] = $request->loadBalancerIds;
        }
        if (!Utils::isUnset($request->loadBalancerNames)) {
            $query['LoadBalancerNames'] = $request->loadBalancerNames;
        }
        if (!Utils::isUnset($request->loadBalancerStatus)) {
            $query['LoadBalancerStatus'] = $request->loadBalancerStatus;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->payType)) {
            $query['PayType'] = $request->payType;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        if (!Utils::isUnset($request->vpcIds)) {
            $query['VpcIds'] = $request->vpcIds;
        }
        if (!Utils::isUnset($request->zoneId)) {
            $query['ZoneId'] = $request->zoneId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListLoadBalancers',
            'version'     => '2020-06-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListLoadBalancersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param ListRulesRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return ListRulesResponse
     */
    public function listRulesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->direction)) {
            $query['Direction'] = $request->direction;
        }
        if (!Utils::isUnset($request->listenerIds)) {
            $query['ListenerIds'] = $request->listenerIds;
        }
        if (!Utils::isUnset($request->loadBalancerIds)) {
            $query['LoadBalancerIds'] = $request->loadBalancerIds;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->ruleIds)) {
            $query['RuleIds'] = $request->ruleIds;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListRules',
            'version'     => '2020-06-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param ListSecurityPoliciesRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ListSecurityPoliciesResponse
     */
    public function listSecurityPoliciesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->securityPolicyIds)) {
            $query['SecurityPolicyIds'] = $request->securityPolicyIds;
        }
        if (!Utils::isUnset($request->securityPolicyNames)) {
            $query['SecurityPolicyNames'] = $request->securityPolicyNames;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListSecurityPolicies',
            'version'     => '2020-06-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListSecurityPoliciesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param ListSecurityPolicyRelationsRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return ListSecurityPolicyRelationsResponse
     */
    public function listSecurityPolicyRelationsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->securityPolicyIds)) {
            $query['SecurityPolicyIds'] = $request->securityPolicyIds;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListSecurityPolicyRelations',
            'version'     => '2020-06-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListSecurityPolicyRelationsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param ListServerGroupServersRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ListServerGroupServersResponse
     */
    public function listServerGroupServersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->serverGroupId)) {
            $query['ServerGroupId'] = $request->serverGroupId;
        }
        if (!Utils::isUnset($request->serverIds)) {
            $query['ServerIds'] = $request->serverIds;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListServerGroupServers',
            'version'     => '2020-06-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListServerGroupServersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param ListServerGroupsRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListServerGroupsResponse
     */
    public function listServerGroupsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->serverGroupIds)) {
            $query['ServerGroupIds'] = $request->serverGroupIds;
        }
        if (!Utils::isUnset($request->serverGroupNames)) {
            $query['ServerGroupNames'] = $request->serverGroupNames;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        if (!Utils::isUnset($request->vpcId)) {
            $query['VpcId'] = $request->vpcId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListServerGroups',
            'version'     => '2020-06-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListServerGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param RuntimeOptions $runtime
     *
     * @return ListSystemSecurityPoliciesResponse
     */
    public function listSystemSecurityPoliciesWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'ListSystemSecurityPolicies',
            'version'     => '2020-06-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListSystemSecurityPoliciesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return ListSystemSecurityPoliciesResponse
     */
    public function listSystemSecurityPolicies()
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSystemSecurityPoliciesWithOptions($runtime);
    }

    /**
     * @param ListTagKeysRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return ListTagKeysResponse
     */
    public function listTagKeysWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->category)) {
            $query['Category'] = $request->category;
        }
        if (!Utils::isUnset($request->keyword)) {
            $query['Keyword'] = $request->keyword;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListTagKeys',
            'version'     => '2020-06-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListTagKeysResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param ListTagResourcesRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListTagResourcesResponse
     */
    public function listTagResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->resourceId)) {
            $query['ResourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListTagResources',
            'version'     => '2020-06-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListTagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param ListTagValuesRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ListTagValuesResponse
     */
    public function listTagValuesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->resourceId)) {
            $query['ResourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->tagKey)) {
            $query['TagKey'] = $request->tagKey;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListTagValues',
            'version'     => '2020-06-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListTagValuesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param MoveResourceGroupRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return MoveResourceGroupResponse
     */
    public function moveResourceGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->newResourceGroupId)) {
            $query['NewResourceGroupId'] = $request->newResourceGroupId;
        }
        if (!Utils::isUnset($request->resourceId)) {
            $query['ResourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'MoveResourceGroup',
            'version'     => '2020-06-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return MoveResourceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * **RemoveEntriesFromAcl** is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background. You can call the [ListAclEntries](~~213616~~) operation to query the status of the task.
     *   * *   If an ACL is in the **Removing** state, the entries are being removed.
     *   * *   If an ACL cannot be found, the entries are removed.
     *   *
     * @param RemoveEntriesFromAclRequest $request RemoveEntriesFromAclRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return RemoveEntriesFromAclResponse RemoveEntriesFromAclResponse
     */
    public function removeEntriesFromAclWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aclId)) {
            $query['AclId'] = $request->aclId;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->entries)) {
            $query['Entries'] = $request->entries;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RemoveEntriesFromAcl',
            'version'     => '2020-06-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RemoveEntriesFromAclResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * **RemoveEntriesFromAcl** is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background. You can call the [ListAclEntries](~~213616~~) operation to query the status of the task.
     *   * *   If an ACL is in the **Removing** state, the entries are being removed.
     *   * *   If an ACL cannot be found, the entries are removed.
     *   *
     * @param RemoveEntriesFromAclRequest $request RemoveEntriesFromAclRequest
     *
     * @return RemoveEntriesFromAclResponse RemoveEntriesFromAclResponse
     */
    public function removeEntriesFromAcl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeEntriesFromAclWithOptions($request, $runtime);
    }

    /**
     * **RemoveServersFromServerGroup** is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background.
     *   * 1.  You can call the [ListServerGroups](~~213627~~) operation to query the status of a server group.
     *   *     *   If a server group is in the **Configuring** state, it indicates that the server group is being modified.
     *   *     *   If a server group is in the **Available** state, it indicates that the server group is running.
     *   * 2.  You can call the [ListServerGroupServers](~~213628~~) operation to query the status of a backend server.
     *   *     *   If a backend server is in the **Removing** state, the server is being removed from the server group.
     *   *     *   If a backend server cannot be found, the server is no longer in the server group.
     *   *
     * @param RemoveServersFromServerGroupRequest $request RemoveServersFromServerGroupRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return RemoveServersFromServerGroupResponse RemoveServersFromServerGroupResponse
     */
    public function removeServersFromServerGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->serverGroupId)) {
            $query['ServerGroupId'] = $request->serverGroupId;
        }
        if (!Utils::isUnset($request->servers)) {
            $query['Servers'] = $request->servers;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RemoveServersFromServerGroup',
            'version'     => '2020-06-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RemoveServersFromServerGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * **RemoveServersFromServerGroup** is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background.
     *   * 1.  You can call the [ListServerGroups](~~213627~~) operation to query the status of a server group.
     *   *     *   If a server group is in the **Configuring** state, it indicates that the server group is being modified.
     *   *     *   If a server group is in the **Available** state, it indicates that the server group is running.
     *   * 2.  You can call the [ListServerGroupServers](~~213628~~) operation to query the status of a backend server.
     *   *     *   If a backend server is in the **Removing** state, the server is being removed from the server group.
     *   *     *   If a backend server cannot be found, the server is no longer in the server group.
     *   *
     * @param RemoveServersFromServerGroupRequest $request RemoveServersFromServerGroupRequest
     *
     * @return RemoveServersFromServerGroupResponse RemoveServersFromServerGroupResponse
     */
    public function removeServersFromServerGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeServersFromServerGroupWithOptions($request, $runtime);
    }

    /**
     * **ReplaceServersInServerGroup** is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background.
     *   * 1.  You can call the [ListServerGroups](~~213627~~) operation to query the status of a server group.
     *   *     *   If a server group is in the **Configuring** state, it indicates that the server group is being modified.
     *   *     *   If a server group is in the **Available** state, it indicates that the server group is running.
     *   * 2.  You can call the [ListServerGroupServers](~~213628~~) operation to query the status of a backend server.
     *   *     *   If a backend server is in the **Replacing** state, it indicates that the server is being removed from the server group and a new server is added to the server group.
     *   *     *   If a backend server is in the \\*\\*Available\\*\\* state, it indicates that the server is running.
     *   *
     * @param ReplaceServersInServerGroupRequest $request ReplaceServersInServerGroupRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return ReplaceServersInServerGroupResponse ReplaceServersInServerGroupResponse
     */
    public function replaceServersInServerGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->addedServers)) {
            $query['AddedServers'] = $request->addedServers;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->removedServers)) {
            $query['RemovedServers'] = $request->removedServers;
        }
        if (!Utils::isUnset($request->serverGroupId)) {
            $query['ServerGroupId'] = $request->serverGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ReplaceServersInServerGroup',
            'version'     => '2020-06-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ReplaceServersInServerGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * **ReplaceServersInServerGroup** is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background.
     *   * 1.  You can call the [ListServerGroups](~~213627~~) operation to query the status of a server group.
     *   *     *   If a server group is in the **Configuring** state, it indicates that the server group is being modified.
     *   *     *   If a server group is in the **Available** state, it indicates that the server group is running.
     *   * 2.  You can call the [ListServerGroupServers](~~213628~~) operation to query the status of a backend server.
     *   *     *   If a backend server is in the **Replacing** state, it indicates that the server is being removed from the server group and a new server is added to the server group.
     *   *     *   If a backend server is in the \\*\\*Available\\*\\* state, it indicates that the server is running.
     *   *
     * @param ReplaceServersInServerGroupRequest $request ReplaceServersInServerGroupRequest
     *
     * @return ReplaceServersInServerGroupResponse ReplaceServersInServerGroupResponse
     */
    public function replaceServersInServerGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->replaceServersInServerGroupWithOptions($request, $runtime);
    }

    /**
     * **StartListener** is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background. You can call [GetListenerAttribute](~~2254865~~) to query the status of the task.
     *   * *   If a listener is in the **Configuring** state, the listener is being enabled.
     *   * *   If a listener is in the **Running** state, the listener is enabled.
     *   *
     * @param StartListenerRequest $request StartListenerRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return StartListenerResponse StartListenerResponse
     */
    public function startListenerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->listenerId)) {
            $query['ListenerId'] = $request->listenerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'StartListener',
            'version'     => '2020-06-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StartListenerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * **StartListener** is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background. You can call [GetListenerAttribute](~~2254865~~) to query the status of the task.
     *   * *   If a listener is in the **Configuring** state, the listener is being enabled.
     *   * *   If a listener is in the **Running** state, the listener is enabled.
     *   *
     * @param StartListenerRequest $request StartListenerRequest
     *
     * @return StartListenerResponse StartListenerResponse
     */
    public function startListener($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startListenerWithOptions($request, $runtime);
    }

    /**
     * @param StartShiftLoadBalancerZonesRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return StartShiftLoadBalancerZonesResponse
     */
    public function startShiftLoadBalancerZonesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->loadBalancerId)) {
            $query['LoadBalancerId'] = $request->loadBalancerId;
        }
        if (!Utils::isUnset($request->zoneMappings)) {
            $query['ZoneMappings'] = $request->zoneMappings;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'StartShiftLoadBalancerZones',
            'version'     => '2020-06-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StartShiftLoadBalancerZonesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * **StopListener** is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background. You can call the [GetListenerAttribute](~~2254865~~) operation to query the status of the task:
     *   * *   If a listener is in the **Configuring** state, the listener is being disabled.
     *   * *   If a listener is in the **Stopped** state, the listener is disabled.
     *   *
     * @param StopListenerRequest $request StopListenerRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return StopListenerResponse StopListenerResponse
     */
    public function stopListenerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->listenerId)) {
            $query['ListenerId'] = $request->listenerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'StopListener',
            'version'     => '2020-06-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StopListenerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * **StopListener** is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background. You can call the [GetListenerAttribute](~~2254865~~) operation to query the status of the task:
     *   * *   If a listener is in the **Configuring** state, the listener is being disabled.
     *   * *   If a listener is in the **Stopped** state, the listener is disabled.
     *   *
     * @param StopListenerRequest $request StopListenerRequest
     *
     * @return StopListenerResponse StopListenerResponse
     */
    public function stopListener($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopListenerWithOptions($request, $runtime);
    }

    /**
     * @param TagResourcesRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return TagResourcesResponse
     */
    public function tagResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->resourceId)) {
            $query['ResourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'TagResources',
            'version'     => '2020-06-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return TagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param UnTagResourcesRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return UnTagResourcesResponse
     */
    public function unTagResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->all)) {
            $query['All'] = $request->all;
        }
        if (!Utils::isUnset($request->resourceId)) {
            $query['ResourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        if (!Utils::isUnset($request->tagKey)) {
            $query['TagKey'] = $request->tagKey;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UnTagResources',
            'version'     => '2020-06-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UnTagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * *   **UpdateAScripts** is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background. You can call the [ListAScripts](~~472574~~) operation to query the status of the task.
     *   *     *   If an AScript rule is in the **Configuring** state, the AScript rule is being updated.
     *   *     *   If an AScript rule is in the **Available** state, the AScript rule is updated.
     *   * *   In the following table, the maximum value of **N** is **4**.
     *   *
     * @param UpdateAScriptsRequest $request UpdateAScriptsRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateAScriptsResponse UpdateAScriptsResponse
     */
    public function updateAScriptsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->AScripts)) {
            $query['AScripts'] = $request->AScripts;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateAScripts',
            'version'     => '2020-06-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateAScriptsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * *   **UpdateAScripts** is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background. You can call the [ListAScripts](~~472574~~) operation to query the status of the task.
     *   *     *   If an AScript rule is in the **Configuring** state, the AScript rule is being updated.
     *   *     *   If an AScript rule is in the **Available** state, the AScript rule is updated.
     *   * *   In the following table, the maximum value of **N** is **4**.
     *   *
     * @param UpdateAScriptsRequest $request UpdateAScriptsRequest
     *
     * @return UpdateAScriptsResponse UpdateAScriptsResponse
     */
    public function updateAScripts($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateAScriptsWithOptions($request, $runtime);
    }

    /**
     * @param UpdateAclAttributeRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return UpdateAclAttributeResponse
     */
    public function updateAclAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aclId)) {
            $query['AclId'] = $request->aclId;
        }
        if (!Utils::isUnset($request->aclName)) {
            $query['AclName'] = $request->aclName;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateAclAttribute',
            'version'     => '2020-06-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateAclAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param UpdateHealthCheckTemplateAttributeRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return UpdateHealthCheckTemplateAttributeResponse
     */
    public function updateHealthCheckTemplateAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->healthCheckCodes)) {
            $query['HealthCheckCodes'] = $request->healthCheckCodes;
        }
        if (!Utils::isUnset($request->healthCheckConnectPort)) {
            $query['HealthCheckConnectPort'] = $request->healthCheckConnectPort;
        }
        if (!Utils::isUnset($request->healthCheckHost)) {
            $query['HealthCheckHost'] = $request->healthCheckHost;
        }
        if (!Utils::isUnset($request->healthCheckHttpVersion)) {
            $query['HealthCheckHttpVersion'] = $request->healthCheckHttpVersion;
        }
        if (!Utils::isUnset($request->healthCheckInterval)) {
            $query['HealthCheckInterval'] = $request->healthCheckInterval;
        }
        if (!Utils::isUnset($request->healthCheckMethod)) {
            $query['HealthCheckMethod'] = $request->healthCheckMethod;
        }
        if (!Utils::isUnset($request->healthCheckPath)) {
            $query['HealthCheckPath'] = $request->healthCheckPath;
        }
        if (!Utils::isUnset($request->healthCheckProtocol)) {
            $query['HealthCheckProtocol'] = $request->healthCheckProtocol;
        }
        if (!Utils::isUnset($request->healthCheckTemplateId)) {
            $query['HealthCheckTemplateId'] = $request->healthCheckTemplateId;
        }
        if (!Utils::isUnset($request->healthCheckTemplateName)) {
            $query['HealthCheckTemplateName'] = $request->healthCheckTemplateName;
        }
        if (!Utils::isUnset($request->healthCheckTimeout)) {
            $query['HealthCheckTimeout'] = $request->healthCheckTimeout;
        }
        if (!Utils::isUnset($request->healthyThreshold)) {
            $query['HealthyThreshold'] = $request->healthyThreshold;
        }
        if (!Utils::isUnset($request->unhealthyThreshold)) {
            $query['UnhealthyThreshold'] = $request->unhealthyThreshold;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateHealthCheckTemplateAttribute',
            'version'     => '2020-06-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateHealthCheckTemplateAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * **UpdateListenerAttribute** is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background. You can call the [GetListenerAttribute](~~2254865~~) operation to query the status of the task.
     *   * *   If a listener is in the **Configuring** state, the configuration of the listener is being modified.
     *   * *   If a listener is in the **Running** state, the configuration of the listener is modified.
     *   *
     * @param UpdateListenerAttributeRequest $request UpdateListenerAttributeRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateListenerAttributeResponse UpdateListenerAttributeResponse
     */
    public function updateListenerAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->caCertificates)) {
            $query['CaCertificates'] = $request->caCertificates;
        }
        if (!Utils::isUnset($request->caEnabled)) {
            $query['CaEnabled'] = $request->caEnabled;
        }
        if (!Utils::isUnset($request->certificates)) {
            $query['Certificates'] = $request->certificates;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->defaultActions)) {
            $query['DefaultActions'] = $request->defaultActions;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->gzipEnabled)) {
            $query['GzipEnabled'] = $request->gzipEnabled;
        }
        if (!Utils::isUnset($request->http2Enabled)) {
            $query['Http2Enabled'] = $request->http2Enabled;
        }
        if (!Utils::isUnset($request->idleTimeout)) {
            $query['IdleTimeout'] = $request->idleTimeout;
        }
        if (!Utils::isUnset($request->listenerDescription)) {
            $query['ListenerDescription'] = $request->listenerDescription;
        }
        if (!Utils::isUnset($request->listenerId)) {
            $query['ListenerId'] = $request->listenerId;
        }
        if (!Utils::isUnset($request->quicConfig)) {
            $query['QuicConfig'] = $request->quicConfig;
        }
        if (!Utils::isUnset($request->requestTimeout)) {
            $query['RequestTimeout'] = $request->requestTimeout;
        }
        if (!Utils::isUnset($request->securityPolicyId)) {
            $query['SecurityPolicyId'] = $request->securityPolicyId;
        }
        if (!Utils::isUnset($request->XForwardedForConfig)) {
            $query['XForwardedForConfig'] = $request->XForwardedForConfig;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateListenerAttribute',
            'version'     => '2020-06-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateListenerAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * **UpdateListenerAttribute** is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background. You can call the [GetListenerAttribute](~~2254865~~) operation to query the status of the task.
     *   * *   If a listener is in the **Configuring** state, the configuration of the listener is being modified.
     *   * *   If a listener is in the **Running** state, the configuration of the listener is modified.
     *   *
     * @param UpdateListenerAttributeRequest $request UpdateListenerAttributeRequest
     *
     * @return UpdateListenerAttributeResponse UpdateListenerAttributeResponse
     */
    public function updateListenerAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateListenerAttributeWithOptions($request, $runtime);
    }

    /**
     * **UpdateListenerLogConfig** is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background. You can call [GetListenerAttribute](~~2254865~~) to query the status of the task:
     *   * *   If a listener is in the **Configuring** state, the log configuration of the listener is being modified.
     *   * *   If a listener is in the **Running** state, the log configuration of the listener is modified.
     *   * > You can update the log configuration of a listener only after you enable the access log feature.
     *   *
     * @param UpdateListenerLogConfigRequest $request UpdateListenerLogConfigRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateListenerLogConfigResponse UpdateListenerLogConfigResponse
     */
    public function updateListenerLogConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessLogRecordCustomizedHeadersEnabled)) {
            $query['AccessLogRecordCustomizedHeadersEnabled'] = $request->accessLogRecordCustomizedHeadersEnabled;
        }
        if (!Utils::isUnset($request->accessLogTracingConfig)) {
            $query['AccessLogTracingConfig'] = $request->accessLogTracingConfig;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->listenerId)) {
            $query['ListenerId'] = $request->listenerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateListenerLogConfig',
            'version'     => '2020-06-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateListenerLogConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * **UpdateListenerLogConfig** is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background. You can call [GetListenerAttribute](~~2254865~~) to query the status of the task:
     *   * *   If a listener is in the **Configuring** state, the log configuration of the listener is being modified.
     *   * *   If a listener is in the **Running** state, the log configuration of the listener is modified.
     *   * > You can update the log configuration of a listener only after you enable the access log feature.
     *   *
     * @param UpdateListenerLogConfigRequest $request UpdateListenerLogConfigRequest
     *
     * @return UpdateListenerLogConfigResponse UpdateListenerLogConfigResponse
     */
    public function updateListenerLogConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateListenerLogConfigWithOptions($request, $runtime);
    }

    /**
     * ## Prerequisites
     *   * *   An ALB instance is created. For more information about how to create an ALB instance, see [CreateLoadBalancer](~~214358~~).
     *   * *   If you want to change the network type from internal-facing to Internet-facing, you must first create an elastic IP address (EIP). For more information, see [AllocateEipAddress](~~120192~~).
     *   * ## Usage notes
     *   * **UpdateLoadBalancerAddressTypeConfig** is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background. You can call the [GetLoadBalancerAttribute](~~214362~~) operation to query the status of the task.
     *   * *   If an ALB instance is in the **Configuring** state, the network type is being changed.
     *   * *   If an ALB instance is in the **Active** state, the network type has been changed.
     *   *
     * @param UpdateLoadBalancerAddressTypeConfigRequest $request UpdateLoadBalancerAddressTypeConfigRequest
     * @param RuntimeOptions                             $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateLoadBalancerAddressTypeConfigResponse UpdateLoadBalancerAddressTypeConfigResponse
     */
    public function updateLoadBalancerAddressTypeConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->addressType)) {
            $query['AddressType'] = $request->addressType;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->loadBalancerId)) {
            $query['LoadBalancerId'] = $request->loadBalancerId;
        }
        if (!Utils::isUnset($request->zoneMappings)) {
            $query['ZoneMappings'] = $request->zoneMappings;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateLoadBalancerAddressTypeConfig',
            'version'     => '2020-06-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateLoadBalancerAddressTypeConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ## Prerequisites
     *   * *   An ALB instance is created. For more information about how to create an ALB instance, see [CreateLoadBalancer](~~214358~~).
     *   * *   If you want to change the network type from internal-facing to Internet-facing, you must first create an elastic IP address (EIP). For more information, see [AllocateEipAddress](~~120192~~).
     *   * ## Usage notes
     *   * **UpdateLoadBalancerAddressTypeConfig** is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background. You can call the [GetLoadBalancerAttribute](~~214362~~) operation to query the status of the task.
     *   * *   If an ALB instance is in the **Configuring** state, the network type is being changed.
     *   * *   If an ALB instance is in the **Active** state, the network type has been changed.
     *   *
     * @param UpdateLoadBalancerAddressTypeConfigRequest $request UpdateLoadBalancerAddressTypeConfigRequest
     *
     * @return UpdateLoadBalancerAddressTypeConfigResponse UpdateLoadBalancerAddressTypeConfigResponse
     */
    public function updateLoadBalancerAddressTypeConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateLoadBalancerAddressTypeConfigWithOptions($request, $runtime);
    }

    /**
     * **UpdateLoadBalancerAttribute** is an asynchronous operation. After you send a request, the system returns a request ID and runs the task in the background. You can call [GetLoadBalancerAttribute](~~214362~~) to query the status of the task.
     *   * *   If the ALB instance is in the **Configuring** state, the ALB instance is being modified.
     *   * *   If the ALB instance is in the **Active** state, the ALB instance is modified.
     *   *
     * @param UpdateLoadBalancerAttributeRequest $request UpdateLoadBalancerAttributeRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateLoadBalancerAttributeResponse UpdateLoadBalancerAttributeResponse
     */
    public function updateLoadBalancerAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->loadBalancerId)) {
            $query['LoadBalancerId'] = $request->loadBalancerId;
        }
        if (!Utils::isUnset($request->loadBalancerName)) {
            $query['LoadBalancerName'] = $request->loadBalancerName;
        }
        if (!Utils::isUnset($request->modificationProtectionConfig)) {
            $query['ModificationProtectionConfig'] = $request->modificationProtectionConfig;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateLoadBalancerAttribute',
            'version'     => '2020-06-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateLoadBalancerAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * **UpdateLoadBalancerAttribute** is an asynchronous operation. After you send a request, the system returns a request ID and runs the task in the background. You can call [GetLoadBalancerAttribute](~~214362~~) to query the status of the task.
     *   * *   If the ALB instance is in the **Configuring** state, the ALB instance is being modified.
     *   * *   If the ALB instance is in the **Active** state, the ALB instance is modified.
     *   *
     * @param UpdateLoadBalancerAttributeRequest $request UpdateLoadBalancerAttributeRequest
     *
     * @return UpdateLoadBalancerAttributeResponse UpdateLoadBalancerAttributeResponse
     */
    public function updateLoadBalancerAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateLoadBalancerAttributeWithOptions($request, $runtime);
    }

    /**
     * ##
     *   * *   You can upgrade a basic ALB instance to a standard ALB instance or a WAF-enabled ALB instance but you cannot downgrade a standard ALB instance or a WAF-enabled ALB instance to a basic ALB instance. For more information, see [Upgrade an ALB instance](~~214654~~).
     *   * *   **UpdateLoadBalancerEdition** is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background. You can call [GetLoadBalancerAttribute](~~214362~~) to query the status of the task.
     *   *     *   If the ALB instance is in the **Configuring** state, the edition of the ALB instance is being modified.
     *   *     *   If the ALB instance is in the **Active** state, the edition of the ALB instance has been modified.
     *   *
     * @param UpdateLoadBalancerEditionRequest $request UpdateLoadBalancerEditionRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateLoadBalancerEditionResponse UpdateLoadBalancerEditionResponse
     */
    public function updateLoadBalancerEditionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->loadBalancerEdition)) {
            $query['LoadBalancerEdition'] = $request->loadBalancerEdition;
        }
        if (!Utils::isUnset($request->loadBalancerId)) {
            $query['LoadBalancerId'] = $request->loadBalancerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateLoadBalancerEdition',
            'version'     => '2020-06-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateLoadBalancerEditionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ##
     *   * *   You can upgrade a basic ALB instance to a standard ALB instance or a WAF-enabled ALB instance but you cannot downgrade a standard ALB instance or a WAF-enabled ALB instance to a basic ALB instance. For more information, see [Upgrade an ALB instance](~~214654~~).
     *   * *   **UpdateLoadBalancerEdition** is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background. You can call [GetLoadBalancerAttribute](~~214362~~) to query the status of the task.
     *   *     *   If the ALB instance is in the **Configuring** state, the edition of the ALB instance is being modified.
     *   *     *   If the ALB instance is in the **Active** state, the edition of the ALB instance has been modified.
     *   *
     * @param UpdateLoadBalancerEditionRequest $request UpdateLoadBalancerEditionRequest
     *
     * @return UpdateLoadBalancerEditionResponse UpdateLoadBalancerEditionResponse
     */
    public function updateLoadBalancerEdition($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateLoadBalancerEditionWithOptions($request, $runtime);
    }

    /**
     * **UpdateLoadBalancerZones** is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background. You can call [GetLoadBalancerAttribute](~~214362~~) to query the status of the task.
     *   * *   If an ALB instance is in the **Configuring** state, the zones are being modified.
     *   * *   If an ALB instance is in the **Active** state, the zones are modified.
     *   * > You may be charged after you call UpdateLoadBalancerZones.
     *   *
     * @param UpdateLoadBalancerZonesRequest $request UpdateLoadBalancerZonesRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateLoadBalancerZonesResponse UpdateLoadBalancerZonesResponse
     */
    public function updateLoadBalancerZonesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->loadBalancerId)) {
            $query['LoadBalancerId'] = $request->loadBalancerId;
        }
        if (!Utils::isUnset($request->zoneMappings)) {
            $query['ZoneMappings'] = $request->zoneMappings;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateLoadBalancerZones',
            'version'     => '2020-06-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateLoadBalancerZonesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * **UpdateLoadBalancerZones** is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background. You can call [GetLoadBalancerAttribute](~~214362~~) to query the status of the task.
     *   * *   If an ALB instance is in the **Configuring** state, the zones are being modified.
     *   * *   If an ALB instance is in the **Active** state, the zones are modified.
     *   * > You may be charged after you call UpdateLoadBalancerZones.
     *   *
     * @param UpdateLoadBalancerZonesRequest $request UpdateLoadBalancerZonesRequest
     *
     * @return UpdateLoadBalancerZonesResponse UpdateLoadBalancerZonesResponse
     */
    public function updateLoadBalancerZones($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateLoadBalancerZonesWithOptions($request, $runtime);
    }

    /**
     * ## Description
     *   * *   **UpdateRuleAttribute** is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background. You can call the [ListRules](~~214379~~) operation to query the status of a forwarding rule:
     *   *     *   If a forwarding rule is in the **Configuring** state, the forwarding rule is being updated.
     *   *     *   If a forwarding rule is in the **Available** state, the forwarding rule is updated.
     *   * *   You can set **RuleConditions** and **RuleActions** to add conditions and actions to a forwarding rule. Take note of the following limits on the number of conditions and the number of actions in each forwarding rule:
     *   *     *   Number of conditions: You can specify at most 5 for a basic Application Load Balancer (ALB) instance, at most 10 for a standard ALB instance, and at most 10 for a WAF-enabled ALB instance.
     *   *     *   Number of actions: You can specify at most 3 for a basic ALB instance, at most 5 for a standard ALB instance, and at most 5 for a WAF-enabled ALB instance.
     *   *
     * @param UpdateRuleAttributeRequest $request UpdateRuleAttributeRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateRuleAttributeResponse UpdateRuleAttributeResponse
     */
    public function updateRuleAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->priority)) {
            $query['Priority'] = $request->priority;
        }
        if (!Utils::isUnset($request->ruleActions)) {
            $query['RuleActions'] = $request->ruleActions;
        }
        if (!Utils::isUnset($request->ruleConditions)) {
            $query['RuleConditions'] = $request->ruleConditions;
        }
        if (!Utils::isUnset($request->ruleId)) {
            $query['RuleId'] = $request->ruleId;
        }
        if (!Utils::isUnset($request->ruleName)) {
            $query['RuleName'] = $request->ruleName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateRuleAttribute',
            'version'     => '2020-06-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateRuleAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ## Description
     *   * *   **UpdateRuleAttribute** is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background. You can call the [ListRules](~~214379~~) operation to query the status of a forwarding rule:
     *   *     *   If a forwarding rule is in the **Configuring** state, the forwarding rule is being updated.
     *   *     *   If a forwarding rule is in the **Available** state, the forwarding rule is updated.
     *   * *   You can set **RuleConditions** and **RuleActions** to add conditions and actions to a forwarding rule. Take note of the following limits on the number of conditions and the number of actions in each forwarding rule:
     *   *     *   Number of conditions: You can specify at most 5 for a basic Application Load Balancer (ALB) instance, at most 10 for a standard ALB instance, and at most 10 for a WAF-enabled ALB instance.
     *   *     *   Number of actions: You can specify at most 3 for a basic ALB instance, at most 5 for a standard ALB instance, and at most 5 for a WAF-enabled ALB instance.
     *   *
     * @param UpdateRuleAttributeRequest $request UpdateRuleAttributeRequest
     *
     * @return UpdateRuleAttributeResponse UpdateRuleAttributeResponse
     */
    public function updateRuleAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateRuleAttributeWithOptions($request, $runtime);
    }

    /**
     * **UpdateRulesAttribute** is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background. You can call the [ListRules](~~214379~~) operation to query the status of the task.
     *   * *   If a forwarding rule is in the **Configuring** state, the forwarding rule is being updated.
     *   * *   If a forwarding rule is in the **Available** state, the forwarding rule is updated.
     *   * *   You can set **RuleConditions** and **RuleActions** to add conditions and actions to a forwarding rule. Take note of the following limits on the maximum number of conditions and the maximum number of actions in each forwarding rule:
     *   *     *   Limits on conditions: 5 for a basic Application Load Balancer (ALB) instance, 10 for a standard ALB instance, and 10 for a WAF-enabled ALB instance.
     *   *     *   Limits on actions: 3 for a basic ALB instance, 5 for a standard ALB instance, and 5 for a WAF-enabled ALB instance.
     *   *
     * @param UpdateRulesAttributeRequest $request UpdateRulesAttributeRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateRulesAttributeResponse UpdateRulesAttributeResponse
     */
    public function updateRulesAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->rules)) {
            $query['Rules'] = $request->rules;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateRulesAttribute',
            'version'     => '2020-06-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateRulesAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * **UpdateRulesAttribute** is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background. You can call the [ListRules](~~214379~~) operation to query the status of the task.
     *   * *   If a forwarding rule is in the **Configuring** state, the forwarding rule is being updated.
     *   * *   If a forwarding rule is in the **Available** state, the forwarding rule is updated.
     *   * *   You can set **RuleConditions** and **RuleActions** to add conditions and actions to a forwarding rule. Take note of the following limits on the maximum number of conditions and the maximum number of actions in each forwarding rule:
     *   *     *   Limits on conditions: 5 for a basic Application Load Balancer (ALB) instance, 10 for a standard ALB instance, and 10 for a WAF-enabled ALB instance.
     *   *     *   Limits on actions: 3 for a basic ALB instance, 5 for a standard ALB instance, and 5 for a WAF-enabled ALB instance.
     *   *
     * @param UpdateRulesAttributeRequest $request UpdateRulesAttributeRequest
     *
     * @return UpdateRulesAttributeResponse UpdateRulesAttributeResponse
     */
    public function updateRulesAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateRulesAttributeWithOptions($request, $runtime);
    }

    /**
     * ##
     *   * **UpdateSecurityPolicyAttribute** is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background. You can call [ListSecurityPolicies](~~213609~~) to query the status of the task.
     *   * *   If a security policy is in the **Configuring** state, the security policy is being updated.
     *   * *   If a security policy is in the **Available** state, the security policy is updated.
     *   *
     * @param UpdateSecurityPolicyAttributeRequest $request UpdateSecurityPolicyAttributeRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateSecurityPolicyAttributeResponse UpdateSecurityPolicyAttributeResponse
     */
    public function updateSecurityPolicyAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ciphers)) {
            $query['Ciphers'] = $request->ciphers;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->securityPolicyId)) {
            $query['SecurityPolicyId'] = $request->securityPolicyId;
        }
        if (!Utils::isUnset($request->securityPolicyName)) {
            $query['SecurityPolicyName'] = $request->securityPolicyName;
        }
        if (!Utils::isUnset($request->TLSVersions)) {
            $query['TLSVersions'] = $request->TLSVersions;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateSecurityPolicyAttribute',
            'version'     => '2020-06-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateSecurityPolicyAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ##
     *   * **UpdateSecurityPolicyAttribute** is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background. You can call [ListSecurityPolicies](~~213609~~) to query the status of the task.
     *   * *   If a security policy is in the **Configuring** state, the security policy is being updated.
     *   * *   If a security policy is in the **Available** state, the security policy is updated.
     *   *
     * @param UpdateSecurityPolicyAttributeRequest $request UpdateSecurityPolicyAttributeRequest
     *
     * @return UpdateSecurityPolicyAttributeResponse UpdateSecurityPolicyAttributeResponse
     */
    public function updateSecurityPolicyAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateSecurityPolicyAttributeWithOptions($request, $runtime);
    }

    /**
     * ## Description
     *   * **UpdateServerGroupAttribute** is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background. You can call the [ListServerGroups](~~213627~~) operation to query the status of a server group:
     *   * *   If a server group is in the **Configuring** state, the configuration of the server group is being modified.
     *   * *   If a server group is in the **Available** state, the configuration of the server group is modified.
     *   *
     * @param UpdateServerGroupAttributeRequest $request UpdateServerGroupAttributeRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateServerGroupAttributeResponse UpdateServerGroupAttributeResponse
     */
    public function updateServerGroupAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->healthCheckConfig)) {
            $query['HealthCheckConfig'] = $request->healthCheckConfig;
        }
        if (!Utils::isUnset($request->scheduler)) {
            $query['Scheduler'] = $request->scheduler;
        }
        if (!Utils::isUnset($request->serverGroupId)) {
            $query['ServerGroupId'] = $request->serverGroupId;
        }
        if (!Utils::isUnset($request->serverGroupName)) {
            $query['ServerGroupName'] = $request->serverGroupName;
        }
        if (!Utils::isUnset($request->serviceName)) {
            $query['ServiceName'] = $request->serviceName;
        }
        if (!Utils::isUnset($request->stickySessionConfig)) {
            $query['StickySessionConfig'] = $request->stickySessionConfig;
        }
        if (!Utils::isUnset($request->uchConfig)) {
            $query['UchConfig'] = $request->uchConfig;
        }
        if (!Utils::isUnset($request->upstreamKeepaliveEnabled)) {
            $query['UpstreamKeepaliveEnabled'] = $request->upstreamKeepaliveEnabled;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateServerGroupAttribute',
            'version'     => '2020-06-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateServerGroupAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ## Description
     *   * **UpdateServerGroupAttribute** is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background. You can call the [ListServerGroups](~~213627~~) operation to query the status of a server group:
     *   * *   If a server group is in the **Configuring** state, the configuration of the server group is being modified.
     *   * *   If a server group is in the **Available** state, the configuration of the server group is modified.
     *   *
     * @param UpdateServerGroupAttributeRequest $request UpdateServerGroupAttributeRequest
     *
     * @return UpdateServerGroupAttributeResponse UpdateServerGroupAttributeResponse
     */
    public function updateServerGroupAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateServerGroupAttributeWithOptions($request, $runtime);
    }

    /**
     * **UpdateServerGroupServersAttribute** is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background.
     *   * 1.  You can call the [ListServerGroups](~~213627~~) operation to query the status of a server group.
     *   *     *   If a server group is in the **Configuring** state, it indicates that the server group is being modified.
     *   *     *   If a server group is in the **Available** state, it indicates that the server group is running.
     *   * 2.  You can call the [ListServerGroupServers](~~213628~~) operation to query the status of a backend server.
     *   *     *   If a backend server is in the **Configuring** state, it indicates that the backend server is being modified.
     *   *     *   If a backend server is in the **Available** state, it indicates that the backend server is running.
     *   *
     * @param UpdateServerGroupServersAttributeRequest $request UpdateServerGroupServersAttributeRequest
     * @param RuntimeOptions                           $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateServerGroupServersAttributeResponse UpdateServerGroupServersAttributeResponse
     */
    public function updateServerGroupServersAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->serverGroupId)) {
            $query['ServerGroupId'] = $request->serverGroupId;
        }
        if (!Utils::isUnset($request->servers)) {
            $query['Servers'] = $request->servers;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateServerGroupServersAttribute',
            'version'     => '2020-06-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateServerGroupServersAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * **UpdateServerGroupServersAttribute** is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background.
     *   * 1.  You can call the [ListServerGroups](~~213627~~) operation to query the status of a server group.
     *   *     *   If a server group is in the **Configuring** state, it indicates that the server group is being modified.
     *   *     *   If a server group is in the **Available** state, it indicates that the server group is running.
     *   * 2.  You can call the [ListServerGroupServers](~~213628~~) operation to query the status of a backend server.
     *   *     *   If a backend server is in the **Configuring** state, it indicates that the backend server is being modified.
     *   *     *   If a backend server is in the **Available** state, it indicates that the backend server is running.
     *   *
     * @param UpdateServerGroupServersAttributeRequest $request UpdateServerGroupServersAttributeRequest
     *
     * @return UpdateServerGroupServersAttributeResponse UpdateServerGroupServersAttributeResponse
     */
    public function updateServerGroupServersAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateServerGroupServersAttributeWithOptions($request, $runtime);
    }
}

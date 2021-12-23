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
use AlibabaCloud\SDK\Alb\V20200616\Models\CreateAclRequest;
use AlibabaCloud\SDK\Alb\V20200616\Models\CreateAclResponse;
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
use AlibabaCloud\SDK\Alb\V20200616\Models\DescribeZonesResponse;
use AlibabaCloud\SDK\Alb\V20200616\Models\DetachCommonBandwidthPackageFromLoadBalancerRequest;
use AlibabaCloud\SDK\Alb\V20200616\Models\DetachCommonBandwidthPackageFromLoadBalancerResponse;
use AlibabaCloud\SDK\Alb\V20200616\Models\DisableDeletionProtectionRequest;
use AlibabaCloud\SDK\Alb\V20200616\Models\DisableDeletionProtectionResponse;
use AlibabaCloud\SDK\Alb\V20200616\Models\DisableLoadBalancerAccessLogRequest;
use AlibabaCloud\SDK\Alb\V20200616\Models\DisableLoadBalancerAccessLogResponse;
use AlibabaCloud\SDK\Alb\V20200616\Models\DissociateAclsFromListenerRequest;
use AlibabaCloud\SDK\Alb\V20200616\Models\DissociateAclsFromListenerResponse;
use AlibabaCloud\SDK\Alb\V20200616\Models\DissociateAdditionalCertificatesFromListenerRequest;
use AlibabaCloud\SDK\Alb\V20200616\Models\DissociateAdditionalCertificatesFromListenerResponse;
use AlibabaCloud\SDK\Alb\V20200616\Models\EnableDeletionProtectionRequest;
use AlibabaCloud\SDK\Alb\V20200616\Models\EnableDeletionProtectionResponse;
use AlibabaCloud\SDK\Alb\V20200616\Models\EnableLoadBalancerAccessLogRequest;
use AlibabaCloud\SDK\Alb\V20200616\Models\EnableLoadBalancerAccessLogResponse;
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
use AlibabaCloud\SDK\Alb\V20200616\Models\StopListenerRequest;
use AlibabaCloud\SDK\Alb\V20200616\Models\StopListenerResponse;
use AlibabaCloud\SDK\Alb\V20200616\Models\TagResourcesRequest;
use AlibabaCloud\SDK\Alb\V20200616\Models\TagResourcesResponse;
use AlibabaCloud\SDK\Alb\V20200616\Models\UnTagResourcesRequest;
use AlibabaCloud\SDK\Alb\V20200616\Models\UnTagResourcesResponse;
use AlibabaCloud\SDK\Alb\V20200616\Models\UpdateAclAttributeRequest;
use AlibabaCloud\SDK\Alb\V20200616\Models\UpdateAclAttributeResponse;
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
     * @param AddEntriesToAclRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return AddEntriesToAclResponse
     */
    public function addEntriesToAclWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                = [];
        $query['AclEntries']  = $request->aclEntries;
        $query['AclId']       = $request->aclId;
        $query['ClientToken'] = $request->clientToken;
        $query['DryRun']      = $request->dryRun;
        $req                  = new OpenApiRequest([
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
     * @param AddServersToServerGroupRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return AddServersToServerGroupResponse
     */
    public function addServersToServerGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                  = [];
        $query['ClientToken']   = $request->clientToken;
        $query['DryRun']        = $request->dryRun;
        $query['ServerGroupId'] = $request->serverGroupId;
        $query['Servers']       = $request->servers;
        $req                    = new OpenApiRequest([
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
     * @param ApplyHealthCheckTemplateToServerGroupRequest $request
     * @param RuntimeOptions                               $runtime
     *
     * @return ApplyHealthCheckTemplateToServerGroupResponse
     */
    public function applyHealthCheckTemplateToServerGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                          = [];
        $query['ClientToken']           = $request->clientToken;
        $query['DryRun']                = $request->dryRun;
        $query['HealthCheckTemplateId'] = $request->healthCheckTemplateId;
        $query['ServerGroupId']         = $request->serverGroupId;
        $req                            = new OpenApiRequest([
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
     * @param AssociateAclsWithListenerRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return AssociateAclsWithListenerResponse
     */
    public function associateAclsWithListenerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                = [];
        $query['AclIds']      = $request->aclIds;
        $query['AclType']     = $request->aclType;
        $query['ClientToken'] = $request->clientToken;
        $query['DryRun']      = $request->dryRun;
        $query['ListenerId']  = $request->listenerId;
        $req                  = new OpenApiRequest([
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
     * @param AssociateAdditionalCertificatesWithListenerRequest $request
     * @param RuntimeOptions                                     $runtime
     *
     * @return AssociateAdditionalCertificatesWithListenerResponse
     */
    public function associateAdditionalCertificatesWithListenerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                 = [];
        $query['Certificates'] = $request->certificates;
        $query['ClientToken']  = $request->clientToken;
        $query['DryRun']       = $request->dryRun;
        $query['ListenerId']   = $request->listenerId;
        $req                   = new OpenApiRequest([
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
     * @param AttachCommonBandwidthPackageToLoadBalancerRequest $request
     * @param RuntimeOptions                                    $runtime
     *
     * @return AttachCommonBandwidthPackageToLoadBalancerResponse
     */
    public function attachCommonBandwidthPackageToLoadBalancerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                       = [];
        $query['BandwidthPackageId'] = $request->bandwidthPackageId;
        $query['ClientToken']        = $request->clientToken;
        $query['DryRun']             = $request->dryRun;
        $query['LoadBalancerId']     = $request->loadBalancerId;
        $query['RegionId']           = $request->regionId;
        $req                         = new OpenApiRequest([
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
     * @param CreateAclRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return CreateAclResponse
     */
    public function createAclWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                    = [];
        $query['AclName']         = $request->aclName;
        $query['ClientToken']     = $request->clientToken;
        $query['DryRun']          = $request->dryRun;
        $query['ResourceGroupId'] = $request->resourceGroupId;
        $req                      = new OpenApiRequest([
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
     * @param CreateHealthCheckTemplateRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return CreateHealthCheckTemplateResponse
     */
    public function createHealthCheckTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                            = [];
        $query['ClientToken']             = $request->clientToken;
        $query['DryRun']                  = $request->dryRun;
        $query['HealthCheckCodes']        = $request->healthCheckCodes;
        $query['HealthCheckConnectPort']  = $request->healthCheckConnectPort;
        $query['HealthCheckHost']         = $request->healthCheckHost;
        $query['HealthCheckHttpVersion']  = $request->healthCheckHttpVersion;
        $query['HealthCheckInterval']     = $request->healthCheckInterval;
        $query['HealthCheckMethod']       = $request->healthCheckMethod;
        $query['HealthCheckPath']         = $request->healthCheckPath;
        $query['HealthCheckProtocol']     = $request->healthCheckProtocol;
        $query['HealthCheckTemplateName'] = $request->healthCheckTemplateName;
        $query['HealthCheckTimeout']      = $request->healthCheckTimeout;
        $query['HealthyThreshold']        = $request->healthyThreshold;
        $query['UnhealthyThreshold']      = $request->unhealthyThreshold;
        $req                              = new OpenApiRequest([
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
     * @param CreateListenerRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return CreateListenerResponse
     */
    public function createListenerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                        = [];
        $query['CaCertificates']      = $request->caCertificates;
        $query['CaEnabled']           = $request->caEnabled;
        $query['Certificates']        = $request->certificates;
        $query['ClientToken']         = $request->clientToken;
        $query['DefaultActions']      = $request->defaultActions;
        $query['DryRun']              = $request->dryRun;
        $query['GzipEnabled']         = $request->gzipEnabled;
        $query['Http2Enabled']        = $request->http2Enabled;
        $query['IdleTimeout']         = $request->idleTimeout;
        $query['ListenerDescription'] = $request->listenerDescription;
        $query['ListenerPort']        = $request->listenerPort;
        $query['ListenerProtocol']    = $request->listenerProtocol;
        $query['LoadBalancerId']      = $request->loadBalancerId;
        $query['QuicConfig']          = $request->quicConfig;
        $query['RequestTimeout']      = $request->requestTimeout;
        $query['SecurityPolicyId']    = $request->securityPolicyId;
        $query['XForwardedForConfig'] = $request->XForwardedForConfig;
        $req                          = new OpenApiRequest([
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
     * @param CreateLoadBalancerRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return CreateLoadBalancerResponse
     */
    public function createLoadBalancerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                                 = [];
        $query['AddressAllocatedMode']         = $request->addressAllocatedMode;
        $query['AddressType']                  = $request->addressType;
        $query['ClientToken']                  = $request->clientToken;
        $query['DeletionProtectionEnabled']    = $request->deletionProtectionEnabled;
        $query['DryRun']                       = $request->dryRun;
        $query['LoadBalancerBillingConfig']    = $request->loadBalancerBillingConfig;
        $query['LoadBalancerEdition']          = $request->loadBalancerEdition;
        $query['LoadBalancerName']             = $request->loadBalancerName;
        $query['ModificationProtectionConfig'] = $request->modificationProtectionConfig;
        $query['ResourceGroupId']              = $request->resourceGroupId;
        $query['VpcId']                        = $request->vpcId;
        $query['ZoneMappings']                 = $request->zoneMappings;
        $req                                   = new OpenApiRequest([
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
     * @param CreateRuleRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return CreateRuleResponse
     */
    public function createRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                   = [];
        $query['ClientToken']    = $request->clientToken;
        $query['DryRun']         = $request->dryRun;
        $query['ListenerId']     = $request->listenerId;
        $query['Priority']       = $request->priority;
        $query['RuleActions']    = $request->ruleActions;
        $query['RuleConditions'] = $request->ruleConditions;
        $query['RuleName']       = $request->ruleName;
        $req                     = new OpenApiRequest([
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
     * @param CreateRulesRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return CreateRulesResponse
     */
    public function createRulesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                = [];
        $query['ClientToken'] = $request->clientToken;
        $query['DryRun']      = $request->dryRun;
        $query['ListenerId']  = $request->listenerId;
        $query['Rules']       = $request->rules;
        $req                  = new OpenApiRequest([
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
     * @param CreateSecurityPolicyRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return CreateSecurityPolicyResponse
     */
    public function createSecurityPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                       = [];
        $query['Ciphers']            = $request->ciphers;
        $query['ClientToken']        = $request->clientToken;
        $query['DryRun']             = $request->dryRun;
        $query['ResourceGroupId']    = $request->resourceGroupId;
        $query['SecurityPolicyName'] = $request->securityPolicyName;
        $query['TLSVersions']        = $request->TLSVersions;
        $req                         = new OpenApiRequest([
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
     * @param CreateServerGroupRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CreateServerGroupResponse
     */
    public function createServerGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                        = [];
        $query['ClientToken']         = $request->clientToken;
        $query['DryRun']              = $request->dryRun;
        $query['HealthCheckConfig']   = $request->healthCheckConfig;
        $query['Protocol']            = $request->protocol;
        $query['ResourceGroupId']     = $request->resourceGroupId;
        $query['Scheduler']           = $request->scheduler;
        $query['ServerGroupName']     = $request->serverGroupName;
        $query['ServerGroupType']     = $request->serverGroupType;
        $query['StickySessionConfig'] = $request->stickySessionConfig;
        $query['VpcId']               = $request->vpcId;
        $req                          = new OpenApiRequest([
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
     * @param DeleteAclRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return DeleteAclResponse
     */
    public function deleteAclWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                = [];
        $query['AclId']       = $request->aclId;
        $query['ClientToken'] = $request->clientToken;
        $query['DryRun']      = $request->dryRun;
        $req                  = new OpenApiRequest([
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
     * @param DeleteHealthCheckTemplatesRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DeleteHealthCheckTemplatesResponse
     */
    public function deleteHealthCheckTemplatesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                           = [];
        $query['ClientToken']            = $request->clientToken;
        $query['DryRun']                 = $request->dryRun;
        $query['HealthCheckTemplateIds'] = $request->healthCheckTemplateIds;
        $req                             = new OpenApiRequest([
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
     * @param DeleteListenerRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DeleteListenerResponse
     */
    public function deleteListenerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                = [];
        $query['ClientToken'] = $request->clientToken;
        $query['DryRun']      = $request->dryRun;
        $query['ListenerId']  = $request->listenerId;
        $req                  = new OpenApiRequest([
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
     * @param DeleteLoadBalancerRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteLoadBalancerResponse
     */
    public function deleteLoadBalancerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                   = [];
        $query['ClientToken']    = $request->clientToken;
        $query['DryRun']         = $request->dryRun;
        $query['LoadBalancerId'] = $request->loadBalancerId;
        $req                     = new OpenApiRequest([
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
     * @param DeleteRuleRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return DeleteRuleResponse
     */
    public function deleteRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                = [];
        $query['ClientToken'] = $request->clientToken;
        $query['DryRun']      = $request->dryRun;
        $query['RuleId']      = $request->ruleId;
        $req                  = new OpenApiRequest([
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
     * @param DeleteRulesRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return DeleteRulesResponse
     */
    public function deleteRulesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                = [];
        $query['ClientToken'] = $request->clientToken;
        $query['DryRun']      = $request->dryRun;
        $query['RuleIds']     = $request->ruleIds;
        $req                  = new OpenApiRequest([
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
     * @param DeleteSecurityPolicyRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DeleteSecurityPolicyResponse
     */
    public function deleteSecurityPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                     = [];
        $query['ClientToken']      = $request->clientToken;
        $query['DryRun']           = $request->dryRun;
        $query['SecurityPolicyId'] = $request->securityPolicyId;
        $req                       = new OpenApiRequest([
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
     * @param DeleteServerGroupRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DeleteServerGroupResponse
     */
    public function deleteServerGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                  = [];
        $query['ClientToken']   = $request->clientToken;
        $query['DryRun']        = $request->dryRun;
        $query['ServerGroupId'] = $request->serverGroupId;
        $req                    = new OpenApiRequest([
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
     * @param DescribeRegionsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeRegionsResponse
     */
    public function describeRegionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                   = [];
        $query['AcceptLanguage'] = $request->acceptLanguage;
        $req                     = new OpenApiRequest([
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
     * @param RuntimeOptions $runtime
     *
     * @return DescribeZonesResponse
     */
    public function describeZonesWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
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
     * @return DescribeZonesResponse
     */
    public function describeZones()
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeZonesWithOptions($runtime);
    }

    /**
     * @param DetachCommonBandwidthPackageFromLoadBalancerRequest $request
     * @param RuntimeOptions                                      $runtime
     *
     * @return DetachCommonBandwidthPackageFromLoadBalancerResponse
     */
    public function detachCommonBandwidthPackageFromLoadBalancerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                       = [];
        $query['BandwidthPackageId'] = $request->bandwidthPackageId;
        $query['ClientToken']        = $request->clientToken;
        $query['DryRun']             = $request->dryRun;
        $query['LoadBalancerId']     = $request->loadBalancerId;
        $query['RegionId']           = $request->regionId;
        $req                         = new OpenApiRequest([
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
     * @param DisableDeletionProtectionRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DisableDeletionProtectionResponse
     */
    public function disableDeletionProtectionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                = [];
        $query['ClientToken'] = $request->clientToken;
        $query['DryRun']      = $request->dryRun;
        $query['ResourceId']  = $request->resourceId;
        $req                  = new OpenApiRequest([
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
        $query                   = [];
        $query['ClientToken']    = $request->clientToken;
        $query['DryRun']         = $request->dryRun;
        $query['LoadBalancerId'] = $request->loadBalancerId;
        $req                     = new OpenApiRequest([
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
     * @param DissociateAclsFromListenerRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DissociateAclsFromListenerResponse
     */
    public function dissociateAclsFromListenerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                = [];
        $query['AclIds']      = $request->aclIds;
        $query['ClientToken'] = $request->clientToken;
        $query['DryRun']      = $request->dryRun;
        $query['ListenerId']  = $request->listenerId;
        $req                  = new OpenApiRequest([
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
     * @param DissociateAdditionalCertificatesFromListenerRequest $request
     * @param RuntimeOptions                                      $runtime
     *
     * @return DissociateAdditionalCertificatesFromListenerResponse
     */
    public function dissociateAdditionalCertificatesFromListenerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                 = [];
        $query['Certificates'] = $request->certificates;
        $query['ClientToken']  = $request->clientToken;
        $query['DryRun']       = $request->dryRun;
        $query['ListenerId']   = $request->listenerId;
        $req                   = new OpenApiRequest([
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
     * @param EnableDeletionProtectionRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return EnableDeletionProtectionResponse
     */
    public function enableDeletionProtectionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                = [];
        $query['ClientToken'] = $request->clientToken;
        $query['DryRun']      = $request->dryRun;
        $query['ResourceId']  = $request->resourceId;
        $req                  = new OpenApiRequest([
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
        $query                   = [];
        $query['ClientToken']    = $request->clientToken;
        $query['DryRun']         = $request->dryRun;
        $query['LoadBalancerId'] = $request->loadBalancerId;
        $query['LogProject']     = $request->logProject;
        $query['LogStore']       = $request->logStore;
        $req                     = new OpenApiRequest([
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
     * @param GetHealthCheckTemplateAttributeRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return GetHealthCheckTemplateAttributeResponse
     */
    public function getHealthCheckTemplateAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                          = [];
        $query['HealthCheckTemplateId'] = $request->healthCheckTemplateId;
        $req                            = new OpenApiRequest([
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
        $query               = [];
        $query['ListenerId'] = $request->listenerId;
        $req                 = new OpenApiRequest([
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
        $query                = [];
        $query['IncludeRule'] = $request->includeRule;
        $query['ListenerId']  = $request->listenerId;
        $query['MaxResults']  = $request->maxResults;
        $query['NextToken']   = $request->nextToken;
        $req                  = new OpenApiRequest([
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
        $query                   = [];
        $query['LoadBalancerId'] = $request->loadBalancerId;
        $req                     = new OpenApiRequest([
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
     * @param ListAclEntriesRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ListAclEntriesResponse
     */
    public function listAclEntriesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query               = [];
        $query['AclId']      = $request->aclId;
        $query['MaxResults'] = $request->maxResults;
        $query['NextToken']  = $request->nextToken;
        $req                 = new OpenApiRequest([
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
        $query           = [];
        $query['AclIds'] = $request->aclIds;
        $req             = new OpenApiRequest([
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
        $query                    = [];
        $query['AclIds']          = $request->aclIds;
        $query['AclNames']        = $request->aclNames;
        $query['MaxResults']      = $request->maxResults;
        $query['NextToken']       = $request->nextToken;
        $query['ResourceGroupId'] = $request->resourceGroupId;
        $req                      = new OpenApiRequest([
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
        $query                 = [];
        $query['ApiName']      = $request->apiName;
        $query['BeginTime']    = $request->beginTime;
        $query['EndTime']      = $request->endTime;
        $query['JobIds']       = $request->jobIds;
        $query['MaxResults']   = $request->maxResults;
        $query['NextToken']    = $request->nextToken;
        $query['ResourceIds']  = $request->resourceIds;
        $query['ResourceType'] = $request->resourceType;
        $req                   = new OpenApiRequest([
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
        $query                             = [];
        $query['HealthCheckTemplateIds']   = $request->healthCheckTemplateIds;
        $query['HealthCheckTemplateNames'] = $request->healthCheckTemplateNames;
        $query['MaxResults']               = $request->maxResults;
        $query['NextToken']                = $request->nextToken;
        $req                               = new OpenApiRequest([
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
        $query                    = [];
        $query['CertificateType'] = $request->certificateType;
        $query['ListenerId']      = $request->listenerId;
        $query['MaxResults']      = $request->maxResults;
        $query['NextToken']       = $request->nextToken;
        $req                      = new OpenApiRequest([
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
        $query                     = [];
        $query['ListenerIds']      = $request->listenerIds;
        $query['ListenerProtocol'] = $request->listenerProtocol;
        $query['LoadBalancerIds']  = $request->loadBalancerIds;
        $query['MaxResults']       = $request->maxResults;
        $query['NextToken']        = $request->nextToken;
        $req                       = new OpenApiRequest([
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
        $query                                = [];
        $query['AddressType']                 = $request->addressType;
        $query['LoadBalancerBussinessStatus'] = $request->loadBalancerBussinessStatus;
        $query['LoadBalancerIds']             = $request->loadBalancerIds;
        $query['LoadBalancerNames']           = $request->loadBalancerNames;
        $query['LoadBalancerStatus']          = $request->loadBalancerStatus;
        $query['MaxResults']                  = $request->maxResults;
        $query['NextToken']                   = $request->nextToken;
        $query['PayType']                     = $request->payType;
        $query['ResourceGroupId']             = $request->resourceGroupId;
        $query['Tag']                         = $request->tag;
        $query['VpcIds']                      = $request->vpcIds;
        $query['ZoneId']                      = $request->zoneId;
        $req                                  = new OpenApiRequest([
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
        $query                    = [];
        $query['ListenerIds']     = $request->listenerIds;
        $query['LoadBalancerIds'] = $request->loadBalancerIds;
        $query['MaxResults']      = $request->maxResults;
        $query['NextToken']       = $request->nextToken;
        $query['RuleIds']         = $request->ruleIds;
        $req                      = new OpenApiRequest([
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
        $query                        = [];
        $query['MaxResults']          = $request->maxResults;
        $query['NextToken']           = $request->nextToken;
        $query['ResourceGroupId']     = $request->resourceGroupId;
        $query['SecurityPolicyIds']   = $request->securityPolicyIds;
        $query['SecurityPolicyNames'] = $request->securityPolicyNames;
        $req                          = new OpenApiRequest([
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
        $query                      = [];
        $query['SecurityPolicyIds'] = $request->securityPolicyIds;
        $req                        = new OpenApiRequest([
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
        $query                  = [];
        $query['MaxResults']    = $request->maxResults;
        $query['NextToken']     = $request->nextToken;
        $query['ServerGroupId'] = $request->serverGroupId;
        $query['ServerIds']     = $request->serverIds;
        $query['Tag']           = $request->tag;
        $req                    = new OpenApiRequest([
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
        $query                     = [];
        $query['MaxResults']       = $request->maxResults;
        $query['NextToken']        = $request->nextToken;
        $query['ResourceGroupId']  = $request->resourceGroupId;
        $query['ServerGroupIds']   = $request->serverGroupIds;
        $query['ServerGroupNames'] = $request->serverGroupNames;
        $query['Tag']              = $request->tag;
        $query['VpcId']            = $request->vpcId;
        $req                       = new OpenApiRequest([
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
        $query                 = [];
        $query['Category']     = $request->category;
        $query['Keyword']      = $request->keyword;
        $query['MaxResults']   = $request->maxResults;
        $query['NextToken']    = $request->nextToken;
        $query['ResourceType'] = $request->resourceType;
        $req                   = new OpenApiRequest([
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
        $query                 = [];
        $query['MaxResults']   = $request->maxResults;
        $query['NextToken']    = $request->nextToken;
        $query['ResourceId']   = $request->resourceId;
        $query['ResourceType'] = $request->resourceType;
        $query['Tag']          = $request->tag;
        $req                   = new OpenApiRequest([
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
        $query                 = [];
        $query['MaxResults']   = $request->maxResults;
        $query['NextToken']    = $request->nextToken;
        $query['ResourceId']   = $request->resourceId;
        $query['ResourceType'] = $request->resourceType;
        $query['TagKey']       = $request->tagKey;
        $req                   = new OpenApiRequest([
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
        $query                       = [];
        $query['NewResourceGroupId'] = $request->newResourceGroupId;
        $query['ResourceId']         = $request->resourceId;
        $query['ResourceType']       = $request->resourceType;
        $req                         = new OpenApiRequest([
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
     * @param RemoveEntriesFromAclRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return RemoveEntriesFromAclResponse
     */
    public function removeEntriesFromAclWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                = [];
        $query['AclId']       = $request->aclId;
        $query['ClientToken'] = $request->clientToken;
        $query['DryRun']      = $request->dryRun;
        $query['Entries']     = $request->entries;
        $req                  = new OpenApiRequest([
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
     * @param RemoveServersFromServerGroupRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return RemoveServersFromServerGroupResponse
     */
    public function removeServersFromServerGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                  = [];
        $query['ClientToken']   = $request->clientToken;
        $query['DryRun']        = $request->dryRun;
        $query['ServerGroupId'] = $request->serverGroupId;
        $query['Servers']       = $request->servers;
        $req                    = new OpenApiRequest([
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
     * @param ReplaceServersInServerGroupRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return ReplaceServersInServerGroupResponse
     */
    public function replaceServersInServerGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                   = [];
        $query['AddedServers']   = $request->addedServers;
        $query['ClientToken']    = $request->clientToken;
        $query['DryRun']         = $request->dryRun;
        $query['RemovedServers'] = $request->removedServers;
        $query['ServerGroupId']  = $request->serverGroupId;
        $req                     = new OpenApiRequest([
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
     * @param StartListenerRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return StartListenerResponse
     */
    public function startListenerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                = [];
        $query['ClientToken'] = $request->clientToken;
        $query['DryRun']      = $request->dryRun;
        $query['ListenerId']  = $request->listenerId;
        $req                  = new OpenApiRequest([
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
     * @param StopListenerRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return StopListenerResponse
     */
    public function stopListenerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                = [];
        $query['ClientToken'] = $request->clientToken;
        $query['DryRun']      = $request->dryRun;
        $query['ListenerId']  = $request->listenerId;
        $req                  = new OpenApiRequest([
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
     * @param TagResourcesRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return TagResourcesResponse
     */
    public function tagResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                 = [];
        $query['ResourceId']   = $request->resourceId;
        $query['ResourceType'] = $request->resourceType;
        $query['Tag']          = $request->tag;
        $req                   = new OpenApiRequest([
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
        $query                 = [];
        $query['ResourceId']   = $request->resourceId;
        $query['ResourceType'] = $request->resourceType;
        $query['Tag']          = $request->tag;
        $query['TagKey']       = $request->tagKey;
        $req                   = new OpenApiRequest([
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
     * @param UpdateAclAttributeRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return UpdateAclAttributeResponse
     */
    public function updateAclAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                = [];
        $query['AclId']       = $request->aclId;
        $query['AclName']     = $request->aclName;
        $query['ClientToken'] = $request->clientToken;
        $query['DryRun']      = $request->dryRun;
        $req                  = new OpenApiRequest([
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
        $query                            = [];
        $query['ClientToken']             = $request->clientToken;
        $query['DryRun']                  = $request->dryRun;
        $query['HealthCheckCodes']        = $request->healthCheckCodes;
        $query['HealthCheckConnectPort']  = $request->healthCheckConnectPort;
        $query['HealthCheckHost']         = $request->healthCheckHost;
        $query['HealthCheckHttpVersion']  = $request->healthCheckHttpVersion;
        $query['HealthCheckInterval']     = $request->healthCheckInterval;
        $query['HealthCheckMethod']       = $request->healthCheckMethod;
        $query['HealthCheckPath']         = $request->healthCheckPath;
        $query['HealthCheckProtocol']     = $request->healthCheckProtocol;
        $query['HealthCheckTemplateId']   = $request->healthCheckTemplateId;
        $query['HealthCheckTemplateName'] = $request->healthCheckTemplateName;
        $query['HealthCheckTimeout']      = $request->healthCheckTimeout;
        $query['HealthyThreshold']        = $request->healthyThreshold;
        $query['UnhealthyThreshold']      = $request->unhealthyThreshold;
        $req                              = new OpenApiRequest([
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
     * @param UpdateListenerAttributeRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return UpdateListenerAttributeResponse
     */
    public function updateListenerAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                        = [];
        $query['CaCertificates']      = $request->caCertificates;
        $query['CaEnabled']           = $request->caEnabled;
        $query['Certificates']        = $request->certificates;
        $query['ClientToken']         = $request->clientToken;
        $query['DefaultActions']      = $request->defaultActions;
        $query['DryRun']              = $request->dryRun;
        $query['GzipEnabled']         = $request->gzipEnabled;
        $query['Http2Enabled']        = $request->http2Enabled;
        $query['IdleTimeout']         = $request->idleTimeout;
        $query['ListenerDescription'] = $request->listenerDescription;
        $query['ListenerId']          = $request->listenerId;
        $query['QuicConfig']          = $request->quicConfig;
        $query['RequestTimeout']      = $request->requestTimeout;
        $query['SecurityPolicyId']    = $request->securityPolicyId;
        $query['XForwardedForConfig'] = $request->XForwardedForConfig;
        $req                          = new OpenApiRequest([
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
     * @param UpdateListenerLogConfigRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return UpdateListenerLogConfigResponse
     */
    public function updateListenerLogConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                                            = [];
        $query['AccessLogRecordCustomizedHeadersEnabled'] = $request->accessLogRecordCustomizedHeadersEnabled;
        $query['AccessLogTracingConfig']                  = $request->accessLogTracingConfig;
        $query['ClientToken']                             = $request->clientToken;
        $query['DryRun']                                  = $request->dryRun;
        $query['ListenerId']                              = $request->listenerId;
        $req                                              = new OpenApiRequest([
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
     * @param UpdateLoadBalancerAddressTypeConfigRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return UpdateLoadBalancerAddressTypeConfigResponse
     */
    public function updateLoadBalancerAddressTypeConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                   = [];
        $query['AddressType']    = $request->addressType;
        $query['ClientToken']    = $request->clientToken;
        $query['DryRun']         = $request->dryRun;
        $query['LoadBalancerId'] = $request->loadBalancerId;
        $query['ZoneMappings']   = $request->zoneMappings;
        $req                     = new OpenApiRequest([
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
     * @param UpdateLoadBalancerAttributeRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return UpdateLoadBalancerAttributeResponse
     */
    public function updateLoadBalancerAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                                 = [];
        $query['ClientToken']                  = $request->clientToken;
        $query['DryRun']                       = $request->dryRun;
        $query['LoadBalancerId']               = $request->loadBalancerId;
        $query['LoadBalancerName']             = $request->loadBalancerName;
        $query['ModificationProtectionConfig'] = $request->modificationProtectionConfig;
        $req                                   = new OpenApiRequest([
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
     * @param UpdateLoadBalancerEditionRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return UpdateLoadBalancerEditionResponse
     */
    public function updateLoadBalancerEditionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                        = [];
        $query['ClientToken']         = $request->clientToken;
        $query['DryRun']              = $request->dryRun;
        $query['LoadBalancerEdition'] = $request->loadBalancerEdition;
        $query['LoadBalancerId']      = $request->loadBalancerId;
        $req                          = new OpenApiRequest([
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
     * @param UpdateLoadBalancerZonesRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return UpdateLoadBalancerZonesResponse
     */
    public function updateLoadBalancerZonesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                   = [];
        $query['ClientToken']    = $request->clientToken;
        $query['DryRun']         = $request->dryRun;
        $query['LoadBalancerId'] = $request->loadBalancerId;
        $query['ZoneMappings']   = $request->zoneMappings;
        $req                     = new OpenApiRequest([
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
     * @param UpdateRuleAttributeRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return UpdateRuleAttributeResponse
     */
    public function updateRuleAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                   = [];
        $query['ClientToken']    = $request->clientToken;
        $query['DryRun']         = $request->dryRun;
        $query['Priority']       = $request->priority;
        $query['RuleActions']    = $request->ruleActions;
        $query['RuleConditions'] = $request->ruleConditions;
        $query['RuleId']         = $request->ruleId;
        $query['RuleName']       = $request->ruleName;
        $req                     = new OpenApiRequest([
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
     * @param UpdateRulesAttributeRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return UpdateRulesAttributeResponse
     */
    public function updateRulesAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                = [];
        $query['ClientToken'] = $request->clientToken;
        $query['DryRun']      = $request->dryRun;
        $query['Rules']       = $request->rules;
        $req                  = new OpenApiRequest([
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
     * @param UpdateSecurityPolicyAttributeRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return UpdateSecurityPolicyAttributeResponse
     */
    public function updateSecurityPolicyAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                       = [];
        $query['Ciphers']            = $request->ciphers;
        $query['ClientToken']        = $request->clientToken;
        $query['DryRun']             = $request->dryRun;
        $query['SecurityPolicyId']   = $request->securityPolicyId;
        $query['SecurityPolicyName'] = $request->securityPolicyName;
        $query['TLSVersions']        = $request->TLSVersions;
        $req                         = new OpenApiRequest([
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
     * @param UpdateServerGroupAttributeRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return UpdateServerGroupAttributeResponse
     */
    public function updateServerGroupAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                        = [];
        $query['ClientToken']         = $request->clientToken;
        $query['DryRun']              = $request->dryRun;
        $query['HealthCheckConfig']   = $request->healthCheckConfig;
        $query['Scheduler']           = $request->scheduler;
        $query['ServerGroupId']       = $request->serverGroupId;
        $query['ServerGroupName']     = $request->serverGroupName;
        $query['StickySessionConfig'] = $request->stickySessionConfig;
        $req                          = new OpenApiRequest([
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
     * @param UpdateServerGroupServersAttributeRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return UpdateServerGroupServersAttributeResponse
     */
    public function updateServerGroupServersAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                  = [];
        $query['ClientToken']   = $request->clientToken;
        $query['DryRun']        = $request->dryRun;
        $query['ServerGroupId'] = $request->serverGroupId;
        $query['Servers']       = $request->servers;
        $req                    = new OpenApiRequest([
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

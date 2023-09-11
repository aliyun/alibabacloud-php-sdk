<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Nlb\V20220430;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Nlb\V20220430\Models\AddServersToServerGroupRequest;
use AlibabaCloud\SDK\Nlb\V20220430\Models\AddServersToServerGroupResponse;
use AlibabaCloud\SDK\Nlb\V20220430\Models\AssociateAdditionalCertificatesWithListenerRequest;
use AlibabaCloud\SDK\Nlb\V20220430\Models\AssociateAdditionalCertificatesWithListenerResponse;
use AlibabaCloud\SDK\Nlb\V20220430\Models\AttachCommonBandwidthPackageToLoadBalancerRequest;
use AlibabaCloud\SDK\Nlb\V20220430\Models\AttachCommonBandwidthPackageToLoadBalancerResponse;
use AlibabaCloud\SDK\Nlb\V20220430\Models\CancelShiftLoadBalancerZonesRequest;
use AlibabaCloud\SDK\Nlb\V20220430\Models\CancelShiftLoadBalancerZonesResponse;
use AlibabaCloud\SDK\Nlb\V20220430\Models\CreateListenerRequest;
use AlibabaCloud\SDK\Nlb\V20220430\Models\CreateListenerResponse;
use AlibabaCloud\SDK\Nlb\V20220430\Models\CreateLoadBalancerRequest;
use AlibabaCloud\SDK\Nlb\V20220430\Models\CreateLoadBalancerResponse;
use AlibabaCloud\SDK\Nlb\V20220430\Models\CreateSecurityPolicyRequest;
use AlibabaCloud\SDK\Nlb\V20220430\Models\CreateSecurityPolicyResponse;
use AlibabaCloud\SDK\Nlb\V20220430\Models\CreateServerGroupRequest;
use AlibabaCloud\SDK\Nlb\V20220430\Models\CreateServerGroupResponse;
use AlibabaCloud\SDK\Nlb\V20220430\Models\DeleteListenerRequest;
use AlibabaCloud\SDK\Nlb\V20220430\Models\DeleteListenerResponse;
use AlibabaCloud\SDK\Nlb\V20220430\Models\DeleteLoadBalancerRequest;
use AlibabaCloud\SDK\Nlb\V20220430\Models\DeleteLoadBalancerResponse;
use AlibabaCloud\SDK\Nlb\V20220430\Models\DeleteSecurityPolicyRequest;
use AlibabaCloud\SDK\Nlb\V20220430\Models\DeleteSecurityPolicyResponse;
use AlibabaCloud\SDK\Nlb\V20220430\Models\DeleteServerGroupRequest;
use AlibabaCloud\SDK\Nlb\V20220430\Models\DeleteServerGroupResponse;
use AlibabaCloud\SDK\Nlb\V20220430\Models\DescribeRegionsRequest;
use AlibabaCloud\SDK\Nlb\V20220430\Models\DescribeRegionsResponse;
use AlibabaCloud\SDK\Nlb\V20220430\Models\DescribeZonesRequest;
use AlibabaCloud\SDK\Nlb\V20220430\Models\DescribeZonesResponse;
use AlibabaCloud\SDK\Nlb\V20220430\Models\DetachCommonBandwidthPackageFromLoadBalancerRequest;
use AlibabaCloud\SDK\Nlb\V20220430\Models\DetachCommonBandwidthPackageFromLoadBalancerResponse;
use AlibabaCloud\SDK\Nlb\V20220430\Models\DisableLoadBalancerIpv6InternetRequest;
use AlibabaCloud\SDK\Nlb\V20220430\Models\DisableLoadBalancerIpv6InternetResponse;
use AlibabaCloud\SDK\Nlb\V20220430\Models\DisassociateAdditionalCertificatesWithListenerRequest;
use AlibabaCloud\SDK\Nlb\V20220430\Models\DisassociateAdditionalCertificatesWithListenerResponse;
use AlibabaCloud\SDK\Nlb\V20220430\Models\EnableLoadBalancerIpv6InternetRequest;
use AlibabaCloud\SDK\Nlb\V20220430\Models\EnableLoadBalancerIpv6InternetResponse;
use AlibabaCloud\SDK\Nlb\V20220430\Models\GetJobStatusRequest;
use AlibabaCloud\SDK\Nlb\V20220430\Models\GetJobStatusResponse;
use AlibabaCloud\SDK\Nlb\V20220430\Models\GetListenerAttributeRequest;
use AlibabaCloud\SDK\Nlb\V20220430\Models\GetListenerAttributeResponse;
use AlibabaCloud\SDK\Nlb\V20220430\Models\GetListenerHealthStatusRequest;
use AlibabaCloud\SDK\Nlb\V20220430\Models\GetListenerHealthStatusResponse;
use AlibabaCloud\SDK\Nlb\V20220430\Models\GetLoadBalancerAttributeRequest;
use AlibabaCloud\SDK\Nlb\V20220430\Models\GetLoadBalancerAttributeResponse;
use AlibabaCloud\SDK\Nlb\V20220430\Models\ListListenerCertificatesRequest;
use AlibabaCloud\SDK\Nlb\V20220430\Models\ListListenerCertificatesResponse;
use AlibabaCloud\SDK\Nlb\V20220430\Models\ListListenersRequest;
use AlibabaCloud\SDK\Nlb\V20220430\Models\ListListenersResponse;
use AlibabaCloud\SDK\Nlb\V20220430\Models\ListLoadBalancersRequest;
use AlibabaCloud\SDK\Nlb\V20220430\Models\ListLoadBalancersResponse;
use AlibabaCloud\SDK\Nlb\V20220430\Models\ListSecurityPolicyRequest;
use AlibabaCloud\SDK\Nlb\V20220430\Models\ListSecurityPolicyResponse;
use AlibabaCloud\SDK\Nlb\V20220430\Models\ListServerGroupServersRequest;
use AlibabaCloud\SDK\Nlb\V20220430\Models\ListServerGroupServersResponse;
use AlibabaCloud\SDK\Nlb\V20220430\Models\ListServerGroupsRequest;
use AlibabaCloud\SDK\Nlb\V20220430\Models\ListServerGroupsResponse;
use AlibabaCloud\SDK\Nlb\V20220430\Models\ListSystemSecurityPolicyRequest;
use AlibabaCloud\SDK\Nlb\V20220430\Models\ListSystemSecurityPolicyResponse;
use AlibabaCloud\SDK\Nlb\V20220430\Models\ListTagResourcesRequest;
use AlibabaCloud\SDK\Nlb\V20220430\Models\ListTagResourcesResponse;
use AlibabaCloud\SDK\Nlb\V20220430\Models\LoadBalancerJoinSecurityGroupRequest;
use AlibabaCloud\SDK\Nlb\V20220430\Models\LoadBalancerJoinSecurityGroupResponse;
use AlibabaCloud\SDK\Nlb\V20220430\Models\LoadBalancerLeaveSecurityGroupRequest;
use AlibabaCloud\SDK\Nlb\V20220430\Models\LoadBalancerLeaveSecurityGroupResponse;
use AlibabaCloud\SDK\Nlb\V20220430\Models\MoveResourceGroupRequest;
use AlibabaCloud\SDK\Nlb\V20220430\Models\MoveResourceGroupResponse;
use AlibabaCloud\SDK\Nlb\V20220430\Models\RemoveServersFromServerGroupRequest;
use AlibabaCloud\SDK\Nlb\V20220430\Models\RemoveServersFromServerGroupResponse;
use AlibabaCloud\SDK\Nlb\V20220430\Models\StartListenerRequest;
use AlibabaCloud\SDK\Nlb\V20220430\Models\StartListenerResponse;
use AlibabaCloud\SDK\Nlb\V20220430\Models\StartShiftLoadBalancerZonesRequest;
use AlibabaCloud\SDK\Nlb\V20220430\Models\StartShiftLoadBalancerZonesResponse;
use AlibabaCloud\SDK\Nlb\V20220430\Models\StopListenerRequest;
use AlibabaCloud\SDK\Nlb\V20220430\Models\StopListenerResponse;
use AlibabaCloud\SDK\Nlb\V20220430\Models\TagResourcesRequest;
use AlibabaCloud\SDK\Nlb\V20220430\Models\TagResourcesResponse;
use AlibabaCloud\SDK\Nlb\V20220430\Models\UntagResourcesRequest;
use AlibabaCloud\SDK\Nlb\V20220430\Models\UntagResourcesResponse;
use AlibabaCloud\SDK\Nlb\V20220430\Models\UpdateListenerAttributeRequest;
use AlibabaCloud\SDK\Nlb\V20220430\Models\UpdateListenerAttributeResponse;
use AlibabaCloud\SDK\Nlb\V20220430\Models\UpdateLoadBalancerAddressTypeConfigRequest;
use AlibabaCloud\SDK\Nlb\V20220430\Models\UpdateLoadBalancerAddressTypeConfigResponse;
use AlibabaCloud\SDK\Nlb\V20220430\Models\UpdateLoadBalancerAttributeRequest;
use AlibabaCloud\SDK\Nlb\V20220430\Models\UpdateLoadBalancerAttributeResponse;
use AlibabaCloud\SDK\Nlb\V20220430\Models\UpdateLoadBalancerProtectionRequest;
use AlibabaCloud\SDK\Nlb\V20220430\Models\UpdateLoadBalancerProtectionResponse;
use AlibabaCloud\SDK\Nlb\V20220430\Models\UpdateLoadBalancerZonesRequest;
use AlibabaCloud\SDK\Nlb\V20220430\Models\UpdateLoadBalancerZonesResponse;
use AlibabaCloud\SDK\Nlb\V20220430\Models\UpdateSecurityPolicyAttributeRequest;
use AlibabaCloud\SDK\Nlb\V20220430\Models\UpdateSecurityPolicyAttributeResponse;
use AlibabaCloud\SDK\Nlb\V20220430\Models\UpdateServerGroupAttributeRequest;
use AlibabaCloud\SDK\Nlb\V20220430\Models\UpdateServerGroupAttributeResponse;
use AlibabaCloud\SDK\Nlb\V20220430\Models\UpdateServerGroupServersAttributeRequest;
use AlibabaCloud\SDK\Nlb\V20220430\Models\UpdateServerGroupServersAttributeResponse;
use AlibabaCloud\Tea\Tea;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Nlb extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('nlb', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param AddServersToServerGroupRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return AddServersToServerGroupResponse
     */
    public function addServersToServerGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            $body['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $body['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->serverGroupId)) {
            $body['ServerGroupId'] = $request->serverGroupId;
        }
        $bodyFlat = [];
        if (!Utils::isUnset($request->servers)) {
            $bodyFlat['Servers'] = $request->servers;
        }
        $body = Tea::merge($body, OpenApiUtilClient::query($bodyFlat));
        $req  = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'AddServersToServerGroup',
            'version'     => '2022-04-30',
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
     * @param AssociateAdditionalCertificatesWithListenerRequest $request
     * @param RuntimeOptions                                     $runtime
     *
     * @return AssociateAdditionalCertificatesWithListenerResponse
     */
    public function associateAdditionalCertificatesWithListenerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->additionalCertificateIds)) {
            $body['AdditionalCertificateIds'] = $request->additionalCertificateIds;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $body['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $body['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->listenerId)) {
            $body['ListenerId'] = $request->listenerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'AssociateAdditionalCertificatesWithListener',
            'version'     => '2022-04-30',
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
        $body = [];
        if (!Utils::isUnset($request->bandwidthPackageId)) {
            $body['BandwidthPackageId'] = $request->bandwidthPackageId;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $body['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $body['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->loadBalancerId)) {
            $body['LoadBalancerId'] = $request->loadBalancerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'AttachCommonBandwidthPackageToLoadBalancer',
            'version'     => '2022-04-30',
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
     * Before you call this operation, the zone of the Network Load Balancer (NLB) instance is removed from the DNS record by using the console or calling the [StartShiftLoadBalancerZones](~~2411999~~) API operation.
     *   *
     * @param CancelShiftLoadBalancerZonesRequest $request CancelShiftLoadBalancerZonesRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return CancelShiftLoadBalancerZonesResponse CancelShiftLoadBalancerZonesResponse
     */
    public function cancelShiftLoadBalancerZonesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            $body['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $body['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->loadBalancerId)) {
            $body['LoadBalancerId'] = $request->loadBalancerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->zoneMappings)) {
            $body['ZoneMappings'] = $request->zoneMappings;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CancelShiftLoadBalancerZones',
            'version'     => '2022-04-30',
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
     * Before you call this operation, the zone of the Network Load Balancer (NLB) instance is removed from the DNS record by using the console or calling the [StartShiftLoadBalancerZones](~~2411999~~) API operation.
     *   *
     * @param CancelShiftLoadBalancerZonesRequest $request CancelShiftLoadBalancerZonesRequest
     *
     * @return CancelShiftLoadBalancerZonesResponse CancelShiftLoadBalancerZonesResponse
     */
    public function cancelShiftLoadBalancerZones($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cancelShiftLoadBalancerZonesWithOptions($request, $runtime);
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
        $body = [];
        if (!Utils::isUnset($request->alpnEnabled)) {
            $body['AlpnEnabled'] = $request->alpnEnabled;
        }
        if (!Utils::isUnset($request->alpnPolicy)) {
            $body['AlpnPolicy'] = $request->alpnPolicy;
        }
        if (!Utils::isUnset($request->caCertificateIds)) {
            $body['CaCertificateIds'] = $request->caCertificateIds;
        }
        if (!Utils::isUnset($request->caEnabled)) {
            $body['CaEnabled'] = $request->caEnabled;
        }
        if (!Utils::isUnset($request->certificateIds)) {
            $body['CertificateIds'] = $request->certificateIds;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $body['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->cps)) {
            $body['Cps'] = $request->cps;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $body['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->endPort)) {
            $body['EndPort'] = $request->endPort;
        }
        if (!Utils::isUnset($request->idleTimeout)) {
            $body['IdleTimeout'] = $request->idleTimeout;
        }
        if (!Utils::isUnset($request->listenerDescription)) {
            $body['ListenerDescription'] = $request->listenerDescription;
        }
        if (!Utils::isUnset($request->listenerPort)) {
            $body['ListenerPort'] = $request->listenerPort;
        }
        if (!Utils::isUnset($request->listenerProtocol)) {
            $body['ListenerProtocol'] = $request->listenerProtocol;
        }
        if (!Utils::isUnset($request->loadBalancerId)) {
            $body['LoadBalancerId'] = $request->loadBalancerId;
        }
        if (!Utils::isUnset($request->mss)) {
            $body['Mss'] = $request->mss;
        }
        if (!Utils::isUnset($request->proxyProtocolEnabled)) {
            $body['ProxyProtocolEnabled'] = $request->proxyProtocolEnabled;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->secSensorEnabled)) {
            $body['SecSensorEnabled'] = $request->secSensorEnabled;
        }
        if (!Utils::isUnset($request->securityPolicyId)) {
            $body['SecurityPolicyId'] = $request->securityPolicyId;
        }
        if (!Utils::isUnset($request->serverGroupId)) {
            $body['ServerGroupId'] = $request->serverGroupId;
        }
        if (!Utils::isUnset($request->startPort)) {
            $body['StartPort'] = $request->startPort;
        }
        if (!Utils::isUnset($request->tag)) {
            $body['Tag'] = $request->tag;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateListener',
            'version'     => '2022-04-30',
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
     * *   When you create an NLB instance, the service-linked role AliyunServiceRoleForNlb is automatically created and assigned to you.
     *   * *   **CreateLoadBalancer** is an asynchronous operation. After you send a request, the system returns an instance ID and runs the task in the background. You can call [GetLoadBalancerAttribute](~~445873~~) to query the status of an NLB instance.
     *   *     *   If an NLB instance is in the **Provisioning** state, the NLB instance is being created.
     *   *     *   If an NLB instance is in the **Active** state, the NLB instance is created.
     *   *
     * @param CreateLoadBalancerRequest $request CreateLoadBalancerRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateLoadBalancerResponse CreateLoadBalancerResponse
     */
    public function createLoadBalancerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->addressIpVersion)) {
            $body['AddressIpVersion'] = $request->addressIpVersion;
        }
        if (!Utils::isUnset($request->addressType)) {
            $body['AddressType'] = $request->addressType;
        }
        if (!Utils::isUnset($request->bandwidthPackageId)) {
            $body['BandwidthPackageId'] = $request->bandwidthPackageId;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $body['ClientToken'] = $request->clientToken;
        }
        $bodyFlat = [];
        if (!Utils::isUnset($request->deletionProtectionConfig)) {
            $bodyFlat['DeletionProtectionConfig'] = $request->deletionProtectionConfig;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $body['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->loadBalancerBillingConfig)) {
            $bodyFlat['LoadBalancerBillingConfig'] = $request->loadBalancerBillingConfig;
        }
        if (!Utils::isUnset($request->loadBalancerName)) {
            $body['LoadBalancerName'] = $request->loadBalancerName;
        }
        if (!Utils::isUnset($request->loadBalancerType)) {
            $body['LoadBalancerType'] = $request->loadBalancerType;
        }
        if (!Utils::isUnset($request->modificationProtectionConfig)) {
            $bodyFlat['ModificationProtectionConfig'] = $request->modificationProtectionConfig;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $body['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->tag)) {
            $body['Tag'] = $request->tag;
        }
        if (!Utils::isUnset($request->vpcId)) {
            $body['VpcId'] = $request->vpcId;
        }
        if (!Utils::isUnset($request->zoneMappings)) {
            $bodyFlat['ZoneMappings'] = $request->zoneMappings;
        }
        $body = Tea::merge($body, OpenApiUtilClient::query($bodyFlat));
        $req  = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateLoadBalancer',
            'version'     => '2022-04-30',
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
     * *   When you create an NLB instance, the service-linked role AliyunServiceRoleForNlb is automatically created and assigned to you.
     *   * *   **CreateLoadBalancer** is an asynchronous operation. After you send a request, the system returns an instance ID and runs the task in the background. You can call [GetLoadBalancerAttribute](~~445873~~) to query the status of an NLB instance.
     *   *     *   If an NLB instance is in the **Provisioning** state, the NLB instance is being created.
     *   *     *   If an NLB instance is in the **Active** state, the NLB instance is created.
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
     * @param CreateSecurityPolicyRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return CreateSecurityPolicyResponse
     */
    public function createSecurityPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->ciphers)) {
            $body['Ciphers'] = $request->ciphers;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $body['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $body['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $body['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->securityPolicyName)) {
            $body['SecurityPolicyName'] = $request->securityPolicyName;
        }
        if (!Utils::isUnset($request->tag)) {
            $body['Tag'] = $request->tag;
        }
        if (!Utils::isUnset($request->tlsVersions)) {
            $body['TlsVersions'] = $request->tlsVersions;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateSecurityPolicy',
            'version'     => '2022-04-30',
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
     * *   **protocol** specifies the protocol used to forward requests to the backend servers.
     *   * *   NLB instances support only backend server groups that use TCP, UDP, or SSL over TCP.
     *   * *   **CreateServerGroup** is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background. You can call the [GetJobStatus](~~445904~~) operation to query the creation status of the task.
     *   *     *   If the task is in the **Succeeded** status, the server group is created.
     *   *     *   If the task is in the **Processing** status, the server group is being created.
     *   *
     * @param CreateServerGroupRequest $request CreateServerGroupRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateServerGroupResponse CreateServerGroupResponse
     */
    public function createServerGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->addressIPVersion)) {
            $body['AddressIPVersion'] = $request->addressIPVersion;
        }
        if (!Utils::isUnset($request->anyPortEnabled)) {
            $body['AnyPortEnabled'] = $request->anyPortEnabled;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $body['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->connectionDrainEnabled)) {
            $body['ConnectionDrainEnabled'] = $request->connectionDrainEnabled;
        }
        if (!Utils::isUnset($request->connectionDrainTimeout)) {
            $body['ConnectionDrainTimeout'] = $request->connectionDrainTimeout;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $body['DryRun'] = $request->dryRun;
        }
        $bodyFlat = [];
        if (!Utils::isUnset($request->healthCheckConfig)) {
            $bodyFlat['HealthCheckConfig'] = $request->healthCheckConfig;
        }
        if (!Utils::isUnset($request->preserveClientIpEnabled)) {
            $body['PreserveClientIpEnabled'] = $request->preserveClientIpEnabled;
        }
        if (!Utils::isUnset($request->protocol)) {
            $body['Protocol'] = $request->protocol;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $body['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->scheduler)) {
            $body['Scheduler'] = $request->scheduler;
        }
        if (!Utils::isUnset($request->serverGroupName)) {
            $body['ServerGroupName'] = $request->serverGroupName;
        }
        if (!Utils::isUnset($request->serverGroupType)) {
            $body['ServerGroupType'] = $request->serverGroupType;
        }
        if (!Utils::isUnset($request->tag)) {
            $body['Tag'] = $request->tag;
        }
        if (!Utils::isUnset($request->vpcId)) {
            $body['VpcId'] = $request->vpcId;
        }
        $body = Tea::merge($body, OpenApiUtilClient::query($bodyFlat));
        $req  = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateServerGroup',
            'version'     => '2022-04-30',
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
     * *   **protocol** specifies the protocol used to forward requests to the backend servers.
     *   * *   NLB instances support only backend server groups that use TCP, UDP, or SSL over TCP.
     *   * *   **CreateServerGroup** is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background. You can call the [GetJobStatus](~~445904~~) operation to query the creation status of the task.
     *   *     *   If the task is in the **Succeeded** status, the server group is created.
     *   *     *   If the task is in the **Processing** status, the server group is being created.
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
     * @param DeleteListenerRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DeleteListenerResponse
     */
    public function deleteListenerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            $body['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $body['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->listenerId)) {
            $body['ListenerId'] = $request->listenerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteListener',
            'version'     => '2022-04-30',
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
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            $body['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $body['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->loadBalancerId)) {
            $body['LoadBalancerId'] = $request->loadBalancerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteLoadBalancer',
            'version'     => '2022-04-30',
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
     * @param DeleteSecurityPolicyRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DeleteSecurityPolicyResponse
     */
    public function deleteSecurityPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            $body['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $body['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->securityPolicyId)) {
            $body['SecurityPolicyId'] = $request->securityPolicyId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteSecurityPolicy',
            'version'     => '2022-04-30',
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
     * You can delete server groups that are not associated with listeners.
     *   *
     * @param DeleteServerGroupRequest $request DeleteServerGroupRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteServerGroupResponse DeleteServerGroupResponse
     */
    public function deleteServerGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            $body['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $body['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->serverGroupId)) {
            $body['ServerGroupId'] = $request->serverGroupId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteServerGroup',
            'version'     => '2022-04-30',
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
     * You can delete server groups that are not associated with listeners.
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
        if (!Utils::isUnset($request->serviceCode)) {
            $query['ServiceCode'] = $request->serviceCode;
        }
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            $body['ClientToken'] = $request->clientToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeRegions',
            'version'     => '2022-04-30',
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
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->serviceCode)) {
            $query['ServiceCode'] = $request->serviceCode;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeZones',
            'version'     => '2022-04-30',
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
     * @param DetachCommonBandwidthPackageFromLoadBalancerRequest $request
     * @param RuntimeOptions                                      $runtime
     *
     * @return DetachCommonBandwidthPackageFromLoadBalancerResponse
     */
    public function detachCommonBandwidthPackageFromLoadBalancerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->bandwidthPackageId)) {
            $body['BandwidthPackageId'] = $request->bandwidthPackageId;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $body['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $body['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->loadBalancerId)) {
            $body['LoadBalancerId'] = $request->loadBalancerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DetachCommonBandwidthPackageFromLoadBalancer',
            'version'     => '2022-04-30',
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
     * @param DisableLoadBalancerIpv6InternetRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return DisableLoadBalancerIpv6InternetResponse
     */
    public function disableLoadBalancerIpv6InternetWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            $body['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $body['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->loadBalancerId)) {
            $body['LoadBalancerId'] = $request->loadBalancerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DisableLoadBalancerIpv6Internet',
            'version'     => '2022-04-30',
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
     * @param DisassociateAdditionalCertificatesWithListenerRequest $request
     * @param RuntimeOptions                                        $runtime
     *
     * @return DisassociateAdditionalCertificatesWithListenerResponse
     */
    public function disassociateAdditionalCertificatesWithListenerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->additionalCertificateIds)) {
            $body['AdditionalCertificateIds'] = $request->additionalCertificateIds;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $body['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $body['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->listenerId)) {
            $body['ListenerId'] = $request->listenerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DisassociateAdditionalCertificatesWithListener',
            'version'     => '2022-04-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DisassociateAdditionalCertificatesWithListenerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DisassociateAdditionalCertificatesWithListenerRequest $request
     *
     * @return DisassociateAdditionalCertificatesWithListenerResponse
     */
    public function disassociateAdditionalCertificatesWithListener($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->disassociateAdditionalCertificatesWithListenerWithOptions($request, $runtime);
    }

    /**
     * @param EnableLoadBalancerIpv6InternetRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return EnableLoadBalancerIpv6InternetResponse
     */
    public function enableLoadBalancerIpv6InternetWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            $body['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $body['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->loadBalancerId)) {
            $body['LoadBalancerId'] = $request->loadBalancerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'EnableLoadBalancerIpv6Internet',
            'version'     => '2022-04-30',
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
     * @param GetJobStatusRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return GetJobStatusResponse
     */
    public function getJobStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->jobId)) {
            $query['JobId'] = $request->jobId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetJobStatus',
            'version'     => '2022-04-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetJobStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetJobStatusRequest $request
     *
     * @return GetJobStatusResponse
     */
    public function getJobStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getJobStatusWithOptions($request, $runtime);
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
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->listenerId)) {
            $query['ListenerId'] = $request->listenerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetListenerAttribute',
            'version'     => '2022-04-30',
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
        if (!Utils::isUnset($request->listenerId)) {
            $query['ListenerId'] = $request->listenerId;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetListenerHealthStatus',
            'version'     => '2022-04-30',
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
            'action'      => 'GetLoadBalancerAttribute',
            'version'     => '2022-04-30',
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
     * @param ListListenerCertificatesRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ListListenerCertificatesResponse
     */
    public function listListenerCertificatesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->certType)) {
            $body['CertType'] = $request->certType;
        }
        if (!Utils::isUnset($request->listenerId)) {
            $body['ListenerId'] = $request->listenerId;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $body['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $body['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListListenerCertificates',
            'version'     => '2022-04-30',
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
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListListeners',
            'version'     => '2022-04-30',
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
        if (!Utils::isUnset($request->loadBalancerBusinessStatus)) {
            $query['LoadBalancerBusinessStatus'] = $request->loadBalancerBusinessStatus;
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
        if (!Utils::isUnset($request->loadBalancerType)) {
            $query['LoadBalancerType'] = $request->loadBalancerType;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
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
            'version'     => '2022-04-30',
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
     * @param ListSecurityPolicyRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ListSecurityPolicyResponse
     */
    public function listSecurityPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        $body = [];
        if (!Utils::isUnset($request->maxResults)) {
            $body['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $body['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $body['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->securityPolicyIds)) {
            $body['SecurityPolicyIds'] = $request->securityPolicyIds;
        }
        if (!Utils::isUnset($request->securityPolicyNames)) {
            $body['SecurityPolicyNames'] = $request->securityPolicyNames;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListSecurityPolicy',
            'version'     => '2022-04-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListSecurityPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListSecurityPolicyRequest $request
     *
     * @return ListSecurityPolicyResponse
     */
    public function listSecurityPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSecurityPolicyWithOptions($request, $runtime);
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
        $body = [];
        if (!Utils::isUnset($request->maxResults)) {
            $body['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $body['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->serverGroupId)) {
            $body['ServerGroupId'] = $request->serverGroupId;
        }
        if (!Utils::isUnset($request->serverIds)) {
            $body['ServerIds'] = $request->serverIds;
        }
        if (!Utils::isUnset($request->serverIps)) {
            $body['ServerIps'] = $request->serverIps;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListServerGroupServers',
            'version'     => '2022-04-30',
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
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        $body = [];
        if (!Utils::isUnset($request->maxResults)) {
            $body['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $body['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $body['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->serverGroupIds)) {
            $body['ServerGroupIds'] = $request->serverGroupIds;
        }
        if (!Utils::isUnset($request->serverGroupNames)) {
            $body['ServerGroupNames'] = $request->serverGroupNames;
        }
        if (!Utils::isUnset($request->serverGroupType)) {
            $body['ServerGroupType'] = $request->serverGroupType;
        }
        if (!Utils::isUnset($request->vpcId)) {
            $body['VpcId'] = $request->vpcId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListServerGroups',
            'version'     => '2022-04-30',
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
     * @param ListSystemSecurityPolicyRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ListSystemSecurityPolicyResponse
     */
    public function listSystemSecurityPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListSystemSecurityPolicy',
            'version'     => '2022-04-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListSystemSecurityPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListSystemSecurityPolicyRequest $request
     *
     * @return ListSystemSecurityPolicyResponse
     */
    public function listSystemSecurityPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSystemSecurityPolicyWithOptions($request, $runtime);
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
        $body = [];
        if (!Utils::isUnset($request->maxResults)) {
            $body['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $body['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        $bodyFlat = [];
        if (!Utils::isUnset($request->resourceId)) {
            $bodyFlat['ResourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $body['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->tag)) {
            $bodyFlat['Tag'] = $request->tag;
        }
        $body = Tea::merge($body, OpenApiUtilClient::query($bodyFlat));
        $req  = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListTagResources',
            'version'     => '2022-04-30',
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
     * *   Make sure that you have created a security group. For more information about how to create a security group, see [CreateSecurityGroup](~~25553~~).
     *   * *   An NLB instance can be associated with up to four security groups.
     *   * *   You can query the security groups that are associated with an NLB instance by calling the [GetLoadBalancerAttribute](~~214362~~) operation.
     *   * *   LoadBalancerJoinSecurityGroup is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background. You can call the [GetJobStatus](~~445904~~) operation to query the status of a task.
     *   *     *   If the task is in the **Succeeded** state, the security group is associated.
     *   *     *   If the task is in the **Processing** state, the security group is being associated. In this case, you can perform only query operations.
     *   *
     * @param LoadBalancerJoinSecurityGroupRequest $request LoadBalancerJoinSecurityGroupRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return LoadBalancerJoinSecurityGroupResponse LoadBalancerJoinSecurityGroupResponse
     */
    public function loadBalancerJoinSecurityGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            $body['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $body['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->loadBalancerId)) {
            $body['LoadBalancerId'] = $request->loadBalancerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->securityGroupIds)) {
            $body['SecurityGroupIds'] = $request->securityGroupIds;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'LoadBalancerJoinSecurityGroup',
            'version'     => '2022-04-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return LoadBalancerJoinSecurityGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * *   Make sure that you have created a security group. For more information about how to create a security group, see [CreateSecurityGroup](~~25553~~).
     *   * *   An NLB instance can be associated with up to four security groups.
     *   * *   You can query the security groups that are associated with an NLB instance by calling the [GetLoadBalancerAttribute](~~214362~~) operation.
     *   * *   LoadBalancerJoinSecurityGroup is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background. You can call the [GetJobStatus](~~445904~~) operation to query the status of a task.
     *   *     *   If the task is in the **Succeeded** state, the security group is associated.
     *   *     *   If the task is in the **Processing** state, the security group is being associated. In this case, you can perform only query operations.
     *   *
     * @param LoadBalancerJoinSecurityGroupRequest $request LoadBalancerJoinSecurityGroupRequest
     *
     * @return LoadBalancerJoinSecurityGroupResponse LoadBalancerJoinSecurityGroupResponse
     */
    public function loadBalancerJoinSecurityGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->loadBalancerJoinSecurityGroupWithOptions($request, $runtime);
    }

    /**
     * LoadBalancerLeaveSecurityGroup is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background. You can call the [GetJobStatus](~~445904~~) operation to query the status of a task.
     *   * *   If the task is in the **Succeeded** state, the security group is disassociated.
     *   * *   If the task is in the **Processing** state, the security group is being disassociated. In this case, you can perform only query operations.
     *   *
     * @param LoadBalancerLeaveSecurityGroupRequest $request LoadBalancerLeaveSecurityGroupRequest
     * @param RuntimeOptions                        $runtime runtime options for this request RuntimeOptions
     *
     * @return LoadBalancerLeaveSecurityGroupResponse LoadBalancerLeaveSecurityGroupResponse
     */
    public function loadBalancerLeaveSecurityGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            $body['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $body['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->loadBalancerId)) {
            $body['LoadBalancerId'] = $request->loadBalancerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->securityGroupIds)) {
            $body['SecurityGroupIds'] = $request->securityGroupIds;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'LoadBalancerLeaveSecurityGroup',
            'version'     => '2022-04-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return LoadBalancerLeaveSecurityGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * LoadBalancerLeaveSecurityGroup is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background. You can call the [GetJobStatus](~~445904~~) operation to query the status of a task.
     *   * *   If the task is in the **Succeeded** state, the security group is disassociated.
     *   * *   If the task is in the **Processing** state, the security group is being disassociated. In this case, you can perform only query operations.
     *   *
     * @param LoadBalancerLeaveSecurityGroupRequest $request LoadBalancerLeaveSecurityGroupRequest
     *
     * @return LoadBalancerLeaveSecurityGroupResponse LoadBalancerLeaveSecurityGroupResponse
     */
    public function loadBalancerLeaveSecurityGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->loadBalancerLeaveSecurityGroupWithOptions($request, $runtime);
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
        $body = [];
        if (!Utils::isUnset($request->newResourceGroupId)) {
            $body['NewResourceGroupId'] = $request->newResourceGroupId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceId)) {
            $body['ResourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $body['ResourceType'] = $request->resourceType;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'MoveResourceGroup',
            'version'     => '2022-04-30',
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
     * @param RemoveServersFromServerGroupRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return RemoveServersFromServerGroupResponse
     */
    public function removeServersFromServerGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            $body['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $body['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->serverGroupId)) {
            $body['ServerGroupId'] = $request->serverGroupId;
        }
        if (!Utils::isUnset($request->servers)) {
            $body['Servers'] = $request->servers;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'RemoveServersFromServerGroup',
            'version'     => '2022-04-30',
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
     * @param StartListenerRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return StartListenerResponse
     */
    public function startListenerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            $body['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $body['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->listenerId)) {
            $body['ListenerId'] = $request->listenerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'StartListener',
            'version'     => '2022-04-30',
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
     * > If a Network Load Balancer (NLB) instance is deployed only in one zone, you cannot remove the NLB instance from the zone.
     *   *
     * @param StartShiftLoadBalancerZonesRequest $request StartShiftLoadBalancerZonesRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return StartShiftLoadBalancerZonesResponse StartShiftLoadBalancerZonesResponse
     */
    public function startShiftLoadBalancerZonesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            $body['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $body['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->loadBalancerId)) {
            $body['LoadBalancerId'] = $request->loadBalancerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->zoneMappings)) {
            $body['ZoneMappings'] = $request->zoneMappings;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'StartShiftLoadBalancerZones',
            'version'     => '2022-04-30',
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
     * > If a Network Load Balancer (NLB) instance is deployed only in one zone, you cannot remove the NLB instance from the zone.
     *   *
     * @param StartShiftLoadBalancerZonesRequest $request StartShiftLoadBalancerZonesRequest
     *
     * @return StartShiftLoadBalancerZonesResponse StartShiftLoadBalancerZonesResponse
     */
    public function startShiftLoadBalancerZones($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startShiftLoadBalancerZonesWithOptions($request, $runtime);
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
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            $body['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $body['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->listenerId)) {
            $body['ListenerId'] = $request->listenerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'StopListener',
            'version'     => '2022-04-30',
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
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            $body['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $body['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        $bodyFlat = [];
        if (!Utils::isUnset($request->resourceId)) {
            $bodyFlat['ResourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $body['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->tag)) {
            $bodyFlat['Tag'] = $request->tag;
        }
        $body = Tea::merge($body, OpenApiUtilClient::query($bodyFlat));
        $req  = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'TagResources',
            'version'     => '2022-04-30',
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
     * @param UntagResourcesRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return UntagResourcesResponse
     */
    public function untagResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->all)) {
            $body['All'] = $request->all;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $body['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $body['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        $bodyFlat = [];
        if (!Utils::isUnset($request->resourceId)) {
            $bodyFlat['ResourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $body['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->tagKey)) {
            $bodyFlat['TagKey'] = $request->tagKey;
        }
        $body = Tea::merge($body, OpenApiUtilClient::query($bodyFlat));
        $req  = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UntagResources',
            'version'     => '2022-04-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UntagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param UpdateListenerAttributeRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return UpdateListenerAttributeResponse
     */
    public function updateListenerAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->alpnEnabled)) {
            $body['AlpnEnabled'] = $request->alpnEnabled;
        }
        if (!Utils::isUnset($request->alpnPolicy)) {
            $body['AlpnPolicy'] = $request->alpnPolicy;
        }
        if (!Utils::isUnset($request->caCertificateIds)) {
            $body['CaCertificateIds'] = $request->caCertificateIds;
        }
        if (!Utils::isUnset($request->caEnabled)) {
            $body['CaEnabled'] = $request->caEnabled;
        }
        if (!Utils::isUnset($request->certificateIds)) {
            $body['CertificateIds'] = $request->certificateIds;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $body['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->cps)) {
            $body['Cps'] = $request->cps;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $body['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->idleTimeout)) {
            $body['IdleTimeout'] = $request->idleTimeout;
        }
        if (!Utils::isUnset($request->listenerDescription)) {
            $body['ListenerDescription'] = $request->listenerDescription;
        }
        if (!Utils::isUnset($request->listenerId)) {
            $body['ListenerId'] = $request->listenerId;
        }
        if (!Utils::isUnset($request->mss)) {
            $body['Mss'] = $request->mss;
        }
        if (!Utils::isUnset($request->proxyProtocolEnabled)) {
            $body['ProxyProtocolEnabled'] = $request->proxyProtocolEnabled;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->secSensorEnabled)) {
            $body['SecSensorEnabled'] = $request->secSensorEnabled;
        }
        if (!Utils::isUnset($request->securityPolicyId)) {
            $body['SecurityPolicyId'] = $request->securityPolicyId;
        }
        if (!Utils::isUnset($request->serverGroupId)) {
            $body['ServerGroupId'] = $request->serverGroupId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateListenerAttribute',
            'version'     => '2022-04-30',
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
     * *   Make sure that an NLB instance is created. For more information, see [CreateLoadBalancer](~~445868~~).
     *   * *   You can call the [GetLoadBalancerAttribute](~~445873~~) operation to query the **AddressType** value of an NLB instance after you change the network type.
     *   * *   **UpdateLoadBalancerAddressTypeConfig** is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background. You can call the [GetJobStatus](~~445904~~) operation to query the task status:
     *   *     *   If the task is in the **Succeeded** state, the network type of the IPv4 address of the NLB instance is changed.
     *   *     *   If the task is in the **Processing** state, the network type of the IPv4 address of the NLB instance is being changed. In this case, you can perform only query operations.
     *   *
     * @param UpdateLoadBalancerAddressTypeConfigRequest $request UpdateLoadBalancerAddressTypeConfigRequest
     * @param RuntimeOptions                             $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateLoadBalancerAddressTypeConfigResponse UpdateLoadBalancerAddressTypeConfigResponse
     */
    public function updateLoadBalancerAddressTypeConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->addressType)) {
            $body['AddressType'] = $request->addressType;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $body['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $body['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->loadBalancerId)) {
            $body['LoadBalancerId'] = $request->loadBalancerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->zoneMappings)) {
            $body['ZoneMappings'] = $request->zoneMappings;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateLoadBalancerAddressTypeConfig',
            'version'     => '2022-04-30',
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
     * *   Make sure that an NLB instance is created. For more information, see [CreateLoadBalancer](~~445868~~).
     *   * *   You can call the [GetLoadBalancerAttribute](~~445873~~) operation to query the **AddressType** value of an NLB instance after you change the network type.
     *   * *   **UpdateLoadBalancerAddressTypeConfig** is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background. You can call the [GetJobStatus](~~445904~~) operation to query the task status:
     *   *     *   If the task is in the **Succeeded** state, the network type of the IPv4 address of the NLB instance is changed.
     *   *     *   If the task is in the **Processing** state, the network type of the IPv4 address of the NLB instance is being changed. In this case, you can perform only query operations.
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
     * @param UpdateLoadBalancerAttributeRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return UpdateLoadBalancerAttributeResponse
     */
    public function updateLoadBalancerAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            $body['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->cps)) {
            $body['Cps'] = $request->cps;
        }
        if (!Utils::isUnset($request->crossZoneEnabled)) {
            $body['CrossZoneEnabled'] = $request->crossZoneEnabled;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $body['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->loadBalancerId)) {
            $body['LoadBalancerId'] = $request->loadBalancerId;
        }
        if (!Utils::isUnset($request->loadBalancerName)) {
            $body['LoadBalancerName'] = $request->loadBalancerName;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateLoadBalancerAttribute',
            'version'     => '2022-04-30',
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
     * > You can call the [GetLoadBalancerAttribute](~~445873~~) operation to query the details about deletion protection and the configuration read-only mode.
     *   *
     * @param UpdateLoadBalancerProtectionRequest $request UpdateLoadBalancerProtectionRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateLoadBalancerProtectionResponse UpdateLoadBalancerProtectionResponse
     */
    public function updateLoadBalancerProtectionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            $body['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->deletionProtectionEnabled)) {
            $body['DeletionProtectionEnabled'] = $request->deletionProtectionEnabled;
        }
        if (!Utils::isUnset($request->deletionProtectionReason)) {
            $body['DeletionProtectionReason'] = $request->deletionProtectionReason;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $body['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->loadBalancerId)) {
            $body['LoadBalancerId'] = $request->loadBalancerId;
        }
        if (!Utils::isUnset($request->modificationProtectionReason)) {
            $body['ModificationProtectionReason'] = $request->modificationProtectionReason;
        }
        if (!Utils::isUnset($request->modificationProtectionStatus)) {
            $body['ModificationProtectionStatus'] = $request->modificationProtectionStatus;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateLoadBalancerProtection',
            'version'     => '2022-04-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateLoadBalancerProtectionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * > You can call the [GetLoadBalancerAttribute](~~445873~~) operation to query the details about deletion protection and the configuration read-only mode.
     *   *
     * @param UpdateLoadBalancerProtectionRequest $request UpdateLoadBalancerProtectionRequest
     *
     * @return UpdateLoadBalancerProtectionResponse UpdateLoadBalancerProtectionResponse
     */
    public function updateLoadBalancerProtection($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateLoadBalancerProtectionWithOptions($request, $runtime);
    }

    /**
     * When you call this operation, make sure that you specify all the zones of the NLB instance, including the existing zones and new zones. If you do not specify the existing zones, the existing zones are removed.
     *   * Prerequisites
     *   * *   An NLB instance is created. For more information, see [CreateLoadBalancer](~~445868~~).
     *   * *   You can call the [GetLoadBalancerAttribute](~~445873~~) operation to query the zones and zone attributes of an NLB instance.
     *   * *   **UpdateLoadBalancerZones** is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background. You can call the [GetJobStatus](~~445904~~) operation query to query the status of a task:
     *   *     *   If the task is in the **Succeeded** state, the zones and zone attributes are modified.
     *   *     *   If the task is in the **Processing** state, the zones and zone attributes are being modified. In this case, you can perform only query operations.
     *   *
     * @param UpdateLoadBalancerZonesRequest $request UpdateLoadBalancerZonesRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateLoadBalancerZonesResponse UpdateLoadBalancerZonesResponse
     */
    public function updateLoadBalancerZonesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            $body['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $body['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->loadBalancerId)) {
            $body['LoadBalancerId'] = $request->loadBalancerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->zoneMappings)) {
            $body['ZoneMappings'] = $request->zoneMappings;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateLoadBalancerZones',
            'version'     => '2022-04-30',
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
     * When you call this operation, make sure that you specify all the zones of the NLB instance, including the existing zones and new zones. If you do not specify the existing zones, the existing zones are removed.
     *   * Prerequisites
     *   * *   An NLB instance is created. For more information, see [CreateLoadBalancer](~~445868~~).
     *   * *   You can call the [GetLoadBalancerAttribute](~~445873~~) operation to query the zones and zone attributes of an NLB instance.
     *   * *   **UpdateLoadBalancerZones** is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background. You can call the [GetJobStatus](~~445904~~) operation query to query the status of a task:
     *   *     *   If the task is in the **Succeeded** state, the zones and zone attributes are modified.
     *   *     *   If the task is in the **Processing** state, the zones and zone attributes are being modified. In this case, you can perform only query operations.
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
     * @param UpdateSecurityPolicyAttributeRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return UpdateSecurityPolicyAttributeResponse
     */
    public function updateSecurityPolicyAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->ciphers)) {
            $body['Ciphers'] = $request->ciphers;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $body['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $body['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->securityPolicyId)) {
            $body['SecurityPolicyId'] = $request->securityPolicyId;
        }
        if (!Utils::isUnset($request->securityPolicyName)) {
            $body['SecurityPolicyName'] = $request->securityPolicyName;
        }
        if (!Utils::isUnset($request->tlsVersions)) {
            $body['TlsVersions'] = $request->tlsVersions;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateSecurityPolicyAttribute',
            'version'     => '2022-04-30',
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
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            $body['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->connectionDrainEnabled)) {
            $body['ConnectionDrainEnabled'] = $request->connectionDrainEnabled;
        }
        if (!Utils::isUnset($request->connectionDrainTimeout)) {
            $body['ConnectionDrainTimeout'] = $request->connectionDrainTimeout;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $body['DryRun'] = $request->dryRun;
        }
        $bodyFlat = [];
        if (!Utils::isUnset($request->healthCheckConfig)) {
            $bodyFlat['HealthCheckConfig'] = $request->healthCheckConfig;
        }
        if (!Utils::isUnset($request->preserveClientIpEnabled)) {
            $body['PreserveClientIpEnabled'] = $request->preserveClientIpEnabled;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->scheduler)) {
            $body['Scheduler'] = $request->scheduler;
        }
        if (!Utils::isUnset($request->serverGroupId)) {
            $body['ServerGroupId'] = $request->serverGroupId;
        }
        if (!Utils::isUnset($request->serverGroupName)) {
            $body['ServerGroupName'] = $request->serverGroupName;
        }
        $body = Tea::merge($body, OpenApiUtilClient::query($bodyFlat));
        $req  = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateServerGroupAttribute',
            'version'     => '2022-04-30',
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
     * **UpdateServerGroupServersAttribute** is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background.
     *   * 1.  You can call the [ListServerGroups](~~445895~~) operation to query the status of a server group.
     *   *     *   If a server group is in the **Configuring** state, the server group is being modified.
     *   *     *   If a server group is in the **Available** state, the server group is running.
     *   * 2.  You can call the [ListServerGroupServers](~~445896~~) operation to query the status of a backend server.
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
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            $body['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $body['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->serverGroupId)) {
            $body['ServerGroupId'] = $request->serverGroupId;
        }
        if (!Utils::isUnset($request->servers)) {
            $body['Servers'] = $request->servers;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateServerGroupServersAttribute',
            'version'     => '2022-04-30',
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
     *   * 1.  You can call the [ListServerGroups](~~445895~~) operation to query the status of a server group.
     *   *     *   If a server group is in the **Configuring** state, the server group is being modified.
     *   *     *   If a server group is in the **Available** state, the server group is running.
     *   * 2.  You can call the [ListServerGroupServers](~~445896~~) operation to query the status of a backend server.
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

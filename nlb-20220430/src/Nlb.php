<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Nlb\V20220430;

use AlibabaCloud\Dara\Models\RuntimeOptions;
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
use AlibabaCloud\SDK\Nlb\V20220430\Models\CreateListenerShrinkRequest;
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
use AlibabaCloud\SDK\Nlb\V20220430\Models\DescribeHdMonitorRegionConfigRequest;
use AlibabaCloud\SDK\Nlb\V20220430\Models\DescribeHdMonitorRegionConfigResponse;
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
use AlibabaCloud\SDK\Nlb\V20220430\Models\ListAsynJobsRequest;
use AlibabaCloud\SDK\Nlb\V20220430\Models\ListAsynJobsResponse;
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
use AlibabaCloud\SDK\Nlb\V20220430\Models\SetHdMonitorRegionConfigRequest;
use AlibabaCloud\SDK\Nlb\V20220430\Models\SetHdMonitorRegionConfigResponse;
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
use AlibabaCloud\SDK\Nlb\V20220430\Models\UpdateListenerAttributeShrinkRequest;
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
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

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
        if (null !== $endpoint) {
            return $endpoint;
        }

        if (null !== $endpointMap && null !== @$endpointMap[$regionId]) {
            return @$endpointMap[$regionId];
        }

        return Utils::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * Adds backend servers to a specified server group.
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
        $body = [];
        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$body['DryRun'] = $request->dryRun;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->serverGroupId) {
            @$body['ServerGroupId'] = $request->serverGroupId;
        }

        $bodyFlat = [];
        if (null !== $request->servers) {
            @$bodyFlat['Servers'] = $request->servers;
        }

        $body = Dara::merge([
        ], $body, Utils::query($bodyFlat));
        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'AddServersToServerGroup',
            'version' => '2022-04-30',
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
     * Adds backend servers to a specified server group.
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
     * Associates additional certificates with a listener that uses SSL over TCP.
     *
     * @remarks
     * *AssociateAdditionalCertificatesWithListener** is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background. You can call the [ListListenerCertificates](https://help.aliyun.com/document_detail/615175.html) operation to query the status of the task:
     * *   If the listener is in the **Associating** state, the additional certificates are being associated.
     * *   If the listener is in the **Associated** state, the additional certificates are associated.
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
        $body = [];
        if (null !== $request->additionalCertificateIds) {
            @$body['AdditionalCertificateIds'] = $request->additionalCertificateIds;
        }

        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$body['DryRun'] = $request->dryRun;
        }

        if (null !== $request->listenerId) {
            @$body['ListenerId'] = $request->listenerId;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'AssociateAdditionalCertificatesWithListener',
            'version' => '2022-04-30',
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
     * Associates additional certificates with a listener that uses SSL over TCP.
     *
     * @remarks
     * *AssociateAdditionalCertificatesWithListener** is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background. You can call the [ListListenerCertificates](https://help.aliyun.com/document_detail/615175.html) operation to query the status of the task:
     * *   If the listener is in the **Associating** state, the additional certificates are being associated.
     * *   If the listener is in the **Associated** state, the additional certificates are associated.
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
     * Associates an Internet Shared Bandwidth instance with a Network Load Balancer (NLB) instance.
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
        $body = [];
        if (null !== $request->bandwidthPackageId) {
            @$body['BandwidthPackageId'] = $request->bandwidthPackageId;
        }

        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$body['DryRun'] = $request->dryRun;
        }

        if (null !== $request->loadBalancerId) {
            @$body['LoadBalancerId'] = $request->loadBalancerId;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'AttachCommonBandwidthPackageToLoadBalancer',
            'version' => '2022-04-30',
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
     * Associates an Internet Shared Bandwidth instance with a Network Load Balancer (NLB) instance.
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
     * Adds the elastic IP address (EIP) and virtual IP address (VIP) of a zone to the DNS record.
     *
     * @remarks
     * Before you call this operation, the zone of the Network Load Balancer (NLB) instance is removed from the DNS record by using the console or calling the [StartShiftLoadBalancerZones](https://help.aliyun.com/document_detail/2411999.html) API operation.
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
        $body = [];
        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$body['DryRun'] = $request->dryRun;
        }

        if (null !== $request->loadBalancerId) {
            @$body['LoadBalancerId'] = $request->loadBalancerId;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->zoneMappings) {
            @$body['ZoneMappings'] = $request->zoneMappings;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CancelShiftLoadBalancerZones',
            'version' => '2022-04-30',
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
     * Adds the elastic IP address (EIP) and virtual IP address (VIP) of a zone to the DNS record.
     *
     * @remarks
     * Before you call this operation, the zone of the Network Load Balancer (NLB) instance is removed from the DNS record by using the console or calling the [StartShiftLoadBalancerZones](https://help.aliyun.com/document_detail/2411999.html) API operation.
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
     * Creates a TCP or UDP listener, or a listener that uses SSL over TCP for a Network Load Balancer (NLB) instance.
     *
     * @param tmpReq - CreateListenerRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateListenerResponse
     *
     * @param CreateListenerRequest $tmpReq
     * @param RuntimeOptions        $runtime
     *
     * @return CreateListenerResponse
     */
    public function createListenerWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateListenerShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->proxyProtocolV2Config) {
            $request->proxyProtocolV2ConfigShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->proxyProtocolV2Config, 'ProxyProtocolV2Config', 'json');
        }

        $body = [];
        if (null !== $request->alpnEnabled) {
            @$body['AlpnEnabled'] = $request->alpnEnabled;
        }

        if (null !== $request->alpnPolicy) {
            @$body['AlpnPolicy'] = $request->alpnPolicy;
        }

        if (null !== $request->caCertificateIds) {
            @$body['CaCertificateIds'] = $request->caCertificateIds;
        }

        if (null !== $request->caEnabled) {
            @$body['CaEnabled'] = $request->caEnabled;
        }

        if (null !== $request->certificateIds) {
            @$body['CertificateIds'] = $request->certificateIds;
        }

        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->cps) {
            @$body['Cps'] = $request->cps;
        }

        if (null !== $request->dryRun) {
            @$body['DryRun'] = $request->dryRun;
        }

        if (null !== $request->endPort) {
            @$body['EndPort'] = $request->endPort;
        }

        if (null !== $request->idleTimeout) {
            @$body['IdleTimeout'] = $request->idleTimeout;
        }

        if (null !== $request->listenerDescription) {
            @$body['ListenerDescription'] = $request->listenerDescription;
        }

        if (null !== $request->listenerPort) {
            @$body['ListenerPort'] = $request->listenerPort;
        }

        if (null !== $request->listenerProtocol) {
            @$body['ListenerProtocol'] = $request->listenerProtocol;
        }

        if (null !== $request->loadBalancerId) {
            @$body['LoadBalancerId'] = $request->loadBalancerId;
        }

        if (null !== $request->mss) {
            @$body['Mss'] = $request->mss;
        }

        if (null !== $request->proxyProtocolEnabled) {
            @$body['ProxyProtocolEnabled'] = $request->proxyProtocolEnabled;
        }

        if (null !== $request->proxyProtocolV2ConfigShrink) {
            @$body['ProxyProtocolV2Config'] = $request->proxyProtocolV2ConfigShrink;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->secSensorEnabled) {
            @$body['SecSensorEnabled'] = $request->secSensorEnabled;
        }

        if (null !== $request->securityPolicyId) {
            @$body['SecurityPolicyId'] = $request->securityPolicyId;
        }

        if (null !== $request->serverGroupId) {
            @$body['ServerGroupId'] = $request->serverGroupId;
        }

        if (null !== $request->startPort) {
            @$body['StartPort'] = $request->startPort;
        }

        if (null !== $request->tag) {
            @$body['Tag'] = $request->tag;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateListener',
            'version' => '2022-04-30',
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
     * Creates a TCP or UDP listener, or a listener that uses SSL over TCP for a Network Load Balancer (NLB) instance.
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
     * Creates a Network Load Balancer (NLB) instance in a specified region.
     *
     * @remarks
     *   When you create an NLB instance, the service-linked role AliyunServiceRoleForNlb is automatically created and assigned to you.
     * *   **CreateLoadBalancer** is an asynchronous operation. After you send a request, the system returns an instance ID and runs the task in the background. You can call [GetLoadBalancerAttribute](https://help.aliyun.com/document_detail/445873.html) to query the status of an NLB instance.
     *     *   If an NLB instance is in the **Provisioning** state, the NLB instance is being created.
     *     *   If an NLB instance is in the **Active** state, the NLB instance is created.
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
        $body = [];
        if (null !== $request->addressIpVersion) {
            @$body['AddressIpVersion'] = $request->addressIpVersion;
        }

        if (null !== $request->addressType) {
            @$body['AddressType'] = $request->addressType;
        }

        if (null !== $request->bandwidthPackageId) {
            @$body['BandwidthPackageId'] = $request->bandwidthPackageId;
        }

        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        $bodyFlat = [];
        if (null !== $request->deletionProtectionConfig) {
            @$bodyFlat['DeletionProtectionConfig'] = $request->deletionProtectionConfig;
        }

        if (null !== $request->dryRun) {
            @$body['DryRun'] = $request->dryRun;
        }

        if (null !== $request->loadBalancerBillingConfig) {
            @$bodyFlat['LoadBalancerBillingConfig'] = $request->loadBalancerBillingConfig;
        }

        if (null !== $request->loadBalancerName) {
            @$body['LoadBalancerName'] = $request->loadBalancerName;
        }

        if (null !== $request->loadBalancerType) {
            @$body['LoadBalancerType'] = $request->loadBalancerType;
        }

        if (null !== $request->modificationProtectionConfig) {
            @$bodyFlat['ModificationProtectionConfig'] = $request->modificationProtectionConfig;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$body['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->tag) {
            @$body['Tag'] = $request->tag;
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
            'action' => 'CreateLoadBalancer',
            'version' => '2022-04-30',
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
     * Creates a Network Load Balancer (NLB) instance in a specified region.
     *
     * @remarks
     *   When you create an NLB instance, the service-linked role AliyunServiceRoleForNlb is automatically created and assigned to you.
     * *   **CreateLoadBalancer** is an asynchronous operation. After you send a request, the system returns an instance ID and runs the task in the background. You can call [GetLoadBalancerAttribute](https://help.aliyun.com/document_detail/445873.html) to query the status of an NLB instance.
     *     *   If an NLB instance is in the **Provisioning** state, the NLB instance is being created.
     *     *   If an NLB instance is in the **Active** state, the NLB instance is created.
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
     * Creates a custom security policy for a TCP/SSL listener.
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
        $body = [];
        if (null !== $request->ciphers) {
            @$body['Ciphers'] = $request->ciphers;
        }

        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$body['DryRun'] = $request->dryRun;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$body['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->securityPolicyName) {
            @$body['SecurityPolicyName'] = $request->securityPolicyName;
        }

        if (null !== $request->tag) {
            @$body['Tag'] = $request->tag;
        }

        if (null !== $request->tlsVersions) {
            @$body['TlsVersions'] = $request->tlsVersions;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateSecurityPolicy',
            'version' => '2022-04-30',
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
     * Creates a custom security policy for a TCP/SSL listener.
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
     * Creates a server group in a region.
     *
     * @remarks
     * *CreateServerGroup** is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background. You can call the [GetJobStatus](https://help.aliyun.com/document_detail/445904.html) operation to query the creation status of the task.
     *    - If the task is in the **Succeeded** status, the server group is created.
     * -    If the task is in the **Processing** status, the server group is being created.
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
        $body = [];
        if (null !== $request->addressIPVersion) {
            @$body['AddressIPVersion'] = $request->addressIPVersion;
        }

        if (null !== $request->anyPortEnabled) {
            @$body['AnyPortEnabled'] = $request->anyPortEnabled;
        }

        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->connectionDrainEnabled) {
            @$body['ConnectionDrainEnabled'] = $request->connectionDrainEnabled;
        }

        if (null !== $request->connectionDrainTimeout) {
            @$body['ConnectionDrainTimeout'] = $request->connectionDrainTimeout;
        }

        if (null !== $request->dryRun) {
            @$body['DryRun'] = $request->dryRun;
        }

        $bodyFlat = [];
        if (null !== $request->healthCheckConfig) {
            @$bodyFlat['HealthCheckConfig'] = $request->healthCheckConfig;
        }

        if (null !== $request->preserveClientIpEnabled) {
            @$body['PreserveClientIpEnabled'] = $request->preserveClientIpEnabled;
        }

        if (null !== $request->protocol) {
            @$body['Protocol'] = $request->protocol;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$body['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->scheduler) {
            @$body['Scheduler'] = $request->scheduler;
        }

        if (null !== $request->serverGroupName) {
            @$body['ServerGroupName'] = $request->serverGroupName;
        }

        if (null !== $request->serverGroupType) {
            @$body['ServerGroupType'] = $request->serverGroupType;
        }

        if (null !== $request->tag) {
            @$body['Tag'] = $request->tag;
        }

        if (null !== $request->vpcId) {
            @$body['VpcId'] = $request->vpcId;
        }

        $body = Dara::merge([
        ], $body, Utils::query($bodyFlat));
        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateServerGroup',
            'version' => '2022-04-30',
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
     * Creates a server group in a region.
     *
     * @remarks
     * *CreateServerGroup** is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background. You can call the [GetJobStatus](https://help.aliyun.com/document_detail/445904.html) operation to query the creation status of the task.
     *    - If the task is in the **Succeeded** status, the server group is created.
     * -    If the task is in the **Processing** status, the server group is being created.
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
     * Deletes a Network Load Balancer (NLB) listener.
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
        $body = [];
        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$body['DryRun'] = $request->dryRun;
        }

        if (null !== $request->listenerId) {
            @$body['ListenerId'] = $request->listenerId;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteListener',
            'version' => '2022-04-30',
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
     * Deletes a Network Load Balancer (NLB) listener.
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
     * Deletes a Network Load Balancer (NLB) instance.
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
        $body = [];
        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$body['DryRun'] = $request->dryRun;
        }

        if (null !== $request->loadBalancerId) {
            @$body['LoadBalancerId'] = $request->loadBalancerId;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteLoadBalancer',
            'version' => '2022-04-30',
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
     * Deletes a Network Load Balancer (NLB) instance.
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
     * Deletes a custom TLS security policy from a Network Load Balancer (NLB) instance.
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
        $body = [];
        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$body['DryRun'] = $request->dryRun;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->securityPolicyId) {
            @$body['SecurityPolicyId'] = $request->securityPolicyId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteSecurityPolicy',
            'version' => '2022-04-30',
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
     * Deletes a custom TLS security policy from a Network Load Balancer (NLB) instance.
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
     * Deletes a Network Load Balancer (NLB) server group.
     *
     * @remarks
     * You can delete server groups that are not associated with listeners.
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
        $body = [];
        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$body['DryRun'] = $request->dryRun;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->serverGroupId) {
            @$body['ServerGroupId'] = $request->serverGroupId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteServerGroup',
            'version' => '2022-04-30',
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
     * Deletes a Network Load Balancer (NLB) server group.
     *
     * @remarks
     * You can delete server groups that are not associated with listeners.
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
     * Queries the storage configurations of fine-grained monitoring.
     *
     * @param request - DescribeHdMonitorRegionConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeHdMonitorRegionConfigResponse
     *
     * @param DescribeHdMonitorRegionConfigRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeHdMonitorRegionConfigResponse
     */
    public function describeHdMonitorRegionConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeHdMonitorRegionConfig',
            'version' => '2022-04-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeHdMonitorRegionConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the storage configurations of fine-grained monitoring.
     *
     * @param request - DescribeHdMonitorRegionConfigRequest
     *
     * @returns DescribeHdMonitorRegionConfigResponse
     *
     * @param DescribeHdMonitorRegionConfigRequest $request
     *
     * @return DescribeHdMonitorRegionConfigResponse
     */
    public function describeHdMonitorRegionConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeHdMonitorRegionConfigWithOptions($request, $runtime);
    }

    /**
     * Queries regions that support Network Load Balancer (NLB) instances.
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

        if (null !== $request->serviceCode) {
            @$query['ServiceCode'] = $request->serviceCode;
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
            'action' => 'DescribeRegions',
            'version' => '2022-04-30',
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
     * Queries regions that support Network Load Balancer (NLB) instances.
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
     * Queries the zones of a region in which a Network Load Balancer (NLB) instance is deployed.
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

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->serviceCode) {
            @$query['ServiceCode'] = $request->serviceCode;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeZones',
            'version' => '2022-04-30',
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
     * Queries the zones of a region in which a Network Load Balancer (NLB) instance is deployed.
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
     * Disassociates a Network Load Balancer (NLB) instance from an Internet Shared Bandwidth instance.
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
        $body = [];
        if (null !== $request->bandwidthPackageId) {
            @$body['BandwidthPackageId'] = $request->bandwidthPackageId;
        }

        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$body['DryRun'] = $request->dryRun;
        }

        if (null !== $request->loadBalancerId) {
            @$body['LoadBalancerId'] = $request->loadBalancerId;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DetachCommonBandwidthPackageFromLoadBalancer',
            'version' => '2022-04-30',
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
     * Disassociates a Network Load Balancer (NLB) instance from an Internet Shared Bandwidth instance.
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
     * Changes the public IPv6 address of a dual-stack Network Load Balancer (NLB) instance to a private IPv6 address.
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
        $body = [];
        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$body['DryRun'] = $request->dryRun;
        }

        if (null !== $request->loadBalancerId) {
            @$body['LoadBalancerId'] = $request->loadBalancerId;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DisableLoadBalancerIpv6Internet',
            'version' => '2022-04-30',
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
     * Changes the public IPv6 address of a dual-stack Network Load Balancer (NLB) instance to a private IPv6 address.
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
     * Disassociates additional certificates from a listener that uses SSL over TCP.
     *
     * @remarks
     * *DisassociateAdditionalCertificatesWithListener** is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background. You can call the [ListListenerCertificates](https://help.aliyun.com/document_detail/615175.html) operation to query the status of the task:
     * *   If an additional certificate is in the **Dissociating** state, the additional certificate is being disassociated.
     * *   If an additional certificate is in the **Dissociated** state, the additional certificate is disassociated.
     *
     * @param request - DisassociateAdditionalCertificatesWithListenerRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DisassociateAdditionalCertificatesWithListenerResponse
     *
     * @param DisassociateAdditionalCertificatesWithListenerRequest $request
     * @param RuntimeOptions                                        $runtime
     *
     * @return DisassociateAdditionalCertificatesWithListenerResponse
     */
    public function disassociateAdditionalCertificatesWithListenerWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->additionalCertificateIds) {
            @$body['AdditionalCertificateIds'] = $request->additionalCertificateIds;
        }

        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$body['DryRun'] = $request->dryRun;
        }

        if (null !== $request->listenerId) {
            @$body['ListenerId'] = $request->listenerId;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DisassociateAdditionalCertificatesWithListener',
            'version' => '2022-04-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DisassociateAdditionalCertificatesWithListenerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Disassociates additional certificates from a listener that uses SSL over TCP.
     *
     * @remarks
     * *DisassociateAdditionalCertificatesWithListener** is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background. You can call the [ListListenerCertificates](https://help.aliyun.com/document_detail/615175.html) operation to query the status of the task:
     * *   If an additional certificate is in the **Dissociating** state, the additional certificate is being disassociated.
     * *   If an additional certificate is in the **Dissociated** state, the additional certificate is disassociated.
     *
     * @param request - DisassociateAdditionalCertificatesWithListenerRequest
     *
     * @returns DisassociateAdditionalCertificatesWithListenerResponse
     *
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
     * Changes the network type of the IPv6 address of a dual-stack Network Load Balancer (NLB) instance from internal-facing to Internet-facing.
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
        $body = [];
        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$body['DryRun'] = $request->dryRun;
        }

        if (null !== $request->loadBalancerId) {
            @$body['LoadBalancerId'] = $request->loadBalancerId;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'EnableLoadBalancerIpv6Internet',
            'version' => '2022-04-30',
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
     * Changes the network type of the IPv6 address of a dual-stack Network Load Balancer (NLB) instance from internal-facing to Internet-facing.
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
     * Queries the result of an asynchronous operation performed on a Network Load Balancer (NLB) instance.
     *
     * @param request - GetJobStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetJobStatusResponse
     *
     * @param GetJobStatusRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return GetJobStatusResponse
     */
    public function getJobStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->jobId) {
            @$query['JobId'] = $request->jobId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetJobStatus',
            'version' => '2022-04-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetJobStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the result of an asynchronous operation performed on a Network Load Balancer (NLB) instance.
     *
     * @param request - GetJobStatusRequest
     *
     * @returns GetJobStatusResponse
     *
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
     * Queries the details of a Network Load Balancer (NLB) listener.
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
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$query['DryRun'] = $request->dryRun;
        }

        if (null !== $request->listenerId) {
            @$query['ListenerId'] = $request->listenerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetListenerAttribute',
            'version' => '2022-04-30',
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
     * Queries the details of a Network Load Balancer (NLB) listener.
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
     * Queries the health check status of a Network Load Balancer (NLB) listener.
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
        if (null !== $request->listenerId) {
            @$query['ListenerId'] = $request->listenerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetListenerHealthStatus',
            'version' => '2022-04-30',
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
     * Queries the health check status of a Network Load Balancer (NLB) listener.
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
     * Queries the details about a Network Load Balancer (NLB) instance.
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
            'action' => 'GetLoadBalancerAttribute',
            'version' => '2022-04-30',
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
     * Queries the details about a Network Load Balancer (NLB) instance.
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
     * Queries the results of multiple asynchronous operations performed on a Network Load Balancer (NLB) instance.
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
        if (null !== $request->jobIds) {
            @$query['JobIds'] = $request->jobIds;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListAsynJobs',
            'version' => '2022-04-30',
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
     * Queries the results of multiple asynchronous operations performed on a Network Load Balancer (NLB) instance.
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
     * Queries the server certificate of a TCP/SSL listener.
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
        $body = [];
        if (null !== $request->certType) {
            @$body['CertType'] = $request->certType;
        }

        if (null !== $request->certificateIds) {
            @$body['CertificateIds'] = $request->certificateIds;
        }

        if (null !== $request->listenerId) {
            @$body['ListenerId'] = $request->listenerId;
        }

        if (null !== $request->maxResults) {
            @$body['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$body['NextToken'] = $request->nextToken;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListListenerCertificates',
            'version' => '2022-04-30',
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
     * Queries the server certificate of a TCP/SSL listener.
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
     * Queries listeners added to a Network Load Balancer (NLB) instance.
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

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->secSensorEnabled) {
            @$query['SecSensorEnabled'] = $request->secSensorEnabled;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListListeners',
            'version' => '2022-04-30',
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
     * Queries listeners added to a Network Load Balancer (NLB) instance.
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
     * Queries the basic information about Network Load Balancer (NLB) instances.
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

        if (null !== $request->loadBalancerBusinessStatus) {
            @$query['LoadBalancerBusinessStatus'] = $request->loadBalancerBusinessStatus;
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

        if (null !== $request->loadBalancerType) {
            @$query['LoadBalancerType'] = $request->loadBalancerType;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
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
            'version' => '2022-04-30',
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
     * Queries the basic information about Network Load Balancer (NLB) instances.
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
     * Queries the TLS security policies set for a Network Load Balancer (NLB) instance.
     *
     * @param request - ListSecurityPolicyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListSecurityPolicyResponse
     *
     * @param ListSecurityPolicyRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ListSecurityPolicyResponse
     */
    public function listSecurityPolicyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        $body = [];
        if (null !== $request->maxResults) {
            @$body['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$body['NextToken'] = $request->nextToken;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$body['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->securityPolicyIds) {
            @$body['SecurityPolicyIds'] = $request->securityPolicyIds;
        }

        if (null !== $request->securityPolicyNames) {
            @$body['SecurityPolicyNames'] = $request->securityPolicyNames;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListSecurityPolicy',
            'version' => '2022-04-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListSecurityPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the TLS security policies set for a Network Load Balancer (NLB) instance.
     *
     * @param request - ListSecurityPolicyRequest
     *
     * @returns ListSecurityPolicyResponse
     *
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
     * Queries servers in a server group of a Network Load Balancer (NLB) instance.
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
        $body = [];
        if (null !== $request->maxResults) {
            @$body['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$body['NextToken'] = $request->nextToken;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->serverGroupId) {
            @$body['ServerGroupId'] = $request->serverGroupId;
        }

        if (null !== $request->serverIds) {
            @$body['ServerIds'] = $request->serverIds;
        }

        if (null !== $request->serverIps) {
            @$body['ServerIps'] = $request->serverIps;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListServerGroupServers',
            'version' => '2022-04-30',
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
     * Queries servers in a server group of a Network Load Balancer (NLB) instance.
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
     * Queries the server groups of a Network Load Balancer (NLB) instance.
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
        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        $body = [];
        if (null !== $request->maxResults) {
            @$body['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$body['NextToken'] = $request->nextToken;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$body['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->serverGroupIds) {
            @$body['ServerGroupIds'] = $request->serverGroupIds;
        }

        if (null !== $request->serverGroupNames) {
            @$body['ServerGroupNames'] = $request->serverGroupNames;
        }

        if (null !== $request->serverGroupType) {
            @$body['ServerGroupType'] = $request->serverGroupType;
        }

        if (null !== $request->vpcId) {
            @$body['VpcId'] = $request->vpcId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListServerGroups',
            'version' => '2022-04-30',
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
     * Queries the server groups of a Network Load Balancer (NLB) instance.
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
     * Queries the default TLS policy.
     *
     * @param request - ListSystemSecurityPolicyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListSystemSecurityPolicyResponse
     *
     * @param ListSystemSecurityPolicyRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ListSystemSecurityPolicyResponse
     */
    public function listSystemSecurityPolicyWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListSystemSecurityPolicy',
            'version' => '2022-04-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListSystemSecurityPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the default TLS policy.
     *
     * @param request - ListSystemSecurityPolicyRequest
     *
     * @returns ListSystemSecurityPolicyResponse
     *
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
     * Queries the tags of a resource.
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

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
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
            'version' => '2022-04-30',
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
     * Queries the tags of a resource.
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
     * Associates a security group with a Network Load Balancer (NLB) instance.
     *
     * @remarks
     *   Make sure that you have created a security group. For more information about how to create a security group, see [CreateSecurityGroup](https://help.aliyun.com/document_detail/25553.html).
     * *   An NLB instance can be associated with up to four security groups.
     * *   You can query the security groups that are associated with an NLB instance by calling the [GetLoadBalancerAttribute](https://help.aliyun.com/document_detail/214362.html) operation.
     * *   LoadBalancerJoinSecurityGroup is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background. You can call the [GetJobStatus](https://help.aliyun.com/document_detail/445904.html) operation to query the status of a task.
     *     *   If the task is in the **Succeeded** state, the security group is associated.
     *     *   If the task is in the **Processing** state, the security group is being associated. In this case, you can perform only query operations.
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
        $body = [];
        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$body['DryRun'] = $request->dryRun;
        }

        if (null !== $request->loadBalancerId) {
            @$body['LoadBalancerId'] = $request->loadBalancerId;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->securityGroupIds) {
            @$body['SecurityGroupIds'] = $request->securityGroupIds;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'LoadBalancerJoinSecurityGroup',
            'version' => '2022-04-30',
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
     * Associates a security group with a Network Load Balancer (NLB) instance.
     *
     * @remarks
     *   Make sure that you have created a security group. For more information about how to create a security group, see [CreateSecurityGroup](https://help.aliyun.com/document_detail/25553.html).
     * *   An NLB instance can be associated with up to four security groups.
     * *   You can query the security groups that are associated with an NLB instance by calling the [GetLoadBalancerAttribute](https://help.aliyun.com/document_detail/214362.html) operation.
     * *   LoadBalancerJoinSecurityGroup is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background. You can call the [GetJobStatus](https://help.aliyun.com/document_detail/445904.html) operation to query the status of a task.
     *     *   If the task is in the **Succeeded** state, the security group is associated.
     *     *   If the task is in the **Processing** state, the security group is being associated. In this case, you can perform only query operations.
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
     * Disassociates a Network Load Balancer (NLB) instance from a security group.
     *
     * @remarks
     * LoadBalancerLeaveSecurityGroup is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background. You can call the [GetJobStatus](https://help.aliyun.com/document_detail/445904.html) operation to query the status of a task.
     * *   If the task is in the **Succeeded** state, the security group is disassociated.
     * *   If the task is in the **Processing** state, the security group is being disassociated. In this case, you can perform only query operations.
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
        $body = [];
        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$body['DryRun'] = $request->dryRun;
        }

        if (null !== $request->loadBalancerId) {
            @$body['LoadBalancerId'] = $request->loadBalancerId;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->securityGroupIds) {
            @$body['SecurityGroupIds'] = $request->securityGroupIds;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'LoadBalancerLeaveSecurityGroup',
            'version' => '2022-04-30',
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
     * Disassociates a Network Load Balancer (NLB) instance from a security group.
     *
     * @remarks
     * LoadBalancerLeaveSecurityGroup is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background. You can call the [GetJobStatus](https://help.aliyun.com/document_detail/445904.html) operation to query the status of a task.
     * *   If the task is in the **Succeeded** state, the security group is disassociated.
     * *   If the task is in the **Processing** state, the security group is being disassociated. In this case, you can perform only query operations.
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
     * Modify the group of resource.
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
        if (null !== $request->newResourceGroupId) {
            @$body['NewResourceGroupId'] = $request->newResourceGroupId;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
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
            'version' => '2022-04-30',
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
     * Modify the group of resource.
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
     * Deletes server groups from a Network Load Balancer (NLB) instance.
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
        $body = [];
        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$body['DryRun'] = $request->dryRun;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->serverGroupId) {
            @$body['ServerGroupId'] = $request->serverGroupId;
        }

        if (null !== $request->servers) {
            @$body['Servers'] = $request->servers;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'RemoveServersFromServerGroup',
            'version' => '2022-04-30',
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
     * Deletes server groups from a Network Load Balancer (NLB) instance.
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
     * Configures storage for fine-grained monitoring.
     *
     * @remarks
     * This operation is used to configure a data warehouse for the fine-grained monitoring feature. If a listener in the current region has fine-grained monitoring enabled, you must disable fine-grained monitoring before you can configure a warehouse.
     *
     * @param request - SetHdMonitorRegionConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SetHdMonitorRegionConfigResponse
     *
     * @param SetHdMonitorRegionConfigRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return SetHdMonitorRegionConfigResponse
     */
    public function setHdMonitorRegionConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->logProject) {
            @$query['LogProject'] = $request->logProject;
        }

        if (null !== $request->metricStore) {
            @$query['MetricStore'] = $request->metricStore;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SetHdMonitorRegionConfig',
            'version' => '2022-04-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SetHdMonitorRegionConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Configures storage for fine-grained monitoring.
     *
     * @remarks
     * This operation is used to configure a data warehouse for the fine-grained monitoring feature. If a listener in the current region has fine-grained monitoring enabled, you must disable fine-grained monitoring before you can configure a warehouse.
     *
     * @param request - SetHdMonitorRegionConfigRequest
     *
     * @returns SetHdMonitorRegionConfigResponse
     *
     * @param SetHdMonitorRegionConfigRequest $request
     *
     * @return SetHdMonitorRegionConfigResponse
     */
    public function setHdMonitorRegionConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setHdMonitorRegionConfigWithOptions($request, $runtime);
    }

    /**
     * Enables a Network Load Balancer (NLB) listener.
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
        $body = [];
        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$body['DryRun'] = $request->dryRun;
        }

        if (null !== $request->listenerId) {
            @$body['ListenerId'] = $request->listenerId;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'StartListener',
            'version' => '2022-04-30',
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
     * Enables a Network Load Balancer (NLB) listener.
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
     * Removes the elastic IP address (EIP) or virtual IP address (VIP) used in a zone from the DNS record.
     *
     * @remarks
     * >  If the NLB instance is deployed in only one zone, you cannot remove the EIP or VIP from the DNS record.
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
        $body = [];
        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$body['DryRun'] = $request->dryRun;
        }

        if (null !== $request->loadBalancerId) {
            @$body['LoadBalancerId'] = $request->loadBalancerId;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->zoneMappings) {
            @$body['ZoneMappings'] = $request->zoneMappings;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'StartShiftLoadBalancerZones',
            'version' => '2022-04-30',
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
     * Removes the elastic IP address (EIP) or virtual IP address (VIP) used in a zone from the DNS record.
     *
     * @remarks
     * >  If the NLB instance is deployed in only one zone, you cannot remove the EIP or VIP from the DNS record.
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
     * Stops a listener of a Network Load Balancer (NLB) instance.
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
        $body = [];
        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$body['DryRun'] = $request->dryRun;
        }

        if (null !== $request->listenerId) {
            @$body['ListenerId'] = $request->listenerId;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'StopListener',
            'version' => '2022-04-30',
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
     * Stops a listener of a Network Load Balancer (NLB) instance.
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
     * Adds tags to specified resources.
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

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
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
            'version' => '2022-04-30',
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
     * Adds tags to specified resources.
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

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
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
            'version' => '2022-04-30',
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
     * Removes tags from resources.
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
     * Updates the attributes of a listener, such as the name and the idle connection timeout period.
     *
     * @param tmpReq - UpdateListenerAttributeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateListenerAttributeResponse
     *
     * @param UpdateListenerAttributeRequest $tmpReq
     * @param RuntimeOptions                 $runtime
     *
     * @return UpdateListenerAttributeResponse
     */
    public function updateListenerAttributeWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateListenerAttributeShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->proxyProtocolV2Config) {
            $request->proxyProtocolV2ConfigShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->proxyProtocolV2Config, 'ProxyProtocolV2Config', 'json');
        }

        $body = [];
        if (null !== $request->alpnEnabled) {
            @$body['AlpnEnabled'] = $request->alpnEnabled;
        }

        if (null !== $request->alpnPolicy) {
            @$body['AlpnPolicy'] = $request->alpnPolicy;
        }

        if (null !== $request->caCertificateIds) {
            @$body['CaCertificateIds'] = $request->caCertificateIds;
        }

        if (null !== $request->caEnabled) {
            @$body['CaEnabled'] = $request->caEnabled;
        }

        if (null !== $request->certificateIds) {
            @$body['CertificateIds'] = $request->certificateIds;
        }

        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->cps) {
            @$body['Cps'] = $request->cps;
        }

        if (null !== $request->dryRun) {
            @$body['DryRun'] = $request->dryRun;
        }

        if (null !== $request->idleTimeout) {
            @$body['IdleTimeout'] = $request->idleTimeout;
        }

        if (null !== $request->listenerDescription) {
            @$body['ListenerDescription'] = $request->listenerDescription;
        }

        if (null !== $request->listenerId) {
            @$body['ListenerId'] = $request->listenerId;
        }

        if (null !== $request->mss) {
            @$body['Mss'] = $request->mss;
        }

        if (null !== $request->proxyProtocolEnabled) {
            @$body['ProxyProtocolEnabled'] = $request->proxyProtocolEnabled;
        }

        if (null !== $request->proxyProtocolV2ConfigShrink) {
            @$body['ProxyProtocolV2Config'] = $request->proxyProtocolV2ConfigShrink;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->secSensorEnabled) {
            @$body['SecSensorEnabled'] = $request->secSensorEnabled;
        }

        if (null !== $request->securityPolicyId) {
            @$body['SecurityPolicyId'] = $request->securityPolicyId;
        }

        if (null !== $request->serverGroupId) {
            @$body['ServerGroupId'] = $request->serverGroupId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateListenerAttribute',
            'version' => '2022-04-30',
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
     * Updates the attributes of a listener, such as the name and the idle connection timeout period.
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
     * Changes the network type of the IPv4 address for a Network Load Balancer (NLB) instance.
     *
     * @remarks
     *   Make sure that an NLB instance is created. For more information, see [CreateLoadBalancer](https://help.aliyun.com/document_detail/445868.html).
     * *   You can call the [GetLoadBalancerAttribute](https://help.aliyun.com/document_detail/445873.html) operation to query the **AddressType** value of an NLB instance after you change the network type.
     * *   **UpdateLoadBalancerAddressTypeConfig** is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background. You can call the [GetJobStatus](https://help.aliyun.com/document_detail/445904.html) operation to query the task status:
     *     *   If the task is in the **Succeeded** state, the network type of the IPv4 address of the NLB instance is changed.
     *     *   If the task is in the **Processing** state, the network type of the IPv4 address of the NLB instance is being changed. In this case, you can perform only query operations.
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
        $body = [];
        if (null !== $request->addressType) {
            @$body['AddressType'] = $request->addressType;
        }

        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$body['DryRun'] = $request->dryRun;
        }

        if (null !== $request->loadBalancerId) {
            @$body['LoadBalancerId'] = $request->loadBalancerId;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->zoneMappings) {
            @$body['ZoneMappings'] = $request->zoneMappings;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateLoadBalancerAddressTypeConfig',
            'version' => '2022-04-30',
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
     * Changes the network type of the IPv4 address for a Network Load Balancer (NLB) instance.
     *
     * @remarks
     *   Make sure that an NLB instance is created. For more information, see [CreateLoadBalancer](https://help.aliyun.com/document_detail/445868.html).
     * *   You can call the [GetLoadBalancerAttribute](https://help.aliyun.com/document_detail/445873.html) operation to query the **AddressType** value of an NLB instance after you change the network type.
     * *   **UpdateLoadBalancerAddressTypeConfig** is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background. You can call the [GetJobStatus](https://help.aliyun.com/document_detail/445904.html) operation to query the task status:
     *     *   If the task is in the **Succeeded** state, the network type of the IPv4 address of the NLB instance is changed.
     *     *   If the task is in the **Processing** state, the network type of the IPv4 address of the NLB instance is being changed. In this case, you can perform only query operations.
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
     * Updates the attributes, including the name, of a Network Load Balancer (NLB) instance.
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
        $body = [];
        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->cps) {
            @$body['Cps'] = $request->cps;
        }

        if (null !== $request->crossZoneEnabled) {
            @$body['CrossZoneEnabled'] = $request->crossZoneEnabled;
        }

        if (null !== $request->dryRun) {
            @$body['DryRun'] = $request->dryRun;
        }

        if (null !== $request->loadBalancerId) {
            @$body['LoadBalancerId'] = $request->loadBalancerId;
        }

        if (null !== $request->loadBalancerName) {
            @$body['LoadBalancerName'] = $request->loadBalancerName;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateLoadBalancerAttribute',
            'version' => '2022-04-30',
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
     * Updates the attributes, including the name, of a Network Load Balancer (NLB) instance.
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
     * Enables or disables the deletion protection feature.
     *
     * @remarks
     * > You can call the [GetLoadBalancerAttribute](https://help.aliyun.com/document_detail/445873.html) operation to query the details about deletion protection and the configuration read-only mode.
     *
     * @param request - UpdateLoadBalancerProtectionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateLoadBalancerProtectionResponse
     *
     * @param UpdateLoadBalancerProtectionRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return UpdateLoadBalancerProtectionResponse
     */
    public function updateLoadBalancerProtectionWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->deletionProtectionEnabled) {
            @$body['DeletionProtectionEnabled'] = $request->deletionProtectionEnabled;
        }

        if (null !== $request->deletionProtectionReason) {
            @$body['DeletionProtectionReason'] = $request->deletionProtectionReason;
        }

        if (null !== $request->dryRun) {
            @$body['DryRun'] = $request->dryRun;
        }

        if (null !== $request->loadBalancerId) {
            @$body['LoadBalancerId'] = $request->loadBalancerId;
        }

        if (null !== $request->modificationProtectionReason) {
            @$body['ModificationProtectionReason'] = $request->modificationProtectionReason;
        }

        if (null !== $request->modificationProtectionStatus) {
            @$body['ModificationProtectionStatus'] = $request->modificationProtectionStatus;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateLoadBalancerProtection',
            'version' => '2022-04-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateLoadBalancerProtectionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Enables or disables the deletion protection feature.
     *
     * @remarks
     * > You can call the [GetLoadBalancerAttribute](https://help.aliyun.com/document_detail/445873.html) operation to query the details about deletion protection and the configuration read-only mode.
     *
     * @param request - UpdateLoadBalancerProtectionRequest
     *
     * @returns UpdateLoadBalancerProtectionResponse
     *
     * @param UpdateLoadBalancerProtectionRequest $request
     *
     * @return UpdateLoadBalancerProtectionResponse
     */
    public function updateLoadBalancerProtection($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateLoadBalancerProtectionWithOptions($request, $runtime);
    }

    /**
     * Modifies the zones and zone attributes of a Network Load Balancer (NLB) instance.
     *
     * @remarks
     * When you call this operation, make sure that you specify all the zones of the NLB instance, including the existing zones and new zones. If you do not specify the existing zones, the existing zones are removed.
     * Prerequisites
     * *   An NLB instance is created. For more information, see [CreateLoadBalancer](https://help.aliyun.com/document_detail/445868.html).
     * *   You can call the [GetLoadBalancerAttribute](https://help.aliyun.com/document_detail/445873.html) operation to query the zones and zone attributes of an NLB instance.
     * *   **UpdateLoadBalancerZones** is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background. You can call the [GetJobStatus](https://help.aliyun.com/document_detail/445904.html) operation query to query the status of a task:
     *     *   If the task is in the **Succeeded** state, the zones and zone attributes are modified.
     *     *   If the task is in the **Processing** state, the zones and zone attributes are being modified. In this case, you can perform only query operations.
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
        $body = [];
        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$body['DryRun'] = $request->dryRun;
        }

        if (null !== $request->loadBalancerId) {
            @$body['LoadBalancerId'] = $request->loadBalancerId;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->zoneMappings) {
            @$body['ZoneMappings'] = $request->zoneMappings;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateLoadBalancerZones',
            'version' => '2022-04-30',
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
     * Modifies the zones and zone attributes of a Network Load Balancer (NLB) instance.
     *
     * @remarks
     * When you call this operation, make sure that you specify all the zones of the NLB instance, including the existing zones and new zones. If you do not specify the existing zones, the existing zones are removed.
     * Prerequisites
     * *   An NLB instance is created. For more information, see [CreateLoadBalancer](https://help.aliyun.com/document_detail/445868.html).
     * *   You can call the [GetLoadBalancerAttribute](https://help.aliyun.com/document_detail/445873.html) operation to query the zones and zone attributes of an NLB instance.
     * *   **UpdateLoadBalancerZones** is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background. You can call the [GetJobStatus](https://help.aliyun.com/document_detail/445904.html) operation query to query the status of a task:
     *     *   If the task is in the **Succeeded** state, the zones and zone attributes are modified.
     *     *   If the task is in the **Processing** state, the zones and zone attributes are being modified. In this case, you can perform only query operations.
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
     * Modifies the configurations of a security policy for a Network Load Balancer (NLB) instance.
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
        $body = [];
        if (null !== $request->ciphers) {
            @$body['Ciphers'] = $request->ciphers;
        }

        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$body['DryRun'] = $request->dryRun;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->securityPolicyId) {
            @$body['SecurityPolicyId'] = $request->securityPolicyId;
        }

        if (null !== $request->securityPolicyName) {
            @$body['SecurityPolicyName'] = $request->securityPolicyName;
        }

        if (null !== $request->tlsVersions) {
            @$body['TlsVersions'] = $request->tlsVersions;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateSecurityPolicyAttribute',
            'version' => '2022-04-30',
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
     * Modifies the configurations of a security policy for a Network Load Balancer (NLB) instance.
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
     * Modifies the configurations of a Network Load Balancer (NLB) server group.
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
        $body = [];
        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->connectionDrainEnabled) {
            @$body['ConnectionDrainEnabled'] = $request->connectionDrainEnabled;
        }

        if (null !== $request->connectionDrainTimeout) {
            @$body['ConnectionDrainTimeout'] = $request->connectionDrainTimeout;
        }

        if (null !== $request->dryRun) {
            @$body['DryRun'] = $request->dryRun;
        }

        $bodyFlat = [];
        if (null !== $request->healthCheckConfig) {
            @$bodyFlat['HealthCheckConfig'] = $request->healthCheckConfig;
        }

        if (null !== $request->preserveClientIpEnabled) {
            @$body['PreserveClientIpEnabled'] = $request->preserveClientIpEnabled;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->scheduler) {
            @$body['Scheduler'] = $request->scheduler;
        }

        if (null !== $request->serverGroupId) {
            @$body['ServerGroupId'] = $request->serverGroupId;
        }

        if (null !== $request->serverGroupName) {
            @$body['ServerGroupName'] = $request->serverGroupName;
        }

        $body = Dara::merge([
        ], $body, Utils::query($bodyFlat));
        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateServerGroupAttribute',
            'version' => '2022-04-30',
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
     * Modifies the configurations of a Network Load Balancer (NLB) server group.
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
     * Modifies the weights and descriptions of backend servers in a server group of a Network Load Balancer (NLB) instance.
     *
     * @remarks
     * *UpdateServerGroupServersAttribute** is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background.
     * 1.  You can call the [ListServerGroups](https://help.aliyun.com/document_detail/445895.html) operation to query the status of a server group.
     *     *   If a server group is in the **Configuring** state, the server group is being modified.
     *     *   If a server group is in the **Available** state, the server group is running.
     * 2.  You can call the [ListServerGroupServers](https://help.aliyun.com/document_detail/445896.html) operation to query the status of a backend server.
     *     *   If a backend server is in the **Configuring** state, it indicates that the backend server is being modified.
     *     *   If a backend server is in the **Available** state, it indicates that the backend server is running.
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
        $body = [];
        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$body['DryRun'] = $request->dryRun;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->serverGroupId) {
            @$body['ServerGroupId'] = $request->serverGroupId;
        }

        if (null !== $request->servers) {
            @$body['Servers'] = $request->servers;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateServerGroupServersAttribute',
            'version' => '2022-04-30',
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
     * Modifies the weights and descriptions of backend servers in a server group of a Network Load Balancer (NLB) instance.
     *
     * @remarks
     * *UpdateServerGroupServersAttribute** is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background.
     * 1.  You can call the [ListServerGroups](https://help.aliyun.com/document_detail/445895.html) operation to query the status of a server group.
     *     *   If a server group is in the **Configuring** state, the server group is being modified.
     *     *   If a server group is in the **Available** state, the server group is running.
     * 2.  You can call the [ListServerGroupServers](https://help.aliyun.com/document_detail/445896.html) operation to query the status of a backend server.
     *     *   If a backend server is in the **Configuring** state, it indicates that the backend server is being modified.
     *     *   If a backend server is in the **Available** state, it indicates that the backend server is running.
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

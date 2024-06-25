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
     * @summary Adds backend servers to a specified server group.
     *  *
     * @param AddServersToServerGroupRequest $request AddServersToServerGroupRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return AddServersToServerGroupResponse AddServersToServerGroupResponse
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
     * @summary Adds backend servers to a specified server group.
     *  *
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
     * @summary Associates additional certificates with a listener that uses SSL over TCP.
     *  *
     * @description **AssociateAdditionalCertificatesWithListener** is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background. You can call the [ListListenerCertificates](https://help.aliyun.com/document_detail/615175.html) operation to query the status of the task:
     * *   If the listener is in the **Associating** state, the additional certificates are being associated.
     * *   If the listener is in the **Associated** state, the additional certificates are associated.
     *  *
     * @param AssociateAdditionalCertificatesWithListenerRequest $request AssociateAdditionalCertificatesWithListenerRequest
     * @param RuntimeOptions                                     $runtime runtime options for this request RuntimeOptions
     *
     * @return AssociateAdditionalCertificatesWithListenerResponse AssociateAdditionalCertificatesWithListenerResponse
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
     * @summary Associates additional certificates with a listener that uses SSL over TCP.
     *  *
     * @description **AssociateAdditionalCertificatesWithListener** is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background. You can call the [ListListenerCertificates](https://help.aliyun.com/document_detail/615175.html) operation to query the status of the task:
     * *   If the listener is in the **Associating** state, the additional certificates are being associated.
     * *   If the listener is in the **Associated** state, the additional certificates are associated.
     *  *
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
     * @summary 绑定带宽包
     *  *
     * @param AttachCommonBandwidthPackageToLoadBalancerRequest $request AttachCommonBandwidthPackageToLoadBalancerRequest
     * @param RuntimeOptions                                    $runtime runtime options for this request RuntimeOptions
     *
     * @return AttachCommonBandwidthPackageToLoadBalancerResponse AttachCommonBandwidthPackageToLoadBalancerResponse
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
     * @summary 绑定带宽包
     *  *
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
     * @summary Adds the elastic IP address (EIP) and virtual IP address (VIP) of a zone to the DNS record.
     *  *
     * @description Before you call this operation, the zone of the Network Load Balancer (NLB) instance is removed from the DNS record by using the console or calling the [StartShiftLoadBalancerZones](https://help.aliyun.com/document_detail/2411999.html) API operation.
     *  *
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
     * @summary Adds the elastic IP address (EIP) and virtual IP address (VIP) of a zone to the DNS record.
     *  *
     * @description Before you call this operation, the zone of the Network Load Balancer (NLB) instance is removed from the DNS record by using the console or calling the [StartShiftLoadBalancerZones](https://help.aliyun.com/document_detail/2411999.html) API operation.
     *  *
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
     * @summary Creates a TCP or UDP listener, or a listener that uses SSL over TCP for a Network Load Balancer (NLB) instance.
     *  *
     * @param CreateListenerRequest $tmpReq  CreateListenerRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateListenerResponse CreateListenerResponse
     */
    public function createListenerWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateListenerShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->proxyProtocolV2Config)) {
            $request->proxyProtocolV2ConfigShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->proxyProtocolV2Config, 'ProxyProtocolV2Config', 'json');
        }
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
        if (!Utils::isUnset($request->proxyProtocolV2ConfigShrink)) {
            $body['ProxyProtocolV2Config'] = $request->proxyProtocolV2ConfigShrink;
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
     * @summary Creates a TCP or UDP listener, or a listener that uses SSL over TCP for a Network Load Balancer (NLB) instance.
     *  *
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
     * @summary Creates a Network Load Balancer (NLB) instance in a specified region.
     *  *
     * @description *   When you create an NLB instance, the service-linked role AliyunServiceRoleForNlb is automatically created and assigned to you.
     * *   **CreateLoadBalancer** is an asynchronous operation. After you send a request, the system returns an instance ID and runs the task in the background. You can call [GetLoadBalancerAttribute](https://help.aliyun.com/document_detail/445873.html) to query the status of an NLB instance.
     *     *   If an NLB instance is in the **Provisioning** state, the NLB instance is being created.
     *     *   If an NLB instance is in the **Active** state, the NLB instance is created.
     *  *
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
     * @summary Creates a Network Load Balancer (NLB) instance in a specified region.
     *  *
     * @description *   When you create an NLB instance, the service-linked role AliyunServiceRoleForNlb is automatically created and assigned to you.
     * *   **CreateLoadBalancer** is an asynchronous operation. After you send a request, the system returns an instance ID and runs the task in the background. You can call [GetLoadBalancerAttribute](https://help.aliyun.com/document_detail/445873.html) to query the status of an NLB instance.
     *     *   If an NLB instance is in the **Provisioning** state, the NLB instance is being created.
     *     *   If an NLB instance is in the **Active** state, the NLB instance is created.
     *  *
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
     * @summary Creates a custom security policy for a Network Load Balancer (NLB) instance.
     *  *
     * @param CreateSecurityPolicyRequest $request CreateSecurityPolicyRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateSecurityPolicyResponse CreateSecurityPolicyResponse
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
     * @summary Creates a custom security policy for a Network Load Balancer (NLB) instance.
     *  *
     * @param CreateSecurityPolicyRequest $request CreateSecurityPolicyRequest
     *
     * @return CreateSecurityPolicyResponse CreateSecurityPolicyResponse
     */
    public function createSecurityPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSecurityPolicyWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a server group in a region.
     *  *
     * @description *   **protocol** specifies the protocol used to forward requests to the backend servers.
     * *   NLB instances support only backend server groups that use TCP, UDP, or SSL over TCP.
     * *   **CreateServerGroup** is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background. You can call the [GetJobStatus](https://help.aliyun.com/document_detail/445904.html) operation to query the creation status of the task.
     *     *   If the task is in the **Succeeded** status, the server group is created.
     *     *   If the task is in the **Processing** status, the server group is being created.
     *  *
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
     * @summary Creates a server group in a region.
     *  *
     * @description *   **protocol** specifies the protocol used to forward requests to the backend servers.
     * *   NLB instances support only backend server groups that use TCP, UDP, or SSL over TCP.
     * *   **CreateServerGroup** is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background. You can call the [GetJobStatus](https://help.aliyun.com/document_detail/445904.html) operation to query the creation status of the task.
     *     *   If the task is in the **Succeeded** status, the server group is created.
     *     *   If the task is in the **Processing** status, the server group is being created.
     *  *
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
     * @summary 删除监听
     *  *
     * @param DeleteListenerRequest $request DeleteListenerRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteListenerResponse DeleteListenerResponse
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
     * @summary 删除监听
     *  *
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
     * @summary 删除负载均衡
     *  *
     * @param DeleteLoadBalancerRequest $request DeleteLoadBalancerRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteLoadBalancerResponse DeleteLoadBalancerResponse
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
     * @summary 删除负载均衡
     *  *
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
     * @summary 删除安全策略
     *  *
     * @param DeleteSecurityPolicyRequest $request DeleteSecurityPolicyRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteSecurityPolicyResponse DeleteSecurityPolicyResponse
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
     * @summary 删除安全策略
     *  *
     * @param DeleteSecurityPolicyRequest $request DeleteSecurityPolicyRequest
     *
     * @return DeleteSecurityPolicyResponse DeleteSecurityPolicyResponse
     */
    public function deleteSecurityPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteSecurityPolicyWithOptions($request, $runtime);
    }

    /**
     * @summary DeleteServerGroup
     *  *
     * @description You can delete server groups that are not associated with listeners.
     *  *
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
     * @summary DeleteServerGroup
     *  *
     * @description You can delete server groups that are not associated with listeners.
     *  *
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
     * @summary 查询秒级监控存储配置
     *  *
     * @param DescribeHdMonitorRegionConfigRequest $request DescribeHdMonitorRegionConfigRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeHdMonitorRegionConfigResponse DescribeHdMonitorRegionConfigResponse
     */
    public function describeHdMonitorRegionConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeHdMonitorRegionConfig',
            'version'     => '2022-04-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeHdMonitorRegionConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询秒级监控存储配置
     *  *
     * @param DescribeHdMonitorRegionConfigRequest $request DescribeHdMonitorRegionConfigRequest
     *
     * @return DescribeHdMonitorRegionConfigResponse DescribeHdMonitorRegionConfigResponse
     */
    public function describeHdMonitorRegionConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeHdMonitorRegionConfigWithOptions($request, $runtime);
    }

    /**
     * @summary Queries regions that support Network Load Balancer (NLB) instances.
     *  *
     * @param DescribeRegionsRequest $request DescribeRegionsRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeRegionsResponse DescribeRegionsResponse
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
     * @summary Queries regions that support Network Load Balancer (NLB) instances.
     *  *
     * @param DescribeRegionsRequest $request DescribeRegionsRequest
     *
     * @return DescribeRegionsResponse DescribeRegionsResponse
     */
    public function describeRegions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRegionsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries zones in a region that supports Network Load Balancer (NLB).
     *  *
     * @param DescribeZonesRequest $request DescribeZonesRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeZonesResponse DescribeZonesResponse
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
     * @summary Queries zones in a region that supports Network Load Balancer (NLB).
     *  *
     * @param DescribeZonesRequest $request DescribeZonesRequest
     *
     * @return DescribeZonesResponse DescribeZonesResponse
     */
    public function describeZones($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeZonesWithOptions($request, $runtime);
    }

    /**
     * @summary 解绑带宽包
     *  *
     * @param DetachCommonBandwidthPackageFromLoadBalancerRequest $request DetachCommonBandwidthPackageFromLoadBalancerRequest
     * @param RuntimeOptions                                      $runtime runtime options for this request RuntimeOptions
     *
     * @return DetachCommonBandwidthPackageFromLoadBalancerResponse DetachCommonBandwidthPackageFromLoadBalancerResponse
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
     * @summary 解绑带宽包
     *  *
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
     * @summary Changes the network type of an IPv6 Network Load Balancer (NLB) instance from Internet-facing to internal-facing.
     *  *
     * @param DisableLoadBalancerIpv6InternetRequest $request DisableLoadBalancerIpv6InternetRequest
     * @param RuntimeOptions                         $runtime runtime options for this request RuntimeOptions
     *
     * @return DisableLoadBalancerIpv6InternetResponse DisableLoadBalancerIpv6InternetResponse
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
     * @summary Changes the network type of an IPv6 Network Load Balancer (NLB) instance from Internet-facing to internal-facing.
     *  *
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
     * @summary Disassociates additional certificates from a listener that uses SSL over TCP.
     *  *
     * @description **DisassociateAdditionalCertificatesWithListener** is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background. You can call the [ListListenerCertificates](https://help.aliyun.com/document_detail/615175.html) operation to query the status of the task:
     * *   If an additional certificate is in the **Dissociating** state, the additional certificate is being disassociated.
     * *   If an additional certificate is in the **Dissociated** state, the additional certificate is disassociated.
     *  *
     * @param DisassociateAdditionalCertificatesWithListenerRequest $request DisassociateAdditionalCertificatesWithListenerRequest
     * @param RuntimeOptions                                        $runtime runtime options for this request RuntimeOptions
     *
     * @return DisassociateAdditionalCertificatesWithListenerResponse DisassociateAdditionalCertificatesWithListenerResponse
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
     * @summary Disassociates additional certificates from a listener that uses SSL over TCP.
     *  *
     * @description **DisassociateAdditionalCertificatesWithListener** is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background. You can call the [ListListenerCertificates](https://help.aliyun.com/document_detail/615175.html) operation to query the status of the task:
     * *   If an additional certificate is in the **Dissociating** state, the additional certificate is being disassociated.
     * *   If an additional certificate is in the **Dissociated** state, the additional certificate is disassociated.
     *  *
     * @param DisassociateAdditionalCertificatesWithListenerRequest $request DisassociateAdditionalCertificatesWithListenerRequest
     *
     * @return DisassociateAdditionalCertificatesWithListenerResponse DisassociateAdditionalCertificatesWithListenerResponse
     */
    public function disassociateAdditionalCertificatesWithListener($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->disassociateAdditionalCertificatesWithListenerWithOptions($request, $runtime);
    }

    /**
     * @summary Changes the network type of the IPv6 address of a dual-stack NLB instance from private to the public.
     *  *
     * @param EnableLoadBalancerIpv6InternetRequest $request EnableLoadBalancerIpv6InternetRequest
     * @param RuntimeOptions                        $runtime runtime options for this request RuntimeOptions
     *
     * @return EnableLoadBalancerIpv6InternetResponse EnableLoadBalancerIpv6InternetResponse
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
     * @summary Changes the network type of the IPv6 address of a dual-stack NLB instance from private to the public.
     *  *
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
     * @summary 获取工作流状态
     *  *
     * @param GetJobStatusRequest $request GetJobStatusRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return GetJobStatusResponse GetJobStatusResponse
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
     * @summary 获取工作流状态
     *  *
     * @param GetJobStatusRequest $request GetJobStatusRequest
     *
     * @return GetJobStatusResponse GetJobStatusResponse
     */
    public function getJobStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getJobStatusWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the details of a Network Load Balancer (NLB) listener.
     *  *
     * @param GetListenerAttributeRequest $request GetListenerAttributeRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return GetListenerAttributeResponse GetListenerAttributeResponse
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
     * @summary Queries the details of a Network Load Balancer (NLB) listener.
     *  *
     * @param GetListenerAttributeRequest $request GetListenerAttributeRequest
     *
     * @return GetListenerAttributeResponse GetListenerAttributeResponse
     */
    public function getListenerAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getListenerAttributeWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the health check status of a Network Load Balancer (NLB) instance.
     *  *
     * @param GetListenerHealthStatusRequest $request GetListenerHealthStatusRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return GetListenerHealthStatusResponse GetListenerHealthStatusResponse
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
     * @summary Queries the health check status of a Network Load Balancer (NLB) instance.
     *  *
     * @param GetListenerHealthStatusRequest $request GetListenerHealthStatusRequest
     *
     * @return GetListenerHealthStatusResponse GetListenerHealthStatusResponse
     */
    public function getListenerHealthStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getListenerHealthStatusWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the details about a Network Load Balancer (NLB) instance.
     *  *
     * @param GetLoadBalancerAttributeRequest $request GetLoadBalancerAttributeRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return GetLoadBalancerAttributeResponse GetLoadBalancerAttributeResponse
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
     * @summary Queries the details about a Network Load Balancer (NLB) instance.
     *  *
     * @param GetLoadBalancerAttributeRequest $request GetLoadBalancerAttributeRequest
     *
     * @return GetLoadBalancerAttributeResponse GetLoadBalancerAttributeResponse
     */
    public function getLoadBalancerAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getLoadBalancerAttributeWithOptions($request, $runtime);
    }

    /**
     * @summary Enables or disables deletion protection and the configuration read-only mode for a Network Load Balancer (NLB) instance.
     *  *
     * @param ListListenerCertificatesRequest $request ListListenerCertificatesRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return ListListenerCertificatesResponse ListListenerCertificatesResponse
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
     * @summary Enables or disables deletion protection and the configuration read-only mode for a Network Load Balancer (NLB) instance.
     *  *
     * @param ListListenerCertificatesRequest $request ListListenerCertificatesRequest
     *
     * @return ListListenerCertificatesResponse ListListenerCertificatesResponse
     */
    public function listListenerCertificates($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listListenerCertificatesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries listeners added to a Network Load Balancer (NLB) instance.
     *  *
     * @param ListListenersRequest $request ListListenersRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return ListListenersResponse ListListenersResponse
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
     * @summary Queries listeners added to a Network Load Balancer (NLB) instance.
     *  *
     * @param ListListenersRequest $request ListListenersRequest
     *
     * @return ListListenersResponse ListListenersResponse
     */
    public function listListeners($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listListenersWithOptions($request, $runtime);
    }

    /**
     * @summary Queries Network Load Balancer (NLB) instances in a region based on specified conditions.
     *  *
     * @param ListLoadBalancersRequest $request ListLoadBalancersRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return ListLoadBalancersResponse ListLoadBalancersResponse
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
     * @summary Queries Network Load Balancer (NLB) instances in a region based on specified conditions.
     *  *
     * @param ListLoadBalancersRequest $request ListLoadBalancersRequest
     *
     * @return ListLoadBalancersResponse ListLoadBalancersResponse
     */
    public function listLoadBalancers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listLoadBalancersWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the TLS security policies set for a Network Load Balancer (NLB) instance.
     *  *
     * @param ListSecurityPolicyRequest $request ListSecurityPolicyRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return ListSecurityPolicyResponse ListSecurityPolicyResponse
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
     * @summary Queries the TLS security policies set for a Network Load Balancer (NLB) instance.
     *  *
     * @param ListSecurityPolicyRequest $request ListSecurityPolicyRequest
     *
     * @return ListSecurityPolicyResponse ListSecurityPolicyResponse
     */
    public function listSecurityPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSecurityPolicyWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the backend servers in a specified server group.
     *  *
     * @param ListServerGroupServersRequest $request ListServerGroupServersRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return ListServerGroupServersResponse ListServerGroupServersResponse
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
     * @summary Queries the backend servers in a specified server group.
     *  *
     * @param ListServerGroupServersRequest $request ListServerGroupServersRequest
     *
     * @return ListServerGroupServersResponse ListServerGroupServersResponse
     */
    public function listServerGroupServers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listServerGroupServersWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the server groups of a Network Load Balancer (NLB) instance.
     *  *
     * @param ListServerGroupsRequest $request ListServerGroupsRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return ListServerGroupsResponse ListServerGroupsResponse
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
     * @summary Queries the server groups of a Network Load Balancer (NLB) instance.
     *  *
     * @param ListServerGroupsRequest $request ListServerGroupsRequest
     *
     * @return ListServerGroupsResponse ListServerGroupsResponse
     */
    public function listServerGroups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listServerGroupsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the default TLS policy.
     *  *
     * @param ListSystemSecurityPolicyRequest $request ListSystemSecurityPolicyRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return ListSystemSecurityPolicyResponse ListSystemSecurityPolicyResponse
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
     * @summary Queries the default TLS policy.
     *  *
     * @param ListSystemSecurityPolicyRequest $request ListSystemSecurityPolicyRequest
     *
     * @return ListSystemSecurityPolicyResponse ListSystemSecurityPolicyResponse
     */
    public function listSystemSecurityPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSystemSecurityPolicyWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the tags of a resource.
     *  *
     * @param ListTagResourcesRequest $request ListTagResourcesRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return ListTagResourcesResponse ListTagResourcesResponse
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
     * @summary Queries the tags of a resource.
     *  *
     * @param ListTagResourcesRequest $request ListTagResourcesRequest
     *
     * @return ListTagResourcesResponse ListTagResourcesResponse
     */
    public function listTagResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTagResourcesWithOptions($request, $runtime);
    }

    /**
     * @summary Associates a security group with a Network Load Balancer (NLB) instance.
     *  *
     * @description *   Make sure that you have created a security group. For more information about how to create a security group, see [CreateSecurityGroup](https://help.aliyun.com/document_detail/25553.html).
     * *   An NLB instance can be associated with up to four security groups.
     * *   You can query the security groups that are associated with an NLB instance by calling the [GetLoadBalancerAttribute](https://help.aliyun.com/document_detail/214362.html) operation.
     * *   LoadBalancerJoinSecurityGroup is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background. You can call the [GetJobStatus](https://help.aliyun.com/document_detail/445904.html) operation to query the status of a task.
     *     *   If the task is in the **Succeeded** state, the security group is associated.
     *     *   If the task is in the **Processing** state, the security group is being associated. In this case, you can perform only query operations.
     *  *
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
     * @summary Associates a security group with a Network Load Balancer (NLB) instance.
     *  *
     * @description *   Make sure that you have created a security group. For more information about how to create a security group, see [CreateSecurityGroup](https://help.aliyun.com/document_detail/25553.html).
     * *   An NLB instance can be associated with up to four security groups.
     * *   You can query the security groups that are associated with an NLB instance by calling the [GetLoadBalancerAttribute](https://help.aliyun.com/document_detail/214362.html) operation.
     * *   LoadBalancerJoinSecurityGroup is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background. You can call the [GetJobStatus](https://help.aliyun.com/document_detail/445904.html) operation to query the status of a task.
     *     *   If the task is in the **Succeeded** state, the security group is associated.
     *     *   If the task is in the **Processing** state, the security group is being associated. In this case, you can perform only query operations.
     *  *
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
     * @summary Disassociates a security group from a Network Load Balancer (NLB) instance.
     *  *
     * @description LoadBalancerLeaveSecurityGroup is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background. You can call the [GetJobStatus](https://help.aliyun.com/document_detail/445904.html) operation to query the status of a task.
     * *   If the task is in the **Succeeded** state, the security group is disassociated.
     * *   If the task is in the **Processing** state, the security group is being disassociated. In this case, you can perform only query operations.
     *  *
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
     * @summary Disassociates a security group from a Network Load Balancer (NLB) instance.
     *  *
     * @description LoadBalancerLeaveSecurityGroup is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background. You can call the [GetJobStatus](https://help.aliyun.com/document_detail/445904.html) operation to query the status of a task.
     * *   If the task is in the **Succeeded** state, the security group is disassociated.
     * *   If the task is in the **Processing** state, the security group is being disassociated. In this case, you can perform only query operations.
     *  *
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
     * @summary Modify the group of resource.
     *  *
     * @param MoveResourceGroupRequest $request MoveResourceGroupRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return MoveResourceGroupResponse MoveResourceGroupResponse
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
     * @summary Modify the group of resource.
     *  *
     * @param MoveResourceGroupRequest $request MoveResourceGroupRequest
     *
     * @return MoveResourceGroupResponse MoveResourceGroupResponse
     */
    public function moveResourceGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->moveResourceGroupWithOptions($request, $runtime);
    }

    /**
     * @summary Removes backend servers from a server group of a Network Load Balancer (NLB) instance.
     *  *
     * @param RemoveServersFromServerGroupRequest $request RemoveServersFromServerGroupRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return RemoveServersFromServerGroupResponse RemoveServersFromServerGroupResponse
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
     * @summary Removes backend servers from a server group of a Network Load Balancer (NLB) instance.
     *  *
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
     * @summary 配置秒级监控存储
     *  *
     * @param SetHdMonitorRegionConfigRequest $request SetHdMonitorRegionConfigRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return SetHdMonitorRegionConfigResponse SetHdMonitorRegionConfigResponse
     */
    public function setHdMonitorRegionConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->logProject)) {
            $query['LogProject'] = $request->logProject;
        }
        if (!Utils::isUnset($request->metricStore)) {
            $query['MetricStore'] = $request->metricStore;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetHdMonitorRegionConfig',
            'version'     => '2022-04-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetHdMonitorRegionConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 配置秒级监控存储
     *  *
     * @param SetHdMonitorRegionConfigRequest $request SetHdMonitorRegionConfigRequest
     *
     * @return SetHdMonitorRegionConfigResponse SetHdMonitorRegionConfigResponse
     */
    public function setHdMonitorRegionConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setHdMonitorRegionConfigWithOptions($request, $runtime);
    }

    /**
     * @summary Enables a listener for a Network Load Balancer (NLB) instance.
     *  *
     * @param StartListenerRequest $request StartListenerRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return StartListenerResponse StartListenerResponse
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
     * @summary Enables a listener for a Network Load Balancer (NLB) instance.
     *  *
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
     * @summary Removes an elastic IP address (EIP) or a virtual IP address (VIP) of a zone from a DNS record.
     *  *
     * @description > If a Network Load Balancer (NLB) instance is deployed only in one zone, you cannot remove the NLB instance from the zone.
     *  *
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
     * @summary Removes an elastic IP address (EIP) or a virtual IP address (VIP) of a zone from a DNS record.
     *  *
     * @description > If a Network Load Balancer (NLB) instance is deployed only in one zone, you cannot remove the NLB instance from the zone.
     *  *
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
     * @summary Disables a listener for a Network Load Balancer (NLB) instance.
     *  *
     * @param StopListenerRequest $request StopListenerRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return StopListenerResponse StopListenerResponse
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
     * @summary Disables a listener for a Network Load Balancer (NLB) instance.
     *  *
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
     * @summary Adds tags to specified resources.
     *  *
     * @param TagResourcesRequest $request TagResourcesRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return TagResourcesResponse TagResourcesResponse
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
     * @summary Adds tags to specified resources.
     *  *
     * @param TagResourcesRequest $request TagResourcesRequest
     *
     * @return TagResourcesResponse TagResourcesResponse
     */
    public function tagResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->tagResourcesWithOptions($request, $runtime);
    }

    /**
     * @summary Removes tags from resources.
     *  *
     * @param UntagResourcesRequest $request UntagResourcesRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return UntagResourcesResponse UntagResourcesResponse
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
     * @summary Removes tags from resources.
     *  *
     * @param UntagResourcesRequest $request UntagResourcesRequest
     *
     * @return UntagResourcesResponse UntagResourcesResponse
     */
    public function untagResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->untagResourcesWithOptions($request, $runtime);
    }

    /**
     * @summary Updates the attributes of a listener, such as the name and the idle connection timeout period.
     *  *
     * @param UpdateListenerAttributeRequest $tmpReq  UpdateListenerAttributeRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateListenerAttributeResponse UpdateListenerAttributeResponse
     */
    public function updateListenerAttributeWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpdateListenerAttributeShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->proxyProtocolV2Config)) {
            $request->proxyProtocolV2ConfigShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->proxyProtocolV2Config, 'ProxyProtocolV2Config', 'json');
        }
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
        if (!Utils::isUnset($request->proxyProtocolV2ConfigShrink)) {
            $body['ProxyProtocolV2Config'] = $request->proxyProtocolV2ConfigShrink;
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
     * @summary Updates the attributes of a listener, such as the name and the idle connection timeout period.
     *  *
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
     * @summary Changes the network type of the IPv4 address of a Network Load Balancer (NLB) instance.
     *  *
     * @description *   Make sure that an NLB instance is created. For more information, see [CreateLoadBalancer](https://help.aliyun.com/document_detail/445868.html).
     * *   You can call the [GetLoadBalancerAttribute](https://help.aliyun.com/document_detail/445873.html) operation to query the **AddressType** value of an NLB instance after you change the network type.
     * *   **UpdateLoadBalancerAddressTypeConfig** is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background. You can call the [GetJobStatus](https://help.aliyun.com/document_detail/445904.html) operation to query the task status:
     *     *   If the task is in the **Succeeded** state, the network type of the IPv4 address of the NLB instance is changed.
     *     *   If the task is in the **Processing** state, the network type of the IPv4 address of the NLB instance is being changed. In this case, you can perform only query operations.
     *  *
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
     * @summary Changes the network type of the IPv4 address of a Network Load Balancer (NLB) instance.
     *  *
     * @description *   Make sure that an NLB instance is created. For more information, see [CreateLoadBalancer](https://help.aliyun.com/document_detail/445868.html).
     * *   You can call the [GetLoadBalancerAttribute](https://help.aliyun.com/document_detail/445873.html) operation to query the **AddressType** value of an NLB instance after you change the network type.
     * *   **UpdateLoadBalancerAddressTypeConfig** is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background. You can call the [GetJobStatus](https://help.aliyun.com/document_detail/445904.html) operation to query the task status:
     *     *   If the task is in the **Succeeded** state, the network type of the IPv4 address of the NLB instance is changed.
     *     *   If the task is in the **Processing** state, the network type of the IPv4 address of the NLB instance is being changed. In this case, you can perform only query operations.
     *  *
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
     * @summary Updates the attributes, including the name, of a Network Load Balancer (NLB) instance.
     *  *
     * @param UpdateLoadBalancerAttributeRequest $request UpdateLoadBalancerAttributeRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateLoadBalancerAttributeResponse UpdateLoadBalancerAttributeResponse
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
     * @summary Updates the attributes, including the name, of a Network Load Balancer (NLB) instance.
     *  *
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
     * @summary Enables or disables deletion protection and the configuration read-only mode for a Network Load Balancer (NLB) instance.
     *  *
     * @description > You can call the [GetLoadBalancerAttribute](https://help.aliyun.com/document_detail/445873.html) operation to query the details about deletion protection and the configuration read-only mode.
     *  *
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
     * @summary Enables or disables deletion protection and the configuration read-only mode for a Network Load Balancer (NLB) instance.
     *  *
     * @description > You can call the [GetLoadBalancerAttribute](https://help.aliyun.com/document_detail/445873.html) operation to query the details about deletion protection and the configuration read-only mode.
     *  *
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
     * @summary Modifies the zones and zone attributes of a Network Load Balancer (NLB) instance.
     *  *
     * @description When you call this operation, make sure that you specify all the zones of the NLB instance, including the existing zones and new zones. If you do not specify the existing zones, the existing zones are removed.
     * Prerequisites
     * *   An NLB instance is created. For more information, see [CreateLoadBalancer](https://help.aliyun.com/document_detail/445868.html).
     * *   You can call the [GetLoadBalancerAttribute](https://help.aliyun.com/document_detail/445873.html) operation to query the zones and zone attributes of an NLB instance.
     * *   **UpdateLoadBalancerZones** is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background. You can call the [GetJobStatus](https://help.aliyun.com/document_detail/445904.html) operation query to query the status of a task:
     *     *   If the task is in the **Succeeded** state, the zones and zone attributes are modified.
     *     *   If the task is in the **Processing** state, the zones and zone attributes are being modified. In this case, you can perform only query operations.
     *  *
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
     * @summary Modifies the zones and zone attributes of a Network Load Balancer (NLB) instance.
     *  *
     * @description When you call this operation, make sure that you specify all the zones of the NLB instance, including the existing zones and new zones. If you do not specify the existing zones, the existing zones are removed.
     * Prerequisites
     * *   An NLB instance is created. For more information, see [CreateLoadBalancer](https://help.aliyun.com/document_detail/445868.html).
     * *   You can call the [GetLoadBalancerAttribute](https://help.aliyun.com/document_detail/445873.html) operation to query the zones and zone attributes of an NLB instance.
     * *   **UpdateLoadBalancerZones** is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background. You can call the [GetJobStatus](https://help.aliyun.com/document_detail/445904.html) operation query to query the status of a task:
     *     *   If the task is in the **Succeeded** state, the zones and zone attributes are modified.
     *     *   If the task is in the **Processing** state, the zones and zone attributes are being modified. In this case, you can perform only query operations.
     *  *
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
     * @summary Modifies the configurations of a security policy for a Network Load Balancer (NLB) instance.
     *  *
     * @param UpdateSecurityPolicyAttributeRequest $request UpdateSecurityPolicyAttributeRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateSecurityPolicyAttributeResponse UpdateSecurityPolicyAttributeResponse
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
     * @summary Modifies the configurations of a security policy for a Network Load Balancer (NLB) instance.
     *  *
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
     * @summary Modifies the configurations of a server group of Network Load Balancer (NLB).
     *  *
     * @param UpdateServerGroupAttributeRequest $request UpdateServerGroupAttributeRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateServerGroupAttributeResponse UpdateServerGroupAttributeResponse
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
     * @summary Modifies the configurations of a server group of Network Load Balancer (NLB).
     *  *
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
     * @summary Modifies the configurations of backend servers in a server group, such as the weight and description.
     *  *
     * @description **UpdateServerGroupServersAttribute** is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background.
     * 1.  You can call the [ListServerGroups](https://help.aliyun.com/document_detail/445895.html) operation to query the status of a server group.
     *     *   If a server group is in the **Configuring** state, the server group is being modified.
     *     *   If a server group is in the **Available** state, the server group is running.
     * 2.  You can call the [ListServerGroupServers](https://help.aliyun.com/document_detail/445896.html) operation to query the status of a backend server.
     *     *   If a backend server is in the **Configuring** state, it indicates that the backend server is being modified.
     *     *   If a backend server is in the **Available** state, it indicates that the backend server is running.
     *  *
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
     * @summary Modifies the configurations of backend servers in a server group, such as the weight and description.
     *  *
     * @description **UpdateServerGroupServersAttribute** is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background.
     * 1.  You can call the [ListServerGroups](https://help.aliyun.com/document_detail/445895.html) operation to query the status of a server group.
     *     *   If a server group is in the **Configuring** state, the server group is being modified.
     *     *   If a server group is in the **Available** state, the server group is running.
     * 2.  You can call the [ListServerGroupServers](https://help.aliyun.com/document_detail/445896.html) operation to query the status of a backend server.
     *     *   If a backend server is in the **Configuring** state, it indicates that the backend server is being modified.
     *     *   If a backend server is in the **Available** state, it indicates that the backend server is running.
     *  *
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

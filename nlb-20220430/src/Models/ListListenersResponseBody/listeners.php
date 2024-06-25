<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Nlb\V20220430\Models\ListListenersResponseBody;

use AlibabaCloud\SDK\Nlb\V20220430\Models\ListListenersResponseBody\listeners\proxyProtocolV2Config;
use AlibabaCloud\SDK\Nlb\V20220430\Models\ListListenersResponseBody\listeners\tags;
use AlibabaCloud\Tea\Model;

class listeners extends Model
{
    /**
     * @description Indicates whether Application-Layer Protocol Negotiation (ALPN) is enabled. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example false
     *
     * @var bool
     */
    public $alpnEnabled;

    /**
     * @description The ALPN policy. Valid values:
     *
     *   **HTTP1Only**
     *   **HTTP2Only**
     *   **HTTP2Preferred**
     *   **HTTP2Optional**
     *
     * @example HTTP1Only
     *
     * @var string
     */
    public $alpnPolicy;

    /**
     * @description A list of CA certificates.
     *
     * >  This parameter takes effect only for listeners that use SSL over TCP.
     * @var string[]
     */
    public $caCertificateIds;

    /**
     * @description Indicates whether mutual authentication is enabled. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example false
     *
     * @var bool
     */
    public $caEnabled;

    /**
     * @description The server certificate.
     *
     * >  This parameter takes effect only for listeners that use SSL over TCP.
     * @var string[]
     */
    public $certificateIds;

    /**
     * @description The maximum number of connections that can be created per second on the NLB instance. Valid values: **0** to **1000000**. **0** indicates that the number of connections is unlimited.
     *
     * @example 1000
     *
     * @var int
     */
    public $cps;

    /**
     * @description The last port in the listener port range.
     *
     * @example 455
     *
     * @var string
     */
    public $endPort;

    /**
     * @description The timeout period of idle connections. Unit: seconds. Valid values: **1** to **900**. Default value: **900**.
     *
     * @example 900
     *
     * @var int
     */
    public $idleTimeout;

    /**
     * @description The name of the listener.
     *
     * The name must be 2 to 256 characters in length, and can contain letters, digits, commas (,), periods (.), semicolons (;), forward slashes (/), at signs (@), underscores (_), and hyphens (-).
     * @example tcpssl_443
     *
     * @var string
     */
    public $listenerDescription;

    /**
     * @description The listener ID.
     *
     * @example lsn-ga6sjjcll6ou34l1et****
     *
     * @var string
     */
    public $listenerId;

    /**
     * @description The information about the listener port of your server.
     *
     * @example 443
     *
     * @var int
     */
    public $listenerPort;

    /**
     * @description The listener protocol. Valid values: **TCP**, **UDP**, and **TCPSSL**.
     *
     * @example TCPSSL
     *
     * @var string
     */
    public $listenerProtocol;

    /**
     * @description The status of the listener. Valid values:
     *
     *   **Provisioning**: The listener is being created.
     *   **Running**: The listener is running.
     *   **Configuring**: The listener is being configured.
     *   **Stopping**: The listener is being stopped.
     *   **Stopped**: The listener is stopped.
     *   **Starting**: The listener is being started.
     *   **Deleting**: The listener is being deleted.
     *   **Deleted**: The listener is deleted.
     *
     * @example Running
     *
     * @var string
     */
    public $listenerStatus;

    /**
     * @description The CLB instance ID.
     *
     * @example nlb-83ckzc8d4xlp8o****
     *
     * @var string
     */
    public $loadBalancerId;

    /**
     * @description The size of the largest TCP packet segment. Unit: bytes. Valid values: **0** to **1500**. **0** indicates that the Mss value of TCP packets remains unchanged.
     *
     * >  This parameter takes effect only for listeners that use SSL over TCP.
     * @example 200
     *
     * @var int
     */
    public $mss;

    /**
     * @description Indicates whether the Proxy protocol passes source client IP addresses to backend servers. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example false
     *
     * @var bool
     */
    public $proxyProtocolEnabled;

    /**
     * @description Indicates whether the Proxy protocol passes the VpcId, PrivateLinkEpId, and PrivateLinkEpsId parameters to backend servers.
     *
     * @var proxyProtocolV2Config
     */
    public $proxyProtocolV2Config;

    /**
     * @description The region ID of the NLB instance.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description Indicates whether fine-grained monitoring is enabled. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example false
     *
     * @var bool
     */
    public $secSensorEnabled;

    /**
     * @description The ID of the security policy.
     *
     * >  This parameter takes effect only for listeners that use SSL over TCP.
     * @example tls_cipher_policy_1_1
     *
     * @var string
     */
    public $securityPolicyId;

    /**
     * @description The server group ID.
     *
     * @example sgp-ppdpc14gdm3x4o****
     *
     * @var string
     */
    public $serverGroupId;

    /**
     * @description The first port in the listener port range.
     *
     * @example 233
     *
     * @var string
     */
    public $startPort;

    /**
     * @description A list of tags.
     *
     * @var tags[]
     */
    public $tags;
    protected $_name = [
        'alpnEnabled'           => 'AlpnEnabled',
        'alpnPolicy'            => 'AlpnPolicy',
        'caCertificateIds'      => 'CaCertificateIds',
        'caEnabled'             => 'CaEnabled',
        'certificateIds'        => 'CertificateIds',
        'cps'                   => 'Cps',
        'endPort'               => 'EndPort',
        'idleTimeout'           => 'IdleTimeout',
        'listenerDescription'   => 'ListenerDescription',
        'listenerId'            => 'ListenerId',
        'listenerPort'          => 'ListenerPort',
        'listenerProtocol'      => 'ListenerProtocol',
        'listenerStatus'        => 'ListenerStatus',
        'loadBalancerId'        => 'LoadBalancerId',
        'mss'                   => 'Mss',
        'proxyProtocolEnabled'  => 'ProxyProtocolEnabled',
        'proxyProtocolV2Config' => 'ProxyProtocolV2Config',
        'regionId'              => 'RegionId',
        'secSensorEnabled'      => 'SecSensorEnabled',
        'securityPolicyId'      => 'SecurityPolicyId',
        'serverGroupId'         => 'ServerGroupId',
        'startPort'             => 'StartPort',
        'tags'                  => 'Tags',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alpnEnabled) {
            $res['AlpnEnabled'] = $this->alpnEnabled;
        }
        if (null !== $this->alpnPolicy) {
            $res['AlpnPolicy'] = $this->alpnPolicy;
        }
        if (null !== $this->caCertificateIds) {
            $res['CaCertificateIds'] = $this->caCertificateIds;
        }
        if (null !== $this->caEnabled) {
            $res['CaEnabled'] = $this->caEnabled;
        }
        if (null !== $this->certificateIds) {
            $res['CertificateIds'] = $this->certificateIds;
        }
        if (null !== $this->cps) {
            $res['Cps'] = $this->cps;
        }
        if (null !== $this->endPort) {
            $res['EndPort'] = $this->endPort;
        }
        if (null !== $this->idleTimeout) {
            $res['IdleTimeout'] = $this->idleTimeout;
        }
        if (null !== $this->listenerDescription) {
            $res['ListenerDescription'] = $this->listenerDescription;
        }
        if (null !== $this->listenerId) {
            $res['ListenerId'] = $this->listenerId;
        }
        if (null !== $this->listenerPort) {
            $res['ListenerPort'] = $this->listenerPort;
        }
        if (null !== $this->listenerProtocol) {
            $res['ListenerProtocol'] = $this->listenerProtocol;
        }
        if (null !== $this->listenerStatus) {
            $res['ListenerStatus'] = $this->listenerStatus;
        }
        if (null !== $this->loadBalancerId) {
            $res['LoadBalancerId'] = $this->loadBalancerId;
        }
        if (null !== $this->mss) {
            $res['Mss'] = $this->mss;
        }
        if (null !== $this->proxyProtocolEnabled) {
            $res['ProxyProtocolEnabled'] = $this->proxyProtocolEnabled;
        }
        if (null !== $this->proxyProtocolV2Config) {
            $res['ProxyProtocolV2Config'] = null !== $this->proxyProtocolV2Config ? $this->proxyProtocolV2Config->toMap() : null;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->secSensorEnabled) {
            $res['SecSensorEnabled'] = $this->secSensorEnabled;
        }
        if (null !== $this->securityPolicyId) {
            $res['SecurityPolicyId'] = $this->securityPolicyId;
        }
        if (null !== $this->serverGroupId) {
            $res['ServerGroupId'] = $this->serverGroupId;
        }
        if (null !== $this->startPort) {
            $res['StartPort'] = $this->startPort;
        }
        if (null !== $this->tags) {
            $res['Tags'] = [];
            if (null !== $this->tags && \is_array($this->tags)) {
                $n = 0;
                foreach ($this->tags as $item) {
                    $res['Tags'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return listeners
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlpnEnabled'])) {
            $model->alpnEnabled = $map['AlpnEnabled'];
        }
        if (isset($map['AlpnPolicy'])) {
            $model->alpnPolicy = $map['AlpnPolicy'];
        }
        if (isset($map['CaCertificateIds'])) {
            if (!empty($map['CaCertificateIds'])) {
                $model->caCertificateIds = $map['CaCertificateIds'];
            }
        }
        if (isset($map['CaEnabled'])) {
            $model->caEnabled = $map['CaEnabled'];
        }
        if (isset($map['CertificateIds'])) {
            if (!empty($map['CertificateIds'])) {
                $model->certificateIds = $map['CertificateIds'];
            }
        }
        if (isset($map['Cps'])) {
            $model->cps = $map['Cps'];
        }
        if (isset($map['EndPort'])) {
            $model->endPort = $map['EndPort'];
        }
        if (isset($map['IdleTimeout'])) {
            $model->idleTimeout = $map['IdleTimeout'];
        }
        if (isset($map['ListenerDescription'])) {
            $model->listenerDescription = $map['ListenerDescription'];
        }
        if (isset($map['ListenerId'])) {
            $model->listenerId = $map['ListenerId'];
        }
        if (isset($map['ListenerPort'])) {
            $model->listenerPort = $map['ListenerPort'];
        }
        if (isset($map['ListenerProtocol'])) {
            $model->listenerProtocol = $map['ListenerProtocol'];
        }
        if (isset($map['ListenerStatus'])) {
            $model->listenerStatus = $map['ListenerStatus'];
        }
        if (isset($map['LoadBalancerId'])) {
            $model->loadBalancerId = $map['LoadBalancerId'];
        }
        if (isset($map['Mss'])) {
            $model->mss = $map['Mss'];
        }
        if (isset($map['ProxyProtocolEnabled'])) {
            $model->proxyProtocolEnabled = $map['ProxyProtocolEnabled'];
        }
        if (isset($map['ProxyProtocolV2Config'])) {
            $model->proxyProtocolV2Config = proxyProtocolV2Config::fromMap($map['ProxyProtocolV2Config']);
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['SecSensorEnabled'])) {
            $model->secSensorEnabled = $map['SecSensorEnabled'];
        }
        if (isset($map['SecurityPolicyId'])) {
            $model->securityPolicyId = $map['SecurityPolicyId'];
        }
        if (isset($map['ServerGroupId'])) {
            $model->serverGroupId = $map['ServerGroupId'];
        }
        if (isset($map['StartPort'])) {
            $model->startPort = $map['StartPort'];
        }
        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n           = 0;
                foreach ($map['Tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? tags::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

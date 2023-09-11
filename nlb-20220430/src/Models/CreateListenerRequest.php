<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Nlb\V20220430\Models;

use AlibabaCloud\SDK\Nlb\V20220430\Models\CreateListenerRequest\tag;
use AlibabaCloud\Tea\Model;

class CreateListenerRequest extends Model
{
    /**
     * @description Specifies whether to enable Application-Layer Protocol Negotiation (ALPN). Valid values:
     *
     *   **true**
     *   **false** (default)
     *
     * @example false
     *
     * @var bool
     */
    public $alpnEnabled;

    /**
     * @description The ALPN policy.
     *
     * Valid values:
     *
     *   HTTP1Only
     *   HTTP2Only
     *   HTTP2Preferred
     *   HTTP2Optional
     *
     * @example ALPN
     *
     * @var string
     */
    public $alpnPolicy;

    /**
     * @description The certificate authority (CA) certificates. This parameter takes effect only for listeners that use SSL over TCP.
     *
     * > You can specify only one CA certificate.
     * @var string[]
     */
    public $caCertificateIds;

    /**
     * @description Specifies whether to enable mutual authentication. Valid values:
     *
     *   **true**
     *   **false** (default)
     *
     * @example false
     *
     * @var bool
     */
    public $caEnabled;

    /**
     * @description The server certificates. This parameter takes effect only for listeners that use SSL over TCP.
     *
     * > You can specify only one server certificate.
     * @var string[]
     */
    public $certificateIds;

    /**
     * @description The client token that is used to ensure the idempotence of the request.
     *
     * You can use the client to generate the token, but you must make sure that the token is unique among different requests. The client token can contain only ASCII characters.
     *
     * > If you do not specify this parameter, the system automatically uses the **request ID** as the **client token**. The **request ID** may be different for each request.
     * @example 123e4567-e89b-12d3-a456-426655440000
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The maximum number of connections that can be created per second on the NLB instance. Valid values: **0** to **1000000**. **0** specifies that the number of connections is unlimited.
     *
     * @example 100
     *
     * @var int
     */
    public $cps;

    /**
     * @description Specifies whether to perform only a dry run without performing the actual request. Valid values:
     *
     *   **true**: performs only a dry run. The system checks the request for potential issues, including missing parameter values, incorrect request syntax, and service limits. If the request fails the dry run, an error message is returned. If the request passes the dry run, the `DryRunOperation` error code is returned.
     *   **false**(default): performs a dry run and performs the actual request. If the request passes the dry run, a 2xx HTTP status code is returned and the operation is performed.
     *
     * @example false
     *
     * @var bool
     */
    public $dryRun;

    /**
     * @description The last port in the listener port range. Valid values: **0** to **65535**. The number of the last port must be greater than the number of the first port.
     *
     * > This parameter is required when **ListenerPort** is set to **0**.
     * @example 566
     *
     * @var int
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
     * The name must be 2 to 256 characters in length, and can contain letters, digits, commas (,), periods (.), semicolons (;), forward slashes (/), at signs (@), underscores (\_), and hyphens (-).
     * @example tcp_80
     *
     * @var string
     */
    public $listenerDescription;

    /**
     * @description The listener port. Valid values: **0** to **65535**.
     *
     * If you set the value to **0**, the listener listens by port range. If you set the value to **0**, you must specify **StartPort** and **EndPort**.
     * @example 80
     *
     * @var int
     */
    public $listenerPort;

    /**
     * @description The listener protocol. Valid values: **TCP**, **UDP**, and **TCPSSL**.
     *
     * @example TCP
     *
     * @var string
     */
    public $listenerProtocol;

    /**
     * @description The ID of the Network Load Balancer (NLB) instance.
     *
     * @example nlb-83ckzc8d4xlp8o****
     *
     * @var string
     */
    public $loadBalancerId;

    /**
     * @description The maximum size of a TCP segment. Unit: bytes. Valid values: **0** to **1500**. **0** specifies that the maximum segment size remains unchanged.
     *
     * > This parameter is supported only by TCP listeners and listeners that use SSL over TCP.
     * @example 43
     *
     * @var int
     */
    public $mss;

    /**
     * @description Specifies whether to use the Proxy protocol to pass client IP addresses to backend servers. Valid values:
     *
     *   **true**
     *   **false** (default)
     *
     * @example false
     *
     * @var bool
     */
    public $proxyProtocolEnabled;

    /**
     * @description The region ID of the NLB instance.
     *
     * You can call the [DescribeRegions](~~443657~~) operation to query the most recent region list.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description Specifies whether to enable fine-grained monitoring. Valid values:
     *
     *   **true**
     *   **false** (default)
     *
     * @example false
     *
     * @var bool
     */
    public $secSensorEnabled;

    /**
     * @description The security policy ID. System security policies and custom security policies are supported.
     *
     * Valid values: **tls_cipher_policy\_1\_0** (default), **tls_cipher_policy\_1\_1**, **tls_cipher_policy\_1\_2**, **tls_cipher_policy\_1\_2\_strict**, and **tls_cipher_policy\_1\_2\_strict_with\_1\_3**.
     *
     * > This parameter takes effect only for listeners that use SSL over TCP.
     * @example tls_cipher_policy_1_0
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
     * @description The first port in the listener port range. Valid values: **0** to **65535**.
     *
     * > This parameter is required when **ListenerPort** is set to **0**.
     * @example 244
     *
     * @var int
     */
    public $startPort;

    /**
     * @var tag[]
     */
    public $tag;
    protected $_name = [
        'alpnEnabled'          => 'AlpnEnabled',
        'alpnPolicy'           => 'AlpnPolicy',
        'caCertificateIds'     => 'CaCertificateIds',
        'caEnabled'            => 'CaEnabled',
        'certificateIds'       => 'CertificateIds',
        'clientToken'          => 'ClientToken',
        'cps'                  => 'Cps',
        'dryRun'               => 'DryRun',
        'endPort'              => 'EndPort',
        'idleTimeout'          => 'IdleTimeout',
        'listenerDescription'  => 'ListenerDescription',
        'listenerPort'         => 'ListenerPort',
        'listenerProtocol'     => 'ListenerProtocol',
        'loadBalancerId'       => 'LoadBalancerId',
        'mss'                  => 'Mss',
        'proxyProtocolEnabled' => 'ProxyProtocolEnabled',
        'regionId'             => 'RegionId',
        'secSensorEnabled'     => 'SecSensorEnabled',
        'securityPolicyId'     => 'SecurityPolicyId',
        'serverGroupId'        => 'ServerGroupId',
        'startPort'            => 'StartPort',
        'tag'                  => 'Tag',
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
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->cps) {
            $res['Cps'] = $this->cps;
        }
        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
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
        if (null !== $this->listenerPort) {
            $res['ListenerPort'] = $this->listenerPort;
        }
        if (null !== $this->listenerProtocol) {
            $res['ListenerProtocol'] = $this->listenerProtocol;
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
        if (null !== $this->tag) {
            $res['Tag'] = [];
            if (null !== $this->tag && \is_array($this->tag)) {
                $n = 0;
                foreach ($this->tag as $item) {
                    $res['Tag'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateListenerRequest
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
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['Cps'])) {
            $model->cps = $map['Cps'];
        }
        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
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
        if (isset($map['ListenerPort'])) {
            $model->listenerPort = $map['ListenerPort'];
        }
        if (isset($map['ListenerProtocol'])) {
            $model->listenerProtocol = $map['ListenerProtocol'];
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
        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n          = 0;
                foreach ($map['Tag'] as $item) {
                    $model->tag[$n++] = null !== $item ? tag::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

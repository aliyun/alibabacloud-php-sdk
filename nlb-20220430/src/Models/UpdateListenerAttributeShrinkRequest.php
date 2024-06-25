<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Nlb\V20220430\Models;

use AlibabaCloud\Tea\Model;

class UpdateListenerAttributeShrinkRequest extends Model
{
    /**
     * @description Specifies whether to enable Application-Layer Protocol Negotiation (ALPN). Valid values:
     *
     *   **true**: yes
     *   **false**: no
     *
     * @example false
     *
     * @var bool
     */
    public $alpnEnabled;

    /**
     * @description The ALPN policy. Valid values:
     *
     *   **HTTP1Only**: uses only HTTP 1.x. The priority of HTTP 1.1 is higher than the priority of HTTP 1.0.
     *   **HTTP2Only**: uses only HTTP 2.0.
     *   **HTTP2Optional**: preferentially uses HTTP 1.x over HTTP 2.0. The priority of HTTP 1.1 is higher than the priority of HTTP 1.0, and the priority of HTTP 1.0 is higher than the priority of HTTP 2.0.
     *   **HTTP2Preferred**: preferentially uses HTTP 2.0 over HTTP 1.x. The priority of HTTP 2.0 is higher than the priority of HTTP 1.1, and the priority of HTTP 1.1 is higher than the priority of HTTP 1.0.
     *
     * > This parameter is required if AlpnEnabled is set to true.
     * @example ALPN
     *
     * @var string
     */
    public $alpnPolicy;

    /**
     * @description The CA certificates. Only one CA certificate is supported.
     *
     * >  This parameter takes effect only for listeners that use SSL over TCP.
     * @var string[]
     */
    public $caCertificateIds;

    /**
     * @description Specifies whether to enable mutual authentication. Valid values:
     *
     *   **true**: yes
     *   **false** (default): no
     *
     * @example false
     *
     * @var bool
     */
    public $caEnabled;

    /**
     * @description The server certificates.
     *
     * @var string[]
     */
    public $certificateIds;

    /**
     * @description The client token that is used to ensure the idempotence of the request.
     *
     * You can use the client to generate the token, but you must make sure that the token is unique among different requests. The token can contain only ASCII characters.
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
     * @example 10000
     *
     * @var int
     */
    public $cps;

    /**
     * @description Specifies whether only to precheck the request. Valid values:
     *
     *   **true**: prechecks the request but does not update the configurations of the listener. The system prechecks the required parameters, request syntax, and limits. If the request fails the precheck, an error message is returned. If the request passes the precheck, the `DryRunOperation` error code is returned.
     *   **false** (default): sends the request. If the request passes the precheck, an HTTP 2xx status code is returned and the operation is performed.
     *
     * @example false
     *
     * @var bool
     */
    public $dryRun;

    /**
     * @description The timeout period of an idle connection. Unit: seconds. Valid values: **1** to **900**.
     *
     * @example 900
     *
     * @var int
     */
    public $idleTimeout;

    /**
     * @description Enter a name for the listener.
     *
     * The description must be 2 to 256 characters in length, and can contain letters, digits, commas (,), periods (.), semicolons (;), forward slashes (/), at signs (@), underscores (_), and hyphens (-).
     * @example tcpssl_443
     *
     * @var string
     */
    public $listenerDescription;

    /**
     * @description The ID of the listener.
     *
     * This parameter is required.
     * @example lsn-bp1bpn0kn908w4nbw****
     *
     * @var string
     */
    public $listenerId;

    /**
     * @description The size of the largest TCP segment. Unit: bytes. Valid values: **0** to **1500**. **0** specifies that the maximum segment size remains unchanged. This parameter is supported only by listeners that use SSL over TCP.
     *
     * @example 344
     *
     * @var int
     */
    public $mss;

    /**
     * @description Specifies whether to use the Proxy protocol to pass client IP addresses to backend servers. Valid values:
     *
     *   **true**: yes
     *   **false**: no
     *
     * @example false
     *
     * @var bool
     */
    public $proxyProtocolEnabled;

    /**
     * @description Specifies that the Proxy protocol passes the VpcId, PrivateLinkEpId, and PrivateLinkEpsId parameters to backend servers.
     *
     * @var string
     */
    public $proxyProtocolV2ConfigShrink;

    /**
     * @description The ID of the region where the NLB instance is deployed.
     *
     * You can call the [DescribeRegions](https://help.aliyun.com/document_detail/443657.html) operation to query the most recent region list.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description Specifies whether to enable fine-grained monitoring. Valid values:
     *
     *   **true**: yes
     *   **false**: no
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
     * @description The ID of the server group.
     *
     * @example sgp-ppdpc14gdm3x4o****
     *
     * @var string
     */
    public $serverGroupId;
    protected $_name = [
        'alpnEnabled'                 => 'AlpnEnabled',
        'alpnPolicy'                  => 'AlpnPolicy',
        'caCertificateIds'            => 'CaCertificateIds',
        'caEnabled'                   => 'CaEnabled',
        'certificateIds'              => 'CertificateIds',
        'clientToken'                 => 'ClientToken',
        'cps'                         => 'Cps',
        'dryRun'                      => 'DryRun',
        'idleTimeout'                 => 'IdleTimeout',
        'listenerDescription'         => 'ListenerDescription',
        'listenerId'                  => 'ListenerId',
        'mss'                         => 'Mss',
        'proxyProtocolEnabled'        => 'ProxyProtocolEnabled',
        'proxyProtocolV2ConfigShrink' => 'ProxyProtocolV2Config',
        'regionId'                    => 'RegionId',
        'secSensorEnabled'            => 'SecSensorEnabled',
        'securityPolicyId'            => 'SecurityPolicyId',
        'serverGroupId'               => 'ServerGroupId',
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
        if (null !== $this->idleTimeout) {
            $res['IdleTimeout'] = $this->idleTimeout;
        }
        if (null !== $this->listenerDescription) {
            $res['ListenerDescription'] = $this->listenerDescription;
        }
        if (null !== $this->listenerId) {
            $res['ListenerId'] = $this->listenerId;
        }
        if (null !== $this->mss) {
            $res['Mss'] = $this->mss;
        }
        if (null !== $this->proxyProtocolEnabled) {
            $res['ProxyProtocolEnabled'] = $this->proxyProtocolEnabled;
        }
        if (null !== $this->proxyProtocolV2ConfigShrink) {
            $res['ProxyProtocolV2Config'] = $this->proxyProtocolV2ConfigShrink;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateListenerAttributeShrinkRequest
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
        if (isset($map['IdleTimeout'])) {
            $model->idleTimeout = $map['IdleTimeout'];
        }
        if (isset($map['ListenerDescription'])) {
            $model->listenerDescription = $map['ListenerDescription'];
        }
        if (isset($map['ListenerId'])) {
            $model->listenerId = $map['ListenerId'];
        }
        if (isset($map['Mss'])) {
            $model->mss = $map['Mss'];
        }
        if (isset($map['ProxyProtocolEnabled'])) {
            $model->proxyProtocolEnabled = $map['ProxyProtocolEnabled'];
        }
        if (isset($map['ProxyProtocolV2Config'])) {
            $model->proxyProtocolV2ConfigShrink = $map['ProxyProtocolV2Config'];
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

        return $model;
    }
}

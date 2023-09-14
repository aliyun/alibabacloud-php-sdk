<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models;

use AlibabaCloud\SDK\Ga\V20191120\Models\UpdateListenerRequest\backendPorts;
use AlibabaCloud\SDK\Ga\V20191120\Models\UpdateListenerRequest\certificates;
use AlibabaCloud\SDK\Ga\V20191120\Models\UpdateListenerRequest\portRanges;
use AlibabaCloud\SDK\Ga\V20191120\Models\UpdateListenerRequest\XForwardedForConfig;
use AlibabaCloud\Tea\Model;

class UpdateListenerRequest extends Model
{
    /**
     * @description The range of ports that are used by backend servers to receive requests.
     *
     * @var backendPorts[]
     */
    public $backendPorts;

    /**
     * @description The SSL certificate.
     *
     * @var certificates[]
     */
    public $certificates;

    /**
     * @description Specifies whether to enable client affinity for the listener.
     *
     *   If this parameter is left empty, client affinity is disabled. After client affinity is disabled, requests from a specific client IP address may be forwarded to different endpoints.
     *   To enable client affinity, set this parameter to **SOURCE_IP**. In this case, when a client accesses stateful applications, requests from the same client are always forwarded to the same endpoint regardless of the source port or protocol.
     *
     * @example SOURCE_IP
     *
     * @var string
     */
    public $clientAffinity;

    /**
     * @description The client token that is used to ensure the idempotence of the request.
     *
     * You can use the client to generate the value, but you must make sure that the value is unique among different requests. The ClientToken value can contain only ASCII characters.
     *
     * >  If you do not set this parameter, **ClientToken** is set to the value of **RequestId**. The value of **RequestId** for each API request may be different.
     * @example 123e4567-e89b-12d3-a456-426655440000
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The description of the listener. The description can be at most 200 characters in length.
     *
     * @example Listener
     *
     * @var string
     */
    public $description;

    /**
     * @description The ID of the listener.
     *
     * @example lsr-bp1bpn0kn908w4nbw****
     *
     * @var string
     */
    public $listenerId;

    /**
     * @description The name of the listener.
     *
     * The name must be 2 to 128 characters in length, and can contain letters, digits, underscores (\_), and hyphens (-). The name must start with a letter.
     * @example Listener
     *
     * @var string
     */
    public $name;

    /**
     * @description The listener ports that are used to receive requests and forward the requests to endpoints.
     *
     * Valid values: **1** to **65499**.
     *
     * The maximum number of ports that can be configured varies based on the routing type and protocol of the listener. For more information, see [Listener overview](~~153216~~).
     * @var portRanges[]
     */
    public $portRanges;

    /**
     * @description The network transmission protocol that is used by the listener. Valid values:
     *
     *   **tcp**: TCP
     *   **udp**: UDP
     *   **http**: HTTP
     *   **https**: HTTPS
     *
     * @example tcp
     *
     * @var string
     */
    public $protocol;

    /**
     * @description Specifies whether to reserve client IP addresses. Default value: false. Valid values:
     *
     *   **true**: enables client IP preservation. After client IP addresses are reserved, you can view client IP addresses on the endpoints.
     *   **false** (default): disables client IP preservation.
     *
     * > This parameter will be deprecated in the API operations that are used to configure listeners. We recommend that you set this parameter when you call API operations to configure endpoint groups. For more information about the **ProxyProtocol** parameter, see [CreateEndpointGroup](~~153259~~) and [UpdateEndpointGroup](~~153262~~).
     * @example false
     *
     * @var string
     */
    public $proxyProtocol;

    /**
     * @description The region ID of the GA instance. Set the value to **cn-hangzhou**.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the security policy. Valid values:
     *
     *   **tls_cipher_policy\_1\_0**
     *
     *   Supported Transport Layer Security (TLS) versions: TLS 1.0, TLS 1.1, and TLS 1.2
     *   Supported cipher suites: ECDHE-RSA-AES128-GCM-SHA256, ECDHE-RSA-AES256-GCM-SHA384, ECDHE-RSA-AES128-SHA256, ECDHE-RSA-AES256-SHA384, AES128-GCM-SHA256, AES256-GCM-SHA384, AES128-SHA256, AES256-SHA256, ECDHE-RSA-AES128-SHA, ECDHE-RSA-AES256-SHA, AES128-SHA, AES256-SHA, and DES-CBC3-SHA
     *
     *   **tls_cipher_policy\_1\_1**
     *
     *   Supported TLS versions: TLS 1.1 and TLS 1.2
     *   Supported cipher suites: ECDHE-RSA-AES128-GCM-SHA256, ECDHE-RSA-AES256-GCM-SHA384, ECDHE-RSA-AES128-SHA256, ECDHE-RSA-AES256-SHA384, AES128-GCM-SHA256, AES256-GCM-SHA384, AES128-SHA256, AES256-SHA256, ECDHE-RSA-AES128-SHA, ECDHE-RSA-AES256-SHA, AES128-SHA, AES256-SHA, and DES-CBC3-SHA
     *
     *   **tls_cipher_policy\_1\_2**
     *
     *   Supported TLS version: TLS 1.2
     *   Supported cipher suites: ECDHE-RSA-AES128-GCM-SHA256, ECDHE-RSA-AES256-GCM-SHA384, ECDHE-RSA-AES128-SHA256, ECDHE-RSA-AES256-SHA384, AES128-GCM-SHA256, AES256-GCM-SHA384, AES128-SHA256, AES256-SHA256, ECDHE-RSA-AES128-SHA, ECDHE-RSA-AES256-SHA, AES128-SHA, AES256-SHA, and DES-CBC3-SHA
     *
     *   **tls_cipher_policy\_1\_2\_strict**
     *
     *   Supported TLS version: TLS 1.2
     *   Supported cipher suites: ECDHE-RSA-AES128-GCM-SHA256, ECDHE-RSA-AES256-GCM-SHA384, ECDHE-RSA-AES128-SHA256, ECDHE-RSA-AES256-SHA384, ECDHE-RSA-AES128-SHA, and ECDHE-RSA-AES256-SHA
     *
     *   **tls_cipher_policy\_1\_2\_strict_with\_1\_3**
     *
     *   Supported TLS versions: TLS 1.2 and TLS 1.3
     *   Supported cipher suites: TLS_AES\_128\_GCM_SHA256, TLS_AES\_256\_GCM_SHA384, TLS_CHACHA20\_POLY1305\_SHA256, TLS_AES\_128\_CCM_SHA256, TLS_AES\_128\_CCM\_8\_SHA256, ECDHE-ECDSA-AES128-GCM-SHA256, ECDHE-ECDSA-AES256-GCM-SHA384, ECDHE-ECDSA-AES128-SHA256, ECDHE-ECDSA-AES256-SHA384, ECDHE-RSA-AES128-GCM-SHA256, ECDHE-RSA-AES256-GCM-SHA384, ECDHE-RSA-AES128-SHA256, ECDHE-RSA-AES256-SHA384, ECDHE-ECDSA-AES128-SHA, ECDHE-ECDSA-AES256-SHA, ECDHE-RSA-AES128-SHA, and ECDHE-RSA-AES256-SHA
     *
     * > This parameter is available only when you create an HTTPS listener.
     * @example tls_cipher_policy_1_0
     *
     * @var string
     */
    public $securityPolicyId;

    /**
     * @description The `XForward` headers.
     *
     * @var XForwardedForConfig
     */
    public $XForwardedForConfig;
    protected $_name = [
        'backendPorts'        => 'BackendPorts',
        'certificates'        => 'Certificates',
        'clientAffinity'      => 'ClientAffinity',
        'clientToken'         => 'ClientToken',
        'description'         => 'Description',
        'listenerId'          => 'ListenerId',
        'name'                => 'Name',
        'portRanges'          => 'PortRanges',
        'protocol'            => 'Protocol',
        'proxyProtocol'       => 'ProxyProtocol',
        'regionId'            => 'RegionId',
        'securityPolicyId'    => 'SecurityPolicyId',
        'XForwardedForConfig' => 'XForwardedForConfig',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->backendPorts) {
            $res['BackendPorts'] = [];
            if (null !== $this->backendPorts && \is_array($this->backendPorts)) {
                $n = 0;
                foreach ($this->backendPorts as $item) {
                    $res['BackendPorts'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->certificates) {
            $res['Certificates'] = [];
            if (null !== $this->certificates && \is_array($this->certificates)) {
                $n = 0;
                foreach ($this->certificates as $item) {
                    $res['Certificates'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->clientAffinity) {
            $res['ClientAffinity'] = $this->clientAffinity;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->listenerId) {
            $res['ListenerId'] = $this->listenerId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->portRanges) {
            $res['PortRanges'] = [];
            if (null !== $this->portRanges && \is_array($this->portRanges)) {
                $n = 0;
                foreach ($this->portRanges as $item) {
                    $res['PortRanges'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->protocol) {
            $res['Protocol'] = $this->protocol;
        }
        if (null !== $this->proxyProtocol) {
            $res['ProxyProtocol'] = $this->proxyProtocol;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->securityPolicyId) {
            $res['SecurityPolicyId'] = $this->securityPolicyId;
        }
        if (null !== $this->XForwardedForConfig) {
            $res['XForwardedForConfig'] = null !== $this->XForwardedForConfig ? $this->XForwardedForConfig->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateListenerRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BackendPorts'])) {
            if (!empty($map['BackendPorts'])) {
                $model->backendPorts = [];
                $n                   = 0;
                foreach ($map['BackendPorts'] as $item) {
                    $model->backendPorts[$n++] = null !== $item ? backendPorts::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Certificates'])) {
            if (!empty($map['Certificates'])) {
                $model->certificates = [];
                $n                   = 0;
                foreach ($map['Certificates'] as $item) {
                    $model->certificates[$n++] = null !== $item ? certificates::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ClientAffinity'])) {
            $model->clientAffinity = $map['ClientAffinity'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['ListenerId'])) {
            $model->listenerId = $map['ListenerId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['PortRanges'])) {
            if (!empty($map['PortRanges'])) {
                $model->portRanges = [];
                $n                 = 0;
                foreach ($map['PortRanges'] as $item) {
                    $model->portRanges[$n++] = null !== $item ? portRanges::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Protocol'])) {
            $model->protocol = $map['Protocol'];
        }
        if (isset($map['ProxyProtocol'])) {
            $model->proxyProtocol = $map['ProxyProtocol'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['SecurityPolicyId'])) {
            $model->securityPolicyId = $map['SecurityPolicyId'];
        }
        if (isset($map['XForwardedForConfig'])) {
            $model->XForwardedForConfig = XForwardedForConfig::fromMap($map['XForwardedForConfig']);
        }

        return $model;
    }
}

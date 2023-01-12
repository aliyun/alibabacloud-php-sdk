<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models;

use AlibabaCloud\SDK\Ga\V20191120\Models\CreateListenerRequest\certificates;
use AlibabaCloud\SDK\Ga\V20191120\Models\CreateListenerRequest\customRoutingEndpointGroupConfigurations;
use AlibabaCloud\SDK\Ga\V20191120\Models\CreateListenerRequest\endpointGroupConfigurations;
use AlibabaCloud\SDK\Ga\V20191120\Models\CreateListenerRequest\portRanges;
use AlibabaCloud\SDK\Ga\V20191120\Models\CreateListenerRequest\XForwardedForConfig;
use AlibabaCloud\Tea\Model;

class CreateListenerRequest extends Model
{
    /**
     * @description The ID of the GA instance.
     *
     * @example ga-bp1odcab8tmno0hdq****
     *
     * @var string
     */
    public $acceleratorId;

    /**
     * @var certificates[]
     */
    public $certificates;

    /**
     * @description Specifies whether to enable client affinity for the listener.
     *
     *   If this parameter is left empty, client affinity is disabled. If client affinity is disabled, requests from the same client are not always forwarded to the same endpoint.
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
     * You can use the client to generate the value, but you must ensure that it is unique among all requests. The client token can contain only ASCII characters.
     *
     * >  If you do not set this parameter, **ClientToken** is set to the value of **RequestId**. The value of **RequestId** may be different for each API request.
     * @example 123e4567-e89b-12d3-a456-426655440000
     *
     * @var string
     */
    public $clientToken;

    /**
     * @var customRoutingEndpointGroupConfigurations[]
     */
    public $customRoutingEndpointGroupConfigurations;

    /**
     * @description The description of the listener.
     *
     * The description can be at most 200 characters in length.
     * @example Listener
     *
     * @var string
     */
    public $description;

    /**
     * @var endpointGroupConfigurations[]
     */
    public $endpointGroupConfigurations;

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
     * @description Specifies whether to reserve client IP addresses. Valid values:
     *
     *   **true**: enables the feature. After client IP addresses are reserved, you can view the source IP addresses of clients over the backend service.
     *   **false** (default): disables the feature.
     *
     * >  This parameter will be deprecated from the API operations that are used to configure listeners. We recommend that you set this parameter when you call API operations to configure endpoint groups. For more information about the **ProxyProtocol** parameter, see [CreateEndpointGroup](~~153259~~) and [UpdateEndpointGroup](~~153262~~).
     * @example false
     *
     * @var bool
     */
    public $proxyProtocol;

    /**
     * @description The ID of the region where the GA instance is deployed. Set the value to **cn-hangzhou**.
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
     * >  You can set this parameter only for HTTPS listeners.
     * @example tls_cipher_policy_1_0
     *
     * @var string
     */
    public $securityPolicyId;

    /**
     * @description The routing type of the listener. Valid values:
     *
     *   **Standard** (default): intelligent routing
     *   **CustomRouting**: custom routing
     *
     * >
     *   Custom routing listeners are in invitational preview. To use custom routing listeners, [submit a ticket](https://workorder-intl.console.aliyun.com/?spm=5176.11182188.console-base-top.dworkorder.18ae4882n3v6ZW#/ticket/createIndex).
     *   You cannot configure listeners of both types for the same GA instance at the same time. After you create the listener, you cannot change the routing type. For more information, see [Listener overview](~~153216~~).
     *
     * @example Standard
     *
     * @var string
     */
    public $type;

    /**
     * @description The configurations of the `XForward` headers.
     *
     * @var XForwardedForConfig
     */
    public $XForwardedForConfig;
    protected $_name = [
        'acceleratorId'                            => 'AcceleratorId',
        'certificates'                             => 'Certificates',
        'clientAffinity'                           => 'ClientAffinity',
        'clientToken'                              => 'ClientToken',
        'customRoutingEndpointGroupConfigurations' => 'CustomRoutingEndpointGroupConfigurations',
        'description'                              => 'Description',
        'endpointGroupConfigurations'              => 'EndpointGroupConfigurations',
        'name'                                     => 'Name',
        'portRanges'                               => 'PortRanges',
        'protocol'                                 => 'Protocol',
        'proxyProtocol'                            => 'ProxyProtocol',
        'regionId'                                 => 'RegionId',
        'securityPolicyId'                         => 'SecurityPolicyId',
        'type'                                     => 'Type',
        'XForwardedForConfig'                      => 'XForwardedForConfig',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->acceleratorId) {
            $res['AcceleratorId'] = $this->acceleratorId;
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
        if (null !== $this->customRoutingEndpointGroupConfigurations) {
            $res['CustomRoutingEndpointGroupConfigurations'] = [];
            if (null !== $this->customRoutingEndpointGroupConfigurations && \is_array($this->customRoutingEndpointGroupConfigurations)) {
                $n = 0;
                foreach ($this->customRoutingEndpointGroupConfigurations as $item) {
                    $res['CustomRoutingEndpointGroupConfigurations'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->endpointGroupConfigurations) {
            $res['EndpointGroupConfigurations'] = [];
            if (null !== $this->endpointGroupConfigurations && \is_array($this->endpointGroupConfigurations)) {
                $n = 0;
                foreach ($this->endpointGroupConfigurations as $item) {
                    $res['EndpointGroupConfigurations'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->XForwardedForConfig) {
            $res['XForwardedForConfig'] = null !== $this->XForwardedForConfig ? $this->XForwardedForConfig->toMap() : null;
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
        if (isset($map['AcceleratorId'])) {
            $model->acceleratorId = $map['AcceleratorId'];
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
        if (isset($map['CustomRoutingEndpointGroupConfigurations'])) {
            if (!empty($map['CustomRoutingEndpointGroupConfigurations'])) {
                $model->customRoutingEndpointGroupConfigurations = [];
                $n                                               = 0;
                foreach ($map['CustomRoutingEndpointGroupConfigurations'] as $item) {
                    $model->customRoutingEndpointGroupConfigurations[$n++] = null !== $item ? customRoutingEndpointGroupConfigurations::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['EndpointGroupConfigurations'])) {
            if (!empty($map['EndpointGroupConfigurations'])) {
                $model->endpointGroupConfigurations = [];
                $n                                  = 0;
                foreach ($map['EndpointGroupConfigurations'] as $item) {
                    $model->endpointGroupConfigurations[$n++] = null !== $item ? endpointGroupConfigurations::fromMap($item) : $item;
                }
            }
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
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['XForwardedForConfig'])) {
            $model->XForwardedForConfig = XForwardedForConfig::fromMap($map['XForwardedForConfig']);
        }

        return $model;
    }
}

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
     * This parameter is required.
     * @example ga-bp1odcab8tmno0hdq****
     *
     * @var string
     */
    public $acceleratorId;

    /**
     * @description The SSL certificates.
     *
     * @var certificates[]
     */
    public $certificates;

    /**
     * @description Specifies whether to enable client affinity for the listener.
     *
     *   If this parameter is left empty, client affinity is disabled. After client affinity is disabled, requests from a specific client IP address may be forwarded to different endpoints.
     *   To enable client affinity, set this parameter to **SOURCE_IP**. In this case, when a client accesses stateful applications, requests from the same client are forwarded to the same endpoint regardless of the source port or protocol.
     *
     * @example SOURCE_IP
     *
     * @var string
     */
    public $clientAffinity;

    /**
     * @description The client token that is used to ensure the idempotence of the request.
     *
     * You can use the client to generate the token, but you must make sure that the token is unique among different requests. The token can contain only ASCII characters.
     *
     * > If you do not set this parameter, **ClientToken** is set to the value of **RequestId**. The value of **RequestId** is different for each API request.
     * @example 123e4567-e89b-12d3-a456-426655440000
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The endpoint group that is associated with the custom routing listener.
     *
     * You can configure at most five endpoint groups for a custom routing listener.
     *
     * > You can configure endpoint groups and endpoints for a custom routing listener only if the **Type** parameter is set to **CustomRouting**.
     * @var customRoutingEndpointGroupConfigurations[]
     */
    public $customRoutingEndpointGroupConfigurations;

    /**
     * @description The description of the listener. The description can be at most 200 characters in length.
     *
     * @example Listener
     *
     * @var string
     */
    public $description;

    /**
     * @description The endpoint groups that are associated with the intelligent routing listener.
     *
     * You can configure up to 10 endpoint groups for an intelligent routing listener.
     *
     * >  You can configure endpoint groups and endpoints only if you set **Type** to **Standard**.
     * @var endpointGroupConfigurations[]
     */
    public $endpointGroupConfigurations;

    /**
     * @description The maximum version of the HTTP protocol. Valid values:
     *
     *   **http3**
     *   **http2** (default)
     *   **http1.1**
     *
     * >  Only HTTPS listeners support this parameter.
     * @example http2
     *
     * @var string
     */
    public $httpVersion;

    /**
     * @description The timeout period of idle connections. Unit: seconds.
     *
     *   TCP: 10-900. Default value: 900. Unit: seconds.
     *   UDP: 10-20. Default value: 20. Unit: seconds.
     *   HTTP/HTTPS: 1-60. Default value: 15. Unit: seconds.
     *
     * @example 900
     *
     * @var int
     */
    public $idleTimeout;

    /**
     * @description The name of the listener.
     *
     * The name must be 2 to 128 characters in length, and can contain letters, digits, underscores (_), and hyphens (-). The name must start with a letter.
     * @example Listener
     *
     * @var string
     */
    public $name;

    /**
     * @description The listener ports. Valid values: **1** to **65499**. The maximum number of ports that can be configured depends on the routing type and protocol of the listener. For more information, see [Listener overview](https://help.aliyun.com/document_detail/153216.html).
     *
     * This parameter is required.
     * @var portRanges[]
     */
    public $portRanges;

    /**
     * @description The network transmission protocol that you want to use for the listener. Valid values:
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
     * @description Specifies whether to preserve client IP addresses. Valid values:
     *
     *   **true**: enables the feature. After client IP addresses are preserved, you can view client IP addresses on the endpoints.
     *   **false** (default): disables the feature.
     *
     * > This parameter will be deprecated in the API operations that are used to configure listeners. We recommend that you set this parameter when you call API operations to configure endpoint groups. For more information about the **ProxyProtocol** parameter, see [CreateEndpointGroup](https://help.aliyun.com/document_detail/153259.html) and [UpdateEndpointGroup](https://help.aliyun.com/document_detail/153262.html).
     * @example false
     *
     * @var bool
     */
    public $proxyProtocol;

    /**
     * @description The ID of the region where the GA instance is deployed. Set the value to **cn-hangzhou**.
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The timeout period for HTTP or HTTPS requests. Unit: seconds.
     *
     * >  This parameter takes effect only for HTTP or HTTPS listeners. If the backend server does not respond within the timeout period, GA returns an HTTP 504 error code to the client.
     * @example 15
     *
     * @var int
     */
    public $requestTimeout;

    /**
     * @description The ID of the security policy. Valid values:
     *
     *   **tls_cipher_policy_1_0**
     *
     *   Supported Transport Layer Security (TLS) versions: TLS 1.0, TLS 1.1, and TLS 1.2
     *   Supported cipher suites: ECDHE-RSA-AES128-GCM-SHA256, ECDHE-RSA-AES256-GCM-SHA384, ECDHE-RSA-AES128-SHA256, ECDHE-RSA-AES256-SHA384, AES128-GCM-SHA256, AES256-GCM-SHA384, AES128-SHA256, AES256-SHA256, ECDHE-RSA-AES128-SHA, ECDHE-RSA-AES256-SHA, AES128-SHA, AES256-SHA, and DES-CBC3-SHA.
     *
     *   **tls_cipher_policy_1_1**
     *
     *   Supported TLS versions: TLS 1.1 and TLS 1.2
     *   Supported cipher suites: ECDHE-RSA-AES128-GCM-SHA256, ECDHE-RSA-AES256-GCM-SHA384, ECDHE-RSA-AES128-SHA256, ECDHE-RSA-AES256-SHA384, AES128-GCM-SHA256, AES256-GCM-SHA384, AES128-SHA256, AES256-SHA256, ECDHE-RSA-AES128-SHA, ECDHE-RSA-AES256-SHA, AES128-SHA, AES256-SHA, and DES-CBC3-SHA.
     *
     *   **tls_cipher_policy_1_2**
     *
     *   Supported TLS version: TLS 1.2
     *   Supported cipher suites: ECDHE-RSA-AES128-GCM-SHA256, ECDHE-RSA-AES256-GCM-SHA384, ECDHE-RSA-AES128-SHA256, ECDHE-RSA-AES256-SHA384, AES128-GCM-SHA256, AES256-GCM-SHA384, AES128-SHA256, AES256-SHA256, ECDHE-RSA-AES128-SHA, ECDHE-RSA-AES256-SHA, AES128-SHA, AES256-SHA, and DES-CBC3-SHA.
     *
     *   **tls_cipher_policy_1_2_strict**
     *
     *   Supported TLS version: TLS 1.2
     *   Supported cipher suites: ECDHE-RSA-AES128-GCM-SHA256, ECDHE-RSA-AES256-GCM-SHA384, ECDHE-RSA-AES128-SHA256, ECDHE-RSA-AES256-SHA384, ECDHE-RSA-AES128-SHA, and ECDHE-RSA-AES256-SHA
     *
     *   **tls_cipher_policy_1_2_strict_with_1_3**
     *
     *   Supported TLS versions: TLS 1.2 and TLS 1.3
     *   Supported cipher suites: TLS_AES_128_GCM_SHA256, TLS_AES_256_GCM_SHA384, TLS_CHACHA20_POLY1305_SHA256, TLS_AES_128_CCM_SHA256, TLS_AES_128_CCM_8_SHA256, ECDHE-ECDSA-AES128-GCM-SHA256, ECDHE-ECDSA-AES256-GCM-SHA384, ECDHE-ECDSA-AES128-SHA256, ECDHE-ECDSA-AES256-SHA384, ECDHE-RSA-AES128-GCM-SHA256, ECDHE-RSA-AES256-GCM-SHA384, ECDHE-RSA-AES128-SHA256, ECDHE-RSA-AES256-SHA384, ECDHE-ECDSA-AES128-SHA, ECDHE-ECDSA-AES256-SHA, ECDHE-RSA-AES128-SHA, and ECDHE-RSA-AES256-SHA
     *
     * > This parameter is available only when you create an HTTPS listener.
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
     * > *   Custom routing listeners are in invitational preview. To use custom routing listeners, contact your account manager.
     * > *   You can create only listeners of the same routing type for a standard GA instance. You cannot change the routing types of listeners. For more information, see [Listener overview](https://help.aliyun.com/document_detail/153216.html).
     * @example Standard
     *
     * @var string
     */
    public $type;

    /**
     * @description The `XForward` headers.
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
        'httpVersion'                              => 'HttpVersion',
        'idleTimeout'                              => 'IdleTimeout',
        'name'                                     => 'Name',
        'portRanges'                               => 'PortRanges',
        'protocol'                                 => 'Protocol',
        'proxyProtocol'                            => 'ProxyProtocol',
        'regionId'                                 => 'RegionId',
        'requestTimeout'                           => 'RequestTimeout',
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
        if (null !== $this->httpVersion) {
            $res['HttpVersion'] = $this->httpVersion;
        }
        if (null !== $this->idleTimeout) {
            $res['IdleTimeout'] = $this->idleTimeout;
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
        if (null !== $this->requestTimeout) {
            $res['RequestTimeout'] = $this->requestTimeout;
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
        if (isset($map['HttpVersion'])) {
            $model->httpVersion = $map['HttpVersion'];
        }
        if (isset($map['IdleTimeout'])) {
            $model->idleTimeout = $map['IdleTimeout'];
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
        if (isset($map['RequestTimeout'])) {
            $model->requestTimeout = $map['RequestTimeout'];
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

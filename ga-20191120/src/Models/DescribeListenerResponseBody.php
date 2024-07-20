<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models;

use AlibabaCloud\SDK\Ga\V20191120\Models\DescribeListenerResponseBody\backendPorts;
use AlibabaCloud\SDK\Ga\V20191120\Models\DescribeListenerResponseBody\certificates;
use AlibabaCloud\SDK\Ga\V20191120\Models\DescribeListenerResponseBody\portRanges;
use AlibabaCloud\SDK\Ga\V20191120\Models\DescribeListenerResponseBody\relatedAcls;
use AlibabaCloud\SDK\Ga\V20191120\Models\DescribeListenerResponseBody\serviceManagedInfos;
use AlibabaCloud\SDK\Ga\V20191120\Models\DescribeListenerResponseBody\XForwardedForConfig;
use AlibabaCloud\Tea\Model;

class DescribeListenerResponseBody extends Model
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
     * @description The type of the ACL. Valid values:
     *
     *   **white**: a whitelist. Only requests from the IP addresses or CIDR blocks in the ACL are forwarded. Whitelists are suitable for scenarios in which you want to allow only specific IP addresses to access an application. If a whitelist is improperly configured, risks may arise. After a whitelist is configured for a listener, only requests from the IP addresses that are added to the whitelist are distributed by the listener. If the whitelist is enabled but no IP addresses are added to the ACL, the listener does not forward requests.
     *   **black**: a blacklist. All requests from the IP addresses or CIDR blocks in the ACL are blocked. Blacklists are suitable for scenarios in which you want to deny access from specific IP addresses to an application. If the blacklist is enabled but no IP addresses are added to the ACL, the listener forwards all requests.
     *
     * This parameter is returned only if the value of **Status** is **on**.
     * @example white
     *
     * @var string
     */
    public $aclType;

    /**
     * @description The information about the backend ports.
     *
     * @var backendPorts[]
     */
    public $backendPorts;

    /**
     * @description The SSL certificates.
     *
     * @var certificates[]
     */
    public $certificates;

    /**
     * @description Indicates whether client affinity is enabled for the listener.
     *
     *   If **NONE** is returned, client affinity is disabled. Requests from the same client may be forwarded to different endpoints.
     *   If **SOURCE_IP** is returned, client affinity is enabled. When a client accesses stateful applications, requests from the same client are forwarded to the same endpoint regardless of the source port or protocol.
     *
     * @example SOURCE_IP
     *
     * @var string
     */
    public $clientAffinity;

    /**
     * @description The time when the listener was created. This value is a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC. Unit: milliseconds.
     *
     * @example 1577786252000
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The description of the listener.
     *
     * @example Listener
     *
     * @var string
     */
    public $description;

    /**
     * @description The maximum version of the HTTP protocol. Valid values:
     *
     *   **http3**
     *   **http2**
     *   **http1.1**
     *
     * >  This parameter is returned only for HTTPS listeners.
     * @example http2
     *
     * @var string
     */
    public $httpVersion;

    /**
     * @description The timeout period of idle connections. Unit: seconds.
     *
     * @example 900
     *
     * @var int
     */
    public $idleTimeout;

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
     * @example Listener
     *
     * @var string
     */
    public $name;

    /**
     * @description The information about the listener ports.
     *
     * @var portRanges[]
     */
    public $portRanges;

    /**
     * @description The network transmission protocol that is used by the listener. Valid values:
     *
     *   **tcp**: TCP.
     *   **udp**: UDP.
     *   **http**: HTTP.
     *   **https**: HTTPS.
     *
     * @example tcp
     *
     * @var string
     */
    public $protocol;

    /**
     * @description Indicates whether the client IP address preservation feature is enabled. Valid values:
     *
     *   **true** You can view the source IP addresses of clients over the backend service.
     *   **false**
     *
     * @example false
     *
     * @var bool
     */
    public $proxyProtocol;

    /**
     * @description The information about the access control list (ACL) that is associated with the listener.
     *
     * @var relatedAcls[]
     */
    public $relatedAcls;

    /**
     * @description The ID of the request.
     *
     * @example 6FEA0CF3-D3B9-43E5-A304-D217037876A8
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The timeout period of HTTP or HTTPS requests. Unit: seconds.
     *
     * >  This parameter is returned only for HTTP and HTTPS listeners. If no responses are received from the backend server within the specified timeout period, GA returns the HTTP 504 error code to the client.
     * @example 60
     *
     * @var int
     */
    public $requestTimeout;

    /**
     * @description The ID of the security policy.
     *
     *   **tls_cipher_policy_1_0**
     *
     *   Supported Transport Layer Security (TLS) versions: TLS 1.0, TLS 1.1, and TLS 1.2.
     *   Supported cipher suites: ECDHE-RSA-AES128-GCM-SHA256, ECDHE-RSA-AES256-GCM-SHA384, ECDHE-RSA-AES128-SHA256, ECDHE-RSA-AES256-SHA384, AES128-GCM-SHA256, AES256-GCM-SHA384, AES128-SHA256, AES256-SHA256, ECDHE-RSA-AES128-SHA, ECDHE-RSA-AES256-SHA, AES128-SHA, AES256-SHA, and DES-CBC3-SHA.
     *
     *   **tls_cipher_policy_1_1**
     *
     *   Supported TLS versions: TLS 1.1 and TLS 1.2.
     *   Supported cipher suites: ECDHE-RSA-AES128-GCM-SHA256, ECDHE-RSA-AES256-GCM-SHA384, ECDHE-RSA-AES128-SHA256, ECDHE-RSA-AES256-SHA384, AES128-GCM-SHA256, AES256-GCM-SHA384, AES128-SHA256, AES256-SHA256, ECDHE-RSA-AES128-SHA, ECDHE-RSA-AES256-SHA, AES128-SHA, AES256-SHA, and DES-CBC3-SHA.
     *
     *   **tls_cipher_policy_1_2**
     *
     *   Supported TLS version: TLS 1.2.
     *   Supported cipher suites: ECDHE-RSA-AES128-GCM-SHA256, ECDHE-RSA-AES256-GCM-SHA384, ECDHE-RSA-AES128-SHA256, ECDHE-RSA-AES256-SHA384, AES128-GCM-SHA256, AES256-GCM-SHA384, AES128-SHA256, AES256-SHA256, ECDHE-RSA-AES128-SHA, ECDHE-RSA-AES256-SHA, AES128-SHA, AES256-SHA, and DES-CBC3-SHA.
     *
     *   **tls_cipher_policy_1_2_strict**
     *
     *   Supported TLS version: TLS 1.2.
     *   Supported cipher suites: ECDHE-RSA-AES128-GCM-SHA256, ECDHE-RSA-AES256-GCM-SHA384, ECDHE-RSA-AES128-SHA256, ECDHE-RSA-AES256-SHA384, ECDHE-RSA-AES128-SHA, and ECDHE-RSA-AES256-SHA.
     *
     *   **tls_cipher_policy_1_2_strict_with_1_3**
     *
     *   Supported TLS versions: TLS 1.2 and TLS 1.3.
     *   Supported cipher suites: TLS_AES_128_GCM_SHA256, TLS_AES_256_GCM_SHA384, TLS_CHACHA20_POLY1305_SHA256, TLS_AES_128_CCM_SHA256, TLS_AES_128_CCM_8_SHA256, ECDHE-ECDSA-AES128-GCM-SHA256, ECDHE-ECDSA-AES256-GCM-SHA384, ECDHE-ECDSA-AES128-SHA256, ECDHE-ECDSA-AES256-SHA384, ECDHE-RSA-AES128-GCM-SHA256, ECDHE-RSA-AES256-GCM-SHA384, ECDHE-RSA-AES128-SHA256, ECDHE-RSA-AES256-SHA384, ECDHE-ECDSA-AES128-SHA, ECDHE-ECDSA-AES256-SHA, ECDHE-RSA-AES128-SHA, and ECDHE-RSA-AES256-SHA.
     *
     * >  This parameter is returned only for HTTPS listeners.
     * @example tls_cipher_policy_1_0
     *
     * @var string
     */
    public $securityPolicyId;

    /**
     * @description The ID of the service that manages the instance.
     *
     * >  This parameter is returned only if the value of **ServiceManaged** is **true**.
     * @example ALB
     *
     * @var string
     */
    public $serviceId;

    /**
     * @description Indicates whether the instance is managed. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example true
     *
     * @var bool
     */
    public $serviceManaged;

    /**
     * @description The actions that users can perform on the managed instance.
     * >*   This parameter is returned only if the value of **ServiceManaged** is **true**.
     * >*   Users can perform only specific actions on a managed instance.
     * @var serviceManagedInfos[]
     */
    public $serviceManagedInfos;

    /**
     * @description The status of the listener. Valid values:
     *
     *   **configuring**: The listener is being configured.
     *   **init**: The listener is being initialized.
     *   **updating**: The listener is being updated.
     *   **deleting:** The listener is being deleted.
     *
     * @example active
     *
     * @var string
     */
    public $state;

    /**
     * @description The routing type of the listener. Valid values:
     *
     *   **Standard**: intelligent routing.
     *   **CustomRouting**: custom routing.
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
        'acceleratorId'       => 'AcceleratorId',
        'aclType'             => 'AclType',
        'backendPorts'        => 'BackendPorts',
        'certificates'        => 'Certificates',
        'clientAffinity'      => 'ClientAffinity',
        'createTime'          => 'CreateTime',
        'description'         => 'Description',
        'httpVersion'         => 'HttpVersion',
        'idleTimeout'         => 'IdleTimeout',
        'listenerId'          => 'ListenerId',
        'name'                => 'Name',
        'portRanges'          => 'PortRanges',
        'protocol'            => 'Protocol',
        'proxyProtocol'       => 'ProxyProtocol',
        'relatedAcls'         => 'RelatedAcls',
        'requestId'           => 'RequestId',
        'requestTimeout'      => 'RequestTimeout',
        'securityPolicyId'    => 'SecurityPolicyId',
        'serviceId'           => 'ServiceId',
        'serviceManaged'      => 'ServiceManaged',
        'serviceManagedInfos' => 'ServiceManagedInfos',
        'state'               => 'State',
        'type'                => 'Type',
        'XForwardedForConfig' => 'XForwardedForConfig',
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
        if (null !== $this->aclType) {
            $res['AclType'] = $this->aclType;
        }
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
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->httpVersion) {
            $res['HttpVersion'] = $this->httpVersion;
        }
        if (null !== $this->idleTimeout) {
            $res['IdleTimeout'] = $this->idleTimeout;
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
        if (null !== $this->relatedAcls) {
            $res['RelatedAcls'] = [];
            if (null !== $this->relatedAcls && \is_array($this->relatedAcls)) {
                $n = 0;
                foreach ($this->relatedAcls as $item) {
                    $res['RelatedAcls'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->requestTimeout) {
            $res['RequestTimeout'] = $this->requestTimeout;
        }
        if (null !== $this->securityPolicyId) {
            $res['SecurityPolicyId'] = $this->securityPolicyId;
        }
        if (null !== $this->serviceId) {
            $res['ServiceId'] = $this->serviceId;
        }
        if (null !== $this->serviceManaged) {
            $res['ServiceManaged'] = $this->serviceManaged;
        }
        if (null !== $this->serviceManagedInfos) {
            $res['ServiceManagedInfos'] = [];
            if (null !== $this->serviceManagedInfos && \is_array($this->serviceManagedInfos)) {
                $n = 0;
                foreach ($this->serviceManagedInfos as $item) {
                    $res['ServiceManagedInfos'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
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
     * @return DescribeListenerResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AcceleratorId'])) {
            $model->acceleratorId = $map['AcceleratorId'];
        }
        if (isset($map['AclType'])) {
            $model->aclType = $map['AclType'];
        }
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
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['HttpVersion'])) {
            $model->httpVersion = $map['HttpVersion'];
        }
        if (isset($map['IdleTimeout'])) {
            $model->idleTimeout = $map['IdleTimeout'];
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
        if (isset($map['RelatedAcls'])) {
            if (!empty($map['RelatedAcls'])) {
                $model->relatedAcls = [];
                $n                  = 0;
                foreach ($map['RelatedAcls'] as $item) {
                    $model->relatedAcls[$n++] = null !== $item ? relatedAcls::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['RequestTimeout'])) {
            $model->requestTimeout = $map['RequestTimeout'];
        }
        if (isset($map['SecurityPolicyId'])) {
            $model->securityPolicyId = $map['SecurityPolicyId'];
        }
        if (isset($map['ServiceId'])) {
            $model->serviceId = $map['ServiceId'];
        }
        if (isset($map['ServiceManaged'])) {
            $model->serviceManaged = $map['ServiceManaged'];
        }
        if (isset($map['ServiceManagedInfos'])) {
            if (!empty($map['ServiceManagedInfos'])) {
                $model->serviceManagedInfos = [];
                $n                          = 0;
                foreach ($map['ServiceManagedInfos'] as $item) {
                    $model->serviceManagedInfos[$n++] = null !== $item ? serviceManagedInfos::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
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

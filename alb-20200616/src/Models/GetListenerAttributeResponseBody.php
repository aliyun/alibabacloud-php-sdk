<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models;

use AlibabaCloud\SDK\Alb\V20200616\Models\GetListenerAttributeResponseBody\aclConfig;
use AlibabaCloud\SDK\Alb\V20200616\Models\GetListenerAttributeResponseBody\caCertificates;
use AlibabaCloud\SDK\Alb\V20200616\Models\GetListenerAttributeResponseBody\certificates;
use AlibabaCloud\SDK\Alb\V20200616\Models\GetListenerAttributeResponseBody\defaultActions;
use AlibabaCloud\SDK\Alb\V20200616\Models\GetListenerAttributeResponseBody\logConfig;
use AlibabaCloud\SDK\Alb\V20200616\Models\GetListenerAttributeResponseBody\quicConfig;
use AlibabaCloud\SDK\Alb\V20200616\Models\GetListenerAttributeResponseBody\tags;
use AlibabaCloud\SDK\Alb\V20200616\Models\GetListenerAttributeResponseBody\XForwardedForConfig;
use AlibabaCloud\Tea\Model;

class GetListenerAttributeResponseBody extends Model
{
    /**
     * @description The configurations of the access control lists (ACLs).
     *
     * @var aclConfig
     */
    public $aclConfig;

    /**
     * @description A list of default CA certificates.
     *
     * @var caCertificates[]
     */
    public $caCertificates;

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
     * @description A list of certificates.
     *
     * @var certificates[]
     */
    public $certificates;

    /**
     * @description The actions of the default forwarding rule.
     *
     * @var defaultActions[]
     */
    public $defaultActions;

    /**
     * @description Indicates whether GZIP compression is enabled to compress specific types of files. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example true
     *
     * @var bool
     */
    public $gzipEnabled;

    /**
     * @description Indicates whether HTTP/2 is enabled. Valid values:
     *
     *   **true**
     *   **false**
     *
     * > This parameter is available only when you create an HTTPS listener.
     * @example true
     *
     * @var bool
     */
    public $http2Enabled;

    /**
     * @description The timeout period of an idle connection. Unit: seconds.
     *
     * If no requests are received within the specified timeout period, Application Load Balancer (ALB) closes the current connection. When a request is received, ALB establishes a new connection.
     * @example 2
     *
     * @var int
     */
    public $idleTimeout;

    /**
     * @description The name of the listener.
     *
     * @example test
     *
     * @var string
     */
    public $listenerDescription;

    /**
     * @description The ID of the listener.
     *
     * @example lsr-bp1bpn0kn908w4nbw****
     *
     * @var string
     */
    public $listenerId;

    /**
     * @description The frontend port that is used by the ALB instance.
     *
     * @example 80
     *
     * @var int
     */
    public $listenerPort;

    /**
     * @description The listener protocol. Valid values: **HTTP**, **HTTPS**, and **QUIC**.
     *
     * @example HTTP
     *
     * @var string
     */
    public $listenerProtocol;

    /**
     * @description The status of the listener. Valid values:
     *
     *   **Provisioning**
     *   **Running**
     *   **Configuring**
     *   **Stopped**
     *
     * @example Running
     *
     * @var string
     */
    public $listenerStatus;

    /**
     * @description The ALB instance ID.
     *
     * @example lb-bp1o94dp5i6ea****
     *
     * @var string
     */
    public $loadBalancerId;

    /**
     * @description The logging configuration.
     *
     * @var logConfig
     */
    public $logConfig;

    /**
     * @description The configuration information when the listener is associated with a QUIC listener.
     *
     * @var quicConfig
     */
    public $quicConfig;

    /**
     * @description The request ID.
     *
     * @example 365F4154-92F6-4AE4-92F8-7FF34B540710
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The timeout period of a request. Unit: seconds.
     *
     * If no responses are received from the backend server within the specified timeout period, ALB returns an `HTTP 504` error code to the client.
     * @example 34
     *
     * @var int
     */
    public $requestTimeout;

    /**
     * @description The security policy.
     *
     * > This parameter is available only when you create an HTTPS listener.
     * @example tls_cipher_policy_1_1
     *
     * @var string
     */
    public $securityPolicyId;

    /**
     * @description The tags.
     *
     * @var tags[]
     */
    public $tags;

    /**
     * @description The configuration of the XForward headers.
     *
     * @var XForwardedForConfig
     */
    public $XForwardedForConfig;
    protected $_name = [
        'aclConfig'           => 'AclConfig',
        'caCertificates'      => 'CaCertificates',
        'caEnabled'           => 'CaEnabled',
        'certificates'        => 'Certificates',
        'defaultActions'      => 'DefaultActions',
        'gzipEnabled'         => 'GzipEnabled',
        'http2Enabled'        => 'Http2Enabled',
        'idleTimeout'         => 'IdleTimeout',
        'listenerDescription' => 'ListenerDescription',
        'listenerId'          => 'ListenerId',
        'listenerPort'        => 'ListenerPort',
        'listenerProtocol'    => 'ListenerProtocol',
        'listenerStatus'      => 'ListenerStatus',
        'loadBalancerId'      => 'LoadBalancerId',
        'logConfig'           => 'LogConfig',
        'quicConfig'          => 'QuicConfig',
        'requestId'           => 'RequestId',
        'requestTimeout'      => 'RequestTimeout',
        'securityPolicyId'    => 'SecurityPolicyId',
        'tags'                => 'Tags',
        'XForwardedForConfig' => 'XForwardedForConfig',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aclConfig) {
            $res['AclConfig'] = null !== $this->aclConfig ? $this->aclConfig->toMap() : null;
        }
        if (null !== $this->caCertificates) {
            $res['CaCertificates'] = [];
            if (null !== $this->caCertificates && \is_array($this->caCertificates)) {
                $n = 0;
                foreach ($this->caCertificates as $item) {
                    $res['CaCertificates'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->caEnabled) {
            $res['CaEnabled'] = $this->caEnabled;
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
        if (null !== $this->defaultActions) {
            $res['DefaultActions'] = [];
            if (null !== $this->defaultActions && \is_array($this->defaultActions)) {
                $n = 0;
                foreach ($this->defaultActions as $item) {
                    $res['DefaultActions'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->gzipEnabled) {
            $res['GzipEnabled'] = $this->gzipEnabled;
        }
        if (null !== $this->http2Enabled) {
            $res['Http2Enabled'] = $this->http2Enabled;
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
        if (null !== $this->logConfig) {
            $res['LogConfig'] = null !== $this->logConfig ? $this->logConfig->toMap() : null;
        }
        if (null !== $this->quicConfig) {
            $res['QuicConfig'] = null !== $this->quicConfig ? $this->quicConfig->toMap() : null;
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
        if (null !== $this->tags) {
            $res['Tags'] = [];
            if (null !== $this->tags && \is_array($this->tags)) {
                $n = 0;
                foreach ($this->tags as $item) {
                    $res['Tags'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->XForwardedForConfig) {
            $res['XForwardedForConfig'] = null !== $this->XForwardedForConfig ? $this->XForwardedForConfig->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetListenerAttributeResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AclConfig'])) {
            $model->aclConfig = aclConfig::fromMap($map['AclConfig']);
        }
        if (isset($map['CaCertificates'])) {
            if (!empty($map['CaCertificates'])) {
                $model->caCertificates = [];
                $n                     = 0;
                foreach ($map['CaCertificates'] as $item) {
                    $model->caCertificates[$n++] = null !== $item ? caCertificates::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['CaEnabled'])) {
            $model->caEnabled = $map['CaEnabled'];
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
        if (isset($map['DefaultActions'])) {
            if (!empty($map['DefaultActions'])) {
                $model->defaultActions = [];
                $n                     = 0;
                foreach ($map['DefaultActions'] as $item) {
                    $model->defaultActions[$n++] = null !== $item ? defaultActions::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['GzipEnabled'])) {
            $model->gzipEnabled = $map['GzipEnabled'];
        }
        if (isset($map['Http2Enabled'])) {
            $model->http2Enabled = $map['Http2Enabled'];
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
        if (isset($map['LogConfig'])) {
            $model->logConfig = logConfig::fromMap($map['LogConfig']);
        }
        if (isset($map['QuicConfig'])) {
            $model->quicConfig = quicConfig::fromMap($map['QuicConfig']);
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
        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n           = 0;
                foreach ($map['Tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? tags::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['XForwardedForConfig'])) {
            $model->XForwardedForConfig = XForwardedForConfig::fromMap($map['XForwardedForConfig']);
        }

        return $model;
    }
}

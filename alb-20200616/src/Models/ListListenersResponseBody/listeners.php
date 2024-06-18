<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models\ListListenersResponseBody;

use AlibabaCloud\SDK\Alb\V20200616\Models\ListListenersResponseBody\listeners\defaultActions;
use AlibabaCloud\SDK\Alb\V20200616\Models\ListListenersResponseBody\listeners\logConfig;
use AlibabaCloud\SDK\Alb\V20200616\Models\ListListenersResponseBody\listeners\quicConfig;
use AlibabaCloud\SDK\Alb\V20200616\Models\ListListenersResponseBody\listeners\tags;
use AlibabaCloud\SDK\Alb\V20200616\Models\ListListenersResponseBody\listeners\XForwardedForConfig;
use AlibabaCloud\Tea\Model;

class listeners extends Model
{
    /**
     * @description The default actions in the forwarding rules.
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
     * @example false
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
     * >  Only HTTPS listeners support this parameter.
     * @example false
     *
     * @var bool
     */
    public $http2Enabled;

    /**
     * @description The timeout period of an idle connection. Unit: seconds. Valid values: **1 to 60**.
     *
     * If no request is received within the specified timeout period, ALB closes the connection. ALB establishes the connection again when a new connection request is received.
     * @example 3
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
     * @description The listener ID.
     *
     * @example lsr-bp1bpn0kn908w4nbw****
     *
     * @var string
     */
    public $listenerId;

    /**
     * @description The frontend port that is used by the ALB instance. Valid values: **1 to 65535**.
     *
     * @example 80
     *
     * @var int
     */
    public $listenerPort;

    /**
     * @description The listener protocol of the instance. Valid values:
     *
     *   **HTTP**
     *   **HTTPS**
     *   **QUIC**
     *
     * @example HTTP
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
     *   **Stopped**: The listener is disabled.
     *
     * @example Running
     *
     * @var string
     */
    public $listenerStatus;

    /**
     * @description The ALB instance ID.
     *
     * @example lb-bp1b6c719dfa08ex*****
     *
     * @var string
     */
    public $loadBalancerId;

    /**
     * @description The configuration of logs.
     *
     * @var logConfig
     */
    public $logConfig;

    /**
     * @description The configurations of the QUIC listener associated with the ALB instance.
     *
     * @var quicConfig
     */
    public $quicConfig;

    /**
     * @description The timeout period of a request. Unit: seconds. Valid values: **1 to 180**.
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
     * >  Only HTTPS listeners support this parameter.
     * @example tls_cipher_policy_1_1
     *
     * @var string
     */
    public $securityPolicyId;

    /**
     * @description The tags of the dataset.
     *
     * @var tags[]
     */
    public $tags;

    /**
     * @description The configuration of the `XForward` header.
     *
     * @var XForwardedForConfig
     */
    public $XForwardedForConfig;
    protected $_name = [
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
     * @return listeners
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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

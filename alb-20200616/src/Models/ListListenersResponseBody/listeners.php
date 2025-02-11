<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models\ListListenersResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Alb\V20200616\Models\ListListenersResponseBody\listeners\defaultActions;
use AlibabaCloud\SDK\Alb\V20200616\Models\ListListenersResponseBody\listeners\logConfig;
use AlibabaCloud\SDK\Alb\V20200616\Models\ListListenersResponseBody\listeners\quicConfig;
use AlibabaCloud\SDK\Alb\V20200616\Models\ListListenersResponseBody\listeners\tags;
use AlibabaCloud\SDK\Alb\V20200616\Models\ListListenersResponseBody\listeners\XForwardedForConfig;

class listeners extends Model
{
    /**
     * @var defaultActions[]
     */
    public $defaultActions;
    /**
     * @var bool
     */
    public $gzipEnabled;
    /**
     * @var bool
     */
    public $http2Enabled;
    /**
     * @var int
     */
    public $idleTimeout;
    /**
     * @var string
     */
    public $listenerDescription;
    /**
     * @var string
     */
    public $listenerId;
    /**
     * @var int
     */
    public $listenerPort;
    /**
     * @var string
     */
    public $listenerProtocol;
    /**
     * @var string
     */
    public $listenerStatus;
    /**
     * @var string
     */
    public $loadBalancerId;
    /**
     * @var logConfig
     */
    public $logConfig;
    /**
     * @var quicConfig
     */
    public $quicConfig;
    /**
     * @var int
     */
    public $requestTimeout;
    /**
     * @var string
     */
    public $securityPolicyId;
    /**
     * @var tags[]
     */
    public $tags;
    /**
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
        if (\is_array($this->defaultActions)) {
            Model::validateArray($this->defaultActions);
        }
        if (null !== $this->logConfig) {
            $this->logConfig->validate();
        }
        if (null !== $this->quicConfig) {
            $this->quicConfig->validate();
        }
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        if (null !== $this->XForwardedForConfig) {
            $this->XForwardedForConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->defaultActions) {
            if (\is_array($this->defaultActions)) {
                $res['DefaultActions'] = [];
                $n1                    = 0;
                foreach ($this->defaultActions as $item1) {
                    $res['DefaultActions'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
            $res['LogConfig'] = null !== $this->logConfig ? $this->logConfig->toArray($noStream) : $this->logConfig;
        }

        if (null !== $this->quicConfig) {
            $res['QuicConfig'] = null !== $this->quicConfig ? $this->quicConfig->toArray($noStream) : $this->quicConfig;
        }

        if (null !== $this->requestTimeout) {
            $res['RequestTimeout'] = $this->requestTimeout;
        }

        if (null !== $this->securityPolicyId) {
            $res['SecurityPolicyId'] = $this->securityPolicyId;
        }

        if (null !== $this->tags) {
            if (\is_array($this->tags)) {
                $res['Tags'] = [];
                $n1          = 0;
                foreach ($this->tags as $item1) {
                    $res['Tags'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->XForwardedForConfig) {
            $res['XForwardedForConfig'] = null !== $this->XForwardedForConfig ? $this->XForwardedForConfig->toArray($noStream) : $this->XForwardedForConfig;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DefaultActions'])) {
            if (!empty($map['DefaultActions'])) {
                $model->defaultActions = [];
                $n1                    = 0;
                foreach ($map['DefaultActions'] as $item1) {
                    $model->defaultActions[$n1++] = defaultActions::fromMap($item1);
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
                $n1          = 0;
                foreach ($map['Tags'] as $item1) {
                    $model->tags[$n1++] = tags::fromMap($item1);
                }
            }
        }

        if (isset($map['XForwardedForConfig'])) {
            $model->XForwardedForConfig = XForwardedForConfig::fromMap($map['XForwardedForConfig']);
        }

        return $model;
    }
}

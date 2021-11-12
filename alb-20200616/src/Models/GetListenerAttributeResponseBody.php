<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models;

use AlibabaCloud\SDK\Alb\V20200616\Models\GetListenerAttributeResponseBody\aclConfig;
use AlibabaCloud\SDK\Alb\V20200616\Models\GetListenerAttributeResponseBody\certificates;
use AlibabaCloud\SDK\Alb\V20200616\Models\GetListenerAttributeResponseBody\defaultActions;
use AlibabaCloud\SDK\Alb\V20200616\Models\GetListenerAttributeResponseBody\logConfig;
use AlibabaCloud\SDK\Alb\V20200616\Models\GetListenerAttributeResponseBody\quicConfig;
use AlibabaCloud\SDK\Alb\V20200616\Models\GetListenerAttributeResponseBody\XForwardedForConfig;
use AlibabaCloud\Tea\Model;

class GetListenerAttributeResponseBody extends Model
{
    /**
     * @description ACL相关配置信息
     *
     * @var aclConfig
     */
    public $aclConfig;

    /**
     * @description 是否开启双向认证
     *
     * @var bool
     */
    public $caEnabled;

    /**
     * @description 监听默认服务器证书列表，N当前取值范围为1
     *
     * @var certificates[]
     */
    public $certificates;

    /**
     * @description 默认动作
     *
     * @var defaultActions[]
     */
    public $defaultActions;

    /**
     * @description 是否开启Gzip压缩
     *
     * @var bool
     */
    public $gzipEnabled;

    /**
     * @description 是否开启HTTP/2特性
     *
     * @var bool
     */
    public $http2Enabled;

    /**
     * @description 连接空闲超时时间
     *
     * @var int
     */
    public $idleTimeout;

    /**
     * @description 监听描述
     *
     * @var string
     */
    public $listenerDescription;

    /**
     * @description 监听标识
     *
     * @var string
     */
    public $listenerId;

    /**
     * @description 监听端口
     *
     * @var int
     */
    public $listenerPort;

    /**
     * @description 监听协议
     *
     * @var string
     */
    public $listenerProtocol;

    /**
     * @description 监听状态
     *
     * @var string
     */
    public $listenerStatus;

    /**
     * @description 负载均衡标识
     *
     * @var string
     */
    public $loadBalancerId;

    /**
     * @description 监听访问日志相关配置
     *
     * @var logConfig
     */
    public $logConfig;

    /**
     * @description HTTPS启用QUIC时相关属性
     *
     * @var quicConfig
     */
    public $quicConfig;

    /**
     * @description Id of the request
     *
     * @var string
     */
    public $requestId;

    /**
     * @description 请求超时时间
     *
     * @var int
     */
    public $requestTimeout;

    /**
     * @description 安全策略
     *
     * @var string
     */
    public $securityPolicyId;

    /**
     * @description XForward字段相关的配置
     *
     * @var XForwardedForConfig
     */
    public $XForwardedForConfig;
    protected $_name = [
        'aclConfig'           => 'AclConfig',
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
        if (isset($map['XForwardedForConfig'])) {
            $model->XForwardedForConfig = XForwardedForConfig::fromMap($map['XForwardedForConfig']);
        }

        return $model;
    }
}

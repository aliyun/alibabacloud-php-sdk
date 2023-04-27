<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models\CreateDomainRequest;

use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\CreateDomainRequest\redirect\requestHeaders;
use AlibabaCloud\Tea\Model;

class redirect extends Model
{
    /**
     * @description $.parameters[3].schema.properties.FocusHttps.description
     *
     * @var string[]
     */
    public $backends;

    /**
     * @description 是否开启公共云容灾。取值：
     *
     * - **true**：表示开启公共云容灾。
     *
     * - **false**（默认）：表示不开启公共云容灾。
     * @example true
     *
     * @var bool
     */
    public $cnameEnabled;

    /**
     * @description $.parameters[3].schema.properties.XffHeaders.example
     *
     * @example 120
     *
     * @var int
     */
    public $connectTimeout;

    /**
     * @description $.parameters[3].schema.properties.XffHeaderMode.description
     *
     * @example true
     *
     * @var bool
     */
    public $focusHttpBackend;

    /**
     * @description $.parameters[3].schema.properties.IPv6Enabled.example
     *
     * @example true
     *
     * @var bool
     */
    public $keepalive;

    /**
     * @description $.parameters[3].schema.properties.ProtectionResource.description
     *
     * @example 1000
     *
     * @var int
     */
    public $keepaliveRequests;

    /**
     * @description $.parameters[3].schema.properties.ProtectionResource.example
     *
     * @example 15
     *
     * @var int
     */
    public $keepaliveTimeout;

    /**
     * @description $.parameters[3].schema.properties.FocusHttps.enumValueTitles
     *
     * @example roundRobin
     *
     * @var string
     */
    public $loadbalance;

    /**
     * @description $.parameters[3].schema.properties.XffHeaders.enumValueTitles
     *
     * @example 200
     *
     * @var int
     */
    public $readTimeout;

    /**
     * @description $.parameters[3].schema.properties.XffHeaders.items.description
     *
     * @var requestHeaders[]
     */
    public $requestHeaders;

    /**
     * @description $.parameters[3].schema.properties.IPv6Enabled.enumValueTitles
     *
     * @example true
     *
     * @var bool
     */
    public $retry;

    /**
     * @description 混合云转发规则。使用JSON数组转化的字符串格式表示。JSON数组中的每个元素是一个结构体，包含以下字段：
     * - **rs**：Array类型 | 表示回源IP地址或者回源CNAME列表
     *
     * - **location**：String类型 | 表示防护节点名称
     *
     * - **locationId**：Long类型 | 表示防护节点ID
     * @example [
     * ]
     * @var string
     */
    public $routingRules;

    /**
     * @description $.parameters[3].schema.properties.XffHeaderMode.example
     *
     * @example true
     *
     * @var bool
     */
    public $sniEnabled;

    /**
     * @description $.parameters[3].schema.properties.XffHeaderMode.enumValueTitles
     *
     * @example www.aliyundoc.com
     *
     * @var string
     */
    public $sniHost;

    /**
     * @description $.parameters[3].schema.properties.IPv6Enabled.description
     *
     * @example 200
     *
     * @var int
     */
    public $writeTimeout;
    protected $_name = [
        'backends'          => 'Backends',
        'cnameEnabled'      => 'CnameEnabled',
        'connectTimeout'    => 'ConnectTimeout',
        'focusHttpBackend'  => 'FocusHttpBackend',
        'keepalive'         => 'Keepalive',
        'keepaliveRequests' => 'KeepaliveRequests',
        'keepaliveTimeout'  => 'KeepaliveTimeout',
        'loadbalance'       => 'Loadbalance',
        'readTimeout'       => 'ReadTimeout',
        'requestHeaders'    => 'RequestHeaders',
        'retry'             => 'Retry',
        'routingRules'      => 'RoutingRules',
        'sniEnabled'        => 'SniEnabled',
        'sniHost'           => 'SniHost',
        'writeTimeout'      => 'WriteTimeout',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->backends) {
            $res['Backends'] = $this->backends;
        }
        if (null !== $this->cnameEnabled) {
            $res['CnameEnabled'] = $this->cnameEnabled;
        }
        if (null !== $this->connectTimeout) {
            $res['ConnectTimeout'] = $this->connectTimeout;
        }
        if (null !== $this->focusHttpBackend) {
            $res['FocusHttpBackend'] = $this->focusHttpBackend;
        }
        if (null !== $this->keepalive) {
            $res['Keepalive'] = $this->keepalive;
        }
        if (null !== $this->keepaliveRequests) {
            $res['KeepaliveRequests'] = $this->keepaliveRequests;
        }
        if (null !== $this->keepaliveTimeout) {
            $res['KeepaliveTimeout'] = $this->keepaliveTimeout;
        }
        if (null !== $this->loadbalance) {
            $res['Loadbalance'] = $this->loadbalance;
        }
        if (null !== $this->readTimeout) {
            $res['ReadTimeout'] = $this->readTimeout;
        }
        if (null !== $this->requestHeaders) {
            $res['RequestHeaders'] = [];
            if (null !== $this->requestHeaders && \is_array($this->requestHeaders)) {
                $n = 0;
                foreach ($this->requestHeaders as $item) {
                    $res['RequestHeaders'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->retry) {
            $res['Retry'] = $this->retry;
        }
        if (null !== $this->routingRules) {
            $res['RoutingRules'] = $this->routingRules;
        }
        if (null !== $this->sniEnabled) {
            $res['SniEnabled'] = $this->sniEnabled;
        }
        if (null !== $this->sniHost) {
            $res['SniHost'] = $this->sniHost;
        }
        if (null !== $this->writeTimeout) {
            $res['WriteTimeout'] = $this->writeTimeout;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return redirect
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Backends'])) {
            if (!empty($map['Backends'])) {
                $model->backends = $map['Backends'];
            }
        }
        if (isset($map['CnameEnabled'])) {
            $model->cnameEnabled = $map['CnameEnabled'];
        }
        if (isset($map['ConnectTimeout'])) {
            $model->connectTimeout = $map['ConnectTimeout'];
        }
        if (isset($map['FocusHttpBackend'])) {
            $model->focusHttpBackend = $map['FocusHttpBackend'];
        }
        if (isset($map['Keepalive'])) {
            $model->keepalive = $map['Keepalive'];
        }
        if (isset($map['KeepaliveRequests'])) {
            $model->keepaliveRequests = $map['KeepaliveRequests'];
        }
        if (isset($map['KeepaliveTimeout'])) {
            $model->keepaliveTimeout = $map['KeepaliveTimeout'];
        }
        if (isset($map['Loadbalance'])) {
            $model->loadbalance = $map['Loadbalance'];
        }
        if (isset($map['ReadTimeout'])) {
            $model->readTimeout = $map['ReadTimeout'];
        }
        if (isset($map['RequestHeaders'])) {
            if (!empty($map['RequestHeaders'])) {
                $model->requestHeaders = [];
                $n                     = 0;
                foreach ($map['RequestHeaders'] as $item) {
                    $model->requestHeaders[$n++] = null !== $item ? requestHeaders::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Retry'])) {
            $model->retry = $map['Retry'];
        }
        if (isset($map['RoutingRules'])) {
            $model->routingRules = $map['RoutingRules'];
        }
        if (isset($map['SniEnabled'])) {
            $model->sniEnabled = $map['SniEnabled'];
        }
        if (isset($map['SniHost'])) {
            $model->sniHost = $map['SniHost'];
        }
        if (isset($map['WriteTimeout'])) {
            $model->writeTimeout = $map['WriteTimeout'];
        }

        return $model;
    }
}

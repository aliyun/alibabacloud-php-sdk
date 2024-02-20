<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeDomainDetailResponseBody;

use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeDomainDetailResponseBody\redirect\backends;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeDomainDetailResponseBody\redirect\requestHeaders;
use AlibabaCloud\Tea\Model;

class redirect extends Model
{
    /**
     * @description An array of addresses of origin servers.
     *
     * @var backends[]
     */
    public $backends;

    /**
     * @description The timeout period of the connection. Unit: seconds. Valid values: 5 to 120.
     *
     * @example 120
     *
     * @var int
     */
    public $connectTimeout;

    /**
     * @description Indicates whether HTTPS to HTTP redirection is enabled for back-to-origin requests of the domain name. Valid values:
     *
     *   **true:** HTTPS to HTTP redirection for back-to-origin requests of the domain name is enabled.
     *   **false:** HTTPS to HTTP redirection for back-to-origin requests of the domain name is disabled.
     *
     * @example true
     *
     * @var bool
     */
    public $focusHttpBackend;

    /**
     * @description Indicates whether the persistent connection feature is enabled. Valid values:
     *
     *   **true:** The persistent connection feature is enabled. This is the default value.
     *   **false:** The persistent connection feature is disabled.
     *
     * @example true
     *
     * @var bool
     */
    public $keepalive;

    /**
     * @description The number of reused persistent connections. Valid values: 60 to 1000.
     *
     * >  This parameter specifies the number of reused persistent connections when you enable the persistent connection feature.
     * @example 1000
     *
     * @var int
     */
    public $keepaliveRequests;

    /**
     * @description The timeout period of persistent connections that are in the Idle state. Valid values: 1 to 60. Default value: 15. Unit: seconds.
     *
     * >  This parameter specifies the period of time during which a reused persistent connection is allowed to remain in the Idle state before the persistent connection is released.
     * @example 15
     *
     * @var int
     */
    public $keepaliveTimeout;

    /**
     * @description The load balancing algorithm that is used when WAF forwards requests to the origin server. Valid values:
     *
     *   **ip_hash:** the IP hash algorithm.
     *   **roundRobin:** the round-robin algorithm.
     *   **leastTime:** the least response time algorithm.
     *
     * @example iphash
     *
     * @var string
     */
    public $loadbalance;

    /**
     * @description The read timeout period. Unit: seconds. Valid values: 5 to 1800.
     *
     * @example 200
     *
     * @var int
     */
    public $readTimeout;

    /**
     * @description An array of key-value pairs that are used to mark the requests that pass through the WAF instance.
     *
     * @var requestHeaders[]
     */
    public $requestHeaders;

    /**
     * @description Indicates whether WAF retries to forward requests when requests fail to be forwarded to the origin server. Valid values:
     *
     *   **true:** WAF retries to forward requests. This is the default value.
     *   **false:** WAF does not retry to forward requests.
     *
     * @example true
     *
     * @var bool
     */
    public $retry;

    /**
     * @description Indicates whether origin Server Name Indication (SNI) is enabled. Valid values:
     *
     *   **true:** Origin SNI is enabled.
     *   **false:** Origin SNI is disabled. This is the default value.
     *
     * @example true
     *
     * @var bool
     */
    public $sniEnabled;

    /**
     * @description The value of the custom SNI field.
     *
     * @example www.aliyundoc.com
     *
     * @var string
     */
    public $sniHost;

    /**
     * @description The write timeout period. Unit: seconds. Valid values: 5 to 1800.
     *
     * @example 200
     *
     * @var int
     */
    public $writeTimeout;

    /**
     * @var bool
     */
    public $xffProto;
    protected $_name = [
        'backends'          => 'Backends',
        'connectTimeout'    => 'ConnectTimeout',
        'focusHttpBackend'  => 'FocusHttpBackend',
        'keepalive'         => 'Keepalive',
        'keepaliveRequests' => 'KeepaliveRequests',
        'keepaliveTimeout'  => 'KeepaliveTimeout',
        'loadbalance'       => 'Loadbalance',
        'readTimeout'       => 'ReadTimeout',
        'requestHeaders'    => 'RequestHeaders',
        'retry'             => 'Retry',
        'sniEnabled'        => 'SniEnabled',
        'sniHost'           => 'SniHost',
        'writeTimeout'      => 'WriteTimeout',
        'xffProto'          => 'XffProto',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->backends) {
            $res['Backends'] = [];
            if (null !== $this->backends && \is_array($this->backends)) {
                $n = 0;
                foreach ($this->backends as $item) {
                    $res['Backends'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (null !== $this->sniEnabled) {
            $res['SniEnabled'] = $this->sniEnabled;
        }
        if (null !== $this->sniHost) {
            $res['SniHost'] = $this->sniHost;
        }
        if (null !== $this->writeTimeout) {
            $res['WriteTimeout'] = $this->writeTimeout;
        }
        if (null !== $this->xffProto) {
            $res['XffProto'] = $this->xffProto;
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
                $model->backends = [];
                $n               = 0;
                foreach ($map['Backends'] as $item) {
                    $model->backends[$n++] = null !== $item ? backends::fromMap($item) : $item;
                }
            }
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
        if (isset($map['SniEnabled'])) {
            $model->sniEnabled = $map['SniEnabled'];
        }
        if (isset($map['SniHost'])) {
            $model->sniHost = $map['SniHost'];
        }
        if (isset($map['WriteTimeout'])) {
            $model->writeTimeout = $map['WriteTimeout'];
        }
        if (isset($map['XffProto'])) {
            $model->xffProto = $map['XffProto'];
        }

        return $model;
    }
}

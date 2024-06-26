<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models\CreateDomainRequest;

use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\CreateDomainRequest\redirect\requestHeaders;
use AlibabaCloud\Tea\Model;

class redirect extends Model
{
    /**
     * @description The IP addresses or domain names of the origin server.
     *
     * @var string[]
     */
    public $backends;

    /**
     * @description Specifies whether to enable the public cloud disaster recovery feature. Valid values:
     *
     *   **true**
     *   **false** (default)
     *
     * @example true
     *
     * @var bool
     */
    public $cnameEnabled;

    /**
     * @description The timeout period for connections. Unit: seconds. Valid values: 1 to 3600.
     *
     * @example 120
     *
     * @var int
     */
    public $connectTimeout;

    /**
     * @description Specifies whether to enable HTTPS to HTTP redirection for back-to-origin requests. This parameter is available only if you specify **HttpsPorts**. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example true
     *
     * @var bool
     */
    public $focusHttpBackend;

    /**
     * @description Specifies whether to enable the persistent connection feature. Valid values:
     *
     *   **true** (default)
     *   **false**
     *
     * @example true
     *
     * @var bool
     */
    public $keepalive;

    /**
     * @description The number of reused persistent connections. Valid values: 60 to 1000.
     *
     * >  This parameter specifies the number of reused persistent connections after you enable the persistent connection feature.
     * @example 1000
     *
     * @var int
     */
    public $keepaliveRequests;

    /**
     * @description The timeout period for idle persistent connections. Valid values: 1 to 60. Default value: 15. Unit: seconds.
     *
     * >  This parameter specifies the time for which a reused persistent connection can remain in the Idle state before the persistent connection is closed.
     * @example 15
     *
     * @var int
     */
    public $keepaliveTimeout;

    /**
     * @description The load balancing algorithm that you want to use to forward requests to the origin server. Valid values:
     *
     *   **iphash**
     *   **roundRobin**
     *   **leastTime** You can set the parameter to this value only if you set **ProtectionResource** to **gslb**.
     *
     * This parameter is required.
     * @example roundRobin
     *
     * @var string
     */
    public $loadbalance;

    /**
     * @description The timeout period for read connections. Unit: seconds. Valid values: 1 to 3600.
     *
     * @example 200
     *
     * @var int
     */
    public $readTimeout;

    /**
     * @description The custom header field that you want to use to label requests that are processed by WAF.
     *
     * When a request passes through WAF, the custom header field is automatically used to label the request. This way, the backend service can identify requests that are processed by WAF.
     * @var requestHeaders[]
     */
    public $requestHeaders;

    /**
     * @description Specifies whether WAF retries forwarding requests to the origin server when the requests fail to be forwarded to the origin server. Valid values:
     *
     *   **true** (default)
     *   **false**
     *
     * @example true
     *
     * @var bool
     */
    public $retry;

    /**
     * @description The forwarding rules that you want to configure for the domain name that you want to add to WAF in hybrid cloud mode. This parameter is a string that consists of JSON arrays. Each element in a JSON array is a JSON struct that contains the following fields:
     *
     *   **rs**: the back-to-origin IP addresses or CNAMEs. The value must be of the ARRAY type.
     *   **location**: the name of the protection node. The value must be of the STRING type.
     *   **locationId**: the ID of the protection node. The value must be of the LONG type.
     *
     * @example [
     * ]
     * @var string
     */
    public $routingRules;

    /**
     * @description Specifies whether to enable origin Server Name Indication (SNI). This parameter is available only if you specify **HttpsPorts**. Valid values:
     *
     *   **true**
     *   **false** (default)
     *
     * @example true
     *
     * @var bool
     */
    public $sniEnabled;

    /**
     * @description The value of the SNI field. If you do not specify this parameter, the value of the **Host** field is automatically used. This parameter is optional. If you want WAF to use an SNI field value that is different from the Host field value in back-to-origin requests, you can specify a custom value for the SNI field.
     *
     * >  This parameter is required only if you set **SniEnabled** to **true**.
     * @example www.aliyundoc.com
     *
     * @var string
     */
    public $sniHost;

    /**
     * @description The timeout period for write connections. Unit: seconds. Valid values: 1 to 3600.
     *
     * @example 200
     *
     * @var int
     */
    public $writeTimeout;

    /**
     * @description Specifies whether to use X-Forward-For-Proto to pass the protocol used by WAF to forward requests to the origin server. Valid values:
     *
     *   **true** (default)
     *   **false**
     *
     * @example true
     *
     * @var bool
     */
    public $xffProto;
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
        'xffProto'          => 'XffProto',
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
        if (isset($map['XffProto'])) {
            $model->xffProto = $map['XffProto'];
        }

        return $model;
    }
}

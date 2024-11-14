<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models\CreateCloudResourceRequest;

use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\CreateCloudResourceRequest\redirect\requestHeaders;
use AlibabaCloud\Tea\Model;

class redirect extends Model
{
    /**
     * @description Specifies whether to enable the persistent connection feature. Valid values:
     *
     *   **true** (default)
     *   **false:**
     *
     * @example true
     *
     * @var bool
     */
    public $keepalive;

    /**
     * @description The number of requests that reuse persistent connections. Valid values: 60 to 1000.
     *
     * >  This parameter specifies the number of requests that can reuse persistent connections after you enable the persistent connection feature.
     * @example 1000
     *
     * @var int
     */
    public $keepaliveRequests;

    /**
     * @description The timeout period for idle persistent connections. Valid values: 10 to 3600. Default value: 3600. Unit: seconds.
     *
     * >  If no new requests are initiated over the idle persistent connection within the specified timeout period, the connection is closed
     * @example 15
     *
     * @var int
     */
    public $keepaliveTimeout;

    /**
     * @description The timeout period for read connections. Unit: seconds. Valid values: 1 to 3600.
     *
     * @example 1
     *
     * @var int
     */
    public $readTimeout;

    /**
     * @description The custom header fields. Specify the value in the [**{"k":"*key*","v":"*value*"}**] format. ***key*** specifies the key of the custom header field. ***value*** specifies the value of the custom header field.
     *
     * >  If the request contains the custom header field, WAF overwrites the original value of the field with the specified value.
     * @var requestHeaders[]
     */
    public $requestHeaders;

    /**
     * @description The timeout period for write connections. Unit: seconds. Valid values: 1 to 3600.
     *
     * @example 1
     *
     * @var int
     */
    public $writeTimeout;

    /**
     * @description The method that WAF uses to obtain the originating IP address of a client. Valid values:
     *
     *   **0**: No Layer 7 proxies are deployed in front of WAF.
     *   **1**: WAF reads the first value of the X-Forwarded-For (XFF) header field as the originating IP address of the client.
     *   **2**: WAF reads the value of a custom header field as the originating IP address of the client.
     *
     * @example 1
     *
     * @var int
     */
    public $xffHeaderMode;

    /**
     * @description The custom header fields that are used to obtain the originating IP address of a client. Specify the value in the **["header1","header2",...]** format.
     *
     * >  This parameter is required only if you set **XffHeaderMode** to 2.
     * @var string[]
     */
    public $xffHeaders;

    /**
     * @description Specifies whether to use the X-Forward-For-Proto header to identify the protocol used by WAF to forward requests to the origin server. Valid values:
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
        'keepalive'         => 'Keepalive',
        'keepaliveRequests' => 'KeepaliveRequests',
        'keepaliveTimeout'  => 'KeepaliveTimeout',
        'readTimeout'       => 'ReadTimeout',
        'requestHeaders'    => 'RequestHeaders',
        'writeTimeout'      => 'WriteTimeout',
        'xffHeaderMode'     => 'XffHeaderMode',
        'xffHeaders'        => 'XffHeaders',
        'xffProto'          => 'XffProto',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->keepalive) {
            $res['Keepalive'] = $this->keepalive;
        }
        if (null !== $this->keepaliveRequests) {
            $res['KeepaliveRequests'] = $this->keepaliveRequests;
        }
        if (null !== $this->keepaliveTimeout) {
            $res['KeepaliveTimeout'] = $this->keepaliveTimeout;
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
        if (null !== $this->writeTimeout) {
            $res['WriteTimeout'] = $this->writeTimeout;
        }
        if (null !== $this->xffHeaderMode) {
            $res['XffHeaderMode'] = $this->xffHeaderMode;
        }
        if (null !== $this->xffHeaders) {
            $res['XffHeaders'] = $this->xffHeaders;
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
        if (isset($map['Keepalive'])) {
            $model->keepalive = $map['Keepalive'];
        }
        if (isset($map['KeepaliveRequests'])) {
            $model->keepaliveRequests = $map['KeepaliveRequests'];
        }
        if (isset($map['KeepaliveTimeout'])) {
            $model->keepaliveTimeout = $map['KeepaliveTimeout'];
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
        if (isset($map['WriteTimeout'])) {
            $model->writeTimeout = $map['WriteTimeout'];
        }
        if (isset($map['XffHeaderMode'])) {
            $model->xffHeaderMode = $map['XffHeaderMode'];
        }
        if (isset($map['XffHeaders'])) {
            if (!empty($map['XffHeaders'])) {
                $model->xffHeaders = $map['XffHeaders'];
            }
        }
        if (isset($map['XffProto'])) {
            $model->xffProto = $map['XffProto'];
        }

        return $model;
    }
}

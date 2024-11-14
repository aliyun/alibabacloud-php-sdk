<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeCloudResourceAccessPortDetailsResponseBody;

use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeCloudResourceAccessPortDetailsResponseBody\accessPortDetails\certificates;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeCloudResourceAccessPortDetailsResponseBody\accessPortDetails\logHeaders;
use AlibabaCloud\Tea\Model;

class accessPortDetails extends Model
{
    /**
     * @description The certificates that are associated with the ports of cloud services.
     *
     * @var certificates[]
     */
    public $certificates;

    /**
     * @description The type of the cipher suites. Valid values:
     *
     *   **1**: all cipher suites.
     *   **2**: strong cipher suites.
     *   **99**: custom cipher suites.
     *
     * @example 1
     *
     * @var int
     */
    public $cipherSuite;

    /**
     * @description The custom cipher suites that you want to add. This parameter is available only if you set **CipherSuite** to **99**.
     *
     * @var string[]
     */
    public $customCiphers;

    /**
     * @description Indicates whether to support TLS 1.3. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example true
     *
     * @var bool
     */
    public $enableTLSv3;

    /**
     * @description Indicates whether to enable HTTP/2. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example True
     *
     * @var bool
     */
    public $http2Enabled;

    /**
     * @description Indicates whether to enable the persistent connection feature. Valid values:
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
     * @description The number of reused persistent connections. Valid values: 60 to 1000.
     *
     * >  This parameter specifies the number of requests that reuse persistent connections after you enable the persistent connection feature.
     * @example 1000
     *
     * @var int
     */
    public $keepaliveRequests;

    /**
     * @description The timeout period for idle persistent connections. Valid values: 10 to 3600. Default value: 15. Unit: seconds.
     *
     * >  If no new requests are initiated over the idle persistent connection within the specified timeout period, the connection is closed.
     * @example 10
     *
     * @var int
     */
    public $keepaliveTimeout;

    /**
     * @description The custom header field that you want to use to label requests that are processed by WAF.
     *
     * >  This parameter is returned only when the traffic marking feature is enabled for the domain name.
     * @var logHeaders[]
     */
    public $logHeaders;

    /**
     * @description The ID of the Alibaba Cloud account to which the resource belongs.
     *
     * @example 123
     *
     * @var string
     */
    public $ownerUserId;

    /**
     * @description The port of the cloud service that is added to WAF.
     *
     * @example 443
     *
     * @var int
     */
    public $port;

    /**
     * @description The type of the protocol. Valid values:
     *
     *   **http**
     *   **https**
     *
     * @example https
     *
     * @var string
     */
    public $protocol;

    /**
     * @description The timeout period for read connections. Unit: seconds. Valid values: 1 to 3600.
     *
     * @example 5
     *
     * @var int
     */
    public $readTimeout;

    /**
     * @description The status of the domain name. Valid values:
     *
     *   **1**: indicates that the port is available.
     *   **2**: indicates that the port is being created.
     *   **3**: indicates that the port is being modified.
     *   **4**: indicates that the port is being released.
     *
     * @example 1
     *
     * @var int
     */
    public $status;

    /**
     * @description The version of the Transport Layer Security (TLS) protocol. Valid values:
     *
     *   **tlsv1**
     *   **tlsv1.1**
     *   **tlsv1.2**
     *
     * @example tlsv1
     *
     * @var string
     */
    public $TLSVersion;

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
     * @example 0
     *
     * @var int
     */
    public $xffHeaderMode;

    /**
     * @description The custom header field that is used to obtain the originating IP address of a client. Specify the value in the ["header1","header2",...] format.
     *
     * >  This parameter is required only if you set **XffHeaderMode** to 2.
     * @var string[]
     */
    public $xffHeaders;

    /**
     * @description Indicates whether to use the X-Forward-For-Proto header to identify the protocol used by WAF to forward requests to the origin server. Valid values:
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
        'certificates'      => 'Certificates',
        'cipherSuite'       => 'CipherSuite',
        'customCiphers'     => 'CustomCiphers',
        'enableTLSv3'       => 'EnableTLSv3',
        'http2Enabled'      => 'Http2Enabled',
        'keepalive'         => 'Keepalive',
        'keepaliveRequests' => 'KeepaliveRequests',
        'keepaliveTimeout'  => 'KeepaliveTimeout',
        'logHeaders'        => 'LogHeaders',
        'ownerUserId'       => 'OwnerUserId',
        'port'              => 'Port',
        'protocol'          => 'Protocol',
        'readTimeout'       => 'ReadTimeout',
        'status'            => 'Status',
        'TLSVersion'        => 'TLSVersion',
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
        if (null !== $this->certificates) {
            $res['Certificates'] = [];
            if (null !== $this->certificates && \is_array($this->certificates)) {
                $n = 0;
                foreach ($this->certificates as $item) {
                    $res['Certificates'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->cipherSuite) {
            $res['CipherSuite'] = $this->cipherSuite;
        }
        if (null !== $this->customCiphers) {
            $res['CustomCiphers'] = $this->customCiphers;
        }
        if (null !== $this->enableTLSv3) {
            $res['EnableTLSv3'] = $this->enableTLSv3;
        }
        if (null !== $this->http2Enabled) {
            $res['Http2Enabled'] = $this->http2Enabled;
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
        if (null !== $this->logHeaders) {
            $res['LogHeaders'] = [];
            if (null !== $this->logHeaders && \is_array($this->logHeaders)) {
                $n = 0;
                foreach ($this->logHeaders as $item) {
                    $res['LogHeaders'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->ownerUserId) {
            $res['OwnerUserId'] = $this->ownerUserId;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->protocol) {
            $res['Protocol'] = $this->protocol;
        }
        if (null !== $this->readTimeout) {
            $res['ReadTimeout'] = $this->readTimeout;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->TLSVersion) {
            $res['TLSVersion'] = $this->TLSVersion;
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
     * @return accessPortDetails
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Certificates'])) {
            if (!empty($map['Certificates'])) {
                $model->certificates = [];
                $n                   = 0;
                foreach ($map['Certificates'] as $item) {
                    $model->certificates[$n++] = null !== $item ? certificates::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['CipherSuite'])) {
            $model->cipherSuite = $map['CipherSuite'];
        }
        if (isset($map['CustomCiphers'])) {
            if (!empty($map['CustomCiphers'])) {
                $model->customCiphers = $map['CustomCiphers'];
            }
        }
        if (isset($map['EnableTLSv3'])) {
            $model->enableTLSv3 = $map['EnableTLSv3'];
        }
        if (isset($map['Http2Enabled'])) {
            $model->http2Enabled = $map['Http2Enabled'];
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
        if (isset($map['LogHeaders'])) {
            if (!empty($map['LogHeaders'])) {
                $model->logHeaders = [];
                $n                 = 0;
                foreach ($map['LogHeaders'] as $item) {
                    $model->logHeaders[$n++] = null !== $item ? logHeaders::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['OwnerUserId'])) {
            $model->ownerUserId = $map['OwnerUserId'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['Protocol'])) {
            $model->protocol = $map['Protocol'];
        }
        if (isset($map['ReadTimeout'])) {
            $model->readTimeout = $map['ReadTimeout'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TLSVersion'])) {
            $model->TLSVersion = $map['TLSVersion'];
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

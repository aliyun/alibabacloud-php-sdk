<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeCloudResourceAccessPortDetailsResponseBody;

use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeCloudResourceAccessPortDetailsResponseBody\accessPortDetails\certificates;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeCloudResourceAccessPortDetailsResponseBody\accessPortDetails\logHeaders;
use AlibabaCloud\Tea\Model;

class accessPortDetails extends Model
{
    /**
     * @var certificates[]
     */
    public $certificates;

    /**
     * @example 1
     *
     * @var int
     */
    public $cipherSuite;

    /**
     * @var string[]
     */
    public $customCiphers;

    /**
     * @example true
     *
     * @var bool
     */
    public $enableTLSv3;

    /**
     * @example True
     *
     * @var bool
     */
    public $http2Enabled;

    /**
     * @example true
     *
     * @var bool
     */
    public $keepalive;

    /**
     * @example 1000
     *
     * @var int
     */
    public $keepaliveRequests;

    /**
     * @example 10
     *
     * @var int
     */
    public $keepaliveTimeout;

    /**
     * @var logHeaders[]
     */
    public $logHeaders;

    /**
     * @example 123
     *
     * @var string
     */
    public $ownerUserId;

    /**
     * @example 443
     *
     * @var int
     */
    public $port;

    /**
     * @example https
     *
     * @var string
     */
    public $protocol;

    /**
     * @example 5
     *
     * @var int
     */
    public $readTimeout;

    /**
     * @example 1
     *
     * @var int
     */
    public $status;

    /**
     * @example tlsv1
     *
     * @var string
     */
    public $TLSVersion;

    /**
     * @example 1
     *
     * @var int
     */
    public $writeTimeout;

    /**
     * @example 0
     *
     * @var int
     */
    public $xffHeaderMode;

    /**
     * @var string[]
     */
    public $xffHeaders;

    /**
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

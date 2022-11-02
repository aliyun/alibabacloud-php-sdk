<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models\CreateDomainRequest;

use AlibabaCloud\Tea\Model;

class listen extends Model
{
    /**
     * @var string
     */
    public $certId;

    /**
     * @var int
     */
    public $cipherSuite;

    /**
     * @var string[]
     */
    public $customCiphers;

    /**
     * @var bool
     */
    public $enableTLSv3;

    /**
     * @var bool
     */
    public $exclusiveIp;

    /**
     * @var bool
     */
    public $focusHttps;

    /**
     * @var bool
     */
    public $http2Enabled;

    /**
     * @var int[]
     */
    public $httpPorts;

    /**
     * @var int[]
     */
    public $httpsPorts;

    /**
     * @var bool
     */
    public $IPv6Enabled;

    /**
     * @var string
     */
    public $protectionResource;

    /**
     * @var string
     */
    public $TLSVersion;

    /**
     * @var int
     */
    public $xffHeaderMode;

    /**
     * @var string[]
     */
    public $xffHeaders;
    protected $_name = [
        'certId'             => 'CertId',
        'cipherSuite'        => 'CipherSuite',
        'customCiphers'      => 'CustomCiphers',
        'enableTLSv3'        => 'EnableTLSv3',
        'exclusiveIp'        => 'ExclusiveIp',
        'focusHttps'         => 'FocusHttps',
        'http2Enabled'       => 'Http2Enabled',
        'httpPorts'          => 'HttpPorts',
        'httpsPorts'         => 'HttpsPorts',
        'IPv6Enabled'        => 'IPv6Enabled',
        'protectionResource' => 'ProtectionResource',
        'TLSVersion'         => 'TLSVersion',
        'xffHeaderMode'      => 'XffHeaderMode',
        'xffHeaders'         => 'XffHeaders',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->certId) {
            $res['CertId'] = $this->certId;
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
        if (null !== $this->exclusiveIp) {
            $res['ExclusiveIp'] = $this->exclusiveIp;
        }
        if (null !== $this->focusHttps) {
            $res['FocusHttps'] = $this->focusHttps;
        }
        if (null !== $this->http2Enabled) {
            $res['Http2Enabled'] = $this->http2Enabled;
        }
        if (null !== $this->httpPorts) {
            $res['HttpPorts'] = $this->httpPorts;
        }
        if (null !== $this->httpsPorts) {
            $res['HttpsPorts'] = $this->httpsPorts;
        }
        if (null !== $this->IPv6Enabled) {
            $res['IPv6Enabled'] = $this->IPv6Enabled;
        }
        if (null !== $this->protectionResource) {
            $res['ProtectionResource'] = $this->protectionResource;
        }
        if (null !== $this->TLSVersion) {
            $res['TLSVersion'] = $this->TLSVersion;
        }
        if (null !== $this->xffHeaderMode) {
            $res['XffHeaderMode'] = $this->xffHeaderMode;
        }
        if (null !== $this->xffHeaders) {
            $res['XffHeaders'] = $this->xffHeaders;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return listen
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CertId'])) {
            $model->certId = $map['CertId'];
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
        if (isset($map['ExclusiveIp'])) {
            $model->exclusiveIp = $map['ExclusiveIp'];
        }
        if (isset($map['FocusHttps'])) {
            $model->focusHttps = $map['FocusHttps'];
        }
        if (isset($map['Http2Enabled'])) {
            $model->http2Enabled = $map['Http2Enabled'];
        }
        if (isset($map['HttpPorts'])) {
            if (!empty($map['HttpPorts'])) {
                $model->httpPorts = $map['HttpPorts'];
            }
        }
        if (isset($map['HttpsPorts'])) {
            if (!empty($map['HttpsPorts'])) {
                $model->httpsPorts = $map['HttpsPorts'];
            }
        }
        if (isset($map['IPv6Enabled'])) {
            $model->IPv6Enabled = $map['IPv6Enabled'];
        }
        if (isset($map['ProtectionResource'])) {
            $model->protectionResource = $map['ProtectionResource'];
        }
        if (isset($map['TLSVersion'])) {
            $model->TLSVersion = $map['TLSVersion'];
        }
        if (isset($map['XffHeaderMode'])) {
            $model->xffHeaderMode = $map['XffHeaderMode'];
        }
        if (isset($map['XffHeaders'])) {
            if (!empty($map['XffHeaders'])) {
                $model->xffHeaders = $map['XffHeaders'];
            }
        }

        return $model;
    }
}

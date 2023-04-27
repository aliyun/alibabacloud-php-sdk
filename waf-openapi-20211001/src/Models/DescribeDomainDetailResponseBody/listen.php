<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeDomainDetailResponseBody;

use AlibabaCloud\Tea\Model;

class listen extends Model
{
    /**
     * @example 123
     *
     * @var int
     */
    public $certId;

    /**
     * @example 2
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
     * @example true
     *
     * @var bool
     */
    public $exclusiveIp;

    /**
     * @example true
     *
     * @var bool
     */
    public $focusHttps;

    /**
     * @example true
     *
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
     * @example true
     *
     * @var bool
     */
    public $IPv6Enabled;

    /**
     * @example share
     *
     * @var string
     */
    public $protectionResource;

    /**
     * @var bool
     */
    public $SM2AccessOnly;

    /**
     * @var bool
     */
    public $SM2CertId;

    /**
     * @var bool
     */
    public $SM2Enabled;

    /**
     * @example tlsv1.2
     *
     * @var string
     */
    public $TLSVersion;

    /**
     * @example 2
     *
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
        'SM2AccessOnly'      => 'SM2AccessOnly',
        'SM2CertId'          => 'SM2CertId',
        'SM2Enabled'         => 'SM2Enabled',
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
        if (null !== $this->SM2AccessOnly) {
            $res['SM2AccessOnly'] = $this->SM2AccessOnly;
        }
        if (null !== $this->SM2CertId) {
            $res['SM2CertId'] = $this->SM2CertId;
        }
        if (null !== $this->SM2Enabled) {
            $res['SM2Enabled'] = $this->SM2Enabled;
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
        if (isset($map['SM2AccessOnly'])) {
            $model->SM2AccessOnly = $map['SM2AccessOnly'];
        }
        if (isset($map['SM2CertId'])) {
            $model->SM2CertId = $map['SM2CertId'];
        }
        if (isset($map['SM2Enabled'])) {
            $model->SM2Enabled = $map['SM2Enabled'];
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

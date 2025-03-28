<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\Tea\Model;

class UpdateDomainRequest extends Model
{
    /**
     * @description CA certificate identifier
     *
     * @example 1ef1da5f-38ed-69b3-****-037781890265
     *
     * @var string
     */
    public $caCertIdentifier;

    /**
     * @description Certificate identifier
     *
     * @example 1ef1da5f-38ed-69b3-****-037781890265
     *
     * @var string
     */
    public $certIdentifier;

    /**
     * @description Client CA Certificate
     *
     * @example -----BEGIN CERTIFICATE-----
     * MIIFBTCCAu2gAwIBAgIUORLpYPGSFD1YOP6PMbE7Wd/mpTQwDQYJKoZIhvcNAQEL
     * BQAwE************************************************2VwVOJ2gqX3
     * YuGaxvIbDy0iQJ1GMerPRyzJTeVEtdIKT29u0PdFRr4KZWom35qX7G4=
     * -----END CERTIFICATE-----
     *
     * @var string
     */
    public $clientCACert;

    /**
     * @description Set the HTTPS protocol type, whether to enable forced HTTPS redirection.
     *
     * @example false
     *
     * @var bool
     */
    public $forceHttps;

    /**
     * @description HTTP/2 settings.
     *
     * @example Open
     *
     * @var string
     */
    public $http2Option;

    /**
     * @description Whether to enable mTLS mutual authentication
     *
     * @var bool
     */
    public $mTLSEnabled;

    /**
     * @description The protocol type supported by the domain.
     *
     * - HTTP: Supports only HTTP protocol.
     * - HTTPS: Supports only HTTPS protocol.
     *
     * This parameter is required.
     *
     * @example HTTP
     *
     * @var string
     */
    public $protocol;

    /**
     * @description TLS Cipher Suite Configuration.
     *
     * @var TlsCipherSuitesConfig
     */
    public $tlsCipherSuitesConfig;

    /**
     * @description Maximum TLS protocol version, supports up to TLS 1.3.
     *
     * @example TLS 1.3
     *
     * @var string
     */
    public $tlsMax;

    /**
     * @description Minimum TLS protocol version, supports down to TLS 1.0.
     *
     * @example TLS 1.0
     *
     * @var string
     */
    public $tlsMin;
    protected $_name = [
        'caCertIdentifier' => 'caCertIdentifier',
        'certIdentifier' => 'certIdentifier',
        'clientCACert' => 'clientCACert',
        'forceHttps' => 'forceHttps',
        'http2Option' => 'http2Option',
        'mTLSEnabled' => 'mTLSEnabled',
        'protocol' => 'protocol',
        'tlsCipherSuitesConfig' => 'tlsCipherSuitesConfig',
        'tlsMax' => 'tlsMax',
        'tlsMin' => 'tlsMin',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->caCertIdentifier) {
            $res['caCertIdentifier'] = $this->caCertIdentifier;
        }
        if (null !== $this->certIdentifier) {
            $res['certIdentifier'] = $this->certIdentifier;
        }
        if (null !== $this->clientCACert) {
            $res['clientCACert'] = $this->clientCACert;
        }
        if (null !== $this->forceHttps) {
            $res['forceHttps'] = $this->forceHttps;
        }
        if (null !== $this->http2Option) {
            $res['http2Option'] = $this->http2Option;
        }
        if (null !== $this->mTLSEnabled) {
            $res['mTLSEnabled'] = $this->mTLSEnabled;
        }
        if (null !== $this->protocol) {
            $res['protocol'] = $this->protocol;
        }
        if (null !== $this->tlsCipherSuitesConfig) {
            $res['tlsCipherSuitesConfig'] = null !== $this->tlsCipherSuitesConfig ? $this->tlsCipherSuitesConfig->toMap() : null;
        }
        if (null !== $this->tlsMax) {
            $res['tlsMax'] = $this->tlsMax;
        }
        if (null !== $this->tlsMin) {
            $res['tlsMin'] = $this->tlsMin;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateDomainRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['caCertIdentifier'])) {
            $model->caCertIdentifier = $map['caCertIdentifier'];
        }
        if (isset($map['certIdentifier'])) {
            $model->certIdentifier = $map['certIdentifier'];
        }
        if (isset($map['clientCACert'])) {
            $model->clientCACert = $map['clientCACert'];
        }
        if (isset($map['forceHttps'])) {
            $model->forceHttps = $map['forceHttps'];
        }
        if (isset($map['http2Option'])) {
            $model->http2Option = $map['http2Option'];
        }
        if (isset($map['mTLSEnabled'])) {
            $model->mTLSEnabled = $map['mTLSEnabled'];
        }
        if (isset($map['protocol'])) {
            $model->protocol = $map['protocol'];
        }
        if (isset($map['tlsCipherSuitesConfig'])) {
            $model->tlsCipherSuitesConfig = TlsCipherSuitesConfig::fromMap($map['tlsCipherSuitesConfig']);
        }
        if (isset($map['tlsMax'])) {
            $model->tlsMax = $map['tlsMax'];
        }
        if (isset($map['tlsMin'])) {
            $model->tlsMin = $map['tlsMin'];
        }

        return $model;
    }
}

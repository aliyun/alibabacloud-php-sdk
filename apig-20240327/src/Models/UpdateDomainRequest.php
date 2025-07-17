<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\Tea\Model;

class UpdateDomainRequest extends Model
{
    /**
     * @description The CA certificate ID.
     *
     * @example 1ef1da5f-38ed-69b3-****-037781890265
     *
     * @var string
     */
    public $caCertIdentifier;

    /**
     * @description The certificate ID.
     *
     * @example 1ef1da5f-38ed-69b3-****-037781890265
     *
     * @var string
     */
    public $certIdentifier;

    /**
     * @description The client CA certificate.
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
     * @description Specifies whether to enable HTTPS redirection. If protocol is set to HTTPS, forceHttps is required.
     *
     * @example false
     *
     * @var bool
     */
    public $forceHttps;

    /**
     * @description The HTTP/2 configuration.
     *
     * Enumerated values:
     *
     *   GlobalConfig
     *   Close
     *   Open
     *
     * @example Open
     *
     * @var string
     */
    public $http2Option;

    /**
     * @description Specifies whether to enable mutual TLS (mTLS) authentication.
     *
     * @var bool
     */
    public $mTLSEnabled;

    /**
     * @description The protocol type to be supported by the domain name. Valid values:
     *
     *   HTTP
     *   HTTPS
     *
     * This parameter is required.
     *
     * @example HTTP
     *
     * @var string
     */
    public $protocol;

    /**
     * @description The cipher suite configuration.
     *
     * @var TlsCipherSuitesConfig
     */
    public $tlsCipherSuitesConfig;

    /**
     * @description The maximum TLS version. Up to TLS 1.3 is supported.
     *
     * @example TLS 1.3
     *
     * @var string
     */
    public $tlsMax;

    /**
     * @description The minimum TLS version. Down to TLS 1.0 is supported.
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

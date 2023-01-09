<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models;

use AlibabaCloud\Tea\Model;

class UpdateGatewayDomainRequest extends Model
{
    /**
     * @description The language of the response. Valid values:
     *
     *   zh: Chinese
     *   en: English
     *
     * @example zh
     *
     * @var string
     */
    public $acceptLanguage;

    /**
     * @description The ID of the certificate.
     *
     * @example 6209108-cn-hangzhou
     *
     * @var string
     */
    public $certIdentifier;

    /**
     * @description The unique ID of the gateway.
     *
     * @example gw-86575c0bc9f04ecfbacb92b8e392****
     *
     * @var string
     */
    public $gatewayUniqueId;

    /**
     * @description Specifies whether to enable `HTTP/2`.
     *
     *   `open`: `HTTP/2` is enabled.
     *   `close`: `HTTP/2` is disabled.
     *   `globalConfig`: Global configurations are used.
     *
     * @example close
     *
     * @var string
     */
    public $http2;

    /**
     * @description The ID of the domain name that you want to update.
     *
     * @example 94
     *
     * @var int
     */
    public $id;

    /**
     * @description Specifies whether to forcibly use HTTPS.
     *
     * @example false
     *
     * @var bool
     */
    public $mustHttps;

    /**
     * @description The type of the protocol. Valid values:
     *
     *   HTTPS
     *   HTTP
     *
     * @example HTTPS
     *
     * @var string
     */
    public $protocol;

    /**
     * @description The maximum version of Transport Layer Security (TLS).
     *
     * @example TLS 1.3
     *
     * @var string
     */
    public $tlsMax;

    /**
     * @description The minimum version of TLS.
     *
     * @example TLS 1.0
     *
     * @var string
     */
    public $tlsMin;
    protected $_name = [
        'acceptLanguage'  => 'AcceptLanguage',
        'certIdentifier'  => 'CertIdentifier',
        'gatewayUniqueId' => 'GatewayUniqueId',
        'http2'           => 'Http2',
        'id'              => 'Id',
        'mustHttps'       => 'MustHttps',
        'protocol'        => 'Protocol',
        'tlsMax'          => 'TlsMax',
        'tlsMin'          => 'TlsMin',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->acceptLanguage) {
            $res['AcceptLanguage'] = $this->acceptLanguage;
        }
        if (null !== $this->certIdentifier) {
            $res['CertIdentifier'] = $this->certIdentifier;
        }
        if (null !== $this->gatewayUniqueId) {
            $res['GatewayUniqueId'] = $this->gatewayUniqueId;
        }
        if (null !== $this->http2) {
            $res['Http2'] = $this->http2;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->mustHttps) {
            $res['MustHttps'] = $this->mustHttps;
        }
        if (null !== $this->protocol) {
            $res['Protocol'] = $this->protocol;
        }
        if (null !== $this->tlsMax) {
            $res['TlsMax'] = $this->tlsMax;
        }
        if (null !== $this->tlsMin) {
            $res['TlsMin'] = $this->tlsMin;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateGatewayDomainRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AcceptLanguage'])) {
            $model->acceptLanguage = $map['AcceptLanguage'];
        }
        if (isset($map['CertIdentifier'])) {
            $model->certIdentifier = $map['CertIdentifier'];
        }
        if (isset($map['GatewayUniqueId'])) {
            $model->gatewayUniqueId = $map['GatewayUniqueId'];
        }
        if (isset($map['Http2'])) {
            $model->http2 = $map['Http2'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['MustHttps'])) {
            $model->mustHttps = $map['MustHttps'];
        }
        if (isset($map['Protocol'])) {
            $model->protocol = $map['Protocol'];
        }
        if (isset($map['TlsMax'])) {
            $model->tlsMax = $map['TlsMax'];
        }
        if (isset($map['TlsMin'])) {
            $model->tlsMin = $map['TlsMin'];
        }

        return $model;
    }
}

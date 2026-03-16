<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models;

use AlibabaCloud\Dara\Model;

class UpdateGatewayDomainShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $acceptLanguage;

    /**
     * @var string
     */
    public $caCertIdentifier;

    /**
     * @var string
     */
    public $certIdentifier;

    /**
     * @var string
     */
    public $gatewayUniqueId;

    /**
     * @var string
     */
    public $http2;

    /**
     * @var int
     */
    public $id;

    /**
     * @var bool
     */
    public $mtlsEnabled;

    /**
     * @var bool
     */
    public $mustHttps;

    /**
     * @var string
     */
    public $protocol;

    /**
     * @var string
     */
    public $tlsCipherSuitesConfigJSONShrink;

    /**
     * @var string
     */
    public $tlsMax;

    /**
     * @var string
     */
    public $tlsMin;
    protected $_name = [
        'acceptLanguage' => 'AcceptLanguage',
        'caCertIdentifier' => 'CaCertIdentifier',
        'certIdentifier' => 'CertIdentifier',
        'gatewayUniqueId' => 'GatewayUniqueId',
        'http2' => 'Http2',
        'id' => 'Id',
        'mtlsEnabled' => 'MtlsEnabled',
        'mustHttps' => 'MustHttps',
        'protocol' => 'Protocol',
        'tlsCipherSuitesConfigJSONShrink' => 'TlsCipherSuitesConfigJSON',
        'tlsMax' => 'TlsMax',
        'tlsMin' => 'TlsMin',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->acceptLanguage) {
            $res['AcceptLanguage'] = $this->acceptLanguage;
        }

        if (null !== $this->caCertIdentifier) {
            $res['CaCertIdentifier'] = $this->caCertIdentifier;
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

        if (null !== $this->mtlsEnabled) {
            $res['MtlsEnabled'] = $this->mtlsEnabled;
        }

        if (null !== $this->mustHttps) {
            $res['MustHttps'] = $this->mustHttps;
        }

        if (null !== $this->protocol) {
            $res['Protocol'] = $this->protocol;
        }

        if (null !== $this->tlsCipherSuitesConfigJSONShrink) {
            $res['TlsCipherSuitesConfigJSON'] = $this->tlsCipherSuitesConfigJSONShrink;
        }

        if (null !== $this->tlsMax) {
            $res['TlsMax'] = $this->tlsMax;
        }

        if (null !== $this->tlsMin) {
            $res['TlsMin'] = $this->tlsMin;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AcceptLanguage'])) {
            $model->acceptLanguage = $map['AcceptLanguage'];
        }

        if (isset($map['CaCertIdentifier'])) {
            $model->caCertIdentifier = $map['CaCertIdentifier'];
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

        if (isset($map['MtlsEnabled'])) {
            $model->mtlsEnabled = $map['MtlsEnabled'];
        }

        if (isset($map['MustHttps'])) {
            $model->mustHttps = $map['MustHttps'];
        }

        if (isset($map['Protocol'])) {
            $model->protocol = $map['Protocol'];
        }

        if (isset($map['TlsCipherSuitesConfigJSON'])) {
            $model->tlsCipherSuitesConfigJSONShrink = $map['TlsCipherSuitesConfigJSON'];
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

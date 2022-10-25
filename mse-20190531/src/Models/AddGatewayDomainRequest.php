<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models;

use AlibabaCloud\Tea\Model;

class AddGatewayDomainRequest extends Model
{
    /**
     * @var string
     */
    public $acceptLanguage;

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
     * @var bool
     */
    public $mustHttps;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $protocol;

    /**
     * @var string
     */
    public $tlsMax;

    /**
     * @var string
     */
    public $tlsMin;
    protected $_name = [
        'acceptLanguage'  => 'AcceptLanguage',
        'certIdentifier'  => 'CertIdentifier',
        'gatewayUniqueId' => 'GatewayUniqueId',
        'http2'           => 'Http2',
        'mustHttps'       => 'MustHttps',
        'name'            => 'Name',
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
        if (null !== $this->mustHttps) {
            $res['MustHttps'] = $this->mustHttps;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
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
     * @return AddGatewayDomainRequest
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
        if (isset($map['MustHttps'])) {
            $model->mustHttps = $map['MustHttps'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
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

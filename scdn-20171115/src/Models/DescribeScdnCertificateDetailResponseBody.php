<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Scdn\V20171115\Models;

use AlibabaCloud\Tea\Model;

class DescribeScdnCertificateDetailResponseBody extends Model
{
    /**
     * @example -----BEGIN CERTIFICATE-----xxx-----END CERTIFICATE-----
     *
     * @var string
     */
    public $cert;

    /**
     * @example 123
     *
     * @var int
     */
    public $certId;

    /**
     * @example vmeixme
     *
     * @var string
     */
    public $certName;

    /**
     * @example key
     *
     * @var string
     */
    public $key;

    /**
     * @example C7C69682-7F88-40DD-A198-10D0309E439B
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'cert'      => 'Cert',
        'certId'    => 'CertId',
        'certName'  => 'CertName',
        'key'       => 'Key',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cert) {
            $res['Cert'] = $this->cert;
        }
        if (null !== $this->certId) {
            $res['CertId'] = $this->certId;
        }
        if (null !== $this->certName) {
            $res['CertName'] = $this->certName;
        }
        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeScdnCertificateDetailResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Cert'])) {
            $model->cert = $map['Cert'];
        }
        if (isset($map['CertId'])) {
            $model->certId = $map['CertId'];
        }
        if (isset($map['CertName'])) {
            $model->certName = $map['CertName'];
        }
        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

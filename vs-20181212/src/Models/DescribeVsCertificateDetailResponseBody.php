<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models;

use AlibabaCloud\Tea\Model;

class DescribeVsCertificateDetailResponseBody extends Model
{
    /**
     * @example -----BEGIN CERTIFICATE-----xxxxx-----END CERTIFICATE-----
     *
     * @var string
     */
    public $cert;

    /**
     * @example 63000000
     *
     * @var int
     */
    public $certId;

    /**
     * @example cert-539xxxxx
     *
     * @var string
     */
    public $certName;

    /**
     * @example xxxxx
     *
     * @var string
     */
    public $key;

    /**
     * @example D94D0E1E-E71B-562D-8C18-969BB3653FBD
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
     * @return DescribeVsCertificateDetailResponseBody
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

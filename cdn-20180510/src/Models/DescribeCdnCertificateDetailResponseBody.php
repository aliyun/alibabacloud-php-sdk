<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models;

use AlibabaCloud\Tea\Model;

class DescribeCdnCertificateDetailResponseBody extends Model
{
    /**
     * @description The content of the SSL certificate.
     *
     * @example -----BEGIN CERTIFICATE-----\nMIIFzDCCBLSgAwIBxxxx
     *
     * @var string
     */
    public $cert;

    /**
     * @description The ID of the SSL certificate.
     *
     * @example 881049
     *
     * @var int
     */
    public $certId;

    /**
     * @description The name of the SSL certificate.
     *
     * @example cert-15480655xxxx
     *
     * @var string
     */
    public $certName;

    /**
     * @description The key of the SSL certificate.
     *
     * @example xxxx
     *
     * @var string
     */
    public $key;

    /**
     * @description The ID of the request.
     *
     * @example 0AEDAF20-4DDF-4165-8750-47FF9C1929C9
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
     * @return DescribeCdnCertificateDetailResponseBody
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

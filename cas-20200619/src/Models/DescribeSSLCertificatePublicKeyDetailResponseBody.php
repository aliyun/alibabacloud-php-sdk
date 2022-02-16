<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cas\V20200619\Models;

use AlibabaCloud\SDK\Cas\V20200619\Models\DescribeSSLCertificatePublicKeyDetailResponseBody\certificateInfo;
use AlibabaCloud\Tea\Model;

class DescribeSSLCertificatePublicKeyDetailResponseBody extends Model
{
    /**
     * @var certificateInfo
     */
    public $certificateInfo;

    /**
     * @var string
     */
    public $encryptCertificate;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $signCertificate;

    /**
     * @var string
     */
    public $x509Certificate;
    protected $_name = [
        'certificateInfo'    => 'CertificateInfo',
        'encryptCertificate' => 'EncryptCertificate',
        'requestId'          => 'RequestId',
        'signCertificate'    => 'SignCertificate',
        'x509Certificate'    => 'X509Certificate',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->certificateInfo) {
            $res['CertificateInfo'] = null !== $this->certificateInfo ? $this->certificateInfo->toMap() : null;
        }
        if (null !== $this->encryptCertificate) {
            $res['EncryptCertificate'] = $this->encryptCertificate;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->signCertificate) {
            $res['SignCertificate'] = $this->signCertificate;
        }
        if (null !== $this->x509Certificate) {
            $res['X509Certificate'] = $this->x509Certificate;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSSLCertificatePublicKeyDetailResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CertificateInfo'])) {
            $model->certificateInfo = certificateInfo::fromMap($map['CertificateInfo']);
        }
        if (isset($map['EncryptCertificate'])) {
            $model->encryptCertificate = $map['EncryptCertificate'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SignCertificate'])) {
            $model->signCertificate = $map['SignCertificate'];
        }
        if (isset($map['X509Certificate'])) {
            $model->x509Certificate = $map['X509Certificate'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cas\V20200619\Models;

use AlibabaCloud\Tea\Model;

class UploadSSLCertificateRequest extends Model
{
    /**
     * @var string
     */
    public $certName;

    /**
     * @var string
     */
    public $certificate;

    /**
     * @var string
     */
    public $encryptCertificate;

    /**
     * @var string
     */
    public $encryptPrivateKey;

    /**
     * @var string
     */
    public $privateKey;

    /**
     * @var string
     */
    public $signCertificate;

    /**
     * @var string
     */
    public $signPrivateKey;
    protected $_name = [
        'certName'           => 'CertName',
        'certificate'        => 'Certificate',
        'encryptCertificate' => 'EncryptCertificate',
        'encryptPrivateKey'  => 'EncryptPrivateKey',
        'privateKey'         => 'PrivateKey',
        'signCertificate'    => 'SignCertificate',
        'signPrivateKey'     => 'SignPrivateKey',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->certName) {
            $res['CertName'] = $this->certName;
        }
        if (null !== $this->certificate) {
            $res['Certificate'] = $this->certificate;
        }
        if (null !== $this->encryptCertificate) {
            $res['EncryptCertificate'] = $this->encryptCertificate;
        }
        if (null !== $this->encryptPrivateKey) {
            $res['EncryptPrivateKey'] = $this->encryptPrivateKey;
        }
        if (null !== $this->privateKey) {
            $res['PrivateKey'] = $this->privateKey;
        }
        if (null !== $this->signCertificate) {
            $res['SignCertificate'] = $this->signCertificate;
        }
        if (null !== $this->signPrivateKey) {
            $res['SignPrivateKey'] = $this->signPrivateKey;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UploadSSLCertificateRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CertName'])) {
            $model->certName = $map['CertName'];
        }
        if (isset($map['Certificate'])) {
            $model->certificate = $map['Certificate'];
        }
        if (isset($map['EncryptCertificate'])) {
            $model->encryptCertificate = $map['EncryptCertificate'];
        }
        if (isset($map['EncryptPrivateKey'])) {
            $model->encryptPrivateKey = $map['EncryptPrivateKey'];
        }
        if (isset($map['PrivateKey'])) {
            $model->privateKey = $map['PrivateKey'];
        }
        if (isset($map['SignCertificate'])) {
            $model->signCertificate = $map['SignCertificate'];
        }
        if (isset($map['SignPrivateKey'])) {
            $model->signPrivateKey = $map['SignPrivateKey'];
        }

        return $model;
    }
}

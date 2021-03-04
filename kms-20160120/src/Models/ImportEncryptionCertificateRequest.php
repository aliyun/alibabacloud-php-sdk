<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models;

use AlibabaCloud\Tea\Model;

class ImportEncryptionCertificateRequest extends Model
{
    /**
     * @var string
     */
    public $certificateId;

    /**
     * @var string
     */
    public $encryptedSymmetricKey;

    /**
     * @var string
     */
    public $encryptedPrivateKey;

    /**
     * @var string
     */
    public $symmetricAlgorithm;

    /**
     * @var string
     */
    public $asymmetricAlgorithm;

    /**
     * @var string
     */
    public $certificate;

    /**
     * @var string
     */
    public $certificateChain;
    protected $_name = [
        'certificateId'         => 'CertificateId',
        'encryptedSymmetricKey' => 'EncryptedSymmetricKey',
        'encryptedPrivateKey'   => 'EncryptedPrivateKey',
        'symmetricAlgorithm'    => 'SymmetricAlgorithm',
        'asymmetricAlgorithm'   => 'AsymmetricAlgorithm',
        'certificate'           => 'Certificate',
        'certificateChain'      => 'CertificateChain',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->certificateId) {
            $res['CertificateId'] = $this->certificateId;
        }
        if (null !== $this->encryptedSymmetricKey) {
            $res['EncryptedSymmetricKey'] = $this->encryptedSymmetricKey;
        }
        if (null !== $this->encryptedPrivateKey) {
            $res['EncryptedPrivateKey'] = $this->encryptedPrivateKey;
        }
        if (null !== $this->symmetricAlgorithm) {
            $res['SymmetricAlgorithm'] = $this->symmetricAlgorithm;
        }
        if (null !== $this->asymmetricAlgorithm) {
            $res['AsymmetricAlgorithm'] = $this->asymmetricAlgorithm;
        }
        if (null !== $this->certificate) {
            $res['Certificate'] = $this->certificate;
        }
        if (null !== $this->certificateChain) {
            $res['CertificateChain'] = $this->certificateChain;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ImportEncryptionCertificateRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CertificateId'])) {
            $model->certificateId = $map['CertificateId'];
        }
        if (isset($map['EncryptedSymmetricKey'])) {
            $model->encryptedSymmetricKey = $map['EncryptedSymmetricKey'];
        }
        if (isset($map['EncryptedPrivateKey'])) {
            $model->encryptedPrivateKey = $map['EncryptedPrivateKey'];
        }
        if (isset($map['SymmetricAlgorithm'])) {
            $model->symmetricAlgorithm = $map['SymmetricAlgorithm'];
        }
        if (isset($map['AsymmetricAlgorithm'])) {
            $model->asymmetricAlgorithm = $map['AsymmetricAlgorithm'];
        }
        if (isset($map['Certificate'])) {
            $model->certificate = $map['Certificate'];
        }
        if (isset($map['CertificateChain'])) {
            $model->certificateChain = $map['CertificateChain'];
        }

        return $model;
    }
}

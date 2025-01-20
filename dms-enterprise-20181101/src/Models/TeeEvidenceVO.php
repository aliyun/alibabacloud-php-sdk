<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Dara\Model;

class TeeEvidenceVO extends Model
{
    /**
     * @var string
     */
    public $cipherSuite;
    /**
     * @var string
     */
    public $enclaveData;
    /**
     * @var string
     */
    public $encryptPublicKeyPem;
    /**
     * @var string
     */
    public $encryptPublicKeyType;
    /**
     * @var string
     */
    public $modifiedDate;
    /**
     * @var string
     */
    public $publicKey;
    /**
     * @var string
     */
    public $publicKeyRaBase64;
    /**
     * @var string
     */
    public $publicKeyRaType;
    /**
     * @var string
     */
    public $quoteReport;
    /**
     * @var string
     */
    public $signPublicKeyPem;
    /**
     * @var string
     */
    public $signPublicKeyType;
    /**
     * @var string[]
     */
    public $trustedMrEnclave;
    protected $_name = [
        'cipherSuite'          => 'CipherSuite',
        'enclaveData'          => 'EnclaveData',
        'encryptPublicKeyPem'  => 'EncryptPublicKeyPem',
        'encryptPublicKeyType' => 'EncryptPublicKeyType',
        'modifiedDate'         => 'ModifiedDate',
        'publicKey'            => 'PublicKey',
        'publicKeyRaBase64'    => 'PublicKeyRaBase64',
        'publicKeyRaType'      => 'PublicKeyRaType',
        'quoteReport'          => 'QuoteReport',
        'signPublicKeyPem'     => 'SignPublicKeyPem',
        'signPublicKeyType'    => 'SignPublicKeyType',
        'trustedMrEnclave'     => 'TrustedMrEnclave',
    ];

    public function validate()
    {
        if (\is_array($this->trustedMrEnclave)) {
            Model::validateArray($this->trustedMrEnclave);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cipherSuite) {
            $res['CipherSuite'] = $this->cipherSuite;
        }

        if (null !== $this->enclaveData) {
            $res['EnclaveData'] = $this->enclaveData;
        }

        if (null !== $this->encryptPublicKeyPem) {
            $res['EncryptPublicKeyPem'] = $this->encryptPublicKeyPem;
        }

        if (null !== $this->encryptPublicKeyType) {
            $res['EncryptPublicKeyType'] = $this->encryptPublicKeyType;
        }

        if (null !== $this->modifiedDate) {
            $res['ModifiedDate'] = $this->modifiedDate;
        }

        if (null !== $this->publicKey) {
            $res['PublicKey'] = $this->publicKey;
        }

        if (null !== $this->publicKeyRaBase64) {
            $res['PublicKeyRaBase64'] = $this->publicKeyRaBase64;
        }

        if (null !== $this->publicKeyRaType) {
            $res['PublicKeyRaType'] = $this->publicKeyRaType;
        }

        if (null !== $this->quoteReport) {
            $res['QuoteReport'] = $this->quoteReport;
        }

        if (null !== $this->signPublicKeyPem) {
            $res['SignPublicKeyPem'] = $this->signPublicKeyPem;
        }

        if (null !== $this->signPublicKeyType) {
            $res['SignPublicKeyType'] = $this->signPublicKeyType;
        }

        if (null !== $this->trustedMrEnclave) {
            if (\is_array($this->trustedMrEnclave)) {
                $res['TrustedMrEnclave'] = [];
                $n1                      = 0;
                foreach ($this->trustedMrEnclave as $item1) {
                    $res['TrustedMrEnclave'][$n1++] = $item1;
                }
            }
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
        if (isset($map['CipherSuite'])) {
            $model->cipherSuite = $map['CipherSuite'];
        }

        if (isset($map['EnclaveData'])) {
            $model->enclaveData = $map['EnclaveData'];
        }

        if (isset($map['EncryptPublicKeyPem'])) {
            $model->encryptPublicKeyPem = $map['EncryptPublicKeyPem'];
        }

        if (isset($map['EncryptPublicKeyType'])) {
            $model->encryptPublicKeyType = $map['EncryptPublicKeyType'];
        }

        if (isset($map['ModifiedDate'])) {
            $model->modifiedDate = $map['ModifiedDate'];
        }

        if (isset($map['PublicKey'])) {
            $model->publicKey = $map['PublicKey'];
        }

        if (isset($map['PublicKeyRaBase64'])) {
            $model->publicKeyRaBase64 = $map['PublicKeyRaBase64'];
        }

        if (isset($map['PublicKeyRaType'])) {
            $model->publicKeyRaType = $map['PublicKeyRaType'];
        }

        if (isset($map['QuoteReport'])) {
            $model->quoteReport = $map['QuoteReport'];
        }

        if (isset($map['SignPublicKeyPem'])) {
            $model->signPublicKeyPem = $map['SignPublicKeyPem'];
        }

        if (isset($map['SignPublicKeyType'])) {
            $model->signPublicKeyType = $map['SignPublicKeyType'];
        }

        if (isset($map['TrustedMrEnclave'])) {
            if (!empty($map['TrustedMrEnclave'])) {
                $model->trustedMrEnclave = [];
                $n1                      = 0;
                foreach ($map['TrustedMrEnclave'] as $item1) {
                    $model->trustedMrEnclave[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}

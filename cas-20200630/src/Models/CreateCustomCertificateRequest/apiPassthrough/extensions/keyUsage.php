<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cas\V20200630\Models\CreateCustomCertificateRequest\apiPassthrough\extensions;

use AlibabaCloud\Tea\Model;

class keyUsage extends Model
{
    /**
     * @description The original name of the parameter is NonRepudiation.
     *
     * @example false
     *
     * @var bool
     */
    public $contentCommitment;

    /**
     * @description Specifies whether the key can be used for data encryption.
     *
     * @example false
     *
     * @var bool
     */
    public $dataEncipherment;

    /**
     * @description Specifies whether the key can be used only for data decryption.
     *
     * @example false
     *
     * @var bool
     */
    public $decipherOnly;

    /**
     * @description Specifies whether the key can be used for digital signing. If you set this parameter to true, the private key of the certificate can be used to generate digital signatures, and the public key of the certificate can be used to verify digital signatures.
     *
     * @example true
     *
     * @var bool
     */
    public $digitalSignature;

    /**
     * @description Specifies whether the key can be used only for data encryption.
     *
     * @example false
     *
     * @var bool
     */
    public $encipherOnly;

    /**
     * @description Specifies whether the key can be used for key agreement.
     *
     * @example false
     *
     * @var bool
     */
    public $keyAgreement;

    /**
     * @description Specifies whether the key can be used for data encipherment.
     *
     * @example false
     *
     * @var bool
     */
    public $keyEncipherment;

    /**
     * @description Specifies whether the key can be used for non-repudiation. This parameter is renamed ContentCommitment in the X.509 standard.
     *
     * @example false
     *
     * @var bool
     */
    public $nonRepudiation;
    protected $_name = [
        'contentCommitment' => 'ContentCommitment',
        'dataEncipherment' => 'DataEncipherment',
        'decipherOnly' => 'DecipherOnly',
        'digitalSignature' => 'DigitalSignature',
        'encipherOnly' => 'EncipherOnly',
        'keyAgreement' => 'KeyAgreement',
        'keyEncipherment' => 'KeyEncipherment',
        'nonRepudiation' => 'NonRepudiation',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->contentCommitment) {
            $res['ContentCommitment'] = $this->contentCommitment;
        }
        if (null !== $this->dataEncipherment) {
            $res['DataEncipherment'] = $this->dataEncipherment;
        }
        if (null !== $this->decipherOnly) {
            $res['DecipherOnly'] = $this->decipherOnly;
        }
        if (null !== $this->digitalSignature) {
            $res['DigitalSignature'] = $this->digitalSignature;
        }
        if (null !== $this->encipherOnly) {
            $res['EncipherOnly'] = $this->encipherOnly;
        }
        if (null !== $this->keyAgreement) {
            $res['KeyAgreement'] = $this->keyAgreement;
        }
        if (null !== $this->keyEncipherment) {
            $res['KeyEncipherment'] = $this->keyEncipherment;
        }
        if (null !== $this->nonRepudiation) {
            $res['NonRepudiation'] = $this->nonRepudiation;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return keyUsage
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ContentCommitment'])) {
            $model->contentCommitment = $map['ContentCommitment'];
        }
        if (isset($map['DataEncipherment'])) {
            $model->dataEncipherment = $map['DataEncipherment'];
        }
        if (isset($map['DecipherOnly'])) {
            $model->decipherOnly = $map['DecipherOnly'];
        }
        if (isset($map['DigitalSignature'])) {
            $model->digitalSignature = $map['DigitalSignature'];
        }
        if (isset($map['EncipherOnly'])) {
            $model->encipherOnly = $map['EncipherOnly'];
        }
        if (isset($map['KeyAgreement'])) {
            $model->keyAgreement = $map['KeyAgreement'];
        }
        if (isset($map['KeyEncipherment'])) {
            $model->keyEncipherment = $map['KeyEncipherment'];
        }
        if (isset($map['NonRepudiation'])) {
            $model->nonRepudiation = $map['NonRepudiation'];
        }

        return $model;
    }
}

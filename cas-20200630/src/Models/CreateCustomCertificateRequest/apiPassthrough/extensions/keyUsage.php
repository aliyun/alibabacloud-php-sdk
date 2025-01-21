<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cas\V20200630\Models\CreateCustomCertificateRequest\apiPassthrough\extensions;

use AlibabaCloud\Dara\Model;

class keyUsage extends Model
{
    /**
     * @var bool
     */
    public $contentCommitment;
    /**
     * @var bool
     */
    public $dataEncipherment;
    /**
     * @var bool
     */
    public $decipherOnly;
    /**
     * @var bool
     */
    public $digitalSignature;
    /**
     * @var bool
     */
    public $encipherOnly;
    /**
     * @var bool
     */
    public $keyAgreement;
    /**
     * @var bool
     */
    public $keyEncipherment;
    /**
     * @var bool
     */
    public $nonRepudiation;
    protected $_name = [
        'contentCommitment' => 'ContentCommitment',
        'dataEncipherment'  => 'DataEncipherment',
        'decipherOnly'      => 'DecipherOnly',
        'digitalSignature'  => 'DigitalSignature',
        'encipherOnly'      => 'EncipherOnly',
        'keyAgreement'      => 'KeyAgreement',
        'keyEncipherment'   => 'KeyEncipherment',
        'nonRepudiation'    => 'NonRepudiation',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

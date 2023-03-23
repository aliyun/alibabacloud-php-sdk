<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cas\V20200630\Models\CreateCustomCertificateRequest\apiPassthrough\extensions;

use AlibabaCloud\Tea\Model;

class keyUsage extends Model
{
    /**
     * @example false
     *
     * @var bool
     */
    public $contentCommitment;

    /**
     * @example false
     *
     * @var bool
     */
    public $dataEncipherment;

    /**
     * @example false
     *
     * @var bool
     */
    public $decipherOnly;

    /**
     * @example true
     *
     * @var bool
     */
    public $digitalSignature;

    /**
     * @example false
     *
     * @var bool
     */
    public $encipherOnly;

    /**
     * @example false
     *
     * @var bool
     */
    public $keyAgreement;

    /**
     * @example false
     *
     * @var bool
     */
    public $keyEncipherment;

    /**
     * @example false
     *
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
    }

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

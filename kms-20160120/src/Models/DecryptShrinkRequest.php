<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models;

use AlibabaCloud\Dara\Model;

class DecryptShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $ciphertextBlob;

    /**
     * @var string
     */
    public $dryRun;

    /**
     * @var string
     */
    public $encryptionContextShrink;
    protected $_name = [
        'ciphertextBlob' => 'CiphertextBlob',
        'dryRun' => 'DryRun',
        'encryptionContextShrink' => 'EncryptionContext',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ciphertextBlob) {
            $res['CiphertextBlob'] = $this->ciphertextBlob;
        }

        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }

        if (null !== $this->encryptionContextShrink) {
            $res['EncryptionContext'] = $this->encryptionContextShrink;
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
        if (isset($map['CiphertextBlob'])) {
            $model->ciphertextBlob = $map['CiphertextBlob'];
        }

        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }

        if (isset($map['EncryptionContext'])) {
            $model->encryptionContextShrink = $map['EncryptionContext'];
        }

        return $model;
    }
}

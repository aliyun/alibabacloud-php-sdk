<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models;

use AlibabaCloud\Dara\Model;

class EncryptShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $dryRun;

    /**
     * @var string
     */
    public $encryptionContextShrink;

    /**
     * @var string
     */
    public $keyId;

    /**
     * @var string
     */
    public $plaintext;
    protected $_name = [
        'dryRun' => 'DryRun',
        'encryptionContextShrink' => 'EncryptionContext',
        'keyId' => 'KeyId',
        'plaintext' => 'Plaintext',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }

        if (null !== $this->encryptionContextShrink) {
            $res['EncryptionContext'] = $this->encryptionContextShrink;
        }

        if (null !== $this->keyId) {
            $res['KeyId'] = $this->keyId;
        }

        if (null !== $this->plaintext) {
            $res['Plaintext'] = $this->plaintext;
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
        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }

        if (isset($map['EncryptionContext'])) {
            $model->encryptionContextShrink = $map['EncryptionContext'];
        }

        if (isset($map['KeyId'])) {
            $model->keyId = $map['KeyId'];
        }

        if (isset($map['Plaintext'])) {
            $model->plaintext = $map['Plaintext'];
        }

        return $model;
    }
}

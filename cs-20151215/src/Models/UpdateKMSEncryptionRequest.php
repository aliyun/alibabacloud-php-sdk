<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Dara\Model;

class UpdateKMSEncryptionRequest extends Model
{
    /**
     * @var bool
     */
    public $disableEncryption;

    /**
     * @var string
     */
    public $kmsKeyId;
    protected $_name = [
        'disableEncryption' => 'disable_encryption',
        'kmsKeyId' => 'kms_key_id',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->disableEncryption) {
            $res['disable_encryption'] = $this->disableEncryption;
        }

        if (null !== $this->kmsKeyId) {
            $res['kms_key_id'] = $this->kmsKeyId;
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
        if (isset($map['disable_encryption'])) {
            $model->disableEncryption = $map['disable_encryption'];
        }

        if (isset($map['kms_key_id'])) {
            $model->kmsKeyId = $map['kms_key_id'];
        }

        return $model;
    }
}

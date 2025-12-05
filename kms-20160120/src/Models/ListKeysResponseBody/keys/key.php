<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models\ListKeysResponseBody\keys;

use AlibabaCloud\Dara\Model;

class key extends Model
{
    /**
     * @var string
     */
    public $keyArn;

    /**
     * @var string
     */
    public $keyId;
    protected $_name = [
        'keyArn' => 'KeyArn',
        'keyId' => 'KeyId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->keyArn) {
            $res['KeyArn'] = $this->keyArn;
        }

        if (null !== $this->keyId) {
            $res['KeyId'] = $this->keyId;
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
        if (isset($map['KeyArn'])) {
            $model->keyArn = $map['KeyArn'];
        }

        if (isset($map['KeyId'])) {
            $model->keyId = $map['KeyId'];
        }

        return $model;
    }
}

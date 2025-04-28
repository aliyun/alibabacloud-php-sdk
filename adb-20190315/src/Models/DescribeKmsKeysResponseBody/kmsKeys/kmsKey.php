<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models\DescribeKmsKeysResponseBody\kmsKeys;

use AlibabaCloud\Dara\Model;

class kmsKey extends Model
{
    /**
     * @var string
     */
    public $keyAlias;

    /**
     * @var string
     */
    public $keyId;
    protected $_name = [
        'keyAlias' => 'KeyAlias',
        'keyId' => 'KeyId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->keyAlias) {
            $res['KeyAlias'] = $this->keyAlias;
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
        if (isset($map['KeyAlias'])) {
            $model->keyAlias = $map['KeyAlias'];
        }

        if (isset($map['KeyId'])) {
            $model->keyId = $map['KeyId'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models;

use AlibabaCloud\Tea\Model;

class CreateKeyVersionRequest extends Model
{
    /**
     * @description The ID of the CMK. The ID must be globally unique.
     *
     * >  You can also set the value to an alias that is bound to the CMK. For more information, see [Overview of aliases](~~68522~~).
     * @example 0b30658a-ed1a-4922-b8f7-a673ca9c****
     *
     * @var string
     */
    public $keyId;
    protected $_name = [
        'keyId' => 'KeyId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->keyId) {
            $res['KeyId'] = $this->keyId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateKeyVersionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['KeyId'])) {
            $model->keyId = $map['KeyId'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models\DescribeKmsKeysResponseBody\kmsKeys;

use AlibabaCloud\Tea\Model;

class kmsKey extends Model
{
    /**
     * @example mykey
     *
     * @var string
     */
    public $keyAlias;

    /**
     * @example 2e81355b-f8e7-4090-8082-a8f8124a621c
     *
     * @var string
     */
    public $keyId;
    protected $_name = [
        'keyAlias' => 'KeyAlias',
        'keyId'    => 'KeyId',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return kmsKey
     */
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

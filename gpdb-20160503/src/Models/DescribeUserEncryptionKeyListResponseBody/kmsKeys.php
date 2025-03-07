<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeUserEncryptionKeyListResponseBody;

use AlibabaCloud\Tea\Model;

class kmsKeys extends Model
{
    /**
     * @description The ID of the KMS key.
     *
     * @example 0b8b1825-fd99-418f-875e-e4dec1dd8715
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
     * @return kmsKeys
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

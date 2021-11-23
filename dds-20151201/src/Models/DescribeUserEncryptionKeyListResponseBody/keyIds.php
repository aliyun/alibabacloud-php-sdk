<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models\DescribeUserEncryptionKeyListResponseBody;

use AlibabaCloud\Tea\Model;

class keyIds extends Model
{
    /**
     * @var string[]
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
     * @return keyIds
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['KeyId'])) {
            if (!empty($map['KeyId'])) {
                $model->keyId = $map['KeyId'];
            }
        }

        return $model;
    }
}

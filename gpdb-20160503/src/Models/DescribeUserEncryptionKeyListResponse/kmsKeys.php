<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeUserEncryptionKeyListResponse;

use AlibabaCloud\Tea\Model;

class kmsKeys extends Model
{
    /**
     * @var string
     */
    public $keyId;
    protected $_name = [
        'keyId' => 'KeyId',
    ];

    public function validate()
    {
        Model::validateRequired('keyId', $this->keyId, true);
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

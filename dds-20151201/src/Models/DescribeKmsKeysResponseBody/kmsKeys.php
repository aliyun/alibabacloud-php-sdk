<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models\DescribeKmsKeysResponseBody;

use AlibabaCloud\Tea\Model;

class kmsKeys extends Model
{
    /**
     * @description The alias of the key.
     *
     * @example key-shh656820f4mh9qxxxxx     alias/test1
     *
     * @var string
     */
    public $keyAlias;

    /**
     * @description The key ID.
     *
     * @example 37291352-xxxx-xxxx-adbf-fd0630a95583
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
     * @return kmsKeys
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

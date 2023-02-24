<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models\ListKeysResponseBody\keys;

use AlibabaCloud\Tea\Model;

class key extends Model
{
    /**
     * @description The Alibaba Cloud Resource Name (ARN) of the CMK.
     *
     * @example acs:kms:cn-hangzhou:123456:key/80e9409f-78fa-42ab-84bd-83f40c81****
     *
     * @var string
     */
    public $keyArn;

    /**
     * @description The ID of the CMK. The ID must be globally unique.
     *
     * @example 08c33a6f-4e0a-4a1b-a3fa-7ddfa1d4****
     *
     * @var string
     */
    public $keyId;
    protected $_name = [
        'keyArn' => 'KeyArn',
        'keyId'  => 'KeyId',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return key
     */
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

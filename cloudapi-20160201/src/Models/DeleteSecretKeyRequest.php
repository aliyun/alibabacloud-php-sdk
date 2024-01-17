<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160201\Models;

use AlibabaCloud\Tea\Model;

class DeleteSecretKeyRequest extends Model
{
    /**
     * @var string
     */
    public $secretKeyId;
    protected $_name = [
        'secretKeyId' => 'SecretKeyId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->secretKeyId) {
            $res['SecretKeyId'] = $this->secretKeyId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteSecretKeyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SecretKeyId'])) {
            $model->secretKeyId = $map['SecretKeyId'];
        }

        return $model;
    }
}

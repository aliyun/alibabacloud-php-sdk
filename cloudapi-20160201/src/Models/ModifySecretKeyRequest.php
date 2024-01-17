<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160201\Models;

use AlibabaCloud\Tea\Model;

class ModifySecretKeyRequest extends Model
{
    /**
     * @var string
     */
    public $secretKey;

    /**
     * @var string
     */
    public $secretKeyId;

    /**
     * @var string
     */
    public $secretKeyName;

    /**
     * @var string
     */
    public $secretValue;
    protected $_name = [
        'secretKey'     => 'SecretKey',
        'secretKeyId'   => 'SecretKeyId',
        'secretKeyName' => 'SecretKeyName',
        'secretValue'   => 'SecretValue',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->secretKey) {
            $res['SecretKey'] = $this->secretKey;
        }
        if (null !== $this->secretKeyId) {
            $res['SecretKeyId'] = $this->secretKeyId;
        }
        if (null !== $this->secretKeyName) {
            $res['SecretKeyName'] = $this->secretKeyName;
        }
        if (null !== $this->secretValue) {
            $res['SecretValue'] = $this->secretValue;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifySecretKeyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SecretKey'])) {
            $model->secretKey = $map['SecretKey'];
        }
        if (isset($map['SecretKeyId'])) {
            $model->secretKeyId = $map['SecretKeyId'];
        }
        if (isset($map['SecretKeyName'])) {
            $model->secretKeyName = $map['SecretKeyName'];
        }
        if (isset($map['SecretValue'])) {
            $model->secretValue = $map['SecretValue'];
        }

        return $model;
    }
}

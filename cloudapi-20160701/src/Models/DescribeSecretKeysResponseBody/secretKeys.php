<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160701\Models\DescribeSecretKeysResponseBody;

use AlibabaCloud\SDK\CloudAPI\V20160701\Models\DescribeSecretKeysResponseBody\secretKeys\secretKey;
use AlibabaCloud\Tea\Model;

class secretKeys extends Model
{
    /**
     * @var secretKey[]
     */
    public $secretKey;
    protected $_name = [
        'secretKey' => 'SecretKey',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->secretKey) {
            $res['SecretKey'] = [];
            if (null !== $this->secretKey && \is_array($this->secretKey)) {
                $n = 0;
                foreach ($this->secretKey as $item) {
                    $res['SecretKey'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return secretKeys
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SecretKey'])) {
            if (!empty($map['SecretKey'])) {
                $model->secretKey = [];
                $n                = 0;
                foreach ($map['SecretKey'] as $item) {
                    $model->secretKey[$n++] = null !== $item ? secretKey::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

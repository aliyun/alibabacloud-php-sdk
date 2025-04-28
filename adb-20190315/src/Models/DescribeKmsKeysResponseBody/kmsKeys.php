<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models\DescribeKmsKeysResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeKmsKeysResponseBody\kmsKeys\kmsKey;

class kmsKeys extends Model
{
    /**
     * @var kmsKey[]
     */
    public $kmsKey;
    protected $_name = [
        'kmsKey' => 'KmsKey',
    ];

    public function validate()
    {
        if (\is_array($this->kmsKey)) {
            Model::validateArray($this->kmsKey);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->kmsKey) {
            if (\is_array($this->kmsKey)) {
                $res['KmsKey'] = [];
                $n1 = 0;
                foreach ($this->kmsKey as $item1) {
                    $res['KmsKey'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['KmsKey'])) {
            if (!empty($map['KmsKey'])) {
                $model->kmsKey = [];
                $n1 = 0;
                foreach ($map['KmsKey'] as $item1) {
                    $model->kmsKey[$n1++] = kmsKey::fromMap($item1);
                }
            }
        }

        return $model;
    }
}

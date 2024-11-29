<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models\DescribeKmsKeysResponseBody;

use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeKmsKeysResponseBody\kmsKeys\kmsKey;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->kmsKey) {
            $res['KmsKey'] = [];
            if (null !== $this->kmsKey && \is_array($this->kmsKey)) {
                $n = 0;
                foreach ($this->kmsKey as $item) {
                    $res['KmsKey'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['KmsKey'])) {
            if (!empty($map['KmsKey'])) {
                $model->kmsKey = [];
                $n             = 0;
                foreach ($map['KmsKey'] as $item) {
                    $model->kmsKey[$n++] = null !== $item ? kmsKey::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

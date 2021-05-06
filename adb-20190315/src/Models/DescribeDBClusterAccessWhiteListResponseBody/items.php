<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models\DescribeDBClusterAccessWhiteListResponseBody;

use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeDBClusterAccessWhiteListResponseBody\items\IPArray;
use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @var IPArray[]
     */
    public $IPArray;
    protected $_name = [
        'IPArray' => 'IPArray',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->IPArray) {
            $res['IPArray'] = [];
            if (null !== $this->IPArray && \is_array($this->IPArray)) {
                $n = 0;
                foreach ($this->IPArray as $item) {
                    $res['IPArray'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return items
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IPArray'])) {
            if (!empty($map['IPArray'])) {
                $model->IPArray = [];
                $n              = 0;
                foreach ($map['IPArray'] as $item) {
                    $model->IPArray[$n++] = null !== $item ? IPArray::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

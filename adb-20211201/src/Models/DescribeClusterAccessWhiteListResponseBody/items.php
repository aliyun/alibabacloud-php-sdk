<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\DescribeClusterAccessWhiteListResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeClusterAccessWhiteListResponseBody\items\IPArray;

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
        if (\is_array($this->IPArray)) {
            Model::validateArray($this->IPArray);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->IPArray) {
            if (\is_array($this->IPArray)) {
                $res['IPArray'] = [];
                $n1 = 0;
                foreach ($this->IPArray as $item1) {
                    $res['IPArray'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['IPArray'])) {
            if (!empty($map['IPArray'])) {
                $model->IPArray = [];
                $n1 = 0;
                foreach ($map['IPArray'] as $item1) {
                    $model->IPArray[$n1++] = IPArray::fromMap($item1);
                }
            }
        }

        return $model;
    }
}

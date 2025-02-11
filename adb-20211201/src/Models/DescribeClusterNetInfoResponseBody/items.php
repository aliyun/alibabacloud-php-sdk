<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\DescribeClusterNetInfoResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeClusterNetInfoResponseBody\items\address;

class items extends Model
{
    /**
     * @var address[]
     */
    public $address;
    protected $_name = [
        'address' => 'Address',
    ];

    public function validate()
    {
        if (\is_array($this->address)) {
            Model::validateArray($this->address);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->address) {
            if (\is_array($this->address)) {
                $res['Address'] = [];
                $n1             = 0;
                foreach ($this->address as $item1) {
                    $res['Address'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Address'])) {
            if (!empty($map['Address'])) {
                $model->address = [];
                $n1             = 0;
                foreach ($map['Address'] as $item1) {
                    $model->address[$n1++] = address::fromMap($item1);
                }
            }
        }

        return $model;
    }
}

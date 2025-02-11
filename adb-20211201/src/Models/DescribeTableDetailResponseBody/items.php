<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\DescribeTableDetailResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeTableDetailResponseBody\items\shard;

class items extends Model
{
    /**
     * @var shard[]
     */
    public $shard;
    protected $_name = [
        'shard' => 'Shard',
    ];

    public function validate()
    {
        if (\is_array($this->shard)) {
            Model::validateArray($this->shard);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->shard) {
            if (\is_array($this->shard)) {
                $res['Shard'] = [];
                $n1           = 0;
                foreach ($this->shard as $item1) {
                    $res['Shard'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Shard'])) {
            if (!empty($map['Shard'])) {
                $model->shard = [];
                $n1           = 0;
                foreach ($map['Shard'] as $item1) {
                    $model->shard[$n1++] = shard::fromMap($item1);
                }
            }
        }

        return $model;
    }
}

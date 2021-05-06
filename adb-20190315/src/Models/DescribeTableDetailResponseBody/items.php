<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models\DescribeTableDetailResponseBody;

use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeTableDetailResponseBody\items\shard;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->shard) {
            $res['Shard'] = [];
            if (null !== $this->shard && \is_array($this->shard)) {
                $n = 0;
                foreach ($this->shard as $item) {
                    $res['Shard'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (isset($map['Shard'])) {
            if (!empty($map['Shard'])) {
                $model->shard = [];
                $n            = 0;
                foreach ($map['Shard'] as $item) {
                    $model->shard[$n++] = null !== $item ? shard::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

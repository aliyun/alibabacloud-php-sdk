<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smc\V20190601\Models\DescribeSourceServersResponseBody\sourceServers\sourceServer\dataDisks\dataDisk;

use AlibabaCloud\SDK\Smc\V20190601\Models\DescribeSourceServersResponseBody\sourceServers\sourceServer\dataDisks\dataDisk\parts\part;
use AlibabaCloud\Tea\Model;

class parts extends Model
{
    /**
     * @var part[]
     */
    public $part;
    protected $_name = [
        'part' => 'Part',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->part) {
            $res['Part'] = [];
            if (null !== $this->part && \is_array($this->part)) {
                $n = 0;
                foreach ($this->part as $item) {
                    $res['Part'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return parts
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Part'])) {
            if (!empty($map['Part'])) {
                $model->part = [];
                $n           = 0;
                foreach ($map['Part'] as $item) {
                    $model->part[$n++] = null !== $item ? part::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

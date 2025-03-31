<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smc\V20190601\Models\DescribeSourceServersResponseBody\sourceServers\sourceServer\disks\system;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Smc\V20190601\Models\DescribeSourceServersResponseBody\sourceServers\sourceServer\disks\system\parts\part;

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
        if (\is_array($this->part)) {
            Model::validateArray($this->part);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->part) {
            if (\is_array($this->part)) {
                $res['Part'] = [];
                $n1 = 0;
                foreach ($this->part as $item1) {
                    $res['Part'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Part'])) {
            if (!empty($map['Part'])) {
                $model->part = [];
                $n1 = 0;
                foreach ($map['Part'] as $item1) {
                    $model->part[$n1++] = part::fromMap($item1);
                }
            }
        }

        return $model;
    }
}

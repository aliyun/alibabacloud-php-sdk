<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeDBClusterPerformanceResponseBody\performanceKeys;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeDBClusterPerformanceResponseBody\performanceKeys\series\values;

class series extends Model
{
    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $role;

    /**
     * @var values[]
     */
    public $values;
    protected $_name = [
        'name' => 'Name',
        'role' => 'Role',
        'values' => 'Values',
    ];

    public function validate()
    {
        if (\is_array($this->values)) {
            Model::validateArray($this->values);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->role) {
            $res['Role'] = $this->role;
        }

        if (null !== $this->values) {
            if (\is_array($this->values)) {
                $res['Values'] = [];
                $n1 = 0;
                foreach ($this->values as $item1) {
                    $res['Values'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Role'])) {
            $model->role = $map['Role'];
        }

        if (isset($map['Values'])) {
            if (!empty($map['Values'])) {
                $model->values = [];
                $n1 = 0;
                foreach ($map['Values'] as $item1) {
                    $model->values[$n1] = values::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

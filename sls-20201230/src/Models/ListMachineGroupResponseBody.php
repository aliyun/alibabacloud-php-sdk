<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Tea\Model;

class ListMachineGroupResponseBody extends Model
{
    /**
     * @description 当前页返回的机器组数量。
     *
     * @var int
     */
    public $count;

    /**
     * @description 机器组名称列表。
     *
     * @var string[]
     */
    public $machinegroups;

    /**
     * @description 机器组总数量。
     *
     * @var int
     */
    public $total;
    protected $_name = [
        'count'         => 'count',
        'machinegroups' => 'machinegroups',
        'total'         => 'total',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->count) {
            $res['count'] = $this->count;
        }
        if (null !== $this->machinegroups) {
            $res['machinegroups'] = $this->machinegroups;
        }
        if (null !== $this->total) {
            $res['total'] = $this->total;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListMachineGroupResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['count'])) {
            $model->count = $map['count'];
        }
        if (isset($map['machinegroups'])) {
            if (!empty($map['machinegroups'])) {
                $model->machinegroups = $map['machinegroups'];
            }
        }
        if (isset($map['total'])) {
            $model->total = $map['total'];
        }

        return $model;
    }
}

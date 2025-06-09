<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Dara\Model;

class GetAppliedMachineGroupsResponseBody extends Model
{
    /**
     * @var int
     */
    public $count;

    /**
     * @var string[]
     */
    public $machinegroups;
    protected $_name = [
        'count' => 'count',
        'machinegroups' => 'machinegroups',
    ];

    public function validate()
    {
        if (\is_array($this->machinegroups)) {
            Model::validateArray($this->machinegroups);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->count) {
            $res['count'] = $this->count;
        }

        if (null !== $this->machinegroups) {
            if (\is_array($this->machinegroups)) {
                $res['machinegroups'] = [];
                $n1 = 0;
                foreach ($this->machinegroups as $item1) {
                    $res['machinegroups'][$n1++] = $item1;
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
        if (isset($map['count'])) {
            $model->count = $map['count'];
        }

        if (isset($map['machinegroups'])) {
            if (!empty($map['machinegroups'])) {
                $model->machinegroups = [];
                $n1 = 0;
                foreach ($map['machinegroups'] as $item1) {
                    $model->machinegroups[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}

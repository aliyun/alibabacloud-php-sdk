<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20210114\Models\DescribeScreenHostStatisticsResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string[]
     */
    public $safeCount;

    /**
     * @var string[]
     */
    public $suspEventMachineNames;

    /**
     * @var string[]
     */
    public $suspEventUuids;

    /**
     * @var string[]
     */
    public $weaknessMachineNames;

    /**
     * @var string[]
     */
    public $weaknessUuids;
    protected $_name = [
        'safeCount' => 'SafeCount',
        'suspEventMachineNames' => 'SuspEventMachineNames',
        'suspEventUuids' => 'SuspEventUuids',
        'weaknessMachineNames' => 'WeaknessMachineNames',
        'weaknessUuids' => 'WeaknessUuids',
    ];

    public function validate()
    {
        if (\is_array($this->safeCount)) {
            Model::validateArray($this->safeCount);
        }
        if (\is_array($this->suspEventMachineNames)) {
            Model::validateArray($this->suspEventMachineNames);
        }
        if (\is_array($this->suspEventUuids)) {
            Model::validateArray($this->suspEventUuids);
        }
        if (\is_array($this->weaknessMachineNames)) {
            Model::validateArray($this->weaknessMachineNames);
        }
        if (\is_array($this->weaknessUuids)) {
            Model::validateArray($this->weaknessUuids);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->safeCount) {
            if (\is_array($this->safeCount)) {
                $res['SafeCount'] = [];
                $n1 = 0;
                foreach ($this->safeCount as $item1) {
                    $res['SafeCount'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->suspEventMachineNames) {
            if (\is_array($this->suspEventMachineNames)) {
                $res['SuspEventMachineNames'] = [];
                $n1 = 0;
                foreach ($this->suspEventMachineNames as $item1) {
                    $res['SuspEventMachineNames'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->suspEventUuids) {
            if (\is_array($this->suspEventUuids)) {
                $res['SuspEventUuids'] = [];
                $n1 = 0;
                foreach ($this->suspEventUuids as $item1) {
                    $res['SuspEventUuids'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->weaknessMachineNames) {
            if (\is_array($this->weaknessMachineNames)) {
                $res['WeaknessMachineNames'] = [];
                $n1 = 0;
                foreach ($this->weaknessMachineNames as $item1) {
                    $res['WeaknessMachineNames'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->weaknessUuids) {
            if (\is_array($this->weaknessUuids)) {
                $res['WeaknessUuids'] = [];
                $n1 = 0;
                foreach ($this->weaknessUuids as $item1) {
                    $res['WeaknessUuids'][$n1] = $item1;
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
        if (isset($map['SafeCount'])) {
            if (!empty($map['SafeCount'])) {
                $model->safeCount = [];
                $n1 = 0;
                foreach ($map['SafeCount'] as $item1) {
                    $model->safeCount[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['SuspEventMachineNames'])) {
            if (!empty($map['SuspEventMachineNames'])) {
                $model->suspEventMachineNames = [];
                $n1 = 0;
                foreach ($map['SuspEventMachineNames'] as $item1) {
                    $model->suspEventMachineNames[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['SuspEventUuids'])) {
            if (!empty($map['SuspEventUuids'])) {
                $model->suspEventUuids = [];
                $n1 = 0;
                foreach ($map['SuspEventUuids'] as $item1) {
                    $model->suspEventUuids[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['WeaknessMachineNames'])) {
            if (!empty($map['WeaknessMachineNames'])) {
                $model->weaknessMachineNames = [];
                $n1 = 0;
                foreach ($map['WeaknessMachineNames'] as $item1) {
                    $model->weaknessMachineNames[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['WeaknessUuids'])) {
            if (!empty($map['WeaknessUuids'])) {
                $model->weaknessUuids = [];
                $n1 = 0;
                foreach ($map['WeaknessUuids'] as $item1) {
                    $model->weaknessUuids[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

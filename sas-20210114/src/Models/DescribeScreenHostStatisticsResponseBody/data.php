<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20210114\Models\DescribeScreenHostStatisticsResponseBody;

use AlibabaCloud\Tea\Model;

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

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->safeCount) {
            $res['SafeCount'] = $this->safeCount;
        }
        if (null !== $this->suspEventMachineNames) {
            $res['SuspEventMachineNames'] = $this->suspEventMachineNames;
        }
        if (null !== $this->suspEventUuids) {
            $res['SuspEventUuids'] = $this->suspEventUuids;
        }
        if (null !== $this->weaknessMachineNames) {
            $res['WeaknessMachineNames'] = $this->weaknessMachineNames;
        }
        if (null !== $this->weaknessUuids) {
            $res['WeaknessUuids'] = $this->weaknessUuids;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SafeCount'])) {
            if (!empty($map['SafeCount'])) {
                $model->safeCount = $map['SafeCount'];
            }
        }
        if (isset($map['SuspEventMachineNames'])) {
            if (!empty($map['SuspEventMachineNames'])) {
                $model->suspEventMachineNames = $map['SuspEventMachineNames'];
            }
        }
        if (isset($map['SuspEventUuids'])) {
            if (!empty($map['SuspEventUuids'])) {
                $model->suspEventUuids = $map['SuspEventUuids'];
            }
        }
        if (isset($map['WeaknessMachineNames'])) {
            if (!empty($map['WeaknessMachineNames'])) {
                $model->weaknessMachineNames = $map['WeaknessMachineNames'];
            }
        }
        if (isset($map['WeaknessUuids'])) {
            if (!empty($map['WeaknessUuids'])) {
                $model->weaknessUuids = $map['WeaknessUuids'];
            }
        }

        return $model;
    }
}

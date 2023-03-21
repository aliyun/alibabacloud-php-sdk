<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetAlarmMachineCountResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $machineCount;
    protected $_name = [
        'machineCount' => 'MachineCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->machineCount) {
            $res['MachineCount'] = $this->machineCount;
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
        if (isset($map['MachineCount'])) {
            $model->machineCount = $map['MachineCount'];
        }

        return $model;
    }
}

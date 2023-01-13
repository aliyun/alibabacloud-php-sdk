<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class DeleteSoundCodeScheduleRequest extends Model
{
    /**
     * @var string
     */
    public $iotInstanceId;

    /**
     * @var string
     */
    public $scheduleCode;
    protected $_name = [
        'iotInstanceId' => 'IotInstanceId',
        'scheduleCode'  => 'ScheduleCode',
    ];

    public function validate()
    {
        Model::validateRequired('scheduleCode', $this->scheduleCode, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->iotInstanceId) {
            $res['IotInstanceId'] = $this->iotInstanceId;
        }
        if (null !== $this->scheduleCode) {
            $res['ScheduleCode'] = $this->scheduleCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteSoundCodeScheduleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IotInstanceId'])) {
            $model->iotInstanceId = $map['IotInstanceId'];
        }
        if (isset($map['ScheduleCode'])) {
            $model->scheduleCode = $map['ScheduleCode'];
        }

        return $model;
    }
}

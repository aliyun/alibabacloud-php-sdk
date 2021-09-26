<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundundbaudit\V20180320\Models;

use AlibabaCloud\Tea\Model;

class ReadMarkSystemAlarmsRequest extends Model
{
    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string[]
     */
    public $alarmIds;
    protected $_name = [
        'regionId'   => 'RegionId',
        'instanceId' => 'InstanceId',
        'alarmIds'   => 'AlarmIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->alarmIds) {
            $res['AlarmIds'] = $this->alarmIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ReadMarkSystemAlarmsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['AlarmIds'])) {
            if (!empty($map['AlarmIds'])) {
                $model->alarmIds = $map['AlarmIds'];
            }
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Amqp\V20190901\Models\ListInstanceAlarmResponseBody\data\voList;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Amqp\V20190901\Models\ListInstanceAlarmResponseBody\data\voList\commodityInstanceAlarmVO\alarmVO;

class commodityInstanceAlarmVO extends Model
{
    /**
     * @var alarmVO
     */
    public $alarmVO;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $instanceName;
    protected $_name = [
        'alarmVO' => 'AlarmVO',
        'instanceId' => 'InstanceId',
        'instanceName' => 'InstanceName',
    ];

    public function validate()
    {
        if (null !== $this->alarmVO) {
            $this->alarmVO->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->alarmVO) {
            $res['AlarmVO'] = null !== $this->alarmVO ? $this->alarmVO->toArray($noStream) : $this->alarmVO;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
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
        if (isset($map['AlarmVO'])) {
            $model->alarmVO = alarmVO::fromMap($map['AlarmVO']);
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }

        return $model;
    }
}

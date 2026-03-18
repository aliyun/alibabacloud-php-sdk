<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Starrocks\V20221019\Models;

use AlibabaCloud\Dara\Model;

class ModifyMaintainableTimeRequest extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $maintainableTimePeriod;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'maintainableTimePeriod' => 'MaintainableTimePeriod',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->maintainableTimePeriod) {
            $res['MaintainableTimePeriod'] = $this->maintainableTimePeriod;
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
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['MaintainableTimePeriod'])) {
            $model->maintainableTimePeriod = $map['MaintainableTimePeriod'];
        }

        return $model;
    }
}

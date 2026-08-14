<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models;

use AlibabaCloud\Dara\Model;

class ExecuteInstanceFailoverRequest extends Model
{
    /**
     * @var string
     */
    public $instanceFailoverStatus;

    /**
     * @var string
     */
    public $instanceId;
    protected $_name = [
        'instanceFailoverStatus' => 'InstanceFailoverStatus',
        'instanceId' => 'InstanceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceFailoverStatus) {
            $res['InstanceFailoverStatus'] = $this->instanceFailoverStatus;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
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
        if (isset($map['InstanceFailoverStatus'])) {
            $model->instanceFailoverStatus = $map['InstanceFailoverStatus'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OnsMqtt\V20200420\Models;

use AlibabaCloud\Dara\Model;

class DisasterRecoveryRequest extends Model
{
    /**
     * @var string
     */
    public $instanceId;
    /**
     * @var string
     */
    public $recoveryInstanceId;
    protected $_name = [
        'instanceId'         => 'InstanceId',
        'recoveryInstanceId' => 'RecoveryInstanceId',
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

        if (null !== $this->recoveryInstanceId) {
            $res['RecoveryInstanceId'] = $this->recoveryInstanceId;
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

        if (isset($map['RecoveryInstanceId'])) {
            $model->recoveryInstanceId = $map['RecoveryInstanceId'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OnsMqtt\V20200420\Models;

use AlibabaCloud\Dara\Model;

class DisasterDowngradeRequest extends Model
{
    /**
     * @var string
     */
    public $downgradeInstanceId;

    /**
     * @var string
     */
    public $instanceId;
    protected $_name = [
        'downgradeInstanceId' => 'DowngradeInstanceId',
        'instanceId' => 'InstanceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->downgradeInstanceId) {
            $res['DowngradeInstanceId'] = $this->downgradeInstanceId;
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
        if (isset($map['DowngradeInstanceId'])) {
            $model->downgradeInstanceId = $map['DowngradeInstanceId'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        return $model;
    }
}

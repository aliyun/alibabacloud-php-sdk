<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models;

use AlibabaCloud\Dara\Model;

class AutoRenewInstanceParam extends Model
{
    /**
     * @var string
     */
    public $autoRenew;
    /**
     * @var string
     */
    public $autoRenewDuration;
    /**
     * @var string
     */
    public $autoRenewDurationUnit;
    /**
     * @var string
     */
    public $instanceId;
    protected $_name = [
        'autoRenew'             => 'AutoRenew',
        'autoRenewDuration'     => 'AutoRenewDuration',
        'autoRenewDurationUnit' => 'AutoRenewDurationUnit',
        'instanceId'            => 'InstanceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->autoRenew) {
            $res['AutoRenew'] = $this->autoRenew;
        }

        if (null !== $this->autoRenewDuration) {
            $res['AutoRenewDuration'] = $this->autoRenewDuration;
        }

        if (null !== $this->autoRenewDurationUnit) {
            $res['AutoRenewDurationUnit'] = $this->autoRenewDurationUnit;
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
        if (isset($map['AutoRenew'])) {
            $model->autoRenew = $map['AutoRenew'];
        }

        if (isset($map['AutoRenewDuration'])) {
            $model->autoRenewDuration = $map['AutoRenewDuration'];
        }

        if (isset($map['AutoRenewDurationUnit'])) {
            $model->autoRenewDurationUnit = $map['AutoRenewDurationUnit'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        return $model;
    }
}

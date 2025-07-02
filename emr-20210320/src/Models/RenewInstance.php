<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models;

use AlibabaCloud\Dara\Model;

class RenewInstance extends Model
{
    /**
     * @var int
     */
    public $emrRenewDuration;

    /**
     * @var string
     */
    public $emrRenewDurationUnit;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var int
     */
    public $renewDuration;

    /**
     * @var string
     */
    public $renewDurationUnit;
    protected $_name = [
        'emrRenewDuration' => 'EmrRenewDuration',
        'emrRenewDurationUnit' => 'EmrRenewDurationUnit',
        'instanceId' => 'InstanceId',
        'renewDuration' => 'RenewDuration',
        'renewDurationUnit' => 'RenewDurationUnit',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->emrRenewDuration) {
            $res['EmrRenewDuration'] = $this->emrRenewDuration;
        }

        if (null !== $this->emrRenewDurationUnit) {
            $res['EmrRenewDurationUnit'] = $this->emrRenewDurationUnit;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->renewDuration) {
            $res['RenewDuration'] = $this->renewDuration;
        }

        if (null !== $this->renewDurationUnit) {
            $res['RenewDurationUnit'] = $this->renewDurationUnit;
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
        if (isset($map['EmrRenewDuration'])) {
            $model->emrRenewDuration = $map['EmrRenewDuration'];
        }

        if (isset($map['EmrRenewDurationUnit'])) {
            $model->emrRenewDurationUnit = $map['EmrRenewDurationUnit'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['RenewDuration'])) {
            $model->renewDuration = $map['RenewDuration'];
        }

        if (isset($map['RenewDurationUnit'])) {
            $model->renewDurationUnit = $map['RenewDurationUnit'];
        }

        return $model;
    }
}

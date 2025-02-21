<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models;

use AlibabaCloud\Dara\Model;

class AutoRenewInstance extends Model
{
    /**
     * @var bool
     */
    public $autoRenew;
    /**
     * @var int
     */
    public $autoRenewDuration;
    /**
     * @var string
     */
    public $autoRenewDurationUnit;
    /**
     * @var int
     */
    public $emrAutoRenewDuration;
    /**
     * @var string
     */
    public $emrAutoRenewDurationUnit;
    /**
     * @var string
     */
    public $instanceId;
    protected $_name = [
        'autoRenew'                => 'AutoRenew',
        'autoRenewDuration'        => 'AutoRenewDuration',
        'autoRenewDurationUnit'    => 'AutoRenewDurationUnit',
        'emrAutoRenewDuration'     => 'EmrAutoRenewDuration',
        'emrAutoRenewDurationUnit' => 'EmrAutoRenewDurationUnit',
        'instanceId'               => 'InstanceId',
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

        if (null !== $this->emrAutoRenewDuration) {
            $res['EmrAutoRenewDuration'] = $this->emrAutoRenewDuration;
        }

        if (null !== $this->emrAutoRenewDurationUnit) {
            $res['EmrAutoRenewDurationUnit'] = $this->emrAutoRenewDurationUnit;
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

        if (isset($map['EmrAutoRenewDuration'])) {
            $model->emrAutoRenewDuration = $map['EmrAutoRenewDuration'];
        }

        if (isset($map['EmrAutoRenewDurationUnit'])) {
            $model->emrAutoRenewDurationUnit = $map['EmrAutoRenewDurationUnit'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        return $model;
    }
}

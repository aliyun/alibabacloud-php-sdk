<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstanceAutoRenewAttributeResponseBody\instanceRenewAttributes;

use AlibabaCloud\Dara\Model;

class instanceRenewAttribute extends Model
{
    /**
     * @var bool
     */
    public $autoRenewEnabled;

    /**
     * @var int
     */
    public $duration;

    /**
     * @var bool
     */
    public $enableExpectedRenewDay;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $periodUnit;

    /**
     * @var string
     */
    public $renewalStatus;
    protected $_name = [
        'autoRenewEnabled' => 'AutoRenewEnabled',
        'duration' => 'Duration',
        'enableExpectedRenewDay' => 'EnableExpectedRenewDay',
        'instanceId' => 'InstanceId',
        'periodUnit' => 'PeriodUnit',
        'renewalStatus' => 'RenewalStatus',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->autoRenewEnabled) {
            $res['AutoRenewEnabled'] = $this->autoRenewEnabled;
        }

        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }

        if (null !== $this->enableExpectedRenewDay) {
            $res['EnableExpectedRenewDay'] = $this->enableExpectedRenewDay;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->periodUnit) {
            $res['PeriodUnit'] = $this->periodUnit;
        }

        if (null !== $this->renewalStatus) {
            $res['RenewalStatus'] = $this->renewalStatus;
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
        if (isset($map['AutoRenewEnabled'])) {
            $model->autoRenewEnabled = $map['AutoRenewEnabled'];
        }

        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }

        if (isset($map['EnableExpectedRenewDay'])) {
            $model->enableExpectedRenewDay = $map['EnableExpectedRenewDay'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['PeriodUnit'])) {
            $model->periodUnit = $map['PeriodUnit'];
        }

        if (isset($map['RenewalStatus'])) {
            $model->renewalStatus = $map['RenewalStatus'];
        }

        return $model;
    }
}

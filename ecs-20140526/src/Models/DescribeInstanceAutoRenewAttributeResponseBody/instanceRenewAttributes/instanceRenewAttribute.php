<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstanceAutoRenewAttributeResponseBody\instanceRenewAttributes;

use AlibabaCloud\Tea\Model;

class instanceRenewAttribute extends Model
{
    /**
     * @description Indicates whether auto-renewal is enabled.
     *
     * @example false
     *
     * @var bool
     */
    public $autoRenewEnabled;

    /**
     * @description The auto-renewal duration.
     *
     * @example 1
     *
     * @var int
     */
    public $duration;

    /**
     * @description The ID of the instance.
     *
     * @example i-bp18x3z4hc7bixhx****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The unit of the auto-renewal duration.
     *
     * @example week
     *
     * @var string
     */
    public $periodUnit;

    /**
     * @description The auto-renewal state of the instance. Valid values:
     *
     *   AutoRenewal: Auto-renewal is enabled for the instance.
     *   Normal: Auto-renewal is disabled for the instance.
     *   NotRenewal: The instance is not to be renewed. The system sends no more expiration reminders, but sends only a non-renewal reminder three days before the expiration date. For an instance that is not to be renewed, you can call the [ModifyInstanceAutoRenewAttribute](~~52843~~) operation to change its auto-renewal status to `Normal`. Then, you can manually renew the instance or enable auto-renewal for the instance.
     *
     * @example Normal
     *
     * @var string
     */
    public $renewalStatus;
    protected $_name = [
        'autoRenewEnabled' => 'AutoRenewEnabled',
        'duration'         => 'Duration',
        'instanceId'       => 'InstanceId',
        'periodUnit'       => 'PeriodUnit',
        'renewalStatus'    => 'RenewalStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoRenewEnabled) {
            $res['AutoRenewEnabled'] = $this->autoRenewEnabled;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
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

    /**
     * @param array $map
     *
     * @return instanceRenewAttribute
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoRenewEnabled'])) {
            $model->autoRenewEnabled = $map['AutoRenewEnabled'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
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

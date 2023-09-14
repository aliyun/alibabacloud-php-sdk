<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models;

use AlibabaCloud\Tea\Model;

class AutoRenewInstance extends Model
{
    /**
     * @description 自动续费。
     *
     * @example true
     *
     * @var bool
     */
    public $autoRenew;

    /**
     * @description 自动续费时长。
     *
     * @example 12
     *
     * @var int
     */
    public $autoRenewDuration;

    /**
     * @description 自动付费时长单位。
     *
     * @example Month
     *
     * @var string
     */
    public $autoRenewDurationUnit;

    /**
     * @description emr实例自动续费时长。
     *
     * @example 12
     *
     * @var int
     */
    public $emrAutoRenewDuration;

    /**
     * @description emr实例自动续费时长单位。
     *
     * @example Month
     *
     * @var string
     */
    public $emrAutoRenewDurationUnit;

    /**
     * @description 节点ID。
     *
     * @example i-bp1cudc25w2bfwl5****
     *
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
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return AutoRenewInstance
     */
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

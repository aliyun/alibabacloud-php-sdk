<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models;

use AlibabaCloud\Tea\Model;

class RenewInstance extends Model
{
    /**
     * @description emr实例续费时长。
     *
     * @example 12
     *
     * @var int
     */
    public $emrRenewDuration;

    /**
     * @description emr实例续费时长单位。
     *
     * @example Month
     *
     * @var string
     */
    public $emrRenewDurationUnit;

    /**
     * @description 节点ID。
     *
     * @example i-bp1cudc25w2bfwl5****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description 续费时长。
     *
     * @example 12
     *
     * @var int
     */
    public $renewDuration;

    /**
     * @description 付费时长单位。
     *
     * @example Month
     *
     * @var string
     */
    public $renewDurationUnit;
    protected $_name = [
        'emrRenewDuration'     => 'EmrRenewDuration',
        'emrRenewDurationUnit' => 'EmrRenewDurationUnit',
        'instanceId'           => 'InstanceId',
        'renewDuration'        => 'RenewDuration',
        'renewDurationUnit'    => 'RenewDurationUnit',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return RenewInstance
     */
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

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models\DescribeElasticStrengthResponseBody;

use AlibabaCloud\Tea\Model;

class resourcePools extends Model
{
    /**
     * @description The error code returned when the scaling strength is the weakest.
     *
     * @example IMG_NOT_SUPPORTED
     *
     * @var string
     */
    public $code;

    /**
     * @description The instance type of the resource pool.
     *
     * @example ecs.c7t.xlarge
     *
     * @var string
     */
    public $instanceType;

    /**
     * @description The error message returned when the scaling strength is the weakest.
     *
     * @example The instanceType does not support the image in the configuration.
     *
     * @var string
     */
    public $msg;

    /**
     * @description The scaling strength of the resource pool.
     *
     * @example 0.6
     *
     * @var float
     */
    public $strength;

    /**
     * @description The IDs of the vSwitches in the zones of the resource pool.
     *
     * @var string[]
     */
    public $vSwitchIds;

    /**
     * @description The zone ID of the resource pool.
     *
     * @example cn-hangzhou-g
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'code'         => 'Code',
        'instanceType' => 'InstanceType',
        'msg'          => 'Msg',
        'strength'     => 'Strength',
        'vSwitchIds'   => 'VSwitchIds',
        'zoneId'       => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->msg) {
            $res['Msg'] = $this->msg;
        }
        if (null !== $this->strength) {
            $res['Strength'] = $this->strength;
        }
        if (null !== $this->vSwitchIds) {
            $res['VSwitchIds'] = $this->vSwitchIds;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resourcePools
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['Msg'])) {
            $model->msg = $map['Msg'];
        }
        if (isset($map['Strength'])) {
            $model->strength = $map['Strength'];
        }
        if (isset($map['VSwitchIds'])) {
            if (!empty($map['VSwitchIds'])) {
                $model->vSwitchIds = $map['VSwitchIds'];
            }
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}

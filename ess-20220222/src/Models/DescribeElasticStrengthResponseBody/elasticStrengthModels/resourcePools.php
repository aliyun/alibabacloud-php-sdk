<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models\DescribeElasticStrengthResponseBody\elasticStrengthModels;

use AlibabaCloud\Tea\Model;

class resourcePools extends Model
{
    /**
     * @example InstanceTypesOrDiskTypesNotSupported
     *
     * @var string
     */
    public $code;

    /**
     * @example ecs.r7.large
     *
     * @var string
     */
    public $instanceType;

    /**
     * @example The instanceTypes or diskTypes are not supported.
     *
     * @var string
     */
    public $msg;

    /**
     * @example 0.6
     *
     * @var float
     */
    public $strength;

    /**
     * @var string[]
     */
    public $vSwitchIds;

    /**
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

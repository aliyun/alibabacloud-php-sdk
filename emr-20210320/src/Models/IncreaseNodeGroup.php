<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models;

use AlibabaCloud\Tea\Model;

class IncreaseNodeGroup extends Model
{
    /**
     * @description 描述。
     *
     * @example 描述
     *
     * @var string
     */
    public $description;

    /**
     * @description 节点数量。
     *
     * @example 3
     *
     * @var int
     */
    public $nodeCount;

    /**
     * @description 节点组ID。
     *
     * @example ng-869471354ecd****
     *
     * @var string
     */
    public $nodeGroupId;

    /**
     * @description 付费时长。
     *
     * @example 12
     *
     * @var int
     */
    public $paymentDuration;

    /**
     * @description 付费时长单位。
     *
     * @example Month
     *
     * @var string
     */
    public $paymentDurationUnit;

    /**
     * @description 虚拟机交换机ID。
     *
     * @example vsw-hp35g7ya5ymw68mmg****
     *
     * @var string
     */
    public $vSwitchId;
    protected $_name = [
        'description'         => 'Description',
        'nodeCount'           => 'NodeCount',
        'nodeGroupId'         => 'NodeGroupId',
        'paymentDuration'     => 'PaymentDuration',
        'paymentDurationUnit' => 'PaymentDurationUnit',
        'vSwitchId'           => 'VSwitchId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->nodeCount) {
            $res['NodeCount'] = $this->nodeCount;
        }
        if (null !== $this->nodeGroupId) {
            $res['NodeGroupId'] = $this->nodeGroupId;
        }
        if (null !== $this->paymentDuration) {
            $res['PaymentDuration'] = $this->paymentDuration;
        }
        if (null !== $this->paymentDurationUnit) {
            $res['PaymentDurationUnit'] = $this->paymentDurationUnit;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return IncreaseNodeGroup
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['NodeCount'])) {
            $model->nodeCount = $map['NodeCount'];
        }
        if (isset($map['NodeGroupId'])) {
            $model->nodeGroupId = $map['NodeGroupId'];
        }
        if (isset($map['PaymentDuration'])) {
            $model->paymentDuration = $map['PaymentDuration'];
        }
        if (isset($map['PaymentDurationUnit'])) {
            $model->paymentDurationUnit = $map['PaymentDurationUnit'];
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }

        return $model;
    }
}

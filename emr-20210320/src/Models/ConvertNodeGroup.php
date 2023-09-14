<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models;

use AlibabaCloud\Tea\Model;

class ConvertNodeGroup extends Model
{
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
     * @description 付费类型。
     *
     * @example PayAsYouGo
     *
     * @var string
     */
    public $paymentType;
    protected $_name = [
        'nodeGroupId'         => 'NodeGroupId',
        'paymentDuration'     => 'PaymentDuration',
        'paymentDurationUnit' => 'PaymentDurationUnit',
        'paymentType'         => 'PaymentType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nodeGroupId) {
            $res['NodeGroupId'] = $this->nodeGroupId;
        }
        if (null !== $this->paymentDuration) {
            $res['PaymentDuration'] = $this->paymentDuration;
        }
        if (null !== $this->paymentDurationUnit) {
            $res['PaymentDurationUnit'] = $this->paymentDurationUnit;
        }
        if (null !== $this->paymentType) {
            $res['PaymentType'] = $this->paymentType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ConvertNodeGroup
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NodeGroupId'])) {
            $model->nodeGroupId = $map['NodeGroupId'];
        }
        if (isset($map['PaymentDuration'])) {
            $model->paymentDuration = $map['PaymentDuration'];
        }
        if (isset($map['PaymentDurationUnit'])) {
            $model->paymentDurationUnit = $map['PaymentDurationUnit'];
        }
        if (isset($map['PaymentType'])) {
            $model->paymentType = $map['PaymentType'];
        }

        return $model;
    }
}

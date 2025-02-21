<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models;

use AlibabaCloud\Dara\Model;

class IncreaseNodeGroupParam extends Model
{
    /**
     * @var int
     */
    public $nodeCount;
    /**
     * @var string
     */
    public $nodeGroupId;
    /**
     * @var int
     */
    public $paymentDuration;
    /**
     * @var string
     */
    public $paymentDurationUnit;
    /**
     * @var string
     */
    public $vSwitchId;
    protected $_name = [
        'nodeCount'           => 'NodeCount',
        'nodeGroupId'         => 'NodeGroupId',
        'paymentDuration'     => 'PaymentDuration',
        'paymentDurationUnit' => 'PaymentDurationUnit',
        'vSwitchId'           => 'VSwitchId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
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

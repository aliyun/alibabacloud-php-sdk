<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models\ModifyScalingGroupRequest;

use AlibabaCloud\Tea\Model;

class capacityOptions extends Model
{
    /**
     * @var bool
     */
    public $compensateWithOnDemand;

    /**
     * @var int
     */
    public $onDemandBaseCapacity;

    /**
     * @var int
     */
    public $onDemandPercentageAboveBaseCapacity;

    /**
     * @var bool
     */
    public $spotAutoReplaceOnDemand;
    protected $_name = [
        'compensateWithOnDemand'              => 'CompensateWithOnDemand',
        'onDemandBaseCapacity'                => 'OnDemandBaseCapacity',
        'onDemandPercentageAboveBaseCapacity' => 'OnDemandPercentageAboveBaseCapacity',
        'spotAutoReplaceOnDemand'             => 'SpotAutoReplaceOnDemand',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->compensateWithOnDemand) {
            $res['CompensateWithOnDemand'] = $this->compensateWithOnDemand;
        }
        if (null !== $this->onDemandBaseCapacity) {
            $res['OnDemandBaseCapacity'] = $this->onDemandBaseCapacity;
        }
        if (null !== $this->onDemandPercentageAboveBaseCapacity) {
            $res['OnDemandPercentageAboveBaseCapacity'] = $this->onDemandPercentageAboveBaseCapacity;
        }
        if (null !== $this->spotAutoReplaceOnDemand) {
            $res['SpotAutoReplaceOnDemand'] = $this->spotAutoReplaceOnDemand;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return capacityOptions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CompensateWithOnDemand'])) {
            $model->compensateWithOnDemand = $map['CompensateWithOnDemand'];
        }
        if (isset($map['OnDemandBaseCapacity'])) {
            $model->onDemandBaseCapacity = $map['OnDemandBaseCapacity'];
        }
        if (isset($map['OnDemandPercentageAboveBaseCapacity'])) {
            $model->onDemandPercentageAboveBaseCapacity = $map['OnDemandPercentageAboveBaseCapacity'];
        }
        if (isset($map['SpotAutoReplaceOnDemand'])) {
            $model->spotAutoReplaceOnDemand = $map['SpotAutoReplaceOnDemand'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models\DescribeScalingGroupsResponseBody\scalingGroups;

use AlibabaCloud\Dara\Model;

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
     * @var string
     */
    public $priceComparisonMode;
    /**
     * @var bool
     */
    public $spotAutoReplaceOnDemand;
    protected $_name = [
        'compensateWithOnDemand'              => 'CompensateWithOnDemand',
        'onDemandBaseCapacity'                => 'OnDemandBaseCapacity',
        'onDemandPercentageAboveBaseCapacity' => 'OnDemandPercentageAboveBaseCapacity',
        'priceComparisonMode'                 => 'PriceComparisonMode',
        'spotAutoReplaceOnDemand'             => 'SpotAutoReplaceOnDemand',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->priceComparisonMode) {
            $res['PriceComparisonMode'] = $this->priceComparisonMode;
        }

        if (null !== $this->spotAutoReplaceOnDemand) {
            $res['SpotAutoReplaceOnDemand'] = $this->spotAutoReplaceOnDemand;
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
        if (isset($map['CompensateWithOnDemand'])) {
            $model->compensateWithOnDemand = $map['CompensateWithOnDemand'];
        }

        if (isset($map['OnDemandBaseCapacity'])) {
            $model->onDemandBaseCapacity = $map['OnDemandBaseCapacity'];
        }

        if (isset($map['OnDemandPercentageAboveBaseCapacity'])) {
            $model->onDemandPercentageAboveBaseCapacity = $map['OnDemandPercentageAboveBaseCapacity'];
        }

        if (isset($map['PriceComparisonMode'])) {
            $model->priceComparisonMode = $map['PriceComparisonMode'];
        }

        if (isset($map['SpotAutoReplaceOnDemand'])) {
            $model->spotAutoReplaceOnDemand = $map['SpotAutoReplaceOnDemand'];
        }

        return $model;
    }
}

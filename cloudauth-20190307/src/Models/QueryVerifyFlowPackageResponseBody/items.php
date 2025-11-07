<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20190307\Models\QueryVerifyFlowPackageResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\QueryVerifyFlowPackageResponseBody\items\flowDetails;

class items extends Model
{
    /**
     * @var string
     */
    public $commodityName;

    /**
     * @var float
     */
    public $currCapacity;

    /**
     * @var string
     */
    public $currProportion;

    /**
     * @var flowDetails[]
     */
    public $flowDetails;

    /**
     * @var float
     */
    public $totalCapacity;

    /**
     * @var float
     */
    public $usedCapacity;
    protected $_name = [
        'commodityName' => 'CommodityName',
        'currCapacity' => 'CurrCapacity',
        'currProportion' => 'CurrProportion',
        'flowDetails' => 'FlowDetails',
        'totalCapacity' => 'TotalCapacity',
        'usedCapacity' => 'UsedCapacity',
    ];

    public function validate()
    {
        if (\is_array($this->flowDetails)) {
            Model::validateArray($this->flowDetails);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->commodityName) {
            $res['CommodityName'] = $this->commodityName;
        }

        if (null !== $this->currCapacity) {
            $res['CurrCapacity'] = $this->currCapacity;
        }

        if (null !== $this->currProportion) {
            $res['CurrProportion'] = $this->currProportion;
        }

        if (null !== $this->flowDetails) {
            if (\is_array($this->flowDetails)) {
                $res['FlowDetails'] = [];
                $n1 = 0;
                foreach ($this->flowDetails as $item1) {
                    $res['FlowDetails'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->totalCapacity) {
            $res['TotalCapacity'] = $this->totalCapacity;
        }

        if (null !== $this->usedCapacity) {
            $res['UsedCapacity'] = $this->usedCapacity;
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
        if (isset($map['CommodityName'])) {
            $model->commodityName = $map['CommodityName'];
        }

        if (isset($map['CurrCapacity'])) {
            $model->currCapacity = $map['CurrCapacity'];
        }

        if (isset($map['CurrProportion'])) {
            $model->currProportion = $map['CurrProportion'];
        }

        if (isset($map['FlowDetails'])) {
            if (!empty($map['FlowDetails'])) {
                $model->flowDetails = [];
                $n1 = 0;
                foreach ($map['FlowDetails'] as $item1) {
                    $model->flowDetails[$n1] = flowDetails::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['TotalCapacity'])) {
            $model->totalCapacity = $map['TotalCapacity'];
        }

        if (isset($map['UsedCapacity'])) {
            $model->usedCapacity = $map['UsedCapacity'];
        }

        return $model;
    }
}

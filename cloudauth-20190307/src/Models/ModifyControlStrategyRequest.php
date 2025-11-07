<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20190307\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\ModifyControlStrategyRequest\controlStrategyList;

class ModifyControlStrategyRequest extends Model
{
    /**
     * @var controlStrategyList[]
     */
    public $controlStrategyList;

    /**
     * @var string
     */
    public $productType;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'controlStrategyList' => 'ControlStrategyList',
        'productType' => 'ProductType',
        'regionId' => 'RegionId',
    ];

    public function validate()
    {
        if (\is_array($this->controlStrategyList)) {
            Model::validateArray($this->controlStrategyList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->controlStrategyList) {
            if (\is_array($this->controlStrategyList)) {
                $res['ControlStrategyList'] = [];
                $n1 = 0;
                foreach ($this->controlStrategyList as $item1) {
                    $res['ControlStrategyList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->productType) {
            $res['ProductType'] = $this->productType;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
        if (isset($map['ControlStrategyList'])) {
            if (!empty($map['ControlStrategyList'])) {
                $model->controlStrategyList = [];
                $n1 = 0;
                foreach ($map['ControlStrategyList'] as $item1) {
                    $model->controlStrategyList[$n1] = controlStrategyList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ProductType'])) {
            $model->productType = $map['ProductType'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}

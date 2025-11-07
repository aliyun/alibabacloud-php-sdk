<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20190307\Models;

use AlibabaCloud\Dara\Model;

class ModifyControlStrategyShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $controlStrategyListShrink;

    /**
     * @var string
     */
    public $productType;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'controlStrategyListShrink' => 'ControlStrategyList',
        'productType' => 'ProductType',
        'regionId' => 'RegionId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->controlStrategyListShrink) {
            $res['ControlStrategyList'] = $this->controlStrategyListShrink;
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
            $model->controlStrategyListShrink = $map['ControlStrategyList'];
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

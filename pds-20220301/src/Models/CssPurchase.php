<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Dara\Model;

class CssPurchase extends Model
{
    /**
     * @var string
     */
    public $chargeType;

    /**
     * @var string
     */
    public $commodityCode;

    /**
     * @var int
     */
    public $endDate;

    /**
     * @var int
     */
    public $gmtCreate;

    /**
     * @var CssInstanceComponent[]
     */
    public $instanceComponents;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $orderType;

    /**
     * @var string[]
     */
    public $purchaseParams;

    /**
     * @var int
     */
    public $startDate;
    protected $_name = [
        'chargeType' => 'chargeType',
        'commodityCode' => 'commodityCode',
        'endDate' => 'endDate',
        'gmtCreate' => 'gmtCreate',
        'instanceComponents' => 'instanceComponents',
        'instanceId' => 'instanceId',
        'orderType' => 'orderType',
        'purchaseParams' => 'purchaseParams',
        'startDate' => 'startDate',
    ];

    public function validate()
    {
        if (\is_array($this->instanceComponents)) {
            Model::validateArray($this->instanceComponents);
        }
        if (\is_array($this->purchaseParams)) {
            Model::validateArray($this->purchaseParams);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->chargeType) {
            $res['chargeType'] = $this->chargeType;
        }

        if (null !== $this->commodityCode) {
            $res['commodityCode'] = $this->commodityCode;
        }

        if (null !== $this->endDate) {
            $res['endDate'] = $this->endDate;
        }

        if (null !== $this->gmtCreate) {
            $res['gmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->instanceComponents) {
            if (\is_array($this->instanceComponents)) {
                $res['instanceComponents'] = [];
                $n1 = 0;
                foreach ($this->instanceComponents as $item1) {
                    $res['instanceComponents'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->instanceId) {
            $res['instanceId'] = $this->instanceId;
        }

        if (null !== $this->orderType) {
            $res['orderType'] = $this->orderType;
        }

        if (null !== $this->purchaseParams) {
            if (\is_array($this->purchaseParams)) {
                $res['purchaseParams'] = [];
                foreach ($this->purchaseParams as $key1 => $value1) {
                    $res['purchaseParams'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->startDate) {
            $res['startDate'] = $this->startDate;
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
        if (isset($map['chargeType'])) {
            $model->chargeType = $map['chargeType'];
        }

        if (isset($map['commodityCode'])) {
            $model->commodityCode = $map['commodityCode'];
        }

        if (isset($map['endDate'])) {
            $model->endDate = $map['endDate'];
        }

        if (isset($map['gmtCreate'])) {
            $model->gmtCreate = $map['gmtCreate'];
        }

        if (isset($map['instanceComponents'])) {
            if (!empty($map['instanceComponents'])) {
                $model->instanceComponents = [];
                $n1 = 0;
                foreach ($map['instanceComponents'] as $item1) {
                    $model->instanceComponents[$n1++] = CssInstanceComponent::fromMap($item1);
                }
            }
        }

        if (isset($map['instanceId'])) {
            $model->instanceId = $map['instanceId'];
        }

        if (isset($map['orderType'])) {
            $model->orderType = $map['orderType'];
        }

        if (isset($map['purchaseParams'])) {
            if (!empty($map['purchaseParams'])) {
                $model->purchaseParams = [];
                foreach ($map['purchaseParams'] as $key1 => $value1) {
                    $model->purchaseParams[$key1] = $value1;
                }
            }
        }

        if (isset($map['startDate'])) {
            $model->startDate = $map['startDate'];
        }

        return $model;
    }
}

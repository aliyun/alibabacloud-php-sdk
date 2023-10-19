<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Tea\Model;

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
        'chargeType'         => 'chargeType',
        'commodityCode'      => 'commodityCode',
        'endDate'            => 'endDate',
        'gmtCreate'          => 'gmtCreate',
        'instanceComponents' => 'instanceComponents',
        'instanceId'         => 'instanceId',
        'orderType'          => 'orderType',
        'purchaseParams'     => 'purchaseParams',
        'startDate'          => 'startDate',
    ];

    public function validate()
    {
    }

    public function toMap()
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
            $res['instanceComponents'] = [];
            if (null !== $this->instanceComponents && \is_array($this->instanceComponents)) {
                $n = 0;
                foreach ($this->instanceComponents as $item) {
                    $res['instanceComponents'][$n++] = null !== $item ? $item->toMap() : $item;
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
            $res['purchaseParams'] = $this->purchaseParams;
        }
        if (null !== $this->startDate) {
            $res['startDate'] = $this->startDate;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CssPurchase
     */
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
                $n                         = 0;
                foreach ($map['instanceComponents'] as $item) {
                    $model->instanceComponents[$n++] = null !== $item ? CssInstanceComponent::fromMap($item) : $item;
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
            $model->purchaseParams = $map['purchaseParams'];
        }
        if (isset($map['startDate'])) {
            $model->startDate = $map['startDate'];
        }

        return $model;
    }
}

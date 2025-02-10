<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wss\V20211221\Models\CreateMultiOrderShrinkRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Wss\V20211221\Models\CreateMultiOrderShrinkRequest\orderItems\components;

class orderItems extends Model
{
    /**
     * @var int
     */
    public $amount;
    /**
     * @var bool
     */
    public $autoPay;
    /**
     * @var bool
     */
    public $autoRenew;
    /**
     * @var components[]
     */
    public $components;
    /**
     * @var int
     */
    public $period;
    /**
     * @var string
     */
    public $periodUnit;
    /**
     * @var string
     */
    public $promotionId;
    /**
     * @var string[]
     */
    public $resourceIds;
    /**
     * @var string
     */
    public $resourceType;
    protected $_name = [
        'amount'       => 'Amount',
        'autoPay'      => 'AutoPay',
        'autoRenew'    => 'AutoRenew',
        'components'   => 'Components',
        'period'       => 'Period',
        'periodUnit'   => 'PeriodUnit',
        'promotionId'  => 'PromotionId',
        'resourceIds'  => 'ResourceIds',
        'resourceType' => 'ResourceType',
    ];

    public function validate()
    {
        if (\is_array($this->components)) {
            Model::validateArray($this->components);
        }
        if (\is_array($this->resourceIds)) {
            Model::validateArray($this->resourceIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->amount) {
            $res['Amount'] = $this->amount;
        }

        if (null !== $this->autoPay) {
            $res['AutoPay'] = $this->autoPay;
        }

        if (null !== $this->autoRenew) {
            $res['AutoRenew'] = $this->autoRenew;
        }

        if (null !== $this->components) {
            if (\is_array($this->components)) {
                $res['Components'] = [];
                $n1                = 0;
                foreach ($this->components as $item1) {
                    $res['Components'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }

        if (null !== $this->periodUnit) {
            $res['PeriodUnit'] = $this->periodUnit;
        }

        if (null !== $this->promotionId) {
            $res['PromotionId'] = $this->promotionId;
        }

        if (null !== $this->resourceIds) {
            if (\is_array($this->resourceIds)) {
                $res['ResourceIds'] = [];
                $n1                 = 0;
                foreach ($this->resourceIds as $item1) {
                    $res['ResourceIds'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
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
        if (isset($map['Amount'])) {
            $model->amount = $map['Amount'];
        }

        if (isset($map['AutoPay'])) {
            $model->autoPay = $map['AutoPay'];
        }

        if (isset($map['AutoRenew'])) {
            $model->autoRenew = $map['AutoRenew'];
        }

        if (isset($map['Components'])) {
            if (!empty($map['Components'])) {
                $model->components = [];
                $n1                = 0;
                foreach ($map['Components'] as $item1) {
                    $model->components[$n1++] = components::fromMap($item1);
                }
            }
        }

        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }

        if (isset($map['PeriodUnit'])) {
            $model->periodUnit = $map['PeriodUnit'];
        }

        if (isset($map['PromotionId'])) {
            $model->promotionId = $map['PromotionId'];
        }

        if (isset($map['ResourceIds'])) {
            if (!empty($map['ResourceIds'])) {
                $model->resourceIds = [];
                $n1                 = 0;
                foreach ($map['ResourceIds'] as $item1) {
                    $model->resourceIds[$n1++] = $item1;
                }
            }
        }

        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }

        return $model;
    }
}

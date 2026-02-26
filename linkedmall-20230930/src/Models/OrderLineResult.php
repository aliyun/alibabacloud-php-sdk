<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20230930\Models;

use AlibabaCloud\Dara\Model;

class OrderLineResult extends Model
{
    /**
     * @var EticketInfo[]
     */
    public $eticketInfos;

    /**
     * @var string
     */
    public $logisticsStatus;

    /**
     * @var string
     */
    public $number;

    /**
     * @var string
     */
    public $orderId;

    /**
     * @var string
     */
    public $orderLineId;

    /**
     * @var string
     */
    public $orderLineStatus;

    /**
     * @var int
     */
    public $payFee;

    /**
     * @var string
     */
    public $productId;

    /**
     * @var string
     */
    public $productPic;

    /**
     * @var string
     */
    public $productTitle;

    /**
     * @var string
     */
    public $skuId;

    /**
     * @var string
     */
    public $skuTitle;
    protected $_name = [
        'eticketInfos' => 'eticketInfos',
        'logisticsStatus' => 'logisticsStatus',
        'number' => 'number',
        'orderId' => 'orderId',
        'orderLineId' => 'orderLineId',
        'orderLineStatus' => 'orderLineStatus',
        'payFee' => 'payFee',
        'productId' => 'productId',
        'productPic' => 'productPic',
        'productTitle' => 'productTitle',
        'skuId' => 'skuId',
        'skuTitle' => 'skuTitle',
    ];

    public function validate()
    {
        if (\is_array($this->eticketInfos)) {
            Model::validateArray($this->eticketInfos);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->eticketInfos) {
            if (\is_array($this->eticketInfos)) {
                $res['eticketInfos'] = [];
                $n1 = 0;
                foreach ($this->eticketInfos as $item1) {
                    $res['eticketInfos'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->logisticsStatus) {
            $res['logisticsStatus'] = $this->logisticsStatus;
        }

        if (null !== $this->number) {
            $res['number'] = $this->number;
        }

        if (null !== $this->orderId) {
            $res['orderId'] = $this->orderId;
        }

        if (null !== $this->orderLineId) {
            $res['orderLineId'] = $this->orderLineId;
        }

        if (null !== $this->orderLineStatus) {
            $res['orderLineStatus'] = $this->orderLineStatus;
        }

        if (null !== $this->payFee) {
            $res['payFee'] = $this->payFee;
        }

        if (null !== $this->productId) {
            $res['productId'] = $this->productId;
        }

        if (null !== $this->productPic) {
            $res['productPic'] = $this->productPic;
        }

        if (null !== $this->productTitle) {
            $res['productTitle'] = $this->productTitle;
        }

        if (null !== $this->skuId) {
            $res['skuId'] = $this->skuId;
        }

        if (null !== $this->skuTitle) {
            $res['skuTitle'] = $this->skuTitle;
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
        if (isset($map['eticketInfos'])) {
            if (!empty($map['eticketInfos'])) {
                $model->eticketInfos = [];
                $n1 = 0;
                foreach ($map['eticketInfos'] as $item1) {
                    $model->eticketInfos[$n1] = EticketInfo::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['logisticsStatus'])) {
            $model->logisticsStatus = $map['logisticsStatus'];
        }

        if (isset($map['number'])) {
            $model->number = $map['number'];
        }

        if (isset($map['orderId'])) {
            $model->orderId = $map['orderId'];
        }

        if (isset($map['orderLineId'])) {
            $model->orderLineId = $map['orderLineId'];
        }

        if (isset($map['orderLineStatus'])) {
            $model->orderLineStatus = $map['orderLineStatus'];
        }

        if (isset($map['payFee'])) {
            $model->payFee = $map['payFee'];
        }

        if (isset($map['productId'])) {
            $model->productId = $map['productId'];
        }

        if (isset($map['productPic'])) {
            $model->productPic = $map['productPic'];
        }

        if (isset($map['productTitle'])) {
            $model->productTitle = $map['productTitle'];
        }

        if (isset($map['skuId'])) {
            $model->skuId = $map['skuId'];
        }

        if (isset($map['skuTitle'])) {
            $model->skuTitle = $map['skuTitle'];
        }

        return $model;
    }
}

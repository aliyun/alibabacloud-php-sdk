<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyplsapi\V20170525\Models;

use AlibabaCloud\Dara\Model;

class CreatePickUpWaybillPreQueryShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $consigneeInfoShrink;

    /**
     * @var string
     */
    public $cpCode;

    /**
     * @var string
     */
    public $orderChannels;

    /**
     * @var string
     */
    public $outerOrderCode;

    /**
     * @var string
     */
    public $preWeight;

    /**
     * @var string
     */
    public $senderInfoShrink;
    protected $_name = [
        'consigneeInfoShrink' => 'ConsigneeInfo',
        'cpCode' => 'CpCode',
        'orderChannels' => 'OrderChannels',
        'outerOrderCode' => 'OuterOrderCode',
        'preWeight' => 'PreWeight',
        'senderInfoShrink' => 'SenderInfo',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->consigneeInfoShrink) {
            $res['ConsigneeInfo'] = $this->consigneeInfoShrink;
        }

        if (null !== $this->cpCode) {
            $res['CpCode'] = $this->cpCode;
        }

        if (null !== $this->orderChannels) {
            $res['OrderChannels'] = $this->orderChannels;
        }

        if (null !== $this->outerOrderCode) {
            $res['OuterOrderCode'] = $this->outerOrderCode;
        }

        if (null !== $this->preWeight) {
            $res['PreWeight'] = $this->preWeight;
        }

        if (null !== $this->senderInfoShrink) {
            $res['SenderInfo'] = $this->senderInfoShrink;
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
        if (isset($map['ConsigneeInfo'])) {
            $model->consigneeInfoShrink = $map['ConsigneeInfo'];
        }

        if (isset($map['CpCode'])) {
            $model->cpCode = $map['CpCode'];
        }

        if (isset($map['OrderChannels'])) {
            $model->orderChannels = $map['OrderChannels'];
        }

        if (isset($map['OuterOrderCode'])) {
            $model->outerOrderCode = $map['OuterOrderCode'];
        }

        if (isset($map['PreWeight'])) {
            $model->preWeight = $map['PreWeight'];
        }

        if (isset($map['SenderInfo'])) {
            $model->senderInfoShrink = $map['SenderInfo'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyplsapi\V20170525\Models;

use AlibabaCloud\Tea\Model;

class CreatePickUpWaybillPreQueryShrinkRequest extends Model
{
    /**
     * @description The consignee information.
     *
     * This parameter is required.
     * @var string
     */
    public $consigneeInfoShrink;

    /**
     * @description The code of the courier company. If no courier company is specified, the system allocates a courier company.
     *
     * @example YTO
     *
     * @var string
     */
    public $cpCode;

    /**
     * @description The identifier of the external channel source. It cannot contain underscores.
     *
     * This parameter is required.
     * @example Test
     *
     * @var string
     */
    public $orderChannels;

    /**
     * @description The order number of the access system.
     *
     * @example 787DFHHDS989****
     *
     * @var string
     */
    public $outerOrderCode;

    /**
     * @description The estimated weight. Unit: gram.
     *
     * >  If you need to query the estimated price, this parameter is required.
     * @example 2000
     *
     * @var string
     */
    public $preWeight;

    /**
     * @description The sender information.
     *
     * This parameter is required.
     * @var string
     */
    public $senderInfoShrink;
    protected $_name = [
        'consigneeInfoShrink' => 'ConsigneeInfo',
        'cpCode'              => 'CpCode',
        'orderChannels'       => 'OrderChannels',
        'outerOrderCode'      => 'OuterOrderCode',
        'preWeight'           => 'PreWeight',
        'senderInfoShrink'    => 'SenderInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return CreatePickUpWaybillPreQueryShrinkRequest
     */
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

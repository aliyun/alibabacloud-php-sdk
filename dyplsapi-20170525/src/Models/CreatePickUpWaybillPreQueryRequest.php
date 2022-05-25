<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyplsapi\V20170525\Models;

use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\CreatePickUpWaybillPreQueryRequest\consigneeInfo;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\CreatePickUpWaybillPreQueryRequest\senderInfo;
use AlibabaCloud\Tea\Model;

class CreatePickUpWaybillPreQueryRequest extends Model
{
    /**
     * @var consigneeInfo
     */
    public $consigneeInfo;

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
     * @var senderInfo
     */
    public $senderInfo;
    protected $_name = [
        'consigneeInfo'  => 'ConsigneeInfo',
        'cpCode'         => 'CpCode',
        'orderChannels'  => 'OrderChannels',
        'outerOrderCode' => 'OuterOrderCode',
        'preWeight'      => 'PreWeight',
        'senderInfo'     => 'SenderInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->consigneeInfo) {
            $res['ConsigneeInfo'] = null !== $this->consigneeInfo ? $this->consigneeInfo->toMap() : null;
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
        if (null !== $this->senderInfo) {
            $res['SenderInfo'] = null !== $this->senderInfo ? $this->senderInfo->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreatePickUpWaybillPreQueryRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConsigneeInfo'])) {
            $model->consigneeInfo = consigneeInfo::fromMap($map['ConsigneeInfo']);
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
            $model->senderInfo = senderInfo::fromMap($map['SenderInfo']);
        }

        return $model;
    }
}

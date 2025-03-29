<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220926\Models;

use AlibabaCloud\Dara\Model;

class GetOssCheckStatusResponseBody extends Model
{
    /**
     * @var string
     */
    public $bid;

    /**
     * @var bool
     */
    public $buy;

    /**
     * @var string
     */
    public $commodityCode;

    /**
     * @var bool
     */
    public $indebt;

    /**
     * @var string
     */
    public $ramStatus;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $slsStatus;
    protected $_name = [
        'bid' => 'Bid',
        'buy' => 'Buy',
        'commodityCode' => 'CommodityCode',
        'indebt' => 'Indebt',
        'ramStatus' => 'RamStatus',
        'requestId' => 'RequestId',
        'slsStatus' => 'SlsStatus',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bid) {
            $res['Bid'] = $this->bid;
        }

        if (null !== $this->buy) {
            $res['Buy'] = $this->buy;
        }

        if (null !== $this->commodityCode) {
            $res['CommodityCode'] = $this->commodityCode;
        }

        if (null !== $this->indebt) {
            $res['Indebt'] = $this->indebt;
        }

        if (null !== $this->ramStatus) {
            $res['RamStatus'] = $this->ramStatus;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->slsStatus) {
            $res['SlsStatus'] = $this->slsStatus;
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
        if (isset($map['Bid'])) {
            $model->bid = $map['Bid'];
        }

        if (isset($map['Buy'])) {
            $model->buy = $map['Buy'];
        }

        if (isset($map['CommodityCode'])) {
            $model->commodityCode = $map['CommodityCode'];
        }

        if (isset($map['Indebt'])) {
            $model->indebt = $map['Indebt'];
        }

        if (isset($map['RamStatus'])) {
            $model->ramStatus = $map['RamStatus'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['SlsStatus'])) {
            $model->slsStatus = $map['SlsStatus'];
        }

        return $model;
    }
}

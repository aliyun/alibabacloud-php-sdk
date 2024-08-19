<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220926\Models;

use AlibabaCloud\Tea\Model;

class GetOssCheckStatusResponseBody extends Model
{
    /**
     * @description Bid。
     *
     * @example 26842
     *
     * @var string
     */
    public $bid;

    /**
     * @example True
     *
     * @var bool
     */
    public $buy;

    /**
     * @example xxx
     *
     * @var string
     */
    public $commodityCode;

    /**
     * @example False
     *
     * @var bool
     */
    public $indebt;

    /**
     * @example True
     *
     * @var string
     */
    public $ramStatus;

    /**
     * @example AAAAAA-BBBB-CCCCC-DDDD-EEEEEEEE****
     *
     * @var string
     */
    public $requestId;

    /**
     * @example True
     *
     * @var string
     */
    public $slsStatus;
    protected $_name = [
        'bid'           => 'Bid',
        'buy'           => 'Buy',
        'commodityCode' => 'CommodityCode',
        'indebt'        => 'Indebt',
        'ramStatus'     => 'RamStatus',
        'requestId'     => 'RequestId',
        'slsStatus'     => 'SlsStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return GetOssCheckStatusResponseBody
     */
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

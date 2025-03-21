<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Foasconsole\V20211028\Models\QueryConvertPrepayInstancePriceResponseBody\priceInfo;

use AlibabaCloud\Tea\Model;

class depreciateInfo extends Model
{
    /**
     * @example 20%
     *
     * @var string
     */
    public $cheapRate;

    /**
     * @example 8000
     *
     * @var string
     */
    public $cheapStandAmount;

    /**
     * @example true
     *
     * @var bool
     */
    public $isShow;

    /**
     * @example 4000
     *
     * @var string
     */
    public $monthPrice;

    /**
     * @example 10000
     *
     * @var string
     */
    public $originalStandAmount;

    /**
     * @example 2023-03-31T16:00:00Z
     *
     * @var string
     */
    public $startTime;
    protected $_name = [
        'cheapRate'           => 'CheapRate',
        'cheapStandAmount'    => 'CheapStandAmount',
        'isShow'              => 'IsShow',
        'monthPrice'          => 'MonthPrice',
        'originalStandAmount' => 'OriginalStandAmount',
        'startTime'           => 'StartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cheapRate) {
            $res['CheapRate'] = $this->cheapRate;
        }
        if (null !== $this->cheapStandAmount) {
            $res['CheapStandAmount'] = $this->cheapStandAmount;
        }
        if (null !== $this->isShow) {
            $res['IsShow'] = $this->isShow;
        }
        if (null !== $this->monthPrice) {
            $res['MonthPrice'] = $this->monthPrice;
        }
        if (null !== $this->originalStandAmount) {
            $res['OriginalStandAmount'] = $this->originalStandAmount;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return depreciateInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CheapRate'])) {
            $model->cheapRate = $map['CheapRate'];
        }
        if (isset($map['CheapStandAmount'])) {
            $model->cheapStandAmount = $map['CheapStandAmount'];
        }
        if (isset($map['IsShow'])) {
            $model->isShow = $map['IsShow'];
        }
        if (isset($map['MonthPrice'])) {
            $model->monthPrice = $map['MonthPrice'];
        }
        if (isset($map['OriginalStandAmount'])) {
            $model->originalStandAmount = $map['OriginalStandAmount'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}

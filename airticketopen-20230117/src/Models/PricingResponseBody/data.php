<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AirticketOpen\V20230117\Models\PricingResponseBody;

use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\PricingResponseBody\data\changedPriceInfo;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\PricingResponseBody\data\originalPriceInfo;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\PricingResponseBody\data\solution;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description price information after the price change
     *
     * @var changedPriceInfo
     */
    public $changedPriceInfo;

    /**
     * @description whether the price has changed
     *
     * @example true
     *
     * @var bool
     */
    public $isChanged;

    /**
     * @description the price information before the change, only available when is_changed = true
     *
     * @var originalPriceInfo
     */
    public $originalPriceInfo;

    /**
     * @description remaining seats: A indicates more than 9, 0-9 represents the specific number
     *
     * @example A
     *
     * @var string
     */
    public $remainSeats;

    /**
     * @description the solution represented by the solution_id in request
     *
     * @var solution
     */
    public $solution;
    protected $_name = [
        'changedPriceInfo'  => 'changed_price_info',
        'isChanged'         => 'is_changed',
        'originalPriceInfo' => 'original_price_info',
        'remainSeats'       => 'remain_seats',
        'solution'          => 'solution',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->changedPriceInfo) {
            $res['changed_price_info'] = null !== $this->changedPriceInfo ? $this->changedPriceInfo->toMap() : null;
        }
        if (null !== $this->isChanged) {
            $res['is_changed'] = $this->isChanged;
        }
        if (null !== $this->originalPriceInfo) {
            $res['original_price_info'] = null !== $this->originalPriceInfo ? $this->originalPriceInfo->toMap() : null;
        }
        if (null !== $this->remainSeats) {
            $res['remain_seats'] = $this->remainSeats;
        }
        if (null !== $this->solution) {
            $res['solution'] = null !== $this->solution ? $this->solution->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['changed_price_info'])) {
            $model->changedPriceInfo = changedPriceInfo::fromMap($map['changed_price_info']);
        }
        if (isset($map['is_changed'])) {
            $model->isChanged = $map['is_changed'];
        }
        if (isset($map['original_price_info'])) {
            $model->originalPriceInfo = originalPriceInfo::fromMap($map['original_price_info']);
        }
        if (isset($map['remain_seats'])) {
            $model->remainSeats = $map['remain_seats'];
        }
        if (isset($map['solution'])) {
            $model->solution = solution::fromMap($map['solution']);
        }

        return $model;
    }
}

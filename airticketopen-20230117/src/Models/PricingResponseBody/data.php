<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AirticketOpen\V20230117\Models\PricingResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\PricingResponseBody\data\changedPriceInfo;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\PricingResponseBody\data\originalPriceInfo;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\PricingResponseBody\data\solution;

class data extends Model
{
    /**
     * @var changedPriceInfo
     */
    public $changedPriceInfo;

    /**
     * @var bool
     */
    public $isChanged;

    /**
     * @var originalPriceInfo
     */
    public $originalPriceInfo;

    /**
     * @var string
     */
    public $remainSeats;

    /**
     * @var solution
     */
    public $solution;
    protected $_name = [
        'changedPriceInfo' => 'changed_price_info',
        'isChanged' => 'is_changed',
        'originalPriceInfo' => 'original_price_info',
        'remainSeats' => 'remain_seats',
        'solution' => 'solution',
    ];

    public function validate()
    {
        if (null !== $this->changedPriceInfo) {
            $this->changedPriceInfo->validate();
        }
        if (null !== $this->originalPriceInfo) {
            $this->originalPriceInfo->validate();
        }
        if (null !== $this->solution) {
            $this->solution->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->changedPriceInfo) {
            $res['changed_price_info'] = null !== $this->changedPriceInfo ? $this->changedPriceInfo->toArray($noStream) : $this->changedPriceInfo;
        }

        if (null !== $this->isChanged) {
            $res['is_changed'] = $this->isChanged;
        }

        if (null !== $this->originalPriceInfo) {
            $res['original_price_info'] = null !== $this->originalPriceInfo ? $this->originalPriceInfo->toArray($noStream) : $this->originalPriceInfo;
        }

        if (null !== $this->remainSeats) {
            $res['remain_seats'] = $this->remainSeats;
        }

        if (null !== $this->solution) {
            $res['solution'] = null !== $this->solution ? $this->solution->toArray($noStream) : $this->solution;
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

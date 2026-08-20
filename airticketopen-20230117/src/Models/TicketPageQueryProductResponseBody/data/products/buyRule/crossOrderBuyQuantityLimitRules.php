<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AirticketOpen\V20230117\Models\TicketPageQueryProductResponseBody\data\products\buyRule;

use AlibabaCloud\Dara\Model;

class crossOrderBuyQuantityLimitRules extends Model
{
    /**
     * @var int
     */
    public $limitDayType;

    /**
     * @var int
     */
    public $limitDays;

    /**
     * @var int
     */
    public $limitPeriod;

    /**
     * @var int
     */
    public $limitQuantityType;

    /**
     * @var int
     */
    public $limitType;

    /**
     * @var int
     */
    public $maxBuyQuantity;
    protected $_name = [
        'limitDayType' => 'LimitDayType',
        'limitDays' => 'LimitDays',
        'limitPeriod' => 'LimitPeriod',
        'limitQuantityType' => 'LimitQuantityType',
        'limitType' => 'LimitType',
        'maxBuyQuantity' => 'MaxBuyQuantity',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->limitDayType) {
            $res['LimitDayType'] = $this->limitDayType;
        }

        if (null !== $this->limitDays) {
            $res['LimitDays'] = $this->limitDays;
        }

        if (null !== $this->limitPeriod) {
            $res['LimitPeriod'] = $this->limitPeriod;
        }

        if (null !== $this->limitQuantityType) {
            $res['LimitQuantityType'] = $this->limitQuantityType;
        }

        if (null !== $this->limitType) {
            $res['LimitType'] = $this->limitType;
        }

        if (null !== $this->maxBuyQuantity) {
            $res['MaxBuyQuantity'] = $this->maxBuyQuantity;
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
        if (isset($map['LimitDayType'])) {
            $model->limitDayType = $map['LimitDayType'];
        }

        if (isset($map['LimitDays'])) {
            $model->limitDays = $map['LimitDays'];
        }

        if (isset($map['LimitPeriod'])) {
            $model->limitPeriod = $map['LimitPeriod'];
        }

        if (isset($map['LimitQuantityType'])) {
            $model->limitQuantityType = $map['LimitQuantityType'];
        }

        if (isset($map['LimitType'])) {
            $model->limitType = $map['LimitType'];
        }

        if (isset($map['MaxBuyQuantity'])) {
            $model->maxBuyQuantity = $map['MaxBuyQuantity'];
        }

        return $model;
    }
}

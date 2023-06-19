<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CC5G\V20220314\Models\ListCardDayUsagesResponseBody\cards;

use AlibabaCloud\SDK\CC5G\V20220314\Models\ListCardDayUsagesResponseBody\cards\usageDataMonths\cardDayUsages;
use AlibabaCloud\Tea\Model;

class usageDataMonths extends Model
{
    /**
     * @var cardDayUsages[]
     */
    public $cardDayUsages;

    /**
     * @example 202207
     *
     * @var string
     */
    public $month;

    /**
     * @example 1030
     *
     * @var string
     */
    public $usageDataMonth;
    protected $_name = [
        'cardDayUsages'  => 'CardDayUsages',
        'month'          => 'Month',
        'usageDataMonth' => 'UsageDataMonth',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cardDayUsages) {
            $res['CardDayUsages'] = [];
            if (null !== $this->cardDayUsages && \is_array($this->cardDayUsages)) {
                $n = 0;
                foreach ($this->cardDayUsages as $item) {
                    $res['CardDayUsages'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->month) {
            $res['Month'] = $this->month;
        }
        if (null !== $this->usageDataMonth) {
            $res['UsageDataMonth'] = $this->usageDataMonth;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return usageDataMonths
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CardDayUsages'])) {
            if (!empty($map['CardDayUsages'])) {
                $model->cardDayUsages = [];
                $n                    = 0;
                foreach ($map['CardDayUsages'] as $item) {
                    $model->cardDayUsages[$n++] = null !== $item ? cardDayUsages::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Month'])) {
            $model->month = $map['Month'];
        }
        if (isset($map['UsageDataMonth'])) {
            $model->usageDataMonth = $map['UsageDataMonth'];
        }

        return $model;
    }
}

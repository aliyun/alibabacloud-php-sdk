<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkcard\V20210520\Models\GetCardFlowInfoResponseBody\data;

use AlibabaCloud\SDK\Linkcard\V20210520\Models\GetCardFlowInfoResponseBody\data\listCardMonthFlow\listDayFlow;
use AlibabaCloud\Tea\Model;

class listCardMonthFlow extends Model
{
    /**
     * @example 200MB
     *
     * @var string
     */
    public $flowCount;

    /**
     * @var listDayFlow[]
     */
    public $listDayFlow;

    /**
     * @example 202112
     *
     * @var string
     */
    public $month;
    protected $_name = [
        'flowCount'   => 'FlowCount',
        'listDayFlow' => 'ListDayFlow',
        'month'       => 'Month',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->flowCount) {
            $res['FlowCount'] = $this->flowCount;
        }
        if (null !== $this->listDayFlow) {
            $res['ListDayFlow'] = [];
            if (null !== $this->listDayFlow && \is_array($this->listDayFlow)) {
                $n = 0;
                foreach ($this->listDayFlow as $item) {
                    $res['ListDayFlow'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->month) {
            $res['Month'] = $this->month;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return listCardMonthFlow
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FlowCount'])) {
            $model->flowCount = $map['FlowCount'];
        }
        if (isset($map['ListDayFlow'])) {
            if (!empty($map['ListDayFlow'])) {
                $model->listDayFlow = [];
                $n                  = 0;
                foreach ($map['ListDayFlow'] as $item) {
                    $model->listDayFlow[$n++] = null !== $item ? listDayFlow::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Month'])) {
            $model->month = $map['Month'];
        }

        return $model;
    }
}

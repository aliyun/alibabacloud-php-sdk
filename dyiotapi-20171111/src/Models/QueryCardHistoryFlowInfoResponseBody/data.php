<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyiotapi\V20171111\Models\QueryCardHistoryFlowInfoResponseBody;

use AlibabaCloud\SDK\Dyiotapi\V20171111\Models\QueryCardHistoryFlowInfoResponseBody\data\dayUsageList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var dayUsageList[]
     */
    public $dayUsageList;

    /**
     * @var int
     */
    public $month;

    /**
     * @var int
     */
    public $curValue;
    protected $_name = [
        'dayUsageList' => 'DayUsageList',
        'month'        => 'Month',
        'curValue'     => 'CurValue',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dayUsageList) {
            $res['DayUsageList'] = [];
            if (null !== $this->dayUsageList && \is_array($this->dayUsageList)) {
                $n = 0;
                foreach ($this->dayUsageList as $item) {
                    $res['DayUsageList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->month) {
            $res['Month'] = $this->month;
        }
        if (null !== $this->curValue) {
            $res['CurValue'] = $this->curValue;
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
        if (isset($map['DayUsageList'])) {
            if (!empty($map['DayUsageList'])) {
                $model->dayUsageList = [];
                $n                   = 0;
                foreach ($map['DayUsageList'] as $item) {
                    $model->dayUsageList[$n++] = null !== $item ? dayUsageList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Month'])) {
            $model->month = $map['Month'];
        }
        if (isset($map['CurValue'])) {
            $model->curValue = $map['CurValue'];
        }

        return $model;
    }
}

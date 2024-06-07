<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyplsapi\V20170525\Models\CreatePickUpWaybillPreQueryResponseBody\data;

use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\CreatePickUpWaybillPreQueryResponseBody\data\cpTimeSelectList\appointTimes;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\CreatePickUpWaybillPreQueryResponseBody\data\cpTimeSelectList\realTime;
use AlibabaCloud\Tea\Model;

class cpTimeSelectList extends Model
{
    /**
     * @description The available time for the scheduled pickup. If the current courier company cannot accept the scheduled pickup, this field is left empty.
     *
     * @var appointTimes[]
     */
    public $appointTimes;

    /**
     * @description The estimated price. Unit: CNY. The value is accurate to two decimal places. The value of this parameter is displayed if an estimated weight is specified.
     *
     * @example 12.50
     *
     * @var string
     */
    public $prePrice;

    /**
     * @description The information about whether the real-time order can be selected.
     *
     * @var realTime
     */
    public $realTime;
    protected $_name = [
        'appointTimes' => 'AppointTimes',
        'prePrice'     => 'PrePrice',
        'realTime'     => 'RealTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appointTimes) {
            $res['AppointTimes'] = [];
            if (null !== $this->appointTimes && \is_array($this->appointTimes)) {
                $n = 0;
                foreach ($this->appointTimes as $item) {
                    $res['AppointTimes'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->prePrice) {
            $res['PrePrice'] = $this->prePrice;
        }
        if (null !== $this->realTime) {
            $res['RealTime'] = null !== $this->realTime ? $this->realTime->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return cpTimeSelectList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppointTimes'])) {
            if (!empty($map['AppointTimes'])) {
                $model->appointTimes = [];
                $n                   = 0;
                foreach ($map['AppointTimes'] as $item) {
                    $model->appointTimes[$n++] = null !== $item ? appointTimes::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['PrePrice'])) {
            $model->prePrice = $map['PrePrice'];
        }
        if (isset($map['RealTime'])) {
            $model->realTime = realTime::fromMap($map['RealTime']);
        }

        return $model;
    }
}

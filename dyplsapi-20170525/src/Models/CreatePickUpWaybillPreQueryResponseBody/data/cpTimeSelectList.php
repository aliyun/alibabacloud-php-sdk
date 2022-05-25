<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyplsapi\V20170525\Models\CreatePickUpWaybillPreQueryResponseBody\data;

use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\CreatePickUpWaybillPreQueryResponseBody\data\cpTimeSelectList\appointTimes;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\CreatePickUpWaybillPreQueryResponseBody\data\cpTimeSelectList\realTime;
use AlibabaCloud\Tea\Model;

class cpTimeSelectList extends Model
{
    /**
     * @var appointTimes[]
     */
    public $appointTimes;

    /**
     * @var string
     */
    public $prePrice;

    /**
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

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyplsapi\V20170525\Models\CreatePickUpWaybillPreQueryResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\CreatePickUpWaybillPreQueryResponseBody\data\cpTimeSelectList\appointTimes;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\CreatePickUpWaybillPreQueryResponseBody\data\cpTimeSelectList\realTime;

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
        'prePrice' => 'PrePrice',
        'realTime' => 'RealTime',
    ];

    public function validate()
    {
        if (\is_array($this->appointTimes)) {
            Model::validateArray($this->appointTimes);
        }
        if (null !== $this->realTime) {
            $this->realTime->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appointTimes) {
            if (\is_array($this->appointTimes)) {
                $res['AppointTimes'] = [];
                $n1 = 0;
                foreach ($this->appointTimes as $item1) {
                    $res['AppointTimes'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->prePrice) {
            $res['PrePrice'] = $this->prePrice;
        }

        if (null !== $this->realTime) {
            $res['RealTime'] = null !== $this->realTime ? $this->realTime->toArray($noStream) : $this->realTime;
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
        if (isset($map['AppointTimes'])) {
            if (!empty($map['AppointTimes'])) {
                $model->appointTimes = [];
                $n1 = 0;
                foreach ($map['AppointTimes'] as $item1) {
                    $model->appointTimes[$n1++] = appointTimes::fromMap($item1);
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

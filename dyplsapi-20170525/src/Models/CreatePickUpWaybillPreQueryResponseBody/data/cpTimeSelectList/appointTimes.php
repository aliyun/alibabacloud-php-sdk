<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyplsapi\V20170525\Models\CreatePickUpWaybillPreQueryResponseBody\data\cpTimeSelectList;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\CreatePickUpWaybillPreQueryResponseBody\data\cpTimeSelectList\appointTimes\timeList;

class appointTimes extends Model
{
    /**
     * @var string
     */
    public $date;
    /**
     * @var bool
     */
    public $dateSelectable;
    /**
     * @var timeList[]
     */
    public $timeList;
    protected $_name = [
        'date'           => 'Date',
        'dateSelectable' => 'DateSelectable',
        'timeList'       => 'TimeList',
    ];

    public function validate()
    {
        if (\is_array($this->timeList)) {
            Model::validateArray($this->timeList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->date) {
            $res['Date'] = $this->date;
        }

        if (null !== $this->dateSelectable) {
            $res['DateSelectable'] = $this->dateSelectable;
        }

        if (null !== $this->timeList) {
            if (\is_array($this->timeList)) {
                $res['TimeList'] = [];
                $n1              = 0;
                foreach ($this->timeList as $item1) {
                    $res['TimeList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['Date'])) {
            $model->date = $map['Date'];
        }

        if (isset($map['DateSelectable'])) {
            $model->dateSelectable = $map['DateSelectable'];
        }

        if (isset($map['TimeList'])) {
            if (!empty($map['TimeList'])) {
                $model->timeList = [];
                $n1              = 0;
                foreach ($map['TimeList'] as $item1) {
                    $model->timeList[$n1++] = timeList::fromMap($item1);
                }
            }
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyplsapi\V20170525\Models\CreatePickUpWaybillPreQueryResponseBody\data\cpTimeSelectList\appointTimes;

use AlibabaCloud\Tea\Model;

class timeList extends Model
{
    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $selectDisableTip;

    /**
     * @var bool
     */
    public $selectable;

    /**
     * @var string
     */
    public $startTime;
    protected $_name = [
        'endTime'          => 'EndTime',
        'selectDisableTip' => 'SelectDisableTip',
        'selectable'       => 'Selectable',
        'startTime'        => 'StartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->selectDisableTip) {
            $res['SelectDisableTip'] = $this->selectDisableTip;
        }
        if (null !== $this->selectable) {
            $res['Selectable'] = $this->selectable;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return timeList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['SelectDisableTip'])) {
            $model->selectDisableTip = $map['SelectDisableTip'];
        }
        if (isset($map['Selectable'])) {
            $model->selectable = $map['Selectable'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}

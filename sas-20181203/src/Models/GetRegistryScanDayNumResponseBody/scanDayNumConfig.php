<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetRegistryScanDayNumResponseBody;

use AlibabaCloud\Dara\Model;

class scanDayNumConfig extends Model
{
    /**
     * @var string
     */
    public $dayNumList;
    /**
     * @var int
     */
    public $scanDayNum;
    protected $_name = [
        'dayNumList' => 'DayNumList',
        'scanDayNum' => 'ScanDayNum',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dayNumList) {
            $res['DayNumList'] = $this->dayNumList;
        }

        if (null !== $this->scanDayNum) {
            $res['ScanDayNum'] = $this->scanDayNum;
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
        if (isset($map['DayNumList'])) {
            $model->dayNumList = $map['DayNumList'];
        }

        if (isset($map['ScanDayNum'])) {
            $model->scanDayNum = $map['ScanDayNum'];
        }

        return $model;
    }
}

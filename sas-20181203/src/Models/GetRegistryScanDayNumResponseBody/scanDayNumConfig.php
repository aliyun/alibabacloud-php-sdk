<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetRegistryScanDayNumResponseBody;

use AlibabaCloud\Tea\Model;

class scanDayNumConfig extends Model
{
    /**
     * @description List of alternative days.
     *
     * @example 1,3,7,15,30,90,180,365
     *
     * @var string
     */
    public $dayNumList;

    /**
     * @description Scan time range, in days.
     *
     * @example 7
     *
     * @var int
     */
    public $scanDayNum;
    protected $_name = [
        'dayNumList' => 'DayNumList',
        'scanDayNum' => 'ScanDayNum',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return scanDayNumConfig
     */
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

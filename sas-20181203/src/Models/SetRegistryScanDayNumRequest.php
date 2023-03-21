<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class SetRegistryScanDayNumRequest extends Model
{
    /**
     * @var int
     */
    public $scanDayNum;
    protected $_name = [
        'scanDayNum' => 'ScanDayNum',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->scanDayNum) {
            $res['ScanDayNum'] = $this->scanDayNum;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetRegistryScanDayNumRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ScanDayNum'])) {
            $model->scanDayNum = $map['ScanDayNum'];
        }

        return $model;
    }
}

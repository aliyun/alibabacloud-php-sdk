<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

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
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
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
        if (isset($map['ScanDayNum'])) {
            $model->scanDayNum = $map['ScanDayNum'];
        }

        return $model;
    }
}

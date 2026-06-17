<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeACLProtectTrendResponseBody;

use AlibabaCloud\Dara\Model;

class trendList extends Model
{
    /**
     * @var int
     */
    public $alertCnt;

    /**
     * @var int
     */
    public $passCnt;

    /**
     * @var int
     */
    public $protectCnt;

    /**
     * @var int
     */
    public $time;
    protected $_name = [
        'alertCnt' => 'AlertCnt',
        'passCnt' => 'PassCnt',
        'protectCnt' => 'ProtectCnt',
        'time' => 'Time',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->alertCnt) {
            $res['AlertCnt'] = $this->alertCnt;
        }

        if (null !== $this->passCnt) {
            $res['PassCnt'] = $this->passCnt;
        }

        if (null !== $this->protectCnt) {
            $res['ProtectCnt'] = $this->protectCnt;
        }

        if (null !== $this->time) {
            $res['Time'] = $this->time;
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
        if (isset($map['AlertCnt'])) {
            $model->alertCnt = $map['AlertCnt'];
        }

        if (isset($map['PassCnt'])) {
            $model->passCnt = $map['PassCnt'];
        }

        if (isset($map['ProtectCnt'])) {
            $model->protectCnt = $map['ProtectCnt'];
        }

        if (isset($map['Time'])) {
            $model->time = $map['Time'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeVulFixStatisticsResponseBody;

use AlibabaCloud\Dara\Model;

class fixTotal extends Model
{
    /**
     * @var int
     */
    public $fixedTodayNum;
    /**
     * @var int
     */
    public $fixedTotalNum;
    /**
     * @var int
     */
    public $fixingNum;
    /**
     * @var int
     */
    public $needFixNum;
    protected $_name = [
        'fixedTodayNum' => 'FixedTodayNum',
        'fixedTotalNum' => 'FixedTotalNum',
        'fixingNum'     => 'FixingNum',
        'needFixNum'    => 'NeedFixNum',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->fixedTodayNum) {
            $res['FixedTodayNum'] = $this->fixedTodayNum;
        }

        if (null !== $this->fixedTotalNum) {
            $res['FixedTotalNum'] = $this->fixedTotalNum;
        }

        if (null !== $this->fixingNum) {
            $res['FixingNum'] = $this->fixingNum;
        }

        if (null !== $this->needFixNum) {
            $res['NeedFixNum'] = $this->needFixNum;
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
        if (isset($map['FixedTodayNum'])) {
            $model->fixedTodayNum = $map['FixedTodayNum'];
        }

        if (isset($map['FixedTotalNum'])) {
            $model->fixedTotalNum = $map['FixedTotalNum'];
        }

        if (isset($map['FixingNum'])) {
            $model->fixingNum = $map['FixingNum'];
        }

        if (isset($map['NeedFixNum'])) {
            $model->needFixNum = $map['NeedFixNum'];
        }

        return $model;
    }
}

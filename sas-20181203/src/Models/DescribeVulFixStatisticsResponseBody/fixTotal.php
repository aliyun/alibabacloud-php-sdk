<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeVulFixStatisticsResponseBody;

use AlibabaCloud\Tea\Model;

class fixTotal extends Model
{
    /**
     * @example 15
     *
     * @var int
     */
    public $fixedTodayNum;

    /**
     * @example 47
     *
     * @var int
     */
    public $fixedTotalNum;

    /**
     * @example 22
     *
     * @var int
     */
    public $fixingNum;

    /**
     * @example 62
     *
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
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return fixTotal
     */
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

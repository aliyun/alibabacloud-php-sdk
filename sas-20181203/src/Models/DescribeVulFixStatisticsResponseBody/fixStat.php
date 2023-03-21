<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeVulFixStatisticsResponseBody;

use AlibabaCloud\Tea\Model;

class fixStat extends Model
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

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'fixedTodayNum' => 'FixedTodayNum',
        'fixedTotalNum' => 'FixedTotalNum',
        'fixingNum'     => 'FixingNum',
        'needFixNum'    => 'NeedFixNum',
        'type'          => 'Type',
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
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return fixStat
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
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}

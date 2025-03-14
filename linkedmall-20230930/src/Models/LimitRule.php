<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20230930\Models;

use AlibabaCloud\Tea\Model;

class LimitRule extends Model
{
    /**
     * @var int
     */
    public $beginTime;

    /**
     * @var string
     */
    public $condcase;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var int
     */
    public $limitNum;

    /**
     * @var string
     */
    public $ruleType;
    protected $_name = [
        'beginTime' => 'beginTime',
        'condcase' => 'condcase',
        'endTime' => 'endTime',
        'limitNum' => 'limitNum',
        'ruleType' => 'ruleType',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->beginTime) {
            $res['beginTime'] = $this->beginTime;
        }
        if (null !== $this->condcase) {
            $res['condcase'] = $this->condcase;
        }
        if (null !== $this->endTime) {
            $res['endTime'] = $this->endTime;
        }
        if (null !== $this->limitNum) {
            $res['limitNum'] = $this->limitNum;
        }
        if (null !== $this->ruleType) {
            $res['ruleType'] = $this->ruleType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return LimitRule
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['beginTime'])) {
            $model->beginTime = $map['beginTime'];
        }
        if (isset($map['condcase'])) {
            $model->condcase = $map['condcase'];
        }
        if (isset($map['endTime'])) {
            $model->endTime = $map['endTime'];
        }
        if (isset($map['limitNum'])) {
            $model->limitNum = $map['limitNum'];
        }
        if (isset($map['ruleType'])) {
            $model->ruleType = $map['ruleType'];
        }

        return $model;
    }
}

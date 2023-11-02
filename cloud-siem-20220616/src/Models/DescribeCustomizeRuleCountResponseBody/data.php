<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DescribeCustomizeRuleCountResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 12
     *
     * @var int
     */
    public $highRuleNum;

    /**
     * @example 20
     *
     * @var int
     */
    public $inUseRuleNum;

    /**
     * @example 3
     *
     * @var int
     */
    public $lowRuleNum;

    /**
     * @example 5
     *
     * @var int
     */
    public $mediumRuleNum;
    protected $_name = [
        'highRuleNum'   => 'HighRuleNum',
        'inUseRuleNum'  => 'InUseRuleNum',
        'lowRuleNum'    => 'LowRuleNum',
        'mediumRuleNum' => 'MediumRuleNum',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->highRuleNum) {
            $res['HighRuleNum'] = $this->highRuleNum;
        }
        if (null !== $this->inUseRuleNum) {
            $res['InUseRuleNum'] = $this->inUseRuleNum;
        }
        if (null !== $this->lowRuleNum) {
            $res['LowRuleNum'] = $this->lowRuleNum;
        }
        if (null !== $this->mediumRuleNum) {
            $res['MediumRuleNum'] = $this->mediumRuleNum;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HighRuleNum'])) {
            $model->highRuleNum = $map['HighRuleNum'];
        }
        if (isset($map['InUseRuleNum'])) {
            $model->inUseRuleNum = $map['InUseRuleNum'];
        }
        if (isset($map['LowRuleNum'])) {
            $model->lowRuleNum = $map['LowRuleNum'];
        }
        if (isset($map['MediumRuleNum'])) {
            $model->mediumRuleNum = $map['MediumRuleNum'];
        }

        return $model;
    }
}

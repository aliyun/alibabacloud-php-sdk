<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models\CreateLocationDateClusteringTaskRequest;

use AlibabaCloud\Tea\Model;

class dateOptions extends Model
{
    /**
     * @description The maximum number of days allowed in a gap for a single spatiotemporal cluster. Valid values: 0 to 99999.
     *
     * This parameter is required.
     * @example 1
     *
     * @var int
     */
    public $gapDays;

    /**
     * @description The maximum number of days that a single spatiotemporal cluster can span. Valid values: 1 to 99999. IMM does not create a cluster that spans more than the maximum number of days.
     *
     * This parameter is required.
     * @example 15
     *
     * @var int
     */
    public $maxDays;

    /**
     * @description The minimum number of days that a single spatiotemporal cluster can span. Valid values: 1 to 99999. IMM does not create a cluster that spans less than the minimum number of days.
     *
     * This parameter is required.
     * @example 1
     *
     * @var int
     */
    public $minDays;
    protected $_name = [
        'gapDays' => 'GapDays',
        'maxDays' => 'MaxDays',
        'minDays' => 'MinDays',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->gapDays) {
            $res['GapDays'] = $this->gapDays;
        }
        if (null !== $this->maxDays) {
            $res['MaxDays'] = $this->maxDays;
        }
        if (null !== $this->minDays) {
            $res['MinDays'] = $this->minDays;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dateOptions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GapDays'])) {
            $model->gapDays = $map['GapDays'];
        }
        if (isset($map['MaxDays'])) {
            $model->maxDays = $map['MaxDays'];
        }
        if (isset($map['MinDays'])) {
            $model->minDays = $map['MinDays'];
        }

        return $model;
    }
}

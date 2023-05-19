<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeOmsOpenAPIProjectStepsResponseBody\data\stepInfo;

use AlibabaCloud\Tea\Model;

class connectorFullProgressOverview extends Model
{
    /**
     * @description A sub-status that indicates whether this step is skipped.
     *
     * @example 100
     *
     * @var int
     */
    public $estimatedRemainingTimeOfSec;

    /**
     * @description The read RPS baseline of the source data source.
     *
     * @example 100
     *
     * @var int
     */
    public $estimatedTotalCount;

    /**
     * @description The read/write RT per record of the destination data source, in ms.
     *
     * @example 50
     *
     * @var int
     */
    public $finishedCount;

    /**
     * @description The business data returned.
     *
     * @example 1120
     *
     * @var int
     */
    public $progress;
    protected $_name = [
        'estimatedRemainingTimeOfSec' => 'EstimatedRemainingTimeOfSec',
        'estimatedTotalCount'         => 'EstimatedTotalCount',
        'finishedCount'               => 'FinishedCount',
        'progress'                    => 'Progress',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->estimatedRemainingTimeOfSec) {
            $res['EstimatedRemainingTimeOfSec'] = $this->estimatedRemainingTimeOfSec;
        }
        if (null !== $this->estimatedTotalCount) {
            $res['EstimatedTotalCount'] = $this->estimatedTotalCount;
        }
        if (null !== $this->finishedCount) {
            $res['FinishedCount'] = $this->finishedCount;
        }
        if (null !== $this->progress) {
            $res['Progress'] = $this->progress;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return connectorFullProgressOverview
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EstimatedRemainingTimeOfSec'])) {
            $model->estimatedRemainingTimeOfSec = $map['EstimatedRemainingTimeOfSec'];
        }
        if (isset($map['EstimatedTotalCount'])) {
            $model->estimatedTotalCount = $map['EstimatedTotalCount'];
        }
        if (isset($map['FinishedCount'])) {
            $model->finishedCount = $map['FinishedCount'];
        }
        if (isset($map['Progress'])) {
            $model->progress = $map['Progress'];
        }

        return $model;
    }
}

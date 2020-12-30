<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models\DescribeShardTaskInfoResponseBody;

use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeShardTaskInfoResponseBody\data\full;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeShardTaskInfoResponseBody\data\fullCheck;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeShardTaskInfoResponseBody\data\fullRevise;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeShardTaskInfoResponseBody\data\increment;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeShardTaskInfoResponseBody\data\review;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $status;

    /**
     * @var full
     */
    public $full;

    /**
     * @var string
     */
    public $stage;

    /**
     * @var string
     */
    public $progress;

    /**
     * @var review
     */
    public $review;

    /**
     * @var string
     */
    public $expired;

    /**
     * @var string
     */
    public $targetTableName;

    /**
     * @var fullRevise
     */
    public $fullRevise;

    /**
     * @var string
     */
    public $sourceTableName;

    /**
     * @var fullCheck
     */
    public $fullCheck;

    /**
     * @var increment
     */
    public $increment;
    protected $_name = [
        'status'          => 'Status',
        'full'            => 'Full',
        'stage'           => 'Stage',
        'progress'        => 'Progress',
        'review'          => 'Review',
        'expired'         => 'Expired',
        'targetTableName' => 'TargetTableName',
        'fullRevise'      => 'FullRevise',
        'sourceTableName' => 'SourceTableName',
        'fullCheck'       => 'FullCheck',
        'increment'       => 'Increment',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->full) {
            $res['Full'] = null !== $this->full ? $this->full->toMap() : null;
        }
        if (null !== $this->stage) {
            $res['Stage'] = $this->stage;
        }
        if (null !== $this->progress) {
            $res['Progress'] = $this->progress;
        }
        if (null !== $this->review) {
            $res['Review'] = null !== $this->review ? $this->review->toMap() : null;
        }
        if (null !== $this->expired) {
            $res['Expired'] = $this->expired;
        }
        if (null !== $this->targetTableName) {
            $res['TargetTableName'] = $this->targetTableName;
        }
        if (null !== $this->fullRevise) {
            $res['FullRevise'] = null !== $this->fullRevise ? $this->fullRevise->toMap() : null;
        }
        if (null !== $this->sourceTableName) {
            $res['SourceTableName'] = $this->sourceTableName;
        }
        if (null !== $this->fullCheck) {
            $res['FullCheck'] = null !== $this->fullCheck ? $this->fullCheck->toMap() : null;
        }
        if (null !== $this->increment) {
            $res['Increment'] = null !== $this->increment ? $this->increment->toMap() : null;
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
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Full'])) {
            $model->full = full::fromMap($map['Full']);
        }
        if (isset($map['Stage'])) {
            $model->stage = $map['Stage'];
        }
        if (isset($map['Progress'])) {
            $model->progress = $map['Progress'];
        }
        if (isset($map['Review'])) {
            $model->review = review::fromMap($map['Review']);
        }
        if (isset($map['Expired'])) {
            $model->expired = $map['Expired'];
        }
        if (isset($map['TargetTableName'])) {
            $model->targetTableName = $map['TargetTableName'];
        }
        if (isset($map['FullRevise'])) {
            $model->fullRevise = fullRevise::fromMap($map['FullRevise']);
        }
        if (isset($map['SourceTableName'])) {
            $model->sourceTableName = $map['SourceTableName'];
        }
        if (isset($map['FullCheck'])) {
            $model->fullCheck = fullCheck::fromMap($map['FullCheck']);
        }
        if (isset($map['Increment'])) {
            $model->increment = increment::fromMap($map['Increment']);
        }

        return $model;
    }
}

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
     * @description Indicates the number of remaining days before the tasks to shard tables or convert tables expire.
     *
     * @example 0
     *
     * @var string
     */
    public $expired;

    /**
     * @description Indicates information about full migration tasks.
     *
     * @var full
     */
    public $full;

    /**
     * @description Indicates information about full check tasks.
     *
     * @var fullCheck
     */
    public $fullCheck;

    /**
     * @description Indicates information about full correction tasks.
     *
     * @var fullRevise
     */
    public $fullRevise;

    /**
     * @description Indicates information about incremental data synchronization.
     *
     * @var increment
     */
    public $increment;

    /**
     * @description Indicates the incremental data synchronization progress.
     *
     * @example 70
     *
     * @var string
     */
    public $progress;

    /**
     * @description Indicates check tasks.
     *
     * @var review
     */
    public $review;

    /**
     * @description Indicates the name of the table that you convert or shard.
     *
     * @example a1
     *
     * @var string
     */
    public $sourceTableName;

    /**
     * @description Indicates the current stage of the task.
     *
     * @example 2
     *
     * @var string
     */
    public $stage;

    /**
     * @description Indicates the state of the tasks to shard tables or convert tables.
     *
     * @var string
     */
    public $status;

    /**
     * @description Indicates the name of the table after you convert or shard the table.
     *
     * @example a2
     *
     * @var string
     */
    public $targetTableName;
    protected $_name = [
        'expired'         => 'Expired',
        'full'            => 'Full',
        'fullCheck'       => 'FullCheck',
        'fullRevise'      => 'FullRevise',
        'increment'       => 'Increment',
        'progress'        => 'Progress',
        'review'          => 'Review',
        'sourceTableName' => 'SourceTableName',
        'stage'           => 'Stage',
        'status'          => 'Status',
        'targetTableName' => 'TargetTableName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->expired) {
            $res['Expired'] = $this->expired;
        }
        if (null !== $this->full) {
            $res['Full'] = null !== $this->full ? $this->full->toMap() : null;
        }
        if (null !== $this->fullCheck) {
            $res['FullCheck'] = null !== $this->fullCheck ? $this->fullCheck->toMap() : null;
        }
        if (null !== $this->fullRevise) {
            $res['FullRevise'] = null !== $this->fullRevise ? $this->fullRevise->toMap() : null;
        }
        if (null !== $this->increment) {
            $res['Increment'] = null !== $this->increment ? $this->increment->toMap() : null;
        }
        if (null !== $this->progress) {
            $res['Progress'] = $this->progress;
        }
        if (null !== $this->review) {
            $res['Review'] = null !== $this->review ? $this->review->toMap() : null;
        }
        if (null !== $this->sourceTableName) {
            $res['SourceTableName'] = $this->sourceTableName;
        }
        if (null !== $this->stage) {
            $res['Stage'] = $this->stage;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->targetTableName) {
            $res['TargetTableName'] = $this->targetTableName;
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
        if (isset($map['Expired'])) {
            $model->expired = $map['Expired'];
        }
        if (isset($map['Full'])) {
            $model->full = full::fromMap($map['Full']);
        }
        if (isset($map['FullCheck'])) {
            $model->fullCheck = fullCheck::fromMap($map['FullCheck']);
        }
        if (isset($map['FullRevise'])) {
            $model->fullRevise = fullRevise::fromMap($map['FullRevise']);
        }
        if (isset($map['Increment'])) {
            $model->increment = increment::fromMap($map['Increment']);
        }
        if (isset($map['Progress'])) {
            $model->progress = $map['Progress'];
        }
        if (isset($map['Review'])) {
            $model->review = review::fromMap($map['Review']);
        }
        if (isset($map['SourceTableName'])) {
            $model->sourceTableName = $map['SourceTableName'];
        }
        if (isset($map['Stage'])) {
            $model->stage = $map['Stage'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TargetTableName'])) {
            $model->targetTableName = $map['TargetTableName'];
        }

        return $model;
    }
}

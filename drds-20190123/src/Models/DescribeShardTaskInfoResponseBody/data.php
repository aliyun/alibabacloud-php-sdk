<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models\DescribeShardTaskInfoResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeShardTaskInfoResponseBody\data\full;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeShardTaskInfoResponseBody\data\fullCheck;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeShardTaskInfoResponseBody\data\fullRevise;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeShardTaskInfoResponseBody\data\increment;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeShardTaskInfoResponseBody\data\review;

class data extends Model
{
    /**
     * @var string
     */
    public $expired;

    /**
     * @var full
     */
    public $full;

    /**
     * @var fullCheck
     */
    public $fullCheck;

    /**
     * @var fullRevise
     */
    public $fullRevise;

    /**
     * @var increment
     */
    public $increment;

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
    public $sourceTableName;

    /**
     * @var string
     */
    public $stage;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $targetTableName;
    protected $_name = [
        'expired' => 'Expired',
        'full' => 'Full',
        'fullCheck' => 'FullCheck',
        'fullRevise' => 'FullRevise',
        'increment' => 'Increment',
        'progress' => 'Progress',
        'review' => 'Review',
        'sourceTableName' => 'SourceTableName',
        'stage' => 'Stage',
        'status' => 'Status',
        'targetTableName' => 'TargetTableName',
    ];

    public function validate()
    {
        if (null !== $this->full) {
            $this->full->validate();
        }
        if (null !== $this->fullCheck) {
            $this->fullCheck->validate();
        }
        if (null !== $this->fullRevise) {
            $this->fullRevise->validate();
        }
        if (null !== $this->increment) {
            $this->increment->validate();
        }
        if (null !== $this->review) {
            $this->review->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->expired) {
            $res['Expired'] = $this->expired;
        }

        if (null !== $this->full) {
            $res['Full'] = null !== $this->full ? $this->full->toArray($noStream) : $this->full;
        }

        if (null !== $this->fullCheck) {
            $res['FullCheck'] = null !== $this->fullCheck ? $this->fullCheck->toArray($noStream) : $this->fullCheck;
        }

        if (null !== $this->fullRevise) {
            $res['FullRevise'] = null !== $this->fullRevise ? $this->fullRevise->toArray($noStream) : $this->fullRevise;
        }

        if (null !== $this->increment) {
            $res['Increment'] = null !== $this->increment ? $this->increment->toArray($noStream) : $this->increment;
        }

        if (null !== $this->progress) {
            $res['Progress'] = $this->progress;
        }

        if (null !== $this->review) {
            $res['Review'] = null !== $this->review ? $this->review->toArray($noStream) : $this->review;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

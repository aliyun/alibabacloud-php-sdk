<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eas\V20210701\Models\DescribeServiceRolloutResponseBody\rollout;

use AlibabaCloud\Dara\Model;

class status extends Model
{
    /**
     * @var string
     */
    public $currentRevision;

    /**
     * @var string
     */
    public $nextBatchStartTime;

    /**
     * @var string
     */
    public $phase;

    /**
     * @var int
     */
    public $totalReplicas;

    /**
     * @var string
     */
    public $updateRevision;

    /**
     * @var int
     */
    public $updatedReplicas;
    protected $_name = [
        'currentRevision' => 'CurrentRevision',
        'nextBatchStartTime' => 'NextBatchStartTime',
        'phase' => 'Phase',
        'totalReplicas' => 'TotalReplicas',
        'updateRevision' => 'UpdateRevision',
        'updatedReplicas' => 'UpdatedReplicas',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->currentRevision) {
            $res['CurrentRevision'] = $this->currentRevision;
        }

        if (null !== $this->nextBatchStartTime) {
            $res['NextBatchStartTime'] = $this->nextBatchStartTime;
        }

        if (null !== $this->phase) {
            $res['Phase'] = $this->phase;
        }

        if (null !== $this->totalReplicas) {
            $res['TotalReplicas'] = $this->totalReplicas;
        }

        if (null !== $this->updateRevision) {
            $res['UpdateRevision'] = $this->updateRevision;
        }

        if (null !== $this->updatedReplicas) {
            $res['UpdatedReplicas'] = $this->updatedReplicas;
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
        if (isset($map['CurrentRevision'])) {
            $model->currentRevision = $map['CurrentRevision'];
        }

        if (isset($map['NextBatchStartTime'])) {
            $model->nextBatchStartTime = $map['NextBatchStartTime'];
        }

        if (isset($map['Phase'])) {
            $model->phase = $map['Phase'];
        }

        if (isset($map['TotalReplicas'])) {
            $model->totalReplicas = $map['TotalReplicas'];
        }

        if (isset($map['UpdateRevision'])) {
            $model->updateRevision = $map['UpdateRevision'];
        }

        if (isset($map['UpdatedReplicas'])) {
            $model->updatedReplicas = $map['UpdatedReplicas'];
        }

        return $model;
    }
}

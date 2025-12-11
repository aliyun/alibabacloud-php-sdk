<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EhpcInstant\V20230701\Models\ListExecutorEventsRequest;

use AlibabaCloud\Dara\Model;

class filter extends Model
{
    /**
     * @var string[]
     */
    public $executorIds;

    /**
     * @var string
     */
    public $jobId;

    /**
     * @var string
     */
    public $level;

    /**
     * @var int
     */
    public $timeAfter;

    /**
     * @var int
     */
    public $timeBefore;
    protected $_name = [
        'executorIds' => 'ExecutorIds',
        'jobId' => 'JobId',
        'level' => 'Level',
        'timeAfter' => 'TimeAfter',
        'timeBefore' => 'TimeBefore',
    ];

    public function validate()
    {
        if (\is_array($this->executorIds)) {
            Model::validateArray($this->executorIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->executorIds) {
            if (\is_array($this->executorIds)) {
                $res['ExecutorIds'] = [];
                $n1 = 0;
                foreach ($this->executorIds as $item1) {
                    $res['ExecutorIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }

        if (null !== $this->level) {
            $res['Level'] = $this->level;
        }

        if (null !== $this->timeAfter) {
            $res['TimeAfter'] = $this->timeAfter;
        }

        if (null !== $this->timeBefore) {
            $res['TimeBefore'] = $this->timeBefore;
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
        if (isset($map['ExecutorIds'])) {
            if (!empty($map['ExecutorIds'])) {
                $model->executorIds = [];
                $n1 = 0;
                foreach ($map['ExecutorIds'] as $item1) {
                    $model->executorIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }

        if (isset($map['Level'])) {
            $model->level = $map['Level'];
        }

        if (isset($map['TimeAfter'])) {
            $model->timeAfter = $map['TimeAfter'];
        }

        if (isset($map['TimeBefore'])) {
            $model->timeBefore = $map['TimeBefore'];
        }

        return $model;
    }
}

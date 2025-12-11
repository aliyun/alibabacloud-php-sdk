<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EhpcInstant\V20230701\Models\ListExecutorEventsResponseBody;

use AlibabaCloud\Dara\Model;

class executorEventList extends Model
{
    /**
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $executorId;

    /**
     * @var string
     */
    public $jobId;

    /**
     * @var string
     */
    public $level;

    /**
     * @var string
     */
    public $time;
    protected $_name = [
        'content' => 'Content',
        'executorId' => 'ExecutorId',
        'jobId' => 'JobId',
        'level' => 'Level',
        'time' => 'Time',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }

        if (null !== $this->executorId) {
            $res['ExecutorId'] = $this->executorId;
        }

        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }

        if (null !== $this->level) {
            $res['Level'] = $this->level;
        }

        if (null !== $this->time) {
            $res['Time'] = $this->time;
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
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }

        if (isset($map['ExecutorId'])) {
            $model->executorId = $map['ExecutorId'];
        }

        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }

        if (isset($map['Level'])) {
            $model->level = $map['Level'];
        }

        if (isset($map['Time'])) {
            $model->time = $map['Time'];
        }

        return $model;
    }
}

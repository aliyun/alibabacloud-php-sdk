<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models\GetJobGroupResponseBody\jobGroup;

use AlibabaCloud\SDK\CCC\V20170705\Models\GetJobGroupResponseBody\jobGroup\progress\categories;
use AlibabaCloud\Tea\Model;

class progress extends Model
{
    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $totalNotAnswered;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var categories[]
     */
    public $categories;

    /**
     * @var int
     */
    public $totalJobs;

    /**
     * @var int
     */
    public $totalCompleted;

    /**
     * @var int
     */
    public $duration;
    protected $_name = [
        'status'           => 'Status',
        'totalNotAnswered' => 'TotalNotAnswered',
        'startTime'        => 'StartTime',
        'categories'       => 'Categories',
        'totalJobs'        => 'TotalJobs',
        'totalCompleted'   => 'TotalCompleted',
        'duration'         => 'Duration',
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
        if (null !== $this->totalNotAnswered) {
            $res['TotalNotAnswered'] = $this->totalNotAnswered;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->categories) {
            $res['Categories'] = [];
            if (null !== $this->categories && \is_array($this->categories)) {
                $n = 0;
                foreach ($this->categories as $item) {
                    $res['Categories'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->totalJobs) {
            $res['TotalJobs'] = $this->totalJobs;
        }
        if (null !== $this->totalCompleted) {
            $res['TotalCompleted'] = $this->totalCompleted;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return progress
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TotalNotAnswered'])) {
            $model->totalNotAnswered = $map['TotalNotAnswered'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Categories'])) {
            if (!empty($map['Categories'])) {
                $model->categories = [];
                $n                 = 0;
                foreach ($map['Categories'] as $item) {
                    $model->categories[$n++] = null !== $item ? categories::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TotalJobs'])) {
            $model->totalJobs = $map['TotalJobs'];
        }
        if (isset($map['TotalCompleted'])) {
            $model->totalCompleted = $map['TotalCompleted'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }

        return $model;
    }
}

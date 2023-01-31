<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models\DescribeJobGroupResponseBody\jobGroup;

use AlibabaCloud\SDK\OutboundBot\V20191226\Models\DescribeJobGroupResponseBody\jobGroup\progress\briefs;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\DescribeJobGroupResponseBody\jobGroup\progress\categories;
use AlibabaCloud\Tea\Model;

class progress extends Model
{
    /**
     * @var briefs[]
     */
    public $briefs;

    /**
     * @example 0
     *
     * @var int
     */
    public $cancelled;

    /**
     * @var categories[]
     */
    public $categories;

    /**
     * @example 1000
     *
     * @var int
     */
    public $duration;

    /**
     * @example 2
     *
     * @var int
     */
    public $executing;

    /**
     * @example 0
     *
     * @var int
     */
    public $failed;

    /**
     * @example 0
     *
     * @var int
     */
    public $paused;

    /**
     * @example 5
     *
     * @var int
     */
    public $scheduling;

    /**
     * @example 1578881227404
     *
     * @var int
     */
    public $startTime;

    /**
     * @example Executing
     *
     * @var string
     */
    public $status;

    /**
     * @example 2
     *
     * @var int
     */
    public $totalCompleted;

    /**
     * @example 10
     *
     * @var int
     */
    public $totalJobs;

    /**
     * @example 1
     *
     * @var int
     */
    public $totalNotAnswered;
    protected $_name = [
        'briefs'           => 'Briefs',
        'cancelled'        => 'Cancelled',
        'categories'       => 'Categories',
        'duration'         => 'Duration',
        'executing'        => 'Executing',
        'failed'           => 'Failed',
        'paused'           => 'Paused',
        'scheduling'       => 'Scheduling',
        'startTime'        => 'StartTime',
        'status'           => 'Status',
        'totalCompleted'   => 'TotalCompleted',
        'totalJobs'        => 'TotalJobs',
        'totalNotAnswered' => 'TotalNotAnswered',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->briefs) {
            $res['Briefs'] = [];
            if (null !== $this->briefs && \is_array($this->briefs)) {
                $n = 0;
                foreach ($this->briefs as $item) {
                    $res['Briefs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->cancelled) {
            $res['Cancelled'] = $this->cancelled;
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
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->executing) {
            $res['Executing'] = $this->executing;
        }
        if (null !== $this->failed) {
            $res['Failed'] = $this->failed;
        }
        if (null !== $this->paused) {
            $res['Paused'] = $this->paused;
        }
        if (null !== $this->scheduling) {
            $res['Scheduling'] = $this->scheduling;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->totalCompleted) {
            $res['TotalCompleted'] = $this->totalCompleted;
        }
        if (null !== $this->totalJobs) {
            $res['TotalJobs'] = $this->totalJobs;
        }
        if (null !== $this->totalNotAnswered) {
            $res['TotalNotAnswered'] = $this->totalNotAnswered;
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
        if (isset($map['Briefs'])) {
            if (!empty($map['Briefs'])) {
                $model->briefs = [];
                $n             = 0;
                foreach ($map['Briefs'] as $item) {
                    $model->briefs[$n++] = null !== $item ? briefs::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Cancelled'])) {
            $model->cancelled = $map['Cancelled'];
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
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['Executing'])) {
            $model->executing = $map['Executing'];
        }
        if (isset($map['Failed'])) {
            $model->failed = $map['Failed'];
        }
        if (isset($map['Paused'])) {
            $model->paused = $map['Paused'];
        }
        if (isset($map['Scheduling'])) {
            $model->scheduling = $map['Scheduling'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TotalCompleted'])) {
            $model->totalCompleted = $map['TotalCompleted'];
        }
        if (isset($map['TotalJobs'])) {
            $model->totalJobs = $map['TotalJobs'];
        }
        if (isset($map['TotalNotAnswered'])) {
            $model->totalNotAnswered = $map['TotalNotAnswered'];
        }

        return $model;
    }
}

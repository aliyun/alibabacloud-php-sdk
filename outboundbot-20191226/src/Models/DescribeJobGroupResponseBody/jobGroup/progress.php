<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models\DescribeJobGroupResponseBody\jobGroup;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\DescribeJobGroupResponseBody\jobGroup\progress\briefs;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\DescribeJobGroupResponseBody\jobGroup\progress\categories;

class progress extends Model
{
    /**
     * @var briefs[]
     */
    public $briefs;

    /**
     * @var int
     */
    public $cancelled;

    /**
     * @var categories[]
     */
    public $categories;

    /**
     * @var int
     */
    public $duration;

    /**
     * @var int
     */
    public $executing;

    /**
     * @var int
     */
    public $failed;

    /**
     * @var int
     */
    public $paused;

    /**
     * @var int
     */
    public $scheduling;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $totalCompleted;

    /**
     * @var int
     */
    public $totalJobs;

    /**
     * @var int
     */
    public $totalNotAnswered;
    protected $_name = [
        'briefs' => 'Briefs',
        'cancelled' => 'Cancelled',
        'categories' => 'Categories',
        'duration' => 'Duration',
        'executing' => 'Executing',
        'failed' => 'Failed',
        'paused' => 'Paused',
        'scheduling' => 'Scheduling',
        'startTime' => 'StartTime',
        'status' => 'Status',
        'totalCompleted' => 'TotalCompleted',
        'totalJobs' => 'TotalJobs',
        'totalNotAnswered' => 'TotalNotAnswered',
    ];

    public function validate()
    {
        if (\is_array($this->briefs)) {
            Model::validateArray($this->briefs);
        }
        if (\is_array($this->categories)) {
            Model::validateArray($this->categories);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->briefs) {
            if (\is_array($this->briefs)) {
                $res['Briefs'] = [];
                $n1 = 0;
                foreach ($this->briefs as $item1) {
                    $res['Briefs'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->cancelled) {
            $res['Cancelled'] = $this->cancelled;
        }

        if (null !== $this->categories) {
            if (\is_array($this->categories)) {
                $res['Categories'] = [];
                $n1 = 0;
                foreach ($this->categories as $item1) {
                    $res['Categories'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Briefs'])) {
            if (!empty($map['Briefs'])) {
                $model->briefs = [];
                $n1 = 0;
                foreach ($map['Briefs'] as $item1) {
                    $model->briefs[$n1++] = briefs::fromMap($item1);
                }
            }
        }

        if (isset($map['Cancelled'])) {
            $model->cancelled = $map['Cancelled'];
        }

        if (isset($map['Categories'])) {
            if (!empty($map['Categories'])) {
                $model->categories = [];
                $n1 = 0;
                foreach ($map['Categories'] as $item1) {
                    $model->categories[$n1++] = categories::fromMap($item1);
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

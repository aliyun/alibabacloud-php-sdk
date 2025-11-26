<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models\QueryJobsWithResultResponseBody\jobs;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\QueryJobsWithResultResponseBody\jobs\list_\latestTask;

class list_ extends Model
{
    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $jobFailureReason;

    /**
     * @var latestTask
     */
    public $latestTask;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $statusName;
    protected $_name = [
        'id' => 'Id',
        'jobFailureReason' => 'JobFailureReason',
        'latestTask' => 'LatestTask',
        'status' => 'Status',
        'statusName' => 'StatusName',
    ];

    public function validate()
    {
        if (null !== $this->latestTask) {
            $this->latestTask->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->jobFailureReason) {
            $res['JobFailureReason'] = $this->jobFailureReason;
        }

        if (null !== $this->latestTask) {
            $res['LatestTask'] = null !== $this->latestTask ? $this->latestTask->toArray($noStream) : $this->latestTask;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->statusName) {
            $res['StatusName'] = $this->statusName;
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
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['JobFailureReason'])) {
            $model->jobFailureReason = $map['JobFailureReason'];
        }

        if (isset($map['LatestTask'])) {
            $model->latestTask = latestTask::fromMap($map['LatestTask']);
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['StatusName'])) {
            $model->statusName = $map['StatusName'];
        }

        return $model;
    }
}

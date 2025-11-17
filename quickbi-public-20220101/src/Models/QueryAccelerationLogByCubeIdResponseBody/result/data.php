<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models\QueryAccelerationLogByCubeIdResponseBody\result;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $duration;

    /**
     * @var string
     */
    public $jobHistoryId;

    /**
     * @var string
     */
    public $jobId;

    /**
     * @var string
     */
    public $jobStatus;

    /**
     * @var string
     */
    public $jonStartDate;

    /**
     * @var string
     */
    public $log;
    protected $_name = [
        'duration' => 'Duration',
        'jobHistoryId' => 'JobHistoryId',
        'jobId' => 'JobId',
        'jobStatus' => 'JobStatus',
        'jonStartDate' => 'JonStartDate',
        'log' => 'Log',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }

        if (null !== $this->jobHistoryId) {
            $res['JobHistoryId'] = $this->jobHistoryId;
        }

        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }

        if (null !== $this->jobStatus) {
            $res['JobStatus'] = $this->jobStatus;
        }

        if (null !== $this->jonStartDate) {
            $res['JonStartDate'] = $this->jonStartDate;
        }

        if (null !== $this->log) {
            $res['Log'] = $this->log;
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
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }

        if (isset($map['JobHistoryId'])) {
            $model->jobHistoryId = $map['JobHistoryId'];
        }

        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }

        if (isset($map['JobStatus'])) {
            $model->jobStatus = $map['JobStatus'];
        }

        if (isset($map['JonStartDate'])) {
            $model->jonStartDate = $map['JonStartDate'];
        }

        if (isset($map['Log'])) {
            $model->log = $map['Log'];
        }

        return $model;
    }
}

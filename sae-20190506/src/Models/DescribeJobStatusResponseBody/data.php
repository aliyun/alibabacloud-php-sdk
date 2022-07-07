<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models\DescribeJobStatusResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $active;

    /**
     * @var int
     */
    public $completionTime;

    /**
     * @var int
     */
    public $failed;

    /**
     * @var string
     */
    public $jobId;

    /**
     * @var string
     */
    public $message;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var string
     */
    public $state;

    /**
     * @var int
     */
    public $succeeded;
    protected $_name = [
        'active'         => 'Active',
        'completionTime' => 'CompletionTime',
        'failed'         => 'Failed',
        'jobId'          => 'JobId',
        'message'        => 'Message',
        'startTime'      => 'StartTime',
        'state'          => 'State',
        'succeeded'      => 'Succeeded',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->active) {
            $res['Active'] = $this->active;
        }
        if (null !== $this->completionTime) {
            $res['CompletionTime'] = $this->completionTime;
        }
        if (null !== $this->failed) {
            $res['Failed'] = $this->failed;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }
        if (null !== $this->succeeded) {
            $res['Succeeded'] = $this->succeeded;
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
        if (isset($map['Active'])) {
            $model->active = $map['Active'];
        }
        if (isset($map['CompletionTime'])) {
            $model->completionTime = $map['CompletionTime'];
        }
        if (isset($map['Failed'])) {
            $model->failed = $map['Failed'];
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['Succeeded'])) {
            $model->succeeded = $map['Succeeded'];
        }

        return $model;
    }
}

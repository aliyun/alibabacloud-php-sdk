<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenITag\V20220616\Models;

use AlibabaCloud\Dara\Model;

class FlowJobInfo extends Model
{
    /**
     * @var bool
     */
    public $display;

    /**
     * @var string
     */
    public $jobId;

    /**
     * @var string
     */
    public $jobType;

    /**
     * @var string
     */
    public $messageId;

    /**
     * @var string
     */
    public $processType;

    /**
     * @var string
     */
    public $taskId;
    protected $_name = [
        'display' => 'Display',
        'jobId' => 'JobId',
        'jobType' => 'JobType',
        'messageId' => 'MessageId',
        'processType' => 'ProcessType',
        'taskId' => 'TaskId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->display) {
            $res['Display'] = $this->display;
        }

        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }

        if (null !== $this->jobType) {
            $res['JobType'] = $this->jobType;
        }

        if (null !== $this->messageId) {
            $res['MessageId'] = $this->messageId;
        }

        if (null !== $this->processType) {
            $res['ProcessType'] = $this->processType;
        }

        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
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
        if (isset($map['Display'])) {
            $model->display = $map['Display'];
        }

        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }

        if (isset($map['JobType'])) {
            $model->jobType = $map['JobType'];
        }

        if (isset($map['MessageId'])) {
            $model->messageId = $map['MessageId'];
        }

        if (isset($map['ProcessType'])) {
            $model->processType = $map['ProcessType'];
        }

        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}

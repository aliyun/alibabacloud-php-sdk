<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ivpd\V20190625\Models\GetJobStatusResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $batchSize;

    /**
     * @var bool
     */
    public $completed;

    /**
     * @var bool
     */
    public $finish;

    /**
     * @var string
     */
    public $message;

    /**
     * @var float
     */
    public $progress;

    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $timeToLive;

    /**
     * @var int
     */
    public $totalUsedTime;
    protected $_name = [
        'batchSize'     => 'BatchSize',
        'completed'     => 'Completed',
        'finish'        => 'Finish',
        'message'       => 'Message',
        'progress'      => 'Progress',
        'status'        => 'Status',
        'timeToLive'    => 'TimeToLive',
        'totalUsedTime' => 'TotalUsedTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->batchSize) {
            $res['BatchSize'] = $this->batchSize;
        }
        if (null !== $this->completed) {
            $res['Completed'] = $this->completed;
        }
        if (null !== $this->finish) {
            $res['Finish'] = $this->finish;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->progress) {
            $res['Progress'] = $this->progress;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->timeToLive) {
            $res['TimeToLive'] = $this->timeToLive;
        }
        if (null !== $this->totalUsedTime) {
            $res['TotalUsedTime'] = $this->totalUsedTime;
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
        if (isset($map['BatchSize'])) {
            $model->batchSize = $map['BatchSize'];
        }
        if (isset($map['Completed'])) {
            $model->completed = $map['Completed'];
        }
        if (isset($map['Finish'])) {
            $model->finish = $map['Finish'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['Progress'])) {
            $model->progress = $map['Progress'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TimeToLive'])) {
            $model->timeToLive = $map['TimeToLive'];
        }
        if (isset($map['TotalUsedTime'])) {
            $model->totalUsedTime = $map['TotalUsedTime'];
        }

        return $model;
    }
}

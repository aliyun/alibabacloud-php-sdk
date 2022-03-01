<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ivpd\V20190625\Models\GetAsyncResultResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $batchSize;

    /**
     * @var string
     */
    public $code;

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
     * @var mixed[]
     */
    public $result;

    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $totalUsedTime;
    protected $_name = [
        'batchSize'     => 'BatchSize',
        'code'          => 'Code',
        'completed'     => 'Completed',
        'finish'        => 'Finish',
        'message'       => 'Message',
        'progress'      => 'Progress',
        'result'        => 'Result',
        'status'        => 'Status',
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
        if (null !== $this->code) {
            $res['Code'] = $this->code;
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
        if (null !== $this->result) {
            $res['Result'] = $this->result;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
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
        if (isset($map['Result'])) {
            $model->result = $map['Result'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TotalUsedTime'])) {
            $model->totalUsedTime = $map['TotalUsedTime'];
        }

        return $model;
    }
}

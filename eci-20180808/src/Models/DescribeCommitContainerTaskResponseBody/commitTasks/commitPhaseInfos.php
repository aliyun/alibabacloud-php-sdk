<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eci\V20180808\Models\DescribeCommitContainerTaskResponseBody\commitTasks;

use AlibabaCloud\Dara\Model;

class commitPhaseInfos extends Model
{
    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $phase;

    /**
     * @var string
     */
    public $recordTime;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'message' => 'Message',
        'phase' => 'Phase',
        'recordTime' => 'RecordTime',
        'status' => 'Status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }

        if (null !== $this->phase) {
            $res['Phase'] = $this->phase;
        }

        if (null !== $this->recordTime) {
            $res['RecordTime'] = $this->recordTime;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }

        if (isset($map['Phase'])) {
            $model->phase = $map['Phase'];
        }

        if (isset($map['RecordTime'])) {
            $model->recordTime = $map['RecordTime'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}

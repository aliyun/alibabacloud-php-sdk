<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetPhysicalInstanceLogResponseBody;

use AlibabaCloud\Dara\Model;

class taskrunLogList extends Model
{
    /**
     * @var string
     */
    public $duration;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $logContent;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $taskrunId;
    protected $_name = [
        'duration' => 'Duration',
        'endTime' => 'EndTime',
        'logContent' => 'LogContent',
        'startTime' => 'StartTime',
        'status' => 'Status',
        'taskrunId' => 'TaskrunId',
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

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->logContent) {
            $res['LogContent'] = $this->logContent;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->taskrunId) {
            $res['TaskrunId'] = $this->taskrunId;
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

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['LogContent'])) {
            $model->logContent = $map['LogContent'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['TaskrunId'])) {
            $model->taskrunId = $map['TaskrunId'];
        }

        return $model;
    }
}

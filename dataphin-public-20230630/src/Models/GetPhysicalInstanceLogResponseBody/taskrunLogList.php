<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetPhysicalInstanceLogResponseBody;

use AlibabaCloud\Tea\Model;

class taskrunLogList extends Model
{
    /**
     * @example 60s
     *
     * @var string
     */
    public $duration;

    /**
     * @example 2024-05-30 16:48:13
     *
     * @var string
     */
    public $endTime;

    /**
     * @example xx
     *
     * @var string
     */
    public $logContent;

    /**
     * @example 2024-05-30 16:47:13
     *
     * @var string
     */
    public $startTime;

    /**
     * @example SUCCESS
     *
     * @var string
     */
    public $status;

    /**
     * @example tr_23231
     *
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

    public function validate() {}

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return taskrunLogList
     */
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

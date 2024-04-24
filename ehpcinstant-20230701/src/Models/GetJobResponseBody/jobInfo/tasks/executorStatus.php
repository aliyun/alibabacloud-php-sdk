<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EhpcInstant\V20230701\Models\GetJobResponseBody\jobInfo\tasks;

use AlibabaCloud\Tea\Model;

class executorStatus extends Model
{
    /**
     * @example 0
     *
     * @var int
     */
    public $arrayId;

    /**
     * @example 2024-02-04 13:54:10
     *
     * @var string
     */
    public $createTime;

    /**
     * @example 2024-02-04 13:54:10
     *
     * @var string
     */
    public $endTime;

    /**
     * @example 2024-02-04 13:54:10
     *
     * @var string
     */
    public $startTime;

    /**
     * @example Running
     *
     * @var string
     */
    public $status;

    /**
     * @example Creating executor
     *
     * @var string
     */
    public $statusReason;
    protected $_name = [
        'arrayId'      => 'ArrayId',
        'createTime'   => 'CreateTime',
        'endTime'      => 'EndTime',
        'startTime'    => 'StartTime',
        'status'       => 'Status',
        'statusReason' => 'StatusReason',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->arrayId) {
            $res['ArrayId'] = $this->arrayId;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->statusReason) {
            $res['StatusReason'] = $this->statusReason;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return executorStatus
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ArrayId'])) {
            $model->arrayId = $map['ArrayId'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['StatusReason'])) {
            $model->statusReason = $map['StatusReason'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeDataReDistributeInfoResponseBody;

use AlibabaCloud\Tea\Model;

class dataReDistributeInfo extends Model
{
    /**
     * @description The execution information. If an error occurs, the error message is returned.
     *
     * @example redistributing
     *
     * @var string
     */
    public $message;

    /**
     * @description The progress of data redistribution. Unit: %.
     *
     * @example 33
     *
     * @var int
     */
    public $progress;

    /**
     * @description The estimated remaining time for data redistribution.
     *
     * @example 00:01:28
     *
     * @var string
     */
    public $remainTime;

    /**
     * @description This parameter is not supported.
     *
     * @example null
     *
     * @var string
     */
    public $startTime;

    /**
     * @description The status of data redistribution.
     *
     * @example RUNNING
     *
     * @var string
     */
    public $status;

    /**
     * @description The execution type. The value **immediate** is returned, indicating immediate execution.
     *
     * @example immediate
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'message'    => 'Message',
        'progress'   => 'Progress',
        'remainTime' => 'RemainTime',
        'startTime'  => 'StartTime',
        'status'     => 'Status',
        'type'       => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->progress) {
            $res['Progress'] = $this->progress;
        }
        if (null !== $this->remainTime) {
            $res['RemainTime'] = $this->remainTime;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dataReDistributeInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['Progress'])) {
            $model->progress = $map['Progress'];
        }
        if (isset($map['RemainTime'])) {
            $model->remainTime = $map['RemainTime'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}

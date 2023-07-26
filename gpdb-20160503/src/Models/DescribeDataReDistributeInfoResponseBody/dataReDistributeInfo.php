<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeDataReDistributeInfoResponseBody;

use AlibabaCloud\Tea\Model;

class dataReDistributeInfo extends Model
{
    /**
     * @example redistributing
     *
     * @var string
     */
    public $message;

    /**
     * @example 33
     *
     * @var int
     */
    public $progress;

    /**
     * @example 00:01:28
     *
     * @var string
     */
    public $remainTime;

    /**
     * @example null
     *
     * @var string
     */
    public $startTime;

    /**
     * @example RUNNING
     *
     * @var string
     */
    public $status;

    /**
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

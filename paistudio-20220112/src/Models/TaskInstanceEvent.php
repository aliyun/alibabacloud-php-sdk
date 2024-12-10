<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20220112\Models;

use AlibabaCloud\Tea\Model;

class TaskInstanceEvent extends Model
{
    /**
     * @var string
     */
    public $gmtEndTime;

    /**
     * @var string
     */
    public $gmtStartTime;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $podName;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $workloadType;
    protected $_name = [
        'gmtEndTime'   => 'GmtEndTime',
        'gmtStartTime' => 'GmtStartTime',
        'message'      => 'Message',
        'podName'      => 'PodName',
        'status'       => 'Status',
        'workloadType' => 'WorkloadType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->gmtEndTime) {
            $res['GmtEndTime'] = $this->gmtEndTime;
        }
        if (null !== $this->gmtStartTime) {
            $res['GmtStartTime'] = $this->gmtStartTime;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->podName) {
            $res['PodName'] = $this->podName;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->workloadType) {
            $res['WorkloadType'] = $this->workloadType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return TaskInstanceEvent
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GmtEndTime'])) {
            $model->gmtEndTime = $map['GmtEndTime'];
        }
        if (isset($map['GmtStartTime'])) {
            $model->gmtStartTime = $map['GmtStartTime'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['PodName'])) {
            $model->podName = $map['PodName'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['WorkloadType'])) {
            $model->workloadType = $map['WorkloadType'];
        }

        return $model;
    }
}

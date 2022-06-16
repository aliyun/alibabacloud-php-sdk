<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Retailcloud\V20180313\Models;

use AlibabaCloud\Tea\Model;

class SyncPodInfoRequest extends Model
{
    /**
     * @var string
     */
    public $podName;

    /**
     * @var string
     */
    public $reason;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $sideCarType;

    /**
     * @var bool
     */
    public $status;

    /**
     * @var int
     */
    public $taskId;
    protected $_name = [
        'podName'     => 'PodName',
        'reason'      => 'Reason',
        'requestId'   => 'RequestId',
        'sideCarType' => 'SideCarType',
        'status'      => 'Status',
        'taskId'      => 'TaskId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->podName) {
            $res['PodName'] = $this->podName;
        }
        if (null !== $this->reason) {
            $res['Reason'] = $this->reason;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->sideCarType) {
            $res['SideCarType'] = $this->sideCarType;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SyncPodInfoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PodName'])) {
            $model->podName = $map['PodName'];
        }
        if (isset($map['Reason'])) {
            $model->reason = $map['Reason'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SideCarType'])) {
            $model->sideCarType = $map['SideCarType'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class ListTaskByPageShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $iotInstanceId;

    /**
     * @var string
     */
    public $pageSize;

    /**
     * @var string
     */
    public $pageNo;

    /**
     * @var string
     */
    public $jobId;

    /**
     * @var string
     */
    public $deviceShrink;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $deviceName;

    /**
     * @var string
     */
    public $jobName;
    protected $_name = [
        'iotInstanceId' => 'IotInstanceId',
        'pageSize'      => 'PageSize',
        'pageNo'        => 'PageNo',
        'jobId'         => 'JobId',
        'deviceShrink'  => 'Device',
        'status'        => 'Status',
        'deviceName'    => 'DeviceName',
        'jobName'       => 'JobName',
    ];

    public function validate()
    {
        Model::validateRequired('pageSize', $this->pageSize, true);
        Model::validateRequired('pageNo', $this->pageNo, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->iotInstanceId) {
            $res['IotInstanceId'] = $this->iotInstanceId;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->pageNo) {
            $res['PageNo'] = $this->pageNo;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->deviceShrink) {
            $res['Device'] = $this->deviceShrink;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->deviceName) {
            $res['DeviceName'] = $this->deviceName;
        }
        if (null !== $this->jobName) {
            $res['JobName'] = $this->jobName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListTaskByPageShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IotInstanceId'])) {
            $model->iotInstanceId = $map['IotInstanceId'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['PageNo'])) {
            $model->pageNo = $map['PageNo'];
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['Device'])) {
            $model->deviceShrink = $map['Device'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['DeviceName'])) {
            $model->deviceName = $map['DeviceName'];
        }
        if (isset($map['JobName'])) {
            $model->jobName = $map['JobName'];
        }

        return $model;
    }
}

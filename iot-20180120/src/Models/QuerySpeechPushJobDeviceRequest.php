<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class QuerySpeechPushJobDeviceRequest extends Model
{
    /**
     * @var string
     */
    public $deviceName;

    /**
     * @var string
     */
    public $iotInstanceId;

    /**
     * @var string
     */
    public $jobCode;

    /**
     * @var int
     */
    public $pageId;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'deviceName'    => 'DeviceName',
        'iotInstanceId' => 'IotInstanceId',
        'jobCode'       => 'JobCode',
        'pageId'        => 'PageId',
        'pageSize'      => 'PageSize',
        'status'        => 'Status',
    ];

    public function validate()
    {
        Model::validateRequired('jobCode', $this->jobCode, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deviceName) {
            $res['DeviceName'] = $this->deviceName;
        }
        if (null !== $this->iotInstanceId) {
            $res['IotInstanceId'] = $this->iotInstanceId;
        }
        if (null !== $this->jobCode) {
            $res['JobCode'] = $this->jobCode;
        }
        if (null !== $this->pageId) {
            $res['PageId'] = $this->pageId;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QuerySpeechPushJobDeviceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeviceName'])) {
            $model->deviceName = $map['DeviceName'];
        }
        if (isset($map['IotInstanceId'])) {
            $model->iotInstanceId = $map['IotInstanceId'];
        }
        if (isset($map['JobCode'])) {
            $model->jobCode = $map['JobCode'];
        }
        if (isset($map['PageId'])) {
            $model->pageId = $map['PageId'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}

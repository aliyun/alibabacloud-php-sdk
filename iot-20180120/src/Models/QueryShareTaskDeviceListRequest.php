<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class QueryShareTaskDeviceListRequest extends Model
{
    /**
     * @description The keyword in the DeviceName of the device that you want to query. Fuzzy match is supported.
     *
     * @example test
     *
     * @var string
     */
    public $deviceName;

    /**
     * @description The instance ID. You can view the **ID** of the instance on the **Overview** page in the IoT Platform console.
     *
     * For more information, see [Overview](~~356505~~) of IoT instances.
     * @example iot-e3***
     *
     * @var string
     */
    public $iotInstanceId;

    /**
     * @description The page number. Valid values: 1 to 10000.
     *
     * @example 1
     *
     * @var int
     */
    public $pageId;

    /**
     * @description The number of entries per page. Valid values: 1 to 50. Default value: 20.
     *
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The ID of the sharing task.
     *
     * @example Md3ZiTL888K9llXDy7890***********
     *
     * @var string
     */
    public $shareTaskId;
    protected $_name = [
        'deviceName'    => 'DeviceName',
        'iotInstanceId' => 'IotInstanceId',
        'pageId'        => 'PageId',
        'pageSize'      => 'PageSize',
        'shareTaskId'   => 'ShareTaskId',
    ];

    public function validate()
    {
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
        if (null !== $this->pageId) {
            $res['PageId'] = $this->pageId;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->shareTaskId) {
            $res['ShareTaskId'] = $this->shareTaskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryShareTaskDeviceListRequest
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
        if (isset($map['PageId'])) {
            $model->pageId = $map['PageId'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['ShareTaskId'])) {
            $model->shareTaskId = $map['ShareTaskId'];
        }

        return $model;
    }
}

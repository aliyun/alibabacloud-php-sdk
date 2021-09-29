<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models;

use AlibabaCloud\Tea\Model;

class ListHostDevicesRequest extends Model
{
    /**
     * @description 项目ID
     *
     * @var string
     */
    public $projectId;

    /**
     * @description 查询开始页
     *
     * @var int
     */
    public $pageIndex;

    /**
     * @description 每页记录数
     *
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $deviceId;

    /**
     * @var string
     */
    public $serialNumber;

    /**
     * @var string
     */
    public $deviceName;
    protected $_name = [
        'projectId'    => 'ProjectId',
        'pageIndex'    => 'PageIndex',
        'pageSize'     => 'PageSize',
        'deviceId'     => 'DeviceId',
        'serialNumber' => 'SerialNumber',
        'deviceName'   => 'DeviceName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->pageIndex) {
            $res['PageIndex'] = $this->pageIndex;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->deviceId) {
            $res['DeviceId'] = $this->deviceId;
        }
        if (null !== $this->serialNumber) {
            $res['SerialNumber'] = $this->serialNumber;
        }
        if (null !== $this->deviceName) {
            $res['DeviceName'] = $this->deviceName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListHostDevicesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['PageIndex'])) {
            $model->pageIndex = $map['PageIndex'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['DeviceId'])) {
            $model->deviceId = $map['DeviceId'];
        }
        if (isset($map['SerialNumber'])) {
            $model->serialNumber = $map['SerialNumber'];
        }
        if (isset($map['DeviceName'])) {
            $model->deviceName = $map['DeviceName'];
        }

        return $model;
    }
}

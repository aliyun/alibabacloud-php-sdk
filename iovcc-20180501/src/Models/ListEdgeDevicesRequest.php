<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models;

use AlibabaCloud\Tea\Model;

class ListEdgeDevicesRequest extends Model
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
    public $hostDeviceId;

    /**
     * @var int
     */
    public $edgeDeviceType;

    /**
     * @var string
     */
    public $edgeDeviceName;
    protected $_name = [
        'projectId'      => 'ProjectId',
        'pageIndex'      => 'PageIndex',
        'pageSize'       => 'PageSize',
        'hostDeviceId'   => 'HostDeviceId',
        'edgeDeviceType' => 'EdgeDeviceType',
        'edgeDeviceName' => 'EdgeDeviceName',
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
        if (null !== $this->hostDeviceId) {
            $res['HostDeviceId'] = $this->hostDeviceId;
        }
        if (null !== $this->edgeDeviceType) {
            $res['EdgeDeviceType'] = $this->edgeDeviceType;
        }
        if (null !== $this->edgeDeviceName) {
            $res['EdgeDeviceName'] = $this->edgeDeviceName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListEdgeDevicesRequest
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
        if (isset($map['HostDeviceId'])) {
            $model->hostDeviceId = $map['HostDeviceId'];
        }
        if (isset($map['EdgeDeviceType'])) {
            $model->edgeDeviceType = $map['EdgeDeviceType'];
        }
        if (isset($map['EdgeDeviceName'])) {
            $model->edgeDeviceName = $map['EdgeDeviceName'];
        }

        return $model;
    }
}

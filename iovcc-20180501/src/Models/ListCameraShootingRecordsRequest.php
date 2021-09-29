<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models;

use AlibabaCloud\Tea\Model;

class ListCameraShootingRecordsRequest extends Model
{
    /**
     * @description 项目ID
     *
     * @var string
     */
    public $projectId;

    /**
     * @description 终端设备id
     *
     * @var string
     */
    public $edgeDeviceId;

    /**
     * @description 拍摄类型，0-图片，1-视频
     *
     * @var int
     */
    public $shootingType;

    /**
     * @description 起始时间
     *
     * @var int
     */
    public $startTime;

    /**
     * @description 截止时间
     *
     * @var int
     */
    public $endTime;

    /**
     * @description 查询开始页号
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
    protected $_name = [
        'projectId'    => 'ProjectId',
        'edgeDeviceId' => 'EdgeDeviceId',
        'shootingType' => 'ShootingType',
        'startTime'    => 'StartTime',
        'endTime'      => 'EndTime',
        'pageIndex'    => 'PageIndex',
        'pageSize'     => 'PageSize',
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
        if (null !== $this->edgeDeviceId) {
            $res['EdgeDeviceId'] = $this->edgeDeviceId;
        }
        if (null !== $this->shootingType) {
            $res['ShootingType'] = $this->shootingType;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->pageIndex) {
            $res['PageIndex'] = $this->pageIndex;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListCameraShootingRecordsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['EdgeDeviceId'])) {
            $model->edgeDeviceId = $map['EdgeDeviceId'];
        }
        if (isset($map['ShootingType'])) {
            $model->shootingType = $map['ShootingType'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['PageIndex'])) {
            $model->pageIndex = $map['PageIndex'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        return $model;
    }
}

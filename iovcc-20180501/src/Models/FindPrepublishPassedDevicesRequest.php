<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models;

use AlibabaCloud\Tea\Model;

class FindPrepublishPassedDevicesRequest extends Model
{
    /**
     * @var string
     */
    public $prepublishId;

    /**
     * @var string
     */
    public $projectId;

    /**
     * @var int
     */
    public $pageIndex;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $deviceId;
    protected $_name = [
        'prepublishId' => 'PrepublishId',
        'projectId'    => 'ProjectId',
        'pageIndex'    => 'PageIndex',
        'pageSize'     => 'PageSize',
        'deviceId'     => 'DeviceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->prepublishId) {
            $res['PrepublishId'] = $this->prepublishId;
        }
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return FindPrepublishPassedDevicesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PrepublishId'])) {
            $model->prepublishId = $map['PrepublishId'];
        }
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

        return $model;
    }
}

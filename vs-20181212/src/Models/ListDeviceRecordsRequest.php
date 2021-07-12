<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models;

use AlibabaCloud\Tea\Model;

class ListDeviceRecordsRequest extends Model
{
    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $deviceId;

    /**
     * @var string
     */
    public $streamId;

    /**
     * @var string
     */
    public $searchCriteria;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $pageNum;
    protected $_name = [
        'ownerId'        => 'OwnerId',
        'deviceId'       => 'DeviceId',
        'streamId'       => 'StreamId',
        'searchCriteria' => 'SearchCriteria',
        'pageSize'       => 'PageSize',
        'pageNum'        => 'PageNum',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->deviceId) {
            $res['DeviceId'] = $this->deviceId;
        }
        if (null !== $this->streamId) {
            $res['StreamId'] = $this->streamId;
        }
        if (null !== $this->searchCriteria) {
            $res['SearchCriteria'] = $this->searchCriteria;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->pageNum) {
            $res['PageNum'] = $this->pageNum;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListDeviceRecordsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['DeviceId'])) {
            $model->deviceId = $map['DeviceId'];
        }
        if (isset($map['StreamId'])) {
            $model->streamId = $map['StreamId'];
        }
        if (isset($map['SearchCriteria'])) {
            $model->searchCriteria = $map['SearchCriteria'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['PageNum'])) {
            $model->pageNum = $map['PageNum'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class QueryDeviceGroupListRequest extends Model
{
    /**
     * @var int
     */
    public $currentPage;

    /**
     * @var string
     */
    public $groupName;

    /**
     * @var string
     */
    public $iotInstanceId;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $superGroupId;
    protected $_name = [
        'currentPage'   => 'CurrentPage',
        'groupName'     => 'GroupName',
        'iotInstanceId' => 'IotInstanceId',
        'pageSize'      => 'PageSize',
        'superGroupId'  => 'SuperGroupId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }
        if (null !== $this->iotInstanceId) {
            $res['IotInstanceId'] = $this->iotInstanceId;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->superGroupId) {
            $res['SuperGroupId'] = $this->superGroupId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryDeviceGroupListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }
        if (isset($map['IotInstanceId'])) {
            $model->iotInstanceId = $map['IotInstanceId'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['SuperGroupId'])) {
            $model->superGroupId = $map['SuperGroupId'];
        }

        return $model;
    }
}

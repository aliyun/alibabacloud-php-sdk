<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MarketplaceIntl\V20221230\Models;

use AlibabaCloud\Tea\Model;

class DescribeSellerInstancesRequest extends Model
{
    /**
     * @example 5000002763123
     *
     * @var int
     */
    public $instanceId;

    /**
     * @example OPENED
     *
     * @var string
     */
    public $instanceStatus;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageIndex;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example 5322460655123456
     *
     * @var int
     */
    public $userId;
    protected $_name = [
        'instanceId'     => 'InstanceId',
        'instanceStatus' => 'InstanceStatus',
        'pageIndex'      => 'PageIndex',
        'pageSize'       => 'PageSize',
        'userId'         => 'UserId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceStatus) {
            $res['InstanceStatus'] = $this->instanceStatus;
        }
        if (null !== $this->pageIndex) {
            $res['PageIndex'] = $this->pageIndex;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSellerInstancesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceStatus'])) {
            $model->instanceStatus = $map['InstanceStatus'];
        }
        if (isset($map['PageIndex'])) {
            $model->pageIndex = $map['PageIndex'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}

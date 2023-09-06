<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models;

use AlibabaCloud\Tea\Model;

class DescribeGWSInstancesRequest extends Model
{
    /**
     * @description The ID of the visualization cluster.
     *
     * @example gws-rhz99q8rc****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The ID of the visualization instance.
     *
     * @example i-bp1bzqq1ddeemuddn****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The page number of the page to return.
     *
     * Default value: 1.
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries to return on each page. Valid values: 1 to 50.
     *
     * Default value: 10.
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The username of the entity whose instances you want to query.
     *
     * >  If this parameter is not specified, instances of all users are queried.
     * @example testuser
     *
     * @var string
     */
    public $userName;

    /**
     * @description The user ID of the entity whose instances you want to query.
     *
     * >  If this parameter is not specified, instances of all users are queried.
     * @example 1234567890
     *
     * @var int
     */
    public $userUid;
    protected $_name = [
        'clusterId'  => 'ClusterId',
        'instanceId' => 'InstanceId',
        'pageNumber' => 'PageNumber',
        'pageSize'   => 'PageSize',
        'userName'   => 'UserName',
        'userUid'    => 'UserUid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
        }
        if (null !== $this->userUid) {
            $res['UserUid'] = $this->userUid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeGWSInstancesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }
        if (isset($map['UserUid'])) {
            $model->userUid = $map['UserUid'];
        }

        return $model;
    }
}

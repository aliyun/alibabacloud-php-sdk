<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models;

use AlibabaCloud\Tea\Model;

class ListHostGroupsForUserRequest extends Model
{
    /**
     * @description The ID of the request.
     *
     * @example group
     *
     * @var string
     */
    public $hostGroupName;

    /**
     * @description The host groups returned.
     *
     * @example bastionhost-cn-st220aw****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The number of entries to return on each page.
     *
     * >  We recommend that you do not leave the PageSize parameter empty.
     * @example Authorized
     *
     * @var string
     */
    public $mode;

    /**
     * @description The ID of the host group.
     *
     * @example １
     *
     * @var string
     */
    public $pageNumber;

    /**
     * @description The ID of the user.
     *
     * >  You can call the [ListUsers](~~204522~~) operation to query the ID of the user.
     * @example 20
     *
     * @var string
     */
    public $pageSize;

    /**
     * @description The number of the page to return. Default value: **1**.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the Bastionhost instance where you want to query the host groups that the user is authorized or not authorized to manage.
     *
     * >  You can call the [DescribeInstances](~~153281~~) operation to query the ID of the Bastionhost instance.
     * @example １
     *
     * @var string
     */
    public $userId;
    protected $_name = [
        'hostGroupName' => 'HostGroupName',
        'instanceId'    => 'InstanceId',
        'mode'          => 'Mode',
        'pageNumber'    => 'PageNumber',
        'pageSize'      => 'PageSize',
        'regionId'      => 'RegionId',
        'userId'        => 'UserId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->hostGroupName) {
            $res['HostGroupName'] = $this->hostGroupName;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->mode) {
            $res['Mode'] = $this->mode;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListHostGroupsForUserRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HostGroupName'])) {
            $model->hostGroupName = $map['HostGroupName'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Mode'])) {
            $model->mode = $map['Mode'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}

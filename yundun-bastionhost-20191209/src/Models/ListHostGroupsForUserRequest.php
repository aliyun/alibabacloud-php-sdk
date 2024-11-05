<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models;

use AlibabaCloud\Tea\Model;

class ListHostGroupsForUserRequest extends Model
{
    /**
     * @description The name of the host group to query. The name can be up to 128 characters in length. Only exact match is supported.
     *
     * @example group
     *
     * @var string
     */
    public $hostGroupName;

    /**
     * @description The ID of the bastion host whose user you want to query.
     *
     * This parameter is required.
     * @example bastionhost-cn-st220aw****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The category of the host groups to query. Valid values:
     *
     *   **Authorized** (default): queries the host groups that the user is authorized to manage.
     *   **Unauthorized**: queries the host groups that the user is not authorized to manage.
     *
     * @example Authorized
     *
     * @var string
     */
    public $mode;

    /**
     * @description The page number. Default value: **1**.
     *
     * @example １
     *
     * @var string
     */
    public $pageNumber;

    /**
     * @description The number of entries per page.\\
     * >  We recommend that you do not leave this parameter empty.
     * @example 20
     *
     * @var string
     */
    public $pageSize;

    /**
     * @description The region ID of the bastion host whose user you want to query.
     *
     * >  For more information about the mapping between region IDs and region names, see [Regions and zones](https://help.aliyun.com/document_detail/40654.html).
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The user ID.
     *
     * This parameter is required.
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

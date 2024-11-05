<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models;

use AlibabaCloud\Tea\Model;

class ListUserGroupsRequest extends Model
{
    /**
     * @description The ID of the bastion host on which you want to query user groups.
     * This parameter is required.
     * @example bastionhost-cn-st220aw****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The number of the page to return. Default value: 1.
     *
     * @example 1
     *
     * @var string
     */
    public $pageNumber;

    /**
     * @description The number of entries to return on each page.
     * Maximum value: 100. Default value: 20. If you leave this parameter empty, 20 entries are returned on each page.
     * @example 20
     *
     * @var string
     */
    public $pageSize;

    /**
     * @description The region ID of the bastion host on which you want to query user groups.
     * > For more information about the mapping between region IDs and region names, see [Regions and zones](https://help.aliyun.com/document_detail/462924.html).
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The name of the user group that you want to query. Only exact match is supported.
     *
     * @example TestGroup01
     *
     * @var string
     */
    public $userGroupName;
    protected $_name = [
        'instanceId'    => 'InstanceId',
        'pageNumber'    => 'PageNumber',
        'pageSize'      => 'PageSize',
        'regionId'      => 'RegionId',
        'userGroupName' => 'UserGroupName',
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
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->userGroupName) {
            $res['UserGroupName'] = $this->userGroupName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListUserGroupsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
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
        if (isset($map['UserGroupName'])) {
            $model->userGroupName = $map['UserGroupName'];
        }

        return $model;
    }
}

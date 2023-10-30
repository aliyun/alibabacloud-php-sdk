<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models;

use AlibabaCloud\Tea\Model;

class ListHostGroupAccountNamesForUserGroupRequest extends Model
{
    /**
     * @description WB662865
     *
     * @example 1
     *
     * @var string
     */
    public $hostGroupId;

    /**
     * @description All Bastionhost API requests must include common request parameters. For more information about common request parameters, see [Common parameters](~~148139~~).
     *
     * For more information about sample requests, see the "Examples" section of this topic.
     * @example bastionhost-cn-st220aw****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description Queries the names of the host accounts that a specified user group is authorized to manage in a specified host group.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description ListHostGroupAccountNamesForUserGroup
     *
     * @example 1
     *
     * @var string
     */
    public $userGroupId;
    protected $_name = [
        'hostGroupId' => 'HostGroupId',
        'instanceId'  => 'InstanceId',
        'regionId'    => 'RegionId',
        'userGroupId' => 'UserGroupId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->hostGroupId) {
            $res['HostGroupId'] = $this->hostGroupId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->userGroupId) {
            $res['UserGroupId'] = $this->userGroupId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListHostGroupAccountNamesForUserGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HostGroupId'])) {
            $model->hostGroupId = $map['HostGroupId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['UserGroupId'])) {
            $model->userGroupId = $map['UserGroupId'];
        }

        return $model;
    }
}

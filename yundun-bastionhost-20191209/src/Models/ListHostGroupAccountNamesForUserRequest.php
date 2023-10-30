<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models;

use AlibabaCloud\Tea\Model;

class ListHostGroupAccountNamesForUserRequest extends Model
{
    /**
     * @description The ID of the host group.
     *
     * > You can call the [ListHostGroups](~~201307~~) operation to query the ID of the host group.
     * @example 1
     *
     * @var string
     */
    public $hostGroupId;

    /**
     * @description The ID of the bastion host to which the user belongs.
     *
     * > You can call the [DescribeInstances](~~153281~~) operation to query the ID of the bastion host.
     * @example bastionhost-cn-st220aw****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The region ID of the bastion host to which the user belongs.
     *
     * > For more information about the mapping between region IDs and region names, see [Regions and zones](~~40654~~).
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the user.
     *
     * > You can call the [ListUsers](~~204522~~) operation to query the ID of the user.
     * @example 1
     *
     * @var string
     */
    public $userId;
    protected $_name = [
        'hostGroupId' => 'HostGroupId',
        'instanceId'  => 'InstanceId',
        'regionId'    => 'RegionId',
        'userId'      => 'UserId',
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
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListHostGroupAccountNamesForUserRequest
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
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}

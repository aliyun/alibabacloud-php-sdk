<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models;

use AlibabaCloud\Tea\Model;

class ModifyHostGroupRequest extends Model
{
    /**
     * @description The new name of the host group. The name can be up to 128 characters in length.
     *
     * @example comment
     *
     * @var string
     */
    public $comment;

    /**
     * @description The region ID of the Bastionhost instance where you want to modify the information of the host group.
     *
     * >  For more information about the mapping between region IDs and region names, see [Regions and zones](~~40654~~).
     * @example 1
     *
     * @var string
     */
    public $hostGroupId;

    /**
     * @description The ID of the host group that you want to modify.
     *
     * >  You can call the [ListHostGroups](~~201307~~) operation to query the ID of the host group.
     * @example Group01
     *
     * @var string
     */
    public $hostGroupName;

    /**
     * @description The ID of the request.
     *
     * @example bastionhost-cn-st220aw****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The ID of the Bastionhost instance where you want to modify the information of the host group.
     *
     * >  You can call the [DescribeInstances](~~153281~~) operation to query the ID of the Bastionhost instance.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'comment'       => 'Comment',
        'hostGroupId'   => 'HostGroupId',
        'hostGroupName' => 'HostGroupName',
        'instanceId'    => 'InstanceId',
        'regionId'      => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }
        if (null !== $this->hostGroupId) {
            $res['HostGroupId'] = $this->hostGroupId;
        }
        if (null !== $this->hostGroupName) {
            $res['HostGroupName'] = $this->hostGroupName;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyHostGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }
        if (isset($map['HostGroupId'])) {
            $model->hostGroupId = $map['HostGroupId'];
        }
        if (isset($map['HostGroupName'])) {
            $model->hostGroupName = $map['HostGroupName'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}

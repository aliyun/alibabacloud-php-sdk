<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models;

use AlibabaCloud\Tea\Model;

class RemoveDatabasesFromGroupRequest extends Model
{
    /**
     * @description The IDs of the databases that you want to remove.
     *
     * This parameter is required.
     * @var string[]
     */
    public $databaseIds;

    /**
     * @description The ID of the asset group from which you want to remove databases.
     *
     * This parameter is required.
     * @example 1
     *
     * @var string
     */
    public $hostGroupId;

    /**
     * @description The ID of the bastion host whose asset group you want to manage.
     *
     * This parameter is required.
     * @example bastionhost-cn-78v1ghxxxxx
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The region ID of the bastion host whose asset group you want to manage.
     *
     * > For more information about the mapping between region IDs and region names, see [Regions and zones](https://help.aliyun.com/document_detail/40654.html).
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'databaseIds' => 'DatabaseIds',
        'hostGroupId' => 'HostGroupId',
        'instanceId'  => 'InstanceId',
        'regionId'    => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->databaseIds) {
            $res['DatabaseIds'] = $this->databaseIds;
        }
        if (null !== $this->hostGroupId) {
            $res['HostGroupId'] = $this->hostGroupId;
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
     * @return RemoveDatabasesFromGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DatabaseIds'])) {
            if (!empty($map['DatabaseIds'])) {
                $model->databaseIds = $map['DatabaseIds'];
            }
        }
        if (isset($map['HostGroupId'])) {
            $model->hostGroupId = $map['HostGroupId'];
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

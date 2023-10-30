<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models;

use AlibabaCloud\Tea\Model;

class RemoveHostsFromGroupRequest extends Model
{
    /**
     * @description The return code that indicates whether the call was successful. Valid values:
     *
     *   **OK**: The call was successful.
     *   **UNEXPECTED**: An unknown error occurred.
     *   **INVALID_ARGUMENT**: A request parameter is invalid.
     *   **OBJECT_NOT_FOUND**: The specified object on which you want to perform the operation does not exist.
     *   **OBJECT_AlREADY_EXISTS**: The specified object on which you want to perform the operation already exists.
     *
     * @example 1
     *
     * @var string
     */
    public $hostGroupId;

    /**
     * @description The ID of the request.
     *
     * @example ["1","2","3"]
     *
     * @var string
     */
    public $hostIds;

    /**
     * @description The ID of the host that you want to remove from the host group. The value is a JSON string. You can add up to 100 host IDs.
     *
     * >  You can call the [ListHosts](~~200665~~) operation to query the IDs of hosts.
     * @example bastionhost-cn-st220aw****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The ID of the host group.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'hostGroupId' => 'HostGroupId',
        'hostIds'     => 'HostIds',
        'instanceId'  => 'InstanceId',
        'regionId'    => 'RegionId',
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
        if (null !== $this->hostIds) {
            $res['HostIds'] = $this->hostIds;
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
     * @return RemoveHostsFromGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HostGroupId'])) {
            $model->hostGroupId = $map['HostGroupId'];
        }
        if (isset($map['HostIds'])) {
            $model->hostIds = $map['HostIds'];
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

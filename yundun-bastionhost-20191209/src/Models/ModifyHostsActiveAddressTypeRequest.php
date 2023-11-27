<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models;

use AlibabaCloud\Tea\Model;

class ModifyHostsActiveAddressTypeRequest extends Model
{
    /**
     * @description The new portal type of the host. Valid values:
     *
     *   **Public**: public portal
     *   **Private**: internal portal
     *
     * @example Private
     *
     * @var string
     */
    public $activeAddressType;

    /**
     * @description The ID of the host for which you want to change the portal type. The value is a JSON string. You can add up to 100 host IDs.
     *
     * >  You can call the [ListHosts](~~200665~~) operation to query the ID of the host.
     * @example ["1","2"]
     *
     * @var string
     */
    public $hostIds;

    /**
     * @description The ID of the bastion host for which you want to change the portal type of the host.
     *
     * >  You can call the [DescribeInstances](~~153281~~) operation to query the ID of the bastion host.
     * @example bastionhost-cn-st220aw***
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The region ID of the bastion host for which you want to change the portal type of the host.
     *
     * >  For more information about the mapping between region IDs and region names, see [Regions and zones](~~40654~~).
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'activeAddressType' => 'ActiveAddressType',
        'hostIds'           => 'HostIds',
        'instanceId'        => 'InstanceId',
        'regionId'          => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->activeAddressType) {
            $res['ActiveAddressType'] = $this->activeAddressType;
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
     * @return ModifyHostsActiveAddressTypeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ActiveAddressType'])) {
            $model->activeAddressType = $map['ActiveAddressType'];
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

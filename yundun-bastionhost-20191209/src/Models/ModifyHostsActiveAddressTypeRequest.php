<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models;

use AlibabaCloud\Tea\Model;

class ModifyHostsActiveAddressTypeRequest extends Model
{
    /**
     * @example Private
     *
     * @var string
     */
    public $activeAddressType;

    /**
     * @description All Alibaba Cloud API operations must include common request parameters. For more information about common request parameters, see [Common parameters](~~148139~~).
     *
     * For more information about sample requests, see the "Examples" section of this topic.
     * @example ["1","2"]
     *
     * @var string
     */
    public $hostIds;

    /**
     * @description The ID of the request, which is used to locate and troubleshoot issues.
     *
     * @example bastionhost-cn-st220aw***
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The operation that you want to perform.
     *
     * Set the value to **ModifyHostsActiveAddressType**.
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

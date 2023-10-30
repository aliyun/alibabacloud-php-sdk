<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models;

use AlibabaCloud\Tea\Model;

class DetachHostAccountsFromHostShareKeyRequest extends Model
{
    /**
     * @description The IDs of the host accounts.
     *
     * @example ["1","2","3"]
     *
     * @var string
     */
    public $hostAccountIds;

    /**
     * @description The ID of the shared key.
     *
     * @example 11
     *
     * @var string
     */
    public $hostShareKeyId;

    /**
     * @description The ID of the bastion host. You can call the [DescribeInstances](~~153281~~) operation to query the ID of the bastion host.
     *
     * @example bastionhost-cn-st220aw****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The region ID of the bastion host. For more information about the mapping between region IDs and region names, see [Regions and zones](~~40654~~).
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'hostAccountIds' => 'HostAccountIds',
        'hostShareKeyId' => 'HostShareKeyId',
        'instanceId'     => 'InstanceId',
        'regionId'       => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->hostAccountIds) {
            $res['HostAccountIds'] = $this->hostAccountIds;
        }
        if (null !== $this->hostShareKeyId) {
            $res['HostShareKeyId'] = $this->hostShareKeyId;
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
     * @return DetachHostAccountsFromHostShareKeyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HostAccountIds'])) {
            $model->hostAccountIds = $map['HostAccountIds'];
        }
        if (isset($map['HostShareKeyId'])) {
            $model->hostShareKeyId = $map['HostShareKeyId'];
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

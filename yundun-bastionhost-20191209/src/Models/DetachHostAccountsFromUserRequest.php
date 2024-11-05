<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models;

use AlibabaCloud\Tea\Model;

class DetachHostAccountsFromUserRequest extends Model
{
    /**
     * @description The IDs of the hosts and host accounts on which you want to revoke permissions from the user. You can specify up to 10 host IDs and up to 10 host account IDs for each host. You can specify only host IDs. In this case, the permissions on the specified hosts and all accounts of the hosts are revoked from the user. For more information about this parameter, see the Description of the Hosts parameter section of this topic.
     *
     * This parameter is required.
     * @example [ {"HostId":"1"}, {"HostId":"2","HostAccountIds":["1","2","3"]}, {"HostId":"3","HostAccountIds":["4","5","6"]}, {"HostId":"4","HostAccountIds":["9","8","7"]} ]
     *
     * @var string
     */
    public $hosts;

    /**
     * @description The ID of the bastion host on which you want to revoke permissions on the specified hosts and host accounts from the user.
     *
     * This parameter is required.
     * @example bastionhost-cn-st220aw****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The region ID of the bastion host on which you want to revoke permissions on the specified hosts and host accounts from the user.
     *
     * >  For more information about the mapping between region IDs and region names, see [Regions and zones](https://help.aliyun.com/document_detail/40654.html).
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the user from whom you want to revoke permissions on the specified hosts and host accounts.
     *
     * This parameter is required.
     * @example 1
     *
     * @var string
     */
    public $userId;
    protected $_name = [
        'hosts'      => 'Hosts',
        'instanceId' => 'InstanceId',
        'regionId'   => 'RegionId',
        'userId'     => 'UserId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->hosts) {
            $res['Hosts'] = $this->hosts;
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
     * @return DetachHostAccountsFromUserRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Hosts'])) {
            $model->hosts = $map['Hosts'];
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

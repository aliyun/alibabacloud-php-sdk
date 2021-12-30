<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models;

use AlibabaCloud\Tea\Model;

class DetachHostGroupAccountsFromUserRequest extends Model
{
    /**
     * @var string
     */
    public $hostGroups;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'hostGroups' => 'HostGroups',
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
        if (null !== $this->hostGroups) {
            $res['HostGroups'] = $this->hostGroups;
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
     * @return DetachHostGroupAccountsFromUserRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HostGroups'])) {
            $model->hostGroups = $map['HostGroups'];
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

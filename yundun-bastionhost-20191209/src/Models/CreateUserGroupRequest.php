<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models;

use AlibabaCloud\Tea\Model;

class CreateUserGroupRequest extends Model
{
    /**
     * @var string
     */
    public $comment;

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
    public $userGroupName;
    protected $_name = [
        'comment'       => 'Comment',
        'instanceId'    => 'InstanceId',
        'regionId'      => 'RegionId',
        'userGroupName' => 'UserGroupName',
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
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->userGroupName) {
            $res['UserGroupName'] = $this->userGroupName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateUserGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['UserGroupName'])) {
            $model->userGroupName = $map['UserGroupName'];
        }

        return $model;
    }
}

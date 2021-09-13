<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models;

use AlibabaCloud\Tea\Model;

class RemoveUsersRequest extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $userIdList;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'userIdList' => 'UserIdList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->userIdList) {
            $res['UserIdList'] = $this->userIdList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RemoveUsersRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['UserIdList'])) {
            $model->userIdList = $map['UserIdList'];
        }

        return $model;
    }
}

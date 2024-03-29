<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models;

use AlibabaCloud\Tea\Model;

class SetGWSInstanceUserRequest extends Model
{
    /**
     * @description The ID of the visualization instance.
     *
     * @example i-bp1bzqq4rj1eemun****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The name of the user.
     *
     * @example test_****
     *
     * @var string
     */
    public $userName;

    /**
     * @description The ID of the user.
     *
     * @example 217346586905362****
     *
     * @var string
     */
    public $userUid;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'userName'   => 'UserName',
        'userUid'    => 'UserUid',
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
        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
        }
        if (null !== $this->userUid) {
            $res['UserUid'] = $this->userUid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetGWSInstanceUserRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }
        if (isset($map['UserUid'])) {
            $model->userUid = $map['UserUid'];
        }

        return $model;
    }
}

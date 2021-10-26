<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Tea\Model;

class CreateMonitorGroupRequest extends Model
{
    /**
     * @var string
     */
    public $securityToken;

    /**
     * @var string
     */
    public $groupId;

    /**
     * @var int
     */
    public $rawMonitorGroupId;

    /**
     * @var string
     */
    public $auth;
    protected $_name = [
        'securityToken'     => 'SecurityToken',
        'groupId'           => 'GroupId',
        'rawMonitorGroupId' => 'RawMonitorGroupId',
        'auth'              => 'Auth',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->rawMonitorGroupId) {
            $res['RawMonitorGroupId'] = $this->rawMonitorGroupId;
        }
        if (null !== $this->auth) {
            $res['Auth'] = $this->auth;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateMonitorGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['RawMonitorGroupId'])) {
            $model->rawMonitorGroupId = $map['RawMonitorGroupId'];
        }
        if (isset($map['Auth'])) {
            $model->auth = $map['Auth'];
        }

        return $model;
    }
}

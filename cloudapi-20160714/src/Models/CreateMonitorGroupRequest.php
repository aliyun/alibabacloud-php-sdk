<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Tea\Model;

class CreateMonitorGroupRequest extends Model
{
    /**
     * @description The caller authentication status of the API. Valid values: **ok**: The authentication is successful. **mismatch**: The request is redirected. **servicenotfound**: A request error occurred. **Unknown**: An unknown error occurred.
     *
     * This parameter is required.
     * @example false
     *
     * @var string
     */
    public $auth;

    /**
     * @description The ID of the API group.
     *
     * This parameter is required.
     * @example 6735211ab9094c818f32f27bc545b6c8
     *
     * @var string
     */
    public $groupId;

    /**
     * @description The ID of the monitoring group.
     *
     * @example 166636221
     *
     * @var int
     */
    public $rawMonitorGroupId;

    /**
     * @var string
     */
    public $securityToken;
    protected $_name = [
        'auth'              => 'Auth',
        'groupId'           => 'GroupId',
        'rawMonitorGroupId' => 'RawMonitorGroupId',
        'securityToken'     => 'SecurityToken',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->auth) {
            $res['Auth'] = $this->auth;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->rawMonitorGroupId) {
            $res['RawMonitorGroupId'] = $this->rawMonitorGroupId;
        }
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
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
        if (isset($map['Auth'])) {
            $model->auth = $map['Auth'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['RawMonitorGroupId'])) {
            $model->rawMonitorGroupId = $map['RawMonitorGroupId'];
        }
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }

        return $model;
    }
}

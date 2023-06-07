<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SWASOPEN\V20200601\Models;

use AlibabaCloud\Tea\Model;

class LoginInstanceRequest extends Model
{
    /**
     * @description The ID of the simple application server.
     *
     * @example 9ae7106e68eb4402b0dcbd48a9de****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The password that corresponds to the username.
     *
     *   For a Linux server, you do not need to enter a password.
     *   For a Windows server, enter the password that you set. If you have not set a password for the simple application server, set a password. For more information, see [Reset the password](~~60055~~l).
     *
     * @example Test****
     *
     * @var string
     */
    public $password;

    /**
     * @description The region ID of the simple application server.
     *
     * You can call the [ListRegions](~~189315~~) operation to query the most recent region list.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The username of the simple application server.
     *
     *   For a Linux server, you do not need to enter a username.
     *   For a Windows server, the default username is `administrator`.
     *
     * @example administrator
     *
     * @var string
     */
    public $username;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'password'   => 'Password',
        'regionId'   => 'RegionId',
        'username'   => 'Username',
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
        if (null !== $this->password) {
            $res['Password'] = $this->password;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->username) {
            $res['Username'] = $this->username;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return LoginInstanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Password'])) {
            $model->password = $map['Password'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Username'])) {
            $model->username = $map['Username'];
        }

        return $model;
    }
}

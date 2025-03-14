<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SWASOPEN\V20200601\Models;

use AlibabaCloud\Tea\Model;

class LoginInstanceRequest extends Model
{
    /**
     * @description The ID of the simple application server.
     *
     * This parameter is required.
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
     *   For a Windows server, enter the password that you set. If you have not set a password for the simple application server, set a password. For more information, see [Reset the password](https://help.aliyun.com/document_detail/60055.html).
     *
     * @example Test****
     *
     * @var string
     */
    public $password;

    /**
     * @description The port number that is used to log on to the simple application server by using Workbench.
     *
     *   Linux servers: The default value is 22.
     *   Windows servers: The default value is 3389.
     *
     * >  If you want to connect to a server by using a custom port, you must modify the default remote connection port. For more information, see [Configure a custom remote connection port](https://help.aliyun.com/document_detail/2807402.html).
     *
     * @example 3389
     *
     * @var int
     */
    public $port;

    /**
     * @description The region ID of the simple application server. You can call the [ListRegions](https://help.aliyun.com/document_detail/189315.html) operation to query the most recent region list.
     *
     * This parameter is required.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The username of the simple application server.
     *
     *   For a Linux server, you do not need to enter a username.
     *   For a Windows server, the default username `administrator` is used.
     *
     * @example administrator
     *
     * @var string
     */
    public $username;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'password' => 'Password',
        'port' => 'Port',
        'regionId' => 'RegionId',
        'username' => 'Username',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->password) {
            $res['Password'] = $this->password;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
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
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
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

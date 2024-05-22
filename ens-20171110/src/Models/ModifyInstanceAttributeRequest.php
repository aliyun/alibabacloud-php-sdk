<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class ModifyInstanceAttributeRequest extends Model
{
    /**
     * @description The hostname of the Elastic Compute Service (ECS) instance. The value can be 2 to 64 characters in length. You can use periods (.) to separate the value into multiple segments. Each segment can contain letters, digits, hyphens (-), and periods. Consecutive periods or hyphens are not allowed. The name cannot start or end with a period (.) or a hyphen (-).
     *
     * @example testHostName
     *
     * @var string
     */
    public $hostName;

    /**
     * @description The ID of the instance for which you want to modify attributes. You can specify only one ID.
     *
     * This parameter is required.
     * @example i-instanc****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The name of the instance.
     *
     * The name must be 2 to 128 characters in length. It must start with a letter but cannot start with `http://` or `https://`. The name can contain letters, digits, colons (:), underscores (_), and hyphens (-).
     * @example i-instanceidname
     *
     * @var string
     */
    public $instanceName;

    /**
     * @description The password of the instance.
     *
     * @example yourPassword
     *
     * @var string
     */
    public $password;

    /**
     * @description The user data of the instance. User data must be encoded in Base64.
     *
     * The size of your UserData cannot exceed 16 KB. We recommend that you do not pass in confidential information such as passwords and private keys in the plaintext format. If you must pass in confidential information, we recommend that you encrypt and Base64-encode the information before you pass it in. Then you can decode and decrypt the information in the same way within the instance.
     * @example /9j/4AAQSkZJRgABAQAAAQABAAD/2wBDAAgGBgcGBQgHBwcJCQgK****
     *
     * @var string
     */
    public $userData;
    protected $_name = [
        'hostName'     => 'HostName',
        'instanceId'   => 'InstanceId',
        'instanceName' => 'InstanceName',
        'password'     => 'Password',
        'userData'     => 'UserData',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->hostName) {
            $res['HostName'] = $this->hostName;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->password) {
            $res['Password'] = $this->password;
        }
        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyInstanceAttributeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HostName'])) {
            $model->hostName = $map['HostName'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['Password'])) {
            $model->password = $map['Password'];
        }
        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }

        return $model;
    }
}

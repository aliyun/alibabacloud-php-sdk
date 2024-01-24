<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Amqpopen\V20191212\Models\CreateAccountResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The AccessKey ID that is used to create the password.
     *
     * @example LTAI5***********eRZtEJ6vfo
     *
     * @var string
     */
    public $accessKey;

    /**
     * @description The timestamp that indicates when the password was created. Unit: milliseconds.
     *
     * @example 1671175303522
     *
     * @var int
     */
    public $createTimeStamp;

    /**
     * @description The ID of the ApsaraMQ for RabbitMQ instance.
     *
     * @example amqp-cn-*********
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The Alibaba Cloud account ID or RAM user to which the AccessKey pair that is used to create the static username and password belongs.
     *
     * @example 15657*********01
     *
     * @var int
     */
    public $masterUId;

    /**
     * @description The created static password.
     *
     * @example NEMxQTYzNjdDRTVDNDI1NUU5NjE3**************1MzNGODoxNjcxMTc1MzEzNTIy
     *
     * @var string
     */
    public $password;

    /**
     * @description The created static username.
     *
     * @example MjphbXFwLWNuLXVxbTJ6cjc2djAwMzpMVEFJNX*******ZNMWVSWnRFSjZ2Zm8=
     *
     * @var string
     */
    public $userName;
    protected $_name = [
        'accessKey'       => 'AccessKey',
        'createTimeStamp' => 'CreateTimeStamp',
        'instanceId'      => 'InstanceId',
        'masterUId'       => 'MasterUId',
        'password'        => 'Password',
        'userName'        => 'UserName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessKey) {
            $res['AccessKey'] = $this->accessKey;
        }
        if (null !== $this->createTimeStamp) {
            $res['CreateTimeStamp'] = $this->createTimeStamp;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->masterUId) {
            $res['MasterUId'] = $this->masterUId;
        }
        if (null !== $this->password) {
            $res['Password'] = $this->password;
        }
        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessKey'])) {
            $model->accessKey = $map['AccessKey'];
        }
        if (isset($map['CreateTimeStamp'])) {
            $model->createTimeStamp = $map['CreateTimeStamp'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['MasterUId'])) {
            $model->masterUId = $map['MasterUId'];
        }
        if (isset($map['Password'])) {
            $model->password = $map['Password'];
        }
        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }

        return $model;
    }
}

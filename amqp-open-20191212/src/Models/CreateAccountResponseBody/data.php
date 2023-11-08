<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Amqpopen\V20191212\Models\CreateAccountResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description AccessKey ID。
     *
     * @example LTAI5***********eRZtEJ6vfo
     *
     * @var string
     */
    public $accessKey;

    /**
     * @example 1671175303522
     *
     * @var int
     */
    public $createTimeStamp;

    /**
     * @example amqp-cn-*********
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example 15657*********01
     *
     * @var int
     */
    public $masterUId;

    /**
     * @example NEMxQTYzNjdDRTVDNDI1NUU5NjE3**************1MzNGODoxNjcxMTc1MzEzNTIy
     *
     * @var string
     */
    public $password;

    /**
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

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Amqpopen\V20191212\Models;

use AlibabaCloud\Tea\Model;

class CreateAccountRequest extends Model
{
    /**
     * @description The AccessKey ID of your Alibaba Cloud account or RAM user. For information about how to obtain an AccessKey pair, see [Create an AccessKey pair](~~116401~~).
     *
     * >  If you use the pair of static username and password that is created by using the Accesskey pair of a RAM user to access ApsaraMQ for RabbitMQ to send and receive messages, make sure that the RAM user is granted the required permissions. For more information, see [RAM policies](~~146559~~).
     * @example LTAI5t8be*******tEJ6vfo
     *
     * @var string
     */
    public $accountAccessKey;

    /**
     * @description The timestamp that indicates when the password is created. Unit: milliseconds.
     *
     * >  This timestamp is specified by you and is used to generate a static password. The timestamp is not the timestamp that indicates when the system generates the password.
     * @example 1671175303522
     *
     * @var int
     */
    public $createTimestamp;

    /**
     * @description The ID of the instance for which you want to create a pair of static username and password.
     *
     * @example amqp-cn-*********
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The AccessKey secret signature. The system generates a static password based on the signature in the request, the AccessKey secret signature, and the username.
     *
     * The system uses the HMAC-SHA1 algorithm to generate the AccessKey secret signature based on the timestamp that indicates when the username is created and the AccessKey ID. For more information, see the **"Sample code on how to generate a signature"** section of this topic.
     * @example 4c1a6367ce4c4255e9617326f9133ac6359533f6
     *
     * @var string
     */
    public $secretSign;

    /**
     * @description The signature. The system generates a static password based on the signature in the request, the AccessKey secret signature, and the username.
     *
     * The system uses the HMAC-SHA1 algorithm to generate the signature based on the timestamp that indicates when the username is created and the AccessKey ID. For more information, see the **"Sample code on how to generate a signature"** section of this topic.
     * @example 22c2d7d1769cb53c5a6d9213248e2de524c4f799
     *
     * @var string
     */
    public $signature;

    /**
     * @description The static username that you want to create.
     *
     * The value of this parameter is a Base64-encoded string that is generated based on the instance ID and AccessKey ID. For more information, see the "**Sample code on how to generate a username**" section of this topic.
     * @example MjphbXFwLWNuLXp***********************Q4YmVNbVZNMWVSWnRFSjZ2Zm8=
     *
     * @var string
     */
    public $userName;
    protected $_name = [
        'accountAccessKey' => 'accountAccessKey',
        'createTimestamp'  => 'createTimestamp',
        'instanceId'       => 'instanceId',
        'secretSign'       => 'secretSign',
        'signature'        => 'signature',
        'userName'         => 'userName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountAccessKey) {
            $res['accountAccessKey'] = $this->accountAccessKey;
        }
        if (null !== $this->createTimestamp) {
            $res['createTimestamp'] = $this->createTimestamp;
        }
        if (null !== $this->instanceId) {
            $res['instanceId'] = $this->instanceId;
        }
        if (null !== $this->secretSign) {
            $res['secretSign'] = $this->secretSign;
        }
        if (null !== $this->signature) {
            $res['signature'] = $this->signature;
        }
        if (null !== $this->userName) {
            $res['userName'] = $this->userName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateAccountRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['accountAccessKey'])) {
            $model->accountAccessKey = $map['accountAccessKey'];
        }
        if (isset($map['createTimestamp'])) {
            $model->createTimestamp = $map['createTimestamp'];
        }
        if (isset($map['instanceId'])) {
            $model->instanceId = $map['instanceId'];
        }
        if (isset($map['secretSign'])) {
            $model->secretSign = $map['secretSign'];
        }
        if (isset($map['signature'])) {
            $model->signature = $map['signature'];
        }
        if (isset($map['userName'])) {
            $model->userName = $map['userName'];
        }

        return $model;
    }
}

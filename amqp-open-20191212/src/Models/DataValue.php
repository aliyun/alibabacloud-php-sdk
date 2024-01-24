<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Amqpopen\V20191212\Models;

use AlibabaCloud\Tea\Model;

class DataValue extends Model
{
    /**
     * @description The Alibaba Cloud account ID or Resource Access Management (RAM) user to which the AccessKey pair that is used to create the static username and password belongs.
     *
     * @example 1565*******973901
     *
     * @var int
     */
    public $masterUid;

    /**
     * @description The ID of the ApsaraMQ for RabbitMQ instance.
     *
     * @example amqp-cn-uqm******03
     *
     * @var string
     */
    public $cInstanceId;

    /**
     * @description The AccessKey ID that is used to create the static username and password.
     *
     * @example LTAI5***********eRZtEJ6vfo
     *
     * @var string
     */
    public $accessKey;

    /**
     * @description The static username.
     *
     * @example MjphbXFwLWNuLXVxbTJ6cjc2djAwMzpMVEFJNX*******ZNMWVSWnRFSjZ2Zm8=
     *
     * @var string
     */
    public $userName;

    /**
     * @description The static password.
     *
     * @example OUYwQzM2QjZBRkUxNDRFM***************MzZCNzdDQzoxNjcxNDMwMzkyODI1
     *
     * @var string
     */
    public $password;

    /**
     * @description The timestamp that indicates when the static username and password were deleted. Unit: milliseconds.
     *
     * @example 1671175303522
     *
     * @var int
     */
    public $deleted;

    /**
     * @description The timestamp that indicates when the static username and password were created. Unit: milliseconds.
     *
     * @example 1671175303522
     *
     * @var int
     */
    public $createTimestamp;
    protected $_name = [
        'masterUid'       => 'masterUid',
        'cInstanceId'     => 'cInstanceId',
        'accessKey'       => 'accessKey',
        'userName'        => 'userName',
        'password'        => 'password',
        'deleted'         => 'deleted',
        'createTimestamp' => 'createTimestamp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->masterUid) {
            $res['masterUid'] = $this->masterUid;
        }
        if (null !== $this->cInstanceId) {
            $res['cInstanceId'] = $this->cInstanceId;
        }
        if (null !== $this->accessKey) {
            $res['accessKey'] = $this->accessKey;
        }
        if (null !== $this->userName) {
            $res['userName'] = $this->userName;
        }
        if (null !== $this->password) {
            $res['password'] = $this->password;
        }
        if (null !== $this->deleted) {
            $res['deleted'] = $this->deleted;
        }
        if (null !== $this->createTimestamp) {
            $res['createTimestamp'] = $this->createTimestamp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DataValue
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['masterUid'])) {
            $model->masterUid = $map['masterUid'];
        }
        if (isset($map['cInstanceId'])) {
            $model->cInstanceId = $map['cInstanceId'];
        }
        if (isset($map['accessKey'])) {
            $model->accessKey = $map['accessKey'];
        }
        if (isset($map['userName'])) {
            $model->userName = $map['userName'];
        }
        if (isset($map['password'])) {
            $model->password = $map['password'];
        }
        if (isset($map['deleted'])) {
            $model->deleted = $map['deleted'];
        }
        if (isset($map['createTimestamp'])) {
            $model->createTimestamp = $map['createTimestamp'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Amqpopen\V20191212\Models;

use AlibabaCloud\Tea\Model;

class CreateAccountRequest extends Model
{
    /**
     * @example LTAI5t8be*******tEJ6vfo
     *
     * @var string
     */
    public $accountAccessKey;

    /**
     * @example 1671175303522
     *
     * @var int
     */
    public $createTimestamp;

    /**
     * @example amqp-cn-*********
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example 4c1a6367ce4c4255e9617326f9133ac6359533f6
     *
     * @var string
     */
    public $secretSign;

    /**
     * @example 22c2d7d1769cb53c5a6d9213248e2de524c4f799
     *
     * @var string
     */
    public $signature;

    /**
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

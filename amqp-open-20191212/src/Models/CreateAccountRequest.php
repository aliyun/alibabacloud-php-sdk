<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Amqpopen\V20191212\Models;

use AlibabaCloud\Dara\Model;

class CreateAccountRequest extends Model
{
    /**
     * @var string
     */
    public $accountAccessKey;

    /**
     * @var int
     */
    public $createTimestamp;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $secretSign;

    /**
     * @var string
     */
    public $signature;

    /**
     * @var string
     */
    public $userName;
    protected $_name = [
        'accountAccessKey' => 'accountAccessKey',
        'createTimestamp' => 'createTimestamp',
        'instanceId' => 'instanceId',
        'secretSign' => 'secretSign',
        'signature' => 'signature',
        'userName' => 'userName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

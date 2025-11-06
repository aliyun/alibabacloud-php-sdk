<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Amqp\V20190901\Models;

use AlibabaCloud\Dara\Model;

class FetchStaticAccountRequest extends Model
{
    /**
     * @var string
     */
    public $accountAccessKey;

    /**
     * @var string
     */
    public $consoleSessionId;

    /**
     * @var int
     */
    public $createTimeStamp;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $remark;

    /**
     * @var string
     */
    public $SKey;

    /**
     * @var string
     */
    public $secretSign;

    /**
     * @var string
     */
    public $userName;
    protected $_name = [
        'accountAccessKey' => 'AccountAccessKey',
        'consoleSessionId' => 'ConsoleSessionId',
        'createTimeStamp' => 'CreateTimeStamp',
        'instanceId' => 'InstanceId',
        'remark' => 'Remark',
        'SKey' => 'SKey',
        'secretSign' => 'SecretSign',
        'userName' => 'UserName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accountAccessKey) {
            $res['AccountAccessKey'] = $this->accountAccessKey;
        }

        if (null !== $this->consoleSessionId) {
            $res['ConsoleSessionId'] = $this->consoleSessionId;
        }

        if (null !== $this->createTimeStamp) {
            $res['CreateTimeStamp'] = $this->createTimeStamp;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }

        if (null !== $this->SKey) {
            $res['SKey'] = $this->SKey;
        }

        if (null !== $this->secretSign) {
            $res['SecretSign'] = $this->secretSign;
        }

        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
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
        if (isset($map['AccountAccessKey'])) {
            $model->accountAccessKey = $map['AccountAccessKey'];
        }

        if (isset($map['ConsoleSessionId'])) {
            $model->consoleSessionId = $map['ConsoleSessionId'];
        }

        if (isset($map['CreateTimeStamp'])) {
            $model->createTimeStamp = $map['CreateTimeStamp'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }

        if (isset($map['SKey'])) {
            $model->SKey = $map['SKey'];
        }

        if (isset($map['SecretSign'])) {
            $model->secretSign = $map['SecretSign'];
        }

        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }

        return $model;
    }
}

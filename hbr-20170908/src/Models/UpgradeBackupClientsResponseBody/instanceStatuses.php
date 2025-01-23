<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models\UpgradeBackupClientsResponseBody;

use AlibabaCloud\Dara\Model;

class instanceStatuses extends Model
{
    /**
     * @var string
     */
    public $errorCode;
    /**
     * @var string
     */
    public $instanceId;
    /**
     * @var bool
     */
    public $validInstance;
    protected $_name = [
        'errorCode'     => 'ErrorCode',
        'instanceId'    => 'InstanceId',
        'validInstance' => 'ValidInstance',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->validInstance) {
            $res['ValidInstance'] = $this->validInstance;
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
        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['ValidInstance'])) {
            $model->validInstance = $map['ValidInstance'];
        }

        return $model;
    }
}

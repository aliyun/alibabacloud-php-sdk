<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Devops\V20210625\Models\LogVMDeployMachineResponseBody\deployMachineLog;

class LogVMDeployMachineResponseBody extends Model
{
    /**
     * @var deployMachineLog
     */
    public $deployMachineLog;
    /**
     * @var string
     */
    public $errorCode;
    /**
     * @var string
     */
    public $errorMessage;
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var bool
     */
    public $success;
    protected $_name = [
        'deployMachineLog' => 'deployMachineLog',
        'errorCode'        => 'errorCode',
        'errorMessage'     => 'errorMessage',
        'requestId'        => 'requestId',
        'success'          => 'success',
    ];

    public function validate()
    {
        if (null !== $this->deployMachineLog) {
            $this->deployMachineLog->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->deployMachineLog) {
            $res['deployMachineLog'] = null !== $this->deployMachineLog ? $this->deployMachineLog->toArray($noStream) : $this->deployMachineLog;
        }

        if (null !== $this->errorCode) {
            $res['errorCode'] = $this->errorCode;
        }

        if (null !== $this->errorMessage) {
            $res['errorMessage'] = $this->errorMessage;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->success) {
            $res['success'] = $this->success;
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
        if (isset($map['deployMachineLog'])) {
            $model->deployMachineLog = deployMachineLog::fromMap($map['deployMachineLog']);
        }

        if (isset($map['errorCode'])) {
            $model->errorCode = $map['errorCode'];
        }

        if (isset($map['errorMessage'])) {
            $model->errorMessage = $map['errorMessage'];
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['success'])) {
            $model->success = $map['success'];
        }

        return $model;
    }
}

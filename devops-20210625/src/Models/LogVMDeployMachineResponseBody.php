<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models;

use AlibabaCloud\SDK\Devops\V20210625\Models\LogVMDeployMachineResponseBody\deployMachineLog;
use AlibabaCloud\Tea\Model;

class LogVMDeployMachineResponseBody extends Model
{
    /**
     * @description 部署单
     *
     * @var deployMachineLog
     */
    public $deployMachineLog;

    /**
     * @description 错误码
     *
     * @var string
     */
    public $errorCode;

    /**
     * @description 错误信息
     *
     * @var string
     */
    public $errorMessage;

    /**
     * @description 请求id，每次请求都是唯一值，便于后续排查问题
     *
     * @var string
     */
    public $requestId;

    /**
     * @description true 接口调用成功，false 接口调用失败
     *
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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deployMachineLog) {
            $res['deployMachineLog'] = null !== $this->deployMachineLog ? $this->deployMachineLog->toMap() : null;
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

    /**
     * @param array $map
     *
     * @return LogVMDeployMachineResponseBody
     */
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

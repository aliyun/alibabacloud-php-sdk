<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models\UninstallBackupClientsResponseBody;

use AlibabaCloud\Tea\Model;

class instanceStatuses extends Model
{
    /**
     * @description The error code. Valid values:
     *
     *   If the value is empty, the request is successful.
     *   **InstanceNotExists**: The ECS instance does not exist.
     *   **InstanceNotRunning**: The ECS instance is not running.
     *   **CloudAssistNotRunningOnInstance**: Cloud Assistant is unavailable.
     *
     * @example InstanceNotExists
     *
     * @var string
     */
    public $errorCode;

    /**
     * @description The ID of the ECS instance.
     *
     * @example i-0xi5w***v3j3bh2gj5
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description Indicates whether a backup client can be installed on the ECS instance.
     *
     *   true: A backup client can be installed on the ECS instance.
     *   false: A backup client cannot be installed on the ECS instance.
     *
     * @example true
     *
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
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return instanceStatuses
     */
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

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class UpgradeDBInstanceKernelVersionResponseBody extends Model
{
    /**
     * @description The ID of the instance.
     *
     * @example rm-bpxxxxx
     *
     * @var string
     */
    public $DBInstanceName;

    /**
     * @description The ID of the request.
     *
     * @example DA2ECBA0-4745-4491-9166-799FF8984AC9
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The new minor engine version of the instance.
     *
     * @example xcluster80_20210305
     *
     * @var string
     */
    public $targetMinorVersion;

    /**
     * @description The ID of the task.
     *
     * @example 226917711
     *
     * @var string
     */
    public $taskId;
    protected $_name = [
        'DBInstanceName'     => 'DBInstanceName',
        'requestId'          => 'RequestId',
        'targetMinorVersion' => 'TargetMinorVersion',
        'taskId'             => 'TaskId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBInstanceName) {
            $res['DBInstanceName'] = $this->DBInstanceName;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->targetMinorVersion) {
            $res['TargetMinorVersion'] = $this->targetMinorVersion;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpgradeDBInstanceKernelVersionResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBInstanceName'])) {
            $model->DBInstanceName = $map['DBInstanceName'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TargetMinorVersion'])) {
            $model->targetMinorVersion = $map['TargetMinorVersion'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}

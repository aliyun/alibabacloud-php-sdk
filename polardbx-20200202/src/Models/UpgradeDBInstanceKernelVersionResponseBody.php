<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardbx\V20200202\Models;

use AlibabaCloud\Tea\Model;

class UpgradeDBInstanceKernelVersionResponseBody extends Model
{
    /**
     * @example pxc-hzjasd****
     *
     * @var string
     */
    public $DBInstanceName;

    /**
     * @example FEA5DC20-6D8A-5979-97AA-FC57546ADC20
     *
     * @var string
     */
    public $requestId;

    /**
     * @example polarx-kernel_5.4.7-16001481_xcluster-20200910
     *
     * @var string
     */
    public $targetMinorVersion;

    /**
     * @example 422922413
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

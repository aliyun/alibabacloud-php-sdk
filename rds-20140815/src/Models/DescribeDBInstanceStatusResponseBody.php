<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class DescribeDBInstanceStatusResponseBody extends Model
{
    /**
     * @var string
     */
    public $DBInstanceName;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $DBInstanceCpuCores;

    /**
     * @var int
     */
    public $taskStatus;

    /**
     * @var int
     */
    public $DBInstanceId;

    /**
     * @var int
     */
    public $DBInstanceStatus;

    /**
     * @var string
     */
    public $DBInstanceUseType;
    protected $_name = [
        'DBInstanceName'     => 'DBInstanceName',
        'requestId'          => 'RequestId',
        'DBInstanceCpuCores' => 'DBInstanceCpuCores',
        'taskStatus'         => 'TaskStatus',
        'DBInstanceId'       => 'DBInstanceId',
        'DBInstanceStatus'   => 'DBInstanceStatus',
        'DBInstanceUseType'  => 'DBInstanceUseType',
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
        if (null !== $this->DBInstanceCpuCores) {
            $res['DBInstanceCpuCores'] = $this->DBInstanceCpuCores;
        }
        if (null !== $this->taskStatus) {
            $res['TaskStatus'] = $this->taskStatus;
        }
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->DBInstanceStatus) {
            $res['DBInstanceStatus'] = $this->DBInstanceStatus;
        }
        if (null !== $this->DBInstanceUseType) {
            $res['DBInstanceUseType'] = $this->DBInstanceUseType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDBInstanceStatusResponseBody
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
        if (isset($map['DBInstanceCpuCores'])) {
            $model->DBInstanceCpuCores = $map['DBInstanceCpuCores'];
        }
        if (isset($map['TaskStatus'])) {
            $model->taskStatus = $map['TaskStatus'];
        }
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['DBInstanceStatus'])) {
            $model->DBInstanceStatus = $map['DBInstanceStatus'];
        }
        if (isset($map['DBInstanceUseType'])) {
            $model->DBInstanceUseType = $map['DBInstanceUseType'];
        }

        return $model;
    }
}

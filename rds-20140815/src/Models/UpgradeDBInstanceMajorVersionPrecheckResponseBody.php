<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class UpgradeDBInstanceMajorVersionPrecheckResponseBody extends Model
{
    /**
     * @description The instance name.
     *
     * @example pgm-bp1c808s731l****
     *
     * @var string
     */
    public $DBInstanceName;

    /**
     * @description The request ID.
     *
     * @example 99C1FEEE-FB44-5342-8EBA-DC1E1A1557A4
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The new major engine version of the instance.
     *
     * @example 12.0
     *
     * @var string
     */
    public $targetMajorVersion;

    /**
     * @description The task ID.
     *
     * @example 41698****
     *
     * @var string
     */
    public $taskId;
    protected $_name = [
        'DBInstanceName'     => 'DBInstanceName',
        'requestId'          => 'RequestId',
        'targetMajorVersion' => 'TargetMajorVersion',
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
        if (null !== $this->targetMajorVersion) {
            $res['TargetMajorVersion'] = $this->targetMajorVersion;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpgradeDBInstanceMajorVersionPrecheckResponseBody
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
        if (isset($map['TargetMajorVersion'])) {
            $model->targetMajorVersion = $map['TargetMajorVersion'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}

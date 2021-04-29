<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class DescribeAvailableRecoveryTimeResponseBody extends Model
{
    /**
     * @var string
     */
    public $recoveryEndTime;

    /**
     * @var string
     */
    public $recoveryBeginTime;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var int
     */
    public $crossBackupId;
    protected $_name = [
        'recoveryEndTime'   => 'RecoveryEndTime',
        'recoveryBeginTime' => 'RecoveryBeginTime',
        'requestId'         => 'RequestId',
        'regionId'          => 'RegionId',
        'crossBackupId'     => 'CrossBackupId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->recoveryEndTime) {
            $res['RecoveryEndTime'] = $this->recoveryEndTime;
        }
        if (null !== $this->recoveryBeginTime) {
            $res['RecoveryBeginTime'] = $this->recoveryBeginTime;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->crossBackupId) {
            $res['CrossBackupId'] = $this->crossBackupId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeAvailableRecoveryTimeResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RecoveryEndTime'])) {
            $model->recoveryEndTime = $map['RecoveryEndTime'];
        }
        if (isset($map['RecoveryBeginTime'])) {
            $model->recoveryBeginTime = $map['RecoveryBeginTime'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['CrossBackupId'])) {
            $model->crossBackupId = $map['CrossBackupId'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Dara\Model;

class DescribeLocalAvailableRecoveryTimeResponseBody extends Model
{
    /**
     * @var string
     */
    public $DBInstanceId;
    /**
     * @var string
     */
    public $recoveryBeginTime;
    /**
     * @var string
     */
    public $recoveryEndTime;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'DBInstanceId'      => 'DBInstanceId',
        'recoveryBeginTime' => 'RecoveryBeginTime',
        'recoveryEndTime'   => 'RecoveryEndTime',
        'requestId'         => 'RequestId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }

        if (null !== $this->recoveryBeginTime) {
            $res['RecoveryBeginTime'] = $this->recoveryBeginTime;
        }

        if (null !== $this->recoveryEndTime) {
            $res['RecoveryEndTime'] = $this->recoveryEndTime;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }

        if (isset($map['RecoveryBeginTime'])) {
            $model->recoveryBeginTime = $map['RecoveryBeginTime'];
        }

        if (isset($map['RecoveryEndTime'])) {
            $model->recoveryEndTime = $map['RecoveryEndTime'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

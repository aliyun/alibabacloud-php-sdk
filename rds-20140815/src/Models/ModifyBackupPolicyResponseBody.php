<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class ModifyBackupPolicyResponseBody extends Model
{
    /**
     * @var int
     */
    public $logBackupLocalRetentionNumber;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $DBInstanceID;

    /**
     * @var string
     */
    public $enableBackupLog;

    /**
     * @var string
     */
    public $localLogRetentionSpace;

    /**
     * @var int
     */
    public $localLogRetentionHours;

    /**
     * @var string
     */
    public $highSpaceUsageProtection;

    /**
     * @var string
     */
    public $compressType;
    protected $_name = [
        'logBackupLocalRetentionNumber' => 'LogBackupLocalRetentionNumber',
        'requestId'                     => 'RequestId',
        'DBInstanceID'                  => 'DBInstanceID',
        'enableBackupLog'               => 'EnableBackupLog',
        'localLogRetentionSpace'        => 'LocalLogRetentionSpace',
        'localLogRetentionHours'        => 'LocalLogRetentionHours',
        'highSpaceUsageProtection'      => 'HighSpaceUsageProtection',
        'compressType'                  => 'CompressType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->logBackupLocalRetentionNumber) {
            $res['LogBackupLocalRetentionNumber'] = $this->logBackupLocalRetentionNumber;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->DBInstanceID) {
            $res['DBInstanceID'] = $this->DBInstanceID;
        }
        if (null !== $this->enableBackupLog) {
            $res['EnableBackupLog'] = $this->enableBackupLog;
        }
        if (null !== $this->localLogRetentionSpace) {
            $res['LocalLogRetentionSpace'] = $this->localLogRetentionSpace;
        }
        if (null !== $this->localLogRetentionHours) {
            $res['LocalLogRetentionHours'] = $this->localLogRetentionHours;
        }
        if (null !== $this->highSpaceUsageProtection) {
            $res['HighSpaceUsageProtection'] = $this->highSpaceUsageProtection;
        }
        if (null !== $this->compressType) {
            $res['CompressType'] = $this->compressType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyBackupPolicyResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LogBackupLocalRetentionNumber'])) {
            $model->logBackupLocalRetentionNumber = $map['LogBackupLocalRetentionNumber'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['DBInstanceID'])) {
            $model->DBInstanceID = $map['DBInstanceID'];
        }
        if (isset($map['EnableBackupLog'])) {
            $model->enableBackupLog = $map['EnableBackupLog'];
        }
        if (isset($map['LocalLogRetentionSpace'])) {
            $model->localLogRetentionSpace = $map['LocalLogRetentionSpace'];
        }
        if (isset($map['LocalLogRetentionHours'])) {
            $model->localLogRetentionHours = $map['LocalLogRetentionHours'];
        }
        if (isset($map['HighSpaceUsageProtection'])) {
            $model->highSpaceUsageProtection = $map['HighSpaceUsageProtection'];
        }
        if (isset($map['CompressType'])) {
            $model->compressType = $map['CompressType'];
        }

        return $model;
    }
}

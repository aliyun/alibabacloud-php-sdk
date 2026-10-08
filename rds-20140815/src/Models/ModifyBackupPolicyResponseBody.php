<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Dara\Model;

class ModifyBackupPolicyResponseBody extends Model
{
    /**
     * @var string
     */
    public $compressType;

    /**
     * @var string
     */
    public $DBInstanceID;

    /**
     * @var string
     */
    public $enableBackupLog;

    /**
     * @var bool
     */
    public $enableIncrementDataBackup;

    /**
     * @var bool
     */
    public $enablePitrProtection;

    /**
     * @var string
     */
    public $highSpaceUsageProtection;

    /**
     * @var int
     */
    public $incBackupInterval;

    /**
     * @var int
     */
    public $localLogRetentionHours;

    /**
     * @var string
     */
    public $localLogRetentionSpace;

    /**
     * @var int
     */
    public $logBackupLocalRetentionNumber;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'compressType' => 'CompressType',
        'DBInstanceID' => 'DBInstanceID',
        'enableBackupLog' => 'EnableBackupLog',
        'enableIncrementDataBackup' => 'EnableIncrementDataBackup',
        'enablePitrProtection' => 'EnablePitrProtection',
        'highSpaceUsageProtection' => 'HighSpaceUsageProtection',
        'incBackupInterval' => 'IncBackupInterval',
        'localLogRetentionHours' => 'LocalLogRetentionHours',
        'localLogRetentionSpace' => 'LocalLogRetentionSpace',
        'logBackupLocalRetentionNumber' => 'LogBackupLocalRetentionNumber',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->compressType) {
            $res['CompressType'] = $this->compressType;
        }

        if (null !== $this->DBInstanceID) {
            $res['DBInstanceID'] = $this->DBInstanceID;
        }

        if (null !== $this->enableBackupLog) {
            $res['EnableBackupLog'] = $this->enableBackupLog;
        }

        if (null !== $this->enableIncrementDataBackup) {
            $res['EnableIncrementDataBackup'] = $this->enableIncrementDataBackup;
        }

        if (null !== $this->enablePitrProtection) {
            $res['EnablePitrProtection'] = $this->enablePitrProtection;
        }

        if (null !== $this->highSpaceUsageProtection) {
            $res['HighSpaceUsageProtection'] = $this->highSpaceUsageProtection;
        }

        if (null !== $this->incBackupInterval) {
            $res['IncBackupInterval'] = $this->incBackupInterval;
        }

        if (null !== $this->localLogRetentionHours) {
            $res['LocalLogRetentionHours'] = $this->localLogRetentionHours;
        }

        if (null !== $this->localLogRetentionSpace) {
            $res['LocalLogRetentionSpace'] = $this->localLogRetentionSpace;
        }

        if (null !== $this->logBackupLocalRetentionNumber) {
            $res['LogBackupLocalRetentionNumber'] = $this->logBackupLocalRetentionNumber;
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
        if (isset($map['CompressType'])) {
            $model->compressType = $map['CompressType'];
        }

        if (isset($map['DBInstanceID'])) {
            $model->DBInstanceID = $map['DBInstanceID'];
        }

        if (isset($map['EnableBackupLog'])) {
            $model->enableBackupLog = $map['EnableBackupLog'];
        }

        if (isset($map['EnableIncrementDataBackup'])) {
            $model->enableIncrementDataBackup = $map['EnableIncrementDataBackup'];
        }

        if (isset($map['EnablePitrProtection'])) {
            $model->enablePitrProtection = $map['EnablePitrProtection'];
        }

        if (isset($map['HighSpaceUsageProtection'])) {
            $model->highSpaceUsageProtection = $map['HighSpaceUsageProtection'];
        }

        if (isset($map['IncBackupInterval'])) {
            $model->incBackupInterval = $map['IncBackupInterval'];
        }

        if (isset($map['LocalLogRetentionHours'])) {
            $model->localLogRetentionHours = $map['LocalLogRetentionHours'];
        }

        if (isset($map['LocalLogRetentionSpace'])) {
            $model->localLogRetentionSpace = $map['LocalLogRetentionSpace'];
        }

        if (isset($map['LogBackupLocalRetentionNumber'])) {
            $model->logBackupLocalRetentionNumber = $map['LogBackupLocalRetentionNumber'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

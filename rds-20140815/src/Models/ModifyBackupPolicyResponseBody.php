<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class ModifyBackupPolicyResponseBody extends Model
{
    /**
     * @description The method that is used to compress backups. Valid values:
     *
     *   **0:** Backups are not compressed.
     *   **1**: Backups are compressed by using the zlib tool.
     *   **2**: Backups are compressed in parallel by using the zlib tool.
     *   **4**: Backups are compressed by using the QuickLZ tool and can be used to restore individual databases and tables.
     *   **8**: Backups are compressed by using the QuickLZ tool but cannot be used to restore individual databases or tables. This value is supported only for instances that run MySQL 8.0.
     *
     * @example 4
     *
     * @var string
     */
    public $compressType;

    /**
     * @description The ID of the instance.
     *
     * @example rm-uf6wjk5xxxxxxx
     *
     * @var string
     */
    public $DBInstanceID;

    /**
     * @description Indicates whether the log backup feature is enabled. Valid values:
     *
     *   **1**: The feature is enabled.
     *   **0**: The feature is disabled.
     *
     * @example 1
     *
     * @var string
     */
    public $enableBackupLog;

    /**
     * @description Specifies whether to forcefully delete log backup files from the instance when the storage usage of the instance exceeds 80% or the amount of remaining storage on the instance is less than 5 GB.
     *
     * @example Disable
     *
     * @var string
     */
    public $highSpaceUsageProtection;

    /**
     * @description The number of hours for which log backup files are retained on the instance.
     *
     * @example 18
     *
     * @var int
     */
    public $localLogRetentionHours;

    /**
     * @description The maximum storage usage that is allowed for log backup files on the instance.
     *
     * @example 30
     *
     * @var string
     */
    public $localLogRetentionSpace;

    /**
     * @description The number of binary log files on the instance.
     *
     * @example 60
     *
     * @var int
     */
    public $logBackupLocalRetentionNumber;

    /**
     * @description The ID of the request.
     *
     * @example DA147739-AEAD-4417-9089-65E9B1D8240D
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'compressType'                  => 'CompressType',
        'DBInstanceID'                  => 'DBInstanceID',
        'enableBackupLog'               => 'EnableBackupLog',
        'highSpaceUsageProtection'      => 'HighSpaceUsageProtection',
        'localLogRetentionHours'        => 'LocalLogRetentionHours',
        'localLogRetentionSpace'        => 'LocalLogRetentionSpace',
        'logBackupLocalRetentionNumber' => 'LogBackupLocalRetentionNumber',
        'requestId'                     => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
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
        if (null !== $this->highSpaceUsageProtection) {
            $res['HighSpaceUsageProtection'] = $this->highSpaceUsageProtection;
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

    /**
     * @param array $map
     *
     * @return ModifyBackupPolicyResponseBody
     */
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
        if (isset($map['HighSpaceUsageProtection'])) {
            $model->highSpaceUsageProtection = $map['HighSpaceUsageProtection'];
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

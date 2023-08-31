<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models;

use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeBackupPolicyResponseBody\accessDeniedDetail;
use AlibabaCloud\Tea\Model;

class DescribeBackupPolicyResponseBody extends Model
{
    /**
     * @var accessDeniedDetail
     */
    public $accessDeniedDetail;

    /**
     * @description The retention period of the backup data. Unit: days.
     *
     * @example 7
     *
     * @var string
     */
    public $backupRetentionPeriod;

    /**
     * @var string
     */
    public $dbsInstance;

    /**
     * @description Indicates whether incremental data backup is enabled. Valid values:
     *
     *   **1**: Incremental data backup is enabled.
     *   **0**: Incremental data backup is disabled.
     *
     * @example 1
     *
     * @var int
     */
    public $enableBackupLog;

    /**
     * @description The backup cycle. Valid values:
     *
     *   **Monday**
     *   **Tuesday**
     *   **Wednesday**
     *   **Thursday**
     *   **Friday**
     *   **Saturday**
     *   **Sunday**
     *
     * @example Monday,Tuesday,Wednesday,Thursday,Friday,Saturday,Sunday
     *
     * @var string
     */
    public $preferredBackupPeriod;

    /**
     * @description The time range during which the backup was created. The time follows the ISO 8601 standard in the *HH:mm*Z-*HH:mm*Z format. The time is displayed in UTC.
     *
     * @example 05:00Z-06:00Z
     *
     * @var string
     */
    public $preferredBackupTime;

    /**
     * @description The next backup time. The time follows the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm*Z format. The time is displayed in UTC.
     *
     * @example 2019-03-14T05:28Z
     *
     * @var string
     */
    public $preferredNextBackupTime;

    /**
     * @description The ID of the request.
     *
     * @example 90B82DB7-FB28-4CC2-ADBF-1F8659F3****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'accessDeniedDetail'      => 'AccessDeniedDetail',
        'backupRetentionPeriod'   => 'BackupRetentionPeriod',
        'dbsInstance'             => 'DbsInstance',
        'enableBackupLog'         => 'EnableBackupLog',
        'preferredBackupPeriod'   => 'PreferredBackupPeriod',
        'preferredBackupTime'     => 'PreferredBackupTime',
        'preferredNextBackupTime' => 'PreferredNextBackupTime',
        'requestId'               => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessDeniedDetail) {
            $res['AccessDeniedDetail'] = null !== $this->accessDeniedDetail ? $this->accessDeniedDetail->toMap() : null;
        }
        if (null !== $this->backupRetentionPeriod) {
            $res['BackupRetentionPeriod'] = $this->backupRetentionPeriod;
        }
        if (null !== $this->dbsInstance) {
            $res['DbsInstance'] = $this->dbsInstance;
        }
        if (null !== $this->enableBackupLog) {
            $res['EnableBackupLog'] = $this->enableBackupLog;
        }
        if (null !== $this->preferredBackupPeriod) {
            $res['PreferredBackupPeriod'] = $this->preferredBackupPeriod;
        }
        if (null !== $this->preferredBackupTime) {
            $res['PreferredBackupTime'] = $this->preferredBackupTime;
        }
        if (null !== $this->preferredNextBackupTime) {
            $res['PreferredNextBackupTime'] = $this->preferredNextBackupTime;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeBackupPolicyResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessDeniedDetail'])) {
            $model->accessDeniedDetail = accessDeniedDetail::fromMap($map['AccessDeniedDetail']);
        }
        if (isset($map['BackupRetentionPeriod'])) {
            $model->backupRetentionPeriod = $map['BackupRetentionPeriod'];
        }
        if (isset($map['DbsInstance'])) {
            $model->dbsInstance = $map['DbsInstance'];
        }
        if (isset($map['EnableBackupLog'])) {
            $model->enableBackupLog = $map['EnableBackupLog'];
        }
        if (isset($map['PreferredBackupPeriod'])) {
            $model->preferredBackupPeriod = $map['PreferredBackupPeriod'];
        }
        if (isset($map['PreferredBackupTime'])) {
            $model->preferredBackupTime = $map['PreferredBackupTime'];
        }
        if (isset($map['PreferredNextBackupTime'])) {
            $model->preferredNextBackupTime = $map['PreferredNextBackupTime'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

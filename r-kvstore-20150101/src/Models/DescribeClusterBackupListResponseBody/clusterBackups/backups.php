<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeClusterBackupListResponseBody\clusterBackups;

use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeClusterBackupListResponseBody\clusterBackups\backups\extraInfo;
use AlibabaCloud\Tea\Model;

class backups extends Model
{
    /**
     * @example http://rdsbakbucket-huhehaote-v2.oss-cn-huhehaote.aliyuncs.com/custins424747958/hins100322105_data_20240110012135.rdb
     *
     * @var string
     */
    public $backupDownloadURL;

    /**
     * @example 2024-01-09T17:21:57
     *
     * @var string
     */
    public $backupEndTime;

    /**
     * @example 514645788
     *
     * @var string
     */
    public $backupId;

    /**
     * @example http://rdsbakbucket-huhehaote-v2.oss-cn-huhehaote-internal.aliyuncs.com/custins424747958/hins100322105_data_20240110012135.rdb
     *
     * @var string
     */
    public $backupIntranetDownloadURL;

    /**
     * @example hins100322105_data_20240110012135.rdb
     *
     * @var string
     */
    public $backupName;

    /**
     * @example 1024
     *
     * @var string
     */
    public $backupSize;

    /**
     * @example 2024-01-09T17:21:30Z
     *
     * @var string
     */
    public $backupStartTime;

    /**
     * @example OK
     *
     * @var string
     */
    public $backupStatus;

    /**
     * @example redis
     *
     * @var string
     */
    public $engine;

    /**
     * @var extraInfo
     */
    public $extraInfo;

    /**
     * @example hins100322105_data_20240108012127.rdb
     *
     * @var string
     */
    public $instanceName;

    /**
     * @example 1
     *
     * @var string
     */
    public $isAvail;
    protected $_name = [
        'backupDownloadURL'         => 'BackupDownloadURL',
        'backupEndTime'             => 'BackupEndTime',
        'backupId'                  => 'BackupId',
        'backupIntranetDownloadURL' => 'BackupIntranetDownloadURL',
        'backupName'                => 'BackupName',
        'backupSize'                => 'BackupSize',
        'backupStartTime'           => 'BackupStartTime',
        'backupStatus'              => 'BackupStatus',
        'engine'                    => 'Engine',
        'extraInfo'                 => 'ExtraInfo',
        'instanceName'              => 'InstanceName',
        'isAvail'                   => 'IsAvail',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->backupDownloadURL) {
            $res['BackupDownloadURL'] = $this->backupDownloadURL;
        }
        if (null !== $this->backupEndTime) {
            $res['BackupEndTime'] = $this->backupEndTime;
        }
        if (null !== $this->backupId) {
            $res['BackupId'] = $this->backupId;
        }
        if (null !== $this->backupIntranetDownloadURL) {
            $res['BackupIntranetDownloadURL'] = $this->backupIntranetDownloadURL;
        }
        if (null !== $this->backupName) {
            $res['BackupName'] = $this->backupName;
        }
        if (null !== $this->backupSize) {
            $res['BackupSize'] = $this->backupSize;
        }
        if (null !== $this->backupStartTime) {
            $res['BackupStartTime'] = $this->backupStartTime;
        }
        if (null !== $this->backupStatus) {
            $res['BackupStatus'] = $this->backupStatus;
        }
        if (null !== $this->engine) {
            $res['Engine'] = $this->engine;
        }
        if (null !== $this->extraInfo) {
            $res['ExtraInfo'] = null !== $this->extraInfo ? $this->extraInfo->toMap() : null;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->isAvail) {
            $res['IsAvail'] = $this->isAvail;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return backups
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BackupDownloadURL'])) {
            $model->backupDownloadURL = $map['BackupDownloadURL'];
        }
        if (isset($map['BackupEndTime'])) {
            $model->backupEndTime = $map['BackupEndTime'];
        }
        if (isset($map['BackupId'])) {
            $model->backupId = $map['BackupId'];
        }
        if (isset($map['BackupIntranetDownloadURL'])) {
            $model->backupIntranetDownloadURL = $map['BackupIntranetDownloadURL'];
        }
        if (isset($map['BackupName'])) {
            $model->backupName = $map['BackupName'];
        }
        if (isset($map['BackupSize'])) {
            $model->backupSize = $map['BackupSize'];
        }
        if (isset($map['BackupStartTime'])) {
            $model->backupStartTime = $map['BackupStartTime'];
        }
        if (isset($map['BackupStatus'])) {
            $model->backupStatus = $map['BackupStatus'];
        }
        if (isset($map['Engine'])) {
            $model->engine = $map['Engine'];
        }
        if (isset($map['ExtraInfo'])) {
            $model->extraInfo = extraInfo::fromMap($map['ExtraInfo']);
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['IsAvail'])) {
            $model->isAvail = $map['IsAvail'];
        }

        return $model;
    }
}

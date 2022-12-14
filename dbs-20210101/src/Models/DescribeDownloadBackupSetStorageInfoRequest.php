<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dbs\V20210101\Models;

use AlibabaCloud\Tea\Model;

class DescribeDownloadBackupSetStorageInfoRequest extends Model
{
    /**
     * @description The ID of the backup set.
     *
     * @example 30****
     *
     * @var string
     */
    public $backupSetId;

    /**
     * @description Set this parameter if the Download Destination parameter is set to URL.
     *
     *   By default, a URL is valid for 2 hours, which is equal to 7,200 seconds.
     *   The valid duration is 5 minutes (300 seconds) to 1 day (86,400 seconds).
     *   Before you set this parameter, convert the time to seconds. For example, if you want to set the validity period of the link to 5 minutes, enter 300.
     *
     * @example 300
     *
     * @var string
     */
    public $duration;

    /**
     * @description The ID of the instance.
     *
     * >  The **BackupSetId** parameter is required if you specify the **InstanceName** parameter.
     * @example rm-uf6qqf569n435****
     *
     * @var string
     */
    public $instanceName;

    /**
     * @description The region ID of the instance. You can call the [DescribeDBInstanceAttribute](~~26231~~) operation to query the region ID of the instance.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionCode;

    /**
     * @description The ID of the download task.
     *
     *   The **BackupSetId** and **InstanceName** parameters are required if you do not specify the **TaskId** parameter.
     *   You can find the instance and click **Backup and Restoration**. On the **Backup Download** tab, view the **task ID**.
     *
     * @example dt-s0ugzak9****
     *
     * @var string
     */
    public $taskId;
    protected $_name = [
        'backupSetId'  => 'BackupSetId',
        'duration'     => 'Duration',
        'instanceName' => 'InstanceName',
        'regionCode'   => 'RegionCode',
        'taskId'       => 'TaskId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->backupSetId) {
            $res['BackupSetId'] = $this->backupSetId;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->regionCode) {
            $res['RegionCode'] = $this->regionCode;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDownloadBackupSetStorageInfoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BackupSetId'])) {
            $model->backupSetId = $map['BackupSetId'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['RegionCode'])) {
            $model->regionCode = $map['RegionCode'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}

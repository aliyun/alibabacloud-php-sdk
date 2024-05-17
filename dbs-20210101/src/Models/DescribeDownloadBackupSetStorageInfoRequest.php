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
     * @description The validity period of the URL that is used as the download destination. Take note of the following items:
     *
     *   Default value: 7200. This means that the URL is valid for 2 hours by default.
     *   Valid values: 300 to 86400. Unit: seconds. This means that you can specify a validity period in the range of 5 minutes to 1 day.
     *   Before you specify this parameter, convert the validity period to seconds. For example, if you want to set the validity period of the URL to 5 minutes, enter 300.
     *
     * This parameter is required.
     * @example 300
     *
     * @var string
     */
    public $duration;

    /**
     * @description The ID of the instance.
     *
     * > The **BackupSetId** parameter is required if you specify the **InstanceName** parameter.
     * @example rm-uf6qqf569n435****
     *
     * @var string
     */
    public $instanceName;

    /**
     * @description The ID of the region in which the instance resides. You can call the [DescribeDBInstanceAttribute](https://help.aliyun.com/document_detail/26231.html) operation to query the region ID of the instance.
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionCode;

    /**
     * @description The download task ID.
     *
     *   The **BackupSetId** and **InstanceName** parameters are required if you do not specify the **TaskId** parameter.
     *   To view the download task ID, go to the instance details page in the console and click **Backup and Restoration** in the left-side navigation pane. On the **Backup Download** tab, view the task ID.
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

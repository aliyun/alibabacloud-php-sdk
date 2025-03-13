<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models;

use AlibabaCloud\Tea\Model;

class DescribeBackupFilesRequest extends Model
{
    /**
     * @description The ID of the instance.
     *
     * @example acp-34pqe4r0kd9kn****
     *
     * @var string
     */
    public $androidInstanceId;

    /**
     * @description The name of the instance. Instances support fuzzy search by name.
     *
     * @example acp-34pqe4r0kd9kn****
     *
     * @var string
     */
    public $androidInstanceName;

    /**
     * @description Is all data to be backed up.
     *
     * @example true
     *
     * @var bool
     */
    public $backupAll;

    /**
     * @description The ID of the backup file.
     *
     * @example bf-dxrh5jrv0zpb8****
     *
     * @var string
     */
    public $backupFileId;

    /**
     * @description The name of the backup file. Backup files support fuzzy search by name.
     *
     * @example defaulBackupFile
     *
     * @var string
     */
    public $backupFileName;

    /**
     * @description The description of the backup file. Backup files support fuzzy search by description.
     *
     * @example default description.
     *
     * @var string
     */
    public $description;

    /**
     * @description The end of the period for querying generated backup files.
     *
     * @example 2024-05-20 10:00:00
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The owner of the backup file.
     *
     * @example test1
     *
     * @var string
     */
    public $endUserId;

    /**
     * @description The ID of the instance group.
     *
     * @example ag-fxdx91jsfyiy3****
     *
     * @var string
     */
    public $instanceGroupId;

    /**
     * @description The maximum number of entries per page. Valid values: 1 to 100. Default value: 10.
     *
     * @example 10
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description The pagination token that is used in the next request to retrieve a new page of results. If NextToken is empty, no next page exists.
     *
     * @example AAAAAV3MpHK1AP0pfERHZN5pu6l5V9uON****
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The beginning of the period for querying generated backup files.
     *
     * @example 2024-05-23 10:00:00
     *
     * @var string
     */
    public $startTime;

    /**
     * @description The list of backup file status.
     *
     * @var string[]
     */
    public $statusList;
    protected $_name = [
        'androidInstanceId'   => 'AndroidInstanceId',
        'androidInstanceName' => 'AndroidInstanceName',
        'backupAll'           => 'BackupAll',
        'backupFileId'        => 'BackupFileId',
        'backupFileName'      => 'BackupFileName',
        'description'         => 'Description',
        'endTime'             => 'EndTime',
        'endUserId'           => 'EndUserId',
        'instanceGroupId'     => 'InstanceGroupId',
        'maxResults'          => 'MaxResults',
        'nextToken'           => 'NextToken',
        'startTime'           => 'StartTime',
        'statusList'          => 'StatusList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->androidInstanceId) {
            $res['AndroidInstanceId'] = $this->androidInstanceId;
        }
        if (null !== $this->androidInstanceName) {
            $res['AndroidInstanceName'] = $this->androidInstanceName;
        }
        if (null !== $this->backupAll) {
            $res['BackupAll'] = $this->backupAll;
        }
        if (null !== $this->backupFileId) {
            $res['BackupFileId'] = $this->backupFileId;
        }
        if (null !== $this->backupFileName) {
            $res['BackupFileName'] = $this->backupFileName;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->endUserId) {
            $res['EndUserId'] = $this->endUserId;
        }
        if (null !== $this->instanceGroupId) {
            $res['InstanceGroupId'] = $this->instanceGroupId;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->statusList) {
            $res['StatusList'] = $this->statusList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeBackupFilesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AndroidInstanceId'])) {
            $model->androidInstanceId = $map['AndroidInstanceId'];
        }
        if (isset($map['AndroidInstanceName'])) {
            $model->androidInstanceName = $map['AndroidInstanceName'];
        }
        if (isset($map['BackupAll'])) {
            $model->backupAll = $map['BackupAll'];
        }
        if (isset($map['BackupFileId'])) {
            $model->backupFileId = $map['BackupFileId'];
        }
        if (isset($map['BackupFileName'])) {
            $model->backupFileName = $map['BackupFileName'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['EndUserId'])) {
            $model->endUserId = $map['EndUserId'];
        }
        if (isset($map['InstanceGroupId'])) {
            $model->instanceGroupId = $map['InstanceGroupId'];
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['StatusList'])) {
            if (!empty($map['StatusList'])) {
                $model->statusList = $map['StatusList'];
            }
        }

        return $model;
    }
}

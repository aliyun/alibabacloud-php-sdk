<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models;

use AlibabaCloud\Tea\Model;

class DescribeBackupFilesRequest extends Model
{
    /**
     * @example acp-34pqe4r0kd9kn****
     *
     * @var string
     */
    public $androidInstanceId;

    /**
     * @example acp-34pqe4r0kd9kn****
     *
     * @var string
     */
    public $androidInstanceName;

    /**
     * @example bf-dxrh5jrv0zpb8****
     *
     * @var string
     */
    public $backupFileId;

    /**
     * @var string
     */
    public $backupFileName;

    /**
     * @var string
     */
    public $description;

    /**
     * @example 2024-05-20 10:00:00
     *
     * @var string
     */
    public $endTime;

    /**
     * @example test1
     *
     * @var string
     */
    public $endUserId;

    /**
     * @example ag-fxdx91jsfyiy3****
     *
     * @var string
     */
    public $instanceGroupId;

    /**
     * @example 10
     *
     * @var int
     */
    public $maxResults;

    /**
     * @example AAAAAV3MpHK1AP0pfERHZN5pu6l5V9uON****
     *
     * @var string
     */
    public $nextToken;

    /**
     * @example 2024-05-23 10:00:00
     *
     * @var string
     */
    public $startTime;
    protected $_name = [
        'androidInstanceId'   => 'AndroidInstanceId',
        'androidInstanceName' => 'AndroidInstanceName',
        'backupFileId'        => 'BackupFileId',
        'backupFileName'      => 'BackupFileName',
        'description'         => 'Description',
        'endTime'             => 'EndTime',
        'endUserId'           => 'EndUserId',
        'instanceGroupId'     => 'InstanceGroupId',
        'maxResults'          => 'MaxResults',
        'nextToken'           => 'NextToken',
        'startTime'           => 'StartTime',
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

        return $model;
    }
}

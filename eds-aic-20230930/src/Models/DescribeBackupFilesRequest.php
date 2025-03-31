<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models;

use AlibabaCloud\Dara\Model;

class DescribeBackupFilesRequest extends Model
{
    /**
     * @var string
     */
    public $androidInstanceId;

    /**
     * @var string
     */
    public $androidInstanceName;

    /**
     * @var bool
     */
    public $backupAll;

    /**
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
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $endUserId;

    /**
     * @var string
     */
    public $instanceGroupId;

    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string[]
     */
    public $statusList;
    protected $_name = [
        'androidInstanceId' => 'AndroidInstanceId',
        'androidInstanceName' => 'AndroidInstanceName',
        'backupAll' => 'BackupAll',
        'backupFileId' => 'BackupFileId',
        'backupFileName' => 'BackupFileName',
        'description' => 'Description',
        'endTime' => 'EndTime',
        'endUserId' => 'EndUserId',
        'instanceGroupId' => 'InstanceGroupId',
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'startTime' => 'StartTime',
        'statusList' => 'StatusList',
    ];

    public function validate()
    {
        if (\is_array($this->statusList)) {
            Model::validateArray($this->statusList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->statusList)) {
                $res['StatusList'] = [];
                $n1 = 0;
                foreach ($this->statusList as $item1) {
                    $res['StatusList'][$n1++] = $item1;
                }
            }
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
                $model->statusList = [];
                $n1 = 0;
                foreach ($map['StatusList'] as $item1) {
                    $model->statusList[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}

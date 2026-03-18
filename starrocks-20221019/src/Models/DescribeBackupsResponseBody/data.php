<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Starrocks\V20221019\Models\DescribeBackupsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\DescribeBackupsResponseBody\data\instanceSnapshot;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\DescribeBackupsResponseBody\data\subTasks;

class data extends Model
{
    /**
     * @var int
     */
    public $backupFinishedTime;

    /**
     * @var int
     */
    public $backupStartTime;

    /**
     * @var string
     */
    public $backupTaskId;

    /**
     * @var string
     */
    public $backupType;

    /**
     * @var string
     */
    public $description;

    /**
     * @var int
     */
    public $expireTime;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var instanceSnapshot
     */
    public $instanceSnapshot;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var int
     */
    public $size;

    /**
     * @var string
     */
    public $status;

    /**
     * @var subTasks[]
     */
    public $subTasks;
    protected $_name = [
        'backupFinishedTime' => 'BackupFinishedTime',
        'backupStartTime' => 'BackupStartTime',
        'backupTaskId' => 'BackupTaskId',
        'backupType' => 'BackupType',
        'description' => 'Description',
        'expireTime' => 'ExpireTime',
        'instanceId' => 'InstanceId',
        'instanceSnapshot' => 'InstanceSnapshot',
        'regionId' => 'RegionId',
        'size' => 'Size',
        'status' => 'Status',
        'subTasks' => 'SubTasks',
    ];

    public function validate()
    {
        if (null !== $this->instanceSnapshot) {
            $this->instanceSnapshot->validate();
        }
        if (\is_array($this->subTasks)) {
            Model::validateArray($this->subTasks);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->backupFinishedTime) {
            $res['BackupFinishedTime'] = $this->backupFinishedTime;
        }

        if (null !== $this->backupStartTime) {
            $res['BackupStartTime'] = $this->backupStartTime;
        }

        if (null !== $this->backupTaskId) {
            $res['BackupTaskId'] = $this->backupTaskId;
        }

        if (null !== $this->backupType) {
            $res['BackupType'] = $this->backupType;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->instanceSnapshot) {
            $res['InstanceSnapshot'] = null !== $this->instanceSnapshot ? $this->instanceSnapshot->toArray($noStream) : $this->instanceSnapshot;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->subTasks) {
            if (\is_array($this->subTasks)) {
                $res['SubTasks'] = [];
                $n1 = 0;
                foreach ($this->subTasks as $item1) {
                    $res['SubTasks'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
        if (isset($map['BackupFinishedTime'])) {
            $model->backupFinishedTime = $map['BackupFinishedTime'];
        }

        if (isset($map['BackupStartTime'])) {
            $model->backupStartTime = $map['BackupStartTime'];
        }

        if (isset($map['BackupTaskId'])) {
            $model->backupTaskId = $map['BackupTaskId'];
        }

        if (isset($map['BackupType'])) {
            $model->backupType = $map['BackupType'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['InstanceSnapshot'])) {
            $model->instanceSnapshot = instanceSnapshot::fromMap($map['InstanceSnapshot']);
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['SubTasks'])) {
            if (!empty($map['SubTasks'])) {
                $model->subTasks = [];
                $n1 = 0;
                foreach ($map['SubTasks'] as $item1) {
                    $model->subTasks[$n1] = subTasks::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Safconsole\V20250521\Models\DescribeModelingProjectDetailResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Safconsole\V20250521\Models\DescribeModelingProjectDetailResponseBody\resultObject\pocTasks;
use AlibabaCloud\SDK\Safconsole\V20250521\Models\DescribeModelingProjectDetailResponseBody\resultObject\syncedFiles;

class resultObject extends Model
{
    /**
     * @var int
     */
    public $endTime;

    /**
     * @var string
     */
    public $envStatus;

    /**
     * @var string
     */
    public $loginAccount;

    /**
     * @var string
     */
    public $machineSpec;

    /**
     * @var string
     */
    public $manualPhase;

    /**
     * @var string
     */
    public $modelingStatus;

    /**
     * @var pocTasks[]
     */
    public $pocTasks;

    /**
     * @var string
     */
    public $projectId;

    /**
     * @var string
     */
    public $projectName;

    /**
     * @var string
     */
    public $remark;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var syncedFiles[]
     */
    public $syncedFiles;
    protected $_name = [
        'endTime' => 'EndTime',
        'envStatus' => 'EnvStatus',
        'loginAccount' => 'LoginAccount',
        'machineSpec' => 'MachineSpec',
        'manualPhase' => 'ManualPhase',
        'modelingStatus' => 'ModelingStatus',
        'pocTasks' => 'PocTasks',
        'projectId' => 'ProjectId',
        'projectName' => 'ProjectName',
        'remark' => 'Remark',
        'startTime' => 'StartTime',
        'syncedFiles' => 'SyncedFiles',
    ];

    public function validate()
    {
        if (\is_array($this->pocTasks)) {
            Model::validateArray($this->pocTasks);
        }
        if (\is_array($this->syncedFiles)) {
            Model::validateArray($this->syncedFiles);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->envStatus) {
            $res['EnvStatus'] = $this->envStatus;
        }

        if (null !== $this->loginAccount) {
            $res['LoginAccount'] = $this->loginAccount;
        }

        if (null !== $this->machineSpec) {
            $res['MachineSpec'] = $this->machineSpec;
        }

        if (null !== $this->manualPhase) {
            $res['ManualPhase'] = $this->manualPhase;
        }

        if (null !== $this->modelingStatus) {
            $res['ModelingStatus'] = $this->modelingStatus;
        }

        if (null !== $this->pocTasks) {
            if (\is_array($this->pocTasks)) {
                $res['PocTasks'] = [];
                $n1 = 0;
                foreach ($this->pocTasks as $item1) {
                    $res['PocTasks'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }

        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }

        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        if (null !== $this->syncedFiles) {
            if (\is_array($this->syncedFiles)) {
                $res['SyncedFiles'] = [];
                $n1 = 0;
                foreach ($this->syncedFiles as $item1) {
                    $res['SyncedFiles'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['EnvStatus'])) {
            $model->envStatus = $map['EnvStatus'];
        }

        if (isset($map['LoginAccount'])) {
            $model->loginAccount = $map['LoginAccount'];
        }

        if (isset($map['MachineSpec'])) {
            $model->machineSpec = $map['MachineSpec'];
        }

        if (isset($map['ManualPhase'])) {
            $model->manualPhase = $map['ManualPhase'];
        }

        if (isset($map['ModelingStatus'])) {
            $model->modelingStatus = $map['ModelingStatus'];
        }

        if (isset($map['PocTasks'])) {
            if (!empty($map['PocTasks'])) {
                $model->pocTasks = [];
                $n1 = 0;
                foreach ($map['PocTasks'] as $item1) {
                    $model->pocTasks[$n1] = pocTasks::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }

        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['SyncedFiles'])) {
            if (!empty($map['SyncedFiles'])) {
                $model->syncedFiles = [];
                $n1 = 0;
                foreach ($map['SyncedFiles'] as $item1) {
                    $model->syncedFiles[$n1] = syncedFiles::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

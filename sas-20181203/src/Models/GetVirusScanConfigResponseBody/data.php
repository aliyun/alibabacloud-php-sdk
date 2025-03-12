<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetVirusScanConfigResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The ID of the task configuration.
     *
     * > You can call the [DescribeCycleTaskList](~~DescribeCycleTaskList~~) operation to query the IDs of task configurations.
     * @example 97a1fed216908e417407344e1505xxxx
     *
     * @var string
     */
    public $configId;

    /**
     * @description Indicates whether the periodic scan feature is enabled. Valid value:
     *
     *   **1**: The feature is enabled
     *   **0**: The feature is disabled.
     *
     * @example 1
     *
     * @var int
     */
    public $enable;

    /**
     * @description The interval at which virus scan tasks are run.
     *
     * @example 7
     *
     * @var int
     */
    public $intervalPeriod;

    /**
     * @description The unit of the interval at which virus scan tasks are run.
     *
     *   The value is fixed as **day**.
     *
     * @example day
     *
     * @var string
     */
    public $periodUnit;

    /**
     * @description The file paths.
     *
     * @var string[]
     */
    public $scanPath;

    /**
     * @description The type of the virus scan task. Valid values:
     *
     *   **system**: automatic scan.
     *   **user**: custom scan.
     *
     * @example user
     *
     * @var string
     */
    public $scanType;

    /**
     * @description The key that stores the asset information.
     *
     * > You can call the [GetAssetSelectionConfig](~~GetAssetSelectionConfig~~) operation to obtain the key value.
     * @example 345ddbea-a57f-437e-832f-fb7a1202xxxx
     *
     * @var string
     */
    public $selectionKey;

    /**
     * @description The end time of the virus scan task. The time is a time frame.
     *
     * @example 6
     *
     * @var int
     */
    public $targetEndTime;

    /**
     * @description The start time of the virus scan task. The time is a time frame.
     *
     * @example 0
     *
     * @var int
     */
    public $targetStartTime;

    /**
     * @description The type of the task. Valid value:
     *
     *   **VIRUS_VUL_SCHEDULE_SCAN**: a virus scan task.
     *
     * @example VIRUS_VUL_SCHEDULE_SCAN
     *
     * @var string
     */
    public $taskType;
    protected $_name = [
        'configId'        => 'ConfigId',
        'enable'          => 'Enable',
        'intervalPeriod'  => 'IntervalPeriod',
        'periodUnit'      => 'PeriodUnit',
        'scanPath'        => 'ScanPath',
        'scanType'        => 'ScanType',
        'selectionKey'    => 'SelectionKey',
        'targetEndTime'   => 'TargetEndTime',
        'targetStartTime' => 'TargetStartTime',
        'taskType'        => 'TaskType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->configId) {
            $res['ConfigId'] = $this->configId;
        }
        if (null !== $this->enable) {
            $res['Enable'] = $this->enable;
        }
        if (null !== $this->intervalPeriod) {
            $res['IntervalPeriod'] = $this->intervalPeriod;
        }
        if (null !== $this->periodUnit) {
            $res['PeriodUnit'] = $this->periodUnit;
        }
        if (null !== $this->scanPath) {
            $res['ScanPath'] = $this->scanPath;
        }
        if (null !== $this->scanType) {
            $res['ScanType'] = $this->scanType;
        }
        if (null !== $this->selectionKey) {
            $res['SelectionKey'] = $this->selectionKey;
        }
        if (null !== $this->targetEndTime) {
            $res['TargetEndTime'] = $this->targetEndTime;
        }
        if (null !== $this->targetStartTime) {
            $res['TargetStartTime'] = $this->targetStartTime;
        }
        if (null !== $this->taskType) {
            $res['TaskType'] = $this->taskType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConfigId'])) {
            $model->configId = $map['ConfigId'];
        }
        if (isset($map['Enable'])) {
            $model->enable = $map['Enable'];
        }
        if (isset($map['IntervalPeriod'])) {
            $model->intervalPeriod = $map['IntervalPeriod'];
        }
        if (isset($map['PeriodUnit'])) {
            $model->periodUnit = $map['PeriodUnit'];
        }
        if (isset($map['ScanPath'])) {
            if (!empty($map['ScanPath'])) {
                $model->scanPath = $map['ScanPath'];
            }
        }
        if (isset($map['ScanType'])) {
            $model->scanType = $map['ScanType'];
        }
        if (isset($map['SelectionKey'])) {
            $model->selectionKey = $map['SelectionKey'];
        }
        if (isset($map['TargetEndTime'])) {
            $model->targetEndTime = $map['TargetEndTime'];
        }
        if (isset($map['TargetStartTime'])) {
            $model->targetStartTime = $map['TargetStartTime'];
        }
        if (isset($map['TaskType'])) {
            $model->taskType = $map['TaskType'];
        }

        return $model;
    }
}

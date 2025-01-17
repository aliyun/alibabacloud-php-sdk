<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetVirusScanConfigResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $configId;
    /**
     * @var int
     */
    public $enable;
    /**
     * @var int
     */
    public $intervalPeriod;
    /**
     * @var string
     */
    public $periodUnit;
    /**
     * @var string[]
     */
    public $scanPath;
    /**
     * @var string
     */
    public $scanType;
    /**
     * @var string
     */
    public $selectionKey;
    /**
     * @var int
     */
    public $targetEndTime;
    /**
     * @var int
     */
    public $targetStartTime;
    /**
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
        if (\is_array($this->scanPath)) {
            Model::validateArray($this->scanPath);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->scanPath)) {
                $res['ScanPath'] = [];
                $n1              = 0;
                foreach ($this->scanPath as $item1) {
                    $res['ScanPath'][$n1++] = $item1;
                }
            }
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $model->scanPath = [];
                $n1              = 0;
                foreach ($map['ScanPath'] as $item1) {
                    $model->scanPath[$n1++] = $item1;
                }
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

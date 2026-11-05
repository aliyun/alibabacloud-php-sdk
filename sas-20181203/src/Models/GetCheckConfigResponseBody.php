<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\GetCheckConfigResponseBody\selectedChecks;
use AlibabaCloud\SDK\Sas\V20181203\Models\GetCheckConfigResponseBody\standards;

class GetCheckConfigResponseBody extends Model
{
    /**
     * @var string
     */
    public $configId;

    /**
     * @var int[]
     */
    public $cycleDays;

    /**
     * @var int[]
     */
    public $daysOfMonth;

    /**
     * @var bool
     */
    public $enableAddCheck;

    /**
     * @var bool
     */
    public $enableAutoCheck;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var int
     */
    public $endTimeSeconds;

    /**
     * @var bool
     */
    public $exists;

    /**
     * @var string
     */
    public $frequency;

    /**
     * @var bool
     */
    public $isDefault;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var selectedChecks[]
     */
    public $selectedChecks;

    /**
     * @var standards[]
     */
    public $standards;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var int
     */
    public $startTimeSeconds;

    /**
     * @var string
     */
    public $strategyName;
    protected $_name = [
        'configId' => 'ConfigId',
        'cycleDays' => 'CycleDays',
        'daysOfMonth' => 'DaysOfMonth',
        'enableAddCheck' => 'EnableAddCheck',
        'enableAutoCheck' => 'EnableAutoCheck',
        'endTime' => 'EndTime',
        'endTimeSeconds' => 'EndTimeSeconds',
        'exists' => 'Exists',
        'frequency' => 'Frequency',
        'isDefault' => 'IsDefault',
        'requestId' => 'RequestId',
        'selectedChecks' => 'SelectedChecks',
        'standards' => 'Standards',
        'startTime' => 'StartTime',
        'startTimeSeconds' => 'StartTimeSeconds',
        'strategyName' => 'StrategyName',
    ];

    public function validate()
    {
        if (\is_array($this->cycleDays)) {
            Model::validateArray($this->cycleDays);
        }
        if (\is_array($this->daysOfMonth)) {
            Model::validateArray($this->daysOfMonth);
        }
        if (\is_array($this->selectedChecks)) {
            Model::validateArray($this->selectedChecks);
        }
        if (\is_array($this->standards)) {
            Model::validateArray($this->standards);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->configId) {
            $res['ConfigId'] = $this->configId;
        }

        if (null !== $this->cycleDays) {
            if (\is_array($this->cycleDays)) {
                $res['CycleDays'] = [];
                $n1 = 0;
                foreach ($this->cycleDays as $item1) {
                    $res['CycleDays'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->daysOfMonth) {
            if (\is_array($this->daysOfMonth)) {
                $res['DaysOfMonth'] = [];
                $n1 = 0;
                foreach ($this->daysOfMonth as $item1) {
                    $res['DaysOfMonth'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->enableAddCheck) {
            $res['EnableAddCheck'] = $this->enableAddCheck;
        }

        if (null !== $this->enableAutoCheck) {
            $res['EnableAutoCheck'] = $this->enableAutoCheck;
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->endTimeSeconds) {
            $res['EndTimeSeconds'] = $this->endTimeSeconds;
        }

        if (null !== $this->exists) {
            $res['Exists'] = $this->exists;
        }

        if (null !== $this->frequency) {
            $res['Frequency'] = $this->frequency;
        }

        if (null !== $this->isDefault) {
            $res['IsDefault'] = $this->isDefault;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->selectedChecks) {
            if (\is_array($this->selectedChecks)) {
                $res['SelectedChecks'] = [];
                $n1 = 0;
                foreach ($this->selectedChecks as $item1) {
                    $res['SelectedChecks'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->standards) {
            if (\is_array($this->standards)) {
                $res['Standards'] = [];
                $n1 = 0;
                foreach ($this->standards as $item1) {
                    $res['Standards'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        if (null !== $this->startTimeSeconds) {
            $res['StartTimeSeconds'] = $this->startTimeSeconds;
        }

        if (null !== $this->strategyName) {
            $res['StrategyName'] = $this->strategyName;
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

        if (isset($map['CycleDays'])) {
            if (!empty($map['CycleDays'])) {
                $model->cycleDays = [];
                $n1 = 0;
                foreach ($map['CycleDays'] as $item1) {
                    $model->cycleDays[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['DaysOfMonth'])) {
            if (!empty($map['DaysOfMonth'])) {
                $model->daysOfMonth = [];
                $n1 = 0;
                foreach ($map['DaysOfMonth'] as $item1) {
                    $model->daysOfMonth[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['EnableAddCheck'])) {
            $model->enableAddCheck = $map['EnableAddCheck'];
        }

        if (isset($map['EnableAutoCheck'])) {
            $model->enableAutoCheck = $map['EnableAutoCheck'];
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['EndTimeSeconds'])) {
            $model->endTimeSeconds = $map['EndTimeSeconds'];
        }

        if (isset($map['Exists'])) {
            $model->exists = $map['Exists'];
        }

        if (isset($map['Frequency'])) {
            $model->frequency = $map['Frequency'];
        }

        if (isset($map['IsDefault'])) {
            $model->isDefault = $map['IsDefault'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['SelectedChecks'])) {
            if (!empty($map['SelectedChecks'])) {
                $model->selectedChecks = [];
                $n1 = 0;
                foreach ($map['SelectedChecks'] as $item1) {
                    $model->selectedChecks[$n1] = selectedChecks::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Standards'])) {
            if (!empty($map['Standards'])) {
                $model->standards = [];
                $n1 = 0;
                foreach ($map['Standards'] as $item1) {
                    $model->standards[$n1] = standards::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['StartTimeSeconds'])) {
            $model->startTimeSeconds = $map['StartTimeSeconds'];
        }

        if (isset($map['StrategyName'])) {
            $model->strategyName = $map['StrategyName'];
        }

        return $model;
    }
}

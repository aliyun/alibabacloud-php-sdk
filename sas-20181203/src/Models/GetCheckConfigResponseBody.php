<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\GetCheckConfigResponseBody\selectedChecks;
use AlibabaCloud\SDK\Sas\V20181203\Models\GetCheckConfigResponseBody\standards;

class GetCheckConfigResponseBody extends Model
{
    /**
     * @var int[]
     */
    public $cycleDays;

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
    protected $_name = [
        'cycleDays' => 'CycleDays',
        'enableAddCheck' => 'EnableAddCheck',
        'enableAutoCheck' => 'EnableAutoCheck',
        'endTime' => 'EndTime',
        'requestId' => 'RequestId',
        'selectedChecks' => 'SelectedChecks',
        'standards' => 'Standards',
        'startTime' => 'StartTime',
    ];

    public function validate()
    {
        if (\is_array($this->cycleDays)) {
            Model::validateArray($this->cycleDays);
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

        if (null !== $this->enableAddCheck) {
            $res['EnableAddCheck'] = $this->enableAddCheck;
        }

        if (null !== $this->enableAutoCheck) {
            $res['EnableAutoCheck'] = $this->enableAutoCheck;
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
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

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
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

        if (isset($map['EnableAddCheck'])) {
            $model->enableAddCheck = $map['EnableAddCheck'];
        }

        if (isset($map['EnableAutoCheck'])) {
            $model->enableAutoCheck = $map['EnableAutoCheck'];
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
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

        return $model;
    }
}

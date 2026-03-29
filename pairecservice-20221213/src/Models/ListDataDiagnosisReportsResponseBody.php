<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiRecService\V20221213\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\ListDataDiagnosisReportsResponseBody\exceptionRate;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\ListDataDiagnosisReportsResponseBody\reportsOfAbnormalBehavior;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\ListDataDiagnosisReportsResponseBody\reportsOfBaseStatistics;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\ListDataDiagnosisReportsResponseBody\reportsOfChangeRateData;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\ListDataDiagnosisReportsResponseBody\reportsOfJoinTables;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\ListDataDiagnosisReportsResponseBody\reportsOfPreferenceStatisticsCycle;

class ListDataDiagnosisReportsResponseBody extends Model
{
    /**
     * @var exceptionRate[]
     */
    public $exceptionRate;

    /**
     * @var reportsOfAbnormalBehavior[][]
     */
    public $reportsOfAbnormalBehavior;

    /**
     * @var reportsOfBaseStatistics[][]
     */
    public $reportsOfBaseStatistics;

    /**
     * @var reportsOfChangeRateData[][]
     */
    public $reportsOfChangeRateData;

    /**
     * @var reportsOfJoinTables[][]
     */
    public $reportsOfJoinTables;

    /**
     * @var reportsOfPreferenceStatisticsCycle[][]
     */
    public $reportsOfPreferenceStatisticsCycle;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'exceptionRate' => 'ExceptionRate',
        'reportsOfAbnormalBehavior' => 'ReportsOfAbnormalBehavior',
        'reportsOfBaseStatistics' => 'ReportsOfBaseStatistics',
        'reportsOfChangeRateData' => 'ReportsOfChangeRateData',
        'reportsOfJoinTables' => 'ReportsOfJoinTables',
        'reportsOfPreferenceStatisticsCycle' => 'ReportsOfPreferenceStatisticsCycle',
        'requestId' => 'RequestId',
        'type' => 'Type',
    ];

    public function validate()
    {
        if (\is_array($this->exceptionRate)) {
            Model::validateArray($this->exceptionRate);
        }
        if (\is_array($this->reportsOfAbnormalBehavior)) {
            Model::validateArray($this->reportsOfAbnormalBehavior);
        }
        if (\is_array($this->reportsOfBaseStatistics)) {
            Model::validateArray($this->reportsOfBaseStatistics);
        }
        if (\is_array($this->reportsOfChangeRateData)) {
            Model::validateArray($this->reportsOfChangeRateData);
        }
        if (\is_array($this->reportsOfJoinTables)) {
            Model::validateArray($this->reportsOfJoinTables);
        }
        if (\is_array($this->reportsOfPreferenceStatisticsCycle)) {
            Model::validateArray($this->reportsOfPreferenceStatisticsCycle);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->exceptionRate) {
            if (\is_array($this->exceptionRate)) {
                $res['ExceptionRate'] = [];
                $n1 = 0;
                foreach ($this->exceptionRate as $item1) {
                    $res['ExceptionRate'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->reportsOfAbnormalBehavior) {
            if (\is_array($this->reportsOfAbnormalBehavior)) {
                $res['ReportsOfAbnormalBehavior'] = [];
                $n1 = 0;
                foreach ($this->reportsOfAbnormalBehavior as $item1) {
                    if (\is_array($item1)) {
                        $res['ReportsOfAbnormalBehavior'][$n1] = [];
                        $n2 = 0;
                        foreach ($item1 as $item2) {
                            $res['ReportsOfAbnormalBehavior'][$n1][$n2] = null !== $item2 ? $item2->toArray($noStream) : $item2;
                            ++$n2;
                        }
                    }
                    ++$n1;
                }
            }
        }

        if (null !== $this->reportsOfBaseStatistics) {
            if (\is_array($this->reportsOfBaseStatistics)) {
                $res['ReportsOfBaseStatistics'] = [];
                $n1 = 0;
                foreach ($this->reportsOfBaseStatistics as $item1) {
                    if (\is_array($item1)) {
                        $res['ReportsOfBaseStatistics'][$n1] = [];
                        $n2 = 0;
                        foreach ($item1 as $item2) {
                            $res['ReportsOfBaseStatistics'][$n1][$n2] = null !== $item2 ? $item2->toArray($noStream) : $item2;
                            ++$n2;
                        }
                    }
                    ++$n1;
                }
            }
        }

        if (null !== $this->reportsOfChangeRateData) {
            if (\is_array($this->reportsOfChangeRateData)) {
                $res['ReportsOfChangeRateData'] = [];
                $n1 = 0;
                foreach ($this->reportsOfChangeRateData as $item1) {
                    if (\is_array($item1)) {
                        $res['ReportsOfChangeRateData'][$n1] = [];
                        $n2 = 0;
                        foreach ($item1 as $item2) {
                            $res['ReportsOfChangeRateData'][$n1][$n2] = null !== $item2 ? $item2->toArray($noStream) : $item2;
                            ++$n2;
                        }
                    }
                    ++$n1;
                }
            }
        }

        if (null !== $this->reportsOfJoinTables) {
            if (\is_array($this->reportsOfJoinTables)) {
                $res['ReportsOfJoinTables'] = [];
                $n1 = 0;
                foreach ($this->reportsOfJoinTables as $item1) {
                    if (\is_array($item1)) {
                        $res['ReportsOfJoinTables'][$n1] = [];
                        $n2 = 0;
                        foreach ($item1 as $item2) {
                            $res['ReportsOfJoinTables'][$n1][$n2] = null !== $item2 ? $item2->toArray($noStream) : $item2;
                            ++$n2;
                        }
                    }
                    ++$n1;
                }
            }
        }

        if (null !== $this->reportsOfPreferenceStatisticsCycle) {
            if (\is_array($this->reportsOfPreferenceStatisticsCycle)) {
                $res['ReportsOfPreferenceStatisticsCycle'] = [];
                $n1 = 0;
                foreach ($this->reportsOfPreferenceStatisticsCycle as $item1) {
                    if (\is_array($item1)) {
                        $res['ReportsOfPreferenceStatisticsCycle'][$n1] = [];
                        $n2 = 0;
                        foreach ($item1 as $item2) {
                            $res['ReportsOfPreferenceStatisticsCycle'][$n1][$n2] = null !== $item2 ? $item2->toArray($noStream) : $item2;
                            ++$n2;
                        }
                    }
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['ExceptionRate'])) {
            if (!empty($map['ExceptionRate'])) {
                $model->exceptionRate = [];
                $n1 = 0;
                foreach ($map['ExceptionRate'] as $item1) {
                    $model->exceptionRate[$n1] = exceptionRate::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ReportsOfAbnormalBehavior'])) {
            if (!empty($map['ReportsOfAbnormalBehavior'])) {
                $model->reportsOfAbnormalBehavior = [];
                $n1 = 0;
                foreach ($map['ReportsOfAbnormalBehavior'] as $item1) {
                    if (!empty($item1)) {
                        $model->reportsOfAbnormalBehavior[$n1] = [];
                        $n2 = 0;
                        foreach ($item1 as $item2) {
                            $model->reportsOfAbnormalBehavior[$n1][$n2] = reportsOfAbnormalBehavior::fromMap($item2);
                            ++$n2;
                        }
                    }
                    ++$n1;
                }
            }
        }

        if (isset($map['ReportsOfBaseStatistics'])) {
            if (!empty($map['ReportsOfBaseStatistics'])) {
                $model->reportsOfBaseStatistics = [];
                $n1 = 0;
                foreach ($map['ReportsOfBaseStatistics'] as $item1) {
                    if (!empty($item1)) {
                        $model->reportsOfBaseStatistics[$n1] = [];
                        $n2 = 0;
                        foreach ($item1 as $item2) {
                            $model->reportsOfBaseStatistics[$n1][$n2] = reportsOfBaseStatistics::fromMap($item2);
                            ++$n2;
                        }
                    }
                    ++$n1;
                }
            }
        }

        if (isset($map['ReportsOfChangeRateData'])) {
            if (!empty($map['ReportsOfChangeRateData'])) {
                $model->reportsOfChangeRateData = [];
                $n1 = 0;
                foreach ($map['ReportsOfChangeRateData'] as $item1) {
                    if (!empty($item1)) {
                        $model->reportsOfChangeRateData[$n1] = [];
                        $n2 = 0;
                        foreach ($item1 as $item2) {
                            $model->reportsOfChangeRateData[$n1][$n2] = reportsOfChangeRateData::fromMap($item2);
                            ++$n2;
                        }
                    }
                    ++$n1;
                }
            }
        }

        if (isset($map['ReportsOfJoinTables'])) {
            if (!empty($map['ReportsOfJoinTables'])) {
                $model->reportsOfJoinTables = [];
                $n1 = 0;
                foreach ($map['ReportsOfJoinTables'] as $item1) {
                    if (!empty($item1)) {
                        $model->reportsOfJoinTables[$n1] = [];
                        $n2 = 0;
                        foreach ($item1 as $item2) {
                            $model->reportsOfJoinTables[$n1][$n2] = reportsOfJoinTables::fromMap($item2);
                            ++$n2;
                        }
                    }
                    ++$n1;
                }
            }
        }

        if (isset($map['ReportsOfPreferenceStatisticsCycle'])) {
            if (!empty($map['ReportsOfPreferenceStatisticsCycle'])) {
                $model->reportsOfPreferenceStatisticsCycle = [];
                $n1 = 0;
                foreach ($map['ReportsOfPreferenceStatisticsCycle'] as $item1) {
                    if (!empty($item1)) {
                        $model->reportsOfPreferenceStatisticsCycle[$n1] = [];
                        $n2 = 0;
                        foreach ($item1 as $item2) {
                            $model->reportsOfPreferenceStatisticsCycle[$n1][$n2] = reportsOfPreferenceStatisticsCycle::fromMap($item2);
                            ++$n2;
                        }
                    }
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}

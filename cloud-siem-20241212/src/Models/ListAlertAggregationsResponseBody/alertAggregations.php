<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20241212\Models\ListAlertAggregationsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\ListAlertAggregationsResponseBody\alertAggregations\defenseActionCounts;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\ListAlertAggregationsResponseBody\alertAggregations\statusCounts;

class alertAggregations extends Model
{
    /**
     * @var string[]
     */
    public $accountDisplayValues;

    /**
     * @var string[]
     */
    public $accountIds;

    /**
     * @var string
     */
    public $aggregationKey;

    /**
     * @var string
     */
    public $aggregationType;

    /**
     * @var int
     */
    public $alertCount;

    /**
     * @var string[]
     */
    public $attackStages;

    /**
     * @var defenseActionCounts[]
     */
    public $defenseActionCounts;

    /**
     * @var int
     */
    public $firstTime;

    /**
     * @var int
     */
    public $latestTime;

    /**
     * @var string
     */
    public $primaryDisplayValue;

    /**
     * @var string
     */
    public $primaryValue;

    /**
     * @var string
     */
    public $secondaryValue;

    /**
     * @var string[]
     */
    public $sourceCodes;

    /**
     * @var statusCounts[]
     */
    public $statusCounts;
    protected $_name = [
        'accountDisplayValues' => 'AccountDisplayValues',
        'accountIds' => 'AccountIds',
        'aggregationKey' => 'AggregationKey',
        'aggregationType' => 'AggregationType',
        'alertCount' => 'AlertCount',
        'attackStages' => 'AttackStages',
        'defenseActionCounts' => 'DefenseActionCounts',
        'firstTime' => 'FirstTime',
        'latestTime' => 'LatestTime',
        'primaryDisplayValue' => 'PrimaryDisplayValue',
        'primaryValue' => 'PrimaryValue',
        'secondaryValue' => 'SecondaryValue',
        'sourceCodes' => 'SourceCodes',
        'statusCounts' => 'StatusCounts',
    ];

    public function validate()
    {
        if (\is_array($this->accountDisplayValues)) {
            Model::validateArray($this->accountDisplayValues);
        }
        if (\is_array($this->accountIds)) {
            Model::validateArray($this->accountIds);
        }
        if (\is_array($this->attackStages)) {
            Model::validateArray($this->attackStages);
        }
        if (\is_array($this->defenseActionCounts)) {
            Model::validateArray($this->defenseActionCounts);
        }
        if (\is_array($this->sourceCodes)) {
            Model::validateArray($this->sourceCodes);
        }
        if (\is_array($this->statusCounts)) {
            Model::validateArray($this->statusCounts);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accountDisplayValues) {
            if (\is_array($this->accountDisplayValues)) {
                $res['AccountDisplayValues'] = [];
                $n1 = 0;
                foreach ($this->accountDisplayValues as $item1) {
                    $res['AccountDisplayValues'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->accountIds) {
            if (\is_array($this->accountIds)) {
                $res['AccountIds'] = [];
                $n1 = 0;
                foreach ($this->accountIds as $item1) {
                    $res['AccountIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->aggregationKey) {
            $res['AggregationKey'] = $this->aggregationKey;
        }

        if (null !== $this->aggregationType) {
            $res['AggregationType'] = $this->aggregationType;
        }

        if (null !== $this->alertCount) {
            $res['AlertCount'] = $this->alertCount;
        }

        if (null !== $this->attackStages) {
            if (\is_array($this->attackStages)) {
                $res['AttackStages'] = [];
                $n1 = 0;
                foreach ($this->attackStages as $item1) {
                    $res['AttackStages'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->defenseActionCounts) {
            if (\is_array($this->defenseActionCounts)) {
                $res['DefenseActionCounts'] = [];
                $n1 = 0;
                foreach ($this->defenseActionCounts as $item1) {
                    $res['DefenseActionCounts'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->firstTime) {
            $res['FirstTime'] = $this->firstTime;
        }

        if (null !== $this->latestTime) {
            $res['LatestTime'] = $this->latestTime;
        }

        if (null !== $this->primaryDisplayValue) {
            $res['PrimaryDisplayValue'] = $this->primaryDisplayValue;
        }

        if (null !== $this->primaryValue) {
            $res['PrimaryValue'] = $this->primaryValue;
        }

        if (null !== $this->secondaryValue) {
            $res['SecondaryValue'] = $this->secondaryValue;
        }

        if (null !== $this->sourceCodes) {
            if (\is_array($this->sourceCodes)) {
                $res['SourceCodes'] = [];
                $n1 = 0;
                foreach ($this->sourceCodes as $item1) {
                    $res['SourceCodes'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->statusCounts) {
            if (\is_array($this->statusCounts)) {
                $res['StatusCounts'] = [];
                $n1 = 0;
                foreach ($this->statusCounts as $item1) {
                    $res['StatusCounts'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['AccountDisplayValues'])) {
            if (!empty($map['AccountDisplayValues'])) {
                $model->accountDisplayValues = [];
                $n1 = 0;
                foreach ($map['AccountDisplayValues'] as $item1) {
                    $model->accountDisplayValues[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['AccountIds'])) {
            if (!empty($map['AccountIds'])) {
                $model->accountIds = [];
                $n1 = 0;
                foreach ($map['AccountIds'] as $item1) {
                    $model->accountIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['AggregationKey'])) {
            $model->aggregationKey = $map['AggregationKey'];
        }

        if (isset($map['AggregationType'])) {
            $model->aggregationType = $map['AggregationType'];
        }

        if (isset($map['AlertCount'])) {
            $model->alertCount = $map['AlertCount'];
        }

        if (isset($map['AttackStages'])) {
            if (!empty($map['AttackStages'])) {
                $model->attackStages = [];
                $n1 = 0;
                foreach ($map['AttackStages'] as $item1) {
                    $model->attackStages[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['DefenseActionCounts'])) {
            if (!empty($map['DefenseActionCounts'])) {
                $model->defenseActionCounts = [];
                $n1 = 0;
                foreach ($map['DefenseActionCounts'] as $item1) {
                    $model->defenseActionCounts[$n1] = defenseActionCounts::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['FirstTime'])) {
            $model->firstTime = $map['FirstTime'];
        }

        if (isset($map['LatestTime'])) {
            $model->latestTime = $map['LatestTime'];
        }

        if (isset($map['PrimaryDisplayValue'])) {
            $model->primaryDisplayValue = $map['PrimaryDisplayValue'];
        }

        if (isset($map['PrimaryValue'])) {
            $model->primaryValue = $map['PrimaryValue'];
        }

        if (isset($map['SecondaryValue'])) {
            $model->secondaryValue = $map['SecondaryValue'];
        }

        if (isset($map['SourceCodes'])) {
            if (!empty($map['SourceCodes'])) {
                $model->sourceCodes = [];
                $n1 = 0;
                foreach ($map['SourceCodes'] as $item1) {
                    $model->sourceCodes[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['StatusCounts'])) {
            if (!empty($map['StatusCounts'])) {
                $model->statusCounts = [];
                $n1 = 0;
                foreach ($map['StatusCounts'] as $item1) {
                    $model->statusCounts[$n1] = statusCounts::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

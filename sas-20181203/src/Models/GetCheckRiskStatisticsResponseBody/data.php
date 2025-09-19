<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetCheckRiskStatisticsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\GetCheckRiskStatisticsResponseBody\data\subStatistics;

class data extends Model
{
    /**
     * @var int
     */
    public $highWarningCount;

    /**
     * @var int
     */
    public $lowWarningCount;

    /**
     * @var int
     */
    public $mediumWarningCount;

    /**
     * @var int
     */
    public $passCount;

    /**
     * @var string
     */
    public $sceneName;

    /**
     * @var subStatistics[]
     */
    public $subStatistics;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'highWarningCount' => 'HighWarningCount',
        'lowWarningCount' => 'LowWarningCount',
        'mediumWarningCount' => 'MediumWarningCount',
        'passCount' => 'PassCount',
        'sceneName' => 'SceneName',
        'subStatistics' => 'SubStatistics',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->subStatistics)) {
            Model::validateArray($this->subStatistics);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->highWarningCount) {
            $res['HighWarningCount'] = $this->highWarningCount;
        }

        if (null !== $this->lowWarningCount) {
            $res['LowWarningCount'] = $this->lowWarningCount;
        }

        if (null !== $this->mediumWarningCount) {
            $res['MediumWarningCount'] = $this->mediumWarningCount;
        }

        if (null !== $this->passCount) {
            $res['PassCount'] = $this->passCount;
        }

        if (null !== $this->sceneName) {
            $res['SceneName'] = $this->sceneName;
        }

        if (null !== $this->subStatistics) {
            if (\is_array($this->subStatistics)) {
                $res['SubStatistics'] = [];
                $n1 = 0;
                foreach ($this->subStatistics as $item1) {
                    $res['SubStatistics'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
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
        if (isset($map['HighWarningCount'])) {
            $model->highWarningCount = $map['HighWarningCount'];
        }

        if (isset($map['LowWarningCount'])) {
            $model->lowWarningCount = $map['LowWarningCount'];
        }

        if (isset($map['MediumWarningCount'])) {
            $model->mediumWarningCount = $map['MediumWarningCount'];
        }

        if (isset($map['PassCount'])) {
            $model->passCount = $map['PassCount'];
        }

        if (isset($map['SceneName'])) {
            $model->sceneName = $map['SceneName'];
        }

        if (isset($map['SubStatistics'])) {
            if (!empty($map['SubStatistics'])) {
                $model->subStatistics = [];
                $n1 = 0;
                foreach ($map['SubStatistics'] as $item1) {
                    $model->subStatistics[$n1] = subStatistics::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}

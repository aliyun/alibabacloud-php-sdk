<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetCheckRiskStatisticsResponseBody;

use AlibabaCloud\SDK\Sas\V20181203\Models\GetCheckRiskStatisticsResponseBody\data\subStatistics;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The number of high-risk items.
     *
     * @example 43
     *
     * @var int
     */
    public $highWarningCount;

    /**
     * @description The number of low-risk items.
     *
     * @example 3
     *
     * @var int
     */
    public $lowWarningCount;

    /**
     * @description The number of medium-risk items.
     *
     * @example 29
     *
     * @var int
     */
    public $mediumWarningCount;

    /**
     * @description The number of passed check items.
     *
     * @example 143
     *
     * @var int
     */
    public $passCount;

    /**
     * @description The name of the risk scenario.
     *
     * @example SECURITY
     *
     * @var string
     */
    public $sceneName;

    /**
     * @description The statistics on check items that are used in the risk scenario by baseline type.
     *
     * @var subStatistics[]
     */
    public $subStatistics;

    /**
     * @description The total number of check items.
     *
     * @example 219
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'highWarningCount'   => 'HighWarningCount',
        'lowWarningCount'    => 'LowWarningCount',
        'mediumWarningCount' => 'MediumWarningCount',
        'passCount'          => 'PassCount',
        'sceneName'          => 'SceneName',
        'subStatistics'      => 'SubStatistics',
        'totalCount'         => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
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
            $res['SubStatistics'] = [];
            if (null !== $this->subStatistics && \is_array($this->subStatistics)) {
                $n = 0;
                foreach ($this->subStatistics as $item) {
                    $res['SubStatistics'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
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
                $n                    = 0;
                foreach ($map['SubStatistics'] as $item) {
                    $model->subStatistics[$n++] = null !== $item ? subStatistics::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}

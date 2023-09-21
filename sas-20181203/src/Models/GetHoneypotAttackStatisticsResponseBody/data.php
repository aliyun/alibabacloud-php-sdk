<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetHoneypotAttackStatisticsResponseBody;

use AlibabaCloud\SDK\Sas\V20181203\Models\GetHoneypotAttackStatisticsResponseBody\data\honeypotAttackStatistics;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 2
     *
     * @var int
     */
    public $count;

    /**
     * @var honeypotAttackStatistics[]
     */
    public $honeypotAttackStatistics;

    /**
     * @example TOP_ATTACKED_IP
     *
     * @var string
     */
    public $statisticsType;
    protected $_name = [
        'count'                    => 'Count',
        'honeypotAttackStatistics' => 'HoneypotAttackStatistics',
        'statisticsType'           => 'StatisticsType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }
        if (null !== $this->honeypotAttackStatistics) {
            $res['HoneypotAttackStatistics'] = [];
            if (null !== $this->honeypotAttackStatistics && \is_array($this->honeypotAttackStatistics)) {
                $n = 0;
                foreach ($this->honeypotAttackStatistics as $item) {
                    $res['HoneypotAttackStatistics'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->statisticsType) {
            $res['StatisticsType'] = $this->statisticsType;
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
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }
        if (isset($map['HoneypotAttackStatistics'])) {
            if (!empty($map['HoneypotAttackStatistics'])) {
                $model->honeypotAttackStatistics = [];
                $n                               = 0;
                foreach ($map['HoneypotAttackStatistics'] as $item) {
                    $model->honeypotAttackStatistics[$n++] = null !== $item ? honeypotAttackStatistics::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['StatisticsType'])) {
            $model->statisticsType = $map['StatisticsType'];
        }

        return $model;
    }
}

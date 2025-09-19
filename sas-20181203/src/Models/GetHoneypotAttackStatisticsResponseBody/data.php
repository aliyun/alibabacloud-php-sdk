<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetHoneypotAttackStatisticsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\GetHoneypotAttackStatisticsResponseBody\data\honeypotAttackStatistics;

class data extends Model
{
    /**
     * @var int
     */
    public $count;

    /**
     * @var honeypotAttackStatistics[]
     */
    public $honeypotAttackStatistics;

    /**
     * @var string
     */
    public $statisticsType;
    protected $_name = [
        'count' => 'Count',
        'honeypotAttackStatistics' => 'HoneypotAttackStatistics',
        'statisticsType' => 'StatisticsType',
    ];

    public function validate()
    {
        if (\is_array($this->honeypotAttackStatistics)) {
            Model::validateArray($this->honeypotAttackStatistics);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }

        if (null !== $this->honeypotAttackStatistics) {
            if (\is_array($this->honeypotAttackStatistics)) {
                $res['HoneypotAttackStatistics'] = [];
                $n1 = 0;
                foreach ($this->honeypotAttackStatistics as $item1) {
                    $res['HoneypotAttackStatistics'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->statisticsType) {
            $res['StatisticsType'] = $this->statisticsType;
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
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }

        if (isset($map['HoneypotAttackStatistics'])) {
            if (!empty($map['HoneypotAttackStatistics'])) {
                $model->honeypotAttackStatistics = [];
                $n1 = 0;
                foreach ($map['HoneypotAttackStatistics'] as $item1) {
                    $model->honeypotAttackStatistics[$n1] = honeypotAttackStatistics::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['StatisticsType'])) {
            $model->statisticsType = $map['StatisticsType'];
        }

        return $model;
    }
}

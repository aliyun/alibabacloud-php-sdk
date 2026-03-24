<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetAttackEventDashboardResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\GetAttackEventDashboardResponseBody\data\attackInstanceTopCount;
use AlibabaCloud\SDK\Sas\V20181203\Models\GetAttackEventDashboardResponseBody\data\attackTypeTopCount;
use AlibabaCloud\SDK\Sas\V20181203\Models\GetAttackEventDashboardResponseBody\data\latestTimeHourCount;
use AlibabaCloud\SDK\Sas\V20181203\Models\GetAttackEventDashboardResponseBody\data\srcIpTopCount;

class data extends Model
{
    /**
     * @var int
     */
    public $attackAllCount;

    /**
     * @var attackInstanceTopCount[]
     */
    public $attackInstanceTopCount;

    /**
     * @var attackTypeTopCount[]
     */
    public $attackTypeTopCount;

    /**
     * @var latestTimeHourCount[]
     */
    public $latestTimeHourCount;

    /**
     * @var srcIpTopCount[]
     */
    public $srcIpTopCount;
    protected $_name = [
        'attackAllCount' => 'AttackAllCount',
        'attackInstanceTopCount' => 'AttackInstanceTopCount',
        'attackTypeTopCount' => 'AttackTypeTopCount',
        'latestTimeHourCount' => 'LatestTimeHourCount',
        'srcIpTopCount' => 'SrcIpTopCount',
    ];

    public function validate()
    {
        if (\is_array($this->attackInstanceTopCount)) {
            Model::validateArray($this->attackInstanceTopCount);
        }
        if (\is_array($this->attackTypeTopCount)) {
            Model::validateArray($this->attackTypeTopCount);
        }
        if (\is_array($this->latestTimeHourCount)) {
            Model::validateArray($this->latestTimeHourCount);
        }
        if (\is_array($this->srcIpTopCount)) {
            Model::validateArray($this->srcIpTopCount);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->attackAllCount) {
            $res['AttackAllCount'] = $this->attackAllCount;
        }

        if (null !== $this->attackInstanceTopCount) {
            if (\is_array($this->attackInstanceTopCount)) {
                $res['AttackInstanceTopCount'] = [];
                $n1 = 0;
                foreach ($this->attackInstanceTopCount as $item1) {
                    $res['AttackInstanceTopCount'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->attackTypeTopCount) {
            if (\is_array($this->attackTypeTopCount)) {
                $res['AttackTypeTopCount'] = [];
                $n1 = 0;
                foreach ($this->attackTypeTopCount as $item1) {
                    $res['AttackTypeTopCount'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->latestTimeHourCount) {
            if (\is_array($this->latestTimeHourCount)) {
                $res['LatestTimeHourCount'] = [];
                $n1 = 0;
                foreach ($this->latestTimeHourCount as $item1) {
                    $res['LatestTimeHourCount'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->srcIpTopCount) {
            if (\is_array($this->srcIpTopCount)) {
                $res['SrcIpTopCount'] = [];
                $n1 = 0;
                foreach ($this->srcIpTopCount as $item1) {
                    $res['SrcIpTopCount'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['AttackAllCount'])) {
            $model->attackAllCount = $map['AttackAllCount'];
        }

        if (isset($map['AttackInstanceTopCount'])) {
            if (!empty($map['AttackInstanceTopCount'])) {
                $model->attackInstanceTopCount = [];
                $n1 = 0;
                foreach ($map['AttackInstanceTopCount'] as $item1) {
                    $model->attackInstanceTopCount[$n1] = attackInstanceTopCount::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['AttackTypeTopCount'])) {
            if (!empty($map['AttackTypeTopCount'])) {
                $model->attackTypeTopCount = [];
                $n1 = 0;
                foreach ($map['AttackTypeTopCount'] as $item1) {
                    $model->attackTypeTopCount[$n1] = attackTypeTopCount::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['LatestTimeHourCount'])) {
            if (!empty($map['LatestTimeHourCount'])) {
                $model->latestTimeHourCount = [];
                $n1 = 0;
                foreach ($map['LatestTimeHourCount'] as $item1) {
                    $model->latestTimeHourCount[$n1] = latestTimeHourCount::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['SrcIpTopCount'])) {
            if (!empty($map['SrcIpTopCount'])) {
                $model->srcIpTopCount = [];
                $n1 = 0;
                foreach ($map['SrcIpTopCount'] as $item1) {
                    $model->srcIpTopCount[$n1] = srcIpTopCount::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

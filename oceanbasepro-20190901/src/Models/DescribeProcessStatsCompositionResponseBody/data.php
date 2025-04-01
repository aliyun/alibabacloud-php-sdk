<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeProcessStatsCompositionResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeProcessStatsCompositionResponseBody\data\allProcessList;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeProcessStatsCompositionResponseBody\data\sessionStatistics;

class data extends Model
{
    /**
     * @var int
     */
    public $activeSessionCount;

    /**
     * @var allProcessList[]
     */
    public $allProcessList;

    /**
     * @var int
     */
    public $idleSessionCount;

    /**
     * @var string
     */
    public $obVersion;

    /**
     * @var sessionStatistics
     */
    public $sessionStatistics;

    /**
     * @var int
     */
    public $totalSessionCount;
    protected $_name = [
        'activeSessionCount' => 'ActiveSessionCount',
        'allProcessList' => 'AllProcessList',
        'idleSessionCount' => 'IdleSessionCount',
        'obVersion' => 'ObVersion',
        'sessionStatistics' => 'SessionStatistics',
        'totalSessionCount' => 'TotalSessionCount',
    ];

    public function validate()
    {
        if (\is_array($this->allProcessList)) {
            Model::validateArray($this->allProcessList);
        }
        if (null !== $this->sessionStatistics) {
            $this->sessionStatistics->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->activeSessionCount) {
            $res['ActiveSessionCount'] = $this->activeSessionCount;
        }

        if (null !== $this->allProcessList) {
            if (\is_array($this->allProcessList)) {
                $res['AllProcessList'] = [];
                $n1 = 0;
                foreach ($this->allProcessList as $item1) {
                    $res['AllProcessList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->idleSessionCount) {
            $res['IdleSessionCount'] = $this->idleSessionCount;
        }

        if (null !== $this->obVersion) {
            $res['ObVersion'] = $this->obVersion;
        }

        if (null !== $this->sessionStatistics) {
            $res['SessionStatistics'] = null !== $this->sessionStatistics ? $this->sessionStatistics->toArray($noStream) : $this->sessionStatistics;
        }

        if (null !== $this->totalSessionCount) {
            $res['TotalSessionCount'] = $this->totalSessionCount;
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
        if (isset($map['ActiveSessionCount'])) {
            $model->activeSessionCount = $map['ActiveSessionCount'];
        }

        if (isset($map['AllProcessList'])) {
            if (!empty($map['AllProcessList'])) {
                $model->allProcessList = [];
                $n1 = 0;
                foreach ($map['AllProcessList'] as $item1) {
                    $model->allProcessList[$n1++] = allProcessList::fromMap($item1);
                }
            }
        }

        if (isset($map['IdleSessionCount'])) {
            $model->idleSessionCount = $map['IdleSessionCount'];
        }

        if (isset($map['ObVersion'])) {
            $model->obVersion = $map['ObVersion'];
        }

        if (isset($map['SessionStatistics'])) {
            $model->sessionStatistics = sessionStatistics::fromMap($map['SessionStatistics']);
        }

        if (isset($map['TotalSessionCount'])) {
            $model->totalSessionCount = $map['TotalSessionCount'];
        }

        return $model;
    }
}

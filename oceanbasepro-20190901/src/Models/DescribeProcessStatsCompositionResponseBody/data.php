<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeProcessStatsCompositionResponseBody;

use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeProcessStatsCompositionResponseBody\data\allProcessList;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeProcessStatsCompositionResponseBody\data\sessionStatistics;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The number of active sessions.
     *
     * @example 25
     *
     * @var int
     */
    public $activeSessionCount;

    /**
     * @description The list of all processes in the system.
     *
     * @var allProcessList[]
     */
    public $allProcessList;

    /**
     * @description The number of idle sessions.
     *
     * @example 8
     *
     * @var int
     */
    public $idleSessionCount;

    /**
     * @description The version of OceanBase Database.
     *
     * @example 4.2.1.0
     *
     * @var string
     */
    public $obVersion;

    /**
     * @description The session statistics.
     *
     * @var sessionStatistics
     */
    public $sessionStatistics;

    /**
     * @description The total number of sessions.
     *
     * @example 500
     *
     * @var int
     */
    public $totalSessionCount;
    protected $_name = [
        'activeSessionCount' => 'ActiveSessionCount',
        'allProcessList'     => 'AllProcessList',
        'idleSessionCount'   => 'IdleSessionCount',
        'obVersion'          => 'ObVersion',
        'sessionStatistics'  => 'SessionStatistics',
        'totalSessionCount'  => 'TotalSessionCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->activeSessionCount) {
            $res['ActiveSessionCount'] = $this->activeSessionCount;
        }
        if (null !== $this->allProcessList) {
            $res['AllProcessList'] = [];
            if (null !== $this->allProcessList && \is_array($this->allProcessList)) {
                $n = 0;
                foreach ($this->allProcessList as $item) {
                    $res['AllProcessList'][$n++] = null !== $item ? $item->toMap() : $item;
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
            $res['SessionStatistics'] = null !== $this->sessionStatistics ? $this->sessionStatistics->toMap() : null;
        }
        if (null !== $this->totalSessionCount) {
            $res['TotalSessionCount'] = $this->totalSessionCount;
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
        if (isset($map['ActiveSessionCount'])) {
            $model->activeSessionCount = $map['ActiveSessionCount'];
        }
        if (isset($map['AllProcessList'])) {
            if (!empty($map['AllProcessList'])) {
                $model->allProcessList = [];
                $n                     = 0;
                foreach ($map['AllProcessList'] as $item) {
                    $model->allProcessList[$n++] = null !== $item ? allProcessList::fromMap($item) : $item;
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

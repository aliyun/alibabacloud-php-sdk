<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models\DescribeRdsPerformanceSummaryResponseBody;

use AlibabaCloud\Tea\Model;

class rdsPerformanceInfos extends Model
{
    /**
     * @var int
     */
    public $activeSessions;

    /**
     * @var float
     */
    public $cpu;

    /**
     * @var float
     */
    public $iops;

    /**
     * @var string
     */
    public $rdsId;

    /**
     * @var int
     */
    public $spaceUsage;

    /**
     * @var int
     */
    public $totalSessions;
    protected $_name = [
        'activeSessions' => 'ActiveSessions',
        'cpu'            => 'Cpu',
        'iops'           => 'Iops',
        'rdsId'          => 'RdsId',
        'spaceUsage'     => 'SpaceUsage',
        'totalSessions'  => 'TotalSessions',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->activeSessions) {
            $res['ActiveSessions'] = $this->activeSessions;
        }
        if (null !== $this->cpu) {
            $res['Cpu'] = $this->cpu;
        }
        if (null !== $this->iops) {
            $res['Iops'] = $this->iops;
        }
        if (null !== $this->rdsId) {
            $res['RdsId'] = $this->rdsId;
        }
        if (null !== $this->spaceUsage) {
            $res['SpaceUsage'] = $this->spaceUsage;
        }
        if (null !== $this->totalSessions) {
            $res['TotalSessions'] = $this->totalSessions;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return rdsPerformanceInfos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ActiveSessions'])) {
            $model->activeSessions = $map['ActiveSessions'];
        }
        if (isset($map['Cpu'])) {
            $model->cpu = $map['Cpu'];
        }
        if (isset($map['Iops'])) {
            $model->iops = $map['Iops'];
        }
        if (isset($map['RdsId'])) {
            $model->rdsId = $map['RdsId'];
        }
        if (isset($map['SpaceUsage'])) {
            $model->spaceUsage = $map['SpaceUsage'];
        }
        if (isset($map['TotalSessions'])) {
            $model->totalSessions = $map['TotalSessions'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models\DescribeRdsPerformanceSummaryResponseBody;

use AlibabaCloud\Tea\Model;

class rdsPerformanceInfos extends Model
{
    /**
     * @var float
     */
    public $cpu;

    /**
     * @var int
     */
    public $activeSessions;

    /**
     * @var int
     */
    public $totalSessions;

    /**
     * @var string
     */
    public $rdsId;

    /**
     * @var float
     */
    public $iops;

    /**
     * @var int
     */
    public $spaceUsage;
    protected $_name = [
        'cpu'            => 'Cpu',
        'activeSessions' => 'ActiveSessions',
        'totalSessions'  => 'TotalSessions',
        'rdsId'          => 'RdsId',
        'iops'           => 'Iops',
        'spaceUsage'     => 'SpaceUsage',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cpu) {
            $res['Cpu'] = $this->cpu;
        }
        if (null !== $this->activeSessions) {
            $res['ActiveSessions'] = $this->activeSessions;
        }
        if (null !== $this->totalSessions) {
            $res['TotalSessions'] = $this->totalSessions;
        }
        if (null !== $this->rdsId) {
            $res['RdsId'] = $this->rdsId;
        }
        if (null !== $this->iops) {
            $res['Iops'] = $this->iops;
        }
        if (null !== $this->spaceUsage) {
            $res['SpaceUsage'] = $this->spaceUsage;
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
        if (isset($map['Cpu'])) {
            $model->cpu = $map['Cpu'];
        }
        if (isset($map['ActiveSessions'])) {
            $model->activeSessions = $map['ActiveSessions'];
        }
        if (isset($map['TotalSessions'])) {
            $model->totalSessions = $map['TotalSessions'];
        }
        if (isset($map['RdsId'])) {
            $model->rdsId = $map['RdsId'];
        }
        if (isset($map['Iops'])) {
            $model->iops = $map['Iops'];
        }
        if (isset($map['SpaceUsage'])) {
            $model->spaceUsage = $map['SpaceUsage'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models\GenerateAgentStatisticReportResponseBody\dataList\list_;

use AlibabaCloud\SDK\CCC\V20170705\Models\GenerateAgentStatisticReportResponseBody\dataList\list_\generateAgentStatistic\inbound;
use AlibabaCloud\SDK\CCC\V20170705\Models\GenerateAgentStatisticReportResponseBody\dataList\list_\generateAgentStatistic\outbound;
use AlibabaCloud\SDK\CCC\V20170705\Models\GenerateAgentStatisticReportResponseBody\dataList\list_\generateAgentStatistic\overall;
use AlibabaCloud\Tea\Model;

class generateAgentStatistic extends Model
{
    /**
     * @var string
     */
    public $agentId;

    /**
     * @var string
     */
    public $loginName;

    /**
     * @var string
     */
    public $agentName;

    /**
     * @var string
     */
    public $skillGroupIds;

    /**
     * @var string
     */
    public $skillGroupNames;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $recordDate;

    /**
     * @var int
     */
    public $totalLoggedInTime;

    /**
     * @var int
     */
    public $totalBreakTime;

    /**
     * @var float
     */
    public $occupancyRate;

    /**
     * @var int
     */
    public $totalReadyTime;

    /**
     * @var int
     */
    public $maxReadyTime;

    /**
     * @var int
     */
    public $averageReadyTime;

    /**
     * @var inbound
     */
    public $inbound;

    /**
     * @var outbound
     */
    public $outbound;

    /**
     * @var overall
     */
    public $overall;
    protected $_name = [
        'agentId'           => 'AgentId',
        'loginName'         => 'LoginName',
        'agentName'         => 'AgentName',
        'skillGroupIds'     => 'SkillGroupIds',
        'skillGroupNames'   => 'SkillGroupNames',
        'instanceId'        => 'InstanceId',
        'recordDate'        => 'RecordDate',
        'totalLoggedInTime' => 'TotalLoggedInTime',
        'totalBreakTime'    => 'TotalBreakTime',
        'occupancyRate'     => 'OccupancyRate',
        'totalReadyTime'    => 'TotalReadyTime',
        'maxReadyTime'      => 'MaxReadyTime',
        'averageReadyTime'  => 'AverageReadyTime',
        'inbound'           => 'Inbound',
        'outbound'          => 'Outbound',
        'overall'           => 'Overall',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->agentId) {
            $res['AgentId'] = $this->agentId;
        }
        if (null !== $this->loginName) {
            $res['LoginName'] = $this->loginName;
        }
        if (null !== $this->agentName) {
            $res['AgentName'] = $this->agentName;
        }
        if (null !== $this->skillGroupIds) {
            $res['SkillGroupIds'] = $this->skillGroupIds;
        }
        if (null !== $this->skillGroupNames) {
            $res['SkillGroupNames'] = $this->skillGroupNames;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->recordDate) {
            $res['RecordDate'] = $this->recordDate;
        }
        if (null !== $this->totalLoggedInTime) {
            $res['TotalLoggedInTime'] = $this->totalLoggedInTime;
        }
        if (null !== $this->totalBreakTime) {
            $res['TotalBreakTime'] = $this->totalBreakTime;
        }
        if (null !== $this->occupancyRate) {
            $res['OccupancyRate'] = $this->occupancyRate;
        }
        if (null !== $this->totalReadyTime) {
            $res['TotalReadyTime'] = $this->totalReadyTime;
        }
        if (null !== $this->maxReadyTime) {
            $res['MaxReadyTime'] = $this->maxReadyTime;
        }
        if (null !== $this->averageReadyTime) {
            $res['AverageReadyTime'] = $this->averageReadyTime;
        }
        if (null !== $this->inbound) {
            $res['Inbound'] = null !== $this->inbound ? $this->inbound->toMap() : null;
        }
        if (null !== $this->outbound) {
            $res['Outbound'] = null !== $this->outbound ? $this->outbound->toMap() : null;
        }
        if (null !== $this->overall) {
            $res['Overall'] = null !== $this->overall ? $this->overall->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return generateAgentStatistic
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AgentId'])) {
            $model->agentId = $map['AgentId'];
        }
        if (isset($map['LoginName'])) {
            $model->loginName = $map['LoginName'];
        }
        if (isset($map['AgentName'])) {
            $model->agentName = $map['AgentName'];
        }
        if (isset($map['SkillGroupIds'])) {
            $model->skillGroupIds = $map['SkillGroupIds'];
        }
        if (isset($map['SkillGroupNames'])) {
            $model->skillGroupNames = $map['SkillGroupNames'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['RecordDate'])) {
            $model->recordDate = $map['RecordDate'];
        }
        if (isset($map['TotalLoggedInTime'])) {
            $model->totalLoggedInTime = $map['TotalLoggedInTime'];
        }
        if (isset($map['TotalBreakTime'])) {
            $model->totalBreakTime = $map['TotalBreakTime'];
        }
        if (isset($map['OccupancyRate'])) {
            $model->occupancyRate = $map['OccupancyRate'];
        }
        if (isset($map['TotalReadyTime'])) {
            $model->totalReadyTime = $map['TotalReadyTime'];
        }
        if (isset($map['MaxReadyTime'])) {
            $model->maxReadyTime = $map['MaxReadyTime'];
        }
        if (isset($map['AverageReadyTime'])) {
            $model->averageReadyTime = $map['AverageReadyTime'];
        }
        if (isset($map['Inbound'])) {
            $model->inbound = inbound::fromMap($map['Inbound']);
        }
        if (isset($map['Outbound'])) {
            $model->outbound = outbound::fromMap($map['Outbound']);
        }
        if (isset($map['Overall'])) {
            $model->overall = overall::fromMap($map['Overall']);
        }

        return $model;
    }
}

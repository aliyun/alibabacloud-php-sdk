<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models\ListAgentSummaryReportsByIntervalResponseBody\pagedAgentSummaryReport\list_\agentTimeIntervalReport\intervalList;

use AlibabaCloud\SDK\CCC\V20170705\Models\ListAgentSummaryReportsByIntervalResponseBody\pagedAgentSummaryReport\list_\agentTimeIntervalReport\intervalList\agentSummaryReport\inbound;
use AlibabaCloud\SDK\CCC\V20170705\Models\ListAgentSummaryReportsByIntervalResponseBody\pagedAgentSummaryReport\list_\agentTimeIntervalReport\intervalList\agentSummaryReport\outbound;
use AlibabaCloud\SDK\CCC\V20170705\Models\ListAgentSummaryReportsByIntervalResponseBody\pagedAgentSummaryReport\list_\agentTimeIntervalReport\intervalList\agentSummaryReport\overall;
use AlibabaCloud\Tea\Model;

class agentSummaryReport extends Model
{
    /**
     * @var overall
     */
    public $overall;

    /**
     * @var string
     */
    public $loginName;

    /**
     * @var string
     */
    public $agentId;

    /**
     * @var inbound
     */
    public $inbound;

    /**
     * @var outbound
     */
    public $outbound;

    /**
     * @var string
     */
    public $agentName;

    /**
     * @var string
     */
    public $skillGroupNames;

    /**
     * @var string
     */
    public $timestamp;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $skillGroupIds;
    protected $_name = [
        'overall'         => 'Overall',
        'loginName'       => 'LoginName',
        'agentId'         => 'AgentId',
        'inbound'         => 'Inbound',
        'outbound'        => 'Outbound',
        'agentName'       => 'AgentName',
        'skillGroupNames' => 'SkillGroupNames',
        'timestamp'       => 'Timestamp',
        'instanceId'      => 'InstanceId',
        'skillGroupIds'   => 'SkillGroupIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->overall) {
            $res['Overall'] = null !== $this->overall ? $this->overall->toMap() : null;
        }
        if (null !== $this->loginName) {
            $res['LoginName'] = $this->loginName;
        }
        if (null !== $this->agentId) {
            $res['AgentId'] = $this->agentId;
        }
        if (null !== $this->inbound) {
            $res['Inbound'] = null !== $this->inbound ? $this->inbound->toMap() : null;
        }
        if (null !== $this->outbound) {
            $res['Outbound'] = null !== $this->outbound ? $this->outbound->toMap() : null;
        }
        if (null !== $this->agentName) {
            $res['AgentName'] = $this->agentName;
        }
        if (null !== $this->skillGroupNames) {
            $res['SkillGroupNames'] = $this->skillGroupNames;
        }
        if (null !== $this->timestamp) {
            $res['Timestamp'] = $this->timestamp;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->skillGroupIds) {
            $res['SkillGroupIds'] = $this->skillGroupIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return agentSummaryReport
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Overall'])) {
            $model->overall = overall::fromMap($map['Overall']);
        }
        if (isset($map['LoginName'])) {
            $model->loginName = $map['LoginName'];
        }
        if (isset($map['AgentId'])) {
            $model->agentId = $map['AgentId'];
        }
        if (isset($map['Inbound'])) {
            $model->inbound = inbound::fromMap($map['Inbound']);
        }
        if (isset($map['Outbound'])) {
            $model->outbound = outbound::fromMap($map['Outbound']);
        }
        if (isset($map['AgentName'])) {
            $model->agentName = $map['AgentName'];
        }
        if (isset($map['SkillGroupNames'])) {
            $model->skillGroupNames = $map['SkillGroupNames'];
        }
        if (isset($map['Timestamp'])) {
            $model->timestamp = $map['Timestamp'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['SkillGroupIds'])) {
            $model->skillGroupIds = $map['SkillGroupIds'];
        }

        return $model;
    }
}

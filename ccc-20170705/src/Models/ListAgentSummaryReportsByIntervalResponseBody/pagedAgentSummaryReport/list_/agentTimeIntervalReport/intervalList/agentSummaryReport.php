<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models\ListAgentSummaryReportsByIntervalResponseBody\pagedAgentSummaryReport\list_\agentTimeIntervalReport\intervalList;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CCC\V20170705\Models\ListAgentSummaryReportsByIntervalResponseBody\pagedAgentSummaryReport\list_\agentTimeIntervalReport\intervalList\agentSummaryReport\inbound;
use AlibabaCloud\SDK\CCC\V20170705\Models\ListAgentSummaryReportsByIntervalResponseBody\pagedAgentSummaryReport\list_\agentTimeIntervalReport\intervalList\agentSummaryReport\outbound;
use AlibabaCloud\SDK\CCC\V20170705\Models\ListAgentSummaryReportsByIntervalResponseBody\pagedAgentSummaryReport\list_\agentTimeIntervalReport\intervalList\agentSummaryReport\overall;

class agentSummaryReport extends Model
{
    /**
     * @var string
     */
    public $agentId;

    /**
     * @var string
     */
    public $agentName;

    /**
     * @var inbound
     */
    public $inbound;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $loginName;

    /**
     * @var outbound
     */
    public $outbound;

    /**
     * @var overall
     */
    public $overall;

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
    public $timestamp;
    protected $_name = [
        'agentId' => 'AgentId',
        'agentName' => 'AgentName',
        'inbound' => 'Inbound',
        'instanceId' => 'InstanceId',
        'loginName' => 'LoginName',
        'outbound' => 'Outbound',
        'overall' => 'Overall',
        'skillGroupIds' => 'SkillGroupIds',
        'skillGroupNames' => 'SkillGroupNames',
        'timestamp' => 'Timestamp',
    ];

    public function validate()
    {
        if (null !== $this->inbound) {
            $this->inbound->validate();
        }
        if (null !== $this->outbound) {
            $this->outbound->validate();
        }
        if (null !== $this->overall) {
            $this->overall->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentId) {
            $res['AgentId'] = $this->agentId;
        }

        if (null !== $this->agentName) {
            $res['AgentName'] = $this->agentName;
        }

        if (null !== $this->inbound) {
            $res['Inbound'] = null !== $this->inbound ? $this->inbound->toArray($noStream) : $this->inbound;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->loginName) {
            $res['LoginName'] = $this->loginName;
        }

        if (null !== $this->outbound) {
            $res['Outbound'] = null !== $this->outbound ? $this->outbound->toArray($noStream) : $this->outbound;
        }

        if (null !== $this->overall) {
            $res['Overall'] = null !== $this->overall ? $this->overall->toArray($noStream) : $this->overall;
        }

        if (null !== $this->skillGroupIds) {
            $res['SkillGroupIds'] = $this->skillGroupIds;
        }

        if (null !== $this->skillGroupNames) {
            $res['SkillGroupNames'] = $this->skillGroupNames;
        }

        if (null !== $this->timestamp) {
            $res['Timestamp'] = $this->timestamp;
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
        if (isset($map['AgentId'])) {
            $model->agentId = $map['AgentId'];
        }

        if (isset($map['AgentName'])) {
            $model->agentName = $map['AgentName'];
        }

        if (isset($map['Inbound'])) {
            $model->inbound = inbound::fromMap($map['Inbound']);
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['LoginName'])) {
            $model->loginName = $map['LoginName'];
        }

        if (isset($map['Outbound'])) {
            $model->outbound = outbound::fromMap($map['Outbound']);
        }

        if (isset($map['Overall'])) {
            $model->overall = overall::fromMap($map['Overall']);
        }

        if (isset($map['SkillGroupIds'])) {
            $model->skillGroupIds = $map['SkillGroupIds'];
        }

        if (isset($map['SkillGroupNames'])) {
            $model->skillGroupNames = $map['SkillGroupNames'];
        }

        if (isset($map['Timestamp'])) {
            $model->timestamp = $map['Timestamp'];
        }

        return $model;
    }
}

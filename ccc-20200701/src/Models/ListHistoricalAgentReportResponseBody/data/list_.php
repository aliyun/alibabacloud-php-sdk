<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models\ListHistoricalAgentReportResponseBody\data;

use AlibabaCloud\SDK\CCC\V20200701\Models\ListHistoricalAgentReportResponseBody\data\list_\back2Back;
use AlibabaCloud\SDK\CCC\V20200701\Models\ListHistoricalAgentReportResponseBody\data\list_\inbound;
use AlibabaCloud\SDK\CCC\V20200701\Models\ListHistoricalAgentReportResponseBody\data\list_\internal;
use AlibabaCloud\SDK\CCC\V20200701\Models\ListHistoricalAgentReportResponseBody\data\list_\outbound;
use AlibabaCloud\SDK\CCC\V20200701\Models\ListHistoricalAgentReportResponseBody\data\list_\overall;
use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @example agent1@ccc-test
     *
     * @var string
     */
    public $agentId;

    /**
     * @var string
     */
    public $agentName;

    /**
     * @var back2Back
     */
    public $back2Back;

    /**
     * @example 001
     *
     * @var string
     */
    public $displayId;

    /**
     * @var inbound
     */
    public $inbound;

    /**
     * @var internal
     */
    public $internal;

    /**
     * @var outbound
     */
    public $outbound;

    /**
     * @var overall
     */
    public $overall;

    /**
     * @example ["skillgroup1@ccc-test","skillgroup2@ccc-test"]
     *
     * @var string
     */
    public $skillGroupIds;

    /**
     * @var string
     */
    public $skillGroupNames;
    protected $_name = [
        'agentId'         => 'AgentId',
        'agentName'       => 'AgentName',
        'back2Back'       => 'Back2Back',
        'displayId'       => 'DisplayId',
        'inbound'         => 'Inbound',
        'internal'        => 'Internal',
        'outbound'        => 'Outbound',
        'overall'         => 'Overall',
        'skillGroupIds'   => 'SkillGroupIds',
        'skillGroupNames' => 'SkillGroupNames',
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
        if (null !== $this->agentName) {
            $res['AgentName'] = $this->agentName;
        }
        if (null !== $this->back2Back) {
            $res['Back2Back'] = null !== $this->back2Back ? $this->back2Back->toMap() : null;
        }
        if (null !== $this->displayId) {
            $res['DisplayId'] = $this->displayId;
        }
        if (null !== $this->inbound) {
            $res['Inbound'] = null !== $this->inbound ? $this->inbound->toMap() : null;
        }
        if (null !== $this->internal) {
            $res['Internal'] = null !== $this->internal ? $this->internal->toMap() : null;
        }
        if (null !== $this->outbound) {
            $res['Outbound'] = null !== $this->outbound ? $this->outbound->toMap() : null;
        }
        if (null !== $this->overall) {
            $res['Overall'] = null !== $this->overall ? $this->overall->toMap() : null;
        }
        if (null !== $this->skillGroupIds) {
            $res['SkillGroupIds'] = $this->skillGroupIds;
        }
        if (null !== $this->skillGroupNames) {
            $res['SkillGroupNames'] = $this->skillGroupNames;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return list_
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AgentId'])) {
            $model->agentId = $map['AgentId'];
        }
        if (isset($map['AgentName'])) {
            $model->agentName = $map['AgentName'];
        }
        if (isset($map['Back2Back'])) {
            $model->back2Back = back2Back::fromMap($map['Back2Back']);
        }
        if (isset($map['DisplayId'])) {
            $model->displayId = $map['DisplayId'];
        }
        if (isset($map['Inbound'])) {
            $model->inbound = inbound::fromMap($map['Inbound']);
        }
        if (isset($map['Internal'])) {
            $model->internal = internal::fromMap($map['Internal']);
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

        return $model;
    }
}

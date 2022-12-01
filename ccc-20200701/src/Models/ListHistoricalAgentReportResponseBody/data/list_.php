<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models\ListHistoricalAgentReportResponseBody\data;

use AlibabaCloud\SDK\CCC\V20200701\Models\ListHistoricalAgentReportResponseBody\data\list_\inbound;
use AlibabaCloud\SDK\CCC\V20200701\Models\ListHistoricalAgentReportResponseBody\data\list_\outbound;
use AlibabaCloud\SDK\CCC\V20200701\Models\ListHistoricalAgentReportResponseBody\data\list_\overall;
use AlibabaCloud\Tea\Model;

class list_ extends Model
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
     * @var string
     */
    public $displayId;

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

    /**
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
        'displayId'       => 'DisplayId',
        'inbound'         => 'Inbound',
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
        if (null !== $this->displayId) {
            $res['DisplayId'] = $this->displayId;
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
        if (isset($map['DisplayId'])) {
            $model->displayId = $map['DisplayId'];
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
        if (isset($map['SkillGroupIds'])) {
            $model->skillGroupIds = $map['SkillGroupIds'];
        }
        if (isset($map['SkillGroupNames'])) {
            $model->skillGroupNames = $map['SkillGroupNames'];
        }

        return $model;
    }
}

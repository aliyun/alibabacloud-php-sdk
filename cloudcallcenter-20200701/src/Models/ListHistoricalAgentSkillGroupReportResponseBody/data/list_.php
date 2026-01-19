<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudCallCenter\V20200701\Models\ListHistoricalAgentSkillGroupReportResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CloudCallCenter\V20200701\Models\ListHistoricalAgentSkillGroupReportResponseBody\data\list_\back2Back;
use AlibabaCloud\SDK\CloudCallCenter\V20200701\Models\ListHistoricalAgentSkillGroupReportResponseBody\data\list_\inbound;
use AlibabaCloud\SDK\CloudCallCenter\V20200701\Models\ListHistoricalAgentSkillGroupReportResponseBody\data\list_\internal;
use AlibabaCloud\SDK\CloudCallCenter\V20200701\Models\ListHistoricalAgentSkillGroupReportResponseBody\data\list_\outbound;
use AlibabaCloud\SDK\CloudCallCenter\V20200701\Models\ListHistoricalAgentSkillGroupReportResponseBody\data\list_\overall;

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
     * @var back2Back
     */
    public $back2Back;

    /**
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
     * @var string
     */
    public $skillGroupId;

    /**
     * @var string
     */
    public $skillGroupName;
    protected $_name = [
        'agentId' => 'AgentId',
        'agentName' => 'AgentName',
        'back2Back' => 'Back2Back',
        'displayId' => 'DisplayId',
        'inbound' => 'Inbound',
        'internal' => 'Internal',
        'outbound' => 'Outbound',
        'overall' => 'Overall',
        'skillGroupId' => 'SkillGroupId',
        'skillGroupName' => 'SkillGroupName',
    ];

    public function validate()
    {
        if (null !== $this->back2Back) {
            $this->back2Back->validate();
        }
        if (null !== $this->inbound) {
            $this->inbound->validate();
        }
        if (null !== $this->internal) {
            $this->internal->validate();
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

        if (null !== $this->back2Back) {
            $res['Back2Back'] = null !== $this->back2Back ? $this->back2Back->toArray($noStream) : $this->back2Back;
        }

        if (null !== $this->displayId) {
            $res['DisplayId'] = $this->displayId;
        }

        if (null !== $this->inbound) {
            $res['Inbound'] = null !== $this->inbound ? $this->inbound->toArray($noStream) : $this->inbound;
        }

        if (null !== $this->internal) {
            $res['Internal'] = null !== $this->internal ? $this->internal->toArray($noStream) : $this->internal;
        }

        if (null !== $this->outbound) {
            $res['Outbound'] = null !== $this->outbound ? $this->outbound->toArray($noStream) : $this->outbound;
        }

        if (null !== $this->overall) {
            $res['Overall'] = null !== $this->overall ? $this->overall->toArray($noStream) : $this->overall;
        }

        if (null !== $this->skillGroupId) {
            $res['SkillGroupId'] = $this->skillGroupId;
        }

        if (null !== $this->skillGroupName) {
            $res['SkillGroupName'] = $this->skillGroupName;
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

        if (isset($map['SkillGroupId'])) {
            $model->skillGroupId = $map['SkillGroupId'];
        }

        if (isset($map['SkillGroupName'])) {
            $model->skillGroupName = $map['SkillGroupName'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dms\V20250414\Models;

use AlibabaCloud\Dara\Model;

class AgentServiceOrderSummaryVO extends Model
{
    /**
     * @var string
     */
    public $agentService;

    /**
     * @var int
     */
    public $deepResearchQuota;

    /**
     * @var int
     */
    public $modelCallQuota;

    /**
     * @var int
     */
    public $orderCount;

    /**
     * @var int
     */
    public $serviceNumTotal;

    /**
     * @var int
     */
    public $skillPlanCallQuota;
    protected $_name = [
        'agentService' => 'AgentService',
        'deepResearchQuota' => 'DeepResearchQuota',
        'modelCallQuota' => 'ModelCallQuota',
        'orderCount' => 'OrderCount',
        'serviceNumTotal' => 'ServiceNumTotal',
        'skillPlanCallQuota' => 'SkillPlanCallQuota',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentService) {
            $res['AgentService'] = $this->agentService;
        }

        if (null !== $this->deepResearchQuota) {
            $res['DeepResearchQuota'] = $this->deepResearchQuota;
        }

        if (null !== $this->modelCallQuota) {
            $res['ModelCallQuota'] = $this->modelCallQuota;
        }

        if (null !== $this->orderCount) {
            $res['OrderCount'] = $this->orderCount;
        }

        if (null !== $this->serviceNumTotal) {
            $res['ServiceNumTotal'] = $this->serviceNumTotal;
        }

        if (null !== $this->skillPlanCallQuota) {
            $res['SkillPlanCallQuota'] = $this->skillPlanCallQuota;
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
        if (isset($map['AgentService'])) {
            $model->agentService = $map['AgentService'];
        }

        if (isset($map['DeepResearchQuota'])) {
            $model->deepResearchQuota = $map['DeepResearchQuota'];
        }

        if (isset($map['ModelCallQuota'])) {
            $model->modelCallQuota = $map['ModelCallQuota'];
        }

        if (isset($map['OrderCount'])) {
            $model->orderCount = $map['OrderCount'];
        }

        if (isset($map['ServiceNumTotal'])) {
            $model->serviceNumTotal = $map['ServiceNumTotal'];
        }

        if (isset($map['SkillPlanCallQuota'])) {
            $model->skillPlanCallQuota = $map['SkillPlanCallQuota'];
        }

        return $model;
    }
}

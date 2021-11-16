<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models\ListIncidentDetailEscalationPlansResponseBody;

use AlibabaCloud\SDK\GEMP\V20210413\Models\ListIncidentDetailEscalationPlansResponseBody\data\nuAcknowledgeEscalationPlan;
use AlibabaCloud\SDK\GEMP\V20210413\Models\ListIncidentDetailEscalationPlansResponseBody\data\unFinishEscalationPlan;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description 升级策略ID
     *
     * @var int
     */
    public $escalationPlanId;

    /**
     * @description 升级策略名称
     *
     * @var string
     */
    public $escalationPlanName;

    /**
     * @description 未响应升级策略
     *
     * @var nuAcknowledgeEscalationPlan[]
     */
    public $nuAcknowledgeEscalationPlan;

    /**
     * @description 未完结升级策略规则列表
     *
     * @var unFinishEscalationPlan[]
     */
    public $unFinishEscalationPlan;
    protected $_name = [
        'escalationPlanId'            => 'escalationPlanId',
        'escalationPlanName'          => 'escalationPlanName',
        'nuAcknowledgeEscalationPlan' => 'nuAcknowledgeEscalationPlan',
        'unFinishEscalationPlan'      => 'unFinishEscalationPlan',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->escalationPlanId) {
            $res['escalationPlanId'] = $this->escalationPlanId;
        }
        if (null !== $this->escalationPlanName) {
            $res['escalationPlanName'] = $this->escalationPlanName;
        }
        if (null !== $this->nuAcknowledgeEscalationPlan) {
            $res['nuAcknowledgeEscalationPlan'] = [];
            if (null !== $this->nuAcknowledgeEscalationPlan && \is_array($this->nuAcknowledgeEscalationPlan)) {
                $n = 0;
                foreach ($this->nuAcknowledgeEscalationPlan as $item) {
                    $res['nuAcknowledgeEscalationPlan'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->unFinishEscalationPlan) {
            $res['unFinishEscalationPlan'] = [];
            if (null !== $this->unFinishEscalationPlan && \is_array($this->unFinishEscalationPlan)) {
                $n = 0;
                foreach ($this->unFinishEscalationPlan as $item) {
                    $res['unFinishEscalationPlan'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['escalationPlanId'])) {
            $model->escalationPlanId = $map['escalationPlanId'];
        }
        if (isset($map['escalationPlanName'])) {
            $model->escalationPlanName = $map['escalationPlanName'];
        }
        if (isset($map['nuAcknowledgeEscalationPlan'])) {
            if (!empty($map['nuAcknowledgeEscalationPlan'])) {
                $model->nuAcknowledgeEscalationPlan = [];
                $n                                  = 0;
                foreach ($map['nuAcknowledgeEscalationPlan'] as $item) {
                    $model->nuAcknowledgeEscalationPlan[$n++] = null !== $item ? nuAcknowledgeEscalationPlan::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['unFinishEscalationPlan'])) {
            if (!empty($map['unFinishEscalationPlan'])) {
                $model->unFinishEscalationPlan = [];
                $n                             = 0;
                foreach ($map['unFinishEscalationPlan'] as $item) {
                    $model->unFinishEscalationPlan[$n++] = null !== $item ? unFinishEscalationPlan::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

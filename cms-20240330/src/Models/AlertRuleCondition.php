<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\SDK\Cms\V20240330\Models\AlertRuleCondition\caseList;
use AlibabaCloud\SDK\Cms\V20240330\Models\AlertRuleCondition\compareList;
use AlibabaCloud\SDK\Cms\V20240330\Models\AlertRuleCondition\compositeEscalation;
use AlibabaCloud\SDK\Cms\V20240330\Models\AlertRuleCondition\expressEscalation;
use AlibabaCloud\SDK\Cms\V20240330\Models\AlertRuleCondition\simpleEscalation;
use AlibabaCloud\Tea\Model;

class AlertRuleCondition extends Model
{
    /**
     * @description type=SLS_CONDITION时指定，满足条件几次后告警，默认为1
     *
     * @var int
     */
    public $alertCount;

    /**
     * @description type=SLS_CONDITION时指定
     *
     * @var caseList[]
     */
    public $caseList;

    /**
     * @var compareList[]
     */
    public $compareList;

    /**
     * @var compositeEscalation
     */
    public $compositeEscalation;

    /**
     * @var string
     */
    public $escalationType;

    /**
     * @var expressEscalation
     */
    public $expressEscalation;

    /**
     * @description 无数据时按什么级别告警，不指定则不对无数据报警
     *
     * @var string
     */
    public $noDataAlertLevel;

    /**
     * @var string
     */
    public $noDataAppendValue;

    /**
     * @var string
     */
    public $noDataPolicy;

    /**
     * @var string
     */
    public $relation;

    /**
     * @var simpleEscalation
     */
    public $simpleEscalation;

    /**
     * @description 规则条件类型，可选值：SLS_CONDITION
     *
     * This parameter is required.
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'alertCount' => 'alertCount',
        'caseList' => 'caseList',
        'compareList' => 'compareList',
        'compositeEscalation' => 'compositeEscalation',
        'escalationType' => 'escalationType',
        'expressEscalation' => 'expressEscalation',
        'noDataAlertLevel' => 'noDataAlertLevel',
        'noDataAppendValue' => 'noDataAppendValue',
        'noDataPolicy' => 'noDataPolicy',
        'relation' => 'relation',
        'simpleEscalation' => 'simpleEscalation',
        'type' => 'type',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->alertCount) {
            $res['alertCount'] = $this->alertCount;
        }
        if (null !== $this->caseList) {
            $res['caseList'] = [];
            if (null !== $this->caseList && \is_array($this->caseList)) {
                $n = 0;
                foreach ($this->caseList as $item) {
                    $res['caseList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->compareList) {
            $res['compareList'] = [];
            if (null !== $this->compareList && \is_array($this->compareList)) {
                $n = 0;
                foreach ($this->compareList as $item) {
                    $res['compareList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->compositeEscalation) {
            $res['compositeEscalation'] = null !== $this->compositeEscalation ? $this->compositeEscalation->toMap() : null;
        }
        if (null !== $this->escalationType) {
            $res['escalationType'] = $this->escalationType;
        }
        if (null !== $this->expressEscalation) {
            $res['expressEscalation'] = null !== $this->expressEscalation ? $this->expressEscalation->toMap() : null;
        }
        if (null !== $this->noDataAlertLevel) {
            $res['noDataAlertLevel'] = $this->noDataAlertLevel;
        }
        if (null !== $this->noDataAppendValue) {
            $res['noDataAppendValue'] = $this->noDataAppendValue;
        }
        if (null !== $this->noDataPolicy) {
            $res['noDataPolicy'] = $this->noDataPolicy;
        }
        if (null !== $this->relation) {
            $res['relation'] = $this->relation;
        }
        if (null !== $this->simpleEscalation) {
            $res['simpleEscalation'] = null !== $this->simpleEscalation ? $this->simpleEscalation->toMap() : null;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AlertRuleCondition
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['alertCount'])) {
            $model->alertCount = $map['alertCount'];
        }
        if (isset($map['caseList'])) {
            if (!empty($map['caseList'])) {
                $model->caseList = [];
                $n = 0;
                foreach ($map['caseList'] as $item) {
                    $model->caseList[$n++] = null !== $item ? caseList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['compareList'])) {
            if (!empty($map['compareList'])) {
                $model->compareList = [];
                $n = 0;
                foreach ($map['compareList'] as $item) {
                    $model->compareList[$n++] = null !== $item ? compareList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['compositeEscalation'])) {
            $model->compositeEscalation = compositeEscalation::fromMap($map['compositeEscalation']);
        }
        if (isset($map['escalationType'])) {
            $model->escalationType = $map['escalationType'];
        }
        if (isset($map['expressEscalation'])) {
            $model->expressEscalation = expressEscalation::fromMap($map['expressEscalation']);
        }
        if (isset($map['noDataAlertLevel'])) {
            $model->noDataAlertLevel = $map['noDataAlertLevel'];
        }
        if (isset($map['noDataAppendValue'])) {
            $model->noDataAppendValue = $map['noDataAppendValue'];
        }
        if (isset($map['noDataPolicy'])) {
            $model->noDataPolicy = $map['noDataPolicy'];
        }
        if (isset($map['relation'])) {
            $model->relation = $map['relation'];
        }
        if (isset($map['simpleEscalation'])) {
            $model->simpleEscalation = simpleEscalation::fromMap($map['simpleEscalation']);
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}

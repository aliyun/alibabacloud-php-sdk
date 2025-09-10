<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20240330\Models\AlertRuleCondition\caseList;
use AlibabaCloud\SDK\Cms\V20240330\Models\AlertRuleCondition\compareList;
use AlibabaCloud\SDK\Cms\V20240330\Models\AlertRuleCondition\compositeEscalation;
use AlibabaCloud\SDK\Cms\V20240330\Models\AlertRuleCondition\expressEscalation;
use AlibabaCloud\SDK\Cms\V20240330\Models\AlertRuleCondition\simpleEscalation;

class AlertRuleCondition extends Model
{
    /**
     * @var int
     */
    public $alertCount;

    /**
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
    public $oper;

    /**
     * @var string
     */
    public $relation;

    /**
     * @var simpleEscalation
     */
    public $simpleEscalation;

    /**
     * @var string
     */
    public $type;

    /**
     * @var float
     */
    public $value;
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
        'oper' => 'oper',
        'relation' => 'relation',
        'simpleEscalation' => 'simpleEscalation',
        'type' => 'type',
        'value' => 'value',
    ];

    public function validate()
    {
        if (\is_array($this->caseList)) {
            Model::validateArray($this->caseList);
        }
        if (\is_array($this->compareList)) {
            Model::validateArray($this->compareList);
        }
        if (null !== $this->compositeEscalation) {
            $this->compositeEscalation->validate();
        }
        if (null !== $this->expressEscalation) {
            $this->expressEscalation->validate();
        }
        if (null !== $this->simpleEscalation) {
            $this->simpleEscalation->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->alertCount) {
            $res['alertCount'] = $this->alertCount;
        }

        if (null !== $this->caseList) {
            if (\is_array($this->caseList)) {
                $res['caseList'] = [];
                $n1 = 0;
                foreach ($this->caseList as $item1) {
                    $res['caseList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->compareList) {
            if (\is_array($this->compareList)) {
                $res['compareList'] = [];
                $n1 = 0;
                foreach ($this->compareList as $item1) {
                    $res['compareList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->compositeEscalation) {
            $res['compositeEscalation'] = null !== $this->compositeEscalation ? $this->compositeEscalation->toArray($noStream) : $this->compositeEscalation;
        }

        if (null !== $this->escalationType) {
            $res['escalationType'] = $this->escalationType;
        }

        if (null !== $this->expressEscalation) {
            $res['expressEscalation'] = null !== $this->expressEscalation ? $this->expressEscalation->toArray($noStream) : $this->expressEscalation;
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

        if (null !== $this->oper) {
            $res['oper'] = $this->oper;
        }

        if (null !== $this->relation) {
            $res['relation'] = $this->relation;
        }

        if (null !== $this->simpleEscalation) {
            $res['simpleEscalation'] = null !== $this->simpleEscalation ? $this->simpleEscalation->toArray($noStream) : $this->simpleEscalation;
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        if (null !== $this->value) {
            $res['value'] = $this->value;
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
        if (isset($map['alertCount'])) {
            $model->alertCount = $map['alertCount'];
        }

        if (isset($map['caseList'])) {
            if (!empty($map['caseList'])) {
                $model->caseList = [];
                $n1 = 0;
                foreach ($map['caseList'] as $item1) {
                    $model->caseList[$n1] = caseList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['compareList'])) {
            if (!empty($map['compareList'])) {
                $model->compareList = [];
                $n1 = 0;
                foreach ($map['compareList'] as $item1) {
                    $model->compareList[$n1] = compareList::fromMap($item1);
                    ++$n1;
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

        if (isset($map['oper'])) {
            $model->oper = $map['oper'];
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

        if (isset($map['value'])) {
            $model->value = $map['value'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20240330\Models\AlertRuleCondition\caseList;
use AlibabaCloud\SDK\Cms\V20240330\Models\AlertRuleCondition\compareList;

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
     * @var string
     */
    public $noDataAppendValue;

    /**
     * @var string
     */
    public $nodataAlertLevel;

    /**
     * @var string
     */
    public $relation;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'alertCount' => 'alertCount',
        'caseList' => 'caseList',
        'compareList' => 'compareList',
        'noDataAppendValue' => 'noDataAppendValue',
        'nodataAlertLevel' => 'nodataAlertLevel',
        'relation' => 'relation',
        'type' => 'type',
    ];

    public function validate()
    {
        if (\is_array($this->caseList)) {
            Model::validateArray($this->caseList);
        }
        if (\is_array($this->compareList)) {
            Model::validateArray($this->compareList);
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
                    $res['caseList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->compareList) {
            if (\is_array($this->compareList)) {
                $res['compareList'] = [];
                $n1 = 0;
                foreach ($this->compareList as $item1) {
                    $res['compareList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->noDataAppendValue) {
            $res['noDataAppendValue'] = $this->noDataAppendValue;
        }

        if (null !== $this->nodataAlertLevel) {
            $res['nodataAlertLevel'] = $this->nodataAlertLevel;
        }

        if (null !== $this->relation) {
            $res['relation'] = $this->relation;
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
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
                    $model->caseList[$n1++] = caseList::fromMap($item1);
                }
            }
        }

        if (isset($map['compareList'])) {
            if (!empty($map['compareList'])) {
                $model->compareList = [];
                $n1 = 0;
                foreach ($map['compareList'] as $item1) {
                    $model->compareList[$n1++] = compareList::fromMap($item1);
                }
            }
        }

        if (isset($map['noDataAppendValue'])) {
            $model->noDataAppendValue = $map['noDataAppendValue'];
        }

        if (isset($map['nodataAlertLevel'])) {
            $model->nodataAlertLevel = $map['nodataAlertLevel'];
        }

        if (isset($map['relation'])) {
            $model->relation = $map['relation'];
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}

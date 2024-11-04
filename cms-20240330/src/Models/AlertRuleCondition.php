<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\SDK\Cms\V20240330\Models\AlertRuleCondition\caseList;
use AlibabaCloud\SDK\Cms\V20240330\Models\AlertRuleCondition\compareList;
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
     * @var string
     */
    public $noDataAppendValue;

    /**
     * @description 无数据时按什么级别告警，不指定则不对无数据报警
     *
     * @var string
     */
    public $nodataAlertLevel;

    /**
     * @description 规则条件类型，可选值：SLS_CONDITION
     *
     * This parameter is required.
     * @var string
     */
    public $type;
    protected $_name = [
        'alertCount'        => 'alertCount',
        'caseList'          => 'caseList',
        'compareList'       => 'compareList',
        'noDataAppendValue' => 'noDataAppendValue',
        'nodataAlertLevel'  => 'nodataAlertLevel',
        'type'              => 'type',
    ];

    public function validate()
    {
    }

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
        if (null !== $this->noDataAppendValue) {
            $res['noDataAppendValue'] = $this->noDataAppendValue;
        }
        if (null !== $this->nodataAlertLevel) {
            $res['nodataAlertLevel'] = $this->nodataAlertLevel;
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
                $n               = 0;
                foreach ($map['caseList'] as $item) {
                    $model->caseList[$n++] = null !== $item ? caseList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['compareList'])) {
            if (!empty($map['compareList'])) {
                $model->compareList = [];
                $n                  = 0;
                foreach ($map['compareList'] as $item) {
                    $model->compareList[$n++] = null !== $item ? compareList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['noDataAppendValue'])) {
            $model->noDataAppendValue = $map['noDataAppendValue'];
        }
        if (isset($map['nodataAlertLevel'])) {
            $model->nodataAlertLevel = $map['nodataAlertLevel'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}

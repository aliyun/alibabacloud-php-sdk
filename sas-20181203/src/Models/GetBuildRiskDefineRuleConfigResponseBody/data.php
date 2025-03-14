<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetBuildRiskDefineRuleConfigResponseBody;

use AlibabaCloud\SDK\Sas\V20181203\Models\GetBuildRiskDefineRuleConfigResponseBody\data\ruleTree;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The configuration ID for scanning image build command risks.
     *
     * @example 273698***
     *
     * @var int
     */
    public $id;

    /**
     * @description The total number of check items.
     *
     * @example 100
     *
     * @var int
     */
    public $ruleCount;

    /**
     * @description The details of all check items.
     *
     * @var ruleTree[]
     */
    public $ruleTree;

    /**
     * @description The number of selected check items.
     *
     * @example 99
     *
     * @var int
     */
    public $selectedCount;
    protected $_name = [
        'id' => 'Id',
        'ruleCount' => 'RuleCount',
        'ruleTree' => 'RuleTree',
        'selectedCount' => 'SelectedCount',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->ruleCount) {
            $res['RuleCount'] = $this->ruleCount;
        }
        if (null !== $this->ruleTree) {
            $res['RuleTree'] = [];
            if (null !== $this->ruleTree && \is_array($this->ruleTree)) {
                $n = 0;
                foreach ($this->ruleTree as $item) {
                    $res['RuleTree'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->selectedCount) {
            $res['SelectedCount'] = $this->selectedCount;
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
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['RuleCount'])) {
            $model->ruleCount = $map['RuleCount'];
        }
        if (isset($map['RuleTree'])) {
            if (!empty($map['RuleTree'])) {
                $model->ruleTree = [];
                $n = 0;
                foreach ($map['RuleTree'] as $item) {
                    $model->ruleTree[$n++] = null !== $item ? ruleTree::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['SelectedCount'])) {
            $model->selectedCount = $map['SelectedCount'];
        }

        return $model;
    }
}

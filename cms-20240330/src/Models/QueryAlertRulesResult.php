<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;

class QueryAlertRulesResult extends Model
{
    /**
     * @var AlertRuleV2[]
     */
    public $alertRules;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'alertRules' => 'alertRules',
        'totalCount' => 'totalCount',
    ];

    public function validate()
    {
        if (\is_array($this->alertRules)) {
            Model::validateArray($this->alertRules);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->alertRules) {
            if (\is_array($this->alertRules)) {
                $res['alertRules'] = [];
                $n1 = 0;
                foreach ($this->alertRules as $item1) {
                    $res['alertRules'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->totalCount) {
            $res['totalCount'] = $this->totalCount;
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
        if (isset($map['alertRules'])) {
            if (!empty($map['alertRules'])) {
                $model->alertRules = [];
                $n1 = 0;
                foreach ($map['alertRules'] as $item1) {
                    $model->alertRules[$n1] = AlertRuleV2::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['totalCount'])) {
            $model->totalCount = $map['totalCount'];
        }

        return $model;
    }
}

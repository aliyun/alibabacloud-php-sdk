<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20240330\Models\AlertRuleQuery\queries;

class AlertRuleQuery extends Model
{
    /**
     * @var bool
     */
    public $checkAfterDataComplete;

    /**
     * @var int
     */
    public $duration;

    /**
     * @var string
     */
    public $expr;

    /**
     * @var AlertRuleSlsQueryJoin
     */
    public $firstJoin;

    /**
     * @var string[]
     */
    public $groupFieldList;

    /**
     * @var string
     */
    public $groupType;

    /**
     * @var queries[]
     */
    public $queries;

    /**
     * @var AlertRuleSlsQueryJoin
     */
    public $secondJoin;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'checkAfterDataComplete' => 'checkAfterDataComplete',
        'duration' => 'duration',
        'expr' => 'expr',
        'firstJoin' => 'firstJoin',
        'groupFieldList' => 'groupFieldList',
        'groupType' => 'groupType',
        'queries' => 'queries',
        'secondJoin' => 'secondJoin',
        'type' => 'type',
    ];

    public function validate()
    {
        if (null !== $this->firstJoin) {
            $this->firstJoin->validate();
        }
        if (\is_array($this->groupFieldList)) {
            Model::validateArray($this->groupFieldList);
        }
        if (\is_array($this->queries)) {
            Model::validateArray($this->queries);
        }
        if (null !== $this->secondJoin) {
            $this->secondJoin->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->checkAfterDataComplete) {
            $res['checkAfterDataComplete'] = $this->checkAfterDataComplete;
        }

        if (null !== $this->duration) {
            $res['duration'] = $this->duration;
        }

        if (null !== $this->expr) {
            $res['expr'] = $this->expr;
        }

        if (null !== $this->firstJoin) {
            $res['firstJoin'] = null !== $this->firstJoin ? $this->firstJoin->toArray($noStream) : $this->firstJoin;
        }

        if (null !== $this->groupFieldList) {
            if (\is_array($this->groupFieldList)) {
                $res['groupFieldList'] = [];
                $n1 = 0;
                foreach ($this->groupFieldList as $item1) {
                    $res['groupFieldList'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->groupType) {
            $res['groupType'] = $this->groupType;
        }

        if (null !== $this->queries) {
            if (\is_array($this->queries)) {
                $res['queries'] = [];
                $n1 = 0;
                foreach ($this->queries as $item1) {
                    $res['queries'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->secondJoin) {
            $res['secondJoin'] = null !== $this->secondJoin ? $this->secondJoin->toArray($noStream) : $this->secondJoin;
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
        if (isset($map['checkAfterDataComplete'])) {
            $model->checkAfterDataComplete = $map['checkAfterDataComplete'];
        }

        if (isset($map['duration'])) {
            $model->duration = $map['duration'];
        }

        if (isset($map['expr'])) {
            $model->expr = $map['expr'];
        }

        if (isset($map['firstJoin'])) {
            $model->firstJoin = AlertRuleSlsQueryJoin::fromMap($map['firstJoin']);
        }

        if (isset($map['groupFieldList'])) {
            if (!empty($map['groupFieldList'])) {
                $model->groupFieldList = [];
                $n1 = 0;
                foreach ($map['groupFieldList'] as $item1) {
                    $model->groupFieldList[$n1++] = $item1;
                }
            }
        }

        if (isset($map['groupType'])) {
            $model->groupType = $map['groupType'];
        }

        if (isset($map['queries'])) {
            if (!empty($map['queries'])) {
                $model->queries = [];
                $n1 = 0;
                foreach ($map['queries'] as $item1) {
                    $model->queries[$n1++] = queries::fromMap($item1);
                }
            }
        }

        if (isset($map['secondJoin'])) {
            $model->secondJoin = AlertRuleSlsQueryJoin::fromMap($map['secondJoin']);
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}

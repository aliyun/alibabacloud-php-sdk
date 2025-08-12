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
     * @var string[][]
     */
    public $dimensions;

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
    public $groupId;

    /**
     * @var string
     */
    public $groupType;

    /**
     * @var string
     */
    public $namespace;

    /**
     * @var queries[]
     */
    public $queries;

    /**
     * @var string
     */
    public $relationType;

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
        'dimensions' => 'dimensions',
        'duration' => 'duration',
        'expr' => 'expr',
        'firstJoin' => 'firstJoin',
        'groupFieldList' => 'groupFieldList',
        'groupId' => 'groupId',
        'groupType' => 'groupType',
        'namespace' => 'namespace',
        'queries' => 'queries',
        'relationType' => 'relationType',
        'secondJoin' => 'secondJoin',
        'type' => 'type',
    ];

    public function validate()
    {
        if (\is_array($this->dimensions)) {
            Model::validateArray($this->dimensions);
        }
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

        if (null !== $this->dimensions) {
            if (\is_array($this->dimensions)) {
                $res['dimensions'] = [];
                $n1 = 0;
                foreach ($this->dimensions as $item1) {
                    if (\is_array($item1)) {
                        $res['dimensions'][$n1] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $res['dimensions'][$n1][$key2] = $value2;
                        }
                    }
                    ++$n1;
                }
            }
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
                    $res['groupFieldList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->groupId) {
            $res['groupId'] = $this->groupId;
        }

        if (null !== $this->groupType) {
            $res['groupType'] = $this->groupType;
        }

        if (null !== $this->namespace) {
            $res['namespace'] = $this->namespace;
        }

        if (null !== $this->queries) {
            if (\is_array($this->queries)) {
                $res['queries'] = [];
                $n1 = 0;
                foreach ($this->queries as $item1) {
                    $res['queries'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->relationType) {
            $res['relationType'] = $this->relationType;
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

        if (isset($map['dimensions'])) {
            if (!empty($map['dimensions'])) {
                $model->dimensions = [];
                $n1 = 0;
                foreach ($map['dimensions'] as $item1) {
                    if (!empty($item1)) {
                        $model->dimensions[$n1] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $model->dimensions[$n1][$key2] = $value2;
                        }
                    }
                    ++$n1;
                }
            }
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
                    $model->groupFieldList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['groupId'])) {
            $model->groupId = $map['groupId'];
        }

        if (isset($map['groupType'])) {
            $model->groupType = $map['groupType'];
        }

        if (isset($map['namespace'])) {
            $model->namespace = $map['namespace'];
        }

        if (isset($map['queries'])) {
            if (!empty($map['queries'])) {
                $model->queries = [];
                $n1 = 0;
                foreach ($map['queries'] as $item1) {
                    $model->queries[$n1] = queries::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['relationType'])) {
            $model->relationType = $map['relationType'];
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

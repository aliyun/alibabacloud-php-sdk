<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\SDK\Cms\V20240330\Models\AlertRuleQuery\queries;
use AlibabaCloud\Tea\Model;

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
     * @description 查询类型
     *
     * This parameter is required.
     *
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

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->checkAfterDataComplete) {
            $res['checkAfterDataComplete'] = $this->checkAfterDataComplete;
        }
        if (null !== $this->dimensions) {
            $res['dimensions'] = $this->dimensions;
        }
        if (null !== $this->duration) {
            $res['duration'] = $this->duration;
        }
        if (null !== $this->expr) {
            $res['expr'] = $this->expr;
        }
        if (null !== $this->firstJoin) {
            $res['firstJoin'] = null !== $this->firstJoin ? $this->firstJoin->toMap() : null;
        }
        if (null !== $this->groupFieldList) {
            $res['groupFieldList'] = $this->groupFieldList;
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
            $res['queries'] = [];
            if (null !== $this->queries && \is_array($this->queries)) {
                $n = 0;
                foreach ($this->queries as $item) {
                    $res['queries'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->relationType) {
            $res['relationType'] = $this->relationType;
        }
        if (null !== $this->secondJoin) {
            $res['secondJoin'] = null !== $this->secondJoin ? $this->secondJoin->toMap() : null;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AlertRuleQuery
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['checkAfterDataComplete'])) {
            $model->checkAfterDataComplete = $map['checkAfterDataComplete'];
        }
        if (isset($map['dimensions'])) {
            if (!empty($map['dimensions'])) {
                $model->dimensions = $map['dimensions'];
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
                $model->groupFieldList = $map['groupFieldList'];
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
                $n = 0;
                foreach ($map['queries'] as $item) {
                    $model->queries[$n++] = null !== $item ? queries::fromMap($item) : $item;
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

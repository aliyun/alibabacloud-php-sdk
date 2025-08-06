<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\ListIntelligentStrategyResponseBody;

use AlibabaCloud\Dara\Model;

class intelligentStrategyList extends Model
{
    /**
     * @var string
     */
    public $conditions;

    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var string
     */
    public $executeParams;

    /**
     * @var int
     */
    public $matchLimit;

    /**
     * @var string
     */
    public $modifiedTime;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $priority;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $state;

    /**
     * @var string
     */
    public $strategyId;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'conditions' => 'Conditions',
        'creationTime' => 'CreationTime',
        'executeParams' => 'ExecuteParams',
        'matchLimit' => 'MatchLimit',
        'modifiedTime' => 'ModifiedTime',
        'name' => 'Name',
        'priority' => 'Priority',
        'startTime' => 'StartTime',
        'state' => 'State',
        'strategyId' => 'StrategyId',
        'type' => 'Type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->conditions) {
            $res['Conditions'] = $this->conditions;
        }

        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }

        if (null !== $this->executeParams) {
            $res['ExecuteParams'] = $this->executeParams;
        }

        if (null !== $this->matchLimit) {
            $res['MatchLimit'] = $this->matchLimit;
        }

        if (null !== $this->modifiedTime) {
            $res['ModifiedTime'] = $this->modifiedTime;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        if (null !== $this->state) {
            $res['State'] = $this->state;
        }

        if (null !== $this->strategyId) {
            $res['StrategyId'] = $this->strategyId;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['Conditions'])) {
            $model->conditions = $map['Conditions'];
        }

        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }

        if (isset($map['ExecuteParams'])) {
            $model->executeParams = $map['ExecuteParams'];
        }

        if (isset($map['MatchLimit'])) {
            $model->matchLimit = $map['MatchLimit'];
        }

        if (isset($map['ModifiedTime'])) {
            $model->modifiedTime = $map['ModifiedTime'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['State'])) {
            $model->state = $map['State'];
        }

        if (isset($map['StrategyId'])) {
            $model->strategyId = $map['StrategyId'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}

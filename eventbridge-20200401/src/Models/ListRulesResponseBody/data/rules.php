<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models\ListRulesResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\ListRulesResponseBody\data\rules\targets;

class rules extends Model
{
    /**
     * @var int
     */
    public $createdTimestamp;

    /**
     * @var string
     */
    public $description;

    /**
     * @var mixed[]
     */
    public $detailMap;

    /**
     * @var string
     */
    public $eventBusName;

    /**
     * @var string
     */
    public $filterPattern;

    /**
     * @var string
     */
    public $ruleARN;

    /**
     * @var string
     */
    public $ruleName;

    /**
     * @var string
     */
    public $status;

    /**
     * @var targets[]
     */
    public $targets;
    protected $_name = [
        'createdTimestamp' => 'CreatedTimestamp',
        'description' => 'Description',
        'detailMap' => 'DetailMap',
        'eventBusName' => 'EventBusName',
        'filterPattern' => 'FilterPattern',
        'ruleARN' => 'RuleARN',
        'ruleName' => 'RuleName',
        'status' => 'Status',
        'targets' => 'Targets',
    ];

    public function validate()
    {
        if (\is_array($this->detailMap)) {
            Model::validateArray($this->detailMap);
        }
        if (\is_array($this->targets)) {
            Model::validateArray($this->targets);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createdTimestamp) {
            $res['CreatedTimestamp'] = $this->createdTimestamp;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->detailMap) {
            if (\is_array($this->detailMap)) {
                $res['DetailMap'] = [];
                foreach ($this->detailMap as $key1 => $value1) {
                    $res['DetailMap'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->eventBusName) {
            $res['EventBusName'] = $this->eventBusName;
        }

        if (null !== $this->filterPattern) {
            $res['FilterPattern'] = $this->filterPattern;
        }

        if (null !== $this->ruleARN) {
            $res['RuleARN'] = $this->ruleARN;
        }

        if (null !== $this->ruleName) {
            $res['RuleName'] = $this->ruleName;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->targets) {
            if (\is_array($this->targets)) {
                $res['Targets'] = [];
                $n1 = 0;
                foreach ($this->targets as $item1) {
                    $res['Targets'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['CreatedTimestamp'])) {
            $model->createdTimestamp = $map['CreatedTimestamp'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['DetailMap'])) {
            if (!empty($map['DetailMap'])) {
                $model->detailMap = [];
                foreach ($map['DetailMap'] as $key1 => $value1) {
                    $model->detailMap[$key1] = $value1;
                }
            }
        }

        if (isset($map['EventBusName'])) {
            $model->eventBusName = $map['EventBusName'];
        }

        if (isset($map['FilterPattern'])) {
            $model->filterPattern = $map['FilterPattern'];
        }

        if (isset($map['RuleARN'])) {
            $model->ruleARN = $map['RuleARN'];
        }

        if (isset($map['RuleName'])) {
            $model->ruleName = $map['RuleName'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['Targets'])) {
            if (!empty($map['Targets'])) {
                $model->targets = [];
                $n1 = 0;
                foreach ($map['Targets'] as $item1) {
                    $model->targets[$n1++] = targets::fromMap($item1);
                }
            }
        }

        return $model;
    }
}

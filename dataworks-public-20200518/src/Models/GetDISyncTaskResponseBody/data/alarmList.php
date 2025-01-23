<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetDISyncTaskResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetDISyncTaskResponseBody\data\alarmList\alarmRuleList;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetDISyncTaskResponseBody\data\alarmList\notifyRule;

class alarmList extends Model
{
    /**
     * @var alarmRuleList[]
     */
    public $alarmRuleList;
    /**
     * @var string
     */
    public $description;
    /**
     * @var bool
     */
    public $enabled;
    /**
     * @var int
     */
    public $id;
    /**
     * @var string
     */
    public $metric;
    /**
     * @var notifyRule
     */
    public $notifyRule;
    /**
     * @var string
     */
    public $ruleName;
    protected $_name = [
        'alarmRuleList' => 'AlarmRuleList',
        'description'   => 'Description',
        'enabled'       => 'Enabled',
        'id'            => 'Id',
        'metric'        => 'Metric',
        'notifyRule'    => 'NotifyRule',
        'ruleName'      => 'RuleName',
    ];

    public function validate()
    {
        if (\is_array($this->alarmRuleList)) {
            Model::validateArray($this->alarmRuleList);
        }
        if (null !== $this->notifyRule) {
            $this->notifyRule->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->alarmRuleList) {
            if (\is_array($this->alarmRuleList)) {
                $res['AlarmRuleList'] = [];
                $n1                   = 0;
                foreach ($this->alarmRuleList as $item1) {
                    $res['AlarmRuleList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->enabled) {
            $res['Enabled'] = $this->enabled;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->metric) {
            $res['Metric'] = $this->metric;
        }

        if (null !== $this->notifyRule) {
            $res['NotifyRule'] = null !== $this->notifyRule ? $this->notifyRule->toArray($noStream) : $this->notifyRule;
        }

        if (null !== $this->ruleName) {
            $res['RuleName'] = $this->ruleName;
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
        if (isset($map['AlarmRuleList'])) {
            if (!empty($map['AlarmRuleList'])) {
                $model->alarmRuleList = [];
                $n1                   = 0;
                foreach ($map['AlarmRuleList'] as $item1) {
                    $model->alarmRuleList[$n1++] = alarmRuleList::fromMap($item1);
                }
            }
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['Enabled'])) {
            $model->enabled = $map['Enabled'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['Metric'])) {
            $model->metric = $map['Metric'];
        }

        if (isset($map['NotifyRule'])) {
            $model->notifyRule = notifyRule::fromMap($map['NotifyRule']);
        }

        if (isset($map['RuleName'])) {
            $model->ruleName = $map['RuleName'];
        }

        return $model;
    }
}

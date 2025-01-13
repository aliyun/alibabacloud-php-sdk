<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetDISyncTaskResponseBody\data;

use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetDISyncTaskResponseBody\data\alarmList\alarmRuleList;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetDISyncTaskResponseBody\data\alarmList\notifyRule;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alarmRuleList) {
            $res['AlarmRuleList'] = [];
            if (null !== $this->alarmRuleList && \is_array($this->alarmRuleList)) {
                $n = 0;
                foreach ($this->alarmRuleList as $item) {
                    $res['AlarmRuleList'][$n++] = null !== $item ? $item->toMap() : $item;
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
            $res['NotifyRule'] = null !== $this->notifyRule ? $this->notifyRule->toMap() : null;
        }
        if (null !== $this->ruleName) {
            $res['RuleName'] = $this->ruleName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return alarmList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlarmRuleList'])) {
            if (!empty($map['AlarmRuleList'])) {
                $model->alarmRuleList = [];
                $n                    = 0;
                foreach ($map['AlarmRuleList'] as $item) {
                    $model->alarmRuleList[$n++] = null !== $item ? alarmRuleList::fromMap($item) : $item;
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

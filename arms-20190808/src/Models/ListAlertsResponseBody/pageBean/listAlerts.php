<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\ListAlertsResponseBody\pageBean;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ARMS\V20190808\Models\ListAlertsResponseBody\pageBean\listAlerts\activities;
use AlibabaCloud\SDK\ARMS\V20190808\Models\ListAlertsResponseBody\pageBean\listAlerts\alertEvents;

class listAlerts extends Model
{
    /**
     * @var int
     */
    public $acknowledgeTime;
    /**
     * @var activities[]
     */
    public $activities;
    /**
     * @var alertEvents[]
     */
    public $alertEvents;
    /**
     * @var int
     */
    public $alertId;
    /**
     * @var string
     */
    public $alertName;
    /**
     * @var string
     */
    public $createTime;
    /**
     * @var string
     */
    public $describe;
    /**
     * @var float
     */
    public $dispatchRuleId;
    /**
     * @var string
     */
    public $dispatchRuleName;
    /**
     * @var string
     */
    public $handler;
    /**
     * @var string
     */
    public $notifyRobots;
    /**
     * @var string
     */
    public $owner;
    /**
     * @var int
     */
    public $recoverTime;
    /**
     * @var string
     */
    public $severity;
    /**
     * @var string
     */
    public $solution;
    /**
     * @var int
     */
    public $state;
    protected $_name = [
        'acknowledgeTime'  => 'AcknowledgeTime',
        'activities'       => 'Activities',
        'alertEvents'      => 'AlertEvents',
        'alertId'          => 'AlertId',
        'alertName'        => 'AlertName',
        'createTime'       => 'CreateTime',
        'describe'         => 'Describe',
        'dispatchRuleId'   => 'DispatchRuleId',
        'dispatchRuleName' => 'DispatchRuleName',
        'handler'          => 'Handler',
        'notifyRobots'     => 'NotifyRobots',
        'owner'            => 'Owner',
        'recoverTime'      => 'RecoverTime',
        'severity'         => 'Severity',
        'solution'         => 'Solution',
        'state'            => 'State',
    ];

    public function validate()
    {
        if (\is_array($this->activities)) {
            Model::validateArray($this->activities);
        }
        if (\is_array($this->alertEvents)) {
            Model::validateArray($this->alertEvents);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->acknowledgeTime) {
            $res['AcknowledgeTime'] = $this->acknowledgeTime;
        }

        if (null !== $this->activities) {
            if (\is_array($this->activities)) {
                $res['Activities'] = [];
                $n1                = 0;
                foreach ($this->activities as $item1) {
                    $res['Activities'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->alertEvents) {
            if (\is_array($this->alertEvents)) {
                $res['AlertEvents'] = [];
                $n1                 = 0;
                foreach ($this->alertEvents as $item1) {
                    $res['AlertEvents'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->alertId) {
            $res['AlertId'] = $this->alertId;
        }

        if (null !== $this->alertName) {
            $res['AlertName'] = $this->alertName;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->describe) {
            $res['Describe'] = $this->describe;
        }

        if (null !== $this->dispatchRuleId) {
            $res['DispatchRuleId'] = $this->dispatchRuleId;
        }

        if (null !== $this->dispatchRuleName) {
            $res['DispatchRuleName'] = $this->dispatchRuleName;
        }

        if (null !== $this->handler) {
            $res['Handler'] = $this->handler;
        }

        if (null !== $this->notifyRobots) {
            $res['NotifyRobots'] = $this->notifyRobots;
        }

        if (null !== $this->owner) {
            $res['Owner'] = $this->owner;
        }

        if (null !== $this->recoverTime) {
            $res['RecoverTime'] = $this->recoverTime;
        }

        if (null !== $this->severity) {
            $res['Severity'] = $this->severity;
        }

        if (null !== $this->solution) {
            $res['Solution'] = $this->solution;
        }

        if (null !== $this->state) {
            $res['State'] = $this->state;
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
        if (isset($map['AcknowledgeTime'])) {
            $model->acknowledgeTime = $map['AcknowledgeTime'];
        }

        if (isset($map['Activities'])) {
            if (!empty($map['Activities'])) {
                $model->activities = [];
                $n1                = 0;
                foreach ($map['Activities'] as $item1) {
                    $model->activities[$n1++] = activities::fromMap($item1);
                }
            }
        }

        if (isset($map['AlertEvents'])) {
            if (!empty($map['AlertEvents'])) {
                $model->alertEvents = [];
                $n1                 = 0;
                foreach ($map['AlertEvents'] as $item1) {
                    $model->alertEvents[$n1++] = alertEvents::fromMap($item1);
                }
            }
        }

        if (isset($map['AlertId'])) {
            $model->alertId = $map['AlertId'];
        }

        if (isset($map['AlertName'])) {
            $model->alertName = $map['AlertName'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['Describe'])) {
            $model->describe = $map['Describe'];
        }

        if (isset($map['DispatchRuleId'])) {
            $model->dispatchRuleId = $map['DispatchRuleId'];
        }

        if (isset($map['DispatchRuleName'])) {
            $model->dispatchRuleName = $map['DispatchRuleName'];
        }

        if (isset($map['Handler'])) {
            $model->handler = $map['Handler'];
        }

        if (isset($map['NotifyRobots'])) {
            $model->notifyRobots = $map['NotifyRobots'];
        }

        if (isset($map['Owner'])) {
            $model->owner = $map['Owner'];
        }

        if (isset($map['RecoverTime'])) {
            $model->recoverTime = $map['RecoverTime'];
        }

        if (isset($map['Severity'])) {
            $model->severity = $map['Severity'];
        }

        if (isset($map['Solution'])) {
            $model->solution = $map['Solution'];
        }

        if (isset($map['State'])) {
            $model->state = $map['State'];
        }

        return $model;
    }
}

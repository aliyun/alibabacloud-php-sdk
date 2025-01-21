<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\ListNotificationPoliciesResponseBody\pageBean;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ARMS\V20190808\Models\ListNotificationPoliciesResponseBody\pageBean\notificationPolicies\groupRule;
use AlibabaCloud\SDK\ARMS\V20190808\Models\ListNotificationPoliciesResponseBody\pageBean\notificationPolicies\matchingRules;
use AlibabaCloud\SDK\ARMS\V20190808\Models\ListNotificationPoliciesResponseBody\pageBean\notificationPolicies\notifyRule;
use AlibabaCloud\SDK\ARMS\V20190808\Models\ListNotificationPoliciesResponseBody\pageBean\notificationPolicies\notifyTemplate;

class notificationPolicies extends Model
{
    /**
     * @var bool
     */
    public $directedMode;
    /**
     * @var int
     */
    public $escalationPolicyId;
    /**
     * @var groupRule
     */
    public $groupRule;
    /**
     * @var int
     */
    public $id;
    /**
     * @var int
     */
    public $integrationId;
    /**
     * @var matchingRules[]
     */
    public $matchingRules;
    /**
     * @var string
     */
    public $name;
    /**
     * @var notifyRule
     */
    public $notifyRule;
    /**
     * @var notifyTemplate
     */
    public $notifyTemplate;
    /**
     * @var bool
     */
    public $repeat;
    /**
     * @var int
     */
    public $repeatInterval;
    /**
     * @var bool
     */
    public $sendRecoverMessage;
    /**
     * @var string
     */
    public $state;
    protected $_name = [
        'directedMode'       => 'DirectedMode',
        'escalationPolicyId' => 'EscalationPolicyId',
        'groupRule'          => 'GroupRule',
        'id'                 => 'Id',
        'integrationId'      => 'IntegrationId',
        'matchingRules'      => 'MatchingRules',
        'name'               => 'Name',
        'notifyRule'         => 'NotifyRule',
        'notifyTemplate'     => 'NotifyTemplate',
        'repeat'             => 'Repeat',
        'repeatInterval'     => 'RepeatInterval',
        'sendRecoverMessage' => 'SendRecoverMessage',
        'state'              => 'State',
    ];

    public function validate()
    {
        if (null !== $this->groupRule) {
            $this->groupRule->validate();
        }
        if (\is_array($this->matchingRules)) {
            Model::validateArray($this->matchingRules);
        }
        if (null !== $this->notifyRule) {
            $this->notifyRule->validate();
        }
        if (null !== $this->notifyTemplate) {
            $this->notifyTemplate->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->directedMode) {
            $res['DirectedMode'] = $this->directedMode;
        }

        if (null !== $this->escalationPolicyId) {
            $res['EscalationPolicyId'] = $this->escalationPolicyId;
        }

        if (null !== $this->groupRule) {
            $res['GroupRule'] = null !== $this->groupRule ? $this->groupRule->toArray($noStream) : $this->groupRule;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->integrationId) {
            $res['IntegrationId'] = $this->integrationId;
        }

        if (null !== $this->matchingRules) {
            if (\is_array($this->matchingRules)) {
                $res['MatchingRules'] = [];
                $n1                   = 0;
                foreach ($this->matchingRules as $item1) {
                    $res['MatchingRules'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->notifyRule) {
            $res['NotifyRule'] = null !== $this->notifyRule ? $this->notifyRule->toArray($noStream) : $this->notifyRule;
        }

        if (null !== $this->notifyTemplate) {
            $res['NotifyTemplate'] = null !== $this->notifyTemplate ? $this->notifyTemplate->toArray($noStream) : $this->notifyTemplate;
        }

        if (null !== $this->repeat) {
            $res['Repeat'] = $this->repeat;
        }

        if (null !== $this->repeatInterval) {
            $res['RepeatInterval'] = $this->repeatInterval;
        }

        if (null !== $this->sendRecoverMessage) {
            $res['SendRecoverMessage'] = $this->sendRecoverMessage;
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
        if (isset($map['DirectedMode'])) {
            $model->directedMode = $map['DirectedMode'];
        }

        if (isset($map['EscalationPolicyId'])) {
            $model->escalationPolicyId = $map['EscalationPolicyId'];
        }

        if (isset($map['GroupRule'])) {
            $model->groupRule = groupRule::fromMap($map['GroupRule']);
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['IntegrationId'])) {
            $model->integrationId = $map['IntegrationId'];
        }

        if (isset($map['MatchingRules'])) {
            if (!empty($map['MatchingRules'])) {
                $model->matchingRules = [];
                $n1                   = 0;
                foreach ($map['MatchingRules'] as $item1) {
                    $model->matchingRules[$n1++] = matchingRules::fromMap($item1);
                }
            }
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['NotifyRule'])) {
            $model->notifyRule = notifyRule::fromMap($map['NotifyRule']);
        }

        if (isset($map['NotifyTemplate'])) {
            $model->notifyTemplate = notifyTemplate::fromMap($map['NotifyTemplate']);
        }

        if (isset($map['Repeat'])) {
            $model->repeat = $map['Repeat'];
        }

        if (isset($map['RepeatInterval'])) {
            $model->repeatInterval = $map['RepeatInterval'];
        }

        if (isset($map['SendRecoverMessage'])) {
            $model->sendRecoverMessage = $map['SendRecoverMessage'];
        }

        if (isset($map['State'])) {
            $model->state = $map['State'];
        }

        return $model;
    }
}

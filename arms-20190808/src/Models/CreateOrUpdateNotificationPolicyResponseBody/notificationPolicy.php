<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\CreateOrUpdateNotificationPolicyResponseBody;

use AlibabaCloud\SDK\ARMS\V20190808\Models\CreateOrUpdateNotificationPolicyResponseBody\notificationPolicy\groupRule;
use AlibabaCloud\SDK\ARMS\V20190808\Models\CreateOrUpdateNotificationPolicyResponseBody\notificationPolicy\matchingRules;
use AlibabaCloud\SDK\ARMS\V20190808\Models\CreateOrUpdateNotificationPolicyResponseBody\notificationPolicy\notifyRule;
use AlibabaCloud\SDK\ARMS\V20190808\Models\CreateOrUpdateNotificationPolicyResponseBody\notificationPolicy\notifyTemplate;
use AlibabaCloud\Tea\Model;

class notificationPolicy extends Model
{
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
    protected $_name = [
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
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->escalationPolicyId) {
            $res['EscalationPolicyId'] = $this->escalationPolicyId;
        }
        if (null !== $this->groupRule) {
            $res['GroupRule'] = null !== $this->groupRule ? $this->groupRule->toMap() : null;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->integrationId) {
            $res['IntegrationId'] = $this->integrationId;
        }
        if (null !== $this->matchingRules) {
            $res['MatchingRules'] = [];
            if (null !== $this->matchingRules && \is_array($this->matchingRules)) {
                $n = 0;
                foreach ($this->matchingRules as $item) {
                    $res['MatchingRules'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->notifyRule) {
            $res['NotifyRule'] = null !== $this->notifyRule ? $this->notifyRule->toMap() : null;
        }
        if (null !== $this->notifyTemplate) {
            $res['NotifyTemplate'] = null !== $this->notifyTemplate ? $this->notifyTemplate->toMap() : null;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return notificationPolicy
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
                $n                    = 0;
                foreach ($map['MatchingRules'] as $item) {
                    $model->matchingRules[$n++] = null !== $item ? matchingRules::fromMap($item) : $item;
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

        return $model;
    }
}

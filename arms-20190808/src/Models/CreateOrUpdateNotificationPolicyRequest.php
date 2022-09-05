<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class CreateOrUpdateNotificationPolicyRequest extends Model
{
    /**
     * @var int
     */
    public $escalationPolicyId;

    /**
     * @var string
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
     * @var string
     */
    public $matchingRules;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $notifyRule;

    /**
     * @var string
     */
    public $notifyTemplate;

    /**
     * @var string
     */
    public $regionId;

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
        'regionId'           => 'RegionId',
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
            $res['GroupRule'] = $this->groupRule;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->integrationId) {
            $res['IntegrationId'] = $this->integrationId;
        }
        if (null !== $this->matchingRules) {
            $res['MatchingRules'] = $this->matchingRules;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->notifyRule) {
            $res['NotifyRule'] = $this->notifyRule;
        }
        if (null !== $this->notifyTemplate) {
            $res['NotifyTemplate'] = $this->notifyTemplate;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
     * @return CreateOrUpdateNotificationPolicyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EscalationPolicyId'])) {
            $model->escalationPolicyId = $map['EscalationPolicyId'];
        }
        if (isset($map['GroupRule'])) {
            $model->groupRule = $map['GroupRule'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['IntegrationId'])) {
            $model->integrationId = $map['IntegrationId'];
        }
        if (isset($map['MatchingRules'])) {
            $model->matchingRules = $map['MatchingRules'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['NotifyRule'])) {
            $model->notifyRule = $map['NotifyRule'];
        }
        if (isset($map['NotifyTemplate'])) {
            $model->notifyTemplate = $map['NotifyTemplate'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
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

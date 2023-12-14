<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20220616\Models;

use AlibabaCloud\Tea\Model;

class PostAutomateResponseConfigRequest extends Model
{
    /**
     * @description The configuration of the action that is performed after the rule is hit. The value is in JSON format.
     *
     * @example [
     * ]
     * @var string
     */
    public $actionConfig;

    /**
     * @description The action that is performed after the rule is hit. Separate multiple values with commas (,). Valid values:
     *
     *   doPlaybook: Execute a playbook.
     *   changeEventStatus: Change the event status.
     *   changeThreatLevel: Change the threat level of the event.
     *
     * @example doPlaybook,changeEventStatus
     *
     * @var string
     */
    public $actionType;

    /**
     * @description The rule type. Valid values:
     *
     *   event
     *   alert
     *
     * @example event
     *
     * @var string
     */
    public $autoResponseType;

    /**
     * @description The trigger condition of the rule. The value is in JSON format.
     *
     * @example [{"left":{"value":"alert_name"},"operator":"containsString","right":{"value":"webshell_online"}}]
     *
     * @var string
     */
    public $executionCondition;

    /**
     * @description The rule ID.
     *
     * @example 123
     *
     * @var int
     */
    public $id;

    /**
     * @description The data management center of the threat analysis feature. Specify this parameter based on the region in which your assets reside. Valid values:
     *
     *   cn-hangzhou: Your assets reside in regions inside China.
     *   ap-southeast-1: Your assets reside in regions outside China.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The rule name.
     *
     * @example cfw kill quara book
     *
     * @var string
     */
    public $ruleName;

    /**
     * @description The ID of the user who created the rule.
     *
     * @example 17108579417****
     *
     * @var int
     */
    public $subUserId;
    protected $_name = [
        'actionConfig'       => 'ActionConfig',
        'actionType'         => 'ActionType',
        'autoResponseType'   => 'AutoResponseType',
        'executionCondition' => 'ExecutionCondition',
        'id'                 => 'Id',
        'regionId'           => 'RegionId',
        'ruleName'           => 'RuleName',
        'subUserId'          => 'SubUserId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->actionConfig) {
            $res['ActionConfig'] = $this->actionConfig;
        }
        if (null !== $this->actionType) {
            $res['ActionType'] = $this->actionType;
        }
        if (null !== $this->autoResponseType) {
            $res['AutoResponseType'] = $this->autoResponseType;
        }
        if (null !== $this->executionCondition) {
            $res['ExecutionCondition'] = $this->executionCondition;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->ruleName) {
            $res['RuleName'] = $this->ruleName;
        }
        if (null !== $this->subUserId) {
            $res['SubUserId'] = $this->subUserId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PostAutomateResponseConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ActionConfig'])) {
            $model->actionConfig = $map['ActionConfig'];
        }
        if (isset($map['ActionType'])) {
            $model->actionType = $map['ActionType'];
        }
        if (isset($map['AutoResponseType'])) {
            $model->autoResponseType = $map['AutoResponseType'];
        }
        if (isset($map['ExecutionCondition'])) {
            $model->executionCondition = $map['ExecutionCondition'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['RuleName'])) {
            $model->ruleName = $map['RuleName'];
        }
        if (isset($map['SubUserId'])) {
            $model->subUserId = $map['SubUserId'];
        }

        return $model;
    }
}

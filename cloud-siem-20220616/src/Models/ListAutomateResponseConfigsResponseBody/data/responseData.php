<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20220616\Models\ListAutomateResponseConfigsResponseBody\data;

use AlibabaCloud\Tea\Model;

class responseData extends Model
{
    /**
     * @example [
     * ]
     * @var string
     */
    public $actionConfig;

    /**
     * @example doPlaybook,changeEventStatus
     *
     * @var string
     */
    public $actionType;

    /**
     * @example 127608589417****
     *
     * @var int
     */
    public $aliuid;

    /**
     * @example event
     *
     * @var string
     */
    public $autoResponseType;

    /**
     * @example [{"left":{"value":"alert_name"},"operator":"containsString","right":{"value":"webshell_online"}}]
     *
     * @var string
     */
    public $executionCondition;

    /**
     * @example 2021-01-06 16:37:29
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @example 2021-01-06 16:37:29
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @example 123
     *
     * @var int
     */
    public $id;

    /**
     * @example cfw kill quara book
     *
     * @var string
     */
    public $ruleName;

    /**
     * @example 0
     *
     * @var int
     */
    public $status;

    /**
     * @example 17108579417****
     *
     * @var int
     */
    public $subUserId;
    protected $_name = [
        'actionConfig'       => 'ActionConfig',
        'actionType'         => 'ActionType',
        'aliuid'             => 'Aliuid',
        'autoResponseType'   => 'AutoResponseType',
        'executionCondition' => 'ExecutionCondition',
        'gmtCreate'          => 'GmtCreate',
        'gmtModified'        => 'GmtModified',
        'id'                 => 'Id',
        'ruleName'           => 'RuleName',
        'status'             => 'Status',
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
        if (null !== $this->aliuid) {
            $res['Aliuid'] = $this->aliuid;
        }
        if (null !== $this->autoResponseType) {
            $res['AutoResponseType'] = $this->autoResponseType;
        }
        if (null !== $this->executionCondition) {
            $res['ExecutionCondition'] = $this->executionCondition;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->ruleName) {
            $res['RuleName'] = $this->ruleName;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->subUserId) {
            $res['SubUserId'] = $this->subUserId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return responseData
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
        if (isset($map['Aliuid'])) {
            $model->aliuid = $map['Aliuid'];
        }
        if (isset($map['AutoResponseType'])) {
            $model->autoResponseType = $map['AutoResponseType'];
        }
        if (isset($map['ExecutionCondition'])) {
            $model->executionCondition = $map['ExecutionCondition'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['RuleName'])) {
            $model->ruleName = $map['RuleName'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['SubUserId'])) {
            $model->subUserId = $map['SubUserId'];
        }

        return $model;
    }
}

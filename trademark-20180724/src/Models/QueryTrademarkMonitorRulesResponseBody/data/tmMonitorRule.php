<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20180724\Models\QueryTrademarkMonitorRulesResponseBody\data;

use AlibabaCloud\Tea\Model;

class tmMonitorRule extends Model
{
    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $env;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $lastFinishTime;

    /**
     * @var string
     */
    public $lastRunTime;

    /**
     * @var string
     */
    public $lastUpdateTime;

    /**
     * @var int
     */
    public $notifyUpdate;

    /**
     * @var string
     */
    public $ruleDetail;

    /**
     * @var string
     */
    public $ruleExtend;

    /**
     * @var string
     */
    public $ruleKeyword;

    /**
     * @var string
     */
    public $ruleName;

    /**
     * @var string
     */
    public $ruleSource;

    /**
     * @var string
     */
    public $ruleStatus;

    /**
     * @var int
     */
    public $ruleType;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $updateTime;

    /**
     * @var string
     */
    public $userId;

    /**
     * @var int
     */
    public $version;
    protected $_name = [
        'createTime'     => 'CreateTime',
        'endTime'        => 'EndTime',
        'env'            => 'Env',
        'id'             => 'Id',
        'lastFinishTime' => 'LastFinishTime',
        'lastRunTime'    => 'LastRunTime',
        'lastUpdateTime' => 'LastUpdateTime',
        'notifyUpdate'   => 'NotifyUpdate',
        'ruleDetail'     => 'RuleDetail',
        'ruleExtend'     => 'RuleExtend',
        'ruleKeyword'    => 'RuleKeyword',
        'ruleName'       => 'RuleName',
        'ruleSource'     => 'RuleSource',
        'ruleStatus'     => 'RuleStatus',
        'ruleType'       => 'RuleType',
        'startTime'      => 'StartTime',
        'updateTime'     => 'UpdateTime',
        'userId'         => 'UserId',
        'version'        => 'Version',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->env) {
            $res['Env'] = $this->env;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->lastFinishTime) {
            $res['LastFinishTime'] = $this->lastFinishTime;
        }
        if (null !== $this->lastRunTime) {
            $res['LastRunTime'] = $this->lastRunTime;
        }
        if (null !== $this->lastUpdateTime) {
            $res['LastUpdateTime'] = $this->lastUpdateTime;
        }
        if (null !== $this->notifyUpdate) {
            $res['NotifyUpdate'] = $this->notifyUpdate;
        }
        if (null !== $this->ruleDetail) {
            $res['RuleDetail'] = $this->ruleDetail;
        }
        if (null !== $this->ruleExtend) {
            $res['RuleExtend'] = $this->ruleExtend;
        }
        if (null !== $this->ruleKeyword) {
            $res['RuleKeyword'] = $this->ruleKeyword;
        }
        if (null !== $this->ruleName) {
            $res['RuleName'] = $this->ruleName;
        }
        if (null !== $this->ruleSource) {
            $res['RuleSource'] = $this->ruleSource;
        }
        if (null !== $this->ruleStatus) {
            $res['RuleStatus'] = $this->ruleStatus;
        }
        if (null !== $this->ruleType) {
            $res['RuleType'] = $this->ruleType;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return tmMonitorRule
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['Env'])) {
            $model->env = $map['Env'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['LastFinishTime'])) {
            $model->lastFinishTime = $map['LastFinishTime'];
        }
        if (isset($map['LastRunTime'])) {
            $model->lastRunTime = $map['LastRunTime'];
        }
        if (isset($map['LastUpdateTime'])) {
            $model->lastUpdateTime = $map['LastUpdateTime'];
        }
        if (isset($map['NotifyUpdate'])) {
            $model->notifyUpdate = $map['NotifyUpdate'];
        }
        if (isset($map['RuleDetail'])) {
            $model->ruleDetail = $map['RuleDetail'];
        }
        if (isset($map['RuleExtend'])) {
            $model->ruleExtend = $map['RuleExtend'];
        }
        if (isset($map['RuleKeyword'])) {
            $model->ruleKeyword = $map['RuleKeyword'];
        }
        if (isset($map['RuleName'])) {
            $model->ruleName = $map['RuleName'];
        }
        if (isset($map['RuleSource'])) {
            $model->ruleSource = $map['RuleSource'];
        }
        if (isset($map['RuleStatus'])) {
            $model->ruleStatus = $map['RuleStatus'];
        }
        if (isset($map['RuleType'])) {
            $model->ruleType = $map['RuleType'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}

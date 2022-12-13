<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models\ListRouteRulesResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 10
     *
     * @var int
     */
    public $assignObjectId;

    /**
     * @example SERVICEGROUP
     *
     * @var string
     */
    public $assignObjectType;

    /**
     * @example 2020-03-05 15:53:55
     *
     * @var string
     */
    public $createTime;

    /**
     * @example LOW
     *
     * @var string
     */
    public $effection;

    /**
     * @example DISABLE
     *
     * @var string
     */
    public $enableStatus;

    /**
     * @example P1
     *
     * @var string
     */
    public $incidentLevel;

    /**
     * @var int
     */
    public $isValid;

    /**
     * @example 10
     *
     * @var int
     */
    public $matchCount;

    /**
     * @example zabbix
     *
     * @var string
     */
    public $monitorSourceNames;

    /**
     * @var int
     */
    public $relServiceDeleteType;

    /**
     * @example 1
     *
     * @var int
     */
    public $relatedServiceId;

    /**
     * @example 关联服务名字
     *
     * @var string
     */
    public $relatedServiceName;

    /**
     * @example 10000
     *
     * @var int
     */
    public $routeRuleId;

    /**
     * @example INCIDENT
     *
     * @var string
     */
    public $routeType;

    /**
     * @example 规则名字
     *
     * @var string
     */
    public $ruleName;

    /**
     * @example 1344383
     *
     * @var int
     */
    public $tenantRamId;

    /**
     * @example 时间窗口
     *
     * @var int
     */
    public $timeWindow;

    /**
     * @example MINUTE
     *
     * @var int
     */
    public $timeWindowUnit;

    /**
     * @example 2020-03-05 15:53:55
     *
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'assignObjectId'       => 'assignObjectId',
        'assignObjectType'     => 'assignObjectType',
        'createTime'           => 'createTime',
        'effection'            => 'effection',
        'enableStatus'         => 'enableStatus',
        'incidentLevel'        => 'incidentLevel',
        'isValid'              => 'isValid',
        'matchCount'           => 'matchCount',
        'monitorSourceNames'   => 'monitorSourceNames',
        'relServiceDeleteType' => 'relServiceDeleteType',
        'relatedServiceId'     => 'relatedServiceId',
        'relatedServiceName'   => 'relatedServiceName',
        'routeRuleId'          => 'routeRuleId',
        'routeType'            => 'routeType',
        'ruleName'             => 'ruleName',
        'tenantRamId'          => 'tenantRamId',
        'timeWindow'           => 'timeWindow',
        'timeWindowUnit'       => 'timeWindowUnit',
        'updateTime'           => 'updateTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->assignObjectId) {
            $res['assignObjectId'] = $this->assignObjectId;
        }
        if (null !== $this->assignObjectType) {
            $res['assignObjectType'] = $this->assignObjectType;
        }
        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }
        if (null !== $this->effection) {
            $res['effection'] = $this->effection;
        }
        if (null !== $this->enableStatus) {
            $res['enableStatus'] = $this->enableStatus;
        }
        if (null !== $this->incidentLevel) {
            $res['incidentLevel'] = $this->incidentLevel;
        }
        if (null !== $this->isValid) {
            $res['isValid'] = $this->isValid;
        }
        if (null !== $this->matchCount) {
            $res['matchCount'] = $this->matchCount;
        }
        if (null !== $this->monitorSourceNames) {
            $res['monitorSourceNames'] = $this->monitorSourceNames;
        }
        if (null !== $this->relServiceDeleteType) {
            $res['relServiceDeleteType'] = $this->relServiceDeleteType;
        }
        if (null !== $this->relatedServiceId) {
            $res['relatedServiceId'] = $this->relatedServiceId;
        }
        if (null !== $this->relatedServiceName) {
            $res['relatedServiceName'] = $this->relatedServiceName;
        }
        if (null !== $this->routeRuleId) {
            $res['routeRuleId'] = $this->routeRuleId;
        }
        if (null !== $this->routeType) {
            $res['routeType'] = $this->routeType;
        }
        if (null !== $this->ruleName) {
            $res['ruleName'] = $this->ruleName;
        }
        if (null !== $this->tenantRamId) {
            $res['tenantRamId'] = $this->tenantRamId;
        }
        if (null !== $this->timeWindow) {
            $res['timeWindow'] = $this->timeWindow;
        }
        if (null !== $this->timeWindowUnit) {
            $res['timeWindowUnit'] = $this->timeWindowUnit;
        }
        if (null !== $this->updateTime) {
            $res['updateTime'] = $this->updateTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['assignObjectId'])) {
            $model->assignObjectId = $map['assignObjectId'];
        }
        if (isset($map['assignObjectType'])) {
            $model->assignObjectType = $map['assignObjectType'];
        }
        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }
        if (isset($map['effection'])) {
            $model->effection = $map['effection'];
        }
        if (isset($map['enableStatus'])) {
            $model->enableStatus = $map['enableStatus'];
        }
        if (isset($map['incidentLevel'])) {
            $model->incidentLevel = $map['incidentLevel'];
        }
        if (isset($map['isValid'])) {
            $model->isValid = $map['isValid'];
        }
        if (isset($map['matchCount'])) {
            $model->matchCount = $map['matchCount'];
        }
        if (isset($map['monitorSourceNames'])) {
            $model->monitorSourceNames = $map['monitorSourceNames'];
        }
        if (isset($map['relServiceDeleteType'])) {
            $model->relServiceDeleteType = $map['relServiceDeleteType'];
        }
        if (isset($map['relatedServiceId'])) {
            $model->relatedServiceId = $map['relatedServiceId'];
        }
        if (isset($map['relatedServiceName'])) {
            $model->relatedServiceName = $map['relatedServiceName'];
        }
        if (isset($map['routeRuleId'])) {
            $model->routeRuleId = $map['routeRuleId'];
        }
        if (isset($map['routeType'])) {
            $model->routeType = $map['routeType'];
        }
        if (isset($map['ruleName'])) {
            $model->ruleName = $map['ruleName'];
        }
        if (isset($map['tenantRamId'])) {
            $model->tenantRamId = $map['tenantRamId'];
        }
        if (isset($map['timeWindow'])) {
            $model->timeWindow = $map['timeWindow'];
        }
        if (isset($map['timeWindowUnit'])) {
            $model->timeWindowUnit = $map['timeWindowUnit'];
        }
        if (isset($map['updateTime'])) {
            $model->updateTime = $map['updateTime'];
        }

        return $model;
    }
}

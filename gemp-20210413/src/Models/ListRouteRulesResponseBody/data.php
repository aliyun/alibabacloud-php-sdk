<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models\ListRouteRulesResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description 事件分派对象ID（服务组ID 或用户ID）
     *
     * @var int
     */
    public $assignObjectId;

    /**
     * @description 事件分派对象类型 SERVICEGROUP 服务组  USER 单个用户
     *
     * @var string
     */
    public $assignObjectType;

    /**
     * @description 创建时间
     *
     * @var string
     */
    public $createTime;

    /**
     * @description 影响程度 LOW-一般 HIGH-严重
     *
     * @var string
     */
    public $effection;

    /**
     * @description 是否启用  DISABLE禁用. ENABLE 启用
     *
     * @var string
     */
    public $enableStatus;

    /**
     * @description 事件级别 P1 P2 P3 P4
     *
     * @var string
     */
    public $incidentLevel;

    /**
     * @description 命中次数
     *
     * @var int
     */
    public $matchCount;

    /**
     * @description 关联服务ID
     *
     * @var int
     */
    public $relatedServiceId;

    /**
     * @description 服务名称
     *
     * @var string
     */
    public $relatedServiceName;

    /**
     * @description 规则ID
     *
     * @var int
     */
    public $routeRuleId;

    /**
     * @description 路由类型：INCIDENT 触发事件 ALERT 仅触发报警
     *
     * @var string
     */
    public $routeType;

    /**
     * @description 规则名称
     *
     * @var string
     */
    public $ruleName;

    /**
     * @description 租户ID
     *
     * @var int
     */
    public $tenantRamId;

    /**
     * @description 时间窗口
     *
     * @var int
     */
    public $timeWindow;

    /**
     * @description 时间窗口单位 MINUTE 分钟  SECOND 秒
     *
     * @var int
     */
    public $timeWindowUnit;

    /**
     * @description 修改时间
     *
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'assignObjectId'     => 'assignObjectId',
        'assignObjectType'   => 'assignObjectType',
        'createTime'         => 'createTime',
        'effection'          => 'effection',
        'enableStatus'       => 'enableStatus',
        'incidentLevel'      => 'incidentLevel',
        'matchCount'         => 'matchCount',
        'relatedServiceId'   => 'relatedServiceId',
        'relatedServiceName' => 'relatedServiceName',
        'routeRuleId'        => 'routeRuleId',
        'routeType'          => 'routeType',
        'ruleName'           => 'ruleName',
        'tenantRamId'        => 'tenantRamId',
        'timeWindow'         => 'timeWindow',
        'timeWindowUnit'     => 'timeWindowUnit',
        'updateTime'         => 'updateTime',
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
        if (null !== $this->matchCount) {
            $res['matchCount'] = $this->matchCount;
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
        if (isset($map['matchCount'])) {
            $model->matchCount = $map['matchCount'];
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

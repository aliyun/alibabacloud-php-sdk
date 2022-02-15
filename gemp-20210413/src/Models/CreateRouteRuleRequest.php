<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models;

use AlibabaCloud\SDK\GEMP\V20210413\Models\CreateRouteRuleRequest\routeChildRules;
use AlibabaCloud\Tea\Model;

class CreateRouteRuleRequest extends Model
{
    /**
     * @description 事件分派对象ID（服务组ID 或用户ID）
     *
     * @var int
     */
    public $assignObjectId;

    /**
     * @description 事件分派对象类型 SERVICEGROUP服务组 USER 单个用户
     *
     * @var string
     */
    public $assignObjectType;

    /**
     * @description 子规则关系AND,OR
     *
     * @var string
     */
    public $childRuleRelation;

    /**
     * @description 幂等号
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description 影响程度 LOW-一般 HIGH-严重
     *
     * @var string
     */
    public $effection;

    /**
     * @description 启用状态
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
     * @description 通知渠道。 SMS 短信  EMAIL 邮件  PHONE电话  WEIXIN_GROUP 企微群 DING_GROUP钉钉群
     *
     * @var string[]
     */
    public $notifyChannels;

    /**
     * @description 关联服务ID
     *
     * @var int
     */
    public $relatedServiceId;

    /**
     * @description 子规则
     *
     * @var routeChildRules[]
     */
    public $routeChildRules;

    /**
     * @description 路由类型：INCIDENT 触发事件 ALERT仅触发报警
     *
     * @var string
     */
    public $routeType;

    /**
     * @description 规则名称
     *
     * @var int[]
     */
    public $ruleName;

    /**
     * @description 时间窗口
     *
     * @var int
     */
    public $timeWindow;

    /**
     * @description 时间窗口单位 MINUTE  分钟  SECOND 秒
     *
     * @var string
     */
    public $timeWindowUnit;
    protected $_name = [
        'assignObjectId'    => 'assignObjectId',
        'assignObjectType'  => 'assignObjectType',
        'childRuleRelation' => 'childRuleRelation',
        'clientToken'       => 'clientToken',
        'effection'         => 'effection',
        'enableStatus'      => 'enableStatus',
        'incidentLevel'     => 'incidentLevel',
        'matchCount'        => 'matchCount',
        'notifyChannels'    => 'notifyChannels',
        'relatedServiceId'  => 'relatedServiceId',
        'routeChildRules'   => 'routeChildRules',
        'routeType'         => 'routeType',
        'ruleName'          => 'ruleName',
        'timeWindow'        => 'timeWindow',
        'timeWindowUnit'    => 'timeWindowUnit',
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
        if (null !== $this->childRuleRelation) {
            $res['childRuleRelation'] = $this->childRuleRelation;
        }
        if (null !== $this->clientToken) {
            $res['clientToken'] = $this->clientToken;
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
        if (null !== $this->notifyChannels) {
            $res['notifyChannels'] = $this->notifyChannels;
        }
        if (null !== $this->relatedServiceId) {
            $res['relatedServiceId'] = $this->relatedServiceId;
        }
        if (null !== $this->routeChildRules) {
            $res['routeChildRules'] = [];
            if (null !== $this->routeChildRules && \is_array($this->routeChildRules)) {
                $n = 0;
                foreach ($this->routeChildRules as $item) {
                    $res['routeChildRules'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->routeType) {
            $res['routeType'] = $this->routeType;
        }
        if (null !== $this->ruleName) {
            $res['ruleName'] = $this->ruleName;
        }
        if (null !== $this->timeWindow) {
            $res['timeWindow'] = $this->timeWindow;
        }
        if (null !== $this->timeWindowUnit) {
            $res['timeWindowUnit'] = $this->timeWindowUnit;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateRouteRuleRequest
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
        if (isset($map['childRuleRelation'])) {
            $model->childRuleRelation = $map['childRuleRelation'];
        }
        if (isset($map['clientToken'])) {
            $model->clientToken = $map['clientToken'];
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
        if (isset($map['notifyChannels'])) {
            if (!empty($map['notifyChannels'])) {
                $model->notifyChannels = $map['notifyChannels'];
            }
        }
        if (isset($map['relatedServiceId'])) {
            $model->relatedServiceId = $map['relatedServiceId'];
        }
        if (isset($map['routeChildRules'])) {
            if (!empty($map['routeChildRules'])) {
                $model->routeChildRules = [];
                $n                      = 0;
                foreach ($map['routeChildRules'] as $item) {
                    $model->routeChildRules[$n++] = null !== $item ? routeChildRules::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['routeType'])) {
            $model->routeType = $map['routeType'];
        }
        if (isset($map['ruleName'])) {
            $model->ruleName = $map['ruleName'];
        }
        if (isset($map['timeWindow'])) {
            $model->timeWindow = $map['timeWindow'];
        }
        if (isset($map['timeWindowUnit'])) {
            $model->timeWindowUnit = $map['timeWindowUnit'];
        }

        return $model;
    }
}

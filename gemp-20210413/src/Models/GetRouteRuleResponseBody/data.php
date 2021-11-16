<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models\GetRouteRuleResponseBody;

use AlibabaCloud\SDK\GEMP\V20210413\Models\GetRouteRuleResponseBody\data\eventRouteChildRules;
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
     * @description 通知对象名称
     *
     * @var string
     */
    public $assignObjectName;

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
     * @description 影响程度  LOW一般  HIGH-严重
     *
     * @var string
     */
    public $effection;

    /**
     * @description 是否启用  DISABLE禁用 ENABLE 启用
     *
     * @var string
     */
    public $enableStatus;

    /**
     * @description 子规则
     *
     * @var eventRouteChildRules[]
     */
    public $eventRouteChildRules;

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
     * @description 通知渠道名称
     *
     * @var string[]
     */
    public $notifyChannelNames;

    /**
     * @description 通知渠道
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
     * @description 关联服务名称
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
     * @description 流转规则名字
     *
     * @var string
     */
    public $ruleName;

    /**
     * @description 时间窗口
     *
     * @var int
     */
    public $timeWindow;

    /**
     * @description 修改时间
     *
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'assignObjectId'       => 'assignObjectId',
        'assignObjectName'     => 'assignObjectName',
        'assignObjectType'     => 'assignObjectType',
        'createTime'           => 'createTime',
        'effection'            => 'effection',
        'enableStatus'         => 'enableStatus',
        'eventRouteChildRules' => 'eventRouteChildRules',
        'incidentLevel'        => 'incidentLevel',
        'matchCount'           => 'matchCount',
        'notifyChannelNames'   => 'notifyChannelNames',
        'notifyChannels'       => 'notifyChannels',
        'relatedServiceId'     => 'relatedServiceId',
        'relatedServiceName'   => 'relatedServiceName',
        'routeRuleId'          => 'routeRuleId',
        'routeType'            => 'routeType',
        'ruleName'             => 'ruleName',
        'timeWindow'           => 'timeWindow',
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
        if (null !== $this->assignObjectName) {
            $res['assignObjectName'] = $this->assignObjectName;
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
        if (null !== $this->eventRouteChildRules) {
            $res['eventRouteChildRules'] = [];
            if (null !== $this->eventRouteChildRules && \is_array($this->eventRouteChildRules)) {
                $n = 0;
                foreach ($this->eventRouteChildRules as $item) {
                    $res['eventRouteChildRules'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->incidentLevel) {
            $res['incidentLevel'] = $this->incidentLevel;
        }
        if (null !== $this->matchCount) {
            $res['matchCount'] = $this->matchCount;
        }
        if (null !== $this->notifyChannelNames) {
            $res['notifyChannelNames'] = $this->notifyChannelNames;
        }
        if (null !== $this->notifyChannels) {
            $res['notifyChannels'] = $this->notifyChannels;
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
        if (null !== $this->timeWindow) {
            $res['timeWindow'] = $this->timeWindow;
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
        if (isset($map['assignObjectName'])) {
            $model->assignObjectName = $map['assignObjectName'];
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
        if (isset($map['eventRouteChildRules'])) {
            if (!empty($map['eventRouteChildRules'])) {
                $model->eventRouteChildRules = [];
                $n                           = 0;
                foreach ($map['eventRouteChildRules'] as $item) {
                    $model->eventRouteChildRules[$n++] = null !== $item ? eventRouteChildRules::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['incidentLevel'])) {
            $model->incidentLevel = $map['incidentLevel'];
        }
        if (isset($map['matchCount'])) {
            $model->matchCount = $map['matchCount'];
        }
        if (isset($map['notifyChannelNames'])) {
            if (!empty($map['notifyChannelNames'])) {
                $model->notifyChannelNames = $map['notifyChannelNames'];
            }
        }
        if (isset($map['notifyChannels'])) {
            if (!empty($map['notifyChannels'])) {
                $model->notifyChannels = $map['notifyChannels'];
            }
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
        if (isset($map['timeWindow'])) {
            $model->timeWindow = $map['timeWindow'];
        }
        if (isset($map['updateTime'])) {
            $model->updateTime = $map['updateTime'];
        }

        return $model;
    }
}

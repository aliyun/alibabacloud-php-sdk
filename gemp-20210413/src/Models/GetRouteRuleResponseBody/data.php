<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models\GetRouteRuleResponseBody;

use AlibabaCloud\SDK\GEMP\V20210413\Models\DataProblemLevelGroupValue;
use AlibabaCloud\SDK\GEMP\V20210413\Models\GetRouteRuleResponseBody\data\eventRouteChildRules;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 1000
     *
     * @var int
     */
    public $assignObjectId;

    /**
     * @example 刘德华
     *
     * @var string
     */
    public $assignObjectName;

    /**
     * @example SERVICEGROUP
     *
     * @var string
     */
    public $assignObjectType;

    /**
     * @example AND、OR
     *
     * @var string
     */
    public $childRuleRelation;

    /**
     * @var string[]
     */
    public $convergenceFields;

    /**
     * @var int
     */
    public $convergenceType;

    /**
     * @var string[]
     */
    public $coverageProblemLevels;

    /**
     * @example 2020-09-08 15:30:30
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
     * @var eventRouteChildRules[]
     */
    public $eventRouteChildRules;

    /**
     * @example P1
     *
     * @var string
     */
    public $incidentLevel;

    /**
     * @example 3
     *
     * @var int
     */
    public $matchCount;

    /**
     * @var string[]
     */
    public $notifyChannelNames;

    /**
     * @var string[]
     */
    public $notifyChannels;

    /**
     * @var int[]
     */
    public $problemEffectionServices;

    /**
     * @var DataProblemLevelGroupValue[]
     */
    public $problemLevelGroup;

    /**
     * @var int
     */
    public $relServiceDeleteType;

    /**
     * @example 1000
     *
     * @var int
     */
    public $relatedServiceId;

    /**
     * @example 冲上云霄
     *
     * @var string
     */
    public $relatedServiceName;

    /**
     * @example 180000000
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
     * @example 规则1
     *
     * @var string
     */
    public $ruleName;

    /**
     * @example 3
     *
     * @var int
     */
    public $timeWindow;

    /**
     * @example 2020-09-08 15:30:30
     *
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'assignObjectId'           => 'assignObjectId',
        'assignObjectName'         => 'assignObjectName',
        'assignObjectType'         => 'assignObjectType',
        'childRuleRelation'        => 'childRuleRelation',
        'convergenceFields'        => 'convergenceFields',
        'convergenceType'          => 'convergenceType',
        'coverageProblemLevels'    => 'coverageProblemLevels',
        'createTime'               => 'createTime',
        'effection'                => 'effection',
        'enableStatus'             => 'enableStatus',
        'eventRouteChildRules'     => 'eventRouteChildRules',
        'incidentLevel'            => 'incidentLevel',
        'matchCount'               => 'matchCount',
        'notifyChannelNames'       => 'notifyChannelNames',
        'notifyChannels'           => 'notifyChannels',
        'problemEffectionServices' => 'problemEffectionServices',
        'problemLevelGroup'        => 'problemLevelGroup',
        'relServiceDeleteType'     => 'relServiceDeleteType',
        'relatedServiceId'         => 'relatedServiceId',
        'relatedServiceName'       => 'relatedServiceName',
        'routeRuleId'              => 'routeRuleId',
        'routeType'                => 'routeType',
        'ruleName'                 => 'ruleName',
        'timeWindow'               => 'timeWindow',
        'updateTime'               => 'updateTime',
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
        if (null !== $this->childRuleRelation) {
            $res['childRuleRelation'] = $this->childRuleRelation;
        }
        if (null !== $this->convergenceFields) {
            $res['convergenceFields'] = $this->convergenceFields;
        }
        if (null !== $this->convergenceType) {
            $res['convergenceType'] = $this->convergenceType;
        }
        if (null !== $this->coverageProblemLevels) {
            $res['coverageProblemLevels'] = $this->coverageProblemLevels;
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
        if (null !== $this->problemEffectionServices) {
            $res['problemEffectionServices'] = $this->problemEffectionServices;
        }
        if (null !== $this->problemLevelGroup) {
            $res['problemLevelGroup'] = [];
            if (null !== $this->problemLevelGroup && \is_array($this->problemLevelGroup)) {
                foreach ($this->problemLevelGroup as $key => $val) {
                    $res['problemLevelGroup'][$key] = null !== $val ? $val->toMap() : $val;
                }
            }
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
        if (isset($map['childRuleRelation'])) {
            $model->childRuleRelation = $map['childRuleRelation'];
        }
        if (isset($map['convergenceFields'])) {
            if (!empty($map['convergenceFields'])) {
                $model->convergenceFields = $map['convergenceFields'];
            }
        }
        if (isset($map['convergenceType'])) {
            $model->convergenceType = $map['convergenceType'];
        }
        if (isset($map['coverageProblemLevels'])) {
            if (!empty($map['coverageProblemLevels'])) {
                $model->coverageProblemLevels = $map['coverageProblemLevels'];
            }
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
        if (isset($map['problemEffectionServices'])) {
            if (!empty($map['problemEffectionServices'])) {
                $model->problemEffectionServices = $map['problemEffectionServices'];
            }
        }
        if (isset($map['problemLevelGroup'])) {
            $model->problemLevelGroup = $map['problemLevelGroup'];
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
        if (isset($map['timeWindow'])) {
            $model->timeWindow = $map['timeWindow'];
        }
        if (isset($map['updateTime'])) {
            $model->updateTime = $map['updateTime'];
        }

        return $model;
    }
}

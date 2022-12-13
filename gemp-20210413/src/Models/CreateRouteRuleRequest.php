<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models;

use AlibabaCloud\SDK\GEMP\V20210413\Models\CreateRouteRuleRequest\routeChildRules;
use AlibabaCloud\Tea\Model;

class CreateRouteRuleRequest extends Model
{
    /**
     * @example 65
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
     * @example AND
     *
     * @var string
     */
    public $childRuleRelation;

    /**
     * @example C4BE3837-1A13-413B-A225-2C88188E8A43
     *
     * @var string
     */
    public $clientToken;

    /**
     * @var string[]
     */
    public $coverageProblemLevels;

    /**
     * @example LOW
     *
     * @var string
     */
    public $effection;

    /**
     * @example false
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
     * @example 3
     *
     * @var int
     */
    public $matchCount;

    /**
     * @var string[]
     */
    public $notifyChannels;

    /**
     * @var int[]
     */
    public $problemEffectionServices;

    /**
     * @var ProblemLevelGroupValue[]
     */
    public $problemLevelGroup;

    /**
     * @example 100
     *
     * @var int
     */
    public $relatedServiceId;

    /**
     * @var routeChildRules[]
     */
    public $routeChildRules;

    /**
     * @example INCIDENT
     *
     * @var string
     */
    public $routeType;

    /**
     * @example 这是一个规则
     *
     * @var string
     */
    public $ruleName;

    /**
     * @example 2
     *
     * @var int
     */
    public $timeWindow;

    /**
     * @example MINUTE
     *
     * @var string
     */
    public $timeWindowUnit;
    protected $_name = [
        'assignObjectId'           => 'assignObjectId',
        'assignObjectType'         => 'assignObjectType',
        'childRuleRelation'        => 'childRuleRelation',
        'clientToken'              => 'clientToken',
        'coverageProblemLevels'    => 'coverageProblemLevels',
        'effection'                => 'effection',
        'enableStatus'             => 'enableStatus',
        'incidentLevel'            => 'incidentLevel',
        'matchCount'               => 'matchCount',
        'notifyChannels'           => 'notifyChannels',
        'problemEffectionServices' => 'problemEffectionServices',
        'problemLevelGroup'        => 'problemLevelGroup',
        'relatedServiceId'         => 'relatedServiceId',
        'routeChildRules'          => 'routeChildRules',
        'routeType'                => 'routeType',
        'ruleName'                 => 'ruleName',
        'timeWindow'               => 'timeWindow',
        'timeWindowUnit'           => 'timeWindowUnit',
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
        if (null !== $this->coverageProblemLevels) {
            $res['coverageProblemLevels'] = $this->coverageProblemLevels;
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
        if (isset($map['coverageProblemLevels'])) {
            if (!empty($map['coverageProblemLevels'])) {
                $model->coverageProblemLevels = $map['coverageProblemLevels'];
            }
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
        if (isset($map['problemEffectionServices'])) {
            if (!empty($map['problemEffectionServices'])) {
                $model->problemEffectionServices = $map['problemEffectionServices'];
            }
        }
        if (isset($map['problemLevelGroup'])) {
            $model->problemLevelGroup = $map['problemLevelGroup'];
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

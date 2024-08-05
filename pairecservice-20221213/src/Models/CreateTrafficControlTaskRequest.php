<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiRecService\V20221213\Models;

use AlibabaCloud\SDK\PaiRecService\V20221213\Models\CreateTrafficControlTaskRequest\trafficControlTargets;
use AlibabaCloud\Tea\Model;

class CreateTrafficControlTaskRequest extends Model
{
    /**
     * @example 1
     *
     * @var string
     */
    public $behaviorTableMetaId;

    /**
     * @example Global
     *
     * @var string
     */
    public $controlGranularity;

    /**
     * @example Guaranteed
     *
     * @var string
     */
    public $controlLogic;

    /**
     * @example Percent
     *
     * @var string
     */
    public $controlType;

    /**
     * @example this is a test task
     *
     * @var string
     */
    public $description;

    /**
     * @example 2024-03-26
     *
     * @var string
     */
    public $endTime;

    /**
     * @example TimeRange
     *
     * @var string
     */
    public $executionTime;

    /**
     * @example pairec-cn-***test
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example [{\\"field\\":\\"status\\",\\"option\\":\\"=\\",\\"value\\":\\"1\\"}]
     *
     * @var string
     */
    public $itemConditionArray;

    /**
     * @example status=1
     *
     * @var string
     */
    public $itemConditionExpress;

    /**
     * @example Array
     *
     * @var string
     */
    public $itemConditionType;

    /**
     * @example 3
     *
     * @var string
     */
    public $itemTableMetaId;

    /**
     * @example task-1
     *
     * @var string
     */
    public $name;

    /**
     * @example 1
     *
     * @var string
     */
    public $sceneId;

    /**
     * @example 2024-03-25
     *
     * @var string
     */
    public $startTime;

    /**
     * @example [{\\"field\\":\\"click\\",\\"option\\":\\"<=\\",\\"value\\":\\"30\\"}]
     *
     * @var string
     */
    public $statisBehaviorConditionArray;

    /**
     * @example click=30
     *
     * @var string
     */
    public $statisBehaviorConditionExpress;

    /**
     * @example Array
     *
     * @var string
     */
    public $statisBehaviorConditionType;

    /**
     * @var trafficControlTargets[]
     */
    public $trafficControlTargets;

    /**
     * @example [{\\"field\\":\\"gender\\",\\"option\\":\\"=\\",\\"value\\":\\"male\\"}]
     *
     * @var string
     */
    public $userConditionArray;

    /**
     * @example age<=30&&(3<=level<=6)&&gender=male
     *
     * @var string
     */
    public $userConditionExpress;

    /**
     * @example Array
     *
     * @var string
     */
    public $userConditionType;

    /**
     * @example 2
     *
     * @var string
     */
    public $userTableMetaId;
    protected $_name = [
        'behaviorTableMetaId'            => 'BehaviorTableMetaId',
        'controlGranularity'             => 'ControlGranularity',
        'controlLogic'                   => 'ControlLogic',
        'controlType'                    => 'ControlType',
        'description'                    => 'Description',
        'endTime'                        => 'EndTime',
        'executionTime'                  => 'ExecutionTime',
        'instanceId'                     => 'InstanceId',
        'itemConditionArray'             => 'ItemConditionArray',
        'itemConditionExpress'           => 'ItemConditionExpress',
        'itemConditionType'              => 'ItemConditionType',
        'itemTableMetaId'                => 'ItemTableMetaId',
        'name'                           => 'Name',
        'sceneId'                        => 'SceneId',
        'startTime'                      => 'StartTime',
        'statisBehaviorConditionArray'   => 'StatisBehaviorConditionArray',
        'statisBehaviorConditionExpress' => 'StatisBehaviorConditionExpress',
        'statisBehaviorConditionType'    => 'StatisBehaviorConditionType',
        'trafficControlTargets'          => 'TrafficControlTargets',
        'userConditionArray'             => 'UserConditionArray',
        'userConditionExpress'           => 'UserConditionExpress',
        'userConditionType'              => 'UserConditionType',
        'userTableMetaId'                => 'UserTableMetaId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->behaviorTableMetaId) {
            $res['BehaviorTableMetaId'] = $this->behaviorTableMetaId;
        }
        if (null !== $this->controlGranularity) {
            $res['ControlGranularity'] = $this->controlGranularity;
        }
        if (null !== $this->controlLogic) {
            $res['ControlLogic'] = $this->controlLogic;
        }
        if (null !== $this->controlType) {
            $res['ControlType'] = $this->controlType;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->executionTime) {
            $res['ExecutionTime'] = $this->executionTime;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->itemConditionArray) {
            $res['ItemConditionArray'] = $this->itemConditionArray;
        }
        if (null !== $this->itemConditionExpress) {
            $res['ItemConditionExpress'] = $this->itemConditionExpress;
        }
        if (null !== $this->itemConditionType) {
            $res['ItemConditionType'] = $this->itemConditionType;
        }
        if (null !== $this->itemTableMetaId) {
            $res['ItemTableMetaId'] = $this->itemTableMetaId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->sceneId) {
            $res['SceneId'] = $this->sceneId;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->statisBehaviorConditionArray) {
            $res['StatisBehaviorConditionArray'] = $this->statisBehaviorConditionArray;
        }
        if (null !== $this->statisBehaviorConditionExpress) {
            $res['StatisBehaviorConditionExpress'] = $this->statisBehaviorConditionExpress;
        }
        if (null !== $this->statisBehaviorConditionType) {
            $res['StatisBehaviorConditionType'] = $this->statisBehaviorConditionType;
        }
        if (null !== $this->trafficControlTargets) {
            $res['TrafficControlTargets'] = [];
            if (null !== $this->trafficControlTargets && \is_array($this->trafficControlTargets)) {
                $n = 0;
                foreach ($this->trafficControlTargets as $item) {
                    $res['TrafficControlTargets'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->userConditionArray) {
            $res['UserConditionArray'] = $this->userConditionArray;
        }
        if (null !== $this->userConditionExpress) {
            $res['UserConditionExpress'] = $this->userConditionExpress;
        }
        if (null !== $this->userConditionType) {
            $res['UserConditionType'] = $this->userConditionType;
        }
        if (null !== $this->userTableMetaId) {
            $res['UserTableMetaId'] = $this->userTableMetaId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateTrafficControlTaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BehaviorTableMetaId'])) {
            $model->behaviorTableMetaId = $map['BehaviorTableMetaId'];
        }
        if (isset($map['ControlGranularity'])) {
            $model->controlGranularity = $map['ControlGranularity'];
        }
        if (isset($map['ControlLogic'])) {
            $model->controlLogic = $map['ControlLogic'];
        }
        if (isset($map['ControlType'])) {
            $model->controlType = $map['ControlType'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['ExecutionTime'])) {
            $model->executionTime = $map['ExecutionTime'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['ItemConditionArray'])) {
            $model->itemConditionArray = $map['ItemConditionArray'];
        }
        if (isset($map['ItemConditionExpress'])) {
            $model->itemConditionExpress = $map['ItemConditionExpress'];
        }
        if (isset($map['ItemConditionType'])) {
            $model->itemConditionType = $map['ItemConditionType'];
        }
        if (isset($map['ItemTableMetaId'])) {
            $model->itemTableMetaId = $map['ItemTableMetaId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['SceneId'])) {
            $model->sceneId = $map['SceneId'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['StatisBehaviorConditionArray'])) {
            $model->statisBehaviorConditionArray = $map['StatisBehaviorConditionArray'];
        }
        if (isset($map['StatisBehaviorConditionExpress'])) {
            $model->statisBehaviorConditionExpress = $map['StatisBehaviorConditionExpress'];
        }
        if (isset($map['StatisBehaviorConditionType'])) {
            $model->statisBehaviorConditionType = $map['StatisBehaviorConditionType'];
        }
        if (isset($map['TrafficControlTargets'])) {
            if (!empty($map['TrafficControlTargets'])) {
                $model->trafficControlTargets = [];
                $n                            = 0;
                foreach ($map['TrafficControlTargets'] as $item) {
                    $model->trafficControlTargets[$n++] = null !== $item ? trafficControlTargets::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['UserConditionArray'])) {
            $model->userConditionArray = $map['UserConditionArray'];
        }
        if (isset($map['UserConditionExpress'])) {
            $model->userConditionExpress = $map['UserConditionExpress'];
        }
        if (isset($map['UserConditionType'])) {
            $model->userConditionType = $map['UserConditionType'];
        }
        if (isset($map['UserTableMetaId'])) {
            $model->userTableMetaId = $map['UserTableMetaId'];
        }

        return $model;
    }
}

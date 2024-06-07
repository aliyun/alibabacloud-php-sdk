<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiRecService\V20221213\Models\ListTrafficControlTasksResponseBody;

use AlibabaCloud\SDK\PaiRecService\V20221213\Models\ListTrafficControlTasksResponseBody\trafficControlTasks\trafficControlTargets;
use AlibabaCloud\Tea\Model;

class trafficControlTasks extends Model
{
    /**
     * @var string
     */
    public $behaviorTableMetaId;

    /**
     * @var string
     */
    public $controlGranularity;

    /**
     * @var string
     */
    public $controlLogic;

    /**
     * @var string
     */
    public $controlType;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var bool
     */
    public $everPublished;

    /**
     * @var string
     */
    public $executionTime;

    /**
     * @var string
     */
    public $gmtCreateTime;

    /**
     * @var string
     */
    public $gmtModifiedTime;

    /**
     * @var string
     */
    public $itemConditionArray;

    /**
     * @var string
     */
    public $itemConditionExpress;

    /**
     * @var string
     */
    public $itemConditionType;

    /**
     * @var string
     */
    public $itemTableMetaId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $prepubStatus;

    /**
     * @var string
     */
    public $productStatus;

    /**
     * @var string
     */
    public $sceneId;

    /**
     * @var string
     */
    public $sceneName;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $statisBahaviorConditionExpress;

    /**
     * @var string
     */
    public $statisBehaviorConditionArray;

    /**
     * @var string
     */
    public $statisBehaviorConditionType;

    /**
     * @var trafficControlTargets[]
     */
    public $trafficControlTargets;

    /**
     * @var string
     */
    public $trafficControlTaskId;

    /**
     * @var string
     */
    public $userConditionArray;

    /**
     * @var string
     */
    public $userConditionExpress;

    /**
     * @var string
     */
    public $userConditionType;

    /**
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
        'everPublished'                  => 'EverPublished',
        'executionTime'                  => 'ExecutionTime',
        'gmtCreateTime'                  => 'GmtCreateTime',
        'gmtModifiedTime'                => 'GmtModifiedTime',
        'itemConditionArray'             => 'ItemConditionArray',
        'itemConditionExpress'           => 'ItemConditionExpress',
        'itemConditionType'              => 'ItemConditionType',
        'itemTableMetaId'                => 'ItemTableMetaId',
        'name'                           => 'Name',
        'prepubStatus'                   => 'PrepubStatus',
        'productStatus'                  => 'ProductStatus',
        'sceneId'                        => 'SceneId',
        'sceneName'                      => 'SceneName',
        'startTime'                      => 'StartTime',
        'statisBahaviorConditionExpress' => 'StatisBahaviorConditionExpress',
        'statisBehaviorConditionArray'   => 'StatisBehaviorConditionArray',
        'statisBehaviorConditionType'    => 'StatisBehaviorConditionType',
        'trafficControlTargets'          => 'TrafficControlTargets',
        'trafficControlTaskId'           => 'TrafficControlTaskId',
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
        if (null !== $this->everPublished) {
            $res['EverPublished'] = $this->everPublished;
        }
        if (null !== $this->executionTime) {
            $res['ExecutionTime'] = $this->executionTime;
        }
        if (null !== $this->gmtCreateTime) {
            $res['GmtCreateTime'] = $this->gmtCreateTime;
        }
        if (null !== $this->gmtModifiedTime) {
            $res['GmtModifiedTime'] = $this->gmtModifiedTime;
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
        if (null !== $this->prepubStatus) {
            $res['PrepubStatus'] = $this->prepubStatus;
        }
        if (null !== $this->productStatus) {
            $res['ProductStatus'] = $this->productStatus;
        }
        if (null !== $this->sceneId) {
            $res['SceneId'] = $this->sceneId;
        }
        if (null !== $this->sceneName) {
            $res['SceneName'] = $this->sceneName;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->statisBahaviorConditionExpress) {
            $res['StatisBahaviorConditionExpress'] = $this->statisBahaviorConditionExpress;
        }
        if (null !== $this->statisBehaviorConditionArray) {
            $res['StatisBehaviorConditionArray'] = $this->statisBehaviorConditionArray;
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
        if (null !== $this->trafficControlTaskId) {
            $res['TrafficControlTaskId'] = $this->trafficControlTaskId;
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
     * @return trafficControlTasks
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
        if (isset($map['EverPublished'])) {
            $model->everPublished = $map['EverPublished'];
        }
        if (isset($map['ExecutionTime'])) {
            $model->executionTime = $map['ExecutionTime'];
        }
        if (isset($map['GmtCreateTime'])) {
            $model->gmtCreateTime = $map['GmtCreateTime'];
        }
        if (isset($map['GmtModifiedTime'])) {
            $model->gmtModifiedTime = $map['GmtModifiedTime'];
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
        if (isset($map['PrepubStatus'])) {
            $model->prepubStatus = $map['PrepubStatus'];
        }
        if (isset($map['ProductStatus'])) {
            $model->productStatus = $map['ProductStatus'];
        }
        if (isset($map['SceneId'])) {
            $model->sceneId = $map['SceneId'];
        }
        if (isset($map['SceneName'])) {
            $model->sceneName = $map['SceneName'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['StatisBahaviorConditionExpress'])) {
            $model->statisBahaviorConditionExpress = $map['StatisBahaviorConditionExpress'];
        }
        if (isset($map['StatisBehaviorConditionArray'])) {
            $model->statisBehaviorConditionArray = $map['StatisBehaviorConditionArray'];
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
        if (isset($map['TrafficControlTaskId'])) {
            $model->trafficControlTaskId = $map['TrafficControlTaskId'];
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

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiRecService\V20221213\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\GetTrafficControlTaskResponseBody\trafficControlTargets;

class GetTrafficControlTaskResponseBody extends Model
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
    public $flinkResourceId;

    /**
     * @var string
     */
    public $flinkResourceName;

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
    public $preExperimentIds;

    /**
     * @var string
     */
    public $prepubStatus;

    /**
     * @var string
     */
    public $prodExperimentIds;

    /**
     * @var string
     */
    public $productStatus;

    /**
     * @var string
     */
    public $requestId;

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
    public $serviceId;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $statisBehaviorConditionArray;

    /**
     * @var string
     */
    public $statisBehaviorConditionExpress;

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
        'behaviorTableMetaId' => 'BehaviorTableMetaId',
        'controlGranularity' => 'ControlGranularity',
        'controlLogic' => 'ControlLogic',
        'controlType' => 'ControlType',
        'description' => 'Description',
        'endTime' => 'EndTime',
        'everPublished' => 'EverPublished',
        'executionTime' => 'ExecutionTime',
        'flinkResourceId' => 'FlinkResourceId',
        'flinkResourceName' => 'FlinkResourceName',
        'gmtCreateTime' => 'GmtCreateTime',
        'gmtModifiedTime' => 'GmtModifiedTime',
        'itemConditionArray' => 'ItemConditionArray',
        'itemConditionExpress' => 'ItemConditionExpress',
        'itemConditionType' => 'ItemConditionType',
        'itemTableMetaId' => 'ItemTableMetaId',
        'name' => 'Name',
        'preExperimentIds' => 'PreExperimentIds',
        'prepubStatus' => 'PrepubStatus',
        'prodExperimentIds' => 'ProdExperimentIds',
        'productStatus' => 'ProductStatus',
        'requestId' => 'RequestId',
        'sceneId' => 'SceneId',
        'sceneName' => 'SceneName',
        'serviceId' => 'ServiceId',
        'startTime' => 'StartTime',
        'statisBehaviorConditionArray' => 'StatisBehaviorConditionArray',
        'statisBehaviorConditionExpress' => 'StatisBehaviorConditionExpress',
        'statisBehaviorConditionType' => 'StatisBehaviorConditionType',
        'trafficControlTargets' => 'TrafficControlTargets',
        'trafficControlTaskId' => 'TrafficControlTaskId',
        'userConditionArray' => 'UserConditionArray',
        'userConditionExpress' => 'UserConditionExpress',
        'userConditionType' => 'UserConditionType',
        'userTableMetaId' => 'UserTableMetaId',
    ];

    public function validate()
    {
        if (\is_array($this->trafficControlTargets)) {
            Model::validateArray($this->trafficControlTargets);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->flinkResourceId) {
            $res['FlinkResourceId'] = $this->flinkResourceId;
        }

        if (null !== $this->flinkResourceName) {
            $res['FlinkResourceName'] = $this->flinkResourceName;
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

        if (null !== $this->preExperimentIds) {
            $res['PreExperimentIds'] = $this->preExperimentIds;
        }

        if (null !== $this->prepubStatus) {
            $res['PrepubStatus'] = $this->prepubStatus;
        }

        if (null !== $this->prodExperimentIds) {
            $res['ProdExperimentIds'] = $this->prodExperimentIds;
        }

        if (null !== $this->productStatus) {
            $res['ProductStatus'] = $this->productStatus;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->sceneId) {
            $res['SceneId'] = $this->sceneId;
        }

        if (null !== $this->sceneName) {
            $res['SceneName'] = $this->sceneName;
        }

        if (null !== $this->serviceId) {
            $res['ServiceId'] = $this->serviceId;
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
            if (\is_array($this->trafficControlTargets)) {
                $res['TrafficControlTargets'] = [];
                $n1 = 0;
                foreach ($this->trafficControlTargets as $item1) {
                    $res['TrafficControlTargets'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

        if (isset($map['FlinkResourceId'])) {
            $model->flinkResourceId = $map['FlinkResourceId'];
        }

        if (isset($map['FlinkResourceName'])) {
            $model->flinkResourceName = $map['FlinkResourceName'];
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

        if (isset($map['PreExperimentIds'])) {
            $model->preExperimentIds = $map['PreExperimentIds'];
        }

        if (isset($map['PrepubStatus'])) {
            $model->prepubStatus = $map['PrepubStatus'];
        }

        if (isset($map['ProdExperimentIds'])) {
            $model->prodExperimentIds = $map['ProdExperimentIds'];
        }

        if (isset($map['ProductStatus'])) {
            $model->productStatus = $map['ProductStatus'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['SceneId'])) {
            $model->sceneId = $map['SceneId'];
        }

        if (isset($map['SceneName'])) {
            $model->sceneName = $map['SceneName'];
        }

        if (isset($map['ServiceId'])) {
            $model->serviceId = $map['ServiceId'];
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
                $n1 = 0;
                foreach ($map['TrafficControlTargets'] as $item1) {
                    $model->trafficControlTargets[$n1] = trafficControlTargets::fromMap($item1);
                    ++$n1;
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

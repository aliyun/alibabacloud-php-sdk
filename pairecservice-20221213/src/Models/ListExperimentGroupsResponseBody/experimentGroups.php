<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiRecService\V20221213\Models\ListExperimentGroupsResponseBody;

use AlibabaCloud\Dara\Model;

class experimentGroups extends Model
{
    /**
     * @var string
     */
    public $config;

    /**
     * @var string
     */
    public $crowdId;

    /**
     * @var string
     */
    public $crowdTargetType;

    /**
     * @var string
     */
    public $debugCrowdId;

    /**
     * @var string
     */
    public $debugUsers;

    /**
     * @var string
     */
    public $description;

    /**
     * @var int
     */
    public $distributionTimeDuration;

    /**
     * @var string
     */
    public $distributionType;

    /**
     * @var string
     */
    public $experimentGroupId;

    /**
     * @var string
     */
    public $filter;

    /**
     * @var string
     */
    public $holdingBuckets;

    /**
     * @var string
     */
    public $laboratoryId;

    /**
     * @var string
     */
    public $layerId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var bool
     */
    public $needAA;

    /**
     * @var string
     */
    public $owner;

    /**
     * @var int
     */
    public $randomFlow;

    /**
     * @var string
     */
    public $reservedBuckets;

    /**
     * @var string
     */
    public $sceneId;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'config' => 'Config',
        'crowdId' => 'CrowdId',
        'crowdTargetType' => 'CrowdTargetType',
        'debugCrowdId' => 'DebugCrowdId',
        'debugUsers' => 'DebugUsers',
        'description' => 'Description',
        'distributionTimeDuration' => 'DistributionTimeDuration',
        'distributionType' => 'DistributionType',
        'experimentGroupId' => 'ExperimentGroupId',
        'filter' => 'Filter',
        'holdingBuckets' => 'HoldingBuckets',
        'laboratoryId' => 'LaboratoryId',
        'layerId' => 'LayerId',
        'name' => 'Name',
        'needAA' => 'NeedAA',
        'owner' => 'Owner',
        'randomFlow' => 'RandomFlow',
        'reservedBuckets' => 'ReservedBuckets',
        'sceneId' => 'SceneId',
        'status' => 'Status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->config) {
            $res['Config'] = $this->config;
        }

        if (null !== $this->crowdId) {
            $res['CrowdId'] = $this->crowdId;
        }

        if (null !== $this->crowdTargetType) {
            $res['CrowdTargetType'] = $this->crowdTargetType;
        }

        if (null !== $this->debugCrowdId) {
            $res['DebugCrowdId'] = $this->debugCrowdId;
        }

        if (null !== $this->debugUsers) {
            $res['DebugUsers'] = $this->debugUsers;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->distributionTimeDuration) {
            $res['DistributionTimeDuration'] = $this->distributionTimeDuration;
        }

        if (null !== $this->distributionType) {
            $res['DistributionType'] = $this->distributionType;
        }

        if (null !== $this->experimentGroupId) {
            $res['ExperimentGroupId'] = $this->experimentGroupId;
        }

        if (null !== $this->filter) {
            $res['Filter'] = $this->filter;
        }

        if (null !== $this->holdingBuckets) {
            $res['HoldingBuckets'] = $this->holdingBuckets;
        }

        if (null !== $this->laboratoryId) {
            $res['LaboratoryId'] = $this->laboratoryId;
        }

        if (null !== $this->layerId) {
            $res['LayerId'] = $this->layerId;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->needAA) {
            $res['NeedAA'] = $this->needAA;
        }

        if (null !== $this->owner) {
            $res['Owner'] = $this->owner;
        }

        if (null !== $this->randomFlow) {
            $res['RandomFlow'] = $this->randomFlow;
        }

        if (null !== $this->reservedBuckets) {
            $res['ReservedBuckets'] = $this->reservedBuckets;
        }

        if (null !== $this->sceneId) {
            $res['SceneId'] = $this->sceneId;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['Config'])) {
            $model->config = $map['Config'];
        }

        if (isset($map['CrowdId'])) {
            $model->crowdId = $map['CrowdId'];
        }

        if (isset($map['CrowdTargetType'])) {
            $model->crowdTargetType = $map['CrowdTargetType'];
        }

        if (isset($map['DebugCrowdId'])) {
            $model->debugCrowdId = $map['DebugCrowdId'];
        }

        if (isset($map['DebugUsers'])) {
            $model->debugUsers = $map['DebugUsers'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['DistributionTimeDuration'])) {
            $model->distributionTimeDuration = $map['DistributionTimeDuration'];
        }

        if (isset($map['DistributionType'])) {
            $model->distributionType = $map['DistributionType'];
        }

        if (isset($map['ExperimentGroupId'])) {
            $model->experimentGroupId = $map['ExperimentGroupId'];
        }

        if (isset($map['Filter'])) {
            $model->filter = $map['Filter'];
        }

        if (isset($map['HoldingBuckets'])) {
            $model->holdingBuckets = $map['HoldingBuckets'];
        }

        if (isset($map['LaboratoryId'])) {
            $model->laboratoryId = $map['LaboratoryId'];
        }

        if (isset($map['LayerId'])) {
            $model->layerId = $map['LayerId'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['NeedAA'])) {
            $model->needAA = $map['NeedAA'];
        }

        if (isset($map['Owner'])) {
            $model->owner = $map['Owner'];
        }

        if (isset($map['RandomFlow'])) {
            $model->randomFlow = $map['RandomFlow'];
        }

        if (isset($map['ReservedBuckets'])) {
            $model->reservedBuckets = $map['ReservedBuckets'];
        }

        if (isset($map['SceneId'])) {
            $model->sceneId = $map['SceneId'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}

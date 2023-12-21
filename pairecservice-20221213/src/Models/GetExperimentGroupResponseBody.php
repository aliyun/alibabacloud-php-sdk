<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiRecService\V20221213\Models;

use AlibabaCloud\Tea\Model;

class GetExperimentGroupResponseBody extends Model
{
    /**
     * @example {"RankBy": "Score"}
     *
     * @var string
     */
    public $config;

    /**
     * @example 3
     *
     * @var string
     */
    public $crowdId;

    /**
     * @example 4
     *
     * @var string
     */
    public $debugCrowdId;

    /**
     * @example 1124512470******,1124512471******,1124512472******
     *
     * @var string
     */
    public $debugUsers;

    /**
     * @example This is a test.
     *
     * @var string
     */
    public $description;

    /**
     * @example 5
     *
     * @var int
     */
    public $distributionTimeDuration;

    /**
     * @example UserId
     *
     * @var string
     */
    public $distributionType;

    /**
     * @example gender=female
     *
     * @var string
     */
    public $filter;

    /**
     * @example 4
     *
     * @var string
     */
    public $laboratoryId;

    /**
     * @example 3
     *
     * @var string
     */
    public $layerId;

    /**
     * @example experiment_group1
     *
     * @var string
     */
    public $name;

    /**
     * @example true
     *
     * @var bool
     */
    public $needAA;

    /**
     * @example 1124512470******
     *
     * @var string
     */
    public $owner;

    /**
     * @description Id of the request
     *
     * @example BDB621CB-A81E-5D39-8793-39A365CBCC74
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 1,2,3,4
     *
     * @var string
     */
    public $reservedBuckets;

    /**
     * @example 1
     *
     * @var string
     */
    public $sceneId;

    /**
     * @example Offline
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'config'                   => 'Config',
        'crowdId'                  => 'CrowdId',
        'debugCrowdId'             => 'DebugCrowdId',
        'debugUsers'               => 'DebugUsers',
        'description'              => 'Description',
        'distributionTimeDuration' => 'DistributionTimeDuration',
        'distributionType'         => 'DistributionType',
        'filter'                   => 'Filter',
        'laboratoryId'             => 'LaboratoryId',
        'layerId'                  => 'LayerId',
        'name'                     => 'Name',
        'needAA'                   => 'NeedAA',
        'owner'                    => 'Owner',
        'requestId'                => 'RequestId',
        'reservedBuckets'          => 'ReservedBuckets',
        'sceneId'                  => 'SceneId',
        'status'                   => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->config) {
            $res['Config'] = $this->config;
        }
        if (null !== $this->crowdId) {
            $res['CrowdId'] = $this->crowdId;
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
        if (null !== $this->filter) {
            $res['Filter'] = $this->filter;
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
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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

    /**
     * @param array $map
     *
     * @return GetExperimentGroupResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Config'])) {
            $model->config = $map['Config'];
        }
        if (isset($map['CrowdId'])) {
            $model->crowdId = $map['CrowdId'];
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
        if (isset($map['Filter'])) {
            $model->filter = $map['Filter'];
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
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

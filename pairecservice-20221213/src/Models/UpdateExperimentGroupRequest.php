<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiRecService\V20221213\Models;

use AlibabaCloud\Tea\Model;

class UpdateExperimentGroupRequest extends Model
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
     * @var string
     */
    public $crowdTargetType;

    /**
     * @example 3
     *
     * @var string
     */
    public $debugCrowdId;

    /**
     * @example user1,user2,user3
     *
     * @var string
     */
    public $debugUsers;

    /**
     * @description This parameter is required.
     *
     * @example This is a test.
     *
     * @var string
     */
    public $description;

    /**
     * @example 3
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
     * @example gender=male
     *
     * @var string
     */
    public $filter;

    /**
     * @description This parameter is required.
     *
     * @example pairec-cn-abcdefg1234
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description This parameter is required.
     *
     * @example 3
     *
     * @var string
     */
    public $layerId;

    /**
     * @description This parameter is required.
     *
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
     * @var int
     */
    public $randomFlow;

    /**
     * @example 1,2,3
     *
     * @var string
     */
    public $reservcedBuckets;
    protected $_name = [
        'config'                   => 'Config',
        'crowdId'                  => 'CrowdId',
        'crowdTargetType'          => 'CrowdTargetType',
        'debugCrowdId'             => 'DebugCrowdId',
        'debugUsers'               => 'DebugUsers',
        'description'              => 'Description',
        'distributionTimeDuration' => 'DistributionTimeDuration',
        'distributionType'         => 'DistributionType',
        'filter'                   => 'Filter',
        'instanceId'               => 'InstanceId',
        'layerId'                  => 'LayerId',
        'name'                     => 'Name',
        'needAA'                   => 'NeedAA',
        'randomFlow'               => 'RandomFlow',
        'reservcedBuckets'         => 'ReservcedBuckets',
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
        if (null !== $this->filter) {
            $res['Filter'] = $this->filter;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
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
        if (null !== $this->randomFlow) {
            $res['RandomFlow'] = $this->randomFlow;
        }
        if (null !== $this->reservcedBuckets) {
            $res['ReservcedBuckets'] = $this->reservcedBuckets;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateExperimentGroupRequest
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
        if (isset($map['Filter'])) {
            $model->filter = $map['Filter'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
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
        if (isset($map['RandomFlow'])) {
            $model->randomFlow = $map['RandomFlow'];
        }
        if (isset($map['ReservcedBuckets'])) {
            $model->reservcedBuckets = $map['ReservcedBuckets'];
        }

        return $model;
    }
}

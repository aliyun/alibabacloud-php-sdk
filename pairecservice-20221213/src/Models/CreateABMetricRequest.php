<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiRecService\V20221213\Models;

use AlibabaCloud\Tea\Model;

class CreateABMetricRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example sum(click_cnt)
     *
     * @var string
     */
    public $definition;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $description;

    /**
     * @description This parameter is required.
     *
     * @example pairec-cn-test1
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example 2
     *
     * @var string
     */
    public $leftMetricId;

    /**
     * @description This parameter is required.
     *
     * @example pv
     *
     * @var string
     */
    public $name;

    /**
     * @example Division
     *
     * @var string
     */
    public $operator;

    /**
     * @description This parameter is required.
     *
     * @example false
     *
     * @var bool
     */
    public $realtime;

    /**
     * @example 3
     *
     * @var string
     */
    public $resultResourceId;

    /**
     * @example 3
     *
     * @var string
     */
    public $rightMetricId;

    /**
     * @description This parameter is required.
     *
     * @example 1
     *
     * @var string
     */
    public $sceneId;

    /**
     * @example 1
     *
     * @var int
     */
    public $statisticsCycle;

    /**
     * @description This parameter is required.
     *
     * @example 2
     *
     * @var string
     */
    public $tableMetaId;

    /**
     * @description This parameter is required.
     *
     * @example Single
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'definition'       => 'Definition',
        'description'      => 'Description',
        'instanceId'       => 'InstanceId',
        'leftMetricId'     => 'LeftMetricId',
        'name'             => 'Name',
        'operator'         => 'Operator',
        'realtime'         => 'Realtime',
        'resultResourceId' => 'ResultResourceId',
        'rightMetricId'    => 'RightMetricId',
        'sceneId'          => 'SceneId',
        'statisticsCycle'  => 'StatisticsCycle',
        'tableMetaId'      => 'TableMetaId',
        'type'             => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->definition) {
            $res['Definition'] = $this->definition;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->leftMetricId) {
            $res['LeftMetricId'] = $this->leftMetricId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->operator) {
            $res['Operator'] = $this->operator;
        }
        if (null !== $this->realtime) {
            $res['Realtime'] = $this->realtime;
        }
        if (null !== $this->resultResourceId) {
            $res['ResultResourceId'] = $this->resultResourceId;
        }
        if (null !== $this->rightMetricId) {
            $res['RightMetricId'] = $this->rightMetricId;
        }
        if (null !== $this->sceneId) {
            $res['SceneId'] = $this->sceneId;
        }
        if (null !== $this->statisticsCycle) {
            $res['StatisticsCycle'] = $this->statisticsCycle;
        }
        if (null !== $this->tableMetaId) {
            $res['TableMetaId'] = $this->tableMetaId;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateABMetricRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Definition'])) {
            $model->definition = $map['Definition'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['LeftMetricId'])) {
            $model->leftMetricId = $map['LeftMetricId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Operator'])) {
            $model->operator = $map['Operator'];
        }
        if (isset($map['Realtime'])) {
            $model->realtime = $map['Realtime'];
        }
        if (isset($map['ResultResourceId'])) {
            $model->resultResourceId = $map['ResultResourceId'];
        }
        if (isset($map['RightMetricId'])) {
            $model->rightMetricId = $map['RightMetricId'];
        }
        if (isset($map['SceneId'])) {
            $model->sceneId = $map['SceneId'];
        }
        if (isset($map['StatisticsCycle'])) {
            $model->statisticsCycle = $map['StatisticsCycle'];
        }
        if (isset($map['TableMetaId'])) {
            $model->tableMetaId = $map['TableMetaId'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}

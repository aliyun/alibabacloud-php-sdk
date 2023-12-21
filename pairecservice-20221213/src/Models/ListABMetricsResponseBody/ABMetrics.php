<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiRecService\V20221213\Models\ListABMetricsResponseBody;

use AlibabaCloud\Tea\Model;

class ABMetrics extends Model
{
    /**
     * @example 1
     *
     * @var string
     */
    public $ABMetricId;

    /**
     * @example sum(click_cnt)
     *
     * @var string
     */
    public $definition;

    /**
     * @var string
     */
    public $description;

    /**
     * @example 3
     *
     * @var string
     */
    public $leftMetricId;

    /**
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
     * @example false
     *
     * @var string
     */
    public $realtime;

    /**
     * @example 3
     *
     * @var string
     */
    public $resultResourceId;

    /**
     * @example 2
     *
     * @var string
     */
    public $resultTableMetaId;

    /**
     * @example 2
     *
     * @var string
     */
    public $rightMetricId;

    /**
     * @example 1
     *
     * @var string
     */
    public $sceneId;

    /**
     * @example home_feed
     *
     * @var string
     */
    public $sceneName;

    /**
     * @example 1
     *
     * @var int
     */
    public $statisticsCycle;

    /**
     * @example 1
     *
     * @var string
     */
    public $tableMetaId;

    /**
     * @example Single
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'ABMetricId'        => 'ABMetricId',
        'definition'        => 'Definition',
        'description'       => 'Description',
        'leftMetricId'      => 'LeftMetricId',
        'name'              => 'Name',
        'operator'          => 'Operator',
        'realtime'          => 'Realtime',
        'resultResourceId'  => 'ResultResourceId',
        'resultTableMetaId' => 'ResultTableMetaId',
        'rightMetricId'     => 'RightMetricId',
        'sceneId'           => 'SceneId',
        'sceneName'         => 'SceneName',
        'statisticsCycle'   => 'StatisticsCycle',
        'tableMetaId'       => 'TableMetaId',
        'type'              => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ABMetricId) {
            $res['ABMetricId'] = $this->ABMetricId;
        }
        if (null !== $this->definition) {
            $res['Definition'] = $this->definition;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
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
        if (null !== $this->resultTableMetaId) {
            $res['ResultTableMetaId'] = $this->resultTableMetaId;
        }
        if (null !== $this->rightMetricId) {
            $res['RightMetricId'] = $this->rightMetricId;
        }
        if (null !== $this->sceneId) {
            $res['SceneId'] = $this->sceneId;
        }
        if (null !== $this->sceneName) {
            $res['SceneName'] = $this->sceneName;
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
     * @return ABMetrics
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ABMetricId'])) {
            $model->ABMetricId = $map['ABMetricId'];
        }
        if (isset($map['Definition'])) {
            $model->definition = $map['Definition'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
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
        if (isset($map['ResultTableMetaId'])) {
            $model->resultTableMetaId = $map['ResultTableMetaId'];
        }
        if (isset($map['RightMetricId'])) {
            $model->rightMetricId = $map['RightMetricId'];
        }
        if (isset($map['SceneId'])) {
            $model->sceneId = $map['SceneId'];
        }
        if (isset($map['SceneName'])) {
            $model->sceneName = $map['SceneName'];
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

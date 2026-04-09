<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiRecService\V20221213\Models;

use AlibabaCloud\Dara\Model;

class CreateABMetricRequest extends Model
{
    /**
     * @var bool
     */
    public $aggregationByUser;

    /**
     * @var string
     */
    public $definition;

    /**
     * @var string
     */
    public $denominator;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var bool
     */
    public $isBinomialDistribution;

    /**
     * @var string
     */
    public $leftMetricId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var bool
     */
    public $needSignificance;

    /**
     * @var string
     */
    public $numerator;

    /**
     * @var string
     */
    public $operator;

    /**
     * @var bool
     */
    public $realtime;

    /**
     * @var string
     */
    public $resultResourceId;

    /**
     * @var string
     */
    public $rightMetricId;

    /**
     * @var string
     */
    public $sceneId;

    /**
     * @var int
     */
    public $statisticsCycle;

    /**
     * @var string
     */
    public $tableMetaId;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'aggregationByUser' => 'AggregationByUser',
        'definition' => 'Definition',
        'denominator' => 'Denominator',
        'description' => 'Description',
        'instanceId' => 'InstanceId',
        'isBinomialDistribution' => 'IsBinomialDistribution',
        'leftMetricId' => 'LeftMetricId',
        'name' => 'Name',
        'needSignificance' => 'NeedSignificance',
        'numerator' => 'Numerator',
        'operator' => 'Operator',
        'realtime' => 'Realtime',
        'resultResourceId' => 'ResultResourceId',
        'rightMetricId' => 'RightMetricId',
        'sceneId' => 'SceneId',
        'statisticsCycle' => 'StatisticsCycle',
        'tableMetaId' => 'TableMetaId',
        'type' => 'Type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aggregationByUser) {
            $res['AggregationByUser'] = $this->aggregationByUser;
        }

        if (null !== $this->definition) {
            $res['Definition'] = $this->definition;
        }

        if (null !== $this->denominator) {
            $res['Denominator'] = $this->denominator;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->isBinomialDistribution) {
            $res['IsBinomialDistribution'] = $this->isBinomialDistribution;
        }

        if (null !== $this->leftMetricId) {
            $res['LeftMetricId'] = $this->leftMetricId;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->needSignificance) {
            $res['NeedSignificance'] = $this->needSignificance;
        }

        if (null !== $this->numerator) {
            $res['Numerator'] = $this->numerator;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AggregationByUser'])) {
            $model->aggregationByUser = $map['AggregationByUser'];
        }

        if (isset($map['Definition'])) {
            $model->definition = $map['Definition'];
        }

        if (isset($map['Denominator'])) {
            $model->denominator = $map['Denominator'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['IsBinomialDistribution'])) {
            $model->isBinomialDistribution = $map['IsBinomialDistribution'];
        }

        if (isset($map['LeftMetricId'])) {
            $model->leftMetricId = $map['LeftMetricId'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['NeedSignificance'])) {
            $model->needSignificance = $map['NeedSignificance'];
        }

        if (isset($map['Numerator'])) {
            $model->numerator = $map['Numerator'];
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

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiRecService\V20221213\Models;

use AlibabaCloud\Dara\Model;

class GetABMetricResponseBody extends Model
{
    /**
     * @var string
     */
    public $definition;
    /**
     * @var string
     */
    public $description;
    /**
     * @var string
     */
    public $leftMetricId;
    /**
     * @var string
     */
    public $name;
    /**
     * @var string
     */
    public $operator;
    /**
     * @var string
     */
    public $realtime;
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var string
     */
    public $resultResourceId;
    /**
     * @var string
     */
    public $resultTableMetaId;
    /**
     * @var string
     */
    public $rightMetricId;
    /**
     * @var string
     */
    public $sceneId;
    /**
     * @var string
     */
    public $sceneName;
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
        'definition'        => 'Definition',
        'description'       => 'Description',
        'leftMetricId'      => 'LeftMetricId',
        'name'              => 'Name',
        'operator'          => 'Operator',
        'realtime'          => 'Realtime',
        'requestId'         => 'RequestId',
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
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
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

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
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

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
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

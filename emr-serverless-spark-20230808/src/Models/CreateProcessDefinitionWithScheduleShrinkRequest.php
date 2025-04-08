<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models;

use AlibabaCloud\Dara\Model;

class CreateProcessDefinitionWithScheduleShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $alertEmailAddress;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $executionType;

    /**
     * @var string
     */
    public $globalParamsShrink;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $productNamespace;

    /**
     * @var bool
     */
    public $publish;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceQueue;

    /**
     * @var int
     */
    public $retryTimes;

    /**
     * @var string
     */
    public $runAs;

    /**
     * @var string
     */
    public $scheduleShrink;

    /**
     * @var string
     */
    public $tagsShrink;

    /**
     * @var string
     */
    public $taskDefinitionJsonShrink;

    /**
     * @var int
     */
    public $taskParallelism;

    /**
     * @var string
     */
    public $taskRelationJsonShrink;

    /**
     * @var int
     */
    public $timeout;
    protected $_name = [
        'alertEmailAddress' => 'alertEmailAddress',
        'description' => 'description',
        'executionType' => 'executionType',
        'globalParamsShrink' => 'globalParams',
        'name' => 'name',
        'productNamespace' => 'productNamespace',
        'publish' => 'publish',
        'regionId' => 'regionId',
        'resourceQueue' => 'resourceQueue',
        'retryTimes' => 'retryTimes',
        'runAs' => 'runAs',
        'scheduleShrink' => 'schedule',
        'tagsShrink' => 'tags',
        'taskDefinitionJsonShrink' => 'taskDefinitionJson',
        'taskParallelism' => 'taskParallelism',
        'taskRelationJsonShrink' => 'taskRelationJson',
        'timeout' => 'timeout',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->alertEmailAddress) {
            $res['alertEmailAddress'] = $this->alertEmailAddress;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->executionType) {
            $res['executionType'] = $this->executionType;
        }

        if (null !== $this->globalParamsShrink) {
            $res['globalParams'] = $this->globalParamsShrink;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->productNamespace) {
            $res['productNamespace'] = $this->productNamespace;
        }

        if (null !== $this->publish) {
            $res['publish'] = $this->publish;
        }

        if (null !== $this->regionId) {
            $res['regionId'] = $this->regionId;
        }

        if (null !== $this->resourceQueue) {
            $res['resourceQueue'] = $this->resourceQueue;
        }

        if (null !== $this->retryTimes) {
            $res['retryTimes'] = $this->retryTimes;
        }

        if (null !== $this->runAs) {
            $res['runAs'] = $this->runAs;
        }

        if (null !== $this->scheduleShrink) {
            $res['schedule'] = $this->scheduleShrink;
        }

        if (null !== $this->tagsShrink) {
            $res['tags'] = $this->tagsShrink;
        }

        if (null !== $this->taskDefinitionJsonShrink) {
            $res['taskDefinitionJson'] = $this->taskDefinitionJsonShrink;
        }

        if (null !== $this->taskParallelism) {
            $res['taskParallelism'] = $this->taskParallelism;
        }

        if (null !== $this->taskRelationJsonShrink) {
            $res['taskRelationJson'] = $this->taskRelationJsonShrink;
        }

        if (null !== $this->timeout) {
            $res['timeout'] = $this->timeout;
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
        if (isset($map['alertEmailAddress'])) {
            $model->alertEmailAddress = $map['alertEmailAddress'];
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['executionType'])) {
            $model->executionType = $map['executionType'];
        }

        if (isset($map['globalParams'])) {
            $model->globalParamsShrink = $map['globalParams'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['productNamespace'])) {
            $model->productNamespace = $map['productNamespace'];
        }

        if (isset($map['publish'])) {
            $model->publish = $map['publish'];
        }

        if (isset($map['regionId'])) {
            $model->regionId = $map['regionId'];
        }

        if (isset($map['resourceQueue'])) {
            $model->resourceQueue = $map['resourceQueue'];
        }

        if (isset($map['retryTimes'])) {
            $model->retryTimes = $map['retryTimes'];
        }

        if (isset($map['runAs'])) {
            $model->runAs = $map['runAs'];
        }

        if (isset($map['schedule'])) {
            $model->scheduleShrink = $map['schedule'];
        }

        if (isset($map['tags'])) {
            $model->tagsShrink = $map['tags'];
        }

        if (isset($map['taskDefinitionJson'])) {
            $model->taskDefinitionJsonShrink = $map['taskDefinitionJson'];
        }

        if (isset($map['taskParallelism'])) {
            $model->taskParallelism = $map['taskParallelism'];
        }

        if (isset($map['taskRelationJson'])) {
            $model->taskRelationJsonShrink = $map['taskRelationJson'];
        }

        if (isset($map['timeout'])) {
            $model->timeout = $map['timeout'];
        }

        return $model;
    }
}

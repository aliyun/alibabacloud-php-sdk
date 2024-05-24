<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devs\V20230714\Models;

use AlibabaCloud\Tea\Model;

class PipelineTrigger extends Model
{
    /**
     * @example 2021-11-19T09:34:38Z
     *
     * @var string
     */
    public $createdTime;

    /**
     * @example 2021-11-19T09:34:38Z
     *
     * @var string
     */
    public $deletionTime;

    /**
     * @example PipelineTrigger example.
     *
     * @var string
     */
    public $description;

    /**
     * @example 1
     *
     * @var int
     */
    public $generation;

    /**
     * @example PipelineTrigger
     *
     * @var string
     */
    public $kind;

    /**
     * @var string[]
     */
    public $labels;

    /**
     * @description This parameter is required.
     *
     * @example my-pipeline-trigger
     *
     * @var string
     */
    public $name;

    /**
     * @description This parameter is required.
     *
     * @example my-project
     *
     * @var string
     */
    public $projectName;

    /**
     * @example 1
     *
     * @var int
     */
    public $resourceVersion;

    /**
     * @var PipelineTriggerSpec
     */
    public $spec;

    /**
     * @example 1455541096***548
     *
     * @var string
     */
    public $uid;
    protected $_name = [
        'createdTime'     => 'createdTime',
        'deletionTime'    => 'deletionTime',
        'description'     => 'description',
        'generation'      => 'generation',
        'kind'            => 'kind',
        'labels'          => 'labels',
        'name'            => 'name',
        'projectName'     => 'projectName',
        'resourceVersion' => 'resourceVersion',
        'spec'            => 'spec',
        'uid'             => 'uid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createdTime) {
            $res['createdTime'] = $this->createdTime;
        }
        if (null !== $this->deletionTime) {
            $res['deletionTime'] = $this->deletionTime;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->generation) {
            $res['generation'] = $this->generation;
        }
        if (null !== $this->kind) {
            $res['kind'] = $this->kind;
        }
        if (null !== $this->labels) {
            $res['labels'] = $this->labels;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->projectName) {
            $res['projectName'] = $this->projectName;
        }
        if (null !== $this->resourceVersion) {
            $res['resourceVersion'] = $this->resourceVersion;
        }
        if (null !== $this->spec) {
            $res['spec'] = null !== $this->spec ? $this->spec->toMap() : null;
        }
        if (null !== $this->uid) {
            $res['uid'] = $this->uid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PipelineTrigger
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['createdTime'])) {
            $model->createdTime = $map['createdTime'];
        }
        if (isset($map['deletionTime'])) {
            $model->deletionTime = $map['deletionTime'];
        }
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['generation'])) {
            $model->generation = $map['generation'];
        }
        if (isset($map['kind'])) {
            $model->kind = $map['kind'];
        }
        if (isset($map['labels'])) {
            $model->labels = $map['labels'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['projectName'])) {
            $model->projectName = $map['projectName'];
        }
        if (isset($map['resourceVersion'])) {
            $model->resourceVersion = $map['resourceVersion'];
        }
        if (isset($map['spec'])) {
            $model->spec = PipelineTriggerSpec::fromMap($map['spec']);
        }
        if (isset($map['uid'])) {
            $model->uid = $map['uid'];
        }

        return $model;
    }
}

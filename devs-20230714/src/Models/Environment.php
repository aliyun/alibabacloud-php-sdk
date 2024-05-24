<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devs\V20230714\Models;

use AlibabaCloud\Tea\Model;

class Environment extends Model
{
    /**
     * @example 2021-11-19T09:34:38Z
     *
     * @var string
     */
    public $createdTime;

    /**
     * @example test env
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
     * @example Environment
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
     * @example demo-env
     *
     * @var string
     */
    public $name;

    /**
     * @example demo-project
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
     * @description This parameter is required.
     *
     * @var EnvironmentSpec
     */
    public $spec;

    /**
     * @var EnvironmentStatus
     */
    public $status;

    /**
     * @example 1455541096***548
     *
     * @var string
     */
    public $uid;
    protected $_name = [
        'createdTime'     => 'createdTime',
        'description'     => 'description',
        'generation'      => 'generation',
        'kind'            => 'kind',
        'labels'          => 'labels',
        'name'            => 'name',
        'projectName'     => 'projectName',
        'resourceVersion' => 'resourceVersion',
        'spec'            => 'spec',
        'status'          => 'status',
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
        if (null !== $this->status) {
            $res['status'] = null !== $this->status ? $this->status->toMap() : null;
        }
        if (null !== $this->uid) {
            $res['uid'] = $this->uid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return Environment
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['createdTime'])) {
            $model->createdTime = $map['createdTime'];
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
            $model->spec = EnvironmentSpec::fromMap($map['spec']);
        }
        if (isset($map['status'])) {
            $model->status = EnvironmentStatus::fromMap($map['status']);
        }
        if (isset($map['uid'])) {
            $model->uid = $map['uid'];
        }

        return $model;
    }
}

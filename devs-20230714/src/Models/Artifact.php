<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devs\V20230714\Models;

use AlibabaCloud\Dara\Model;

class Artifact extends Model
{
    /**
     * @var string
     */
    public $createdTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @var int
     */
    public $generation;

    /**
     * @var string
     */
    public $kind;

    /**
     * @var string[]
     */
    public $labels;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $resourceVersion;

    /**
     * @var ArtifactSpec
     */
    public $spec;

    /**
     * @var ArtifactStatus
     */
    public $status;

    /**
     * @var string
     */
    public $uid;

    /**
     * @var string
     */
    public $updatedTime;
    protected $_name = [
        'createdTime' => 'createdTime',
        'description' => 'description',
        'generation' => 'generation',
        'kind' => 'kind',
        'labels' => 'labels',
        'name' => 'name',
        'resourceVersion' => 'resourceVersion',
        'spec' => 'spec',
        'status' => 'status',
        'uid' => 'uid',
        'updatedTime' => 'updatedTime',
    ];

    public function validate()
    {
        if (\is_array($this->labels)) {
            Model::validateArray($this->labels);
        }
        if (null !== $this->spec) {
            $this->spec->validate();
        }
        if (null !== $this->status) {
            $this->status->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->labels)) {
                $res['labels'] = [];
                foreach ($this->labels as $key1 => $value1) {
                    $res['labels'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->resourceVersion) {
            $res['resourceVersion'] = $this->resourceVersion;
        }

        if (null !== $this->spec) {
            $res['spec'] = null !== $this->spec ? $this->spec->toArray($noStream) : $this->spec;
        }

        if (null !== $this->status) {
            $res['status'] = null !== $this->status ? $this->status->toArray($noStream) : $this->status;
        }

        if (null !== $this->uid) {
            $res['uid'] = $this->uid;
        }

        if (null !== $this->updatedTime) {
            $res['updatedTime'] = $this->updatedTime;
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
            if (!empty($map['labels'])) {
                $model->labels = [];
                foreach ($map['labels'] as $key1 => $value1) {
                    $model->labels[$key1] = $value1;
                }
            }
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['resourceVersion'])) {
            $model->resourceVersion = $map['resourceVersion'];
        }

        if (isset($map['spec'])) {
            $model->spec = ArtifactSpec::fromMap($map['spec']);
        }

        if (isset($map['status'])) {
            $model->status = ArtifactStatus::fromMap($map['status']);
        }

        if (isset($map['uid'])) {
            $model->uid = $map['uid'];
        }

        if (isset($map['updatedTime'])) {
            $model->updatedTime = $map['updatedTime'];
        }

        return $model;
    }
}

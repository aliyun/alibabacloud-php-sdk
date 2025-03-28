<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devs\V20230714\Models;

use AlibabaCloud\Dara\Model;

class TaskTemplate extends Model
{
    /**
     * @var string
     */
    public $createdTime;

    /**
     * @var string
     */
    public $deletionTime;

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
     * @var TaskTemplateSpec
     */
    public $spec;

    /**
     * @var string
     */
    public $uid;
    protected $_name = [
        'createdTime' => 'createdTime',
        'deletionTime' => 'deletionTime',
        'description' => 'description',
        'generation' => 'generation',
        'kind' => 'kind',
        'labels' => 'labels',
        'name' => 'name',
        'resourceVersion' => 'resourceVersion',
        'spec' => 'spec',
        'uid' => 'uid',
    ];

    public function validate()
    {
        if (\is_array($this->labels)) {
            Model::validateArray($this->labels);
        }
        if (null !== $this->spec) {
            $this->spec->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->uid) {
            $res['uid'] = $this->uid;
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
            $model->spec = TaskTemplateSpec::fromMap($map['spec']);
        }

        if (isset($map['uid'])) {
            $model->uid = $map['uid'];
        }

        return $model;
    }
}

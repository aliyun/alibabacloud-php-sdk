<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devs\V20230714\Models;

use AlibabaCloud\Dara\Model;

class Toolset extends Model
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
     * @var ToolsetSpec
     */
    public $spec;

    /**
     * @var ToolsetStatus
     */
    public $status;

    /**
     * @var string
     */
    public $uid;
    protected $_name = [
        'createdTime' => 'createdTime',
        'description' => 'description',
        'kind' => 'kind',
        'labels' => 'labels',
        'name' => 'name',
        'spec' => 'spec',
        'status' => 'status',
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

        if (null !== $this->spec) {
            $res['spec'] = null !== $this->spec ? $this->spec->toArray($noStream) : $this->spec;
        }

        if (null !== $this->status) {
            $res['status'] = null !== $this->status ? $this->status->toArray($noStream) : $this->status;
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

        if (isset($map['description'])) {
            $model->description = $map['description'];
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

        if (isset($map['spec'])) {
            $model->spec = ToolsetSpec::fromMap($map['spec']);
        }

        if (isset($map['status'])) {
            $model->status = ToolsetStatus::fromMap($map['status']);
        }

        if (isset($map['uid'])) {
            $model->uid = $map['uid'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models\UpdateDataPipelineResponseBody\pipeline\outputs\processors\config\scope\conditions;

use AlibabaCloud\Dara\Model;

class field extends Model
{
    /**
     * @var string
     */
    public $container;

    /**
     * @var string
     */
    public $kind;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string[]
     */
    public $path;
    protected $_name = [
        'container' => 'container',
        'kind' => 'kind',
        'name' => 'name',
        'path' => 'path',
    ];

    public function validate()
    {
        if (\is_array($this->path)) {
            Model::validateArray($this->path);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->container) {
            $res['container'] = $this->container;
        }

        if (null !== $this->kind) {
            $res['kind'] = $this->kind;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->path) {
            if (\is_array($this->path)) {
                $res['path'] = [];
                $n1 = 0;
                foreach ($this->path as $item1) {
                    $res['path'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['container'])) {
            $model->container = $map['container'];
        }

        if (isset($map['kind'])) {
            $model->kind = $map['kind'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['path'])) {
            if (!empty($map['path'])) {
                $model->path = [];
                $n1 = 0;
                foreach ($map['path'] as $item1) {
                    $model->path[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

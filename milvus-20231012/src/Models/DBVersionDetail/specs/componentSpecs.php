<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Milvus\V20231012\Models\DBVersionDetail\specs;

use AlibabaCloud\Dara\Model;

class componentSpecs extends Model
{
    /**
     * @var int
     */
    public $defaultReplicas;

    /**
     * @var int
     */
    public $maxReplicas;

    /**
     * @var int
     */
    public $minReplicas;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string[]
     */
    public $specs;

    /**
     * @var int
     */
    public $step;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'defaultReplicas' => 'defaultReplicas',
        'maxReplicas' => 'maxReplicas',
        'minReplicas' => 'minReplicas',
        'name' => 'name',
        'specs' => 'specs',
        'step' => 'step',
        'type' => 'type',
    ];

    public function validate()
    {
        if (\is_array($this->specs)) {
            Model::validateArray($this->specs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->defaultReplicas) {
            $res['defaultReplicas'] = $this->defaultReplicas;
        }

        if (null !== $this->maxReplicas) {
            $res['maxReplicas'] = $this->maxReplicas;
        }

        if (null !== $this->minReplicas) {
            $res['minReplicas'] = $this->minReplicas;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->specs) {
            if (\is_array($this->specs)) {
                $res['specs'] = [];
                $n1 = 0;
                foreach ($this->specs as $item1) {
                    $res['specs'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->step) {
            $res['step'] = $this->step;
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
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
        if (isset($map['defaultReplicas'])) {
            $model->defaultReplicas = $map['defaultReplicas'];
        }

        if (isset($map['maxReplicas'])) {
            $model->maxReplicas = $map['maxReplicas'];
        }

        if (isset($map['minReplicas'])) {
            $model->minReplicas = $map['minReplicas'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['specs'])) {
            if (!empty($map['specs'])) {
                $model->specs = [];
                $n1 = 0;
                foreach ($map['specs'] as $item1) {
                    $model->specs[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['step'])) {
            $model->step = $map['step'];
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}

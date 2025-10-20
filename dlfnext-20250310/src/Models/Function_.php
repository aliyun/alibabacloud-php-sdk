<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DlfNext\V20250310\Models;

use AlibabaCloud\Dara\Model;

class Function_ extends Model
{
    /**
     * @var string
     */
    public $comment;

    /**
     * @var int
     */
    public $createdAt;

    /**
     * @var string
     */
    public $createdBy;

    /**
     * @var FunctionDefinition[]
     */
    public $definitions;

    /**
     * @var bool
     */
    public $deterministic;

    /**
     * @var string
     */
    public $id;

    /**
     * @var DataField[]
     */
    public $inputParams;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string[]
     */
    public $options;

    /**
     * @var string
     */
    public $owner;

    /**
     * @var DataField[]
     */
    public $returnParams;

    /**
     * @var int
     */
    public $updatedAt;

    /**
     * @var string
     */
    public $updatedBy;
    protected $_name = [
        'comment' => 'comment',
        'createdAt' => 'createdAt',
        'createdBy' => 'createdBy',
        'definitions' => 'definitions',
        'deterministic' => 'deterministic',
        'id' => 'id',
        'inputParams' => 'inputParams',
        'name' => 'name',
        'options' => 'options',
        'owner' => 'owner',
        'returnParams' => 'returnParams',
        'updatedAt' => 'updatedAt',
        'updatedBy' => 'updatedBy',
    ];

    public function validate()
    {
        if (\is_array($this->definitions)) {
            Model::validateArray($this->definitions);
        }
        if (\is_array($this->inputParams)) {
            Model::validateArray($this->inputParams);
        }
        if (\is_array($this->options)) {
            Model::validateArray($this->options);
        }
        if (\is_array($this->returnParams)) {
            Model::validateArray($this->returnParams);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->comment) {
            $res['comment'] = $this->comment;
        }

        if (null !== $this->createdAt) {
            $res['createdAt'] = $this->createdAt;
        }

        if (null !== $this->createdBy) {
            $res['createdBy'] = $this->createdBy;
        }

        if (null !== $this->definitions) {
            if (\is_array($this->definitions)) {
                $res['definitions'] = [];
                foreach ($this->definitions as $key1 => $value1) {
                    $res['definitions'][$key1] = null !== $value1 ? $value1->toArray($noStream) : $value1;
                }
            }
        }

        if (null !== $this->deterministic) {
            $res['deterministic'] = $this->deterministic;
        }

        if (null !== $this->id) {
            $res['id'] = $this->id;
        }

        if (null !== $this->inputParams) {
            if (\is_array($this->inputParams)) {
                $res['inputParams'] = [];
                $n1 = 0;
                foreach ($this->inputParams as $item1) {
                    $res['inputParams'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->options) {
            if (\is_array($this->options)) {
                $res['options'] = [];
                foreach ($this->options as $key1 => $value1) {
                    $res['options'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->owner) {
            $res['owner'] = $this->owner;
        }

        if (null !== $this->returnParams) {
            if (\is_array($this->returnParams)) {
                $res['returnParams'] = [];
                $n1 = 0;
                foreach ($this->returnParams as $item1) {
                    $res['returnParams'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->updatedAt) {
            $res['updatedAt'] = $this->updatedAt;
        }

        if (null !== $this->updatedBy) {
            $res['updatedBy'] = $this->updatedBy;
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
        if (isset($map['comment'])) {
            $model->comment = $map['comment'];
        }

        if (isset($map['createdAt'])) {
            $model->createdAt = $map['createdAt'];
        }

        if (isset($map['createdBy'])) {
            $model->createdBy = $map['createdBy'];
        }

        if (isset($map['definitions'])) {
            if (!empty($map['definitions'])) {
                $model->definitions = [];
                foreach ($map['definitions'] as $key1 => $value1) {
                    $model->definitions[$key1] = FunctionDefinition::fromMap($value1);
                }
            }
        }

        if (isset($map['deterministic'])) {
            $model->deterministic = $map['deterministic'];
        }

        if (isset($map['id'])) {
            $model->id = $map['id'];
        }

        if (isset($map['inputParams'])) {
            if (!empty($map['inputParams'])) {
                $model->inputParams = [];
                $n1 = 0;
                foreach ($map['inputParams'] as $item1) {
                    $model->inputParams[$n1] = DataField::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['options'])) {
            if (!empty($map['options'])) {
                $model->options = [];
                foreach ($map['options'] as $key1 => $value1) {
                    $model->options[$key1] = $value1;
                }
            }
        }

        if (isset($map['owner'])) {
            $model->owner = $map['owner'];
        }

        if (isset($map['returnParams'])) {
            if (!empty($map['returnParams'])) {
                $model->returnParams = [];
                $n1 = 0;
                foreach ($map['returnParams'] as $item1) {
                    $model->returnParams[$n1] = DataField::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['updatedAt'])) {
            $model->updatedAt = $map['updatedAt'];
        }

        if (isset($map['updatedBy'])) {
            $model->updatedBy = $map['updatedBy'];
        }

        return $model;
    }
}

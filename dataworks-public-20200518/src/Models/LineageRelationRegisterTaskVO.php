<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Dara\Model;

class LineageRelationRegisterTaskVO extends Model
{
    /**
     * @var string[]
     */
    public $attributes;

    /**
     * @var int
     */
    public $createTimestamp;

    /**
     * @var LineageEntityVO[]
     */
    public $inputEntities;

    /**
     * @var string
     */
    public $name;

    /**
     * @var LineageEntityVO[]
     */
    public $outputEntities;

    /**
     * @var string
     */
    public $qualifiedName;
    protected $_name = [
        'attributes' => 'Attributes',
        'createTimestamp' => 'CreateTimestamp',
        'inputEntities' => 'InputEntities',
        'name' => 'Name',
        'outputEntities' => 'OutputEntities',
        'qualifiedName' => 'QualifiedName',
    ];

    public function validate()
    {
        if (\is_array($this->attributes)) {
            Model::validateArray($this->attributes);
        }
        if (\is_array($this->inputEntities)) {
            Model::validateArray($this->inputEntities);
        }
        if (\is_array($this->outputEntities)) {
            Model::validateArray($this->outputEntities);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->attributes) {
            if (\is_array($this->attributes)) {
                $res['Attributes'] = [];
                foreach ($this->attributes as $key1 => $value1) {
                    $res['Attributes'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->createTimestamp) {
            $res['CreateTimestamp'] = $this->createTimestamp;
        }

        if (null !== $this->inputEntities) {
            if (\is_array($this->inputEntities)) {
                $res['InputEntities'] = [];
                $n1 = 0;
                foreach ($this->inputEntities as $item1) {
                    $res['InputEntities'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->outputEntities) {
            if (\is_array($this->outputEntities)) {
                $res['OutputEntities'] = [];
                $n1 = 0;
                foreach ($this->outputEntities as $item1) {
                    $res['OutputEntities'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->qualifiedName) {
            $res['QualifiedName'] = $this->qualifiedName;
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
        if (isset($map['Attributes'])) {
            if (!empty($map['Attributes'])) {
                $model->attributes = [];
                foreach ($map['Attributes'] as $key1 => $value1) {
                    $model->attributes[$key1] = $value1;
                }
            }
        }

        if (isset($map['CreateTimestamp'])) {
            $model->createTimestamp = $map['CreateTimestamp'];
        }

        if (isset($map['InputEntities'])) {
            if (!empty($map['InputEntities'])) {
                $model->inputEntities = [];
                $n1 = 0;
                foreach ($map['InputEntities'] as $item1) {
                    $model->inputEntities[$n1] = LineageEntityVO::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['OutputEntities'])) {
            if (!empty($map['OutputEntities'])) {
                $model->outputEntities = [];
                $n1 = 0;
                foreach ($map['OutputEntities'] as $item1) {
                    $model->outputEntities[$n1] = LineageEntityVO::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['QualifiedName'])) {
            $model->qualifiedName = $map['QualifiedName'];
        }

        return $model;
    }
}

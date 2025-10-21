<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ververica\V20220718\Models;

use AlibabaCloud\Dara\Model;

class Connector extends Model
{
    /**
     * @var string
     */
    public $creator;

    /**
     * @var string
     */
    public $creatorName;

    /**
     * @var string[]
     */
    public $dependencies;

    /**
     * @var bool
     */
    public $lookup;

    /**
     * @var string
     */
    public $modifier;

    /**
     * @var string
     */
    public $modifierName;

    /**
     * @var string
     */
    public $name;

    /**
     * @var Property[]
     */
    public $properties;

    /**
     * @var bool
     */
    public $sink;

    /**
     * @var bool
     */
    public $source;

    /**
     * @var string[]
     */
    public $supportedFormats;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'creator' => 'creator',
        'creatorName' => 'creatorName',
        'dependencies' => 'dependencies',
        'lookup' => 'lookup',
        'modifier' => 'modifier',
        'modifierName' => 'modifierName',
        'name' => 'name',
        'properties' => 'properties',
        'sink' => 'sink',
        'source' => 'source',
        'supportedFormats' => 'supportedFormats',
        'type' => 'type',
    ];

    public function validate()
    {
        if (\is_array($this->dependencies)) {
            Model::validateArray($this->dependencies);
        }
        if (\is_array($this->properties)) {
            Model::validateArray($this->properties);
        }
        if (\is_array($this->supportedFormats)) {
            Model::validateArray($this->supportedFormats);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->creator) {
            $res['creator'] = $this->creator;
        }

        if (null !== $this->creatorName) {
            $res['creatorName'] = $this->creatorName;
        }

        if (null !== $this->dependencies) {
            if (\is_array($this->dependencies)) {
                $res['dependencies'] = [];
                $n1 = 0;
                foreach ($this->dependencies as $item1) {
                    $res['dependencies'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->lookup) {
            $res['lookup'] = $this->lookup;
        }

        if (null !== $this->modifier) {
            $res['modifier'] = $this->modifier;
        }

        if (null !== $this->modifierName) {
            $res['modifierName'] = $this->modifierName;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->properties) {
            if (\is_array($this->properties)) {
                $res['properties'] = [];
                $n1 = 0;
                foreach ($this->properties as $item1) {
                    $res['properties'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->sink) {
            $res['sink'] = $this->sink;
        }

        if (null !== $this->source) {
            $res['source'] = $this->source;
        }

        if (null !== $this->supportedFormats) {
            if (\is_array($this->supportedFormats)) {
                $res['supportedFormats'] = [];
                $n1 = 0;
                foreach ($this->supportedFormats as $item1) {
                    $res['supportedFormats'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['creator'])) {
            $model->creator = $map['creator'];
        }

        if (isset($map['creatorName'])) {
            $model->creatorName = $map['creatorName'];
        }

        if (isset($map['dependencies'])) {
            if (!empty($map['dependencies'])) {
                $model->dependencies = [];
                $n1 = 0;
                foreach ($map['dependencies'] as $item1) {
                    $model->dependencies[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['lookup'])) {
            $model->lookup = $map['lookup'];
        }

        if (isset($map['modifier'])) {
            $model->modifier = $map['modifier'];
        }

        if (isset($map['modifierName'])) {
            $model->modifierName = $map['modifierName'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['properties'])) {
            if (!empty($map['properties'])) {
                $model->properties = [];
                $n1 = 0;
                foreach ($map['properties'] as $item1) {
                    $model->properties[$n1] = Property::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['sink'])) {
            $model->sink = $map['sink'];
        }

        if (isset($map['source'])) {
            $model->source = $map['source'];
        }

        if (isset($map['supportedFormats'])) {
            if (!empty($map['supportedFormats'])) {
                $model->supportedFormats = [];
                $n1 = 0;
                foreach ($map['supportedFormats'] as $item1) {
                    $model->supportedFormats[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}

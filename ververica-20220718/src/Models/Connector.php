<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ververica\V20220718\Models;

use AlibabaCloud\Tea\Model;

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
        'creator'          => 'creator',
        'creatorName'      => 'creatorName',
        'dependencies'     => 'dependencies',
        'lookup'           => 'lookup',
        'modifier'         => 'modifier',
        'modifierName'     => 'modifierName',
        'name'             => 'name',
        'properties'       => 'properties',
        'sink'             => 'sink',
        'source'           => 'source',
        'supportedFormats' => 'supportedFormats',
        'type'             => 'type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->creator) {
            $res['creator'] = $this->creator;
        }
        if (null !== $this->creatorName) {
            $res['creatorName'] = $this->creatorName;
        }
        if (null !== $this->dependencies) {
            $res['dependencies'] = $this->dependencies;
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
            $res['properties'] = [];
            if (null !== $this->properties && \is_array($this->properties)) {
                $n = 0;
                foreach ($this->properties as $item) {
                    $res['properties'][$n++] = null !== $item ? $item->toMap() : $item;
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
            $res['supportedFormats'] = $this->supportedFormats;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return Connector
     */
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
                $model->dependencies = $map['dependencies'];
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
                $n                 = 0;
                foreach ($map['properties'] as $item) {
                    $model->properties[$n++] = null !== $item ? Property::fromMap($item) : $item;
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
                $model->supportedFormats = $map['supportedFormats'];
            }
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}

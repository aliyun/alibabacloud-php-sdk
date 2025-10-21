<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ververica\V20220718\Models;

use AlibabaCloud\Dara\Model;

class Table extends Model
{
    /**
     * @var string
     */
    public $comment;

    /**
     * @var string[]
     */
    public $metadata;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string[]
     */
    public $partitionKeys;

    /**
     * @var mixed[]
     */
    public $properties;

    /**
     * @var Schema
     */
    public $schema;

    /**
     * @var string
     */
    public $tableType;
    protected $_name = [
        'comment' => 'comment',
        'metadata' => 'metadata',
        'name' => 'name',
        'partitionKeys' => 'partitionKeys',
        'properties' => 'properties',
        'schema' => 'schema',
        'tableType' => 'tableType',
    ];

    public function validate()
    {
        if (\is_array($this->metadata)) {
            Model::validateArray($this->metadata);
        }
        if (\is_array($this->partitionKeys)) {
            Model::validateArray($this->partitionKeys);
        }
        if (\is_array($this->properties)) {
            Model::validateArray($this->properties);
        }
        if (null !== $this->schema) {
            $this->schema->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->comment) {
            $res['comment'] = $this->comment;
        }

        if (null !== $this->metadata) {
            if (\is_array($this->metadata)) {
                $res['metadata'] = [];
                foreach ($this->metadata as $key1 => $value1) {
                    $res['metadata'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->partitionKeys) {
            if (\is_array($this->partitionKeys)) {
                $res['partitionKeys'] = [];
                $n1 = 0;
                foreach ($this->partitionKeys as $item1) {
                    $res['partitionKeys'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->properties) {
            if (\is_array($this->properties)) {
                $res['properties'] = [];
                foreach ($this->properties as $key1 => $value1) {
                    $res['properties'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->schema) {
            $res['schema'] = null !== $this->schema ? $this->schema->toArray($noStream) : $this->schema;
        }

        if (null !== $this->tableType) {
            $res['tableType'] = $this->tableType;
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

        if (isset($map['metadata'])) {
            if (!empty($map['metadata'])) {
                $model->metadata = [];
                foreach ($map['metadata'] as $key1 => $value1) {
                    $model->metadata[$key1] = $value1;
                }
            }
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['partitionKeys'])) {
            if (!empty($map['partitionKeys'])) {
                $model->partitionKeys = [];
                $n1 = 0;
                foreach ($map['partitionKeys'] as $item1) {
                    $model->partitionKeys[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['properties'])) {
            if (!empty($map['properties'])) {
                $model->properties = [];
                foreach ($map['properties'] as $key1 => $value1) {
                    $model->properties[$key1] = $value1;
                }
            }
        }

        if (isset($map['schema'])) {
            $model->schema = Schema::fromMap($map['schema']);
        }

        if (isset($map['tableType'])) {
            $model->tableType = $map['tableType'];
        }

        return $model;
    }
}

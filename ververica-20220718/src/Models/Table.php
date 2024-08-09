<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ververica\V20220718\Models;

use AlibabaCloud\Tea\Model;

class Table extends Model
{
    /**
     * @var string
     */
    public $comment;

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
    protected $_name = [
        'comment'       => 'comment',
        'name'          => 'name',
        'partitionKeys' => 'partitionKeys',
        'properties'    => 'properties',
        'schema'        => 'schema',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->comment) {
            $res['comment'] = $this->comment;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->partitionKeys) {
            $res['partitionKeys'] = $this->partitionKeys;
        }
        if (null !== $this->properties) {
            $res['properties'] = $this->properties;
        }
        if (null !== $this->schema) {
            $res['schema'] = null !== $this->schema ? $this->schema->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return Table
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['comment'])) {
            $model->comment = $map['comment'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['partitionKeys'])) {
            if (!empty($map['partitionKeys'])) {
                $model->partitionKeys = $map['partitionKeys'];
            }
        }
        if (isset($map['properties'])) {
            $model->properties = $map['properties'];
        }
        if (isset($map['schema'])) {
            $model->schema = Schema::fromMap($map['schema']);
        }

        return $model;
    }
}

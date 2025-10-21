<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ververica\V20220718\Models;

use AlibabaCloud\Dara\Model;

class TableSchema extends Model
{
    /**
     * @var Schema
     */
    public $schema;

    /**
     * @var string
     */
    public $tableName;
    protected $_name = [
        'schema' => 'schema',
        'tableName' => 'tableName',
    ];

    public function validate()
    {
        if (null !== $this->schema) {
            $this->schema->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->schema) {
            $res['schema'] = null !== $this->schema ? $this->schema->toArray($noStream) : $this->schema;
        }

        if (null !== $this->tableName) {
            $res['tableName'] = $this->tableName;
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
        if (isset($map['schema'])) {
            $model->schema = Schema::fromMap($map['schema']);
        }

        if (isset($map['tableName'])) {
            $model->tableName = $map['tableName'];
        }

        return $model;
    }
}

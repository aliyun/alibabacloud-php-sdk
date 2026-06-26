<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DlfNext\V20250310\Models;

use AlibabaCloud\Dara\Model;

class AlterTableSchemaRequest extends Model
{
    /**
     * @var Schema
     */
    public $schema;
    protected $_name = [
        'schema' => 'schema',
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

        return $model;
    }
}

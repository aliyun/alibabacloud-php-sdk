<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DlfNext\V20250310\Models;

use AlibabaCloud\Tea\Model;

class CreateTableRequest extends Model
{
    /**
     * @var Identifier
     */
    public $identifier;

    /**
     * @var Schema
     */
    public $schema;
    protected $_name = [
        'identifier' => 'identifier',
        'schema' => 'schema',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->identifier) {
            $res['identifier'] = null !== $this->identifier ? $this->identifier->toMap() : null;
        }
        if (null !== $this->schema) {
            $res['schema'] = null !== $this->schema ? $this->schema->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateTableRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['identifier'])) {
            $model->identifier = Identifier::fromMap($map['identifier']);
        }
        if (isset($map['schema'])) {
            $model->schema = Schema::fromMap($map['schema']);
        }

        return $model;
    }
}

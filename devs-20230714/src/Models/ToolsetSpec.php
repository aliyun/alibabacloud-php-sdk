<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devs\V20230714\Models;

use AlibabaCloud\Dara\Model;

class ToolsetSpec extends Model
{
    /**
     * @var ToolsetAuthorization
     */
    public $authorization;

    /**
     * @var ToolsetSchema
     */
    public $schema;
    protected $_name = [
        'authorization' => 'authorization',
        'schema' => 'schema',
    ];

    public function validate()
    {
        if (null !== $this->authorization) {
            $this->authorization->validate();
        }
        if (null !== $this->schema) {
            $this->schema->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->authorization) {
            $res['authorization'] = null !== $this->authorization ? $this->authorization->toArray($noStream) : $this->authorization;
        }

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
        if (isset($map['authorization'])) {
            $model->authorization = ToolsetAuthorization::fromMap($map['authorization']);
        }

        if (isset($map['schema'])) {
            $model->schema = ToolsetSchema::fromMap($map['schema']);
        }

        return $model;
    }
}

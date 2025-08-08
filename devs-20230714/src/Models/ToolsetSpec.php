<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devs\V20230714\Models;

use AlibabaCloud\Dara\Model;

class ToolsetSpec extends Model
{
    /**
     * @var Authorization
     */
    public $authConfig;

    /**
     * @var ToolsetSchema
     */
    public $schema;
    protected $_name = [
        'authConfig' => 'authConfig',
        'schema' => 'schema',
    ];

    public function validate()
    {
        if (null !== $this->authConfig) {
            $this->authConfig->validate();
        }
        if (null !== $this->schema) {
            $this->schema->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->authConfig) {
            $res['authConfig'] = null !== $this->authConfig ? $this->authConfig->toArray($noStream) : $this->authConfig;
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
        if (isset($map['authConfig'])) {
            $model->authConfig = Authorization::fromMap($map['authConfig']);
        }

        if (isset($map['schema'])) {
            $model->schema = ToolsetSchema::fromMap($map['schema']);
        }

        return $model;
    }
}

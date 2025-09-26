<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentRun\V20250910\Models;

use AlibabaCloud\Dara\Model;

class CreateToolInput extends Model
{
    /**
     * @var CAPConfig
     */
    public $CAPConfig;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $schema;

    /**
     * @var string
     */
    public $sourceType;

    /**
     * @var string
     */
    public $toolType;
    protected $_name = [
        'CAPConfig' => 'CAPConfig',
        'description' => 'description',
        'name' => 'name',
        'schema' => 'schema',
        'sourceType' => 'sourceType',
        'toolType' => 'toolType',
    ];

    public function validate()
    {
        if (null !== $this->CAPConfig) {
            $this->CAPConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->CAPConfig) {
            $res['CAPConfig'] = null !== $this->CAPConfig ? $this->CAPConfig->toArray($noStream) : $this->CAPConfig;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->schema) {
            $res['schema'] = $this->schema;
        }

        if (null !== $this->sourceType) {
            $res['sourceType'] = $this->sourceType;
        }

        if (null !== $this->toolType) {
            $res['toolType'] = $this->toolType;
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
        if (isset($map['CAPConfig'])) {
            $model->CAPConfig = CAPConfig::fromMap($map['CAPConfig']);
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['schema'])) {
            $model->schema = $map['schema'];
        }

        if (isset($map['sourceType'])) {
            $model->sourceType = $map['sourceType'];
        }

        if (isset($map['toolType'])) {
            $model->toolType = $map['toolType'];
        }

        return $model;
    }
}

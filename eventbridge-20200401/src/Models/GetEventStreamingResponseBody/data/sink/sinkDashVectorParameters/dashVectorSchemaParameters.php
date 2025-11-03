<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models\GetEventStreamingResponseBody\data\sink\sinkDashVectorParameters;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\GetEventStreamingResponseBody\data\sink\sinkDashVectorParameters\dashVectorSchemaParameters\name;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\GetEventStreamingResponseBody\data\sink\sinkDashVectorParameters\dashVectorSchemaParameters\type;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\GetEventStreamingResponseBody\data\sink\sinkDashVectorParameters\dashVectorSchemaParameters\value;

class dashVectorSchemaParameters extends Model
{
    /**
     * @var name
     */
    public $name;

    /**
     * @var type
     */
    public $type;

    /**
     * @var value
     */
    public $value;
    protected $_name = [
        'name' => 'Name',
        'type' => 'Type',
        'value' => 'Value',
    ];

    public function validate()
    {
        if (null !== $this->name) {
            $this->name->validate();
        }
        if (null !== $this->type) {
            $this->type->validate();
        }
        if (null !== $this->value) {
            $this->value->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = null !== $this->name ? $this->name->toArray($noStream) : $this->name;
        }

        if (null !== $this->type) {
            $res['Type'] = null !== $this->type ? $this->type->toArray($noStream) : $this->type;
        }

        if (null !== $this->value) {
            $res['Value'] = null !== $this->value ? $this->value->toArray($noStream) : $this->value;
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
        if (isset($map['Name'])) {
            $model->name = name::fromMap($map['Name']);
        }

        if (isset($map['Type'])) {
            $model->type = type::fromMap($map['Type']);
        }

        if (isset($map['Value'])) {
            $model->value = value::fromMap($map['Value']);
        }

        return $model;
    }
}

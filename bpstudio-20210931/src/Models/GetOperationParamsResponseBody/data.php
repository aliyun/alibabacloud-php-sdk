<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BPStudio\V20210931\Models\GetOperationParamsResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var mixed[]
     */
    public $attributes;

    /**
     * @var string
     */
    public $operation;

    /**
     * @var mixed[]
     */
    public $outputs;

    /**
     * @var mixed[]
     */
    public $properties;

    /**
     * @var string
     */
    public $service;
    protected $_name = [
        'attributes' => 'Attributes',
        'operation' => 'Operation',
        'outputs' => 'Outputs',
        'properties' => 'Properties',
        'service' => 'Service',
    ];

    public function validate()
    {
        if (\is_array($this->attributes)) {
            Model::validateArray($this->attributes);
        }
        if (\is_array($this->outputs)) {
            Model::validateArray($this->outputs);
        }
        if (\is_array($this->properties)) {
            Model::validateArray($this->properties);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->attributes) {
            if (\is_array($this->attributes)) {
                $res['Attributes'] = [];
                foreach ($this->attributes as $key1 => $value1) {
                    $res['Attributes'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->operation) {
            $res['Operation'] = $this->operation;
        }

        if (null !== $this->outputs) {
            if (\is_array($this->outputs)) {
                $res['Outputs'] = [];
                foreach ($this->outputs as $key1 => $value1) {
                    $res['Outputs'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->properties) {
            if (\is_array($this->properties)) {
                $res['Properties'] = [];
                foreach ($this->properties as $key1 => $value1) {
                    $res['Properties'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->service) {
            $res['Service'] = $this->service;
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
        if (isset($map['Attributes'])) {
            if (!empty($map['Attributes'])) {
                $model->attributes = [];
                foreach ($map['Attributes'] as $key1 => $value1) {
                    $model->attributes[$key1] = $value1;
                }
            }
        }

        if (isset($map['Operation'])) {
            $model->operation = $map['Operation'];
        }

        if (isset($map['Outputs'])) {
            if (!empty($map['Outputs'])) {
                $model->outputs = [];
                foreach ($map['Outputs'] as $key1 => $value1) {
                    $model->outputs[$key1] = $value1;
                }
            }
        }

        if (isset($map['Properties'])) {
            if (!empty($map['Properties'])) {
                $model->properties = [];
                foreach ($map['Properties'] as $key1 => $value1) {
                    $model->properties[$key1] = $value1;
                }
            }
        }

        if (isset($map['Service'])) {
            $model->service = $map['Service'];
        }

        return $model;
    }
}

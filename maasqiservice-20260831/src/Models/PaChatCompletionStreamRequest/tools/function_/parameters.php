<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaasQIService\V20260831\Models\PaChatCompletionStreamRequest\tools\function_;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\MaasQIService\V20260831\Models\PaChatCompletionStreamRequest\tools\function_\parameters\properties;

class parameters extends Model
{
    /**
     * @var properties
     */
    public $properties;

    /**
     * @var string[]
     */
    public $required;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'properties' => 'properties',
        'required' => 'required',
        'type' => 'type',
    ];

    public function validate()
    {
        if (null !== $this->properties) {
            $this->properties->validate();
        }
        if (\is_array($this->required)) {
            Model::validateArray($this->required);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->properties) {
            $res['properties'] = null !== $this->properties ? $this->properties->toArray($noStream) : $this->properties;
        }

        if (null !== $this->required) {
            if (\is_array($this->required)) {
                $res['required'] = [];
                $n1 = 0;
                foreach ($this->required as $item1) {
                    $res['required'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
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
        if (isset($map['properties'])) {
            $model->properties = properties::fromMap($map['properties']);
        }

        if (isset($map['required'])) {
            if (!empty($map['required'])) {
                $model->required = [];
                $n1 = 0;
                foreach ($map['required'] as $item1) {
                    $model->required[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}

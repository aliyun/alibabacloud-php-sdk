<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;

class UpsertUmodelDataRequest extends Model
{
    /**
     * @var mixed[]
     */
    public $elements;

    /**
     * @var string
     */
    public $method;
    protected $_name = [
        'elements' => 'elements',
        'method' => 'method',
    ];

    public function validate()
    {
        if (\is_array($this->elements)) {
            Model::validateArray($this->elements);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->elements) {
            if (\is_array($this->elements)) {
                $res['elements'] = [];
                $n1 = 0;
                foreach ($this->elements as $item1) {
                    $res['elements'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->method) {
            $res['method'] = $this->method;
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
        if (isset($map['elements'])) {
            if (!empty($map['elements'])) {
                $model->elements = [];
                $n1 = 0;
                foreach ($map['elements'] as $item1) {
                    $model->elements[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['method'])) {
            $model->method = $map['method'];
        }

        return $model;
    }
}

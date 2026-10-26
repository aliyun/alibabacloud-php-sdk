<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RocketMQ\V20220801\Models\ListInspectionTemplatesResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\ListInspectionTemplatesResponseBody\data\configuration\parameters;

class configuration extends Model
{
    /**
     * @var parameters[]
     */
    public $parameters;
    protected $_name = [
        'parameters' => 'parameters',
    ];

    public function validate()
    {
        if (\is_array($this->parameters)) {
            Model::validateArray($this->parameters);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->parameters) {
            if (\is_array($this->parameters)) {
                $res['parameters'] = [];
                $n1 = 0;
                foreach ($this->parameters as $item1) {
                    $res['parameters'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['parameters'])) {
            if (!empty($map['parameters'])) {
                $model->parameters = [];
                $n1 = 0;
                foreach ($map['parameters'] as $item1) {
                    $model->parameters[$n1] = parameters::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

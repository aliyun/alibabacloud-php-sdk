<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vs\V20181212\Models\BatchBindTemplateResponseBody\bindings;

class BatchBindTemplateResponseBody extends Model
{
    /**
     * @var bindings[]
     */
    public $bindings;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'bindings' => 'Bindings',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->bindings)) {
            Model::validateArray($this->bindings);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bindings) {
            if (\is_array($this->bindings)) {
                $res['Bindings'] = [];
                $n1 = 0;
                foreach ($this->bindings as $item1) {
                    $res['Bindings'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['Bindings'])) {
            if (!empty($map['Bindings'])) {
                $model->bindings = [];
                $n1 = 0;
                foreach ($map['Bindings'] as $item1) {
                    $model->bindings[$n1++] = bindings::fromMap($item1);
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

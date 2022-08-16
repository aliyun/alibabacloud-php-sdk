<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Tea\Model;

class ListBindingsResponseBody extends Model
{
    /**
     * @var Binding[]
     */
    public $bindings;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'bindings'  => 'Bindings',
        'nextToken' => 'NextToken',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bindings) {
            $res['Bindings'] = [];
            if (null !== $this->bindings && \is_array($this->bindings)) {
                $n = 0;
                foreach ($this->bindings as $item) {
                    $res['Bindings'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListBindingsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Bindings'])) {
            if (!empty($map['Bindings'])) {
                $model->bindings = [];
                $n               = 0;
                foreach ($map['Bindings'] as $item) {
                    $model->bindings[$n++] = null !== $item ? Binding::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

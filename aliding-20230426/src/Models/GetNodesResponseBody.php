<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetNodesResponseBody\nodes;

class GetNodesResponseBody extends Model
{
    /**
     * @var nodes[]
     */
    public $nodes;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'nodes' => 'nodes',
        'requestId' => 'requestId',
    ];

    public function validate()
    {
        if (\is_array($this->nodes)) {
            Model::validateArray($this->nodes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->nodes) {
            if (\is_array($this->nodes)) {
                $res['nodes'] = [];
                $n1 = 0;
                foreach ($this->nodes as $item1) {
                    $res['nodes'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
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
        if (isset($map['nodes'])) {
            if (!empty($map['nodes'])) {
                $model->nodes = [];
                $n1 = 0;
                foreach ($map['nodes'] as $item1) {
                    $model->nodes[$n1++] = nodes::fromMap($item1);
                }
            }
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        return $model;
    }
}

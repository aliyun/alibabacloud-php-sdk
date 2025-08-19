<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Dara\Model;

class EdgeClusterAddEdgeMachineResponseBody extends Model
{
    /**
     * @var string
     */
    public $edgeMachineId;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'edgeMachineId' => 'edge_machine_id',
        'requestId' => 'request_id',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->edgeMachineId) {
            $res['edge_machine_id'] = $this->edgeMachineId;
        }

        if (null !== $this->requestId) {
            $res['request_id'] = $this->requestId;
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
        if (isset($map['edge_machine_id'])) {
            $model->edgeMachineId = $map['edge_machine_id'];
        }

        if (isset($map['request_id'])) {
            $model->requestId = $map['request_id'];
        }

        return $model;
    }
}

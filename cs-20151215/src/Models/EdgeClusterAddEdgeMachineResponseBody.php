<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Tea\Model;

class EdgeClusterAddEdgeMachineResponseBody extends Model
{
    /**
     * @description The ID of the cloud-native box.
     *
     * @example 0f4bf70a-caff-4b26-a679-fb0188a1****
     *
     * @var string
     */
    public $edgeMachineId;

    /**
     * @description The ID of the request.
     *
     * @example 0adf3a23-6841-41e8-9f55-7b290216c980
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'edgeMachineId' => 'edge_machine_id',
        'requestId'     => 'request_id',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return EdgeClusterAddEdgeMachineResponseBody
     */
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

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Tea\Model;

class CreateEdgeMachineResponseBody extends Model
{
    /**
     * @description The ID of the cloud-native box.
     *
     * @example cc0725ddf688744979cd98445f67e****
     *
     * @var string
     */
    public $edgeMachineId;

    /**
     * @description The request ID.
     *
     * @example "request_id": "6e7b377a-c5ed-4388-8026-689e1b34****",
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
     * @return CreateEdgeMachineResponseBody
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

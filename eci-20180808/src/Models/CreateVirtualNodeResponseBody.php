<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eci\V20180808\Models;

use AlibabaCloud\Tea\Model;

class CreateVirtualNodeResponseBody extends Model
{
    /**
     * @description The ID of the request.
     *
     * @example 89164E78-FC82-4684-BE97-DCDD85D26546
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The ID of the VNode.
     *
     * @example vnd-2ze960zkdqrldeaw****
     *
     * @var string
     */
    public $virtualNodeId;
    protected $_name = [
        'requestId'     => 'RequestId',
        'virtualNodeId' => 'VirtualNodeId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->virtualNodeId) {
            $res['VirtualNodeId'] = $this->virtualNodeId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateVirtualNodeResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['VirtualNodeId'])) {
            $model->virtualNodeId = $map['VirtualNodeId'];
        }

        return $model;
    }
}

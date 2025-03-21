<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocontroller\V20221215\Models;

use AlibabaCloud\Tea\Model;

class DescribeSendFileResultsRequest extends Model
{
    /**
     * @description Command execution ID.
     *
     * This parameter is required.
     *
     * @example t-bj038i0d6r8zoqo
     *
     * @var string
     */
    public $invokeId;

    /**
     * @description Node ID
     *
     * @example e01-cn-zvp2tgykr08
     *
     * @var string
     */
    public $nodeId;
    protected $_name = [
        'invokeId' => 'InvokeId',
        'nodeId' => 'NodeId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->invokeId) {
            $res['InvokeId'] = $this->invokeId;
        }
        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSendFileResultsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InvokeId'])) {
            $model->invokeId = $map['InvokeId'];
        }
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }

        return $model;
    }
}

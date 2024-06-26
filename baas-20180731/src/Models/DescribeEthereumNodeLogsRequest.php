<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20180731\Models;

use AlibabaCloud\Tea\Model;

class DescribeEthereumNodeLogsRequest extends Model
{
    /**
     * @var string
     */
    public $lines;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $nodeId;

    /**
     * @var string
     */
    public $target;
    protected $_name = [
        'lines'  => 'Lines',
        'nodeId' => 'NodeId',
        'target' => 'Target',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->lines) {
            $res['Lines'] = $this->lines;
        }
        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }
        if (null !== $this->target) {
            $res['Target'] = $this->target;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeEthereumNodeLogsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Lines'])) {
            $model->lines = $map['Lines'];
        }
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }
        if (isset($map['Target'])) {
            $model->target = $map['Target'];
        }

        return $model;
    }
}

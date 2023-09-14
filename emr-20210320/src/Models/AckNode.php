<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models;

use AlibabaCloud\Tea\Model;

class AckNode extends Model
{
    /**
     * @description 节点ID。
     *
     * @example i-bp1cudc25w2bfwl5****
     *
     * @var string
     */
    public $nodeId;

    /**
     * @description ACK节点选择器。
     *
     * @var AckNodeSelector
     */
    public $nodeSelector;
    protected $_name = [
        'nodeId'       => 'NodeId',
        'nodeSelector' => 'NodeSelector',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }
        if (null !== $this->nodeSelector) {
            $res['NodeSelector'] = null !== $this->nodeSelector ? $this->nodeSelector->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AckNode
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }
        if (isset($map['NodeSelector'])) {
            $model->nodeSelector = AckNodeSelector::fromMap($map['NodeSelector']);
        }

        return $model;
    }
}

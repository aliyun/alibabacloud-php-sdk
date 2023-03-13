<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocontroller\V20221215\Models\ShrinkClusterRequest\nodeGroups;

use AlibabaCloud\Tea\Model;

class nodes extends Model
{
    /**
     * @example e01poc-cn-zmb2ypjdc01
     *
     * @var string
     */
    public $nodeId;
    protected $_name = [
        'nodeId' => 'NodeId',
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return nodes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\DescribeClusterResponseBody\clusterInfo;

use AlibabaCloud\SDK\EHPC\V20180412\Models\DescribeClusterResponseBody\clusterInfo\nodes\nodesInfo;
use AlibabaCloud\Tea\Model;

class nodes extends Model
{
    /**
     * @var nodesInfo[]
     */
    public $nodesInfo;
    protected $_name = [
        'nodesInfo' => 'NodesInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nodesInfo) {
            $res['NodesInfo'] = [];
            if (null !== $this->nodesInfo && \is_array($this->nodesInfo)) {
                $n = 0;
                foreach ($this->nodesInfo as $item) {
                    $res['NodesInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['NodesInfo'])) {
            if (!empty($map['NodesInfo'])) {
                $model->nodesInfo = [];
                $n                = 0;
                foreach ($map['NodesInfo'] as $item) {
                    $model->nodesInfo[$n++] = null !== $item ? nodesInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

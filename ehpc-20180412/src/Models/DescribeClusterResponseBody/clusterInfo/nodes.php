<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\DescribeClusterResponseBody\clusterInfo;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\EHPC\V20180412\Models\DescribeClusterResponseBody\clusterInfo\nodes\nodesInfo;

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
        if (\is_array($this->nodesInfo)) {
            Model::validateArray($this->nodesInfo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->nodesInfo) {
            if (\is_array($this->nodesInfo)) {
                $res['NodesInfo'] = [];
                $n1 = 0;
                foreach ($this->nodesInfo as $item1) {
                    $res['NodesInfo'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['NodesInfo'])) {
            if (!empty($map['NodesInfo'])) {
                $model->nodesInfo = [];
                $n1 = 0;
                foreach ($map['NodesInfo'] as $item1) {
                    $model->nodesInfo[$n1++] = nodesInfo::fromMap($item1);
                }
            }
        }

        return $model;
    }
}

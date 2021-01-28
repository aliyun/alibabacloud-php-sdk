<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeLogicInstanceTopologyResponseBody;

use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeLogicInstanceTopologyResponseBody\redisProxyList\nodeInfo;
use AlibabaCloud\Tea\Model;

class redisProxyList extends Model
{
    /**
     * @var nodeInfo[]
     */
    public $nodeInfo;
    protected $_name = [
        'nodeInfo' => 'NodeInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nodeInfo) {
            $res['NodeInfo'] = [];
            if (null !== $this->nodeInfo && \is_array($this->nodeInfo)) {
                $n = 0;
                foreach ($this->nodeInfo as $item) {
                    $res['NodeInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return redisProxyList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NodeInfo'])) {
            if (!empty($map['NodeInfo'])) {
                $model->nodeInfo = [];
                $n               = 0;
                foreach ($map['NodeInfo'] as $item) {
                    $model->nodeInfo[$n++] = null !== $item ? nodeInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

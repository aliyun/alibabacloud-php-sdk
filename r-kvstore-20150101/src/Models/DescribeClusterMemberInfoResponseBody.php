<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models;

use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeClusterMemberInfoResponseBody\clusterChildren;
use AlibabaCloud\Tea\Model;

class DescribeClusterMemberInfoResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var clusterChildren[]
     */
    public $clusterChildren;
    protected $_name = [
        'requestId'       => 'RequestId',
        'clusterChildren' => 'ClusterChildren',
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
        if (null !== $this->clusterChildren) {
            $res['ClusterChildren'] = [];
            if (null !== $this->clusterChildren && \is_array($this->clusterChildren)) {
                $n = 0;
                foreach ($this->clusterChildren as $item) {
                    $res['ClusterChildren'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeClusterMemberInfoResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ClusterChildren'])) {
            if (!empty($map['ClusterChildren'])) {
                $model->clusterChildren = [];
                $n                      = 0;
                foreach ($map['ClusterChildren'] as $item) {
                    $model->clusterChildren[$n++] = null !== $item ? clusterChildren::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

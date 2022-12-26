<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeClusterInfoListResponseBody\clusterList;
use AlibabaCloud\Tea\Model;

class DescribeClusterInfoListResponseBody extends Model
{
    /**
     * @var clusterList[]
     */
    public $clusterList;

    /**
     * @example 7E0618A9-D5EF-4220-9471-C42B5E92719F
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'clusterList' => 'ClusterList',
        'requestId'   => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterList) {
            $res['ClusterList'] = [];
            if (null !== $this->clusterList && \is_array($this->clusterList)) {
                $n = 0;
                foreach ($this->clusterList as $item) {
                    $res['ClusterList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeClusterInfoListResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterList'])) {
            if (!empty($map['ClusterList'])) {
                $model->clusterList = [];
                $n                  = 0;
                foreach ($map['ClusterList'] as $item) {
                    $model->clusterList[$n++] = null !== $item ? clusterList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

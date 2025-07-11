<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models;

use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeHybridCloudClustersResponseBody\clusterInfos;
use AlibabaCloud\Tea\Model;

class DescribeHybridCloudClustersResponseBody extends Model
{
    /**
     * @description The information about the clusters.
     *
     * @var clusterInfos[]
     */
    public $clusterInfos;

    /**
     * @description The ID of the request.
     *
     * @example 66A98669-ER12-WE34-23PO-301469*****E
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'clusterInfos' => 'ClusterInfos',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterInfos) {
            $res['ClusterInfos'] = [];
            if (null !== $this->clusterInfos && \is_array($this->clusterInfos)) {
                $n = 0;
                foreach ($this->clusterInfos as $item) {
                    $res['ClusterInfos'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return DescribeHybridCloudClustersResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterInfos'])) {
            if (!empty($map['ClusterInfos'])) {
                $model->clusterInfos = [];
                $n = 0;
                foreach ($map['ClusterInfos'] as $item) {
                    $model->clusterInfos[$n++] = null !== $item ? clusterInfos::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

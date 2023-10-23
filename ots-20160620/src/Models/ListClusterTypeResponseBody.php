<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ots\V20160620\Models;

use AlibabaCloud\SDK\Ots\V20160620\Models\ListClusterTypeResponseBody\clusterTypeDetailList;
use AlibabaCloud\SDK\Ots\V20160620\Models\ListClusterTypeResponseBody\clusterTypeInfos;
use AlibabaCloud\Tea\Model;

class ListClusterTypeResponseBody extends Model
{
    /**
     * @var clusterTypeDetailList
     */
    public $clusterTypeDetailList;

    /**
     * @var clusterTypeInfos
     */
    public $clusterTypeInfos;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'clusterTypeDetailList' => 'ClusterTypeDetailList',
        'clusterTypeInfos'      => 'ClusterTypeInfos',
        'requestId'             => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterTypeDetailList) {
            $res['ClusterTypeDetailList'] = null !== $this->clusterTypeDetailList ? $this->clusterTypeDetailList->toMap() : null;
        }
        if (null !== $this->clusterTypeInfos) {
            $res['ClusterTypeInfos'] = null !== $this->clusterTypeInfos ? $this->clusterTypeInfos->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListClusterTypeResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterTypeDetailList'])) {
            $model->clusterTypeDetailList = clusterTypeDetailList::fromMap($map['ClusterTypeDetailList']);
        }
        if (isset($map['ClusterTypeInfos'])) {
            $model->clusterTypeInfos = clusterTypeInfos::fromMap($map['ClusterTypeInfos']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

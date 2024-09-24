<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeHybridProxyClusterListResponseBody\clusterList;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeHybridProxyClusterListResponseBody\pageInfo;
use AlibabaCloud\Tea\Model;

class DescribeHybridProxyClusterListResponseBody extends Model
{
    /**
     * @var clusterList[]
     */
    public $clusterList;

    /**
     * @var pageInfo
     */
    public $pageInfo;

    /**
     * @example C1A36413-50B2-5B2F-843F-EB14C582713F
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'clusterList' => 'ClusterList',
        'pageInfo'    => 'PageInfo',
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
        if (null !== $this->pageInfo) {
            $res['PageInfo'] = null !== $this->pageInfo ? $this->pageInfo->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeHybridProxyClusterListResponseBody
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
        if (isset($map['PageInfo'])) {
            $model->pageInfo = pageInfo::fromMap($map['PageInfo']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\GetK8sClusterResponseBody;

use AlibabaCloud\SDK\Edas\V20170801\Models\GetK8sClusterResponseBody\clusterPage\clusterList;
use AlibabaCloud\Tea\Model;

class clusterPage extends Model
{
    /**
     * @description The list of clusters.
     *
     * @var clusterList
     */
    public $clusterList;

    /**
     * @description The number of the returned page. Default value: 1.
     *
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @description The number of entries returned per page. Default value: 1000.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The total number of pages that are returned.
     *
     * @example 5
     *
     * @var int
     */
    public $totalSize;
    protected $_name = [
        'clusterList' => 'ClusterList',
        'currentPage' => 'CurrentPage',
        'pageSize'    => 'PageSize',
        'totalSize'   => 'TotalSize',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterList) {
            $res['ClusterList'] = null !== $this->clusterList ? $this->clusterList->toMap() : null;
        }
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->totalSize) {
            $res['TotalSize'] = $this->totalSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return clusterPage
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterList'])) {
            $model->clusterList = clusterList::fromMap($map['ClusterList']);
        }
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['TotalSize'])) {
            $model->totalSize = $map['TotalSize'];
        }

        return $model;
    }
}

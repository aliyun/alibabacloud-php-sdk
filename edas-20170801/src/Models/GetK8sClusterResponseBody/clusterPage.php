<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\GetK8sClusterResponseBody;

use AlibabaCloud\SDK\Edas\V20170801\Models\GetK8sClusterResponseBody\clusterPage\clusterList;
use AlibabaCloud\Tea\Model;

class clusterPage extends Model
{
    /**
     * @var int
     */
    public $currentPage;

    /**
     * @var clusterList
     */
    public $clusterList;

    /**
     * @var int
     */
    public $totalSize;

    /**
     * @var int
     */
    public $pageSize;
    protected $_name = [
        'currentPage' => 'CurrentPage',
        'clusterList' => 'ClusterList',
        'totalSize'   => 'TotalSize',
        'pageSize'    => 'PageSize',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->clusterList) {
            $res['ClusterList'] = null !== $this->clusterList ? $this->clusterList->toMap() : null;
        }
        if (null !== $this->totalSize) {
            $res['TotalSize'] = $this->totalSize;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
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
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['ClusterList'])) {
            $model->clusterList = clusterList::fromMap($map['ClusterList']);
        }
        if (isset($map['TotalSize'])) {
            $model->totalSize = $map['TotalSize'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        return $model;
    }
}

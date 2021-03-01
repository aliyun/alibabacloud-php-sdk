<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\ListClusterMembersResponseBody;

use AlibabaCloud\SDK\Edas\V20170801\Models\ListClusterMembersResponseBody\clusterMemberPage\clusterMemberList;
use AlibabaCloud\Tea\Model;

class clusterMemberPage extends Model
{
    /**
     * @var int
     */
    public $currentPage;

    /**
     * @var int
     */
    public $totalSize;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var clusterMemberList
     */
    public $clusterMemberList;
    protected $_name = [
        'currentPage'       => 'CurrentPage',
        'totalSize'         => 'TotalSize',
        'pageSize'          => 'PageSize',
        'clusterMemberList' => 'ClusterMemberList',
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
        if (null !== $this->totalSize) {
            $res['TotalSize'] = $this->totalSize;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->clusterMemberList) {
            $res['ClusterMemberList'] = null !== $this->clusterMemberList ? $this->clusterMemberList->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return clusterMemberPage
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['TotalSize'])) {
            $model->totalSize = $map['TotalSize'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['ClusterMemberList'])) {
            $model->clusterMemberList = clusterMemberList::fromMap($map['ClusterMemberList']);
        }

        return $model;
    }
}

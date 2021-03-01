<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\Tea\Model;

class GetK8sClusterRequest extends Model
{
    /**
     * @var string
     */
    public $regionTag;

    /**
     * @var int
     */
    public $currentPage;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $clusterType;
    protected $_name = [
        'regionTag'   => 'RegionTag',
        'currentPage' => 'CurrentPage',
        'pageSize'    => 'PageSize',
        'clusterType' => 'ClusterType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionTag) {
            $res['RegionTag'] = $this->regionTag;
        }
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->clusterType) {
            $res['ClusterType'] = $this->clusterType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetK8sClusterRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionTag'])) {
            $model->regionTag = $map['RegionTag'];
        }
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['ClusterType'])) {
            $model->clusterType = $map['ClusterType'];
        }

        return $model;
    }
}

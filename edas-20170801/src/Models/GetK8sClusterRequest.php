<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\Dara\Model;

class GetK8sClusterRequest extends Model
{
    /**
     * @var int
     */
    public $clusterType;

    /**
     * @var int
     */
    public $currentPage;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $regionTag;

    /**
     * @var string
     */
    public $subClusterType;
    protected $_name = [
        'clusterType' => 'ClusterType',
        'currentPage' => 'CurrentPage',
        'pageSize' => 'PageSize',
        'regionTag' => 'RegionTag',
        'subClusterType' => 'SubClusterType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clusterType) {
            $res['ClusterType'] = $this->clusterType;
        }

        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->regionTag) {
            $res['RegionTag'] = $this->regionTag;
        }

        if (null !== $this->subClusterType) {
            $res['SubClusterType'] = $this->subClusterType;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterType'])) {
            $model->clusterType = $map['ClusterType'];
        }

        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['RegionTag'])) {
            $model->regionTag = $map['RegionTag'];
        }

        if (isset($map['SubClusterType'])) {
            $model->subClusterType = $map['SubClusterType'];
        }

        return $model;
    }
}

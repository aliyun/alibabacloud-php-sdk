<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\Tea\Model;

class GetK8sClusterRequest extends Model
{
    /**
     * @description The type of the Kubernetes cluster. Valid values:
     *
     *   5: ACK cluster
     *   7: self-managed Kubernetes cluster
     *
     * @example 5
     *
     * @var int
     */
    public $clusterType;

    /**
     * @description The number of the page to return. Default value: 1.
     *
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @description The number of entries to return on each page. Default value: 1000.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The ID of the region.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionTag;

    /**
     * @description The subtype of the cluster. Valid values:
     *
     *   Ask: Serverless Kubernetes cluster
     *   ManagedKubernetes: ACK cluster
     *
     * @example Ask
     *
     * @var string
     */
    public $subClusterType;
    protected $_name = [
        'clusterType'    => 'ClusterType',
        'currentPage'    => 'CurrentPage',
        'pageSize'       => 'PageSize',
        'regionTag'      => 'RegionTag',
        'subClusterType' => 'SubClusterType',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return GetK8sClusterRequest
     */
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

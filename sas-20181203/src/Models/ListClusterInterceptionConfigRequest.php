<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class ListClusterInterceptionConfigRequest extends Model
{
    /**
     * @description The status of the container firewall feature. Valid values:
     *
     *   **-1**: unknown
     *   **0**: abnormal
     *   **1**: normal
     *   **2**: normal to be confirmed
     *
     * @example 1
     *
     * @var int
     */
    public $clusterCNNFStatus;

    /**
     * @description The ID of the cluster.
     *
     * > You can call the [DescribeContainerInstances](~~DescribeContainerInstances~~) operation to query the IDs of clusters.
     * @example c22143730ab6e40b09ec7c1c51d4d****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The name of the cluster.
     *
     * @example sas
     *
     * @var string
     */
    public $clusterName;

    /**
     * @description The number of the page to return. Default value: 1.
     *
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @description The number of entries to return on each page. Default value: 20.
     *
     * @example 20
     *
     * @var int
     */
    public $pageSize;
    protected $_name = [
        'clusterCNNFStatus' => 'ClusterCNNFStatus',
        'clusterId'         => 'ClusterId',
        'clusterName'       => 'ClusterName',
        'currentPage'       => 'CurrentPage',
        'pageSize'          => 'PageSize',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterCNNFStatus) {
            $res['ClusterCNNFStatus'] = $this->clusterCNNFStatus;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->clusterName) {
            $res['ClusterName'] = $this->clusterName;
        }
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListClusterInterceptionConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterCNNFStatus'])) {
            $model->clusterCNNFStatus = $map['ClusterCNNFStatus'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['ClusterName'])) {
            $model->clusterName = $map['ClusterName'];
        }
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        return $model;
    }
}

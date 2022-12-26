<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class ListClusterInterceptionConfigRequest extends Model
{
    /**
     * @var int
     */
    public $clusterCNNFStatus;

    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $clusterName;

    /**
     * @var int
     */
    public $currentPage;

    /**
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

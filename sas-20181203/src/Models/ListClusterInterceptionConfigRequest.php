<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

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
     * @var string[]
     */
    public $excludeClusterTypes;

    /**
     * @var int
     */
    public $pageSize;
    protected $_name = [
        'clusterCNNFStatus' => 'ClusterCNNFStatus',
        'clusterId' => 'ClusterId',
        'clusterName' => 'ClusterName',
        'currentPage' => 'CurrentPage',
        'excludeClusterTypes' => 'ExcludeClusterTypes',
        'pageSize' => 'PageSize',
    ];

    public function validate()
    {
        if (\is_array($this->excludeClusterTypes)) {
            Model::validateArray($this->excludeClusterTypes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->excludeClusterTypes) {
            if (\is_array($this->excludeClusterTypes)) {
                $res['ExcludeClusterTypes'] = [];
                $n1 = 0;
                foreach ($this->excludeClusterTypes as $item1) {
                    $res['ExcludeClusterTypes'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
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

        if (isset($map['ExcludeClusterTypes'])) {
            if (!empty($map['ExcludeClusterTypes'])) {
                $model->excludeClusterTypes = [];
                $n1 = 0;
                foreach ($map['ExcludeClusterTypes'] as $item1) {
                    $model->excludeClusterTypes[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        return $model;
    }
}

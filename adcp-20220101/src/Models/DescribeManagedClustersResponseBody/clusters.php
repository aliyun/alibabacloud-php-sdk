<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adcp\V20220101\Models\DescribeManagedClustersResponseBody;

use AlibabaCloud\SDK\Adcp\V20220101\Models\DescribeManagedClustersResponseBody\clusters\cluster;
use AlibabaCloud\SDK\Adcp\V20220101\Models\DescribeManagedClustersResponseBody\clusters\meshStatus;
use AlibabaCloud\SDK\Adcp\V20220101\Models\DescribeManagedClustersResponseBody\clusters\status;
use AlibabaCloud\Tea\Model;

class clusters extends Model
{
    /**
     * @description The name of the master instance.
     *
     * @var cluster
     */
    public $cluster;

    /**
     * @description Zhishi
     *
     * @var meshStatus
     */
    public $meshStatus;

    /**
     * @description Example 1
     *
     * @var status
     */
    public $status;
    protected $_name = [
        'cluster'    => 'Cluster',
        'meshStatus' => 'MeshStatus',
        'status'     => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cluster) {
            $res['Cluster'] = null !== $this->cluster ? $this->cluster->toMap() : null;
        }
        if (null !== $this->meshStatus) {
            $res['MeshStatus'] = null !== $this->meshStatus ? $this->meshStatus->toMap() : null;
        }
        if (null !== $this->status) {
            $res['Status'] = null !== $this->status ? $this->status->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return clusters
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Cluster'])) {
            $model->cluster = cluster::fromMap($map['Cluster']);
        }
        if (isset($map['MeshStatus'])) {
            $model->meshStatus = meshStatus::fromMap($map['MeshStatus']);
        }
        if (isset($map['Status'])) {
            $model->status = status::fromMap($map['Status']);
        }

        return $model;
    }
}

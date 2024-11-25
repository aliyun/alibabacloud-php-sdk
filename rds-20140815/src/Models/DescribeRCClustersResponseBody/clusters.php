<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeRCClustersResponseBody;

use AlibabaCloud\Tea\Model;

class clusters extends Model
{
    /**
     * @description The cluster name.
     *
     * @example test01
     *
     * @var string
     */
    public $clusterName;

    /**
     * @description The time when the cluster was created.
     *
     * @example 2024-10-30T02:16:04Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The cluster status. Valid values:
     *
     *   **Pending**
     *   **Running**
     *   **Starting**
     *   **Stopping**
     *   **Stopped**
     *
     * @example Running
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'clusterName' => 'ClusterName',
        'createTime'  => 'CreateTime',
        'status'      => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterName) {
            $res['ClusterName'] = $this->clusterName;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['ClusterName'])) {
            $model->clusterName = $map['ClusterName'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}

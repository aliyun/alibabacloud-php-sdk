<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\DescribeClusterV2ResponseBody\clusterInfo\gatewayClusterInfoList;

use AlibabaCloud\Tea\Model;

class gatewayClusterInfo extends Model
{
    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $clusterName;

    /**
     * @var string
     */
    public $clusterId;
    protected $_name = [
        'status'      => 'Status',
        'clusterName' => 'ClusterName',
        'clusterId'   => 'ClusterId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->clusterName) {
            $res['ClusterName'] = $this->clusterName;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return gatewayClusterInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['ClusterName'])) {
            $model->clusterName = $map['ClusterName'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }

        return $model;
    }
}

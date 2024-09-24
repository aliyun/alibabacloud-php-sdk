<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hsm\V20231113\Models;

use AlibabaCloud\Tea\Model;

class ConfigClusterNameRequest extends Model
{
    /**
     * @description The cluster ID.
     *
     * This parameter is required.
     * @example cluster-BqxX63Bsgfaisdf****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The cluster name.
     *
     * This parameter is required.
     * @example cluster_on****
     *
     * @var string
     */
    public $clusterName;
    protected $_name = [
        'clusterId'   => 'ClusterId',
        'clusterName' => 'ClusterName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->clusterName) {
            $res['ClusterName'] = $this->clusterName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ConfigClusterNameRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['ClusterName'])) {
            $model->clusterName = $map['ClusterName'];
        }

        return $model;
    }
}

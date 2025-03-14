<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class CreateHybridProxyClusterRequest extends Model
{
    /**
     * @description The name of the cluster.
     *
     * This parameter is required.
     *
     * @example Chester-Test
     *
     * @var string
     */
    public $clusterName;

    /**
     * @description The endpoint of the cluster.
     * >  You can specify an IP address or a domain name
     *
     * @example 192.168.xx.xx
     *
     * @var string
     */
    public $ip;

    /**
     * @description The description of the cluster.
     *
     * @example remark test
     *
     * @var string
     */
    public $remark;
    protected $_name = [
        'clusterName' => 'ClusterName',
        'ip' => 'Ip',
        'remark' => 'Remark',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterName) {
            $res['ClusterName'] = $this->clusterName;
        }
        if (null !== $this->ip) {
            $res['Ip'] = $this->ip;
        }
        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateHybridProxyClusterRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterName'])) {
            $model->clusterName = $map['ClusterName'];
        }
        if (isset($map['Ip'])) {
            $model->ip = $map['Ip'];
        }
        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }

        return $model;
    }
}

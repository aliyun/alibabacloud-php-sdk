<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class ModifyHybridProxyClusterRequest extends Model
{
    /**
     * @description The name of the proxy cluster.
     *
     * This parameter is required.
     *
     * @example sas-test-cnnf
     *
     * @var string
     */
    public $clusterName;

    /**
     * @description The remarks.
     *
     * This parameter is required.
     *
     * @example test
     *
     * @var string
     */
    public $remark;
    protected $_name = [
        'clusterName' => 'ClusterName',
        'remark' => 'Remark',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterName) {
            $res['ClusterName'] = $this->clusterName;
        }
        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyHybridProxyClusterRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterName'])) {
            $model->clusterName = $map['ClusterName'];
        }
        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }

        return $model;
    }
}

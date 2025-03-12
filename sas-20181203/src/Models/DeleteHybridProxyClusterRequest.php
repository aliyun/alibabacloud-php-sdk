<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DeleteHybridProxyClusterRequest extends Model
{
    /**
     * @description The name of the proxy cluster.
     *
     * This parameter is required.
     * @example proxy
     *
     * @var string
     */
    public $clusterName;
    protected $_name = [
        'clusterName' => 'ClusterName',
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteHybridProxyClusterRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterName'])) {
            $model->clusterName = $map['ClusterName'];
        }

        return $model;
    }
}

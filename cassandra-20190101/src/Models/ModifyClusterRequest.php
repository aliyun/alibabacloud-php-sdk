<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cassandra\V20190101\Models;

use AlibabaCloud\Tea\Model;

class ModifyClusterRequest extends Model
{
    /**
     * @example cds-bp1b136j****5d58
     *
     * @var string
     */
    public $clusterId;

    /**
     * @example Cassandra_test
     *
     * @var string
     */
    public $clusterName;

    /**
     * @var string
     */
    public $confirmProductOffline;
    protected $_name = [
        'clusterId'             => 'ClusterId',
        'clusterName'           => 'ClusterName',
        'confirmProductOffline' => 'ConfirmProductOffline',
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
        if (null !== $this->confirmProductOffline) {
            $res['ConfirmProductOffline'] = $this->confirmProductOffline;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyClusterRequest
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
        if (isset($map['ConfirmProductOffline'])) {
            $model->confirmProductOffline = $map['ConfirmProductOffline'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\ModifyClusterRequest;

use AlibabaCloud\SDK\CS\V20151215\Models\ModifyClusterRequest\operationPolicy\clusterAutoUpgrade;
use AlibabaCloud\Tea\Model;

class operationPolicy extends Model
{
    /**
     * @var clusterAutoUpgrade
     */
    public $clusterAutoUpgrade;
    protected $_name = [
        'clusterAutoUpgrade' => 'cluster_auto_upgrade',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterAutoUpgrade) {
            $res['cluster_auto_upgrade'] = null !== $this->clusterAutoUpgrade ? $this->clusterAutoUpgrade->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return operationPolicy
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['cluster_auto_upgrade'])) {
            $model->clusterAutoUpgrade = clusterAutoUpgrade::fromMap($map['cluster_auto_upgrade']);
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\CreateClusterRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CS\V20151215\Models\CreateClusterRequest\operationPolicy\clusterAutoUpgrade;

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
        if (null !== $this->clusterAutoUpgrade) {
            $this->clusterAutoUpgrade->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clusterAutoUpgrade) {
            $res['cluster_auto_upgrade'] = null !== $this->clusterAutoUpgrade ? $this->clusterAutoUpgrade->toArray($noStream) : $this->clusterAutoUpgrade;
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
        if (isset($map['cluster_auto_upgrade'])) {
            $model->clusterAutoUpgrade = clusterAutoUpgrade::fromMap($map['cluster_auto_upgrade']);
        }

        return $model;
    }
}

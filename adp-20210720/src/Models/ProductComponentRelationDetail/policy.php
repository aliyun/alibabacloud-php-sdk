<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adp\V20210720\Models\ProductComponentRelationDetail;

use AlibabaCloud\SDK\Adp\V20210720\Models\ProductComponentRelationDetail\policy\multiCluster;
use AlibabaCloud\Tea\Model;

class policy extends Model
{
    /**
     * @var multiCluster
     */
    public $multiCluster;
    protected $_name = [
        'multiCluster' => 'multiCluster',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->multiCluster) {
            $res['multiCluster'] = null !== $this->multiCluster ? $this->multiCluster->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return policy
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['multiCluster'])) {
            $model->multiCluster = multiCluster::fromMap($map['multiCluster']);
        }

        return $model;
    }
}

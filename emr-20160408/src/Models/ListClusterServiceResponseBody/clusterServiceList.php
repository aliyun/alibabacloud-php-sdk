<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\ListClusterServiceResponseBody;

use AlibabaCloud\SDK\Emr\V20160408\Models\ListClusterServiceResponseBody\clusterServiceList\clusterService;
use AlibabaCloud\Tea\Model;

class clusterServiceList extends Model
{
    /**
     * @var clusterService[]
     */
    public $clusterService;
    protected $_name = [
        'clusterService' => 'ClusterService',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterService) {
            $res['ClusterService'] = [];
            if (null !== $this->clusterService && \is_array($this->clusterService)) {
                $n = 0;
                foreach ($this->clusterService as $item) {
                    $res['ClusterService'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return clusterServiceList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterService'])) {
            if (!empty($map['ClusterService'])) {
                $model->clusterService = [];
                $n                     = 0;
                foreach ($map['ClusterService'] as $item) {
                    $model->clusterService[$n++] = null !== $item ? clusterService::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\ListClusterOperationHostTaskResponseBody;

use AlibabaCloud\SDK\Emr\V20160408\Models\ListClusterOperationHostTaskResponseBody\clusterOperationHostTaskList\clusterOperationHostTask;
use AlibabaCloud\Tea\Model;

class clusterOperationHostTaskList extends Model
{
    /**
     * @var clusterOperationHostTask[]
     */
    public $clusterOperationHostTask;
    protected $_name = [
        'clusterOperationHostTask' => 'ClusterOperationHostTask',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterOperationHostTask) {
            $res['ClusterOperationHostTask'] = [];
            if (null !== $this->clusterOperationHostTask && \is_array($this->clusterOperationHostTask)) {
                $n = 0;
                foreach ($this->clusterOperationHostTask as $item) {
                    $res['ClusterOperationHostTask'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return clusterOperationHostTaskList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterOperationHostTask'])) {
            if (!empty($map['ClusterOperationHostTask'])) {
                $model->clusterOperationHostTask = [];
                $n                               = 0;
                foreach ($map['ClusterOperationHostTask'] as $item) {
                    $model->clusterOperationHostTask[$n++] = null !== $item ? clusterOperationHostTask::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

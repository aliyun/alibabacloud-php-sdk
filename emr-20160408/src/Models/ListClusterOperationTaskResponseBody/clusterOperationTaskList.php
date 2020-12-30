<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\ListClusterOperationTaskResponseBody;

use AlibabaCloud\SDK\Emr\V20160408\Models\ListClusterOperationTaskResponseBody\clusterOperationTaskList\clusterOperationTask;
use AlibabaCloud\Tea\Model;

class clusterOperationTaskList extends Model
{
    /**
     * @var clusterOperationTask[]
     */
    public $clusterOperationTask;
    protected $_name = [
        'clusterOperationTask' => 'ClusterOperationTask',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterOperationTask) {
            $res['ClusterOperationTask'] = [];
            if (null !== $this->clusterOperationTask && \is_array($this->clusterOperationTask)) {
                $n = 0;
                foreach ($this->clusterOperationTask as $item) {
                    $res['ClusterOperationTask'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return clusterOperationTaskList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterOperationTask'])) {
            if (!empty($map['ClusterOperationTask'])) {
                $model->clusterOperationTask = [];
                $n                           = 0;
                foreach ($map['ClusterOperationTask'] as $item) {
                    $model->clusterOperationTask[$n++] = null !== $item ? clusterOperationTask::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

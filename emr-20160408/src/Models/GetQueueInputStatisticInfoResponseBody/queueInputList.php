<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\GetQueueInputStatisticInfoResponseBody;

use AlibabaCloud\SDK\Emr\V20160408\Models\GetQueueInputStatisticInfoResponseBody\queueInputList\clusterStatQueueInput;
use AlibabaCloud\Tea\Model;

class queueInputList extends Model
{
    /**
     * @var clusterStatQueueInput[]
     */
    public $clusterStatQueueInput;
    protected $_name = [
        'clusterStatQueueInput' => 'ClusterStatQueueInput',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterStatQueueInput) {
            $res['ClusterStatQueueInput'] = [];
            if (null !== $this->clusterStatQueueInput && \is_array($this->clusterStatQueueInput)) {
                $n = 0;
                foreach ($this->clusterStatQueueInput as $item) {
                    $res['ClusterStatQueueInput'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return queueInputList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterStatQueueInput'])) {
            if (!empty($map['ClusterStatQueueInput'])) {
                $model->clusterStatQueueInput = [];
                $n                            = 0;
                foreach ($map['ClusterStatQueueInput'] as $item) {
                    $model->clusterStatQueueInput[$n++] = null !== $item ? clusterStatQueueInput::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

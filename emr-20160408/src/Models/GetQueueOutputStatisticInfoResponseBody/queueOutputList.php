<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\GetQueueOutputStatisticInfoResponseBody;

use AlibabaCloud\SDK\Emr\V20160408\Models\GetQueueOutputStatisticInfoResponseBody\queueOutputList\clusterStatQueueOutput;
use AlibabaCloud\Tea\Model;

class queueOutputList extends Model
{
    /**
     * @var clusterStatQueueOutput[]
     */
    public $clusterStatQueueOutput;
    protected $_name = [
        'clusterStatQueueOutput' => 'ClusterStatQueueOutput',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterStatQueueOutput) {
            $res['ClusterStatQueueOutput'] = [];
            if (null !== $this->clusterStatQueueOutput && \is_array($this->clusterStatQueueOutput)) {
                $n = 0;
                foreach ($this->clusterStatQueueOutput as $item) {
                    $res['ClusterStatQueueOutput'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return queueOutputList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterStatQueueOutput'])) {
            if (!empty($map['ClusterStatQueueOutput'])) {
                $model->clusterStatQueueOutput = [];
                $n                             = 0;
                foreach ($map['ClusterStatQueueOutput'] as $item) {
                    $model->clusterStatQueueOutput[$n++] = null !== $item ? clusterStatQueueOutput::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

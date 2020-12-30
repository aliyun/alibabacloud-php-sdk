<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\GetQueueSubmissionStatisticInfoResponseBody;

use AlibabaCloud\SDK\Emr\V20160408\Models\GetQueueSubmissionStatisticInfoResponseBody\queueSubmissionList\clusterStatQueueSubmission;
use AlibabaCloud\Tea\Model;

class queueSubmissionList extends Model
{
    /**
     * @var clusterStatQueueSubmission[]
     */
    public $clusterStatQueueSubmission;
    protected $_name = [
        'clusterStatQueueSubmission' => 'ClusterStatQueueSubmission',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterStatQueueSubmission) {
            $res['ClusterStatQueueSubmission'] = [];
            if (null !== $this->clusterStatQueueSubmission && \is_array($this->clusterStatQueueSubmission)) {
                $n = 0;
                foreach ($this->clusterStatQueueSubmission as $item) {
                    $res['ClusterStatQueueSubmission'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return queueSubmissionList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterStatQueueSubmission'])) {
            if (!empty($map['ClusterStatQueueSubmission'])) {
                $model->clusterStatQueueSubmission = [];
                $n                                 = 0;
                foreach ($map['ClusterStatQueueSubmission'] as $item) {
                    $model->clusterStatQueueSubmission[$n++] = null !== $item ? clusterStatQueueSubmission::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

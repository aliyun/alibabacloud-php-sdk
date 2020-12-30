<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\GetJobRunningTimeStatisticInfoResponseBody;

use AlibabaCloud\SDK\Emr\V20160408\Models\GetJobRunningTimeStatisticInfoResponseBody\runningTimeList\clusterStatJobRunningTime;
use AlibabaCloud\Tea\Model;

class runningTimeList extends Model
{
    /**
     * @var clusterStatJobRunningTime[]
     */
    public $clusterStatJobRunningTime;
    protected $_name = [
        'clusterStatJobRunningTime' => 'ClusterStatJobRunningTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterStatJobRunningTime) {
            $res['ClusterStatJobRunningTime'] = [];
            if (null !== $this->clusterStatJobRunningTime && \is_array($this->clusterStatJobRunningTime)) {
                $n = 0;
                foreach ($this->clusterStatJobRunningTime as $item) {
                    $res['ClusterStatJobRunningTime'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return runningTimeList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterStatJobRunningTime'])) {
            if (!empty($map['ClusterStatJobRunningTime'])) {
                $model->clusterStatJobRunningTime = [];
                $n                                = 0;
                foreach ($map['ClusterStatJobRunningTime'] as $item) {
                    $model->clusterStatJobRunningTime[$n++] = null !== $item ? clusterStatJobRunningTime::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

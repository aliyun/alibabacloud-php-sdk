<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\ListJobInstanceWorkersResponseBody;

use AlibabaCloud\SDK\Emr\V20160408\Models\ListJobInstanceWorkersResponseBody\jobInstanceWorkers\jobInstanceWorkerInfo;
use AlibabaCloud\Tea\Model;

class jobInstanceWorkers extends Model
{
    /**
     * @var jobInstanceWorkerInfo[]
     */
    public $jobInstanceWorkerInfo;
    protected $_name = [
        'jobInstanceWorkerInfo' => 'JobInstanceWorkerInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->jobInstanceWorkerInfo) {
            $res['JobInstanceWorkerInfo'] = [];
            if (null !== $this->jobInstanceWorkerInfo && \is_array($this->jobInstanceWorkerInfo)) {
                $n = 0;
                foreach ($this->jobInstanceWorkerInfo as $item) {
                    $res['JobInstanceWorkerInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return jobInstanceWorkers
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['JobInstanceWorkerInfo'])) {
            if (!empty($map['JobInstanceWorkerInfo'])) {
                $model->jobInstanceWorkerInfo = [];
                $n                            = 0;
                foreach ($map['JobInstanceWorkerInfo'] as $item) {
                    $model->jobInstanceWorkerInfo[$n++] = null !== $item ? jobInstanceWorkerInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

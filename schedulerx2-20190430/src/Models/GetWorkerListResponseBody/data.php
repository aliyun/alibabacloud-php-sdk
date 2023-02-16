<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Schedulerx2\V20190430\Models\GetWorkerListResponseBody;

use AlibabaCloud\SDK\Schedulerx2\V20190430\Models\GetWorkerListResponseBody\data\workerInfos;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The worker information.
     *
     * @var workerInfos[]
     */
    public $workerInfos;
    protected $_name = [
        'workerInfos' => 'WorkerInfos',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->workerInfos) {
            $res['WorkerInfos'] = [];
            if (null !== $this->workerInfos && \is_array($this->workerInfos)) {
                $n = 0;
                foreach ($this->workerInfos as $item) {
                    $res['WorkerInfos'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['WorkerInfos'])) {
            if (!empty($map['WorkerInfos'])) {
                $model->workerInfos = [];
                $n                  = 0;
                foreach ($map['WorkerInfos'] as $item) {
                    $model->workerInfos[$n++] = null !== $item ? workerInfos::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Schedulerx2\V20190430\Models\GetWorkerListResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Schedulerx2\V20190430\Models\GetWorkerListResponseBody\data\workerInfos;

class data extends Model
{
    /**
     * @var workerInfos[]
     */
    public $workerInfos;
    protected $_name = [
        'workerInfos' => 'WorkerInfos',
    ];

    public function validate()
    {
        if (\is_array($this->workerInfos)) {
            Model::validateArray($this->workerInfos);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->workerInfos) {
            if (\is_array($this->workerInfos)) {
                $res['WorkerInfos'] = [];
                $n1 = 0;
                foreach ($this->workerInfos as $item1) {
                    $res['WorkerInfos'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['WorkerInfos'])) {
            if (!empty($map['WorkerInfos'])) {
                $model->workerInfos = [];
                $n1 = 0;
                foreach ($map['WorkerInfos'] as $item1) {
                    $model->workerInfos[$n1] = workerInfos::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

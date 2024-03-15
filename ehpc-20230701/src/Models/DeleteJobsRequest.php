<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20230701\Models;

use AlibabaCloud\SDK\EHPC\V20230701\Models\DeleteJobsRequest\jobSpec;
use AlibabaCloud\Tea\Model;

class DeleteJobsRequest extends Model
{
    /**
     * @var string[]
     */
    public $executorIds;

    /**
     * @var jobSpec[]
     */
    public $jobSpec;
    protected $_name = [
        'executorIds' => 'ExecutorIds',
        'jobSpec'     => 'JobSpec',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->executorIds) {
            $res['ExecutorIds'] = $this->executorIds;
        }
        if (null !== $this->jobSpec) {
            $res['JobSpec'] = [];
            if (null !== $this->jobSpec && \is_array($this->jobSpec)) {
                $n = 0;
                foreach ($this->jobSpec as $item) {
                    $res['JobSpec'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteJobsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExecutorIds'])) {
            if (!empty($map['ExecutorIds'])) {
                $model->executorIds = $map['ExecutorIds'];
            }
        }
        if (isset($map['JobSpec'])) {
            if (!empty($map['JobSpec'])) {
                $model->jobSpec = [];
                $n              = 0;
                foreach ($map['JobSpec'] as $item) {
                    $model->jobSpec[$n++] = null !== $item ? jobSpec::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

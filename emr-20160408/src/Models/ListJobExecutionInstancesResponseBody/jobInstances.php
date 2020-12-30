<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\ListJobExecutionInstancesResponseBody;

use AlibabaCloud\SDK\Emr\V20160408\Models\ListJobExecutionInstancesResponseBody\jobInstances\jobInstance;
use AlibabaCloud\Tea\Model;

class jobInstances extends Model
{
    /**
     * @var jobInstance[]
     */
    public $jobInstance;
    protected $_name = [
        'jobInstance' => 'JobInstance',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->jobInstance) {
            $res['JobInstance'] = [];
            if (null !== $this->jobInstance && \is_array($this->jobInstance)) {
                $n = 0;
                foreach ($this->jobInstance as $item) {
                    $res['JobInstance'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return jobInstances
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['JobInstance'])) {
            if (!empty($map['JobInstance'])) {
                $model->jobInstance = [];
                $n                  = 0;
                foreach ($map['JobInstance'] as $item) {
                    $model->jobInstance[$n++] = null !== $item ? jobInstance::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

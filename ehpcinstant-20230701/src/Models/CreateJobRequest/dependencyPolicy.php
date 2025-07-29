<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EhpcInstant\V20230701\Models\CreateJobRequest;

use AlibabaCloud\SDK\EhpcInstant\V20230701\Models\CreateJobRequest\dependencyPolicy\jobDependency;
use AlibabaCloud\Tea\Model;

class dependencyPolicy extends Model
{
    /**
     * @var jobDependency[]
     */
    public $jobDependency;
    protected $_name = [
        'jobDependency' => 'JobDependency',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->jobDependency) {
            $res['JobDependency'] = [];
            if (null !== $this->jobDependency && \is_array($this->jobDependency)) {
                $n = 0;
                foreach ($this->jobDependency as $item) {
                    $res['JobDependency'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dependencyPolicy
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['JobDependency'])) {
            if (!empty($map['JobDependency'])) {
                $model->jobDependency = [];
                $n = 0;
                foreach ($map['JobDependency'] as $item) {
                    $model->jobDependency[$n++] = null !== $item ? jobDependency::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

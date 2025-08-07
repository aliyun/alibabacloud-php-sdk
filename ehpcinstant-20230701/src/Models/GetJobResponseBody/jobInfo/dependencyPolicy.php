<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EhpcInstant\V20230701\Models\GetJobResponseBody\jobInfo;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\EhpcInstant\V20230701\Models\GetJobResponseBody\jobInfo\dependencyPolicy\jobDependency;

class dependencyPolicy extends Model
{
    /**
     * @var jobDependency[]
     */
    public $jobDependency;
    protected $_name = [
        'jobDependency' => 'JobDependency',
    ];

    public function validate()
    {
        if (\is_array($this->jobDependency)) {
            Model::validateArray($this->jobDependency);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->jobDependency) {
            if (\is_array($this->jobDependency)) {
                $res['JobDependency'] = [];
                $n1 = 0;
                foreach ($this->jobDependency as $item1) {
                    $res['JobDependency'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['JobDependency'])) {
            if (!empty($map['JobDependency'])) {
                $model->jobDependency = [];
                $n1 = 0;
                foreach ($map['JobDependency'] as $item1) {
                    $model->jobDependency[$n1] = jobDependency::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

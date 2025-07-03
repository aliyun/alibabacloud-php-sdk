<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EhpcInstant\V20230701\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\EhpcInstant\V20230701\Models\DeleteJobsRequest\jobSpec;

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
        'jobSpec' => 'JobSpec',
    ];

    public function validate()
    {
        if (\is_array($this->executorIds)) {
            Model::validateArray($this->executorIds);
        }
        if (\is_array($this->jobSpec)) {
            Model::validateArray($this->jobSpec);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->executorIds) {
            if (\is_array($this->executorIds)) {
                $res['ExecutorIds'] = [];
                $n1 = 0;
                foreach ($this->executorIds as $item1) {
                    $res['ExecutorIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->jobSpec) {
            if (\is_array($this->jobSpec)) {
                $res['JobSpec'] = [];
                $n1 = 0;
                foreach ($this->jobSpec as $item1) {
                    $res['JobSpec'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['ExecutorIds'])) {
            if (!empty($map['ExecutorIds'])) {
                $model->executorIds = [];
                $n1 = 0;
                foreach ($map['ExecutorIds'] as $item1) {
                    $model->executorIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['JobSpec'])) {
            if (!empty($map['JobSpec'])) {
                $model->jobSpec = [];
                $n1 = 0;
                foreach ($map['JobSpec'] as $item1) {
                    $model->jobSpec[$n1] = jobSpec::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

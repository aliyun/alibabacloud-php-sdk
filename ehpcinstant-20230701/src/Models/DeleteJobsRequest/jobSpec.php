<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EhpcInstant\V20230701\Models\DeleteJobsRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\EhpcInstant\V20230701\Models\DeleteJobsRequest\jobSpec\taskSpec;

class jobSpec extends Model
{
    /**
     * @var string
     */
    public $jobId;

    /**
     * @var taskSpec[]
     */
    public $taskSpec;
    protected $_name = [
        'jobId' => 'JobId',
        'taskSpec' => 'TaskSpec',
    ];

    public function validate()
    {
        if (\is_array($this->taskSpec)) {
            Model::validateArray($this->taskSpec);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }

        if (null !== $this->taskSpec) {
            if (\is_array($this->taskSpec)) {
                $res['TaskSpec'] = [];
                $n1 = 0;
                foreach ($this->taskSpec as $item1) {
                    $res['TaskSpec'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }

        if (isset($map['TaskSpec'])) {
            if (!empty($map['TaskSpec'])) {
                $model->taskSpec = [];
                $n1 = 0;
                foreach ($map['TaskSpec'] as $item1) {
                    $model->taskSpec[$n1++] = taskSpec::fromMap($item1);
                }
            }
        }

        return $model;
    }
}

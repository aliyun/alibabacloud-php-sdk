<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EhpcInstant\V20230701\Models\DeleteJobsRequest;

use AlibabaCloud\SDK\EhpcInstant\V20230701\Models\DeleteJobsRequest\jobSpec\taskSpec;
use AlibabaCloud\Tea\Model;

class jobSpec extends Model
{
    /**
     * @example job-xxxx
     *
     * @var string
     */
    public $jobId;

    /**
     * @var taskSpec[]
     */
    public $taskSpec;
    protected $_name = [
        'jobId'    => 'JobId',
        'taskSpec' => 'TaskSpec',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->taskSpec) {
            $res['TaskSpec'] = [];
            if (null !== $this->taskSpec && \is_array($this->taskSpec)) {
                $n = 0;
                foreach ($this->taskSpec as $item) {
                    $res['TaskSpec'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return jobSpec
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['TaskSpec'])) {
            if (!empty($map['TaskSpec'])) {
                $model->taskSpec = [];
                $n               = 0;
                foreach ($map['TaskSpec'] as $item) {
                    $model->taskSpec[$n++] = null !== $item ? taskSpec::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

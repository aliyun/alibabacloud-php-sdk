<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\ListQueueTopJobsResponseBody\queueTopJobs;

use AlibabaCloud\Dara\Model;

class jobs extends Model
{
    /**
     * @var string
     */
    public $cpuCores;

    /**
     * @var string
     */
    public $cu;

    /**
     * @var string
     */
    public $jobId;

    /**
     * @var string
     */
    public $jobType;

    /**
     * @var string
     */
    public $memoryGiB;
    protected $_name = [
        'cpuCores' => 'cpuCores',
        'cu' => 'cu',
        'jobId' => 'jobId',
        'jobType' => 'jobType',
        'memoryGiB' => 'memoryGiB',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cpuCores) {
            $res['cpuCores'] = $this->cpuCores;
        }

        if (null !== $this->cu) {
            $res['cu'] = $this->cu;
        }

        if (null !== $this->jobId) {
            $res['jobId'] = $this->jobId;
        }

        if (null !== $this->jobType) {
            $res['jobType'] = $this->jobType;
        }

        if (null !== $this->memoryGiB) {
            $res['memoryGiB'] = $this->memoryGiB;
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
        if (isset($map['cpuCores'])) {
            $model->cpuCores = $map['cpuCores'];
        }

        if (isset($map['cu'])) {
            $model->cu = $map['cu'];
        }

        if (isset($map['jobId'])) {
            $model->jobId = $map['jobId'];
        }

        if (isset($map['jobType'])) {
            $model->jobType = $map['jobType'];
        }

        if (isset($map['memoryGiB'])) {
            $model->memoryGiB = $map['memoryGiB'];
        }

        return $model;
    }
}

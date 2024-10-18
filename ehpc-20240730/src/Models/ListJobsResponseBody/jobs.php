<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20240730\Models\ListJobsResponseBody;

use AlibabaCloud\SDK\EHPC\V20240730\Models\ListJobsResponseBody\jobs\jobSpec;
use AlibabaCloud\Tea\Model;

class jobs extends Model
{
    /**
     * @description The job name.
     *
     * @example testjob
     *
     * @var string
     */
    public $jobName;

    /**
     * @description The job configurations.
     *
     * @var jobSpec
     */
    public $jobSpec;
    protected $_name = [
        'jobName' => 'JobName',
        'jobSpec' => 'JobSpec',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->jobName) {
            $res['JobName'] = $this->jobName;
        }
        if (null !== $this->jobSpec) {
            $res['JobSpec'] = null !== $this->jobSpec ? $this->jobSpec->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return jobs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['JobName'])) {
            $model->jobName = $map['JobName'];
        }
        if (isset($map['JobSpec'])) {
            $model->jobSpec = jobSpec::fromMap($map['JobSpec']);
        }

        return $model;
    }
}

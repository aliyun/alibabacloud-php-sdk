<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20240730\Models\ListJobsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\EHPC\V20240730\Models\ListJobsResponseBody\jobs\jobSpec;

class jobs extends Model
{
    /**
     * @var string
     */
    public $jobName;
    /**
     * @var jobSpec
     */
    public $jobSpec;
    protected $_name = [
        'jobName' => 'JobName',
        'jobSpec' => 'JobSpec',
    ];

    public function validate()
    {
        if (null !== $this->jobSpec) {
            $this->jobSpec->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->jobName) {
            $res['JobName'] = $this->jobName;
        }

        if (null !== $this->jobSpec) {
            $res['JobSpec'] = null !== $this->jobSpec ? $this->jobSpec->toArray($noStream) : $this->jobSpec;
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
        if (isset($map['JobName'])) {
            $model->jobName = $map['JobName'];
        }

        if (isset($map['JobSpec'])) {
            $model->jobSpec = jobSpec::fromMap($map['JobSpec']);
        }

        return $model;
    }
}

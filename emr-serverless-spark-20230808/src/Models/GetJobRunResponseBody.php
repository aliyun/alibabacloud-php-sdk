<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\GetJobRunResponseBody\jobRun;

class GetJobRunResponseBody extends Model
{
    /**
     * @var jobRun
     */
    public $jobRun;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'jobRun' => 'jobRun',
        'requestId' => 'requestId',
    ];

    public function validate()
    {
        if (null !== $this->jobRun) {
            $this->jobRun->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->jobRun) {
            $res['jobRun'] = null !== $this->jobRun ? $this->jobRun->toArray($noStream) : $this->jobRun;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
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
        if (isset($map['jobRun'])) {
            $model->jobRun = jobRun::fromMap($map['jobRun']);
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        return $model;
    }
}

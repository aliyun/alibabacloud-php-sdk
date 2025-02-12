<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EhpcInstant\V20230701\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\EhpcInstant\V20230701\Models\GetJobResponseBody\jobInfo;

class GetJobResponseBody extends Model
{
    /**
     * @var jobInfo
     */
    public $jobInfo;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'jobInfo'   => 'JobInfo',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->jobInfo) {
            $this->jobInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->jobInfo) {
            $res['JobInfo'] = null !== $this->jobInfo ? $this->jobInfo->toArray($noStream) : $this->jobInfo;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['JobInfo'])) {
            $model->jobInfo = jobInfo::fromMap($map['JobInfo']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

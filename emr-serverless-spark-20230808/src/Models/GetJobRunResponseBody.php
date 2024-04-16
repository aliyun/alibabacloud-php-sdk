<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models;

use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\GetJobRunResponseBody\jobRun;
use AlibabaCloud\Tea\Model;

class GetJobRunResponseBody extends Model
{
    /**
     * @var jobRun
     */
    public $jobRun;

    /**
     * @description 请求ID。
     *
     * @example DD6B1B2A-5837-5237-ABE4-FF0C8944****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'jobRun'    => 'jobRun',
        'requestId' => 'requestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->jobRun) {
            $res['jobRun'] = null !== $this->jobRun ? $this->jobRun->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetJobRunResponseBody
     */
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

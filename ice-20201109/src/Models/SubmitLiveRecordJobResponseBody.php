<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class SubmitLiveRecordJobResponseBody extends Model
{
    /**
     * @description The ID of the recording job.
     *
     * @example ab0e3e76-1e9d-11ed-ba64-0c42a1b73d66
     *
     * @var string
     */
    public $jobId;

    /**
     * @description The request ID.
     *
     * @example BEA98A0C-7870-15FE-B96F-8880BB600A2C
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'jobId' => 'JobId',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SubmitLiveRecordJobResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

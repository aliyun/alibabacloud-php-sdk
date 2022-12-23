<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\SDK\Vod\V20170321\Models\SubmitDynamicImageJobResponseBody\dynamicImageJob;
use AlibabaCloud\Tea\Model;

class SubmitDynamicImageJobResponseBody extends Model
{
    /**
     * @description The information about the animated image job.
     *
     * @var dynamicImageJob
     */
    public $dynamicImageJob;

    /**
     * @description The ID of the request.
     *
     * @example 25818875-5F78-74A6-BEF6-D7393642****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'dynamicImageJob' => 'DynamicImageJob',
        'requestId'       => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dynamicImageJob) {
            $res['DynamicImageJob'] = null !== $this->dynamicImageJob ? $this->dynamicImageJob->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SubmitDynamicImageJobResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DynamicImageJob'])) {
            $model->dynamicImageJob = dynamicImageJob::fromMap($map['DynamicImageJob']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

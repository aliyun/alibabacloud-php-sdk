<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\SDK\Vod\V20170321\Models\SubmitDynamicImageJobResponseBody\dynamicImageJob;
use AlibabaCloud\Tea\Model;

class SubmitDynamicImageJobResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var dynamicImageJob
     */
    public $dynamicImageJob;
    protected $_name = [
        'requestId'       => 'RequestId',
        'dynamicImageJob' => 'DynamicImageJob',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->dynamicImageJob) {
            $res['DynamicImageJob'] = null !== $this->dynamicImageJob ? $this->dynamicImageJob->toMap() : null;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['DynamicImageJob'])) {
            $model->dynamicImageJob = dynamicImageJob::fromMap($map['DynamicImageJob']);
        }

        return $model;
    }
}

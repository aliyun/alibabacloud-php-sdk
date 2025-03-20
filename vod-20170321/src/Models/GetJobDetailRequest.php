<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class GetJobDetailRequest extends Model
{
    /**
     * @description The ID of the task.
     *
     * This parameter is required.
     *
     * @example 5c9dff***************59d50a967f5
     *
     * @var string
     */
    public $jobId;

    /**
     * @description The task type. Valid values:
     *
     *   transcode
     *   snapshot
     *   ai
     *
     * This parameter is required.
     *
     * @example transcode
     *
     * @var string
     */
    public $jobType;
    protected $_name = [
        'jobId' => 'JobId',
        'jobType' => 'JobType',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->jobType) {
            $res['JobType'] = $this->jobType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetJobDetailRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['JobType'])) {
            $model->jobType = $map['JobType'];
        }

        return $model;
    }
}

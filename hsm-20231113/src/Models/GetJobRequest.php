<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hsm\V20231113\Models;

use AlibabaCloud\Tea\Model;

class GetJobRequest extends Model
{
    /**
     * @description The ID of the task.
     *
     * This parameter is required.
     *
     * @example job-202401250936hze747fd7e0007005
     *
     * @var string
     */
    public $jobId;
    protected $_name = [
        'jobId' => 'JobId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetJobRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }

        return $model;
    }
}

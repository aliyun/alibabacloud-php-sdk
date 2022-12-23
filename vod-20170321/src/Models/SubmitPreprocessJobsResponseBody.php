<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\SDK\Vod\V20170321\Models\SubmitPreprocessJobsResponseBody\preprocessJobs;
use AlibabaCloud\Tea\Model;

class SubmitPreprocessJobsResponseBody extends Model
{
    /**
     * @description The job information.
     *
     * @var preprocessJobs
     */
    public $preprocessJobs;

    /**
     * @description The ID of the request.
     *
     * @example E4EBD2BF-5EB0-4476-8829-9D94E1B1****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'preprocessJobs' => 'PreprocessJobs',
        'requestId'      => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->preprocessJobs) {
            $res['PreprocessJobs'] = null !== $this->preprocessJobs ? $this->preprocessJobs->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SubmitPreprocessJobsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PreprocessJobs'])) {
            $model->preprocessJobs = preprocessJobs::fromMap($map['PreprocessJobs']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

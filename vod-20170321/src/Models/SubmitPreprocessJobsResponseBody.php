<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\SDK\Vod\V20170321\Models\SubmitPreprocessJobsResponseBody\preprocessJobs;
use AlibabaCloud\Tea\Model;

class SubmitPreprocessJobsResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var preprocessJobs
     */
    public $preprocessJobs;
    protected $_name = [
        'requestId'      => 'RequestId',
        'preprocessJobs' => 'PreprocessJobs',
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
        if (null !== $this->preprocessJobs) {
            $res['PreprocessJobs'] = null !== $this->preprocessJobs ? $this->preprocessJobs->toMap() : null;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['PreprocessJobs'])) {
            $model->preprocessJobs = preprocessJobs::fromMap($map['PreprocessJobs']);
        }

        return $model;
    }
}

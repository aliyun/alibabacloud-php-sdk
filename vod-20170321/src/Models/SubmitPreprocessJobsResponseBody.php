<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vod\V20170321\Models\SubmitPreprocessJobsResponseBody\preprocessJobs;

class SubmitPreprocessJobsResponseBody extends Model
{
    /**
     * @var preprocessJobs
     */
    public $preprocessJobs;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'preprocessJobs' => 'PreprocessJobs',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->preprocessJobs) {
            $this->preprocessJobs->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->preprocessJobs) {
            $res['PreprocessJobs'] = null !== $this->preprocessJobs ? $this->preprocessJobs->toArray($noStream) : $this->preprocessJobs;
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
        if (isset($map['PreprocessJobs'])) {
            $model->preprocessJobs = preprocessJobs::fromMap($map['PreprocessJobs']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

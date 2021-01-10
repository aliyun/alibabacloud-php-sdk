<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models;

use AlibabaCloud\SDK\Mts\V20140618\Models\SubmitImageQualityJobResponseBody\imageQualityJob;
use AlibabaCloud\Tea\Model;

class SubmitImageQualityJobResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var imageQualityJob
     */
    public $imageQualityJob;
    protected $_name = [
        'requestId'       => 'RequestId',
        'imageQualityJob' => 'ImageQualityJob',
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
        if (null !== $this->imageQualityJob) {
            $res['ImageQualityJob'] = null !== $this->imageQualityJob ? $this->imageQualityJob->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SubmitImageQualityJobResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ImageQualityJob'])) {
            $model->imageQualityJob = imageQualityJob::fromMap($map['ImageQualityJob']);
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models;

use AlibabaCloud\SDK\Mts\V20140618\Models\SubmitImageQualityJobResponseBody\imageQualityJob;
use AlibabaCloud\Tea\Model;

class SubmitImageQualityJobResponseBody extends Model
{
    /**
     * @var imageQualityJob
     */
    public $imageQualityJob;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'imageQualityJob' => 'ImageQualityJob',
        'requestId'       => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->imageQualityJob) {
            $res['ImageQualityJob'] = null !== $this->imageQualityJob ? $this->imageQualityJob->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['ImageQualityJob'])) {
            $model->imageQualityJob = imageQualityJob::fromMap($map['ImageQualityJob']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

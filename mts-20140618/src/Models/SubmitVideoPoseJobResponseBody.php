<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models;

use AlibabaCloud\SDK\Mts\V20140618\Models\SubmitVideoPoseJobResponseBody\videoPoseJob;
use AlibabaCloud\Tea\Model;

class SubmitVideoPoseJobResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var videoPoseJob
     */
    public $videoPoseJob;
    protected $_name = [
        'requestId'    => 'RequestId',
        'videoPoseJob' => 'VideoPoseJob',
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
        if (null !== $this->videoPoseJob) {
            $res['VideoPoseJob'] = null !== $this->videoPoseJob ? $this->videoPoseJob->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SubmitVideoPoseJobResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['VideoPoseJob'])) {
            $model->videoPoseJob = videoPoseJob::fromMap($map['VideoPoseJob']);
        }

        return $model;
    }
}

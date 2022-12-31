<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitMediaInfoJobResponseBody\mediaInfoJob;
use AlibabaCloud\Tea\Model;

class SubmitMediaInfoJobResponseBody extends Model
{
    /**
     * @description MediaInfoJobDTO
     *
     * @var mediaInfoJob
     */
    public $mediaInfoJob;

    /**
     * @example 31E30781-9495-5E2D-A84D-759B0A01E262
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'mediaInfoJob' => 'MediaInfoJob',
        'requestId'    => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->mediaInfoJob) {
            $res['MediaInfoJob'] = null !== $this->mediaInfoJob ? $this->mediaInfoJob->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SubmitMediaInfoJobResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MediaInfoJob'])) {
            $model->mediaInfoJob = mediaInfoJob::fromMap($map['MediaInfoJob']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

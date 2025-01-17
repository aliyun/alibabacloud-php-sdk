<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitSyncMediaInfoJobResponseBody\mediaInfoJob;

class SubmitSyncMediaInfoJobResponseBody extends Model
{
    /**
     * @var mediaInfoJob
     */
    public $mediaInfoJob;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'mediaInfoJob' => 'MediaInfoJob',
        'requestId'    => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->mediaInfoJob) {
            $this->mediaInfoJob->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->mediaInfoJob) {
            $res['MediaInfoJob'] = null !== $this->mediaInfoJob ? $this->mediaInfoJob->toArray($noStream) : $this->mediaInfoJob;
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
        if (isset($map['MediaInfoJob'])) {
            $model->mediaInfoJob = mediaInfoJob::fromMap($map['MediaInfoJob']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

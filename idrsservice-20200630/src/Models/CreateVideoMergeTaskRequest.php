<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Idrsservice\V20200630\Models;

use AlibabaCloud\SDK\Idrsservice\V20200630\Models\CreateVideoMergeTaskRequest\videoMergeRequest;
use AlibabaCloud\Tea\Model;

class CreateVideoMergeTaskRequest extends Model
{
    /**
     * @var videoMergeRequest
     */
    public $videoMergeRequest;
    protected $_name = [
        'videoMergeRequest' => 'VideoMergeRequest',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->videoMergeRequest) {
            $res['VideoMergeRequest'] = null !== $this->videoMergeRequest ? $this->videoMergeRequest->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateVideoMergeTaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['VideoMergeRequest'])) {
            $model->videoMergeRequest = videoMergeRequest::fromMap($map['VideoMergeRequest']);
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\StartLiveMPUTaskRequest;

use AlibabaCloud\Tea\Model;

class singleSubParams extends Model
{
    /**
     * @description The type of the video source. This parameter is valid only when you set StreamType to 2. Valid values:
     *
     *   **camera** (default)
     *   **shareScreen**
     *
     * @example camera
     *
     * @var string
     */
    public $sourceType;

    /**
     * @description The type of the stream that you want to relay. Valid values:
     *
     *   **0** (default): original stream
     *   **1**: only the audio track
     *   **2**: only the video track
     *
     * @example 0
     *
     * @var string
     */
    public $streamType;

    /**
     * @description The user ID. In the single-stream relay mode, you can relay only one stream in a request.
     *
     * This parameter is required.
     *
     * @example yourSubUserId
     *
     * @var string
     */
    public $userId;
    protected $_name = [
        'sourceType' => 'SourceType',
        'streamType' => 'StreamType',
        'userId' => 'UserId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->sourceType) {
            $res['SourceType'] = $this->sourceType;
        }
        if (null !== $this->streamType) {
            $res['StreamType'] = $this->streamType;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return singleSubParams
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SourceType'])) {
            $model->sourceType = $map['SourceType'];
        }
        if (isset($map['StreamType'])) {
            $model->streamType = $map['StreamType'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}

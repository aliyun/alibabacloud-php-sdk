<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\StartRtcCloudRecordingRequest\subscribeParams;

use AlibabaCloud\Tea\Model;

class subscribeUserIdList extends Model
{
    /**
     * @example 0
     *
     * @var int
     */
    public $sourceType;

    /**
     * @example 0
     *
     * @var int
     */
    public $streamType;

    /**
     * @description This parameter is required.
     *
     * @example userA
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
     * @return subscribeUserIdList
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

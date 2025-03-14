<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\SDK\ICE\V20201109\Models\CreateLivePackageChannelGroupResponseBody\livePackageChannelGroup;
use AlibabaCloud\Tea\Model;

class CreateLivePackageChannelGroupResponseBody extends Model
{
    /**
     * @description The information about the channel group.
     *
     * @var livePackageChannelGroup
     */
    public $livePackageChannelGroup;

    /**
     * @description The request ID.
     *
     * @example 123e4567-e89b-12d3-a456-426614174000
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'livePackageChannelGroup' => 'LivePackageChannelGroup',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->livePackageChannelGroup) {
            $res['LivePackageChannelGroup'] = null !== $this->livePackageChannelGroup ? $this->livePackageChannelGroup->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateLivePackageChannelGroupResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LivePackageChannelGroup'])) {
            $model->livePackageChannelGroup = livePackageChannelGroup::fromMap($map['LivePackageChannelGroup']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

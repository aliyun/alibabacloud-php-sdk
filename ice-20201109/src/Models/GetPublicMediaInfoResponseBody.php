<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\SDK\ICE\V20201109\Models\GetPublicMediaInfoResponseBody\mediaInfo;
use AlibabaCloud\Tea\Model;

class GetPublicMediaInfoResponseBody extends Model
{
    /**
     * @var mediaInfo
     */
    public $mediaInfo;

    /**
     * @description RequestId
     *
     * @example ******11-DB8D-4A9A-875B-275798******
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'mediaInfo' => 'MediaInfo',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->mediaInfo) {
            $res['MediaInfo'] = null !== $this->mediaInfo ? $this->mediaInfo->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetPublicMediaInfoResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MediaInfo'])) {
            $model->mediaInfo = mediaInfo::fromMap($map['MediaInfo']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

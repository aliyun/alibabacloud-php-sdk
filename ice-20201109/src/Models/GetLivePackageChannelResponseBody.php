<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\SDK\ICE\V20201109\Models\GetLivePackageChannelResponseBody\livePackageChannel;
use AlibabaCloud\Tea\Model;

class GetLivePackageChannelResponseBody extends Model
{
    /**
     * @description Details of the live package channel.
     *
     * @var livePackageChannel
     */
    public $livePackageChannel;

    /**
     * @description The request ID.
     *
     * @example RequestId-12345678
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'livePackageChannel' => 'LivePackageChannel',
        'requestId'          => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->livePackageChannel) {
            $res['LivePackageChannel'] = null !== $this->livePackageChannel ? $this->livePackageChannel->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetLivePackageChannelResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LivePackageChannel'])) {
            $model->livePackageChannel = livePackageChannel::fromMap($map['LivePackageChannel']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

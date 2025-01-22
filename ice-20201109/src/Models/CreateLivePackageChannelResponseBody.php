<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ICE\V20201109\Models\CreateLivePackageChannelResponseBody\livePackageChannel;

class CreateLivePackageChannelResponseBody extends Model
{
    /**
     * @var livePackageChannel
     */
    public $livePackageChannel;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'livePackageChannel' => 'LivePackageChannel',
        'requestId'          => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->livePackageChannel) {
            $this->livePackageChannel->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->livePackageChannel) {
            $res['LivePackageChannel'] = null !== $this->livePackageChannel ? $this->livePackageChannel->toArray($noStream) : $this->livePackageChannel;
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
        if (isset($map['LivePackageChannel'])) {
            $model->livePackageChannel = livePackageChannel::fromMap($map['LivePackageChannel']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

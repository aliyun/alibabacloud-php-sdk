<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ICE\V20201109\Models\CreateLivePackageChannelGroupResponseBody\livePackageChannelGroup;

class CreateLivePackageChannelGroupResponseBody extends Model
{
    /**
     * @var livePackageChannelGroup
     */
    public $livePackageChannelGroup;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'livePackageChannelGroup' => 'LivePackageChannelGroup',
        'requestId'               => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->livePackageChannelGroup) {
            $this->livePackageChannelGroup->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->livePackageChannelGroup) {
            $res['LivePackageChannelGroup'] = null !== $this->livePackageChannelGroup ? $this->livePackageChannelGroup->toArray($noStream) : $this->livePackageChannelGroup;
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
        if (isset($map['LivePackageChannelGroup'])) {
            $model->livePackageChannelGroup = livePackageChannelGroup::fromMap($map['LivePackageChannelGroup']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

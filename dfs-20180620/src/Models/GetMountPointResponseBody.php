<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DFS\V20180620\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\DFS\V20180620\Models\GetMountPointResponseBody\mountPoint;

class GetMountPointResponseBody extends Model
{
    /**
     * @var mountPoint
     */
    public $mountPoint;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'mountPoint' => 'MountPoint',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->mountPoint) {
            $this->mountPoint->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->mountPoint) {
            $res['MountPoint'] = null !== $this->mountPoint ? $this->mountPoint->toArray($noStream) : $this->mountPoint;
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
        if (isset($map['MountPoint'])) {
            $model->mountPoint = mountPoint::fromMap($map['MountPoint']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

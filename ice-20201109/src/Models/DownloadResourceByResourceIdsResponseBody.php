<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class DownloadResourceByResourceIdsResponseBody extends Model
{
    /**
     * @var int
     */
    public $expireTime;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $resourcePackageUrl;
    protected $_name = [
        'expireTime'         => 'ExpireTime',
        'requestId'          => 'RequestId',
        'resourcePackageUrl' => 'ResourcePackageUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->resourcePackageUrl) {
            $res['ResourcePackageUrl'] = $this->resourcePackageUrl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DownloadResourceByResourceIdsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ResourcePackageUrl'])) {
            $model->resourcePackageUrl = $map['ResourcePackageUrl'];
        }

        return $model;
    }
}

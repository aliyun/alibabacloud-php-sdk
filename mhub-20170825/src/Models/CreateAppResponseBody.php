<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mhub\V20170825\Models;

use AlibabaCloud\SDK\Mhub\V20170825\Models\CreateAppResponseBody\appInfo;
use AlibabaCloud\Tea\Model;

class CreateAppResponseBody extends Model
{
    /**
     * @var appInfo
     */
    public $appInfo;

    /**
     * @example 126D4DDD-05A5-49B1-B18C-39C4A929****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'appInfo' => 'AppInfo',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->appInfo) {
            $res['AppInfo'] = null !== $this->appInfo ? $this->appInfo->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateAppResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppInfo'])) {
            $model->appInfo = appInfo::fromMap($map['AppInfo']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

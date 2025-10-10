<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mhub\V20170825\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Mhub\V20170825\Models\QueryAppInfoResponseBody\appInfo;

class QueryAppInfoResponseBody extends Model
{
    /**
     * @var appInfo
     */
    public $appInfo;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'appInfo' => 'AppInfo',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->appInfo) {
            $this->appInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appInfo) {
            $res['AppInfo'] = null !== $this->appInfo ? $this->appInfo->toArray($noStream) : $this->appInfo;
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
        if (isset($map['AppInfo'])) {
            $model->appInfo = appInfo::fromMap($map['AppInfo']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

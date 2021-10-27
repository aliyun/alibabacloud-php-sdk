<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20190307\Models;

use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DescribeUpdatePackageResultResponseBody\appInfo;
use AlibabaCloud\Tea\Model;

class DescribeUpdatePackageResultResponseBody extends Model
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
        'appInfo'   => 'AppInfo',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

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
     * @return DescribeUpdatePackageResultResponseBody
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

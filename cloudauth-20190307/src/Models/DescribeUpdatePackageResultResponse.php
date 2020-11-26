<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20190307\Models;

use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DescribeUpdatePackageResultResponse\appInfo;
use AlibabaCloud\Tea\Model;

class DescribeUpdatePackageResultResponse extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var appInfo
     */
    public $appInfo;
    protected $_name = [
        'requestId' => 'RequestId',
        'appInfo'   => 'AppInfo',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('appInfo', $this->appInfo, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->appInfo) {
            $res['AppInfo'] = null !== $this->appInfo ? $this->appInfo->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeUpdatePackageResultResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['AppInfo'])) {
            $model->appInfo = appInfo::fromMap($map['AppInfo']);
        }

        return $model;
    }
}

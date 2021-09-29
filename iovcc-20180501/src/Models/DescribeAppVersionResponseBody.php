<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models;

use AlibabaCloud\SDK\Iovcc\V20180501\Models\DescribeAppVersionResponseBody\appVersion;
use AlibabaCloud\Tea\Model;

class DescribeAppVersionResponseBody extends Model
{
    /**
     * @var appVersion
     */
    public $appVersion;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'appVersion' => 'AppVersion',
        'requestId'  => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appVersion) {
            $res['AppVersion'] = null !== $this->appVersion ? $this->appVersion->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeAppVersionResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppVersion'])) {
            $model->appVersion = appVersion::fromMap($map['AppVersion']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

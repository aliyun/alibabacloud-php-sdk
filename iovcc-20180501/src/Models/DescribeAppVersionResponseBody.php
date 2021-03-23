<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models;

use AlibabaCloud\SDK\Iovcc\V20180501\Models\DescribeAppVersionResponseBody\appVersion;
use AlibabaCloud\Tea\Model;

class DescribeAppVersionResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var appVersion
     */
    public $appVersion;
    protected $_name = [
        'requestId'  => 'RequestId',
        'appVersion' => 'AppVersion',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->appVersion) {
            $res['AppVersion'] = null !== $this->appVersion ? $this->appVersion->toMap() : null;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['AppVersion'])) {
            $model->appVersion = appVersion::fromMap($map['AppVersion']);
        }

        return $model;
    }
}

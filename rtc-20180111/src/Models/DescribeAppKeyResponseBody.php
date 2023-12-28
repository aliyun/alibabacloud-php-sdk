<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models;

use AlibabaCloud\Tea\Model;

class DescribeAppKeyResponseBody extends Model
{
    /**
     * @description AppKey。
     *
     * @example ba133b2cee4ab9be424674892c33****
     *
     * @var string
     */
    public $appKey;

    /**
     * @example 154EF5DE-3D08-1F2C-A482-281F78D74B7C
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'appKey'    => 'AppKey',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appKey) {
            $res['AppKey'] = $this->appKey;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeAppKeyResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppKey'])) {
            $model->appKey = $map['AppKey'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

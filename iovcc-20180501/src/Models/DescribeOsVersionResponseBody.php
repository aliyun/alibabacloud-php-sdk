<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models;

use AlibabaCloud\SDK\Iovcc\V20180501\Models\DescribeOsVersionResponseBody\osVersion;
use AlibabaCloud\Tea\Model;

class DescribeOsVersionResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var osVersion
     */
    public $osVersion;
    protected $_name = [
        'requestId' => 'RequestId',
        'osVersion' => 'OsVersion',
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
        if (null !== $this->osVersion) {
            $res['OsVersion'] = null !== $this->osVersion ? $this->osVersion->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeOsVersionResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['OsVersion'])) {
            $model->osVersion = osVersion::fromMap($map['OsVersion']);
        }

        return $model;
    }
}
